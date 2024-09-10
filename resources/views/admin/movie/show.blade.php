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
                        <h3 class="card-title">Movie Detail</h3>
                    </div>
                    <!-- /.card-header -->
                    @foreach ($movie as $m)                        
                    <div class="card-body">
                        <div style="display: flex;">

                            <div style="width: 40%;">
                                <img src="{{ url($m->thumbnail) }}" style="height: 800px; width: 100%; border-radius:20px">
                            </div>
                        
                            <div style="width: 60%; padding: 10px; margin-left:10px;">
                                <div style="width: 100%; display: flex;">
                                    <h4 style="width: 20%; color: black;">Title</h4>
                                    <h4 style="width: 10%; color: black; text-align:center">:</h4>
                                    <h4 for="title" style="width: 100%; color: black;">{{$m->title}}</h4>
                                </div>
                                @if ($m->subtitle)
                                <div style="width: 100%; display: flex;">
                                    <h4 style="width: 20%; color: black;">Subtitle</h4>
                                    <h4 style="width: 10%; color: black; text-align:center">:</h4>
                                    <h4 for="subtitle" style="width: 100%; color: black;">{{$m->subtitle}}</h4>
                                </div>
                                @endif
                                <div style="width: 100%; display: flex;">
                                    <h4 style="width: 20%; color: black;">Stars</h4>
                                    <h4 style="width: 10%; color: black; text-align:center">:</h4>
                                    <h4 for="title" style="width: 100%; color: black;">{{$m->actor}}</h4>
                                </div>
                                <div style="width: 100%; display: flex;">
                                    <h4 style="width: 20%; color: black;">Genre</h4>
                                    <h4 style="width: 10%; color: black; text-align:center">:</h4>
                                    <h4 for="title" style="width: 100%; color: black;">{{$m->genre->name}}</h4>
                                </div>
                                <div style="width: 100%; display: flex;">
                                    <h4 style="width: 20%; color: black;">Year</h4>
                                    <h4 style="width: 10%; color: black; text-align:center">:</h4>
                                    <h4 for="title" style="width: 100%; color: black;">{{$m->year}}</h4>
                                </div>
                                <div style="width: 100%; display: flex;">
                                    <h4 style="width: 20%; color: black;">Rating</h4>
                                    <h4 style="width: 10%; color: black; text-align:center">:</h4>
                                    <h4 for="title" style="width: 100%; color: black;">{{$m->imdb_rating}}</h4>
                                </div>
                                <div style="width: 100%; display: flex;">
                                    <h4 style="width: 20%; color: black;">Quality</h4>
                                    <h4 style="width: 10%; color: black; text-align:center">:</h4>
                                    <h4 for="title" style="width: 100%; color: black;">{{$m->quality}}</h4>
                                </div>
                                <div style="width: 100%; display: flex;">
                                    <h4 style="width: 20%; color: black;">Link</h4>
                                    <h4 style="width: 10%; color: black; text-align:center">:</h4>
                                    <a class="btn btn-success" style="width: 100%; margin-bottom:5px" href="{{$m->link}}">Preview</a>
                                </div>
                                <div style="width: 100%; display: flex;">
                                    <h4 style="width: 20%; color: black;">Duration</h4>
                                    <h4 style="width: 10%; color: black; text-align:center">:</h4>
                                    <h4 for="title" style="width: 100%; color: black;">{{$m->duration}}</h4>
                                </div>
                                <div style="width: 100%; display: flex;">
                                    <h4 style="width: 20%; color: black;">Synopsis</h4>
                                    <h4 style="width: 10%; color: black; text-align:center">:</h4>
                                    <h4 for="title" style="width: 100%; color: black;"></h4>
                                </div>
                                <div style="width: 100%; display: flex;">
                                    <h4 for="title" style="width: 100%; color: black;">{{$m->synopsis}}</h4>
                                </div>        
                            </div>
                        </div>
                    </div>
                    @endforeach
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