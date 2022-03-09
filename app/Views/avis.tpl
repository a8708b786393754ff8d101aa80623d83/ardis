{extends file='base/layout.tpl'}
{block name=content}
  {foreach from=$avis item=item key=key}
    <h2>Hotel {$key}</h2>
    {for $foo=0 to count($item)-1}
      <div class="card"  style="width: 25rem;">
      {if  ! empty($item[$foo]->avis_nomphoto)}
        <img class="card-img-top" src="{base_url('assets/Images/avis')|cat:'/'|cat:$item[$foo]->avis_nomphoto}" alt="Card image cap">
      {/if}
        <div class="card-body">
          <h5 class="card-title">Titre: {$item[$foo]->avis_titre}</h5>
          <p class="card-text">Description: {$item[$foo]->avis_cont}</p>
          <p class="card-text">Note: 
              {for $i=1 to $item[$foo]->avis_note}
                <i class="fas fa-star star"></i>
              {/for}
          </p>
        </div>
        <div class="card-body">
          <a href="{base_url('hotel')|cat:'/'|cat:$item[$foo]->hotel_nom}" class="card-link btn btn-primary">Voir l'hotel</a>
        </div>
      </div>
    {/for}
  {/foreach}
{/block}