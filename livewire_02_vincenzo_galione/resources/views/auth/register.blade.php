<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center mt-5" >
            <div class="col-12">
                <h1 class="display-5 text-center">Registrati!</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <form action="{{route('register')}}" method="POST" >
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Nome:</label>
                      <input type="text" class="form-control" id="name" name='name'>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name='email'>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password:</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label"> Conferma Password:</label>
                        <input type="password" class="form-control" id="password_confrmation" name="password_confirmation">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Registrati</button>
                        </div>
                        <div class="col-6">
                            <p>Hai già un account? <a href="{{route('login')}}" class="btn btn-outline-warning">Fai il Login</a></p>
                        </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>

</x-layout>