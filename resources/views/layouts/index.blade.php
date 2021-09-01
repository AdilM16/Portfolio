<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>{{env('APP_NAME')}}</title>
 <link rel="stylesheet" href={{asset('css/app.css')}}>
</head>
<body>
 @yield('content')
 <script src={{asset('js/app.js')}}></script>
</body>
</html>

@if ($message = Session::get('success'))
 <div class="alert alert-success alert-block text-center">
 <button type="button" class="close" data-dismiss="alert">×</button>
 <strong>{{$message}}</strong>
 </div>
@endif