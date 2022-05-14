@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header contains-buttons">
                    <h3 class="card-title">Album Details
                        <a class="btn btn-sm pull-right" href="{{route('albums.index')}}" id="form-header-btn"> Back</a>
                    </h3>
                </div>

                <div class="card-body"> 
                    <img src="{{asset('albums_images/'.$album_res[0]->image)}}" style="width:200px;border-radius:5px;" />
                    <div><h3>{{$album_res[0]->title}} </h3></div>
                    <div>{{$album_res[0]->description}} </div>
                    <br />
                    <div>
                        <a href="{{route('albums.edit',$album_res[0]->album_id)}}" class="btn btn-sm btn-warning">Update</a>
                        <form method="post" action="{{route('albums.destroy',$album_res[0]->album_id)}}" style="display: inline;" >
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection