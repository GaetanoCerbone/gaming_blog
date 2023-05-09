<x-layout>
    <x-navbar />
    <x-header> 
        <h1>
            LISTA GIOCHI
        </h1>
    </x-header>
    <div class="container my-5">
        <div class="row">
            @foreach($games as $game)
                <div class="col-12 col-md-3 p-4">
                    <div class="card ">
                        <img src="{{Storage::url($game->cover)}}" class="card-img-top">
                        <div class="card-body">
                        <h5 class="card-title">{{$game->title}}</h5>
                        <p class="card-text">{{$game->producer}}</p>
                        <p class="card-text">{{$game->description}}</p>
                        
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
