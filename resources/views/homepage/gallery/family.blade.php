@extends('index')
@section('content')
    <div class="p-4">
        <div class="p-4 md:text-center text-justify ">
            <p class="text-center font-semibold font-mono text-2xl text-gallery">Family</p>
            <div class="md:w-[70%] justify-center items-center mx-auto">
                <p class="font-thin font-gallery-desc text-lg my-4 mx-2"> <span
                        class="font-sans font-bold text-xl mr-2">"</span>
                    We understand the importance and meaning of family to you. Our commitment is to capture the
                    togetherness, happiness, and strong bonds among your family members through our photography, allowing
                    you to truly cherish moments with your loved ones. From traditional family portraits to candid and
                    playful moments, we strive to capture the uniqueness and personalities of your family.<span
                        class="font-bold text-xl ml-2">"</span></p>
            </div>
        </div>
        <div class="grid grid-cols md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div>
                    <a data-lightbox="image-1" href="{{ asset('img/family-1.jpg') }}" alt=""> <img
                            class="h-auto max-w-full rounded-lg" src="{{ asset('img/family-1.jpg') }}" alt=""></a>
                </div>
            </div>
            <div class="grid gap-4">

                <div>
                    <a data-lightbox="image-1" href="{{ asset('img/family-2.jpg') }}" alt=""> <img
                            class="h-auto max-w-full rounded-lg" src="{{ asset('img/family-2.jpg') }}" alt=""></a>
                </div>
            </div>
            <div class="grid gap-4">

                <div>
                    <a data-lightbox="image-1" href="{{ asset('img/family-3.jpg') }}" alt=""> <img
                            class="h-auto max-w-full rounded-lg" src="{{ asset('img/family-3.jpg') }}" alt=""></a>
                </div>
            </div>
            {{-- <div>
                    <a data-lightbox="image-1" href="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg"
                        alt=""> <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt=""></a>
                </div>
                <div>
                    <a data-lightbox="image-1" href="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg"
                        alt=""> <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt=""></a>
                </div> --}}
        </div>
        {{-- <div class="grid gap-4">
                <div>
                    <a data-lightbox="image-1" href="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg"
                        alt=""> <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt=""></a>
                </div>
                <div>
                    <a data-lightbox="image-1" href="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg"
                        alt=""> <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt=""></a>
                </div>
                <div>
                    <a data-lightbox="image-1" href="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg"
                        alt=""> <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt=""></a>
                </div>
                <div>
                    <a data-lightbox="image-1" href="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg"
                        alt=""> <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt=""></a>
                </div>
                <div>
                    <a data-lightbox="image-1" href="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg"
                        alt=""> <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt=""></a>
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                </div>
            </div> --}}
    </div>
    </div>
@endsection
