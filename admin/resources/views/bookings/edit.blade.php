<x-app-layout>

    <x-slot name="header">
        <h2>إرسال عرض سعر</h2>
    </x-slot>


    <div style="max-width:700px;margin:30px auto;padding:20px;">

        <div style="background:#fff;padding:25px;border-radius:8px;">

            <form action="{{ route('bookings.update',$booking) }}" method="POST">

                @csrf
                @method('PUT')


                <div style="margin-bottom:15px;">
                    <label>الخدمة</label>

                    <input type="text"
                           value="{{ $booking->providerService->service->name ?? '' }}"
                           disabled
                           style="width:100%;padding:10px;">
                </div>


                <div style="margin-bottom:15px;">
                    <label>الزبون</label>

                    <input type="text"
                           value="{{ $booking->user->full_name ?? '' }}"
                           disabled
                           style="width:100%;padding:10px;">
                </div>


                <div style="margin-bottom:15px;">
                    <label>السعر المقترح</label>

                    <input type="number"
                           name="total_amount"
                           value="{{ $booking->total_amount }}"
                           required
                           style="width:100%;padding:10px;">
                </div>


                <input type="hidden" name="status" value="pending">


                <div style="margin-bottom:20px;">
                    <label>ملاحظات</label>

                    <textarea name="notes"
                              style="width:100%;padding:10px;">{{ $booking->notes }}</textarea>
                </div>


                <button type="submit"
                        style="background:#2563eb;color:white;padding:10px 20px;border:none;border-radius:6px;">
                    إرسال العرض للزبون
                </button>


            </form>

        </div>

    </div>

</x-app-layout>
