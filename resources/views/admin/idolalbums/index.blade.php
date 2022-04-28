@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading contains-buttons">
                    <h3 class="panel-title">Album List
                        <a class="btn btn-sm btn-success pull-right" href="{{route('albums.create')}}" style="background: #46b1e6;color: #ffffff;margin-top: -1%;"> Create</a>
                    </h3>
                </div>
                
                <div class="panel-body">  
                <div class="table-responsive">                  
                    <table class="table table-striped">
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

