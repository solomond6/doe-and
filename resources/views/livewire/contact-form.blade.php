<div>
    <div class="border-t border-gray-200">
        <div class="container mx-auto px-6 py-10">
            <div class="max-w-lg mx-left bg-white">
                <h2 class="text-2xl font-semibold mb-4">Contact Me</h2>
                @if (Session::has('success'))
                    <div class="bg-green-100 border-t border-b border-500 text-black-700 px-4 py-3 mb-3" role="alert">
                      <p class="text-sm">{{ Session::get('success') }}</p>
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="bg-red-100 border-t border-b border-500 text-white-700 px-4 py-3 mb-3" role="alert">
                      <p class="text-sm">{{ Session::get('error') }}</p>
                    </div>
                @endif

                <form wire:submit.prevent="submitForm">
                    <div class="mb-4">
                        <input type="text" id="name" name="name" wire:model="name" class="w-full px-2 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-600" placeholder="Enter your name" required>
                        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <input type="email" id="email" name="email" wire:model="email" class="w-full px-2 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-600" placeholder="Enter your email" required>
                        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <textarea id="message" name="message" wire:model="message" class="w-full px-2 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-600" rows="4" placeholder="How can i help?" required></textarea>
                        @error('message') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>
