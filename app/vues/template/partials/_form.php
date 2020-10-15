<?php
/*

    ./app/vues/template/partials/_form.php

*/
?>
<form id="form_commentaires" class="card-panel">
    <div class="input-field"><i class="material-icons prefix">account_circle</i>
         <input type="text" id="pseudo" class="validate" required="required" />
         <label for="pseudo">Votre pseudo</label>
    </div>
    <div class="input-field">
        <i class="material-icons prefix">mode_edit</i>
         <textarea id="commentaire" class="materialize-textarea validate" required="required"></textarea>
         <label for="commentaire">Votre commentaire</label>
    </div>
    <div><button class="btn waves-effect waves-light" type="submit">Envoyer
           <i class="material-icons right">send</i>
         </button>
    </div>
</form>
