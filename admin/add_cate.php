<?php @include 'includes/header.php'; ?>
<div class="container">
  <div class="row">
    <div class="row">
      <div class="col-lg-7 position-relative z-index-2">

        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Add Categories</h4>
                </div>


                <div class="card-body">
                  <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6">
                        <label class="order-label" for="productName">Categorie Name</label>
                        <input class="order-inpttext" type="text" name="name" id="" placeholder="Enter Categorie "><br>
                      </div><br>

                      <div class="col-md-12"><br>
                        <label class="order-label" for="detailedDescription"> Description</label><br>
                        <textarea rows="3" texta type="text" name="description" id="" placeholder="Enter Description"></textarea><br>
                      </div><br>

                      <div class="col-md-12"><br>
                        <label class="order-label" for="productimage1">Image</label><br>
                        <input class="order-inpttext" type="file" name="my_file" id="" height="20px" width="20px"><br>
                      </div><br>

                      <div class="col-md-6"><br>
                        <button type="submit" class="btn btn-primary" name="add_categorie_btn"> Add</button>
                      </div>


                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php @include 'includes/footer.php'; ?>