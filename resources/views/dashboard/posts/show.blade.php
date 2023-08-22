@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5 my-3">
        <div class="col-lg-8">
             <h1 class="mb-3">{{ $post->title }}</h1>				
                  <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left"></span> Back to My Post</a>
                  <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"> <span data-feather="edit"></span> Edit</a>
                  <form action="/dashoard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure ?')"><span data-feather="x-circle"></span>Delete</button>
                  </form>
                @if($post->image)
                <div style="max-heigt: 350px; overflow:hidden;">
                  <img src="{{ asset('storage/' .$post->image) }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
                </div>
                @else
                @if($post->news_id != 0)
                  <img src="https://source.unsplash.com/1200x400?{{ $post->news->name }}" class="img-fluid mt-3" alt="{{ $post->news->name }}">
                @else
                  <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
                @endif
                 @endif

                <article class="my-3 fs-5">
                {!! $post->body !!}	
                </article>

                {{-- <a href="/blog" class="d-block mt-3">Back</a> --}}
                <a href="/posts" class="d-block mt-3">Back</a>
                <br>
                <h6>Tags</h6>

                <br>
                @foreach ($post->tags as $role)
						      <a href="/posts?tags={{ $role->slug }}" class="btn btn-sm btn-primary me-2">#{{ $role->name }}</a>
                @endforeach
        </div>
    </div>	
</div>
@endsection