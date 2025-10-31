@extends('layouts.app')

@section('content')

    <div class="container">

            <h2 class="text-center">Tambah Buku Baru</h2>

            @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
            @endif

            <form action="{{ route('buku.store') }}" method="POST">
                @csrf

                <div>
                    <label for="title" class="form-label">Title </label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">

                    @error('title')
                        <div class="invalid-feedback">{{ $messsage }}</div>

                    @enderror
                </div>


                <div>
                    <label for="author" class="form-label">author </label>
                    <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ old('author') }}">

                    @error('author')
                        <div class="invalid-feedback">{{ $message }}</div>

                    @enderror
                </div>


                <div>
                    <label for="stock" class="form-label">stock </label>
                    <input type="text" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ old('stock') }}">

                    @error('stock')
                        <div class="invalid-feedback">{{ $message }}</div>

                    @enderror
                </div>

                <button type="submit" class="btn btn-success mt-3">Simpan Data Buku</button>
                <a href="{{ route('buku.index') }}" class="btn btn-secondary mt-3">Batal</a>

            </form>

    </div>

@endsection