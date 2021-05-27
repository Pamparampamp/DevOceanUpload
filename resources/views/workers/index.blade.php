
@extends('layouts.app')



@section('content')
<main class="container">


<div class="pull-left">
<h2>Workers crud</h2>

</div>

<div class="row">
    <div class="col-lg-12"></div>
    <div class="pull-right">
        <a  class="btn btn-success" href="{{ route('workers.create') }}" >Create new worker</a>
    </div>

</div>

 @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Firm_id</th>
       <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
@foreach ($workers as $worker)

<td>{{ $worker->id }}</td>
        <td>{{ $worker->Firstname }}</td>
      <td>{{ $worker->Lastname }}</td>
      <td>{{ $worker->email }}</td>
      <td>{{ $worker->phone }}</td>
        <td>{{ $worker->firm_id }}</td>

      <td>
        <form action="{{ route('workers.destroy',$worker->id) }}" method="POST">

        <a href="{{ route('workers.edit',$worker->id) }}" class="btn btn-primary">Edit</a>
@csrf
@method('DELETE')

<button type="submit" class="btn btn-danger">Delete

</button>
        </form>

      </td>
    </tr>
@endforeach

  </tbody>
</table>
</main>
@endsection
