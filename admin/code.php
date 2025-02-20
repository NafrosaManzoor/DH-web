
<?php 
session_start();
include('./config/dbconnect.php');
include('./function/myfunctions.php');

if (isset($_POST['add_categorie_btn'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $image = $_FILES['my_file']['name'];

    $path = "./uploads/";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;



    // Insert data into the 'categorie' table
    $query = "INSERT INTO categories (name,description,my_file ) VALUES ('$name', '$description',' $image')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        move_uploaded_file($_FILES['my_file']['tmp_name'], $path . '/' . $filename);
        redirect("add_cate.php", "Category Added Successfully");
    } else {
        redirect("add_cate.php", "Something went to wrong");
    }
} else if (isset($_POST['update_categorie_btn'])) {
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $new_image = $_FILES['my_file']['name'];
    $old_image = $_POST['old_image'];



    $path = "./uploads/";

    if ($new_image != "") {
        //$update_filename = $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time() . '.' . $image_ext;
    } else {
        $update_filename = $old_image;
    }

    $update_query = "UPDATE categories SET name ='$name', description='$description', my_file='$update_filename' WHERE id='$category_id'";

    $update_query_run = mysqli_query($conn, $update_query);

    if ($update_query_run) {
        if ($_FILES['my_file']['name'] != "") {
            move_uploaded_file($_FILES['my_file']['tmp_name'], $path . '/' . $update_filename);
            if (file_exists("./uploads/" . $old_image)) {
                unlink("./uploads/" . $old_image);
            }
        }
        redirect("edit-category.php?id=$category_id", "Category Update Successfully");
    } else {
        redirect("edit-category.php?id=$category_id", "Something Went to wrong");
    }
} else if (isset($_POST['delete_categorie_btn'])) {
    $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);

    $category_Query = "SELECT * FROM categories WHERE id='$category_id' ";
    $category_Query_run = mysqli_query($conn, $category_Query);
    $category_data = mysqli_fetch_assoc($category_Query_run);

    $image = $category_data['my_file'];

    $delete_Query = "DELETE FROM categories WHERE id='$category_id' ";
    $delete_Query_run = mysqli_query($conn, $delete_Query);


    if ($delete_Query_run) {

        if (file_exists("./uploads/" . $image)) {
            unlink("./uploads/" . $image);

            redirect("category.php", "Category delete Successfully");
        } else {
            redirect("category.php", "Category delete Not successfully");
        }
    }
} else if (isset($_POST['add_products_btn'])) {
    $category_id = $_POST['category_id'];

    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $path = "./uploads/";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;

    if ($name != "" && $image != "" && $description != "") {

        $product_query = "INSERT INTO products (category_id, name, image, price, description) VALUES ('$category_id','$name','$filename','$price','$description')";

        $product_query_run = mysqli_query($conn, $product_query);

        if ($product_query_run) {
            move_uploaded_file($_FILES['image']['name'], $path . '' . $filename);

            redirect("add_products.php", "Products Added Successfully");
        } else {
            redirect("add_products.php", "Something went wrong");
        }
    }
} else if (isset($_POST['update_products_btn'])) {

    $product_id = $_POST['product_id'];
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    $path = "./uploads/";

    if ($new_image != "") {
        //$update_filename = $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time() . '.' . $image_ext;
    } else {
        $update_filename = $old_image;
    }

    $update_product_query = "UPDATE products SET name ='$name', description='$description', image='$update_filename' WHERE id='$product_id'";

    $update_product_query_run = mysqli_query($conn, $update_product_query);

    if ($update_product_query_run) {
        if ($_FILES['image']['name'] != "") {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
            if (file_exists("./uploads/" . $old_image)) {
                unlink("./uploads/" . $old_image);
            }
        }
        redirect("edit-product.php?id=$product_id", "Product Update Successfully");
    } else {
        redirect("edit-product.php?id=$product_id", "Something Went to wrong");
    }
} else {
    header('Location:../index.php');
}



?>