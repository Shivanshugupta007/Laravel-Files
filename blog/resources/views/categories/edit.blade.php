<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet" href="{{asset('styles/catcrt.css')}}">
</head>
<body>
    <form method="get" action="{{route('Categorie.redo',[$over->id])}}">
        @csrf
        <a href="/" class="home">HOME</a>
        <a style = "position:relative; left: 900px;" href="/cat" class="back">BACK</a>
        <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" name="name" class="login__input" value="{{$over->name}}">
                    </div>
                    <button class="button login__submit">
					    <span class="button__text">EDIT EXISTED RECORD</span>
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