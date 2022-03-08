{extends file='base/layout.tpl'}
{block name=content}
{if isset($smarty.session.pseudo)}
    {if isset($msg_succes)}
        <table class="body-wrap">
    <tbody><tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td class="content-wrap aligncenter">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <td class="content-block">
                                    <div class="alert alert-success" role="alert">
                                        <h2>Merci d'avoir choisi Ardis</h2>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <table class="invoice">
                                            <tbody><tr>
                                                <td>{$nom}   {$prenom}
                                                <br> Hotel de séjours : {$hotel_sejour}
                                                <br> Date de séjour : {$startdate} / {$enddate}
                                                <br> Durée du séjour : {$durer} jours
                                                <br> Nombr de lits loué : {$nb_lit}
                                                <br> Numero chambre : {$nb_chambre}
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                            <tr>
                                                                <td>Prix séjours</td>
                                                                <td class="alignright"> 1000.00 €</td>
                                                            </tr>
                                                            <tr>
                                                        </tr>
                                                        {if $activiter neq "non"}
                                                        <tr>
                                                            <td>Activité</td>
                                                            <td class="alignright">{$activiter_price} €</td>
                                                        </tr>
                                                        {/if}
                                                       
                                                       
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                </tbody></table>
               
        </td>
        <td></td>
    </tr>
</tbody></table>
{elseif isset($msg_error)}
<div class='container'>
    <div class='row'>
        <div class="alert alert-danger" role="alert">
            {foreach from=$msg_error item=item}
                {$item}
            {/foreach}
        </div>
    </div>
</div>
{/if}
{elseif (isset($error_conn))}
    <div class='container'>
        <div class='row'>
            <div class="alert alert-danger" role="alert">
                Vous devez vous connecter pour effectuer une reservation.
            </div>
            <a href="{base_url('visitor/login')}" class="btn btn-primary">login</a>
        </div>
    </div>
{/if}
{/block}