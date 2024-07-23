<x-layout>

    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-content-center">
                <div class="col-12 col-md-6 ">
                    <h1 class="text-center ">Registrati</h1>
                </div>
            </div>
        </div>
    </header>

    <x-display-errors/>


    <div class="container vh-100">
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{route('register')}}" method="POST" class="p-4 shadow rounded-4 bg-body-secondary ">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="texts" name="name" class="form-control" id="name" >
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confema Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
