@extends('layout.default')
@extends('layout.idx2')

@section('content')
<section>
    <div class="container mt-5">
        <h1 style="color: red">Tambah Mahasiswa</h1>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{url('/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa *</label>
                        <input type="text" name="nama" class="form-control" placeholder="Rendy">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nim Mahasiswa *</label>
                        <input type="number" name="nim" class="form-control" placeholder="24432312">
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat Mahasiswa *</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Bandung">
                    </div>

                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-danger">Add Mahasiswa</button>
                    </div>

                    <div class="form-group mt-2">
                       <a href="{{url('/')}}">Back To Home</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

@endsection
