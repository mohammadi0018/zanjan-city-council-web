# Zanjan City Council Website

Source code of a Persian RTL website developed for Zanjan City Council.

## Project overview

This repository contains the application source code, templates, stylesheets,
JavaScript files, visual assets, and required legacy libraries for the website.

### Main technologies

- PHP
- MySQL
- Smarty templating
- HTML/CSS
- JavaScript
- FCKeditor (legacy content-management component)

## Repository structure

- `application/` — application logic, pages, and views
- `+lib/` — framework/helper classes and libraries
- `css/` — stylesheets
- `js/` — JavaScript files
- `images/` — website visual assets
- `fckeditor/` — editor dependency used by the legacy admin interface
- `flash/` — legacy media assets

## Database setup

The production database and its contents are intentionally **not included** in this public repository.

For local development:

1. Copy `+lib/models/db/xdb.conf.php.example` to `+lib/models/db/xdb.conf.php`.
2. Replace the placeholder values with your own local MySQL credentials.
3. Import an appropriate local database schema/data if you have authorization to use it.
4. Do not commit `xdb.conf.php` or any SQL dump containing real data.

## Security / privacy

The original hosting archive contained cPanel backups, server configuration,
logs, mail data, database dumps, credentials, and user-uploaded files.
Those materials have deliberately been excluded from this repository.

This repository should contain source code only, not production credentials,
private user data, mailboxes, server backups, or private uploads.

## Notes

This is a legacy PHP codebase. The repository is intended primarily as a
portfolio and source-code reference. Before deploying it to a modern public
server, the application should be reviewed for current PHP compatibility,
authentication security, SQL injection risks, file-upload security, and
dependency security.

## Author

Mohammad Mohammadi
