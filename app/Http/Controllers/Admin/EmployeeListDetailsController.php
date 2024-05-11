<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmployeeListDetail;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeeListDetailsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_list_detail_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EmployeeListDetail::with(['general_information'])->select(sprintf('%s.*', (new EmployeeListDetail)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'employee_list_detail_show';
                $editGate      = 'employee_list_detail_edit';
                $deleteGate    = 'employee_list_detail_delete';
                $crudRoutePart = 'employee-list-details';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->addColumn('general_information_employeeid', function ($row) {
                return $row->general_information ? $row->general_information->employeeid : '';
            });

            $table->editColumn('general_information.fullname_bn', function ($row) {
                return $row->general_information ? (is_string($row->general_information) ? $row->general_information : $row->general_information->fullname_bn) : '';
            });
            $table->editColumn('education_informatione', function ($row) {
                return $row->education_informatione ? $row->education_informatione : '';
            });
            $table->editColumn('professionale', function ($row) {
                return $row->professionale ? $row->professionale : '';
            });
            $table->editColumn('addressdetailes', function ($row) {
                return $row->addressdetailes ? $row->addressdetailes : '';
            });
            $table->editColumn('emergence_contactes', function ($row) {
                return $row->emergence_contactes ? $row->emergence_contactes : '';
            });
            $table->editColumn('spouse_informatione', function ($row) {
                return $row->spouse_informatione ? $row->spouse_informatione : '';
            });
            $table->editColumn('children', function ($row) {
                return $row->children ? $row->children : '';
            });
            $table->editColumn('job_historie', function ($row) {
                return $row->job_historie ? $row->job_historie : '';
            });
            $table->editColumn('employee_promotion', function ($row) {
                return $row->employee_promotion ? $row->employee_promotion : '';
            });
            $table->editColumn('leave_records', function ($row) {
                return $row->leave_records ? $row->leave_records : '';
            });
            $table->editColumn('service_particular', function ($row) {
                return $row->service_particular ? $row->service_particular : '';
            });
            $table->editColumn('trainings', function ($row) {
                return $row->trainings ? $row->trainings : '';
            });
            $table->editColumn('travel_records', function ($row) {
                return $row->travel_records ? $row->travel_records : '';
            });
            $table->editColumn('foreign_travel_personals', function ($row) {
                return $row->foreign_travel_personals ? $row->foreign_travel_personals : '';
            });
            $table->editColumn('social_ass_pr_attachments', function ($row) {
                return $row->social_ass_pr_attachments ? $row->social_ass_pr_attachments : '';
            });
            $table->editColumn('publications', function ($row) {
                return $row->publications ? $row->publications : '';
            });
            $table->editColumn('awards', function ($row) {
                return $row->awards ? $row->awards : '';
            });
            $table->editColumn('other_service_jobs', function ($row) {
                return $row->other_service_jobs ? $row->other_service_jobs : '';
            });
            $table->editColumn('languages', function ($row) {
                return $row->languages ? $row->languages : '';
            });
            $table->editColumn('criminal_prosecutiones', function ($row) {
                return $row->criminal_prosecutiones ? $row->criminal_prosecutiones : '';
            });
            $table->editColumn('criminalpro_disciplinaries', function ($row) {
                return $row->criminalpro_disciplinaries ? $row->criminalpro_disciplinaries : '';
            });
            $table->editColumn('acr_monitorings', function ($row) {
                return $row->acr_monitorings ? $row->acr_monitorings : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'general_information']);

            return $table->make(true);
        }

        return view('admin.employeeListDetails.index');
    }

    public function show(EmployeeListDetail $employeeListDetail)
    {
        abort_if(Gate::denies('employee_list_detail_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeListDetail->load('general_information');

        return view('admin.employeeListDetails.show', compact('employeeListDetail'));
    }
}
