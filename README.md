# 🚀 Laravel API Gateway - Rate Limiting Example

This project is a simple API Gateway example built with Laravel.  

The goal is to implement and test a **rate limiting** mechanism on specific endpoints.

---

## 📌 Project Purpose

In this project:

- Laravel API endpoints are created  
- Throttle middleware is applied  
- Maximum 5 requests per minute  
- 6th request returns **429 (Too Many Requests)**  
- Tested with Postman  
- **Cariler CRUD endpoints** added (list, create, update, delete)  

---

## 🛠 Technologies Used

- PHP  
- Laravel  
- Postman (for API testing)  
- Git & GitHub  

---

## ⚙️ Setup

Clone the project:

```bash
git clone https://github.com/nidaxie/api-gateway.git
cd api-gateway

Install dependencies:

composer install

Create the .env file:

cp .env.example .env

Generate the application key:

php artisan key:generate

Start the server:

php artisan serve
🔗 API Endpoints
Test Gateway
GET /api/gateway

Example URL: http://127.0.0.1:8000/api/gateway

Rate Limiting: 5 requests per minute

Requests 1–5 → 200 OK

{
  "message": "Gateway passed"
}

Request 6 → 429 Too Many Requests

{
  "message": "Too Many Attempts."
}
Cariler CRUD
Method	Endpoint	Description
GET	/api/cariler	List all
POST	/api/cariler	Create new
GET	/api/cariler/{id}	Show details
PUT	/api/cariler/{id}	Update
DELETE	/api/cariler/{id}	Delete

Note: All requests require the X-API-KEY header.

🧪 Testing (Postman)

Create a GET request to /api/gateway

Send it 6 times quickly to test rate limiting

Test Cariler CRUD endpoints using X-API-KEY header

📚 Learned Topics

Laravel route structure

Middleware usage

Rate limiting concepts

CRUD endpoint design

HTTP status codes

API testing with Postman

Git version control

👩‍💻 Developer

Nida Oruç
GitHub: https://github.com/nidaxie
