@extends('indexDashboard')
@section('title', 'Create Image Description | Julian Photography')
@section('content')
    <div class="w-[90%] md:w-[80%] mx-auto my-10 ">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg  bg-white dark:bg-gray-900 p-10">
            <form action="{{ route('dashboardSuperAdmin.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="relative z-0 w-full mb-6 group">
                    <input type="file" name="image" id="floating_image" onchange="previewImage(event)"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder="" readonly />
                    @if ($data->image)
                        <img id="image_preview" src="{{ url('/storage/images/home/' . $data->image) }}" alt="Current Image" class="md:max-w-xs w-full">
                    @else

                    @endif
                    <label for="floating_image"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Image</label>
                    @if ($errors->has('error'))
                        <div class="text-red-500">{{ $errors->first('error') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="text-red-500">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <textarea name="image_description" id="floating_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" "></textarea>
                    <label for="floating_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Image
                        Descriptions (Not Mandatory/Tidak Wajib)</label>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                <a href="{{ route('dashboardSuperAdmin') }}">
                    <button type="button"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Back</button>
                </a>
            </form>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const fileInput = event.target;
            const imagePreview = document.getElementById('image_preview');

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                };

                reader.readAsDataURL(fileInput.files[0]);
            } else {
                imagePreview.src = '#';
                imagePreview.style.display = 'none';
            }
        }
    </script>
@endsection
