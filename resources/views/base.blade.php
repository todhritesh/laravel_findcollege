<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getCollege | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-gradient alert-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a href="{{route('homepage')}}" class="navbar-brand">getCollege</a>

            <ul class="navbar-nav">
                <li class="nav-item"><a href="#search" class="nav-link btn btn-outline-danger px-3" data-bs-toggle="modal" >Search</a></li>
                <li class="nav-item"><a href="{{route('insert')}}" class="nav-link">Insert</a></li>
            </ul>
        </div>
    </nav>

    <!-- search modal -->

    <div class="modal fade" id="search">
        <div class="modal-dialog">
            <div class="modal-content px-3 pt-3">
                <h2>Search</h2>
                <form action="{{route('search')}}" method="get">
                    <div class="mb-3">
                        <input type="text" name="search" class="form-control" placeholder="Search here ....">
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <input type="submit" value="Search" class="btn btn-danger w-50 ">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 my-3">
        <div class="row">
            @section('sidebar')
                <div class="col-3">
                    <div class="list-group">
                        <li class="list-group-item bg-light text-center h3">States</li>

                        @foreach ($states as $s )
                            <a href="{{route('similar_state_college',['state_id'=>$s->id])}}" class="list-group-item list-group-item-action text-center">{{$s->state}}</a>
                        @endforeach
                    </div>
                </div>
            @show


            @section('content')
            @show
        </div>
    </div>

    <!-- <div class="container-fluid px-auto bg-dark">
        <div class="row">
            <h6>This is footer</h6>
        </div>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
