@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading contains-buttons">
                    <h3 class="panel-title">Quiz Details
                        <a class="btn btn-sm pull-right" href="{{route('quiz.index')}}" style="background: #46b1e6;color: #ffffff;margin-top: -1%;"> Back</a>
                    </h3>
                </div>

                <div class="panel-body"> 
                    <div><h3>{{$quiz_res[0]->question}} </h3></div>
                    @if($quiz_res[0]->image)
                    <img src="{{asset('quiz_images/'.$quiz_res[0]->image)}}" style="width:200px;border-radius:5px;" />
                    @endif
                    <div>A.{{$quiz_res[0]->option_one}}</div>
                    <div>B.{{$quiz_res[0]->option_two}}</div>
                    <div>C.{{$quiz_res[0]->option_three}}</div>
                    <div>D.{{$quiz_res[0]->option_four}}</div>
                    <br />
                    <div><b>Answer is :{{$quiz_answer[$quiz_res[0]->answer]}}</b></div>
                    <br />
                    <div>
                        <a href="{{route('quiz.edit',$quiz_res[0]->quiz_id)}}" class="btn btn-sm btn-warning">Update</a>
                        <form method="post" action="{{route('quiz.destroy',$quiz_res[0]->quiz_id)}}" style="display: inline;" >
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