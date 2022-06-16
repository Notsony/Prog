<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css\bootstrap.min.css">
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="css/bootstrap-responsive.css" rel="stylesheet" />
<title>Sign In</title>
</head>

<body>
<div class="container">
		<div class="row">
			<div class="span12">
				<div class="row">
					<div class="span4">
                    <div class="btn-toolbar">
				</div>
				<ul class="nav nav-list">
					<li class="active"><a href="index.php"><i class="icon-home icon-white"></i>
						Return To Home</a></li>
							<li><a href="Create_User.php"><i class="icon-book"></i> Don't have account? Create Now!</a></li>
							</div>

					<div class="span8" >
                    <legend>Login User</legend>
                    <font color="red">
					<?php
						if(isset($_GET['status']))
							echo "Username, Password, dan Divisi anda salah!! <BR>";

					?>
					</font>

					<form class="form-horizontal" method="post" action="otentikasi.php" >
						<div class="control-group">
							 <label for="username">Username</label>
							<div class="control">
                        		<input type="text" name="username" id="username" placeholder="Insert your Username" required>
                        	</div>
						</div>
                        
						<div class="control-group">
							<label for="password">Password </label>
							<div class="control">
                            	<input type="password" name="password" id="password" placeholder="Insert your Password" required></div>
							</div>
                            
						<div class="control-group">
							<label for="akses">Divisi</label>
							
							<select name="akses">
								<option value="admin">Admin</option>
								<option value="pendidikan">Divisi Pendidikan</option>
								<option value="humas">Divisi Humas</option>
								<option value="riset">Divisi Riset</option>
							</select>
                        
                        <center>
						<div class="control">
							<label class="control-label"></label>
							<button type="submit" class="btn">Login</button>
							<button type="reset" class="btn">Clear</button>
						</div>
						</center>
					</form>
                    </div>
				</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
