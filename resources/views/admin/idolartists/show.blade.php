@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading contains-buttons">
                    <h3 class="panel-title">Artist Details
                        <a class="btn btn-sm pull-right" href="{{route('artists.index')}}" style="background: #46b1e6;color: #ffffff;margin-top: -1%;"> Back</a>
                    </h3>
                </div>

                <div class="panel-body"> 
                    <img src="{{asset('artists_images/'.$artist_res[0]->main_image)}}" style="width:300px;border-radius:5px;" />
                    <br />
                    @foreach(json_decode($artist_res[0]->images) as $img)
                        <img src="{{asset('artists_images/'.$img)}}" style="width:150px;border-radius:5px;padding:1%;" />
                    @endforeach
                    <div><h3>{{$artist_res[0]->name}} </h3></div>
                    <div><h5>Member of  <b>{{$artist_res[0]->bandName}}</b></h5> </div>
                    <div>{{$artist_res[0]->about}} </div>
                    <br />
                    <div>
                        <a href="{{route('artists.edit',$artist_res[0]->artist_id)}}" class="btn btn-sm btn-warning">Update</a>
                        <form method="post" action="{{route('artists.destroy',$artist_res[0]->artist_id)}}" style="display: inline;" >
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