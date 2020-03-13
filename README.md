# symfony5

## What is it?

Bare bones Symfony 5.0.5 installation with docker environment for testing.

Docker containers:

* symfony5_web_1 - nginx 1.10 web server
* symfony5_php - PHP FPM 7.4
* symfony5_database_1 - MySQL 5.7 database server

## Installation

1. Pull repository:

`git clone git@github.com:gn-mwheeldon/symfony5.git`

2. Copy the *.env.dist* file to *.env* in the root folder. This .env files can be edited to suit your environment, though the default settings should suffice.

3. Run `make dev-run` to bring up the containers. If there are port conflict errors, edit the appropriate settings in your root-level *.env* file and try again.

4. Execute `make dev-sh` to shell into the PHP container and run `composer install` within the */var/www* folder. Use `exit` to exit the container shell.

## Usage

In your browser enter:
 
`http://localhost:8005/`

or
 
`http://localhost:8005/questions/are-we-up-and-running`

##Notes

* Only one extra package is installed - sec-check (sensiolabs/security-checker). No Twig, no Doctrine etc.

* MySQL docker is created for convenience but not plumbed in in anyway (no Doctrine).

* Annotations are provided on the example QuestionController actions for documentation ONLY. Annotations are NOT loaded and routing is defined in routes.yaml.



