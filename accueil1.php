<?php session_start();


 ?>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" type="text/css" href="accueil1.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 
    </head>
    <body>
        <div style="text-align:center">
            <div class="col-md-4 spacer1" style="text-align:center"></div>
                <div class="col-md-4 spacer1" style="text-align:center"> 
                <table>
                	<form type="get" action="accueil2.php">
                            <tr>
                    		  <td><b>Nom d'utilisateur :</b> </td>
                                <td class="spacer2"><input type="text"  name="login" id="login"></td>
                            </tr>
                            <tr>
                                <td><b>Mot de passe :</b></td>
                                <td class="spacer2"><input type="password" name="password" id="password"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="spacer2"><input type="submit" value="Entrer"></td>

                            </tr>
                        </table>
                	</form>
                </table>
            </div>
            <div class="col-md-4 spacer1" style="text-align:center"> </div>
        </div>

        <div id="footer">
            Besoin d'aide ? Entrez votre demande :
            <form type="get" action="contact.php">
            <input type="text" name="contact" id="contact">
            <input type="submit" value="Entrer">
        </div>
    </body>
</html>
