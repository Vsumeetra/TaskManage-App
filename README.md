# Task Management System

A simple task management system built using PHP, MySQL, HTML, and CSS. This project allows users to create, view, update, and delete tasks. It's perfect for managing daily tasks and keeping track of their progress.

---

## Features

- **Add New Tasks**: Create tasks with a title, description, and status.
- **View Tasks**: Display all tasks in a clean, tabular format.
- **Edit Tasks**: Update the status of any existing task.
- **Delete Tasks**: Remove tasks from the list.
- **Responsive Design**: User-friendly interface.

---

## Project Structure

```plaintext
task_management/
├── db.php                 # Database connection file
├── add_task.php           # Backend logic for adding a new task
├── edit_task.php          # Backend logic for updating a task
├── delete_task.php        # Backend logic for deleting a task
├── index.php              # Main page for viewing all tasks
├── add_task_form.html     # Form for adding new tasks
├── task_db.sql            # Exported database structure
└── assets/
    └── style.css          # Styling for the application
