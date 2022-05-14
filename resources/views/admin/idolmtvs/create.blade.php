@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header contains-buttons">
                    <h3 class="card-title">Create MTV
                        <a class="btn btn-sm pull-right" href="{{route('mtvs.index')}}" id="form-header-btn"> Back</a>
                    </h3>
                </div>

                <div class="card-body">  
                <form method="POST" action="{{route('mtvs.store')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Video Title</label>
                            <input type="text" name="video_title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Duration</label>
                            <input type="text" name="duration" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Viewer</label>
                            <input type="text" name="viewer" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea type="text" name="description" class="form-control" row="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Description MM</label>
                            <textarea type="text" name="description_mm" class="form-control" row="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Url</label>
                            <input type="text" name="url" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Choose Album</label>
                            <br />
                            <select class="form-select" name="album" >
                                @foreach($albums_list as $a)
                                    <option  value="{{$a->album_id}}">{{$a->title}}</option>
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
@endsection