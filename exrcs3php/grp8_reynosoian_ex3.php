<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
 *{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Playfair Display', serif;
	text-decoration: none;
 }
 .box {
    position: relative;
	width: 100%;
	height: 100vh;
	background: radial-gradient(#f2a68d, #f7dba7);
	display: center;
	align-items: center;
	justify-content: center;
	flex-direction: column;
    width: 100%;
	max-width: 1350px;
	margin: 0 auto;
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(150px, auto));
	align-items: center;
	gap: 5rem;
	text-align: center;
	margin-top: 4rem;

 }
    </style>
<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Gothic+A1:300,600|Playfair+Display" rel="stylesheet">
</head>
<body>
<div class="box">

    <?php
    echo file_exists("sample.txt");
    echo "</br>";
    echo file_put_contents("sample.txt", "Hey Buddy, How are you?");
    echo "</br>";
    echo file_get_contents("sample.txt");
    echo "</br>";
    print_r(file("sample.txt"));
    ?>
</div>

</body>
</html>