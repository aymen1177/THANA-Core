<x-app-layout>

    <x-slot name="header">
        <h2>تعديل مقدم الخدمة</h2>
    </x-slot>


    <div style="max-width:800px;margin:30px auto;padding:20px;">

        <div style="background:#fff;padding:25px;border-radius:8px;box-shadow:0 2px 10px rgba(0,0,0,.1);">


            <form action="{{ route('service_providers.update',$serviceProvider) }}" method="POST">

                @csrf
                @method('PUT')


                <div style="margin-bottom:15px;">

                    <label>اسم النشاط</label>

                    <input
                        type="text"
                        name="business_name"
                        value="{{ $serviceProvider->business_name }}"
                        style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                </div>


                <div style="margin-bottom:15px;">

                    <label>الهاتف</label>

                    <input
                        type="text"
                        name="phone"
                        value="{{ $serviceProvider->phone }}"
                        style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                </div>


                <div style="margin-bottom:15px;">

                    <label>العنوان</label>

                    <input
                        type="text"
                        name="address"
                        value="{{ $serviceProvider->address }}"
                        style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                </div>


                <div style="margin-bottom:15px;">

                    <label>الوصف</label>

                    <textarea
                        name="description"
                        rows="5"
                        style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">{{ $serviceProvider->description }}</textarea>

                </div>


                <button
                    type="submit"
                    style="background:#2563eb;color:#fff;border:none;padding:10px 20px;border-radius:6px;cursor:pointer;">

                    حفظ التعديلات

                </button>


            </form>


        </div>

    </div>


</x-app-layout>
