@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading contains-buttons">
                    <h3 class="panel-title">User Details
                        <a class="btn btn-sm pull-right" href="{{ url('admin/userlist') }}" style="background: #46b1e6;color: #ffffff;margin-top: -1%;"> Back</a>
                    </h3>
                </div>

                <div class="panel-body"> 
                    <div><h3>Name :{{$user_res[0]->name}} </h3></div>
                    <div><h3>Email:{{$user_res[0]->email}} </h3></div>
                   
                    <br />
                    <div>
                        <form method="post" action="{{ url('admin/update/'.$user_res[0]->id) }}" style="display: inline;" >
                            @csrf
                            <div class="form-group"> 
                                <label for="">Role</label>
                                <br />                            
                                <label class="radio-inline"><input type="radio" id="admin" name="role_status" value="1" 
                                @if($user_res[0]->is_admin == "1")
                                    checked
                                @endif
                                >Admin</label>
                                <label class="radio-inline"><input type="radio" id="user" name="role_status" value="0"
                                @if($user_res[0]->is_admin != "1")
                                    checked
                                @endif
                                >User</label>
                            </div>
                            <input type="submit" class="btn btn-sm btn-danger" value="Update">
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection