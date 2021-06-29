@extends('base')

@section('title',"Home")

@section('content')
    <div class="col-9 " style="overflow:auto;height:80vh;">
        <div class="row">
        @foreach ($colleges as $c)

            <div class="col-10 mx-auto mb-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h3>College : {{$c->name}} ,  {{$c->state->state}}</h3>
                        <div class="d-flex">
                            <h6 class=" d-inline">Course : {{$c->course}}</h6>
                            <h6 class=" d-inline ms-auto">Duration : {{$c->duration}} Year(s)</h6>
                        </div>
                        <p class="text-muted"><h4>About</h4>{{substr($c->description,0,50)}}.......</p>

                        <div class="row">
                            <a href="{{route('viewcollege',['id'=>$c->id])}}" class="w-25 mx-auto text-dark border-3 btn btn-outline-warning fw-bold">Know More....</a>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
        </div>
    </div>
@endsection
