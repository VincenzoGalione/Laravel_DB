<x-layout>
    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-content-center">
                <div class="col-12 col-md-6 ">
                    <h1 class="text-center">Articolo: {{$article->title}} </h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            @if ($article->count() == 0)
                <h2 class="text-center h2-custom vh-100 ">Non sono presenti prodotti</h2>
            @else
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="card my-3" style="width: 18rem;">
                        @if (!$article->img)
                            <img src="public/img/default.webp" class="card-img-top" alt="immmagine di default">
                        @else
                            <img src="{{ Storage::url($article->img) }}" class="card-img-top"
                                alt="articolo inserito">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-subtitle">{{ $article->subtitle }}</p>
                            <p class="card-text">{{ $article->body }}</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>



</x-layout>
