<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link rel="stylesheet" href="{{asset('styles/post.css')}}">
</head>
<body>
    <form method="get" action="/postnew">
        @csrf
        <div>
            <button class="button">Add More Records </button> 
            <a style = "position:relative; left: 700px;" href="/" class="home">HOME</a>
        </div>
    
            <table class="data">
                <tr>
                    <th>ID</th>
                    <th>CATEGORIES NAME</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>IMAGE</th>
                    <th>TAG NAME</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
                @foreach($data as $do)
                <tr>
                    <td style="text-align:center">{{$do->id}}</td>
                    @if($do->categorie)
                    <td style="text-align:center">{{$do->categorie->name}}</td>
                    @else
                    <td style="text-align:center">No Categorie</td>
                    @endif
                    <td style="text-align:center">{{$do->title}}</td>
                    <td style="text-align:center">{{$do->description}}</td>
                    <td style="text-align:center"><img class="img-thumbnail" src="{{ URL::asset('images/user_image/'.$do->image) }}" width="100px" height="auto" ></td>
                    <td>
                        @if($do->tags->count()>0)
                            @foreach ($do->tags as $tag)
                                {{$tag->name}} <br>
                            @endforeach
                        @else No Tag
                        @endif 
                    </td>
                    <td style="text-align:center">{{$do->created_at}}</td>
                    <td style="text-align:center">{{$do->updated_at}}</td>
                    <div>
                        <td style="text-align:center"><a href="postedit/{{$do->id}}" class="edt" >EDIT</a></td>
                    </div>
                    <div>
                        <td style="text-align:center"><a href ="postdelete/{{$do->id}}"  class="dlt">DELETE</a></td>
                    </div>
                    @endforeach
                </tr>
              
            </table>
    </form>
</body>
</html>