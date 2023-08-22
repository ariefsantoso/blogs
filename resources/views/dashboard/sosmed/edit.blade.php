@extends ('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Kirim Tulisan</h1>
</div>


<div class="col-lg-8">
    <form method="post" action="/dashboard/sosmed/{{ $sosmeds->id }}" class="mb-5">
        @method('put')

        @csrf
        <div class="mb-3">
          <label for="ig" class="form-label">Ig</label>
          <input type="text" class="form-control @error('ig') is-invalid @enderror" id="ig" name="ig" required autofocus value="{{ old('ig', $sosmeds->ig) }}">
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="fb" class="form-label">Fb</label>
          <input type="text" class="form-control @error('fb') is-invalid @enderror" id="fb" name="fb" required  value="{{ old('fb', $sosmeds->fb) }}">
          @error('no_hp')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="twitter" class="form-label">Twitter</label>
          <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter" name="twitter" required  value="{{ old('twitter', $sosmeds->twitter) }}">
          @error('twitter')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

       
          
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</div>


@endsection