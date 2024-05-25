<?php

namespace App\Http\Livewire;

use App\Models\ExamBoard;
use App\Models\ExamDegree;
use App\Models\Examination;
use App\Models\ResultGroup;
use App\Models\Result;
use Livewire\Component;

class EducationForm extends Component
{

    public $levelofEducation;
    public $name_of_exams;
    public $nameOfExam;
    public $exambordlist;
    public $resultGroup;
    public $result;
    public $resultlist;
    public function render()
    {

        $examinations=Examination::all();
        return view('livewire.education-form',[
            'examinations'=>$examinations
        ]);
    }
    public function onlevelofEducation($value){
        $this->levelofEducation=$value;
        $this->name_of_exams=ExamDegree::where('examination_id',$value)->get();
    }
    public function onnameOfExam($value){
        $this->nameOfExam=$value;
        $this->exambordlist=ExamBoard::all();
        $this->resultGroup=ResultGroup::all();
    }
    public function onresult($value){
        $this->result=$value;
        $this->resultlist=Result::where('resultgroup_id',$value)->get();
    }
}
