<template>
    <div class="container mx-auto bg-gray-200 max-w-full">
        <!-- <h1 class="text-4xl text-gray-900">COVID-19 Patient Records</h1> -->
        
        <!-- All Cards to Display Patitent details -->
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-4xl text-4xl font-medium title-font mb-4 text-gray-900">COVID-19 Patient Records</h1>
                <!-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.</p> -->
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
                        <!-- <hr>
                        <button @click="deletePost(post.id)" class="mt-5 bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded-full">Delete Record</button> -->
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
            }
        }
    }

</script>
