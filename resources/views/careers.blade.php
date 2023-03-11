<x-layout>
    <div class="container-fluid p-2 text-center text-dark">
        <div class="row justify-content-center">
            <h1 class="display-5">
                Trabaja con nosotros
            </h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center align-items-center border rounded p-2 shadow bg-light">
            <div class="col-12 col-md-6">
                <h2>Trabaja como administrador</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non illum provident ullam omnis quia atque ex at. Velit, officiis sint.</p>
                <h2>Trabaja como revisor</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi quibusdam expedita maiores libero esse omnis aspernatur tenetur nobis similique quae.</p>
                <h2>Trabaja como redactor</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, fugit facere. Nobis assumenda atque aut ducimus nisi, repudiandae dolorum. Atque.</p>
            </div>
            <div class="col-12 col-md-6">
                @if($errors ->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error )
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                {{-- NO ponemos el enctype porque ya tenemos una web llamada career-request-mail --}}
                <form action="{{ route('careers.submit') }}" method="POST" class="card p-5 shadow">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Por qué rol estás haciendo candidatura?</label>
                        <select name="role" id="role" class="form-control">
                            <option value=""></option>
                            <option value="admin">Administrador</option>
                            <option value="revisor">Revisor</option>
                            <option value="writer">Redactor</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') ?? Auth::user()->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Hablanos de ti</label>
                        <textarea class="form-control" name="message" cols="30" rows="10" id="message">{{ old('message') }}</textarea>
                    </div>
                    <div class="mt-2">
                        {{-- No ponemos type="submit" porque ya esta en la ruta puesto --}}
                        <button class="btn btn-info text-white">Enviar candidatura</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-layout>