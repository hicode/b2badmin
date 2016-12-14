<?php

class Metronic362CCustomHelperInnerPageHelperDataTableAjax extends \Phalcon\Tag {

    

    public static function Get_Page_DataTableAjax() {
        $di = \Phalcon\DI::getDefault();
        $ret = '<div class="row">
    <div class="col-md-12">
        <!--        <div class="note note-danger">
                    <p>
                        NOTE: The below datatable is not connected to a real database so the filter and sorting is just simulated for demo purposes only.
                    </p>
                </div>-->
        <!-- Begin: life time stats -->
        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <script>
                        /*function bootstrap_confirmation() {
                         //alert("yes");
                         $(\'[data-toggle="confirmation"]\').confirmation();
                         //$(\'[data-toggle="confirmation-singleton"]\').confirmation({
                         //    singleton: true
                         //});
                         //$(\'[data-toggle="confirmation-popout"]\').confirmation({
                         //    popout: true
                         //});
                         }*/
                    </script>
                    <div id="bootstrap_alert">
                    </div>
                    <i class="fa fa-table"></i>' . $di->controller_params_array[CHCrmCParams::$keyarrDataTableAjax]['table_title'] . '
                </div>
                
                                  



                    ' . self::Get_Actions() . '
                
            </div>
            <div class="portlet-body">
                <div class="table-container">
                    <div class="table-actions-wrapper">
                        <span>
                        </span>
                        <select class="table-group-action-input form-control input-inline input-small input-sm">
                            <option value="">Select...</option>
                            <option value="Cancel">Cancel</option>
                            <option value="Cancel">Hold</option>
                            <option value="Cancel">On Hold</option>
                            <option value="Close">Close</option>
                        </select>
                        <button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="datatable_ajax">
                        <thead>
                            ' . self::Get_Table_Cols() . '
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End: life time stats -->
    </div>
</div>';
        return $ret;
    }

    private static function Get_Actions() {
        $ret = ' 
<div class="actions">'
                . self::Get_Actions_Button_New()
                . self::Get_Actions_Tools() . ' 
      
</div>';
        return $ret;
    }

    private static function Get_Actions_Button_New() {
        $di = \Phalcon\DI::getDefault();
        $ret = '';
        if ($di->controller_params_array[CHCrmCParams::$keyarrDataTableAjax]['Button_New']['blshow'] === AGCHParams::$Static_Bl_True) {
            $url_new_record = '/b2b/' . $di->controller_params_array['lng'] . '/admin/dynhelperpage/';
            $url_new_record = $url_new_record . $di->controller_params_array[CHCrmCParams::$keyarrDataTableAjax]['Button_New']['url_new_record']['helperpage'] . '/'; //modal operations
            $url_new_record = $url_new_record . $di->controller_params_array[CHCrmCParams::$keyarrDataTableAjax]['Button_New']['url_new_record']['param1'] . '/'; //action add del etc
            $url_new_record = $url_new_record . $di->controller_params_array[CHCrmCParams::$keyarrDataTableAjax]['Button_New']['url_new_record']['param2'] . '/'; //static translates
            $url_new_record = $url_new_record . $di->controller_params_array[CHCrmCParams::$keyarrDataTableAjax]['Button_New']['url_new_record']['param3'] . '/'; //new rec identifier
            $ret = '
    <a href="' . $url_new_record . '" 
        data-target="#ajax-small-stack1" 
        data-toggle="modal"
        class="btn default yellow-stripe">
        <i class="fa fa-plus"></i>
        <span class="hidden-480">
            ' . $di->controller_params_array[CHCrmCParams::$keyarrDataTableAjax]['Button_New']['title'] . '
        </span>
    </a> ';
        }
        return $ret;
    }

    private static function Get_Actions_Tools() {
        $di = \Phalcon\DI::getDefault();
        $ret = '';
        if ($di->controller_params_array[CHCrmCParams::$keyarrDataTableAjax]['Actions_Tools']['blshow'] === AGCHParams::$Static_Bl_True) {
            $ret = '<div class="btn-group">
    <a class="btn default yellow-stripe" href="#" data-toggle="dropdown">
        <i class="fa fa-share"></i>
        <span class="hidden-480">
            Tools </span>
        <i class="fa fa-angle-down"></i>
    </a>
    <ul class="dropdown-menu pull-right">                            
        <li>
            <a href="#" class="export-to-csv">
                Export to CSV </a>
        </li>
        <li>
            <a href="#" class="export-to-excel">
                Export to Excel </a>
        </li>
        <li>
            <a href="#" class="export-to-pdf">
                Export to PDF </a>
        </li>
        <li class="divider">
        </li>
        <li>
            <a href="#">
                Print Tables </a>
        </li>
    </ul>
</div>';
        }
        return $ret;
    }

