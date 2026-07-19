<x-app-layout>

    <x-slot name="header">
        <h2>إدارة المجالات</h2>
    </x-slot>

    <div style="max-width:1100px;margin:30px auto;padding:20px;">

        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">

            <h3>قائمة المجالات</h3>

            <a href="{{ route('domains.create') }}"
               style="background:#2563eb;color:#fff;padding:10px 18px;border-radius:6px;text-decoration:none;">
                إضافة مجال
            </a>

        </div>

        <table style="width:100%;border-collapse:collapse;text-align:center;">

            <thead>

                <tr style="background:#f3f4f6;">

                    <th style="border:1px solid #ccc;padding:10px;">#</th>
                    <th style="border:1px solid #ccc;padding:10px;">العربية</th>
                    <th style="border:1px solid #ccc;padding:10px;">Français</th>
                    <th style="border:1px solid #ccc;padding:10px;">English</th>
                    <th style="border:1px solid #ccc;padding:10px;">الحالة</th>
                    <th style="border:1px solid #ccc;padding:10px;">الإجراءات</th>

                </tr>

            </thead>

            <tbody>

            @foreach($domains as $domain)

                <tr>

                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $domain->id }}
                    </td>

                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $domain->name_ar }}
                    </td>

                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $domain->name_fr }}
                    </td>

                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $domain->name_en }}
                    </td>

                    <td style="border:1px solid #ccc;padding:10px;">
                        {{ $domain->is_active ? 'نشط' : 'غير نشط' }}
                    </td>

                    <td style="border:1px solid #ccc;padding:10px;">

                        <a href="{{ route('domains.edit', $domain) }}"
                           style="color:#2563eb;text-decoration:none;margin-left:10px;">
                            تعديل
                        </a>

                        <form action="{{ route('domains.destroy', $domain) }}"
                              method="POST"
                              style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                onclick="return confirm('هل أنت متأكد من حذف هذا المجال؟')"
                                style="background:#dc2626;color:white;border:none;padding:6px 12px;border-radius:5px;cursor:pointer;">
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
