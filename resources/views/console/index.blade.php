<x-layout>
    <x-header>
        <h1>
            Lista console
        </h1>
    </x-header>
    <div class="container">
        <div class="row">
            @if(count($consoles)>0)
            @foreach($consoles as $console)
            <div class="col12 col-md-3 py-5">
                <div class="col-12 col-md-3 p-4">
                    <div class="card ">
                        <img src="{{Storage::url($console->logo)}}" class="card-img-top">
                        <div class="card-body">
                        <h5 class="card-title">{{$console->name}}</h5>
                        <p class="card-text">{{$console->producer}}</p>
                        <p class="card-text">{{$console->description}}</p>
                        
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
    </div>
</x-layout>