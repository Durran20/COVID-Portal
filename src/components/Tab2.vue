<template>
    <div class="container mx-auto bg-gray-200 max-w-full">
        
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-4xl text-4xl font-medium title-font mb-4 text-gray-900">Add New Records</h1>
                </div>
                <div class="flex flex-wrap -m-2">
                    

                <!-- FORM -->
                <form @submit.prevent="addPost" class="mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="full-name">
                        Full Name
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" v-model="post.name" placeholder="Enter your full name">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Aadhar Card Number: 
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" v-model="post.aadhar" placeholder="Enter the 12 digit number">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Full Address
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" v-model="post.address" placeholder="Enter your address">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        Date Of Birth
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="date" v-model="post.dob" placeholder="dd/mm/yyyy">
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Result
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" v-model="post.result" id="grid-state">
                        <option>Not Tested</option>
                        <option>Negative</option>
                        <option>Positive</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        Age
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="number" v-model="post.age" placeholder="Enter your age">
                    </div>
                </div>
                <button type="submit" class="mt-5 bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full">Save Record</button>
                </form>


                <!-- All Records -->
                <div class="flex flex-col text-center w-full mb-20">
                <h1 class="mt-10 sm:text-4xl text-4xl font-medium title-font mb-4 text-gray-900">Records</h1>
                </div>
                <div class="flex flex-wrap -m-2">
                <div v-for="post in posts" v-bind:key="post.id" class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-white border-gray-200 border p-4 rounded-lg shadow-2xl">
                    <div class="flex-grow">
                        <h2 class="text-gray-900 title-font font-bold text-lg">I.D. {{ post.id }}</h2>
                        <h2 class="text-gray-900 title-font font-bold text-lg">Name: {{ post.name }}</h2>
                        <p class="text-gray-500"><span class="font-bold">Age:</span> {{ post.age }}</p>
                        <p class="text-gray-500"><span class="font-bold">D. O. B.:</span> {{ post.dob }}</p>
                        <p class="text-gray-500"><span class="font-bold">Aadhar No.:</span> {{ post.aadhar }}</p>
                        <p class="text-gray-500"><span class="font-bold">Address:</span> {{ post.address }}</p>
                        <p class="text-gray-500"><span class="font-bold">Test Result:</span> {{ post.result }}</p>
                        <hr>
                        <button @click="deletePost(post.id)" class="mt-5 bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded-full">Delete Record</button>
                    </div>
                    </div>
                </div>
                </div>



                </div>
            </div>
        </section>

    </div>
</template>


<script>

    export default {
        data() {
            return {
                posts: [],
                post: {
                    id: '',
                    name: '',
                    age: '',
                    dob: '',
                    aadhar: '',
                    address: '',
                    result: ''
                },
                article_id: '',
                pagination: {},
                edit: false
            }
        },
        // Created method runs automatically when the page loads
        created() {
            this.fetchPosts();
        },
        methods: {
            fetchPosts() {
                fetch('http://lumen.test/api/posts')
                    .then(res => res.json())
                    .then(res => {
                        // console.log(res.data);
                        this.posts = res.data;
                    })
            },
            deletePost(id) {
                if(confirm('Are You Sure?')) {
                    fetch(`http://lumen.test/api/posts/${id}`, {
                        method: 'delete'
                    })
                    .then(res => res.json())
                    .then(data => {
                        alert('Record Removed');
                        this.fetchPosts();
                    })
                    .catch(err => console.log(err));
                }
            },
            addPost() {
                if(this.edit === false) {
                    // Add
                    fetch('http://lumen.test/api/posts', {
                        method: 'post',
                        body: JSON.stringify(this.post),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.post.name = '';
                        this.post.age = '';
                        this.post.dob = '';
                        this.post.aadhar = '';
                        this.post.address = '';
                        this.post.result = '';
                        alert('Article Added');
                        this.fetchPosts();
                    })
                    .catch(err => console.log(err));
                } else {
                    // Update
                }
            }
        }
    }

</script>