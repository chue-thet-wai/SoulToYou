@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading contains-buttons">
                    <h3 class="panel-title">New Details
                        <a class="btn btn-sm pull-right" href="{{route('news.index')}}" style="background: #46b1e6;color: #ffffff;margin-top: -1%;"> Back</a>
                    </h3>
                </div>

                <div class="panel-body"> 
                    <img src="{{asset('news_images/'.$new_res[0]->image)}}" style="width:200px;border-radius:5px;" />
                    <div><h3>{{$new_res[0]->title}} </h3></div>
                    <div>{{$new_res[0]->description}} </div>
                    <br />
                    <div>
                        <a href="{{route('news.edit',$new_res[0]->new_id)}}" class="btn btn-sm btn-warning">Update</a>
                        <form method="post" action="{{route('news.destroy',$new_res[0]->new_id)}}" style="display: inline;" >
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