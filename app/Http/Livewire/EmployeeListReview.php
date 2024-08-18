<?php
namespace App\Http\Livewire;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Models\EmployeeList;

class EmployeeListReview extends Component
{
    use WithPagination;

    public $search = '';
    public $flashMessage = '';

    public function mount()
    {
        abort_if(Gate::denies('employee_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function approve($employeeId)
    {
        $employee = EmployeeList::find($employeeId);
        if ($employee) {
            $employee->approve = 'Approved';
            $employee->approveby = auth()->id();
            $employee->save();


            if (app()->getLocale() === 'bn'){

                $this->flashMessage = 'অনুমোদন সফলভাবে সম্পন্ন হয়েছে।';
        }else{
            $this->flashMessage = 'Employee approved successfully.';    
            
        }
           
        }
    }

    public function render()
    {
        $query = EmployeeList::with('jobhistories.designation')
            ->where(function ($query) {
                $query->whereNull('approve')
                    ->orWhere('approve', '');
            })
            ->where(function ($query) {
                $query->whereNull('approveby')
                    ->orWhere('approveby', '');
            });

        if ($this->search) {
            $query->where(function ($query) {
                $query->where('fullname_en', 'like', '%' . $this->search . '%')
                    ->orWhere('fullname_bn', 'like', '%' . $this->search . '%')
                    ->orWhere('employeeid', 'like', '%' . $this->search . '%');
            });
        }

        $data['allresult'] = $query->paginate(10);
        $data['total'] = EmployeeList::count();

        return view('livewire.employee-list-review', ['data' => $data]);
    }
}
