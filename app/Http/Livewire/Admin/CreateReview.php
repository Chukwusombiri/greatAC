<?php

namespace App\Http\Livewire\Admin;


use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateReview extends Component
{
    use WithFileUploads;

    public $client = '';
    public $occupation = '';
    public $photo;
    public $comment = '';

    protected function rules()
    {
        return [
            'client' => 'required|string|min:1',
            'occupation' => 'required|string|min:1',
            'photo' => 'required|image|max:2000',
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
            $review = new \App\Models\Review;
            $review->client = $this->client;
            $review->occupation = $this->occupation;
            $review->comment = $this->comment;
            $review->photo_path = $this->photo->storePublicly('reviews', 'public');
            $review->save();
            session()->flash('success', 'New reviews was added successfully.');
        } catch (\Throwable $th) {
            Log::error('Unable to create review: ' . $th->getMessage());
            session()->flash('error', 'Something went wrong! contact site manager.');
        }
    }

    public function render()
    {
        return view('livewire.admin.create-review');
    }
}
