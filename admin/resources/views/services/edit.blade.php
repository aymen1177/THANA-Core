<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            تعديل الخدمة
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow rounded-lg p-6">

                <form action="{{ route('services.update', $service) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label>التصنيف</label>

                        <select name="category_id"
                                class="w-full border rounded p-2">

                            @foreach($categories as $category)

                                <option value="{{ $category->id }}"
                                    {{ $service->category_id == $category->id ? 'selected' : '' }}>

                                    {{ $category->name_ar }}

                                </option>

                            @endforeach

                        </select>

                    </div>


                    <div class="mb-4">
                        <label>اسم الخدمة</label>

                        <input type="text"
                               name="name"
                               value="{{ $service->name }}"
                               class="w-full border rounded p-2">
                    </div>


                    <div class="mb-4">
                        <label>الوصف</label>

                        <textarea name="description"
                                  class="w-full border rounded p-2">{{ $service->description }}</textarea>
                    </div>


                    <div class="mb-4">
                        <label>الحالة</label>

                        <select name="status"
                                class="w-full border rounded p-2">

                            <option value="1"
                                {{ $service->status ? 'selected' : '' }}>
                                نشطة
                            </option>

                            <option value="0"
                                {{ !$service->status ? 'selected' : '' }}>
                                غير نشطة
                            </option>

                        </select>

                    </div>


                    <button type="submit"
                        style="background:#2563eb;color:white;padding:10px 20px;border-radius:6px;">

                        حفظ التعديلات

                    </button>


                </form>

            </div>

        </div>
    </div>

</x-app-layout>
