<h1>categories</h1>
<section class="mb-4">
    <div class="row">
    <?php

use app\core\asset;

    foreach($categories as $category)
    {?>
    <div class="col-lg-3">
<div class="card" >
  <img src="<?php echo asset::asset(asset::IMGS_FOLDER).'/'.$category['avatar'] ?? ''; ?>" width="150px" height="150px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $category['name']?></h5>
  </div>
</div>
</div>
<?php
    }?>
   </div>
</section>

<h1>products</h1>
<section>
    <div class="row">
    <?php


    foreach($products as $product)
    {?>
    <div class="col-lg-3">
<div class="card" >
  <img src="<?php echo asset::asset(asset::IMGS_FOLDER).'/'.$product['avatar'] ?? ''; ?>" width="150px" height="150px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $product['name']?></h5>
    <p class="card-text"><?php echo $product['price']?></p>
  </div>
</div>
</div>
<?php
    }?>
   </div>
</section>
