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
                              <h2 class="text-center">Mot de passe oublié  ?</h2>
                              <p>Demandez votre de mot de passe .</p>
                                <div class="panel-body">
                                  
                                  <form class="form">
                                    <fieldset>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                        {literal}
                                          <input id="emailInput" placeholder="e-mail" class="form-control" type="email" oninvalid="setCustomValidity('Merci de mettre un e-mail valide.')" onchange="try{setCustomValidity('')}catch(e){}" required="">
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