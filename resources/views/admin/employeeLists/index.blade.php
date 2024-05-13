@extends('layouts.admin')

@section('content')
    <h4> {{ trans('cruds.employeeList.title_singular') }} {{ trans('global.list') }}</h4>
    <div class="card mb-1">
        <div class="table-responsive p-3">

            <div class="row justify-content-center align-items-center g-1">
                <div class="col">
                    @can('employee_list_create')
                        <div style="margin-bottom: 10px;" class="row">
                            <div class="col-lg-12">
                                <a class="btn btn-success" href="{{ route('admin.employee-lists.create') }}">
                                    {{ trans('global.add') }} {{ trans('cruds.employeeList.title_singular') }}
                                </a>
                            </div>
                        </div>
                    @endcan

                </div>
                <div class="col">
                    <h4 class="text-secoundery">Total Employee: {{ $data['total'] }}</h4>
                </div>
                <div class="col">
                    <div class="position-relative">
                        <input class="form-control px-5" type="search" placeholder="Search Customers">
                        <span
                            class="material-icons-outlined position-absolute translate-middle-y top-50 fs-5 start-0 ms-3">search</span>
                    </div>
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
                                <img src="http://127.0.0.1:8000/assets/images/logo1.png" class="rounded-circle"
                                    width="40" height="40" alt="">
                            </div>
                            <div>
                                <p class="customer-name fw-bold mb-0">{{ $result['fullname_bn'] }}</p>
                                <p class="samall mb-0">{{ $result['employeeid'] }}</p>
                                <p class="samall mb-0">Position:</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <small>Profile progress</small>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>
                    <div class="col text-end">
                        <div class="btn-group">
                            <a href="{{ route('admin.employeedata', ['id' => $empID]) }}" class="btn btn-success">
                                {{ trans('global.view') }}
                            </a>
                            <a href="{{ route('admin.commonemployeeshow', ['id' => $empID]) }}" class="btn btn-success">
                                {{ trans('global.edit') }}
                            </a>
                            <a href="{{ route('admin.employeedata', ['id' => $empID]) }}" class="btn btn-success">
                                {{ trans('global.print') }}
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
