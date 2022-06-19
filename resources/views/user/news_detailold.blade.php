@extends('layouts.nav')

@section('usercontent')
<div class="container">
    <div id="sub_newnav_detail" style="margin-top:2%;margin-bottom:2%;">
        <a href="{{url('/')}}" class="news_home_tab">Home</a>
        <span class="glyphicon glyphicon glyphicon-play"></span>
        <a href="{{url('/news')}}">News</a>
        <span class="glyphicon glyphicon glyphicon-play"></span>
        <a href="">Detail</a>
    </div>
    <div class="row top_content" >
        <div class="col-md-10" style="width:864px;height:448px;">
            <img src="{{asset('news_images/'.$new_detail_res[0]->image)}}" alt="new detail" style="width:864px;height:448px;"/>
            <div class="newsdetail_type_title">{{$news_type[$new_detail_res[0]->type]}}</div>
        </div>
        <div class="col-md-2" style="padding-left:2%;"> 
            <div class="col ads" style="background:#ccc;width:240px;height:400px;">Ads</div>
        </div>       
    </div>
    <div class="row" style="margin-top:2%;margin-bottom:2%;">
        <div class="col-md-10" style="width:864px;">
            <div>
                <p style="color:#F06C5C">{{$news_type[$new_detail_res[0]->type]}}</p>
                <br />
                <h4><b>{{$new_detail_res[0]->title}}</b></h4>
                <br />
                <p>{{$new_detail_res[0]->description}}</p>
            </div>
            <br />
            <div>
                <span class="glyphicon glyphicon glyphicon-time"></span>2 DAYS AGO
            </div>
            <br />
            <div class="row" style="background:#eee;padding:5px;">
                <div class="col-sm-3">
                    <span class="glyphicon  glyphicon glyphicon-eye-open"></span> 60K views . 1 Hr Ago
                </div>
                <div class="col-sm-1">
                    <span class="glyphicon glyphicon-thumbs-up"></span> 23
                </div>
                <div class="col-sm-1">
                    <span class="glyphicon glyphicon-thumbs-down"></span> 5
                </div>
                <div class="col-sm-1">
                    <span class="glyphicon glyphicon-comment"></span> 12
                </div>
                <div class="col-sm-6">                               
                    <span class="glyphicon glyphicon-option-vertical" style="float:right;"></span>
                </div>
            </div>
            <br />
            <div class="row" style="background:#eee;padding:5px;">
                <div class="col-sm-3">
                    5 <p style="color:#F06C5C;display: inline;"> Comments</p>
                </div>
                <div class="col-sm-6">
                    <img src="{{asset('images/cmt_add.png')}}" style="border-radius: 50%;background: #21d4fd;padding: 1%;"/>
                    <div style="width:300px;height:30px;background:#fff;display: -webkit-inline-box;"></div>
                    <img src="{{asset('images/cmt_send.png')}}" />                   
                </div>
                <div class="col-sm-3">                               
                    <span class="glyphicon glyphicon-option-vertical" style="float:right;"></span>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="card" style="border-bottom:2px solid #eee;padding-bottom: 2%;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-1">
                                <img src="{{asset('images/cmt_user.png')}}" style="border-radius: 50%;border:2px solid #999;padding-top:2%;"/>
                            </div>
                            <div class="col-sm-11">
                                <h4 style="display: inline;font-weight:bold;">@username</h4> . 5 min ago
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                This is the good new for idol.....
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <img src="{{asset('images/love_emoji.png')}}" /> 23
                                    </div>
                                    <div class="col-sm-2">
                                        <img src="{{asset('images/suprise_emoji.png')}}" /> 5
                                    </div>
                                    <div class="col-sm-2">
                                        <img src="{{asset('images/love_emoji.png')}}" /> 23
                                    </div>
                                    <div class="col-sm-2">                               
                                        <img src="{{asset('images/suprise_emoji.png')}}" /> 5
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
        <div class="col-md-2" style="padding-left:3%;"> 
        @if(!empty($related_news))
            <h4 style="color:#2CB9C1;font-weight:bold;">Related News</h4>
            <br />
            @foreach($related_news as $rnew)
                <a href="{{url('/news/detail/'.$rnew->new_id)}}">
                    <div class="row" style="width:240px;">
                        <div class="card" style="width:100%">
                            <div class="card-header">
                                <img class="card-img-top" src="{{asset('news_images/'.$rnew->image)}}" alt="Card image" style="width:100%" />
                                <!--<div class="newsdetail_relatednew">{{date("d-m-Y", strtotime($rnew->created_at))}}</div>-->
                            </div>
                            <div class="card-body">
                                <p class="card-text"><b>{{$rnew->title}}</b></p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        @endif
        </div>              
    </div>
</div>
@endsection