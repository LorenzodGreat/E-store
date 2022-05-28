<div x-data="{ SortOpen: false, ColorOpen: false, BrandOpen: false, CategoryOpen: false }">
    <!-- Filters -->
    <section aria-labelledby="filter-heading" class="border-t p-4 border-gray-200 pt-6">
        <h2 id="filter-heading" class="sr-only">Product filters</h2>

        <div class="flex items-center justify-between">
            <div class="relative z-10 inline-block text-left">
                <div>
                    <button type="button" @click="SortOpen =!SortOpen"
                        class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                        id="menu-button" aria-expanded="false" aria-haspopup="true">
                        Sort
                        <!-- Heroicon name: solid/chevron-down -->
                        <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div x-cloak @click="SortOpen = false" x-show="SortOpen" @click.away="SortOpen = false"
                    x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    class="origin-top-right absolute mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
                    class="origin-top-left absolute right-0 z-10 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-900" role="menuitem"
                            tabindex="-1" id="menu-item-0"> Most Popular </a>

                        <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-900" role="menuitem"
                            tabindex="-1" id="menu-item-1"> Best Rating </a>

                        <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-900" role="menuitem"
                            tabindex="-1" id="menu-item-2"> Newest </a>

                        <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-900" role="menuitem"
                            tabindex="-1" id="menu-item-3"> Price: Low to High </a>

                        <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-900" role="menuitem"
                            tabindex="-1" id="menu-item-4"> Price: High to Low </a>
                    </div>
                </div>
            </div>

            <!-- Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state. -->
            <button type="button" class="inline-block text-sm font-medium text-gray-700 hover:text-gray-900 sm:hidden">
                Filters
            </button>

            <div class="hidden sm:flex sm:items-baseline sm:space-x-8">
                <div id="menu" class="relative z-10 inline-block text-left">
                    <div>
                        <button type="button" @click="CategoryOpen =!CategoryOpen"
                            class="group inline-flex items-center justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                            aria-expanded="false">
                            <span>Category</span>

                            <span
                                class="ml-1.5 rounded py-0.5 px-1.5 bg-gray-200 text-xs font-semibold text-gray-700 tabular-nums">1</span>
                            <!-- Heroicon name: solid/chevron-down -->
                            <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>


                    <div x-cloak @click="CategoryOpen = false" x-show="CategoryOpen" @click.away="CategoryOpen = false"
                        x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-200 transform"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <form class="space-y-4">
                            <div class="flex items-center">
                                <input id="filter-category-0" name="category[]" value="tees" type="checkbox"
                                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-category-0"
                                    class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Tees </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-category-1" name="category[]" value="crewnecks" type="checkbox"
                                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-category-1"
                                    class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Crewnecks
                                </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-category-2" name="category[]" value="hats" type="checkbox"
                                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-category-2"
                                    class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Hats </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-category-3" name="category[]" value="bundles" type="checkbox"
                                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-category-3"
                                    class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Bundles
                                </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-category-4" name="category[]" value="carry" type="checkbox"
                                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-category-4"
                                    class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Carry
                                </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-category-5" name="category[]" value="objects" type="checkbox"
                                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-category-5"
                                    class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Objects
                                </label>
                            </div>
                        </form>
                    </div>
                </div>

                <div id="menu" class="relative z-10 inline-block text-left">
                    <div>
                        <button type="button" @click="BrandOpen =!BrandOpen"
                            class="group inline-flex items-center justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                            aria-expanded="false">
                            <span>Brand</span>
                            <!-- Heroicon name: solid/chevron-down -->
                            <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>


                    <div x-cloak @click="BrandOpen = false" x-show="BrandOpen" @click.away="BrandOpen = false"
                        x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-200 transform"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <form class="space-y-4">
                            <div class="flex items-center">
                                <input id="filter-brand-0" name="brand[]" value="clothing-company" type="checkbox"
                                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-brand-0"
                                    class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Clothing
                                    Company </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-brand-1" name="brand[]" value="fashion-inc" type="checkbox"
                                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-brand-1"
                                    class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Fashion Inc.
                                </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-brand-2" name="brand[]" value="shoes-n-more" type="checkbox"
                                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-brand-2"
                                    class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Shoes &#039;n
                                    More </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-brand-3" name="brand[]" value="supplies-n-stuff" type="checkbox"
                                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-brand-3"
                                    class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Supplies
                                    &#039;n Stuff </label>
                            </div>
                        </form>
                    </div>
                </div>

                <div id="menu" class="relative z-10 inline-block text-left">
                    <div>
                        <button type="button" @click="ColorOpen =!ColorOpen"
                            class="group inline-flex items-center justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                            aria-expanded="false">
                            <span>Color</span>
                            <!-- Heroicon name: solid/chevron-down -->
                            <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div x-cloak @click="ColorOpen = false" x-show="ColorOpen" @click.away="ColorOpen = false"
                        x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-200 transform"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <form class="space-y-4">
                            <div class="flex items-center">
                                <input id="filter-color-0" name="color[]" value="white" type="checkbox"
                                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-color-0"
                                    class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> White
                                </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-color-1" name="color[]" value="black" type="checkbox"
                                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-color-1"
                                    class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Black
                                </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-color-2" name="color[]" value="grey" type="checkbox"
                                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-color-2"
                                    class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Grey </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-color-3" name="color[]" value="blue" type="checkbox"
                                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-color-3"
                                    class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Blue </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-color-4" name="color[]" value="olive" type="checkbox"
                                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-color-4"
                                    class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Olive
                                </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-color-5" name="color[]" value="tan" type="checkbox"
                                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-color-5"
                                    class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Tan </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            {{-- <h2 class="text-xl font-bold text-gray-900">Customers also bought</h2> --}}

            <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                <div>
                    <div class="relative">
                        <div class="relative w-full h-72 rounded-lg overflow-hidden">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-related-product-01.jpg"
                                alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls."
                                class="w-full h-full object-center object-cover">
                        </div>
                        <div class="relative mt-4">
                            <h3 class="text-sm font-medium text-gray-900">Zip Tote Basket</h3>
                            <p class="mt-1 text-sm text-gray-500">White and black</p>
                        </div>
                        <div
                            class="absolute top-0 inset-x-0 h-72 rounded-lg p-4 flex items-end justify-end overflow-hidden">
                            <div aria-hidden="true"
                                class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                            <p class="relative text-lg font-semibold text-white">$140</p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="#"
                            class="relative flex bg-gray-100 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-gray-900 hover:bg-gray-200">Add
                            to bag<span class="sr-only">, Zip Tote Basket</span></a>
                    </div>
                </div>

                <!-- More products... -->
            </div>
        </div>
    </div>
</div>
