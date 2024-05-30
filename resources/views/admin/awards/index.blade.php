@extends('layouts.admin')
@section('content')
    @can('award_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.awards.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.award.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.award.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table-bordered table-striped table-hover datatable datatable-Award table">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.award.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.award.fields.title') }}
                            </th>
                            <th>
                                {{ trans('cruds.award.fields.ground_area') }}
                            </th>
                            <th>
                                {{ trans('cruds.award.fields.date') }}
                            </th>
                            <th>
                                {{ trans('cruds.award.fields.certificate') }}
                            </th>
                            <th>
                                {{ trans('cruds.award.fields.employee') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($awards as $key => $award)
                            <tr data-entry-id="{{ $award->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $award->id ?? '' }}
                                </td>
                                <td>
                                    {{ $award->title ?? '' }}
                                </td>
                                <td>
                                    {{ $award->ground_area ?? '' }}
                                </td>
                                <td>
                                    {{ $award->date ?? '' }}
                                </td>
                                <td>
                                    @if ($award->certificate)
                                        <a href="{{ $award->certificate->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    {{ $award->employee->employeeid ?? '' }}
                                </td>
                                <td>
                                    @can('award_show')
                                        <a class="btn btn-sm btn-success px-2"
                                            href="{{ route('admin.awards.show', $award->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('award_edit')
                                        <a class="btn btn-sm btn-warning px-2"
                                            href="{{ route('admin.awards.edit', $award->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('award_delete')
                                        <form action="{{ route('admin.awards.destroy', $award->id) }}" method="POST"
                                            onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
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
            @can('award_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.awards.massDestroy') }}",
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
            let table = $('.datatable-Award:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })
    </script>
@endsection
