<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('asset/img/logo.png') }}" type="image/x-icon">
    <title>CV Miracle Engineering</title>
</head>
<body>
  
  @include('admin.partials.logout')
  <div class="container-fluid" style="height: screen">
    <div class="row">
        <div class="col-md-3 p-0">
            @yield('navbar')
        </div>
        <div class="col-md-9" style="height: 88.3vh">
            <div class="scrollable-div p-0  border" style="height: 100%;">
                @yield('content')
            </div>
        </div>
    </div>
  </div>

  
  @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>