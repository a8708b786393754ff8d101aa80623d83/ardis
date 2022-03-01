{extends file='base/layout.tpl'}
{block name=content}
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{base_url('assets/')}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Partager</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Repondre</a>
  </div>
</div>
{/block}