    private static function Get_Table_Cols() {
        $di = \Phalcon\DI::getDefault();
        $ret = '';
        $myaoColumns = '[';
        if ($di->controller_params_array[CHCrmCParams::$keyarrDataTableAjax]['Table_Cols']['blshow'] == AGCHParams::$Static_Bl_True) {
            $trheading = '<tr role="row" class="heading">';
            $trfilter = '<tr role="row" class="filter">';
            foreach ($di->controller_params_array[CHCrmCParams::$keyarrDataTableAjax]['cols'] as $key => $value) {
                $cellwidth = '';
                $celltitle = '';
                $cellclass = 'left';
                $cellsortable = 'true';
                if ($key === 'checkbox' && $value == AGCHParams::$Static_Bl_True) {
                    $trheading = $trheading . '<th width="2%"><input type="checkbox" class="group-checkable"></th>';
                    $trfilter = $trfilter . '<td></td>';
                    $cellwidth = '2%';
                    $celltitle = '<input type=\"checkbox\" class=\"group-checkable\">';
                    $cellclass = 'hcenter';
                    $cellsortable = 'false';
                } elseif ($key === 'idseq' && $value == AGCHParams::$Static_Bl_True) {
                    $trheading = $trheading . '<th width="1%">#</th>';
                    $trfilter = $trfilter . '<td></td>';
                    $cellwidth = '1%';
                    $celltitle = '#';
                    $cellclass = 'hcenter';
                    $cellsortable = 'false';
                } elseif ($key === 'expand' && $value == AGCHParams::$Static_Bl_True) {
                    $trheading = $trheading . '<th width="1%">#</th>';
                    $trfilter = $trfilter . '<td></td>';
                    $cellwidth = '1%';
                    $celltitle = '#';
                    $cellclass = 'hcenter';
                    $cellsortable = 'false';
                }elseif ($key === 'actions' && $value == AGCHParams::$Static_Bl_True) {
                    $trheading = $trheading . '<th width="1%">Actions</th>';
                    $trfilter = $trfilter . '
                        <td>
                            <div class="margin-bottom-5">
                                <button class="btn btn-sm yellow filter-submit margin-bottom">
                                    <i class="fa fa-search"></i> 
                                        Search
                                </button>
                            </div>
                            <button class="btn btn-sm red filter-cancel">
                                <i class="fa fa-times"></i> 
                                    Reset
                            </button>
                        </td>';
                    $cellwidth = '1%';
                    $celltitle = 'Actions';
                    $cellsortable = 'false';
                } else {
                    $trheading = $trheading . '<th width="' . (isset($value['heading']['width']) ? $value['heading']['width'] : '1%') . '">' . (isset($value['heading']['title']) ? $value['heading']['title'] : 'No title') . '</th>';
                    $cellwidth = (isset($value['heading']['width']) ? $value['heading']['width'] : '1%');
                    $celltitle = (isset($value['heading']['title']) ? $value['heading']['title'] : 'No title');
                    $cellsortable = (isset($value['heading']['sortable']) ? $value['heading']['sortable'] : $cellsortable);
                    if (isset($value['cells']) && isset($value['cells']['class'])) {
                        $cellclass = $value['cells']['class'];
                    }
                    $tmpcontent = (isset($value['filter']['content']) ? $value['filter']['content'] : '');
                    if (isset($value['filter']['type'])) {
                        $tmptype = $value['filter']['type'];
                        $searchkeyname = 'search-' . $key;
                        if ($tmptype === 'input') {
                            $tmpcontent = '<input type="text" class="form-control form-filter input-sm" name="' . $searchkeyname . '">';
                        } elseif ($tmptype === 'select') {
                            $tmpcontent = '<select class="form-control form-filter input-sm" name="' . $searchkeyname . '">';
                            foreach ($value['filter']['values'] as $key1 => $value1) {
                                $tmpcontent = $tmpcontent . '<option value="' . $key1 . '">' . $value1 . '</option>';
                            }
                            $tmpcontent = $tmpcontent . '</select>';
                        }
                    }
                    
                    $trfilter = $trfilter . '<td>' . $tmpcontent . '</td>';
                }
                $myaoColumns = $myaoColumns . '{ "bSortable": '.$cellsortable.',"sTitle": "' . $celltitle . '", "sClass": "' . $cellclass . '","sWidth": "' . $cellwidth . '" },';
            }
            $trheading = $trheading . '</tr>';
            $trfilter = $trfilter . '</tr>';
            $ret = $trheading . $trfilter;
        }
        $myaoColumns = substr($myaoColumns, 0, -1);
        $myaoColumns = $myaoColumns . ']';
        $di->controller_params_array[CHCrmCParams::$keyarrDataTableAjax]['myaoColumns'] = $myaoColumns;
        return $ret;
    }

}
