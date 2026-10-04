@extends('layouts.app')

@section('content')

    <div class="d-grid d-md-flex justify-content-end">
        <a href="{{ route('create') }}" class="btn btn-dark">Create</a>
    </div>


    <h2 class="mb-4 text-center">Student Management Table</h2>
    <table class="table table-striped table-bordered table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">Address</th>
                <th scope="col">contact no</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Nithus</td>
                <td>kilinochchi</td>
                <td>0772568954</td>
                <td>nithus@gmail.com</td>
                <td>Student</td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Athir</td>
                <td>jaffna</td>
                <td>0770276842</td>
                <td>athir@gmail.com</td>
                <td>Student</td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td>sarmi</td>
                <td>vavuniya</td>
                <td>0778674592</td>
                <td>sarmi@gmail.com</td>
                <td>Student</td>

            </tr>

            <tr class="table-active">
                <th scope="row">4</th>
                <td>mithun</td>
                <td>kilinochchi</td>
                <td>0773201236</td>
                <td>mithun@gmail.com</td>
                <td>Student</td>

            </tr>
        </tbody>
    </table>
@endsection