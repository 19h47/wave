<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Wave</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:500" rel="stylesheet">
		<link rel="stylesheet" href="./dist/css/global.css">
		<style>
			body {
				font-family: 'Poppins';
				color: #212d50;
			}

			.Link-wave {
				display: inline-block;
				font-weight: 500;
				font-size: 14px;
				line-height: 30px;
				text-decoration: none;
				padding-bottom: 7px;
				position: relative;
				color: #212d50;
			}

			.Link-wave__path {
				position: absolute;
				bottom: 0;
				right: 0;
				left: 0;
				stroke: currentColor;
			}
		</style>
	</head>

	<body>
			
		<a class="Link-wave js-link-path" href="#">
			
			Découvrir le blog

			<svg class="Link-wave__path" viewBox="0 0 114 7">
				<path  class="js-line" fill="none"  stroke-miterlimit="10"  d="
					
					M 113.8, 6.3

					c -5.7, 0 -5.7 -5.7 -11.3 -5.7
					c -5.7, 0 -5.7, 5.7 -11.3, 5.7
					c -5.7, 0 -5.7 -5.7 -11.3 -5.7
					
					C 74, 0.7, 74, 6.3, 68.4, 6.3
					
					c -5.7, 0 -5.7 -5.7 -11.3 -5.7
					c -5.7, 0 -5.7, 5.7 -11.3, 5.7

					C 40, 6.3, 40, 0.7, 34.3, 0.7
					
					c -5.7, 0 -5.7, 5.7 -11.3, 5.7
					c -5.7, 0 -5.7 -5.7 -11.3 -5.7
					c -5.7, 0 -5.7, 5.7 -11.3, 5.7
				"/>

			</svg>

		</a>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="./dist/js/bundle.js"></script>
	</body>

</html>