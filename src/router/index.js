import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import Login from '@/components/Login.vue'
import Register from '@/components/Register.vue'
import Tab1 from '@/components/Tab1.vue'
import Tab2 from '@/components/Tab2.vue'
import store from '../store'
import baseApi from '@/baseApi'

Vue.use(Router)

const Middleware = () => {
  return async (to, from, next) => {
    const user = store.getters.GET_AUTH_USER;
    let myRole = user.role;
    const auth = store.getters.GET_AUTH;
    const isRequiredAuth = to.matched.some(r=>r.meta.requiredAuth);
    const hasRoles = to.matched.some(r=>r.meta.userRoles);
    if (isRequiredAuth && localStorage.getItem('token') === null) {
      return next('/login');
    }
    if (hasRoles) {
      let arrayRoles = to.meta.userRoles;
      if (auth === false) {
        const response = await baseApi().get('/user');
        if(!response.data.error) {
          store.dispatch('SET_AUTH_USER', response.data.user.user);
          store.dispatch('SET_TOKEN', response.data.user.token);
          store.dispatch('SET_AUTH', true);
          localStorage.setItem('token', response.data.user.token.value);
          myRole = response.data.user.user.role;
        }
      }
      if (arrayRoles.indexOf(parseInt(myRole)) === -1) {
        console.log('not allowed');
        return next(false);
      }
    }
    next();
  }
}

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/login',
      name: 'login',
      component: Login
    },
    {
      path: '/register',
      name: 'register',
      component: Register
    },
    {
      path: '/tab1',
      name: 'tab1',
      component: Tab1,
      meta: {
        requiredAuth:true,
        userRoles: [0,1,2]
      },
      beforeEnter: Middleware()
    },
    {
      path: '/tab2',
      name: 'tab2',
      component: Tab2,
      meta: {
        requiredAuth:true,
        userRoles: [0,2,3]
      },
      beforeEnter: Middleware()
    }
  ]
})
