@extends('layout.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <i class="fas fa-user"></i> Edit Students
        </div>
        <div class="card-body">

            <form method="POST" action="{{ url('students/' . $idstudents) }}">
                @csrf
                @method('PUT')
                <div class="row mb-1">
                    <label for="idstudents" class="col-sm-2 col-form-label">ID Student</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control-plaintext" id="idstudents" name="idstudents"
                            maxlength="7" value="{{ $idstudents }}">
                        @error('idstudents')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="row mb-1">
                    <label for="full_name" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm @error('full_name') is-invalid @enderror"
                            id="full_name" name="full_name" maxlength="100" value="{{ $full_name }}">
                        @error('full_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="row mb-1">
                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-4">
                        <select name="gender" id="gender"
                            class="form-control form-control-sm @error('gender') is-invalid @enderror">
                            <option value="">Please Select</option>
                            <option value="M" {{ $gender == 'M' ? 'selected' : '' }}>Male</option>
                            <option value="F" {{ $gender == 'F' ? 'selected' : '' }}>Female</option>
                        </select>
                        @error('gender')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="row mb-1">
                    <label for="addres" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-4">
                        <textarea name="addres" id="addres" class="form-control form-control-sm @error('addres') is-invalid @enderror"
                            rows="3">{{ $addres }}</textarea>
                        @error('addres')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="row mb-1">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                        <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror"
                            id="email" name="email" maxlength="100" value="{{ $email }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="row mb-1">
                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm @error('phone') is-invalid @enderror"
                            id="phone" name="phone" maxlength="20" value="{{ $phone }}">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="row mb-1">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-sm btn-success"> <i class="fas fa-save"></i> Update</button>
                        <button type="button" class="btn btn-sm btn-danger"
                            onclick="window.location='{{ url('students') }}'"><i class="far fa-window-close"></i>
                            Cancel</button>
                    </div>
                    {{-- <div class="col-sm-4">
                    </div> --}}
                </div>

            </form>
        </div>
    </div>
@endsection
