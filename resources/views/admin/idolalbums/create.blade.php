@extends('layouts.app')

@section('content')
@php
    echo "
    <script>
        $(document).ready(function() {
            $('#band').change(function(){
                isshow_artist();  
            });
            isshow_artist();
            function isshow_artist(){
                var bandName = $('#band').val(); 
                if(bandName=='99')  {
                    $('#artist-group').show();
                }else{
                    $('#artist-group').hide();
                }
            }
        });
    </script>
    ";
@endphp
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading contains-buttons">
                    <h3 class="panel-title">Create Album
                        <a class="btn btn-sm btn-success pull-right" href="{{route('albums.index')}}" style="background: #46b1e6;color: #ffffff;margin-top: -1%;"> Back</a>
                    </h3>
                </div>

                <div class="panel-body">  
                <form method="POST" action="{{route('albums.store')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Description MM</label>
                            <textarea name="description_mm" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Choose Related Image</label>
                            <input type="file" name="album_image">
                        </div>
                        <div class="form-group"> 
                            <label for="">Status</label>
                            <br />
                            <input type="radio" id="inactive" name="status" value="0" checked><label>Inactive</label>
                            <input type="radio" id="active" name="status" value="1"><label>Active</label>
                        </div>
                        <div class="form-group">
                            <label for="">Choose Band</label>
                            <br />
                            <select class="form-select" id="band" name="band" >
                                <option  value="99">Solo</option>
                                @foreach($bands_list as $b)
                                    <option  value="{{$b->band_id}}">{{$b->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" id="artist-group">
                            <label for="">Choose Artist</label>
                            <br />
                            <select class="form-select" id="artist" name="artist" >
                                <option  value="">Select Artist</option>
                                @foreach($artists_list as $a)
                                    <option  value="{{$a->artist_id}}">{{$a->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" value="Add" class="btn btn-sm btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection