@extends('index')
@section('content')
    <div class=" bg-orange-50">
        <div class="md:py-0 ">
            <div class="flex gap-7 md:flex-row flex-col pt-14 pb-0 md:pt-0">
                <div id="default-carousel" class="relative w-full  " data-carousel="slide" data-aos="fade-up">
                    <!-- Carousel wrapper -->
                    <div class="relative h-[80vw] overflow-hidden rounded-lg md:h-[50vw]">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img data-modal-target="1" data-modal-toggle="1"
                                src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8&w=1000&q=80"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img data-modal-target="2" data-modal-toggle="2"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPAq2I8YWO7efRQK0WC5M-Ns76ZdNZJj6AI7JQRHYv&s"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img data-modal-target="3" data-modal-toggle="3"
                                src="https://www.seiu1000.org/sites/main/files/main-images/camera_lense_0.jpeg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img data-modal-target="4" data-modal-toggle="4"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPCXISA7AWonO3J24GKCgtJ9e4OTuaJHSBM7rcN3j28GfR6eJAJTe1Gi_AlJpG6wuFnCs&usqp=CAU"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img data-modal-target="5" data-modal-toggle="5"
                                src="https://images.pexels.com/photos/610293/pexels-photo-610293.jpeg?auto=compress&cs=tinysrgb&h=627&fit=crop&w=1200"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                            data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                            data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 "
                                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                                </path>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 "
                                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2 bg-orange-50">
        <div class="md:py-14 ">
            <div class="flex gap-7 md:flex-row flex-col p-4 my-14">
                <div class="flex items-start flex-col  justify-center " data-aos="fade-up">
                    <p class="font-sans md:text-3xl font-semibold mb-4">Welcome To Julian Photography</p>
                    <p class="font-serif md:text-2xl mb-4">I'm Julian, a Wedding & Family photographer based in Sydney. I am
                        all
                        about
                        capturing the candid & the raw moments of your special day and your loved ones.</p>
                    <button type="button"
                        class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Booking
                        Now!</button>
                </div>
                
<div id="custom-controls-gallery" class="relative w-full" data-carousel="slide">
    <div class="flex justify-center items-center">

        <div class="w-[80%] ">
    
            <img src="https://www.pangolinphoto.com/wp-content/uploads/2020/05/Guest-with-camera-gear-on-safari-in-Botswana-Pangolin-Photo-Safaris-scaled.webp" class="w-full object-cover rounded-md mx-auto" alt="">
        </div>
    </div>
</div>
        
            </div>
        </div>
    </div>




    <!-- Small Modal -->
    <div id="1" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <img src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8&w=1000&q=80"
                class="absolute block md:w-[50vw] rounded-md w-[90%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
        </div>
    </div>

    <!-- Default Modal -->
    <div id="2" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPAq2I8YWO7efRQK0WC5M-Ns76ZdNZJj6AI7JQRHYv&s"
            class="absolute block md:w-[50vw] rounded-md w-[90%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="...">
    </div>

    <!-- Large Modal -->
    <div id="3" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <img data-modal-target="3" data-modal-toggle="3"
            src="https://www.seiu1000.org/sites/main/files/main-images/camera_lense_0.jpeg"
            class="absolute block md:w-[50vw] rounded-md w-[90%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="...">
    </div>

    <!-- Extra Large Modal -->
    <div id="4" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPCXISA7AWonO3J24GKCgtJ9e4OTuaJHSBM7rcN3j28GfR6eJAJTe1Gi_AlJpG6wuFnCs&usqp=CAU"
            class="absolute block md:w-[50vw] rounded-md w-[90%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="...">
    </div>
    <!-- Extra Large Modal -->
    <div id="5" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <img src="https://images.pexels.com/photos/610293/pexels-photo-610293.jpeg?auto=compress&cs=tinysrgb&h=627&fit=crop&w=1200"
            class="absolute block md:w-[50vw] rounded-md w-[90%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="...">
    </div>
@endsection
