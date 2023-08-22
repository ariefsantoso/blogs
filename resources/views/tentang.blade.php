 @extends('layouts.main')
 @section('content')
 <div class="container-fluid mt-5 mb-3 pt-3">
	 <div class="container">
		 <div class="row align-items-center">
			 <div class="col-12">
				 <div class="d-flex justify-content-between">
					 <div class="section-title border-right-0 mb-0" style="width: 180px;">
						 <h4 class="m-0 text-uppercase font-weight-bold">Latest</h4>
					 </div>
					 <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"
						 style="width: calc(100% - 180px); padding-right: 100px;">
						 @foreach($Tranding as $Tranding)
						 	<div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="/posts/{{ $Tranding->slug }}">{{ $Tranding->title }}</a></div>
						 @endforeach
					 </div>
				 </div>
			 </div>
		 </div>
	 </div>
 </div>
 <!-- Breaking News End -->
 
 
 <!-- News With Sidebar Start -->
 <div class="container-fluid">
	 <div class="container">
		 <div class="row">
			 <div class="col-lg-8">
				 <!-- News Detail Start -->
				 <div class="position-relative mb-3">
					
					 <div class="bg-white border border-top-0 p-4">
						
                         @foreach($post as $post)
						 <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">{{ $post->title }}</h1>
                         <article>
                            <h6>
                                {!! $post->body !!}
                            </h6> 
                        </article>
                         @endforeach	
						
					 </div>
					 <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
						 <div class="d-flex align-items-center">
							
						 </div>
						 <div class="d-flex align-items-center">
							 
						 </div>
					 </div>
				 </div>
				 
			 </div>
 
			 <div class="col-lg-4">
		
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
			 </div>
		 </div>
	 </div>
 </div>
 <!-- News With Sidebar End -->
 @endsection