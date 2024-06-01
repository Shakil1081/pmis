<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List PDF</title>
    <!-- Include any CSS styles if needed -->
    <style>
        body {
            font-family: 'nsikosh', sans-serif;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            font-weight: normal;
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        strong {
            font-size: 18px;
            line-height: 20px;
            margin-top: 20px;
        }

        @page {
            header: page-header;
            footer: page-footer;
        }
    </style>
</head>

<body style="padding: 20px">
    {{-- <htmlpageheader name="page-header">
        Your Header Content
    </htmlpageheader> --}}

    <table class="header w-100" cellspacing="0" cellpadding="0">
        <tr>
            <td width="82" style="border: 0;">
                <img src="img/bforest.png" width="85" alt="">
            </td>
            <td style="text-align: center;" style="border: 0;">
                <center>
                    <h2 style="color: #006625">বন অধিদপ্তর-গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h2>

                    <br>
                    নাম: {{ $employeeList->fullname_bn }} (
                    Name:{{ $employeeList->full }})<br>
                    <b> {{ trans('cruds.employeeList.fields.employeeid') }}:{{ $employeeList->employeeid }}</b><br>
                </center>
            </td>
            {{-- <td style="text-align: right;" width="82">
                <img src="img/mujib_borso.png" align="right" width="85" alt="">
            </td> --}}
        </tr>
    </table><br />

    <div class="col-md-12">
        <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
            <div>
                <strong>General Information</strong>

                <table class="table-bordered table-striped table" id="General">
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
                        {{-- <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.birth_certificate_upload') }}
                            </th>
                            <td>
                                @if ($employeeList->birth_certificate_upload)
                                    <a href="{{ $employeeList->birth_certificate_upload->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endif
                            </td>
                        </tr> --}}
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
                                {{ $employeeList->home_district->{$columname} ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.marital_statu') }}
                            </th>
                            <td>
                                @if (app()->getLocale() === 'bn')
                                    {{ $employeeList->marital_statu->name ?? '' }}
                                @else
                                    {{ $employeeList->marital_statu->name_en ?? '' }}
                                @endif

                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.gender') }}
                            </th>
                            <td>
                                {{ $employeeList->gender->{$columname} ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.religion') }}
                            </th>
                            <td>
                                {{ $employeeList->religion->{$columname} ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.blood_group') }}
                            </th>
                            <td>
                                {{ $employeeList->blood_group->{$columname} ?? '' }}
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
                        {{-- <tr>
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
                        </tr> --}}
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.passport') }}
                            </th>
                            <td>
                                {{ $employeeList->passport }}
                            </td>
                        </tr>
                        {{-- <tr>
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
                        </tr> --}}
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.license_type') }}
                            </th>
                            <td>
                                {{ $employeeList->license_type->{$columname} ?? '' }}
                            </td>
                        </tr>
                        {{-- <tr>
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
                        </tr> --}}
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

                                @if (app()->getLocale() === 'bn')
                                    {{ $employeeList->joiningexaminfo->exam_name_bn ?? '' }}
                                @else
                                    {{ $employeeList->joiningexaminfo->exam_name_en ?? '' }}
                                @endif


                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.grade') }}
                            </th>
                            <td>
                                {{ $employeeList->grade->{$columname} ?? '' }}
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
                        {{-- <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.first_joining_order') }}
                            </th>
                            <td>
                                @if ($employeeList->first_joining_order)
                                    <a href="{{ $employeeList->first_joining_order->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endif
                            </td>
                        </tr> --}}
                        {{-- <tr>
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
                        </tr> --}}
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.date_of_gazette') }}
                            </th>
                            <td>
                                {{ $employeeList->date_of_gazette }}
                            </td>
                        </tr>
                        {{-- <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.date_of_gazette_if_any') }}
                            </th>
                            <td>
                                @if ($employeeList->date_of_gazette_if_any)
                                    <a href="{{ $employeeList->date_of_gazette_if_any->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endif
                            </td>
                        </tr> --}}
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
                        {{-- <tr>
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
                        </tr> --}}
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.date_of_con_serviec') }}
                            </th>
                            <td>
                                {{ $employeeList->date_of_con_serviec }}
                            </td>
                        </tr>
                        {{-- <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.confirmation_in_service') }}
                            </th>
                            <td>
                                @if ($employeeList->confirmation_in_service)
                                    <a href="{{ $employeeList->confirmation_in_service->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endif
                            </td>
                        </tr> --}}
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.quota') }}
                            </th>
                            <td>
                                {{ $employeeList->quota->{$columname} ?? '' }}
                            </td>
                        </tr>
                        {{-- <tr>
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
                        </tr> --}}
                        {{-- <tr>
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
                        </tr> --}}
                    </tbody>
                </table><br />


                <strong>Education</strong>
                @foreach ($employeeList->educations ?? [] as $educationInformatione)
                    <table class="table-bordered table-striped table" id="Education">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.educationInformatione.fields.name_of_exam') }}
                                </th>
                                <td>
                                    {{ $educationInformatione->name_of_exam->{$columname} ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.educationInformatione.fields.exam_board') }}
                                </th>
                                <td>
                                    {{ $educationInformatione->exam_board->{$columname} ?? '' }}
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
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.educationInformatione.fields.catificarte') }}
                                </th>
                                <td>
                                    @if ($educationInformatione->catificarte)
                                        <a href="{{ $educationInformatione->catificarte->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.educationInformatione.fields.employee') }}
                                </th>
                                <td>
                                    {{ $educationInformatione->employee->employeeid ?? '' }}
                                </td>
                            </tr>

                        </tbody>
                    </table><br />
                @endforeach





                <strong> Professionales</strong>

                @foreach ($employeeList->educations ?? [] as $professionale)
                    <table class="table-bordered table-striped table" id="Professionales">
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

                        </tbody>
                    </table><br />
                @endforeach


                <strong> {{ trans('cruds.addressdetaile.title') }}</strong>

                @foreach ($employeeList->addressdetailes ?? [] as $addressdetaile)
                    <table class="table-bordered table-striped table" id="addressdetaile">
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
                                    {{ $addressdetaile->thana_upazila->{$columname} ?? '' }}
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

                        </tbody>
                    </table><br />
                @endforeach
                <strong>{{ trans('cruds.emergenceContacte.title') }}</strong>
                @foreach ($employeeList->emergencecontactes ?? [] as $emergenceContacte)
                    <table class="table-bordered table-striped table" id="emergenceContacte">
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

                        </tbody>
                    </table><br />
                @endforeach


                <strong> {{ trans('cruds.spouseInformatione.title') }}</strong>

                @foreach ($employeeList->spouseinformationes ?? [] as $spouseInformatione)
                    <table class="table-bordered table-striped table" id="spouseInformatione">
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
                                    {{ trans('cruds.spouseInformatione.fields.$columname') }}
                                </th>
                                <td>
                                    {{ $spouseInformatione->{$columname} }}
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
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.spouseInformatione.fields.nid_upload') }}
                                </th>
                                <td>
                                    @if ($spouseInformatione->nid_upload)
                                        <a href="{{ $spouseInformatione->nid_upload->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                            </tr> --}}
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


                        </tbody>
                    </table><br />
                @endforeach


                <strong> {{ trans('cruds.child.title') }}</strong>

                @foreach ($employeeList->childinformationes ?? [] as $child)
                    <table class="table-bordered table-striped table" id="child">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.child.fields.employee') }}
                                </th>
                                <td>
                                    {{ $child->employee->employeeid ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.child.fields.$columname') }}
                                </th>
                                <td>
                                    {{ $child->{$columname} }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.child.fields.name_en') }}
                                </th>
                                <td>
                                    {{ $child->name_en }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.child.fields.date_of_birth') }}
                                </th>
                                <td>
                                    {{ $child->date_of_birth }}
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.child.fields.birth_certificate') }}
                                </th>
                                <td>
                                    @if ($child->birth_certificate)
                                        <a href="{{ $child->birth_certificate->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.child.fields.complite_21') }}
                                </th>
                                <td>
                                    {{ $child->complite_21 }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.child.fields.gender') }}
                                </th>
                                <td>
                                    {{ $child->gender->{$columname} ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.child.fields.nid_number') }}
                                </th>
                                <td>
                                    {{ $child->nid_number }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.child.fields.passport_number') }}
                                </th>
                                <td>
                                    {{ $child->passport_number }}
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.child.fields.childdren_nid') }}
                                </th>
                                <td>
                                    @if ($child->childdren_nid)
                                        <a href="{{ $child->childdren_nid->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                            </tr> --}}
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.child.fields.childdren_passporft') }}
                                </th>
                                <td>
                                    @if ($child->childdren_passporft)
                                        <a href="{{ $child->childdren_passporft->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                            </tr> --}}

                        </tbody>
                    </table><br />
                @endforeach

                <strong> {{ trans('cruds.jobHistory.title') }}</strong>

                @foreach ($employeeList->jobhistories ?? [] as $jobHistory)
                    <table class="table-bordered table-striped table" id="jobHistory">
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
                                    {{ $jobHistory->job_type->{$columname} ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.jobHistory.fields.designation') }}
                                </th>
                                <td>
                                    {{ $jobHistory->designation->{$columname} ?? '' }}
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

                        </tbody>
                    </table><br />
                @endforeach


                <strong> {{ trans('cruds.employeePromotion.title') }}</strong>

                @foreach ($employeeList->employeepromotions ?? [] as $employeePromotion)
                    <table class="table-bordered table-striped table" id="employeePromotion">
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
                                    {{ $employeePromotion->new_designation->{$columname} ?? '' }}
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
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.employeePromotion.fields.office_order') }}
                                </th>
                                <td>
                                    @if ($employeePromotion->office_order)
                                        <a href="{{ $employeePromotion->office_order->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                            </tr> --}}

                        </tbody>
                    </table><br />
                @endforeach


                <strong> {{ trans('cruds.leaveRecord.title') }}</strong>

                @foreach ($employeeList->leaverecords ?? [] as $leaveRecord)
                    <table class="table-bordered table-striped table" id="leaveRecord">
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
                                    {{ $leaveRecord->leave_category->{$columname} ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.leaveRecord.fields.type_of_leave') }}
                                </th>
                                <td>
                                    {{ $leaveRecord->type_of_leave->{$columname} ?? '' }}
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

                        </tbody>
                    </table><br />
                @endforeach

                <strong> {{ trans('cruds.serviceParticular.title') }}</strong>
                @foreach ($employeeList->serviceparticulars ?? [] as $serviceParticular)
                    <table class="table-bordered table-striped table" id="serviceParticular">
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
                                    {{ $serviceParticular->designation->{$columname} ?? '' }}
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


                        </tbody>
                    </table><br />
                @endforeach
                <strong>
                    {{ trans('cruds.training.title') }}
                </strong>

                @foreach ($employeeList->trainings ?? [] as $training)
                    <table class="table-bordered table-striped table" id="training">
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
                                    {{ $training->training_type->{$columname} ?? '' }}
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
                                    {{ $training->country->{$columname} ?? '' }}
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
                    </table><br />
                @endforeach
                <strong id="travelRecords">{{ trans('cruds.travelRecord.title') }}</strong>


                @foreach ($employeeList->travelRecords ?? [] as $travelRecord)
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
                                    {{ $travelRecord->country->{$columname} ?? '' }}
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
                                    {{ $travelRecord->purpose->{$columname} ?? '' }}
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

                        </tbody>
                    </table><br />
                @endforeach



                <strong id="foreignTravelPersonal"> {{ trans('cruds.foreignTravelPersonal.title') }}</strong>

                @foreach ($employeeList->foreigntravelpersonals ?? [] as $foreignTravelPersonal)
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
                                    {{ $foreignTravelPersonal->country->{$columname} ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.foreignTravelPersonal.fields.purpose') }}
                                </th>
                                <td>
                                    {{ $foreignTravelPersonal->purpose->{$columname} ?? '' }}
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
                    </table><br />
                @endforeach


                <strong id="socialAssPrAttachment"> {{ trans('cruds.socialAssPrAttachment.title') }}</strong>

                @foreach ($employeeList->socialassprattachments ?? [] as $socialAssPrAttachment)
                    <table class="table-bordered table-striped table">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.socialAssPrAttachment.fields.id') }}
                                </th>
                                <td>
                                    {{ $socialAssPrAttachment->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.socialAssPrAttachment.fields.degree_membership_organization') }}
                                </th>
                                <td>
                                    {{ $socialAssPrAttachment->degree_membership_organization }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.socialAssPrAttachment.fields.description') }}
                                </th>
                                <td>
                                    {{ $socialAssPrAttachment->description }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.socialAssPrAttachment.fields.certificate_achievement') }}
                                </th>
                                <td>
                                    {{ $socialAssPrAttachment->certificate_achievement }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Action
                                </th>
                                <td>
                                    <!-- Edit button -->
                                    {{-- <a href="{{ route('admin.social-ass-pr-attachments.edit', ['social_ass_pr_attachment' => $socialAssPrAttachment->id]) }}"
                                        class="btn btn-sm btn-primary">Edit</a> --}}

                                    <!-- Delete button -->
                                    {{-- <form
                                                    action="{{ route('admin.social-ass-pr-attachments.destroy', ['social_ass_pr_attachment' => $socialAssPrAttachment->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form> --}}
                                </td>
                            </tr>
                        </tbody>
                    </table><br />
                @endforeach
                <strong id="extracurriculam"> {{ trans('cruds.extracurriculam.title') }}</strong>
                @foreach ($employeeList->extracurriculams ?? [] as $extracurriculam)
                    <table class="table-bordered table-striped table">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.id') }}
                                </th>
                                <td>
                                    {{ $extracurriculam->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.employee') }}
                                </th>
                                <td>
                                    {{ $extracurriculam->employee->employeeid ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.activity_name') }}
                                </th>
                                <td>
                                    {{ $extracurriculam->activity_name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.organization') }}
                                </th>
                                <td>
                                    {{ $extracurriculam->organization }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.position') }}
                                </th>
                                <td>
                                    {{ $extracurriculam->position }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.start_date') }}
                                </th>
                                <td>
                                    {{ $extracurriculam->start_date }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.end_date') }}
                                </th>
                                <td>
                                    {{ $extracurriculam->end_date }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.description') }}
                                </th>
                                <td>
                                    {!! $extracurriculam->description !!}
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.attatchment') }}
                                </th>
                                <td>
                                    @if ($extracurriculam->attatchment)
                                        <a href="{{ $extracurriculam->attatchment->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                            </tr> --}}

                        </tbody>
                    </table><br />
                @endforeach

                <strong id="publication"> {{ trans('cruds.publication.title') }}</strong>

                @foreach ($employeeList->publications ?? [] as $publication)
                    <table class="table-bordered table-striped table">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.publication.fields.title') }}
                                </th>
                                <td>
                                    {{ $publication->title }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.publication.fields.publication_type') }}
                                </th>
                                <td>
                                    {{ App\Models\Publication::PUBLICATION_TYPE_SELECT[$publication->publication_type] ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.publication.fields.publication_media') }}
                                </th>
                                <td>
                                    {{ $publication->publication_media }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.publication.fields.publication_date') }}
                                </th>
                                <td>
                                    {{ $publication->publication_date }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.publication.fields.publication_link') }}
                                </th>
                                <td>
                                    {{ $publication->publication_link }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.publication.fields.description') }}
                                </th>
                                <td>
                                    {!! $publication->description !!}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.publication.fields.employee') }}
                                </th>
                                <td>
                                    {{ $publication->employee->employeeid ?? '' }}
                                </td>
                            </tr>

                        </tbody>
                    </table><br />
                @endforeach
                <strong id="awards"> {{ trans('cruds.award.title') }}</strong>

                @foreach ($employeeList->awards ?? [] as $award)
                    <table class="table-bordered table-striped table">
                        <tbody>

                            <tr>
                                <th>
                                    {{ trans('cruds.award.fields.title') }}
                                </th>
                                <td>
                                    {{ $award->title }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.award.fields.ground_area') }}
                                </th>
                                <td>
                                    {{ $award->ground_area }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.award.fields.date') }}
                                </th>
                                <td>
                                    {{ $award->date }}
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.award.fields.certificate') }}
                                </th>
                                <td>
                                    @if ($award->certificate)
                                        <a href="{{ $award->certificate->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.award.fields.employee') }}
                                </th>
                                <td>
                                    {{ $award->employee->employeeid ?? '' }}
                                </td>
                            </tr>



                        </tbody>
                    </table><br />
                @endforeach


                <strong id="otherservicejobs"> {{ trans('cruds.otherServiceJob.title') }}</strong>

                @foreach ($employeeList->otherservicejobs ?? [] as $otherServiceJob)
                    <table class="table-bordered table-striped table">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.otherServiceJob.fields.id') }}
                                </th>
                                <td>
                                    {{ $otherServiceJob->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.otherServiceJob.fields.employer') }}
                                </th>
                                <td>
                                    {{ $otherServiceJob->employer }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.otherServiceJob.fields.address') }}
                                </th>
                                <td>
                                    {{ $otherServiceJob->address }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.otherServiceJob.fields.service_type') }}
                                </th>
                                <td>
                                    {{ $otherServiceJob->service_type }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.otherServiceJob.fields.position') }}
                                </th>
                                <td>
                                    {{ $otherServiceJob->position }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.otherServiceJob.fields.from') }}
                                </th>
                                <td>
                                    {{ $otherServiceJob->from }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.otherServiceJob.fields.to') }}
                                </th>
                                <td>
                                    {{ $otherServiceJob->to }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.otherServiceJob.fields.employee') }}
                                </th>
                                <td>
                                    {{ $otherServiceJob->employee->employeeid ?? '' }}
                                </td>
                            </tr>

                        </tbody>
                    </table><br />
                @endforeach
                <strong id="languages"> {{ trans('cruds.language.title') }}</strong>

                @foreach ($employeeList->languages ?? [] as $language)
                    <table class="table-bordered table-striped table">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.language.fields.employee') }}
                                </th>
                                <td>
                                    {{ $language->employee->employeeid ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.language.fields.language') }}
                                </th>
                                <td>
                                    {{ $language->language }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.language.fields.read') }}
                                </th>
                                <td>
                                    {{ $language->read->name ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.language.fields.write') }}
                                </th>
                                <td>
                                    {{ $language->write->name ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.language.fields.speak') }}
                                </th>
                                <td>
                                    {{ $language->speak->name ?? '' }}
                                </td>
                            </tr>

                        </tbody>
                    </table><br />
                @endforeach

                <strong id="criminalProsecutione"> {{ trans('cruds.criminalProsecutione.title') }}</strong>

                @foreach ($employeeList->criminalprosecutiones ?? [] as $criminalProsecutione)
                    <table class="table-bordered table-striped table">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.criminalProsecutione.fields.employee') }}
                                </th>
                                <td>
                                    {{ $criminalProsecutione->employee->employeeid ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.criminalProsecutione.fields.judgement_type') }}
                                </th>
                                <td>
                                    {{ $criminalProsecutione->judgement_type }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.criminalProsecutione.fields.natureof_offence') }}
                                </th>
                                <td>
                                    {{ $criminalProsecutione->natureof_offence }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.criminalProsecutione.fields.government_order_no') }}
                                </th>
                                <td>
                                    {{ $criminalProsecutione->government_order_no }}
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.criminalProsecutione.fields.court_order') }}
                                </th>
                                <td>
                                    @if ($criminalProsecutione->court_order)
                                        <a href="{{ $criminalProsecutione->court_order->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.criminalProsecutione.fields.remzrk') }}
                                </th>
                                <td>
                                    {!! $criminalProsecutione->remzrk !!}
                                </td>
                            </tr>

                        </tbody>
                    </table><br />
                @endforeach

                <strong id="criminalproDisciplinary">
                    {{ trans('cruds.criminalproDisciplinary.title') }}</strong>

                @foreach ($employeeList->criminalprodisciplinaries ?? [] as $criminalproDisciplinary)
                    <table class="table-bordered table-striped table">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.criminalproDisciplinary.fields.criminalprosecutione') }}
                                </th>
                                <td>
                                    {{ $criminalproDisciplinary->criminalprosecutione->natureof_offence ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.criminalproDisciplinary.fields.judgement_type') }}
                                </th>
                                <td>
                                    {{ $criminalproDisciplinary->judgement_type }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.criminalproDisciplinary.fields.government_order_no') }}
                                </th>
                                <td>
                                    {{ $criminalproDisciplinary->government_order_no }}
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.criminalproDisciplinary.fields.order_upload_file') }}
                                </th>
                                <td>
                                    @if ($criminalproDisciplinary->order_upload_file)
                                        <a href="{{ $criminalproDisciplinary->order_upload_file->getUrl() }}"
                                            target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.criminalproDisciplinary.fields.remarks') }}
                                </th>
                                <td>
                                    {{ $criminalproDisciplinary->remarks }}
                                </td>
                            </tr>

                        </tbody>
                    </table><br />
                @endforeach

                <strong id="acrMonitoring">{{ trans('cruds.acrMonitoring.title') }}</strong>

                @foreach ($employeeList->acrmonitorings ?? [] as $acrMonitoring)
                    <table class="table-bordered table-striped table">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.acrMonitoring.fields.employee') }}
                                </th>
                                <td>
                                    {{ $acrMonitoring->employee->employeeid ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.acrMonitoring.fields.year') }}
                                </th>
                                <td>
                                    {{ $acrMonitoring->year }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.acrMonitoring.fields.reviewer') }}
                                </th>
                                <td>
                                    {{ $acrMonitoring->reviewer }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.acrMonitoring.fields.review_date') }}
                                </th>
                                <td>
                                    {{ $acrMonitoring->review_date }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.acrMonitoring.fields.remarks') }}
                                </th>
                                <td>
                                    {!! $acrMonitoring->remarks !!}
                                </td>
                            </tr>

                        </tbody>
                    </table><br />
                @endforeach
            </div>
        </div>
    </div>
    <htmlpagefooter name="page-footer">
        Page No {PAGENO} <br><br>
    </htmlpagefooter>
</body>

</html>
