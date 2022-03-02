{extends file='base/layout.tpl'}
{block name=content}
    <section>
        {for $foo=0 to count($nav_bar_hotel) -1 }
        <article>
            <h2 class="text-center">{$nav_bar_hotel[$foo]}</h2>
            {foreach from=$photo[$nav_bar_hotel[$foo]] item=item key=key name=name}
                <img class="dubai_photos" src="{base_url('assets/Images/galerie_photo')|cat:'/'|cat:$nav_bar_hotel[$foo]|cat:'/'|cat:$photo[$nav_bar_hotel[$foo]].$key}" alt="dubai_photo_terrase" width="100" height="50">
            {/foreach}
        </article>
        {/for}
    </section>
{/block}