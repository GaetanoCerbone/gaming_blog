<x-layout>
    <x-header>
        <h1>
            Il tuo Profilo
        </h1>
    </x-header>
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
</x-layout>