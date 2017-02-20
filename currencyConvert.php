<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

	<title>Currency Converter</title>
</head>
<body>
<div class="container">

	<h2>CURRENCY CONVERTER</h2>
	<div class="exch-content">
		<form class="content-form" action="currency_cals.php" method="post">
 			<label >Amount</label>
 		<input type="text" name="amount" class="amount" placeholder="Amount">
 			<label >Bath</label>
	 	<select class="form" name="form">		
	 		<option value="THB">Thai Baht(THB)</option> 
	 		<option value="USD">US Dollar(USD)</option>
	 		<option value="JPY">Japanese Yen(JPY)</option>
	 		<option value="KRW">Korean Won (KRW)</option>
	 	</select>
	 		<label>To</label>
 		<select class="to" name="to">
 			<option value="THB">Thai Baht (THB)</option> 
 			<option value="USD">US Dollar (USD)</option>
 			<option value="KRW">Korean Won(KRW)</option>
 			<option value="KRW">Korean Won (KRW)</option>
 		</select>
 		<br>
 		<button type="submit" name="convert" class="button"onclick="return check();">CONVERT</button>
 		<input type="reset" name="RESET" class="button-reset" value="RESET" />  
	
 	 </form>
	</div>
 	
</div>
</body>
</html>