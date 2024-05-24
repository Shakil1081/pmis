<?php

namespace App\Http\Livewire;

use App\Models\Joininginfo;
use Livewire\Component;

class ProjectRevenue extends Component
{


    public $joininginfo;
    public function render()
    {

        $joininginfoData = Joininginfo::all();
        return view('livewire.project-revenue',[
            'joininginfo'=>$joininginfoData
        ]);
    }

    public function onSelectChange($value)
    {
        $this->joininginfo = $value; ;
    }
}
