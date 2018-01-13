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