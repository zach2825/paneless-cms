# Panel-less CMS

Panel-less CMS is a simple blog application built with Laravel. It allows for publishing blog articles by writing markdown files in GitHub markdown syntax, without the need for user logins or an admin panel.

## Features

- Simple and lightweight blog system.
- No user logins or admin panel required.
- Blog articles are written in GitHub markdown syntax.
- Easy to deploy and maintain.

## Links

- [LARAVEL.md](docs%2FLARAVEL.md)

## Installation

1. Clone the repository:

    ```shell
    git clone git@github.com:zach2825/paneless-cms.git
    ```

2. Navigate to the project directory:

    ```shell
    cd paneless-cms
    ```

3. Install dependencies:

    ```shell
    composer install
    yarn install
    ```

4. Set up your environment variables:

   Copy the `.env.example` file to a new file named `.env` and configure your environment variables, including your database connection.

5. Generate an application key:

    ```shell
    php artisan key:generate
    ```

6. Run migrations:

    ```shell
    php artisan migrate
    ```

7. Start the development server:

    ```shell
    php artisan serve
    ```

   Your blog is now accessible at `http://localhost:8000`.

## Writing Articles

To publish a new blog article, create a markdown file in the `resources[content](content)/posts` directory
(you may need to create this directory if it doesn't exist).
The filename should follow the format `YYYY-MM-DD-your-article-title.md`.

Example:

```shell
content/posts/2024-04-03-my-first-blog-post.md
```

But you can use the command

```shell
php artisan orbit:generate
```

## Contributing

Contributions are welcome! Please feel free to submit a pull request or create an issue if you have any suggestions or improvements.
