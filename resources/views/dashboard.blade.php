<x-app-layout>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 justify-center">
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-2 text-white bg-blue-600 rounded-lg active" aria-current="page">
                                All
                            </a>
                        </li>
                        @foreach ( $categories as $category)
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-2 rounded-base hover:text-heading hover:bg-neutral-secondary-soft">
                                {{ $category->name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="mt-8 text-gray-900">
                @foreach ($posts as $post)
                <div class="bg-neutral-primary-soft block max-w-sm p-6 border border-default rounded-base shadow-xs">
                    <a href="#">
                        <img class="rounded-t-base" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
                    </a>
                    <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">Noteworthy technology acquisitions 2021</h5>
                    <p class="text-body mb-6">Here are the biggest technology acquisitions of 2025 so far, in reverse chronological order.</p>
                    <a href="#" class="inline-flex items-center text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                        Read more
                        <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </a>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>