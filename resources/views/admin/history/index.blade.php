@extends('admin.master')
@push('title')
    History   
@endpush
@section('content')
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">All History</h1>

        <!-- DataTables -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="text-align: center; width:5%">#ID</th>
                                <th style="text-align: center;">User</th>
                                <th style="text-align: center;">Movie</th>
                                <th style="text-align: center;">Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($histories as $h)  
                            <tr>
                                <td>{{$h->id}}</td>
                                <td>{{$h->user->name}}</td>
                                <td>{{$h->movie->title}}</td>
                                <td style="text-align: center;">
                                    <form action="{{ route('histories.destroy',$h->id) }}" method="post">
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