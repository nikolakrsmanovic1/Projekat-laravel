<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
@import url("https://use.fontawesome.com/releases/v5.0.11/css/all.css");

body{
	padding: 50px;
}

label{
	position: relative;
	cursor: pointer;
	color: #666;
	font-size: 30px;
}

input[type="checkbox"], input[type="radio"]{
	position: absolute;
	right: 9000px;
}

/*Check box*/
input[type="checkbox"] + .label-text:before{
	content: "\f0c8";
	font-family: "Font Awesome 5 Free";
	speak: none;
	font-style: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing:antialiased;
	width: 1em;
	display: inline-block;
	margin-right: 5px;
}

input[type="checkbox"]:checked + .label-text:before{
	content: "\f14a";
	color: #2980b9;
	animation: effect 250ms ease-in;
	font-weight: 900;
}

input[type="checkbox"]:disabled + .label-text{
	color: #aaa;
}

input[type="checkbox"]:disabled + .label-text:before{
	content: "\f0c8";
	color: #ccc;
}

/*Radio box*/

input[type="radio"] + .label-text:before{
	content: "\f111";
	font-family: "Font Awesome 5 Free";
	speak: none;
	font-style: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing:antialiased;
	width: 1em;
	display: inline-block;
	margin-right: 5px;
}

input[type="radio"]:checked + .label-text:before{
	content: "\f192";
	color: #8e44ad;
	animation: effect 250ms ease-in;
}

input[type="radio"]:disabled + .label-text{
	color: #aaa;
}

input[type="radio"]:disabled + .label-text:before{
	content: "\f111";
	color: #ccc;
}

/*Radio Toggle*/

.toggle input[type="radio"] + .label-text:before{
	content: "\f204";
	font-family: "Font Awesome 5 Free";
	speak: none;
	font-style: normal;
	font-weight: 900;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing:antialiased;
	width: 1em;
	display: inline-block;
	margin-right: 10px;
}

.toggle input[type="radio"]:checked + .label-text:before{
	content: "\f205";
	color: #16a085;
	animation: effect 250ms ease-in;
}

.toggle input[type="radio"]:disabled + .label-text{
	color: #aaa;
}

.toggle input[type="radio"]:disabled + .label-text:before{
	content: "\f204";
	color: #ccc;
}


@keyframes effect{
	0%{transform: scale(0);}
	25%{transform: scale(1.3);}
	75%{transform: scale(1.4);}
	100%{transform: scale(1);}
}
</style>
  <title>Document</title>
</head>
<body>
   <div class="container">
    <div class="row">
		<div class="col-md-4">
			<form action="/vote" method="post">
				@csrf
				<div class="form-check">
					<label>
						<input type="radio" value="1" name="id" checked> <span class="label-text">Aleksandar Vucic</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="radio" value="2" name="id"> <span class="label-text">Ivica Dacic</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="radio" value="3" name="id"> <span class="label-text">Tomislav Nikolic</span>
					</label>
				</div>
                <input type="submit" value="Glasaj">
			</form>
		</div>
    </div>
</div>
</body>
</html>
