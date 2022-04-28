@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="{{asset('images/profile.png')}}" alt="" class="img-rounded img-responsive" style="border:1px solid #ccc;"/>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>{{$user_res[0]->name}} </h4>
                        <br />
                        <b>Email : </b>{{$user_res[0]->email}}
                        <br />
                        <br />
                        <b>Role : </b>Admin
                        <br />
                        <br />
                        <b>Join Date : </b>{{date("d-m-Y", strtotime($user_res[0]->created_at))}}
                        <br />
                        <br />
                        <a href="{{ url('admin/logout') }}" class="btn btn-sm btn-primary">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection