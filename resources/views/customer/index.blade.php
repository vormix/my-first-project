
@extends('layouts.app')

@section('content')
    <h1 class="display-3">Customers</h1>

    <ul class="list-group">
        @foreach ($customers as $customer)
            <li class="list-group-item"><strong>{{ $customer->name }}</strong> - {{ $customer->email  }} ({{$customer->phone}})</li>
        @endforeach
    </ul>

    {{ $customers->links() }}
@endsection

