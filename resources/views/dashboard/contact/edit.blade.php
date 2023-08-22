@extends ('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Kirim Tulisan</h1>
</div>


<div class="col-lg-8">
    <form method="post" action="/dashboard/contact/{{ $contacts->id }}" class="mb-5">
        @method('put')

        @csrf
        <div class="mb-3">
          <label for="alamat" class="form-label">Name</label>
          <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required autofocus value="{{ old('name', $contacts->alamat) }}">
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="no_hp" class="form-label">No Hp</label>
          <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" required  value="{{ old('name', $contacts->no_hp) }}">
          @error('no_hp')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required  value="{{ old('name', $contacts->email) }}">
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
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