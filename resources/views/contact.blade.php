<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">

            <!-- livewive refresh component -->
            @livewire('refresh-component')

            <!-- livewive contact form -->
            <livewire:contact-form />
            
            <div class="border-t border-gray-200">
                <div class="px-6 py-4">
                    <ul class="w-full flex text-center">
                        <li class="w-full flex justify-center">
                            <a href="#" class="text-gray-600 hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                                    <path d="M20.875 0H3.125C1.402 0 0 1.402 0 3.125v17.75C0 22.598 1.402 24 3.125 24h9.78v-9.294H9.992V11.25h2.914V9.023c0-2.887 1.765-4.464 4.347-4.464 1.23 0 2.291.092 2.6.134v3.018H17.03c-1.398 0-1.672.665-1.672 1.643V11.25h3.359l-.437 3.456h-2.922V24h5.719C22.598 24 24 22.598 24 20.875V3.125C24 1.402 22.598 0 20.875 0"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="w-full flex justify-center">
                            <a href="#" class="text-gray-600 hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                                  <path d="M24 4.571c-.885.391-1.835.656-2.828.775 1.015-.609 1.8-1.574 2.165-2.723-.951.563-2.005.974-3.129 1.2-.896-.958-2.174-1.559-3.587-1.559-2.72 0-4.923 2.203-4.923 4.923 0 .386.044.758.129 1.117-4.09-.209-7.722-2.193-10.15-5.211-.425.712-.668 1.543-.668 2.423 0 1.692.862 3.185 2.174 4.064-.8-.025-1.553-.246-2.211-.615v.061c0 2.364 1.683 4.328 3.91 4.778-.41.111-.842.171-1.288.171-.315 0-.622-.03-.924-.089.622 1.943 2.429 3.357 4.563 3.394-1.672 1.311-3.779 2.092-6.065 2.092-.393 0-.781-.022-1.165-.067 2.158 1.381 4.722 2.189 7.481 2.189 8.976 0 13.877-7.437 13.877-13.879 0-.211-.005-.422-.015-.631.956-.692 1.793-1.557 2.448-2.542z"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="w-full flex justify-center">
                            <a href="#" class="text-gray-600 hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram" fill="currentColor" width="24" height="24">
                                  <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                  <path d="M16 11a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"></path>
                                  <line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>