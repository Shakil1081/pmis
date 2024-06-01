@extends('layouts.admin')
@section('content')
    {{-- @can('other_service_job_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.other-service-jobs.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.otherServiceJob.title_singular') }}
                </a>
            </div>
        </div>
    @endcan --}}
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.otherServiceJob.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table-bordered table-striped table-hover datatable datatable-OtherServiceJob table">
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
                                {{ trans('cruds.otherServiceJob.fields.employer') }}
                            </th>
                            
                            <th>
                                {{ trans('cruds.otherServiceJob.fields.service_type') }}
                            </th>
                            <th>
                                {{ trans('cruds.otherServiceJob.fields.position') }}
                            </th>
                            <th>
                                {{ trans('cruds.otherServiceJob.fields.address') }}
                            </th>
                            <th>
                                {{ trans('cruds.otherServiceJob.fields.from') }}
                            </th>
                            <th>
                                {{ trans('cruds.otherServiceJob.fields.to') }}
                            </th>
                            
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($otherServiceJobs as $key => $otherServiceJob)
                            <tr data-entry-id="{{ $otherServiceJob->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $otherServiceJob->employee->employeeid ?? '' }}
                                </td>
                                <td>
                                    {{ $otherServiceJob->employee->fullname_en ?? '' }}
                                </td>
                               
                                <td>
                                    {{ $otherServiceJob->employer ?? '' }}
                                </td>
                               
                                <td>
                                    {{ $otherServiceJob->service_type ?? '' }}
                                </td>
                                <td>
                                    {{ $otherServiceJob->position ?? '' }}
                                </td>
                                <td>
                                    {{ $otherServiceJob->address ?? '' }}
                                </td>
                                <td>
                                    {{ $otherServiceJob->from ?? '' }}
                                </td>
                                <td>
                                    {{ $otherServiceJob->to ?? '' }}
                                </td>
                                
                                <td>
                                    @can('other_service_job_show')
                                        <a class="btn btn-sm btn-success px-2"
                                            href="{{ route('admin.other-service-jobs.show', $otherServiceJob->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('other_service_job_edit')
                                        <a class="btn btn-sm btn-warning px-2"
                                            href="{{ route('admin.other-service-jobs.edit', $otherServiceJob->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('other_service_job_delete')
                                        <form action="{{ route('admin.other-service-jobs.destroy', $otherServiceJob->id) }}"
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
            @can('other_service_job_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.other-service-jobs.massDestroy') }}",
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
            let table = $('.datatable-OtherServiceJob:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })
    </script>
@endsection
