<x-layout>

    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-content-center">
                <div class="col-12 col-md-6 ">
                    <h1 class="text-center">Inserisci un nuovo articolo</h1>
                </div>
            </div>
        </div>
    </header>

    <x-display-message/>
    <x-display-errors/>

    <div class="container">
        <div class="row mt-5 justify-content-center my-5">
            <div class="col-12 col-md-6 justify-content-center">
                <form class=" rounded-3 shadow bg-secondary-subtle" action="{{route('article.store')}}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo articolo </label>
                        <input name="title" value="{{old('title')}}" type="text" class="form-control" id="title"> 
                    </div>

                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo </label>
                        <input name="subtitle" type="text"  value="{{old('subtitle')}}" class="form-control" id="subtitle" >
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo </label>
                        <textarea name="body"  class="form-control" id="body" cols="30" rows="10">{{old('body')}}</textarea> 
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input name="img" type="file" class="form-control  me-2" id="img">       
                    </div>

                    <button type="submit" class="btn btn-primary ms-2 mb-2">Crea Articolo</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
