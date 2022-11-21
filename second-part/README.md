PHP App
========

You need to have PHP-cli installed on your computer with composer.

1. Create a Symfony 4 project inside `new-symfony-app` folder

2. Create a single `ApiController` with one method that:

    1. will accept a JSON body request.
    2. will return `message` parameter from JSON request with cut string to only `hello`.

Below request and response that should be used:

JSON request

```json
{
  "message": "hello very long text"
}
```

JSON response

```json
{
  "message": "hello"
}
```