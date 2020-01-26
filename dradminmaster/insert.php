<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    

<div class="container form-container">

<center><h1 class="login-title">Les information de patient</h1></center>
<div class="row">
    
    <!-- LOGIN FORM -->
</form>
    <div class="col-6 col-login">
        <form action="auth.php" method="POST">
            <div class="form-group">
                <label>Id :</label>
                <input type="text" name="name" class="form-control" placeholder="Entrer votre id ...">
            </div>

            <div class="form-group">
                <label>Nom :</label>
                <input type="text" name="name" class="form-control" placeholder="Entrer votre Nom ...">
            </div>

            <div class="form-group">
                <label>Prenom :</label> 
                <input type="text" name="name" class="form-control" placeholder="Entrer votre Prenom ...">
            </div>

            <div class="form-group">
                <label>Cin :</label> 
                <input type="text" name="name" class="form-control" placeholder="Entrer votre cin ...">
            </div>

            <div class="form-group">
                <label>Scolarite :</label> 
                <input type="text" name="name" class="form-control" placeholder="Entrer votre scolarite ...">
            </div>
            <div class="form-group">
                <label>Date :</label> :</label>
                <input type="Date" name="name" class="form-control" placeholder="Entrer votre dateN ...">
            </div>

            <div class="form-group">
                <label>Lieu de naissance :</label> 
                <input type="datetime" name="name" class="form-control" placeholder="Entrer votre LieuN ...">
            </div>
    </div>
    
         <div class="col-6">
            <div class="form-group">
                <label>Addresse :</label> 
                <textarea  name="adre"  id="add"  rows="5" cols="70"></textarea>
            </div>

            <div class="form-group">
                <label>Telephone  :</label> 
                <input type="text" name="telephone" class="form-control" placeholder="Entrer votre telephone ...">
                
       
            <div class="form-group">
                <label>select profession  :</label> 
                <select class="from-control">
                    <option>prof</option>
                    <option>pl</option>
                </select>    
            </div>
            <div class="form-group">
                <label>Sitaution familiale :</label> 
                <textarea  name="adre" class="form-control" rows="5" cols="70"></textarea>
            </div>
            <div class="form-group">
                <label>select Nbrenfants  :</label> 
                <select class="from-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>    
            </div>
            <div class="form-group">
                <label>select Mutuelle  :</label> 
                <select class="from-control text ">
                    <option>oui</option>
                    <option>non</option>
                </select>    
            </div>
            <div class="form-group">
                <label>Autres informations :</label> 
                <textarea  name="adre" id="sits" rows="5" cols="70"></textarea>
            </div>
    </div>
    
    <button type="submit" class="btn btn-primary">AJOUTER</button>
</form>
           
</div>

</div>



















</body>