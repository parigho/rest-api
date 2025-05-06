# 🌿 Mock REST API in PHP — Organic Cotton Accelerator

A simple mock REST API built with PHP for demonstration and local testing purposes. Suitable for mobile or frontend clients needing authentication, profile updates, and data syncing.

---

## 🚀 Features

- ✅ User Authentication (`/api/login.php`)
- 📝 Profile Update Endpoint (`/api/profile_update.php`)
- 🔄 Data Sync Endpoint (`/api/data_sync.php`)
- 🛡️ Token-based mock authorization
- ✅ Input validation
- ✅ Proper HTTP status codes
- 📦 File-based storage (`users.json`)
- 📬 Postman collection included for easy testing

---

## 🗂️ Folder Structure

```
rest-api/
│
├── api/                     # Main API endpoints
│   ├── login.php
│   ├── profile_update.php
│   └── data_sync.php
│
├── helpers/                 # Reusable helper functions
│   ├── response.php
│   └── auth.php
│
├── users.json               # User database (mock)
├── public/                  # Optional frontend interface (HTML form)
│   └── index.html
│
├── php-rest-api-postman-collection.json  # Postman file
└── README.md
```

---

## ⚙️ Dependencies

No external PHP dependencies required. Uses built-in PHP functions only.

---

## ✅ Setup Instructions (with XAMPP)

1. 📦 Clone or copy the project into your `htdocs` directory:
   ```
   C:\xampp\htdocs\rest-api
   ```

2. 🟢 Start Apache server via XAMPP Control Panel.

3. 📄 Open the project in browser:
   ```
   http://localhost/rest-api/public/index.html
   ```

4. 🔐 Default user credentials (stored in `users.json`):
   ```json
   {
     "email": "user@example.com",
     "password": "password123"
   }
   ```

---

## 🧪 Sample API Requests (via Postman)

Import the provided `php-rest-api-postman-collection.json` into [Postman](https://www.postman.com/) to test the endpoints.

### 🔐 Login
**POST** `/api/login.php`
- Body: `email`, `password`
- Returns: `token`

### 👤 Profile Update
**POST** `/api/profile_update.php`
- Body: `name`, `token`
- Returns: updated message

### 🔄 Data Sync
**POST** `/api/data_sync.php`
- Body: `data`, `token`
- Returns: sync confirmation

---

## ⚠️ Notes

- This is a **mock project** for educational/testing use.
- Passwords are stored in plain text in `users.json` — not for production.
- Add `register.php` or JWT if you plan to expand this.

---

## 👨‍💻 Author

Built for the **Organic Cotton Accelerator** sample project.  
Maintained by: [parigh gupta]  
📍 Rokin 102, 1012 KZ Amsterdam, The Netherlands

---

## 📘 License

This project is open-source and free to use for educational/demo purposes.
