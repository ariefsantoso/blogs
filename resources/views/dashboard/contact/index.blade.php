@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tanya Hukum</h1>
</div>
@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif


<div class="table-responsive col-lg-8">
    
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Hp</th>
                <th scope="col">Email</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $contact->alamat }}</td>
                <td>{{ $contact->no_hp }}</td>
                <td>{{ $contact->email }}</td>
                <td>
                    <a href="/dashboard/contact/{{ $contact->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection