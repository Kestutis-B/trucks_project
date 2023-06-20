<dov>
    <div class="bg-white">
        <div class="card-header bg-transparent">Create subunit</div>
        <form action = {{ route ('subunits.store', $truck->id) }} method="post">
            @csrf
            <div class="form-group">
                <label for="unit_number">Unit number</label>
                <input name="unit_number" required type="text" value="{{$truck->unit_number}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="subunit">Subunit</label>
                <select name="subunit">
                    <option value="">{{$truck->unit_number}}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="start_date">Start date</label>
                <input name="start_date" type="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="end_date">End date</label>
                <input name="end_date" type="date" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</dov>
