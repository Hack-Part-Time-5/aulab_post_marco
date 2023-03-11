<x-layout>
    <div class="container-fluid p-2 text-center text-dark">
        <div class="row justify-content-center">
            <h1 class="display-5">
                Bienvenido Revisor
            </h1>
        </div>
    </div>

    @if(session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>articulos para revisar</h2>
                <x-articles-table :articles="$unrevisionedArticles"/>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articulos publicados</h2>
                <x-articles-table :articles="$acceptedArticles"/>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articulos rechazados</h2>
                <x-articles-table :articles="$rejectedArticles"/>
            </div>
        </div>
    </div>
</x-layout>