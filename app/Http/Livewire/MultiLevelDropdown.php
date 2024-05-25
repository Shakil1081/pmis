<?php

namespace App\Http\Livewire;
// Inside your Livewire component class

use App\Models\Division;
use App\Models\ForestBeat;
use App\Models\ForestDivision;
use App\Models\ForestRange;
use App\Models\ForestState;
use Livewire\Component;
use App\Models\OfficeUnit;

class MultiLevelDropdown extends Component
{
    public $selectedLevel1;
    
    public $selectedValue;
    public $selectedLevel2; 
    public $range; 
    public $selectedValue2;
    public $onSelctDivision;
    public $onSelctDivisionmodel;
    public $onSelctducusionRange;
    public $beatSFPCCamp;
    public $beat;
    public $beatList;
    public $rangeForbeat;
    public $beatlistshow;
    public $institution;
    public $institutionother;
    public $fsit;
    public $division;
    public $circlelistid;
    



    public function render()
    {
        // Load options for the first level
        $optionsLevel1 = OfficeUnit::orderBy('name_en')->get();
        $circle_lists = ForestState::all();

        return view('livewire.multi-level-dropdown', [
            'optionsLevel1' => $optionsLevel1,
            'circle_lists'=> $circle_lists,
        ]);
    }

    public function onSelectChange($value)
    {
        $this->selectedValue = $value;
        $this->selectedLevel2 ='0'; 
        $this->selectedValue2 ='0';
        $this->onSelctDivision ='0';
        $this->onSelctDivisionmodel ='0';
        $this->onSelctducusionRange ='0';
        $this->beatSFPCCamp ='0';
        $this->beat ='0';
        $this->rangeForbeat ='0';
        $this->beatlistshow ='0';
        $this->institution ='0';
        $this->institutionother ='0';
        $this->fsit='0';
    }
    public function onSelectChangel2($value)
    {
        // Update the selectedValue property with the selected value
        $this->selectedValue2 = $value;
          
        //   if ($value == 'Division') {
        //     // Example: Fetch options for Level 2 from a model where level_1_id is $value
        //     $this->optionsLevel2 = Division::where('level_1_id', $value)->get();
        // } else {
        //     // Reset options for Level 2 if Level 1 value is not 2
        //     $this->optionsLevel2 = [];
        // }
    }

    public function onSelectcirclelistid($value){
        $this->division = ForestDivision::where('forest_state_id',$value)->get();
    }
    public function onSelctDivision($value)
    {       
        $this->onSelctDivision = $value;  
        $this->range = ForestRange::where('forest_state_id',$value)->get();
       
    }
    public function onducusionRange($value)
    {
        $this->onSelctducusionRange = $value;         
       
    }
    public function onbeatSFPCCamp($value)
    {
        $this->beatSFPCCamp= $value;
        $this->rangeForbeat = $value;          
    }
    
    public function onbeat($value)
    {
        $this->beat = $value; 
        $this->beatList = ForestBeat::where('forest_range_id',$value)->get();                
       
    }
    public function oninstitution($value)
    {
        $this->institution = $value; 
        //$this->beatList = ForestBeat::where('forest_range_id',$value)->get();                
       
    }
    public function oninstitutionother($value)
    {
        $this->institution = $value; 
        //$this->beatList = ForestBeat::where('forest_range_id',$value)->get();                
       
    }
    public function onfsit($value)
    {
        $this->fsit = $value; 
        //$this->beatList = ForestBeat::where('forest_range_id',$value)->get();                
       
    }
}
