<div class="vh-100">
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Sottotitolo</th>
                        <th scope="col">Gestisci</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article) 
                        <tr>
                          <th scope="row">{{$article->id}}</th>
                          <td>{{$article->title}}k</td>
                          <td>{{$article->subtitle}}</td>
                          <td>
                            <a href="{{route('articles.show', compact('article'))}}" class="btn btn-info">Mostra</a>
                            <a href="{{route('articles.edit', compact('article'))}}" class="btn btn-warning">Modifica</a>
                            <button wire:click='destroy({{$article}})' class="btn btn-danger">Elimina</button>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
