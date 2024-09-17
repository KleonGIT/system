<x-app-layout>
    <x-slot name="header">{{ _('Manage Customer') }}</x-slot>
    <x-slot name="subHeader">{{ _('You can manage your customer and register new customer here.') }}</x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <table class="datatable-init table table-bordered table-hover">
                            <span style="float: right">
                                <button class="btn btn-primary btn-round" data-bs-toggle="modal"
                                    data-bs-target="#registration">
                                    <em class="icon ni ni-plus-circle"></em>&ensp;
                                    Register New Customer
                                </button>
                            </span>
                            <thead>
                                <tr>
                                    <th width="20">#</th>
                                    <th>Customer Name</th>
                                    <th>Phone Number</th>
                                    <th>Email Address</th>
                                    <th>Complete Address</th>
                                    <th width="100" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $counter = 1; @endphp
                                @foreach ($customers as $data)
                                    <tr style="cursor: pointer">
                                        <td>{{ $counter++ }}</td>
                                        <td>{{ $data->cus_last_name }}, {{ $data->cus_first_name }}</td>
                                        <td>{{ $data->cus_phone_number }}</td>
                                        <td>{{ $data->cus_email }}</td>
                                        <td>{{ $data->cus_address }}, {{ $data->cus_city }}, {{ $data->cus_state }},
                                            {{ $data->cus_postal_code }}, {{ $data->cus_country }}
                                        </td>
                                        <td>
                                            <a href="{{ route('customer.edit', $data->id) }}"
                                                class="btn btn-xs btn-block btn-light bg-white text-dark">
                                                <em class="icon ni ni-edit"></em>
                                            </a>
                                            <button type="button" class="btn btn-xs btn-block btn-danger"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $data->id }}">
                                                <em class="icon ni ni-trash"></em>
                                            </button>
                                            <div class="modal fade" tabindex="-1" role="dialog"
                                                id="deleteModal-{{ $data->id }}">
                                                <div class="modal-dialog modal-md">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Delete Customer</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete this customer?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <form action="{{ route('customer.delete', $data->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="registration">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body">
                    <h1 class="nk-block-title page-title">
                        Register New Customer
                    </h1>
                    <hr class="mt-2 mb-2">
                    {{-- --}}
                    <form action="{{ route('customer.save') }}" method="POST">
                        @csrf
                        <!-- First Name -->
                        <div class="row mt-2 allign-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_fn">First Name <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Specify the First Name here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-info"></em>
                                    </div>
                                    <input type="text" class="form-control" id="inp_fn" name="inp_fn"
                                        placeholder="Enter First Name here..." required>
                                </div>
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="row mt-2 allign-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_ln">Last Name <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Last Name here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-info"></em>
                                    </div>
                                    <input type="text" class="form-control" id="inp_ln" name="inp_ln"
                                        placeholder="Enter Last Name here..." required>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="row mt-2 allign-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_email">Email <b class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Email here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-mail"></em>
                                    </div>
                                    <input type="text" class="form-control" id="inp_email" name="inp_email"
                                        placeholder="Enter Email here..." required>
                                </div>
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="row mt-2 allign-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_phone">Phone Number <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Phone Number here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-call"></em>
                                    </div>
                                    <input type="text" class="form-control" id="inp_phone" name="inp_phone"
                                        placeholder="Enter Phone Number here..." required>
                                </div>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="row mt-2 allign-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_address">Address <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Address here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-map-pin"></em>
                                    </div>
                                    <input type="text" class="form-control" id="inp_address" name="inp_address"
                                        placeholder="Enter Address here..." required>
                                </div>
                            </div>
                        </div>

                        <!-- City -->
                        <div class="row mt-2 allign-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_city">City <b class="text-danger">*</b></label>
                                    <span class="form-note">Specify the City here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="inp_city" name="inp_city"
                                        placeholder="Enter City here..." required>
                                </div>
                            </div>
                        </div>

                        <!-- State -->
                        <div class="row mt-2 allign-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_state">State <b class="text-danger">*</b></label>
                                    <span class="form-note">Specify the State here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="inp_state" name="inp_state"
                                        placeholder="Enter State here..." required>
                                </div>
                            </div>
                        </div>

                        <!-- Postal Code -->
                        <div class="row mt-2 allign-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_postal">Postal <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Postal here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="inp_postal" name="inp_postal"
                                        placeholder="Enter Postal here..." required>
                                </div>
                            </div>
                        </div>

                        <!-- Country -->
                        <div class="row mt-2 allign-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_country">Country <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Country here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="inp_country" name="inp_country"
                                        placeholder="Enter Country here..." required>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row mt-4">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-7">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <em class="icon ni ni-save"></em>&ensp;
                                    Submit New Customer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>