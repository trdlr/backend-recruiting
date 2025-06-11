Just run `php artisan test`. 

The first test will be failing. The goal of the exercise is to make it pass.
The second test will pass but because the code is hardcoded. If there's enough time to complete the first part, we will cover this one.

The goal of this excercise is to create a simple API-based script that imports a CSV file with some values, using the TDD (test-driven development) methodology. The first part of the exercise consists in creating the endpoint to read the file. And the second, optional part, consists in writing the code of another endpoint that returns some statistics based on the data that's been imported.

Relevant files:

- `metrics_data.csv` sample file that will be used during the exercise.
- `database/database.sqlite` we are using a SQLite DB for simplicity. If you open it, there's an extension letting you view the structure and contents of it.
- `routes/api.php` here you can see that there are routes for 2 endpoints already created. Just go to their corresponding controllers to start coding. The methods are almost empty inside.
- `tests/Feature/DataUploadTest.php` this is the first test that needs to pass. The test doesn't need to be edited. Just modify `app/Http/Controllers/DataUploadController.php` so that the test can pass. The test will truncate the DB tables in each execution, so there's no problem with duplicates if ran multiple times.
