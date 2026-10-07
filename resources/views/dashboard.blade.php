<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome user</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased bg-gradient-to-br from-green-100 to-white">
    @include('partials.navbar')
    <!-- component -->
<div class="py-16 bg-purple-200">  
    <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
        <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-3">
            <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                <div class="mb-12 space-y-4">
                    <h3 class="text-2xl font-semibold text-purple-900">Appliances</h3>
                    <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                    <a href="{{route('appliances')}}" class="block font-medium text-purple-600">Know more</a>
                </div>            
                <img src="{{ asset('images/Appliances.jpg') }}" class="w-full h-56 object-cover rounded-xl" alt="illustration of appliances" loading="lazy" width="900" height="600">
            </div>
            <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                <div class="mb-12 space-y-4">
                    <h3 class="text-2xl font-semibold text-purple-900">Computing</h3>
                    <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                    <a href="{{route('computing')}}" class="block font-medium text-purple-600">Know more</a>
                </div>
                <img src="{{ asset('images/Computing.jpg') }}" class="w-full h-56 object-cover rounded-xl" alt="illustration" loading="lazy" width="900" height="600">
            </div>
            <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                <div class="mb-12 space-y-4">
                    <h3 class="text-2xl font-semibold text-purple-900">Fashion</h3>
                    <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                    <a href="{{route('fashion')}}" class="block font-medium text-purple-600">Know more</a>
                </div>
                <img src="{{ asset('images/Fashion.jpg') }}" class="w-full h-56 object-cover rounded-xl" alt="illustration" loading="lazy" width="900" height="600">
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>