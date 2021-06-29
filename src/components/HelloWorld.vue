<template>
  <div class="hello bg-blue-200">
    <!-- <h1 class="text-3xl">{{ msg }}</h1> -->
    
      <div class="md:flex justify-between py-20 px-10 bg-blue-200 text-indigo-100">
        
        <!--   left -->
        <div class="md:w-1/2 mb-10 md:mb-0">
          <h2 class="text-2xl md:text-4xl lg:text-6xl text-gray-900 mb-6">Welcome to {{ msg }}</h2>
          <!-- <p class="mb-6 text-gray-900">There is never a sad day here!</p> -->

          <a href="#" class="inline-block py-3 px-6 text-lg bg-gray-900 text-gray-50 hover:bg-gray-500 rounded mr-2">Learn More</a>
          <a href="#" class="inline-block py-3 px-6 text-lg bg-orange-400 text-orange-800 hover:bg-orange-300 rounded">Get Started</a>
        </div>

        <!--   right -->
        <div class="md:w-1/2 shadow-2xl">
          <img src="https://www.ebi.ac.uk/sites/ebi.ac.uk/files/groups/external_relations/images/wide-imagery/COVID-19_DataPortal_2020_EMBL-EBI_700x400.jpg" alt="Happiest Doggo" class="w-full rounded-2xl shadow-2xl">
        </div>

      </div>

      <!-- features ============================== -->
      <div class="md:flex py-16 px-10 bg-indigo-800 text-indigo-200 tex
                  t-center">
        <div class="mr-2 text-center">
          <img src="https://www.who.int/images/default-source/wpro/health-topic/covid-19/slide39d52040065b54a20b4f75e1c5f6607c6.jpeg?sfvrsn=a6e74ee6_6" class="w-full mb-4 rounded border-solid border-2 border-indigo-400">
          
        </div>

        <div class="mr-2 mt-8 text-center">
          <img src="https://fssai.gov.in/upload/uploadfiles/files/COVID_19_IEC_ENG75.jpg" class="w-full mb-4 rounded border-solid border-2 border-indigo-400">
          
        </div>

        <div class="mr-2 text-center">
          <img src="https://www.buffalo.edu/content/authoritative/issues-management/health-and-safety/posters/print/social-distancing-posters/_jcr_content/par/image.img.original.png/1623168439854.png" class="w-full mb-4 rounded border-solid border-2 border-indigo-400">
          
        </div>

        <div class="mr-2 mt-8 text-center">
          <img src="https://www.fda.gov/files/covid_foodretail_bestpractices_header.png" class="w-full mb-4 rounded border-solid border-2 border-indigo-400">
          
        </div>
      </div>


      <!-- Footer -->
      <div class="footer-2 bg-gray-800 pt-6 md:pt-12">
        <div class="container px-4 mx-auto">

          <div class="md:flex md:flex-wrap md:-mx-4 py-6 md:pb-12">

            <div class="footer-info lg:w-1/3 md:px-4">
              <h4 class="text-white text-2xl mb-4">19K users are using COVID-19 Portal and making their life easy.</h4>
              <p class="text-gray-400">We have carefully crafted the blocks to suit to everyone's need.</p>
              <div class="mt-4">
                <button class="bg-facebook py-2 px-4 text-white rounded mt-2 transition-colors duration-300">
                  <span class="fab fa-facebook-f mr-2"></span> Follow
                </button>
                <button class="bg-twitter py-2 px-4 text-white rounded ml-2 mt-2 transition-colors duration-300">
                  <span class="fab fa-twitter mr-2"></span> Follow @freeweb19
                </button>
              </div>
            </div>

            <div class="md:w-2/3 lg:w-1/3 md:px-4 xl:pl-16 mt-12 lg:mt-0">
              <div class="sm:flex">
                <div class="sm:flex-1">
                  <h6 class="text-base font-medium text-white uppercase mb-2">About</h6>
                  <div>
                    <a href="#" class="text-gray-400 py-1 block hover:underline">Company</a>
                    <a href="#" class="text-gray-400 py-1 block hover:underline">Culture</a>
                    <a href="#" class="text-gray-400 py-1 block hover:underline">Team</a>
                    <a href="#" class="text-gray-400 py-1 block hover:underline">Careers</a>
                  </div>
                </div>
                <div class="sm:flex-1 mt-4 sm:mt-0">
                  <h6 class="text-base font-medium text-white uppercase mb-2">What we offer</h6>
                  <div>
                    <a href="#" class="text-gray-400 py-1 block hover:underline">Blocks</a>
                    <a href="#" class="text-gray-400 py-1 block hover:underline">Resources</a>
                    <a href="#" class="text-gray-400 py-1 block hover:underline">Tools</a>
                    <a href="#" class="text-gray-400 py-1 block hover:underline">Tutorials</a>
                    <a href="#" class="text-gray-400 py-1 block hover:underline">Freebies</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="md:w-1/3 md:px-4 md:text-center mt-12 lg:mt-0">
              <h5 class="text-lg text-white font-medium mb-4">Explore our site</h5>
              <button class="bg-indigo-600 text-white hover:bg-indigo-700 rounded py-2 px-6 md:px-12 transition-colors duration-300">Explore</button>
            </div>

          </div>

        </div>

        <div class="border-t border-solid border-gray-900 mt-4 py-4">
          <div class="container px-4 mx-auto">

            <div class="md:flex md:-mx-4 md:items-center">
              <div class="md:flex-1 md:px-4 text-center md:text-left">
                <p class="text-white">&copy; <strong>FWR</strong></p>
              </div>
              <div class="md:flex-1 md:px-4 text-center md:text-right">
                <a href="#" class="py-2 px-4 text-white inline-block hover:underline">Terms of Service</a>
                <a href="#" class="py-2 px-4 text-white inline-block hover:underline">Privacy Policy</a>
              </div>
            </div>

          </div>
        </div>

      </div>


  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  data () {
    return {
      msg: 'Welcome to Your Vue.js COVID-19 Portal App'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
