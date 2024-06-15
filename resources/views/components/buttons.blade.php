@include('app')

<section class="fixed top-0 left-0 p-6 justify-center align-center">
    <a href="/">
        <button
            class="shadow-[0_4px_14px_0_rgb(0,0,0,10%)] hover:shadow-[0_6px_20px_rgba(93,93,93,23%)] px-8 py-2 bg-[#fff] text-[#696969] rounded-md font-light transition duration-200 ease-linear">
            Home
        </button>
    </a>
</section>

<div class="flex top-0 gap-4 pt-6 items-center">
    <section>
        <a href="/about-me">
            <button
                class="px-8 py-2.5 rounded-md text-white font-semibold transition duration-200 border-2 border-transparent 
                {{ request()->is('about-me') ? 'bg-cyan-400 text-black font-extrabold shadow' : 'bg-teal-500 hover:bg-white hover:text-black hover:border-teal-500' }}">
                <div class="flex items-center justify-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M8 7a4 4 0 1 1 8 0a4 4 0 0 1-8 0m0 6a5 5 0 0 0-5 5a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3a5 5 0 0 0-5-5z"
                            clip-rule="evenodd" />
                    </svg>
                    <p class="{{ request()->is('about-me') ? 'block' : 'hidden' }}">About Me</p>
                </div>
            </button>
        </a>
    </section>

    <section>
        <a href="/skills">
            <button
                class="px-8 py-2.5 rounded-md text-white transition duration-200 border-2 border-transparent 
                {{ request()->is('skills') ? 'bg-cyan-400 text-black font-extrabold shadow' : 'bg-blue-500 hover:bg-white hover:text-black hover:border-blue-500' }}">
                <div class="flex items-center justify-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5s3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5z">
                            <animateTransform attributeName="transform" attributeType="XML" dur="10s"
                                from="0 12 12" repeatCount="indefinite" to="360 12 12" type="rotate" />
                        </path>
                    </svg>
                    <p class="{{ request()->is('skills') ? 'block' : 'hidden' }}">Skills</p>
                </div>
            </button>
        </a>
    </section>

    <section>
        <a href="/hobbies">
            <button
                class="px-8 py-2.5 rounded-md text-white transition duration-200 border-2 border-transparent 
                {{ request()->is('hobbies') ? 'bg-cyan-400 text-black font-extrabold shadow' : 'bg-pink-500 hover:bg-white hover:text-black hover:border-purple-500' }}">
                <div class="flex items-center justify-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 22c3.719 0 7.063-2.035 8.809-5.314L13 12l7.809-4.686C19.063 4.035 15.719 2 12 2C6.486 2 2 6.486 2 12s4.486 10 10 10m-.5-16a1.5 1.5 0 1 1-.001 3.001A1.5 1.5 0 0 1 11.5 6" />
                    </svg>
                    <p class="{{ request()->is('hobbies') ? 'block' : 'hidden' }}">Hobbies</p>
                </div>
            </button>
        </a>
    </section>
</div>
