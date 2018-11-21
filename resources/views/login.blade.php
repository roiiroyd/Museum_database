
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
        <a class="nav-link" href="/exibition">EXHIBITIONS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/artworks">ART WORKS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/booking">BOOKING</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/login"><b>LOGIN</b></a>
      </li>
    </ul>
    </div>
  </div>
</nav>
		<br>
		<br>
		<br>
		<br>
		<br>
		<section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"></h2>
                    <h5></h5>
                </div>
            </div>
		<center>
			<h1> Welcome </h1>
			<table>
				<form action="/login/save" method="post" >
        @csrf
					<tr>
						<td>email </td>
						<td><input type="text" name="email" required /></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" required /></td>
					</tr>
					</table><br/>
					
					<input type="submit" name="submit" value="login"  />
					<!-- <input type="reset"> -->
          <br>
          <br>
          <a href="/regis">register</p>
				</form>
			</table>
		</center>
	<br/><br/>

	</body>
</html>