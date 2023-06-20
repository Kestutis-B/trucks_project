@extends('layouts.app')

@section('title', 'Edit truck')

@section('content')
    <div class="bg-white" style="padding: 20px; border-radius: 5px">
        <form method="POST" action="{{ route('trucks.update', $truck->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="order_status">Truck notes</label>
                <input type="text" value="{{ $truck->notes }}" name="notes" class="form-control">
            </div>
            <button type="submit" class="btn btn-outline-primary">Update</button>
        </form>
    </div>
    @include('subunits.subunits')
    @include('subunits.create')
@endsection
