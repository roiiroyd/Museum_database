
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
  <a style="padding-left:5%"class="navbar-brand" href="/home">Art Museum</a>
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
      <li class="nav-item active">
        <a class="nav-link" href="/artworkSculpture"><b>ART WORKS</b></a>
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
  <div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a href="/artworkPaint">PAINTING</a>
        <a href="/artworkSculpture">SCULPTURE</a>
        <a href="/artworkStatue">STATUE</a>
      <a href="/artworkOther">OTHER</a>
        </div>
  </div>
  <div class="col-6"> 
      <div class="mx-auto">
          <div>
                <div>
                  @foreach ($posts as $post)
                    <tr>
                    <br>
                    <th>{{$post->title}}</th>
                    <th>{{$post->year}}</th> 
                    <th>{{$post->paintType}}</th>
                    </tr>
                  @endforeach
                </div>
          </div>
      </div>
    
      </div>
    </div>
  </div>
</div>
