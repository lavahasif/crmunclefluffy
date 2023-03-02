<table>
    <thead>
        <tr>
            <th style="padding-left: 2rem">Status</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Country</th>
            <th>Interest</th>
            <th>Source</th>
            <th>Date</th>
            <th>Remark</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($models as $single)
            <tr>
                <td>
                    <div class="status">
                        <div class="statuscolor" style="background-color:{{ $single->Status->color ?? 'white' }} ">
                        </div>
                        <div class="st2">
                            <p class="status_p">{{ $single->Status->name?? "New" }}</p>
                        </div>
                    </div>
                </td>
                <td>{{ $single->customer->name }}</td>
                <td>{{ $single->customer->Email }}</td>
                <td>{{ $single->customer->phone }}</td>
                <td>{{ $single->customer->country }}</td>
                <td>{{ $single->interest }}</td>
                <td>{{ $single->Source->name??"TikTok" }}</td>
                <td>{{ date('d F Y', strtotime($single->created_at)) }}</td>
                <td>{{ $single->remark }}</td>
            </tr>
        @endforeach


    </tbody>


</table>
