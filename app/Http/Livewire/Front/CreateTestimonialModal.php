<?php

namespace App\Http\Livewire\Front;

use App\Models\Testimonial;
use App\Models\Wall;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateTestimonialModal extends Component
{
    use WithFileUploads;

    public $wallId;
    public $username;
    public $wall;
    public $displayingFormModal = false;
    public $displayingThankyouModal = false;
    public $show = true;
    public $name, $email, $text, $title, $avatar;
    public $url = '';

    protected $rules = [
        'text' => 'required|min:10',
        'name' => 'required|min:3',
        'email' => 'required|email',
        'title' => 'required|min:3',
        'avatar' => 'nullable|image|max:1024'
    ];

    public function mount()
    {
        $this->wall = Wall::where('_id', $this->wallId)
            ->where('username', $this->username)
            ->first();
    }

    public function render()
    {
        return view('livewire.front.create-testimonial-modal');
    }

    public function submit()
    {
        $this->validate();

        if($this->avatar)
        {
            $this->url = explode('/', $this->avatar->store('public/images'))[2];
        }

        Testimonial::create([
            'text' => $this->text,
            'user.name' => $this->name,
            'user.email' => $this->email,
            'user.title' => $this->title,
            'user.avatar' => $this->url,
            'wall_id' => $this->wallId,
            'is_approved' => false
        ]);

        $this->displayingFormModal = false;
        $this->displayingThankyouModal = true;

        $this->reset('text', 'name', 'email', 'avatar', 'title');
    }
}
