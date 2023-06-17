@extends('index')
@section('content')
    <div class="p-4">
        <div class="p-4 md:text-center text-justify ">
            <p class="text-center font-semibold font-mono text-2xl text-gallery">Couple</p>
            <div class="md:w-[70%] justify-center items-center mx-auto">
                <p class="font-thin font-gallery-desc text-lg my-4 mx-2"> <span class="font-sans font-bold text-xl mr-2">"</span>Every story is unique . Our relaxed approach creates a comfortable atmosphere for authentic and emotional photographs. Explore our gallery for examples of our work and contact us to preserve your special moments.<span class="font-bold text-xl ml-2">"</span></p>
            </div>
        </div>
        <div class="grid grid-cols md:grid-cols-4 gap-4">
                <div class="grid gap-4">
                    <div>
                        <a data-lightbox="image-1" href="{{ asset('img/prewed-1.jpg') }}" alt=""> <img
                                class="h-auto max-w-full rounded-lg" src="{{ asset('img/prewed-1.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="grid gap-4">
    
                    <div>
                        <a data-lightbox="image-1" href="{{ asset('img/prewed-2.jpg') }}" alt=""> <img
                                class="h-auto max-w-full rounded-lg" src="{{ asset('img/prewed-2.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="grid gap-4">
    
                    <div>
                        <a data-lightbox="image-1" href="{{ asset('img/prewed-3.jpg') }}" alt=""> <img
                                class="h-auto max-w-full rounded-lg" src="{{ asset('img/prewed-3.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="grid gap-4">
    
                    <div>
                        <a data-lightbox="image-1" href="{{ asset('img/prewed-4.jpg') }}" alt=""> <img
                                class="h-auto max-w-full rounded-lg" src="{{ asset('img/prewed-4.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="grid gap-4">
    
                    <div>
                        <a data-lightbox="image-1" href="{{ asset('img/prewed-5.jpg') }}" alt=""> <img
                                class="h-auto max-w-full rounded-lg" src="{{ asset('img/prewed-5.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="grid gap-4">
    
                    <div>
                        <a data-lightbox="image-1" href="{{ asset('img/prewed-6.jpg') }}" alt=""> <img
                                class="h-auto max-w-full rounded-lg" src="{{ asset('img/prewed-6.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="grid gap-4">
    
                    <div>
                        <a data-lightbox="image-1" href="{{ asset('img/prewed-7.jpg') }}" alt=""> <img
                                class="h-auto max-w-full rounded-lg" src="{{ asset('img/prewed-7.jpg') }}" alt=""></a>
                    </div>
                </div>
        </div>
    </div>
@endsection
