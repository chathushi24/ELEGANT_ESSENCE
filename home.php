<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex">

    <!-- Sidebar -->
    <aside class="w-1/5 bg-pink-800 text-white p-4 space-y-6">
        <h1 class="text-2xl font-bold mb-8">Admin Dashboard</h1>

        <nav class="space-y-4">
            <button id="usersButton" class="block w-full text-left bg-yellow-700 hover:bg-orange-600 p-2 rounded">Users</button>
            <button id="productsButton" class="block w-full text-left bg-yellow-700 hover:bg-orange-600 p-2 rounded">Products</button>
            <button id="ordersButton" class="block w-full text-left bg-yellow-700 hover:bg-orange-600 p-2 rounded">Orders</button>
        </nav>
    </aside>

    <!-- Main Content -->
    <main id="mainContent" class="flex-1 p-6">
        <h2 class="text-3xl font-semibold mb-6">Dashboard Overview</h2>
    </main>

    <!-- JavaScript for handling section loading -->
    <script>
        // Elements
        const mainContent = document.getElementById('mainContent');
        const usersButton = document.getElementById('usersButton');
        const productsButton = document.getElementById('productsButton');
        const ordersButton = document.getElementById('ordersButton');

        // Load users section
        usersButton.addEventListener('click', () => {
            mainContent.innerHTML = `
                <h2 class="text-3xl font-semibold mb-6">Users</h2>
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr class="w-full bg-gray-200 text-left">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="px-4 py-2">1</td>
                            <td class="px-4 py-2">John Doe</td>
                            <td class="px-4 py-2">johndoe@example.com</td>
                            <td class="px-4 py-2">
                                <button class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded">Edit</button>
                                <button class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded">Delete</button>
                            </td>
                        </tr>
                        <!-- More user rows can be added here -->
                    </tbody>
                </table>
            `;
        });

        // Load products section
        productsButton.addEventListener('click', () => {
            mainContent.innerHTML = `
                <h2 class="text-3xl font-semibold mb-6">Products</h2>
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr class="w-full bg-gray-200 text-left">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Price</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="px-4 py-2">101</td>
                            <td class="px-4 py-2">Blue Dress</td>
                            <td class="px-4 py-2">$49.99</td>
                            <td class="px-4 py-2">
                                <button class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded">Edit</button>
                                <button class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded">Delete</button>
                            </td>
                        </tr>
                        <!-- More product rows can be added here -->
                    </tbody>
                </table>
            `;
        });

        // Load orders section
        ordersButton.addEventListener('click', () => {
            mainContent.innerHTML = `
                <h2 class="text-3xl font-semibold mb-6">Orders</h2>
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr class="w-full bg-gray-200 text-left">
                            <th class="px-4 py-2">Order ID</th>
                            <th class="px-4 py-2">User</th>
                            <th class="px-4 py-2">Total</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="px-4 py-2">5001</td>
                            <td class="px-4 py-2">John Doe</td>
                            <td class="px-4 py-2">$79.99</td>
                            <td class="px-4 py-2">Shipped</td>
                            <td class="px-4 py-2">
                                <button class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded">Edit</button>
                                <button class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded">Delete</button>
                            </td>
                        </tr>
                        <!-- More order rows can be added here -->
                    </tbody>
                </table>
            `;
        });
    </script>
</body>
</html>
