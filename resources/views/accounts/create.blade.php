@extends('layout.master') @section('title', 'Add New Transaction') @section('content') <h2>Add New Account</h2>
<form action="{{ route('transaction.store') }}" method="POST"> @csrf <div class="row">
        <div class="col-md-6 mb-3"> <label for="title">Title</label> <input type="text"
                class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                value="{{ old('title') }}">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3"> <label for="id">=id> <input type="char"
                class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                value="{{ old('id') }}"> @error('id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group"> <label for="nama">nama</label>
        <textarea class="form-control @error('kategori') is-invalid @enderror" name="nama" id="nama"
            rows="3">{{ old('nama') }}</textarea> @error('nama')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="row">
        <div class="col-md-6 mb-3"> <label for="jenis">jenis</label> <input type="varchar"
                class="form-control @error('jenis') is-invalid @enderror" name="jenis" id="jenis" min="1900"
                max="2099" value="{{ old('jenis') }}"> @error('jenis')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3"> <label for="created_at">created_at</label> <input type="timestamp" step="0.1"
                class="form-control @error('created_at') is-invalid @enderror" name="created_at" id="created_at" min="1"
                max="10" value="{{ old('created_at') }}"> @error('created_at')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div> <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
</form> @endsection
