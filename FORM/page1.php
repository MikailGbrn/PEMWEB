<?php 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>E-Banking Bunga</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
</head>
<body style="background-image: url(header.jpeg); background-attachment: fixed;">
<div class="navbar-fixed">
	<nav class="#42f4bc" style="background-color: #42f4bc">
	  <a id="logo-container" href="#" class="brand-logo center white-text"><b>FORM PENDAFTARAN E-BANKING</b></a>
	  <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons black-text">menu</i></a>
	</nav>
</div>
<ul id="nav-mobile" class="side-nav">
	<li><a href="#">Navbar Link</a></li>
</ul>
	
<div class="container">
	<div class="row">
		<div class="col s12">
			<div class="card z-depth-5">
				<div class="card-content">
					<div class="row">
						
					</div>
					<div class="row">
						<form class="col s12">
							<div class="row">
								<div class="input-field col s6">
									<input placeholder="Masukan nama depan anda" type="text">
									<label for="first_name">Nama Depan</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="Masukan nama belakang anda" type="text">
									<label for="first_name">Nama Belakang</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input placeholder="Masukan email anda" type="email" class="validate">
									<label for="first_name">Email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input placeholder="Masukan username anda" type="text" class="validate">
									<label for="first_name">Username</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input placeholder="Masukan password" type="password" class="validate">
									<label for="first_name">Password</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="Ketik ulang password anda" type="password" class="validate">
									<label for="first_name">Re-Password</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<select>
									  <option value="1">PNS</option>
									  <option value="2">Wiraswasta</option>
									  <option value="3">Guru</option>
									  <option value="4">Pelajar</option>
									  <option value="5">Wirausaha</option>
									  <option value="6">Lain-lain</option>
									</select>
									<label>Pekerjaan</label>
								</div>
							</div>
							<div class="row" style="margin-top: -30px;">
								<div class="col s4">
									<div class="row">
										<div class="col s12">
											<p>Paket yang dipilih :</p>
										</div>
										<div class="col s12">
											<input type="checkbox" id="test5"/>
											<label for="test5">Deposito</label>
										</div>
										<div class="col s12">
											<input type="checkbox" id="test6"/>
											<label for="test6">Tabungan</label>
										</div>
										<div class="col s12">
											<input type="checkbox" id="test7"/>
											<label for="test7">Tabungan Bisnis</label>
										</div>	
									</div>
								</div>
								<div class="col s4">
									<div class="row">
										<div class="col s12">
											<p>Aktivasi layanan :</p>
										</div>
										<div class="col s12">
											<input type="checkbox" id="ttest5"/>
											<label for="ttest5">Mobile Banking</label>
										</div>
										<div class="col s12">
											<input type="checkbox" id="ttest6"/>
											<label for="ttest6">SMS Banking</label>
										</div>	
									</div>
								</div>
								<div class="col s4">
									<div class="row">
										<div class="col s12">
											<p>Layanan tambahan :</p>
										</div>
										<div class="col s12">
											<input type="checkbox" id="tttest5"/>
											<label for="tttest5">Token Mobile</label>
										</div>
										<div class="col s12">
											<input type="checkbox" id="tttest6"/>
											<label for="tttest6">Kartu ATM</label>
										</div>	
									</div>
								</div>
							</div>
							<div class="row" style="margin-top: -30px;">
								<div class="col s12">
									<p>Jenis Member :</p>
								</div>
								<div class="col s12">
									<input name="group1" type="radio" id="test1" />
									<label for="test1">Premium</label>
								</div>
								<div class="col s12">
									<input name="group1" type="radio" id="test2" />
									<label for="test2">Gold</label>
								</div>
								<div class="col s12">
									<input name="group1" type="radio" id="test3" />
									<label for="test3">Silver</label>
								</div>
								<div class="col s12">
									<input name="group1" type="radio" id="test4" />
									<label for="test4">Bronze</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<textarea id="textarea1" class="materialize-textarea" placeholder=""></textarea>
									<label for="textarea1">Keterangan Tambahan</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<p>Scan KTP :</p>
									<div class="file-field input-field">
									  <div class="btn">
										<span>File</span>
										<input type="file">
									  </div>
									  <div class="file-path-wrapper">
										<input class="file-path validate" type="text">
									  </div>
									</div>
								</div>
							</div>
							<div class="row center-align">
								<button class="btn waves-effect waves-light" type="submit" name="action">Submit
									<i class="material-icons right">send</i>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
  

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>

