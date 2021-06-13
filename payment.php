<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Papuma</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/edit.css">
    <link rel="stylesheet" href="slideshowphotobooth.css">
    <link rel="stylesheet" href="css/css/bingkai.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Papuma </a>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="Photo-Booth.html">Photo Booth</a>
                <a class="dropdown-item" href="Restaurant.html">Restaurant</a>
              </div>
            </li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
              <li class="nav-item active"><a href="Payment.html" class="nav-link">Payment</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-3" data-stellar-background-ratio="0.5">
      <div class="slideshow"></div>
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Payment<i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Payment</h2>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section ftco-no-pb">
		<div class="container">
			<div class="row">
				<div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
		  <div class="heading-section">
              <h2 class="mb-4">Payment</h2>
              <form action="basket2.php" method="POST">
            <table class="table">
                <tr>
                    <th>Product Name</th>
                    <th>Product Quantity</th>
                    <th>Price</th>
                    <th>Total Price</th>
                </tr>
                <?php
                    include("connect.php");
                    session_start();

                    $hargatotal = 0;

                    foreach ($_SESSION['basket'] as $key => $val)
                    {
                        
                        $hasil = "SELECT * FROM tb_barang WHERE id='$key'";
                        $result = mysqli_query($conn,$hasil);
                        while ($row = $result->fetch_array()) {
                        $subtotal = $row["harga"] * $val;
                        

                    //menampilkan data
                    echo "	
                            <tr><td class='tablefont2'>". $row["nama"]. "<input type='hidden' name='namabarang' value='".$row["nama"] . "'>
                            <td class='tablefont2'>$val<input type='hidden' name='jumlahbarang' value='$val'>
                            <td class='tablefont2'>Rp. " . $row["harga"] . "<input type='hidden' name='hargasatuan' value='" . $row["harga"] . "'>
                            <td class='tablefont2'>Rp. $subtotal<input type='hidden' name='subtotal' value='$subtotal'>
                            ";
                        $hargatotal = $hargatotal + $subtotal;
                        }
                    }
                    
                    echo"
                        </table>
                        </br>
                            <div>
                                <label>Orderer Name :</label>
                                <input type='text' placeholder='Input Orderer Name' name='name' id='name' required>
                            </div>
                            <div>
                                <label>Email :</label>
                                <input type='text' placeholder='Input Email' name='email' id='email' required>
                            </div>
                            <div>
                                <label for='myfile'>KTP Photo :</label>
                                <br>
                                <input type='file' id='foto_ktp' name='foto_ktp'>
                            </div>
                            <div>
                                <br>
                                <label for='myfile'>Selfie Photo With KTP :</label>
                                <br>
                                <input type='file' id='foto_selfie' name='foto_selfie'>
                            </div>
                            <div>
                                <br>
                                <label>Phone number :</label>
                                <input type='tel' placeholder='Input Phone Number' name='notelp' id='notelp' required>
                            </div>
                            <div>
                                <p>Total Price : $hargatotal</p><input type='hidden' name='hargatotal' value='$hargatotal'>
                            </div>
                            <div>
                                <p><input type='checkbox' name='reading' value='reading' tabindex='1'/>  By Checking This CheckBox, You Are Agreed to Send Payment Proof lately 30 Minutes After You Pressed 'BUY' Button And Send It To 081330229959. Or Else, Your Order Will Be Canceled</p>
                            </div>
                            <button type='submit' class='buybutton'>BUY</button>
                            </a>";         
                ?>
            </form>            
		  </div>

				</div>
			</div>
		</div>
	</section>

  <footer class="ftco-footer">
    <div class="container">
      <div class="row">
      <div class="col-sm-12 col-md">
        <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2 logo"><a href="index.html">Papuma</a></h2>
        <p>With The Beauty of The Infinite Ocean and Well Protected Forests, We Come To Amaze You.</p>
        <ul class="ftco-footer-social list-unstyled mt-2">
          <li class="ftco-animate"><a href="Instagram.html"><span class="fa fa-instagram"></span></a></li>
          <li class="ftco-animate"><a href="https://www.facebook.com/papuma.id/"><span class="fa fa-facebook"></span></a></li>
          <li class="ftco-animate"><a href="https://www.youtube.com/watch?v=vhGzp2zN8Dc"><span class="fa fa-youtube"></span></a></li>
        </ul>
        </div>
      </div>
      <div class="col-sm-12 col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
        <h2 class="ftco-heading-2">Information</h2>
        <ul class="list-unstyled">
          <li><a href="about.html"><span class="fa fa-chevron-right mr-2"></span>About us</a></li>
          <li><a href="contact.html"><span class="fa fa-chevron-right mr-2"></span>Contact us</a></li>				  
        </ul>
        </div>
      </div>
      <div class="col-sm-12 col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Products</h2>
          <ul class="list-unstyled">
          <li><a href="Photo-Booth.html"><span class="fa fa-chevron-right mr-2"></span>Photo-Booth</a></li>
          <li><a href="Restaurant.html"><span class="fa fa-chevron-right mr-2"></span>Restaurant</a></li>
          </ul>
        </div>
        </div>
      <div class="col-sm-12 col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Have a Questions?</h2>
          <div class="block-23 mb-3">
          <ul>
            <li><span class="icon fa fa-map pr-4"></span><span class="text">Papuma, Jl.Pantai,Area Kebun,Lojejer,Wuluhan,Kabupaten Jember,Jawa Timur 68162</span></li>
            <li><span class="icon fa fa-phone"></span><span class="text">+62 00000000001</span></a></li>
            <li><span class="icon fa fa-paper-plane pr-4"></span><span class="text">Papuma@gmail.com</span></a></li>
          </ul>
          </div>
        </div>
      </div>
      </div>
    </div>
    <!--<div class="container-fluid px-0 py-5 bg-black">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
      
          <p class="mb-0" style="color: rgba(255,255,255,.5);"> Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
     Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. </p>
        </div>
        </div>
      </div>
    </div>-->
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>