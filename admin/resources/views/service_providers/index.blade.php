<x-app-layout>

    <x-slot name="header">
        <h2>إدارة مقدمي الخدمات</h2>
    </x-slot>

    <div style="max-width:1100px;margin:30px auto;padding:20px;">

        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">

            <h3>قائمة مقدمي الخدمات</h3>

            <a href="{{ route('service_providers.create') }}"
               style="background:#2563eb;color:#fff;padding:10px 18px;border-radius:6px;text-decoration:none;">
                إضافة مقدم خدمة
            </a>

        </div>


        <table style="width:100%;border-collapse:collapse;text-align:center;">

            <thead>

                <tr style="background:#f3f4f6;">

                    <th style="border:1px solid #ccc;padding:10px;">#</th>

                    <th style="border:1px solid #ccc;padding:10px;">
                        اسم النشاط
                    </th>

                    <th style="border:1px solid #ccc;padding:10px;">
                        الهاتف
                    </th>

                    <th style="border:1px solid #ccc;padding:10px;">
                        العنوان
                    </th>

                    <th style="border:1px solid #ccc;padding:10px;">
                        التحقق
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

            @foreach($providers as $provider)

                <tr>

                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $provider->id }}
                    </td>


                    <td style="border:1ص1px solid #ccc;padding:10px;">
                        {{ $provider->business_name }}
                    </td>


                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $provider->phone }}
                    </td>


                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $provider->address }}
                    </td>


                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $provider->verification_status }}
                    </td>


                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $provider->status }}
                    </td>


                    <td style="border:1px solid #ccc;padding:10px;">

                        <a href="{{ route('service_providers.edit',$provider) }}"
                           style="color:#2563eb;text-decoration:none;margin-left:10px;">
                            تعديل
                        </a>


                        <form action="{{ route('service_providers.destroy',$provider) }}"
                              method="POST"
                              style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    onclick="return confirm('هل أنت متأكد من حذف مقدم الخدمة؟')"
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
