<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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
        }

        label {
            text-align: left;
        }
            
        .save-btn {
            width: 50;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="center-content">
        <h1>Add Product</h1>
        <form action="/product/add" method="post" class="form-container">
            <div class="form-group">
                <label for="ProductName">Product Name:</label>
                <input type="text" name="ProductName" id="ProductName" required>
            </div>

            <div class="form-group">
                <label for="ProductDescription">Product Description:</label>
                <input type="text" name="ProductDescription" id="ProductDescription" required>
            </div>
            
            <div class="form-group">
                <label for="ProductCategory">Product Category:</label>
                <input type="text" name="ProductCategory" id="ProductCategory" required>
            </div>

            <div class="form-group">
                <label for="ProductQuantity">Product Quantity:</label>
                <input type="text" name="ProductQuantity" id="ProductQuantity" required>
            </div>

            <div class="form-group">
                <label for="ProductPrice">Product Price:</label>
                <input type="text" name="ProductPrice" id="ProductPrice" required>
            </div>

            <input type="submit" value="Save" class="save-btn">
        </form>
        <a href="/product">Back to Product List</a>
    </div>
</body>
</html>
