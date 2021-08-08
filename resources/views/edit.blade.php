@extends('layouts.main')
@section('content')


<h1 class="text-center m-3">Edit Student</h1><br>
<div class="container">
<form class="text-center border border-light p-5" method="POST" action="{{ route('update', $student->id) }}">
    {{ csrf_field() }}
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form3Example1">First name</label>
        <input type="text" id="form3Example1" class="form-control" name="firstname" value="{{ $student->first_name }}" placeholder="Enter your first name" />
        @error('firstname')
        <div>{{ $message }}</div>
        @enderror
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form3Example2">Last name</label>
        <input type="text" id="form3Example2" class="form-control" name="lastname" placeholder="Enter your last name" value="{{ $student->last_name }}" />
        @error('lastname')
        <div>{{ $message }}</div>
        @enderror
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form3Example3">Email address</label>
    <input type="email" id="form3Example3" class="form-control"  name="email" placeholder="Enter your email" value="{{ $student->email }}" />
    @error('email')
    <div>{{ $message }}</div>
    @enderror
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form3Example4">Phone no</label>
    <input type="text" id="form3Example4" class="form-control" name="phone" placeholder="Enter your phone no" value="{{ $student->phone }}" />
    @error('phone')
    <div>{{ $message }}</div>
    @enderror
  </div>


  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Update Student</button>

</form>
<br><br>
</div>

@endsection