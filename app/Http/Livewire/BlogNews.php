<?php

namespace App\Http\Livewire;

use App\Services\NewsService;
use Livewire\Component;

class BlogNews extends Component
{
    public $blogs = [];
    protected $newsObject;
    
    public function mount(NewsService $news){
        $this->newsObject = $news;
        $this->blogs = $this->newsObject->getlatestNews();
    }

    public function refreshComponent()
    {        
        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.blog-news');
    }
}
