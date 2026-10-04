@extends('layouts.app')

@section('content')

  <form action="{{ route('storeStudent') }}" method="post">
    @csrf
    <h2 class="mb-4 text-center">Student Management Form</h2>
    <div class="mb-4">
      <label for="TextInput" class="form-label">Full Name</label>
      <input type="text" id="TextInput" name="fullName" class="form-control" placeholder="Enter full name">
    </div>
    <div class="mb-4">
      <label for="Select" class="form-label">Address</label>
      <input type="text" id="TextInput" name="address" class="form-control" placeholder="Enter Address">
    </div>

    <div class="mb-4">
      <label for="TextInput" class="form-label">contact no</label>
      <input type="number" id="TextInput" name="phoneNo" class="form-control" placeholder="Enter contact no">
    </div>

    <div class="mb-4">
      <label for="TextInput" class="form-label">Email</label>
      <input type="email" id="TextInput" name="email" class="form-control" placeholder="Enter Email">
    </div>


    <div class="mb-4">
      <label for="TextInput" class="form-label">Status</label>
      <input type="text" id="TextInput" name="status" class="form-control" placeholder="Enter Status">
    </div>

    <div class="d-grid d-md-flex justify-content-start">
      <button type="submit" class="btn btn-success">Save</button>
    </div>

  </form>

@endsection