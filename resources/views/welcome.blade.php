<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ URL::to('images/android.png') }}" rel="icon" >
    <!-- Fonts -->
    <link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ URL::to('css/w3file.css') }}" rel="stylesheet" >
    <script src="{{ URL::to('js/jqueryfile.js') }}"></script>
    <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>

<style type="text/css">
    #wrapper {
        width:50%;
        height: 50%;
        margin-left:auto;
        margin-right:auto;
        margin-top:50px;
    }

    a{
      color:blue;
      text-decoration: none;  
    }

</style>
</head>
    <body> 

        <div class="container" id="wrapper">
            <form action="{{ route('welcome') }}" method="post" class="form-group">
                @csrf
                <!-- <fieldset> -->
                    <!-- <legend style="font-size:18px">Student Details</legend> -->
                <div class="form-group w3-center">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" placeholder="Enter Full Name" class="form-control">
                </div>

                 <div class="form-group w3-center">
                    <label for="indexno">Index Number</label>
                    <input type="text" name="indexno" placeholder="Enter Index Number" class="form-control">
                </div>

                 <div class="form-group w3-center">
                    <label for="tele">Telephone</label>
                    <input type="text" name="tele" placeholder="Enter Telephone Number" class="form-control">
                </div>

                 <div class="form-group w3-center">
                    <label for="affiliate">Affiliation</label>
                    <select class="form-control" name="affiliate">
                        <option>Regular</option>
                        <option>Parallel</option>
                    </select>
                </div>

                 <div class="form-group w3-center">
                    <label>Sex</label>
                    <div class="w3-center">
             <input type="radio" name="gender" value="male" checked>Male
             <input type="radio" name="gender" value="female" style="margin-left:50px">Female
             </div>

                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                <!-- </fieldset> -->
            </form>
            <div class="w3-center">
           <p> <a href="{{ route('regular') }}">View Regular Students' List</a>
            </p>
            <p><a href="{{ route('parallel') }}">View Parallel Students' List</a>
             </p>
             </div>
        </div>
           

    </body>
</html>

        

