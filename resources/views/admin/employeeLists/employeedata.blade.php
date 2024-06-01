@extends('layouts.admin')
@section('styles')
    @parent
    <style>
        /* td,
                                                                            td {
                                                                                font-size: 141px !important;
                                                                                padding: 4px !important;
                                                                                margin: 0px !important;
                                                                            }

                                                                            a.nav-link:hover,
                                                                            a.nav-link {
                                                                                padding: 2px 4px;
                                                                                font-size: 14px !important;
                                                                            } */
    </style>
@endsection
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenuemployeeshow')
                <div class="col-md-9">


                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                        <div>
                            <strong>{{ trans('cruds.employeeList.title_singular') }}</strong>
                            <table class="table-bordered table-striped table" id="General">
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.employeeid') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->employeeid }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.cadreid') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->cadreid }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.batch') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->batch->batch_bn ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.fullname_bn') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->fullname_bn }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.fullname_en') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->fullname_en }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.fname_bn') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->fname_bn }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.fname_en') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->fname_en }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.mname_bn') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->mname_bn }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.mname_en') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->mname_en }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.date_of_birtd') }}
                                        </td>
                                        <td>
                                            {{ englishToBanglaNumber($employeeList->date_of_birtd) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.birtd_certificate_upload') }}
                                        </td>
                                        <td>
                                            @if ($employeeList->birtd_certificate_upload)
                                                <a href="{{ $employeeList->birtd_certificate_upload->getUrl() }}"
                                                    target="_blank">
                                                    {{ trans('global.view_file') }}
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.prl_date') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->prl_date }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.height') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->height }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.special_identity') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->special_identity }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.home_district') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->home_district->name_bn ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.marital_statu') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->marital_statu->name ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.gender') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->gender->name_bn ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.religion') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->religion->name_bn ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.blood_group') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->blood_group->name_bn ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.nid') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->nid }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.nid_upload') }}
                                        </td>
                                        <td>
                                            @if ($employeeList->nid_upload)
                                                <a href="{{ $employeeList->nid_upload->getUrl() }}" target="_blank">
                                                    {{ trans('global.view_file') }}
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.passport') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->passport }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.passport_upload') }}
                                        </td>
                                        <td>
                                            @if ($employeeList->passport_upload)
                                                <a href="{{ $employeeList->passport_upload->getUrl() }}" target="_blank">
                                                    {{ trans('global.view_file') }}
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.license_type') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->license_type->name_bn ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.license_upload') }}
                                        </td>
                                        <td>
                                            @if ($employeeList->license_upload)
                                                <a href="{{ $employeeList->license_upload->getUrl() }}" target="_blank">
                                                    {{ trans('global.view_file') }}
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.email') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.mobile_number') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->mobile_number }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.joiningexaminfo') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->joiningexaminfo->exam_name_bn ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.grade') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->grade->name_bn ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.fjoining_date') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->fjoining_date }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.first_joining_office_name') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->first_joining_office_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.first_joining_g_o_date') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->first_joining_g_o_date }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.first_joining_memo_no') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->first_joining_memo_no }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.first_joining_order') }}
                                        </td>
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
                                        <td>
                                            {{ trans('cruds.employeeList.fields.fjoining_letter') }}
                                        </td>
                                        <td>
                                            @if ($employeeList->fjoining_letter)
                                                <a href="{{ $employeeList->fjoining_letter->getUrl() }}" target="_blank">
                                                    {{ trans('global.view_file') }}
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.date_of_gazette') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->date_of_gazette }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.date_of_gazette_if_any') }}
                                        </td>
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
                                        <td>
                                            {{ trans('cruds.employeeList.fields.date_of_regularization') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->date_of_regularization }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.regularization_issue_date') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->regularization_issue_date }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.regularization_office_orde_go') }}
                                        </td>
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
                                        <td>
                                            {{ trans('cruds.employeeList.fields.date_of_con_serviec') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->date_of_con_serviec }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.confirmation_in_service') }}
                                        </td>
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
                                        <td>
                                            {{ trans('cruds.employeeList.fields.quota') }}
                                        </td>
                                        <td>
                                            {{ $employeeList->quota->name_bn ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.electric_signature') }}
                                        </td>
                                        <td>
                                            @if ($employeeList->electric_signature)
                                                <a href="{{ $employeeList->electric_signature->getUrl() }}" target="_blank"
                                                    style="display: inline-block">
                                                    <img src="{{ $employeeList->electric_signature->getUrl('tdumb') }}">
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{ trans('cruds.employeeList.fields.employee_photo') }}
                                        </td>
                                        <td>
                                            @if ($employeeList->employee_photo)
                                                <a href="{{ $employeeList->employee_photo->getUrl() }}" target="_blank"
                                                    style="display: inline-block">
                                                    <img src="{{ $employeeList->employee_photo->getUrl('tdumb') }}">
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                            <strong>{{ trans('cruds.educationInformatione.title_singular') }}</strong>
                            @foreach ($employeeList->educations ?? [] as $educationInformatione)
                                <table class="table-bordered table-striped table" id="Education">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.educationInformatione.fields.name_of_exam') }}
                                            </td>
                                            <td>
                                                {{ $educationInformatione->name_of_exam->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.educationInformatione.fields.exam_board') }}
                                            </td>
                                            <td>
                                                {{ $educationInformatione->exam_board->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.educationInformatione.fields.school_university_name') }}
                                            </td>
                                            <td>
                                                {{ $educationInformatione->school_university_name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.educationInformatione.fields.achivement') }}
                                            </td>
                                            <td>
                                                {{ $educationInformatione->achivement }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.educationInformatione.fields.passing_year') }}
                                            </td>
                                            <td>
                                                {{ $educationInformatione->passing_year }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.educationInformatione.fields.catificarte') }}
                                            </td>
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
                                            <td>
                                                {{ trans('cruds.educationInformatione.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $educationInformatione->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.education-informationes.edit', ['education_informatione' => $educationInformatione->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.education-informationes.destroy', ['education_informatione' => $educationInformatione->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            @endforeach





                            <strong> {{ trans('cruds.professionale.title') }}</strong>

                            @foreach ($employeeList->educations ?? [] as $professionale)
                                <table class="table-bordered table-striped table" id="Professionales">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.professionale.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $professionale->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.professionale.fields.qualification_title') }}
                                            </td>
                                            <td>
                                                {{ $professionale->qualification_title }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.professionale.fields.institution') }}
                                            </td>
                                            <td>
                                                {{ $professionale->institution }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.professionale.fields.from_date') }}
                                            </td>
                                            <td>
                                                {{ $professionale->from_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.professionale.fields.to_date') }}
                                            </td>
                                            <td>
                                                {{ $professionale->to_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.professionale.fields.passing_year') }}
                                            </td>
                                            <td>
                                                {{ $professionale->passing_year }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.professionales.edit', ['professionale' => $professionale->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.professionales.destroy', ['professionale' => $professionale->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            @endforeach


                            <strong> {{ trans('cruds.addressdetaile.title') }}</strong>

                            @foreach ($employeeList->addressdetailes ?? [] as $addressdetaile)
                                <table class="table-bordered table-striped table" id="addressdetaile">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.addressdetaile.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $addressdetaile->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.addressdetaile.fields.address_type') }}
                                            </td>
                                            <td>
                                                {{ App\Models\Addressdetaile::ADDRESS_TYPE_SELECT[$addressdetaile->address_type] ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.addressdetaile.fields.flat_house') }}
                                            </td>
                                            <td>
                                                {{ $addressdetaile->flat_house }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.addressdetaile.fields.post_office') }}
                                            </td>
                                            <td>
                                                {{ $addressdetaile->post_office }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.addressdetaile.fields.post_code') }}
                                            </td>
                                            <td>
                                                {{ $addressdetaile->post_code }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.addressdetaile.fields.tdana_upazila') }}
                                            </td>
                                            <td>
                                                {{ $addressdetaile->tdana_upazila->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.addressdetaile.fields.phone_number') }}
                                            </td>
                                            <td>
                                                {{ $addressdetaile->phone_number }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.addressdetailes.edit', ['addressdetaile' => $addressdetaile->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.addressdetailes.destroy', ['addressdetaile' => $addressdetaile->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach
                            <strong>{{ trans('cruds.emergenceContacte.title') }}</strong>
                            @foreach ($employeeList->emergencecontactes ?? [] as $emergenceContacte)
                                <table class="table-bordered table-striped table" id="emergenceContacte">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.emergenceContacte.fields.contact_person_name') }}
                                            </td>
                                            <td>
                                                {{ $emergenceContacte->contact_person_name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.emergenceContacte.fields.contact_person_relation') }}
                                            </td>
                                            <td>
                                                {{ $emergenceContacte->contact_person_relation }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.emergenceContacte.fields.address') }}
                                            </td>
                                            <td>
                                                {{ $emergenceContacte->address }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.emergenceContacte.fields.contact_person_number') }}
                                            </td>
                                            <td>
                                                {{ $emergenceContacte->contact_person_number }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.emergenceContacte.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $emergenceContacte->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.emergence-contactes.edit', ['emergence_contacte' => $emergenceContacte->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.emergence-contactes.destroy', ['emergence_contacte' => $emergenceContacte->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach


                            <strong> {{ trans('cruds.spouseInformatione.title') }}</strong>

                            @foreach ($employeeList->spouseinformationes ?? [] as $spouseInformatione)
                                <table class="table-bordered table-striped table" id="spouseInformatione">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.spouseInformatione.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $spouseInformatione->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.spouseInformatione.fields.name_bn') }}
                                            </td>
                                            <td>
                                                {{ $spouseInformatione->name_bn }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.spouseInformatione.fields.name_en') }}
                                            </td>
                                            <td>
                                                {{ $spouseInformatione->name_en }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.spouseInformatione.fields.nid_upload') }}
                                            </td>
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
                                            <td>
                                                {{ trans('cruds.spouseInformatione.fields.occupation') }}
                                            </td>
                                            <td>
                                                {{ $spouseInformatione->occupation }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.spouseInformatione.fields.office_address') }}
                                            </td>
                                            <td>
                                                {{ $spouseInformatione->office_address }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.spouseInformatione.fields.phone_number') }}
                                            </td>
                                            <td>
                                                {{ $spouseInformatione->phone_number }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.spouseInformatione.fields.present_addess') }}
                                            </td>
                                            <td>
                                                {!! $spouseInformatione->present_addess !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.spouseInformatione.fields.permanent_addess') }}
                                            </td>
                                            <td>
                                                {!! $spouseInformatione->permanent_addess !!}
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.spouse-informationes.edit', ['spouse_informatione' => $spouseInformatione->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.spouse-informationes.destroy', ['spouse_informatione' => $spouseInformatione->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach


                            <strong> {{ trans('cruds.child.title') }}</strong>

                            @foreach ($employeeList->childinformationes ?? [] as $child)
                                <table class="table-bordered table-striped table" id="child">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.child.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $child->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.child.fields.name_bn') }}
                                            </td>
                                            <td>
                                                {{ $child->name_bn }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.child.fields.name_en') }}
                                            </td>
                                            <td>
                                                {{ $child->name_en }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.child.fields.date_of_birtd') }}
                                            </td>
                                            <td>
                                                {{ $child->date_of_birtd }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.child.fields.birtd_certificate') }}
                                            </td>
                                            <td>
                                                @if ($child->birtd_certificate)
                                                    <a href="{{ $child->birtd_certificate->getUrl() }}" target="_blank">
                                                        {{ trans('global.view_file') }}
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.child.fields.complite_21') }}
                                            </td>
                                            <td>
                                                {{ $child->complite_21 }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.child.fields.gender') }}
                                            </td>
                                            <td>
                                                {{ $child->gender->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.child.fields.nid_number') }}
                                            </td>
                                            <td>
                                                {{ $child->nid_number }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.child.fields.passport_number') }}
                                            </td>
                                            <td>
                                                {{ $child->passport_number }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.child.fields.childdren_nid') }}
                                            </td>
                                            <td>
                                                @if ($child->childdren_nid)
                                                    <a href="{{ $child->childdren_nid->getUrl() }}" target="_blank">
                                                        {{ trans('global.view_file') }}
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.child.fields.childdren_passporft') }}
                                            </td>
                                            <td>
                                                @if ($child->childdren_passporft)
                                                    <a href="{{ $child->childdren_passporft->getUrl() }}" target="_blank">
                                                        {{ trans('global.view_file') }}
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.children.edit', ['child' => $child->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.children.destroy', ['child' => $child->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach

                            <strong> {{ trans('cruds.jobHistory.title') }}</strong>

                            @foreach ($employeeList->jobhistories ?? [] as $jobHistory)
                                <table class="table-bordered table-striped table" id="jobHistory">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.jobHistory.fields.id') }}
                                            </td>
                                            <td>
                                                {{ $jobHistory->id }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.jobHistory.fields.institute_name') }}
                                            </td>
                                            <td>
                                                {{ $jobHistory->institute_name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.jobHistory.fields.job_type') }}
                                            </td>
                                            <td>
                                                {{ $jobHistory->job_type->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.jobHistory.fields.designation') }}
                                            </td>
                                            <td>
                                                {{ $jobHistory->designation->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.jobHistory.fields.joining_date') }}
                                            </td>
                                            <td>
                                                {{ $jobHistory->joining_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.jobHistory.fields.release_date') }}
                                            </td>
                                            <td>
                                                {{ $jobHistory->release_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.jobHistory.fields.level_1') }}
                                            </td>
                                            <td>
                                                {{ $jobHistory->level_1 }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.jobHistory.fields.level_2') }}
                                            </td>
                                            <td>
                                                {{ $jobHistory->level_2 }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.jobHistory.fields.level_3') }}
                                            </td>
                                            <td>
                                                {{ $jobHistory->level_3 }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.jobHistory.fields.level_4') }}
                                            </td>
                                            <td>
                                                {{ $jobHistory->level_4 }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.jobHistory.fields.level_5') }}
                                            </td>
                                            <td>
                                                {{ $jobHistory->level_5 }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.jobHistory.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $jobHistory->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.job-histories.edit', ['job_history' => $jobHistory->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.job-histories.destroy', ['job_history' => $jobHistory->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach


                            <strong> {{ trans('cruds.employeePromotion.title') }}</strong>

                            @foreach ($employeeList->employeepromotions ?? [] as $employeePromotion)
                                <table class="table-bordered table-striped table" id="employeePromotion">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.employeePromotion.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $employeePromotion->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.employeePromotion.fields.new_designation') }}
                                            </td>
                                            <td>
                                                {{ $employeePromotion->new_designation->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.employeePromotion.fields.go_issue_date') }}
                                            </td>
                                            <td>
                                                {{ $employeePromotion->go_issue_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.employeePromotion.fields.office_order_date') }}
                                            </td>
                                            <td>
                                                {{ $employeePromotion->office_order_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.employeePromotion.fields.office_order') }}
                                            </td>
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
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.employee-promotions.edit', ['employee_promotion' => $employeePromotion->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.employee-promotions.destroy', ['employee_promotion' => $employeePromotion->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach


                            <strong> {{ trans('cruds.leaveRecord.title') }}</strong>

                            @foreach ($employeeList->leaverecords ?? [] as $leaveRecord)
                                <table class="table-bordered table-striped table" id="leaveRecord">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.leaveRecord.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $leaveRecord->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.leaveRecord.fields.leave_category') }}
                                            </td>
                                            <td>
                                                {{ $leaveRecord->leave_category->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.leaveRecord.fields.type_of_leave') }}
                                            </td>
                                            <td>
                                                {{ $leaveRecord->type_of_leave->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.leaveRecord.fields.start_date') }}
                                            </td>
                                            <td>
                                                {{ $leaveRecord->start_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.leaveRecord.fields.end_date') }}
                                            </td>
                                            <td>
                                                {{ $leaveRecord->end_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.leaveRecord.fields.reason') }}
                                            </td>
                                            <td>
                                                {!! $leaveRecord->reason !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.leave-records.edit', ['leave_record' => $leaveRecord->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.leave-records.destroy', ['leave_record' => $leaveRecord->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            @endforeach

                            {{-- <strong> {{ trans('cruds.serviceParticular.title') }}</strong>
                            @foreach ($employeeList->serviceparticulars ?? [] as $serviceParticular)
                                <table class="table-bordered table-striped table" id="serviceParticular">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.serviceParticular.fields.id') }}
                                            </td>
                                            <td>
                                                {{ $serviceParticular->id }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.serviceParticular.fields.designation') }}
                                            </td>
                                            <td>
                                                {{ $serviceParticular->designation->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.serviceParticular.fields.designation_status') }}
                                            </td>
                                            <td>
                                                {{ $serviceParticular->designation_status }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.serviceParticular.fields.office_organization_institute') }}
                                            </td>
                                            <td>
                                                {{ $serviceParticular->office_organization_institute }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.serviceParticular.fields.joining_date') }}
                                            </td>
                                            <td>
                                                {{ $serviceParticular->joining_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.serviceParticular.fields.release_date') }}
                                            </td>
                                            <td>
                                                {{ $serviceParticular->release_date }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.service-particulars.edit', ['service_particular' => $serviceParticular->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.service-particulars.destroy', ['service_particular' => $serviceParticular->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach --}}
                            <strong>
                                {{ trans('cruds.training.title') }}
                            </strong>

                            @foreach ($employeeList->trainings ?? [] as $training)
                                <table class="table-bordered table-striped table" id="training">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.training.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $training->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.training.fields.training_type') }}
                                            </td>
                                            <td>
                                                {{ $training->training_type->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.training.fields.training_name') }}
                                            </td>
                                            <td>
                                                {{ $training->training_name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.training.fields.institute_name') }}
                                            </td>
                                            <td>
                                                {{ $training->institute_name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.training.fields.country') }}
                                            </td>
                                            <td>
                                                {{ $training->country->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.training.fields.start_date') }}
                                            </td>
                                            <td>
                                                {{ $training->start_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.training.fields.end_date') }}
                                            </td>
                                            <td>
                                                {{ $training->end_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.training.fields.grade') }}
                                            </td>
                                            <td>
                                                {{ $training->grade }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.training.fields.position') }}
                                            </td>
                                            <td>
                                                {{ $training->position }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.training.fields.location') }}
                                            </td>
                                            <td>
                                                {{ $training->location }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach
                            <strong id="travelRecords">{{ trans('cruds.travelRecord.title') }}</strong>


                            @foreach ($employeeList->travelRecords ?? [] as $travelRecord)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.travelRecord.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $travelRecord->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.travelRecord.fields.country') }}
                                            </td>
                                            <td>
                                                {{ $travelRecord->country->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.travelRecord.fields.title') }}
                                            </td>
                                            <td>
                                                {{ $travelRecord->title }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.travelRecord.fields.purpose') }}
                                            </td>
                                            <td>
                                                {{ $travelRecord->purpose_id ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.travelRecord.fields.start_date') }}
                                            </td>
                                            <td>
                                                {{ $travelRecord->start_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.travelRecord.fields.end_date') }}
                                            </td>
                                            <td>
                                                {{ $travelRecord->end_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.travel-records.edit', ['travel_record' => $travelRecord->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.travel-records.destroy', ['travel_record' => $travelRecord->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach



                            <strong id="foreignTravelPersonal"> {{ trans('cruds.foreignTravelPersonal.title') }}</strong>

                            @foreach ($employeeList->foreigntravelpersonals ?? [] as $foreignTravelPersonal)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.foreignTravelPersonal.fields.id') }}
                                            </td>
                                            <td>
                                                {{ $foreignTravelPersonal->id }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.foreignTravelPersonal.fields.title') }}
                                            </td>
                                            <td>
                                                {{ $foreignTravelPersonal->title }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.foreignTravelPersonal.fields.country') }}
                                            </td>
                                            <td>
                                                {{ $foreignTravelPersonal->country->name_bn ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.foreignTravelPersonal.fields.purpose') }}
                                            </td>
                                            <td>
                                                {{ $foreignTravelPersonal->purpose_id ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.foreignTravelPersonal.fields.from_date') }}
                                            </td>
                                            <td>
                                                {{ $foreignTravelPersonal->from_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.foreignTravelPersonal.fields.to_date') }}
                                            </td>
                                            <td>
                                                {{ $foreignTravelPersonal->to_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.foreignTravelPersonal.fields.leave') }}
                                            </td>
                                            <td>
                                                {{ $foreignTravelPersonal->leave->start_date ?? '' }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach




                            <strong id="extracurriculam"> {{ trans('cruds.extracurriculam.title') }}</strong>
                            @foreach ($employeeList->extracurriculams ?? [] as $extracurriculam)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.extracurriculam.fields.id') }}
                                            </td>
                                            <td>
                                                {{ $extracurriculam->id }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.extracurriculam.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $extracurriculam->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.extracurriculam.fields.activity_name') }}
                                            </td>
                                            <td>
                                                {{ $extracurriculam->activity_name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.extracurriculam.fields.organization') }}
                                            </td>
                                            <td>
                                                {{ $extracurriculam->organization }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.extracurriculam.fields.position') }}
                                            </td>
                                            <td>
                                                {{ $extracurriculam->position }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.extracurriculam.fields.start_date') }}
                                            </td>
                                            <td>
                                                {{ $extracurriculam->start_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.extracurriculam.fields.end_date') }}
                                            </td>
                                            <td>
                                                {{ $extracurriculam->end_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.extracurriculam.fields.description') }}
                                            </td>
                                            <td>
                                                {!! $extracurriculam->description !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.extracurriculam.fields.attatchment') }}
                                            </td>
                                            <td>
                                                @if ($extracurriculam->attatchment)
                                                    <a href="{{ $extracurriculam->attatchment->getUrl() }}"
                                                        target="_blank">
                                                        {{ trans('global.view_file') }}
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.extracurriculams.edit', ['extracurriculam' => $extracurriculam->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.extracurriculams.destroy', ['extracurriculam' => $extracurriculam->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach

                            <strong id="publication"> {{ trans('cruds.publication.title') }}</strong>

                            @foreach ($employeeList->publications ?? [] as $publication)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.publication.fields.title') }}
                                            </td>
                                            <td>
                                                {{ $publication->title }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.publication.fields.publication_type') }}
                                            </td>
                                            <td>
                                                {{ App\Models\Publication::PUBLICATION_TYPE_SELECT[$publication->publication_type] ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.publication.fields.publication_media') }}
                                            </td>
                                            <td>
                                                {{ $publication->publication_media }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.publication.fields.publication_date') }}
                                            </td>
                                            <td>
                                                {{ $publication->publication_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.publication.fields.publication_link') }}
                                            </td>
                                            <td>
                                                {{ $publication->publication_link }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.publication.fields.description') }}
                                            </td>
                                            <td>
                                                {!! $publication->description !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.publication.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $publication->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.publications.edit', ['publication' => $publication->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.publications.destroy', ['publication' => $publication->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach
                            <strong id="awards"> {{ trans('cruds.award.title') }}</strong>

                            @foreach ($employeeList->awards ?? [] as $award)
                                <table class="table-bordered table-striped table">
                                    <tbody>

                                        <tr>
                                            <td>
                                                {{ trans('cruds.award.fields.title') }}
                                            </td>
                                            <td>
                                                {{ $award->title }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.award.fields.ground_area') }}
                                            </td>
                                            <td>
                                                {{ $award->ground_area }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.award.fields.date') }}
                                            </td>
                                            <td>
                                                {{ $award->date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.award.fields.certificate') }}
                                            </td>
                                            <td>
                                                @if ($award->certificate)
                                                    <a href="{{ $award->certificate->getUrl() }}" target="_blank">
                                                        {{ trans('global.view_file') }}
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.award.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $award->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>

                                            </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.awards.edit', ['award' => $award->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    ="{{ route('admin.awards.destroy', ['award' => $award->id]) }}"
                                                metdod="POST" style="display: inline;">
                                                @csrf
                                                @metdod('DELETE')
                                                <button type="submit"
                                                    class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            @endforeach


                            <strong id="otderservicejobs"> {{ trans('cruds.otderServiceJob.title') }}</strong>

                            @foreach ($employeeList->otderservicejobs ?? [] as $otderServiceJob)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.otderServiceJob.fields.id') }}
                                            </td>
                                            <td>
                                                {{ $otderServiceJob->id }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.otderServiceJob.fields.employer') }}
                                            </td>
                                            <td>
                                                {{ $otderServiceJob->employer }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.otderServiceJob.fields.address') }}
                                            </td>
                                            <td>
                                                {{ $otderServiceJob->address }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.otderServiceJob.fields.service_type') }}
                                            </td>
                                            <td>
                                                {{ $otderServiceJob->service_type }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.otderServiceJob.fields.position') }}
                                            </td>
                                            <td>
                                                {{ $otderServiceJob->position }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.otderServiceJob.fields.from') }}
                                            </td>
                                            <td>
                                                {{ $otderServiceJob->from }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.otderServiceJob.fields.to') }}
                                            </td>
                                            <td>
                                                {{ $otderServiceJob->to }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.otderServiceJob.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $otderServiceJob->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.otder-service-jobs.edit', ['otder_service_job' => $otderServiceJob->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.otder-service-jobs.destroy', ['otder_service_job' => $otderServiceJob->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach
                            <strong id="languages"> {{ trans('cruds.language.title') }}</strong>

                            @foreach ($employeeList->languages ?? [] as $language)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.language.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $language->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.language.fields.language') }}
                                            </td>
                                            <td>
                                                {{ $language->language }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.language.fields.read') }}
                                            </td>
                                            <td>
                                                {{ $language->read->name ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.language.fields.write') }}
                                            </td>
                                            <td>
                                                {{ $language->write->name ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.language.fields.speak') }}
                                            </td>
                                            <td>
                                                {{ $language->speak->name ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.languages.edit', ['language' => $language->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.languages.destroy', ['language' => $language->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach

                            <strong id="criminalProsecutione"> {{ trans('cruds.criminalProsecutione.title') }}</strong>

                            @foreach ($employeeList->criminalprosecutiones ?? [] as $criminalProsecutione)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.criminalProsecutione.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $criminalProsecutione->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.criminalProsecutione.fields.judgement_type') }}
                                            </td>
                                            <td>
                                                {{ $criminalProsecutione->judgement_type }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.criminalProsecutione.fields.natureof_offence') }}
                                            </td>
                                            <td>
                                                {{ $criminalProsecutione->natureof_offence }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.criminalProsecutione.fields.government_order_no') }}
                                            </td>
                                            <td>
                                                {{ $criminalProsecutione->government_order_no }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.criminalProsecutione.fields.court_order') }}
                                            </td>
                                            <td>
                                                @if ($criminalProsecutione->court_order)
                                                    <a href="{{ $criminalProsecutione->court_order->getUrl() }}"
                                                        target="_blank">
                                                        {{ trans('global.view_file') }}
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.criminalProsecutione.fields.remzrk') }}
                                            </td>
                                            <td>
                                                {!! $criminalProsecutione->remzrk !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.criminal-prosecutiones.edit', ['criminal_prosecutione' => $criminalProsecutione->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.criminal-prosecutiones.destroy', ['criminal_prosecutione' => $criminalProsecutione->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            @endforeach

                            <strong id="criminalproDisciplinary">
                                {{ trans('cruds.criminalproDisciplinary.title') }}</strong>

                            @foreach ($employeeList->criminalprodisciplinaries ?? [] as $criminalproDisciplinary)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.criminalproDisciplinary.fields.criminalprosecutione') }}
                                            </td>
                                            <td>
                                                {{ $criminalproDisciplinary->criminalprosecutione->natureof_offence ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.criminalproDisciplinary.fields.judgement_type') }}
                                            </td>
                                            <td>
                                                {{ $criminalproDisciplinary->judgement_type }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.criminalproDisciplinary.fields.government_order_no') }}
                                            </td>
                                            <td>
                                                {{ $criminalproDisciplinary->government_order_no }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.criminalproDisciplinary.fields.order_upload_file') }}
                                            </td>
                                            <td>
                                                @if ($criminalproDisciplinary->order_upload_file)
                                                    <a href="{{ $criminalproDisciplinary->order_upload_file->getUrl() }}"
                                                        target="_blank">
                                                        {{ trans('global.view_file') }}
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.criminalproDisciplinary.fields.remarks') }}
                                            </td>
                                            <td>
                                                {{ $criminalproDisciplinary->remarks }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.criminalpro-disciplinaries.edit', ['criminalpro_disciplinary' => $criminalproDisciplinary->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.criminalpro-disciplinaries.destroy', ['criminalpro_disciplinary' => $criminalproDisciplinary->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach





                            <strong id="acrMonitoring">{{ trans('cruds.acrMonitoring.title') }}</strong>

                            @foreach ($employeeList->acrmonitorings ?? [] as $acrMonitoring)
                                <table class="table-bordered table-striped table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.acrMonitoring.fields.employee') }}
                                            </td>
                                            <td>
                                                {{ $acrMonitoring->employee->employeeid ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.acrMonitoring.fields.year') }}
                                            </td>
                                            <td>
                                                {{ $acrMonitoring->year }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.acrMonitoring.fields.reviewer') }}
                                            </td>
                                            <td>
                                                {{ $acrMonitoring->reviewer }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.acrMonitoring.fields.review_date') }}
                                            </td>
                                            <td>
                                                {{ $acrMonitoring->review_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ trans('cruds.acrMonitoring.fields.remarks') }}
                                            </td>
                                            <td>
                                                {!! $acrMonitoring->remarks !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('admin.acr-monitorings.edit', ['acr_monitoring' => $acrMonitoring->id]) }}"
                                                    class="btn btn-sm btn-primary">{{ trans('global.edit') }}</a>

                                                <!-- Delete button -->
                                                <form
                                                    action="{{ route('admin.acr-monitorings.destroy', ['acr_monitoring' => $acrMonitoring->id]) }}"
                                                    metdod="POST" style="display: inline;">
                                                    @csrf
                                                    @metdod('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ trans('global.delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endsection

            @section('scripts')
                @parent

                <script>
                    $(document).ready(function() {
                        // Add active class to clicked menu item and remove from otders
                        $('.nav-link').on('click', function() {
                            $('.nav-link').removeClass('active');
                            $(tdis).addClass('active');
                        });

                        // Add active class on page load based on URL hash
                        var hash = window.location.hash;
                        $('.nav-link[href="' + hash + '"]').addClass('active');
                    });
                </script>
            @endsection
