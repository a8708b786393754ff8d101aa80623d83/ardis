{extends file='base/layout.tpl'}
{block name=content}   
   <section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 well well-sm sign_up">
                <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> S'inscrire !</legend>
                <form action="{base_url('/visitor/create_account')}" method="post" class="form" role="form">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <input class="form-control" name="firstname" placeholder="Prénom" type="text" required/>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <input class="form-control" name="lastname" placeholder="Nom" type="text" required />
                    </div>
                </div>
                <input class="form-control" name="email" placeholder="Email" type="email" required/>
                <input class="form-control" name="password" placeholder="Mot de passe" type="password" required/>
                <input class="form-control" name="Confirm_password" placeholder="Confirmation du mot de passe" type="password" required/>
                <br />
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Envoyer</button>
                </form>
            </div>
        </div>
    </div>
   </section>
{/block}