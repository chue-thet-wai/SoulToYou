@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Quiz
                        <a class="btn btn-sm btn-success pull-right" href="{{route('quiz.index')}}" id="form-header-btn"> Back</a>
                    </h3>
                </div>

                <div class="card-body">  
                <form method="POST" action="{{route('quiz.store')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="">Question</label>
                            <textarea name="question" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Choose Related Image</label>
                            <input type="file" name="image">
                        </div>
                        <div class="form-group">
                            <label for="">Option A</label>
                            <textarea name="option_1" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Option B</label>
                            <textarea name="option_2" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Option C</label>
                            <textarea name="option_3" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Option D</label>
                            <textarea name="option_4" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Choose Answer</label>
                            <select class="form-select" name="answer" >
                                @foreach($quiz_answer as $t => $v)
                                    <option  value="{{$t}}">{{$v}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group"> 
                            <label for="">Status</label>
                            <br />
                            <input type="radio" id="inactive" name="status" value="0" checked><label>Inactive</label>
                            <input type="radio" id="active" name="status" value="1"><label>Active</label>
                        </div>
                        <input type="submit" value="Add" class="btn btn-sm btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection