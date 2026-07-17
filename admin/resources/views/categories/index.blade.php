<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>التصنيفات - THANA.DZ</title>
</head>

<body>

<h1>إدارة التصنيفات</h1>

<a href="/categories/create">
    إضافة تصنيف جديد
</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>الرقم</th>
    <th>العربية</th>
    <th>الفرنسية</th>
    <th>الإنجليزية</th>
    <th>الإجراءات</th>
</tr>

@foreach($categories as $category)

<tr>
    <td>{{ $category->id }}</td>
    <td>{{ $category->name_ar }}</td>
    <td>{{ $category->name_fr }}</td>
    <td>{{ $category->name_en }}</td>

    <td>

        <a href="/categories/{{ $category->id }}/edit">
            تعديل
        </a>

        <form action="/categories/{{ $category->id }}" method="POST">

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
