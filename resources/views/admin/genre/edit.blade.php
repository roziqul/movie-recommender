@extends('admin.master')
@push('title')
    Edit Genre
@endpush
@section('content')
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Genre</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @foreach ($genre as $g)
                        <form action="{{ route('genres.update',$g->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Genre</label>
                                <input type="text" class="form-control" id="name" placeholder="Insert genre..." name="name" value="{{$g->name}}">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Confirm</button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

</div>
@endsection