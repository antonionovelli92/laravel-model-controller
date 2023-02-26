 <header>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container-fluid">
             <a class="navbar-brand" href="{{ url('/') }}">{{ env('APP_NAME') }}</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                 aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav">
                     <li class="nav-item">
                         {{-- Creo un ternario per la classe active sulla ruote home --}}
                         <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                             href="{{ route('home') }}">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link {{ request()->routeIs('movie') ? 'active' : '' }}"
                             href="{{ route('movie') }}">Movie</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
 </header>
