@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.siteSetting.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.site-settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSetting.fields.id') }}
                        </th>
                        <td>
                            {{ $siteSetting->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSetting.fields.title') }}
                        </th>
                        <td>
                            {{ $siteSetting->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSetting.fields.site_logo') }}
                        </th>
                        <td>
                            @if($siteSetting->site_logo)
                                <a href="{{ $siteSetting->site_logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $siteSetting->site_logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSetting.fields.copyright') }}
                        </th>
                        <td>
                            {{ $siteSetting->copyright }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSetting.fields.helpline') }}
                        </th>
                        <td>
                            {{ $siteSetting->helpline }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSetting.fields.title_en') }}
                        </th>
                        <td>
                            {{ $siteSetting->title_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSetting.fields.favicon') }}
                        </th>
                        <td>
                            @if($siteSetting->favicon)
                                <a href="{{ $siteSetting->favicon->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $siteSetting->favicon->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.site-settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection