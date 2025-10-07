<?php

namespace App\Http\Livewire\Admin;

use App\Models\Review;
use Livewire\Component;
use Livewire\WithPagination;

class ShowReviews extends Component
{
    use WithPagination;

    
    public function render()
    {
        return view('livewire.admin.show-reviews',[
            'reviews' => Review::orderByDesc('created_at')->paginate(8),
        ]);
    }
}
