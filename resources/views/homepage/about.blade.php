@extends('index')
@section('content')
    <style>
        .text-color {
            color: #484c52;
        }

        .text-color-desc {
            color: #8391a3;
        }

        .text-color-desc-darker {
            color: #3d4248;
        }
    </style>
    <div class="py-2 bg-orange-50">
        <div class="md:py-14 md:ml-10">
            <div class="flex gap-7  flex-col p-4 my-4">
                <div class="flex items-start flex-col  justify-center " data-aos="fade-up">
                    <div class="rounded-full w-full flex items-center justify-center">
                        <img src="https://dvyvvujm9h0uq.cloudfront.net/com/articles/1543483387-reinhart-julian-1145947-unsplash.jpg"
                            class="md:!w-96 md:h-96 w-36 h-36 rounded-full object-cover" alt="">
                    </div>
                    <div class=" text-center justify-center items-center p-4 mx-auto">
                        <p class="font-about text-color md:text-3xl font-semibold mb-4">Welcome To Julian Photography</p>
                        <p class="font-serif text-color-desc md:text-2xl mb-4"><i
                                class="fa-sharp fa-solid fa-location-dot mr-2"></i>Sydney, Australia</p>
                        <div class="flex flex-col md:flex-row my-8 justify-center items-center ">
                            <div class="w-full md:p-10">
                                <div class="p-4">
                                    <p class="font-serif text-color-desc-darker text-justify md:text-2xl mb-4">Hello So Nice To Meet you!, Im Julian the founder and dreamer behind Julian Photography who's passionate about making
                                        those images come to life.</p>
                                </div>
                            </div>
                            <div class="w-full  bg-orange-100 rounded-md ">
                                
                                <div class="p-8">
                                    <p class="font-serif text-color-desc-darker text-justify md:text-2xl mb-4">
                                       <span>In my photography,</span> <br>
                                        
                                        
                                        I'm using professional equipment and simple props and Edit by Photoshop & Lightroom to get my style look that I'm happy with and also little adjust with my clients' needs.
                                        
                                         
                                        
                                        my style trying to be unique, natural, fresh outdoor, keep it nice, simple, and also modern touch. 
                                        
                                        ​
                                        
                                        My goal is to capture that moment when that telling me the story and finding art in photography.
                                        
                                        ​
                                        
                                        Get ready for your beautiful moment to be captured I'm so excited to meet you all.</p>
                                </div>
                            </div>
                        </div>
                        <button type="button"
                            class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"><i class="fa-brands fa-whatsapp"></i> Whatsapp</button>
                        <button type="button"
                            class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"><i class="fa-brands fa-instagram"></i> Instagram</button>
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
