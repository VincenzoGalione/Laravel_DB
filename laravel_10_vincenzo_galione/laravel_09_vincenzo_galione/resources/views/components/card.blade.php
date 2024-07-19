<div class="card my-3" style="width: 18rem;">
    @if (!($product->img))
      <img src="https://picsum.photos/200" class="card-img-top" alt="immmagine di default">
    @else
     <img src="{{Storage::url($product->img)}}" class="card-img-top" alt="prodotto inserito">
    @endif
    <div class="card-body">
      <h5 class="card-title">{{$product->name}}</h5>
      <p class="card-text">{{$product->description}}</p>
      <p class="card-text">{{$product->price}} €</p>
      <a href="#" class="btn btn-primary ">Visualizza Prodotto</a>
    </div>
</div>