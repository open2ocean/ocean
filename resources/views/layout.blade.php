<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ocean Project – Mobile View (Blue Theme)</title>
  <!-- Latest Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <!-- jQuery (latest version) -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- Include Alpine.js -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  
  <style type="text/css">
    :root {
      --color-ocean-primary: #6a66b0;
      --color-ocean-blue: #1f70b8;
      --color-ocean-purple: #dc8bfc;
      --color-ocean-light-blue: #d5f0f7;
      --color-ocean-green: #12b054;
      --color-ocean-light-green: #baf7c8;
      --color-ocean-skin: #ffd8a6;
      --color-ocean-light-yellow: #fcf8cc;
      --color-ocean-yellow-1: #ffe417;
      --color-ocean-yellow-2: #fcba03;
      --color-ocean-green-1:  #b9f551;
      --color-ocean-teal-1: #aaf2d0;
    }

    body {
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      
    }

    .back-1{
      background: linear-gradient(270deg, var(--color-ocean-light-green), var(--color-ocean-light-yellow));
      background-size: 200% 200%;
      animation: gradientAnimation 15s ease infinite;
    }
    
    .back-2{
      background: linear-gradient(270deg, var(--color-ocean-blue), var(--color-ocean-green), var(--color-ocean-primary));
      /*background: linear-gradient(270deg, var(--color-ocean-blue), var(--color-ocean-purple), var(--color-ocean-primary));*/
      background-size: 200% 200%;
      animation: gradientAnimation 80s ease infinite;
    }

    @keyframes gradientAnimation {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }
    
    .ocean-box-shadow{
      box-shadow: 1px 1px 22px 1px lightgrey;
    }
    .bg-ocean{
      background-color: var(--color-ocean-primary); 
    }
    .ocean-text-xl{ font-size: 30px; }
    .ocean-text-lg{ font-size: 20px; }
    .ocean-bottom-floating-bar{ 
      position: fixed; 
      bottom: 0; 
      left: 0;
      width: calc(100% - 20px); 
      margin: 10px; 
      padding: 20px; 
      border-radius: 30px; 
      box-shadow: 2px 2px 8px 2px var(--color-ocean-primary);
    }
    .ocean-gradient-blue-to-green{
      /*background-color: #6a66b0;*/
      background: linear-gradient(to bottom right, var(--color-ocean-blue) 30%, var(--color-ocean-green) 100%);
    }
    .ocean-gradient-blue-to-green-light{
      /*background-color: #6a66b0;*/
      background: linear-gradient(to bottom right, var(--color-ocean-light-blue) 30%, var(--color-ocean-light-green) 100%);
    }
    .ocean-gradient-orange-to-yellow-light{
      /*background-color: #6a66b0;*/
      background: linear-gradient(to bottom right, var(--color-ocean-skin) 30%, var(--color-ocean-light-yellow) 100%);
    }

    .ocean-body{

        position: relative;  
        max-width: 600px;
    }

    .ocean-bottom-floating-bar ul{ display: flex; justify-content: space-around; }

    .ocean-home-main{

      display: flex;
      justify-content: center;
      
    }
    .ocean-trending{
      margin-top: 40px; 
      width: 0%;
      /*position: fixed;*/
      transition: 1s;
      height: 600px;
      overflow-y: scroll;
    }
    .ocean-trending-service-item{
      /*width: 0%;*/
    }
    .ocean-trending-service-item-text{
      /*font-size: 100%;*/
      transition: .5s;
    }
    .btn-ocean-left-bar-trending{
      
      position: relative;
      /*top:80px;*/
      width: 40px;
      height: 40px;
      border-radius: 100%;
      align-items: center;
      background-color: var(--color-ocean-blue);
      color:white;
      padding: 10px;
      margin-left: 5px; 
      z-index: 99;
      transition: transform 0.3s ease;

    }
    #btn-ocean-left-bar-trending-open-icon {
      transition: transform 0.3s ease;
      position: absolute; 
      top:50%;
      left: 50%;
      transform: translate(-50%,-50%);
      z-index: 99;

    }
    .ocean-feed{
      width: 100%;
      transition: 1s;
      padding: 10px;
      height: 800px;
      overflow-y: scroll;
      
    }

    .ocean-feed-item{
      border-top-left-radius: 20px;
    }
    .post-header{
      display: flex;
      border-bottom: 1px solid var(--color-ocean-light-blue);
    }
    .post-author-image img{
      padding: 5px;
      width: 48px;
      height: 48px;
      border-radius: 100%;
    }
    .post-meta-data{
      width: 80%;
      padding: 10px;
    }
    .post-author-name{
      font-weight: bold;
    }
    .post-time{
      font-size: 12px;
    }
    .post-content-image img{
      width: 100%;
    }
    .post-action{
      display: flex;
      justify-content: space-around;
    }
    .post-action-item{
      padding: 10px;
    }
    .search-home-block input{

      outline: none;
      border: none;
      border-bottom: 1px solid var(--color-ocean-blue);
    }
    /* Width */
    ::-webkit-scrollbar {
      width: 0px;
    }

    /* Track (background) */
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
      border-radius: 10px;
    }

    /* Thumb (scroll handle) */
    ::-webkit-scrollbar-thumb {
      background: #3490dc;
      border-radius: 10px;
    }

    /* Thumb hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #2779bd;
    }

    /*.ocean-bottom-floating-bar li{  }*/
  </style>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 back-1">

  <div class="ocean-body">
    <!-- HEADER -->
    <header class="bg-white shadow px-4 py-3 flex items-center justify-between sticky top-0 z-50">
      
      
      <h1 class="ocean-text-xl font-bold text-blue-600">🌊 Ocean</h1>  
      <span class="btn-ocean-left-bar-trending">
        <i id="btn-ocean-left-bar-trending-open-icon" class="fa-solid fa-arrow-right"></i>
      </span>
      <!-- <button id="menuToggle" class="md:hidden text-gray-600">
        ☰
      </button> -->
    </header>
    <div class="ocean-bottom-floating-bar back-2 text-white">
      <div>
        <ul>
          <!-- Home -->
          <li>
            <span class="fa-solid fa-house fa-2x"></span>
          </li>
          <!-- Services -->
          <li>
            <span class="fa-solid fa-tools fa-2x"></span>
          </li>
          <!-- Create Post -->
          <li>
            <!-- Post Icon -->

            <button onclick="openPostModal()">
                <i class="fa-solid fa-plus fa-2x"></i>
            </button>
            <!-- <span class="fa-solid fa-pen-to-square fa-2x"></span> -->
          </li>
          <!-- Message -->
          <li>
            <span class="fa-solid fa-comment fa-2x"></span>
          </li>
          <!-- Products -->
          <!--
          <li>
            <span class="fa-solid fa-box fa-2x"></span>
          </li>
          -->
          <!-- Profile -->
          <li>
            <span class="fa-solid fa-user fa-2x"></span>
          </li>
        </ul>
      </div>
    </div>

    <!-- Post Modal -->
    
    <div id="PostModal" class="fixed inset-0 hidden items-center justify-center bg-black bg-opacity-50 z-40">
      <div class="bg-white p-6 m-5 w-full relative rounded shadow-lg w-96">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-lg font-bold">Create Post</h2>
          <button onclick="closeModal()" class="text-gray-500 text-2xl">&times;</button>
        </div>
        <!-- Form Content -->
        <form id="postForm">
          <!-- Text Input -->
          <textarea placeholder="What's on your mind?" class="w-full p-2 border rounded mb-4 resize-none" rows="4"></textarea>

          <!-- Facebook-style Upload Button -->
          <div class="mb-4">
            <label class="block mb-2 font-semibold">Add to your post</label>
            <label class="flex items-center justify-center border border-gray-300 rounded p-4 cursor-pointer hover:bg-gray-100">
              <i class="fa-solid fa-image fa-2x text-gray-500 mr-3"></i>
              <span class="text-gray-700 font-medium">Photo/Video</span>
              <input type="file" accept="image/*,video/*" id="postImage" class="hidden">
            </label>
          </div>

          <!-- Preview -->
          <div id="imagePreview" class="mb-4"></div>

          <!-- Submit Button -->
          <button type="submit" class="bg-ocean text-white px-6 py-2 rounded">Post</button>
          <button type="role" onclick="closePostModal()" class="bg-red-500 text-white px-4 py-2 rounded">
            Discard
          </button>
        </form>
      </div>
    </div>

    <script>
      function openPostModal() {
        document.getElementById("PostModal").classList.remove("hidden");
        document.getElementById("PostModal").classList.add("flex");
      }

      function closePostModal() {
        document.getElementById("PostModal").classList.remove("flex");
        document.getElementById("PostModal").classList.add("hidden");
      }

      // Close if clicked outside the box
      window.addEventListener("click", function (e) {
        const modal = document.getElementById("PostModal");
        if (e.target === modal) {
          closeModal();
        }
      });

      // Image/Video Preview
      const postImage = document.getElementById("postImage");
      const imagePreview = document.getElementById("imagePreview");

      postImage.addEventListener("change", function () {
        const file = this.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function (e) {
            // Display image or video preview
            if(file.type.startsWith("image/")) {
              imagePreview.innerHTML = `<img src="${e.target.result}" class="max- h-96 rounded">`;
            } else if(file.type.startsWith("video/")) {
              imagePreview.innerHTML = `<video controls class="h-96 rounded"><source src="${e.target.result}" type="${file.type}"></video>`;
            }
          }
          reader.readAsDataURL(file);
        }
      });
    </script>

    

    <!-- Cloak Style (important for hiding modal before Alpine loads) -->
    
    <!-- MOBILE NAV -->
    <nav id="mobileMenu" class="bg-white px-4 py-2 hidden flex-col space-y-2 md:hidden shadow">
      <a href="#" class="text-sm text-gray-700">Home</a>
      <a href="#" class="text-sm text-gray-700">Services</a>
      <a href="#" class="text-sm text-gray-700">Products</a>
      <a href="#" class="text-sm text-gray-700">Stories</a>
      <a href="#" class="text-sm text-gray-700">Promotions</a>
      <a href="#" class="text-sm text-blue-500 font-medium">Login / Register</a>
    </nav>

    
    <section class="flex ocean-home-main">
      @yield('trending')
      <div class="ocean-feed">
        <!-- HERO -->
        <section class="px-4 py-10 text-center">
          <h2 class="text-2xl font-bold mb-2 text-blue-800">Find Nearby Services</h2>
          <p class="text-sm mb-4 text-blue-800">Quickly connect with experts & sellers around you</p>
          
          <div class="bg-white p-4 rounded-xl shadow space-y-3 search-home-block">
            
            <input type="text" class="w-full border p-2 rounded text-sm" placeholder="Search: electrician, repair..." />
            <input type="text" class="w-full border p-2 rounded text-sm" placeholder="City / Area" />
            <button class="w-full bg-gray-600 text-white py-2 rounded-xl hover:bg-blue-600">Search</button>
          </div>
        </section>
        @yield('main_container')

      </div>
    </section>

    

    

    <!-- POST REQUIREMENT -->
    <section class="px-4 py-8 bg-blue-50 text-center">
      <h3 class="text-lg font-semibold mb-2">Can't Find a Service?</h3>
      <p class="text-sm text-gray-600 mb-4">Let providers come to you</p>
      <a href="#" class="inline-block bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 text-sm">Post a Requirement</a>
    </section>

    <!-- STORIES / KNOWLEDGE -->
    <section class="px-4 py-6">
      <h3 class="text-lg font-semibold mb-4">Success Stories</h3>
      <div class="space-y-4">
        <div class="bg-white p-3 rounded shadow">
          <h4 class="text-sm font-semibold">How local repairs went online</h4>
          <p class="text-xs text-gray-600">See how Ocean helped street vendors digitize</p>
        </div>
        <div class="bg-white p-3 rounded shadow">
          <h4 class="text-sm font-semibold">Tips for Safe Service Hiring</h4>
          <p class="text-xs text-gray-600">What to ask before letting someone into your home</p>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-gray-800 text-white px-4 py-6 text-center text-sm">
      <p>© 2025 Ocean Project</p>
      <div class="mt-2 space-x-2">
        <a href="#" class="underline">About</a>
        <a href="#" class="underline">Privacy</a>
        <a href="#" class="underline">Help</a>
      </div>
    </footer>
  </div>
  <!-- JS for mobile menu -->
  <script>
    // const toggle = document.getElementById('menuToggle');
    // const menu = document.getElementById('mobileMenu');
    // toggle.addEventListener('click', () => {
    //   menu.classList.toggle('hidden');
    // });

  

    let trendingToggle = false;
    $(".btn-ocean-left-bar-trending").on('click',function(e){

      if(!trendingToggle){
        
        $('.ocean-trending').css({
          width:"35%"
        });
        $('.ocean-feed').css({
          width:"65%"
        });
        
        $('.ocean-trending-service-item-text').css({
          fontSize:"12px"
        });
        // 
        $('.btn-ocean-left-bar-trending').css({
          transform: 'rotate(180deg)'
        });
        // $('#btn-ocean-left-bar-trending-open-icon').css({
        //   transform: 'rotate(180deg)'
        // });
      }
      else{

        $('.ocean-trending').css({
          width:"0%"
        });
        $('.ocean-feed').css({
          width:"100%"
        });  

        $('.ocean-trending-service-item-text').css({
          fontSize:"0"
        });

        $('.btn-ocean-left-bar-trending').css({
          transform: 'rotate(0deg)'
        });
      }
      trendingToggle = !trendingToggle;

      
      
    })
  </script>
</body>
</html>
