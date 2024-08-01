<x-layout>

<div class="container mb-5">
    <div class="row justify-content-center my-5">
        <div class="col-12">
            <h1 class="text-center">Dettagli dell'articolo: {{$article->title}}</h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6 d-flex justify-content-center">
            <h2>{{ $article->body}}</h2>
        </div>
        <div class="col-12 col-md-6">
            <img src="{{$article->img ? Storage::url($article->img) : 'https://picsum.photos/600'}}" alt="immagine articolo " class="mx-auto rounded shadow height-custom">
        </div>
    </div>
    @auth
        @if (Auth::id() == $article->user->id)
            <div class="row justify-content-around mt-5">
                <div class="col-6 flex-column align-items-center">
                  <livewire:article-delete :article='$article'>
                </div>
                <div class="col-6">
                    <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning">Modifica articolo</a>
                </div>
                
            </div>
        @endif
    @endauth
    
</div>

</x-layout>
