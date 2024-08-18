@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <h1>Employee</h1>
            <div class="row">
                @include('admin.commonemployee.commonmenu')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                        <div>
                            <h3> {{ trans('cruds.employeeList.title') }}</h3>
                            @include('admin.commonemployee.employeeform')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
