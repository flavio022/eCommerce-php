
<?php 
require_once 'core/init.php';
include 'includes/head.php';
include 'includes/navigations.php';
include 'includes/headerfull.php';
include 'includes/leaftbar.php';
?>
    
    
       
        <!--main content-->
        <div class="col-md-8">Main
          <div class="row">
              <h2 class="text-center">Feature Products</h2>

              <div class="col-md-3">
                <h4>Levis Jeans</h4>
                <img src="images/products/men4.png" alt="Levis Jeans" class="img-thumb"/>
                <p class="list-price text-danger">List Price <s>R$94.99</s></p>
                <p class="price">Our Price: R$59.99</p>
                <button type="button" class="btn btn-sm btn-sucess" data-toggle="modal" 
                data-target="#details-1">Details</button>
          </div>
              

          <div class="col-md-3">
                <h4>Hollister Shirt</h4>
                <img src="images/products/men1.png" alt="Hollister Shirt" class="img-thumb"/>
                <p class="list-price text-danger">List Price <s>R$94.99</s></p>
                <p class="price">Our Price: R$39.99</p>
                <button type="button" class="btn btn-sm btn-sucess" data-toggle="modal" 
                data-target="#details-1">Details</button>
          </div>      
          

          <div class="col-md-3">
                <h4>Girls Dress</h4>
                <img src="images/products/girls3.png" alt="Girls Dress" class="img-thumb"/>
                <p class="list-price text-danger">List Price <s>R$54.99</s></p>
                <p class="price">Our Price: R$39.99</p>
                <button type="button" class="btn btn-sm btn-sucess" data-toggle="modal" 
                data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
                <h4>Woman's Shirt</h4>
                <img src="images/products/women7.png" alt="Woman's Shirt" class="img-thumb"/>
                <p class="list-price text-danger">List Price <s>R$84.99</s></p>
                <p class="price">Our Price: R$49.99</p>
                <button type="button" class="btn btn-sm btn-sucess" data-toggle="modal" 
                data-target="#details-1">Details</button>
          </div>
          <div class="col-md-3">
                <h4>Boys Hoodie</h4>
                <img src="images/products/boys1.png" alt="Boys Hoodie" class="img-thumb"/>
                <p class="list-price text-danger">List Price <s>R$94.99</s></p>
                <p class="price">Our Price: R$59.99</p>
                <button type="button" class="btn btn-sm btn-sucess" data-toggle="modal" 
                data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
                <h4>Women's Skirt</h4>
                <img src="images/products/women3.png" alt="Woman's Skirt" class="img-thumb"/>
                <p class="list-price text-danger">List Price <s>R$94.99</s></p>
                <p class="price">Our Price: R$59.99</p>
                <button type="button" class="btn btn-sm btn-sucess" data-toggle="modal" 
                data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
                <h4>Purse</h4>
                <img src="images/products/women5.png" alt="Purse" class="img-thumb"/>
                <p class="list-price text-danger">List Price <s>R$94.99</s></p>
                <p class="price">Our Price: R$59.99</p>
                <button type="button" class="btn btn-sm btn-sucess" data-toggle="modal" 
                data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
                <h4>Fancy Shoes</h4>
                <img src="images/products/women6.png" alt="Fancy Shoes" class="img-thumb"/>
                <p class="list-price text-danger">List Price <s>R$254.99</s></p>
                <p class="price">Our Price: R$190.99</p>
                <button type="button" class="btn btn-sm btn-sucess" data-toggle="modal" 
                data-target="#details-1">Details</button>
          </div>

        </div>
        </div>
<?php 
include 'includes/detailsmodal.php';
include 'includes/rightsidebar.php';
include 'includes/footer.php';
?>
       
    
    
