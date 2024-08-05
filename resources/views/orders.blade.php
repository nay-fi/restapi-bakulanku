@extends('layout.layout')

@section('content')
<div class="bg-white">
  <!-- Main Course -->
  <div class="mx-auto max-w-2xl px-4 py-4 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class=" text-4xl font-bold tracking-tight pb-10 text-gray-800 text-center">Add Order</h2>

    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-1 xl:gap-x-8 lg:px-32">

      <div class="px-5 py-3 justify-center">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="{{ route('order.store') }}" method="POST">
          @csrf
            <div class="mt-5 grid grid-cols-1 gap-x-1 gap-y-8 lg:grid-cols-6">
              <div class="col-span-6">
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama Pemesan</label>
                <div class="mt-2">
                  <input type="text" name="name" id="name" autocomplete="given-name" class="block w-9/12 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>

              <div class="col-span-6">
                <label for="table" class="block text-sm font-medium leading-6 text-gray-900">Nomor Meja</label>
                <div class="mt-2">
                  <input type="text" name="table" id="table" autocomplete="family-name" class="block w-9/12 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>

              <div class="sm:col-span-2 sm:col-start-1">
                <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Nama Makanan</label>
                <div class="mt-2">
                  <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    <option value="">United States</option>
                  </select>
                </div>
              </div>

              <div class="sm:col-span-2">
                <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Jumlah</label>
                <div class="mt-2">
                  <select id="country" name="country" autocomplete="country-name" class="block text-center w-3/6 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    @for($i=0; $i<=20; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
                  </select>
                </div>
              </div>

              <div class="sm:col-span-2 sm:col-start-1">
                <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Nama Minuman</label>
                <div class="mt-2">
                    <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="">United States</option>
                    </select>
                  </div>
                </div>

                  <div class="sm:col-span-2">
                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Jumlah</label>
                    <div class="mt-2">
                      <select id="country" name="country" autocomplete="country-name" class="block text-center w-3/6 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        @for($i=0; $i<=20; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                        @endfor
                      </select>
                    </div>
                  </div>


              <div class="col-span-full">
                <label for="total" class="block text-sm font-medium leading-6 text-gray-900">Total</label>
                <div class="mt-2">
                  <input type="text" name="total" id="total" autocomplete="total" class="block w-1/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>

            </div>
        </form>
      </div>
    </div>

  </div>
</div>
  @endsection

