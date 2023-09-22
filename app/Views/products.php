<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body {
            padding-top: 200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background-color: aquamarine;
        }
        .product{
            align-items: left;
            font-size: 20px
            
        }

        .title {
            font-size: 30px;
        }
        .form-group{
            font-size: 20px;
        }

        .content-container {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="product">
    <a href="/product/add">Add Product</a> 
    </div>

    <div class="title">
    <h1>Product List</h1>
    </div>

    <div class="content-container">
        <ul>
            <?php foreach ($products as $product): ?>
                <li>
                    <div class="form-group">
                    <a href="/product/edit/<?= $product['id'] ?>"><?= $product['ProductName'] ?></a> <!-- Product code as link -->
            </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>



