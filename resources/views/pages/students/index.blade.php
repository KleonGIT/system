<x-app-layout>
    <x-slot name="header">{{ _('Manage Student') }}</x-slot>
    <x-slot name="subHeader">{{ _('You can manage your student and register new student here.') }}</x-slot>

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
                                    Register New Student
                                </button>
                            </span>
                            <thead>
                                <tr>
                                    <th width="20">#</th>
                                    <th>Student Name</th>
                                    <th>Email Address</th>
                                    <th>Age</th>
                                    <th>Strand</th>
                                    <th>Grade Level</th>
                                    <th>Section</th>
                                    <th width="100" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $counter = 1; @endphp
                                @foreach ($students as $data)
                                    <tr style="cursor: pointer">
                                        <td>{{ $counter++ }}</td>
                                        <td>{{ $data->stud_last_name }}, {{ $data->stud_first_name }}</td>
                                        <td>{{ $data->stud_email }}</td>
                                        <td>{{ $data->stud_age }}</td>
                                        <td>{{ $data->stud_strand }}</td>
                                        <td>{{ $data->stud_grade_level }}</td>
                                        <td>{{ $data->stud_section }}</td>
                                        <td>
                                            <a href="{{ route('student.edit', $data->id) }}"
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
                                                            <h5 class="modal-title">Delete student</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete this student?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <form action="{{ route('student.delete', $data->id) }}"
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
                        Register New Student
                    </h1>
                    <hr class="mt-2 mb-2">
                    {{-- --}}
                    <form action="{{ route('student.save') }}" method="POST">
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

                        <!-- Age -->
                        <div class="row mt-2 allign-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_age">Age <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Age here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-call"></em>
                                    </div>
                                    <input type="text" class="form-control" id="inp_age" name="inp_age"
                                        placeholder="Enter Age here..." required>
                                </div>
                            </div>
                        </div>

                        <!-- Strand -->
                        <div class="row mt-2 allign-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_strand">Strand <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Strand here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-map-pin"></em>
                                    </div>
                                    <input type="text" class="form-control" id="inp_strand" name="inp_strand"
                                        placeholder="Enter Strand here..." required>
                                </div>
                            </div>
                        </div>

                        <!-- Grade Level -->
                        <div class="row mt-2 allign-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_grade_level">Grade Level <b class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Grade Level here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="inp_grade_level" name="inp_grade_level"
                                        placeholder="Enter Grade Level here..." required>
                                </div>
                            </div>
                        </div>

                        <!-- Section -->
                        <div class="row mt-2 allign-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_section">Section <b class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Section here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="inp_section" name="inp_section"
                                        placeholder="Enter Section here..." required>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row mt-4">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-7">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <em class="icon ni ni-save"></em>&ensp;
                                    Submit New student
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>