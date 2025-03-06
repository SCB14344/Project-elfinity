<html>
	<head>
		<title></title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Arsenal+SC:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js" integrity="sha512-v/wOVTkoU7mXEJC3hXnw9AA6v32qzpknvuUF6J2Lbkasxaxn2nYcl+HGB7fr/kChGfCqubVr1n2sq1UFu3Gh1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<meta name="viewport" content="width=500, initial-scale=1">
			<style>
				@keyframes fadeInAnimation {
            0% {
            	
                opacity: 50%;
                transform: translateY(50px);
            }

            100% {
            	transform: translateY(0);
                opacity: 100%;
            }
        }
        @keyframes appear{
        	from{
        	   scale:10%;
            	opacity:0;
        	}
            to{
            	scale:100%;
            	opacity:1;
            }
       }
       button{
       	display:flex;
       	font-size:110%;
       	font-weight:600;
       }
       div,button{
       	font-family: "Afacad Flux", serif;
       }
       body{
       	animation:appear 5s linear;
       	animation-timeline:view();
       animation-range:entry 0%;
      }
        .hero-title,h2{
        	font-family: "Afacad Flux", serif;
       }
				h2,p,h3,img,iframe{
					animation: fadeInAnimation ease-in-out 1.2s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
            z-index:-1;
				}
		
				ul li{
					list-style:none;
				}
				.btn{
					display: inline;
					width:130;
					border-radius:50px;
					background-color:black;
					border:none;
					color: white;
					margin:4% 1%;
					padding:2.5%;
					scale:99%;
				}
				.btn i{
					padding-left:10;
					margin:0 3 0 3;
				}
				
				ul li a,label{
					color: black;
					font-weight:500;
					padding:5px 0;
					display:block;
					text-transform: capitalize;
					text-decoration:none;
					transition:0.3s ease;
				}
				ul li a:hover,ul li label:hover{
					color:red;
				}
		
				
				
			</style>
	</head>
	<body>
		
		<?php
		include('products des/header.php');
		?>

			<div id="block2">
			<h1 class="hero-title"><big>Our work speaks itself</big></h1>
			<p>From concept to completion, our projects showcase our ability to turn challenges into opportunities. See the impact we've made for our clients.</p>
			<button id="st-btn" class="btn" style="width:24%">Get start<i class="fa-solid fa-arrow-right"></i></button>
			<center><img src="imgs/img1.in" style="width:91%; height:40%; border-radius:50px; padding:3% 2% 3% 2%; justify-item:center;"></center>
			<frame>
				<style>
							.navbar{
				width:96%;
				position:relative;
				top:2%;
				right:2%;
				left:2%;
				height:50px
				border:1px solid black;
			}
			.navbar .nav-btns{
				display:flex;
				margin:1% ,2%,1%,2%;
				padding:1;
				overflow-x:auto;
			}
			.navbar .nav-btns button{
				height:50px;
				border:none;
				border-radius:30px;
				padding:15;
				margin-right:3%;
				transition:0.3s ease-in;
			}
			.navbar .nav-btns form{
				display:flex;
				}
			.nav -btns button a{
				color:#FFFFFF;
			}
		</style>
		<nav class="navbar" id="navbar">
			<div class="nav-btns">
				<form method="POST" action="#navbar">
			<button type="submit" name="project-btn" id="project-btn">Projects</button>
			<button type="submit" name="branding-btn" id="branding-btn">Branding</button>
			<button type="submit" name="webdesign-btn" id="webdesign-btn">WebDesign</button>
			<button type="submit" name="appdesign-btn" id="appdesign-btn">AppDesign</button>
			<button type="submit" name="webapp-btn" id="webapp-btn">Webapp</button>
			<button type="submit" name="dashboard-btn" id="dashboard-btn">Dashboard</button>
			</form>
			<div>
		</nav>
		<div id="pages1">
	<?php
	if(isset($_POST['branding-btn'])){
		$top="140%";
	include('branding.html');
	}
	else if(isset($_POST['webdesign-btn'])){
		$top="100%";
	include('web_design.html');
	}
	else if(isset($_POST['webapp-btn'])){
		$top="100%";
	include('web_app.html');
	}
	else if(isset($_POST['dashboard-btn'])){
		$top="100%";
	include('dashboard.html');
	}
	else if(isset($_POST['appdesign-btn'])){
		$top="100%";
	include('app_design.html');
	}
	else{
		$top="100%";
	include('projects.html');
	}
	?>
		</div>
		</frame>
</div>
		<center>
			<footer style="width:100%; position: absolute; top:<?php echo $top; ?>;">
<div style="width:91%; padding:3%; height: 200px; border-radius:20px; background-image:url('imgs/elfinity-banner.jpg'); background-repeat:no-repeat; background-size:cover;">
		<div style="width:50%; float:left;" id="block3" >
			<h1 style="float:left; padding:1%; width:150%; margin:0% 1%; color:#fff; scale:90%;">Let's turn your ideas into impactful realities.</h1>
			<button id="contact-btn" class="btn" style="width:55%; position: relative; top:90%; float:left; margin-left:5%; padding:5% 4% 5% 4%; transform:scale(90%)">contact us<i class="fa-solid fa-arrow-right"></i></button>
		</div>
		</div>
		<div style="display:flex; margin-top:2%; margin-top:8%"">
		<div style=" display: inline">
		<h2 style="margin:0.5%; padding:3% 4% 0% 2%; ">elfinity@technologies.com</h2>
		<p style="font-size:11; margin:0% 0 1% 0; color:#888888; padding:0% 5%;">Reach out to Elfinity.tech today and let us help you craft designs that elevate your brand to the next level.</p>
		</div>

<div style=" display:flex; margin:30px 3% 1% 10%; position:relative; right:2%;">
			<button id="icons" onclick="window.location.href='https://facebook.com';"><i class="fa-brands fa-facebook"></i></button>
			<button id="icons" onclick="window.location.href='https://www.instagram.com/iam_decent_8143?igsh=Z2lyZmZ3NGJ0YWtj';"><i class="fa-brands fa-square-instagram"></i></button>
			<button id="icons" onclick="window.location.href='https://www.linkedin.com/in/s-bhanu-prasad-reddy-48722234a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app';"><i class="fa-brands fa-linkedin"></i></button>
			<button id="icons" onclick="window.location.href='https://dribbble.com/';"><i class="fa-brands fa-dribbble"></i></button>
			<button id="icons" onclick="window.location.href='https://www.behance.net/';"><i class="fa-brands fa-behance"></i></button>
			</div>
			</div>
			
			
			
			
		<center>
	<div style="display:flex; width:100%;">
			<p id="footer" style="width:30%; margin:0%; padding:2% 10% 1% 0%">Designed By<a href="#">Elfinity</a>|<a href="#">Licence</a></p>
<p id="footer" style="width:41.4%; margin:0%; padding:2% 2% 1% 1%">Copyright © Elfinity.tech, All rights reserved</p>
<p id="footer" style="width:30%; margin:0%; padding:2% 0% 1% 13%" >Powerd By <a href="#">Elfinity</a></p>
			</div>
			</center>
		</footer>
		</center>
		</body>
	<style>
		#footer{
			display:inline;
		}
		#footer,#footer a{
			font-size:11;
			color:#888888;
			padding:1%;
		}
		#icons{
			padding:5px 10px 5px 10px;
			background-color:#fff;
			opacity:50%;
			margin:1%;
			border:none;
			decoration:none;
			transform:scale(140%);
			transition:0.3s ease;
		}
		#icons:hover{
			opacity:100%;
			transform:scale(150%);
		}
		</style>
</html>