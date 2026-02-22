@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                {{-- Page Header --}}
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="text-dark-emphasis m-0 mb-1">Buat Data Anggota Baru</h2>
                    <p class="text-secondary m-0">Tambahkan data anggota baru ke dalam koleksi Anda.</p>
                </div>
            </div>

           
            {{-- Form Card --}}
            <div class="card">
                <div class="card-body py-4">
                    <form action="{{ route('anggota.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="form-label">Nama</label>
                            <input 
                            type="text"
                            name="name"
                            id="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}"
                            placeholder="Isi nama ..."
                            autofocus>
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-4">
                            <label for="nis" class="form-label">nis </label>
                            <input 
                            type="text"
                            name="nis"
                            id="nis"
                            class="form-control @error('nis') is-invalid @enderror"
                            value="{{ old('nis') }}"
                            placeholder="Isi nis ..."
                            autofocus>
                        @error('nis')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        </div>


                        <div class="mb-4">
                            <label for="class" class="form-label">Kelas</label>
                            <input 
                            type="text"
                            name="class"
                            id="class"
                            class="form-control @error('class') is-invalid @enderror"
                            value="{{ old('class') }}"
                            placeholder="Isi kelas ..."
                            autofocus>
                        @error('class')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-4">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input 
                            type="text"
                            name="jurusan"
                            id="jurusan"
                            class="form-control @error('jurusan') is-invalid @enderror"
                            value="{{ old('jurusan') }}"
                            placeholder="Isi nama jurusan ..."
                            autofocus>
                        @error('jurusan')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-4">
                            <label for="username" class="form-label">username</label>
                            <input 
                            type="text"
                            name="username"
                            id="username"
                            class="form-control @error('username') is-invalid @enderror"
                            value="{{ old('username') }}"
                            placeholder="Isi username ..."
                            autofocus>
                        @error('username')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input 
                            type="email"
                            name="email"
                            id="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}"
                            placeholder="Isi email ..."
                            autofocus>
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input 
                            type="password"
                            name="password"
                            id="password"
                            class="form-control @error('password') is-invalid @enderror"
                            value="{{ old('password') }}"
                            placeholder="Isi password ..."
                            autofocus>
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button class="btn btn-info" type="submit">Buat Data User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>