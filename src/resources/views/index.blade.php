@extends('base')

@section('content')

<div class="container mt-4">
    <div class="row">
        <h2>Notícias</h2>
        @forelse($news as $new)
        <div class="col-md-4 pb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $new->title }}</h5>
                    <p class="card-text">{{ strlen($new->text) > 30 ? substr(htmlspecialchars($new->text), 0, 30) . '...' : htmlspecialchars($new->text) }}</p>

                    <p class="card-text">
                        <small class="text-muted">Categoria: {{ $new->category->category }}</small><br>
                        <small class="text-muted">Publicado em {{ $new->created_at->format('d/m/Y') }}</small>
                    </p>

                    <a href="{!! route('news.read', ['id' => $new->id]) !!}" class="btn btn-outline-success">Ler Notícia</a>
                </div>
            </div>
        </div>
        @empty
        <p class="text-center">Nenhum registro encontrado</p>
        @endforelse
    </div>
</div>
@endsection