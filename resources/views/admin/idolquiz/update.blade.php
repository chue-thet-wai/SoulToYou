@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header contains-buttons">
                    <h3 class="card-title">Create Quiz
                        <a class="btn btn-sm btn-success pull-right" href="{{route('quiz.index')}}" id="form-header-btn"> Back</a>
                    </h3>
                </div>

                <div class="card-body">  
                <form method="POST" action="{{route('quiz.update',$quiz_res[0]->quiz_id)}}" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                        <div class="form-group">
                            <label for="">Question</label>
                            <textarea name="question" class="form-control" required>{{$quiz_res[0]->question}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Option A</label>
                            <textarea name="option_1" class="form-control" required>{{$quiz_res[0]->option_one}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Option B</label>
                            <textarea name="option_2" class="form-control" required>{{$quiz_res[0]->option_two}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">option C</label>
                            <textarea name="option_3" class="form-control" required>{{$quiz_res[0]->option_three}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Option D</label>
                            <textarea name="option_4" class="form-control" required>{{$quiz_res[0]->option_four}}</textarea>
                        </div>
                        <input type="hidden" id="previous_image" name="previous_image" value="{{$quiz_res[0]->image}}">
                        <div class="form-group">
                            <label for="">Choose Related Image</label>
                            <input type="file" name="image">
                            <br />
                            <img src="{{asset('quiz_images/'.$quiz_res[0]->image)}}" style="width:200px;border-radius:5px;" />
                        </div>
                        <div class="form-group">
                            <label for="">Choose Answer</label>
                            <select class="form-select" name="answer" >
                                @foreach($quiz_answer as $t => $v)
                                    <option  value="{{$t}}"
                                    @if($quiz_res[0]->answer == $t)
                                        selected
                                    @endif
                                    >{{$v}}</option>
                                @endforeach
                            </select>
                        </div>                        
                        <div class="form-group"> 
                            <label for="">Status</label>
                            <br />                            
                            <label class="radio-inline"><input type="radio" id="inactive" name="status" value="0" 
                            @if($quiz_res[0]->status != "1")
                                checked
                            @endif
                            >Inactive</label>
                            <label class="radio-inline"><input type="radio" id="active" name="status" value="1"
                            @if($quiz_res[0]->status == "1")
                                checked
                            @endif
                            >Active</label>
                        </div>
                        <input type="submit" value="Update" class="btn btn-sm btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection