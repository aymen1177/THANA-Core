<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تعديل التصنيف - THANA.DZ</title>
</head>

<body>

<h1>تعديل التصنيف</h1>

<form action="/categories/{{ $category->id }}" method="POST">

    @csrf
    @method('PUT')

    <label>الاسم بالعربية</label><br>
    <input type="text" name="name_ar" value="{{ $category->name_ar }}"><br><br>

    <label>الاسم بالفرنسية</label><br>
    <input type="text" name="name_fr" value="{{ $category->name_fr }}"><br><br>

    <label>الاسم بالإنجليزية</label><br>
    <input type="text" name="name_en" value="{{ $category->name_en }}"><br><br>

    <button type="submit">حفظ التعديل</button>

</form>

</body>
</html>
