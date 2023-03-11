<x-layout>
    <div class="container-fluid p-2 text-center text-dark">
        <div class="row justify-content-center">
            <h1 class="display-5 title-pages">
                Aulab Post
            </h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
                <div class="card p-0 rounded mb-4" style="max-width:1200px;">
                    <div class="row g-0 h-100">
                        <div class="col-md-4">
                            <img src="{{ Storage::url($article->image) }}" class="img-card img-fluid rounded-start" alt="{{ $article->title}}">
                        </div>
                        <div class="col-md-8 ps-3">
                            <div class="card-body h-100 d-flex flex-column">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{{ $article->subtitle }}</p>
                                @if($article->category)
                                    <p class="small text-muted fst-italic"><a class="nav-link" href="{{ route('article.byCategory', ['category' => $article->category->id]) }}">{{$article->category->name}}</a></p>   
                                @else
                                    <p class="small text-muted fst-italic">Sin categoria</p>
                                @endif
                                <p>Publicado el {{ $article->created_at->format('d/m/y') }} por <a class="small text-muted fst-italic nav-link d-inline" href="{{ route('article.byWriter', ['user' => $article->user->id ])}}">{{$article->user->name}}</a> </p>
                                <span class="text-muted small fst-italic"> Tiempo de lectura: {{$article->readDuration()}} min</span>
                                <div class="btn-card mt-auto">
                                    <a href="{{ route('article.show', $article)}}" class="btn btn-info text-white px-4">Leer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <p class="small fst-italic">
                @foreach ($article->tags as $tag )
                    #{{$tag->name}}
                @endforeach
            </p>
        </div>
        <div class="mt-4 d-flex justify-content-center">
            <a href="{{ route('article.index')}}" class="btn btn-info text-white px-4">Ver todos</a>
        </div>
    </div>
</x-layout>
