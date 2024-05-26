@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employeeList.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-lists.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.employeeid') }}
                        </th>
                        <td>
                            {{ $employeeList->employeeid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.cadreid') }}
                        </th>
                        <td>
                            {{ $employeeList->cadreid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.batch') }}
                        </th>
                        <td>
                            {{ $employeeList->batch->batch_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.fullname_bn') }}
                        </th>
                        <td>
                            {{ $employeeList->fullname_bn }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.fullname_en') }}
                        </th>
                        <td>
                            {{ $employeeList->fullname_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.fname_bn') }}
                        </th>
                        <td>
                            {{ $employeeList->fname_bn }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.fname_en') }}
                        </th>
                        <td>
                            {{ $employeeList->fname_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.mname_bn') }}
                        </th>
                        <td>
                            {{ $employeeList->mname_bn }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.mname_en') }}
                        </th>
                        <td>
                            {{ $employeeList->mname_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.date_of_birth') }}
                        </th>
                        <td>
                            {{ $employeeList->date_of_birth }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.birth_certificate_upload') }}
                        </th>
                        <td>
                            @if($employeeList->birth_certificate_upload)
                                <a href="{{ $employeeList->birth_certificate_upload->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.prl_date') }}
                        </th>
                        <td>
                            {{ $employeeList->prl_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.height') }}
                        </th>
                        <td>
                            {{ $employeeList->height }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.special_identity') }}
                        </th>
                        <td>
                            {{ $employeeList->special_identity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.home_district') }}
                        </th>
                        <td>
                            {{ $employeeList->home_district->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.marital_statu') }}
                        </th>
                        <td>
                            {{ $employeeList->marital_statu->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.gender') }}
                        </th>
                        <td>
                            {{ $employeeList->gender->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.religion') }}
                        </th>
                        <td>
                            {{ $employeeList->religion->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.blood_group') }}
                        </th>
                        <td>
                            {{ $employeeList->blood_group->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.nid') }}
                        </th>
                        <td>
                            {{ $employeeList->nid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.nid_upload') }}
                        </th>
                        <td>
                            @if($employeeList->nid_upload)
                                <a href="{{ $employeeList->nid_upload->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.passport') }}
                        </th>
                        <td>
                            {{ $employeeList->passport }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.passport_upload') }}
                        </th>
                        <td>
                            @if($employeeList->passport_upload)
                                <a href="{{ $employeeList->passport_upload->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.license_type') }}
                        </th>
                        <td>
                            {{ $employeeList->license_type->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.license_upload') }}
                        </th>
                        <td>
                            @if($employeeList->license_upload)
                                <a href="{{ $employeeList->license_upload->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.email') }}
                        </th>
                        <td>
                            {{ $employeeList->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.mobile_number') }}
                        </th>
                        <td>
                            {{ $employeeList->mobile_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.projectrevenue') }}
                        </th>
                        <td>
                            {{ $employeeList->projectrevenue->project_revenue_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.joiningexaminfo') }}
                        </th>
                        <td>
                            {{ $employeeList->joiningexaminfo->exam_name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.departmental_exam') }}
                        </th>
                        <td>
                            {{ $employeeList->departmental_exam->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.project') }}
                        </th>
                        <td>
                            {{ $employeeList->project->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.certificate_upload') }}
                        </th>
                        <td>
                            @if($employeeList->certificate_upload)
                                <a href="{{ $employeeList->certificate_upload->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.grade') }}
                        </th>
                        <td>
                            {{ $employeeList->grade->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.fjoining_date') }}
                        </th>
                        <td>
                            {{ $employeeList->fjoining_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.first_joining_office_name') }}
                        </th>
                        <td>
                            {{ $employeeList->first_joining_office_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.first_joining_g_o_date') }}
                        </th>
                        <td>
                            {{ $employeeList->first_joining_g_o_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.first_joining_memo_no') }}
                        </th>
                        <td>
                            {{ $employeeList->first_joining_memo_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.first_joining_order') }}
                        </th>
                        <td>
                            @if($employeeList->first_joining_order)
                                <a href="{{ $employeeList->first_joining_order->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.fjoining_letter') }}
                        </th>
                        <td>
                            @if($employeeList->fjoining_letter)
                                <a href="{{ $employeeList->fjoining_letter->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.date_of_gazette') }}
                        </th>
                        <td>
                            {{ $employeeList->date_of_gazette }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.date_of_gazette_if_any') }}
                        </th>
                        <td>
                            @if($employeeList->date_of_gazette_if_any)
                                <a href="{{ $employeeList->date_of_gazette_if_any->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.date_of_regularization') }}
                        </th>
                        <td>
                            {{ $employeeList->date_of_regularization }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.regularization_issue_date') }}
                        </th>
                        <td>
                            {{ $employeeList->regularization_issue_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.regularization_office_orde_go') }}
                        </th>
                        <td>
                            @if($employeeList->regularization_office_orde_go)
                                <a href="{{ $employeeList->regularization_office_orde_go->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.date_of_con_serviec') }}
                        </th>
                        <td>
                            {{ $employeeList->date_of_con_serviec }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.confirmation_in_service') }}
                        </th>
                        <td>
                            @if($employeeList->confirmation_in_service)
                                <a href="{{ $employeeList->confirmation_in_service->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.quota') }}
                        </th>
                        <td>
                            {{ $employeeList->quota->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.electric_signature') }}
                        </th>
                        <td>
                            @if($employeeList->electric_signature)
                                <a href="{{ $employeeList->electric_signature->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $employeeList->electric_signature->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.employee_photo') }}
                        </th>
                        <td>
                            @if($employeeList->employee_photo)
                                <a href="{{ $employeeList->employee_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $employeeList->employee_photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.freedomfighter') }}
                        </th>
                        <td>
                            {{ $employeeList->freedomfighter->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeList.fields.license_number') }}
                        </th>
                        <td>
                            {{ $employeeList->license_number }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-lists.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection