
@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-xl-10">
        <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
            <div class="">
                <h2 class="fw-bold mb-2">Daftar Buku</h2>
                <p class="text-muted mb-0"></p>
            </div>
            <a href="{{ route('books.create') }}" class="btn btn-info">Tambah buku</a>
        </div>
        {{-- Table Display --}}
        <table class="table table-striped table-hover table-bordered border border-info-subtle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Actions</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                
                
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->judul_buku}}</td>
                    <td>{{$book->pengarang}}</td>
                    <td class="d-flex">
                        <a href="{{route('books.show', $book->id)}}" class="btn btn-sm btn-primary me-2">Show</a>
                        <a href="{{route('books.edit', $book->id)}}" class="btn btn-sm btn-warning me-2">Edit</a>
                        <form action="{{route('books.destroy', $book->id)}}" method="POST" class="m-0">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="5" class="text-center">Tidak ada data buku.</td>
                @endempty
            </tbody>
                
        </table>
        {{-- Pagination --}}
        {{-- <div class="d-flex justify-content-end mt-4">
            {{$books->links()}}
        </div> --}}
    </div> 
</div>
@endsection