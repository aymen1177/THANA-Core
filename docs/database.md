# Database Design

## thana_customers
- id
- full_name
- phone
- email
- password
- created_at

## thana_professionals
- id
- full_name
- phone
- service_id
- latitude
- longitude
- rating
- status
- created_at

## thana_services
- id
- name
- description
- status

## thana_requests
- id
- customer_id
- professional_id
- service_id
- description
- latitude
- longitude
- status
- created_at

## thana_reviews
- id
- customer_id
- professional_id
- rating
- comment
- created_at
