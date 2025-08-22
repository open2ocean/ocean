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


  <style type="text/css">
    :root {
      --color-ocean-primary: #6a66b0;
      --color-ocean-blue: #1f70b8;
      --color-ocean-light-blue: #d5f0f7;
      --color-ocean-green: #12b054;
      --color-ocean-light-green: #baf7c8;
      --color-ocean-skin: #ffd8a6;
      --color-ocean-light-yellow: #fcf8cc;
      --color-ocean-yellow-1: #ffe417;
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
      background-size: 200% 200%;
      animation: gradientAnimation 15s ease infinite;
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
        width: 600px;
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
          <li class="ocean-text-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" x="0px" y="0px" width="30" viewBox="0 0 50 50">
            <path d="M 24.960938 2.1015625 A 1.0001 1.0001 0 0 0 24.386719 2.3105469 L 1.3867188 20.210938 A 1.0001 1.0001 0 1 0 2.6132812 21.789062 L 4 20.708984 L 4 48 A 1.0001 1.0001 0 0 0 5 49 L 18.832031 49 A 1.0001 1.0001 0 0 0 19.158203 49 L 30.832031 49 A 1.0001 1.0001 0 0 0 31.158203 49 L 45 49 A 1.0001 1.0001 0 0 0 46 48 L 46 20.708984 L 47.386719 21.789062 A 1.0001 1.0001 0 1 0 48.613281 20.210938 L 25.613281 2.3105469 A 1.0001 1.0001 0 0 0 24.960938 2.1015625 z M 25 4.3671875 L 44 19.154297 L 44 47 L 32 47 L 32 29 A 1.0001 1.0001 0 0 0 31 28 L 19 28 A 1.0001 1.0001 0 0 0 18 29 L 18 47 L 6 47 L 6 19.154297 L 25 4.3671875 z M 20 30 L 30 30 L 30 47 L 20 47 L 20 30 z"></path>
            </svg>
          </li>
          <li>
            <svg fill="#ffffff" width="30" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.999 511.999" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M414.904,153.378l12.595,25.182c0.452,0.905,1.05,1.732,1.766,2.449l19.994,19.994c3.678,3.678,9.651,3.678,13.329,0 l46.652-46.652c3.678-3.678,3.678-9.651,0-13.329l-19.994-19.994c-0.717-0.717-1.545-1.314-2.449-1.766l-25.242-12.621 c-5.333-5.606-6.536-9.25-8.047-13.807c-1.664-5.018-3.729-11.264-10.914-18.458C383.766,15.548,316.216,5.444,257.259,46.66 c-2.517,1.766-4.019,4.651-4.019,7.723v26.658c0,3.166,1.707,6.05,4.352,7.799c2.628,1.749,6.101,1.997,9.011,0.768 c24.951-10.59,48.614-20.625,78.037-4.412l-10.24,30.737l-90.59,90.598c-34.091-34.125-63.846-69.035-88.098-103.774 c0.162-0.538,1.271-13.15,0.119-18.33c-6.281-28.117-40.806-47.394-69.111-47.753c-3.311-0.043-6.4,1.587-8.252,4.343 c-1.843,2.748-2.167,6.246-0.862,9.284l17.109,39.902l-37.777,18.893L40.291,70.247c-1.246-2.876-3.78-4.992-6.844-5.683 c-3.046-0.691-6.255,0.128-8.61,2.202c-23.296,20.429-28.86,60.066-11.981,84.676c5.598,8.166,18.517,22.46,45.193,20.028 c2.065,1.186,2.065,1.186,2.79,1.655c40.73,26.359,110.797,78.916,110.797,78.916L50.07,373.615l-39.211,26.138 c-1.749,1.161-3.055,2.876-3.712,4.864L0.483,424.61c-1.126,3.388-0.247,7.117,2.278,9.643l53.316,53.316 c2.526,2.526,6.255,3.405,9.643,2.278l19.994-6.664c1.988-0.666,3.703-1.971,4.864-3.712l26.138-39.211L242.676,314.3 c0.111-0.111,0.196-0.247,0.307-0.358c35.405,33.946,65.126,68.181,89.361,103.049c-2.295,5.18-3.081,8.166-3.081,8.166 c-1.22,6.34-0.998,12.245,0.154,17.425c6.281,28.117,40.806,47.394,69.111,47.753c3.311,0.043,6.4-1.587,8.252-4.344 c1.835-2.748,2.159-6.246,0.862-9.284l-17.109-39.902l37.777-18.893l16.649,38.852c1.237,2.876,3.78,4.992,6.835,5.683 c3.055,0.691,6.255-0.128,8.61-2.202c23.296-20.429,28.86-60.066,11.981-84.676c-5.359-7.817-18.466-21.052-42.991-20.036 c-52.463-34.116-101.128-71.347-144.469-110.131l91.042-91.042C386.642,143.676,403.819,143.343,414.904,153.378z M28.976,140.382 c-8.67-12.638-8.124-32.546-0.205-47.377l14.276,33.323c1.067,2.475,3.098,4.403,5.623,5.325c2.526,0.93,5.325,0.777,7.731-0.427 l55.287-27.648c4.642-2.347,6.656-7.834,4.617-12.595l-13.747-32.077c15.966,4.924,31.138,16.145,34.185,29.781 c3.849,17.212-13.022,35.891-47.761,52.77C60.822,156.126,39.514,155.751,28.976,140.382z M84.075,165.026 c1.195-0.393,10.035-4.198,13.696-6.11c18.944-9.199,32.213-18.551,41.301-27.639c2.654-2.654,4.838-5.265,6.818-7.859 c0.094-0.162,0.171-0.299,0.256-0.452c21.99,30.396,47.992,60.826,77.244,90.701l-36.19,25.856 C156.028,214.648,121.724,189.858,84.075,165.026z M228.792,301.517L102.721,427.589c-0.444,0.444-0.836,0.922-1.178,1.442 l-24.866,37.291l-11.401,3.797l-45.073-45.073l3.797-11.401l37.291-24.866c0.521-0.341,0.998-0.742,1.442-1.178L188.805,261.53 l39.518-28.228l28.698,28.698L228.792,301.517z M456.248,386.62c8.67,12.646,8.124,32.555,0.213,47.377l-14.276-33.323 c-1.067-2.475-3.098-4.403-5.623-5.325s-5.325-0.768-7.731,0.435l-55.287,27.648c-4.642,2.347-6.656,7.834-4.617,12.595 l13.747,32.077c-15.966-4.924-31.138-16.145-34.185-29.781c-3.849-17.212,13.022-35.891,47.761-52.77 C424.402,370.884,445.709,371.26,456.248,386.62z M402.898,361.438c-1.877,0.58-11.776,4.745-15.437,6.647 c-18.944,9.199-32.213,18.551-41.301,27.639c-1.067,1.067-1.818,2.108-2.748,3.166c-24.482-34.167-54.042-67.712-88.917-100.932 c0,0,22.938-32.435,23.168-32.896C315.832,298.769,357.901,331.222,402.898,361.438z M262.661,240.99l-13.329-13.329 l93.295-93.295l13.329,13.329L262.661,240.99z M353.413,118.494l11.486-34.458c1.357-4.053-0.205-8.525-3.755-10.846 c-34.509-22.75-64.102-15.915-89.062-6.212v-7.569c31.027-20.062,89.412-39.467,157.184,28.305 c4.028,4.028,4.949,6.818,6.349,11.042c1.903,5.743,4.267,12.902,13.645,22.281c0.717,0.717,1.545,1.314,2.449,1.766 l25.284,12.638l12.245,12.245l-33.323,33.323l-12.245-12.245l-12.638-25.284c-0.452-0.905-1.05-1.732-1.766-2.449 c-16.094-16.094-41.02-18.091-59.307-5.99L353.413,118.494z"></path> </g> </g> </g></svg>
          </li>
          <li>
            <svg width="30" fill="#ffffff" viewBox="0 0 32 32" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Layer1"> <path d="M16,6l-13,0c-0.552,0 -1,0.448 -1,1l0,22c0,0.552 0.448,1 1,1l22,0c0.552,0 1,-0.448 1,-1l0,-13c0,-0.552 -0.448,-1 -1,-1c-0.552,-0 -1,0.448 -1,1l0,12c0,0 -20,0 -20,0c0,0 0,-20 0,-20c-0,0 12,0 12,0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1Zm-9,19l14,-0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-14,0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1Zm-0,-4l4,0c0.552,-0 1,-0.448 1,-1c-0,-0.552 -0.448,-1 -1,-1l-4,0c-0.552,-0 -1,0.448 -1,1c-0,0.552 0.448,1 1,1Zm22.707,-13.293c0.391,-0.39 0.391,-1.024 0,-1.414l-4,-4c-0.39,-0.391 -1.024,-0.391 -1.414,-0l-10,10c-0.14,0.139 -0.235,0.317 -0.274,0.511l-1,5c-0.065,0.328 0.037,0.667 0.274,0.903c0.236,0.237 0.575,0.339 0.903,0.274l5,-1c0.194,-0.039 0.372,-0.134 0.511,-0.274l10,-10Zm-22.707,9.293l4,0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-4,0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1Zm0,-4l5,-0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-5,-0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1Z"></path> </g> </g></svg>
          </li>
          <li>
            <svg width="30" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g fill="none" fill-rule="evenodd" id="页面-1" stroke="none" stroke-width="1"> <g id="导航图标" transform="translate(-325.000000, -80.000000)"> <g id="编组" transform="translate(325.000000, 80.000000)"> <polygon fill="#FFFFFF" fill-opacity="0.01" fill-rule="nonzero" id="路径" points="24 0 0 0 0 24 24 24"></polygon> <polygon id="路径" points="22 7 12 2 2 7 2 17 12 22 22 17" stroke="#ffffff" stroke-linejoin="round" stroke-width="1.5"></polygon> <line id="路径" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="2" x2="12" y1="7" y2="12"></line> <line id="路径" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="12" x2="12" y1="22" y2="12"></line> <line id="路径" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="22" x2="12" y1="7" y2="12"></line> <line id="路径" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="17" x2="7" y1="4.5" y2="9.5"></line> </g> </g> </g> </g></svg>
          </li>
          <li class="ocean-text-lg">
            <svg viewBox="0 0 24 24" fill="none" width="30" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="6" r="4" stroke="#ffffff" stroke-width="1.5"></circle> <path d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
          </li>
        </ul>
      </div>
    </div>

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
