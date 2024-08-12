@extends('layouts.admin')
@section('content')
<div class="card p-2">
    <div class="container">
        <div class="row">
            @include('admin.commonemployee.commonmenu')
            <div class="col-md-8">
                <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                    <h4>{{ trans('global.create') }} {{ trans('cruds.emergenceContacte.title_singular') }}</h4>

                    <form id="emergencyContactForm" method="POST"
                        action="{{ route('admin.emergence-contactes.store', ['employee_id' => request()->query('id')]) }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row row-cols-3">
                            <div class="form-group">
                                <label class="required"
                                    for="contact_person_name">{{ trans('cruds.emergenceContacte.fields.contact_person_name') }}</label>
                                <input
                                    class="form-control {{ $errors->has('contact_person_name') ? 'is-invalid' : '' }}"
                                    type="text" name="contact_person_name" id="contact_person_name"
                                    value="{{ old('contact_person_name', '') }}" required>
                                @if ($errors->has('contact_person_name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('contact_person_name') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.emergenceContacte.fields.contact_person_name_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label class="required"
                                    for="contact_person_relation">{{ trans('cruds.emergenceContacte.fields.contact_person_relation') }}</label>
                                <input
                                    class="form-control {{ $errors->has('contact_person_relation') ? 'is-invalid' : '' }}"
                                    type="text" name="contact_person_relation" id="contact_person_relation"
                                    value="{{ old('contact_person_relation', '') }}" required>
                                @if ($errors->has('contact_person_relation'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('contact_person_relation') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.emergenceContacte.fields.contact_person_relation_helper') }}</span>
                            </div>

                            <div class="form-group">
                                <label class="required"
                                    for="contact_person_number">{{ trans('cruds.emergenceContacte.fields.contact_person_number') }}</label>
                                <input
                                    class="form-control {{ $errors->has('contact_person_number') ? 'is-invalid' : '' }}"
                                    type="text" name="contact_person_number" id="contact_person_number"
                                    value="{{ old('contact_person_number', '') }}" required>
                                @if ($errors->has('contact_person_number'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('contact_person_number') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.emergenceContacte.fields.contact_person_number_helper') }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">{{ trans('cruds.emergenceContacte.fields.address') }}</label>
                            <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                name="address" id="address">{{ old('address') }}</textarea>
                            @if ($errors->has('address'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('address') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.emergenceContacte.fields.address_helper') }}</span>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-danger" type="button" onclick="showConfirmationModal()">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="confirmationModalLabel">@if (app()->getLocale() === 'bn')
                    জরুরি যোগাযোগ
                @else
                    Emergency Contact
                @endif</
                h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="modalContactPersonName">@if (app()->getLocale() === 'bn')
                        নাম
                    @else
                        Name
                    @endif</label>
                    <input type="text" class="form-control" id="modalContactPersonName" readonly>
                </div>
                <div class="form-group">
                    <label for="modalContactPersonRelation">@if (app()->getLocale() === 'bn')
                        সম্পর্ক
                    @else
                        Relation
                    @endif</label>
                    <input type="text" class="form-control" id="modalContactPersonRelation" readonly>
                </div>
                <div class="form-group">
                    <label for="modalContactPersonNumber">@if (app()->getLocale() === 'bn')
                        যোগাযোগের নাম্বার
                    @else
                        Contact Number
                    @endif</label>
                    <input type="text" class="form-control" id="modalContactPersonNumber" readonly>
                </div>
                <div class="form-group">
                    <label for="modalAddress">@if (app()->getLocale() === 'bn')
                        ঠিকানা
                    @else
                        Address
                    @endif</label>
                    <textarea class="form-control" id="modalAddress" readonly></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@if (app()->getLocale() === 'bn')
                    বাতিল
                @else
                    Cancel
                @endif</button>
                <button type="button" class="btn btn-primary" onclick="submitForm()">@if (app()->getLocale() === 'bn')
                    সংরক্ষণ
                @else
                    Submit
                @endif</button>
            </div>
        </div>
    </div>
</div>

<!-- Inline JavaScript -->
<script>
    function showConfirmationModal() {
        // Get form values
        const contactPersonName = document.getElementById('contact_person_name').value;
        const contactPersonRelation = document.getElementById('contact_person_relation').value;
        const contactPersonNumber = document.getElementById('contact_person_number').value;
        const address = document.getElementById('address').value;

        // Populate modal with values
        document.getElementById('modalContactPersonName').value = contactPersonName;
        document.getElementById('modalContactPersonRelation').value = contactPersonRelation;
        document.getElementById('modalContactPersonNumber').value = contactPersonNumber;
        document.getElementById('modalAddress').value = address;

        // Show the modal
        $('#confirmationModal').modal('show');
    }

    function submitForm() {
        // Submit the form
        document.getElementById('emergencyContactForm').submit();
    }
</script>
@endsection