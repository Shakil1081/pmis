@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenuemployeeshow')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                        <div>
                            <h3>General Information Content</h3>
                            <table class="table-bordered table-striped table">
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
                                            @if ($employeeList->birth_certificate_upload)
                                                <a href="{{ $employeeList->birth_certificate_upload->getUrl() }}"
                                                    target="_blank">
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
                                            @if ($employeeList->nid_upload)
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
                                            @if ($employeeList->passport_upload)
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
                                            @if ($employeeList->license_upload)
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
                                            {{ trans('cruds.employeeList.fields.joiningexaminfo') }}
                                        </th>
                                        <td>
                                            {{ $employeeList->joiningexaminfo->exam_name_bn ?? '' }}
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
                                            @if ($employeeList->first_joining_order)
                                                <a href="{{ $employeeList->first_joining_order->getUrl() }}"
                                                    target="_blank">
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
                                            @if ($employeeList->fjoining_letter)
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
                                            @if ($employeeList->date_of_gazette_if_any)
                                                <a href="{{ $employeeList->date_of_gazette_if_any->getUrl() }}"
                                                    target="_blank">
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
                                            @if ($employeeList->regularization_office_orde_go)
                                                <a href="{{ $employeeList->regularization_office_orde_go->getUrl() }}"
                                                    target="_blank">
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
                                            @if ($employeeList->confirmation_in_service)
                                                <a href="{{ $employeeList->confirmation_in_service->getUrl() }}"
                                                    target="_blank">
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
                                            @if ($employeeList->electric_signature)
                                                <a href="{{ $employeeList->electric_signature->getUrl() }}" target="_blank"
                                                    style="display: inline-block">
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
                                            @if ($employeeList->employee_photo)
                                                <a href="{{ $employeeList->employee_photo->getUrl() }}" target="_blank"
                                                    style="display: inline-block">
                                                    <img src="{{ $employeeList->employee_photo->getUrl('thumb') }}">
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                            <h4>Education</h4>
                            @foreach ($employeeList->educations as $educationInformatione)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.educationInformatione.fields.name_of_exam') }}
                                            </th>
                                            <td>
                                                {{ $educationInformatione->name_of_exam->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.educationInformatione.fields.exam_board') }}
                                            </th>
                                            <td>
                                                {{ $educationInformatione->exam_board->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.educationInformatione.fields.school_university_name') }}
                                            </th>
                                            <td>
                                                {{ $educationInformatione->school_university_name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.educationInformatione.fields.achivement') }}
                                            </th>
                                            <td>
                                                {{ $educationInformatione->achivement }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.educationInformatione.fields.passing_year') }}
                                            </th>
                                            <td>
                                                {{ $educationInformatione->passing_year }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.educationInformatione.fields.catificarte') }}
                                            </th>
                                            <td>
                                                @if ($educationInformatione->catificarte)
                                                    <a href="{{ $educationInformatione->catificarte->getUrl() }}"
                                                        target="_blank">
                                                        {{ trans('global.view_file') }}
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.educationInformatione.fields.employee') }}
                                            </th>
                                            <td>
                                                {{ $educationInformatione->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Action
                                            </th>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.education-informationes.edit', ['education_informatione' => $educationInformatione->id]) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.education-informationes.destroy', ['education_informatione' => $educationInformatione->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            @endforeach





                            <h4> Professionales</h4>

                            @foreach ($employeeList->educations as $professionale)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.professionale.fields.employee') }}
                                            </th>
                                            <td>
                                                {{ $professionale->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.professionale.fields.qualification_title') }}
                                            </th>
                                            <td>
                                                {{ $professionale->qualification_title }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.professionale.fields.institution') }}
                                            </th>
                                            <td>
                                                {{ $professionale->institution }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.professionale.fields.from_date') }}
                                            </th>
                                            <td>
                                                {{ $professionale->from_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.professionale.fields.to_date') }}
                                            </th>
                                            <td>
                                                {{ $professionale->to_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.professionale.fields.passing_year') }}
                                            </th>
                                            <td>
                                                {{ $professionale->passing_year }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Action
                                            </th>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.professionales.edit', ['professionale' => $professionale->id]) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.professionales.destroy', ['professionale' => $professionale->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            @endforeach


                            <h4> {{ trans('cruds.addressdetaile.title') }}</h4>

                            @foreach ($employeeList->addressdetailes as $addressdetaile)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.addressdetaile.fields.employee') }}
                                            </th>
                                            <td>
                                                {{ $addressdetaile->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.addressdetaile.fields.address_type') }}
                                            </th>
                                            <td>
                                                {{ App\Models\Addressdetaile::ADDRESS_TYPE_SELECT[$addressdetaile->address_type] ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.addressdetaile.fields.flat_house') }}
                                            </th>
                                            <td>
                                                {{ $addressdetaile->flat_house }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.addressdetaile.fields.post_office') }}
                                            </th>
                                            <td>
                                                {{ $addressdetaile->post_office }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.addressdetaile.fields.post_code') }}
                                            </th>
                                            <td>
                                                {{ $addressdetaile->post_code }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.addressdetaile.fields.thana_upazila') }}
                                            </th>
                                            <td>
                                                {{ $addressdetaile->thana_upazila->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.addressdetaile.fields.phone_number') }}
                                            </th>
                                            <td>
                                                {{ $addressdetaile->phone_number }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Action
                                            </th>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.addressdetailes.edit', ['addressdetaile' => $addressdetaile->id]) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.addressdetailes.destroy', ['addressdetaile' => $addressdetaile->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach
                            <h4>{{ trans('cruds.emergenceContacte.title') }}</h4>
                            @foreach ($employeeList->emergencecontactes as $emergenceContacte)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.emergenceContacte.fields.contact_person_name') }}
                                            </th>
                                            <td>
                                                {{ $emergenceContacte->contact_person_name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.emergenceContacte.fields.contact_person_relation') }}
                                            </th>
                                            <td>
                                                {{ $emergenceContacte->contact_person_relation }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.emergenceContacte.fields.address') }}
                                            </th>
                                            <td>
                                                {{ $emergenceContacte->address }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.emergenceContacte.fields.contact_person_number') }}
                                            </th>
                                            <td>
                                                {{ $emergenceContacte->contact_person_number }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.emergenceContacte.fields.employee') }}
                                            </th>
                                            <td>
                                                {{ $emergenceContacte->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Action
                                            </th>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.emergence-contactes.edit', ['emergence_contacte' => $emergenceContacte->id]) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.emergence-contactes.destroy', ['emergence_contacte' => $emergenceContacte->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach


                            <h4> {{ trans('cruds.spouseInformatione.title') }}</h4>

                            @foreach ($employeeList->spouseinformationes as $spouseInformatione)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.spouseInformatione.fields.employee') }}
                                            </th>
                                            <td>
                                                {{ $spouseInformatione->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.spouseInformatione.fields.name_bn') }}
                                            </th>
                                            <td>
                                                {{ $spouseInformatione->name_bn }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.spouseInformatione.fields.name_en') }}
                                            </th>
                                            <td>
                                                {{ $spouseInformatione->name_en }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.spouseInformatione.fields.nid_upload') }}
                                            </th>
                                            <td>
                                                @if ($spouseInformatione->nid_upload)
                                                    <a href="{{ $spouseInformatione->nid_upload->getUrl() }}"
                                                        target="_blank">
                                                        {{ trans('global.view_file') }}
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.spouseInformatione.fields.occupation') }}
                                            </th>
                                            <td>
                                                {{ $spouseInformatione->occupation }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.spouseInformatione.fields.office_address') }}
                                            </th>
                                            <td>
                                                {{ $spouseInformatione->office_address }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.spouseInformatione.fields.phone_number') }}
                                            </th>
                                            <td>
                                                {{ $spouseInformatione->phone_number }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.spouseInformatione.fields.present_addess') }}
                                            </th>
                                            <td>
                                                {!! $spouseInformatione->present_addess !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.spouseInformatione.fields.permanent_addess') }}
                                            </th>
                                            <td>
                                                {!! $spouseInformatione->permanent_addess !!}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Action
                                            </th>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.spouse-informationes.edit', ['spouse_informatione' => $spouseInformatione->id]) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.spouse-informationes.destroy', ['spouse_informatione' => $spouseInformatione->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach


                            <h4> {{ trans('cruds.jobHistory.title') }}</h4>

                            @foreach ($employeeList->jobhistories as $jobHistory)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.jobHistory.fields.id') }}
                                            </th>
                                            <td>
                                                {{ $jobHistory->id }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.jobHistory.fields.institute_name') }}
                                            </th>
                                            <td>
                                                {{ $jobHistory->institute_name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.jobHistory.fields.job_type') }}
                                            </th>
                                            <td>
                                                {{ $jobHistory->job_type->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.jobHistory.fields.designation') }}
                                            </th>
                                            <td>
                                                {{ $jobHistory->designation->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.jobHistory.fields.joining_date') }}
                                            </th>
                                            <td>
                                                {{ $jobHistory->joining_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.jobHistory.fields.release_date') }}
                                            </th>
                                            <td>
                                                {{ $jobHistory->release_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.jobHistory.fields.level_1') }}
                                            </th>
                                            <td>
                                                {{ $jobHistory->level_1 }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.jobHistory.fields.level_2') }}
                                            </th>
                                            <td>
                                                {{ $jobHistory->level_2 }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.jobHistory.fields.level_3') }}
                                            </th>
                                            <td>
                                                {{ $jobHistory->level_3 }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.jobHistory.fields.level_4') }}
                                            </th>
                                            <td>
                                                {{ $jobHistory->level_4 }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.jobHistory.fields.level_5') }}
                                            </th>
                                            <td>
                                                {{ $jobHistory->level_5 }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.jobHistory.fields.employee') }}
                                            </th>
                                            <td>
                                                {{ $jobHistory->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Action
                                            </th>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.job-histories.edit', ['job_history' => $jobHistory->id]) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.job-histories.destroy', ['job_history' => $jobHistory->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach


                            <h4> {{ trans('cruds.employeePromotion.title') }}</h4>

                            @foreach ($employeeList->employeepromotions as $employeePromotion)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.employeePromotion.fields.employee') }}
                                            </th>
                                            <td>
                                                {{ $employeePromotion->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.employeePromotion.fields.new_designation') }}
                                            </th>
                                            <td>
                                                {{ $employeePromotion->new_designation->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.employeePromotion.fields.go_issue_date') }}
                                            </th>
                                            <td>
                                                {{ $employeePromotion->go_issue_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.employeePromotion.fields.office_order_date') }}
                                            </th>
                                            <td>
                                                {{ $employeePromotion->office_order_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.employeePromotion.fields.office_order') }}
                                            </th>
                                            <td>
                                                @if ($employeePromotion->office_order)
                                                    <a href="{{ $employeePromotion->office_order->getUrl() }}"
                                                        target="_blank">
                                                        {{ trans('global.view_file') }}
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Action
                                            </th>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.employee-promotions.edit', ['employee_promotion' => $employeePromotion->id]) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.employee-promotions.destroy', ['employee_promotion' => $employeePromotion->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach


                            <h4> {{ trans('cruds.leaveRecord.title') }}</h4>

                            @foreach ($employeeList->leaverecords as $leaveRecord)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.leaveRecord.fields.employee') }}
                                            </th>
                                            <td>
                                                {{ $leaveRecord->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.leaveRecord.fields.leave_category') }}
                                            </th>
                                            <td>
                                                {{ $leaveRecord->leave_category->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.leaveRecord.fields.type_of_leave') }}
                                            </th>
                                            <td>
                                                {{ $leaveRecord->type_of_leave->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.leaveRecord.fields.start_date') }}
                                            </th>
                                            <td>
                                                {{ $leaveRecord->start_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.leaveRecord.fields.end_date') }}
                                            </th>
                                            <td>
                                                {{ $leaveRecord->end_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.leaveRecord.fields.reason') }}
                                            </th>
                                            <td>
                                                {!! $leaveRecord->reason !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Action
                                            </th>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.leave-records.edit', ['leave_record' => $leaveRecord->id]) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.leave-records.destroy', ['leave_record' => $leaveRecord->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            @endforeach

                            <h4> {{ trans('cruds.serviceParticular.title') }}</h4>
                            @foreach ($employeeList->serviceparticulars as $serviceParticular)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.serviceParticular.fields.id') }}
                                            </th>
                                            <td>
                                                {{ $serviceParticular->id }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.serviceParticular.fields.designation') }}
                                            </th>
                                            <td>
                                                {{ $serviceParticular->designation->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.serviceParticular.fields.designation_status') }}
                                            </th>
                                            <td>
                                                {{ $serviceParticular->designation_status }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.serviceParticular.fields.office_organization_institute') }}
                                            </th>
                                            <td>
                                                {{ $serviceParticular->office_organization_institute }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.serviceParticular.fields.joining_date') }}
                                            </th>
                                            <td>
                                                {{ $serviceParticular->joining_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.serviceParticular.fields.release_date') }}
                                            </th>
                                            <td>
                                                {{ $serviceParticular->release_date }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Action
                                            </th>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.service-particulars.edit', ['service_particular' => $serviceParticular->id]) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.service-particulars.destroy', ['service_particular' => $serviceParticular->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach
                            <h4>
                                {{ trans('cruds.training.title') }}
                            </h4>

                            @foreach ($employeeList->trainings as $training)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.training.fields.employee') }}
                                            </th>
                                            <td>
                                                {{ $training->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.training.fields.training_type') }}
                                            </th>
                                            <td>
                                                {{ $training->training_type->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.training.fields.training_name') }}
                                            </th>
                                            <td>
                                                {{ $training->training_name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.training.fields.institute_name') }}
                                            </th>
                                            <td>
                                                {{ $training->institute_name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.training.fields.country') }}
                                            </th>
                                            <td>
                                                {{ $training->country->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.training.fields.start_date') }}
                                            </th>
                                            <td>
                                                {{ $training->start_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.training.fields.end_date') }}
                                            </th>
                                            <td>
                                                {{ $training->end_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.training.fields.grade') }}
                                            </th>
                                            <td>
                                                {{ $training->grade }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.training.fields.position') }}
                                            </th>
                                            <td>
                                                {{ $training->position }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.training.fields.location') }}
                                            </th>
                                            <td>
                                                {{ $training->location }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach
                            <h4>{{ trans('cruds.travelRecord.title') }}</h4>


                            @foreach ($employeeList->travelRecords as $travelRecord)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.travelRecord.fields.employee') }}
                                            </th>
                                            <td>
                                                {{ $travelRecord->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.travelRecord.fields.country') }}
                                            </th>
                                            <td>
                                                {{ $travelRecord->country->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.travelRecord.fields.title') }}
                                            </th>
                                            <td>
                                                {{ $travelRecord->title }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.travelRecord.fields.purpose') }}
                                            </th>
                                            <td>
                                                {{ $travelRecord->purpose->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.travelRecord.fields.start_date') }}
                                            </th>
                                            <td>
                                                {{ $travelRecord->start_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.travelRecord.fields.end_date') }}
                                            </th>
                                            <td>
                                                {{ $travelRecord->end_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Action
                                            </th>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.travel-records.edit', ['travel_record' => $travelRecord->id]) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.travel-records.destroy', ['travel_record' => $travelRecord->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach



                            <h4> {{ trans('cruds.foreignTravelPersonal.title') }}</h4>

                            @foreach ($employeeList->foreigntravelpersonals as $foreignTravelPersonal)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.foreignTravelPersonal.fields.id') }}
                                            </th>
                                            <td>
                                                {{ $foreignTravelPersonal->id }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.foreignTravelPersonal.fields.title') }}
                                            </th>
                                            <td>
                                                {{ $foreignTravelPersonal->title }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.foreignTravelPersonal.fields.country') }}
                                            </th>
                                            <td>
                                                {{ $foreignTravelPersonal->country->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.foreignTravelPersonal.fields.purpose') }}
                                            </th>
                                            <td>
                                                {{ $foreignTravelPersonal->purpose->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.foreignTravelPersonal.fields.from_date') }}
                                            </th>
                                            <td>
                                                {{ $foreignTravelPersonal->from_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.foreignTravelPersonal.fields.to_date') }}
                                            </th>
                                            <td>
                                                {{ $foreignTravelPersonal->to_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.foreignTravelPersonal.fields.leave') }}
                                            </th>
                                            <td>
                                                {{ $foreignTravelPersonal->leave->start_date ?? '' }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach


                            {{-- <h4> Professionales</h4>

                            @foreach ($employeeList->educations as $professionale)
                            @endforeach
                             <h4> Professionales</h4>

                            @foreach ($employeeList->educations as $professionale)
                            @endforeach
                             <h4> Professionales</h4>

                            @foreach ($employeeList->educations as $professionale)
                            @endforeach
                             <h4> Professionales</h4>

                            @foreach ($employeeList->educations as $professionale)
                            @endforeach
                             <h4> Professionales</h4>

                            @foreach ($employeeList->educations as $professionale)
                            @endforeach
                             <h4> Professionales</h4>

                            @foreach ($employeeList->educations as $professionale)
                            @endforeach
                             <h4> Professionales</h4>

                            @foreach ($employeeList->educations as $professionale)
                            @endforeach
                             <h4> Professionales</h4>

                            @foreach ($employeeList->educations as $professionale)
                            @endforeach --}}
                        </div>
                    </div>
                </div>
            @endsection
