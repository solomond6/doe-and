<div wire:click="refreshData">
    <div class="px-6 py-4">
        <div class="flex justify-between">
            <img class="h-12 w-12 rounded-full object-cover float-left" src="{{$data['picture']}}" alt="Profile Picture">
            <div class="float-right">
                <ul class="flex gap-4">
                    <li>
                        <a href="#" class="text-gray-600 hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                <path d="M12 14C15.3137 14 18 11.3137 18 8C18 4.68629 15.3137 2 12 2C8.68629 2 6 4.68629 6 8C6 11.3137 8.68629 14 12 14Z"></path>
                                <path d="M2 22C2 20.6863 2.84285 19.5211 4.09557 19.1436C5.77848 18.6362 8.4875 18 12 18C15.5125 18 18.2215 18.6362 19.9044 19.1436C21.1571 19.5211 22 20.6863 22 22"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                              <path d="M22 6.21l-10 7.69-10-7.69M2 9.3l8 6.13 8-6.13M2 9.3l8 6.13 8-6.13"></path>
                              <path d="M2 9.3l8 6.13 8-6.13M2 9.3l8 6.13 8-6.13"></path>
                              <path d="M2 9.3l8 6.13 8-6.13M2 9.3l8 6.13 8-6.13"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call">
                              <path d="M23 1L17.15 5.85C16.291 5.158 15.263 4.831 14.2 4.93L11.54 5.31C9.72 5.57 8.44 6.85 8.17 8.67L7.79 11.33C7.69 12.39 7.36 13.41 6.67 14.27L1 23"></path>
                              <path d="M16 8.5C16 12.6421 12.6421 16 8.5 16"></path>
                              <path d="M23 1L17.15 5.85C16.291 5.158 15.263 4.831 14.2 4.93L11.54 5.31C9.72 5.57 8.44 6.85 8.17 8.67L7.79 11.33C7.69 12.39 7.36 13.41 6.67 14.27L1 23"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
                <ul class="flex gap-4">
                    <li>
                        <a href="#" class="text-gray-600 hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call">
                              <path d="M23 1L17.15 5.85C16.291 5.158 15.263 4.831 14.2 4.93L11.54 5.31C9.72 5.57 8.44 6.85 8.17 8.67L7.79 11.33C7.69 12.39 7.36 13.41 6.67 14.27L1 23"></path>
                              <path d="M16 8.5C16 12.6421 12.6421 16 8.5 16"></path>
                              <path d="M23 1L17.15 5.85C16.291 5.158 15.263 4.831 14.2 4.93L11.54 5.31C9.72 5.57 8.44 6.85 8.17 8.67L7.79 11.33C7.69 12.39 7.36 13.41 6.67 14.27L1 23"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                              <path d="M22 6.21l-10 7.69-10-7.69M2 9.3l8 6.13 8-6.13M2 9.3l8 6.13 8-6.13"></path>
                              <path d="M2 9.3l8 6.13 8-6.13M2 9.3l8 6.13 8-6.13"></path>
                              <path d="M2 9.3l8 6.13 8-6.13M2 9.3l8 6.13 8-6.13"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shuffle">
                                <polyline points="16 3 21 3 21 8"></polyline>
                                  <line x1="4" y1="20" x2="21" y2="3"></line>
                                  <polyline points="21 16 21 21 16 21"></polyline>
                                  <line x1="15" y1="15" x2="21" y2="21"></line>
                                  <line x1="4" y1="4" x2="9" y2="9"></line>
                            </svg>
                        </a>
                    </li>
                </ul>
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