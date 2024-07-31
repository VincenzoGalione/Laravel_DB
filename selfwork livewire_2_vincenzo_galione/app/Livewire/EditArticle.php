<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class EditArticle extends Component
{
    use WithFileUploads;

    #[Validate('required', message: 'Il titolo è obbligatorio')]
    #[Validate('min:5', message: 'Il titolo deve contenere almeno 5 caratteri')]
    public $title = '';

    #[Validate('required', message: 'Il sottotitolo è obbligatorio')]
    #[Validate('min:5', message: 'Il sottotitolo deve contenere almeno 5 caratteri')] 
    public $subtitle = '';
    
    #[Validate('required', message: 'Il corpo dell articolo è obbligatorio')]
    #[Validate('min:5', message: 'Il corpo dell articolo deve contenere almeno 5 caratteri')]
    public $body;

    public $article;
    public $image;
    // public $oldimg;

    public function mount()
    {
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body =$this->article->body;
        // $this->oldimg=Storage::url($this->article->img);
    }

    public function updateArticle()
    {   

        $this->validate();

        $art=Article::find($this->article->id);


        $art->update([
               'title' => $this->title,
             'subtitle' => $this->subtitle,
             'body' => $this->body,
             
        ]);
        

        if ($this->image) {
            $art->update([
                'img'=>$this->image->store('public/imgs')
            ]);
            
        }

        $this->reset();

        session(null)->flash('message', 'Articolo modificato correttamente');

        return redirect(route('articles.index'));
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}
