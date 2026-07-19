<x-app-layout>

    <x-slot name="header">
        <h2>إدارة الطلبات</h2>
    </x-slot>


    <div style="max-width:1200px;margin:30px auto;padding:20px;">


        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">

            <h3>
                قائمة الطلبات
            </h3>


            @if(auth()->user()->role == 'customer')

                <a href="{{ route('bookings.create') }}"
                   style="
                   background:#2563eb;
                   color:white;
                   padding:10px 20px;
                   border-radius:8px;
                   text-decoration:none;
                   font-weight:bold;
                   box-shadow:0 2px 5px rgba(0,0,0,0.15);">
                    طلب خدمة جديدة
                </a>

            @endif


        </div>


        <table style="width:100%;border-collapse:collapse;text-align:center;">

            <thead>

                <tr style="background:#f3f4f6;">

                    <th style="border:1px solid #ccc;padding:10px;">#</th>
                    <th style="border:1px solid #ccc;padding:10px;">الزبون</th>
                    <th style="border:1px solid #ccc;padding:10px;">مقدم الخدمة</th>
                    <th style="border:1px solid #ccc;padding:10px;">الخدمة</th>
                    <th style="border:1px solid #ccc;padding:10px;">السعر</th>
                    <th style="border:1px solid #ccc;padding:10px;">الحالة</th>
                    <th style="border:1px solid #ccc;padding:10px;">الإجراءات</th>

                </tr>

            </thead>


            <tbody>

            @foreach($bookings as $booking)

                <tr>

                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $booking->id }}
                    </td>

                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $booking->user->full_name ?? '' }}
                    </td>

                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $booking->providerService->serviceProvider->business_name ?? '' }}
                    </td>

                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $booking->providerService->service->name ?? '' }}
                    </td>

                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $booking->total_amount ?? 'غير محدد' }}
                    </td>

                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $booking->status }}
                    </td>


                    <td style="border:1px solid #ccc;padding:10px;">

                        @if(auth()->user()->role == 'provider')

                            @if($booking->total_amount)

                                <span style="
                                background:#f59e0b;
                                color:white;
                                padding:8px 18px;
                                border-radius:8px;
                                font-weight:bold;">
                                    بانتظار رد الزبون
                                </span>

                            @else

                                <a href="{{ route('bookings.edit',$booking) }}"
                                   style="
                                   background:#2563eb;
                                   color:white;
                                   padding:8px 18px;
                                   border-radius:8px;
                                   text-decoration:none;
                                   font-weight:bold;">
                                    تحديد السعر
                                </a>

                            @endif


                        @else

                            @if($booking->status == 'pending' && $booking->total_amount)

                                <form action="{{ route('bookings.accept',$booking) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PATCH')

                                    <button style="background:#16a34a;color:white;border:none;padding:8px 18px;border-radius:8px;font-weight:bold;">
                                        قبول
                                    </button>
                                </form>


                                <form action="{{ route('bookings.reject',$booking) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PATCH')

                                    <button style="background:#dc2626;color:white;border:none;padding:8px 18px;border-radius:8px;font-weight:bold;">
                                        رفض
                                    </button>
                                </form>

                            @endif

                        @endif

                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</x-app-layout>
