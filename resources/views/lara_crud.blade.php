<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{asset("/css/bootstrap.min.css")}}">
</head>
<body>
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Title</th></th>
            <th>Content</th>
        </tr>

        @foreach ($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td>{{$article->content}}</td>
        </tr>
        @endforeach
    </table>
    
    <script type="text/javascript" src="{{asset("/js/bootstrap/bootstrap.min.js")}}"></script>
</body>
</html>