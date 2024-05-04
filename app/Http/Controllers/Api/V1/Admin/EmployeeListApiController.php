<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreEmployeeListRequest;
use App\Http\Requests\UpdateEmployeeListRequest;
use App\Http\Resources\Admin\EmployeeListResource;
use App\Models\EmployeeList;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeListApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('employee_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeListResource(EmployeeList::with(['home_district', 'marital_statu', 'gender', 'religion', 'blood_group', 'license_type', 'joiningexaminfo', 'grade', 'quota'])->get());
    }

    public function store(StoreEmployeeListRequest $request)
    {
        $employeeList = EmployeeList::create($request->all());

        if ($request->input('nid_upload', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('nid_upload'))))->toMediaCollection('nid_upload');
        }

        if ($request->input('passport_upload', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('passport_upload'))))->toMediaCollection('passport_upload');
        }

        if ($request->input('license_upload', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('license_upload'))))->toMediaCollection('license_upload');
        }

        if ($request->input('first_office_order_letter', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('first_office_order_letter'))))->toMediaCollection('first_office_order_letter');
        }

        if ($request->input('fjoining_letter', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('fjoining_letter'))))->toMediaCollection('fjoining_letter');
        }

        if ($request->input('date_of_gazette_if_any', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('date_of_gazette_if_any'))))->toMediaCollection('date_of_gazette_if_any');
        }

        if ($request->input('regularization_office_orde_go', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('regularization_office_orde_go'))))->toMediaCollection('regularization_office_orde_go');
        }

        if ($request->input('electric_signature', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('electric_signature'))))->toMediaCollection('electric_signature');
        }

        if ($request->input('employee_photo', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('employee_photo'))))->toMediaCollection('employee_photo');
        }

        return (new EmployeeListResource($employeeList))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EmployeeList $employeeList)
    {
        abort_if(Gate::denies('employee_list_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeListResource($employeeList->load(['home_district', 'marital_statu', 'gender', 'religion', 'blood_group', 'license_type', 'joiningexaminfo', 'grade', 'quota']));
    }

    public function update(UpdateEmployeeListRequest $request, EmployeeList $employeeList)
    {
        $employeeList->update($request->all());

        if ($request->input('nid_upload', false)) {
            if (! $employeeList->nid_upload || $request->input('nid_upload') !== $employeeList->nid_upload->file_name) {
                if ($employeeList->nid_upload) {
                    $employeeList->nid_upload->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('nid_upload'))))->toMediaCollection('nid_upload');
            }
        } elseif ($employeeList->nid_upload) {
            $employeeList->nid_upload->delete();
        }

        if ($request->input('passport_upload', false)) {
            if (! $employeeList->passport_upload || $request->input('passport_upload') !== $employeeList->passport_upload->file_name) {
                if ($employeeList->passport_upload) {
                    $employeeList->passport_upload->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('passport_upload'))))->toMediaCollection('passport_upload');
            }
        } elseif ($employeeList->passport_upload) {
            $employeeList->passport_upload->delete();
        }

        if ($request->input('license_upload', false)) {
            if (! $employeeList->license_upload || $request->input('license_upload') !== $employeeList->license_upload->file_name) {
                if ($employeeList->license_upload) {
                    $employeeList->license_upload->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('license_upload'))))->toMediaCollection('license_upload');
            }
        } elseif ($employeeList->license_upload) {
            $employeeList->license_upload->delete();
        }

        if ($request->input('first_office_order_letter', false)) {
            if (! $employeeList->first_office_order_letter || $request->input('first_office_order_letter') !== $employeeList->first_office_order_letter->file_name) {
                if ($employeeList->first_office_order_letter) {
                    $employeeList->first_office_order_letter->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('first_office_order_letter'))))->toMediaCollection('first_office_order_letter');
            }
        } elseif ($employeeList->first_office_order_letter) {
            $employeeList->first_office_order_letter->delete();
        }

        if ($request->input('fjoining_letter', false)) {
            if (! $employeeList->fjoining_letter || $request->input('fjoining_letter') !== $employeeList->fjoining_letter->file_name) {
                if ($employeeList->fjoining_letter) {
                    $employeeList->fjoining_letter->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('fjoining_letter'))))->toMediaCollection('fjoining_letter');
            }
        } elseif ($employeeList->fjoining_letter) {
            $employeeList->fjoining_letter->delete();
        }

        if ($request->input('date_of_gazette_if_any', false)) {
            if (! $employeeList->date_of_gazette_if_any || $request->input('date_of_gazette_if_any') !== $employeeList->date_of_gazette_if_any->file_name) {
                if ($employeeList->date_of_gazette_if_any) {
                    $employeeList->date_of_gazette_if_any->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('date_of_gazette_if_any'))))->toMediaCollection('date_of_gazette_if_any');
            }
        } elseif ($employeeList->date_of_gazette_if_any) {
            $employeeList->date_of_gazette_if_any->delete();
        }

        if ($request->input('regularization_office_orde_go', false)) {
            if (! $employeeList->regularization_office_orde_go || $request->input('regularization_office_orde_go') !== $employeeList->regularization_office_orde_go->file_name) {
                if ($employeeList->regularization_office_orde_go) {
                    $employeeList->regularization_office_orde_go->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('regularization_office_orde_go'))))->toMediaCollection('regularization_office_orde_go');
            }
        } elseif ($employeeList->regularization_office_orde_go) {
            $employeeList->regularization_office_orde_go->delete();
        }

        if ($request->input('electric_signature', false)) {
            if (! $employeeList->electric_signature || $request->input('electric_signature') !== $employeeList->electric_signature->file_name) {
                if ($employeeList->electric_signature) {
                    $employeeList->electric_signature->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('electric_signature'))))->toMediaCollection('electric_signature');
            }
        } elseif ($employeeList->electric_signature) {
            $employeeList->electric_signature->delete();
        }

        if ($request->input('employee_photo', false)) {
            if (! $employeeList->employee_photo || $request->input('employee_photo') !== $employeeList->employee_photo->file_name) {
                if ($employeeList->employee_photo) {
                    $employeeList->employee_photo->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('employee_photo'))))->toMediaCollection('employee_photo');
            }
        } elseif ($employeeList->employee_photo) {
            $employeeList->employee_photo->delete();
        }

        return (new EmployeeListResource($employeeList))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EmployeeList $employeeList)
    {
        abort_if(Gate::denies('employee_list_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeList->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
