<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EmployeeList as EmployeeListModel;

class EmployeeList extends Component
{
    public $data;
    public $searchQuery = '';
    

    public function mount()
    {
        $this->loadData();
    }

    public function render()
    {
        return view('livewire.employee-list');
    }

    public function loadData()
    {
        $query = EmployeeListModel::with('jobhistories.designation')->whereNotNull('approve');

        if ($this->searchQuery) {
            $query->where(function ($query) {
                $query
                
                ->Where('fullname_bn', 'like', '%' .$this->searchQuery . '%')
                  ->orWhere('fullname_en', 'like', '%' .$this->searchQuery . '%')
                  ->orWhere('employeeid', 'like', '%' .$this->searchQuery . '%')
                  ->orWhere('nid', 'like', '%' .$this->searchQuery . '%')
                  ->orWhere('cadreid', 'like', '%' .$this->searchQuery . '%')
                  ->orWhere('mobile_number', 'like', '%' .$this->searchQuery . '%');
            });
        }

        $this->data['allresult'] = $query->paginate(10);
        $this->data['total'] = EmployeeListModel::count();
    }

    // Listen for changes in the searchQuery property
    public function updatedSearchQuery()
    {
        $this->loadData();
    }
}

