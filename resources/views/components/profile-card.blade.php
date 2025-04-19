<div class="col-sm-4">

<div class="card" >
  <img src="https://picsum.photos/seed/picsum/200/300" class="card-img-top" alt="Image">
  <div class="card-body">
    <h5 class="card-title">{{$profile->name}}</h5>
    <p class="card-text">{{ Str::limit($profile->bio,50)}}</p>

    
        <a href="{{ route('profiles.show',$profile->id) }}" class="stretched-link">Afficher plus</a>

  </div>
 
<div class="card-foot border-top px-3 py-3 bg" style="z-index: 9">
    <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm float-end" type="submit">Supprimer</button>
    </form>

    <form  action="{{ route('profiles.edit', $profile->id) }}" method="GET">
        @csrf
         <!-- utiliser put pour modifier tous le formulaire -->
  <!-- utiliser patch pour modifier des parties -->
        <button class="btn btn-primary btn-sm float-end" type="submit">Modifier</button>

    </form>
    </div>

</div>
</div>
