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
                        Oui:<input type="radio" name='activiter' id ="oui" value='yes' required>
                        Non:<input type="radio" name='activiter' id ="non" value='non'required>
                    </div>
                    <div id="activHide"></div>
                    <div class="nombre_voyager">
                    <label>Nombre de lit dans la chambre</label>
                       <select name="hotel_destination" required>
                            <option value="2" >2 lits</option>
                             <option value="4">4 lits</option>

                        </select>
                </form>
        </div>
    </div>
    {literal}
         <script>
           $("#activHide").hide()
    $('#hotel ').change(function(){ console.log($(this).val());
        $.ajax({
        url: `http://localhost/ardis/public/MiniApiArdis/getActivByName?hotel_name=${$(this).val()}`,
        method : 'get',
      }).done(function(resp){
         $("#activHide").html(' ')
          resp = JSON.parse(resp);
          console.log(resp)
          for (let i=0;i<resp.length;i++){
            console.log(resp[i])
            $("#activHide").append(`<div class="card" style="width: 18rem;">
                <img src="http://localhost/ardis/public/assets/Images/activiter/${resp[i].image}" alt="img" class='card-img-top'>
                  <div class="card-body">
                  <h5 class="text-center card-title">Hotel ${resp[i].nom_hotel}</h5>
                  <h6 class='text-center'>${resp[i].nom}</h6>
                  <ul>
                    <li>Pays: ${resp[i].loca}</li>
                    <li>Date: ${resp[i].date}</li>
                    <li>Tarif par personne: <strong> ${resp[i].tarif}€</strong></li>
                  </ul>
                  <p class="card-text">${resp[i].descri}</p>
                  <a href="http://localhost/ardis/public/hotel/${resp[i].nom_hotel}" class="btn btn-primary">Voir l'hotel</a>
                  <input type='checked'>Ajouter l'activités</a>
                </div>
              </div>`) ;    console.log(i)
          }
      })
    });
    $("#oui").click(function(){
      $("#activHide").show()
    })
    $("#non").click(function(){
      $("#activHide").hide()
    })
    </script>
    {/literal}
{/block}
