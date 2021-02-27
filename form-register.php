<!DOCTYPE html>
<html>
<head>
	<title>Form Register akun</title>
	<!-- Required meta tags -->
    <script src="https://kit.fontawesome.com/281abfbf40.js" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="company-profile.css">
    <!--Script JS inti Jquery-->
	  <script type="text/javascript" src="jquery-3.5.1.js"></script>
	  <!--Script JS JqueryUI-->
	  <script type="text/javascript" src="js3/jquery-ui.js"></script>
	  <!--Link CSS JqueryUI-->
	  <link rel="stylesheet" type="text/css" href="js3/jquery-ui.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    <style type="text/css">
      body{background: url(img/background.jpg);background-size: 110% 250%;margin: 0;padding: 0;background-repeat: no-repeat; }
      .row{margin-bottom:2%;}
      img{width: 10%; position: absolute;margin-left:-5%;margin-top: -5%; z-index: 1;}
	  .col-md-5 {
   	   padding-top:2%;padding-bottom:2%;padding-right:3%;padding-left:3%;
	   background: rgba(4, 29, 23, 0.5);
	   box-shadow: 0px 0px 25px 10px black;
	  }

      @media only screen and (max-width: 1000px) {
      	.col-md-5{width: 90%;margin-left: 6%;padding-bottom: 5%;}
      	img{width: 20%; margin-left: -8%;margin-top: -10%;}
      	p{font-size: 20px;}
      	#fleks{display:block; width: 100%;}
      	.row{margin-bottom: 5%;}
      }
    </style>
</head>

<body>
<div class="Form-login-and-register"><br><br><br><br>
	<center><img src="img/avatar.png"></center>
	<div class="row justify-content-md-center">
		<div class="col-md-5">
			<br><br><center><h2 style="color: white">Daftar Akun</h2></center><br>
			<div class="row g-3">
				  <div class="col-md-6">
				    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
				  </div>
				  <div class="col-md-6">
				    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
				  </div>
			</div>
			<div class="row">
				<div class="col">
				     <input type="text" class="form-control" placeholder="Alamat">
				 </div>
			</div>
			<div class="row">
				<div class="col">
				      <input type="number" class="form-control" placeholder="Nomor Handphone">
				 </div>
			</div>
			<div class="row g-3">
				<div class="col">
				      <input type="number" class="form-control" placeholder="Nomor KTP">
				 </div>
			</div>
			<div class="row">
				<div class="col">
				     <input type="email" class="form-control" placeholder="Email" id="inputEmail3">
				 </div>
			</div>
			<div class="row">
			  <div class="col">
			    <input type="password" id="inputPassword6" class="form-control"
			     placeholder="Password Must be 8-20 characters long." aria-describedby="passwordHelpInline">
			  </div>
			</div>
			<div class="row">
			  <div class="col">
			    <input type="password" id="inputPassword6" class="form-control"
			     placeholder="Confirm Password" aria-describedby="passwordHelpInline">
			  </div>
			</div>
			<div class="row" style="margin-top: 5%;">
			  <div class="col">
                  <input type="submit" class="btn btn-warning form-control" value="Daftar" nama="simpandata"
                  style="background: yellow;">
			  </div>
			</div><br>
			<p><font color="white">Kalau sudah punya akun Klik &nbsp;&nbsp;<a href="form-login.php" style="color: yellow;font-weight: bold;">Login</a></font></p>
		</div>
	</div>
	<br><br>
</div>
</body>

</html>