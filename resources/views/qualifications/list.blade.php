@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Qualifications</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th></th>
            <th>Degree</th>
            <th>Field</th>
            <th>Institute</th>
            <th>Location</th>
            <th>Started_at</th>
            <th>Ended_at</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($qualifications as $qualification)
            <tr>
                <td>{{$qualification->image}}</td>
                <td>{{$qualification->degree}}</td>
                <td>{{$qualification->field}}</td>
                <td>{{$qualification->institute}}</td>
                <td>{{$qualification->location}}</td>
                <td>{{$qualification->started_at}}</td>
                <td>{{$qualification->ended_at}}</td>

                <td><a href="/console/qualifications/edit/{{$qualification->id}}">Edit</a></td>
                <td><a href="/console/qualifications/delete/{{$qualification->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/qualifications/add" class="w3-button w3-green">New Qualification</a>

</section>

@endsection
