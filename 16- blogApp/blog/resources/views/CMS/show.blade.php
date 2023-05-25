<html>
   <head>
       <style>
           img{
               max-width : 500px;
           }
       </style>
   </head>
<body>
     <h1>{{$post->title}}</h1>
     <p>{{$post->created_at}}</p>
     <img src="{{asset('storage/images/post/'.$post->thumbnail)}}">

<div id="blogContent" >
    {!! $post->content !!}
</div>
</body>
</html>
