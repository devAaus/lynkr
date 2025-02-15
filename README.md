# ![Lynkr Logo](resources/images/logo.png)

**Lynkr** - A powerful, AI-powered link shortening service

## 🚀 App Description

Lynkr allows you to shorten long URLs and track their engagement in real-time. With advanced analytics, dynamic QR codes, and easy-to-use features, Lynkr is the perfect tool for streamlining and optimizing your link-sharing experience.

### Key Features:

-   **AI-Powered Optimization** for your links
-   **Customizable Short Links**
-   **Real-Time Analytics** and Click Tracking
-   **Dynamic and Custom QR Code Generation**
-   **Easy to Use Interface**

## 🛠️ Technologies Used

-   **Laravel** - Backend framework
-   **BladeWithAlpine** - Frontend framework
-   **SQLite** - Database
-   **Tailwind CSS** - Styling framework
-   **QR Code Generation** - For dynamic short links

## 🏃‍♂️ Running Locally

To run this project locally, follow the steps below:

### 1. Clone the repository

```bash
git clone https://github.com/devAaus/lynkr.git
cd lynkr
```

### 2. Install dependencies

Make sure you have Composer and Node.js installed.

Backend
Run the following to install Laravel dependencies:

```bash
composer install
```

Frontend
Install the necessary frontend dependencies using npm:

```bash
npm install
```

### 3. Migrate the Database

Run the database migrations:

```bash
php artisan migrate
```

### 4. Run the Application

Now, run the development server:

```bash
php artisan serve
```

You can now open the app in your browser at http://localhost:8000.
