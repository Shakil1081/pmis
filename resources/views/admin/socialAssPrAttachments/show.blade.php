@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.socialAssPrAttachment.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.social-ass-pr-attachments.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.socialAssPrAttachment.fields.id') }}
                        </th>
                        <td>
                            {{ $socialAssPrAttachment->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.socialAssPrAttachment.fields.degree_membership_organization') }}
                        </th>
                        <td>
                            {{ $socialAssPrAttachment->degree_membership_organization }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.socialAssPrAttachment.fields.description') }}
                        </th>
                        <td>
                            {{ $socialAssPrAttachment->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.socialAssPrAttachment.fields.certificate_achievement') }}
                        </th>
                        <td>
                            {{ $socialAssPrAttachment->certificate_achievement }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.socialAssPrAttachment.fields.employee') }}
                        </th>
                        <td>
                            {{ $socialAssPrAttachment->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.social-ass-pr-attachments.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection