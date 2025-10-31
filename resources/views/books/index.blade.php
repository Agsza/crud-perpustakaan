@extends('layouts.app')

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div>
        <h2>Daftar Buku</h2>
        <a href="{{ route('buku.create') }}" class="btn btn-sm btn-success mb-2">Tambah Buku</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm">
            <thead class="table-info text-center">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($bukus as $buku)
                <tr>
                    <td>{{ $buku->id }}</td>
                    <td class="text-start">{{ $buku->title }}</td>
                    <td>{{$buku->stock}}</td>
                    <td>
                        <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-sm btn-success">Edit</a>
                        <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-between align-items-center mt-2">
    <div class="text-muted small">
        Showing {{ $bukus->firstItem() }} to {{ $bukus->lastItem() }} of {{ $bukus->total() }} results
    </div>
    <div>
        <!-- menggunakan simple bootstap -->
        {{ $bukus->links('pagination::simple-bootstrap-5') }}
    </div>
</div>

@endsection