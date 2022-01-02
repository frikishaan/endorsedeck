<div>

    @if (session()->has('message') && session()->has('type'))
        <div class="container {{session('type')}} flex items-center text-white text-sm font-bold px-4 py-3 relative" role="alert" x-data="{ showAlert: true }" x-show="showAlert" x-init="setTimeout(() => showAlert = false, 5000)">
            <p>
                {{session('message')}}
            </p>
        </div>
    @endif

    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <button wire:click="$refresh" wire:loading.attr="disabled" class="py-2 px-2 flex justify-center items-center  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  w-8 h-8 rounded-lg float-right">
            <i class="fas fa-sync-alt"></i>
        </button>
        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden mt-4">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                            Name
                        </th>
                        <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                            Email
                        </th>
                        <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                            Created at
                        </th>
                        <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                            Approved
                        </th>
                        <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($testimonials) > 0)
                        
                        @foreach ($testimonials as $testimonial)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="mr-4">
                                            <a href="#" class="block relative">
                                                <img alt="profil" src="https://ui-avatars.com/api/?name={{$testimonial->user['name']}}&color=7F9CF5&background=EBF4FF" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                            </a>
                                        </div>
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$testimonial->user['name']}}
                                        </p>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$testimonial->user['email']}}
                                    </p>
                                </td>
                                {{-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$testimonial->text}}
                                    </p>
                                </td> --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$testimonial->created_at->diffForHumans()}}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                    <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span class="relative">
                                            @if ($testimonial->is_approved)
                                                <i class="fas fa-check text-green-500"></i>
                                            @else 
                                                <i class="fas fa-times text-red-500"></i>
                                            @endif
                                        </span>
                                    </span>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <button class="mr-4 has-tooltip" wire:click="approvalConfirmation('{{ $testimonial->_id }}')">
                                        <span class='tooltip rounded shadow-lg p-1 bg-gray-900 text-gray-100 -mt-8'>Approve</span>
                                        <i class="fas fa-check text-green-500"></i>
                                    </button>
                                    <button class=" has-tooltip" wire:click="deleteConfirmation('{{ $testimonial->_id }}')">
                                        <span class='tooltip rounded shadow-lg p-1 bg-gray-900 text-gray-100 -mt-8'>Delete</span>
                                        <i class="fas fa-trash-alt text-red-500"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                    @else 
                        <tr>
                            <td colspan="3">No testimonials found for this wall.</td>
                        </tr>
                    @endif
                    
                </tbody>
            </table>
            
            <div class="p-2">
                {{ $testimonials->links() }}
            </div>

        </div>
    </div>

    <!-- Delete testimonial Confirmation Modal -->
    <x-jet-dialog-modal wire:model="confirmDeletion">
        <x-slot name="title">
            {{ __('Delete testimonial') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete this testimonial? It will be deleted permanently.') }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmDeletion')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Delete testimonial') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>

    <!-- Approve testimonial Confirmation Modal -->
    <x-jet-dialog-modal wire:model="confirmApproval">
        <x-slot name="title">
            {{ __('Approve testimonial') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to approve this testimonial?') }}               
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmApproval')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2 bg-green-600 hover:bg-green-500 focus:border-green-700 focus:ring-green-200 active:bg-green-600" wire:click="approve" wire:loading.attr="disabled">
                {{ __('Approve testimonial') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>

</div>
