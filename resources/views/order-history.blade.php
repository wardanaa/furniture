@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="mb-10">
                <h2 class="mb-4 font-heading text-3xl text-gray-900">Order history</h2>
                <p class="text-sm text-gray-400 font-semibold">Check the status of recent orders, manage return orders, and
                    discover similar products.</p>
            </div>
            <div class="border border-gray-50 rounded-2xl">
                <div class="px-12 py-8 border-b border-gray-50">
                    <div class="flex flex-wrap items-center -m-4">
                        <div class="w-full md:w-1/2 p-4">
                            <div class="flex flex-wrap justify-between -m-2">
                                <div class="w-auto p-2">
                                    <p class="mb-2 text-gray-400">Order number</p>
                                    <p class="font-semibold text-gray-900">WU7719340111</p>
                                </div>
                                <div class="w-auto p-2">
                                    <p class="mb-2 text-gray-400">Order Date</p>
                                    <p class="font-semibold text-gray-900">Jan 12, 2024</p>
                                </div>
                                <div class="w-auto p-2">
                                    <p class="mb-2 text-gray-400">Total amount</p>
                                    <p class="font-semibold text-gray-900">Rp16.000.000,00</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 p-4">
                            <div class="flex flex-wrap md:justify-end -m-3">
                                <div class="w-auto p-3">
                                    <a href="#"
                                        class="bg-white rounded-full hover:bg-gray-50 border border-gray-100 focus:ring-4 focus:ring-gray-200 text-gray-900 text-sm font-semibold px-4 h-12 inline-flex items-center transition duration-200">View
                                        Order</a>
                                </div>
                                <div class="w-auto p-3">
                                    <a href="#"
                                        class="bg-white rounded-full hover:bg-gray-50 border border-gray-100 focus:ring-4 focus:ring-gray-200 text-gray-900 text-sm font-semibold px-4 h-12 inline-flex items-center transition duration-200">View
                                        Invoice</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-12">
                    <div class="pb-14 mb-12 border-b border-gray-50">
                        <div class="flex flex-wrap -m-2 mb-6">
                            <div class="w-full md:flex-1 p-2">
                                <div class="flex flex-wrap -m-3">
                                    <div class="w-full md:w-auto p-3">
                                        <img class="rounded-2xl object-cover" style="height: 131px;"
                                            src="{{ asset('img/furnitures/table.jpg') }}" alt="">
                                    </div>
                                    <div class="w-full md:flex-1 p-3">
                                        <h2 class="mb-3 font-heading text-3xl text-gray-900">Table</h2>
                                        <p class="text-gray-400">Embrace timeless sophistication with our "Aurora Elegance
                                            Dining Table," a perfect blend of classic charm and contemporary style. Designed
                                            for the modern home that values both aesthetics and functionality, this table is
                                            a masterpiece of craftsmanship and elegance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-auto p-2">
                                <p class="font-semibold text-green-900">Rp15.000.000,00</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center -m-2">
                            <div class="w-full md:w-1/2 p-2">
                                <div class="flex items-center">
                                    <svg class="mr-2" width="20" height="20" viewbox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10 19.6C15.302 19.6 19.6 15.302 19.6 10C19.6 4.69809 15.302 0.400024 10 0.400024C4.69809 0.400024 0.400024 4.69809 0.400024 10C0.400024 15.302 4.69809 19.6 10 19.6ZM14.4486 8.44855C14.9172 7.97992 14.9172 7.22013 14.4486 6.7515C13.9799 6.28287 13.2201 6.28287 12.7515 6.7515L8.80002 10.703L7.24855 9.1515C6.77992 8.68287 6.02013 8.68287 5.5515 9.1515C5.08287 9.62013 5.08287 10.3799 5.5515 10.8486L7.9515 13.2486C8.42013 13.7172 9.17992 13.7172 9.64855 13.2486L14.4486 8.44855Z"
                                            fill="#78B449"></path>
                                    </svg>
                                    <p class="text-sm text-gray-400">Delivered on July 12, 2021</p>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 p-2">
                                <div class="flex flex-wrap md:justify-end -m-2">
                                    <div class="p-2">
                                        <a href="#"
                                            class="bg-gray-50 rounded-full hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-gray-900 text-sm font-semibold px-4 h-9 inline-flex items-center transition duration-200">View
                                            product</a>
                                    </div>
                                    <div class="p-2">
                                        <a href="#"
                                            class="bg-gray-900 rounded-full hover:bg-gray-800 focus:ring-4 focus:ring-gray-200 text-white text-sm font-semibold px-4 h-9 inline-flex items-center transition duration-200">Buy
                                            Again</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-14 mb-12 border-b border-gray-50">
                        <div class="flex flex-wrap -m-2 mb-6">
                            <div class="w-full md:flex-1 p-2">
                                <div class="flex flex-wrap -m-3">
                                    <div class="w-full md:w-auto p-3">
                                        <img class="rounded-2xl object-cover" style="height: 131px;"
                                            src="{{ asset('img/furnitures/table.jpg') }}" alt="">
                                    </div>
                                    <div class="w-full md:flex-1 p-3">
                                        <h2 class="mb-3 font-heading text-3xl text-gray-900">Table</h2>
                                        <p class="text-gray-400">Embrace timeless sophistication with our "Aurora Elegance
                                            Dining Table," a perfect blend of classic charm and contemporary style. Designed
                                            for the modern home that values both aesthetics and functionality, this table is
                                            a masterpiece of craftsmanship and elegance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-auto p-2">
                                <p class="font-semibold text-green-900">Rp15.000.000,00</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center -m-2">
                            <div class="w-full md:w-1/2 p-2">
                                <div class="flex items-center">
                                    <svg class="mr-2" width="20" height="20" viewbox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10 19.6C15.302 19.6 19.6 15.302 19.6 10C19.6 4.69809 15.302 0.400024 10 0.400024C4.69809 0.400024 0.400024 4.69809 0.400024 10C0.400024 15.302 4.69809 19.6 10 19.6ZM14.4486 8.44855C14.9172 7.97992 14.9172 7.22013 14.4486 6.7515C13.9799 6.28287 13.2201 6.28287 12.7515 6.7515L8.80002 10.703L7.24855 9.1515C6.77992 8.68287 6.02013 8.68287 5.5515 9.1515C5.08287 9.62013 5.08287 10.3799 5.5515 10.8486L7.9515 13.2486C8.42013 13.7172 9.17992 13.7172 9.64855 13.2486L14.4486 8.44855Z"
                                            fill="#78B449"></path>
                                    </svg>
                                    <p class="text-sm text-gray-400">Delivered on July 12, 2021</p>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 p-2">
                                <div class="flex flex-wrap md:justify-end -m-2">
                                    <div class="p-2">
                                        <a href="#"
                                            class="bg-gray-50 rounded-full hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-gray-900 text-sm font-semibold px-4 h-9 inline-flex items-center transition duration-200">View
                                            product</a>
                                    </div>
                                    <div class="p-2">
                                        <a href="#"
                                            class="bg-gray-900 rounded-full hover:bg-gray-800 focus:ring-4 focus:ring-gray-200 text-white text-sm font-semibold px-4 h-9 inline-flex items-center transition duration-200">Buy
                                            Again</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-wrap -m-2 mb-6">
                            <div class="w-full md:flex-1 p-2">
                                <div class="flex flex-wrap -m-3">
                                    <div class="w-full md:w-auto p-3">
                                        <img class="rounded-2xl object-cover" style="height: 131px;"
                                            src="{{ asset('img/furnitures/table.jpg') }}" alt="">
                                    </div>
                                    <div class="w-full md:flex-1 p-3">
                                        <h2 class="mb-3 font-heading text-3xl text-gray-900">Table
                                        </h2>
                                        <p class="text-gray-400">Embrace timeless sophistication with our "Aurora Elegance
                                            Dining Table," a perfect blend of classic charm and contemporary style. Designed
                                            for the modern home that values both aesthetics and functionality, this table is
                                            a masterpiece of craftsmanship and elegance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-auto p-2">
                                <p class="font-semibold text-green-900">Rp15.000.000,00</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center -m-2">
                            <div class="w-full md:w-1/2 p-2">
                                <div class="flex items-center">
                                    <svg class="mr-2" width="20" height="20" viewbox="0 0 20 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10 19.6C15.302 19.6 19.6 15.302 19.6 10C19.6 4.69809 15.302 0.400024 10 0.400024C4.69809 0.400024 0.400024 4.69809 0.400024 10C0.400024 15.302 4.69809 19.6 10 19.6ZM14.4486 8.44855C14.9172 7.97992 14.9172 7.22013 14.4486 6.7515C13.9799 6.28287 13.2201 6.28287 12.7515 6.7515L8.80002 10.703L7.24855 9.1515C6.77992 8.68287 6.02013 8.68287 5.5515 9.1515C5.08287 9.62013 5.08287 10.3799 5.5515 10.8486L7.9515 13.2486C8.42013 13.7172 9.17992 13.7172 9.64855 13.2486L14.4486 8.44855Z"
                                            fill="#78B449"></path>
                                    </svg>
                                    <p class="text-sm text-gray-400">Delivered on July 12, 2021</p>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 p-2">
                                <div class="flex flex-wrap md:justify-end -m-2">
                                    <div class="p-2">
                                        <a href="#"
                                            class="bg-gray-50 rounded-full hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-gray-900 text-sm font-semibold px-4 h-9 inline-flex items-center transition duration-200">View
                                            product</a>
                                    </div>
                                    <div class="p-2">
                                        <a href="#"
                                            class="bg-gray-900 rounded-full hover:bg-gray-800 focus:ring-4 focus:ring-gray-200 text-white text-sm font-semibold px-4 h-9 inline-flex items-center transition duration-200">Buy
                                            Again</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
