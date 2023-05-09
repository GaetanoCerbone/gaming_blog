<x-layout>
    <x-navbar />
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
</x-layout>