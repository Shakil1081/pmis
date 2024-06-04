@extends('layouts.admin')



@section('content')

<div class="row">





        <div class="col-md-6 h4">@if (app()->getLocale() === 'bn')
        আসন্ন কর্মকর্তা/কর্মচারীর অবসর তালিকা (আগামী তিন মাস)
            @else
                Upcoming Employee Retirement List (Next Three Months)
            @endif</div>
        <div class="col-md-6 h4 text-end">

            @if (app()->getLocale() === 'bn')
                মোট কর্মকর্তা/কর্মচারী
            @else
                Total Employee
            @endif
            : {{ $employeeList->count() }}

        </div>

    </div>



@foreach ($employeeList as $result)




<div class="card mb-1 p-2">
            <div class="row justify-content-center align-items-center g-3">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <div class="customer-pic p-2">
                        @if ($result->employee_photo)
                                <a href="{{ $result->employee_photo->getUrl() }}" target="_blank"
                                    style="display: inline-block">

                                    <img src="{{ $result->employee_photo->getUrl('thumb') }}" class="rounded-circle"
                                        width="50" height="50" alt="">
                                </a>
                            @else
                                <img src="{{ asset('assets/images/logo1.png') }}" class="rounded-circle" width="50"
                                    height="50" alt="">
                            @endif
                        </div>
                        <div>
                            <p class="customer-name fw-bold mb-0">

                                @if (app()->getLocale() === 'bn')
                                    {{ $result['fullname_bn'] }}
                                @else
                                    {{ $result['fullname_en'] }}
                                @endif


                            </p>
                            <p class="mb-0">{{ englishToBanglaNumber($result['employeeid'] ?? 'N/A') }}</p>

                        </div>
                    </div>
                </div>
                



                @php
                    $lastJobHistory = $result->jobhistories->last();
                    //dd($lastJobHistory);
                    
                    if ($lastJobHistory) {
                        $designation = $lastJobHistory->designation;
                        if (app()->getLocale() === 'bn') {
                            @$designationName = $designation->name_bn;
                        } else {
                            @$designationName = $designation->name_en;
                        }
                    } else {
                        $designationName = 'N/A';
                    }
                @endphp



                <div class="col">
                    @if ($designationName)
                        <span class="badge bg-warning"style="
                        background-color: #5d1f1f17 !important;
                        color: #5d1f1f !important;
                        padding: 6px !IMPORTANT;
                        border-radius: 25px;
                    "> {{ $designationName }}</span>
                    @endif

                    


                </div>
                <div class="col mb-0"> <b>

                    @if (app()->getLocale() === 'bn')
                        অবসরের তারিখ
                    @else
                        Retirement Date: 
                    @endif </b><br>
                    <p class="mb-0" >{{ englishToBanglaNumber($result['prl_date'] ?? 'N/A') }}</p>



                    
                </div>
                <div class="col text-end">
                    <div class="btn-group">
                        <a href="{{ route('admin.employeedata', ['id' => $result['id']]) }}"
                            class="btn btn-sm btn-outline-success">
                            {{ trans('global.view') }}
                        </a>
                        <a href="{{ route('admin.commonemployeeshow', ['id' => $result['id']]) }}"
                            class="btn btn-sm btn-outline-success">
                            {{ trans('global.edit') }}
                        </a>
                        <a href="{{ route('admin.employeedata.pdf', ['id' => $result['id']]) }}"
                            class="btn btn-sm btn-outline-success">

                            @if (app()->getLocale() === 'bn')
                                পিডিএফ
                            @else
                                PDF
                            @endif

                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
@endsection
