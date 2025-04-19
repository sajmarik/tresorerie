<x-master title="Mon Profile"> <h3>Ajouter profile</h3>
@if ($errors->any())

  <x-alert type="danger">
    <h6>Errors:</h6>
    <ul>
    @foreach ($errors->all() as $error )
      <li> {{$error}} </li>
    @endforeach
    </ul>
  </x-alert>
@endif


<form method="POST" action="{{ route('profiles.store') }}">
   
    @csrf
    <div class="mb-3">
      <label class="form-label">Nom complet</label>
      <input type="text" class="form-control" name="name" value="{{old('name')}}">
      @error('name')
      <div class="text-danger">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Email </label>
        <input type="text" class="form-control" name="email" value="{{old('email')}}">
        @error('email')
        <div class="text-danger">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Mot de passe</label>
        <input type="password" class="form-control" name="password">
      </div>

      <div class="mb-3">
        <label class="form-label">Confirmer votre mot de passe</label>
        <input type="password" class="form-control" name="password_confirmation">
      </div>

      <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name='bio' class="form-control" ></textarea>
      </div>

      <div class="d-grid my-2">
      <button type="submit" class="btn btn-primary btn-block">Ajouter Profil</button>
      </div>
    </form>
    </x-master>