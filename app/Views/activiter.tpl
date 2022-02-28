{extends file='base/layout.tpl'}
{block name=content}
<<<<<<< HEAD
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  src="{base_url('assets/Images/activiter/plages-surf.webp')}" class="d-block img " alt="..." width='800' height='500'>
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{base_url('assets/Images/activiter/plages-surf.jpg')}" class="d-block img " alt="..." width='800' height='500'>
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{base_url('assets/Images/activiter/phare.webp')}" class="d-block img " alt="..." width='800' height='500'>
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
=======
<section>
  {foreach from=$activiter item=item key=key}
    {for $foo=0 to count($item) -1}
        <div class="contanier">
          <div class="row">
              <h2 class="text-center">{$item[$foo]->nom_hotel}</h2>
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
<a href="{base_url('activiter/archive')}">Les activiter archiver</a>
>>>>>>> main
{/block}