{extends file='base/layout.tpl'}
{block name='content'}
{if isset($result['avis'])}
      <hr>
      <h2 class="text-center">Activiter</h2>
       {foreach from=$result['avis'] item=item key=key}
            {* <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{base_url('assets/Images/activiter')|cat:'/'|cat:$item['image']}" alt="Card image cap">
                  <div class="card-body">
                        <h5 class="card-title">{$item['nom']}</h5>
                        <a href="{base_url('activiter')}" class="btn btn-primary">Go</a>
                  </div>
            </div> *}
      {/foreach}
{/if}
{if isset($result['hotel'])}
      <hr>
      <h2 class="text-center">Hotel</h2>
      <div class="container">
            {foreach from=$result['hotel'] item=item key=key}
                  <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{base_url('assets/Images/nos_hotels')|cat:'/'|cat:$item['image']}" alt="Card image cap">
                        <div class="card-body">
                              <h5 class="card-title">{$item['nom']}</h5>
                              <a href="{base_url('hotel')|cat:'/'|cat:$item['nom']|lower}" class="btn btn-primary">Go</a>
                        </div>
                  </div>
            {/foreach}
      </div>
{/if}
{if isset($result['activiter'])}
      <hr>
      <h2 class="text-center">Activiter</h2>
      <div class="container">
            {foreach from=$result['activiter'] item=item key=key}
                  <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{base_url('assets/Images/activiter')|cat:'/'|cat:$item['image']}" alt="Card image cap">
                        <div class="card-body">
                              <h5 class="card-title">{$item['nom']}</h5>
                              <a href="{base_url('activiter')}" class="btn btn-primary">Go</a>
                        </div>
                  </div>
            {/foreach}
      </div>
{/if}

{if empty($result)}
 <div class="container">
        <div class="well">
            <h1><div class="ion ion-alert-circled"></div> La recherche n'a rien donner !!</h1>
            <p>
                <a class="btn btn-dark" href="{base_url('pages/')}">Revenir a la page d'acceuile</a>
            </p>
        </div>
    </div>
<style>
body {
        background: #fbfbfb;
        font-family: 'Source Sans Pro', sans-serif;
    }
    .well {
        margin: 50px auto;
        text-align: center;
        padding: 25px;
        max-width: 600px;
    }
    h1, h2, h3, p {
        margin: 0;
    }
    p {
        font-size: 17px;
        margin-top: 25px;
    }
    p a.btn {
        margin: 0 5px;
    }
    h1 .ion {
        vertical-align: -5%;
        margin-right: 5px;
    }
</style>
{/if}

{/block}