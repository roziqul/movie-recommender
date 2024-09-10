@extends('admin.master')
@push('title')
    Movies Index   
@endpush
@section('content')
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">All Movies</h1>

        <!-- DataTables -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('movies.create') }}" class="btn btn-success mt-2">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Add new movie</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="text-align: center; width:5%">No.</th>
                                <th style="text-align: center;">Title</th>
                                <th style="text-align: center; width:10%">Genre</th>
                                <th style="text-align: center; width:25%">Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($movies as $m)
                            <tr>
                                <td>{{$no++}}</td>
                                @if ($m->subtitle)
                                <td>{{$m->title}} : {{$m->subtitle}}</td>
                                @else
                                <td>{{$m->title}}</td>
                                @endif
                                <td>{{$m->genre->name}}</td>
                                <td style="text-align: center">
                                    <a href="{{ route('movies.show',$m->id) }}" class="btn btn-primary">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-search"></i>
                                        </span>
                                        <span class="text">Detail</span>
                                    </a>
                                    <a href="{{ route('movies.edit',$m->id) }}" class="btn btn-warning">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <form action="{{ route('movies.destroy',$m->id) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">Hapus</span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
@endsection