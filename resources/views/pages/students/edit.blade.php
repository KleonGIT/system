<x-app-layout>
    <x-slot name="header">{{ _('Edit Student') }}</x-slot>

    <div class="nk-block">
        <div class="card">
            <div class="card-inner">
                <h2>Edit Student Information</h2>
                <form action="{{ route('student.update', $students->id) }}" method="POST">
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
                            <input type="text" class="form-control" id="inp_fn" name="stud_first_name"
                                value="{{ $students->stud_first_name }}" required>
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
                            <input type="text" class="form-control" id="inp_ln" name="stud_last_name"
                                value="{{ $students->stud_last_name }}" required>
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
                            <input type="email" class="form-control" id="inp_email" name="stud_email"
                                value="{{ $students->stud_email }}" required>
                        </div>
                    </div>

                    <!-- Age -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_age">Age <b
                                        class="text-danger">*</b></label>
                                <span class="form-note">Edit the Age here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" id="inp_age" name="stud_age"
                                value="{{ $students->stud_age }}" required>
                        </div>
                    </div>

                    <!-- Strand -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_strand">Strand <b class="text-danger">*</b></label>
                                <span class="form-note">Edit the Strand here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" id="inp_strand" name="stud_strand"
                                value="{{ $students->stud_strand }}" required>
                        </div>
                    </div>

                    <!-- Grade Level -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_grade_level">Grade Level <b class="text-danger">*</b></label>
                                <span class="form-note">Edit the Grade Level here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" id="inp_grade_level" name="stud_grade_level"
                                value="{{ $students->stud_grade_level }}" required>
                        </div>
                    </div>

                    <!-- Section -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_section">Section <b class="text-danger">*</b></label>
                                <span class="form-note">Edit the Section here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" id="inp_section" name="stud_section"
                                value="{{ $students->stud_section }}" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="row mt-4">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-7">
                            <button type="submit" class="btn btn-primary">
                                <em class="icon ni ni-save"></em>&ensp;Update Student
                            </button>
                            <button type="button" class="btn btn-secondary"
                                onclick="window.location.href='{{ route('pages.students.index') }}'">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>