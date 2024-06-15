@include('app')

<div class="max-w-6xl rounded overflow-hidden flex flex-col mx-auto text-center pb-5 h-lvh">
    <div class="flex flex-1 w-full flex-col items-center justify-center text-center px-4 py-16 dark:to-gray-800">
        <h1
            class="mx-auto font-display text-5xl p-5 font-extrabold tracking-normal text-white-300 dark:text-gray-300 sm:text-7xl">
            SIMPLE
            <span class="relative whitespace-nowrap text-red-500 dark:text-orange-300">
                <span class="relative">ROUTING</span>
            </span>
            <span class="relative whitespace-nowrap text-white-600 dark:text-gray-300">AND</span>
            <span class="relative whitespace-nowrap text-red-500 dark:text-orange-300">
                <span class="relative">CONTROLLER</span>
            </span>
            <span class="relative whitespace-nowrap text-white-600 dark:text-gray-300">WITH LARAVEL</span>
        </h1>
        <h2 class="uppercase mx-auto mt-6 max-w-xl text-sm sm:text-white-400 text-white-500 dark:text-gray-300 leading-7">
            A simple project about creating a laravel project; creating routes, controllers; passing data to views;
            linking routes to views</p>
        </h2>
        <div class="flex gap-4 pt-6 items-center justify-center">
            <section>
                <a href="/about-me">
                    <button
                        class="px-8 py-2.5 rounded-md text-white font-semibold transition duration-200 border-2 border-transparent 
                            {{ request()->is('about-me') ? 'bg-yellow-500 text-black font-extrabold shadow' : 'bg-teal-500 hover:bg-white hover:text-black hover:border-teal-500' }}">
                        <div class="flex items-center justify-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M8 7a4 4 0 1 1 8 0a4 4 0 0 1-8 0m0 6a5 5 0 0 0-5 5a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3a5 5 0 0 0-5-5z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="uppercase">About Me</p>
                        </div>
                    </button>
                </a>
            </section>

            <section>
                <a href="/skills">
                    <button
                        class="px-8 py-2.5 rounded-md text-white font-semibold transition duration-200 border-2 border-transparent 
                            {{ request()->is('skills') ? 'bg-yellow-500 text-black font-extrabold shadow' : 'bg-blue-500 hover:bg-white hover:text-black hover:border-blue-500' }}">
                        <div class="flex items-center justify-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5s3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5z">
                                    <animateTransform attributeName="transform" attributeType="XML" dur="10s"
                                        from="0 12 12" repeatCount="indefinite" to="360 12 12" type="rotate" />
                                </path>
                            </svg>
                            <p class="uppercase">Skills</p>
                        </div>
                    </button>
                </a>
            </section>

            <section>
                <a href="/hobbies">
                    <button
                        class="px-8 py-2.5 rounded-md text-white font-semibold transition duration-200 border-2 border-transparent 
                            {{ request()->is('hobbies') ? 'bg-yellow-500 text-black font-extrabold shadow' : 'bg-pink-500 hover:bg-white hover:text-black hover:border-purple-500' }}">
                        <div class="flex items-center justify-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 22c3.719 0 7.063-2.035 8.809-5.314L13 12l7.809-4.686C19.063 4.035 15.719 2 12 2C6.486 2 2 6.486 2 12s4.486 10 10 10m-.5-16a1.5 1.5 0 1 1-.001 3.001A1.5 1.5 0 0 1 11.5 6" />
                            </svg>
                            <p class="uppercase">Hobbies</p>
                        </div>
                    </button>
                </a>
            </section>
        </div>
    </div>
    <hr />

</div>
