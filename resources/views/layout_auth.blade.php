<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ocean Project')</title>

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    {{-- jQuery CDN --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Include Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Optional custom styles --}}
    
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

        .back-3{
            background: linear-gradient(270deg, var(--color-ocean-purple), var(--color-ocean-teal-1));
            /*background: linear-gradient(270deg, var(--color-ocean-blue), var(--color-ocean-purple), var(--color-ocean-primary));*/
            background-size: 200% 200%;
            animation: gradientAnimation 80s ease infinite;   
        }
        
        .border-ocean-primary{
            margin: 10px;
            border-bottom: 1px solid var(--color-ocean-purple);
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
        width: 100%;
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

</head>
<body class="back-1">
    <div class="ocean-body">    
        {{-- Main content --}}
        <section class="ocean-home-main">
            @yield('main_container')
        </section>
    </div>
    @stack('scripts')
</body>
</html>
