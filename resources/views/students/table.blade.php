@extends('layout.main')


@section('content')
    <h3>Data Students</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('students/add') }}'">
                <i class="fas fa-plus-circle"></i> Add New Data
            </button>
        </div>
        <div class="card-body">
            @if (session('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="text-align: center">No</th>
                        <th style="text-align: center">ID Student</th>
                        <th style="text-align: center">Full Name</th>
                        <th style="text-align: center">Gender</th>
                        <th style="text-align: center">Address</th>
                        <th style="text-align: center">Email</th>
                        <th style="text-align: center">Phone</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $row)
                        <tr>
                            <td style="text-align: center">{{ $loop->iteration }}</td>
                            <td>{{ $row->idstudents }}</td>
                            <td>{{ $row->full_name }}</td>
                            <td>{{ $row->gender == 'M' ? 'Male' : 'Female' }}</td>
                            <td>{{ $row->addres }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone }}</td>
                            <td style="text-align: center">
                                <button type="button" class="btn btn-sm btn-warning" title="Edit Data"
                                    onclick="window.location='{{ url('students/' . $row->idstudents . '/edit') }}'">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <form onsubmit="return deleteData('{{ $row->full_name }}')" style="display:inline"
                                    method="POST" action="{{ url('students/' . $row->idstudents) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Hapus Data" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                                <button type="button" class="btn btn-sm btn-info" title="Show Data"
                                    onclick="window.location='{{ url('students/' . $row->idstudents) }}'">
                                    <i class="fas fa-search"></i>
                                </button>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function deleteData(namek) {
            pesan = confirm('Are you sure delete data of ' + namek + ' ? ');
            if (pesan) return true;
            else return false;
        }
    </script>
@endsection
