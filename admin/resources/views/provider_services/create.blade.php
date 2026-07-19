<x-app-layout>

    <x-slot name="header">
        <h2>إضافة خدمة لمقدم خدمة</h2>
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


            <form action="{{ route('provider_services.store') }}" method="POST">

                @csrf


                <div style="margin-bottom:15px;">

                    <label>مقدم الخدمة</label>

                    <select name="service_provider_id"
                            style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                        <option value="">اختر مقدم الخدمة</option>

                        @foreach($providers as $provider)

                            <option value="{{ $provider->id }}">
                                {{ $provider->business_name }}
                            </option>

                        @endforeach

                    </select>

                </div>



                <div style="margin-bottom:15px;">

                    <label>الخدمة</label>

                    <select name="service_id"
                            style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                        <option value="">اختر الخدمة</option>

                        @foreach($services as $service)

                            <option value="{{ $service->id }}">
                                {{ $service->name }}
                            </option>

                        @endforeach

                    </select>

                </div>



                <div style="margin-bottom:15px;">

                    <label>عنوان الخدمة</label>

                    <input type="text"
                           name="title"
                           style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                </div>



                <div style="margin-bottom:15px;">

                    <label>الوصف</label>

                    <textarea name="description"
                              rows="4"
                              style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;"></textarea>

                </div>



                <div style="margin-bottom:15px;">

                    <label>السعر المقترح</label>

                    <input type="number"
                           name="price"
                           style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                </div>



                <div style="margin-bottom:15px;">

                    <label>نوع السعر</label>

                    <select name="price_type"
                            style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                        <option value="fixed">سعر ثابت</option>
                        <option value="hourly">بالساعة</option>
                        <option value="daily">باليوم</option>
                        <option value="custom">حسب الاتفاق</option>

                    </select>

                </div>



                <div style="margin-bottom:20px;">

                    <label>المدة</label>

                    <input type="number"
                           name="duration"
                           style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                </div>



                <button type="submit"
                        style="background:#2563eb;color:#fff;border:none;padding:10px 20px;border-radius:6px;cursor:pointer;">

                    حفظ

                </button>


            </form>


        </div>

    </div>


</x-app-layout>
