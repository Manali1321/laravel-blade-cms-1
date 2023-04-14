@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Blog</h2>

    <form method="post" action="/console/blogs/edit/{{$blogs->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="title" name="title" id="title" value="{{old('title', $blogs->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="blog">blog:</label>
            <textarea name="blog" id="blog" required>{{old('blog', $blogs->blog)}}</textarea>

            @if ($errors->first('blog'))
                <br>
                <span class="w3-text-red">{{$errors->first('blog')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="link">Refernce from:</label>
            <input type="link" name="link" id="link" value="{{old('link', $blogs->link)}}">

            @if ($errors->first('link'))
                <br>
                <span class="w3-text-red">{{$errors->first('link')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit blog</button>

    </form>

    <a href="/console/projects/list">Back to Project List</a>

</section>

@endsection
