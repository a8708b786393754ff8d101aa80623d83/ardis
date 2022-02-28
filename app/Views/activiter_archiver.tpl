{extends file='base/layout.tpl'}
{block name=content}
<section>
  {foreach from=$activiter_archiver item=item key=key}
    {for $foo=0 to count($item) -1}
        <div class="contanier">
          <div class="row">
              <h2 class="text-center">{$item[$foo]->nom_hotel} | {$item[$foo]->date}</h2>
              <h4 class='text-center'>{$item[$foo]->nom}</h4>
              <img src="{base_url('assets/Images/activiter')|cat:'/'|cat:$item[$foo]->image}" alt="">
              <p>Pays: {$item[$foo]->loca}</p>
              <p>Date: {$item[$foo]->date}</p>
              <p>Description: {$item[$foo]->descri}</p>
              <p>Tarif par personne: <strong>{$item[$foo]->tarif}€</strong></p>
            </div>
        </div>
      {/for}
  {/foreach}
</section>
{/block}