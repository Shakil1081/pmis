@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employeeListDetail.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-list-details.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.id') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.general_information') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->general_information->employeeid ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.education_informatione') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->education_informatione }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.professionale') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->professionale }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.addressdetailes') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->addressdetailes }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.emergence_contactes') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->emergence_contactes }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.spouse_informatione') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->spouse_informatione }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.children') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->children }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.job_historie') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->job_historie }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.employee_promotion') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->employee_promotion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.leave_records') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->leave_records }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.service_particular') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->service_particular }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.trainings') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->trainings }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.travel_records') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->travel_records }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.foreign_travel_personals') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->foreign_travel_personals }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.social_ass_pr_attachments') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->social_ass_pr_attachments }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.publications') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->publications }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.awards') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->awards }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.other_service_jobs') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->other_service_jobs }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.languages') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->languages }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.criminal_prosecutiones') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->criminal_prosecutiones }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.criminalpro_disciplinaries') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->criminalpro_disciplinaries }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeListDetail.fields.acr_monitorings') }}
                        </th>
                        <td>
                            {{ $employeeListDetail->acr_monitorings }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-list-details.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection