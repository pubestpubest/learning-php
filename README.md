# PHP Task Manager

This is a simple PHP-based Task Manager application that allows users to create, read, update, and delete tasks. The application is containerized using Docker for easy deployment and development.

## Features

- Add new tasks with title and description
- View all tasks
- Mark tasks as completed or not completed
- Delete tasks
- Responsive web interface

## Technology Stack

- PHP 8.2
- MySQL 8.0
- Apache Web Server
- Docker

## Project Structure

```
.
├── src/
│ ├── add_task.php
│ ├── config.php
│ ├── delete_task.php
│ ├── functions.php
│ ├── index.php
│ ├── setup.php
│ └── update_task.php
├── apache-config.conf
├── docker-compose.yml
├── Dockerfile
└── README.md
```

## Setup and Installation

1. Make sure you have Docker and Docker Compose installed on your system.

2. Clone this repository:

   ```
   git clone <repository-url>
   cd <project-directory>
   ```

3. Build and start the Docker containers:

   ```
   docker-compose up -d --build
   ```

4. The application should now be running. Access it in your web browser at:

   ```
   http://localhost:8080
   ```

5. To set up the database table, visit:
   ```
   http://localhost:8080/setup.php
   ```

## Usage

- To add a new task, use the form at the bottom of the main page.
- To mark a task as completed or not completed, click the "Toggle" link next to the task.
- To delete a task, click the "Delete" link next to the task.

## Development

The project uses Docker volumes, so any changes made to the PHP files in the `src/` directory will be immediately reflected in the running application.

## Security Note

This application is for demonstration purposes only and is not production-ready. It lacks proper security measures such as input validation, prepared statements for database queries, and CSRF protection. Do not use it in a production environment without implementing these security features.
