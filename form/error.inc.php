<style>
  * {
    margin: 0;
    padding: 0;
    border: 0;
    box-sizing: border-box;
  }

  p {
    font-family: 'PT Sans', sans-serif;
  }

  h1,
  h2 {
    font-family: 'Libre Baskerville', serif;
  }

  header {
      width: 100%;
      padding: 10px 0px;
      text-align: center;
      z-index: 3;
      border-bottom: 1px solid #000000;
      position: -webkit-sticky;
      position: sticky;
      top: 0;
      background: white;
  }

  header nav ul li {
      display: inline-block;
      font-size: 20px;
      margin-right: 184px;
      margin-left: 108px;
  }

  header a {
      text-decoration: none;
      color: #707070;
      font-weight: bold;
      text-transform: uppercase;
      transition: .3s;
  }

  .nav-donate a {
      color: #b45539;
      opacity: 1;
      transition: .3s;
  }

  .svg-inline--fa {
    padding-right: 3px;
  }

  li a:hover {
    color: #b45339;
    transition: .3s;
  }


  .nav-donate a:hover {
    opacity: 0.5;
    transition: .3s;
  }

  .container {
      max-width: 1000px;
      text-align: center;
      margin: 50px auto;
  }

</style>



<header>
  <nav>
    <ul>
      <li><a href="home.html">why they matter</a></li>
      <li><a href="about.html">meet them</a></li>
      <li class="nav-donate">
        <a href="donate.html"><i class="fas fa-heart"></i>donate</a>
      </li>
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
