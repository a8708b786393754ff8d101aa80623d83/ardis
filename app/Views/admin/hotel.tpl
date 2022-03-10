{extends file='base/layout.tpl'}
{block name=content}
<div class="container">
    <div class="row">
    {if isset($msg_error)}
        {if empty($msg_error)}
            {foreach from=$msg_error item=item }
                <div class="alert alert-danger" role="alert">
                    {for $i=1 to count($item)-1 }
                        {$item[$i]}
                    {/for}
                </div>
            {/foreach}
        {/if}
    {elseif isset($msg_success)}
        {foreach from=$msg_success item=item }
            <div class="alert alert-success" role="alert">
                {$item}
            </div>
        {/foreach}
    {/if}
        <form action="{base_url('moderateur/hotel')|cat:'/'}{$name|lower}" enctype="multipart/form-data" method="post">
            <label for="nom_hotel">Nom de l'hotel: <input type="text" name='nom' value="{$name}"></label>
            <label for="nom_hotel">Pays de l'hotel: <input type="text" name='pays' value="{$pays}"></label>
            <label for="nom_hotel">Ville de l'hotel: <input type="text" name='ville' value="{$ville}"></label>
            <label for="note">Note: <input type="number" min=0 max=5 name='note' value="{$note}"></label>
            <label for="price">Prix : <input type="text"  value="{$price}" name="price"></label>
            <label for="contenue">contenue: </label>
            <textarea name="contenue" cols="30" rows="10">
                {$contenue}
            </textarea>
            <label for="email">Email: <input type="email" value="{$email}" name="mail"></label>
            <label for="image">Nouvelle image: <input type="file" name="image"></label>
            <label for="">NUmero de téléphone: <input type="tel" value="{$tel}" name='tel'></label>
            <img src="{base_url('assets/Images/nos_hotels/')|cat:'/'}{$image|lower}"  alt="image_{$name}">
            <input type="submit" value="Modifier">
            <input type="submit" value="Supprimer" name='delete'>
    </div>
</div>
{literal}
<style>
.trash { color:rgb(209, 91, 71); }
.flag { color:rgb(248, 148, 6); }
.panel-body { padding:0px; }
.panel-footer .pagination { margin: 0; }
.panel .glyphicon,.list-group-item .glyphicon { margin-right:5px; }
.panel-body .radio, .checkbox { display:inline-block;margin:0px; }
.panel-body input[type=checkbox]:checked + label { text-decoration: line-through;color: rgb(128, 144, 160); }
.list-group-item:hover, a.list-group-item:focus {text-decoration: none;background-color: rgb(245, 245, 245);}
.list-group { margin-bottom:0px; }
</style>
{/literal}
{/block}
