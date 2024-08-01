@extends('layout.layout')

@section('content')

<div class="bg-white">
    <!-- Main Course -->
    <div class="mx-auto max-w-2xl px-4 py-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class=" text-4xl font-bold tracking-tight text-gray-600 text-center">Main Course</h2>

        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($menu as $food)
            <div class="group relative">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="{{$food->images}}" alt="menu"
                        class="h-full w-full object-cover object-center lg:h-full lg:w-full" />
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class=" text-lg font-semibold text-gray-700">
                            <a href="#">
                                {{$food->name}}
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Rp. {{$food->harga}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>


@endsection
