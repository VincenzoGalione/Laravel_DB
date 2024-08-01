<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleDelete extends Component
{
    public $article;
   
    public function deleteArticle(){
        if ($this->article->user->id == Auth::id()) {
            $articleName = $this->article->title;
            if ($this->article->img !=null) {
                Storage::delete($this->article->img);
            }
            $this->article->delete();
            return redirect()->route('homepage')->with('successMessage', 'Articolo " ' . $articleName . '"eliminato');
        }else{
            return redirect()->route('homepage')->with('errorMessage', 'Non sei autorizzato a fare questa operazione');

        }
    }


    public function render()
    {
        return view('livewire.article-delete');
    }
}
