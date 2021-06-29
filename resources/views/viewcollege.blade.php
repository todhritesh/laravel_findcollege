@extends('base')

@section('title',"State college")

@section('content')
    <div class="col-9">
        <div class="row">
        @foreach ($college as $c)

            <div class="col-10 mx-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <h3>College : {{$c->name}} ,  {{$c->state->state}}</h3>
                        <div class="d-flex">
                            <h6 class=" d-inline">Course : {{$c->course}}</h6>
                            <h6 class=" d-inline ms-auto">Duration : {{$c->duration}} Year(s)</h6>
                        </div>
                        <p class="text-muted"><h4>About</h4>{{$c->description}}</p>
                    </div>
                </div>
            </div>

        @endforeach
        </div>
    </div>
@endsection
