<?php

namespace App\Http\Livewire\Walls;

use App\Models\Wall;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $wallId;
    public $name;
    public $description;
    public $logo;
    public $thankyou_title = 'Thank you!';
    public $thankyou_message = 'Thank you so much for your shoutout! It means a lot to me! 🙏';
    private $url;
    public Wall $wall;

    protected $rules = [
        'wall.name' => 'required|min:3',
        'wall.description' => '',
        'logo' => 'nullable|image|max:1024',
        'wall.thankyou_page.title' => 'required',
        'wall.thankyou_page.message' => ''
    ];

    protected $messages = [
        'thankyou_page.title.required' => 'The Thank you title cannot be empty.',
    ];

    public function mount()
    {
        
    }

    public function render()
    {
        return view('livewire.walls.edit');
    }

    public function submit()
    {
        $this->validate();

        if($this->logo){
            $this->wall->logo = explode('/', $this->logo->store('public/images'))[2];
        }

        $this->wall->update();

        return redirect()->route('walls.show', ['id' => $this->wall->_id]);
    }
}
