<div>
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                <form class="shadow p-5 rounded-5 bg-body-secondary" wire:submit="store">
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo Articolo</label>
                      <input wire:model.blur="title" type="text" class="form-control" id="title">
                      <div class="text-danger">@error('title') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                      <label for="title" class="form-label">Sottotitolo</label>
                      <input wire:model.blur="subtitle" type="text" class="form-control" id="title">
                      <div class="text-danger">@error('subtitle') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                      <label for="body" class="form-label">Corpo Articolo</label>
                      <textarea wire:model.blur="body" class="form-control" cols="20" rows="7" id="body"></textarea>
                      <div class="text-danger">@error('body') {{ $message }} @enderror</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Crea Articolo</button>
                </form>
            </div>
        </div>
    </div>
</div>
