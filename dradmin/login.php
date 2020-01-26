<?php include('./partial/header.php');? >
<div  class="form-container">
    <h1> Login to your  space<h1>
        <from action="./database/auth.php" method="post">
        <div class="from-group">
            <input name ="username" type="text" class="from-control" placeholder="Entrer votre username">
        </div>
          <div class="from-group">
            <input name ="password" type="password" class="from-control" placeholder="Entrer votre password">
          </div>
          <button type="submit" class="btn btn-primary">submit</button>
        </form>
 </div>
 <?php include('/partial/footer.php')?;>
