<x-master title="Se connecter">


    <div class="container w-75 my-2 bg-light p-5 rounded shadow-sm">

        <h3>Authentification</h3>

        <form action="{{ route('login') }}" method="POST">
            @csrf 

            <div class="mb-3">
                <label  class="form-label">Login</label>
                <input type="text" name="email" class="form-control" value="{{old('email')}}" required>
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label  class="form-label">Mot de PASSE</label>
                <input type="password" name="password"  class="form-control" required>
            </div>

            <div class="d-grid">
                <button class="btn btn-primary" type="submit">Se connecter</button>
            </div>
        </form>

    </div>


</x-master>
