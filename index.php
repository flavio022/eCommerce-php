
<?php 
require_once 'core/init.php';
include 'includes/head.php';
include 'includes/navigations.php';
include 'includes/headerfull.php';
include 'includes/leaftbar.php';
$sql = "SELECT * FROM products WHERE featured = 1";
$featured = $db->query($sql);
?>
       
       
        <!--main content-->
        
        <div class="col-md-8">Main
          <div class="row">
              <h2 class="text-center">Feature Products</h2>
            <?php while($product = mysqli_fetch_assoc($featured)) : ?>            
              <div class="col-sm-3 text-center">
                <h4><?php echo $product['tittle']; ?></h4>
                <img src="<?php echo $product['image'];?>" alt="<?php echo $product ?>"Jeans class="img-thumb"/>
                <p class="list-price text-danger">List Price <s><?php echo $product['list_price'];?></s></p>
                <p class="price">Our Price: <?php echo $product['price'];?></p>
                <button type="button" class="btn btn-sm btn-sucess" onclick="detailsmodal(<?= $product['id'];?>)">Details</button>
          </div>             
         <?php endwhile ?>
        </div>
        </div>
<?php 
include 'includes/rightsidebar.php';
include 'includes/footer.php';
?>
       
    
    
