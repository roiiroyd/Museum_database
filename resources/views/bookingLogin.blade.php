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
  <a style="padding-left:5%"class="navbar-brand" href="/home/{{$reg}}">Art Museum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div style="padding-left:50%" >
  <div class="collapse navbar-collapse"id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="/homeLogin/{{$reg}}">HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/exhibitionLogin/{{$reg}}">EXHIBITIONS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/artworkPaintLogin/{{$reg}}">ART WORKS</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/bookingLogin/{{$reg}}"><b>BOOKING</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/home">LOGOUT</a>
      </li>
    </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>


<center>
<table style="width:50%">
  <tr>
    <th>EXIBITION NAME</th>
    <th>DATE</th> 
    <th>ENTER</th>
  </tr>

  @foreach ($posts as $post)
  <tr>
    <th>{{$post->name}}</th>
    <th>{{$post->startDate}}</th> 
    <th>{{$post->endDate}}</th>
    <td><center><a href="/bookingLogin/{{$post->exhibitionID}}/{{$reg}}/booking">BOOKING</a></center></td>
  </tr>
  @endforeach


  

</table>
</center>