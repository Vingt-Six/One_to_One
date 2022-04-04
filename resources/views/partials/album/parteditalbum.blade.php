<section class="min-h-screen bg-gradient-to-t from-blue-200 to-indigo-900">
    <form action="/albums/{{ $album -> id }}" method="POST" enctype="multipart/form-data" class="pt-16">
        @csrf
        @method('PUT')
        <div class="flex w-full justify-center bg-grey-lighter">
            <label
                class="w-full mx-20 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-purple-400 hover:text-white">
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                </svg>
                <span class="mt-2 text-base leading-normal">Select a file</span>
                <input type='file' class="hidden" name="src"/>
            </label>
        </div>
        <button class="flex items-center justify-center w-full px-2 py-1 text-white transition-colors duration-200 transform bg-blue-600 rounded-md focus:outline-none sm:w-auto sm:mx-1 hover:bg-blue-500 focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-40 mt-10" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
            </svg>
            <span class="mx-1">
                Upload
            </span>
        </button>
    </form>
</section>
