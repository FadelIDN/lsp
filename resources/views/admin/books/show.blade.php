@extends('layouts.app')

@section('content')

<div class="container mt-5">  {{-- ← Tambahkan mt-5 --}}
    <div class="row justify-content-center">
        <div class="col-lg-8">
            {{-- Page Header --}}
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="text-dark-emphasis">Lihat Detail Buku</h2>
                    <p class="text-muted m-0">Detail dan Informasi Buku</p>
                </div>
                <a href="{{ route('books.index') }}" class="btn btn-warning">
                    Kembali
                </a>
            </div>

            <div class="card shadow-sm">  {{-- ← Tambahkan shadow-sm --}}
                <div class="card-body p-4">
                    {{-- Judul Buku --}}
                    <div class="mb-4 pb-3 border-bottom" style="border-color: #30363d !important;">
                        <label for="" class="text-muted text-uppercase small mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Judul Buku</label>
                        <h3 class="text-dark-emphasis mb-0">{{ $book->judul_buku }}</h3>
                    </div>

                    {{-- Pengarang --}}
                    <div class="mb-4">
                        <label for="" class="text-muted text-uppercase small mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Pengarang</label>
                        <p class="text-dark-emphasis m-0">{{ $book->pengarang }}</p>
                    </div>

                    {{-- Penerbit --}}
                    <div class="mb-4">
                        <label for="" class="text-muted text-uppercase small mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Penerbit</label>
                        <p class="text-dark-emphasis m-0">{{ $book->penerbit }}</p>
                    </div>

                    {{-- Tahun Terbit --}}
                    <div class="mb-4">
                        <label for="" class="text-muted text-uppercase small mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Tahun Terbit</label>
                        <p class="text-dark-emphasis m-0">{{ $book->tahun_terbit }}</p>
                    </div>
                    <div class="pt-3 border-top" style="border-color: #30363d !important;">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <small class="text-muted d-block">Created</small>
                                <small class="text-dark-emphasis">
                                    {{ $book->created_at->diffForHumans() }}
                                </small>
                            </div>
                            <div class="col-md-6">
                                <small class="text-muted d-block">Last Updated</small>
                                <small class="text-dark-emphasis">
                                    {{ $book->updated_at->diffForHumans() }}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection