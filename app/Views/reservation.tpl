{extends file='base/layout.tpl'}
{block name=content}
    <div class="container">
        <div class="row">
            <div class="reservation">
                <h2>Reserver dés maintenant !! </h2>
                <div class="destination">
                    <label for="reservation">Hotel de destinations: </label>
                    <select name="reservation">
                        <option value="punta_cana">Hotel ardis Sampatico (Punta cana)</option>
                        <option value="dubai">Hotel ardis Dubai</option>
                        <option value="suisse">Hotel alpardis (suisse) </option>
                    </select>
                </div>
                <div class="date">
                    Du: <input type="date">
                    AU: <input type="date">
                </div>

                <div class="nombre_voyager">
                    <input type="numbre" placeholder="Nombre de voyageurs">
                </div>
            <input type="submit" class="btn" value="reserver">
          </div>
        </div>
    </div>
{/block}