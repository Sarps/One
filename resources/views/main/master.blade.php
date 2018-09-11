<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @section('include')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ URL::to('images/android.png') }}" rel="icon" >
    <!-- Fonts -->
    <link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ URL::to('css/w3file.css') }}" rel="stylesheet" >
    <script src="{{ URL::to('js/jqueryfile.js') }}"></script>
    <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    @show
<style type="text/css">
    #wrapper {
        width:50%;
        height: 50%;
        margin-left:auto;
        margin-right:auto;
        margin-top:50px;
    }

    a:hover{
        text-decoration: none;
    }


</style>
</head>
<body>

    <div id="wrapper">
         <table class="table w3-striped table-responsive">
    <thead class="w3-center">
        <caption> @yield('total')</caption>
      <tr>
        <th>Names</th>
        <th>Gender</th>
        <th>Index No.</th>
      </tr>
    </thead>
    <tbody>
      @yield('content')
    </tbody>
  </table>

        <a href="{{ route('welcome') }}"><button class="button btn-block btn-primary w3-round">Go Back</button></a>
    
</div>
   
    </div>
</body>
</html>