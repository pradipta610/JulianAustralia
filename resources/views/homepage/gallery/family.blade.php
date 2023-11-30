@extends('index')
@section('content')
    <div class="p-4">
        <div class="p-4 md:text-center text-justify ">
            <p class="text-center font-semibold font-mono text-2xl text-gallery">{{ $description->title }}</p>
            <div class="md:w-[70%] justify-center items-center mx-auto">
                <p class="font-thin font-gallery-desc text-lg my-4 mx-2"> {{ $description->descriptions }}</span></p>
            </div>
        </div>
        <div class=" bg-white block ">
            <div class="md:py-0 px-4">
                <div class="w-full max-w-7xl p-1 pb-10 mx-auto mb-10 gap-5 md:columns-3 columns-1 space-y-5">
                    @foreach ($data as $item)
                        <a data-lightbox="image-1" href="{{ url('/storage/images/family/' . $item->image) }}"
                            alt=""> <img class="h-auto max-w-full rounded-lg p-1"
                                src="{{ url('/storage/images/family/' . $item->image) }}" alt=""></a>
                    @endforeach

                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
