<form action="../actions/update_brand.php" method="get">
            <h3>Edit Product Brand</h3>
            <div class="col-md-6 mb-3">
              <div class="form-floating mb-3">
              <input type="hidden" class="form-control" name="id" id="lname" value = "<?php echo $_GET['brand_id'] ?>" placeholder="Brand Name">
                <input type="text" class="form-control" name="new_name" value = "<?php echo $_GET['brand_name'] ?>" id="lname" placeholder="Brand Name">
                <label for="lname">Brand Name</label>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name = "add_brand" class="btn btn-success">Add Brand</button>
        </div>
</form>