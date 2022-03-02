{extends file='base/layout.tpl'}
{block name=content}
<a href="{base_url('activiter/archive')}" class='btn btn-primary'>Allez voir les activiter archiver</a>
<section>
  {foreach from=$activiter item=item key=key}
    {for $foo=0 to count($item) -1}
        <div class="contanier">
          <div class="row">
            <div class="card" style="width: 18rem;">
              <img src="{base_url('assets/Images/activiter')|cat:'/'|cat:$item[$foo]->image}" alt="img" class='card-img-top'>
                <div class="card-body">
                <h5 class="text-center card-title">Hotel {$item[$foo]->nom_hotel|lower}</h5>
                <h6 class='text-center'>{$item[$foo]->nom}</h6>
                <ul>
                  <li>Pays: {$item[$foo]->loca}</li>
                  <li>Date: {$item[$foo]->date}</li>
                  <li>Tarif par personne: <strong>{$item[$foo]->tarif}€</strong></li>
                </ul>
                <p class="card-text">{$item[$foo]->descri}</p>
                <a href="{base_url('hotel')|cat:'/'|cat:{$item[$foo]->nom_hotel}}" class="btn btn-primary">Voir l'hotel</a>
              </div>
            </div>
          </div>
        </div>
      {/for}
  {/foreach}
</section>
{/block}