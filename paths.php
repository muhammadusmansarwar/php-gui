<?php
$d = array();
$f = array();

$site_name = 'mus';
$home = __DIR__ . DIRECTORY_SEPARATOR . '../' . $site_name;


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////directory////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$d['home'] = $home;

$d['ajax_files'] = $d['home'] . '/ajax_files';
$d['cdns'] =       $d['home'] . '/cdns';
$d['classes'] =    $d['home'] . '/classes';
$d['functions']  = $d['home'] . '/functions';
$d['GuestPost']  = $d['home'] . '/GuestPost';
// echo '../mus_GuestPost/Letters';
$d['Letters'] = __DIR__ . DIRECTORY_SEPARATOR . '../mus_GuestPost/Letters';
$d['theme'] =      $d['home'] . '/theme';
$d['tools'] =      $d['home'] . '/tools';
$d['vendor'] =     $d['home'] . '/vendor';

$d['css'] =        $d['theme'] . '/css';
$d['js'] =         $d['theme'] . '/js';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////files////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$f['bootstrap.min.css'] = $d['cdns'] . '/bootstrap.min.css';

$f['CommonTraits.php']           = $d['classes'] . '/CommonTraits.php';
$f['Mails_Generator.php']          = $d['classes'] . '/mails_generator/Mails_Generator.php';
$f['PhpMyAdmin.php']             = $d['classes'] . '/php_my_admin/PhpMyAdmin.php';
$f['PhpMyAdminTraits.php']       = $d['classes'] . '/php_my_admin/PhpMyAdminTraits.php';
$f['SqlInputTraits.php']         = $d['classes'] . '/sql_input/SqlInputTraits.php';
$f['SqlTraits.php']              = $d['classes'] . '/sql/SqlTraits.php';
$f['SqlOutput.php']              = $d['classes'] . '/sql_output/SqlOutput.php';
$f['SqlOutputTraits.php']        = $d['classes'] . '/sql_output/SqlOutputTraits.php';

$f['functions.php']                           = $d['functions'] . '/functions.php';
$f['SqlFunctions.php']                        = $d['functions'] . '/SqlFunctions.php';
$f['ArrayFunctions.php']                      = $d['functions'] . '/ArrayFunctions.php';
$f['EmailFunctions.php']                      = $d['functions'] . '/EmailFunctions.php';
$f['FileFunctions.php']                       = $d['functions'] . '/FileFunctions.php';
$f['FormatFunctions.php']                     = $d['functions'] . '/FormatFunctions.php';
$f['FrontEndElementFunctions.php']            = $d['functions'] . '/FrontEndElementFunctions.php';
$f['ImapFunctions.php']                       = $d['functions'] . '/ImapFunctions.php';
$f['SiteStateCheckerFunctions.php']           = $d['functions'] . '/SiteStateCheckerFunctions.php';
$f['StringFunctions.php']                     = $d['functions'] . '/StringFunctions.php';
$f['TaskFunctions.php']                       = $d['functions'] . '/TaskFunctions.php';
$f['UrlsFunctions.php']                       = $d['functions'] . '/UrlsFunctions.php';










function l(string $path): string
{
    $replace = 'localhost/' . $GLOBALS['site_name'];
    return 'http://' . str_ireplace($GLOBALS['home'], $replace, $path);
}
function tpl()
{
    $d = $GLOBALS['d'];
    $f = basename($_SERVER["SCRIPT_FILENAME"], '.php');
    $tpl = $d['theme'] . '/tpl/' . $f . '.tpl';
    if (file_exists($tpl)) {
       return $tpl;
    } 
    else {
        file_put_contents($tpl, '');
        return $tpl;
    }
}
function ajax()
{
    $d = $GLOBALS['d'];
    $f = basename($_SERVER["SCRIPT_FILENAME"], '.php');
    $n = str_ireplace('-','_',basename($_SERVER["SCRIPT_FILENAME"], '.php'));
    $ajax = $d['ajax_files'] . '/' . $n . '.php';
    if (file_exists($ajax)) {
       return $ajax;
    } 
    else {
        file_put_contents($ajax, '');
        return $ajax;
    }
}
function js()
{
    $d = $GLOBALS['d'];
    $js = $d['js'] . '/' . basename($_SERVER["SCRIPT_FILENAME"], '.php') . '.js';
    if (file_exists($js)) {
       echo '<script src="'.l($js).'"></script>';
    } 
    else {
        file_put_contents($js, '');
       echo '<link rel="stylesheet" href="'.l($js).'">';
    }
}
function css()
{
    $d = $GLOBALS['d'];
    $css = $d['css'] . '/' . basename($_SERVER["SCRIPT_FILENAME"], '.php') . '.css';
    if (file_exists($css)) {
       echo '<link rel="stylesheet" href="'.l($css).'">';
    } 
    else {
        file_put_contents($css, '');
       echo '<link rel="stylesheet" href="'.l($css).'">';
    }
}






