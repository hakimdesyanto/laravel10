@extends('layout.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <i class="fas fa-user"></i> Data Students
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
                    </div>
                </div>
                <div class="row mb-1">
                    <label for="full_name" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control-plaintext" id="full_name" name="full_name" maxlength="100"
                            value="{{ $full_name }}">
                    </div>
                </div>
                <div class="row mb-1">
                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control-plaintext" id="gender" name="gender" maxlength="100"
                            value="{{ $gender == 'M' ? 'Male' : 'Female' }}">

                    </div>
                </div>
                <div class="row mb-1">
                    <label for="addres" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control-plaintext" id="addres" name="addres"
                            value="{{ $addres }}">


                    </div>
                </div>
                <div class="row mb-1">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                        <input type="email" class="form-control-plaintext" id="email" name="email" maxlength="100"
                            value="{{ $email }}">

                    </div>
                </div>
                <div class="row mb-1">
                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control-plaintext" id="phone" name="phone" maxlength="20"
                            value="{{ $phone }}">
                    </div>
                </div>
                <div class="row mb-1">
                    <label for="created_at" class="col-sm-2 col-form-label">Created At</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control-plaintext" id="created_at" name="created_at"
                            maxlength="20" value="{{ $created_at }}">
                    </div>
                </div>
                <div class="row mb-1">
                    <label for="updated_at" class="col-sm-2 col-form-label">Updated At</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control-plaintext" id="updated_at" name="updated_at"
                            maxlength="20" value="{{ $updated_at }}">
                    </div>
                </div>
                <div class="row mb-1">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-sm btn-warning"
                            onclick="window.location='{{ url('students') }}'"><i class="fas fa-arrow-alt-circle-left"></i>
                            Back</button>
                    </div>
                    {{-- <div class="col-sm-4">
                    </div> --}}
                </div>

            </form>
        </div>
    </div>
@endsection
