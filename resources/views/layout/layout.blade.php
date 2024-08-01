<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
@include('layout.header')

<div class="mx-3 my-2">
    @yield('content')
</div>

</body>
</html>
