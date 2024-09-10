@extends('admin.master')
@push('title')
    Add New Movie 
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
                        <h3 class="card-title">New Movie</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('movies.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="thumbnail">Thumbnail</label>
                                <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Insert title..." name="title">
                            </div>
                            <div class="form-group">
                                <label for="genre_id">Genre</label>
                                <input type="text" class="form-control" id="genre_id" placeholder="Select genre..." name="genre_id">
                                <select name="religion" id="religion" class="form-control" required>
                                    @foreach ($genres as $g)
                                        <option value="{{$g}}">{{$g->name}}</option>  
                                    @endforeach
                                </select> 
                            </div>
                            <div class="form-group">
                                <label for="subtitle">Subtitle</label>
                                <input type="text" class="form-control" id="subtitle" placeholder="Insert subtitle..." name="subtitle">
                            </div>
                            <div class="form-group">
                                <label for="actor">Actor</label>
                                <input type="text" class="form-control" id="actor" placeholder="Insert actor..." name="actor">
                            </div>
                            <div class="form-group">
                                <label for="synopsis">Synopsis</label>
                                <textarea type="text" class="form-control" id="synopsis" placeholder="Insert synopsis..." name="synopsis"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="imdb_rating">IMDB Rating</label>
                                <input type="string" class="form-control" id="imdb_rating" placeholder="Insert rating divided with . (dot) not , (comma)" name="imdb_rating">
                            </div>
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" id="link" placeholder="Insert link..." name="link">
                            </div>
                            <div class="form-group">
                                <label for="quality">Quality</label>
                                <select name="quality" id="quality" class="form-control" required>
                                        <option value="CAM">CAM</option>
                                        <option value="HD">HD</option>  
                                        <option value="FULL HD">FULL HD</option>  
                                        <option value="2K">2K</option>  
                                        <option value="4K">4K</option>    
                                </select> 
                            </div>
                            <div class="form-group">
                                <label for="year">Year</label>
                                <input type="text" class="form-control" id="year" placeholder="Insert year..." name="year">
                            </div>
                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="text" class="form-control" id="duration" placeholder="Duration..." name="duration">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Confirm</button>
                            </div>
                        </form>
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