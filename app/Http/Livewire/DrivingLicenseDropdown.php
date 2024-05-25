<?php

namespace App\Http\Livewire;

use App\Models\LicenseType;
use Livewire\Component;

class DrivingLicenseDropdown extends Component
{

    public $hasDrivingLicense;
    public $selectedLicense;
     
    public function render()
    {

        $licenses = LicenseType::all();
        return view('livewire.driving-license-dropdown',[
            'licenses'=>$licenses
        ]);
    }

    public function onhasDrivingLicense($value){
        $this->hasDrivingLicense=$value;
    }
    public function onselectedLicense($value){
        $this->selectedLicense=$value;
    }
}
