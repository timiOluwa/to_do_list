To-Do List Application
Description
This To-Do List Application enables users to efficiently manage their tasks by creating, editing, deleting, and marking tasks as completed. Users must log in to interact with their tasks, with session-based authentication ensuring secure access. The backend is developed with raw PHP, and tasks are stored in a MySQL database. The application is built with a simple, responsive design to provide an optimal user experience across all devices.

Features
User Login: Secure login system using PHP sessions for authentication.
Add Tasks: Users can create new tasks with titles and descriptions.
Edit Tasks: Modify existing tasks to update their details.
Delete Tasks: Remove tasks when completed or no longer needed.
Mark as Complete: Track task completion with a status indicator.
Database Storage: Tasks are stored in a MySQL database.
Responsive Design: Optimized for desktop and mobile use.
Demo
You can view the live version of the application here (Replace # with the actual hosting link once deployed).

Installation
To run the project locally:

Clone the repository:
bash
Copy code
git clone https://github.com/timioluwa/to-do-list-app.git  
Navigate to the project folder:
bash
Copy code
cd to-do-list-app  
Set up a local server (e.g., XAMPP, MAMP, or WAMP).
Import the tasks.sql file into your MySQL database.
Update the config.php file with your database credentials.
Start the server and open the application in your browser.
Register a new user or log in to start managing tasks.
Project Structure
graphql
Copy code
to-do-list-app/  
│  
├── index.php              # Main entry point for the application  
├── login.php              # Login page for user authentication  
├── register.php           # User registration page  
├── logout.php             # Logout page for ending sessions  
├── styles/  
│   └── style.css          # CSS for styling  
├── scripts/  
│   └── script.js          # JavaScript for interactivity  
├── backend/  
│   ├── config.php         # Database connection settings  
│   ├── add_task.php       # PHP script to handle task creation  
│   ├── edit_task.php      # PHP script to handle task editing  
│   ├── delete_task.php    # PHP script to handle task deletion  
│   └── fetch_tasks.php    # PHP script to fetch tasks from the database  
└── database/  
    └── tasks.sql          # SQL file for setting up the database  
Technologies Used
Frontend: HTML, CSS (for styling), JavaScript (for interactivity).
Backend: Raw PHP for handling server-side operations and session management.
Database: MySQL for storing user and task data.
Acknowledgments
This project was developed as a full-stack web application to demonstrate the integration of raw PHP, MySQL, and frontend technologies.

Author
Timilehin Babailo
GitHub: github.com/timioluwa
LinkedIn: Timilehin Babailo
