@extends('dashboard.layouts.main')

@section('container')
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts Publikasi</h1>
 </div>
@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success') }}
</div>
@endif
    
<a href="/dashboard/posts" class="btn btn-primary mb-3">Post Publikasi</a>
<a href="/dashboard/postnews" class="btn btn-primary mb-3">Post News</a>
<a href="/dashboard/postag" class="btn btn-primary mb-3">Tags</a>
<br>
<br>
 <div class="table-responsive col-lg-10">
 
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $no = 1;
          ?>
        @foreach ($posts as $post)
       
        <tr>
          {{-- <td>{{ $loop->iteration }}</td> --}}
          <td>{{ $no++ }}</td>
          <td>{{ $post->title }}</td>
       
          <td>
            <a href="/dashboard/postag/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
            {{-- <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a> --}}
            {{-- <form action="/dashoard/posts/{{ $post->slug }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><span data-feather="x-circle"></span></button>
            </form>
             --}}
          </td>
        </tr>
        
        @endforeach
      </tbody>
    </table>
  </div>
@endsection