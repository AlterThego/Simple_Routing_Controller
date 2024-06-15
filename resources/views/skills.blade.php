<div class="flex items-center justify-center w-full gap-4 p-4">
    @include('components/buttons')
</div>

<div class="mt-20 w-4/6 mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="bg-white rounded-lg p-8 dark:bg-gray-800">
        <dl class="grid max-w-screen grid-cols-4 gap-2 p-4 mx-auto text-gray-900 dark:text-white text-center">
            <div class="flex flex-col items-center justify-end">
                <dt class="mb-2 text-xl font-extrabold text-center">{{ $progLang }}</dt>
                <dd class="text-gray-500 dark:text-gray-400">Programming Languages</dd>
            </div>
            <div class="flex flex-col items-center justify-end">
                <dt class="mb-2 text-xl font-extrabold">{{ $frameworks }}</dt>
                <dd class="text-gray-500 dark:text-gray-400">Framework Libraries</dd>
            </div>
            <div class="flex flex-col items-center justify-end">
                <dt class="mb-2 text-xl font-extrabold text-center">{{ $tools }}</dt>
                <dd class="text-gray-500 dark:text-gray-400">Tools</dd>
            </div>
            <div class="flex flex-col items-center justify-end">
                <dt class="mb-2 text-xl font-extrabold">{{ $softSkills }}</dt>
                <dd class="text-gray-500 dark:text-gray-400">Soft Skills</dd>
            </div>
        </dl>
    </div>
</div>
