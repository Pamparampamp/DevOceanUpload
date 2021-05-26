{{-- @extends('firms.layout') --}}
@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Crud Firms</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('firms.create') }}"> Create New Firm</a>

            </div>

        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Email</th>

            <th>Image</th>

            <th>Website</th>
            <th width="200px">Actions</th>

        </tr>

        @foreach ($firms as $firm)

        <tr>

            <td>{{ $firm->id }}</td>

            <td>{{ $firm->name }}</td>

            <td>{{ $firm->email }}</td>
            <td><img src="/image/{{ $firm->image }}" width="100px"></td>

            <td>{{ $firm->website }}</td>

            <td>

                <form action="{{ route('firms.destroy',$firm->id) }}" method="POST">



                    <a class="btn btn-info" href="{{ route('firms.show',$firm->id) }}">Show</a>



                    <a class="btn btn-primary" href="{{ route('firms.edit',$firm->id) }}">Edit</a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>



    {!! $firms->links() !!}



@endsection
