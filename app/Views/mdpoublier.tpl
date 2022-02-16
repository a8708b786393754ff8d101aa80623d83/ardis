{extends file='base/layout.tpl'}
{block name=content}
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-center">
                              <h3><i class="fa fa-lock fa-4x"></i></h3>
                              {if isset($message)}
                                {if $message}
                                <div class="p-3 mb-2 bg-success text-white">Un email vous a été envoyer</div>
                                {else}
                                <div class="p-3 mb-2 bg-danger text-white">Email invalide!</div>                                  
                                {/if}
                              {/if}
                              <h2 class="text-center">Mot de passe oublié  ?</h2>
                              <p>Demandez votre de mot de passe .</p>
                                <div class="panel-body">
                                  
                                  <form class="{base_url('/visitor/mdpoublier')}" method='POST'>
                                    <fieldset>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                        {literal}
                                          <input id="emailInput" placeholder="e-mail" class="form-control" type="email"  required name='email'>
                                        {/literal}
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <input class="btn btn-lg btn-primary btn-block" value="Demander mon mot de passe " type="submit">
                                      </div>
                                    </fieldset>
                                  </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}