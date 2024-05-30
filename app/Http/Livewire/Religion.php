<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use App\Models\Religion as ReligionModel;

class Religion extends Component
{
    public $religionId;

    public function render()
    {
        $locale = App::getLocale();
        $columnName = $locale === 'bn' ? 'name_bn' : 'name_en';
        $religions = ReligionModel::pluck($columnName, 'id')->prepend(trans('global.pleaseSelect'), '')->toArray();

        return view('livewire.religion', [
            'religions' => $religions
        ]);
    }

    public function onreligionId($value)
    {
        $this->religionId = $value;
        $this->emit('refreshComponent');
   
    }
}
