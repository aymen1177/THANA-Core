<x-app-layout>

    <x-slot name="header">
        <h2>إدارة خدمات مقدمي الخدمات</h2>
    </x-slot>


    <div style="max-width:1200px;margin:30px auto;padding:20px;">

        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">

            <h3>قائمة الخدمات المقدمة</h3>

            <a href="{{ route('provider_services.create') }}"
               style="background:#2563eb;color:#fff;padding:10px 18px;border-radius:6px;text-decoration:none;">
                إضافة خدمة لمقدم
            </a>

        </div>


        <table style="width:100%;border-collapse:collapse;text-align:center;">

            <thead>

                <tr style="background:#f3f4f6;">

                    <th style="border:1px solid #ccc;padding:10px;">#</th>

                    <th style="border:1px solid #ccc;padding:10px;">
                        مقدم الخدمة
                    </th>

                    <th style="border:1px solid #ccc;padding:10px;">
                        الخدمة
                    </th>

                    <th style="border:1px solid #ccc;padding:10px;">
                        السعر
                    </th>

                    <th style="border:1px solid #ccc;padding:10px;">
                        نوع السعر
                    </th>

                    <th style="border:1px solid #ccc;padding:10px;">
                        الحالة
                    </th>

                    <th style="border:1px solid #ccc;padding:10px;">
                        الإجراءات
                    </th>

                </tr>

            </thead>


            <tbody>

            @foreach($providerServices as $providerService)

                <tr>

                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $providerService->id }}
                    </td>


                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $providerService->serviceProvider->business_name ?? '' }}
                    </td>


                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $providerService->service->name ?? '' }}
                    </td>


                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $providerService->price ?? 'حسب الاتفاق' }}
                    </td>


                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $providerService->price_type }}
                    </td>


                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $providerService->available ? 'متاحة' : 'غير متاحة' }}
                    </td>


                    <td style="border:1px solid #ccc;padding:10px;">

                        <a href="{{ route('provider_services.edit',$providerService) }}"
                           style="color:#2563eb;text-decoration:none;margin-left:10px;">
                            تعديل
                        </a>


                        <form action="{{ route('provider_services.destroy',$providerService) }}"
                              method="POST"
                              style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    onclick="return confirm('هل تريد حذف هذه الخدمة؟')"
                                    style="background:#dc2626;color:#fff;border:none;padding:6px 12px;border-radius:5px;cursor:pointer;">
                                حذف
                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</x-app-layout>
