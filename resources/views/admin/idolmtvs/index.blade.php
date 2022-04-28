@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading contains-buttons">
                    <h3 class="panel-title">MTV List
                        <a class="btn btn-sm btn-success pull-right" href="{{route('mtvs.create')}}" style="background: #46b1e6;color: #ffffff;margin-top: -1%;"> Create</a>
                    </h3>
                </div>

                <div class="panel-body">  
                <div class="table-responsive">                  
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Album</th>
                                <th>Sing By</th>
                                <th>Url</th>
                                <th>Aciton</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach($mtvs as $m)
                            <tr>
                                <td>@php echo $i;$i++; @endphp</td>
                                <td>{{$m->title}}</td>
                                <td>{{$m->albumName}}</td>
                                @if($m->bandName=="")
                                    <td>{{$m->artistName}}(Solo)</td>
                                @else
                                    <td>{{$m->bandName}}</td>
                                @endif
                                <td>{{$m->url}}</td>
                                <td>
                                    <a href="{{route('mtvs.show',$m->mtv_id)}}" class="btn btn-sm btn-primary">View</a>                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Pagination --}}
                    <div class="d-flex justify-content-center">
                        {!! $mtvs->links() !!}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

