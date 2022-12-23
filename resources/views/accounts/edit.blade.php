@extends('layout.master') @section('title', 'Edit Account') @section('content') <h2>Update New Account</h2>
<form action="" method="POST"> @csrf <div class="row">
        <div class="col-md-6 mb-3"> <label for="title">Title</label> <input type="text"
                class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                value="{{ old('title') ?? $movie->title }}"> @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3"> <label for="id">id</label> <input type="char"
                class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                value="{{ old('id') ?? $account->id }}"> @error('id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group"> <label for="nama">Nama</label> <input type="varchar"
        <textarea class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
            rows="3">{{ old('nama') ?? $account->nama }} </textarea> @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div <div class="row">
    <div class="col-md-6 mb-3"> <label for="jenis">Jenis</label> <input type="varchar"
            class="form-control @error('jenis') is-invalid @enderror" name="jenis" id="jenis"
            max="2099" value="{{ old('jenis') ?? $account->jenis }}"> @error('jenis')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6 mb-3"> <label for="created_at">Created at</label> <input type="timestamp" step="0.1"
            class="form-control @error('created_at') is-invalid @enderror" name="created_at" id="created_at"
            max="10" value="{{ old('created_at') ?? $account->created_at }}"> @error('created_at')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6 mb-3"> <label for="updated_at">updated at</label> <input type="timestamp" step="0.1"
        class="form-control @error('updated_at') is-invalid @enderror" name="updated_at" id="updated_at"
        max="10" value="{{ old('updatedat') ?? $account->updatedat }}"> @error('updated_at')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>
    </div> <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
</form> @endsection
