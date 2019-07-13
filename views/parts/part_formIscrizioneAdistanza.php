<div class="form-mini-container">
    <form class="form-mini" method="post" action="model/dao_iscrizioniAdistanza.php" style="margin-top:0px;">
    <h5>formulario iscrizione</h5>
        <div class="form-row">
            <input type="text" name="nome" placeholder="Nome" required>
        </div>

        <div class="form-row">
            <input type="text" name="cognome" placeholder="Cognome" required>
        </div>

        <div class="form-row">
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="form-row">
            <label>
                <select name="nazione_domicilio" value="" >
                    <option value="">Nazione di domicilio</option>
                    <option value="Francia">Francia</option>
                    <option value="Italia">Italia</option>
                    <option value="Belgio">Belgio</option>
                    <option value="Germania">Germania</option>
                    <option value="Inghilterra">Inghilterra</option>
                    <option value="Spagna">Spagna</option>
                    <option value="Svizzera">Svizzera</option>
                    <option value="Lussemburgo">Lussemburgo</option>
                    <option value="Svezia">Svezia</option>
                    <option value="Argenitna">Argentina</option>
                    <option value="USA">USA</option>
                    <option value="Russia">Russia</option>
                    <option value="Portogallo">Portogallo</option>
                    <option value="Argenitna">altro</option>
                </select>
            </label>
        </div>

        <div class="form-row">
            <input type="text" name="citta_domicilio" placeholder="Città di domicilio" >
        </div>

        
        <div class="form-row">
            <label>
                <select name="anno_nascita" value="" >
                <option value="">anno di nascita</option>
                <option value="1900-1925">1900-1925</option>
                    <?php
                    
                    for($i =1926; $i<date("Y")+1; $i++){
                        ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                        <?php
                    }
                    ?>
                </select>
            </label>
        </div>

        <div class="form-row">
            <div class="form-radio-buttons">

                <div>
                    <label>
                        <input type="radio" name="genere"  value ="uomo" >
                        <span>uomo</span>
                    </label>
                </div>

                <div>
                    <label>
                        <input type="radio" name="genere" value="donna">
                        <span>donna</span>
                    </label>
                </div>

            </div>
        </div>

        <div class="form-row">
            <input type="text" name="telefono_francese" placeholder="Tel Francia" >
        </div>

        <div class="form-row">
            <input type="text" name="telefono_estero" placeholder="Tel estero (Italia/altro)" >
        </div>

        <div class="form-row form-last-row">
            <button type="submit">Submit Form</button>
        </div>

    </form>
</div>
    