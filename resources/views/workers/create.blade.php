@extends('layouts.app')


@section('content')
<main class="container">
<br>
<a  class="btn btn-primary" href="{{ route('workers.index') }}">Back</a>
<br>
<br>

<form method="POST" action="{{ route('workers.store')}}">
    @csrf
  <div class="mb-3">
    <label  class="form-label">First name</label>
    <input type="text" name="firstname" class="form-control"  >

  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Lastname</label>
    <input type="text" name="lastname" class="form-control" >
  </div>
 <div class="mb-3">
    <label  class="form-label">email</label>
    <input type="text" name="email" class="form-control"  >
  </div>

  <div class="mb-3">
    <label  class="form-label">phone</label>
    <input type="text" name="phone" class="form-control"  >
  </div>
  <div class="mb-3">
    <label  class="form-label">firm id</label>
    <input type="text" name="firm_id" class="form-control"  >
  </div>

  <button type="submit" class="btn btn-info">Submit</button>
</form>
@endsection
