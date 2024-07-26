<x-layout>
    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-content-center">
                <div class="col-12 col-md-6 ">
                    <h1 class="text-center">Prodotti salvati</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            @if ($products->count()== 0)  
                <h2 class="text-center h2-custom vh-100 ">Non sono presenti prodotti</h2>
            @else  
                @foreach ($products as $product)
                    <div class="col-12 col-lg-4 col-md-6">
                        <x-card
                        :product="$product"
                        /> 
                    </div>
                @endforeach      
            @endif
        </div>
    </div>



</x-layout>
