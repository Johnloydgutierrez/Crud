<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
  .center-content {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.form-container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.form-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
    align-items: flex-start;
}

label {
    flex: 1;
    margin-right: 10px;
    text-align: right;
}


select {
    flex: 1;
    width: 100%;
    padding: 4px;

}

.save-btn {
    margin-top: 10px;
    width: 30%;
    align-items: center;
}
.delete-btn {
    margin-top: 10px;
    width: 30%;
    align-items: center;
}

    </style>
</head>
<body>
    <div class="center-content">
        <h1>Edit Product</h1>
        <form action="/product/edit/<?= $product['id'] ?>" method="post" class="form-container">
        <div class="form-group">
            <label for="ProductName">Product Name:</label>
            <input type="text" name="ProductName" id="ProductName" value="<?= $product['ProductName'] ?>" required>
        </div>

        <div class="form-group">
            <label for="ProductDescription">Product Description:</label>
            <input type="text" name="ProductDescription" id="ProductDescription" value="<?= $product['ProductDescription'] ?>" required>
    </div>

    
<div class="form-group">
    <label for="ProductCategory">Product Category:</label>
    <select name="ProductCategory" id="ProductCategory" required>
    <option value="" selected>Select a category</option>
    <?php foreach ($categories as $category): ?>
        <option value="<?= $category['id'] ?>" <?= ($category['id'] == $product['ProductCategory']) ? 'selected' : '' ?>><?= $category['ProductCategory'] ?></option>
    <?php endforeach; ?>
</select>

</div>

        <div class="form-group">
            <label for="ProductQuantity">Product Quantity:</label>
            <input type="text" name="ProductQuantity" id="ProductQuantity" value="<?= $product['ProductQuantity'] ?>" required>
        </div>

        <div class="form-group">
            <label for="ProductPrice">Product Price:</label>
            <input type="text" name="ProductPrice" id="ProductPrice" value="<?= $product['ProductPrice'] ?>" required>
            </div>

            <input type="submit" value="Save" class="save-btn">

            <div class="delete-btn">
            <a href="/product/delete/<?= $product['id'] ?>">DELETE</a>
</div>
        </form>
        <a href="/product">Back to Product List</a>
    </div>
</body>
</html>
