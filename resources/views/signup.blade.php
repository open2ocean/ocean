@extends('layout_auth')

@section('title', 'Login / Signup')

@section('main_container')
<div class="flex items-center justify-center min-h-screen" style="width: 100vh;">

    <div class="w-full max-w-sm">
        <h1 class="ocean-text-xl font-bold text-blue-600">🌊 Ocean</h1> 
        <div x-data="{ open: {{ session('success') ? 'true' : 'false' }} }" x-show="open" class="back-3 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
          <strong class="font-bold">Signed up successfully !</strong>
          <span class="block sm:inline">{{ session('success') }}</span>
          <span @click="open = false" class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer">
            <svg class="fill-current h-6 w-6 text-green-700" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <title>Close</title>
              <path d="M14.348 5.652a1 1 0 0 0-1.414 0L10 8.586 7.066 5.652a1 1 0 1 0-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 1 0 1.414 1.414L10 11.414l2.934 2.934a1 1 0 0 0 1.414-1.414L11.414 10l2.934-2.934a1 1 0 0 0 0-1.414z"/>
            </svg>
          </span>
        </div>

        {{-- Tabs --}}
        <div class="flex justify-between mb-4 bg-white rounded-xl shadow">
            <button id="tab-login" 
                class="tab-btn w-1/2 py-3 font-semibold border-b-2 border-ocean-primary text-ocean-primary rounded-tl-xl">
                Login
            </button>
            <button id="tab-signup" 
                class="tab-btn w-1/2 py-3 font-semibold border-b-2 border-transparent text-gray-600 rounded-tr-xl">
                Signup
            </button>
        </div>

        {{-- Login Form --}}
        <div id="login-form" class="bg-white shadow-lg rounded-2xl p-6">
            <h2 class="text-xl font-bold mb-4 text-center">Welcome Back 👋</h2>
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="block mb-1 font-medium">User ID</label>
                    <input type="username" name="username" class="w-full border rounded-lg p-2 focus:ring focus:ring-ocean-primary" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <label class="block mb-1 font-medium">Password</label>
                    <input type="password" name="password" class="w-full border rounded-lg p-2 focus:ring focus:ring-ocean-primary" placeholder="Password" required>
                </div>
                <button type="submit" class="w-full bg-ocean text-white rounded-lg p-2 hover:shadow-md">Login</button>
            </form>
            <p class="mt-3 text-sm text-center text-gray-500">Don’t have an account? 
                <a href="#" id="switch-to-signup" class="text-ocean-primary font-semibold">Signup</a>
            </p>
        </div>

        {{-- Signup Form --}}
        <div id="signup-form" class="bg-white shadow-lg rounded-2xl p-6 hidden">
            <h2 class="text-xl font-bold mb-4 text-center">Create an Account 🚀</h2>
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="block mb-1 font-medium">User ID</label>
                    <input type="userid" name="username" title="Should be unique - No Spaces or special characters should be used except underscore" class="w-full border rounded-lg p-2 focus:ring focus:ring-ocean-primary" placeholder="e.g. ankit_ray99" required>
                </div>
                <div class="mb-3">
                    <label class="block mb-1 font-medium">Email (Optional)</label>
                    <input type="email" name="email" class="w-full border rounded-lg p-2 focus:ring focus:ring-ocean-primary" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label class="block mb-1 font-medium">Password</label>
                    <input type="password" name="password" class="w-full border rounded-lg p-2 focus:ring focus:ring-ocean-primary" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <label class="block mb-1 font-medium">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="w-full border rounded-lg p-2 focus:ring focus:ring-ocean-primary" placeholder="Re-type Password" required>
                </div>
                <button type="submit" class="w-full bg-ocean text-white rounded-lg p-2 hover:shadow-md">Sign Up</button>
            </form>
            <p class="mt-3 text-sm text-center text-gray-500">Already have an account? 
                <a href="#" id="switch-to-login" class="text-ocean-primary font-semibold">Login</a>
            </p>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    // Switch via tabs
    $("#tab-login").on("click", function() {
        $("#login-form").fadeIn();
        $("#signup-form").hide();
        $("#tab-login").addClass("border-ocean-primary text-ocean-primary")
                       .removeClass("border-transparent text-gray-600");
        $("#tab-signup").addClass("border-transparent text-gray-600")
                        .removeClass("border-ocean-primary text-ocean-primary");
    });

    $("#tab-signup").on("click", function() {
        $("#signup-form").fadeIn();
        $("#login-form").hide();
        $("#tab-signup").addClass("border-ocean-primary text-ocean-primary")
                        .removeClass("border-transparent text-gray-600");
        $("#tab-login").addClass("border-transparent text-gray-600")
                       .removeClass("border-ocean-primary text-ocean-primary");
    });

    // Switch via links
    $("#switch-to-signup").on("click", function(e) {
        e.preventDefault();
        $("#tab-signup").click();
    });
    $("#switch-to-login").on("click", function(e) {
        e.preventDefault();
        $("#tab-login").click();
    });
});
</script>
@endpush
