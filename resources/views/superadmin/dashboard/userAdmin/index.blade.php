@extends('indexDashboard')
@section('title', 'Admin List | Julian Photography')
@section('content')
    <div class="w-[90%] md:w-[80%] mx-auto my-10 ">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg  bg-white dark:bg-gray-900 p-10">
            <div class="flex items-center justify-between pb-4">
                <div>
                    <button
                        class="inline-flex items-center text-white bg-red-700 border border-white focus:outline-none hover:bg-red-800 focus:ring-4 focus:ring-white font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-white dark:text-white dark:border-white dark:hover:bg-white dark:hover:border-white dark:focus:ring-white"
                        type="button">
                        <a href="{{ route('dashboardSuperAdmin') }}"> Back</a>
                    </button>
                    <button
                        class="inline-flex items-center text-white bg-blue-700 border border-white focus:outline-none hover:bg-blue-800 focus:ring-4 focus:ring-white font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-white dark:text-white dark:border-white dark:hover:bg-white dark:hover:border-white dark:focus:ring-white"
                        type="button">
                        <a href="{{ route('adminList.create') }}">+ Admin Users</a>
                    </button>
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>

                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <th scope="row" class="  px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">{{ $item->name }}</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->username }}
                            </td>

                            <td class="px-6 py-4 text-center">
                                <a href="{{ route('adminList.edit', $item->id) }}"
                                    class="inline-flex items-center text-white bg-yellow-500 border border-white focus:outline-none hover:bg-yellow-600 focus:ring-4 focus:ring-white font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-white dark:text-white dark:border-white dark:hover:bg-white dark:hover:border-white dark:focus:ring-white">Edit
                                    user</a>
                                    <form  class="inline-flex items-center text-white bg-red-700 border border-white focus:outline-none hover:bg-red-800 focus:ring-4 focus:ring-white font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-white dark:text-white dark:border-white dark:hover:bg-white dark:hover:border-white dark:focus:ring-white" onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('adminList.delete', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete user</button>
                                    </form>
                                {{-- <a href="#"
                                    class="">Delete
                                    user</a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
