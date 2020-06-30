<!DOCTYPE html>
<html>
    <head>
        <title>Authentification</title>
       <meta charset="utf-8">
        <link rel="stylesheet" href="pageinitial.css" media="screen" type="text/css" />
    </head>
    <body>
        <h3><font size="150px"> JONOTOLA</font></h3>
        <div id="Global">
            <div id="gauche" id="container" >
                
                <form action="connexion.php" method="POST">
                    <h1><font type="Times New Roman">Connexion</font></h1>
                    
                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                                        
                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                    
                    <input type="submit" id='submit' value='LOGIN' >    

                    
                </form>
            </div>
            <div id="droite" id="container" >
                
                <form action="save_user.php" method="POST">
                    <h2><font type="Times New Roman">Register</font></h2>
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" id="email" required>

                                      
                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="pswrepeat" id="pswrepeat" required>

                    Sexe : <INPUT type="radio" name="sexe" value="H" checked> Homme <INPUT type="radio" name="sexe" value="F"> Femme

                    <input type="submit" value="enregistrer" name="register">
            
                </form>
            </div>
        </div>
        
    </body>
</html>