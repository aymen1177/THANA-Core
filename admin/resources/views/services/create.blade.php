<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>إضافة خدمة - THANA.DZ</title>
</head>

<body>

<h1>إضافة خدمة جديدة</h1>

<form action="/services" method="POST">

    @csrf

    <label>التصنيف</label><br>

    <select name="category_id">

        @foreach($categories as $category)

        <option value="{{ $category->id }}">
            {{ $category->name_ar }}
        </option>

        @endforeach

    </select>

    <br><br>

    <label>اسم الخدمة</label><br>

    <input type="text" name="title">

    <br><br>

    <label>الوصف</label><br>

    <textarea name="description"></textarea>

    <br><br>

    <label>السعر</label><br>

    <input type="number" name="price">

    <br><br>

    <label>الحالة</label><br>

    <select name="status">

        <option value="active">نشطة</option>
        <option value="inactive">غير نشطة</option>

    </select>

    <br><br>

    <button type="submit">
        حفظ
    </button>

</form>

</body>

</html>
