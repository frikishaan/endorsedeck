<div>
    <div class="container px-6 py-10">

        <form wire:submit.prevent="submit">
            <div class="mb-6 w-full">
                <label for="name" class="required">Name</label>
                <input type="text" wire:model="name" class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" id="name" placeholder="Name of your wall">
                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            
            <div class="mb-6">
                <label for="name">Description</label>
                <textarea wire:model="description" rows="5" class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Write a message for your customers"></textarea>
                @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <label for="logo">Logo</label>
                <br>
                <input type="file" id="logo" wire:model="logo">
                <br>
                @error('logo') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <label for="nthankyou_titleame">Thank you title</label>
                <input type="text" wire:model="thankyou_title" class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" id="thankyou_title">
                @error('thankyou_title') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
           
            <div class="mb-6">
                <label for="thankyou_message">Thank you message</label>
                <input type="text" wire:model="thankyou_message" class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" id="thankyou_message" placeholder="Name of your wall">
                @error('thankyou_message') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="flex items-center px-2 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">Create Wall</button>
        </form>

    </div>
</div>
