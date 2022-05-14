@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header contains-buttons">
                    <h3 class="card-title">MTV Details
                        <a class="btn btn-sm pull-right" href="{{route('mtvs.index')}}" id="form-header-btn"> Back</a>
                    </h3>
                </div>

                <div class="card-body"> 
                    
                <div class="embed-responsive embed-responsive-16by9">
                <iframe width="942" height="530" src="{{$mtv_res[0]->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                    
                    <div><h3>{{$mtv_res[0]->title}}</h3></div>
                    <div>{{$mtv_res[0]->description}} </div>
                    <br />
                    <div>Youtube:{{$mtv_res[0]->url}} </div>
                    <div>Album  : {{$mtv_res[0]->albumName}} </div>
                    <br />
                    <div>  

                        <a href="{{route('mtvs.edit',$mtv_res[0]->mtv_id)}}" class="btn btn-sm btn-warning">Update</a>                                    
                        <form method="post" action="{{route('mtvs.destroy',$mtv_res[0]->mtv_id)}}" style="display: inline;">
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