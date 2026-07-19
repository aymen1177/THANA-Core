<x-app-layout>

    <x-slot name="header">
        <h2>إضافة تصنيف جديد</h2>
    </x-slot>

    <div style="max-width:800px;margin:30px auto;padding:20px;">

        <div style="background:#fff;padding:25px;border-radius:8px;box-shadow:0 2px 10px rgba(0,0,0,.1);">

            @if ($errors->any())

                <div style="background:#fee2e2;color:#b91c1c;padding:12px;border-radius:6px;margin-bottom:20px;">

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            <form action="{{ route('categories.store') }}" method="POST">

                @csrf

                <div style="margin-bottom:15px;">

                    <label>المجال</label>

                    <select
                        name="domain_id"
                        style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                        <option value="">اختر المجال</option>

                        @foreach($domains as $domain)

                            <option value="{{ $domain->id }}">

                                {{ $domain->name_ar }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div style="margin-bottom:15px;">

                    <label>الاسم بالعربية</label>

                    <input
                        type="text"
                        name="name_ar"
                        value="{{ old('name_ar') }}"
                        style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                </div>

                <div style="margin-bottom:15px;">

                    <label>الاسم بالفرنسية</label>

                    <input
                        type="text"
                        name="name_fr"
                        value="{{ old('name_fr') }}"
                        style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                </div>

                <div style="margin-bottom:20px;">

                    <label>الاسم بالإنجليزية</label>

                    <input
                        type="text"
                        name="name_en"
                        value="{{ old('name_en') }}"
                        style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                </div>

                <button
                    type="submit"
                    style="background:#2563eb;color:#fff;border:none;padding:10px 20px;border-radius:6px;cursor:pointer;">

                    حفظ التصنيف

                </button>

            </form>

        </div>

    </div>

</x-app-layout>
