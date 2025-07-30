# Laravel API with Sanctum (Laravel Sail)

This project is a Laravel 12 API using **Laravel Sanctum** for token-based authentication, running in Docker via **Laravel Sail**. It provides:

-   🔐 User Authentication (Login, Register, Logout)
-   🧾 API CRUD: Categories & Transactions
-   🐳 Dockerized development environment

---

## 🚀 Quick Start

### 🧰 Prerequisites

Install Docker and make sure it is running in the background.

-   [Docker](https://www.docker.com/)

---

## ️ Installation

1.  Clone the repo

```
git clone https://github.com/
cd your-repo

composer install

```

2.  Copy the .env file

```
cp .env.example .env
```

3. Start Sail

```
./vendor/bin/sail up -d

```

4. Generate app key

```
./vendor/bin/sail artisan key:generate
```

5. Run migrations

```
./vendor/bin/sail artisan migrate
```

## 🔐 Authentication API

All endpoints return JSON.

| Method | Endpoint             | Description               |
| ------ | -------------------- | ------------------------- |
| POST   | `/api/auth/register` | Register new user         |
| POST   | `/api/auth/login`    | Login & get token         |
| POST   | `/api/auth/logout`   | Logout (invalidate token) |

### Example: Register

```http
POST /api/auth/register
Content-Type: application/json

{
  "name": "John Doe",
  "email": "john@example.com",
  "password": "secret123",
  "password_confirmation": "secret123",
  "device_name": "android"
}
```

### Example: Login

POST /api/auth/login
Content-Type: application/json

{
"email": "john@example.com",
"password": "secret123",
"device_name": "android"
}

### All routes access need authentication

### Categories

| Method | Endpoint               | Action   |
| ------ | ---------------------- | -------- |
| GET    | `/api/categories`      | List all |
| POST   | `/api/categories`      | Create   |
| GET    | `/api/categories/{id}` | Show one |
| PUT    | `/api/categories/{id}` | Update   |
| DELETE | `/api/categories/{id}` | Delete   |

### Transactions

| Method | Endpoint                 | Action   |
| ------ | ------------------------ | -------- |
| GET    | `/api/transactions`      | List all |
| POST   | `/api/transactions`      | Create   |
| GET    | `/api/transactions/{id}` | Show one |
| PUT    | `/api/transactions/{id}` | Update   |
| DELETE | `/api/transactions/{id}` | Delete   |
