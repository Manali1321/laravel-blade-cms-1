@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Experience</h2>

    <form method="post" action="/console/experiences/edit/{{$experience->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{old('title', $experience->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="company">Company:</label>
            <input type="text" name="company" id="company" value="{{old('company', $experience->company)}}" required>
            
            @if ($errors->first('company'))
                <br>
                <span class="w3-text-red">{{$errors->first('company')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="detail">Responsibility:</label>
            <input type="text" name="detail" id="detail" value="{{old('detail', $experience->detail)}}" required>
            
            @if ($errors->first('detail'))
                <br>
                <span class="w3-text-red">{{$errors->first('detail')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" value="{{old('location', $experience->location)}}">

            @if ($errors->first('location'))
                <br>
                <span class="w3-text-red">{{$errors->first('location')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="start:">Start:</label>
            <input type="month" name="start" id="start" value="{{old('start', $experience->start)}}" required>

            @if ($errors->first('start'))
                <br>
                <span class="w3-text-red">{{$errors->first('start')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="end">End:</label>
            <input type="month" name="end" id="end" value="{{old('end', $experience->end)}}" required>

            @if ($errors->first('end'))
                <br>
                <span class="w3-text-red">{{$errors->first('end')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Experience</button>


    </form>

    <a href="/console/qualifications/list">Back to Experience List</a>

</section>

@endsection