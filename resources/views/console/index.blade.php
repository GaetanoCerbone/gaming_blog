<x-layout>
    <x-header>
        <h1>
            Lista console
        </h1>
    </x-header>
    @if(session('consoleCreated'))
    <div class="alert alert-success">
        {{ session('consoleCreated') }}
    </div>
    @endif

    @if(session('consoleUpdated'))
    <div class="aler alert-success">
        {{session('consoleUpdated')}}
    </div>
    @endif
    @if(session('consoleDeleted'))
    <div class="aler alert-success">
        {{ session('consoleDeleted') }}
    </div>
    @endif
    <div class="container">
        <div class="row">
            @if(count($consoles)>0)
            @foreach($consoles as $console)
            
                <div class="col-12 col-md-3 p-4">
                    <div class="card ">
                        <img src="{{Storage::url($console->logo)}}" class="card-img-top">
                        <div class="card-body">
                        <h5 class="card-title">{{$console->name}}</h5>
                        <p class="card-text">{{$console->producer}}</p>
                        <div class="d-flex flex-column justify-content-between">
                            <a href="{{route('console.show', compact('console'))}}" class="btn btn-primary">Vai alla console</a>
                            <a href="{{route('console.edit', compact('console'))}}" class="btn btn-success">Modifica console</a>
                            <form action="{{route('console.destroy' ,compact('console'))}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary">Cancella</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            
            @endforeach
            @else
            <div class="d-flex align-items-end flex-column m-3">
                <h3>
                    Non sono state ancora inserite console...
                </h3>
                <h5>
                    Inseriscine una tu...
                </h5>
            </div>
            @endif
        </div>
    </div>
</x-layout>