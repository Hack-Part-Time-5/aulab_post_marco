<x-layout>
    <div class="container-fluid p-2 text-center text-dark">
        <div class="row justify-content-center">
            <h1 class="display-5">
                Publicaciones de {{$user->name}}
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
                                <p class="small text-muted fst-italic">{{$article->category->name}}</p>   
                                <p>Publicado el {{ $article->created_at->format('d/m/y') }} por {{$article->user->name}}</p>
                                <div class="btn-card mt-auto">
                                    <a href="{{ route('article.show', $article)}}" class="btn btn-info text-white px-4">Leer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>