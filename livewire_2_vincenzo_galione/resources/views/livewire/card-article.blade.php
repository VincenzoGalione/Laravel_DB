<div>
    <div class="container  my-5 container-custom">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-6   d-flex justify-content-center">
                <div class="card card-custom" style="width: 18rem;">
                    <div class="card-body d-flex a justify-content-center flex-column">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$article->subtitle}}</h6>
                    <p class="card-text">{{$article->body}}</p>
                    <a class="ancor" href="{{route('articles.index')}}" class="card-link">Torna indietro</a>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>
