<!DOCTYPE html>
<html lang="en">
<head>
  <title>)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   	<!-- Bootstrap Core Css -->
    <link href="{{ asset('assets/backend/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <script src="{{ asset('assets/backend/plugins/jquery/jquery.min.js')}}"></script>
     <script src="{{ asset('assets/backend/plugins/bootstrap/js/bootstrap.js')}}"></script>
	<style type="text/css">
	    .wrapper section.center{

	    }
		.wrapper section.center  header{
			width: 1000px;
			margin: 0 auto;
			border-radius: 10px;
			background-color: #6099FF;
			color: #fff;
		}
		.wrapper section.center  header h2{
			padding-left: 5%;
		}
		.wrapper section.main {
			/*border: 1px solid blue;*/
			width: 1000px;
			margin: 3% auto;
			height: 100%;
		} 
		.wrapper section.main  section#shkolo_left {
			/*border: 1px solid orange;*/
			display: flex;
			flex-flow: row wrap;
			margin:0 auto;
			width: 900px;
			height: 100px;
		}
		.wrapper section.main  section#shkolo_left div {
			margin: 5% 5% 5% 5%;
			width: 200px;
			height: 75px;
			border: 1px solid blue;
		}
		
		
		.main  a {
			display: block;
			text-align: center;
		    text-decoration: none;
		    font-size: 20px;
		    color: #000;
		    border-radius: 50%;
            border: 3px solid;
			width: 70px;
			height: auto;
			padding: 5% 0; 
			margin: 10px 70px 10px 70px;
		}
		.main a:hover{
			text-decoration: none;
             border-radius: 53%;
		}
		.main a.color-Green:hover{
			background-color: green;
		}
        .main a.color-Red:hover{
			background-color: red;
		}
		.main a.color-Blue:hover{
			background-color: blue;
		}
		.main a.color-Brown:hover{
			background-color: brown;
		}
		.main a.color-Yellow:hover{
			background-color: yellow;
		}

		.margin-top-sm { margin-top: 3%; }
		.margin-bottom-sm { margin-bottom: 3%; }
		.table {
			margin: auto;
			width: 65% !important; 
        }
        @media screen and (max-width: 900px) {
          .wrapper section.main  section#shkolo_left {
  	         width: 600px;
          }
         .wrapper section.center  header{
  	        width: 100%;
          }
        }
       @media screen and (max-width: 730px) {
        .wrapper section.main  section#shkolo_left {
          width: 80%;
        }
       } 
       @media screen and (max-width: 650px) {
        .wrapper section.main  section#shkolo_left {
       
        }
       .wrapper section.main  section#shkolo_left div {
			
			width:50%;
		}
       .main  a {
			
			padding: 3% 0; 
			margin-left: 150px;
		}
}
	</style>

</head>
<body>
 
<div class="container">
 <div class="row">
 
 </div>
</div>

</body>
</html>