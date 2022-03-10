{extends file='base/layout.tpl'}
{block name=content}
    <h1>Nos menus</h1>
    <section>
        {for $foo=0 to count($content_menu.nom)-1}
        <img src="{base_url('assets/Images/restaurant')|cat:'/'|cat:$content_menu.image[$foo]}" alt="{$content_menu.nom[$foo]}" class="{$content_menu.nom[$foo]|cat:'_image'}">
            <article class="{$content_menu.nom[$foo]}">
                <div class="container">
                    <div class="row">
                        <h4 class="menu_enfant_titre">{$content_menu.nom[$foo]}</h4>
                        <p class="menu_enfant_prix " style='color:purple; '>Prix: {$content_menu.price[$foo]} €</p>
                        <p class="menu_enfant-paragraphe">
                            {$content_menu.descri[$foo]}
                        </p>
                    </div>
                </div>
            </article>
        {/for}
    </section>
{/block}