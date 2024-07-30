<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class EditArticle extends Component
{

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

    public function mount()
    {
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body =$this->article->body;
    }

    public function updateArticle()
    {
        $this->validate();

        // Article::create([
        //     'title' => $this->title,
        //     'subtitle' => $this->subtitle,
        //     'body' => $this->body,
        // ]);
        $this->article->update([
               'title' => $this->title,
             'subtitle' => $this->subtitle,
             'body' => $this->body,
        ]);

        $this->reset();

        session(null)->flash('message', 'Articolo modificato correttamente');
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}
