# THANA.DZ Database Schema

## إصدار الوثيقة
Version: 1.0

## الهدف
تصميم قاعدة بيانات مرنة وقابلة للتوسع لمنصة THANA.DZ التي تربط العملاء بمقدمي الخدمات.

---

# جدول المستخدمين (users)

| الحقل | النوع | الوصف |
|--------|--------|--------|
| id | BIGINT | المفتاح الأساسي |
| full_name | VARCHAR(150) | الاسم الكامل |
| phone | VARCHAR(20) | رقم الهاتف |
| email | VARCHAR(150) | البريد الإلكتروني |
| password | VARCHAR(255) | كلمة المرور المشفرة |
| role | ENUM | customer / provider / admin |
| state | VARCHAR(100) | الولاية |
| municipality | VARCHAR(100) | البلدية |
| created_at | TIMESTAMP | تاريخ الإنشاء |

---

# جدول مقدمي الخدمات (service_providers)

| الحقل | النوع |
|--------|--------|
| id | BIGINT |
| user_id | BIGINT |
| profession | VARCHAR(150) |
| experience_years | INTEGER |
| description | TEXT |
| rating | DECIMAL(2,1) |
| is_available | BOOLEAN |

---

# جدول الخدمات (services)

| الحقل | النوع |
|--------|--------|
| id | BIGINT |
| provider_id | BIGINT |
| title | VARCHAR(150) |
| category | VARCHAR(100) |
| description | TEXT |
| price | DECIMAL(10,2) |
| status | ENUM(active, inactive) |

---

# جدول الطلبات (orders)

| الحقل | النوع |
|--------|--------|
| id | BIGINT |
| customer_id | BIGINT |
| provider_id | BIGINT |
| service_id | BIGINT |
| order_status | ENUM |
| appointment_date | DATETIME |
| total_price | DECIMAL(10,2) |

---

# الجداول القادمة

- reviews
- messages
- notifications
- payments
- invoices
- favorites
- reports

---

## حالة الوثيقة

قيد التطوير.
