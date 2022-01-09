<?php

namespace App\Http\Livewire\Front;

use App\Models\Testimonial;
use App\Models\Wall;
use Livewire\Component;

class CreateTestimonialModal extends Component
{
    public $wallId;
    public $username;
    public $wall;
    public $displayingFormModal = false;
    public $displayingThankyouModal = false;
    public $show = true;
    public $name, $email, $text, $title;

    protected $rules = [
        'text' => 'required|min:10',
        'name' => 'required|min:3',
        'email' => 'required|email',
        'title' => 'required|min:3'
    ];

    public function mount()
    {
        $this->wall = Wall::where('_id', $this->wallId)
            ->where('username', $this->username)
            ->first();
            // dd($this->wall);
    }

    public function render()
    {
        return view('livewire.front.create-testimonial-modal');
    }

    public function submit()
    {
        $this->validate();

        $testimonial = Testimonial::create([
            'text' => $this->text,
            'user.name' => $this->name,
            'user.email' => $this->email,
            'user.title' => $this->title,
            'user.avatar' => '',
            'wall_id' => $this->wallId,
            'is_approved' => false
        ]);

        $this->displayingFormModal = false;
        $this->displayingThankyouModal = true;
    }
}
