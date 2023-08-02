@extends('index')
@section('content')
    <div class="p-4">
        <div class="p-4 md:text-center text-justify ">
            <p class="text-center font-semibold font-mono text-2xl text-gallery">Portrait</p>
            <div class="md:w-[70%] justify-center items-center mx-auto">
                <p class="font-thin font-gallery-desc text-lg my-4 mx-2"> <span
                        class="font-sans font-bold text-xl mr-2">"</span>Our goal is to create stunning images that showcase your individuality and tell your story. From professional headshots to personal portraits, we bring out the best in you through our photography. Explore our gallery and let us create a portrait that truly represents you at Julian Photography!<span class="font-bold text-xl ml-2">"</span></p>
            </div>
        </div>
        <div class=" bg-white block ">
            <div class="md:py-0 px-4">
                <div class="w-full max-w-7xl p-1 pb-10 mx-auto mb-10 gap-5 md:columns-3 columns-1 space-y-5">
                    @foreach ($data as $item)
                        <a data-lightbox="image-1" href="{{ url('/storage/images/baby/' . $item->image) }}"
                            alt=""> <img class="h-auto max-w-full rounded-lg p-1"
                                src="{{ url('/storage/images/baby/' . $item->image) }}" alt=""></a>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
