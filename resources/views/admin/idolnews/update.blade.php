@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Create News
                        <a class="btn btn-sm btn-success pull-right" href="{{route('news.index')}}" id="form-header-btn"> Back</a>
                    </h3>
                </div>

                <div class="card-body">  
                <form method="POST" action="{{route('news.update',$news_res[0]->new_id)}}" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                        <div class="form-group">
                            <label for="">News Title</label>
                            <input type="text" name="title" class="form-control"  value="{{$news_res[0]->title}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">News Title MM</label>
                            <input type="text" name="title_mm" class="form-control"  value="{{$news_res[0]->title}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Choose Type</label>
                            <select class="form-select" name="type" >
                                @foreach($news_type as $t => $v)
                                    <option  value="{{$t}}"
                                    @if($news_res[0]->type == $t)
                                        selected
                                    @endif
                                    >{{$v}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">News Description</label>
                            <textarea name="description" class="form-control" required>{{$news_res[0]->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">News Description MM</label>
                            <textarea name="description_mm" class="form-control" required>{{$news_res[0]->description}}</textarea>
                        </div>
                        <input type="hidden" id="previous_image" name="previous_image" value="{{$news_res[0]->image}}">
                        <div class="form-group">
                            <label for="">Choose Related Image</label>
                            <input type="file" name="image">
                            <br />
                            <img src="{{asset('news_images/'.$news_res[0]->image)}}" style="width:200px;border-radius:5px;" />
                        </div>
                        <div class="form-group">
                            <label for="">Viewer</label>
                            <input type="text" name="viewer" class="form-control" value="{{$news_res[0]->viewer}}" required>
                        </div>
                        <div class="form-group"> 
                            <label for="">Status</label>
                            <br />                            
                            <label class="radio-inline"><input type="radio" id="inactive" name="status" value="0" 
                            @if($news_res[0]->status != "1")
                                checked
                            @endif
                            >Inactive</label>
                            <label class="radio-inline"><input type="radio" id="active" name="status" value="1"
                            @if($news_res[0]->status == "1")
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