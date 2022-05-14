@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header contains-buttons">
                    <h3 class="card-title">Create MTV
                        <a class="btn btn-sm btn-success pull-right" href="{{route('mtvs.index')}}" id="form-header-btn"> Back</a>
                    </h3>
                </div>

                <div class="card-body">  
                <form method="POST" action="{{route('mtvs.update',$mtvs_res[0]->mtv_id)}}" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="{{$mtvs_res[0]->title}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Video Title</label>
                            <input type="text" name="video_title" class="form-control" value="{{$mtvs_res[0]->video_title}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Duration</label>
                            <input type="text" name="duration" class="form-control" value="{{$mtvs_res[0]->duration}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Viewer</label>
                            <input type="text" name="viewer" class="form-control" value="{{$mtvs_res[0]->viewer}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea type="text" name="description" class="form-control" row="10">{{$mtvs_res[0]->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Description MM</label>
                            <textarea type="text" name="description_mm" class="form-control" row="10">{{$mtvs_res[0]->description_mm}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Url</label>
                            <input type="text" name="url" class="form-control" value="{{$mtvs_res[0]->url}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Choose Album</label>
                            <br />
                            <select class="form-select" name="album" >
                                @foreach($albums_list as $a)
                                    <option  value="{{$a->album_id}}"
                                    @if($a->album_id==$mtvs_res[0]->album_id)
                                        selected
                                    @endif
                                    >{{$a->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group"> 
                            <label for="">Status</label>
                            <br />                            
                            <label class="radio-inline"><input type="radio" id="inactive" name="status" value="0" 
                            @if($mtvs_res[0]->status != "1")
                                checked
                            @endif
                            >Inactive</label>
                            <label class="radio-inline"><input type="radio" id="active" name="status" value="1"
                            @if($mtvs_res[0]->status == "1")
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
@endsection