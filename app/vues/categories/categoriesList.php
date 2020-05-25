<?php
/*
  ./app/vues/categories/categoriesList.php
  Liste des categories
  Variables disponibles:
      - $categories ARRAY(ARRAY(id, name))
*/
?>
<div class="sidebar-box ftco-animate">
  <div class="categories">
    <h3>Categories</h3>
    <?php foreach($categories as $categorie): ?>
        <li>
          <a href="#"><?php echo $categorie['name']; ?> <span class="ion-ios-arrow-forward"></span>
          </a>
        </li>
    <?php endforeach; ?>
  </div>
</div>
