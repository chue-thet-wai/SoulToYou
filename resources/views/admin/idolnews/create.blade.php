@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header contains-buttons">
                    <h3 class="card-title">Create News
                        <a class="btn btn-sm btn-success pull-right" href="{{route('news.index')}}" id="form-header-btn"> Back</a>
                    </h3>
                </div>

                <div class="card-body">  
                <form method="POST" action="{{route('news.store')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="">News Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">News Title MM</label>
                            <input type="text" name="title_mm" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Choose Type</label>
                            <select class="form-select" name="type" >
                                @foreach($news_type as $t => $v)
                                    <option  value="{{$t}}">{{$v}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">News Description</label>
                            <textarea name="description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">News Description MM</label>
                            <textarea name="description_mm" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Choose Related Image</label>
                            <input type="file" name="image">
                        </div>
                        <div class="form-group">
                            <label for="">Viewer</label>
                            <input type="text" name="viewer" class="form-control" required>
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