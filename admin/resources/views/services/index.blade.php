<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>الخدمات - THANA.DZ</title>
</head>

<body>

<h1>إدارة الخدمات</h1>

<a href="/services/create">
    إضافة خدمة جديدة
</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>الرقم</th>
    <th>التصنيف</th>
    <th>اسم الخدمة</th>
    <th>الوصف</th>
    <th>السعر</th>
    <th>الحالة</th>
    <th>الإجراءات</th>
</tr>

@foreach($services as $service)

<tr>

    <td>{{ $service->id }}</td>

    <td>
        {{ $service->category->name_ar ?? 'بدون تصنيف' }}
    </td>

    <td>
        {{ $service->title }}
    </td>

    <td>
        {{ $service->description }}
    </td>

    <td>
        {{ $service->price }}
    </td>

    <td>
        {{ $service->status }}
    </td>

    <td>

        <a href="/services/{{ $service->id }}/edit">
            تعديل
        </a>

        <form action="/services/{{ $service->id }}" method="POST">

            @csrf
            @method('DELETE')

            <button type="submit">
                حذف
            </button>

        </form>

    </td>

</tr>

@endforeach

</table>

</body>

</html>
