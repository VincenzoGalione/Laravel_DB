<div class="card my-3" style="width: 18rem;">
    @if (!($product->img))
      <img src="https://picsum.photos/400" class="card-img-top" alt="immagine di default">
    @else
     <img src="{{Storage::url($product->img)}}" class="card-img-top" alt="prodotto inserito">
    @endif
    <div class="card-body">
      <h5 class="card-title">{{$product->name}}</h5>
      <p class="card-text">{{$product->description}}</p>
      <p class="card-text">Creato dall'utente {{$product->user->name}}</p>
      <p class="card-text">{{$product->price}} €</p>
      <a href="#" class="btn btn-primary  ">Visualizza Prodotto</a>

      @auth
      <form action="{{route('product.destroy' , compact('product') )}}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger my-2" type="submit" >Elimina Prodotto</button>
      </form>
      @endauth
    </div>
</div>