<x-layout>
    <x-header>
        <h1>
            Console {{$console->name}}
        </h1>
    </x-header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 p-4">
                <div class="card shadow">
                    <img src="{{Storage::url($console->logo)}}" alt="Logo di {{$console->name}}" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title">{{$console->name}}</h5>
                    <p class="card-text">{{$console->producer}}</p>
                    <p class="card-text">{{$console->description}}</p>
                    <a href="{{route('console.show', compact('console'))}}" class="btn btn-primary">Vai alla console</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>