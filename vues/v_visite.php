      <form action="index.php?uc=visite&action=visite" method="post">
      <div class="corpsForm">
         
          <fieldset>
            <legend>Saisir compte rendu visite
            </legend>
            <p>
              <label for="txtNom">Reference du praticien : </label>
              <input type="text" id="txtRefVis" name="refPraticien" size="70" maxlength="256" value="" />
            </p>
            <p>
              <label for="txtNom">Date de fin de visite : </label>
              <input type="datetime" id="txtRefVis" name="finDeVisite" size="70" maxlength="256" value="<?php echo (new \DateTime())->format('Y-m-d H:i:s'); ?>" />
            </p>
            <p>
              <label for="txtNom">Niveau d'interet : </label>
              <input type="text" id="txtIdPraticien" name="niveauInteret" size="70" maxlength="256" value="" />
            </p>
          </fieldset>
      </div>
      <div class="piedForm">
      <p>
        <input id="ajouter" type="submit" value="Ajouter" size="20" />
        <input id="effacer" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>

  </div>
  

