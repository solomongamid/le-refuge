<!DOCTYPE html>
<html>
<head>
	<title>simplon chat</title>
	<style type="text/css">
		body{
			background-image: url("simplon.png");
			background-repeat: no-repeat;
			background-position: center;
			margin-top: 200px;
			background-attachment: fixed;
			text-align: center;
		}
		input:focus {
    width: 30%;
}
		
	</style>
	
</head>
<body >

<h1>Simplon chat</h1>
	<form>
            <div class="form-group">
                <label for="pseudo">Username :</label>
                <input type="text" id="pseudo" class="form-control">
            </div>
            </br>
            <div class="form-group">
                <label for="mdp">Password :</label>
                <input type="password" id="mdp" class="form-control">
                <div id="messages"></div>
            </div>
            </form>
            </br>
            <button type="submit" id="send" class="btn btn-default" onclick="window.location.href='index.php'">Login</button> </br></br></br>
           
    
</body>
</html>