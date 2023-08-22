@extends ('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Kirim Tulisan</h1>
</div>


<div class="col-lg-8">
    <form method="post" action="/dashboard/kirim/{{ $kirims->slug }}" class="mb-5">
        @method('put')

        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="title" required autofocus value="{{ old('name', $kirims->title) }}" readonly>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          {{-- <label for="slug" class="form-label">Slug</label> --}}
          <input type="hidden" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $kirims->slug) }}">
          @error('slug')
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
              <input id="body" type="hidden" name="body" value="{{ old('body', $kirims->body) }}">
              <trix-editor input="body"></trix-editor>
          </div>
          
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</div>

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');
  
    name.addEventListener('change', function(){
      fetch('/dashboard/categories/checkSlug?name=' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
    });
  
    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    });

  </script>
@endsection