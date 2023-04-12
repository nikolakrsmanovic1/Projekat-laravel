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
  <title>Document</title>
</head>
<body>
   <div class="container">
    <div class="row">
		<div class="col-md-4">
			<form action="/vote" method="post">
				<div class="form-check">
					<label>
						<input type="radio" value="aca" name="radio" checked> <span class="label-text">Aleksandar Vucic</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="radio" value="ivica" name="radio"> <span class="label-text">Ivica Dacic</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="radio" value="toma" name="radio"> <span class="label-text">Tomislav Nikolic</span>
					</label>
				</div>
                <input type="submit" value="Glasaj">
			</form>
		</div>
    </div>
</div>
</body>
</html>
