<x-layout>
    <div class="container-fluid p-2 text-center text-dark">
        <div class="row justify-content-center">
            <h1 class="display-5">
                Modificar articulo
            </h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if($errors -> any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('article.update', $article) }}" method="POST" enctype="multipart/form-data" class="card p-5 shadow">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titulo: </label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $article->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Subtitulo: </label>
                        <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{ $article->subtitle }}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Imagen: </label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoría: </label>
                        <select class="form-control" id="category" name="category">
                            @foreach ($categories as $category )
                                <option value="{{$category->id}}" @if($article->category && $category->id == $article->category->id) selected @endif>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Descripción: </label>
                        <textarea class="form-control" id="body" name="body" cols="30"
                            rows="10">{{ $article->body }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Etiquetas: </label>
                        <input name='tags' id="tags" class="form-control" value="{{ $article->tags->implode('name', ', ') }}">
                        <span class="small fst-italic">Divide cada etiqueta con una coma</span>
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-info text-white" type="submit">Insertar articulo</button>
                        <a href="{{ route('welcome') }}" class="btn btn-outline-info">Volver a inicio</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
       