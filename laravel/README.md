# Laravel API

*****
## Contents

- [Assumptions](#assumptions)
- [Dependencies](#dependencies)
- [Project Setup](#project-setup)

## Assumptions

- Email field completed in a form on the page is submitted to backend
- The email address is added to a newsletter recipients table
- Dispatch an event for when the newsletter is added
- Queue up a job that is responsible for sending the newsletter email to the given email address using a listener

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
