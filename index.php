<!DOCTYPE html>
<html>
<head>
	<title>johvits</title>
</head>
<body>

<! -- action="" atribuudi väärtuseks on dokument, kuhu pärast vormi postitamise nupule vajutamist suunatakse (kuhu vormis paiknev info postitatakse).

method="", mille vääruseks on post.
Määrab ära, mis tüüpi päring teostatakse vormi postitamise nupule vajutamisel.-->

<form action="form_processing.php" method="post">
	Kasutaja nimi: <input type="text" name="username"></input>
	Password: <input type="password" name="password"></input>
	<input type="submit" value="Saada"></input>
</form>


</body>
</html>