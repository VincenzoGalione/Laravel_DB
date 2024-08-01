<div>
    <form  enctype="multipart/form-data" wire:submit.prevent="articleUpdate">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">Nome:</label>
            <input type="text" id="title" wire:model="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Descrizione:</label>
            <textarea  id="body" cols="30" rows="10" class="form-control" wire:model="body"></textarea>
        </div>
        <div class="mb-3">
            @if ($article->img)
            <span  class="form-label">Immagine attuale:</span>
            <img width="400" height="300" src="{{Storage::url($article->img)}}" alt="{{$article->title}}">     
            @else
            <p class= "text-center fw-bold">L'articolo non ha un immagine</p>
            @endif
        </div>
        
        <div class="mb-3">
            <label for="img">Inserisci immagine:</label>
            <input type="file" wire:model="img" class="form-control">
        </div>
        <div class="mb-5 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Modifica</button>
        </div>
    </form>
</div>
