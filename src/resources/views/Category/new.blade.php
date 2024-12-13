@extends('base')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title">Cadastrar Nova Categoria</h5>
                        <a href="{{ route('news') }}" class="btn btn-secondary btn-sm">
                            << Cadastrar Notícias
                        </a>
                    </div>

                    <form method="POST" action="{{ route('category.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Categoria</label>
                            <input type="text" class="form-control" name="category" value="{{ old('category') }}">
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar Categoria</button>
                    </form>
                    @include('flash-message')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection