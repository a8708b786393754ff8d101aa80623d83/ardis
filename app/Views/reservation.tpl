{extends file='base/layout.tpl'}
{block name=content}
    <div class="container">
        <div class="row">
            <div class="reservation">
                <h2>Reserver dés maintenant !! </h2>
                <form action='{base_url('Reservation/validation/')}' method='post'>
                    <div class="destination">
                        <label for="reservation">Hotel de destinations: </label>
                        <select name="hotel_destination" id ="hotel" required>
                        {foreach from=$nav_bar_hotel item=item}
                            <option value="{$item}">Hotel {$item}</option>
                        {/foreach}
                        </select>
                    </div>
                    <div class="date">
                        Du: <input type="date" name="startdate" required>
                        Au: <input type="date" name="enddate" required>
                    </div>
                    <div class="date">
                        <label>Voulez vous choisir une activiter</label><br>
                        Oui:<input type="radio" name='activiter' value='yes' required>
                        Non:<input type="radio" name='activiter' value='non'required>
                    </div>
                    <div class="nombre_voyager">
                    <label>Nombre de lit dans la chambre</label>
                       <select name="hotel_destination" required>
                            <option value="2" >2 lits</option>
                             <option value="4">4 lits</option>

                        </select>
                    </div>

                    </div>
                </form>
        </div>
    </div>
    {literal}
         <script>
    $('#hotel ').change(function(){
        $.ajax({
        url: `http://localhost/ardis/public/MiniApiArdis/getActivByName?hotel_name=${$(this).val()}`,
        method : 'get',
        data: {hotel_name:$(this).val()}
      }).done(function(resp){
          console.log(resp)
      })
    })
    </script>
    {/literal}
{/block}
