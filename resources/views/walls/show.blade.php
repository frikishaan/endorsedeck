<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$wall->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> --}}
                
                <div class="container mx-auto px-4 sm:px-8">
                    <div class="py-8">
                        <h2 class="text-bold text-3xl">Testimonials</h2>

                        <livewire:walls.show  :wallId="$id"/>
                    </div>
                </div>

            </div>
        {{-- </div> --}}
    </div>
</x-app-layout>


{{-- <section class="container flex flex-row p-6 justify-center">
    <div class="flex flex-col shadow-md border-2 border-grey-200 rounded-2xl w-36 p-4 bg-white dark:bg-gray-800 m-2">
        <div class="text-2xl text-gray-500">
            My Wall
        </div>
    </div>
    <div class="flex flex-col shadow-md border-2 border-grey-200 rounded-2xl w-36 p-4 bg-white dark:bg-gray-800 m-2">
        <div class="text-3xl font-bold">40</div>
        <div class="text-sm text-gray-500">
            <i class="fas fa-users text-blue-500"></i>
            Testimonials
        </div>
    </div>
    <div class="flex flex-col shadow-md border-2 border-grey-200 rounded-2xl w-36 p-4 bg-white dark:bg-gray-800 m-2">
        <div class="text-3xl font-bold">
            30
        </div>
        <div class="text-sm text-gray-500">
            <span> <i class="fas fa-check text-green-500"></i> </span>
            Approved
        </div>
    </div>
</section> --}}