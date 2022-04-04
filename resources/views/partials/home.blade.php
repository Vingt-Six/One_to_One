<section>
    <div class="grid place-items-center min-h-screen bg-gradient-to-t from-blue-200 to-indigo-900 p-5">
        <div>
            <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold text-gray-200 mb-5">Made for you</h1>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <!-- CARD 1 -->
                @foreach ($albums as $album)
                    <div class="bg-gray-900 shadow-lg rounded-xl p-3">
                        <div class="group relative">
                            <img class="w-full md:w-72 block rounded"
                                src="{{ asset('storage/' . $album->photo->src) }}" alt="" />
                            <div
                                class="absolute bg-black rounded bg-opacity-0 group-hover:bg-opacity-60 w-full h-full top-0 flex items-center group-hover:opacity-100 transition justify-evenly">
                                <form action="/albums/{{ $album->id }}" method="POST" class="m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="hover:scale-110 text-white opacity-0 transform translate-y-3 group-hover:translate-y-0 group-hover:opacity-100 transition mt-1"
                                        type="submit">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.3394 9.32245C16.7434 8.94589 16.7657 8.31312 16.3891 7.90911C16.0126 7.50509 15.3798 7.48283 14.9758 7.85938L12.0497 10.5866L9.32245 7.66048C8.94589 7.25647 8.31312 7.23421 7.90911 7.61076C7.50509 7.98731 7.48283 8.62008 7.85938 9.0241L10.5866 11.9502L7.66048 14.6775C7.25647 15.054 7.23421 15.6868 7.61076 16.0908C7.98731 16.4948 8.62008 16.5171 9.0241 16.1405L11.9502 13.4133L14.6775 16.3394C15.054 16.7434 15.6868 16.7657 16.0908 16.3891C16.4948 16.0126 16.5171 15.3798 16.1405 14.9758L13.4133 12.0497L16.3394 9.32245Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12ZM12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21Z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </form>

                                <a href="https://deezer.page.link/62ZNF9UYHLYWyKnz8" target="_blank">
                                    <button
                                        class="hover:scale-110 text-white opacity-0 transform translate-y-3 group-hover:translate-y-0 group-hover:opacity-100 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" />
                                        </svg>
                                    </button>
                                </a>

                                <a href="/albums/{{ $album->id }}/edit">
                                    <button
                                        class="hover:scale-110 text-white opacity-0 transform translate-y-3 group-hover:translate-y-0 group-hover:opacity-100 transition">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M21.2635 2.29289C20.873 1.90237 20.2398 1.90237 19.8493 2.29289L18.9769 3.16525C17.8618 2.63254 16.4857 2.82801 15.5621 3.75165L4.95549 14.3582L10.6123 20.0151L21.2189 9.4085C22.1426 8.48486 22.338 7.1088 21.8053 5.99367L22.6777 5.12132C23.0682 4.7308 23.0682 4.09763 22.6777 3.70711L21.2635 2.29289ZM16.9955 10.8035L10.6123 17.1867L7.78392 14.3582L14.1671 7.9751L16.9955 10.8035ZM18.8138 8.98525L19.8047 7.99429C20.1953 7.60376 20.1953 6.9706 19.8047 6.58007L18.3905 5.16586C18 4.77534 17.3668 4.77534 16.9763 5.16586L15.9853 6.15683L18.8138 8.98525Z"
                                                fill="currentColor" />
                                            <path d="M2 22.9502L4.12171 15.1717L9.77817 20.8289L2 22.9502Z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-white text-lg">{{ $album->name }}</h3>
                            <p class="text-gray-400">{{ $album->author }}</p>
                        </div>
                    </div>
                @endforeach
                <!-- END OF CARD 1 -->

            </div>
        </div>
    </div>

</section>
