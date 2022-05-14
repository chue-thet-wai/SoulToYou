@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header contains-buttons">
                    <h3 class="card-title">News List
                        <a class="btn btn-sm pull-right" href="{{route('bands.create')}}"  id="form-header-btn"> Create</a>
                    </h3>
                </div>

                <div class="card-body">  
                <div class="table-responsive">                  
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>About</th>
                                <th>Image</th>
                                <th>Aciton</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach($bands as $n)
                            <tr>
                                <td>@php echo $i;$i++; @endphp</td>
                                <td>{{$n->name}}</td>
                                <td>{{$n->about}}</td>
                                <td>
                                    <img src="{{ asset('/bands_images/'.$n->main_image) }}" width="50px" height="50px">
                                </td>
                                <td>
                                    <a href="{{route('bands.show',$n->band_id)}}" class="btn btn-sm btn-primary">View</a>   
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $bands->links() !!}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

