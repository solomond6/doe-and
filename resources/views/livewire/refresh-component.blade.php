<div wire:click="refreshData">
    <div class="px-6 py-4">
        <div class="flex items-center" wire:click="refreshData">
            <img class="h-12 w-12 rounded-full object-cover" src="{{$data['picture']}}" alt="Profile Picture">
            <div class="ml-4">
                <h2 class="text-lg fontbold"></h2>
                <p class="text-gray-600"></p>
            </div>
        </div>
    </div>
     <div class="">
        <div class="px-6 py-4">
            <h3 class="text-xl font-semibold mb-2">{{$data['name']}}</h3>
            <p class="text-gray-600">Hi, I'm {{$data['name']}} and I live in {{$data['city']}}, {{$data['state']}}, {{$data['country']}}.</p>
        </div>
    </div>
</div>