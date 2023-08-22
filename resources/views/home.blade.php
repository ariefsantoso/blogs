@extends('layouts/main')
@section('content')
<div class="container-fluid">
    <div class="row">
        {{-- Start Slider --}}
        <div class="col-lg-7 px-0">
            <div class="owl-carousel main-carousel position-relative">
                {{-- @if ($PostNews->count(3)) --}}
                @foreach($PostNews as $PostNews)
                <div class="position-relative overflow-hidden" style="height: 500px;">
                    @if($PostNews->image)
                    <img class="img-fluid h-100" src="{{ asset('storage/' .$PostNews->image) }}" style="object-fit: cover;">
                    @elseif ($PostNews->category_id != 0)
                    <img src="https://source.unsplash.com/800x400?{{ $PostNews->category->name }}" class="img-fluid h-100" alt="{{ $PostNews->category->name }}" style="object-fit: cover;">	
                    @elseif ($PostNews->news_id != 0)
                    <img src="https://source.unsplash.com/800x400?{{ $PostNews->news->name }}" class="img-fluid h-100" alt="{{ $PostNews->news->name }}" style="object-fit: cover;">	
                    @endif
                    <div class="overlay">
                        <div class="mb-2">
                            @if ($PostNews->category_id != 0)
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="/posts?category={{ $PostNews->category->slug }}">{{ $PostNews->category->name }}</a>
                            @elseif($PostNews->news_id != 0)
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="/posts?news={{ $PostNews->news->slug }}">{{ $PostNews->news->name }}</a>
                            @endif
                            <a class="text-white" href="">{{ $PostNews->created_at->diffForHumans() }}</a>
                        </div>
                        <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="/posts/{{ $PostNews->slug }}">{{ $PostNews->title }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{-- End Slider --}}

        <div class="col-lg-5 px-0">
            <div class="row mx-0">
                @foreach($PostCategory1 as $PostCategory1)
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        @if($PostCategory1->image)
                        <img class="img-fluid w-100 h-100" src="{{ asset('storage/' .$PostCategory1->image) }}" style="object-fit: cover;">
                        @elseif ($PostCategory1->category_id != 0)
                        <img src="https://source.unsplash.com/800x400?{{ $PostCategory1->category->name }}" class="img-fluid w-100 h-100" alt="{{ $PostCategory1->category->name }}" style="object-fit: cover;">	
                        @elseif ($PostCategory1->news_id != 0)
                        <img src="https://source.unsplash.com/800x400?{{ $PostCategory1->news->name }}" class="img-fluid w-100 h-100" alt="{{ $PostCategory1->news->name }}" style="object-fit: cover;">	
                        @endif
                       
                        <div class="overlay">
                            <div class="mb-2">
                                @if ($PostCategory1->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $PostCategory1->category->slug }}">{{ $PostCategory1->category->name }}</a>
                                @elseif($PostCategory1->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $PostCategory1->news->slug }}">{{ $PostCategory1->news->name }}</a>
                                @endif
                                <a class="text-white" href="">{{ $PostCategory1->created_at->diffForHumans() }}</a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="/posts/{{ $PostCategory1->slug }}">{{ $PostCategory1->title }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($PostCategory2 as $PostCategory2)
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        {{-- <img class="img-fluid w-100 h-100" src="home/img/news-700x435-2.jpg" style="object-fit: cover;"> --}}
                        @if($PostCategory2->image)
                        <img class="img-fluid w-100 h-100" src="{{ asset('storage/' .$PostCategory2->image) }}" style="object-fit: cover;">
                        @elseif ($PostCategory2->category_id != 0)
                        <img src="https://source.unsplash.com/800x400?{{ $PostCategory2->category->name }}" class="img-fluid w-100 h-100" alt="{{ $PostCategory2->category->name }}" style="object-fit: cover;">	
                        @elseif ($PostCategory2->news_id != 0)
                        <img src="https://source.unsplash.com/800x400?{{ $PostCategory2->news->name }}" class="img-fluid w-100 h-100" alt="{{ $PostCategory2->news->name }}" style="object-fit: cover;">	
                        @endif
                        <div class="overlay">
                            <div class="mb-2">
                                @if ($PostCategory2->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $PostCategory2->category->slug }}">{{ $PostCategory2->category->name }}</a>
                                @elseif($PostCategory2->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $PostCategory2->news->slug }}">{{ $PostCategory2->news->name }}</a>
                                @endif
                                <br>
                                <a class="text-white" href="">{{ $PostCategory2->created_at->diffForHumans() }}</a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="/posts/{{ $PostCategory2->slug }}">{{ $PostCategory2->title }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($PostCategory3 as $PostCategory3)
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        @if($PostCategory3->image)
                        <img class="img-fluid w-100 h-100" src="{{ asset('storage/' .$PostCategory3->image) }}" style="object-fit: cover;">
                        @elseif ($PostCategory3->category_id != 0)
                        <img src="https://source.unsplash.com/800x400?{{ $PostCategory3->category->name }}" class="img-fluid w-100 h-100" alt="{{ $PostCategory3->category->name }}" style="object-fit: cover;">	
                        @elseif ($PostCategory3->news_id != 0)
                        <img src="https://source.unsplash.com/800x400?{{ $PostCategory3->news->name }}" class="img-fluid w-100 h-100" alt="{{ $PostCategory3->news->name }}" style="object-fit: cover;">	
                        @endif
                        <div class="overlay">
                            <div class="mb-2">
                                @if ($PostCategory3->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $PostCategory3->category->slug }}">{{ $PostCategory3->category->name }}</a>
                                @elseif($PostCategory3->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $PostCategory3->news->slug }}">{{ $PostCategory3->news->name }}</a>
                                @endif
                                <br>
                                <a class="text-white" href="">{{ $PostCategory3->created_at->diffForHumans() }}</a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="/posts/{{ $PostCategory3->slug }}">{{ $PostCategory3->title }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($PostCategory4 as $PostCategory4)
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        @if($PostCategory4->image)
                        <img class="img-fluid w-100 h-100" src="{{ asset('storage/' .$PostCategory4->image) }}" style="object-fit: cover;">
                        @elseif ($PostCategory4->category_id != 0)
                        <img src="https://source.unsplash.com/800x400?{{ $PostCategory4->category->name }}" class="img-fluid w-100 h-100" alt="{{ $PostCategory4->category->name }}" style="object-fit: cover;">	
                        @elseif ($PostCategory4->news_id != 0)
                        <img src="https://source.unsplash.com/800x400?{{ $PostCategory4->news->name }}" class="img-fluid w-100 h-100" alt="{{ $PostCategory4->news->name }}" style="object-fit: cover;">	
                        @endif
                        <div class="overlay">
                            <div class="mb-2">
                                @if ($PostCategory4->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $PostCategory4->category->slug }}">{{ $PostCategory4->category->name }}</a>
                                @elseif($PostCategory4->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $PostCategory4->news->slug }}">{{ $PostCategory4->news->name }}</a>
                                @endif
                                <br>
                                <a class="text-white" href="">{{ $PostCategory4->created_at->diffForHumans() }}</a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="/posts/{{ $PostCategory4->slug }}">{{ $PostCategory4->title }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </div>
</div>
<!-- Main News Slider End -->


<!-- Breaking News Start -->
<div class="container-fluid bg-dark py-3 mb-3">
    <div class="container">
        <div class="row align-items-center bg-dark">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Breaking News</div>
                    <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-2"
                        style="width: calc(100% - 170px); padding-right: 90px;">
                        @foreach($Tranding as $Tranding)
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="/posts/{{ $Tranding->slug }}">{{ $Tranding->title }}</a></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breaking News End -->


<!-- Featured News Slider Start -->
<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="section-title">
            <h4 class="m-0 text-uppercase font-weight-bold">Post News</h4>
        </div>
        <div class="owl-carousel news-carousel carousel-item-4 position-relative">
            @foreach($PostNews1 as $PostNews1)
            <div class="position-relative overflow-hidden" style="height: 300px;">
                @if($PostNews1->image)
                <img class="img-fluid w-100 h-100" src="{{ asset('storage/' .$PostNews1->image) }}" style="object-fit: cover;">
                @elseif ($PostNews1->category_id != 0)
                <img src="https://source.unsplash.com/800x400?{{ $PostNews1->category->name }}" class="img-fluid w-100 h-100" alt="{{ $PostNews1->category->name }}" style="object-fit: cover;">	
                @elseif ($PostNews1->news_id != 0)
                <img src="https://source.unsplash.com/800x400?{{ $PostNews1->news->name }}" class="img-fluid w-100 h-100" alt="{{ $PostNews1->news->name }}" style="object-fit: cover;">	
                @endif
                <div class="overlay">
                    <div class="mb-2">
                        @if ($PostNews1->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $PostNews1->category->slug }}">{{ $PostNews1->category->name }}</a>
                                @elseif($PostNews1->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $PostNews1->news->slug }}">{{ $PostNews1->news->name }}</a>
                                @endif
                                <br>
                                <a class="text-white" href="">{{ $PostNews1->created_at->diffForHumans() }}</a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="/posts/{{ $PostNews1->slug }}">{{ $PostNews1->title }}</a>
                </div>
            </div>
            @endforeach
            @foreach($PostNews2 as $PostNews2)
            <div class="position-relative overflow-hidden" style="height: 300px;">
                @if($PostNews2->image)
                <img class="img-fluid w-100 h-100" src="{{ asset('storage/' .$PostNews2->image) }}" style="object-fit: cover;">
                @elseif ($PostNews2->category_id != 0)
                <img src="https://source.unsplash.com/800x400?{{ $PostNews2->category->name }}" class="img-fluid w-100 h-100" alt="{{ $PostNews2->category->name }}" style="object-fit: cover;">	
                @elseif ($PostNews2->news_id != 0)
                <img src="https://source.unsplash.com/800x400?{{ $PostNews2->news->name }}" class="img-fluid w-100 h-100" alt="{{ $PostNews2->news->name }}" style="object-fit: cover;">	
                @endif
                <div class="overlay">
                    <div class="mb-2">
                        @if ($PostNews2->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $PostNews2->category->slug }}">{{ $PostNews2->category->name }}</a>
                                @elseif($PostNews2->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $PostNews2->news->slug }}">{{ $PostNews2->news->name }}</a>
                                @endif
                                <br>
                                <a class="text-white" href="">{{ $PostNews2->created_at->diffForHumans() }}</a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="/posts/{{ $PostNews2->slug }}">{{ $PostNews2->title }}</a>
                </div>
            </div>
            @endforeach
            @foreach($PostNews3 as $PostNews3)
            <div class="position-relative overflow-hidden" style="height: 300px;">
                @if($PostNews3->image)
                <img class="img-fluid w-100 h-100" src="{{ asset('storage/' .$PostNews3->image) }}" style="object-fit: cover;">
                @elseif ($PostNews3->category_id != 0)
                <img src="https://source.unsplash.com/800x400?{{ $PostNews3->category->name }}" class="img-fluid w-100 h-100" alt="{{ $PostNews3->category->name }}" style="object-fit: cover;">	
                @elseif ($PostNews3->news_id != 0)
                <img src="https://source.unsplash.com/800x400?{{ $PostNews3->news->name }}" class="img-fluid w-100 h-100" alt="{{ $PostNews3->news->name }}" style="object-fit: cover;">	
                @endif
                <div class="overlay">
                    <div class="mb-2">
                        @if ($PostNews3->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $PostNews3->category->slug }}">{{ $PostNews3->category->name }}</a>
                                @elseif($PostNews3->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $PostNews3->news->slug }}">{{ $PostNews3->news->name }}</a>
                                @endif
                                <br>
                                <a class="text-white" href="">{{ $PostNews3->created_at->diffForHumans() }}</a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="/posts/{{ $PostNews3->slug }}">{{ $PostNews3->title }}</a>
                </div>
            </div>
            @endforeach
            @foreach($PostNews4 as $PostNews4)
            <div class="position-relative overflow-hidden" style="height: 300px;">
                @if($PostNews4->image)
                <img class="img-fluid w-100 h-100" src="{{ asset('storage/' .$PostNews4->image) }}" style="object-fit: cover;">
                @elseif ($PostNews4->category_id != 0)
                <img src="https://source.unsplash.com/800x400?{{ $PostNews4->category->name }}" class="img-fluid w-100 h-100" alt="{{ $PostNews4->category->name }}" style="object-fit: cover;">	
                @elseif ($PostNews4->news_id != 0)
                <img src="https://source.unsplash.com/800x400?{{ $PostNews4->news->name }}" class="img-fluid w-100 h-100" alt="{{ $PostNews4->news->name }}" style="object-fit: cover;">	
                @endif
                <div class="overlay">
                    <div class="mb-2">
                        @if ($PostNews4->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $PostNews4->category->slug }}">{{ $PostNews4->category->name }}</a>
                                @elseif($PostNews4->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $PostNews4->news->slug }}">{{ $PostNews4->news->name }}</a>
                                @endif
                                <br>
                                <a class="text-white" href="">{{ $PostNews4->created_at->diffForHumans() }}</a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="/posts/{{ $PostNews4->slug }}">{{ $PostNews4->title }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Featured News Slider End -->


<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="/posts">View All</a>
                        </div>
                    </div>
                    @foreach($Publikasi->where('category_id', (1))->skip(1)->take(2) as $Publikasi)
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">     
                            @if($Publikasi->image)
                            <img class="img-fluid w-100" src="{{ asset('storage/' .$Publikasi->image) }}" style="object-fit: cover;">
                            @elseif ($Publikasi->category_id != 0)
                            <img src="https://source.unsplash.com/800x400?{{ $Publikasi->category->name }}" class="img-fluid w-100" alt="{{ $Publikasi->category->name }}" style="object-fit: cover;">	
                            @elseif ($Publikasi->news_id != 0)
                            <img src="https://source.unsplash.com/800x400?{{ $Publikasi->news->name }}" class="img-fluid w-100" alt="{{ $Publikasi->news->name }}" style="object-fit: cover;">	
                            @endif
                            <div class="bg-white border border-top-0 p-4">
                                <div class="mb-2">
                                    @if ($Publikasi->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $Publikasi->category->slug }}">{{ $Publikasi->category->name }}</a>
                                @elseif($Publikasi->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $Publikasi->news->slug }}">{{ $Publikasi->news->name }}</a>
                                @endif
                                    {{-- <a class="text-white" href="">{{ $Publikasi->created_at->diffForHumans() }}</a> --}}
                                    <a class="text-body" href=""><small>{{ $Publikasi->created_at->diffForHumans() }}</small></a>
                                </div>
                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="/posts/{{ $Publikasi->slug }}">{{ $Publikasi->title }}</a>
                                <p class="m-0">{{$Publikasi->excerpt }}</p>
                            </div>
                            
                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                <div class="d-flex align-items-center">
                                    {{-- <img class="rounded-circle mr-2" src="home/img/user.jpg" width="25" height="25" alt=""> --}}
                                    <a href="/posts?author={{ $Publikasi->author->username }}" class="text-decoration-none text-dark">
                                        <small>{{  $Publikasi->author->name }}</small>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="ml-3"><i class="far fa-eye mr-2"></i>{{ $Publikasi->viewers }}</small>
                                    {{-- <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 mb-3">
                        <a href=""><img class="img-fluid w-100" src="home/img/ads-728x90.png" alt=""></a>
                    </div>
                    @foreach($Publikasi2->where('category_id', (2))->skip(1)->take(2) as $Publikasi)
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">     
                            @if($Publikasi->image)
                            <img class="img-fluid w-100" src="{{ asset('storage/' .$Publikasi->image) }}" style="object-fit: cover;">
                            @elseif ($Publikasi->category_id != 0)
                            <img src="https://source.unsplash.com/800x400?{{ $Publikasi->category->name }}" class="img-fluid w-100" alt="{{ $Publikasi->category->name }}" style="object-fit: cover;">	
                            @elseif ($Publikasi->news_id != 0)
                            <img src="https://source.unsplash.com/800x400?{{ $Publikasi->news->name }}" class="img-fluid w-100" alt="{{ $Publikasi->news->name }}" style="object-fit: cover;">	
                            @endif
                            <div class="bg-white border border-top-0 p-4">
                                <div class="mb-2">
                                    @if ($Publikasi->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $Publikasi->category->slug }}">{{ $Publikasi->category->name }}</a>
                                @elseif($Publikasi->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $Publikasi->news->slug }}">{{ $Publikasi->news->name }}</a>
                                @endif
                                    {{-- <a class="text-white" href="">{{ $Publikasi->created_at->diffForHumans() }}</a> --}}
                                    <a class="text-body" href=""><small>{{ $Publikasi->created_at->diffForHumans() }}</small></a>
                                </div>
                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="/posts/{{ $Publikasi->slug }}">{{ $Publikasi->title }}</a>
                                <p class="m-0">{{$Publikasi->excerpt }}</p>
                            </div>
                            
                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                <div class="d-flex align-items-center">
                                    {{-- <img class="rounded-circle mr-2" src="home/img/user.jpg" width="25" height="25" alt=""> --}}
                                    <a href="/posts?author={{ $Publikasi->author->username }}" class="text-decoration-none text-dark">
                                        <small>{{  $Publikasi->author->name }}</small>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="ml-3"><i class="far fa-eye mr-2"></i>{{ $Publikasi->viewers }}</small>
                                    {{-- <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-lg-12 mb-3">
                        <a href=""><img class="img-fluid w-100" src="home/img/ads-728x90.png" alt=""></a>
                    </div>

                    @foreach($Publikasi3->where('category_id', (3))->skip(1)->take(2) as $Publikasi)
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">     
                            @if($Publikasi->image)
                            <img class="img-fluid w-100" src="{{ asset('storage/' .$Publikasi->image) }}" style="object-fit: cover;">
                            @elseif ($Publikasi->category_id != 0)
                            <img src="https://source.unsplash.com/800x400?{{ $Publikasi->category->name }}" class="img-fluid w-100" alt="{{ $Publikasi->category->name }}" style="object-fit: cover;">	
                            @elseif ($Publikasi->news_id != 0)
                            <img src="https://source.unsplash.com/800x400?{{ $Publikasi->news->name }}" class="img-fluid w-100" alt="{{ $Publikasi->news->name }}" style="object-fit: cover;">	
                            @endif
                            <div class="bg-white border border-top-0 p-4">
                                <div class="mb-2">
                                    @if ($Publikasi->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $Publikasi->category->slug }}">{{ $Publikasi->category->name }}</a>
                                @elseif($Publikasi->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $Publikasi->news->slug }}">{{ $Publikasi->news->name }}</a>
                                @endif
                                    {{-- <a class="text-white" href="">{{ $Publikasi->created_at->diffForHumans() }}</a> --}}
                                    <a class="text-body" href=""><small>{{ $Publikasi->created_at->diffForHumans() }}</small></a>
                                </div>
                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="/posts/{{ $Publikasi->slug }}">{{ $Publikasi->title }}</a>
                                <p class="m-0">{{$Publikasi->excerpt }}</p>
                            </div>
                            
                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                <div class="d-flex align-items-center">
                                    {{-- <img class="rounded-circle mr-2" src="home/img/user.jpg" width="25" height="25" alt=""> --}}
                                    <a href="/posts?author={{ $Publikasi->author->username }}" class="text-decoration-none text-dark">
                                        <small>{{  $Publikasi->author->name }}</small>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="ml-3"><i class="far fa-eye mr-2"></i>{{ $Publikasi->viewers }}</small>
                                    {{-- <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 mb-3">
                        <a href=""><img class="img-fluid w-100" src="home/img/ads-728x90.png" alt=""></a>
                    </div>

                    @foreach($Publikasi4->where('category_id', (4))->skip(1)->take(2) as $Publikasi)
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">     
                            @if($Publikasi->image)
                            <img class="img-fluid w-100" src="{{ asset('storage/' .$Publikasi->image) }}" style="object-fit: cover;">
                            @elseif ($Publikasi->category_id != 0)
                            <img src="https://source.unsplash.com/800x400?{{ $Publikasi->category->name }}" class="img-fluid w-100" alt="{{ $Publikasi->category->name }}" style="object-fit: cover;">	
                            @elseif ($Publikasi->news_id != 0)
                            <img src="https://source.unsplash.com/800x400?{{ $Publikasi->news->name }}" class="img-fluid w-100" alt="{{ $Publikasi->news->name }}" style="object-fit: cover;">	
                            @endif
                            <div class="bg-white border border-top-0 p-4">
                                <div class="mb-2">
                                    @if ($Publikasi->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $Publikasi->category->slug }}">{{ $Publikasi->category->name }}</a>
                                @elseif($Publikasi->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $Publikasi->news->slug }}">{{ $Publikasi->news->name }}</a>
                                @endif
                                    {{-- <a class="text-white" href="">{{ $Publikasi->created_at->diffForHumans() }}</a> --}}
                                    <a class="text-body" href=""><small>{{ $Publikasi->created_at->diffForHumans() }}</small></a>
                                </div>
                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="/posts/{{ $Publikasi->slug }}">{{ $Publikasi->title }}</a>
                                <p class="m-0">{{$Publikasi->excerpt }}</p>
                            </div>
                            
                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                <div class="d-flex align-items-center">
                                    {{-- <img class="rounded-circle mr-2" src="home/img/user.jpg" width="25" height="25" alt=""> --}}
                                    <a href="/posts?author={{ $Publikasi->author->username }}" class="text-decoration-none text-dark">
                                        <small>{{  $Publikasi->author->name }}</small>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="ml-3"><i class="far fa-eye mr-2"></i>{{ $Publikasi->viewers }}</small>
                                    {{-- <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 mb-3">
                        <a href=""><img class="img-fluid w-100" src="home/img/ads-728x90.png" alt=""></a>
                    </div>

                    @foreach($News1->where('news_id', (1))->skip(1)->take(2) as $Publikasi)
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">     
                            @if($Publikasi->image)
                            <img class="img-fluid w-100" src="{{ asset('storage/' .$Publikasi->image) }}" style="object-fit: cover;">
                            @elseif ($Publikasi->category_id != 0)
                            <img src="https://source.unsplash.com/800x400?{{ $Publikasi->category->name }}" class="img-fluid w-100" alt="{{ $Publikasi->category->name }}" style="object-fit: cover;">	
                            @elseif ($Publikasi->news_id != 0)
                            <img src="https://source.unsplash.com/800x400?{{ $Publikasi->news->name }}" class="img-fluid w-100" alt="{{ $Publikasi->news->name }}" style="object-fit: cover;">	
                            @endif
                            <div class="bg-white border border-top-0 p-4">
                                <div class="mb-2">
                                    @if ($Publikasi->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $Publikasi->category->slug }}">{{ $Publikasi->category->name }}</a>
                                @elseif($Publikasi->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $Publikasi->news->slug }}">{{ $Publikasi->news->name }}</a>
                                @endif
                                    {{-- <a class="text-white" href="">{{ $Publikasi->created_at->diffForHumans() }}</a> --}}
                                    <a class="text-body" href=""><small>{{ $Publikasi->created_at->diffForHumans() }}</small></a>
                                </div>
                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="/posts/{{ $Publikasi->slug }}">{{ $Publikasi->title }}</a>
                                <p class="m-0">{{$Publikasi->excerpt }}</p>
                            </div>
                            
                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                <div class="d-flex align-items-center">
                                    {{-- <img class="rounded-circle mr-2" src="home/img/user.jpg" width="25" height="25" alt=""> --}}
                                    <a href="/posts?author={{ $Publikasi->author->username }}" class="text-decoration-none text-dark">
                                        <small>{{  $Publikasi->author->name }}</small>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="ml-3"><i class="far fa-eye mr-2"></i>{{ $Publikasi->viewers }}</small>
                                    {{-- <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 mb-3">
                        <a href=""><img class="img-fluid w-100" src="home/img/ads-728x90.png" alt=""></a>
                    </div>

                    @foreach($News2->where('news_id', (2))->skip(1)->take(2) as $Publikasi)
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">     
                            @if($Publikasi->image)
                            <img class="img-fluid w-100" src="{{ asset('storage/' .$Publikasi->image) }}" style="object-fit: cover;">
                            @elseif ($Publikasi->category_id != 0)
                            <img src="https://source.unsplash.com/800x400?{{ $Publikasi->category->name }}" class="img-fluid w-100" alt="{{ $Publikasi->category->name }}" style="object-fit: cover;">	
                            @elseif ($Publikasi->news_id != 0)
                            <img src="https://source.unsplash.com/800x400?{{ $Publikasi->news->name }}" class="img-fluid w-100" alt="{{ $Publikasi->news->name }}" style="object-fit: cover;">	
                            @endif
                            <div class="bg-white border border-top-0 p-4">
                                <div class="mb-2">
                                    @if ($Publikasi->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $Publikasi->category->slug }}">{{ $Publikasi->category->name }}</a>
                                @elseif($Publikasi->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $Publikasi->news->slug }}">{{ $Publikasi->news->name }}</a>
                                @endif
                                    {{-- <a class="text-white" href="">{{ $Publikasi->created_at->diffForHumans() }}</a> --}}
                                    <a class="text-body" href=""><small>{{ $Publikasi->created_at->diffForHumans() }}</small></a>
                                </div>
                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="/posts/{{ $Publikasi->slug }}">{{ $Publikasi->title }}</a>
                                <p class="m-0">{{$Publikasi->excerpt }}</p>
                            </div>
                            
                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                <div class="d-flex align-items-center">
                                    {{-- <img class="rounded-circle mr-2" src="home/img/user.jpg" width="25" height="25" alt=""> --}}
                                    <a href="/posts?author={{ $Publikasi->author->username }}" class="text-decoration-none text-dark">
                                        <small>{{  $Publikasi->author->name }}</small>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="ml-3"><i class="far fa-eye mr-2"></i>{{ $Publikasi->viewers }}</small>
                                    {{-- <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 mb-3">
                        <a href=""><img class="img-fluid w-100" src="home/img/ads-728x90.png" alt=""></a>
                    </div>

                    @foreach($News3->where('news_id', (3))->skip(1)->take(2) as $Publikasi)
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">     
                            @if($Publikasi->image)
                            <img class="img-fluid w-100" src="{{ asset('storage/' .$Publikasi->image) }}" style="object-fit: cover;">
                            @elseif ($Publikasi->category_id != 0)
                            <img src="https://source.unsplash.com/800x400?{{ $Publikasi->category->name }}" class="img-fluid w-100" alt="{{ $Publikasi->category->name }}" style="object-fit: cover;">	
                            @elseif ($Publikasi->news_id != 0)
                            <img src="https://source.unsplash.com/800x400?{{ $Publikasi->news->name }}" class="img-fluid w-100" alt="{{ $Publikasi->news->name }}" style="object-fit: cover;">	
                            @endif
                            <div class="bg-white border border-top-0 p-4">
                                <div class="mb-2">
                                    @if ($Publikasi->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $Publikasi->category->slug }}">{{ $Publikasi->category->name }}</a>
                                @elseif($Publikasi->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $Publikasi->news->slug }}">{{ $Publikasi->news->name }}</a>
                                @endif
                                    {{-- <a class="text-white" href="">{{ $Publikasi->created_at->diffForHumans() }}</a> --}}
                                    <a class="text-body" href=""><small>{{ $Publikasi->created_at->diffForHumans() }}</small></a>
                                </div>
                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="/posts/{{ $Publikasi->slug }}">{{ $Publikasi->title }}</a>
                                <p class="m-0">{{$Publikasi->excerpt }}</p>
                            </div>
                            
                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                <div class="d-flex align-items-center">
                                    {{-- <img class="rounded-circle mr-2" src="home/img/user.jpg" width="25" height="25" alt=""> --}}
                                    <a href="/posts?author={{ $Publikasi->author->username }}" class="text-decoration-none text-dark">
                                        <small>{{  $Publikasi->author->name }}</small>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="ml-3"><i class="far fa-eye mr-2"></i>{{ $Publikasi->viewers }}</small>
                                    {{-- <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 mb-3">
                        <a href=""><img class="img-fluid w-100" src="home/img/ads-728x90.png" alt=""></a>
                    </div>

                    @foreach($News4->where('news_id', (4))->skip(1)->take(2) as $Publikasi)
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">     
                            @if($Publikasi->image)
                            <img class="img-fluid w-100" src="{{ asset('storage/' .$Publikasi->image) }}" style="object-fit: cover;">
                            @elseif ($Publikasi->category_id != 0)
                            <img src="https://source.unsplash.com/800x400?{{ $Publikasi->category->name }}" class="img-fluid w-100" alt="{{ $Publikasi->category->name }}" style="object-fit: cover;">	
                            @elseif ($Publikasi->news_id != 0)
                            <img src="https://source.unsplash.com/800x400?{{ $Publikasi->news->name }}" class="img-fluid w-100" alt="{{ $Publikasi->news->name }}" style="object-fit: cover;">	
                            @endif
                            <div class="bg-white border border-top-0 p-4">
                                <div class="mb-2">
                                    @if ($Publikasi->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $Publikasi->category->slug }}">{{ $Publikasi->category->name }}</a>
                                @elseif($Publikasi->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $Publikasi->news->slug }}">{{ $Publikasi->news->name }}</a>
                                @endif
                                    {{-- <a class="text-white" href="">{{ $Publikasi->created_at->diffForHumans() }}</a> --}}
                                    <a class="text-body" href=""><small>{{ $Publikasi->created_at->diffForHumans() }}</small></a>
                                </div>
                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="/posts/{{ $Publikasi->slug }}">{{ $Publikasi->title }}</a>
                                <p class="m-0">{{$Publikasi->excerpt }}</p>
                            </div>
                            
                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                <div class="d-flex align-items-center">
                                    {{-- <img class="rounded-circle mr-2" src="home/img/user.jpg" width="25" height="25" alt=""> --}}
                                    <a href="/posts?author={{ $Publikasi->author->username }}" class="text-decoration-none text-dark">
                                        <small>{{  $Publikasi->author->name }}</small>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="ml-3"><i class="far fa-eye mr-2"></i>{{ $Publikasi->viewers }}</small>
                                    {{-- <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
            
            <div class="col-lg-4">
                <!-- Social Follow Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Category</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        
                        <div href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                            <i class="fab text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);">{{ $Count }}</i>
                            <span class="font-weight-medium">Total Artikel</span>
                        </div>
                        {{-- <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #055570;">
                            <i class="fab text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);">{{ $Count }}</i>
                            <span class="font-weight-medium">Total Artikel</span>
                        </a> --}}
                        
                        @foreach($CountCategory as $a)
                        <a href="/posts?category={{ $a->slug }}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                            
                            <i class="fab text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);">{{ $a->posts_count }}</i>
                            <span class="font-weight-medium">{{ $a->name }} </span>
                        </a>
                        @endforeach
                        @foreach($CountNews as $a)
                        <a href="/posts?news={{ $a->slug }}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                            <i class="fab text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);">{{ $a->posts_count }}</i>
                            <span class="font-weight-medium">{{ $a->name }} </span>
                            
                        </a>
                        @endforeach
                    </div>
                </div>
                <!-- Social Follow End -->

                <!-- Ads Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                    </div>
                    <div class="bg-white text-center border border-top-0 p-3">
                        <a href=""><img class="img-fluid" src="home/img/news-800x500-2.jpg" alt=""></a>
                    </div>
                </div>
                <!-- Ads End -->

                <!-- Popular News Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        @foreach($Popular as $Popular)
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            {{-- <img class="img-fluid" src="home/img/news-110x110-1.jpg" alt=""> --}}
                            @if($Popular->image)
                            <img class="img-fluid" src="{{ asset('storage/' .$Popular->image) }}">
                            @elseif ($Popular->category_id != 0)
                            <img src="https://source.unsplash.com/110x110?{{ $Popular->category->name }}" class="img-fluid" alt="{{ $Popular->category->name }}" \>	
                            @elseif ($Popular->news_id != 0)
                            <img src="https://source.unsplash.com/110x110?{{ $Popular->news->name }}" class="img-fluid" alt="{{ $Popular->news->name }}">	
                            @endif
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    {{-- <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a> --}}
                                    @if ($Popular->category_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?category={{ $Popular->category->slug }}">{{ $Popular->category->name }}</a>
                                @elseif($Popular->news_id != 0)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/posts?news={{ $Popular->news->slug }}">{{ $Popular->news->name }}</a>
                                @endif
                                <br>
                                <a class="text-body" href=""><small>{{ $Popular->created_at->diffForHumans() }}</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="/posts/{{ $Popular->slug }}" style="font-size: 12px">{{ $Popular->title }}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Popular News End -->

                <!-- Newsletter Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                    </div>
                    <div class="bg-white text-center border border-top-0 p-3">
                        <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                        <div class="input-group mb-2" style="width: 100%;">
                            <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                            <div class="input-group-append">
                                <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                            </div>
                        </div>
                        <small>Lorem ipsum dolor sit amet elit</small>
                    </div>
                </div>
                <!-- Newsletter End -->

                <!-- Tags Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Tags ({{ $Tagsa }})</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <div class="d-flex flex-wrap m-n1">
                            @foreach($CountTags as $Tags)
                            <a href="/posts?tags={{ $Tags->slug }}" class="btn btn-sm btn-outline-secondary m-1">#{{ $Tags->name }}({{ $Tags->posts_count }})</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Tags End -->
                {{-- Author --}}
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Author</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        
                        <div href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                            <i class="fab text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);">{{ $User }}</i>
                            <span class="font-weight-medium">Total Penulis</span>
                        </div>
                        {{-- <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #055570;">
                            <i class="fab text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);">{{ $Count }}</i>
                            <span class="font-weight-medium">Total Artikel</span>
                        </a> --}}
                        
                        @foreach($CountAuthor->skip(1) as $a)
                        <a href="/posts?author={{ $a->username }}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                            
                            <i class="fab text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);">{{ $a->posts_count }}</i>
                            <span class="font-weight-medium">{{ $a->name }} </span>
                        </a>
                        @endforeach
                        
                        {{-- <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                            <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                            <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Connects</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                            <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                            <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Subscribers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                            <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a> --}}
                    </div>
                </div>
                {{-- End Author --}}
            </div>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->
@endsection