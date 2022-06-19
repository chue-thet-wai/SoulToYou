@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header contains-buttons">
                    <h3 class="card-title">Create Band
                        <a class="btn btn-sm pull-right" href="{{route('bands.index')}}" id="form-header-btn"> Back</a>
                    </h3>
                </div>

                <div class="card-body">  
                <form method="POST" action="{{route('bands.store')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">About</label>
                            <textarea name="about" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">About MM</label>
                            <textarea name="about_mm" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Main Image for Slider</label>
                            <input type="file" name="band_image">
                        </div>
                        <div class="user-image mb-3 text-center">
                            <div class="imgPreview"> </div>
                        </div>   
                        <br />         
                        <div class="custom-file">
                            <label class="custom-file-label" for="images">Choose images</label>
                            <input type="file" name="imageFile[]" class="custom-file-input" id="images" multiple="multiple">                            
                        </div>
                        <br />
                        <div class="form-group">
                            <label for="">Twitter Subscribers</label>
                            <input type="text" name="twitter_subscriber" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Instagram Subscribers</label>
                            <input type="text" name="instagram_subscriber" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Choose Type</label>
                            <br />
                            <select class="form-select" name="type" >
                                @foreach($band_type as $t => $v)
                                    <option  value="{{$t}}">{{$v}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group"> 
                            <label for="">Status</label>
                            <br />
                            <input type="radio" id="inactive" name="status" value="0" checked><label>Inactive</label>
                            <input type="radio" id="active" name="status" value="1"><label>Active</label>
                        </div>
                        <input type="submit" value="Add" class="btn btn-sm btn-primary">
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
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
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