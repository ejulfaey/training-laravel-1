* # ToDo Application
    * List All Todo(s)
    * Create New Todo
    * Update Todo
    * Delete Todo
    * Count Todo based on status
* ## Steps to clone the project.
    ##### 1. Make sure you have installed Laravel dependency.
    ##### 2. Open your terminal or command prompt, then copy/paste the command given:
    * `git clone https://github.com/ejulfaey/training-laravel-1.git`
    * `cd training-laravel-1`
    * `composer install`
    ##### 3. Database Connection
    * Create new file at the root project and name it as `.env`
    * Copy content from `.env.example` and paste it into `.env`
    * Configure your database credential: `DB_DATABASE, DB_USERNAME, DB_PASSWORD`
    * Run migration `php artisan migrate`
    ##### 4. Generate Application Key
    * `php artisan key:generate`
    ##### 5. Serve your application
    * `php artisan serve`   
