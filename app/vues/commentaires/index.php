<?php
/*

    ./app/vues/commentaires/index.php
      Variables disponnibles:
      -$commentaires : ARRAY(ARRAY id, pseudo, texte, created_at, updated_at)

*/
?>
<ul id="listeDesPosts" class="collection">
  <?php foreach ($commentaires as $commentaire): ?>
    <li class="collection-item avatar post">
        <i class="material-icons circle green">insert_chart></i>
        <div class="title"><?php echo $commentaire['pseudo']; ?></div>
        <div class="text truncate"><?php echo $commentaire['texte']; ?></div>
        <div><a href="#" class="edit">Editer le texte</a> | <a href="#" class="delete">Supprimer la publication</a></div>
    </li>
  <?php endforeach; ?>
</ul>
