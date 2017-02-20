<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">

	<title>Currency Converter</title>

</head>
<body>
	<h2>CURRENCY CONVERTER</h2>
	<div class="content">
		<?php 
	function exchange_rate_convert($amount, $from, $to){
		
		$url  = "https://www.google.com/finance/converter?a=$amount&from=$from&to=$to";

		$data = file_get_contents($url);
		preg_match("/<span class=bld>(.*)<\/span>/",$data, $converted);
		$converted = preg_replace("/[^0-9.]/", "", $converted[1]);
		return round($converted, 3);
	}
		$amount = ($_POST["amount"]);
		$form = ($_POST["form"]);
		$to  = ($_POST["to"]);
		$result = exchange_rate_convert($amount,$form,$to);
	
	?>
		<div class="txt-result">
		<?php echo "$amount"." "."$form"." =";?>
		<?php echo "$result"." "."$to"; ?>
		</div>
		<a href="currencyConvert.php"><button class="b-btn">BACK TO EXCHANG</button></a>
</div>
	
</body>
</html>