<?php
session_start();
error_reporting(0);
/* write to file */

$file="C:\\xampp\\htdocs\\CLEDESP8266\\light.json";
$content="";
   writeFileContent($file, $content);

/* Write content to file
* @param string $file   Save content to wich file
* @param string $content    String that needs to be written to the file
* @return bool
*/

function writeFileContent($file, $content){
    $fp = fopen($file, 'w');
    fwrite($fp, $content);
    fclose($fp);
    chmod($file, 0777);  //changed to add the zero
    return true;
}
  
$light = $_GET['light'];
if($light == "on") {  
  $file = fopen("light.json", "w") or die("can't open file");
  
  fwrite($file, '{"light": "on"}');
  fclose($file);
} 
else if ($light == "off") {  
  $file = fopen("light.json", "w") or die("can't open file");
  fwrite($file, '{"light": "off"}');
  fclose($file);
}
?>

<html>  
  <head>      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LED for ESP8266</title>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="light.js" type="text/javascript"></script>
  </head>
  <body>
	<?php if (isset($_SESSION['username'])) { ?>
    <div class="row" style="margin-top: 20px;">
      <div class="col-md-4 col-md-offset-4">
        <a id="light_on" href="?light=on" class="btn btn-success btn-block btn-lg">Turn On</a>
        <br />
        <a id="light_off" href="?light=off" class="led btn btn-danger btn-block btn-lg">Turn Off</a>
        <br />
        <div class="light-status well" style="margin-top: 5px; text-align:center">
          <?php
            if($light=="on") {
              echo("Turn light on.");
            }
            else if ($light=="off") {
              echo("Turn light off.");
            }
            else {
              echo ("Do something.");
            }
          ?>
        </div>
        <div class="light-status well" style="margin-top: 5px; text-align:center;">
           <img id="light_img_on" src="images/on.png" style="height:200px;">
           <img id="light_img_off" src="images/off.png" style="height:200px;">
        </div>
      </div>
    </div>
	<form action="logoutform.php" method="POST">
		<div class="col-md-2 col-md-offset-4">
			<button type="submit" class="led btn btn-danger btn-block btn-lg">Log Out</button>
		</div>
	</form>
	<?php }else{ ?>
<h3>Anda Belum Login, </h3>
<?php } ?>
  </body>
</html>  