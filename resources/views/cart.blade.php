<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('partials.navbar')
    <!-- component -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<section class="h-screen bg-gray-100 px-4 text-gray-600 antialiased" x-data="app">
    <div class="flex h-full flex-col justify-center">
        <!-- Table -->
        <div class="mx-auto w-full max-w-2xl rounded-sm border border-gray-200 bg-white shadow-lg">
            <header class="border-b border-gray-100 px-5 py-4">
                <div class="font-semibold text-gray-800">Manage Carts</div>
            </header>

            <div class="overflow-x-auto p-3">
                <table class="w-full table-auto">
                    <thead class="bg-gray-50 text-xs font-semibold uppercase text-gray-400">
                        <tr>
                            <th></th>
                            <th class="p-2">
                                <div class="text-left font-semibold">Product Name</div>
                            </th>
                            <th class="p-2">
                                <div class="text-left font-semibold">Quantity</div>
                            </th>
                            <th class="p-2">
                                <div class="text-left font-semibold">Total</div>
                            </th>
                            <th class="p-2">
                                <div class="text-center font-semibold">Action</div>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-100 text-sm">
                        <!-- record 1 -->
                        <tr>
                            <td class="p-2">
                                <input type="checkbox" class="h-5 w-5" value="id-1" @click="toggleCheckbox($el, 2890.66)" />
                            </td>
                            <td class="p-2">
                                <div class="font-medium text-gray-800">Samsung Galaxy Note 4</div>
                            </td>
                            <td class="p-2">
                                <div class="text-left">1</div>
                            </td>
                            <td class="p-2">
                                <div class="text-left font-medium text-green-500">RM 2,890.66</div>
                            </td>
                            <td class="p-2">
                                <div class="flex justify-center">
                                    <button>
                                        <svg class="h-8 w-8 rounded-full p-1 hover:bg-gray-100 hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- record 2 -->
                        <tr>
                            <td class="p-2">
                                <input type="checkbox" class="h-5 w-5" value="id-2" @click="toggleCheckbox($el, 120.50)" />
                            </td>
                            <td class="p-2">
                                <div>
                                    <div class="font-medium text-gray-800">Logitech Keyboard</div>
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-left">1</div>
                            </td>
                            <td class="p-2">
                                <div class="text-left font-medium text-green-500">RM 120.50</div>
                            </td>
                            <td class="p-2">
                                <div class="flex justify-center">
                                    <button>
                                        <svg class="h-8 w-8 rounded-full p-1 hover:bg-gray-100 hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- total amount -->
            <div class="flex justify-end space-x-4 border-t border-gray-100 px-5 py-4 text-2xl font-bold">
                <div>Total</div>
                <div class="text-blue-600">RM <span x-text="total.toFixed(2)"></span></div>
            </div>

            <div class="flex justify-end">
                <!-- send this data to backend (note: use class 'hidden' to hide this input) -->
                <input type="hidden" class="border border-black bg-gray-50" x-model="selected" />
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("app", () => ({
            total: 0,
            selected: [],

            toggleCheckbox(element, amount) {
                if (element.checked) {
                    this.selected.push(element.value);
                    this.total += amount;
                } else {
                    const index = this.selected.indexOf(element.value);

                    if (index > -1) this.selected.splice(index, 1);

                    this.total -= amount;
                }
            },
        }));
    });
</script>
</body>
</html>