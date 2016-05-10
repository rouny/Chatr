<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>Chatr</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/chat.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="logout.js"></script>
    <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/aes.js"></script>
	</head>
	<body background="image/back4.jpg" class="backimage">
		<nav class="navbar navbar-custom" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header ">
      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        	<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
      				</button>
  				</div>
        <a class="navbar-brand" href="#">
              <img alt="Brand" src="image/logo_bigger.png" width="35px" height="30px">
            </a>
				<a class="navbar-brand" href="#">Chatr</a>
      		</div>
      	</nav>

        <div id="list">
          <div class="col-sm-3">
            <div class="panel panel-custom"  style="background-color:rgba(255, 255, 255, 0.2);">
              <div class="panel-body"> 
                  <input name="username" type="text" id="user" size="20" style="background-color:rgba(108, 166, 205, 0.2); color:#ffffff;"/>
                  <!--<input class="btn btn-primary" name="add" type="button" id="add" value="Add" onclick="addUser()"/> -->
                  <button class="btn btn-info btn-lg" type="button" onclick="addUser()" style="background-color:rgba(152, 221, 0, 0); border:0px;"><span class="glyphicon glyphicon-plus"></span></button>
                  <div id="listview" class="nav nav-pills nav-stacked" style="background-color:rgba(108, 166, 205, 0.2); border:0px;">
                  </div>
              </div>
            </div>
          </div>
        </div>


      	<!--chatwindow-->
        <div class="col-md-9">
          <div class="panel panel-custom" style="background-color:rgba(255, 255, 255, 0);">
            <!-- <div class="panel-body"> -->
      	     <div id="wrapper">
        	     <div id="menu">
          		    <p class="welcome"><strong><font color="#333333">Welcome, <?php session_start(); echo $_SESSION['name']?></font></strong><b></b></p>
          		    <!--<p class="logout"><a id="exit" href="#" class="btn btn-info btn-xs " role="button" onclick="exit()">Log Out</a><p>-->
                  <p class="logout"><button id="exit" type="button" class="btn btn-info btn-lg" onclick="exit()" style="background-color:rgba(152, 221, 0, 0); border:0px;"><span class="glyphicon glyphicon-off"></span></button></p>
          		    <div style="clear:both">
          		    </div>
       		     </div>
        	     <div id="chatbox" class="chattext">

                </div>
                  <input name="usermsg" type="text" id="usermsg" size="75" style="background-color:rgba(108, 166, 205, 0.2); color:#ffffff; font-size: 15px;" placeholder="Message"/>
          		    <!--<input class="btn btn-primary" name="submitmsg" type="button" id="submitmsg" value="Send" onclick="postMessage()" />-->
                  <button class="btn btn-info btn-lg" type="button" id="submitmsg" onclick="postMessage()" style="background-color:rgba(152, 221, 0, 0); border:0px;"><span class="glyphicon glyphicon-share-alt"></span></button>
              </div>
            <!-- </div> -->
          </div>
        </div>

        <script src="getList.js"></script>
        <script src="myajax.js"></script>
        <script src="post.js"></script>
        <script src="addUser.js"></script>
      </body>
</html>