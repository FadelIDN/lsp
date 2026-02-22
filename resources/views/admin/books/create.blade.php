@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                {{-- Page Header --}}
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="text-dark-emphasis m-0 mb-1">Buat Data Buku Baru</h2>
                    <p class="text-secondary m-0">Tambahkan data buku baru ke dalam koleksi Anda.</p>
                </div>
            </div>

           
            {{-- Form Card --}}
            <div class="card">
                <div class="card-body py-4">
                    <form action="{{ route('books.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="kode_buku" class="form-label">Kode Buku</label>
                            <input 
                            type="text"
                            name="kode_buku"
                            id="kode_buku"
                            class="form-control @error('kode_buku') is-invalid @enderror"
                            value="{{ old('kode_buku') }}"
                            placeholder="Isi kode buku ..."
                            autofocus>
                        @error('kode_buku')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-4">
                            <label for="judul_buku" class="form-label">Judul</label>
                            <input 
                            type="text"
                            name="judul_buku"
                            id="judul_buku"
                            class="form-control @error('judul_buku') is-invalid @enderror"
                            value="{{ old('judul_buku') }}"
                            placeholder="Isi judul buku ..."
                            autofocus>
                        @error('judul_buku')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-4">
                            <label for="pengarang" class="form-label">Pengarang</label>
                            <input 
                            type="text"
                            name="pengarang"
                            id="pengarang"
                            class="form-control @error('pengarang') is-invalid @enderror"
                            value="{{ old('pengarang') }}"
                            placeholder="Isi nama pengarang ..."
                            autofocus>
                        @error('pengarang')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-4">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input 
                            type="text"
                            name="penerbit"
                            id="penerbit"
                            class="form-control @error('penerbit') is-invalid @enderror"
                            value="{{ old('penerbit') }}"
                            placeholder="Isi nama penerbit ..."
                            autofocus>
                        @error('penerbit')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-4">
                            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                            <input 
                            type="text"
                            name="tahun_terbit"
                            id="tahun_terbit"
                            class="form-control @error('tahun_terbit') is-invalid @enderror"
                            value="{{ old('tahun_terbit') }}"
                            placeholder="Isi tahun terbit ..."
                            autofocus>
                        @error('tahun_terbit')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        </div>
                        
                        <div class="d-flex gap-2">
                            <button class="btn btn-info" type="submit">Buat Data Buku</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>