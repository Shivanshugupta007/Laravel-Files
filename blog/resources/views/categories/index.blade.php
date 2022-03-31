<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link rel="stylesheet" href="{{asset('styles/cat.css')}}">
</head>
<body>
    <form method="get" action="/new">
        @csrf
        <div>
            <button class="button">Add More Records</button>
            <a style = "position:relative; left: 700px;" href="/" class="home">HOME</a>
        </div>
        <div>
            <div>
            <table class="data">
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>POST</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
                @foreach($todo as $do)
                <tr>
                    <td style="text-align:center">{{$do->id}}</td>
                    <td style="text-align:center">{{$do->name}}</td>
                    <td style="text-align:center">{{$do->created_at}}</td>
                    <td style="text-align:center">{{$do->updated_at}}</td>
                    <td>
                        @if($do->posts)
                            @foreach($do->posts as $key)
                                {{$key->title}} <br>
                            @endforeach
                        @else
                            <h5>No Post<h5>
                        @endif
                        </td>
                    <div>
                        <td style="text-align:center"><a href="edit/{{$do->id}}" class="edt">EDIT</a></td>
                    </div>
                    <div>
                        <td style="text-align:center"><a href ="delete/{{$do->id}}" class="dlt">DELETE</a><td>
                    </div>
                </tr>
                @endforeach
            </table>
    </form>
    
</body>
</html>