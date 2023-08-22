{{-- @extends('layouts/main')

@section('content')
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-8">
     			<h1 class="mb-3">{{ $post->title }}</h1>				
     			     <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in 
						@if($post->category_id != 0)
							<a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }} </a></p>
						@elseif($post->news_id != 0)
							<a href="/posts?category={{ $post->news->slug }}" class="text-decoration-none">{{ $post->news->name }} </a></p>
						@endif
					  @if($post->image)
					  <div style="max-heigt: 350px; overflow:hidden;">
						<img src="{{ asset('storage/' .$post->image) }}}}" class="img-fluid" alt="{{ $post->category->name }}">
					  </div>
					  @elseif($post->category_id != 0)
					  	<img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
					  @elseif($post->news_id != 0)
					  	<img src="https://source.unsplash.com/1200x400?{{ $post->news->name }}" class="card-img-top" alt="{{ $post->news->name }}">
					   @endif

					  
				     

					<article class="my-3 fs-5">
					{!! $post->body !!}	
					</article>

					<a href="/blog" class="d-block mt-3">Back</a>
			</div>
		</div>	
	</div>


	@endsection

 --}}
 @extends('layouts.main')
 @section('content')
 <div class="container-fluid mt-5 mb-3 pt-3">
	 <div class="container">
		 <div class="row align-items-center">
			 <div class="col-12">
				 <div class="d-flex justify-content-between">
					 <div class="section-title border-right-0 mb-0" style="width: 180px;">
						 <h4 class="m-0 text-uppercase font-weight-bold">Tranding</h4>
					 </div>
					 <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"
						 style="width: calc(100% - 180px); padding-right: 100px;">
						 <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div>
						 <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div>
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
					 @if ($post->image)
						 <img class="img-fluid w-100" src="{{ asset('storage/' .$post->image) }}" alt="{{ $post->category->name }}" style="object-fit: cover;">                        
					 @elseif($post->category_id != 0)
						 <img class="img-fluid w-100" src="https://source.unsplash.com/600x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" style="object-fit: cover;">                        
					 @elseif($post->news_id != 0)
						 <img class="img-fluid w-100" src="https://source.unsplash.com/600x400?{{ $post->news->name }}" alt="{{ $post->news->name }}" style="object-fit: cover;">                        
					 @endif
					 <div class="bg-white border border-top-0 p-4">
						 <div class="mb-3">
							 @if($post->category_id != 0)
								 <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }} </a>
							 @elseif($post->news_id != 0)
								 <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="/posts?category={{ $post->news->slug }}">{{ $post->news->name }} </a>
							 @endif
							 {{-- <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
								 href="">Business</a> --}}
							 <a class="text-body" href="">{{ $post->created_at->diffForHumans() }}</a>
						 </div>
						 <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">{{ $post->title }}</h1>
						 {!! $post->body !!}	
						
					 </div>
					 <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
						 <div class="d-flex align-items-center">
							 {{-- <img class="rounded-circle mr-2" src="home/img/user.jpg" width="25" height="25" alt=""> --}}
							 <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none text-dark">
							 	<span>{{ $post->author->name }}</span>
							 </a>
						 </div>
						 <div class="d-flex align-items-center">
							 <span class="ml-3"><i class="far fa-eye mr-2"></i>{{ $post->viewers }}</span>
							 {{-- <span class="ml-3"><i class="far fa-comment mr-2"></i>123</span> --}}
						 </div>
					 </div>
				 </div>
			 </div>
 
			 <div class="col-lg-4">
 
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
						 <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
					 </div>
					 <div class="bg-white border border-top-0 p-3">
						 <div class="d-flex flex-wrap m-n1">
							 @foreach ($post->tags as $role)
							 <a href="/posts?tags={{ $role->slug }}" class="btn btn-sm btn-outline-secondary m-1">#{{ $role->name }} {{ $role->posts_count }}</a>
							 @endforeach
						 </div>
					 </div>
				 </div>
				 <!-- Tags End -->
			 </div>
		 </div>
	 </div>
 </div>
 <!-- News With Sidebar End -->
 @endsection