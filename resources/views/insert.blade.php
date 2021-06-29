@extends('base')

@section('title',"Insert")

@section('sidebar')
    <div class="col-3 fw-bold">
        <form action="{{route('insertstate')}}" method="post">
            @csrf
            <div class="mb-3">
                <lable class="form-label">States</lable>
                <input type="text" placeholder="State" name="state" class="form-control">
            </div>

            <div class="mb-3">
                <input type="submit" value="submit" class="btn btn-danger w-50">
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="col-8 ms-auto fw-bold">
        <form action="{{route('insertcollege')}}" method="post">
            @csrf
            <div class="mb-3">
                <lable class="form-label">College Name</lable>
                <input type="text" name="name" placeholder="College Name" class="form-control">
            </div>
            <div class="mb-3">
                <lable class="form-label">College Description</lable>
                <textarea name="description" placeholder="Write Description ..." rows="5" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <lable class="form-label">Course</lable>
                <input type="text" name="course" id="" class="form-control" placeholder="Course">
            </div>
            <div class="mb-3">
                <lable class="form-label">Duration</lable>
                <select name="duration" class="form-select" id="">
                    <option selected disabled>Duration</option>
                    <option value="1">1 Year</option>
                    <option value="2">2 Years</option>
                    <option value="3">3 Years</option>
                    <option value="4">4 Years</option>
                    <option value="5">5 Years</option>
                    <option value="6">6 Years</option>
                    <option value="7">7 Years</option>
                </select>
            </div>
            <div class="mb-3">
                <lable class="form-label">States</lable>
                <select name="state" class="form-select" id="">
                <option selected disabled>Choose State</option>
                    @foreach ($states as $s)
                        <option value="{{$s->id}}">{{$s->state}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <input type="submit" value="Submit" class="btn btn-danger w-50">
            </div>
        </form>
    </div>
@endsection
