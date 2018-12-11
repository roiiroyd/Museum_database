
<!DOCTYPE html>
<html>
	<title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<head>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a style="padding-left:5%"class="navbar-brand" href="#">Art Museum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div style="padding-left:50%" >
  <div class="collapse navbar-collapse"id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="/home">HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/exhibition">EXHIBITIONS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/artworkPaint">ART WORKS</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="/login">LOGIN</a>
      </li>
    </ul>
    </div>
  </div>
</nav>
		<br>
		<br>
		<br>
		<br>
        <div class="page-header ">
<center>
<h2>Register</h2>
</center>
</div>

  <br>
  <br>
 <center> 
	<form action='/register/save' method="post">
    {{ csrf_field() }}
	<table style="width:30%"class="table table-striped">

    <!-- <tr>
			<td style="width:40%">ID : </td>
			<td><input class="form-control" type="text" name="id" width="500" placeholder="ID" required></td>
		</tr> -->
    
		<tr>
			<td style="width:40%">Name : </td>
			<td><input class="form-control" type="text" name="name" width="500" placeholder="NAME" required></td>
		</tr>
		<tr>
			<td>Lastname : </td>
			<td><input class="form-control" type="text" name="lastname" placeholder="LASTNAME"></td>
		</tr>
		<tr>
			<td>E-mail : </td>
			<td><input class="form-control" type="text" name="email" placeholder="E-MAIL"></td>
		</tr>
		<tr>
			<td>Password : </td>
			<td><input class="form-control" type="password" name="password" placeholder="PASSWORD"></td>
		</tr>
		<!-- <tr>
			<td>Confirm Password : </td>
			<td><input class="form-control" type="password" name="" placeholder=""></td>
		</tr> -->
	</table>	
  
  <center>
  <table>
    
	 <input class="btn" style="background-color:#2DB74D" type="submit" name="submit" value="Submit">
  </form>  

  <form action="/home">
    <input style="margin-left:2%;background-color:#bbb" class="btn" type="submit" value="Back">
  </form>

  </table>
  </center>
  </form>


</center>

	</body>
</html>