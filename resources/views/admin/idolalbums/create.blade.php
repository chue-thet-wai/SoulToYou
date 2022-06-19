@extends('layouts.app')

@section('content')
@php
    echo "
    <script src='https://code.jquery.com/jquery-1.7.1.min.js'></script>
    <script type='text/javascript'>
        jQuery(document).ready(function() {
            jQuery('#band').change(function(){
                isshow_artist();  
            });
            isshow_artist();
            function isshow_artist(){
                var bandName = jQuery('#band').val(); 
                if(bandName=='99')  {
                    jQuery('#artist-group').show();
                }else{
                    jQuery('#artist-group').hide();
                }
            }
        });
    </script>
    ";
@endphp
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header contains-buttons">
                    <h3 class="card-title">Create Album
                        <a class="btn btn-sm btn-success pull-right" href="{{route('albums.index')}}" id="form-header-btn"> Back</a>
                    </h3>
                </div>

                <div class="card-body">  
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