<!DOCTYPE html>
<html>
	<head>
		<title>Página Inicial</title>	
		<style type="text/css">
			header {
			  position: relative;
			  background-color: black;
			  height: 75vh;
			  min-height: 25rem;
			  width: 100%;
			  overflow: hidden;
			}

			header video {
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  min-width: 100%;
			  min-height: 100%;
			  width: auto;
			  height: auto;
			  z-index: 0;
			  -ms-transform: translateX(-50%) translateY(-50%);
			  -moz-transform: translateX(-50%) translateY(-50%);
			  -webkit-transform: translateX(-50%) translateY(-50%);
			  transform: translateX(-50%) translateY(-50%);
			}

			header .container {
			  position: relative;
			  z-index: 2;
			}

			header .overlay {
			  position: absolute;
			  top: 0;
			  left: 0;
			  height: 100%;
			  width: 100%;
			  background-color: black;
			  opacity: 0.5;
			  z-index: 1;
			}

			@media (pointer: coarse) and (hover: none) {
			  header {
			    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
			  }
			  header video {
			    display: none;
			  }
			}
			h3{
				color: white;
			}
		</style>
		<script type="text/javascript">
			var prevScrollpos = window.pageYOffset;
			window.onscroll = function() {
			  var currentScrollPos = window.pageYOffset;
			  if (prevScrollpos > currentScrollPos) {
			    document.getElementById("navbar").style.top = "0";
			  } else {
			    document.getElementById("navbar").style.top = "-50px";
			  }
			  prevScrollpos = currentScrollPos;
			}
		</script>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<header>
	  <div class="overlay"></div>
	   <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    		<source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
  		</video>
	  <div class="container h-100">
	    <div class="d-flex h-100 text-center align-items-center">
	      <div class="w-100 text-white">
	        <h1 class="display-4">Ver. Ser. Conquistar.</h1>
	        <p class="lead mb-0">#IssoéGamer</p>
	      </div>
	    </div>
	  </div>
	</header>