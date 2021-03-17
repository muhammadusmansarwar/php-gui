    <!-- Bootstrap core CSS -->
    <link href="http://localhost/php-gui/themes/third_party_libs/bootstrap-5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap core js -->
    <link href="http://localhost/php-gui/themes/third_party_libs/bootstrap-5.0.0-beta2/dist/js/bootstrap.min.js" rel="stylesheet" />

    <!-- font awesome core CSS -->
    <link href="http://localhost/php-gui/themes/third_party_libs/fontawesome/css/all.css" rel="stylesheet" />
    <!-- font awesome core js -->
    <link href="http://localhost/php-gui/themes/third_party_libs/fontawesome/js/all.js" rel="stylesheet" />

    <!-- main css -->
    <link href="http://localhost/php-gui/themes/default_theme/css/main.css" rel="stylesheet" />
    <!-- main js -->
    <link href="http://localhost/php-gui/themes/default_theme/js/main.js" rel="stylesheet" />
<?php

class _table_
{
    public array $table_data;
    public string $th;

    public array $div_classes = array('table_class');

    public array $table_classes = array('table','table-striped','table-sm');
    public array $thead_classes = array('','');
    public array $thead_tr_classes = array('','');
    public array $th_classes = array('sf','dsfdsf');
    public array $tbody_classes = array('','');
    public array $tr_classes = array('','');
    public array $td_classes = array('','');

    public string $div_id = 'div_iddskdsl';

    public string $table_id = 'table_idskfj';
    public string $thead_id = 'asd';
    public string $thead_tr_id = 'asdasd';
    public string $th_id = 'asdasd';
    public string $tbody_id = 'asdasd';
    public string $tr_id = 'asdasdasd';
    public string $td_id = '';

    public function __construct($table_data = array())
    {
    }
    public function th(array $th = array()) : array
    {   
        
        foreach ($th as $k => $v) {
            $this->th .= '<th>' . $v . '</th>' . PHP_EOL;
        }


        return array();
    }

    public function tableOut(array $table_data = array()) : string
    {
        return '
        <div class="'.implode(' ', $this->div_classes).'" id="'.$this->div_id.'">
                        <table class="'.implode(' ', $this->table_classes).'" id="'.$this->table_id.'">
                            <thead class="'.implode(' ', $this->thead_classes).'" id="'.$this->thead_id.'">
                                <tr class="'.implode(' ', $this->thead_tr_classes).'" id="'.$this->thead_tr_id.'">
                                    <th>#</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1,001</td>
                                    <td>random</td>
                                    <td>data</td>
                                    <td>placeholder</td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>placeholder</td>
                                    <td>irrelevant</td>
                                    <td>visual</td>
                                    <td>layout</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>data</td>
                                    <td>rich</td>
                                    <td>dashboard</td>
                                    <td>tabular</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>information</td>
                                    <td>placeholder</td>
                                    <td>illustrative</td>
                                    <td>data</td>
                                </tr>
                                <tr>
                                    <td>1,004</td>
                                    <td>text</td>
                                    <td>random</td>
                                    <td>layout</td>
                                    <td>dashboard</td>
                                </tr>
                                <tr>
                                    <td>1,005</td>
                                    <td>dashboard</td>
                                    <td>irrelevant</td>
                                    <td>text</td>
                                    <td>placeholder</td>
                                </tr>
                                <tr>
                                    <td>1,006</td>
                                    <td>dashboard</td>
                                    <td>illustrative</td>
                                    <td>rich</td>
                                    <td>data</td>
                                </tr>
                                <tr>
                                    <td>1,007</td>
                                    <td>placeholder</td>
                                    <td>tabular</td>
                                    <td>information</td>
                                    <td>irrelevant</td>
                                </tr>
                                <tr>
                                    <td>1,008</td>
                                    <td>random</td>
                                    <td>data</td>
                                    <td>placeholder</td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>1,009</td>
                                    <td>placeholder</td>
                                    <td>irrelevant</td>
                                    <td>visual</td>
                                    <td>layout</td>
                                </tr>
                                <tr>
                                    <td>1,010</td>
                                    <td>data</td>
                                    <td>rich</td>
                                    <td>dashboard</td>
                                    <td>tabular</td>
                                </tr>
                                <tr>
                                    <td>1,011</td>
                                    <td>information</td>
                                    <td>placeholder</td>
                                    <td>illustrative</td>
                                    <td>data</td>
                                </tr>
                                <tr>
                                    <td>1,012</td>
                                    <td>text</td>
                                    <td>placeholder</td>
                                    <td>layout</td>
                                    <td>dashboard</td>
                                </tr>
                                <tr>
                                    <td>1,013</td>
                                    <td>dashboard</td>
                                    <td>irrelevant</td>
                                    <td>text</td>
                                    <td>visual</td>
                                </tr>
                                <tr>
                                    <td>1,014</td>
                                    <td>dashboard</td>
                                    <td>illustrative</td>
                                    <td>rich</td>
                                    <td>data</td>
                                </tr>
                                <tr>
                                    <td>1,015</td>
                                    <td>random</td>
                                    <td>tabular</td>
                                    <td>information</td>
                                    <td>text</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
        ';
    }
}

$th = array('Id', 'head-1','head-1','head-1','head-1');





$t = new _table_();
// array_push($t->table_classes, 'table-dark');
echo $t->tableOut();
// unset($t->table_classes, [$c1, $c2]);
$t->table_classes = array('table','table-striped','table-sm');
echo $t->tableOut();


