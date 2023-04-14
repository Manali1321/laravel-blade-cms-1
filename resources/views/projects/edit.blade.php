@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Project</h2>

    <form method="post" action="/console/projects/edit/{{$project->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="title" name="title" id="title" value="{{old('title', $project->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="live">Live Website:</label>
            <input type="live" name="live" id="live" value="{{old('live', $project->live)}}">

            @if ($errors->first('live'))
                <br>
                <span class="w3-text-red">{{$errors->first('live')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="source">Source Code:</label>
            <input type="source" name="source" id="source" value="{{old('source', $project->source)}}">

            @if ($errors->first('source'))
                <br>
                <span class="w3-text-red">{{$errors->first('source')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="slug">Slug:</label>
            <input type="text" name="slug" id="slug" value="{{old('slug', $project->slug)}}" required>

            @if ($errors->first('slug'))
                <br>
                <span class="w3-text-red">{{$errors->first('slug')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="content">Content:</label>
            <textarea name="content" id="content" required>{{old('content', $project->content)}}</textarea>

            @if ($errors->first('content'))
                <br>
                <span class="w3-text-red">{{$errors->first('content')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="skill_id">Skill:</label>
            @foreach($allSkills as $skill)
            <input type="checkbox" value="{{$skill->id}}" name="skills[]" id="skill_{{$skill->id}}">
            <label for="skill_{{$skill->id}}">{{$skill->title}}</label>
            @endforeach
        </div>

        <button type="submit" class="w3-button w3-green">Edit Project</button>

    </form>

    <a href="/console/projects/list">Back to Project List</a>

</section>

@endsection
