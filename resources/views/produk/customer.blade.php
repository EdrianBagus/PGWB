@extends('master')
@section('content')
<table class="table table-bordered table-dark table-borderless table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>email</th>
            <th>nama</th>
            <th>alamat</th>
            <th>No HP</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($getCustomer as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->nama }}</td>
            <td>{{ $customer->alamat }}</td>
            <td>{{ $customer->phone }}</td>
            <td>
                <a href="{{route('customerDelete', $customer->id)}}" class="btn btn-flat btn-danger">delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
