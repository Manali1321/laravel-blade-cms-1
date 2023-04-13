@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Experience</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            
            <th>Job Title</th>
            <th>Company</th>
            <th>Responsibility</th>
            <th>location</th>
            <th>Start</th>
            <th>End</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($experience as $experience)
            <tr>
                <td>{{$experience->title}}</td>
                <td>{{$experience->company}}</td>
                <td>{{$experience->detail}}</td>
                <td>{{$experience->location}}</td>
                <td>{{$experience->start}}</td>
                <td>{{$experience->end}}</td>

                <td><a href="/console/experiences/edit/{{$experience->id}}">Edit</a></td>
                <td><a href="/console/experiences/delete/{{$experience->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/experiences/add" class="w3-button w3-green">New Experience</a>

</section>

@endsection
