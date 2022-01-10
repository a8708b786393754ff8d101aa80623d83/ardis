<?php 
    require 'headers.php'; 
    echo head('login');
?>
<div class="container">
    <div class= "row justify-content-center">
        <div class="col-12 col-lg-7">
            <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse email:</label>
                <input type="email" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group mt-4">
                <label for="exampleInputPassword1">Mot de passe:</label>
                <input type="password" class="form-control mt-2" id="exampleInputPassword1">
            </div>
            <div>
                <a href="mdp_oublie.php">Mot de passe oubliÃ©</a>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Connexion</button>
            </form>
        </div>
    </div>
</div>
<?php 
    require 'footers.php'; 
?>