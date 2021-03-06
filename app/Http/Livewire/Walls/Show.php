<?php

namespace App\Http\Livewire\Walls;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    public string $wallId;
    public string $testimonialId;
    public ?Testimonial $viewTestimonial;
    public bool $confirmDeletion;
    public bool $confirmApproval;
    public bool $displayingViewModal = false;

    public function mount()
    {
        $this->viewTestimonial = null;
    }

    public function render()
    {
        return view('livewire.walls.show', [
            'testimonials' => $this->getData()
        ]);
    }

    public function getData()
    {
        return Testimonial::where('wall_id', $this->wallId)->orderBy('created_at')->paginate(5);
    }

    public function showTestimonial(string $id)
    {
        $this->viewTestimonial = Testimonial::find($id)->first();

        $this->displayingViewModal = true;
    }

    public function approve()
    {
        $testimonial = Testimonial::find($this->testimonialId);
        $testimonial->is_approved = true;
        $testimonial->update();

        $this->testimonialId = '';
        $this->confirmApproval = false;
        $this->dispatchBrowserEvent(
            'alert', ['type' => 'success',  'message' => 'Testimonial approved successfully!']
        );
        // flash_message('Testimonial approved successfully!', 'success');
    }

    public function approvalConfirmation(string $id)
    {
        $this->testimonialId = $id;
        $this->confirmApproval = true;
    }

    public function deleteConfirmation(string $id)
    {
        $this->testimonialId = $id;
        $this->confirmDeletion = true;
    }

    public function delete()
    {
        Testimonial::find($this->testimonialId)->delete();

        $this->testimonialId = '';
        $this->confirmDeletion = false;

        flash_message('Testimonial deleted successfully!', 'success');
    }
}
