<x-layout>
    <x-navbar />
    <x-header>
        <h1>
            Accedi
        </h1>
    </x-header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-3  m-5 shadow" method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" name="remember" class="form-check-input" id="remember">
                      <label class="form-check-label" for="remember">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Log-in</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>