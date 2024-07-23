<x-layout>
    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-content-center">
                <div class="col-12 col-md-6 ">
                    <h1 class="text-center">Articoli salvati</h1>
                </div>
            </div>
        </div>
    </header>

    <x-display-message/>
    

    <div class="container">
        <div class="row">
            @if ($articles->count() == 0)
                <h2 class="text-center h2-custom vh-100 ">Non sono presenti prodotti</h2>
            @else
                @foreach ($articles as $article)
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="card my-3" style="width: 18rem;">
                            @if (!$article->img)
                                <img src="https://picsum.photos/200" class="card-img-top" alt="immmagine di default">
                            @else
                                <img src="{{ Storage::url($article->img) }}" class="card-img-top"
                                alt="prodotto inserito">
                            @endif
                            <div class="card-body ">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-subtitle">{{ $article->subtitle }}</p>
                                <p class="card-text">{{ $article->body }}</p>
                                <a href="{{route('article.show' , compact('article') )}}" class="btn btn-primary ">Dettaglio Articolo</a>
                                <a href="{{route('article.edit' , compact('article') )}}" class="btn btn-warning my-3">Modifica Articolo</a>

                                <form action="{{route('article.destroy' , compact('article') )}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit" >Elimina Articolo</button>
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>



</x-layout>
