<?php
require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="script.js"></script>
</head>

<body class="bg-gray-100 h-screen flex">

    <!-- Sidebar -->
    <aside class="w-1/5 bg-pink-800 text-white p-4 space-y-6">
        <h1 class="text-2xl font-bold mb-8">Admin Dashboard</h1>

        <nav class="space-y-4">
            <button id="usersButton"
                class="block w-full text-left bg-yellow-700 hover:bg-orange-600 p-2 rounded">Users</button>
            <button id="productsButton"
                class="block w-full text-left bg-yellow-700 hover:bg-orange-600 p-2 rounded">Products</button>
            <button id="ordersButton"
                class="block w-full text-left bg-yellow-700 hover:bg-orange-600 p-2 rounded">Orders</button>
            <button id="ordersButton"
                class="block w-full text-left bg-yellow-700 hover:bg-orange-600 p-2 rounded" onclick = "logout()">Logout</button>
        </nav>
    </aside>

    <!-- Main Content -->
    <main id="mainContent" class="flex-1 p-6">
        <h2 class="text-3xl font-semibold mb-6">Welcome to Elegant Essence dashboard</h2>
    </main>

    <!-- users -->
    <template id="userTemplate">
        <h2 class="text-3xl font-semibold mb-6">Users</h2>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="w-full bg-gray-200 text-left">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Fullname</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Password</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $users = Database::search("SELECT * FROM `user`");
                $user_num = $users->num_rows;

                for ($i = 0; $i < $user_num; $i++) {
                    $user_rs = $users->fetch_assoc();
                    ?>
                    <tr class="border-b">
                        <td class="px-4 py-2"><?php echo $user_rs['user_id']; ?></td>
                        <td class="px-4 py-2"><?php echo $user_rs['fullname']; ?></td>
                        <td class="px-4 py-2"><?php echo $user_rs['email']; ?></td>
                        <td class="px-4 py-2"><?php echo $user_rs['password']; ?></td>
                        <td class="px-4 py-2">
                            <button onclick="deleteUser(<?php echo $user_rs['user_id']; ?>);"
                                class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded">Delete</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </template>

    <!-- Product  -->

    <template id="products_view">
        <h2 class="text-3xl font-semibold mb-6">Products</h2>
        <button id="openModalBtn" onclick="openModal();"
            class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded mb-3">Add Product</button>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="w-full bg-gray-200 text-left">
                    <th class="px-4 py-2">Product_id</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Quantity</th>
                    <th class="px-4 py-2">Sizes</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">image_url</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $product = Database::search("SELECT * FROM `product`");
                $product_num = $product->num_rows;

                for ($i = 0; $i < $product_num; $i++) {
                    $product_data = $product->fetch_assoc();
                    ?>
                    <tr class="border-b">
                        <td class="px-4 py-2"><?php echo $product_data['product_id'] ?></td>
                        <td class="px-4 py-2"><?php echo $product_data['title'] ?></td>
                        <td class="px-4 py-2"><?php echo $product_data['price'] ?></td>
                        <td class="px-4 py-2"><?php echo $product_data['quantity'] ?></td>
                        <td class="px-4 py-2"><?php echo $product_data['sizes'] ?></td>
                        <td class="px-4 py-2"><?php echo $product_data['description'] ?></td>
                        <td class="px-4 py-2"><?php echo $product_data['img_url'] ?></td>
                        <td class="px-4 py-2">
                            <button onclick="deleteProduct(<?php echo $product_data['product_id'] ?>);"
                                class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded">Delete</button>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </template>

    <!-- orders -->

    <template id="order">
        <h2 class="text-3xl font-semibold mb-6">Orders</h2>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="w-full bg-gray-200 text-left">
                    <th class="px-4 py-2">Order ID</th>
                    <th class="px-4 py-2">User</th>
                    <th class="px-4 py-2">Total</th>
                    <th class="px-4 py-2">shipping_ID</th>
                    <th class="px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $shipping = Database::search("SELECT * FROM `shipping`");
                $shipping_num = $shipping->num_rows;

                for ($i = 0; $i < $shipping_num; $i++) {
                    $shipping_data = $shipping->fetch_assoc();

                    $user_rs = Database::search("SELECT * FROM `user` WHERE `user_id`='".$shipping_data['user_id']."'");
                    $user_data = $user_rs->fetch_assoc();
                    ?>

                    <tr class="border-b">
                        <td class="px-4 py-2"><?php echo $i+1 ?></td>
                        <td class="px-4 py-2"><?php echo $user_data['fullname'] ?></td>
                        <td class="px-4 py-2"><?php echo $shipping_data['total_price'] ?></td>
                        <td class="px-4 py-2"><?php echo $shipping_data['shipping_id'] ?></td>
                        <td class="px-4 py-2">
                            <button id="btn_ship_<?php echo $shipping_data['shipping_id']; ?>" class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded" onclick="changeStatus(<?php echo $shipping_data['shipping_id']; ?>);">Shipped</button>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </template>

    <!-- Success Alert -->
    <div id="successAlert" class="fixed bottom-4 right-4 hidden bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg">
        <strong>Success!</strong> Product inserted successfully.
    </div>
    <!-- Success Alert -->

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center ">
        <!-- Modal Container -->
        <div class="bg-white w-1/3 rounded-lg shadow-lg p-8">
            <!-- Modal Header -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold">Add a new product</h2>
                <button onclick="closeModal();" id="closeModalBtn"
                    class="text-gray-500 hover:text-gray-800">&times;</button>
            </div>

            <!-- Form Inside the Modal -->
            <form id="modalForm">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium">Product Title</label>
                    <input type="text" id="title" name="name" class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>

                <div class="mb-4">
                    <label for="text" class="block text-gray-700 font-medium">Price</label>
                    <input type="text" id="price" name="email" class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>

                <div class="mb-4">
                    <label for="number" class="block text-gray-700 font-medium">Quantity</label>
                    <input type="number" id="qty" name="email" class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>

                <div class="mb-4">
                    <label for="text" class="block text-gray-700 font-medium">Sizes</label>
                    <input type="text" id="size" name="email" class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>

                <div class="mb-4">
                    <label for="text" class="block text-gray-700 font-medium">Description</label>
                    <input type="text" id="description" name="email"
                        class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium">Image URL</label>
                    <input type="text" id="url" name="email" class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>

                <div class="flex justify-end">
                    <button type="submit" onclick="submitProduct()"
                        class="bg-green-500 text-white px-4 py-2 rounded">Submit</button>
                </div>
            </form>
        </div>
    </div>
   

    <!-- JavaScript for handling section loading -->
    <script>
        // Elements
        const mainContent = document.getElementById('mainContent');
        const usersButton = document.getElementById('usersButton');
        const productsButton = document.getElementById('productsButton');
        const ordersButton = document.getElementById('ordersButton');

        // Load users section
        usersButton.addEventListener('click', () => {
            var content = document.getElementById("userTemplate");
            mainContent.innerHTML = content.innerHTML;
        });

        // Load products section
        productsButton.addEventListener('click', () => {
            var productContent = document.getElementById("products_view");
            mainContent.innerHTML = productContent.innerHTML;
        });

        // Load orders section
        ordersButton.addEventListener('click', () => {
            var order = document.getElementById("order");
            mainContent.innerHTML = order.innerHTML;
        });
    </script>
</body>

</html>