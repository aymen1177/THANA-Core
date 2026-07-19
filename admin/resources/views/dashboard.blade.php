<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            لوحة التحكم - Thana
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-gray-500 text-sm">المستخدمون</h3>
                    <p class="text-3xl font-bold mt-2">{{ $users }}</p>
                </div>

                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-gray-500 text-sm">المجالات</h3>
                    <p class="text-3xl font-bold mt-2">{{ $domains }}</p>
                </div>

                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-gray-500 text-sm">التصنيفات</h3>
                    <p class="text-3xl font-bold mt-2">{{ $categories }}</p>
                </div>

                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-gray-500 text-sm">الخدمات</h3>
                    <p class="text-3xl font-bold mt-2">{{ $services }}</p>
                </div>

                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-gray-500 text-sm">مقدمو الخدمات</h3>
                    <p class="text-3xl font-bold mt-2">{{ $providers }}</p>
                </div>

                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-gray-500 text-sm">الحجوزات</h3>
                    <p class="text-3xl font-bold mt-2">{{ $bookings }}</p>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
