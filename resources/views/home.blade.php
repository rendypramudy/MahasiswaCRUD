@extends('layout.default')
@extends('layout.idx2')

@section('content')

<div class="container-fluid" style="background-color: rgb(178, 178, 177)">

    <div class="position-absolute top-50 start-50 translate-middle">
        <h1 style="color:black">Welcome to University</h1>
        <div class="col-md-12 text-center">
           <p style="color:black" style="font-size 50px">Hello, {{auth()->user()->nama}}</p>
            <a href="/" type="button" class="btn btn-primary">View Mahasiswa</a>
        </div>
    </div>
</div>

@endsection
