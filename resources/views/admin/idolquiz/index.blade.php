@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header contains-buttons">
                    <h3 class="card-title">Quiz List
                        <a class="btn btn-sm btn-success pull-right" href="{{route('quiz.create')}}" id="form-header-btn"> Create</a>
                    </h3>
                </div>

                <div class="card-body">  
                <div class="table-responsive">                  
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Question</th>
                                <th>Aciton</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach($quizzes as $n)
                            <tr>
                                <td>@php echo $i;$i++; @endphp</td>
                                <td>{{$n->question}}</td>
                                <td>
                                    <a href="{{route('quiz.show',$n->quiz_id)}}" class="btn btn-sm btn-primary">View</a>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Pagination --}}
                    <div class="d-flex justify-content-center">
                        {!! $quizzes->links() !!}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

