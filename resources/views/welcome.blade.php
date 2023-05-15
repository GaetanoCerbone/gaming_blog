<x-layout>

    <x-header>
        <h1>
            GAMES
        </h1>
    </x-header>
    @if(session('gameCreated'))
        <div class="alert alert-success">
            {{session('gameCreated')}}
        </div>
    @endif

    @if(session('userDeleted'))
    <div class="alert alert-success">
        {{session('userDeleted')}}
    </div>
    @endif
</x-layout>