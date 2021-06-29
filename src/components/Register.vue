<template>
  <div id="app" class="h-auto w-24 md:w-auto">
          <p class="text-xl">Register</p>
    <div class="w-full max-w-xs mx-auto mt-20">
    <form class="bg-gray-100 shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
          Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Name" v-model="cred.name">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
          Email
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email" v-model="cred.email">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="role">
          Role
        </label>
        <p>1. Normal User</p>
        <p>2. Admin</p>
        
        <div class="relative">
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" v-model="cred.role" id="role" aria-placeholder="Choose Role">
                <option value="1">1</option>
                <option value="2">2</option>
                <!-- <option value="3">3</option> -->
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
          Password
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter Password" v-model="cred.password">
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                type="submit"
                @click="submit">
          Save
        </button>
        
      </div>
    </form>
    </div>
  </div>
</template>

<script>
    import auth from '@/auth'
    export default {
        name: 'Register',
        data () {
            return {
                cred: {
                    name: '',
                    email: '',
                    role: '',
                    password: ''
                }
            }
        },
        methods: {
            submit() {
                auth.Register(this.cred, '/login');
            }
        }
    }
</script>