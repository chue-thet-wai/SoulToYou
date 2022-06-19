@extends('layouts.nav')

@section('usercontent')
@php
    echo "
    <link rel='stylesheet' href='css/user.css'>
    <script>
        let modalId = $('#image-gallery');

        $(document).ready(function () {

            loadGallery(true, 'a.thumbnail');

            //This function disables buttons when needed
            function disableButtons(counter_max, counter_current) {
            $('#show-previous-image, #show-next-image')
                .show();
            if (counter_max === counter_current) {
                $('#show-next-image')
                .hide();
            } else if (counter_current === 1) {
                $('#show-previous-image')
                .hide();
            }
            }

            

            function loadGallery(setIDs, setClickAttr) {
            let current_image,
                selector,
                counter = 0;

            $('#show-next-image, #show-previous-image')
                .click(function () {
                if ($(this)
                    .attr('id') === 'show-previous-image') {
                    current_image--;
                } else {
                    current_image++;
                }

                selector = $('[data-image-id=\"' + current_image + '\"]');
                updateGallery(selector);
                });

            function updateGallery(selector) {
                let sel = selector;
                current_image = sel.data('image-id');
                $('#image-gallery-title')
                .text(sel.data('title'));
                $('#image-gallery-image')
                .attr('src', sel.data('image'));
                disableButtons(counter, sel.data('image-id'));
            }

            if (setIDs == true) {
                $('[data-image-id]')
                .each(function () {
                    counter++;
                    $(this)
                    .attr('data-image-id', counter);
                });
            }
            $(setClickAttr)
                .on('click', function () {
                updateGallery($(this));
                });
            }
        });

        // build key actions
        $(document)
        .keydown(function (e) {
            switch (e.which) {
            case 37: // left
                if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(\":visible\")) {
                $('#show-previous-image')
                    .click();
                }
                break;

            case 39: // right
                if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(\":visible\")) {
                $('#show-next-image')
                    .click();
                }
                break;

            default:
                return; // exit this handler for other keys
            }
            e.preventDefault(); // prevent the default action (scroll / move caret)
        });

    </script>
    ";

@endphp

