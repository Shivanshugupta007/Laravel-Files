<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link rel="stylesheet" href="{{asset('styles/tag.css')}}">
</head>
<body>
    <form method="get" action="/tagnew">
        @csrf
        <div>
            <button class="button">Add More Records</button>
            <a style = "position:relative; left: 700px;" href="/" class="home">HOME</a>
        </div>
        <div>
            <table class="data">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>ACTION</th>
                </tr>
                @foreach($fetch as $do)
                <tr>
                    <td style="text-align:center">{{$do->id}}</td>
                    <td style="text-align:center">{{$do->name}}</td>
                    <td style="text-align:center">{{$do->created_at}}</td>
                    <td style="text-align:center">{{$do->updated_at}}</td>
                    <div>
                        <td style="text-align:center"><a href="tagedit/{{$do->id}}" class="edt">EDIT</a></td>
                    </div>
                    <div>
                        <td style="text-align:center"><a href ="tagdelete/{{$do->id}}" class="dlt">DELETE</a><td>
                    </div>
                </tr>
                @endforeach
            </table>
    </form>
</body>
</html>