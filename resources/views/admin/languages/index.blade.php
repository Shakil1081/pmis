@extends('layouts.admin')
@section('content')
    {{-- @can('language_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.languages.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.language.title_singular') }}
            </a>
        </div>
    </div>
@endcan --}}
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.language.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <table class="table-bordered table-striped table-hover ajaxTable datatable datatable-Language table">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.language.fields.employee') }}
                        </th>
                        <th>
                            {{ trans('cruds.language.fields.read') }}
                        </th>
                        <th>
                            {{ trans('cruds.language.fields.write') }}
                        </th>
                        <th>
                            {{ trans('cruds.language.fields.speak') }}
                        </th>
                        <th>
                            {{ trans('cruds.language.fields.language') }}
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
            @can('language_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.languages.massDestroy') }}",
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
                ajax: "{{ route('admin.languages.index') }}",
                columns: [{
                        data: 'placeholder',
                        name: 'placeholder'
                    },
                    {
                        data: 'employee_employeeid',
                        name: 'employee.employeeid'
                    },
                    {
                        data: 'read_name',
                        name: 'read.name'
                    },
                    {
                        data: 'write_name',
                        name: 'write.name'
                    },
                    {
                        data: 'speak_name',
                        name: 'speak.name'
                    },
                    {
                        data: 'language_name',
                        name: 'language.name'
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
            let table = $('.datatable-Language').DataTable(dtOverrideGlobals);
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        });
    </script>
@endsection
