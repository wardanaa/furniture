<section class="pt-20 pb-24">
    <div class="container mx-auto px-4">
        <span class="mb-2 inline-block text-lg font-semibold text-orange-800">The FAQs</span>
        <h4 class="font-heading text-6xl">Help centre</h4>
        <p class="mb-36 text-lg text-gray-500 font-semibold">Everything you need to know about the product and billing.
        </p>
        <div class="flex flex-wrap -m-6">
            <div class="w-full md:w-1/2 p-6">
                <span class="mb-2 inline-block text-lg font-semibold text-orange-800">Support</span>
                <h4 class="font-heading text-6xl">FAQs</h4>
                <p class="text-lg text-gray-500 font-semibold">Everything you need to know about the product and billing.
                    Can’t find the answer you’re looking for? Please chat to our friendly team.</p>
            </div>
            <div class="w-full md:w-1/2 p-6">
                <div x-data="{ accordion: false }" x-on:click="accordion = !accordion" class="mb-10">
                    <div class="flex flex-wrap items-center justify-between -m-2 cursor-pointer">
                        <div class="w-auto p-2">
                            <h6 class="font-heading text-3xl">Is there a free trial available?</h6>
                        </div>
                        <div class="w-auto p-2">
                            <span x-show="accordion === false">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 7H9V1C9 0.734784 8.89464 0.48043 8.70711 0.292893C8.51957 0.105357 8.26522 0 8 0C7.73478 0 7.48043 0.105357 7.29289 0.292893C7.10536 0.48043 7 0.734784 7 1V7H1C0.734784 7 0.48043 7.10536 0.292893 7.29289C0.105357 7.48043 0 7.73478 0 8C0 8.26522 0.105357 8.51957 0.292893 8.70711C0.48043 8.89464 0.734784 9 1 9H7V15C7 15.2652 7.10536 15.5196 7.29289 15.7071C7.48043 15.8946 7.73478 16 8 16C8.26522 16 8.51957 15.8946 8.70711 15.7071C8.89464 15.5196 9 15.2652 9 15V9H15C15.2652 9 15.5196 8.89464 15.7071 8.70711C15.8946 8.51957 16 8.26522 16 8C16 7.73478 15.8946 7.48043 15.7071 7.29289C15.5196 7.10536 15.2652 7 15 7Z"
                                        fill="#1E2238"></path>
                                </svg>
                            </span>
                            <span x-show="accordion === true">
                                <svg width="16" height="2" viewbox="0 0 16 2" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1C0 1.26522 0.105357 1.51957 0.292893 1.70711C0.48043 1.89464 0.734784 2 1 2H15C15.2652 2 15.5196 1.89464 15.7071 1.70711C15.8946 1.51957 16 1.26522 16 1C16 0.734784 15.8946 0.48043 15.7071 0.292893C15.5196 0.105357 15.2652 0 15 0Z"
                                        fill="#1E2238"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div x-ref="container"
                        :style="accordion ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''"
                        class="overflow-hidden max-h-0 duration-500">
                        <p class="mt-2 text-lg text-gray-500 font-semibold">Yes, you can try us for free for 30 days. If
                            you want, we’ll provide you with a free, personalized 30-minute onboarding call to get you
                            up and running as soon as possible.</p>
                    </div>
                </div>
                <div x-data="{ accordion: false }" x-on:click="accordion = !accordion" class="mb-10">
                    <div class="flex flex-wrap items-center justify-between -m-2 cursor-pointer">
                        <div class="w-auto p-2">
                            <h6 class="font-heading text-3xl">Can I change my plan later?</h6>
                        </div>
                        <div class="w-auto p-2">
                            <span x-show="accordion === false">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 7H9V1C9 0.734784 8.89464 0.48043 8.70711 0.292893C8.51957 0.105357 8.26522 0 8 0C7.73478 0 7.48043 0.105357 7.29289 0.292893C7.10536 0.48043 7 0.734784 7 1V7H1C0.734784 7 0.48043 7.10536 0.292893 7.29289C0.105357 7.48043 0 7.73478 0 8C0 8.26522 0.105357 8.51957 0.292893 8.70711C0.48043 8.89464 0.734784 9 1 9H7V15C7 15.2652 7.10536 15.5196 7.29289 15.7071C7.48043 15.8946 7.73478 16 8 16C8.26522 16 8.51957 15.8946 8.70711 15.7071C8.89464 15.5196 9 15.2652 9 15V9H15C15.2652 9 15.5196 8.89464 15.7071 8.70711C15.8946 8.51957 16 8.26522 16 8C16 7.73478 15.8946 7.48043 15.7071 7.29289C15.5196 7.10536 15.2652 7 15 7Z"
                                        fill="#1E2238"></path>
                                </svg>
                            </span>
                            <span x-show="accordion === true">
                                <svg width="16" height="2" viewbox="0 0 16 2" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1C0 1.26522 0.105357 1.51957 0.292893 1.70711C0.48043 1.89464 0.734784 2 1 2H15C15.2652 2 15.5196 1.89464 15.7071 1.70711C15.8946 1.51957 16 1.26522 16 1C16 0.734784 15.8946 0.48043 15.7071 0.292893C15.5196 0.105357 15.2652 0 15 0Z"
                                        fill="#1E2238"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div x-ref="container"
                        :style="accordion ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''"
                        class="overflow-hidden max-h-0 duration-500">
                        <p class="mt-2 text-lg text-gray-500 font-semibold">Yes, you can try us for free for 30 days. If
                            you want, we’ll provide you with a free, personalized 30-minute onboarding call to get you
                            up and running as soon as possible.</p>
                    </div>
                </div>
                <div x-data="{ accordion: false }" x-on:click="accordion = !accordion" class="mb-10">
                    <div class="flex flex-wrap items-center justify-between -m-2 cursor-pointer">
                        <div class="w-auto p-2">
                            <h6 class="font-heading text-3xl">What is your cancellation policy?</h6>
                        </div>
                        <div class="w-auto p-2">
                            <span x-show="accordion === false">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 7H9V1C9 0.734784 8.89464 0.48043 8.70711 0.292893C8.51957 0.105357 8.26522 0 8 0C7.73478 0 7.48043 0.105357 7.29289 0.292893C7.10536 0.48043 7 0.734784 7 1V7H1C0.734784 7 0.48043 7.10536 0.292893 7.29289C0.105357 7.48043 0 7.73478 0 8C0 8.26522 0.105357 8.51957 0.292893 8.70711C0.48043 8.89464 0.734784 9 1 9H7V15C7 15.2652 7.10536 15.5196 7.29289 15.7071C7.48043 15.8946 7.73478 16 8 16C8.26522 16 8.51957 15.8946 8.70711 15.7071C8.89464 15.5196 9 15.2652 9 15V9H15C15.2652 9 15.5196 8.89464 15.7071 8.70711C15.8946 8.51957 16 8.26522 16 8C16 7.73478 15.8946 7.48043 15.7071 7.29289C15.5196 7.10536 15.2652 7 15 7Z"
                                        fill="#1E2238"></path>
                                </svg>
                            </span>
                            <span x-show="accordion === true">
                                <svg width="16" height="2" viewbox="0 0 16 2" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1C0 1.26522 0.105357 1.51957 0.292893 1.70711C0.48043 1.89464 0.734784 2 1 2H15C15.2652 2 15.5196 1.89464 15.7071 1.70711C15.8946 1.51957 16 1.26522 16 1C16 0.734784 15.8946 0.48043 15.7071 0.292893C15.5196 0.105357 15.2652 0 15 0Z"
                                        fill="#1E2238"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div x-ref="container"
                        :style="accordion ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''"
                        class="overflow-hidden max-h-0 duration-500">
                        <p class="mt-2 text-lg text-gray-500 font-semibold">Yes, you can try us for free for 30 days. If
                            you want, we’ll provide you with a free, personalized 30-minute onboarding call to get you
                            up and running as soon as possible.</p>
                    </div>
                </div>
                <div x-data="{ accordion: false }" x-on:click="accordion = !accordion" class="mb-10">
                    <div class="flex flex-wrap items-center justify-between -m-2 cursor-pointer">
                        <div class="w-auto p-2">
                            <h6 class="font-heading text-3xl">Can other info be added to an invoice?</h6>
                        </div>
                        <div class="w-auto p-2">
                            <span x-show="accordion === false">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 7H9V1C9 0.734784 8.89464 0.48043 8.70711 0.292893C8.51957 0.105357 8.26522 0 8 0C7.73478 0 7.48043 0.105357 7.29289 0.292893C7.10536 0.48043 7 0.734784 7 1V7H1C0.734784 7 0.48043 7.10536 0.292893 7.29289C0.105357 7.48043 0 7.73478 0 8C0 8.26522 0.105357 8.51957 0.292893 8.70711C0.48043 8.89464 0.734784 9 1 9H7V15C7 15.2652 7.10536 15.5196 7.29289 15.7071C7.48043 15.8946 7.73478 16 8 16C8.26522 16 8.51957 15.8946 8.70711 15.7071C8.89464 15.5196 9 15.2652 9 15V9H15C15.2652 9 15.5196 8.89464 15.7071 8.70711C15.8946 8.51957 16 8.26522 16 8C16 7.73478 15.8946 7.48043 15.7071 7.29289C15.5196 7.10536 15.2652 7 15 7Z"
                                        fill="#1E2238"></path>
                                </svg>
                            </span>
                            <span x-show="accordion === true">
                                <svg width="16" height="2" viewbox="0 0 16 2" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1C0 1.26522 0.105357 1.51957 0.292893 1.70711C0.48043 1.89464 0.734784 2 1 2H15C15.2652 2 15.5196 1.89464 15.7071 1.70711C15.8946 1.51957 16 1.26522 16 1C16 0.734784 15.8946 0.48043 15.7071 0.292893C15.5196 0.105357 15.2652 0 15 0Z"
                                        fill="#1E2238"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div x-ref="container"
                        :style="accordion ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''"
                        class="overflow-hidden max-h-0 duration-500">
                        <p class="mt-2 text-lg text-gray-500 font-semibold">Yes, you can try us for free for 30 days.
                            If you want, we’ll provide you with a free, personalized 30-minute onboarding call to get
                            you up and running as soon as possible.</p>
                    </div>
                </div>
                <div x-data="{ accordion: false }" x-on:click="accordion = !accordion" class="mb-10">
                    <div class="flex flex-wrap items-center justify-between -m-2 cursor-pointer">
                        <div class="w-auto p-2">
                            <h6 class="font-heading text-3xl">How does billing work?</h6>
                        </div>
                        <div class="w-auto p-2">
                            <span x-show="accordion === false">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 7H9V1C9 0.734784 8.89464 0.48043 8.70711 0.292893C8.51957 0.105357 8.26522 0 8 0C7.73478 0 7.48043 0.105357 7.29289 0.292893C7.10536 0.48043 7 0.734784 7 1V7H1C0.734784 7 0.48043 7.10536 0.292893 7.29289C0.105357 7.48043 0 7.73478 0 8C0 8.26522 0.105357 8.51957 0.292893 8.70711C0.48043 8.89464 0.734784 9 1 9H7V15C7 15.2652 7.10536 15.5196 7.29289 15.7071C7.48043 15.8946 7.73478 16 8 16C8.26522 16 8.51957 15.8946 8.70711 15.7071C8.89464 15.5196 9 15.2652 9 15V9H15C15.2652 9 15.5196 8.89464 15.7071 8.70711C15.8946 8.51957 16 8.26522 16 8C16 7.73478 15.8946 7.48043 15.7071 7.29289C15.5196 7.10536 15.2652 7 15 7Z"
                                        fill="#1E2238"></path>
                                </svg>
                            </span>
                            <span x-show="accordion === true">
                                <svg width="16" height="2" viewbox="0 0 16 2" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1C0 1.26522 0.105357 1.51957 0.292893 1.70711C0.48043 1.89464 0.734784 2 1 2H15C15.2652 2 15.5196 1.89464 15.7071 1.70711C15.8946 1.51957 16 1.26522 16 1C16 0.734784 15.8946 0.48043 15.7071 0.292893C15.5196 0.105357 15.2652 0 15 0Z"
                                        fill="#1E2238"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div x-ref="container"
                        :style="accordion ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''"
                        class="overflow-hidden max-h-0 duration-500">
                        <p class="mt-2 text-lg text-gray-500 font-semibold">Yes, you can try us for free for 30 days.
                            If you want, we’ll provide you with a free, personalized 30-minute onboarding call to get
                            you up and running as soon as possible.</p>
                    </div>
                </div>
                <div x-data="{ accordion: false }" x-on:click="accordion = !accordion" class="mb-10">
                    <div class="flex flex-wrap items-center justify-between -m-2 cursor-pointer">
                        <div class="w-auto p-2">
                            <h6 class="font-heading text-3xl">How do I change my account email?</h6>
                        </div>
                        <div class="w-auto p-2">
                            <span x-show="accordion === false">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 7H9V1C9 0.734784 8.89464 0.48043 8.70711 0.292893C8.51957 0.105357 8.26522 0 8 0C7.73478 0 7.48043 0.105357 7.29289 0.292893C7.10536 0.48043 7 0.734784 7 1V7H1C0.734784 7 0.48043 7.10536 0.292893 7.29289C0.105357 7.48043 0 7.73478 0 8C0 8.26522 0.105357 8.51957 0.292893 8.70711C0.48043 8.89464 0.734784 9 1 9H7V15C7 15.2652 7.10536 15.5196 7.29289 15.7071C7.48043 15.8946 7.73478 16 8 16C8.26522 16 8.51957 15.8946 8.70711 15.7071C8.89464 15.5196 9 15.2652 9 15V9H15C15.2652 9 15.5196 8.89464 15.7071 8.70711C15.8946 8.51957 16 8.26522 16 8C16 7.73478 15.8946 7.48043 15.7071 7.29289C15.5196 7.10536 15.2652 7 15 7Z"
                                        fill="#1E2238"></path>
                                </svg>
                            </span>
                            <span x-show="accordion === true">
                                <svg width="16" height="2" viewbox="0 0 16 2" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1C0 1.26522 0.105357 1.51957 0.292893 1.70711C0.48043 1.89464 0.734784 2 1 2H15C15.2652 2 15.5196 1.89464 15.7071 1.70711C15.8946 1.51957 16 1.26522 16 1C16 0.734784 15.8946 0.48043 15.7071 0.292893C15.5196 0.105357 15.2652 0 15 0Z"
                                        fill="#1E2238"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div x-ref="container"
                        :style="accordion ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''"
                        class="overflow-hidden max-h-0 duration-500">
                        <p class="mt-2 text-lg text-gray-500 font-semibold">Yes, you can try us for free for 30 days.
                            If you want, we’ll provide you with a free, personalized 30-minute onboarding call to get
                            you up and running as soon as possible.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-16 pb-20">
    <div class="pb-12 border-b border-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -m-4">
                <div class="w-full md:w-1/2 p-4">
                    <a href="#" class="inline-block mb-6">
                        <img class="h-8" src="shopky-assets/logos/shopky-logo2.svg" alt="">
                    </a>
                    <p class="text-gray-500 mb-8">Enhance Your Online Shopping Experience</p>
                    <ul class="flex flex-col gap-6">
                        <li>
                            <a href="#" class="inline-block group">
                                <div class="flex items-center flex-wrap gap-2">
                                    <div class="text-green-900 group-hover:text-green-800 transition duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewbox="0 0 24 24" fill="none">
                                            <path
                                                d="M3 8L10.8906 13.2604C11.5624 13.7083 12.4376 13.7083 13.1094 13.2604L21 8M5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19Z"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <h2
                                        class="font-heading uppercase text-green-900 text-3xl group-hover:text-green-800 transition duration-200">
                                        info@furniture.com</h2>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="inline-block group">
                                <div class="flex items-center flex-wrap gap-2">
                                    <div class="text-green-900 group-hover:text-green-800 transition duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewbox="0 0 24 24" fill="none">
                                            <path
                                                d="M3 5C3 3.89543 3.89543 3 5 3H8.27924C8.70967 3 9.09181 3.27543 9.22792 3.68377L10.7257 8.17721C10.8831 8.64932 10.6694 9.16531 10.2243 9.38787L7.96701 10.5165C9.06925 12.9612 11.0388 14.9308 13.4835 16.033L14.6121 13.7757C14.8347 13.3306 15.3507 13.1169 15.8228 13.2743L20.3162 14.7721C20.7246 14.9082 21 15.2903 21 15.7208V19C21 20.1046 20.1046 21 19 21H18C9.71573 21 3 14.2843 3 6V5Z"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <h2
                                        class="font-heading uppercase text-green-900 text-3xl group-hover:text-green-800 transition duration-200">
                                        (123) 456-7856</h2>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                    <h2 class="font-heading uppercase text-3xl mb-6">Furniture Hub</h2>
                    <ul class="flex flex-col gap-4">
                        <li>
                            <a href="#"
                                class="font-heading uppercase text-gray-500 text-3xl hover:text-gray-900 transition duration-200">All
                                Products</a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-heading uppercase text-gray-500 text-3xl hover:text-gray-900 transition duration-200">Browse
                                Categories</a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-heading uppercase text-gray-500 text-3xl hover:text-gray-900 transition duration-200">Our
                                Story</a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-heading uppercase text-gray-500 text-3xl hover:text-gray-900 transition duration-200">Get
                                in Touch</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                    <h2 class="font-heading uppercase text-3xl mb-6">PRESS</h2>
                    <ul class="flex flex-col gap-4">
                        <li>
                            <a href="#"
                                class="font-heading uppercase text-gray-500 text-3xl hover:text-gray-900 transition duration-200">Connect
                                on FACEBOOK</a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-heading uppercase text-gray-500 text-3xl hover:text-gray-900 transition duration-200">Follow
                                us on TWITTER</a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-heading uppercase text-gray-500 text-3xl hover:text-gray-900 transition duration-200">Discover
                                us on INSTAGRAM</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-10">
        <p class="text-gray-500 text-center mb-4">© 2024 Furniture, Inc.</p>
        <div class="flex justify-center flex-wrap gap-4">
            <img class="h-6" src="{{ asset('img/logos/visa-logo.svg') }}" alt="">
            <img class="h-6" src="{{ asset('img/logos/mastercard-logo.svg') }}" alt="">
            <img class="h-6" src="{{ asset('img/logos/paypal-logo.svg') }}" alt="">
            <img class="h-6" src="{{ asset('img/logos/amex-logo.svg') }}" alt="">
        </div>
    </div>
</section>
