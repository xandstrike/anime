<!DOCTYPE html>
<html>
<head>
<style>
body  {
  background-image: url("paper.gif");
  background-color: #cccccc;
}
</style>
</head>
<body>

<h1>The background-image Property</h1>

<p>Hello World!</p>

</body>
</html>

<?PHP
include('dbcon.php');
function getRealIpAddr(){
 if ( !empty($_SERVER['HTTP_CLIENT_IP']) ) {
  // Check IP from internet.
  $ip = $_SERVER['HTTP_CLIENT_IP'];
 } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
  // Check IP is passed from proxy.
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
 } else {
  // Get IP address from remote address.
  $ip = $_SERVER['REMOTE_ADDR'];
 }
 return $ip;
}

$ipadd = getRealIpAddr();

	
		$query2=mysqli_query($con,"select * from ipadd where ip='$ipadd'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "Record of Ragnarok";
		}
		else
		{			
			mysqli_query($con,"INSERT INTO ipadd(ip) VALUES('$ipadd')")or die(mysqli_error($con));

			echo "Record of Ragnarok";
		}
?>
