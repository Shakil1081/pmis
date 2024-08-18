@extends('layouts.admin')
@section('content')
    {{-- @can('leave_record_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.leave-records.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.leaveRecord.title_singular') }}
            </a>
                <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                    {{ trans('global.app_csvImport') }}
                </button>
                @include('csvImport.modal', [
                    'model' => 'LeaveRecord',
                    'route' => 'admin.leave-records.parseCsvImport',
                ])
            </div>
        </div>
    @endcan --}}
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.leaveRecord.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <table class="table-bordered table-striped table-hover ajaxTable datatable datatable-LeaveRecord table">
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
                            {{ trans('cruds.leaveRecord.fields.leave_category') }}
                        </th>
                        <th>
                            {{ trans('cruds.leaveRecord.fields.type_of_leave') }}
                        </th>
                        <th>
                            {{ trans('cruds.leaveRecord.fields.start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.leaveRecord.fields.end_date') }}
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
            @can('leave_record_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.leave-records.massDestroy') }}",
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
                ajax: "{{ route('admin.leave-records.index') }}",
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
                        data: 'leave_category_name_bn',
                        name: 'leave_category.name_bn'
                    },
                    {
                        data: 'type_of_leave_name_bn',
                        name: 'type_of_leave.name_bn'
                    },
                    {
                        data: 'start_date',
                        name: 'start_date'
                    },
                    {
                        data: 'end_date',
                        name: 'end_date'
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
            let table = $('.datatable-LeaveRecord').DataTable(dtOverrideGlobals);
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        });
    </script>
@endsection
