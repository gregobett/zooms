Step 1: Clone it

Step 2: Install Composer Dependencies
Just like with a regular Laravel project, navigate into the project directory and run the composer install command to install the PHP dependencies:

Step 3: Create a .env File
Copy the .env.example file to create a .env file:


Step 4: Generate an Application Key
Generate an application key using the following command: php artisan key:generate


Step 5: Set Up the Database
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password


Step 6: Run Migrations using the following command: php artisan migrate


Step 7: Install NPM Dependencies using the following command: npm install


Step 8: php artisan serve

Step 9: npm run dev




