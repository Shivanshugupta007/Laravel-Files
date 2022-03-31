<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE</title>
    <link rel="stylesheet" href="{{asset('styles/postcrt.css')}}">
</head>
<body>
<form method="post" action="/poststore" enctype="multipart/form-data">
    @csrf
    <a href="/" class="home">HOME</a>
    <a style = "position:relative; left: 900px;" href="/post" class="back">BACK</a>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        
                        <input type="text"  name="title" class="login__input" placeholder="ENTER Title">
                    </div>
                    <div class="login__field">
					    <i class="login__icon fas fa-lock"></i>
                        <input type="text" name="desc" class="login__dsc" placeholder="DESCRIPTION" style="height:150px">
                    </div>
                    <div>
                        <input type="file" class="file" name="image"/>
                    </div>
                    <div class="classic" style = "position:relative; left: 0px; top:15px;">
                        select:<select name="categorie_id" id="">
                            @foreach($categorie as $key)
                                <option value='{{$key->id}}'>{{$key->name}}</option>
                            @endforeach
                        </select>
                    </td>
                    </div>
                    <div style = "position:relative; left: 200px;">
                        select:<select name="tag_id[]" id="" multiple>
                            @foreach($tag as $key)
                                <option value='{{$key->id}}'>{{$key->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </tr>
                    <button class="button login__submit">
					    <span class="button__text">ADD NEW RECORD</span>
					    <i class="button__icon fas fa-chevron-right"></i>
				    </button>	
    </form>
    </div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</body>
</html>