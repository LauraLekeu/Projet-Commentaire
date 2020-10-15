<?php
/*

    ./app/vues/template/partials/_main.php

*/
?>
<section class="container" id="sectionPrincipale">
    <!--Formulaire-->
    <div class="row">
        <div class="col m4">
            <?php include '../app/vues/template/partials/_form.php'; ?>
        </div>

<!-- ################### LISTE DES POSTS ###################### -->
        <div class="col m8">
            <?php echo $content; ?>
<!-- ################### FIN DE LISTE DES POSTS ###################### -->
        </div>
    </div>
</section>
