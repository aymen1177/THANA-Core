<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>إضافة تصنيف - THANA.DZ</title>
</head>

<body>

<h1>إضافة تصنيف جديد</h1>

<form action="/categories" method="POST">

    @csrf

    <label>الاسم بالعربية</label><br>
    <input type="text" name="name_ar"><br><br>

    <label>الاسم بالفرنسية</label><br>
    <input type="text" name="name_fr"><br><br>

    <label>الاسم بالإنجليزية</label><br>
    <input type="text" name="name_en"><br><br>

    <button type="submit">حفظ</button>

</form>

</body>
</html>
