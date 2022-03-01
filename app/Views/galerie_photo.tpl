{extends file='base/layout.tpl'}
{block name=content}
    <section>
        {for $foo=0 to count($nav_bar_hotel) -1 }
        <article>
<<<<<<< HEAD
            <h2 class="text-center">Dubai</h2>
            <img class="dubai_photos" src="{base_url('assets/Images/hotel-desert-dubai.webp')}" alt="dubai_photo_terrase">
            <img class="dubai_photos" src="{base_url('assets/Images/istockphoto-182404406-170667a.webp')}" alt="dubia_photo">
            <img class="dubai_photos" src="{base_url('assets/Images/istockphoto-512882668-170667a.webp')}" alt="dubai_room">
            <img class="dubai_photos" src="{base_url('assets/Images/bar.webp')}" alt="bar_dubai">
        </article>

        <article>
            <h2 class="text-center">Punta cana</h2>
            <img class="punta_cana" src="{base_url('assets/Images/photo-1563911302283-d2bc129e7570.webp')}" alt="punta_cana">
            <img class="punta_cana" src="{base_url('assets/Images/photo-1571003123894-1f0594d2b5d9.webp')}" alt="punta_cana">
            <img class="punta_cana" src="{base_url('assets/Images/photo-1618773928121-c32242e63f39.webp')}" alt="punta_cana">
            <img class="punta_cana" src="{base_url('assets/Images/resto.webp')}" alt="resto_punta_cana">
        </article>

        <article>
            <h2 class="text-center">Suisse/ Tubehral</h2>
            <img class="suisse_photos" src="{base_url('assets/Images/images2.webp')}" alt="hotel apladris">
            <img class="suisse_photos" src="{base_url('assets/Images/montagne_room.webp')}" alt="suisse_room">
            <img class="suisse_photos" src="{base_url('assets/Images/luge.webp')}" alt="luge_suisse">
=======
            <h2 class="text-center">{$nav_bar_hotel[$foo]}</h2>
            {foreach from=$photo[$nav_bar_hotel[$foo]] item=item key=key name=name}
                <img class="dubai_photos" src="{base_url('assets/Images/galerie_photo')|cat:'/'|cat:$nav_bar_hotel[$foo]|cat:'/'|cat:$photo[$nav_bar_hotel[$foo]].$key}" alt="dubai_photo_terrase" width="100" height="50">
            {/foreach}
>>>>>>> main
        </article>
        {/for}
    </section>
{/block}