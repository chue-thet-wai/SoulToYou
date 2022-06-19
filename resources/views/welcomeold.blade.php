@extends('layouts.nav')

@section('usercontent')

@php

echo "
<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
   
    $(document).ready(function() {
        $('#myCarousel').on('slid.bs.carousel', function () {  
            change_band_description_slider();
        }); 
        change_band_description_slider();
        function change_band_description_slider(){
            var bandName = $('.active').find('#get_band_name').text();  
            var twitterSubscriber = $('.active').find('#get_band_twittersubscriber').text();  
            var instaSubscriber = $('.active').find('#get_band_instasubscriber').text();       
            $('#show_band_name').text(bandName);
            $('#show_band_twittersubscriber').text(twitterSubscriber+' Subscribers');
            $('#show_band_instasubscriber').text(instaSubscriber+' Subscribers');
        }
    });
    function isReact(type,id,react) {
        $.ajax({
            type:'POST',
            url:'/isReact',
            headers: {'X-CSRF-TOKEN': $('meta[name=\'csrf-token\']').attr('content')},
            data: {
                'type': type,
                'id'  : id,
                'react':react
            },
            success:function(data) {
                alert(data.id)
                //$('#react_count').text(data.id);
            }
        });
    }
</script>
";

@endphp

<div class="row top_content">
    <div class="col-md-1 left_slider_container"> 
        <img src="{{asset('images/bubble-bloom-animation.gif')}}" alt="">
    </div>
    <div class="col-md-10 slider_container"> 
        <div id="myCarousel" class="carousel slide usermain-slider" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @php $slide_active=1; @endphp
                @foreach($bands_slide as $bs)
                    @if($slide_active==1)
                    <div class="item active">
                        <img src="{{asset('bands_images/'.$bs->main_image)}}" alt="">
                        <div id="get_band_name" style="display:none;">{{$bs->name}}</div>
                        <div id="get_band_twittersubscriber" style="display:none;">{{$bs->twitter_subscriber}}</div>
                        <div id="get_band_instasubscriber" style="display:none;">{{$bs->instagram_subscriber}}</div>
                    </div>
                    @else
                    <div class="item">
                        <img src="{{asset('bands_images/'.$bs->main_image)}}" alt="">
                        <div id="get_band_name" style="display:none;">{{$bs->name}}</div>
                        <div id="get_band_twittersubscriber" style="display:none;">{{$bs->twitter_subscriber}}</div>
                        <div id="get_band_instasubscriber" style="display:none;">{{$bs->instagram_subscriber}}</div>
                    </div>
                    @endif
                    @php $slide_active=0; @endphp
                @endforeach
            </div>
            <div class="card usermain_sliderdesc">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div id="show_band_name"></div>
                        </div>                        
                        <div class="col-md-3">
                            <img  class="bookmark_slide" src="{{asset('images/fav_save.png')}}" alt="favourite" />
                        </div>
                    </div>
                    <div class="row">                    
                        <div class="col-md-9 slider-subscriber">
                            <div>
                                <img src="{{asset('images/twitter_subscriber.png')}}" alt="">
                                <div id="show_band_twittersubscriber"></div>
                            </div>
                            <div>
                                <img src="{{asset('images/instagram_subscriber.png')}}" alt="">
                                <div id="show_band_instasubscriber"></div>
                            </div>
                        </div>
                        <div class="col-md-3 slider-controls">
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-menu-left" style="display: inline-flex;color:#000;">
                                    <span class="glyphicon glyphicon-menu-left" style="margin-left: -20%;"></span>
                                </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-menu-right" style="display: inline-flex;">
                                    <span class="glyphicon glyphicon-menu-right" style="color:#000;margin-left: -26%;"></span>
                                </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1 right_slider_container"> 
        <img src="{{asset('images/bubble-bloom-animation.gif')}}" alt="">
    </div>
