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
        <div class="row">
            @foreach ($products as $product)
                <div class="col-12 col-md-4">
                    <div class="card my-4" style="width: 18rem;">
                        <div class="card-body text-bg-primary rounded-2">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{$product->price}}€</h6>
                            <p class="card-text">{{$product->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



</x-layout>
