@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header contains-buttons">
                    <h3 class="card-title">Album List
                        <a class="btn btn-sm btn-success pull-right" href="{{route('albums.create')}}" id="form-header-btn"> Create</a>
                    </h3>
                </div>
                
                <div class="card-body">  
                <div class="table-responsive">                  
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Band Name</th>
                                <th>Image</th>
                                <th>Aciton</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach($albums as $n)
                            <tr>
                                <td>@php echo $i;$i++; @endphp</td>
                                <td>{{$n->title}}</td>
                                @if($n->bandName=="")
                                    <td>{{$n->artistName}}(Solo Album)</td>
                                @else
                                    <td>{{$n->bandName}}</td>
                                @endif
                                
                                <td>
                                    <img src="{{ asset('/albums_images/'.$n->image) }}" width="50px" height="50px">
                                </td>
                                <td>
                                    <a href="{{route('albums.show',$n->album_id)}}" class="btn btn-sm btn-primary">View</a>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $albums->links() !!}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

