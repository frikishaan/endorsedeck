<?php

namespace App\Http\Livewire\Walls;

use App\Models\Wall;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $logo;
    public $thankyou_title = 'Thank you!';
    public $thankyou_message = 'Thank you so much for your shoutout! It means a lot to me! 🙏';
    private $url;

    protected $rules = [
        'name' => 'required|min:3',
        'description' => '',
        'logo' => 'image|max:1024',
        'thankyou_title' => 'required'
    ];

    protected $messages = [
        'thankyou_title.required' => 'The Thank you title cannot be empty.',
    ];

    public function submit()
    {
        $this->validate();

        if($this->logo){
            $this->url = explode('/', $this->logo->store('logos'))[1];
        }

        $wall = Wall::create([
            'name' => $this->name,
            'user_id' => auth()->id(),
            'description' => $this->description ?? '',
            'logo' => $this->logo ? $this->url : '',
            'thankyou_page.title' => $this->thankyou_title ?? '',
            'thankyou_page.message' => $this->thankyou_message ?? ''
        ]);

        return redirect()->route('walls.show', ['id' => $wall->_id]);
    }

    public function render()
    {
        return view('livewire.walls.create');
    }
}
