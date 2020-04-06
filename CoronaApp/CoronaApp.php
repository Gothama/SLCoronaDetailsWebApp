<?php
	require "GetData.php";
	require "HospitalData.php";
?>

<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language">
<meta http-equiv="refresh" content="3600" >
<title>Hospital Details</title>
<style type="text/css">
.auto-style6 {
	font-size: large;
}
</style>
 
</head>

<body style="background-color:#003399">

<div id="layer1" style="position: absolute; width: 1095px; height: 6000px; z-index: 1; background-color:white;margin: auto; left: 109px; right: 114px; top: 15px;" >
	<div id="layer3" style="position: absolute; width: 594px; height: 117px; z-index: 2; left: 461px; top: 13px">
		<img alt="" height="111" src="logo.png" width="589"></div>
	<div id="layer17" style="position: absolute; width: 280px; height: 11px; z-index: 5; left: 18px; top: 18px" class="auto-style6">
		Last 
		updated at <?php echo $update_date_time; ?></div>
	<div id="layer18" style="position: absolute; width: 1048px; height: 1010px; z-index: 6; left: 21px; top: 169px">
	<?php getHospitalData(); ?>
	</div>
	<div id="layer19" style="position: absolute; width: 408px; height: 375px; z-index: 7; left: 4px; top: 5620px">
		<img alt="" height="367" src="2.png" width="463"></div>
	<div id="layer20" style="position: absolute; width: 621px; height: 377px; z-index: 8; left: 474px; top: 5614px">
		<img alt="" height="378" src="hospital-isometric-illustration_1284-22186.jpg" width="616"></div>
	<div id="layer21" style="position: absolute; width: 100px; height: 100px; z-index: 9; left: 24px; top: 60px">
		<img src="https://media.giphy.com/media/dVuyBgq2z5gVBkFtDc/giphy.gif" height="109" width="151" />
	</div>
</div>

</body>

</html>
