<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Walls') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="bg-white dark:bg-gray-900">
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
                            You can find all your walls below. You can manage your walls by clicking the links.
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
                                    <a href="{{route('front.wall', ['id' => $wall->_id, 'username' => auth()->user()->username])}}" target="_blank" class="inline-flex p-2 text-blue-500 capitalize transition-colors duration-200 transform bg-blue-100 rounded-full dark:bg-blue-500 dark:text-white hover:underline hover:text-blue-600 dark:hover:text-blue-500">
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
