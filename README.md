# Laravel To-Do List Application

This project is a simple To-Do List web application built using the Laravel framework. It demonstrates basic CRUD (Create, Read, Update, Delete) operations, providing users with the ability to manage their tasks efficiently.

## Features

* **Task Management**: Add, view, update, and delete tasks.
* **User-Friendly Interface**: Clean and intuitive design for easy navigation.
* **Responsive Design**: Accessible on various devices, including desktops and mobile phones.

## Prerequisites

Before you begin, ensure you have met the following requirements:

* PHP >= 7.3
* Composer
* Laravel >= 8.x
* MySQL or any other supported database
* Node.js and npm (for frontend asset compilation)

## Installation

1. **Clone the Repository**:

   ```bash
   git clone https://github.com/rayhanfay/to-do-list.git
   cd to-do-list
   ```

2. **Install Dependencies**:

   ```bash
   composer install
   npm install
   ```

3. **Environment Configuration**:

   * Copy the example environment file and modify the necessary configurations:

     ```bash
     cp .env.example .env
     ```

   * Generate the application key:

     ```bash
     php artisan key:generate
     ```

   * Set up your database credentials in the `.env` file.

4. **Database Migration**:

   ```bash
   php artisan migrate
   ```

5. **Compile Frontend Assets**:

   ```bash
   npm run dev
   ```

6. **Run the Application**:

   ```bash
   php artisan serve
   ```

   The application will be accessible at `http://localhost:8000`.

## Usage

* **Add Task**: Navigate to the homepage and use the input field to add a new task.
* **Edit Task**: Click on the edit button next to a task to modify its details.
* **Delete Task**: Click on the delete button to remove a task from the list.
