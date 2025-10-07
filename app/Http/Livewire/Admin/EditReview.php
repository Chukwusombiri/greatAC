<?php

namespace App\Http\Livewire\Admin;

use App\Models\Review;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditReview extends Component
{
    use WithFileUploads;

    public $client = '';
    public $occupation = '';
    public $photo;
    public $comment = '';
    public $review;

    public function mount($id)
    {        
        $this->review = Review::find($id);        
        $this->client = $this->review->client;
        $this->occupation = $this->review->occupation;
        $this->comment = $this->review->comment;
    }
    protected function rules()
    {
        return [
            'client' => 'required|string|min:1',
            'occupation' => 'required|string|min:1',
            'photo' => [Rule::excludeIf(!$this->photo),'image','max:2000'],
            'comment' => 'required|string|min:2',
        ];
    }

    function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    function save()
    {
        $this->validate();
        try {            
            $review = \App\Models\Review::find($this->review->id);
            $review->client = $this->client;
            $review->occupation = $this->occupation;
            $review->comment = $this->comment;
            $review->photo_path = $this->photo?->storePublicly('reviews', 'public') ?? $this->review->photo_path;
            $review->save();
            session()->flash('success', 'Reviews was updated successfully.');
        } catch (\Throwable $th) {
            Log::error('Unable to update review: ' . $th->getMessage());
            session()->flash('error', 'Something went wrong! contact site manager.');
        }
    }

    public function render()
    {
        return view('livewire.admin.edit-review');
    }
}
