@extends('layouts.admin')
@section('title', 'Authors')
@section('admin.content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Homepages</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Homepages</li>
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
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Data table of Homepages</h3>
                        <a href="{{ route('homepages.create') }}" class="btn btn-sm btn-success"><i
                                class="fas fa-plus"></i>
                            Create</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table-authors" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Deskription</th>
                                <th>Picture</th>
                                <th>Picture</th>
                                <th>Title</th>
                                <th>Deskription</th>
                                <th>Footer</th>
                                <th>Update At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($homepages as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title1 }}</td>
                                    <td>{{ $item->deskripsi1 }}</td>
                                    <td>
                                        <a href="{{ asset('img/' . $item->foto1) }}">Lihat Gambar</a>
                                    </td>
                                    <td>
                                        <a href="{{ asset('img/' . $item->foto2) }}">Lihat Gambar</a>
                                    </td>
                                    <td>{{ $item->title2 }}</td>
                                    <td>{{ $item->deskripsi2 }}</td>
                                    <td>{{ $item->fotter }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('homepages.edit', [$item->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                        <form class="float-left m-1" action="{{ route('homepages.destroy', [$item->id]) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Deskription</th>
                                <th>Picture</th>
                                <th>Picture</th>
                                <th>Title</th>
                                <th>Deskription</th>
                                <th>Footer</th>
                                <th>Update At</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@push('script')
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
            $("#table-authors").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });

    </script>
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush
