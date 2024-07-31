<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class CreateArticle extends Component
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

    public $image;
    public $user_id;


    public function store()
    {   
       
        $this->validate();

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'img'=> $this->image->store(path: 'public/imgs')
        ]);

        // $this->reset();
        


        session(null)->flash('message', 'Articolo creato correttamente');
    }
    
    protected function clearForm(){
        $this->title="";
        $this->subtitle="";
        $this->body="";
        
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
