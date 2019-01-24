<?php
session_start();
session_destroy();

echo "<html>";
echo "<style>";
echo "form {";
echo     "border: 1px solid #ffffff;";
echo "}";

echo "input[type=text], input[type=password] {";
echo     "width: 100%;";
echo     "padding: 12px 20px;";
echo     "margin: 8px 0;";
echo     "display: inline-block;";
echo     "border: 1px solid #ccc;";
echo     "box-sizing: border-box;";
echo "}";

echo "button {";
echo     "background-color: #4CAF50;";
echo     "color: white;";
echo     "padding: 14px 20px;";
echo     "margin: 8px 0;";
echo     "border: none;";
echo     "cursor: pointer;";
echo     "width: 50%;";
echo "}";

echo "button:hover {";
echo     "opacity: 0.8;";
echo "}";

echo ".resetbtn {";
echo     "width: auto;";
echo    "padding: 10px 18px;";
echo     "background-color: #f44336;";
echo "}";

echo ".loginbtn {";
echo    "width: auto;";
echo    "padding: 10px 18px;";
echo     "background-color: #4caf50;";
echo "}";

echo ".cancelbtn {";
echo     "width: auto;";
echo     "padding: 10px 18px;";
echo     "background-color: #7c6f50;";
echo "}";

echo ".daftarbtn {";
echo     "width: auto;";
echo     "padding: 10px 18px;";
echo     "background-color: #ffaf44;";
echo "}";

echo ".imgcontainer {";
echo     "text-align: center;";
echo     "margin: 75px 0 0 0;";
echo "}";

echo "img.avatar {";
echo     "width: 10%;";
echo     "border-radius: 10%;";
echo "}";

echo ".container {";
echo     "padding: 8px 500px;";
echo "}";

echo "span.psw {";
echo     "float: right;";
echo     "padding-top: 7px;";
echo "}";

echo "/* Change styles for span and cancel button on extra small screens */";
echo "@media screen and (max-width: 300px) {";
echo     "span.psw {";
echo        "display: block;";
echo        "float: none;";
echo     "}";
echo     ".cancelbtn {";
echo        "width: 100%;";
echo     "}";
echo "}";
echo "</style>";
echo "<body>";
echo "<form action='proses_login.php' method='POST'>";	
echo 	"<div class='container'>";
echo		"<center><h3><font face='calibri'>Anda telah logout, silahkan login kembali</font></h3></center>";
echo 		"<!--<label><b>Username</b></label>-->";
echo 		"<input type='text' placeholder='Masukkan username' name='username' required>";
echo 		"<!--<label><b>Password</b></label>-->";
echo 		"<input type='password' placeholder='Masukkan password' name='password' required>";
echo "<table><tr>";
echo "<td><button type='submit' class='loginbtn'>Login</button></td>";
echo "<td><button type='reset' class='resetbtn'>Reset</button></td>";
echo	"</div>";
echo "</form>";
echo "<td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
echo "</form></td>";
echo "</tr></table>";
echo "</body>";
echo "</html>";

?>