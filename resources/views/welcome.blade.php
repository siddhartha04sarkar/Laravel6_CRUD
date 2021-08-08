@extends('layouts.main')
@section('content')


<h1 class="text-center m-5">Home Page</h1>

@if(session('successMsg'))

<div class="alert alert-success" role="alert">
  {{ session('successMsg') }}
</div>

@endif

<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email id</th>
      <th scope="col">Phone no</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $std)
    <tr>
      <td scope="row">{{ $std->id }}</td>
      <td>{{ $std->first_name }}</td>
      <td>{{ $std->last_name }}</td>
      <td>{{ $std->email }}</td>
      <td>{{ $std->phone }}</td>&nbsp;
      <td>
        <a class="btn btn-success" title="Edit" href="{{ route('edit', $std->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;&nbsp;

        <form method="POST" id="delete-form-{{ $std->id }}" action="{{ route('delete', $std->id) }}" style="display:none;">

        {{ csrf_field() }}
        {{ method_field('delete') }}

        </form>

        <button onclick="if(confirm('Are you sure to delete this student data?')){
          event.preventDefault();
          document.getElementById('delete-form-{{ $std->id }}').submit();
        }else{
          event.preventDefault();
        }" 
        class="btn btn-danger" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i>
        </button>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  <div class="text-center">
    {{ $students->links() }}
  </div>
</div>
<br><br>

@endsection