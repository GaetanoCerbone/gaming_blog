<x-layout>
    <x-navbar />
    <x-header>
        <h1>
            Inserisci il videogioco
        </h1>
    </x-header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('game.store')}}" method="POST" class="p-5 shadow mt-4">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo</label>
                      <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="producer" class="form-label">Produttore</label>
                        <input type="text" class="form-control" name="producer" id="producer" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="description" class="form-label">Produttore</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                      <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary bg-dark">Submit</button>
                      </div>
                  </form>
                
            </div>
        </div>
    </div>
    
</x-layout>