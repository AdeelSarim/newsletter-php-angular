# Laravel API

*****
## Contents

- [Assumptions](#assumptions)
- [Dependencies](#dependencies)
- [Project Setup](#project-setup)

## Assumptions

- Authentication and Authorization are not required
- Bank names are unique
- Account names inside a bank are unique
- Inter bank transactions are not allowed
- Date field in transaction cannot be in the past
- Transactions can records with date in future will be marked pending and processed on their respective dates.
- Only non duplicate transactions with dates in future can be updated
- Bank can also be sender or recepient of transaction depicting cash deposits, service charges and other deductions
- Effects of duplicate marked transactions are reverted if it was processed previously.
- System should not allow updation of duplicate records.

## Dependencies

- Laravel Framework 9.31.0
- PHP 8.1.10
- PostgreSQL 14


## Setting up the development environment

1.  Get the code. Clone this git repository and check out the latest release:

    ```bash
    git clone repo
    cd project
    ```

2.  Install the required dependencies by running the following command in the project root directory:

    ```bash
    composer install
    ```

3.  Update `env` variables

4.  Add your database configuration details to `env`. You will probably only need to fill in the password for the database(s).

Example config:

      DATABASE_NAME: ""
      DATABASE_USERNAME: ""
      DATABASE_PASSWORD: ""
      DATABASE_HOST: ""

5.  Add your Mail configuration details to `env`.

    MAIL_USERNAME= "Your email"
    MAIL_PASSWORD= "Your password"

7.  Run server:

    `php artisan serve`

8.  Visit `http://127.0.0.1:8000/newsletter/` to receive a list of json api       response from the database.
