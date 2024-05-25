<?php

namespace App\Http\Livewire;

use App\Models\Grade;
use App\Models\Joininginfo;
use App\Models\Project;
use App\Models\ProjectRevenueExam;
use App\Models\ProjectRevenuelone;
use Livewire\Component;

class ProjectRevenue extends Component
{


    public $joininginfo;
    public $projectRevenueall;
    public $revenueType;
    public $departmentalOrDepartmental;
    public $exampass;
    public $projectRevenueExam;
    public function render()
    {

        $joininginfoData = Joininginfo::all();
        $projects = Project::all();
        $grades = Grade::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

       // dd( $joininginfoData);
        return view('livewire.project-revenue',[
            'joininginfoData'=>$joininginfoData,
            'projects'=>$projects,
            'grades'=>$grades
        ]);
    }

    public function onSelectChange($value)
    {
        $this->joininginfo = $value;

    $this->revenueType='';
      $this->departmentalOrDepartmental='';
     $this->exampass='';

        $this->projectRevenueall = ProjectRevenuelone::where('project_revenue_id',$value)->get();
    }
    public function onSelectrevenueType($value)
    {
        $this->revenueType = $value;
        $this->projectRevenueExam = ProjectRevenueExam::where('exam_id',$value)->get();
        
     
    }
    public function onSelectdepartmentalOrDepartmental($value)
    {
        $this->departmentalOrDepartmental = $value;
     
    }
    public function onSelectexampass($value)
    {
        $this->exampass = $value;
     
    }
}
