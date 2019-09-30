# templateshares-to-unit3d
An artisan package to import a templateshares database into UNIT3D.

## Install

Via Composer

```bash
$ composer require hdinnovations/templateshares-to-unit3d --dev
```

To install, just:
- Install this package from your [UNIT3D][unit3d] install using the command above.
- Create a new database in MySql and import you old Template Shares DB to it.

## Usage

For instructions on usage, run:

```bash
php artisan unit3d:from-templateshares --help
```

Example:
To import users only from your old Template Shares DB run:

```bash
php artisan unit3d:from-templateshares --database='Your DB Name HERE' --username='Your DB Username Here'
--password='Your DB Password Here
```
