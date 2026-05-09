@extends('layouts.app')

@section('content')
    <!-- This is for title card -->
    <section class="flex justify-center" id="Home">
        <div class="flex flex-col items-center max-w-7xl w-full h-auto px-25 py-18 bg-gray-800 text-white border-3 border-yellow-200 rounded-2xl shadow-lg shadow-yellow-500">
            <img src="/assets/img/ame.jpg" alt="Gura pfp" class="center w-42 h-42 rounded-full">
            <h1 class="text-3xl">Hello Im cake...👋</h1>
            <h1 class="text-xl m-1">Data Nerd</h1>
            <div class="flex flex-row">
                <a href="https://www.linkedin.com/" class="m-1">
                    <img src="/assets/svg/linkedin-svgrepo-com.svg" class="w-7 h-7">
                </a>
                <a href="https://github.com/cakethehuman" class="m-1">
                   <img src="/assets/svg/github-svgrepo-com.svg" class="w-7 h-7">
                </a>
            </div>
        </div> 
    </section>  
    <!-- This if for my skill cards -->
    <section class="py-5" id="Skills">
        <div class="flex justify-center">
            <h1 class="text-white font-bold text-3xl w-50 h-15 py-2 text-center border-2 bg-gray-800 border-emerald-500 rounded-full m-5 shadow-lg shadow-emerald-500">
                SKILLS
            </h1>
        </div>
        <div class="flex justify-center gap-65">
            <h1 class="text-white font-bold text-3xl w-100 h-15 py-2 text-center border-2 bg-gray-800 border-emerald-500 rounded-full m-5 shadow-lg shadow-emerald-500">
                MACHINE LEARNING
            </h1>
            <h1 class="text-white font-bold text-3xl w-100 h-15 py-2 text-center border-2 bg-gray-800 border-emerald-500 rounded-full m-5 shadow-lg shadow-emerald-500">
                WEB DEV
            </h1>
        </div>
        <div class="flex flex-row gap-30 w-full max-w-7xl">
            <div class="flex-col border items-center max-w-2xl w-full h-auto bg-gray-800 border-5 border-emerald-500 rounded-3xl shadow-xl shadow-emerald-500/50">
                <div class="grid grid-cols-3 gap-5 my-15 place-items-center">
                    <img src="/assets/svg/scikit-learn.svg" class="w-25 h-25 object-contain">
                    <img src="/assets/svg/tensorflow-svgrepo-com.svg" class="w-25 h-25 object-contain">
                    <img src="/assets/svg/pytorch-svgrepo-com.svg" class="w-25 h-25 object-contain">
                    <img src="/assets/svg/statsmodels-logo-v2.svg" class="w-25 h-25 object-contain">
                    <img src="/assets/svg/opencv-svgrepo-com.svg" class="w-25 h-25 object-contain">
                    <img src="/assets/svg/tableau-icon-svgrepo-com.svg" class="w-25 h-25 object-contain">
                </div>
            </div>
            <div class="flex-col border items-center max-w-2xl w-full h-auto bg-gray-800 border-5 border-emerald-500 rounded-3xl shadow-xl shadow-emerald-500/50">
                <div class="grid grid-cols-3 gap-5 my-15 place-items-center">
                    <img src="/assets/svg/FastApi.svg" class="w-25 h-25 object-containo-com">
                    <img src="/assets/svg/js-official-svgrepo-com.svg" class="w-25 h-25 object-containo-com">
                    <img src="/assets/svg/mongo-svgrepo-com.svg" class="w-25 h-25 object-containo-com">
                    <img src="/assets/svg/mysql-logo-svgrepo-com.svg" class="w-25 h-25 object-containo-com">
                    <img src="/assets/svg/tailwind-svgrepo-com.svg" class="w-25 h-25 object-containo-com">
                    <img src="/assets/svg/laravel-svgrepo-com.svg" class="w-25 h-25 object-containo-com">
                </div>
            </div>
        </div>
    </section>

    <section id = "Exprerience">
        <div class="flex justify-center">
                <h1 class="text-white font-bold text-3xl w-60 h-15 py-2 text-center border-2 bg-gray-800 border-red-700 rounded-full m-5 shadow-xl shadow-red-700/50">
                    EXPRERIENCE
                </h1>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="border border-3 border-red-700 max-w-7xl w-full h-auto px-25 py-18 bg-gray-800 rounded-2xl shadow-lg">
                <div class="flex flex-col gap-10">
                    <div class="flex flex-row gap-10">
                        <img src="/assets/img/shoushin logo.png" class="w-23 h-25">
                        <div class="flex flex-col">
                            <h1 class="text-white text-3xl">Seketaris 2</h1>
                            <p class="text-white text-md">Nov 2025 - Now</p>
                        </div>
                    </div>
                    <div class="flex flex-row gap-10">
                        <img src="/assets/svg/discord-icon-svgrepo-com.svg" class="w-23 h-25">
                        <div class="flex flex-col"> 
                            <h1 class="text-white text-3xl">Seketaris 2</h1>
                            <p class="text-white text-md">Nov 2024 - Feb 2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id = "Projects">
        <div class="flex justify-center">
                <h1 class="text-white font-bold text-3xl w-60 h-15 py-2 text-center border-2 bg-gray-800 border-blue-500 rounded-full m-5 shadow-xl shadow-blue-500/50">
                    PROJECTS
                </h1>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="border border-3 border-blue-700 max-w-7xl w-full h-auto px-25 py-18 bg-gray-800 rounded-2xl shadow-lg">
                
            </div>
        </div>
    </section>
@endsection