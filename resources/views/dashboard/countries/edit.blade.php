
@extends('dashboard.layout.app')


@section('content')
    <div class="card">
        <!-- Body -->
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                        <label for="firstNameLabel" class="form-label">First name</label>
                        <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="Clarice"
                            aria-label="Clarice">
                    </div>
                    <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                        <label for="lastNameLabel" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lastName" id="lastNameLabel" placeholder="Boone"
                            aria-label="Boone">
                    </div>
                    <!-- End Form -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

            <!-- Form -->
            <div class="mb-4">
                <label for="emailLabel" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="emailLabel" placeholder="clarice@site.com"
                    aria-label="clarice@site.com">
            </div>
            <!-- End Form -->

            <!-- Form -->
            <div class="js-add-field mb-4"
                data-hs-add-field-options='{
              "template": "#addPhoneFieldTemplate",
              "container": "#addPhoneFieldContainer",
              "defaultCreated": 0
            }'>
                <label for="phoneLabel" class="form-label">Phone <span
                        class="form-label-secondary">(Optional)</span></label>

                <div class="input-group">
                    <input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel"
                        placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx"
                        data-hs-mask-options='{
                   "mask": "+0(000)000-00-00"
                 }'>

                    <div class="input-group-append">
                        <!-- Select -->
                        <div class="tom-select-custom tom-select-custom-end">
                            <select class="js-select form-select" autocomplete="off" name="phoneSelect"
                                data-hs-tom-select-options='{
                      "searchInDropdown": false,
                      "hideSearch": true,
                      "dropdownWidth": "8rem"
                    }'>
                                <option value="Mobile" selected>Mobile</option>
                                <option value="Home">Home</option>
                                <option value="Work">Work</option>
                                <option value="Fax">Fax</option>
                                <option value="Direct">Direct</option>
                            </select>
                            <!-- End Select -->
                        </div>
                    </div>
                </div>

                <!-- Container For Input Field -->
                <div id="addPhoneFieldContainer"></div>

                <a href="javascript:;" class="js-create-field form-link">
                    <i class="bi-plus"></i> Add phone
                </a>
            </div>
            <!-- End Form -->

            <!-- Add Phone Input Field -->
            <div id="addAddressFieldTemplate" style="display: none;">
                <div class="input-group-add-field">
                    <input type="text" class="form-control" data-name="addressLine" placeholder="Your address"
                        aria-label="Your address">

                    <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                        <i class="bi-x"></i>
                    </a>
                </div>
            </div>
            <!-- End Add Phone Input Field -->

            <!-- Add Phone Input Field -->
            <div id="addPhoneFieldTemplate" class="input-group-add-field" style="display: none;">
                <div class="input-group">
                    <input type="text" class="js-input-mask form-control" data-name="additionlPhone"
                        placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx"
                        data-hs-mask-options='{
                   "mask": "+0(000)000-00-00"
                 }'>

                    <div class="input-group-append">
                        <!-- Select -->
                        <div class="tom-select-custom tom-select-custom-end">
                            <select class="js-select-dynamic form-select" autocomplete="off" data-name="phoneSelect"
                                data-hs-tom-select-options='{
                      "searchInDropdown": false,
                      "hideSearch": true,
                      "dropdownWidth": "8rem"
                    }'>
                                <option value="Mobile" selected>Mobile</option>
                                <option value="Home">Home</option>
                                <option value="Work">Work</option>
                                <option value="Fax">Fax</option>
                                <option value="Direct">Direct</option>
                            </select>
                            <!-- End Select -->
                        </div>
                    </div>
                </div>

                <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                    <i class="bi-x"></i>
                </a>
            </div>
            <!-- End Add Phone Input Field -->

            <!-- Form Check -->
            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" value="" id="marketingEmailsCheckbox">
                <label class="form-check-label" for="marketingEmailsCheckbox">I want to receive promotions, announcements,
                    and marketing emails.</label>
            </div>
            <!-- End Form Check -->

            <div class="d-flex justify-content-end gap-3">
                <button type="button" class="btn btn-white">Discard</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
        <!-- Body -->
    </div>
@endsection

@push('scripts')
@endpush
