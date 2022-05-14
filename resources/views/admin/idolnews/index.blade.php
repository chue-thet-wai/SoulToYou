@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header contains-buttons">
                    <h3 class="card-title">News List
                        <a class="btn btn-sm btn-success pull-right" href="{{route('news.create')}}" id="form-header-btn"> Create</a>
                    </h3>
                </div>

                <div class="card-body">  
                <div class="table-responsive">                  
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Aciton</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach($news as $n)
                            <tr>
                                <td>@php echo $i;$i++; @endphp</td>
                                <td>{{$n->title}}</td>
                                <td>{{$n->description}}</td>
                                <td>
                                    <img src="{{ asset('/news_images/'.$n->image) }}" width="50px" height="50px">
                                </td>
                                <td>
                                    <a href="{{route('news.show',$n->new_id)}}" class="btn btn-sm btn-primary">View</a>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Pagination --}}
                    <div class="d-flex justify-content-center">
                        {!! $news->links() !!}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

