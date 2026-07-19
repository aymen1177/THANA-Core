<x-app-layout>

    <x-slot name="header">
        <h2>إضافة مقدم خدمة</h2>
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


            <form action="{{ route('service_providers.store') }}" method="POST">

                @csrf


                <div style="margin-bottom:15px;">

                    <label>اسم النشاط</label>

                    <input
                        type="text"
                        name="business_name"
                        value="{{ old('business_name') }}"
                        style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                </div>


                <div style="margin-bottom:15px;">

                    <label>الهاتف</label>

                    <input
                        type="text"
                        name="phone"
                        value="{{ old('phone') }}"
                        style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                </div>


                <div style="margin-bottom:15px;">

                    <label>العنوان</label>

                    <input
                        type="text"
                        name="address"
                        value="{{ old('address') }}"
                        style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                </div>


                <div style="margin-bottom:15px;">

                    <label>الوصف</label>

                    <textarea
                        name="description"
                        rows="5"
                        style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">{{ old('description') }}</textarea>

                </div>


                <button
                    type="submit"
                    style="background:#2563eb;color:#fff;border:none;padding:10px 20px;border-radius:6px;cursor:pointer;">

                    حفظ مقدم الخدمة

                </button>


            </form>


        </div>

    </div>


</x-app-layout>
