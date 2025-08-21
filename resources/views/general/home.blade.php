<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ocean Project – Mobile View (Blue Theme)</title>
  <style type="text/css">
    :root {
      --color-ocean-primary: #6a66b0;
      --color-ocean-blue: #1f70b8;
      --color-ocean-light-blue: #d5f0f7;
      --color-ocean-green: #12b054;
      --color-ocean-light-green: #baf7c8;
      --color-ocean-skin: #ffd8a6;
      --color-ocean-light-yellow: #fcf8cc;
    }

    

    .bg-ocean{
      background-color: var(--color-ocean-primary); 
    }
    .ocean-text-xl{ font-size: 30px; }
    .ocean-text-lg{ font-size: 20px; }
    .ocean-bottom-floating-bar{ 
      position: fixed; 
      bottom: 0; 
      width: calc(100% - 20px); 
      margin: 10px; 
      padding: 5px; 
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
    .ocean-bottom-floating-bar ul{ display: flex; justify-content: space-around; }

    .ocean-home-main{

      display: flex;
      justify-content: center;
      
    }
    .ocean-trending{
      width: 35%;
      /*position: fixed;*/
      height: 600px;
      overflow-y: scroll;
    }
    .ocean-trending-service-item{

    }
    .ocean-feed{
      width: 65%;
      height: 650px;
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
    /*.ocean-bottom-floating-bar li{  }*/
  </style>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- HEADER -->
  <header class="bg-white shadow px-4 py-3 flex items-center justify-between sticky top-0 z-50">
    <h1 class="ocean-text-xl font-bold text-blue-600">🌊 Ocean</h1>
    <button id="menuToggle" class="md:hidden text-gray-600">
      ☰
    </button>
  </header>
  <div class="ocean-bottom-floating-bar ocean-gradient-blue-to-green text-white">
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
    <div class="ocean-trending">
      <!-- CATEGORIES -->
      <section class="py-2">
        <h3 class="text-lg font-semibold m-2">Services</h3>
        <div class="grid grid-cols-2">
          <!-- Electrician -->
          <div class="bg-white text-center shadow flex flex-col items-center ocean-trending-service-item ocean-gradient-blue-to-green-light">
            <!-- Light Bulb Icon -->
            <svg width="32" fill="#000000" viewBox="-4 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M10.328 6.83a5.903 5.903 0 0 1-1.439 3.64 2.874 2.874 0 0 0-.584 1v1.037a.95.95 0 0 1-.95.95h-3.71a.95.95 0 0 1-.95-.95V11.47a2.876 2.876 0 0 0-.584-1A5.903 5.903 0 0 1 .67 6.83a4.83 4.83 0 0 1 9.28-1.878 4.796 4.796 0 0 1 .38 1.88zm-.95 0a3.878 3.878 0 0 0-7.756 0c0 2.363 2.023 3.409 2.023 4.64v1.037h3.71V11.47c0-1.231 2.023-2.277 2.023-4.64zM7.83 14.572a.475.475 0 0 1-.475.476h-3.71a.475.475 0 0 1 0-.95h3.71a.475.475 0 0 1 .475.474zm-.64 1.262a.238.238 0 0 1-.078.265 2.669 2.669 0 0 1-3.274 0 .237.237 0 0 1 .145-.425h2.983a.238.238 0 0 1 .225.16z"></path></g></svg>
            <p class="text-xs">Electrician</p>
          </div>

          <!-- Carpenter -->
          <div class="bg-white text-center shadow flex flex-col items-center ocean-trending-service-item ocean-gradient-orange-to-yellow-light">
            <svg width="32" fill="#000000" viewBox="0 0 512 512" enable-background="new 0 0 512 512" id="Hammer" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Hammer_1_"> <g> <path d="M183.485,110.61h22.548v20.224h15.08v23.784v12v23.988v120.281v135.287c0,15.271,12.425,27.696,27.696,27.696h1.019 c15.271,0,27.695-12.425,27.695-27.696V310.887v-80.659v-0.001h-12v0.001v68.659h-32.41v-96.281h32.41v8.68v6.156h12v-6.156 v-20.68v-23.988v-12v-23.784h12.443V93.159c13.637-1.17,51.588-3.126,85.59,7.133c3.827,1.154,7.89-0.612,9.654-4.204 c1.764-3.59,0.685-7.884-2.57-10.21l-9.951-7.116c-31.33-22.405-90.688-40.632-132.316-40.632h-34.34v16.396h-22.548V44.135 h-57.538v74.457h57.538V110.61z M265.523,310.887v135.287c0,8.654-7.04,15.696-15.695,15.696h-1.019 c-8.655,0-15.696-7.042-15.696-15.696V310.887H265.523z M265.523,190.606h-32.41v-23.988h32.41V190.606z M265.523,154.618h-32.41 v-23.784h32.41V154.618z M358.849,83.99c-38.126-6.94-73.899-2.433-75.659-2.203l-5.223,0.682v36.366h-0.443h-40.995V50.13h3.845 C276.354,50.13,328.265,65.221,358.849,83.99z M218.033,50.13h6.495v68.705h-3.415h-3.077V68.186h-0.003v-13.66V50.13z M206.033,66.525V98.61h-22.548V66.525H206.033z M137.947,56.135h33.538v50.457h-33.538V56.135z"></path> <rect height="66.294" width="12" x="243.318" y="368.971"></rect> <rect height="22.652" width="12" x="243.318" y="333.93"></rect> </g> </g> </g></svg>
            <p class="text-xs">Carpenter</p>
          </div>
          <!-- Plumber -->
          <div class="bg-white text-center shadow flex flex-col items-center ocean-trending-service-item ocean-gradient-orange-to-yellow-light">
            <svg height="32" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 193.826 193.826" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#000002;" d="M163.156,193.826c-8.008,0-14.522-6.515-14.522-14.522c0-1.534,0.25-3.062,0.743-4.549 c0.018-0.109,0.044-0.219,0.077-0.327l11.317-36.052c0.327-1.042,1.293-1.751,2.385-1.751c1.093,0,2.059,0.709,2.386,1.751 l11.224,35.759c0.104,0.229,0.177,0.475,0.208,0.733c0.468,1.449,0.705,2.939,0.705,4.436 C177.679,187.312,171.164,193.826,163.156,193.826z M154.35,175.527c-0.022,0.172-0.064,0.343-0.125,0.509 c-0.392,1.071-0.591,2.171-0.591,3.268c0,5.251,4.271,9.522,9.522,9.522s9.522-4.271,9.522-9.522c0-1.099-0.198-2.198-0.59-3.268 c-0.062-0.169-0.104-0.342-0.129-0.516l-8.804-28.048L154.35,175.527z M182.152,128.93h-37.029c-1.381,0-2.5-1.119-2.5-2.5v-12.744 c0-1.381,1.119-2.5,2.5-2.5h3.511V91.989c0-5.317-4.325-9.643-9.643-9.643h-4.601c-5.58,12.323-17.704,20.193-31.347,20.193 s-25.766-7.87-31.346-20.193H11.674c-1.381,0-2.5-1.119-2.5-2.5V55.08c0-1.381,1.119-2.5,2.5-2.5h60.65 c4.573-9.042,12.83-15.54,22.52-17.908V24.174H69.862c-1.381,0-2.5-1.119-2.5-2.5v-10.74c0-1.381,1.119-2.5,2.5-2.5h24.981V2.5 c0-1.381,1.119-2.5,2.5-2.5h11.4c1.381,0,2.5,1.119,2.5,2.5v5.934h24.982c1.381,0,2.5,1.119,2.5,2.5v10.74 c0,1.381-1.119,2.5-2.5,2.5h-24.982v10.498c9.689,2.368,17.947,8.866,22.52,17.908h17.37c14.902,0,27.026,12.124,27.026,27.025 v31.58h3.992c1.381,0,2.5,1.119,2.5,2.5v12.744C184.652,127.811,183.533,128.93,182.152,128.93z M147.623,123.93h32.029v-7.744 h-32.029V123.93z M153.634,111.186h19.526v-31.58c0-12.145-9.881-22.025-22.026-22.025h-18.947c-0.985,0-1.879-0.579-2.281-1.479 c-4.413-9.852-13.807-16.482-24.531-17.322h-4.66c-10.724,0.84-20.117,7.471-24.531,17.323c-0.402,0.898-1.296,1.478-2.281,1.478 H14.174v19.767h59.18c1.025,0,1.947,0.627,2.325,1.58C80.15,90.234,90.892,97.54,103.044,97.54s22.895-7.306,27.366-18.613 c0.378-0.953,1.3-1.58,2.325-1.58h6.256c8.074,0,14.643,6.568,14.643,14.643V111.186z M105.562,33.779h0.683v-9.605h-6.4v9.605 h0.683C102.192,33.658,103.897,33.658,105.562,33.779z M108.744,19.174h24.982v-5.74H72.362v5.74H108.744z M99.844,8.434h6.4V5h-6.4 V8.434z"></path> </g></svg>
            <p class="text-xs">Plumber</p>
          </div>

          <!-- AC Repair -->
          <div class="bg-white text-center shadow flex flex-col items-center ocean-trending-service-item ocean-gradient-blue-to-green-light">
            <svg fill="#000000" width="32" viewBox="0 0 512 512" enable-background="new 0 0 512 512" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M413,282.988H99c-5.522,0-10-4.477-10-10v-113c0-5.523,4.478-10,10-10h314c5.522,0,10,4.477,10,10v113 C423,278.511,418.522,282.988,413,282.988z M109,262.988h294v-93H109V262.988z"></path> </g> <g> <path d="M378.687,282.988c-0.006,0-0.013,0-0.02,0H136.001c-3.161,0-6.136-1.494-8.022-4.03c-1.887-2.536-2.464-5.814-1.556-8.842 l12.498-41.682c1.269-4.23,5.162-7.127,9.579-7.127h215c4.204,0,7.96,2.63,9.397,6.581l14.946,41.075 c0.542,1.232,0.843,2.594,0.843,4.026C388.687,278.511,384.21,282.988,378.687,282.988z M149.439,262.988h214.947l-7.89-21.682 H155.941L149.439,262.988z"></path> </g> <g> <path d="M148.001,198.655h-16.667c-5.522,0-10-4.477-10-10s4.478-10,10-10h16.667c5.522,0,10,4.477,10,10 S153.523,198.655,148.001,198.655z"></path> </g> <g> <path d="M159.334,362.012c-5.522,0-10-4.477-10-10v-44.714c0-5.523,4.478-10,10-10s10,4.477,10,10v44.714 C169.334,357.535,164.856,362.012,159.334,362.012z"></path> </g> <g> <path d="M245.334,362.012c-5.522,0-10-4.477-10-10v-44.714c0-5.523,4.478-10,10-10s10,4.477,10,10v44.714 C255.334,357.535,250.856,362.012,245.334,362.012z"></path> </g> <g> <path d="M331.334,362.012c-5.522,0-10-4.477-10-10v-44.714c0-5.523,4.478-10,10-10s10,4.477,10,10v44.714 C341.334,357.535,336.856,362.012,331.334,362.012z"></path> </g> </g> </g></svg>
            <p class="text-xs">AC Repair</p>
          </div>

          <!-- Electronics -->
          <div class="bg-white text-center shadow flex flex-col items-center ocean-trending-service-item ocean-gradient-blue-to-green-light">
            <svg width="32" fill="#000000" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M4 11a1 1 0 0 1-1 1 1 1 0 0 1-1-1 1 1 0 0 1 1-1 1 1 0 0 1 1 1zm3.5 11c-.67 0-1.236.452-1.426 1.063l-2.656.443c-.242.04-.418.25-.418.494v3c0 .245.176.454.418.494l2.656.443C6.264 28.547 6.83 29 7.5 29h4c.67 0 1.236-.452 1.426-1.063l2.656-.443c.242-.04.418-.25.418-.494v-3c0-.245-.176-.454-.418-.494l-2.656-.444C12.736 22.453 12.17 22 11.5 22zm0 1h4c.286 0 .5.214.5.5v4c0 .286-.214.5-.5.5h-4c-.286 0-.5-.214-.5-.5v-4c0-.286.214-.5.5-.5zM6 24.092v2.816l-2-.332v-2.152zm7 0l2 .332v2.152l-2 .332zM5.5 3c-.276 0-.5.224-.5.5v15c0 .276.224.5.5.5h11c.67 0 .654-1 0-1H6V4h18v4.5c0 .66 1 .67 1 0v-5c0-.276-.224-.5-.5-.5zm-4-2C.678 1 0 1.678 0 2.5v17c0 .822.678 1.5 1.5 1.5h15c.67 0 .66-1 0-1h-15c-.286 0-.5-.214-.5-.5v-17c0-.286.214-.5.5-.5h24c.286 0 .5.214.5.5v6c0 .677 1 .66 1 0v-6c0-.822-.678-1.5-1.5-1.5zm21 11h3c.277 0 .5.223.5.5s-.223.5-.5.5h-3c-.277 0-.5-.223-.5-.5s.223-.5.5-.5zm-3-2c-.822 0-1.5.678-1.5 1.5v16c0 .822.678 1.5 1.5 1.5h9c.822 0 1.5-.678 1.5-1.5v-16c0-.822-.678-1.5-1.5-1.5zm0 1h9c.286 0 .5.214.5.5v16c0 .286-.214.5-.5.5h-9c-.286 0-.5-.214-.5-.5v-16c0-.286.214-.5.5-.5zM24 25c.554 0 1 .446 1 1s-.446 1-1 1-1-.446-1-1 .446-1 1-1z"></path></g></svg>
            <p class="text-xs">Electronics</p>
          </div>
          <!-- Electronics -->
          <div class="bg-white text-center shadow flex flex-col items-center ocean-trending-service-item ocean-gradient-orange-to-yellow-light">
            <svg width="32" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect id="bg" x="-332" y="-243" display="none" fill="#6DCFF6" width="544" height="455"></rect> <g id="hair_dryer"> <path d="M63.6,2.1C63.4,1.9,63,1.9,62.7,2l-6.9,2H14C6.1,4,0,10.1,0,17.9v1c0,7.6,5.7,13.6,13.3,14L23,59.2c1,2.9,3.7,4.8,6.7,4.8 c0.8,0,1.5-0.1,2.3-0.4c1.8-0.6,3.2-1.9,3.8-3.7c0.6-1.6,0.6-3.5,0-5.4l-3.6-9.6c2-1.2,3.2-3.9,2.5-6c-0.4-1.2-1.4-2.2-2.9-2.7 C31,36,30,35.9,29,36l-1.6-4.3l28.5-2.7l6.8,1.9c0.1,0,0.2,0,0.3,0c0.2,0,0.4-0.1,0.6-0.2c0.3-0.2,0.4-0.5,0.4-0.8v-27 C64,2.6,63.9,2.3,63.6,2.1z M55,6v21l-41,3.9c-0.7,0-1.4-0.1-2-0.2V6.1C12.6,6,13.3,6,14,6H55z M2,18.9v-1c0-5.4,3.2-9.8,8-11.4 v23.7C5.2,28.7,2,24.3,2,18.9z M33,39.6c0.4,1.1-0.3,2.6-1.3,3.4l-1.9-5.1C31.1,37.9,32.6,38.5,33,39.6z M34,55.2 c0.8,2.5,0.2,5.6-2.6,6.5c-2.7,0.9-5.6-0.5-6.5-3.2l-9.5-25.8l10-1L34,55.2z M62,28.6l-5-1.4V5.7l5-1.4V28.6z"></path> <path d="M26,12h19c0.6,0,1-0.4,1-1s-0.4-1-1-1H26c-0.6,0-1,0.4-1,1S25.4,12,26,12z"></path> <path d="M48,12h2c0.6,0,1-0.4,1-1s-0.4-1-1-1h-2c-0.6,0-1,0.4-1,1S47.4,12,48,12z"></path> </g> </g></svg>
            <p class="text-xs">Salon</p>
          </div>
          
        </div>
      </section>

      <!-- FEATURED PROVIDERS -->
      <section class="p-2 py-6">
        <h3 class="text-lg font-semibold mb-4">Top Providers</h3>
        <div class="space-y-4">
          <div class="bg-white rounded-lg p-3 shadow">
            <h4 class="font-medium">SmartFix Repairs</h4>
            <p class="text-xs text-gray-600">AC repair, fridge service</p>
            <p class="text-blue-500 text-sm">⭐ 4.8</p>
          </div>
          <div class="bg-white rounded-lg p-3 shadow">
            <h4 class="font-medium">Furniture Masters</h4>
            <p class="text-xs text-gray-600">Custom woodwork</p>
            <p class="text-blue-500 text-sm">⭐ 4.7</p>
          </div>
        </div>
      </section>
    </div>
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
      <section class="ocean-feed-items">
        <div class="bg-white shadow m-2 ocean-feed-item">
          <div class="post">
            <div class="post-header">
              <div class="post-author-image"><img src="https://picsum.photos/536/354"></div>
              <div class="post-meta-data">
                <div class="post-author-name">
                  Pritam Sankhari  
                </div>
                <div class="post-time">
                  12-07-25
                </div>
              </div>
            </div>
            <div class="post-body">
              <div class="post-content">
                <div class="post-content-image">
                  <img src="https://picsum.photos/536/354"> 
                </div>  
              </div>
              <div class="post-action">
                <div class="post-action-item">
                  <svg width="20" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>like [#1385]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-259.000000, -760.000000)" fill="#000000"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M203,620 L207.200006,620 L207.200006,608 L203,608 L203,620 Z M223.924431,611.355 L222.100579,617.89 C221.799228,619.131 220.638976,620 219.302324,620 L209.300009,620 L209.300009,608.021 L211.104962,601.825 C211.274012,600.775 212.223214,600 213.339366,600 C214.587817,600 215.600019,600.964 215.600019,602.153 L215.600019,608 L221.126177,608 C222.97313,608 224.340232,609.641 223.924431,611.355 L223.924431,611.355 Z" id="like-[#1385]"> </path> </g> </g> </g> </g></svg>    
                </div>
                <div class="post-action-item">
                  <svg width="20" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>dislike [#1387]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-179.000000, -760.000000)" fill="#000000"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M139.800374,612 L144.00037,612 L144.00037,600 L139.800374,600 L139.800374,612 Z M127.698085,600 L137.700376,600 L137.700376,611.979 L135.894378,618.174 C135.725328,619.224 134.776129,620 133.66103,620 C132.412581,620 131.400381,619.036 131.400381,617.847 L131.400381,612 L125.873186,612 C124.026238,612 122.659139,610.358 123.074939,608.644 L124.899837,602.109 C125.200137,600.868 126.360386,600 127.698085,600 L127.698085,600 Z" id="dislike-[#1387]"> </path> </g> </g> </g> </g></svg>
                </div>
                <div class="post-action-item">
                  <svg width="20" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>comment 1</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-102.000000, -257.000000)" fill="#000000"> <path d="M118,257 C109.164,257 102,263.269 102,271 C102,275.419 104.345,279.354 108,281.919 L108,289 L115.009,284.747 C115.979,284.907 116.977,285 118,285 C126.836,285 134,278.732 134,271 C134,263.269 126.836,257 118,257" id="comment-1" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                </div>
                <div class="post-action-item">
                  <svg width="24" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="st0" d="M512,255.995L277.045,65.394v103.574c-17.255,0-36.408,0-57.542,0c-208.59,0-249.35,153.44-201.394,266.128 c9.586-103.098,142.053-100.701,237.358-100.701c7.247,0,14.446,0,21.578,0v112.211L512,255.995z"></path> </g> </g></svg>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="bg-white shadow m-2 ocean-feed-item">
          <div class="post">
            <div class="post-header">
              <div class="post-author-image"><img src="https://picsum.photos/536/334"></div>
              <div class="post-meta-data">
                <div class="post-author-name">
                  Sagnik
                </div>
                <div class="post-time">
                  12-08-25
                </div>
              </div>
            </div>
            <div class="post-body">
              <div class="post-content">
                <div class="post-content-image">
                  <img src="https://picsum.photos/536/324"> 
                </div>  
              </div>
              <div class="post-action">
                <div class="post-action-item">
                  <svg width="20" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>like [#1385]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-259.000000, -760.000000)" fill="#000000"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M203,620 L207.200006,620 L207.200006,608 L203,608 L203,620 Z M223.924431,611.355 L222.100579,617.89 C221.799228,619.131 220.638976,620 219.302324,620 L209.300009,620 L209.300009,608.021 L211.104962,601.825 C211.274012,600.775 212.223214,600 213.339366,600 C214.587817,600 215.600019,600.964 215.600019,602.153 L215.600019,608 L221.126177,608 C222.97313,608 224.340232,609.641 223.924431,611.355 L223.924431,611.355 Z" id="like-[#1385]"> </path> </g> </g> </g> </g></svg>    
                </div>
                <div class="post-action-item">
                  <svg width="20" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>dislike [#1387]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-179.000000, -760.000000)" fill="#000000"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M139.800374,612 L144.00037,612 L144.00037,600 L139.800374,600 L139.800374,612 Z M127.698085,600 L137.700376,600 L137.700376,611.979 L135.894378,618.174 C135.725328,619.224 134.776129,620 133.66103,620 C132.412581,620 131.400381,619.036 131.400381,617.847 L131.400381,612 L125.873186,612 C124.026238,612 122.659139,610.358 123.074939,608.644 L124.899837,602.109 C125.200137,600.868 126.360386,600 127.698085,600 L127.698085,600 Z" id="dislike-[#1387]"> </path> </g> </g> </g> </g></svg>
                </div>
                <div class="post-action-item">
                  <svg width="20" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>comment 1</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-102.000000, -257.000000)" fill="#000000"> <path d="M118,257 C109.164,257 102,263.269 102,271 C102,275.419 104.345,279.354 108,281.919 L108,289 L115.009,284.747 C115.979,284.907 116.977,285 118,285 C126.836,285 134,278.732 134,271 C134,263.269 126.836,257 118,257" id="comment-1" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                </div>
                <div class="post-action-item">
                  <svg width="24" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="st0" d="M512,255.995L277.045,65.394v103.574c-17.255,0-36.408,0-57.542,0c-208.59,0-249.35,153.44-201.394,266.128 c9.586-103.098,142.053-100.701,237.358-100.701c7.247,0,14.446,0,21.578,0v112.211L512,255.995z"></path> </g> </g></svg>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="bg-white shadow m-2 ocean-feed-item">
          <div class="post">
            <div class="post-header">
              <div class="post-author-image"><img src="https://picsum.photos/536/354"></div>
              <div class="post-meta-data">
                <div class="post-author-name">
                  Kanchan
                </div>
                <div class="post-time">
                  12-07-25
                </div>
              </div>
            </div>
            <div class="post-body">
              <div class="post-content">
                <div class="post-content-image">
                  <img src="https://picsum.photos/536/354"> 
                </div>
              </div>
              <div class="post-action">
                <div class="post-action-item">
                  <svg width="20" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>like [#1385]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-259.000000, -760.000000)" fill="#000000"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M203,620 L207.200006,620 L207.200006,608 L203,608 L203,620 Z M223.924431,611.355 L222.100579,617.89 C221.799228,619.131 220.638976,620 219.302324,620 L209.300009,620 L209.300009,608.021 L211.104962,601.825 C211.274012,600.775 212.223214,600 213.339366,600 C214.587817,600 215.600019,600.964 215.600019,602.153 L215.600019,608 L221.126177,608 C222.97313,608 224.340232,609.641 223.924431,611.355 L223.924431,611.355 Z" id="like-[#1385]"> </path> </g> </g> </g> </g></svg>    
                </div>
                <div class="post-action-item">
                  <svg width="20" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>dislike [#1387]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-179.000000, -760.000000)" fill="#000000"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M139.800374,612 L144.00037,612 L144.00037,600 L139.800374,600 L139.800374,612 Z M127.698085,600 L137.700376,600 L137.700376,611.979 L135.894378,618.174 C135.725328,619.224 134.776129,620 133.66103,620 C132.412581,620 131.400381,619.036 131.400381,617.847 L131.400381,612 L125.873186,612 C124.026238,612 122.659139,610.358 123.074939,608.644 L124.899837,602.109 C125.200137,600.868 126.360386,600 127.698085,600 L127.698085,600 Z" id="dislike-[#1387]"> </path> </g> </g> </g> </g></svg>
                </div>
                <div class="post-action-item">
                  <svg width="20" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>comment 1</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-102.000000, -257.000000)" fill="#000000"> <path d="M118,257 C109.164,257 102,263.269 102,271 C102,275.419 104.345,279.354 108,281.919 L108,289 L115.009,284.747 C115.979,284.907 116.977,285 118,285 C126.836,285 134,278.732 134,271 C134,263.269 126.836,257 118,257" id="comment-1" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                </div>
                <div class="post-action-item">
                  <svg width="24" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="st0" d="M512,255.995L277.045,65.394v103.574c-17.255,0-36.408,0-57.542,0c-208.59,0-249.35,153.44-201.394,266.128 c9.586-103.098,142.053-100.701,237.358-100.701c7.247,0,14.446,0,21.578,0v112.211L512,255.995z"></path> </g> </g></svg>
                </div>
              </div>
            </div>
          </div>
        </div>


      </section>
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

  <!-- JS for mobile menu -->
  <script>
    const toggle = document.getElementById('menuToggle');
    const menu = document.getElementById('mobileMenu');
    toggle.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
