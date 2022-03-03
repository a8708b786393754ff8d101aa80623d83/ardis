{extends file='base/layout.tpl'}
{block name=content}
  {foreach from=$avis item=item key=key}
    <h2>Hotel {$key}</h2>
    {for $foo=0 to count($item)-1}
      <div class="card"  style="width: 25rem;">
        <img class="card-img-top" src="{base_url('assets/Images/avis')|cat:'/'|cat:$item[$foo]->avis_nomphoto}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{$item[$foo]->avis_titre}</h5>
          <p class="card-text">{$item[$foo]->avis_cont}</p>
        </div>
        <div class="card-body">
          <a href="{base_url('hotel')|cat:'/'|cat:$item[$foo]->hotel_nom}" class="card-link btn">Voir l'hotel</a>
          <a href="#" class="card-link">Repondre</a>
        </div>
      </div>
    {/for}
  {/foreach}
{/block}