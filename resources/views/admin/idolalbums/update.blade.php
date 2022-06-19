@extends('layouts.app')

@section('content')
@php
    echo "
    <script src='https://code.jquery.com/jquery-1.7.1.min.js'></script>
    <script>
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
                    <h3 class="card-title">Update Album
                        <a class="btn btn-sm btn-success pull-right" href="{{route('albums.index')}}" id="form-header-btn"> Back</a>
                    </h3>
                </div>
               
                <div class="card-body">  
                <form method="POST" action="{{route('albums.update',$albums_res[0]->album_id)}}" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control"  value="{{$albums_res[0]->title}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" required>{{$albums_res[0]->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Description MM</label>
                            <textarea name="description_mm" class="form-control" required>{{$albums_res[0]->description_mm}}</textarea>
                        </div>
                        <input type="hidden" id="previous_image" name="previous_image" value="{{$albums_res[0]->image}}">
                        <div class="form-group">
                            <label for="">Choose Related Image</label>
                            <input type="file" name="album_image">
                            <br />
                            <img src="{{asset('albums_images/'.$albums_res[0]->image)}}" style="width:200px;border-radius:5px;" />
                        </div>
                        <div class="form-group"> 
                            <label for="">Status</label>
                            <br />                            
                            <label class="radio-inline"><input type="radio" id="inactive" name="status" value="0" 
                            @if($albums_res[0]->status != "1")
                                checked
                            @endif
                            >Inactive</label>
                            <label class="radio-inline"><input type="radio" id="active" name="status" value="1"
                            @if($albums_res[0]->status == "1")
                                checked
                            @endif
                            >Active</label>
                        </div>
                        <div class="form-group">
                            <label for="">Choose Band</label>
                            <br />
                            <select class="form-select" id="band" name="band" >
                                <option  value="99">Solo</option>
                                @foreach($bands_list as $b)
                                    <option  value="{{$b->band_id}}"
                                        @if($b->band_id==$albums_res[0]->band_id)
                                            selected
                                        @endif
                                    >{{$b->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" id="artist-group">
                            <label for="">Choose Artist</label>
                            <br />
                            <select class="form-select" id="artist" name="artist" >
                                <option  value="">Select Artist</option>
                                @foreach($artists_list as $a)
                                    <option  value="{{$a->artist_id}}"
                                        @if($a->artist_id==$albums_res[0]->artist_id)
                                            selected
                                        @endif
                                    >{{$a->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" value="Update" class="btn btn-sm btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection