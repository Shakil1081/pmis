@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.extracurriculam.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.extracurriculams.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.extracurriculam.fields.id') }}
                        </th>
                        <td>
                            {{ $extracurriculam->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.extracurriculam.fields.employee') }}
                        </th>
                        <td>
                            {{ $extracurriculam->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.extracurriculam.fields.activity_name') }}
                        </th>
                        <td>
                            {{ $extracurriculam->activity_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.extracurriculam.fields.organization') }}
                        </th>
                        <td>
                            {{ $extracurriculam->organization }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.extracurriculam.fields.position') }}
                        </th>
                        <td>
                            {{ $extracurriculam->position }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.extracurriculam.fields.start_date') }}
                        </th>
                        <td>
                            {{ $extracurriculam->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.extracurriculam.fields.end_date') }}
                        </th>
                        <td>
                            {{ $extracurriculam->end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.extracurriculam.fields.description') }}
                        </th>
                        <td>
                            {!! $extracurriculam->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.extracurriculam.fields.attatchment') }}
                        </th>
                        <td>
                            @if($extracurriculam->attatchment)
                                <a href="{{ $extracurriculam->attatchment->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.extracurriculams.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection