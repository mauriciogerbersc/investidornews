@extends('base')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title">Cadastrar Nova Notícia</h5>
                        <a href="{{ route('categories') }}" class="btn btn-secondary btn-sm">
                            Cadastrar Categoria
                        </a>
                    </div>

                    <form method="POST" action="{{ route('news.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="category" class="form-label">Categoria</label>
                            <select class="form-control" name="category" required>
                                <option value="">Selecione uma Categoria</option>
                                @foreach($categories as $category)
                                <option value="{{$category['id']}}">{{$category['category']}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Título</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="text" class="form-label">Texto</label>
                            <textarea name="text" class="form-control">{{ old('text') }}</textarea>
                            @error('text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar Notícia</button>
                    </form>
                    @include('flash-message')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection