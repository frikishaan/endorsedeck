<div>
    <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose text-center">
        <h2>
            {{$wall->name}}
        </h2>
        <p>
            {{$wall->description}}
        </p>
        <x-jet-button wire:click="$set('displayingFormModal', true)">
            {{ __('Write a testimonial') }}
        </x-jet-button>

    </div>

    <!-- Form Modal -->
    <x-jet-dialog-modal wire:model="displayingFormModal">
        <x-slot name="title">
            {{ __('Add testimonial') }}
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="submit">
                <div>
                    <label for="text" class="block font-medium text-sm text-gray-700">Text</label>
                    <textarea wire:model.lazy="text" id="text" cols="30" rows="5" placeholder="Write your testimonial" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"></textarea>
                </div>

                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Your Name') }}" class="requried" />
                    <x-jet-input wire:model.lazy="name" id="name" class="block mt-1 w-full" type="text" autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Your Email') }}" class="required"/>
                    <x-jet-input wire:model.lazy="email" id="email" class="block mt-1 w-full" type="email" required />
                </div>

            </form>
        </x-slot>

        <x-slot name="footer">

            <x-jet-secondary-button wire:click="$set('displayingFormModal', false)" wire:loading.attr="disabled">
                {{ __('Close') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-4" wire:loading.attr="disabled" type="submit" wire:click="submit">
                {{ __('Send your testimonial') }}
            </x-jet-button>

        </x-slot>
    </x-jet-dialog-modal>

    <!-- Thank you Modal -->
    <x-jet-dialog-modal wire:model="displayingThankyouModal">
        <x-slot name="title">
            {{ __('Submission successful') }}
        </x-slot>

        <x-slot name="content">
            <h1>
                {{$wall->thankyou_page['title']}}
            </h1>
            <p>
                {{$wall->thankyou_page['message']}}
            </p>
        </x-slot>

        <x-slot name="footer">

            <x-jet-secondary-button wire:click="$set('displayingThankyouModal', false)" wire:loading.attr="disabled">
                {{ __('Close') }}
            </x-jet-secondary-button>

        </x-slot>
    </x-jet-dialog-modal>

</div>
