@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6 h4">{{ trans('cruds.employeeList.title_singular') }} {{ trans('global.list') }} </div>
        <div class="col-md-6 h4 text-end">

            @if (app()->getLocale() === 'bn')
                মোট কর্মকর্তা/কর্মচারী
            @else
                Total Employee
            @endif
            : {{ $data['total'] ?? 0 }}

        </div>

    </div>

    <div class="card mb-1">
        <div class="table-responsive p-3">

            <div class="row justify-content-center align-items-center g-1">
                <div class="col">
                    <div class="position-relative">
                        <input class="form-control px-5" type="search">
                        <span
                            class="material-icons-outlined position-absolute translate-middle-y top-50 fs-5 start-0 ms-3">search</span>
                    </div>
                </div>
                <div class="col text-end">

                    @can('employee_list_create')
                        <a class="btn btn-success" href="{{ route('admin.employee-lists.create') }}"> <i class="fa fa-plus"
                                aria-hidden="true"></i>
                            {{ trans('global.add') }} {{ trans('cruds.employeeList.title_singular') }}
                        </a>
                    @endcan
                    {{-- <button type="button" class="btn btn- btn-success">
                        <i class="fa fa-filter" aria-hidden="true"></i>

                        @if (app()->getLocale() === 'bn')
                            ফিল্টার
                        @else
                            Filter
                        @endif

                    </button> --}}


                </div>
            </div>
        </div>
    </div>
    @foreach ($data['allresult'] as $result)
        @php
            $empID = $result['id'];
        @endphp
        <div class="card mb-1">
            <div class="table-responsive p-3">
                <div class="row justify-content-center align-items-center g-1">
                    <div class="col">
                        <div class="d-flex align-items-center gap-3">
                            <div class="customer-pic">
                                <img src="{{ asset('assets/images/logo1.png') }}" class="rounded-circle" width="80"
                                    height="80" alt="">
                            </div>
                            <div>
                                <p class="customer-name fw-bold mb-0">

                                    @if (app()->getLocale() === 'bn')
                                        {{ $result['fullname_bn'] }}
                                    @else
                                        {{ $result['fullname_en'] }}
                                    @endif


                                </p>
                                <p class="mb-0">{{ $result['employeeid'] }}</p>
                                <p>
                                    {{-- @php
                                        $lastJobHistory = $result->jobhistories->last();
                                        if ($lastJobHistory && $lastJobHistory->relationLoaded('designation')) {
                                            $designation = $lastJobHistory->designation;
                                            @$designationName = $designation->name_bn;
                                        } else {
                                            $designationName = 'NA';
                                        }
                                    @endphp
                                    <small>{{ $designationName }}</small> --}}


                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">

                        @if (app()->getLocale() === 'bn')
                            প্রোফাইলের অগ্রগতি
                        @else
                            Profile progress
                        @endif



                        <div class="progress">
                            @php
                                $total = 0;
                                $totalvalue = 16;

                                $relationships = [
                                    'batch',
                                    'educations',
                                    'professionales',
                                    'addressdetailes',
                                    'emergencecontactes',
                                    'spouseinformationes',
                                    'childinformationes',
                                    'jobhistories',
                                    'employeepromotions',
                                    'trainings',
                                    'travelRecords',
                                    'foreigntravelpersonals',
                                    'extracurriculams',
                                    'otherservicejobs',
                                    'languages',
                                    'acrmonitorings',
                                ];
                                // foreach ($relationships as $relationship) {
                                //     if ($result->{$relationship}) {
                                //         $total++;
                                //     }
                                // }

                                foreach ($relationships as $relationship) {
                                    // Use null coalescing operator to provide an empty collection if the relationship is null
                                    $countable = $result->{$relationship} ?? collect();
                                    if ($countable->count()) {
                                        $total++;
                                    }
                                }

                                // Calculate progress percentage
                                $progress = ($total / $totalvalue) * 100;
                            @endphp

                            <div class="progress-bar" role="progressbar" style="width:{{ round($progress) }}%;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ round($progress) }}%</div>
                        </div>


                    </div>
                    <div class="col text-end">
                        <div class="btn-group">
                            <a href="{{ route('admin.employeedata', ['id' => $empID]) }}"
                                class="btn btn-sm btn-outline-success">
                                {{ trans('global.view') }}
                            </a>
                            <a href="{{ route('admin.commonemployeeshow', ['id' => $empID]) }}"
                                class="btn btn-sm btn-outline-success">
                                {{ trans('global.edit') }}
                            </a>
                            <a href="{{ route('admin.employeedata.pdf', ['id' => $empID]) }}"
                                class="btn btn-sm btn-outline-success">

                                @if (app()->getLocale() === 'bn')
                                    পিডিএফ
                                @else
                                    PDF
                                @endif




                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach




    <div class="pagination">
        {{ $data['allresult']->links('pagination::bootstrap-4') }}
    </div>

    {{-- <div class="card d-none">
        <div class="card-body">
            <table class="table-bordered table-striped table-hover ajaxTable datatable datatable-EmployeeList table">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.employeeid') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.batch') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.home_district') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.marital_statu') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.gender') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.religion') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.blood_group') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.nid') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.license_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.mobile_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.joiningexaminfo') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.grade') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.fjoining_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.first_joining_office_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.first_joining_g_o_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.first_joining_memo_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.first_joining_order') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.fjoining_letter') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.date_of_gazette') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.date_of_gazette_if_any') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.date_of_regularization') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.regularization_issue_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.regularization_office_orde_go') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.date_of_con_serviec') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.confirmation_in_service') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.quota') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div> --}}
@endsection
