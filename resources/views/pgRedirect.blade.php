<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("lib/config_paytm.php");
require_once("lib/encdec_paytm.php");
// require_once 'init.php';
$checkSum = "";
$paramList = array();

$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["cust_id"];
$PACK_NAME=$_POST["pack_name"];
$TXN_AMOUNT = $_POST["pack_amount"];

// Create an array having all required parameters for creating checksum.
$paramList["MID"] = 'rxazcv89315285244163';
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = 'WEBSTAGING';

DB::table('vendor_subscription')->insert(
     array(
            'order_id'     =>   $ORDER_ID, 
            'vendor_id'   =>   $CUST_ID,
            'pack_name' => $PACK_NAME,
            'pack_amount' =>$TXN_AMOUNT


     )
);

$paramList["CALLBACK_URL"] = "http://localhost/E-commerce/resources/views/alert.blade.php";
$paramList["MSISDN"] = 77777777; //Mobile number of customer
// $paramList["EMAIL"] = $EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //



//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>