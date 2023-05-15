<x-layout>
    <x-header>
        <h1>
            Il tuo Profilo
        </h1>
    </x-header>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title"> I tuoi dati</h5>
                    <p class="card-text">Nome utente:{{Auth::user()->name}}</p>
                    <p class="card-text">Email utente:{{Auth::user()->email}}</p>
                    <p class="card-text">Iscritto il :{{Auth::user()->created_at}}</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userDestroy">
                        Elimina
                      </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                
                @foreach(Auth::user()->consoles as $console)
                
                <div class="col-12 col-md-3 p-4">
                    <div class="card ">
                        <img src="{{Storage::url($console->logo)}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{$console->name}}</h5>
                            <p class="card-text">{{$console->producer}}</p>
                            
                            <hr>
                            <p class="small">Creato da:{{$console->user->name ?? 'Utente Guest'}}</p>
                            <hr>
                            
                            <div class="d-flex flex-column justify-content-between">
                                <a href="{{route('console.show', compact('console'))}}" class="btn btn-primary">Vai alla console</a>
                                @if($console->user_id && $console->user->id == Auth::user()->id)
                                <a href="{{route('console.edit', compact('console'))}}" class="btn btn-success">Modifica console</a>
                                <form action="{{route('console.destroy' ,compact('console'))}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary">Cancella</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>


        <div class="modal" tabindex="-1" id="userDestroy">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Procedere?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>L'operazione è definitiva</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Indietro</button>
                        <form action="{{route('user.destroy')}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-warning" type="submit">Elimina profilo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>