@extends('admin.master')
@push('title')
    All Genre   
@endpush
@section('content')
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">All Genre</h1>

        <!-- DataTables -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('genres.create') }}" class="btn btn-success mt-2">
                    <span class="text">Add New Genre</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="text-align: center; width:5%">No.</th>
                                <th style="text-align: center;">Genre</th>
                                <th style="text-align: center; width:30%">Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($genres as $g)  
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$g->name}}</td>
                                <td style="text-align: center;">
                                    <a href="{{ route('genres.edit',$g->id) }}" class="btn btn-warning">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <form action="{{ route('genres.destroy',$g->id) }}" method="post" style="display: inline-block">
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