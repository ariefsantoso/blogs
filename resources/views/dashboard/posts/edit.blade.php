@extends ('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>


<div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
        @method('put')

        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
          @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
          @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        @if($post->category_id != 0)
        <div class="mb-3">
          <label for="category" class="form-label">Publikasi</label>
          <select class="form-select" name="category_id">
            @foreach ($categories as $category)
            @if (old('category_id', $post->category_id ) == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
          </select>
          <input type="hidden" name="news_id" id="" value="0">
        </div>
        @else
        <div class="mb-3">
          <label for="news" class="form-label">News</label>
          <select class="form-select" name="news_id">
            @foreach ($news as $new)
            @if (old('news_id', $post->news_id ) == $new->id)
              <option value="{{ $new->id }}" selected>{{ $new->name }}</option>
            @else
            <option value="{{ $new->id }}">{{ $new->name }}</option>
            @endif
            @endforeach
          </select>
          <input type="hidden" name="category_id" id="" value="0">
        </div>
       @endif

       <div class="mb-3">
        <label for="user" class="form-label">Penulis</label>
        <select class="form-select" name="user_id">
          @foreach ($author->skip(1) as $user)
          @if (old('user_id', $post->user_id ) == $user->id)
            <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
          @else
          <option value="{{ $user->id }}">{{ $user->name }}</option>
          @endif
          @endforeach
        </select>
      </div>

        <div class="mb-3">
          <label for="image" class="form-label">Post Image</label>
          <input type="hidden" name="oldImage" id="" value="{{ $post->image }}">
          @if($post->image)
          <img src="{{ asset('storage/'.$post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
          @else
          <img class="img-preview img-fluid mb-3 col-sm-5">
          @endif
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
        </div>

        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          @error('body')
            <p class="text-danger">{{ $message }}</p>
          @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>
        @foreach ($post->tags as $item)
        <div class="row mt-2">
          <div class="col">
            <label for="news" class="form-label">Tags</label>
              <select class="form-select" name="tags[]" autofocus>
                  @foreach ($tags as $tag)
                      <option value="{{ $tag->id }}" {{ $tag->id == $item->pivot->tags_id ? 'selected' : '' }}>{{ $tag->name }}</option>
                  @endforeach
              </select>
          </div>
      </div>
      @endforeach
      <div id="items">

      </div>
      <div>
          <button id="add" class="btn add-more button-yellow uppercase" type="button">+ Add another
              referral</button>
          <button class="delete btn button-white uppercase" type="button">- Remove referral</button>
      </div>
       <div class="row mt-5">
        <button type="submit" class="btn btn-primary">Update Post</button>
      </form>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.slim.js"
integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
  $(".delete").hide();
        //when the Add Field button is clicked
        $("#add").click(function(e) {
            $(".delete").fadeIn("1500");
            //Append a new row of code to the "#items" div
            $("#items").append(
                `<div class="row mt-2 next-referral">
                <div class="col">
                    <select class="form-select" name="tags[]" autofocus>
                        @foreach ($tags as $produk)
                            <option value="{{ $produk->id }}" selected>{{ $produk->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>`
            );
        });

        $(".delete").click(function(e) {
            $(".next-referral").last().remove();

        });

        // $("body").on("click", ".delete", function(e) {
        // });
</script>

<script>

  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function(){
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });


  document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
  });

  function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';
    
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }

</script> 
@endsection
