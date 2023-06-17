@extends('layouts.app')

@section('title', 'Create Truck')

@section('content')
    <div class="bg-white">
        <form action = {{ route ('trucks.store') }} method="post">
            @csrf
            <div class="form-group">
                <label for="unit_number">Unit number</label>
                <input name="unit_number" required type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input name="year" required type="number" min="1900" max="2028" class="form-control">
            </div>
            <div class="form-group">
                <label for="notes">Notes</label>
                <input name="notes" type="text"  class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
