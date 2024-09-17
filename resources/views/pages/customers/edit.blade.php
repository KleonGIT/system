<x-app-layout>
    <x-slot name="header">{{ _('Edit Customer') }}</x-slot>

    <div class="nk-block">
        <div class="card">
            <div class="card-inner">
                <h2>Edit Customer Information</h2>
                <form action="{{ route('customer.update', $customers->id) }}" method="POST">
                    @csrf

                    <!-- First Name -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_fn">First Name <b class="text-danger">*</b></label>
                                <span class="form-note">Edit the First Name here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" id="inp_fn" name="cus_first_name"
                                value="{{ $customers->cus_first_name }}" required>
                        </div>
                    </div>

                    <!-- Last Name -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_ln">Last Name <b class="text-danger">*</b></label>
                                <span class="form-note">Edit the Last Name here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" id="inp_ln" name="cus_last_name"
                                value="{{ $customers->cus_last_name }}" required>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_email">Email <b class="text-danger">*</b></label>
                                <span class="form-note">Edit the Email here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <input type="email" class="form-control" id="inp_email" name="cus_email"
                                value="{{ $customers->cus_email }}" required>
                        </div>
                    </div>

                    <!-- Phone Number -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_phone">Phone Number <b
                                        class="text-danger">*</b></label>
                                <span class="form-note">Edit the Phone Number here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" id="inp_phone" name="cus_phone_number"
                                value="{{ $customers->cus_phone_number }}" required>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_address">Address <b class="text-danger">*</b></label>
                                <span class="form-note">Edit the Address here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" id="inp_address" name="cus_address"
                                value="{{ $customers->cus_address }}" required>
                        </div>
                    </div>

                    <!-- City -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_city">City <b class="text-danger">*</b></label>
                                <span class="form-note">Edit the City here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" id="inp_city" name="cus_city"
                                value="{{ $customers->cus_city }}" required>
                        </div>
                    </div>

                    <!-- State -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_state">State <b class="text-danger">*</b></label>
                                <span class="form-note">Edit the State here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" id="inp_state" name="cus_state"
                                value="{{ $customers->cus_state }}" required>
                        </div>
                    </div>

                    <!-- Postal Code -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_postal">Postal Code <b
                                        class="text-danger">*</b></label>
                                <span class="form-note">Edit the Postal Code here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" id="inp_postal" name="cus_postal_code"
                                value="{{ $customers->cus_postal_code }}" required>
                        </div>
                    </div>

                    <!-- Country -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_country">Country <b class="text-danger">*</b></label>
                                <span class="form-note">Edit the Country here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" id="inp_country" name="cus_country"
                                value="{{ $customers->cus_country }}" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="row mt-4">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-7">
                            <button type="submit" class="btn btn-primary">
                                <em class="icon ni ni-save"></em>&ensp;Update Customer
                            </button>
                            <button type="button" class="btn btn-secondary"
                                onclick="window.location.href='{{ route('pages.customers.index') }}'">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>