@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Qualification</h2>

    <form method="post" action="/console/qualifications/edit/{{$qualification->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="degree">Degree:</label>
            <input type="text" name="degree" id="degree" value="{{old('degree', $qualification->degree)}}" required>
            
            @if ($errors->first('degree'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="field">Field:</label>
            <input type="text" name="field" id="field" value="{{old('field', $qualification->field)}}" required>
            
            @if ($errors->first('field'))
                <br>
                <span class="w3-text-red">{{$errors->first('field')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="institute">Institute:</label>
            <input type="text" name="institute" id="institute" value="{{old('institute', $qualification->institute)}}" required>
            
            @if ($errors->first('institute'))
                <br>
                <span class="w3-text-red">{{$errors->first('institute')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" value="{{old('location', $qualification->location)}}" required>
            
            @if ($errors->first('location'))
                <br>
                <span class="w3-text-red">{{$errors->first('location')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="started_at">Start:</label>
            <input type="date" name="started_at" id="started_at" value="{{old('started_at', $qualification->started_at)}}" required>
            
            @if ($errors->first('started_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('started_at')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="ended_at">End:</label>
            <input type="date" name="ended_at" id="ended_at" value="{{old('ended_at', $qualification->ended_at)}}" required>
            
            @if ($errors->first('ended_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('ended_at')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Qualification</button>

    </form>

    <a href="/console/qualifications/list">Back to Type List</a>

</section>

@endsection