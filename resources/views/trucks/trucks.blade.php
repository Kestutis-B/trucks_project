@extends('layouts.app')

@section('title', 'Trucks')

@section('content')
    <div class="d-flex justify-content-end">
        <a href="{{ url('/trucks/create') }}" class="btn btn-outline-primary">Create Truck</a>
    </div>
    <div style="text-align: center; padding: 20px">All trucks</div>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Unit number</th>
                <th>Year</th>
                <th>Notes</th>
                <th>Actions</th>
            </tr>
            @foreach($trucks as $truck)
                <tr>
                    <td>{{$truck->id}}</td>
                    <td>{{$truck->unit_number}}</td>
                    <td>{{$truck->year}}</td>
                    <td>{{$truck->notes}}</td>
                    <td>
                        <div class="d-flex">
                            <form method="GET" action="/trucks/{{ $truck->id }}/edit">
                                @csrf
                                @method('GET')
                                <button class="btn btn-outline-primary">Info</button>
                            </form>
                            <form method="post" action="{{ route('trucks.destroy', $truck->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
