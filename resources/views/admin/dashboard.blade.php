@extends('layouts.app')
@section('content')
 <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            📚 Daftar Buku
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Tahun</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($books as $book)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $book->kode_buku }}</td>
                            <td>{{ $book->judul_buku }}</td>
                            <td>{{ $book->pengarang }}</td>
                            <td class="text-center">{{ $book->tahun }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">
                                Data buku belum tersedia
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
