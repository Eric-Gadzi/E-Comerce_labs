<?php
require_once("../admin/brand.php");
require_once("../controllers/product_controller.php");
require_once("../admin/login.php");

function AdminButtons()
{
    if (checkUserPrivileges()) {
        return " 
            <button type='button' class='btn btn-success mb-3' data-bs-toggle='modal' data-bs-target='#addProduct'>
                Add Product Brand
            </button>
            <button type='button' class='btn btn-success mb-3' data-bs-toggle='modal' data-bs-target='#addCategory'>
                Add Product Category
            </button>
          ";
    }
}

function display_brands()
{
    if (checkUserPrivileges()) {

        brandTable();
    }
}


function brandTable()
{
    $brands = selectAllBrands();
    echo "<h4>Brand Names</h4>";
    echo "  <table class='table table-striped table-inverse table-responsive'>
    <thead class='thead-inverse'>
      <tr>
        <th scope='col'>#</th>
        <th scope='col'>Brand Name</th>
        <th scope='col'>Management</th>
      </tr>
    </thead>
    <tbody>";
    $counter = 0;
    foreach ($brands as $brand) {
        $brand_id = $brand['brand_id'];
        $brand_name = $brand['brand_name'];
        $counter += 1;
        display_row($counter, $brand_id, $brand_name);
    }
    echo "
    </tbody>
  </table>
";
}

function display_row($counter, $brand_id, $brand_name)
{
    echo "<tr>
    <td scope='row'>$counter</td>
    <td>$brand_name</td>
    <td><a class='btn btn-warning mb-3' href='../View/edit_brand.php?brand_id=$brand_id&brand_name=$brand_name' role='button'>Edit Brand</a>
    <a class='btn btn-danger mb-3' href='../actions/delete_brand.php?brand_id=$brand_id&brand_name=$brand_name' role='button'>Delete</a>
    <td>
    </tr>";
}

function brand_dropdown()
{
    $brands = selectAllBrands();
    echo "<h4>Brand Names</h4>";
    foreach ($brands as $brand) {
        $brand_id = $brand['brand_id'];
        $brand_name = $brand['brand_name'];

        echo "<option value = '$brand_id'>$brand_name</option>";
    }
}

function brand_dropdown_selected($value)
{
    $brands = selectAllBrands();
    echo "<h4>Brand Names</h4>";
    foreach ($brands as $brand) {
        $brand_id = $brand['brand_id'];
        $brand_name = $brand['brand_name'];

        if ($brand_id == $value) {
            echo "<option value = '$brand_id' selected>$brand_name</option>";
            continue;
        }

        echo "<option value = '$brand_id'>$brand_name</option>";
    }
}
