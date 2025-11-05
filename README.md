# clciker-2.0

Simple PHP web project (small clicker-style app). This repository contains a minimal PHP frontend and a small backend helper file for database access.

## What this is

- A lightweight PHP-based project with a handful of files: `index.php`, `index.js`, `index.css`, `login.php`, and `database.php`.
- Intended to be run on a local PHP-enabled environment (LAMP/LEMP or PHP built-in server).

---

## Requirements

    PHP 8.x (or PHP 7.4+) installed
    A web server (Apache/Nginx) with PHP, or use PHP's built-in server for development
    (Optional) MySQL / MariaDB if database.php expects a DB connection
    (Optional) Docker

    Note: Docker installs all of the requirements needed will be installed by the docker image
## Quick start (development)

1. Open a terminal at the project root (where this README lives).
2. Start the built-in PHP server:

```bash
php -S localhost:8000 -t .
```

3. Open http://localhost:8000 in your browser.

If the project requires a database, create the database and update `database.php` with your connection settings.

## Files overview

- `index.php` — Main entry point for the application.
- `index.js` — Client-side JavaScript.
- `index.css` — Styles for the frontend.
- `login.php` — Login handling and authentication UI (server-side).
- `database.php` — Database connection/config helper. Inspect it and set credentials as needed.

## Database

1.The mysql sever is istalled with the docker image and creates the table for what you need to get up and runing

Note: This feture is under devolment so somestuff my not work

## Security notes

- Do not commit sensitive credentials (passwords, API keys). Use environment variables or a config file excluded from version control for production.
- Ensure `database.php` never contains plaintext secrets in public repos.

## Contributing

1. Fork the repo.
2. Create a branch for your feature/fix: `git checkout -b my-feature`.
3. Commit and open a pull request against `main`.

## Suggested git commands

After verifying the README locally, you can run:

```bash
git add README.md
git commit -m "Add README"
git push origin main
```

## License

Add a license file if you want to make the project open source. If unsure, add `LICENSE` with the license of your choice (MIT, Apache-2.0, etc.).

## Notes / assumptions

- I assumed this is a small PHP app that can be run with the PHP built-in server for local development.
- If you want a more detailed README (screenshots, API reference, DB schema, tests, CI), tell me which pieces to add and I will extend it.

---

## Docker

This project includes a Dockerfile, .dockerignore and a docker-compose.yml under the `docker/` folder. Quick commands to build and run.

Build image from project root (uses docker/Dockerfile and project root as build context):
```bash
docker build -t clciker-2.0:latest -f docker/Dockerfile .
```

Run a container from the image:
```bash
docker run --rm -it -p 8080:80 -v "$(pwd)":/var/www/html clciker-2.0:latest
```

Start using docker-compose (recommended for development):
```bash
docker compose -f docker/docker-compose.yml up --build -d
# stop
docker compose -f docker/docker-compose.yml down
```

Open in host browser:
```bash
"$BROWSER" http://localhost:8080
```

Notes:
- Dockerfile: `docker/Dockerfile` uses `php:8.2-apache` and exposes port 80.
- Compose maps host port 8080 to container port 80 and mounts the repository into `/var/www/html`.
- .dockerignore: `docker/.dockerignore` excludes .git, node_modules, vendor, dist and other build artifacts.
- Adjust ports or mount options in `docker/docker-compose.yml` as required.
