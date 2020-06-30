<!DOCTYPE html>
<html>
<head>
	<title>Page de création de ticket client</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="projectwebClient.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<nav>
    	<ul id="menu">
    		<h1>JONOTOLA</h1>
    		<li><a href="#">Assitance</a></li>
    		<li><a href="#">Suivi de ticket</a></li>
    		<li><a href="#">Stastistiques</a></li>    		
    	</ul>
    </nav>

    <div id="tableau">
    <script type="text/javascript">
	 
	            var i = 0;
	 
	            function addKid()
	            {
	                if (i < 100)
	                {
	                    var newRow = document.createElement('tr');
	 
	                    newRow.innerHTML = '<td> <input type="text" name="Ticket_'+i+'" ><td> <input type="text" name="Date création_'+i+'" ></td><td><input type="text" name="Statut_'+i+'" ></td><td><input type="button" id="add_kid()" onClick="addKid()" value="+" /><input type="button" value="-" onclick="removeKid(this.parentNode)"></td>';
	 
	                    document.getElementById('kids').appendChild(newRow);
	                    i++;
	                }
	            }
	 
	            function removeKid(element)
	            {
	                document.getElementById('kids').removeChild(element.parentNode);
	                i--;
	            }
	 
	</script>
	    	    
    <table border="1" id="kids">
        <tr>
            <th>Ticket</th>
            <th>Date création</th>
            <th>Statut</th>
        </tr>
        <tbody>
            <tr >
                <td  >
                    <input type="text" name="ticket">
                </td>
                <td>
                    <input type="text" name="Date création">
                </td>
                <td>
                    <input type="text" name="Statut">
                </td>
                <td>
                    <input type="button" id="add_kid()" onClick="addKid()" value="+" />
                </td>
            </tr>
        </tbody>
	</table>
	</div>


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
      	 	
  	

</body>
</html>
