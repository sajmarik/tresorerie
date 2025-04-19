<nav class="navbar navbar-expand bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Social Network</a>

        <!-- Bouton hamburger en mode mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu de navigation -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto"> {{-- "ms-auto" pousse le menu vers la droite --}}
                
                  <li class="nav-item">
                    <a class="nav-link" href={{ route('homepage') }}>Accueil </a>
                </li>
      
        

        <!-- si l'utilisateur n'est pas connecté -->
          @guest
                <li class="nav-item">
                    <a class="nav-link" href={{ route('login.show') }}>Se connecter</a>
                </li> 
          @endguest


                <li class="nav-item">
                    <a class="nav-link" href={{ route('profiles.index') }}>Mon profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('information.index') }}>Mes informations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('profiles.create') }}>Ajouter Profile</a>
                </li>
            </ul>
  <!-- si l'utilisateur connecté -->
@auth
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{ auth()->user()->name }}
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

    <a class="dropdown-item" href="#">Action</a>
     <a class="dropdown-item" href={{ route('login.logout') }}>Déconnexion </a>
  
  </div>
</div>

@endauth




            
        </div>
    </div>
</nav>
