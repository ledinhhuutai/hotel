@extends('client.layouts.master')
@section('content')
    <div class="inn-banner">
        <div class="container">
            <div class="row">
                <h4>{{ __('label.post.list') }}</h4>
                <p>{{ __('label.post.intro_page') }}<p>
            </div>
        </div>
    </div>
    <div class="inn-body-section pad-bot-50">
        <div class="container">
            <div class="row inn-page-com">
                <div class="page-head">
                    <h2>{{ __('label.post.list') }}</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p>{{ __('label.post.intro_page') }}</p>
                </div>
                <div class="col-md-8">
                    @foreach($data as $value)
                        <div class="row inn-services in-blog">
                            <div class="col-md-4">
                                <img src="{{ asset(config('common.uploads.posts')) . '/' . $value->image }}" alt=""/>
                            </div>
                            <div class="col-md-8">
                                <h3>{{ $value->title }}</h3>
                                <span class="blog-date">{{ $value->updated_at }}</span>
                                <span class="blog-author">Tác giả: {{ $value->postedBy->full_name }}</span>
                                <p> {{ $value->description }} </p>
                                <a href=" {{ route('post.detail', $value->id) }} "
                                   class="waves-effect waves-light inn-re-mo-btn">{{ __('label.post.read_more') }}</a>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-md-4">
                        @include('client.pagination.index', ['paginator' => $data])
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="head-typo typo-com rec-post">
                        <h3>{{ __('label.post.random_post') }}</h3>
                        <ul>
                            @foreach($randomPost as $value)
                                <li>
                                    <div class="rec-po-img"><img
                                                src="{{ asset(config('common.uploads.posts')) . '/' . $value->image }}"
                                                alt=""/></div>
                                    <div class="rec-po-title">
                                        <a href="{{ route('post.detail', $value->id) }}">
                                            <h4>{{ $value->title }}</h4>
                                        </a>
                                        <p>{{ $value->description }}</p>
                                        <span class="blog-date">Date: {{ $value->updated_at }}</span></div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="head-typo typo-com">
                        <h3>Atlantic Hotel</h3>
                        <p> {{ __('label.post.intro') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hom-footer-section">
        <div class="container">
            <div class="row">
                <div class="foot-com foot-1">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="foot-com foot-2">
                    <h5>Phone: (+84) 376 594 637</h5></div>
                <div class="foot-com foot-3">
                    <!--<a class="waves-effect waves-light" href="#">online room booking</a>--><a
                            class="waves-effect waves-light" href="booking.html">Đặt phòng ngay!</a></div>
                <div class="foot-com foot-4">
                    <a href="#"><img src="{{ asset('bower_components/client_layout/images/card.png') }}" alt=""/>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection