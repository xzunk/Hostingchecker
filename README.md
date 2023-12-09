
# HostingChecker

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/xzunk/Hostingchecker/blob/main/LICENSE)
[![GitHub issues](https://img.shields.io/github/issues/xzunk/Hostingchecker)](https://github.com/xzunk/Hostingchecker/issues)
[![GitHub stars](https://img.shields.io/github/stars/xzunk/Hostingchecker)](https://github.com/xzunk/Hostingchecker/stargazers)
[![GitHub forks](https://img.shields.io/github/forks/xzunk/Hostingchecker)](https://github.com/xzunk/Hostingchecker/network)

Open Source Hosting and IP Checker written in PHP.

![HostingChecker Demo](demo.gif)

## Features

- Check hosting provider details.
- Retrieve IP information.
- Easy to use API.

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/xzunk/Hostingchecker.git
    ```

2. Navigate to the project directory:

    ```bash
    cd Hostingchecker
    ```

3. Install dependencies:

    ```bash
    composer install
    ```

4. Copy the configuration file:

    ```bash
    cp .env.example .env
    ```

5. Configure your database and other settings in the `.env` file.

6. Run migrations:

    ```bash
    php artisan migrate
    ```

7. Start the development server:

    ```bash
    php artisan serve
    ```

8. Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Self-Hosting Guide

If you wish to host HostingChecker on your own server, follow the steps below:

1. **Requirements:**
    - PHP >= 7.3
    - Composer
    - Database (e.g., MySQL, PostgreSQL)

2. **Clone the repository:**

    ```bash
    git clone https://github.com/xzunk/Hostingchecker.git
    ```

3. **Navigate to the project directory:**

    ```bash
    cd Hostingchecker
    ```

4. **Install dependencies:**

    ```bash
    composer install
    ```

5. **Copy the configuration file:**

    ```bash
    cp .env.example .env
    ```

6. **Configure your database and other settings in the `.env` file.**

7. **Run migrations:**

    ```bash
    php artisan migrate
    ```

8. **Start the web server:**

    ```bash
    php artisan serve
    ```

9. **Visit your server's URL in your browser.**

10. **You're all set! HostingChecker is now running on your server.**

## Contribution

Contributions are welcome! Please check the [contribution guidelines](CONTRIBUTING.md).

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

Feel free to customize the README further based on the specific features and details of your project. Good luck with your Open Source Hosting and IP Checker!
