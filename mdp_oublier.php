<?php 
    require 'headers.php'; 
    echo head('mdp oublie');
?>
<div class="container"> 
    <div class= "row justify-content-center">
        <div class="col-12 col-lg-7">
            <form>
            <div class="form-group">
                <label for="exampleInputEmail1">InsÃ©rez votre adresse mail, nous vous enverrons un nouveau mot de passe:</label>
                <input type="email" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@exemple.com">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
            </form>
        </div>
    </div>
</div>
<?php 
    require 'footers.php'; 
?>