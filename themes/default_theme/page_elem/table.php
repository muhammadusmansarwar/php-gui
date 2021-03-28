
<?php
echo '<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="" />
<meta name="author" content="Muhammad Usman Sarwar" />
<title>Dashboard</title>

<!-- Bootstrap core CSS -->
<link href="http://localhost/php-gui/themes/third_party_libs/bootstrap-5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />

<!-- Bootstrap core js -->
<script src="http://localhost/php-gui/themes/third_party_libs/bootstrap-5.0.0-beta2/dist/js/bootstrap.min.js"></script>



<!-- main css -->
<link href="http://localhost/php-gui/themes/default_theme/css/main.css" rel="stylesheet" />
<link href="http://localhost/php-gui/themes/default_theme/css/icons.css" rel="stylesheet" />
<!-- main js -->
<script src="http://localhost/php-gui/themes/default_theme/js/main.js"></script>

</head>

<body style="background-color: #f1f4f6;">';

require_once __DIR__ . DIRECTORY_SEPARATOR . '../../../paths.php';
// $array = senders();

class _Table
{
    public array $table_data;

    public array $table_classes = array('table', 'table-striped', 'table-sm');

    public string $table_id = 'table_id';

    public array $thead_classes = array('table', 'table-striped', 'table-sm');

    public string $thead_id = 'table_id';

    public array $thead_tr_classes = array();

    public string $thead_tr_id = '';

    public array $th = array();

    public array $th_classes = array();

    public string $th_id = '';







    public function __construct($table_data = array())
    {
        if (!empty($table_data) && is_array($table_data)) {
            $this->table_data = $table_data;
        } else {
            $this->__destruct();
        }
    }


    public function getClasses(string $tag): array
    {
        if (strpos($tag, ' class=') !== false) {
            $tag = str_ireplace("'", '"', $tag);
            $tag = trim(stristr(str_ireplace(' class="', '', stristr($tag, ' class="')), '"', true));
            return explode(' ', $tag);
        }

        return array();
    }



    public function addClasses(string $tag_name = '', $class = array()): string
    {

        if (empty($class) || empty($tag_name)) {
            return '';
        }

        $class = is_array($class) ? implode(' ', $class) : $class;

        if (!empty($class)) {
            return '<' . $tag_name . ' class="' . $class . '">';
        }
        return '<' . $tag_name . '>';
    }

    public function tableStart()
    {
        $id = '<table id="' . $this->table_id . '"';
        return str_ireplace('<table', $id, $this->addClasses('table', $this->table_classes)) . PHP_EOL;
    }

    public function theadStart()
    {
        $id = empty($this->thead_id) ? '<thead' : '<thead id="' . $this->thead_id . '"';
        return str_ireplace('<thead', $id, $this->addClasses('thead', $this->thead_classes)) . PHP_EOL;
    }

    public function theadTrStart()
    {
        $id = empty($this->thead_tr_id) ? '<tr' : '<tr id="' . $this->thead_tr_id . '"';
        return str_ireplace('<tr', $id, $this->addClasses('tr', $this->thead_tr_classes)) . PHP_EOL;
    }
    public function th()
    {
        if (!empty($this->th)) {
            # code...
        }
    }
    public function tableOut(): string
    {

        return

            $this->tableStart() . PHP_EOL .
            $this->theadStart() . PHP_EOL .
            $this->theadTrStart() . PHP_EOL .

            '<th>dfdsfsfsdf</th></tr>' . PHP_EOL .
            '</thead>' . PHP_EOL .
            '</table>';




        return '';
    }


    public function __destruct()
    {
        return false;
    }
}
dbg($array);

$t = new _Table($array);
$t->thead_id = 'thead_id';
dbg($t->tableOut());



dbg($array);
