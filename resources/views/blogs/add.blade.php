@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add blog</h2>

    <form method="post" action="/console/blogs/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="title" name="title" id="title" value="{{old('title')}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="blog">Blog:</label>
            <textarea name="blog" id="blog" required>{{old('blog')}}</textarea>

            @if ($errors->first('blog'))
                <br>
                <span class="w3-text-red">{{$errors->first('blog')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="link">Refernce Link:</label>
            <input type="url" name="link" id="link" value="{{old('link')}}">

            @if ($errors->first('link'))
                <br>
                <span class="w3-text-red">{{$errors->first('link')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Blog</button>

    </form>

       
    <a href="/console/blogs/list">Back to blog List</a>

</section>

@endsection