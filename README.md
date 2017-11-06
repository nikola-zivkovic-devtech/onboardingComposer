# onboardingComposer


Steps to run the app:
- In application root folder run the following command:
    composer install
- Run PHP built-in server with following command:
    php -S localhost:1991 -t public/
- Open localhost:1991 in your browser.

Supported routes:
/
/index
/hello/{name}
/store/{item}