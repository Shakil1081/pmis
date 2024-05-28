@extends('layouts.admin')

@section('content')
    <h4> {{ trans('cruds.employeeList.title_singular') }} {{ trans('global.list') }}</h4>
    @livewire('employee-list-review')
@endsection