</div>
<div class="row middle_content">
    <div class="col-md-1"> </div>
    <div class="col-md-7 news_section"> 
        <div class="row news_section_header">
            <div class="col-sm-9">
                <h3 style="color:#2CB9C1">Latest News</h3>
            </div>
            <div class="col-sm-3">
                <a href="{{url('/news')}}">
                <h5>View More &nbsp;&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></h5>
                </a>
            </div>
        </div>
        
        <div class="card news_card">
            <div class="row no-gutters">
                <div class="col-sm-4">
                    <img class="card-img" src="{{asset('news_images/'.$breaking_new[0]->image)}}" alt="breaking new">
                </div>
                <div class="col-sm-8">
                    <div class="card-body">
                        <h4 class="card-title">Breaking News!</h4>
                        <p class="card-text"><b>{{$breaking_new[0]->title}}</b></p>
                        <br />
                        <div style="display:inline;">
                            <span class="glyphicon glyphicon glyphicon-time" style="color:#2CB9C1;"></span> 2 hr ago
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-2">
                            <!--<img src="{{asset('subscriber.png')}}" alt="" style="width:3%;height:3%;margin-top:-1%;">Like-->
                            <img src="{{asset('images/like_gray.png')}}" alt="like" onclick="isReact('news','{{$breaking_new[0]->new_id}}','1');"/> 
                            <div id="react_count">23</div>
                        </div>
                        <div class="col-sm-2">
                            <img src="{{asset('images/unlike_gray.png')}}" alt="like" style="margin-top:10%;" onclick="isReact('news','{{$breaking_new[0]->new_id}}','2');"/> 
                            <div id="react_count">23</div>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{asset('images/comment.png')}}" alt="like" width="20px;"/>
                        </div>
                        <div class="col-sm-4">                               
                            <img src="{{asset('images/setting.png')}}" alt="like" style="width:5px;float:right;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card news_card">
            <div class="row no-gutters">
                <div class="col-sm-4">
                    <img class="card-img" src="{{asset('news_images/'.$trending_new[0]->image)}}" alt="Suresh Dasari Card">
                </div>
                <div class="col-sm-8">
                    <div class="card-body">
                        <h4 class="card-title">Trending News!</h4>
                        <p class="card-text"><b>{{$trending_new[0]->title}}</b></p>
                        <br />
                        <div style="display:inline;">
                            <span class="glyphicon glyphicon glyphicon-time" style="color:#2CB9C1;"></span> 2 hr ago2 hr ago
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-2">
                            <!--<img src="{{asset('subscriber.png')}}" alt="" style="width:3%;height:3%;margin-top:-1%;">Like-->
                            <img src="{{asset('images/like_gray.png')}}" alt="like"/> 23
                        </div>
                        <div class="col-sm-2">
                            <img src="{{asset('images/unlike_gray.png')}}" alt="like" style="margin-top:10%;" /> 5
                        </div>
                        <div class="col-sm-4">
                            <img src="{{asset('images/comment.png')}}" alt="like" width="20px;"/>
                        </div>
                        <div class="col-sm-4">                               
                            <img src="{{asset('images/setting.png')}}" alt="like" style="width:5px;float:right;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card news_card">
            <div class="row no-gutters">
                <div class="col-sm-4">
                    <img class="card-img" src="{{asset('news_images/'.$popular_new[0]->image)}}" alt="Suresh Dasari Card">
                </div>
                <div class="col-sm-8">
                    <div class="card-body">
                        <h4 class="card-title">Popular News!</h4>
                        <p class="card-text"><b>{{$popular_new[0]->title}}</b></p>
                        <br />
                        <div style="display:inline;">
                            <span class="glyphicon glyphicon glyphicon-time" style="color:#2CB9C1;"></span> 2 hr ago
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-2">
                            <!--<img src="{{asset('subscriber.png')}}" alt="" style="width:3%;height:3%;margin-top:-1%;">Like-->
                            <img src="{{asset('images/like_gray.png')}}" alt="like"/> 23
                        </div>
                        <div class="col-sm-2">
                            <img src="{{asset('images/unlike_gray.png')}}" alt="like" style="margin-top:10%;" /> 5
                        </div>
                        <div class="col-sm-4">
                            <img src="{{asset('images/comment.png')}}" alt="like" width="20px;"/>
                        </div>
                        <div class="col-sm-4">                               
                            <img src="{{asset('images/setting.png')}}" alt="like" style="width:5px;float:right;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 idol_section"> 
        <div class="row idol_section_header">
            <div class="col-sm-2"> <img src="{{asset('images/love.png')}}"/></div>
            <div class="col-sm-7" ><h4 style="margin-top:0%;color:#2CB9C1;font-weight:bold;">Solo Artists</h4></div>
            <div class="col-sm-3"><img src="{{asset('images/solo_artist_profile.png')}}" style="width: 20px;float: right;"/></div>
        </div>
        @foreach($solo_res as $r)
            <div class="card soloidol_card">
                <div class="row">
                    <div class="col-sm-3">
                        <img class="card-img" alt="100x100" src="{{asset('artists_images/'.$r->main_image)}}"
                        data-holder-rendered="true">
                    </div>
                    <div class="col-sm-7">
                        <h4><b>{{$r->name}}</b></h4>
                        <div style="display:inline;"><img src="{{asset('subscriber.png')}}" alt="" style="width:7%;height:7%;margin-top:-1%;">&nbsp;25K Subscribers</div>
                    </div>
                    <div class="col-sm-2">
                        <img src="{{asset('images/setting.png')}}" alt="like" style="width:5px;float:right;" />
                    </div>
                </div>
            </div>
        @endforeach      
    </div>
    <div class="col-md-1"> </div>
