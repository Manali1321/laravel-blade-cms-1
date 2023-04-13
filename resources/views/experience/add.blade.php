@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Experiences</h2>

    <form method="post" action="/console/experiences/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{old('title')}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="company">Company:</label>
            <input type="text" name="company" id="company" value="{{old('company')}}" required>
            
            @if ($errors->first('company'))
                <br>
                <span class="w3-text-red">{{$errors->first('company')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="detail">Responsibility:</label>
            <input type="text" name="detail" id="detail" value="{{old('detail')}}" required>
            
            @if ($errors->first('institute'))
                <br>
                <span class="w3-text-red">{{$errors->first('institute')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" value="{{old('location')}}">

            @if ($errors->first('location'))
                <br>
                <span class="w3-text-red">{{$errors->first('location')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="start:">Start:</label>
            <input type="month" name="start" id="start" value="{{old('start')}}" required>

            @if ($errors->first('start'))
                <br>
                <span class="w3-text-red">{{$errors->first('start')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="end">End:</label>
            <input type="month" name="end" id="end" value="{{old('end')}}" required>

            @if ($errors->first('end'))
                <br>
                <span class="w3-text-red">{{$errors->first('end')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Experience</button>

    </form>

    <a href="/console/experiences/list">Back to Experience List</a>

</section>

@endsection