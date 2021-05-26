@extends('layouts.app')

@section('content')
@section('content')
<main class="container">
<br>
<a  class="btn btn-primary" href="{{ route('workers.index') }}">Back</a>
<br>
<br>

<form method="POST" action="{{ route('workers.update', $worker->id)}}">
    @csrf


@method('PUT')
  <div class="mb-3">
    <label  class="form-label">First name</label>
    <input  value="{{$worker->firstname}}" type="text" name="firstname" class="form-control" >

  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Last name</label>
    <input value="{{$worker->lastname}}"type="text" name="lastname" class="form-control" >
  </div>
   <div class="mb-3">
    <label  class="form-label">email</label>
    <input value="{{$worker->email}}" type="email" name="email" class="form-control" >

  </div>
  <div class="mb-3">
    <label  class="form-label">phone</label>
    <input value="{{$worker->phone}}" type="text" name="phone" class="form-control" >

  </div>
 <div class="mb-3">
    <label  class="form-label">firm id</label>
    <input value="{{$worker->firm_id}}" type="text" name="firm_id" class="form-control" >

  </div>



 <div class="mb-3">
  <button type="submit" class="btn btn-info">Submit</button>
  </div>

</form>
@endsection
@endsection
