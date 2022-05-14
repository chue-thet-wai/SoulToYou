@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header contains-buttons">
                    <h3 class="card-title">Band Details
                        <a class="btn btn-sm pull-right" href="{{route('bands.index')}}" id="form-header-btn"> Back</a>
                    </h3>
                </div>

                <div class="card-body"> 
                    <img src="{{asset('bands_images/'.$band_res[0]->main_image)}}" style="width:300px;border-radius:5px;padding:2%;" />
                    <br />
                    @foreach(json_decode($band_res[0]->images) as $img)
                        <img src="{{asset('bands_images/'.$img)}}" style="width:150px;border-radius:5px;padding:1%;" />
                    @endforeach
                    <div><h3>{{$band_res[0]->name}}</h3> </div>
                    <div>{{$band_res[0]->about}} </div>
                    <br />
                    <div>
                        <a href="{{route('bands.edit',$band_res[0]->band_id)}}" class="btn btn-sm btn-warning">Update</a>                                    
                        <form method="post" action="{{route('bands.destroy',$band_res[0]->band_id)}}" style="display: inline;">
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