<div class="container">
  <ul class="nav nav-tabs" id="sub_new_nav">
    <li class="active"><a data-toggle="tab" href="#home" class="news_home_tab">News</a></li>
    <li><a data-toggle="tab" href="#breaking">Breaking News</a></li>
    <li class="line_break">|</li>
    <li><a data-toggle="tab" href="#trending">Trending News</a></li>
    <li class="line_break">|</li>
    <li><a data-toggle="tab" href="#popular" >Popular News</a></li>
  </ul>
    <div class="tab-content sub_new_nav_content">
        <div id="home" class="tab-pane fade in active">
            <div class="row top_content">
                <div class="row news_imagegallary">
                    <div class="col-lg-6 col-md-6 col-xs-6 img_col_one">
                        <div class="col-lg-12 col-md-12 col-xs-12 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{asset('news_images/'.$allnews_res[0]->image)}}"
                            data-target="#image-gallery">
                                <img class="img-thumbnail"
                                    src="{{asset('news_images/'.$allnews_res[0]->image)}}"
                                    alt="Another alt text">
                                <div class="news_imagegallary_title">
                                    <p>{{$allnews_res[0]->title}}</p>
                                </div>
                                    
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-3 img_col_two">
                        <div class="col-md-12 col-sm-12 co-xs-12 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{asset('news_images/'.$allnews_res[0]->image)}}"
                            data-target="#image-gallery">
                                <img class="img-thumbnail"
                                    src="{{asset('news_images/'.$allnews_res[0]->image)}}"
                                    alt="Another alt text">
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-12 co-xs-12 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{asset('news_images/'.$allnews_res[0]->image)}}"
                            data-target="#image-gallery">
                                <img class="img-thumbnail"
                                    src="{{asset('news_images/'.$allnews_res[0]->image)}}"
                                    alt="Another alt text">
                            </a>
                        </div>
                    </div>
                </div>       
            </div>
            <div class="row middle_content">
                <div class="col-md-9 news_section"> 
                    <div class="row news_section_header">
                        <div class="col-sm-12">
                            <h3>News</h3>
                        </div>
                    </div>
                    
                    @foreach($allnews_res as $n)
                        <div class="card news_card">
                            <div class="row no-gutters">
                                <div class="col-sm-5">
                                    <img class="card-img" src="{{asset('news_images/'.$n->image)}}" alt="new">
                                    <div class="news_type_title">{{$news_type[$n->type]}}</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <a href="{{url('/news/detail/'.$n->new_id)}}"><h4 class="card-text" style="color:#000;"><b>{{$n->title}}</b></h4></a>
                                        <br />
                                        <div style="display:inline;">
                                            <span class="glyphicon glyphicon glyphicon-time" style="color:#2CB9C1;"></span>2 hr ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-sm-5"></div>
                                <div class="col-sm-7">
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
                    
                    @endforeach
                </div>
            </div>
        </div>

        <div id="breaking" class="tab-pane fade">
            <div class="row top_content">
                <div class="row news_imagegallary">
                    <div class="col-lg-6 col-md-6 col-xs-6 img_col_one">
                        <div class="col-lg-12 col-md-12 col-xs-12 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{asset('news_images/'.$breaking_new[0]->image)}}"
                            data-target="#image-gallery">
                                <img class="img-thumbnail"
                                    src="{{asset('news_images/'.$breaking_new[0]->image)}}"
                                    alt="Another alt text">
                                <div class="news_imagegallary_title">
                                    <p>{{$breaking_new[0]->title}}</p>
                                </div>
                                    
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-3 img_col_two">
                        <div class="col-md-12 col-sm-12 co-xs-12 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{asset('news_images/'.$breaking_new[0]->image)}}"
                            data-target="#image-gallery">
                                <img class="img-thumbnail"
                                    src="{{asset('news_images/'.$breaking_new[0]->image)}}"
                                    alt="Another alt text">
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-12 co-xs-12 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{asset('news_images/'.$breaking_new[0]->image)}}"
                            data-target="#image-gallery">
                                <img class="img-thumbnail"
                                    src="{{asset('news_images/'.$breaking_new[0]->image)}}"
                                    alt="Another alt text">
                            </a>
                        </div>
                    </div>
                </div>        
            </div>
            <div class="row middle_content">
                <div class="col-md-9 news_section"> 
                    <div class="row news_section_header">
                        <div class="col-sm-12">
                            <h3>News</h3>
                        </div>
                    </div>
                    
                    @foreach($breaking_new as $n)
                        <div class="card news_card">
                            <div class="row no-gutters">
                                <div class="col-sm-5">
                                    <img class="card-img" src="{{asset('news_images/'.$n->image)}}" alt="new">
                                    <div class="news_type_title">{{$news_type[$n->type]}}</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <a href="{{url('/news/detail/'.$n->new_id)}}"><h4 class="card-text" style="color:#000;font-weight:bold;">{{$n->title}}</h4></a>
                                        <br />
                                        <div style="display:inline;">
                                            <span class="glyphicon glyphicon glyphicon-time" style="color:#2CB9C1;"></span>2 hr ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-sm-5"></div>
                                <div class="col-sm-7">
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
                    
                    @endforeach
                </div>
            </div>
        </div>
        <div id="trending" class="tab-pane fade">
            <div class="row top_content">
                <div class="row news_imagegallary">
                    <div class="col-lg-6 col-md-6 col-xs-6 img_col_one">
                        <div class="col-lg-12 col-md-12 col-xs-12 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{asset('news_images/'.$trending_new[0]->image)}}"
                            data-target="#image-gallery">
                                <img class="img-thumbnail"
                                    src="{{asset('news_images/'.$trending_new[0]->image)}}"
                                    alt="Another alt text">
                                <div class="news_imagegallary_title">
                                    <p>{{$trending_new[0]->title}}</p>
                                </div>
                                    
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-3 img_col_two">
                        <div class="col-md-12 col-sm-12 co-xs-12 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{asset('news_images/'.$trending_new[0]->image)}}"
                            data-target="#image-gallery">
                                <img class="img-thumbnail"
                                    src="{{asset('news_images/'.$trending_new[0]->image)}}"
                                    alt="Another alt text">
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-12 co-xs-12 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{asset('news_images/'.$trending_new[0]->image)}}"
                            data-target="#image-gallery">
                                <img class="img-thumbnail"
                                    src="{{asset('news_images/'.$trending_new[0]->image)}}"
                                    alt="Another alt text">
                            </a>
                        </div>
                    </div>
                </div>       
            </div>
            <div class="row middle_content">
                <div class="col-md-9 news_section"> 
                    <div class="row news_section_header">
                        <div class="col-sm-12">
                            <h3>News</h3>
                        </div>
                    </div>
                    
                    @foreach($trending_new as $n)
                        <div class="card news_card">
                            <div class="row no-gutters">
                                <div class="col-sm-5">
                                    <img class="card-img" src="{{asset('news_images/'.$n->image)}}" alt="new">
                                    <div class="news_type_title">{{$news_type[$n->type]}}</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <a href="{{url('/news/detail/'.$n->new_id)}}"><h4 class="card-text" style="color:#000;font-weight:bold;">{{$n->title}}</h4></a>
                                        <br />
                                        <div style="display:inline;">
                                            <span class="glyphicon glyphicon glyphicon-time" style="color:#2CB9C1;"></span>2 hr ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-sm-5"></div>
                                <div class="col-sm-7">
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
                    
                    @endforeach
                </div>
            </div>
        </div>
        <div id="popular" class="tab-pane fade">
            <div class="row top_content">
                <div class="row news_imagegallary">
                    <div class="col-lg-6 col-md-6 col-xs-6 img_col_one">
                        <div class="col-lg-12 col-md-12 col-xs-12 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{asset('news_images/'.$popular_new[0]->image)}}"
                            data-target="#image-gallery">
                                <img class="img-thumbnail"
                                    src="{{asset('news_images/'.$popular_new[0]->image)}}"
                                    alt="Another alt text">
                                <div class="news_imagegallary_title">
                                    <p>{{$popular_new[0]->title}}</p>
                                </div>
                                    
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-3 img_col_two">
                        <div class="col-md-12 col-sm-12 co-xs-12 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{asset('news_images/'.$popular_new[0]->image)}}"
                            data-target="#image-gallery">
                                <img class="img-thumbnail"
                                    src="{{asset('news_images/'.$popular_new[0]->image)}}"
                                    alt="Another alt text">
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-12 co-xs-12 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{asset('news_images/'.$popular_new[0]->image)}}"
                            data-target="#image-gallery">
                                <img class="img-thumbnail"
                                    src="{{asset('news_images/'.$popular_new[0]->image)}}"
                                    alt="Another alt text">
                            </a>
                        </div>
                    </div>
                </div>        
            </div>
            <div class="row middle_content">
                <div class="col-md-9 news_section"> 
                    <div class="row news_section_header">
                        <div class="col-sm-12">
                            <h3>News</h3>
                        </div>
                    </div>
                    
                    @foreach($popular_new as $n)
                        <div class="card news_card">
                            <div class="row no-gutters">
                                <div class="col-sm-5">
                                    <img class="card-img" src="{{asset('news_images/'.$n->image)}}" alt="new">
                                    <div class="news_type_title">{{$news_type[$n->type]}}</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <a href="{{url('/news/detail/'.$n->new_id)}}"><h4 class="card-text" style="color:#000;font-weight:bold;">{{$n->title}}</h4></a>
                                        <br />
                                        <div style="display:inline;">
                                            <span class="glyphicon glyphicon glyphicon-time" style="color:#2CB9C1;"></span>2 hr ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-sm-5"></div>
                                <div class="col-sm-7">
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
                    
                    @endforeach
                </div>
            </div>
        </div>

        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
        let modalId = $('#image-gallery');
        

        $(document).ready(function () {

            loadGallery(true, 'a.thumbnail');

            //This function disables buttons when needed
            function disableButtons(counter_max, counter_current) {
            $('#show-previous-image, #show-next-image')
                .show();
            if (counter_max === counter_current) {
                $('#show-next-image')
                .hide();
            } else if (counter_current === 1) {
                $('#show-previous-image')
                .hide();
            }
            }

            

            function loadGallery(setIDs, setClickAttr) {
            let current_image,
                selector,
                counter = 0;

            $('#show-next-image, #show-previous-image')
                .click(function () {
                if ($(this)
                    .attr('id') === 'show-previous-image') {
                    current_image--;
                } else {
                    current_image++;
                }

                selector = $('[data-image-id=\"' + current_image + '\"]');
                updateGallery(selector);
                });

            function updateGallery(selector) {
                let sel = selector;
                current_image = sel.data('image-id');
                $('#image-gallery-title')
                .text(sel.data('title'));
                $('#image-gallery-image')
                .attr('src', sel.data('image'));
                disableButtons(counter, sel.data('image-id'));
            }

            if (setIDs == true) {
                $('[data-image-id]')
                .each(function () {
                    counter++;
                    $(this)
                    .attr('data-image-id', counter);
                });
            }
            $(setClickAttr)
                .on('click', function () {
                updateGallery($(this));
                });
            }
        });

        // build key actions
        $(document)
        .keydown(function (e) {
            switch (e.which) {
            case 37: // left
                if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(\":visible\")) {
                $('#show-previous-image')
                    .click();
                }
                break;

            case 39: // right
                if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(\":visible\")) {
                $('#show-next-image')
                    .click();
                }
                break;

            default:
                return; // exit this handler for other keys
            }
            e.preventDefault(); // prevent the default action (scroll / move caret)
        });

    </script>

    </div>
</div>
@endsection