<x-app-layout>

    <x-slot name="header">
        <h2>لوحة تحكم مقدم الخدمة - Thana</h2>
    </x-slot>


    <div style="max-width:900px;margin:30px auto;padding:20px;">

        <h3>
            طلبات الخدمات
        </h3>

        <div style="
            margin-top:20px;
            background:#f3f4f6;
            padding:20px;
            border-radius:10px;
            font-size:20px;
        ">
            عدد الطلبات:
            {{ $bookings }}
        </div>


        <a href="{{ route('bookings.index') }}"
           style="
           display:inline-block;
           margin-top:20px;
           background:#2563eb;
           color:white;
           padding:10px 20px;
           border-radius:8px;
           text-decoration:none;
           ">
            إدارة الطلبات
        </a>

    </div>

</x-app-layout>
