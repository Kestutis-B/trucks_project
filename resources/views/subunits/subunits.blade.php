<div>
    <div><h2>Subunits</h2></div>
        <div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Unit number</th>
                    <th>Subunit</th>
                    <th>Start date</th>
                    <th>End date</th>
                </tr>
                @foreach($subunits as $subunit)
                    <tr>
                        <td>{{$subunit->id}}</td>
                        <td>{{$subunit->unit_number}}</td>
                        <td>{{$subunit->subunit}}</td>
                        <td>{{$subunit->start_date}}</td>
                        <td>{{$subunit->end_date}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
</div>
