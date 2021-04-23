<style type="text/css">
*{
  margin: 0;
  padding: 0;
  border: 0;
  font-family: 'Nunito Sans', sans-serif;
}

nav ul li {
  display: inline;
}
nav a {
  text-decoration: none;
  color: white;
  background: #1c344c;
  padding: 5px;
  border-radius: 5px;
}

header{
  text-align: center;
  background: #398298;
  padding: 20px 0;
}
.container {
  max-width: 800px;
  margin: 40px auto;
  padding: 20px;
  color: #1c344c;
	text-align: center;
}

footer{
  background: #398298;
  color: #1c344c;
  text-align: center;
  font-weight: bold;
  padding: 20px 0;
}
</style>

<header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="history.html">History</a></li>
      <li><a href="registration.html">Registration</a></li>
    </ul>
  </nav>
</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
	<p>Mosaic at WDW 10 Year Anniversary Celebration</p>
</footer>
