<x-layout>
    <div class="card p-0 rounded mt-5" style="max-width:1200px;">
        <div class="row g-0 h-100">
            <div class="col-md-5">
                <img src="{{ Storage::url($article->image) }}" class="img-card img-fluid rounded-start" alt="{{ $article->title}}">
            </div>
            <div class="col-md-7 ps-3">
                <div class="card-body h-100 d-flex flex-column">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ $article->subtitle }}</p>
                    <p class="small text-muted fst-italic">{{$article->category->name}}</p>
                    {{-- <p>{{nl2br(e($article->body))}}</p> --}}
                    <p>{!! nl2br(e($article->body)) !!}</p>
                    <span class="text-muted small fst-italic"> Tiempo de lectura: {{$article->readDuration()}} min</span>
                    <p>Publicado el {{ $article->created_at->format('d/m/y') }} por {{$article->user->name}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3">
        @if(Auth::user() && Auth::user()->is_revisor)
            <a href="{{ route('revisor.acceptArticle', $article) }}" class="btn btn-info text-white me-3">Aceptar</a>
            <a href="{{ route('revisor.rejectArticle', $article) }}" class="btn btn-info text-white">Rechazar</a>      
        @endif
    </div>
    <div class="mt-4 d-flex justify-content-center">
        <a href="{{ route('welcome')}}" class="btn btn-info text-white px-4 me-4">Volver inicio</a>
        @if (Auth::user() && Auth::user()->is_revisor)
        <a href="{{ route('revisor.dashboard')}}" class="btn btn-info text-white px-4">Dashboard</a>   
        @endif
    </div>
</x-layout>
