@extends('layouts.admin')
@section('title', 'Edit Abouts')
@section('admin.content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Abouts</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('abouts.index') }}">Abouts</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                    <h3 class="card-title">Edit Data</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{ route('abouts.update', [$abouts->id]) }}" method="POST">
                    @CSRF
                    @method('put')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name">Title 1</label>
                                    <input type="text" name="title1" class="form-control @error('name') is-invalid @enderror" placeholder="Title 1" value="{{$abouts->title1}}">
                                    <small class="text-danger">@error('title1') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="pictures">Deskripsi1</label>
                                    <input type="text" name="deskripsi1" class="form-control @error('pictures') is-invalid @enderror" placeholder="Deskripsi 1" value="{{$abouts->deskripsi1}}">
                                    <small class="text-danger">@error('deskripsi1') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="address">Artikel 1 </label>
                                    <input type="text" name="artikel1" class="form-control @error('address') is-invalid @enderror" placeholder="Foto 1"value="{{$abouts->artikel1}}">
                                    <small class="text-danger">@error('foto1') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="address">Artikel 2</label>
                                    <input type="text" name="artikel2" class="form-control @error('address') is-invalid @enderror" placeholder="Foto 2"value="{{$abouts->artikel2}}">
                                    <small class="text-danger">@error('foto1') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="address">Artikel 3</label>
                                    <input type="text" name="artikel3" class="form-control @error('address') is-invalid @enderror" placeholder="Titie 2"value="{{$abouts->artikel3}}">
                                    <small class="text-danger">@error('foto1') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name">Title 2</label>
                                    <input type="text" name="title2" class="form-control @error('name') is-invalid @enderror" placeholder="Title 1"value="{{$abouts->title2}}">
                                    <small class="text-danger">@error('title1') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="address">Deskripsi 2</label>
                                    <input type="text" name="deskripsi2" class="form-control @error('address') is-invalid @enderror" placeholder="Deskripsi 2" value="{{$abouts->deskripsi2}}">
                                    <small class="text-danger">@error('Deskripsi 2') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('abouts.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                            <button type="submit" class="m-1 btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection