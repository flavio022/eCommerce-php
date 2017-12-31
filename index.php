<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jurabeira's</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <a href="index.php" class="navbar-brand">Jurabeira's</a>
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Shirts</a></li>
              <li><a href="#">Pants</a></li>
              <li><a href="#">Shoes</a></li>
              <li><a href="#">Accessories</a></li>              
            </ul>
          </li>
      </div>
    </nav>
    
    <!--header-->    
    <div id="headerWrapper">
    <div id="back-flower"></div>
    <div id="logotext"></div>
    <div id="fore-flower"></div>
    </div>

    <div class="container-fluid">
        <!--Left side bar-->
        <div class="col-md-2">Left Side Bar</div>
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
        <div class="col-md-2">Right Side Bar</div>   
    </div>
    <!--footer-->
    <footer class="text-center" id="footer">&copy; Copyright 2017-2018 Shaunta's Boutique</footer>
    <!--Details Modal -->
    <div class="modal fade details-1" id="details-1" tabindex="1" role="dialog" aria-labelledby="details-1"
    aria-hidden="true">
    <div class="modal-dialog modal-1g">
      <div class="modal-content">      
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" arial-label="Close">
          <span aria-hidden="true">&times;</span>        
        </button>
        <h4 class="modal-tittle text-center">Levis Jeans</h4>           
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="center-block">
                <img src="images/products/men4.png" alt="Levis Jeans" class="details img-responsive">
              </div>
            </div>
            <div class="col-sm-6">
              <h4>Details</h4>
              <p>These jeans are amazing! They are straight leg, fit great and look sexy. Get a pair while they last!</p>
              <hr>
              <p>Price: R$34.99</P>
              <p>Brand: Levis</p>  
              <form action="add_cart.php" method="post">
                <div class="form-group">
                <div class="col-xs-4">
                    <label for="quantity">Quantity:</label>
                    <input type="text" class="form-control" id="quantity" name="quantity">                                        
                </div>
                <div class="col-lx-3"></div></br></br>                
                <p>Available: 3</p>
                
                </div>
                <div class="form-group">
                  <label for="size">Size</label>
                  <select name="size" id="size" class="form-control">
                    <option value=""></option>
                    <option value="28">28</option>
                    <option value="32">32</option>
                    <option value="36 ">36</option>
                  </select>
                </div>
              </form>            
            </div>
          </div>
        </div>        
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
      </div>
</div>
    </div>  
    </div> 
<script>
  jQuery(window).scroll(function(){
    var vscroll = jQuery(this).scrollTop();
    jQuery('#logotext').css({
      "transform" : "translate(0px, "+vscroll/2+"px)"
    });
    var vscroll = jQuery(this).scrollTop();
    jQuery('#back-flower').css({
      "transform" : "translate("+vscroll/5+"px, -"+vscroll/12+"px)"
    });

    var vscroll = jQuery(this).scrollTop();
    jQuery('#fore-flower').css({
      "transform" : "translate(0px, -"+vscroll/2+"px)"
    });

  })
</script>

</body>
</html>
