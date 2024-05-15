@extends('layouts.admin')
@section('content')
    @can('employee_list_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.employee-lists.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.employeeList.title_singular') }}
                </a>
            </div>
        </div>
    @endcan

    <div class="card-header">
        {{ trans('cruds.employeeList.title_singular') }} {{ trans('global.list') }}
    </div>


    @foreach ($data['allresult'] as $result)
        @php
            $empID = $result['id'];
        @endphp
        <div class="card">
            <div class="table-responsive my-2 p-3">
                <h5 class="text-success" title="{{ $result['fullname_en'] }}">{{ $result['fullname_bn'] }}
                    ({{ $result['employeeid'] }})
                </h5>
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-flex align-items-start justify-content-center"> <img
                                        src="http://127.0.0.1:8000/assets/images/logo1.png" width="100" class="rounded-3"
                                        alt=""></div>


                            </div>
                            <div class="col-md-8">
                                <p> nnsdfsdf fsmdf sdmf</p>
                                <p> nnsdfsdf fsmdf sdmf</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        @can('education_informatione_access')
                            <a href="{{ route('admin.employeedata', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success m-1 text-left">
                                {{ trans('global.view') }}
                            </a>
                        @endcan

                        @can('education_informatione_access')
                            <a href="{{ route('admin.commonemployeeshow', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success m-1 text-left">
                                Add data for this user
                            </a>
                        @endcan
                        @can('education_informatione_access')
                            <a href="{{ route('admin.education-informationes.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success m-1 text-left">
                                {{ trans('cruds.educationInformatione.title') }}
                            </a>
                        @endcan
                        @can('professionale_access')
                            <a href="{{ route('admin.professionales.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success m-1 text-left">
                                {{ trans('cruds.professionale.title') }}
                            </a>
                        @endcan
                        @can('addressdetaile_access')
                            <a href="{{ route('admin.addressdetailes.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success m-1 text-left">
                                {{ trans('cruds.addressdetaile.title') }}
                            </a>
                        @endcan
                        @can('emergence_contacte_access')
                            <a href="{{ route('admin.emergence-contactes.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-danger m-1 text-left">
                                {{ trans('cruds.emergenceContacte.title') }}
                            </a>
                        @endcan
                        @can('spouse_informatione_access')
                            <a href="{{ route('admin.spouse-informationes.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success m-1 text-left">
                                {{ trans('cruds.spouseInformatione.title') }}
                            </a>
                        @endcan
                        @can('child_access')
                            <a href="{{ route('admin.children.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success m-1 text-left">
                                {{ trans('cruds.child.title') }}
                            </a>
                        @endcan
                        @can('job_history_access')
                            <a href="{{ route('admin.job-histories.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success m-1 text-left">
                                {{ trans('cruds.jobHistory.title') }}
                            </a>
                        @endcan

                    </div>
                    <div class="col">
                        @can('employee_promotion_access')
                            <a href="{{ route('admin.employee-promotions.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success {{ request()->is('admin/employee-promotions') || request()->is('admin/employee-promotions/*') ? 'c-active' : '' }} m-1 text-left">
                                {{ trans('cruds.employeePromotion.title') }}
                            </a>
                        @endcan
                        @can('leave_record_access')
                            <a href="{{ route('admin.leave-records.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success {{ request()->is('admin/leave-records') || request()->is('admin/leave-records/*') ? 'c-active' : '' }} m-1 text-left">
                                {{ trans('cruds.leaveRecord.title') }}
                            </a>
                        @endcan
                        @can('service_particular_access')
                            <a href="{{ route('admin.service-particulars.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success {{ request()->is('admin/service-particulars') || request()->is('admin/service-particulars/*') ? 'c-active' : '' }} m-1 text-left">
                                {{ trans('cruds.serviceParticular.title') }}
                            </a>
                        @endcan
                        @can('training_access')
                            <a href="{{ route('admin.trainings.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success {{ request()->is('admin/trainings') || request()->is('admin/trainings/*') ? 'c-active' : '' }} m-1 text-left">
                                {{ trans('cruds.training.title') }}
                            </a>
                        @endcan
                        @can('travel_record_access')
                            <a href="{{ route('admin.travel-records.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success {{ request()->is('admin/travel-records') || request()->is('admin/travel-records/*') ? 'c-active' : '' }} m-1 text-left">
                                {{ trans('cruds.travelRecord.title') }}
                            </a>
                        @endcan
                        @can('foreign_travel_personal_access')
                            <a href="{{ route('admin.foreign-travel-personals.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success {{ request()->is('admin/foreign-travel-personals') || request()->is('admin/foreign-travel-personals/*') ? 'c-active' : '' }} m-1 text-left">
                                {{ trans('cruds.foreignTravelPersonal.title') }}
                            </a>
                        @endcan
                        @can('social_ass_pr_attachment_access')
                            <a href="{{ route('admin.social-ass-pr-attachments.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success {{ request()->is('admin/social-ass-pr-attachments') || request()->is('admin/social-ass-pr-attachments/*') ? 'c-active' : '' }} m-1 text-left">
                                {{ trans('cruds.socialAssPrAttachment.title') }}
                            </a>
                        @endcan
                    </div>
                    <div class="col">
                        @can('extracurriculam_access')
                            <a href="{{ route('admin.extracurriculams.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success {{ request()->is('admin/extracurriculams') || request()->is('admin/extracurriculams/*') ? 'c-active' : '' }} m-1 text-left">
                                {{ trans('cruds.extracurriculam.title') }}
                            </a>
                        @endcan
                        @can('publication_access')
                            <a href="{{ route('admin.publications.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success {{ request()->is('admin/publications') || request()->is('admin/publications/*') ? 'c-active' : '' }} m-1 text-left">
                                {{ trans('cruds.publication.title') }}
                            </a>
                        @endcan
                        @can('award_access')
                            <a href="{{ route('admin.awards.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success {{ request()->is('admin/awards') || request()->is('admin/awards/*') ? 'c-active' : '' }} m-1 text-left">
                                {{ trans('cruds.award.title') }}
                            </a>
                        @endcan
                        @can('other_service_job_access')
                            <a href="{{ route('admin.other-service-jobs.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success {{ request()->is('admin/other-service-jobs') || request()->is('admin/other-service-jobs/*') ? 'c-active' : '' }} m-1 text-left">
                                {{ trans('cruds.otherServiceJob.title') }}
                            </a>
                        @endcan
                        @can('language_access')
                            <a href="{{ route('admin.languages.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success {{ request()->is('admin/languages') || request()->is('admin/languages/*') ? 'c-active' : '' }} m-1 text-left">
                                {{ trans('cruds.language.title') }}
                            </a>
                        @endcan
                        @can('criminal_prosecutione_access')
                            <a href="{{ route('admin.criminal-prosecutiones.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success {{ request()->is('admin/criminal-prosecutiones') || request()->is('admin/criminal-prosecutiones/*') ? 'c-active' : '' }} m-1 text-left">
                                {{ trans('cruds.criminalProsecutione.title') }}
                            </a>
                        @endcan
                        @can('criminalpro_disciplinary_access')
                            <a href="{{ route('admin.criminalpro-disciplinaries.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success {{ request()->is('admin/criminalpro-disciplinaries') || request()->is('admin/criminalpro-disciplinaries/*') ? 'c-active' : '' }} m-1 text-left">
                                {{ trans('cruds.criminalproDisciplinary.title') }}
                            </a>
                        @endcan
                        @can('acr_monitoring_access')
                            <a href="{{ route('admin.acr-monitorings.create', ['id' => $empID]) }}"
                                class="btn btn-sm w-100 btn-outline-success {{ request()->is('admin/acr-monitorings') || request()->is('admin/acr-monitorings/*') ? 'c-active' : '' }} m-1 text-left">
                                {{ trans('cruds.acrMonitoring.title') }}
                            </a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="card">
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
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('employee_list_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.employee-lists.massDestroy') }}",
                    className: 'btn-danger',
                    action: function(e, dt, node, config) {
                        var ids = $.map(dt.rows({
                            selected: true
                        }).data(), function(entry) {
                            return entry.id
                        });

                        if (ids.length === 0) {
                            alert('{{ trans('global.datatables.zero_selected') }}')

                            return
                        }

                        if (confirm('{{ trans('global.areYouSure') }}')) {
                            $.ajax({
                                    headers: {
                                        'x-csrf-token': _token
                                    },
                                    method: 'POST',
                                    url: config.url,
                                    data: {
                                        ids: ids,
                                        _method: 'DELETE'
                                    }
                                })
                                .done(function() {
                                    location.reload()
                                })
                        }
                    }
                }
                dtButtons.push(deleteButton)
            @endcan

            let dtOverrideGlobals = {
                buttons: dtButtons,
                processing: true,
                serverSide: true,
                retrieve: true,
                aaSorting: [],
                ajax: "{{ route('admin.employee-lists.index') }}",
                columns: [{
                        data: 'placeholder',
                        name: 'placeholder'
                    },
                    {
                        data: 'employeeid',
                        name: 'employeeid'
                    },
                    {
                        data: 'batch_batch_bn',
                        name: 'batch.batch_bn'
                    },
                    {
                        data: 'home_district_name_bn',
                        name: 'home_district.name_bn'
                    },
                    {
                        data: 'marital_statu_name',
                        name: 'marital_statu.name'
                    },
                    {
                        data: 'gender_name_bn',
                        name: 'gender.name_bn'
                    },
                    {
                        data: 'religion_name_bn',
                        name: 'religion.name_bn'
                    },
                    {
                        data: 'blood_group_name_bn',
                        name: 'blood_group.name_bn'
                    },
                    {
                        data: 'nid',
                        name: 'nid'
                    },
                    {
                        data: 'license_type_name_bn',
                        name: 'license_type.name_bn'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'mobile_number',
                        name: 'mobile_number'
                    },
                    {
                        data: 'joiningexaminfo_exam_name_bn',
                        name: 'joiningexaminfo.exam_name_bn'
                    },
                    {
                        data: 'grade_name_bn',
                        name: 'grade.name_bn'
                    },
                    {
                        data: 'fjoining_date',
                        name: 'fjoining_date'
                    },
                    {
                        data: 'first_joining_office_name',
                        name: 'first_joining_office_name'
                    },
                    {
                        data: 'first_joining_g_o_date',
                        name: 'first_joining_g_o_date'
                    },
                    {
                        data: 'first_joining_memo_no',
                        name: 'first_joining_memo_no'
                    },
                    {
                        data: 'first_joining_order',
                        name: 'first_joining_order',
                        sortable: false,
                        searchable: false
                    },
                    {
                        data: 'fjoining_letter',
                        name: 'fjoining_letter',
                        sortable: false,
                        searchable: false
                    },
                    {
                        data: 'date_of_gazette',
                        name: 'date_of_gazette'
                    },
                    {
                        data: 'date_of_gazette_if_any',
                        name: 'date_of_gazette_if_any',
                        sortable: false,
                        searchable: false
                    },
                    {
                        data: 'date_of_regularization',
                        name: 'date_of_regularization'
                    },
                    {
                        data: 'regularization_issue_date',
                        name: 'regularization_issue_date'
                    },
                    {
                        data: 'regularization_office_orde_go',
                        name: 'regularization_office_orde_go',
                        sortable: false,
                        searchable: false
                    },
                    {
                        data: 'date_of_con_serviec',
                        name: 'date_of_con_serviec'
                    },
                    {
                        data: 'confirmation_in_service',
                        name: 'confirmation_in_service',
                        sortable: false,
                        searchable: false
                    },
                    {
                        data: 'quota_name_bn',
                        name: 'quota.name_bn'
                    },
                    {
                        data: 'actions',
                        name: '{{ trans('global.actions') }}'
                    }
                ],
                orderCellsTop: true,
                order: [
                    [1, 'desc']
                ],
                pageLength: 25,
            };
            let table = $('.datatable-EmployeeList').DataTable(dtOverrideGlobals);
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        });
    </script>
@endsection
