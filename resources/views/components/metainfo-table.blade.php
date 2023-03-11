<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre tag</th>
            <th scope="col">Cantidad de articulos relacionados</th>
            <th scope="col">Actualizar</th>
            <th scope="col">Cancelar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($metaInfos as $metaInfo )
            <tr>
                <th scope="row">{{ $metaInfo->id}}</th>
                <th>{{ $metaInfo->name}}</th>
                <th>{{ count($metaInfo->articles) }}</th>
                @if ($metaType == 'tags')
                    <td>
                        <form action="{{ route('admin.editTag', ['tag' => $metaInfo]) }}" method="post">
                            @csrf
                            @method('put')
                            <input type="text" name="name" placeholder="Nuevo nombre tag" class="form-control w50 d-inline">
                            <button type="submit" class="btn btn-info text-white">Actualizar</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('admin.deleteTag', ['tag' => $metaInfo]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-info text-white">Eliminar</button>
                        </form>
                    </td>
                @else
                    <td>
                        <form action="{{ route('admin.editCategory', ['category' => $metaInfo])}}" method="post">
                            @csrf
                            @method('put')
                            <input type="text" name="name" placeholder="Nuevo nombre tag" class="form-control w50 d-inline">
                            <button type="submit" class="btn btn-info text-white">Actualizar</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('admin.deleteCategory', ['category' => $metaInfo]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-info text-white">Eliminar</button>
                        </form>
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>