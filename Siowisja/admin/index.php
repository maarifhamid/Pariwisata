<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
  
</head>
      <body>
          <br/>
	          
	      <br/>
			<div id="card">
    			<div id="card-content">
      				<div id="card-title">
        				<h2>LOGIN ADMIN</h2>
                <form method="post" action="proses_login.php">
        					<div class="underline-title"></div>
      				</div>
      			<form method="post" class="form" action="cek_login.php">
        		<label for="username" style="padding-top:13px">
            		&nbsp;Username
          		</label>
        			<input id="username" class="form-content" type="text" name="user" autocomplete="on" required />
        			<div class="form-border"></div>
        		<label for="user-password" style="padding-top:22px">&nbsp;Password
          		</label>
        			<input id="user-password" class="form-content" type="password" name="pass" required />
        	<div class="form-border"></div>
        <a href="#">
        </a>
        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
      </form>
    </div>
  </div>
</body>
</html>