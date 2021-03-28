<?php
// require_once __DIR__ . DIRECTORY_SEPARATOR . '../mus_paths.php';
// require_once $f['SqlFunctions.php'];
// dbg($fun);
// $d = array();
// $f = array();
// $paths_json = json_decode(file_get_contents('paths.json'));
// $paths_json = get_object_vars($paths_json);
// $d = $paths_json['d'];
// $f = $paths_json['f'];
// dbg($d);



$site_name = 'php-gui';
$home = __DIR__ . DIRECTORY_SEPARATOR . '../' . $site_name;


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////directory////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$d['home'] = $home;


$d['themes']                                = $d['home'] . '/themes';

    $d['default_theme']                                   = $d['themes'] . '/default_theme';

        $d['css']                                             = $d['default_theme'] . '/css';
        $d['js']                                              = $d['default_theme'] . '/js';
        $d['html_elem']                                       = $d['default_theme'] . '/html_elem';
        $d['tpl']                                             = $d['default_theme'] . '/tpl';

    $d['third_party_libs']                                = $d['themes'] . '/third_party_libs';

        $d['bootstrap-5.0.0-beta2']                                = $d['third_party_libs'] . '/bootstrap-5.0.0-beta2';

            $d['dist']                                                   = $d['bootstrap-5.0.0-beta2'] . '/dist';

        $d['bootstrap-5.0.0-beta2-examples']                       = $d['third_party_libs'] . '/bootstrap-5.0.0-beta2-examples';
 






$d['Letters'] = __DIR__ . DIRECTORY_SEPARATOR . '../mus_GuestPost/Letters';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////files////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// $f['bootstrap.min.css'] = $d['cdns'] . '/bootstrap.min.css';

// $f['CommonTraits.php']           = $d['classes'] . '/CommonTraits.php';
// $f['Mails_Generator.php']          = $d['classes'] . '/mails_generator/Mails_Generator.php';
// $f['PhpMyAdmin.php']             = $d['classes'] . '/php_my_admin/PhpMyAdmin.php';
// $f['PhpMyAdminTraits.php']       = $d['classes'] . '/php_my_admin/PhpMyAdminTraits.php';
// $f['SqlInputTraits.php']         = $d['classes'] . '/sql_input/SqlInputTraits.php';
// $f['SqlTraits.php']              = $d['classes'] . '/sql/SqlTraits.php';
// $f['SqlOutput.php']              = $d['classes'] . '/sql_output/SqlOutput.php';
// $f['SqlOutputTraits.php']        = $d['classes'] . '/sql_output/SqlOutputTraits.php';

// $f['functions.php']                           = $d['functions'] . '/functions.php';
// $f['SqlFunctions.php']                        = $d['functions'] . '/SqlFunctions.php';
// $f['ArrayFunctions.php']                      = $d['functions'] . '/ArrayFunctions.php';
// $f['EmailFunctions.php']                      = $d['functions'] . '/EmailFunctions.php';
// $f['FileFunctions.php']                       = $d['functions'] . '/FileFunctions.php';
// $f['FormatFunctions.php']                     = $d['functions'] . '/FormatFunctions.php';
// $f['FrontEndElementFunctions.php']            = $d['functions'] . '/FrontEndElementFunctions.php';
// $f['ImapFunctions.php']                       = $d['functions'] . '/ImapFunctions.php';
// $f['SiteStateCheckerFunctions.php']           = $d['functions'] . '/SiteStateCheckerFunctions.php';
// $f['StringFunctions.php']                     = $d['functions'] . '/StringFunctions.php';
// $f['TaskFunctions.php']                       = $d['functions'] . '/TaskFunctions.php';
// $f['UrlsFunctions.php']                       = $d['functions'] . '/UrlsFunctions.php';










// function l(string $path): string
// {
//     $replace = 'localhost/' . $GLOBALS['site_name'];
//     return 'http://' . str_ireplace($GLOBALS['home'], $replace, $path);
// }
// function tpl()
// {
//     $d = $GLOBALS['d'];
//     $f = basename($_SERVER["SCRIPT_FILENAME"], '.php');
//     $tpl = $d['theme'] . '/tpl/' . $f . '.tpl';
//     if (file_exists($tpl)) {
//        return $tpl;
//     } 
//     else {
//         file_put_contents($tpl, '');
//         return $tpl;
//     }
// }
// function ajax()
// {
//     $d = $GLOBALS['d'];
//     $f = basename($_SERVER["SCRIPT_FILENAME"], '.php');
//     $n = str_ireplace('-','_',basename($_SERVER["SCRIPT_FILENAME"], '.php'));
//     $ajax = $d['ajax_files'] . '/' . $n . '.php';
//     if (file_exists($ajax)) {
//        return $ajax;
//     } 
//     else {
//         file_put_contents($ajax, '');
//         return $ajax;
//     }
// }
// function js()
// {
//     $d = $GLOBALS['d'];
//     $js = $d['js'] . '/' . basename($_SERVER["SCRIPT_FILENAME"], '.php') . '.js';
//     if (file_exists($js)) {
//        echo '<script src="'.l($js).'"></script>';
//     } 
//     else {
//         file_put_contents($js, '');
//        echo '<link rel="stylesheet" href="'.l($js).'">';
//     }
// }
// function css()
// {
//     $d = $GLOBALS['d'];

//     $site_name = $GLOBALS['site_name'];

//     $css = $d['css'] . '/' . basename($_SERVER["SCRIPT_FILENAME"], '.php') . '.css';
//     // dbg($css);
//     if (file_exists($css)) {
//        echo '<link rel="stylesheet" href="'.l($css).'">';
//     } 
//     else {
//         // $css = explode($site_name, $css);
//         // $css = $site_name . $css[1];
//         // dbg($css);
//     //     $my_file = fopen($css, "w");
//     //     fwrite($my_file, '/MUHAMMAD USMAN SARWAR/');
//     //     fclose($my_file);
//     //    echo '<link rel="stylesheet" href="'.l($css).'">';
//     }
// }

// css();




