<?php 
require_once '../core/init.php';
$id = $_POST['id'];
$id = (int)$id;
$sql = "SELECT * FROM products WHERE id = '$id'";
$result = $db->query($sql);
$product = mysqli_fetch_assoc($result);
$brand_id  = $product['brand'];
$sql = "SELECT brand FROM brand WHERE id='$brand_id'";
$brand_query = $db->query($sql);
$brand = mysqli_fetch_assoc($brand_query);
$sizesting = $product['sizes'];
$sizeArray = explode(',',$sizesting); 
?>

<?php ob_start(); ?>

<div class="modal fade details-1" id="details-modal" tabindex="1" role="dialog" aria-labelledby="details-1"
    aria-hidden="true">
    <div class="modal-dialog modal-1g">
      <div class="modal-content">      
        <div class="modal-header">
          <button type="button" onclick="closemodal()" class="close" aria-label="Close">
          <span aria-hidden="true">&times;</span>        
        </button>
        <h4 class="modal-tittle text-center"><?php echo $product['tittle'];?></h4>  
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="center-block">
                <img src="<?php echo $product['image'];?>" alt="<?php echo $product['tittle'];?>" class="details img-responsive">
              </div>
            </div>
            <div class="col-sm-6">
              <h4>Details</h4>
              <p><?php echo $product['description'];?></p>
              <hr>
              <p>Price: R$<?php echo $product['price'];?></P>
              <p>Brand: <?php echo $brand['brand'];?></p>  
              <form action="add_cart.php" method="post">
                <div class="form-group">
                <div class="col-xs-4">
                    <label for="quantity">Quantity:</label>
                    <input type="text" class="form-control" id="quantity" name="quantity">                                        
                </div>
                <div class="col-lx-3"></div></br></br>                
                </div>
                <div class="form-group">
                  <label for="size">Size</label>
                  <select name="size" id="size" class="form-control">
                    <option value=""></option>
                    <?php foreach($sizeArray as $string) {
                      $string_array = explode(':',$string);
                      $size = $string_array[0];
                      $quatity = $string_array[1]; 
                      echo '<option value="'.$size.'">'.$size.'('.$quatity.' Available)</option>';
                                     
                    } ?>
                    
                    
                                   
                  </select>
                </div>
              </form>            
            </div>
          </div>
        </div>        
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" onclick="closemodal()">Close</button>
        <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
      </div>
</div>
    </div>
    </div>
    <script>
          function closemodal(){
            jQuery('#details-modal').modal('hide');
            setTimeout(function(){
              jQuery('#details-modal').remove();
              jQuery('.modal-backdrop').remove();
            },500);
          }
    </script>  
    <?= ob_get_clean();?>