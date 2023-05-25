<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    img{
        max-width : 200px;
    }
</style>
</head>
<body>
<h1>Author {{$user->fullName}} articles</h1>

{{--<ul id="posts">--}}
{{--@foreach($orderedPostsDate as $post)--}}
{{--    <a href="{{route('author.posts.show',[$author,$post->id])}}"><li>{{$post->title}}</li></a>--}}
{{--@endforeach--}}

    <table class="table">
        <thead class="table-light">
             <tr>
                 <th>Date</th>
                 <th>Ttile</th>
                 <th>thumbnail</th>
                 <th>status</th>
                 <th>Actions</th>
             </tr>
        </thead>
        <tbody>

        @foreach($orderedPostsDate as $post)
            <tr>
                <td>{{$post->created_at}}</td>
            <td>{{$post->title}}</td>
                <td><img src="{{asset('storage/images/post/'.$post->thumbnail)}}"></td>

                    @if($post->isPosted == 1)
                    <td style="color: green">Posted</td>
                    @endif
                @if($post->isPosted == 0)
                    <td style="color: red">Draft</td>
                @endif

                <td><a href="{{route('author.posts.show',[$author,$post->id])}}"><button>show</button></a></td>
                <td><a href="{{route('author.posts.edit',[$author,$post->id])}}"><button>edit</button></a></td>
                @if($post->isPosted == 0)
                    <td><a href="{{Route('postArticle',[$author,$post->id])}}" style="color: green"><button>post</button></a></td>
                @endif
                @if($post->isPosted == 1)
                    <td><a href="{{Route('draftArticle',[$author,$post->id])}}" style="color: green"><button>Draft</button></a></td>
                @endif
                <td>
                <form action="{{route('author.posts.destroy',[$author,$post->id])}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">delete</button>
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


<a href="{{route('author.posts.create',compact('author'))}}">new post</a> <br>
<a href="{{route('getBlogWebsite')}}">to the blog</a>

</body>
</html>
