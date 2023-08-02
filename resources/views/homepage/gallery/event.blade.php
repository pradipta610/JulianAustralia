@extends('index')
@section('content')
    <div class="p-4">
        <div class="p-4 md:text-center text-justify ">
            <p class="text-center font-semibold font-mono text-2xl text-gallery">Event</p>
            <div class="md:w-[70%] justify-center items-center mx-auto">
                <p class="font-thin font-gallery-desc text-lg my-4 mx-2"> <span
                        class="font-sans font-bold text-xl mr-2">"</span>We are passionate about capturing the spirit and excitement of your special occasions. From weddings to corporate events, we are dedicated to preserving the unforgettable moments of your event. With a keen eye for detail and a commitment to quality, we deliver exceptional event photography that captures the essence of the occasion<span class="font-bold text-xl ml-2">"</span></p>
            </div>
        </div>
        <div class=" bg-white block ">
            <div class="md:py-0 px-4">
                <div class="w-full max-w-7xl p-1 pb-10 mx-auto mb-10 gap-5 md:columns-3 columns-1 space-y-5">
                    @foreach ($data as $item)
                        <a data-lightbox="image-1" href="{{ url('/storage/images/event/' . $item->image) }}"
                            alt=""> <img class="h-auto max-w-full rounded-lg p-1"
                                src="{{ url('/storage/images/event/' . $item->image) }}" alt=""></a>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
