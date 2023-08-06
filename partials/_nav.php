<style>
 
  .navbar {
    background-color: #dfccf1; 
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .navbar-brand img {
    width: 90px; 
    height: auto; 
  }
  .navbar-nav .nav-link {
    color: #9b59b6; 
  }

  .navbar-nav .nav-link.active {
    font-weight: bold;
  }

  .navbar-toggler {
    border: none;
    outline: none;
    padding: 8px;
    cursor: pointer;
  }

  .navbar-toggler-icon {
    width: 25px;
    height: 3px;
    background-color: #9b59b6; 
    border-radius: 4px;
  }

  .navbar-collapse {
    background-color: #dfccf1; 
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .navbar-nav .nav-item {
    margin: 5px 0;
  }
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="logo2.jpg"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="homepage.php"><b>Home</b></a>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="aboutus.php"><b>About Us</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="faqs.php"><b>FAQs</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pricetags.php"><b>Pricing</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="all_professor_info.php"><b>Experts</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php"><b>Sign Up/Login</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
