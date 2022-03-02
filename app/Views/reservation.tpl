{extends file='base/layout.tpl'}
{block name=content}
    <div class="container">
        <div class="row">
            <div class="reservation">
                <h2>Réserver dès maintenant !! </h2>
                <div class="destination">
                    <label for="reservation">Hôtel de destination : </label>
                    <select name="reservation">
                        <option value="punta_cana">Hôtel ardis Sampatico (Punta cana)</option>
                        <option value="dubai">Hôtel ardis Dubai</option>
                        <option value="suisse">Hôtel alpardis (suisse) </option>
                    </select>
                </div>
                <div class="date">
                    Du: <input type="date">
                    AU: <input type="date">
                </div>

                <div class="nombre_voyager">
                    <input type="numbre" placeholder="Nombre de voyageurs">
                </div>
            <input type="submit" class="btn" value="réserver">
          </div>
        </div>
    </div>
{/block}