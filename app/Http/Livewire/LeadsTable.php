<?php

namespace App\Http\Livewire;

use App\Models\NLead;
use Livewire\Component;

// use Livewire\Component;

class LeadsTable extends Component
{
    public $models;
    public $searchTerm = '';

    protected $listeners = ['search' => 'search', 'statusChanged' => 'statusChanged', 'sourceChanged', 'dateChanged'];
    // protected $listeners = ['courseChanged' => 'courseChanged'];

    public function search($s)
    {
        $leads = NLead::with('customer', 'Source', 'Status')
            ->whereHas('customer', function ($query) use ($s) {
                $query->where('name', 'like', "%$s%");
            })->paginate(4);
        $this->models = $leads->items();
    }
    public function updatedCourseId($value)
    {
        // do something with $value
    }
    public function mount($models)
    {
        $this->models = $models;
    }


    public function statusChanged($value)
    {
        $leads = NLead::with('customer', 'Source', 'Status')
            ->whereHas('Status', function ($query) use ($value) {
                $sum = $value + 1;
                $query->where('id', "$sum");
            })->paginate(4);
        $this->models = $leads->items();
    }
    public function sourceChanged($value)
    {
        $leads = NLead::with('customer', 'Source', 'Status')
            ->whereHas('Source', function ($query) use ($value) {
                $sum = $value + 1;
                $query->where('id', "$sum");
            })->paginate(4);
        $this->models = $leads->items();
    }
    public function dateChanged($value)
    {
        $leads = NLead::with('customer', 'Source', 'Status')
            ->whereHas('customer', function ($query) use ($value) {

                $query->whereDate('created_at', $value);
            })->paginate(4);

        // ->paginate(5);
        $this->models = $leads->items();
    }

    public function render()
    {
        return view('livewire.leads-table');
    }
}
