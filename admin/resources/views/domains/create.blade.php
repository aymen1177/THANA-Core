<x-app-layout>

    <x-slot name="header">
        <h2>إضافة مجال جديد</h2>
    </x-slot>

    <div style="max-width:700px;margin:30px auto;padding:20px;background:#fff;border:1px solid #ddd;border-radius:8px;">

        @if ($errors->any())
            <div style="background:#ffe5e5;color:#b00020;padding:10px;margin-bottom:20px;border-radius:6px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('domains.store') }}" method="POST">
            @csrf

            <p><strong>الاسم بالعربية</strong></p>
            <input type="text" name="name_ar" value="{{ old('name_ar') }}" style="width:100%;padding:10px;margin-bottom:15px;">

            <p><strong>الاسم بالفرنسية</strong></p>
            <input type="text" name="name_fr" value="{{ old('name_fr') }}" style="width:100%;padding:10px;margin-bottom:15px;">

            <p><strong>الاسم بالإنجليزية</strong></p>
            <input type="text" name="name_en" value="{{ old('name_en') }}" style="width:100%;padding:10px;margin-bottom:15px;">

            <p><strong>الوصف بالعربية</strong></p>
            <textarea name="description_ar" rows="4" style="width:100%;padding:10px;margin-bottom:15px;">{{ old('description_ar') }}</textarea>

            <p><strong>الوصف بالفرنسية</strong></p>
            <textarea name="description_fr" rows="4" style="width:100%;padding:10px;margin-bottom:15px;">{{ old('description_fr') }}</textarea>

            <p><strong>الوصف بالإنجليزية</strong></p>
            <textarea name="description_en" rows="4" style="width:100%;padding:10px;margin-bottom:20px;">{{ old('description_en') }}</textarea>

            <button type="submit"
                    style="background:#2563eb;color:white;border:none;padding:12px 25px;border-radius:6px;font-size:16px;cursor:pointer;">
                حفظ المجال
            </button>

            <a href="{{ route('domains.index') }}"
               style="margin-right:15px;text-decoration:none;">
                إلغاء
            </a>

        </form>

    </div>

</x-app-layout>
