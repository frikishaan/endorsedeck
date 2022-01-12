<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('app_name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>


    </head>
    <body class="antialiased bg-gray-100 dark:bg-gray-900 py-4 sm:pt-0">
        <div class="relative flex items-top justify-center min-h-screen sm:items-center">
            @if (Route::has('login'))
                <div class=" fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                
                <section class="bg-gray-100 text-gray-800">
                    <div class="container mx-auto flex flex-col items-center px-4 py-16 text-center md:py-32 md:px-10 lg:px-32 xl:max-w-5xl">
                        <h1 class="text-4xl font-bold leading-none sm:text-6xl">
                            Get <span class="text-blue-600">testimonials</span> from your customers with ease
                        </h1>
                        <p class="px-8 mt-8 mb-12 text-xl">
                            Manage all your testimonials at one place. Show what others thinks about your work.
                        </p>
                        <div class="flex flex-wrap justify-center">
                            <a href="{{route('register')}}" class="px-8 py-3 m-2 text-lg font-semibold rounded bg-blue-600 text-gray-50">Get started</a>
                        </div>
                    </div>
                </section>

            </div>
        </div>

        <section class="mb-8">         
            <h2 class="text-4xl font-bold leading-none sm:text-5xl text-center mb-12">
                Collect all your testimonials in one place
            </h2>

            <div class="sm:flex flex-wrap justify-center items-center text-center gap-8">
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 bg-white mt-6  shadow-lg rounded-lg dark:bg-gray-800">
                    <div class="flex-shrink-0">
                        <div class="flex items-center mx-auto justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <h3 class="text-2xl sm:text-xl text-gray-700 font-semibold dark:text-white py-4">
                        Website Design
                    </h3>
                    <p class="text-md  text-gray-500 dark:text-gray-300 py-4">
                        Encompassing today’s website design technology to integrated and build solutions relevant to your business.
                    </p>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 mt-6 sm:mt-16 md:mt-20 lg:mt-24 bg-white shadow-lg rounded-lg dark:bg-gray-800">
                    <div class="flex-shrink-0">
                        <div class="flex items-center mx-auto justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <i class="fas fa-edit"></i>
                        </div>
                    </div>
                    <h3 class="text-2xl sm:text-xl text-gray-700 font-semibold dark:text-white py-4">
                        Branding
                    </h3>
                    <p class="text-md text-gray-500 dark:text-gray-300 py-4">
                        Share relevant, engaging, and inspirational brand messages to create a connection with your audience.
                    </p>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 mt-6  px-4 py-4 bg-white shadow-lg rounded-lg dark:bg-gray-800">
                    <div class="flex-shrink-0">
                        <div class="flex items-center mx-auto justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <i class="fas fa-dashboard"></i>
                        </div>
                    </div>
                    <h3 class="text-2xl sm:text-xl text-gray-700 font-semibold dark:text-white py-4">
                        SEO Marketing
                    </h3>
                    <p class="text-md  text-gray-500 dark:text-gray-300 py-4">
                        Let us help you level up your search engine game, explore our solutions for digital marketing for your business.
                    </p>
                </div>
            </div>
        </section>
        
        <section class="py-6 bg-gray-100 text-gray-900 mt-12 max-w-4xl mx-auto">
            <div class="container mx-auto flex flex-col items-center justify-center p-4 space-y-8 md:p-10 lg:space-y-0 lg:flex-row lg:justify-between">
                <h1 class="text-3xl font-semibold leading-tight text-center lg:text-left">
                    Ready to collect your testimonials?
                </h1>
                <a href="{{route('register')}}" class="px-8 py-3 text-lg font-semibold rounded bg-blue-600 text-gray-50">Get Started</a>
            </div>
        </section>

        <footer class="bg-gray-100 text-gray-900 mt-8">
            <div class="container flex flex-col p-4 mx-auto md:p-8 lg:flex-row divide-gray-600">
                <ul class="self-center py-6 space-y-4 text-center sm:flex sm:space-y-0 sm:justify-around sm:space-x-4 lg:flex-1 lg:justify-start">
                    <li>Register</li>
                    <li>About</li>
                    <li>Blog</li>
                    <li>Pricing</li>
                    <li>Contact</li>
                </ul>
                <div class="flex flex-col justify-center pt-6 lg:pt-0">
                    <div class="flex justify-center space-x-4">
                        <a href="#" title="Instagram" class="flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-blue-600 text-gray-50">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" title="Pinterest" class="flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-blue-600 text-gray-50">
                            <i class="fab fa-pinterest"></i>
                        </a>
                        <a href="#" title="Twitter" class="flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-blue-600 text-gray-50">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" title="Facebook" class="flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-blue-600 text-gray-50">
                           <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" title="Gmail" class="flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-blue-600 text-gray-50">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>
