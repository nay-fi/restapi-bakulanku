@extends('layout.layout')

@section('content')
<div class="bg-white">
  <!-- Main Course -->
  <div class="mx-auto max-w-2xl px-4 py-4 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class=" text-4xl font-bold tracking-tight text-gray-600 text-center">Main Course</h2>

    <table class="table-auto">
      <thead>
        <tr>
          <th>Nama Makanan/Minuman</th>
          <th>Harga</th>
          <th>Kategori</th>
          <th>Image</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Nasi Telor</td>
          <td>3000</td>
          <td>Makanan</td>
          <td>
            <img src="https://pixabay.com/id/photos/roti-telur-sarapan-lezat-makanan-1836411/" alt="">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
