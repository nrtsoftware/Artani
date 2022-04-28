<?php

// Working basics
const BASE_DIR = __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR ;
const CONFIG_DIR = BASE_DIR.'config'.DIRECTORY_SEPARATOR;
const VENDOR_DIR = BASE_DIR.'vendor'.DIRECTORY_SEPARATOR;
const PUBLIC_DIR = BASE_DIR.'public'.DIRECTORY_SEPARATOR;
const CSS_DIR = PUBLIC_DIR.'css'.DIRECTORY_SEPARATOR;
const JS_DIR = PUBLIC_DIR.'js'.DIRECTORY_SEPARATOR;
const VIEWS_DIR = BASE_DIR.'views'.DIRECTORY_SEPARATOR;

require_once CONFIG_DIR.'helper'.DIRECTORY_SEPARATOR.'searchFile.php';
require_once searchFile(CONFIG_DIR, 'Shortcut.php');

// HTML SECTION
const HTML_LANGUAGE = 'pt-BR';
const VIEW_PORT = 'width=device-width,initial-scale=1.0';
const HTML_SHORTCUT = [PUBLIC_DIR, 'icon1.ico'];  //File dir, file.ext