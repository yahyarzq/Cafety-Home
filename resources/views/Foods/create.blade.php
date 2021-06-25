@extends('layouts.admin')
@section('title', 'Create Authors')
@section('admin.content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Foods</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('foods.index') }}">Foods</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Data</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{ route('foods.store') }}" method="POST" enctype="multipart/form-data">
                    @CSRF
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name">Foto</label>
                                    <input type="file" name="foto" class="form-control @error('name') is-invalid @enderror" placeholder="Foto">
                                    <small class="text-danger">@error('title1') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="pictures">Judul</label>
                                    <input type="text" name="judul" class="form-control @error('pictures') is-invalid @enderror" placeholder="Judul">
                                    <small class="text-danger">@error('deskripsi1') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="address"> Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control @error('address') is-invalid @enderror" placeholder="Deskripsi">
                                    <small class="text-danger">@error('foto1') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="address">Harga</label>
                                    <input type="text" name="harga" class="form-control @error('address') is-invalid @enderror" placeholder="Harga">
                                    <small class="text-danger">@error('foto1') {{$message}} @enderror</small>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('foods.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                            <button type="submit" class="m-1 btn btn-success">Create</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection