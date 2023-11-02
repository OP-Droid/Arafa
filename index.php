<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
</head>
<style type="text/css">
	@font-face{
		font-family: headFont;
		src: url(ui/fonts/Cherry Monospace-Light);
	}
	#wrapper{
		max-width: 1000px;
		min-height: 500px;
		display: flex;
		margin: auto;
		color: white;
	}
	#left_pannel{
		min-height: 400px;
		background-color: hsl(225.92deg 86.23% 48.43%);;
		flex: 1;

	}
	#right_pannel{
		min-height: 400px;
		background-color: white;
		flex: 5;

	}
	#header{
		background-color: hsl(226.23deg 31.28% 38.24%);
		height: 70px;
		font-size: 40px;
		text-align: center;
		font-family: headFont;
	}
	#inner_left_pannel{
		background-color: hsl(129.46deg 86.23% 48.43%);
		flex: 3;
		min-height: 500px;
	}
	#inner_right_pannel{
		background-color:hsl(57.8deg 68.55% 68.82%);
		flex: 1;
		min-height: 500px;

</style>
<body>

       <div id="wrapper">
      	<div id="left_pannel">

      	</div>
      	<div id="right_pannel">
      		<div id="header">My Chat</div> 
      			<div id="container" style="display: flex;">
      				<div id="inner_right_pannel"></div>
      				<div id="inner_left_pannel"></div>
      			</div>
      	</div>
      </div> 
</body>
</html>