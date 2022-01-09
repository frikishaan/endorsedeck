<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">

                <section class="p-6 my-2">

                    <div class="container grid grid-cols-1 gap-6 mx-auto sm:grid-cols-2 xl:grid-cols-3">
                        <div class="flex p-4 space-x-4 rounded-lg md:space-x-6 bg-white text-gray-800 shadow-md">
                            <div class="flex justify-center p-2 align-middle rounded-lg sm:p-4 bg-blue-600">
                                <i class="fas fa-user fa-2x text-white"></i>
                            </div>
                            <div class="flex flex-col justify-center align-middle">
                                <p class="text-3xl font-semibold leading-none">{{auth()->user()->name}}</p>
                                <p class="capitalize">{{ '@' . auth()->user()->username}}</p>
                            </div>
                        </div>
                        <div class="flex p-4 space-x-4 rounded-lg md:space-x-6 bg-white text-gray-800 shadow-md">
                            <div class="flex justify-center p-2 align-middle rounded-lg sm:p-4 bg-blue-600">
                                <i class="fas fa-award fa-2x text-white"></i>
                            </div>
                            <div class="flex flex-col justify-center align-middle">
                                <p class="text-3xl font-semibold leading-none">{{count($walls)}}</p>
                                <p class="capitalize">Walls</p>
                            </div>
                        </div>
                        <div class="flex p-4 space-x-4 rounded-lg md:space-x-6 bg-white text-gray-800 shadow-md">
                            <div class="flex justify-center p-2 align-middle rounded-lg sm:p-4 bg-blue-600">
                                <i class="fas fa-smile fa-2x text-white"></i>
                            </div>
                            <div class="flex flex-col justify-center align-middle">
                                <p class="text-3xl font-semibold leading-none">{{$testimonials}}</p>
                                <p class="capitalize">Testimonials received</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-white dark:bg-gray-900 rounded-md shadow-md">
                    <div class="container px-6 py-10 mx-auto">
                        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">
                            Your walls
                        </h1>
            
                        <div class="w-36 float-right">
                            <a href="{{route('walls.create')}}" class="flex items-center px-2 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                <i class="fas fa-plus"></i>
                                <span class="mx-1">Create Wall</span>
                            </a>
                        </div>
                        
                        <p class="mt-4 text-gray-500 xl:mt-6 dark:text-gray-300">
                            Below is the list of your walls. You can edit and create walls from here.
                        </p>
                        
                        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                            
                            @foreach ($walls as $wall)
                                <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                        {{$wall->name}}
                                    </h1>

                                    <a href="{{route('walls.show', ['id' => $wall->_id])}}" class="inline-flex p-2 text-blue-500 capitalize transition-colors duration-200 transform bg-blue-100 rounded-full dark:bg-blue-500 dark:text-white hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{route('walls.edit', ['id' => $wall->_id])}}" class="inline-flex p-2 text-blue-500 capitalize transition-colors duration-200 transform bg-blue-100 rounded-full dark:bg-blue-500 dark:text-white hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{route('front.wall.index', ['id' => $wall->_id, 'username' => auth()->user()->username])}}" target="_blank" class="inline-flex p-2 text-blue-500 capitalize transition-colors duration-200 transform bg-blue-100 rounded-full dark:bg-blue-500 dark:text-white hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</x-app-layout>
