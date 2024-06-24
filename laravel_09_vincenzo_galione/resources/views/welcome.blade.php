<x-layout>

    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-content-center">
                <div class="col-12 col-md-6 ">
                    <h1 class="text-center">Homepage</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row mt-5 justify-content-center my-5">
            <div class="col-12 col-md-6 justify-content-center">
                <form class=" rounded-3 shadow bg-secondary-subtle" action="{{route('product.store')}}"  method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Prodotto </label>
                        <input name="name" type="text" class="form-control" id="name"> 
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione Prodotto </label>
                        <textarea name="description"  class="form-control" id="description" cols="30" rows="10"></textarea> 
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo del prodotto</label>
                        <div class="d-flex align-items-center">
                            <input name="price" type="text" class="form-control  me-2" id="price"> <span class="me-1">€</span>     
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary ms-2 mb-2">Crea Prodotto</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
