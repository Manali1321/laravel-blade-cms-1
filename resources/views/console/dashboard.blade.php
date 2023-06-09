@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <ul id="dashboard">
        <li><a href="/console/projects/list">Manage Projects</a></li>
        <li><a href="/console/skills/list">Manage Skills</a></li>
        <li><a href="/console/users/list">Manage Users</a></li>
        <li><a href="/console/qualifications/list">Manage Qualification</a></li>
        <li><a href="/console/experiences/list">Manage Experience</a></li>
        <li><a href="/console/blogs/list">Manage Blog</a></li>

        <li><a href="/console/logout">Log Out</a></li>
    </ul>

</section>

@endsection
