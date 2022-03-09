{extends file='base/layout.tpl'}
{block name=content}
<div class="container">
    <div class="row">
        {foreach from=$all_user_creditials item=item}
            {for $i=0 to count($item)-1 }
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <form action='{base_url('admin/users/')}' method="post">
                        <div class="well well-sm">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <img src="{base_url('assets/Images/profile')|cat:'/'|cat:$item[$i]->img_profile}" alt="image_profile_{$item[$i]->prenom}" width='150' class="img-rounded img-responsive" />
                                </div>
                                <div class="col-sm-6 col-md-8">
                                    <h4>
                                        {$item[$i]->prenom} {$item[$i]->nom} 
                                    </h4>
                                    <label>Pseudo: <i class="glyphicon glyphicon-gift">{$item[$i]->pseudo} </i></label>
                                    <input type="hidden" value='{$item[$i]->pseudo}' name='pseudo'> <!-- pseudo -->
                                    <br />
                                    <label>Civiliter: <i class="glyphicon glyphicon-gift">{$item[$i]->civ}</i></label>
                                    <br />
                                    <label>Numéro de téléphone: <i class="glyphicon glyphicon-gift">{$item[$i]->num_tel}</i></label>
                                    <br />
                                    <label>Adresse: 
                                        <cite title="{$item[$i]->pays}">{$item[$i]->adresse} 
                                            <i class="glyphicon glyphicon-map-marker"></i>
                                        </cite>
                                    </label>
                                    <p>
                                    <label>Email: <i class="glyphicon glyphicon-envelope">{$item[$i]->email}</i></label>
                                    <br />
                                    <i class="glyphicon glyphicon-gift">{$item[$i]->pays}, {$item[$i]->ville}</i></p>
                                </div>
                            </div>
                        </div>
                        <input type='submit' value="Supprimer l'utilisateur" class='btn btn-danger'>
                    </form>
                </div>  
            {/for}
        {/foreach}
    </div>
</div>
{literal}
    <style>
    body{padding-top:30px;}
    .glyphicon {  margin-bottom: 10px;margin-right: 10px;}

    small {
    display: block;
    line-height: 1.428571429;
    color: #999;
    }
    </style>
{/literal}
{/block}
