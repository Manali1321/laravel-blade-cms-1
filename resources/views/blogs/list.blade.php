@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage blogs</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>Blog</th>
            <th>Image</th>
            <th>Link</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($blogs as $blog)
            <tr>
                <td>{{$blog->title}}</td>
                <td>{{$blog->blog}}</td>

                <td>
                    @if ($blog->image)
                    <img src="{{asset('storage/'.$blog->image)}}" width="200">
                    @endif
                </td>
                <td>
                    <a href="/blog/{{$blog->link}}">
                        {{$blog->link}}
                    </a>
                </td>
                

                <td><a href="/console/blogs/image/{{$blog->id}}">Image</a></td>
                <td><a href="/console/blogs/edit/{{$blog->id}}">Edit</a></td>
                <td><a href="/console/blogs/delete/{{$blog->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/blogs/add" class="w3-button w3-green">New blog</a>

</section>

@endsection
