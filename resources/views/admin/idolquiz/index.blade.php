@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading contains-buttons">
                    <h3 class="panel-title">Quiz List
                        <a class="btn btn-sm btn-success pull-right" href="{{route('quiz.create')}}" style="background: #46b1e6;color: #ffffff;margin-top: -1%;"> Create</a>
                    </h3>
                </div>

                <div class="panel-body">  
                <div class="table-responsive">                  
                    <table class="table table-striped">
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

