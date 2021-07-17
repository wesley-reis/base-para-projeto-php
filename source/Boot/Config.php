<?php

/**
 * DATABASE
 */

if ($_SERVER['HTTP_HOST'] === "") {
    define("CONF_DB_HOST", "");
    define("CONF_DB_USER", "");
    define("CONF_DB_PASS", "");
    define("CONF_DB_NAME", "");
} else {
    define("CONF_DB_HOST", "");
    define("CONF_DB_USER", "");
    define("CONF_DB_PASS", "");
    define("CONF_DB_NAME", "");
}

/**
 * PROJECT URLs
 */
const CONF_URL_BASE = "";


/**
 * SITE
 */
const CONF_SITE_NAME = "";
const CONF_SITE_TITLE = "";
const CONF_SITE_DESC = "";
const CONF_SITE_LANG = "pt_BR";
const CONF_SITE_DOMAIN = "";
const CONF_SITE_ADDR_STREET = "";
const CONF_SITE_ADDR_NUMBER = "";
const CONF_SITE_ADDR_COMPLEMENT = "";
const CONF_SITE_ADDR_CITY = "";
const CONF_SITE_ADDR_STATE = "";
const CONF_SITE_ADDR_ZIPCODE = "";

/**
 * SOCIAL
 */
const CONF_SOCIAL_TWITTER_CREATOR = "@";
const CONF_SOCIAL_TWITTER_PUBLISHER = "@";
const CONF_SOCIAL_FACEBOOK_APP = "";
const CONF_SOCIAL_FACEBOOK_PAGE = "";
const CONF_SOCIAL_FACEBOOK_AUTHOR = "";

/**
 * DATES
 */
date_default_timezone_set("America/Sao_Paulo");
const CONF_DATE_BR = "d/m/Y H:i:s";
const CONF_DATE_APP = "Y-m-d H:i:s";

/**
 * PASSWORD
 */
const CONF_PASSWD_MIN_LEN = 4;
const CONF_PASSWD_MAX_LEN = 20;
const CONF_PASSWD_ALGO = PASSWORD_DEFAULT;
const CONF_PASSWD_OPTION = ["cost" => 10];


/**
 * VIEW
 */
const CONF_VIEW_PATH = __DIR__ . "/../../shared/views";
const CONF_VIEW_EXT = "php";
const CONF_VIEW_THEME = "";
const CONF_VIEW_APP = "";
const CONF_VIEW_ADMIN = "";

/**
 * UPLOAD
 */
const CONF_UPLOAD_DIR = "storage";
const CONF_UPLOAD_IMAGE_DIR = "images";
const CONF_UPLOAD_FILE_DIR = "files";
const CONF_UPLOAD_MEDIA_DIR = "medias";

/**
 * IMAGES
 */
const CONF_IMAGE_CACHE = CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache";
const CONF_IMAGE_SIZE = 2000;
const CONF_IMAGE_QUALITY = ["jpg" => 75, "png" => 5];

/**
 * MAIL
 */
const CONF_MAIL_HOST = "";
const CONF_MAIL_PORT = "";
const CONF_MAIL_USER = "apikey";
const CONF_MAIL_PASS = "";
const CONF_MAIL_SENDER = ["name" => "WRR-Developer", "address" => "wrrdeveloper@gmail.com"];
const CONF_MAIL_SUPPORT = "wrrdeveloper@gmail.com";
const CONF_MAIL_OPTION_LANG = "br";
const CONF_MAIL_OPTION_HTML = true;
const CONF_MAIL_OPTION_AUTH = true;
const CONF_MAIL_OPTION_SECURE = "tls";
const CONF_MAIL_OPTION_CHARSET = "utf-8";

