<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$body = '<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>MAD Studios</title>

  <link rel="stylesheet" href="css/styles.css">
  
   <style type="text/css">
   
   h1 {border-width: 1; border: solid; text-align: center}
   html{
   		background-image: url(img/mad_bg.jpg);
   		background-repeat: no-repeat;
   		background-size: cover;
   		height: 100%;
   		width: 100%;
   }
   .wrapper{
	   width: 60%;
	   margin: 15% auto 0;
	   
   }
   
   .logo{
	   width: 100%;
	   height: auto;
   }
   @media only screen and (max-width: 701px){
			/*------ top header ------ */
           .wrapper{
	   width: 70%;
	   margin: 40% auto 0;
	   
	   }
 
			
		}
		
		@media only screen and (max-width: 479px){
			.wrapper{
	   width: 80%;
	   margin: 50% auto 0;
	   
	   }
   		}
   
   
   </style>
</head>

<body>
<div class="wrapper">
  <img src="img/mad_logo.png" class="logo"/>
</div>
</body>
</html>';
		$this->response->body($body);
	}

} // End Welcome
