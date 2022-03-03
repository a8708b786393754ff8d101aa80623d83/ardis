{extends file='base/layout.tpl'}
{block name=content}
{if isset($smarty.session.pseudo)}
    {if isset($msg_succes)}
        <div class="alert alert-success" role="alert">
        {$msg_succes}
        </div>
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