</div>

<!--Video Section-->
<div class="row middle_content">
    <div class="col-md-1"> </div>
    <div class="col-md-7 video_section"> 
        <div class="row video_section_header">
            <div class="col-sm-9">
                <h3 style="color:#2CB9C1">Trending Videos</h3>
            </div>
            <div class="col-sm-3">
                <a href="{{url('/videos')}}">
                    <h5>View More &nbsp;&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></h5>
                </a>
            </div>
        </div>
        @for ($i=0;$i<2;$i++)            
            <div class="card video_card">
                <div class="row">
                    <div class="show_video">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="{{$mtv_list[$i]->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="video_description">
                        <div class="row">
                            <div class="col-sm-8"><h4 style="font-weight:bold;">{{$mtv_list[$i]->title}}</h4></div>
                            <div class="col-sm-4" ><p style="float:right">5:24</p></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <img src="{{asset('images/view.png')}}" style="width:25px;" /> <b>60K views</b> . 1 Hr Ago
                            </div>
                            <div class="col-sm-4">
                                <span class="glyphicon glyphicon-option-vertical" style="float:right"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
        @endfor
        

        <!-- Show Videos with two card -->
        @php $i=2; @endphp
        @while ($i<6)           
            <div class="row sub_video_section">
                <div class="col-sm-6">
                    <div class="card video_card">
                        <div class="row">
                            <div class="show_video">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="{{$mtv_list[$i]->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="video_description">
                                <div class="row">
                                    <div class="col-sm-8"><h5 style="font-weight:bold;">{{$mtv_list[$i]->title}}</h5></div>
                                    <div class="col-sm-4" ><p style="float:right">5:24</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <img src="{{asset('images/view.png')}}" style="width:25px;" /> <b>60K views</b> . 1 Hr Ago
                                    </div>
                                    <div class="col-sm-4">
                                        <span class="glyphicon glyphicon-option-vertical" style="float:right"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-sm-6">
                    <div class="card video_card">
                        <div class="row">
                            <div class="show_video">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="{{$mtv_list[$i+1]->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="video_description">
                                <div class="row">
                                    <div class="col-sm-8"><h5 style="font-weight:bold;">{{$mtv_list[$i+1]->title}}</h5></div>
                                    <div class="col-sm-4" ><p style="float:right">5:24</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <img src="{{asset('images/view.png')}}" style="width:25px;" /> <b>60K views</b> . 1 Hr Ago
                                    </div>
                                    <div class="col-sm-4">
                                        <span class="glyphicon glyphicon-option-vertical" style="float:right"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php $i=$i+2; @endphp
        @endwhile    
        
    </div>
    <div class="col-md-3 ads_section"> 
        
    </div>
    <div class="col-md-1"> </div>
</div>
<div class="row">
    <a href="{{url('/videos')}}"><div class="video_read_more">LOAD MORE</div></a>
</div>

@endsection