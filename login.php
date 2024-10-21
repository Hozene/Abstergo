<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome to Abstergo</title>
<meta charset="UTF-8">
<link rel="icon" href="images/abstergo_logo.gif" type="image/gif" >
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="styles/layout.css" type="text/css">
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="index.html"><img src="images/abstergo_logo.gif" width="40" height="40">Abstergo</a></h1>
    </div>
    <nav>
      <ul>
        <li><a href="about.html">About</a></li>
        <li><a href="projects.html">Projects</a>
			<ul>
				<li><a href="#">Animus</a></li>
				<li><a href="#">Eye_Abstergo</a></li>
				<li><a href="#">Something</a></li>
			</ul>
		</li>
        <li><a href="enter.html">Entertainment</a></li>
        <li class="last"><a href="login.php">Log In</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
<div class="carousel-container">
<i class="fas fa-chevron-left" id="prevBtn"></i>
<i class="fas fa-chevron-right" id="nextBtn"></i>
	<div class="carousel-slide">
		<img src="images/Abstergo3.png" id="lastClone">
		<a href="index.html"><img src="images/Abstergo1.png"></a>
		<a href="projects.html"><img src="images/Abstergo2.png"></a>
		<a href="index.html"><img src="images/Abstergo3.png"></a>
		<img src="images/Abstergo1.png" id="firstClone">
	</div>
</div>
<br><br>
    <!-- Bottom content -->
    <div id="homepage">
      <!-- Content -->
      <section id="services" class="clear">
        <article class="one_third">
          <figure><img src="images/NewFacility.png" width="290" height="180" alt="">
            <figcaption>
              <h2>New Facility</h2>
              <p>Vestibulum cursus dapibus est vitae scelerisque. In eu magna risus. Ut nisl risus, porttitor sed dui luctus, luctus pharetra felis.</p>
              <footer class="more"><a href="#">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class="one_third">
          <figure><img src="images/Merch.png" width="290" height="180" alt="">
            <figcaption>
              <h2>New Merch!</h2>
              <p>Fusce vel nulla rutrum, malesuada ipsum ac, rhoncus arcu.</p>
              <footer class="more"><a href="#">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class="one_third lastbox">
          <figure><img src="images/animus.png" width="290" height="180" alt="">
            <figcaption>
              <h2>New project Animus</h2>
              <p>Curabitur tellus quam, pharetra a nisi quis, commodo tincidunt lorem. Mauris id tincidunt erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;</p>
              <footer class="more"><a href="#">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
      </section>
    </div>
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <div id="footer" class="clear">
    <!-- Pierwsza sekcja -->
    <section class="one_quarter">
      <h2 class="title">Links</h2>
      <nav>
        <ul>
          <li><a href="#">#</a></li>
          <li><a href="#">#</a></li>
          <li><a href="#">#</a></li>
          <li><a href="#">#</a></li>
          <li class="last"><a href="#">#</a></li>
        </ul>
      </nav>
    </section>
    <!-- Druga sekcja -->
    <section class="one_quarter">
      <h2 class="title">Links</h2>
      <nav>
        <ul>
          <li><a href="#">#</a></li>
          <li><a href="#">#</a></li>
          <li><a href="#">#</a></li>
          <li><a href="#">#</a></li>
          <li class="last"><a href="#">#</a></li>
        </ul>
      </nav>
    </section>
    <!-- Trzecia sekcja -->
    <section class="one_quarter">
      <h2 class="title">Links</h2>
      <nav>
        <ul>
          <li><a href="#">#</a></li>
          <li><a href="#">#</a></li>
          <li><a href="#">#</a></li>
          <li><a href="#">#</a></li>
          <li class="last"><a href="#">#</a></li>
        </ul>
      </nav>
    </section>
    <!-- Czwarta sekcja -->
    <section class="one_quarter lastbox">
      <h2 class="title">Links</h2>
      <nav>
        <ul>
          <li><a href="#">#</a></li>
          <li><a href="#">#</a></li>
          <li><a href="#">#</a></li>
          <li><a href="#">#</a></li>
          <li class="last"><a href="#">#</a></li>
        </ul>
      </nav>
    </section>
  </div>
</div>
<!-- Copyright -->
<div class="wrapper row4">
  <footer id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">Abstergo</a></p>
  </footer>
</div>
<script src="scripts/slider.js"></script>
</body>
</html>