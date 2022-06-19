@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header contains-buttons">
                    <h3 class="card-title">Update Band
                        <a class="btn btn-sm pull-right" href="{{route('bands.index')}}" id="form-header-btn"> Back</a>
                    </h3>
                </div>

                <div class="card-body">  
                <form method="POST" action="{{route('bands.update',$bands_res[0]->band_id)}}" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control"  value="{{$bands_res[0]->name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">About</label>
                            <textarea name="about" class="form-control" required>{{$bands_res[0]->about}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">About MM</label>
                            <textarea name="about_mm" class="form-control" required>{{$bands_res[0]->about_mm}}</textarea>
                        </div>
                        <input type="hidden" id="previous_image" name="previous_image" value="{{$bands_res[0]->main_image}}">
                        <div class="form-group">
                            <label for="">Choose Main Image</label>
                            <input type="file" name="band_image">
                            <br />
                            <img src="{{asset('bands_images/'.$bands_res[0]->main_image)}}" style="width:200px;border-radius:5px;" />
                        </div> 
                        <br />         
                        <div class="custom-file">
                            <label class="custom-file-label" for="images">Choose images(For Multi-Image)</label>
                            <input type="file" name="imageFile[]" class="custom-file-input" id="images" multiple="multiple">                            
                        </div>
                        <br /> 
                        <div class="user-image mb-3 text-center">
                            <div class="imgPreview"> 
                            </div>
                        </div>  
                        <br />                      
                        <div class="previous_upload"> 
                            <label for="">Previous Uploaded Image<br />
                                <h5>(If you want to delete , please check the image.)</h5>
                            </label>
                            <br />
                            <div class="previous_images" style="display: -webkit-box;overflow-y: auto;">
                            
                            @foreach(json_decode($bands_res[0]->images) as $img)
                                <div style="width:200px;border-radius:5px;padding:1%;margin-left:5%;">
                                    <div class="row"><input type="checkbox"  name="previous_upload[]" value="{{$img}}"></div>                                
                                    <div class="row"><img src="{{asset('bands_images/'.$img)}}" style="width:100%;"  /></div>
                                </div>
                            @endforeach
                            </div>
                        </div>                        
                        <br />
                        
                        <div class="form-group">
                            <label for="">Twitter Subscribers</label>
                            <input type="text" name="twitter_subscriber" class="form-control" value="{{$bands_res[0]->twitter_subscriber}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Instagram Subscribers</label>
                            <input type="text" name="instagram_subscriber" class="form-control" value="{{$bands_res[0]->instagram_subscriber}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Choose Type</label>
                            <select class="form-select" name="type" >
                                @foreach($band_type as $t => $v)
                                    <option  value="{{$t}}"
                                    @if($bands_res[0]->band_type == $t)
                                        selected
                                    @endif
                                    >{{$v}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group"> 
                            <label for="">Status</label>
                            <br />                            
                            <label class="radio-inline"><input type="radio" id="inactive" name="status" value="0" 
                            @if($bands_res[0]->status != "1")
                                checked
                            @endif
                            >Inactive</label>
                            <label class="radio-inline"><input type="radio" id="active" name="status" value="1"
                            @if($bands_res[0]->status == "1")
                                checked
                            @endif
                            >Active</label>
                        </div>
                        <input type="submit" value="Update" class="btn btn-sm btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@php 
echo 
"
    <style>
        .imgPreview img {
            padding: 8px;
            max-width: 100px;
        } 
    </style>
    <!-- jQuery -->
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
    <script>
        $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };
        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
        });    
    </script>
";
@endphp
@endsection