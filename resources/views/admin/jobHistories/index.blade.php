@extends('layouts.admin')
@section('content')
    {{-- @can('job_history_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.job-histories.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.jobHistory.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'JobHistory', 'route' => 'admin.job-histories.parseCsvImport'])
        </div>
    </div>
@endcan --}}
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.jobHistory.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <table class="table-bordered table-striped table-hover ajaxTable datatable datatable-JobHistory table">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                        @if (app()->getLocale() === 'bn')
                        কর্মকর্তা/কর্মচারী আইডি
                    @else
                        Employee ID
                    @endif
                        </th>
                        <th>
                        @if (app()->getLocale() === 'bn')
                        কর্মকর্তা/কর্মচারী নাম
                    @else
                        Employee Name
                    @endif
                        </th>
                        <th>
                            {{ trans('cruds.jobHistory.fields.designation') }}
                        </th>
                        <th>
                            {{ trans('cruds.jobHistory.fields.joining_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.jobHistory.fields.release_date') }}
                        </th>
                        
                        <th>
                            {{ trans('cruds.employeeList.fields.fullname_bn') }}
                        </th>
                        <th>
                            {{ trans('cruds.jobHistory.fields.grade') }}
                        </th>
                        <th>
                            {{ trans('cruds.grade.fields.salary_range') }}
                        </th>
                        <th>
                            {{ trans('cruds.jobHistory.fields.institutename') }}
                        </th>
                        <th>
                            {{ trans('cruds.jobHistory.fields.circle_list') }}
                        </th>
                        <th>
                            {{ trans('cruds.jobHistory.fields.division_list') }}
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
            @can('job_history_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.job-histories.massDestroy') }}",
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
                ajax: "{{ route('admin.job-histories.index') }}",
                columns: [{
                        data: 'placeholder',
                        name: 'placeholder'
                    },
                    {
                        data: 'employee_employeeid',
                        name: 'employee.employeeid'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'designation_name_bn',
                        name: 'designation.name_bn'
                    },
                    {
                        data: 'joining_date',
                        name: 'joining_date'
                    },
                    {
                        data: 'release_date',
                        name: 'release_date'
                    },
                    
                    {
                        data: 'employee.fullname_bn',
                        name: 'employee.fullname_bn'
                    },
                    {
                        data: 'grade_name_bn',
                        name: 'grade.name_bn'
                    },
                    {
                        data: 'grade.salary_range',
                        name: 'grade.salary_range'
                    },
                    {
                        data: 'institutename',
                        name: 'institutename'
                    },
                    {
                        data: 'circle_list_name_bn',
                        name: 'circle_list.name_bn'
                    },
                    {
                        data: 'division_list_name_bn',
                        name: 'division_list.name_bn'
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
                pageLength: 10,
            };
            let table = $('.datatable-JobHistory').DataTable(dtOverrideGlobals);
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        });
    </script>
@endsection
