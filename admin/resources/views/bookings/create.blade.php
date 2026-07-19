<x-app-layout>

    <x-slot name="header">
        <h2>طلب خدمة جديدة</h2>
    </x-slot>


    <div style="max-width:700px;margin:30px auto;padding:20px;">


        <form action="{{ route('bookings.store') }}" method="POST">

            @csrf


            <div style="margin-bottom:20px;">

                <label>
                    اختر الخدمة
                </label>


                <select name="provider_service_id"
                        style="width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;"
                        required>

                    <option value="">
                        اختر الخدمة
                    </option>


                    @foreach($providerServices as $item)

                        <option value="{{ $item->id }}">

                            {{ $item->serviceProvider->business_name }}
                            -
                            {{ $item->service->name }}
                            -
                            {{ $item->price ?? 'السعر يحدد لاحقًا' }}

                        </option>

                    @endforeach


                </select>

            </div>



            <div style="margin-bottom:20px;">

                <label>
                    تاريخ الطلب
                </label>


                <input type="datetime-local"
                       name="booking_date"
                       style="width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;">

            </div>



            <div style="margin-bottom:20px;">

                <label>
                    ملاحظات
                </label>


                <textarea name="notes"
                          style="width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;"
                          rows="4"></textarea>

            </div>



            <button type="submit"
                    style="
                    background:#2563eb;
                    color:white;
                    border:none;
                    padding:10px 25px;
                    border-radius:8px;
                    font-weight:bold;">
                إرسال الطلب
            </button>


        </form>


    </div>


</x-app-layout>
