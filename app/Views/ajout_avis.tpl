{extends file='base/layout.tpl'}
{block name=content}
{if isset($smarty.session.pseudo)}
    {if isset($msg_succes)}
        <div class="alert alert-success" role="alert">
            Votre avis a bein ete ajouter
        </div>
    {elseif isset($msg_error)}
        <div class="alert alert-danger" role="alert">
            {foreach from=$msg_error item=item}
                {$item}
            {/foreach}
        </div>
    {/if}
{elseif (isset($error_conn))}
    <div class='container'>
        <div class='row'>
            <div class="alert alert-danger" role="alert">
                Vous devez vous connecter pour effectuer ajouter un avis
            </div>
            <a href="{base_url('visitor/login')}" class="btn btn-primary">login</a>
        </div>
    </div>
{/if}
{/block}