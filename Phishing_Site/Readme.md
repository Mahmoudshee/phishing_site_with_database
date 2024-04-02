# Database-Driven Facebook Login Replication

## Overview
This project is a simple web application that replicates the Facebook login page. Users can input their credentials (username and password), which are then sent to a database via a PHP script. Upon successful authentication, users are redirected to another site called hacked.com.

## Technologies Used
- HTML/CSS: For the frontend design and layout of the login page.
- PHP: For server-side scripting to handle user authentication and database operations.
- MySQL: For storing user credentials and managing user data.

## Setup Instructions
1. Clone the repository to your local machine:

    ```
    git clone https://github.com/yourusername/your-repo.git
    ```

2. Set up a web server environment with PHP and MySQL support. You can use tools like XAMPP, WAMP, or set up your own LAMP stack.

3. Create a MySQL database named `users` with a table named `credentials`. The table should have columns for `username` and `password`. You can use the following SQL query to create the table:

    ```sql
    CREATE TABLE credentials (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL
    );
    ```

4. Update the `config.php` file with your database credentials (hostname, username, password, database name).

5. Place the project files in the web server's document root directory.

6. Access the project via a web browser by navigating to `http://localhost/your-project-folder`.

## Usage
1. Open a web browser and navigate to the URL where the project is hosted.

2. You will be presented with a login page that replicates the Facebook login page.

3. Enter your credentials (username and password) and click the login button.

4. If the credentials are valid, you will be redirected to hacked.com.

## Disclaimer
This project is created for educational purposes only. It is not intended for real-world use and should not be used to perform any malicious activities. The redirection to hacked.com is a demonstration of how user credentials could be misused if
