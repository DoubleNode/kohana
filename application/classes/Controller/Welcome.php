<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$body = '<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>MAD Studios</title>
  
   <style type="text/css">
	html{
		background-image: url(/modules/madwww/media/assets/img/mad_bg.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		height: 100%;
		width: 100%;
	}
	
	.logo{
		width: 100%;
		height: auto;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
	}
	
	.wrapper{
		left: 50%;
		top: 50%;
		height: 65%;
		width: 65%;
		position: absolute;
		text-align: center;
		-webkit-transform: translate(-50%, -50%);
		-moz-transform:    translate(-50%, -50%);
		-ms-transform:     translate(-50%, -50%);
		-o-transform:      translate(-50%, -50%);
		transform:         translate(-50%, -50%);
	}
	
	.logo{
		display: block;
		padding-top: 10%;
		position: relative;
		top: 50%;
		opacity: .8;
		-webkit-transform: translateY(-50%);
		-moz-transform:    translateY(-50%);
		-ms-transform:     translateY(-50%);
		-o-transform:      translateY(-50%);
		transform:         translateY(-50%);
	}

 
@media only screen and (max-width: 701px){	
	.wrapper {
		left: 50%;
		top: 50%;
		height: 75%;
		width: 75%;
	}		
}
		
@media only screen and (max-width: 479px){
	.wrapper {
		left: 50%;
		top: 50%;
		height: 80%;
		width: 80%;
	}
}


   
   </style>
</head>

<body>
<div class="wrapper">
  <img src="/modules/madwww/media/assets/img/mad_logo.png" class="logo"/>
</div>

</div>
</div>
</body>
</html>';
		$this->response->body($body);
	}

} // End Welcome
