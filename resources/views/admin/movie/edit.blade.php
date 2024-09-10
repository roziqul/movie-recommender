@extends('admin.master')
@section('content')
<div id="content">
    
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Movie</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @foreach ($movie as $m)                        
                        <form action="{{ route('movies.update',$m->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="thumbnail">Thumbnail</label>
                                <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                                @error('thumbnail')
                                    <p>thumbnail</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" value="{{$m->title}}" name="title">
                                @error('title')
                                    <p>title</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="genre_id">Genre</label>
                                <select name="genre_id" id="genre_id" class="form-control" required>
                                @error('genre_id')
                                    <p>genre_id</p>
                                @enderror
                                    <option value="{{$m->genre_id}}" selected disabled>{{$m->genre->name}}</option>
                                    @foreach ($genres as $g)
                                    <option value="{{$g->id}}">{{$g->name}}</option>  
                                    @endforeach
                                </select> 
                            </div>
                            <div class="form-group">
                                <label for="subtitle">Subtitle</label>
                                <input type="text" class="form-control" id="subtitle" value="{{$m->subtitle}}" name="subtitle">
                                @error('subtitle')
                                    <p>subtitle</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="actor">Actor</label>
                                <input type="text" class="form-control" id="actor" value="{{$m->actor}}" name="actor">
                                @error('actor')
                                    <p>actor</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="synopsis">Synopsis</label>
                                <textarea type="text" class="form-control" id="synopsis" name="synopsis">
                                    {{$m->synopsis}}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="imdb_rating">IMDB Rating</label>
                                <input type="number" class="form-control" id="imdb_rating" value="{{$m->imdb_rating}}" name="imdb_rating">
                                @error('imdb_rating')
                                    <p>imdb_rating</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" id="link" value="{{$m->link}}" name="link">
                                @error('link')
                                    <p>link</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="quality">Quality</label>
                                <select name="quality" id="quality" class="form-control" required>
                                @error('quality')
                                    <p>quality</p>
                                @enderror
                                    <option value="{{$m->quality}}" selected disabled>{{$m->quality}}</option>
                                    <option value="CAM">CAM</option>
                                    <option value="HD">HD</option>  
                                    <option value="FULL HD">FULL HD</option>  
                                    <option value="2K">2K</option>  
                                    <option value="4K">4K</option>    
                                </select> 
                            </div>
                            <div class="form-group">
                                <label for="year">Year</label>
                                <input type="number" class="form-control" id="year" value="{{$m->year}}" name="year">
                                @error('year')
                                    <p>year</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="text" class="form-control" id="duration" name="duration" placeholder="HH:MM:SS" pattern="\d{2}:\d{2}:\d{2}" title="Please enter a valid duration (HH:MM:SS)" value="{{$m->duration}}">
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

{{-- <script>
    document.getElementById('duration').addEventListener('input', function (event) {
      var isValid = event.target.checkValidity();
      if (!isValid) {
        event.target.setCustomValidity('Please enter a valid duration (HH:MM:SS)');
      } else {
        event.target.setCustomValidity('');
      }
    });
</script> --}}