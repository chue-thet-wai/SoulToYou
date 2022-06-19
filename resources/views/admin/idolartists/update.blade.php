@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header contains-buttons">
                    <h3 class="card-title">Update Artist
                        <a class="btn btn-sm btn-success pull-right" href="{{route('artists.index')}}" id="form-header-btn"> Back</a>
                    </h3>
                </div>

                <div class="card-body">  
                <form method="POST" action="{{route('artists.update',$artists_res[0]->artist_id)}}" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control"  value="{{$artists_res[0]->name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Birth Name</label>
                            <input type="text" name="birth_name" class="form-control" value="{{$artists_res[0]->birth_name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Korea Name</label>
                            <input type="text" name="korea_name" class="form-control" value="{{$artists_res[0]->korea_name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Member Type</label>
                            <br />
                            <select class="form-select" name="member_type" >
                                @foreach($member_type as $t => $v)
                                    <option  value="{{$t}}"
                                    @if($artists_res[0]->member_type == $t)
                                        selected
                                    @endif
                                    >{{$v}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Birth Date</label>
                            @php $birth_date=date('Y-m-d',strtotime($artists_res[0]->birth_date)); @endphp
                            <input type="date" name="birth_date" class="form-control" value="{{$birth_date}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Joined Date</label>
                            @php $joined_date=date('Y-m-d',strtotime($artists_res[0]->joined_date)); @endphp
                            <input type="date" name="birth_date" class="form-control" value="{{$joined_date}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Zondic</label>
                            <input type="text" name="zondic" class="form-control" value="{{$artists_res[0]->zondic}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Height</label>
                            <input type="text" name="height" class="form-control" value="{{$artists_res[0]->height}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Blood Type</label>
                            <input type="text" name="blood_type" class="form-control" value="{{$artists_res[0]->blood_type}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">MBTI</label>
                            <input type="text" name="mbti" class="form-control" value="{{$artists_res[0]->mbti}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">About</label>
                            <textarea name="about" class="form-control" required>{{$artists_res[0]->about}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">About MM</label>
                            <textarea name="about_mm" class="form-control" required>{{$artists_res[0]->about_mm}}</textarea>
                        </div>
                        <input type="hidden" id="previous_image" name="previous_image" value="{{$artists_res[0]->main_image}}">
                        <div class="form-group">
                            <label for="">Choose Related Image</label>
                            <input type="file" name="artist_image">
                            <br />
                            <img src="{{asset('artists_images/'.$artists_res[0]->main_image)}}" style="width:200px;border-radius:5px;" />
                        </div>
                        <br />        
                        <div class="custom-file">
                            <label class="custom-file-label" for="images">Choose images</label>
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
                            
                            @foreach(json_decode($artists_res[0]->images) as $img)
                                <div style="width:200px;border-radius:5px;padding:1%;margin-left:5%;">
                                    <div class="row"><input type="checkbox"  name="previous_upload[]" value="{{$img}}"></div>                                
                                    <div class="row"><img src="{{asset('artists_images/'.$img)}}" style="width:100%;"  /></div>
                                </div>
                            @endforeach
                            </div>
                        </div>                         
                        <br />
                        <div class="form-group">
                            <label for="">Choose Band</label>
                            <br />
                            <select class="form-select" name="band_id" >
                                <!--<option  value="99">Solo</option>-->
                                @foreach($bands_list as $a)
                                    <option  value="{{$a->band_id}}"
                                        @if($a->band_id==$artists_res[0]->band_id)
                                            selected
                                        @endif
                                    >{{$a->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group"> 
                            <label for="">Status</label>
                            <br />                            
                            <label class="radio-inline"><input type="radio" id="inactive" name="status" value="0" 
                            @if($artists_res[0]->status != "1")
                                checked
                            @endif
                            >Inactive</label>
                            <label class="radio-inline"><input type="radio" id="active" name="status" value="1"
                            @if($artists_res[0]->status == "1")
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