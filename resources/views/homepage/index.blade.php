@extends('index')
@section('content')
    <div class="bg-white hidden md:block">
        <div class="md:py-0 ">
            <div class="flex gap-7 md:flex-row flex-col pt-14 pb-0 md:pt-0">
                <div id="default-carousel" class="relative w-full  " data-carousel="slide" data-aos="fade-up">
                    <!-- Carousel wrapper -->

                    <div class="relative h-[80vh] overflow-hidden rounded-lg md:h-90vh]">
                        <div class="swiper-container mySwiper">
                            <div class="swiper-wrapper">
                                @foreach ($data as $key => $item)
                                    <div class="swiper-slide">
                                        <img class="w-full object-contain" src="{{ url('/storage/images/home/' . $item->image) }}">
                                    </div>
                                @endforeach
                            </div>
                            <!-- Add swiper-pagination container here -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="py-2 bg-white">
        <div class="md:py-14 ">
            <div class="flex gap-7 md:flex-row flex-col p-4 mb-14">
                <div id="custom-controls-gallery" class="relative w-full block md:hidden" data-carousel="slide"
                    data-aos="fade-up">
                    <div class="flex justify-center items-center">
                        <div class="w-[80%] ">
                            <video id="my-video" class="w-full object-cover rounded-md mx-auto" autoplay muted playsinline
                                controls>
                                <source src="https://juliansphotography.com/img/vid/2.mp4" type=video/mp4>
                            </video>
                        </div>
                    </div>
                </div>
                <div class="flex items-start flex-col  justify-center md:px-4 md:hidden" data-aos="fade-up">
                    <p class="font-home text-xl md:text-3xl font-semibold mb-4 mx-auto md:mx-2">{{ $description->title }}
                    </p>
                    <p class="font-home md:text-2xl mb-4 text-justify px-2">{{ $description->descriptions }}</p>
                    <a class="mx-auto md:mx-0"
                        href="https://api.whatsapp.com/send?phone=+61 451 345 051&text=hey julian%20I%20want%20to%20make%20reservation%20">
                        <button type="button"
                            class="text-gray-900  bg-[#FAE4CD] from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Booking
                            Now!</button>
                    </a>
                </div>




                <div id="custom-controls-gallery" class="relative w-full hidden md:block" data-carousel="slide"
                    data-aos="fade-up">
                    <div class="flex justify-center items-center mx-20">
                        <div>
                            <div class="bg-[#EEEEEE] rounded-md px-4 py-10 h-[70vh] flex w-[90%]">
                                <div class="my-auto mx-0">
                                    <div class="w-[80%] pl-10">
                                        <p class="font-home text-xl md:text-3xl font-semibold mb-4 mx-auto md:mx-2">KUTA
                                            SOCIETEA
                                        </p>
                                        <p class="font-home md:text-xl mb-4 text-justify px-2">
                                            {{ $description->descriptions }}</p>
                                        <a class="mx-auto md:mx-0"
                                            href="https://api.whatsapp.com/send?phone=+61 451 345 051&text=hey julian%20I%20want%20to%20make%20reservation%20">
                                            <button type="button"
                                                class="text-gray-900 bg-white from-red-200 via-red-300 to-yellow-200 hover:bg-black hover:text-white focus:ring-4 focus:outline-none focus:ring-red-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 transition-all duration-300 ease-in-out">Booking
                                                Now!
                                            </button>

                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ml-[-100px]">
                            <video class="w-full object-cover rounded-md mx-auto" controls="" preload="auto"
                                data-setup="{&quot;fluid&quot;: true, &quot;autoplay&quot;: true, &quot;preload&quot;: &quot;auto&quot;, &quot;loop&quot;: true}"
                                muted="" autoplay="" loop="" playsinline="" loading="lazy">
                                <source src="https://juliansphotography.com/img/vid/2.mp4" type="video/mp4" autoplay>
                            </video>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class=" bg-white block md:hidden">
        <div class="md:py-0 px-4">
            <div class="w-full max-w-7xl p-1 pb-10 mx-auto mb-10 gap-5 md:columns-3 columns-2 space-y-5">
                @foreach ($data as $item)
                    <a data-lightbox="image-1" href="{{ url('/storage/images/home/' . $item->image) }}" alt="">
                        <img class="h-auto max-w-full rounded-lg p-1"
                            src="{{ url('/storage/images/home/' . $item->image) }}" alt=""></a>
                @endforeach

            </div>
        </div>
    </div>
    </div>
    @foreach ($data as $key => $item)
        <div id="{{ $key }}" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <img data-modal-target="{{ $key }}" data-modal-toggle="{{ $key }}"
                    src="{{ url('/storage/images/home/' . $item->image) }}"
                    class="absolute block md:w-[50vw] rounded-md w-[90%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>
        </div>
    @endforeach
@endsection
