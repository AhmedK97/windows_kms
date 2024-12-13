<div class="justify-between w-full px-4 py-4 border rounded">
    <div class="flex flex-col justify-between px-4">
        <div>
            <p class="!m-0 text-lg font-extrabold">{{ $fileName . ' ' . $version }}</p>
        </div>

        <div class="flex">
            <!-- version -->
            <div class="flex items-center m-0 text-xs">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" viewBox="0 0 100 100">
                    <path
                        d="M76.67 10c-7.366 0-13.337 5.97-13.337 13.333 0 6.204 4.258 11.374 10 12.861v7.139A3.334 3.334 0 0 1 70 46.666H36.667c-3.77 0-7.207 1.299-10 3.412v-13.88c5.742-1.491 10-6.66 10-12.864C36.667 15.97 30.697 10 23.333 10S10 15.97 10 23.333c0 6.204 4.258 11.374 10 12.858v27.617c-5.742 1.484-10 6.653-10 12.858C10 84.03 15.97 90 23.333 90s13.333-5.97 13.333-13.333c0-6.205-4.258-11.374-10-12.858v-.476c0-5.523 4.479-10 10-10H70c5.521 0 10-4.476 10-10v-7.137c5.739-1.488 10-6.657 10-12.863C90 15.97 84.03 10 76.67 10M30 76.667c0 3.685-2.985 6.666-6.667 6.666s-6.667-2.981-6.667-6.666a6.667 6.667 0 0 1 13.334 0M23.333 30a6.667 6.667 0 1 1 0-13.334 6.667 6.667 0 0 1 0 13.334">
                    </path>
                </svg>
                <p class="px-1 m-0 text-base font-bold">{{ $version }}</p>
            </div>

            <!-- size -->
            <div class="flex items-center px-2 m-0 text-xs">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.883 511.883" width="16" fill="white" height="16">
                    <path
                        d="M256.167 511.883c65.24 0 124.849-24.528 170.125-64.829L245.561 266.323a15 15 0 0 1-4.394-10.606V0C106.872 7.794 0 119.502 0 255.716c0 141.251 114.917 256.167 256.167 256.167">
                    </path>
                    <path
                        d="m292.38 270.716 155.125 155.125c37.19-41.781 60.933-95.77 64.378-155.125zm-21.213-30h240.716C504.377 111.386 400.496 7.506 271.167 0z">
                    </path>
                </svg>
                <p class="px-1 m-0 text-base font-bold">{{ $fileSize }}</p>
            </div>
        </div>

        <!-- release date -->
        <div class="flex items-center text-xs">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 -960 960 960" fill="white">
                <path
                    d="m627-287 45-45-159-160v-201h-60v225zM480-80q-82 0-155-31.5t-127.5-86-86-127.5T80-480t31.5-155 86-127.5 127.5-86T480-880t155 31.5 127.5 86 86 127.5T880-480t-31.5 155-86 127.5-127.5 86T480-80m0-60q140 0 240-100t100-240-100-240-240-100-240 100-100 240 100 240 240 100">
                </path>
            </svg>
            {{-- <p class="px-1 m-0">Release Date Placeholder</p> --}}
            <p class="px-1 !m-0 text-base font-bold">{{ $releaseDate->format('M d Y') }}</p>
        </div>

    </div>
    <div class="flex flex-wrap justify-around pt-4 m-auto w-fit md:my-auto">
        <div id="download-class-{{ $fileId }}" class="w-fit">
            <button id="downloadButton{{ $fileId }}" type="button"
                class="p-3 my-2 text-base text-white bg-gray-700 rounded d-flex w-fit hover:bg-slate-700 hover:text-white">
                <div class="flex space-x-2.5">
                    <img src="{{ asset('storage/icon/download-svgrepo-com.svg') }}" alt="download" width="25" height="25">
                    <span id="buttonText{{ $fileId }}">
                        Download
                    </span>
                </div>
            </button>
        </div>
    </div>
</div>
<script>
    document.getElementById('downloadButton{{ $fileId }}').addEventListener('click', function() {
        let counter = 10;
        this.disabled = true;
        const buttonText = document.getElementById('buttonText{{ $fileId }}');
        const interval = setInterval(() => {
            if (counter > 0) {
                buttonText.textContent = `Download (${counter})`;
                counter--;
            } else {
                clearInterval(interval);
                const downloadClass = document.getElementById('download-class-{{ $fileId }}');
                downloadClass.className = 'm-4';
                const downloadButton = document.getElementById('downloadButton{{ $fileId }}');
                const anchor = document.createElement('a');
                anchor.target = '_blank';
                anchor.href = "{{ $filePath }}";
                anchor.textContent = 'Click To Download';
                anchor.className = downloadButton.className + ' text-white bg-green-500 hover:bg-green-700';
                downloadButton.replaceWith(anchor);
            }
        }, 1000);
    });
</script>
