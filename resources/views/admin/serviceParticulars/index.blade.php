@extends('layouts.admin')
@section('content')
    @can('service_particular_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.service-particulars.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.serviceParticular.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.serviceParticular.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table-bordered table-striped table-hover datatable datatable-ServiceParticular table">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.serviceParticular.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.serviceParticular.fields.designation') }}
                            </th>
                            <th>
                                {{ trans('cruds.serviceParticular.fields.designation_status') }}
                            </th>
                            <th>
                                {{ trans('cruds.serviceParticular.fields.office_organization_institute') }}
                            </th>
                            <th>
                                {{ trans('cruds.serviceParticular.fields.joining_date') }}
                            </th>
                            <th>
                                {{ trans('cruds.serviceParticular.fields.release_date') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($serviceParticulars as $key => $serviceParticular)
                            <tr data-entry-id="{{ $serviceParticular->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $serviceParticular->id ?? '' }}
                                </td>
                                <td>
                                    {{ $serviceParticular->designation->name_bn ?? '' }}
                                </td>
                                <td>
                                    {{ $serviceParticular->designation_status ?? '' }}
                                </td>
                                <td>
                                    {{ $serviceParticular->office_organization_institute ?? '' }}
                                </td>
                                <td>
                                    {{ $serviceParticular->joining_date ?? '' }}
                                </td>
                                <td>
                                    {{ $serviceParticular->release_date ?? '' }}
                                </td>
                                <td>
                                    @can('service_particular_show')
                                        <a class="btn btn-sm btn-success px-2"
                                            href="{{ route('admin.service-particulars.show', $serviceParticular->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('service_particular_edit')
                                        <a class="btn btn-sm btn-warning px-2"
                                            href="{{ route('admin.service-particulars.edit', $serviceParticular->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('service_particular_delete')
                                        <form action="{{ route('admin.service-particulars.destroy', $serviceParticular->id) }}"
                                            method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                            style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-sm btn-danger px-2"
                                                value="{{ trans('global.delete') }}">
                                        </form>
                                    @endcan

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('service_particular_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.service-particulars.massDestroy') }}",
                    className: 'btn-danger',
                    action: function(e, dt, node, config) {
                        var ids = $.map(dt.rows({
                            selected: true
                        }).nodes(), function(entry) {
                            return $(entry).data('entry-id')
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

            $.extend(true, $.fn.dataTable.defaults, {
                orderCellsTop: true,
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            let table = $('.datatable-ServiceParticular:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })
    </script>
@endsection
