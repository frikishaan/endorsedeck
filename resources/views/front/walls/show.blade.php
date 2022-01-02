<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo />
            </div>

            <livewire:front.create-testimonial-modal :wallId="$id" :username="$username"/>

        </div>
    </div>
</x-guest-layout>
