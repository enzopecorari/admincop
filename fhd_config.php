<?php
/* The base configurations of Free AdminCop.
/** The name of the database - create this first*/
define('db_name', 'tableroh_freehelpdesk');

/** MySQL database username */
define('db_user', 'tableroh_123');

/** MySQL database password */
define('db_password', '123qwe');

/** MySQL hostname */
define('db_host', 'localhost');

/** adjust the time display in hours */
define('FHD_TIMEADJUST', '-3');

/** Set an AUTH KEY for security.*/
define('AUTH_KEY','mkt');

/** Set how many login tries (session only)*/
define('LOGIN_TRIES',100);

/** email address to send new Cop and registration notices FROM, etc  */
define('FROM_EMAIL','enzopecorari@gmail.com');

/** email address to send new Cop and registration notices TO, etc  */
define('TO_EMAIL','enzopecorari@gmail.com');

/** Allow registrations yes or no */
define('ALLOW_REGISTER','yes');

/** Use CAPTCHA with registration? yes or no */
define('CAPTCHA_REGISTER','yes');

/** Use CAPTCHA with the forgot password form? yes or no */
define('CAPTCHA_RESET_PASSWORD','yes');

/** All registrations need to be approved by admin yes or no */
define('REGISTER_APPROVAL','yes');

/** Allow unregistered users to submit requests yes/no  */
define('ALLOW_ANY_ADD','no');

/** Enter the organization title **/
define('FHD_TITLE', "AdminCop");

/** Allow Uploads ** yes or no */
define('FHD_UPLOAD_ALLOW', "yes");
define('UPLOAD_KEY','mkt');
//SET WHAT FILE EXTENSIONS ARE ALLOWED TO BE UPLOADED (comma seperated list "txt","pdf")
$allowedExts = array("jpg","jpeg","gif","png","doc","docx","wpd","xls","xlsx","pdf","txt","pps","pptx","pub");

/** Bootswatch THEME (bootswatch.com) **/
//un-comment only one line (remove the // in front to set the theme)
//define('css', 'css/bootstrap.min.css');
//define('css', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css');
//define('css', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/amelia/bootstrap.min.css');
define('css', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/cerulean/bootstrap.min.css');
//define('css', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/cosmo/bootstrap.min.css');
//define('css', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/cyborg/bootstrap.min.css');
//define('css', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css');
//define('css', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/journal/bootstrap.min.css');
//define('css', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/lumen/bootstrap.min.css');
//define('css', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css');
//define('css', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/lumen/bootstrap.min.css');
//define('css', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/simplexbootstrap.min.css');
//define('css', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/slate/bootstrap.min.css');
//define('css', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/spacelab/bootstrap.min.css');
//define('css', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/superhero/bootstrap.min.css');
//define('css', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/united/bootstrap.min.css');
//define('css', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/yeti/bootstrap.min.css');