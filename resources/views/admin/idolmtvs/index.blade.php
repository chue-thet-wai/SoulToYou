@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header contains-buttons">
                    <h3 class="card-title">MTV List
                        <a class="btn btn-sm btn-success pull-right" href="{{route('mtvs.create')}}" id="form-header-btn"> Create</a>
                    </h3>
                </div>

                <div class="card-body">  
                <div class="table-responsive">                  
                    <table class="table table-bordered">
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

