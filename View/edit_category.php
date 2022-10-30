<form action="../actions/update_category.php" method="get">
            <h3>Edit Product category</h3>
            <div class="col-md-6 mb-3">
              <div class="form-floating mb-3">
              <input type="hidden" class="form-control" name="id" id="lname" value = "<?php echo $_GET['category_id'] ?>" placeholder="category Name">
                <input type="text" class="form-control" name="new_name" value = "<?php echo $_GET['category_name'] ?>" id="lname" placeholder="category Name">
                <label for="lname">category Name</label>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name = "add_category" class="btn btn-success">Update category</button>
        </div>
</form>