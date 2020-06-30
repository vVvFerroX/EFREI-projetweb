<!DOCTYPE html>
<html>
<head>
	<title>Page Administration</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="projetweb.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<nav>
    	<ul id="menu">
    		<h1>JONOTOLA</h1>
    		<li><a href="Assitance">Assitance</a></li>
    		<li><a href="#">Suivi de ticket</a></li>
    		<li><a href="#">Stastistiques</a></li>    		
    	</ul>
    </nav>
    <h2>Assitance</h2>
    <form class="assitance" method="post" action="traitement.php">
    	<div id="gauche">
    		
			<p>Cochez les problèmes:<br />
       		<input type="checkbox" name="frites" id="frites" /> <label for="frites">Frites</label><br />
       		<input type="checkbox" name="steak" id="steak" /> <label for="steak">Steak haché</label><br />
     		<input type="checkbox" name="epinards" id="epinards" /> <label for="epinards">Epinards</label><br />
    		<input type="checkbox" name="huitres" id="huitres" /> <label for="huitres">Huitres</label>
    	</div>
    	<div id="droite">
    		<textarea id="msg" name="user_message" placeholder="Laisser un message..."></textarea>
  		</div>
  		<div><button id="bouton" type="submit" href="#">Créer un ticket</button></div>
  		</p>
  	</form>
    <form class="sql">
      <div>
    <h3>Liste des utilisateurs</h3>
    <?php
    $db = new PDO ('mysql:host=localhost;dbname=projetwebdb','root','');
    
    
    
    $sql_cmd = "Select * from users ORDER BY id ";
    $res = $db->query($sql_cmd);
    $data =$res->fetchAll();
    echo "<table class=\"table table-hover\">";
    foreach ($data as $row){
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "<td>" . $row["sexe"] . "</td>"; 
        echo "<td> <a href=\"delete_user.php?id=". $row["id"]."\">SUPPRIMER</a></td>";
        echo "</tr>";   
    }
    echo "</table>"
    ?>
  	</div>
  </form>

</body>
</html>
