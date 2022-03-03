{extends file='base/layout.tpl'}
{block name=content}
<div class="container mt-5">
{if isset($msg_succes)}
    <div class="alert alert-success" role="alert">
      {$msg_succes}
    </div>
    {if isset($msg_error)}
      <div class="alert alert-danger" role="alert">
        {$msg_error}
      </div>
    {/if}
  {/if}
{/block}
