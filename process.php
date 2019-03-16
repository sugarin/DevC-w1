<html>
	<head>
		<style>
			body {
				background-image: url("images/background2.jpg")
				}
			h3 {
				margin: 65px;
				text-align:center;
				color:#6b6c6d;
				font-family: "Helvetica", "arial";
				}
			h2 {
				text-align: center;
				background: #6a6177;
				text-decoration: none;
				padding: 10px 0px;
				display: block;
				width:200px
				}
			img {
				margin: 0px 0px 0px 400px;
				}
		</style>
	</head>
	<body link="#e4e3e5">
		<p> <h3> Hello,<?php echo $_POST ['fname']?><?php echo $_POST ['lname']?>!
			<br> I'm Chesya Pricilla and you just visited my blog.
			<br>Your email is <?php echo $_POST ['Email']?>, correct?
			<br>Thank you for leaving some messages to me. 
			<br>And thank you for your precious time to visiting my blog. 
			<br>How kind of you, <?php echo $_POST ['fname']?>.	</h3>	</p>
			<h2> <a href="blog.html" style="text-decoration: none"> Back to My Blog </a> </h2> 
			<img src="images/okay.gif" title="Here is a company for you"/>
		
	</body>
</html>