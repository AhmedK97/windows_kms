<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ratiborus KMS (Windows KMS)</title>

    {{-- icon --}}
    <link rel="icon" href="{{ asset('storage/icon/icon.webp') }}" type="image/x-icon" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    @vite('resources/css/app.css')

    <style>
        h2 {
            display: block !important;
            font-size: 1.5em !important;
            margin-block-start: .83em !important;
            margin-block-end: .83em !important;
            margin-inline-start: 0px !important;
            margin-inline-end: 0px !important;
            font-weight: 700 !important;

        }

        h1 {
            display: block !important;
            font-size: 2.5em !important;
            margin-block-start: .83em !important;
            margin-block-end: .83em !important;
            margin-inline-start: 0px !important;
            margin-inline-end: 0px !important;
            font-weight: 700 !important;
            color: white;
        }


        p {
            display: block !important;
            margin-block-start: 1em !important;
            margin-block-end: 1em !important;
            margin-inline-start: 0px !important;
            margin-inline-end: 0px !important;
            color: white;
        }

        li{
            color: white !important
        }
    </style>

    <meta name="description"
        content="Ratiborus KMS (Windows KMS) Tools (KMS Tools Portable) is the best free all-in-one toolkit designed for Windows and office activator. It can be used to activate all editions of Windows and Office" />
    <meta name="keywords"
        content="Ratiborus KMS, THS, Ratiborus KMS free download, Ratiborus KMS PC download , Ratiborus KMS creak , Ratiborus KMS creaked , Ratiborus KMS free download , Ratiborus KMS free , Ratiborus KMS download , windows KMS , download Windows KMS , free Windows KMS " />
    <meta name="author" content="THS" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#000000" />
    <meta name="msapplication-TileColor" content="#000000" />
    <meta name="msapplication-TileImage" content="{{ asset('storage/icon/icon.webp') }}" />
    <meta name="msapplication-config" content="{{ asset('storage/icon/browserconfig.xml') }}" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Ratiborus KMS (Windows KMS)" />
    <meta name="application-name" content="Ratiborus KMS (Windows KMS)" />

</head>

<body class="font-sans antialiased dark:bg-gray-900 dark:text-gray-100">
    <div class="bg-gray-50 text-black/50 dark:bg-gray-900 dark:text-gray-100">
        <x-nav-bar />
        <div class="relative w-full xl:px-28 bg-[#050708]">

            @if (Auth::check())
                <div class="flex justify-center">
                    <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="name" placeholder="File Name" class="p-2 bg-[#050708] m-2 border rounded">
                        <input type="text" name="version" placeholder="Version" class="p-2 bg-[#050708] m-2 border rounded">
                        <input type="text" name="size" placeholder="Size" class="p-2 bg-[#050708] m-2 border rounded">
                        <input type="url" name="path" class="p-2 bg-[#050708] m-2 border rounded">
                        <button type="submit" class="p-2 bg-[#050708] m-2 border rounded">Submit</button>
                    </form>
            @endif
            <div class="grid grid-cols-1 col-start-1 col-end-7 mx-auto lg:grid-cols-6">

                <div class="p-4 rounded-md lg:order-first md:col-span-4">
                    <dev>
                        <h1 class="mt-5 mb-6 text-4xl font-bold text-start">Ratiborus KMS (Windows KMS)</h1>
                    </dev>
                    <div id="default-carousel" class="relative w-full" style="margin: auto" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-[29rem]">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('storage/1.jpg') }}"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('storage/2.jpg') }}"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('storage/3.jpg') }}"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('storage/4.jpg') }}"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>

                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                                data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                                data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                                data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                                data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                                data-carousel-slide-to="4"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>

                    {{-- <x-Images /> --}}
                    <x-paragraph />
                </div>

                <div class="col-span-2 m-4 mt-24 space-y-4 md:col-span-2">

                    {{-- gave versions --}}
                    <div class="p-4 text-xl font-bold text-center text-green-400 border">
                        <h2 class="!text-2xl	">Download Ratiborus KMS (Windows KMS) :</h2>
                    </div>

                    @foreach ($files as $file)
                        <x-file-download :fileId="$file->id" :fileName="$file->name" :fileSize="$file->size" :releaseDate="$file->created_at" :filePath="$file->path"
                            :version="$file->version" />
                    @endforeach

                    {{-- <div class="table pt-10 m-auto">
                        <h2 class="!text-lg font-bold   text-green-500">Tutorial Video How To Use Ratiborus KMS (Windows KMS)</h2>

                        <iframe width="360" height="300" src="https://www.youtube.com/embed/mZblX75AbOM?si=uhBqalkK0M48JG9y"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div> --}}
                </div>

            </div>

        </div>
    </div>
    </div>

    {{-- footer --}}
    <x-footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>
