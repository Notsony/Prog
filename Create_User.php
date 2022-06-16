<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create User Account</title>
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="css/bootstrap-responsive.css" rel="stylesheet" />
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
							<li><a href="login.php"><i class="icon-book"></i> Return To Login Page</a></li>
							</div>

					<div class="span8">
                    <legend>Create User Account</legend>
                    <form class="form-horizontal" method="post" action="simpan_user.php" >
						<div class="control-group">
							 <label for="username">New Username</label>
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
								<!--<option value="admin">Admin</option>-->
								<option value="pendidikan">Divisi Pendidikan</option>
								<option value="humas">Divisi Humas</option>
								<option value="riset">Divisi Riset</option>
							</select>
							<!--<div class="control">
                            	<input type="radio" name="akses" checked value="user">I Agree of All Terms</div>
							</div>-->
                        
                        <div class="control">
							<label class="control-label"></label>
							<button type="submit" class="btn">Create</button>
						</div>
					</form>
                    </div>
				</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
