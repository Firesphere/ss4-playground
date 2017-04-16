<?php

global $project;
use SilverStripe\i18n\i18n;
use SilverStripe\ORM\Connect\Database;

$project = 'mysite';

require_once('conf/ConfigureFromEnv.php');
Database::setLogQueriesToFile('/data/logs/queries.log');
// Set the site locale
i18n::set_locale('en_US');