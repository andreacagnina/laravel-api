@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h1>Modifica questa Tech</h1>
                </div>
            </div>
            <div class="col">
                <form action="{{ route('admin.technologies.update', ['technology' => $technology->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <label for="name" class="form-label">Titolo:</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $technology->name) }}"
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="description" class="form-label">Descrizione:</label>
                            <textarea name="description" id="description-technology" cols="30" rows="5"
                                class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary my-4">INVIA</button>
                </form>
            </div>
        </div>
    </div>
@endsection
