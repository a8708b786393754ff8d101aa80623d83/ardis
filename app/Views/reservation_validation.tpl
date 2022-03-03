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
                                                <td>Kurt COBAIN
                                                <br>Compte client numéro : 2
                                                <br> Id réservation : 8
                                                <br> Hotel de séjours : Suisse
                                                <br> Date de séjour : 2021-05-12 / 2021-05-22 
                                                <br> Durée du séjour : 10 jours 
                                                <br> Nombr de chambre loué : 1
                                                <br> Id chambre : 8
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                            <tr>
                                                                <td>Prix séjours</td>
                                                                <td class="alignright">1000.00 € €</td>
                                                            </tr>
                                                            <tr>
                                                            <td>Prix AR </td>
                                                            <td class="alignright">30.00 €</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Activité</td>
                                                            <td class="alignright">150.00 €</td>
                                                        </tr>
                                                       
                                                        <tr class="total">
                                                            <td class="alignright" width="80%">Total avec AR </td>
                                                            <td class="alignright">1 180.00 €</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Prix AR </td>
                                                            <td class="alignright">30.00 €</td>
                                                        </tr>
                                                        <tr class="total">
                                                            <td class="alignright" width="80%">Total sans  AR </td>
                                                            <td class="alignright">Prix total - 30% du prix total </td>
                                                            
                                                        </tr>
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
        <div class="alert alert-danger" role="alert">
            {$msg_error}
        </div>
    {/if}
{else}
    <div class="alert alert-danger" role="alert">
        Vous devez vous connecter.
        Mettre un lien vers la page de login
    </div>
{/if}
{/block}