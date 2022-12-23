@extends('layout.master') @section('title', 'Add New Transaction') @section('content') <h2>Add New Transaction</h2>
<form action="{{ route('transaction.store') }}" method="POST"> @csrf <div class="row">
        <div class="col-md-6 mb-3"> <label for="title">Title</label> <input type="text"
                class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                value="{{ old('title') }}">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3"> <label for="id">=id> <input type="text"
                class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                value="{{ old('id') }}"> @error('id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group"> <label for="kategori">kategori</label>
        <textarea class="form-control @error('kategori') is-invalid @enderror" name="kategori" id="description"
            rows="3">{{ old('kategori') }}</textarea> @error('kategori')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="row">
        <div class="col-md-6 mb-3"> <label for="nominal">nominal</label> <input type="number"
                class="form-control @error('year') is-invalid @enderror" name="nominal" id="nominal" min="1900"
                max="2099" value="{{ old('year') }}"> @error('nominal')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3"> <label for="tujuan">tujuan</label> <input type="varchar" step="0.1"
                class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" id="tujuan" min="1"
                max="10" value="{{ old('tujuan') }}"> @error('tujuan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div> <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
</form> @endsection
