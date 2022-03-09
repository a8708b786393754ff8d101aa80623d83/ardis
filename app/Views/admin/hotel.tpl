{extends file='base/layout.tpl'}
{block name=content}
<div class="container">
    <div class="row">
        <form action="" method="post">
            <label for="nom_hotel">Nom de l'hotel: <input type="text" value="{$name}"></label>
            <label for="nom_hotel">Pays de l'hotel: <input type="text" value="{$pays}"></label>
            <label for="nom_hotel">Ville de l'hotel: <input type="text" value="{$ville}"></label>
            <label for="note">Note: <input type="text" value="{$note}"></label>
            <label for="price">Prix : <input type="text" value="{$note}"></label>
            <label for="contenue">contenue: </label>
            <textarea name="contenue" cols="30" rows="10">
                {$contenue}
            </textarea>
            <label for="email">Email: <input type="email" value="{$email}"></label>
            <label for="image">Nouvelle image: <input type="file" name="image"></label>
            <label for="">NUmero de téléphone: <input type="tel" value="{$tel}"></label>
            <img src="{base_url('assets/Images/nos_hotels/')|cat:'/'}{$image|lower}" alt="image_{$name}">
            <input type="submit" value="Modifier">
        </form>
        <form action="" method="post">
            <input type="submit" value="Supprimer">
        </form>
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
