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
            padding: 2;
            margin: 0;
        }

        strong {
            font-size: 18px;
            line-height: 20px;
            margin-top: 20px;
        }

        th {
            width: 50%;
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
                    <h2 style="color: #006625; margin:0">বন অধিদপ্তর-গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h2>
                    @if (app()->getLocale() === 'bn')
                        <h4 style=" margin:0"> নাম: {{ $employeeList->fullname_bn }}</h4>
                    @else
                        <h4 style=" margin:0"> Name:{{ $employeeList->fullname_en }}</h4>
                    @endif

                    <br>
                    <b> {{ trans('cruds.employeeList.fields.employeeid') }}: {{ englishToBanglaNumber($employeeList->employeeid) }}</b><br>
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
                <strong>{{ trans('cruds.employeeList.title_singular') }}</strong>

                {{-- @dd($employeeList); --}}
                <table class="table-bordered table-striped table" id="General">
                    <tbody>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.employeeid') }}
                            </th>
                            <td>
                            {{ englishToBanglaNumber($employeeList->employeeid ?? 'N/A') }}
                                
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.cadreid') }}
                            </th>
                            <td>
                            {{ englishToBanglaNumber($employeeList->cadreid ?? 'N/A') }}
                                
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.batch') }}
                            </th>
                            <td>


                                @if (app()->getLocale() === 'bn')
                                    {{ $employeeList->batch->batch_bn ?? 'N/A' }}
                                @else
                                    {{ $employeeList->batch->batch_en ?? 'N/A' }}
                                @endif

                            </td>
                        </tr>

                        @if (app()->getLocale() === 'bn')
                            নাম: {{ $employeeList->fullname_bn ?? 'N/A' }}
                        @else
                            Name:{{ $employeeList->fullname_en ?? 'N/A' }}
                        @endif



                        @if (app()->getLocale() === 'bn')
                            <tr>
                                <th>
                                    {{ trans('cruds.employeeList.fields.fname_bn') }}
                                </th>
                                <td>
                                    {{ $employeeList->fname_bn ?? 'N/A' }}
                                </td>
                            </tr>
                        @else
                            <tr>
                                <th>
                                    {{ trans('cruds.employeeList.fields.fname_en') }}
                                </th>
                                <td>
                                    {{ $employeeList->fname_en ?? 'N/A' }}
                                </td>
                            </tr>
                        @endif



                        @if (app()->getLocale() === 'bn')
                            <tr>
                                <th>
                                    {{ trans('cruds.employeeList.fields.mname_bn') }}
                                </th>
                                <td>
                                    {{ $employeeList->mname_bn ?? 'N/A' }}
                                </td>
                            </tr>
                        @else
                            <tr>
                                <th>
                                    {{ trans('cruds.employeeList.fields.mname_en') }}
                                </th>
                                <td>
                                    {{ $employeeList->mname_en ?? 'N/A' }}
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.date_of_birth') }}
                            </th>
                            <td>
                                {{ englishToBanglaNumber($employeeList->date_of_birth ?? 'N/A') }}
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
                            {{ englishToBanglaNumber($employeeList->prl_date ?? 'N/A') }}
                                
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.height') }}
                            </th>
                            <td>
                            {{ englishToBanglaNumber($employeeList->height ?? 'N/A') }}
                                
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.special_identity') }}
                            </th>
                            <td>
                                {{ $employeeList->special_identity ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.home_district') }}
                            </th>
                            <td>
                                {{ $employeeList->home_district->{$columname} ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.marital_statu') }}
                            </th>
                            <td>
                                @if (app()->getLocale() === 'bn')
                                    {{ $employeeList->marital_statu->name ?? 'N/A' }}
                                @else
                                    {{ $employeeList->marital_statu->name_en ?? 'N/A' }}
                                @endif

                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.gender') }}
                            </th>
                            <td>
                                {{ $employeeList->gender->{$columname} ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.religion') }}
                            </th>
                            <td>
                                {{ $employeeList->religion->{$columname} ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.blood_group') }}
                            </th>
                            <td>
                                {{ $employeeList->blood_group->{$columname} ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.nid') }}
                            </th>
                            <td>
                            {{ englishToBanglaNumber($employeeList->nid ?? 'N/A') }}
                                
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
                            {{ englishToBanglaNumber($employeeList->passport ? $employeeList->passport : 'N/A') }}
                                
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
                                {{ $employeeList->license_type->{$columname} ?? 'N/A' }}

                                {{ $employeeList->license_type->license_number ?? 'N/A' }}
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
                                {{ $employeeList->email ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.mobile_number') }}
                            </th>
                            <td>
                            {{ englishToBanglaNumber($employeeList->mobile_number ?? 'N/A') }}
                                
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.joiningexaminfo') }}
                            </th>
                            <td>

                                @if (app()->getLocale() === 'bn')
                                    {{ $employeeList->joiningexaminfo->exam_name_bn ?? 'N/A' }}
                                @else
                                    {{ $employeeList->joiningexaminfo->exam_name_en ?? 'N/A' }}
                                @endif


                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.grade') }}
                            </th>
                            <td>
                                {{ $employeeList->grade->{$columname} ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.fjoining_date') }}
                            </th>
                            <td>
                            {{ englishToBanglaNumber($employeeList->fjoining_date ?? 'N/A') }}
                                
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.first_joining_office_name') }}
                            </th>
                            <td>
                                {{ $employeeList->first_joining_office_name ?? 'N/A'}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.first_joining_g_o_date') }}
                            </th>
                            <td>
                            {{ englishToBanglaNumber($employeeList->first_joining_g_o_date ?? 'N/A') }}
                            
                                
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.first_joining_memo_no') }}
                            </th>
                            <td>
                            {{ englishToBanglaNumber($employeeList->first_joining_memo_no ?? 'N/A') }}
                                
                            </td>
                        </tr>

                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.projectrevenue') }}
                            </th>
                            <td>



                                @if (app()->getLocale() === 'bn')
                                    {{ $employeeList->projectrevenue->project_revenue_bn ?? 'N/A' }}
                                @else
                                    {{ $employeeList->projectrevenue->project_revenue_en ?? 'N/A' }}
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.joiningexaminfo') }}
                            </th>
                            <td>
                  
                                @if (app()->getLocale() === 'bn')
                                    {{ $employeeList->joiningexaminfo->exam_name_bn ?? 'N/A' }}
                                @else
                                    {{ $employeeList->joiningexaminfo->exam_name_en ?? 'N/A' }}
                                @endif
                            </td>
                        </tr>


                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.project') }}
                            </th>
                            <td>
                                {{ $employeeList->project->{$columname} ?? 'N/A' }}
                            </td>
                        </tr>


                        <tr>
                            <th>
                                {{ trans('cruds.employeeList.fields.departmental_exam') }}
                            </th>
                            <td>
                                {{ $employeeList->departmental_exam ?? 'N/A' }}
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

                        @if ($employeeList->date_of_gazette)
                            <tr>
                                <th>
                                    {{ trans('cruds.employeeList.fields.date_of_gazette') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($employeeList->date_of_gazette ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                        @endif

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
                        @if ($employeeList->date_of_regularization)
                            <tr>
                                <th>
                                    {{ trans('cruds.employeeList.fields.date_of_regularization') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($employeeList->date_of_regularization ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                        @endif

                        @if ($employeeList->regularization_issue_date)
                            <tr>
                                <th>
                                    {{ trans('cruds.employeeList.fields.regularization_issue_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($employeeList->regularization_issue_date ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                        @endif

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

                        @if ($employeeList->date_of_con_serviec)
                            <tr>
                                <th>
                                    {{ trans('cruds.employeeList.fields.date_of_con_serviec') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($employeeList->date_of_con_serviec ?? 'N/A') }}
                            
                                </td>
                            </tr>
                        @endif

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
                                {{ $employeeList->quota->{$columname} ?? 'N/A' }}
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
                {{-- @dd($employeeList->educations); --}}

                <strong>{{ trans('cruds.educationInformatione.title_singular') }}</strong>
                @foreach ($employeeList->educations ?? [] as $educationInformatione)
                    <table class="table-bordered table-striped table" id="Education">
                        <tbody>
                            <tr>
                                <th>
                                    @if (app()->getLocale() === 'bn')
                                        শিক্ষা শ্রেণী
                                    @else
                                        {{ trans('Level of Education') }}
                                    @endif
                                </th>
                                <td> {{ $educationInformatione->name_of_exam->{$columname} ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.educationInformatione.fields.name_of_exam') }}
                                </th>
                                <td>
                                    @if ($deucationDegree)
                                        @foreach ($deucationDegree->where('id', $educationInformatione->exam_degree) as $educationDegree)
                                            {{ $educationDegree[$columname] ?? 'N/A' }}
                                        @endforeach
                                    @endif

                                    {{-- {{ $educationInformatione->name_of_exam_id }} --}}
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.educationInformatione.fields.name_of_exam') }}
                                </th>
                                <td>
                                    {{ $educationInformatione->name_of_exam->{$columname} ?? '' }}----<br>name_of_exam

                                    @foreach ($deucationDegree->where('id', 1) as $educationDegree)
                                        {{ $educationDegree[$columname] }}
                                    @endforeach


                                    {{ $educationInformatione->name_of_exam_id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.educationInformatione.fields.name_of_exam') }}
                                </th>
                                <td>
                                    {{ $educationInformatione->name_of_exam->{$columname} ?? '' }}----<br>name_of_exam
                                    {{ $deucationDegree }}
                                    @foreach ($deucationDegree->where('id', 1) as $educationDegree)
                                        {{ $educationDegree[$columname] }}
                                    @endforeach


                                    {{ $educationInformatione->name_of_exam_id }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.educationInformatione.fields.exam_board') }}
                                </th>
                                <td>
                                    {{ $educationInformatione->exam_board->{$columname} ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.educationInformatione.fields.school_university_name') }}
                                </th>
                                <td>
                                    {{ $educationInformatione->school_university_name ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.educationInformatione.fields.achivement') }}
                                </th>
                                <td>
                                    {{ $educationInformatione->achivement }}
                                    {{ $educationInformatione->cgpa ?? 'N/A' }}
                                    {{ $educationInformatione->result->{$columname} ?? '' }}

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.educationInformatione.fields.passing_year') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($educationInformatione->passing_year ?? 'N/A') }}
                                    
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
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.educationInformatione.fields.employee') }}
                                </th>
                                <td>
                                    {{ $educationInformatione->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}

                        </tbody>
                    </table><br />
                @endforeach





                <strong> {{ trans('cruds.professionale.title') }}</strong>

                @foreach ($employeeList->professionales ?? [] as $professionale)
                    <table class="table-bordered table-striped table" id="Professionales">
                        <tbody>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.professionale.fields.employee') }}
                                </th>
                                <td>
                                    {{ $professionale->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.professionale.fields.qualification_title') }}
                                </th>
                                <td>
                                {{ $professionale->qualification_title ?? 'N/A' }}
                                
                                    
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.professionale.fields.institution') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($professionale->institution ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.professionale.fields.from_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($professionale->from_date ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.professionale.fields.to_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($professionale->to_date ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.professionale.fields.passing_year') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($professionale->passing_year ?? 'N/A') }}
                                    
                                </td>
                            </tr>

                        </tbody>
                    </table><br />
                @endforeach


                <strong> {{ trans('cruds.addressdetaile.title') }}</strong>

                @foreach ($employeeList->addressdetailes ?? [] as $addressdetaile)
                    <table class="table-bordered table-striped table" id="addressdetaile">
                        <tbody>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.addressdetaile.fields.employee') }}
                                </th>
                                <td>
                                    {{ $addressdetaile->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.addressdetaile.fields.address_type') }}
                                </th>
                                <td>
                                @if (app()->getLocale() === 'bn')
                                {{ App\Models\Addressdetaile::ADDRESS_TYPE_SELECTBN[$addressdetaile->address_type] ?? 'N/A' }}
                                @else
                                {{ App\Models\Addressdetaile::ADDRESS_TYPE_SELECT[$addressdetaile->address_type] ?? 'N/A' }}
                                @endif
                                    
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.addressdetaile.fields.flat_house') }}
                                </th>
                                <td>
                                    {{ $addressdetaile->flat_house ?? 'N/A'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.addressdetaile.fields.post_office') }}
                                </th>
                                <td>
                                    {{ $addressdetaile->post_office ?? 'N/A'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.addressdetaile.fields.post_code') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($addressdetaile->post_code ?? 'N/A') }}
                                    
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
                                {{ englishToBanglaNumber($addressdetaile->phone_number ?? 'N/A') }}
                                
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
                                    {{ $emergenceContacte->contact_person_name ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.emergenceContacte.fields.contact_person_relation') }}
                                </th>
                                <td>
                                    {{ $emergenceContacte->contact_person_relation ?? 'N/A'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.emergenceContacte.fields.address') }}
                                </th>
                                <td>
                                    {{ $emergenceContacte->address ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.emergenceContacte.fields.contact_person_number') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($emergenceContacte->contact_person_number ?? 'N/A') }}
                                   
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.emergenceContacte.fields.employee') }}
                                </th>
                                <td>
                                    {{ $emergenceContacte->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}

                        </tbody>
                    </table><br />
                @endforeach


                <strong> {{ trans('cruds.spouseInformatione.title') }}</strong>

                @foreach ($employeeList->spouseinformationes ?? [] as $spouseInformatione)
                    <table class="table-bordered table-striped table" id="spouseInformatione">
                        <tbody>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.spouseInformatione.fields.employee') }}
                                </th>
                                <td>
                                    {{ $spouseInformatione->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans("cruds.spouseInformatione.fields.$columname") }}
                                </th>
                                <td>
                                {{ $spouseInformatione->name_bn ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>

                                <th>
                                    {{ trans('cruds.spouseInformatione.fields.name_en') }}
                                </th>
                                <td>
                                    {{ $spouseInformatione->name_en ?? 'N/A' }}
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
                                {{-- <tr>
                                <th>
                                    {{ trans('cruds.spouseInformatione.fields.occupation') }}
                                </th>
                                <td>
                                    {{ $spouseInformatione->occupation }}
                                </td>
                            </tr> --}}
                                {{-- <tr>
                                <th>
                                    {{ trans('cruds.spouseInformatione.fields.office_address') }}
                                </th>
                                <td>
                                    {{ $spouseInformatione->office_address }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.spouseInformatione.fields.phone_number') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($spouseInformatione->phone_number ?? 'N/A') }}
                                
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.spouseInformatione.fields.present_addess') }}
                                </th>
                                <td>
                                    {{ $spouseInformatione->present_addess ?? 'N/A'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.spouseInformatione.fields.permanent_addess') }}
                                </th>
                                <td>
                                    {{ $spouseInformatione->permanent_addess ?? 'N/A'}}
                                </td>
                            </tr>


                        </tbody>
                    </table><br />
                @endforeach


                <strong> {{ trans('cruds.child.title') }}</strong>

                @foreach ($employeeList->childinformationes ?? [] as $child)
                    <table class="table-bordered table-striped table" id="child">
                        <tbody>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.child.fields.employee') }}
                                </th>
                                <td>
                                    {{ $child->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans("cruds.child.fields.$columname") }}
                                </th>
                                <td>
                                    {{ $child->{$columname} }}
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    {{ trans('cruds.child.fields.date_of_birth') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($child->date_of_birth ?? 'N/A') }}
                                   
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
                                {{ englishToBanglaNumber($child->complite_21 ?? 'N/A') }}
                                    
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
                                {{ englishToBanglaNumber($child->nid_number ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.child.fields.passport_number') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($child->passport_number ?? 'N/A') }}
                                    
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


                {{-- @dd($employeeList->jobhistories) --}}
                @foreach ($employeeList->jobhistories ?? [] as $jobHistory)
                    <table class="table-bordered table-striped table" id="jobHistory">
                        <tbody>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.jobHistory.fields.id') }}
                                </th>
                                <td>
                                    {{ $jobHistory->id }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.jobHistory.fields.institute_name') }}
                                </th>
                                <td>
                                    {{ $jobHistory->institutename ?? '' }}
                                    {{ $jobHistory->academy_type ?? '' }}
                                    {{ $jobHistory->acadaylocation ?? '' }}

                                </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.jobHistory.fields.job_type') }}
                                </th>
                                <td>
                                    {{ $jobHistory->job_type->{$columname} ?? '' }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.jobHistory.fields.designation') }}
                                </th>
                                <td>
                                    {{ $jobHistory->designation->{$columname} ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.jobHistory.fields.joining_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($jobHistory->joining_date ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.jobHistory.fields.release_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($jobHistory->release_date ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                            {{-- <tr>
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
                                    {{ $jobHistory->level_2 ?? '' }}
                                    {{ $jobHistory->project->name_en ?? '' }}
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
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.jobHistory.fields.level_5') }}
                                </th>
                                <td>
                                    {{ $jobHistory->level_1 ?? '' }}

                                    {{ $jobHistory->level_3 ?? '' }}
                                    {{ $jobHistory->level_4 ?? '' }}
                                    @if ($jobHistory->level_2)
                                        {{ trans('cruds.jobHistory.fields.office_unit') }}
                                        {{ $jobHistory->level_2 ?? '' }}
                                    @endif



                                    {{ $jobHistory->level_5 ?? '' }}


                                    @if ($jobHistory->office_unit)
                                        {{ trans('cruds.jobHistory.fields.posting_in_circle') }}:
                                        {{ $jobHistory->office_unit->{$columname} ?? 'N/A' }}<br>
                                    @endif


                                    @if ($jobHistory->beat_list)
                                        {{ trans('cruds.jobHistory.fields.postingindivision') }}:
                                        {{ $jobHistory->beat_list->forest_range->forest_division->{$columname} ?? 'N/A' }}<br>

                                        {{ trans('cruds.jobHistory.fields.posting_in_range') }}:
                                        {{ $jobHistory->beat_list->forest_range->{$columname} ?? 'N/A' }}<br>

                                        {{ trans('cruds.jobHistory.fields.beat_list') }}:
                                        {{ $jobHistory->beat_list->{$columname} ?? 'N/A' }} <br>
                                    @endif




                                </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.jobHistory.fields.employee') }}
                                </th>
                                <td>
                                    {{ $jobHistory->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}

                        </tbody>
                    </table><br />
                @endforeach


                <strong> {{ trans('cruds.employeePromotion.title') }}</strong>

                @foreach ($employeeList->employeepromotions ?? [] as $employeePromotion)
                    <table class="table-bordered table-striped table" id="employeePromotion">
                        <tbody>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.employeePromotion.fields.employee') }}
                                </th>
                                <td>
                                    {{ $employeePromotion->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.employeePromotion.fields.new_designation') }}
                                </th>
                                <td>
                                    {{ $employeePromotion->new_designation->{$columname} ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.employeePromotion.fields.go_issue_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($employeePromotion->go_issue_date ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.employeePromotion.fields.office_order_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($employeePromotion->office_order_date ?? 'N/A') }}
                                    
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
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.leaveRecord.fields.employee') }}
                                </th>
                                <td>
                                    {{ $leaveRecord->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.leaveRecord.fields.leave_category') }}
                                </th>
                                <td>
                                    {{ $leaveRecord->leave_category->{$columname} ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.leaveRecord.fields.type_of_leave') }}
                                </th>
                                <td>
                                    {{ $leaveRecord->type_of_leave->{$columname} ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.leaveRecord.fields.start_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($leaveRecord->start_date ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.leaveRecord.fields.end_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($leaveRecord->end_date ?? 'N/A') }}
                                
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.leaveRecord.fields.reason') }}
                                </th>
                                <td>
                                    {{ $leaveRecord->reason ?? 'N/A' }}
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
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.training.fields.employee') }}
                                </th>
                                <td>
                                    {{ $training->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.training.fields.training_type') }}
                                </th>
                                <td>
                                    {{ $training->training_type->{$columname} ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.training.fields.training_name') }}
                                </th>
                                <td>
                                    {{ $training->training_name ?? 'N/A'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.training.fields.institute_name') }}
                                </th>
                                <td>
                                    {{ $training->institute_name ?? 'N/A' }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.training.fields.institute_name') }}
                                </th>
                                <td>
                                    {{ $training->institute_name ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.training.fields.country') }}
                                </th>
                                <td>
                                    {{ $training->country->{$columname} ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.training.fields.start_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($training->start_date ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.training.fields.end_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($training->end_date ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.training.fields.grade') }}
                                </th>
                                <td>
                                    {{ $training->grade }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.training.fields.position') }}
                                </th>
                                <td>
                                    {{ $training->position ?? 'N/A'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.training.fields.location') }}
                                </th>
                                <td>
                                    {{ $training->location ?? 'N/A' }}
                                </td>
                            </tr>
                        </tbody>
                    </table><br />
                @endforeach
                <strong id="travelRecords">{{ trans('cruds.travelRecord.title') }}</strong>


                @foreach ($employeeList->travelRecords ?? [] as $travelRecord)
                    <table class="table-bordered table-striped table">
                        <tbody>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.travelRecord.fields.employee') }}
                                </th>
                                <td>
                                    {{ $travelRecord->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.travelRecord.fields.country') }}
                                </th>
                                <td>
                                    {{ $travelRecord->country->{$columname} ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.travelRecord.fields.title') }}
                                </th>
                                <td>
                                    {{ $travelRecord->title ?? 'N/A'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.travelRecord.fields.purpose') }}
                                </th>
                                <td>
                                    {{ $travelRecord->purpose->{$columname} ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.travelRecord.fields.start_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($travelRecord->start_date ?? 'N/A') }}
                                
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.travelRecord.fields.end_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($travelRecord->end_date ?? 'N/A') }}
                                    
                                </td>
                            </tr>

                        </tbody>
                    </table><br />
                @endforeach



                <strong id="foreignTravelPersonal"> {{ trans('cruds.foreignTravelPersonal.title') }}</strong>

                @foreach ($employeeList->foreigntravelpersonals ?? [] as $foreignTravelPersonal)
                    <table class="table-bordered table-striped table">
                        <tbody>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.foreignTravelPersonal.fields.id') }}
                                </th>
                                <td>
                                    {{ $foreignTravelPersonal->id }}
                                </td>
                            </tr> --}}
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
                                    {{ $foreignTravelPersonal->purpose_id ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.foreignTravelPersonal.fields.from_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($foreignTravelPersonal->from_date ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.foreignTravelPersonal.fields.to_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($foreignTravelPersonal->to_date ?? 'N/A') }}
                                   
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.foreignTravelPersonal.fields.leave') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($foreignTravelPersonal->leave->start_date ?? 'N/A') }}
                                   
                                </td>
                            </tr>
                        </tbody>
                    </table><br />
                @endforeach


                <!-- <strong id="socialAssPrAttachment"> {{ trans('cruds.socialAssPrAttachment.title') }}</strong>

                @foreach ($employeeList->socialassprattachments ?? [] as $socialAssPrAttachment)
                    <table class="table-bordered table-striped table">
                        <tbody>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.socialAssPrAttachment.fields.id') }}
                                </th>
                                <td>
                                    {{ $socialAssPrAttachment->id }}
                                </td>
                            </tr> --}}
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

                                {{-- @dd($socialAssPrAttachment) --}}
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
                @endforeach -->
                <strong id="extracurriculam"> {{ trans('cruds.extracurriculam.title') }}</strong>
                @foreach ($employeeList->extracurriculams ?? [] as $extracurriculam)
                    <table class="table-bordered table-striped table">
                        <tbody>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.id') }}
                                </th>
                                <td>
                                    {{ $extracurriculam->id }}
                                </td>
                            </tr> --}}
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.employee') }}
                                </th>
                                <td>
                                    {{ $extracurriculam->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.activity_name') }}
                                </th>
                                <td>
                                    {{ $extracurriculam->activity_name ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.organization') }}
                                </th>
                                <td>
                                    {{ $extracurriculam->organization ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.position') }}
                                </th>
                                <td>
                                    {{ $extracurriculam->position ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.start_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($extracurriculam->start_date ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.end_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($extracurriculam->end_date ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.extracurriculam.fields.description') }}
                                </th>
                                <td>
                                    {{ $extracurriculam->description ?? 'N/A'}}
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
                                    {{ $publication->title ?? 'N/A'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.publication.fields.publication_type') }}
                                </th>
                                <td>
                                @if (app()->getLocale() === 'bn')
                                {{ App\Models\Publication::PUBLICATION_TYPE_SELECTBN[$publication->publication_type] ?? 'N/A' }}
                                @else
                                {{ App\Models\Publication::PUBLICATION_TYPE_SELECT[$publication->publication_type] ?? 'N/A' }}
                                @endif
                                    
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
                                {{ englishToBanglaNumber($publication->publication_date ?? 'N/A') }}
                                 
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.publication.fields.publication_link') }}
                                </th>
                                <td>
                                    {{ $publication->publication_link ?? 'N/A'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.publication.fields.description') }}
                                </th>
                                <td>
                                    {{ $publication->description ?? 'N/A'}}
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.publication.fields.employee') }}
                                </th>
                                <td>
                                    {{ $publication->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}

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
                                    {{ $award->title ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.award.fields.ground_area') }}
                                </th>
                                <td>
                                    {{ $award->ground_area ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.award.fields.date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($award->date ?? 'N/A') }}
                                  
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
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.award.fields.employee') }}
                                </th>
                                <td>
                                    {{ $award->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}



                        </tbody>
                    </table><br />
                @endforeach


                <strong id="otherservicejobs"> {{ trans('cruds.otherServiceJob.title') }}</strong>

                @foreach ($employeeList->otherservicejobs ?? [] as $otherServiceJob)
                    <table class="table-bordered table-striped table">
                        <tbody>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.otherServiceJob.fields.id') }}
                                </th>
                                <td>
                                    {{ $otherServiceJob->id }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.otherServiceJob.fields.employer') }}
                                </th>
                                <td>
                                    {{ $otherServiceJob->employer ?? 'N/A'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.otherServiceJob.fields.address') }}
                                </th>
                                <td>
                                    {{ $otherServiceJob->address ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.otherServiceJob.fields.service_type') }}
                                </th>
                                <td>
                                    {{ $otherServiceJob->service_type ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.otherServiceJob.fields.position') }}
                                </th>
                                <td>
                                    {{ $otherServiceJob->position ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.otherServiceJob.fields.from') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($otherServiceJob->from ?? 'N/A') }}
                                   
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.otherServiceJob.fields.to') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($otherServiceJob->to ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.otherServiceJob.fields.employee') }}
                                </th>
                                <td>
                                    {{ $otherServiceJob->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}

                        </tbody>
                    </table><br />
                @endforeach
                <strong id="languages"> {{ trans('cruds.language.title') }}</strong>

                @foreach ($employeeList->languages ?? [] as $language)
                    <table class="table-bordered table-striped table">
                        <tbody>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.language.fields.employee') }}
                                </th>
                                <td>
                                    {{ $language->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.language.fields.language') }}
                                </th>
                                <td>


                                    @if (app()->getLocale() === 'bn')
                                        {{ $language->language->name ?? 'N/A' }}
                                    @else
                                        {{ $language->language->nmae_en ?? 'N/A' }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.language.fields.read') }}
                                </th>
                                <td>


                                    @if (app()->getLocale() === 'bn')
                                        {{ $language->read->name }}
                                    @else
                                        {{ $language->read->name_en }}
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.language.fields.write') }}
                                </th>
                                <td>

                                    @if (app()->getLocale() === 'bn')
                                        {{ $language->write->name }}
                                    @else
                                        {{ $language->write->name_en }}
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.language.fields.speak') }}
                                </th>
                                <td>


                                    @if (app()->getLocale() === 'bn')
                                        {{ $language->speak->name }}
                                    @else
                                        {{ $language->speak->name_en }}
                                    @endif
                                </td>
                            </tr>

                        </tbody>
                    </table><br />
                @endforeach

                <strong id="criminalProsecutione"> {{ trans('cruds.criminalProsecutione.title') }}</strong>

                @foreach ($employeeList->criminalprosecutiones ?? [] as $criminalProsecutione)
                    <table class="table-bordered table-striped table">
                        <tbody>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.criminalProsecutione.fields.employee') }}
                                </th>
                                <td>
                                    {{ $criminalProsecutione->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.criminalProsecutione.fields.judgement_type') }}
                                </th>
                                <td>
                                    {{ $criminalProsecutione->judgement_type ?? 'N/A'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.criminalProsecutione.fields.natureof_offence') }}
                                </th>
                                <td>
                                    {{ $criminalProsecutione->natureof_offence ?? 'N/A'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.criminalProsecutione.fields.government_order_no') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($criminalProsecutione->government_order_no ?? 'N/A') }}
                                    
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
                                    {{ $criminalProsecutione->remzrk ?? 'N/A'}}
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
                                    {{ $criminalproDisciplinary->criminalprosecutione->natureof_offence ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.criminalproDisciplinary.fields.judgement_type') }}
                                </th>
                                <td>
                                    {{ $criminalproDisciplinary->judgement_type ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.criminalproDisciplinary.fields.government_order_no') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($criminalproDisciplinary->government_order_no ?? 'N/A') }}
                                  
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
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.criminalproDisciplinary.fields.remarks') }}
                                </th>
                                <td>
                                    {{ $criminalproDisciplinary->remarks }}
                                </td>
                            </tr> --}}

                        </tbody>
                    </table><br />
                @endforeach

                <strong id="acrMonitoring">{{ trans('cruds.acrMonitoring.title') }}</strong>

                @foreach ($employeeList->acrmonitorings ?? [] as $acrMonitoring)
                    <table class="table-bordered table-striped table">
                        <tbody>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.acrMonitoring.fields.employee') }}
                                </th>
                                <td>
                                    {{ $acrMonitoring->employee->employeeid ?? '' }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    {{ trans('cruds.acrMonitoring.fields.year') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($acrMonitoring->year ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.acrMonitoring.fields.reviewer') }}
                                </th>
                                <td>
                                    {{ $acrMonitoring->reviewer ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.acrMonitoring.fields.review_date') }}
                                </th>
                                <td>
                                {{ englishToBanglaNumber($acrMonitoring->review_date ?? 'N/A') }}
                                    
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                    {{ trans('cruds.acrMonitoring.fields.remarks') }}
                                </th>
                                <td>
                                    {!! $acrMonitoring->remarks !!}
                                </td>
                            </tr> --}}

                        </tbody>
                    </table><br />
                @endforeach
            </div>
        </div>
    </div>
    <htmlpagefooter name="page-footer">

        @if (app()->getLocale() === 'bn')
            পৃষ্ঠা নং: {PAGENO}
        @else
            Page No {PAGENO}
        @endif

        <br><br>
    </htmlpagefooter>
</body>

</html>
