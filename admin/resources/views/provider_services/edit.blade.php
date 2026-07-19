<x-app-layout>

    <x-slot name="header">
        <h2>تعديل خدمة مقدم الخدمة</h2>
    </x-slot>


    <div style="max-width:800px;margin:30px auto;padding:20px;">

        <div style="background:#fff;padding:25px;border-radius:8px;box-shadow:0 2px 10px rgba(0,0,0,.1);">

            <form action="{{ route('provider_services.update',$providerService) }}" method="POST">

                @csrf
                @method('PUT')


                <div style="margin-bottom:15px;">

                    <label>مقدم الخدمة</label>

                    <select name="service_provider_id"
                            style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                        @foreach($providers as $provider)

                            <option value="{{ $provider->id }}"
                            {{ $providerService->service_provider_id == $provider->id ? 'selected' : '' }}>

                                {{ $provider->business_name }}

                            </option>

                        @endforeach

                    </select>

                </div>


                <div style="margin-bottom:15px;">

                    <label>الخدمة</label>

                    <select name="service_id"
                            style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                        @foreach($services as $service)

                            <option value="{{ $service->id }}"
                            {{ $providerService->service_id == $service->id ? 'selected' : '' }}>

                                {{ $service->name }}

                            </option>

                        @endforeach

                    </select>

                </div>


                <div style="margin-bottom:15px;">

                    <label>عنوان الخدمة</label>

                    <input type="text"
                           name="title"
                           value="{{ $providerService->title }}"
                           style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                </div>


                <div style="margin-bottom:15px;">

                    <label>الوصف</label>

                    <textarea name="description"
                              rows="4"
                              style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">{{ $providerService->description }}</textarea>

                </div>


                <div style="margin-bottom:15px;">

                    <label>السعر</label>

                    <input type="number"
                           name="price"
                           value="{{ $providerService->price }}"
                           style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                </div>


                <div style="margin-bottom:15px;">

                    <label>نوع السعر</label>

                    <select name="price_type"
                            style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                        <option value="fixed" {{ $providerService->price_type == 'fixed' ? 'selected' : '' }}>
                            سعر ثابت
                        </option>

                        <option value="hourly" {{ $providerService->price_type == 'hourly' ? 'selected' : '' }}>
                            بالساعة
                        </option>

                        <option value="daily" {{ $providerService->price_type == 'daily' ? 'selected' : '' }}>
                            باليوم
                        </option>

                        <option value="custom" {{ $providerService->price_type == 'custom' ? 'selected' : '' }}>
                            حسب الاتفاق
                        </option>

                    </select>

                </div>


                <div style="margin-bottom:20px;">

                    <label>المدة</label>

                    <input type="number"
                           name="duration"
                           value="{{ $providerService->duration }}"
                           style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;">

                </div>


                <button type="submit"
                        style="background:#2563eb;color:#fff;border:none;padding:10px 20px;border-radius:6px;cursor:pointer;">

                    حفظ التعديل

                </button>


            </form>

        </div>

    </div>

</x-app-layout>
