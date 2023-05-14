<x-layout>

  <x-header>
      <h1>
          Modifica la tua Console
      </h1>
  </x-header>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-12 col-md-8">
              <form action="{{route('console.store')}}" method="POST" class="p-5 shadow mt-4" enctype="multipart/form-data">
                @if ($errors->any())
                <div class="alert alert-danger m-0">
                  <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                  </ul>  
                </div>
                @endif  
                  @csrf
                  <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{$console->name}}">
                  </div>
                  <div class="mb-3">
                      <label for="producer" class="form-label">Produttore</label>
                      <input type="text" class="form-control" name="producer" id="producer" aria-describedby="emailHelp" value="{{$console->producer}}">
                  </div>
                  <div class="mt-3 text-center">
                    <label for="actualLogo" class="form-label">Immagine attuale</label> <br>
                    <img width="300" src="{{Storage::url($console->logo)}}" alt="">
                  </div>
                  <div class="mb-3">
                    <label for="logo" class="form-label">Inserisci immagine</label>
                    <input type="file" class="form-control" name="logo" id="logo" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="description" class="form-label">Descrizione</label>
                      <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$console->description}}</textarea>
                  </div>
                  <div class="d-flex justify-content-end">
                      <button type="submit" class="btn btn-primary bg-warning">Modifica</button>
                      <a href="{{route('console.index')}}" type="submit" class="btn btn-danger">Torna Indietro</a>
                  </div>
                </form>
              
          </div>
      </div>
  </div>
  
</x-layout>