<?php /* Smarty version 2.6.25, created on 2015-04-17 11:29:39
         compiled from user/sgk_data.tpl */ ?>
<!DOCTYPE html>
<html>

<head>
    <title>
        <?php echo $this->_tpl_vars['title']; ?>

    </title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />-->
    <link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/style.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" />
    <script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/jquery-ui.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/bootstrap.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/raphael.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/selectivizr-min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/jquery.mousewheel.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/jquery.vmap.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/jquery.vmap.world.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/fullcalendar.min.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/gcal.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/jquery.dataTables.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/datatable-editable.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/excanvas.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/jquery.isotope.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/isotope_extras.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/modernizr.custom.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/jquery.fancybox.pack.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/select2.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/styleswitcher.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/wysiwyg.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/summernote.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/jquery.inputmask.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/jquery.validate.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/bootstrap-fileupload.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/bootstrap-datepicker.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/bootstrap-timepicker.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/bootstrap-colorpicker.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/bootstrap-switch.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/typeahead.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/daterange-picker.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/date.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/morris.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/skycons.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/fitvids.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/jquery.sparkline.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/main.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/respond.js" type="text/javascript"></script>
</head>
<body style="padding-top:0px">

<div class="col-lg-12">
    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="icon-table"></i>本次查询到:<?php echo $this->_tpl_vars['num']; ?>
条数据
        </div>
        <div class="widget-content padded clearfix">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" align="center" id="data">
                    <thead>
                    <th>
                        用户名
                    </th>
                    <th>
                        密码
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        来源
                    </th>
                    <th>
                        其他
                    </th>
                    </thead>
                    <tbody >
                    <?php unset($this->_sections['key']);
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['datas']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['show'] = true;
$this->_sections['key']['max'] = $this->_sections['key']['loop'];
$this->_sections['key']['step'] = 1;
$this->_sections['key']['start'] = $this->_sections['key']['step'] > 0 ? 0 : $this->_sections['key']['loop']-1;
if ($this->_sections['key']['show']) {
    $this->_sections['key']['total'] = $this->_sections['key']['loop'];
    if ($this->_sections['key']['total'] == 0)
        $this->_sections['key']['show'] = false;
} else
    $this->_sections['key']['total'] = 0;
if ($this->_sections['key']['show']):

            for ($this->_sections['key']['index'] = $this->_sections['key']['start'], $this->_sections['key']['iteration'] = 1;
                 $this->_sections['key']['iteration'] <= $this->_sections['key']['total'];
                 $this->_sections['key']['index'] += $this->_sections['key']['step'], $this->_sections['key']['iteration']++):
$this->_sections['key']['rownum'] = $this->_sections['key']['iteration'];
$this->_sections['key']['index_prev'] = $this->_sections['key']['index'] - $this->_sections['key']['step'];
$this->_sections['key']['index_next'] = $this->_sections['key']['index'] + $this->_sections['key']['step'];
$this->_sections['key']['first']      = ($this->_sections['key']['iteration'] == 1);
$this->_sections['key']['last']       = ($this->_sections['key']['iteration'] == $this->_sections['key']['total']);
?>
                    <tr align="center">
                        <td class="col-md-1" >
                        <?php echo $this->_tpl_vars['datas'][$this->_sections['key']['index']]['username']; ?>

                        </td>
                        <td class="col-md-2" >
                        <?php echo $this->_tpl_vars['datas'][$this->_sections['key']['index']]['password']; ?>

                        </td>
                        <td class="col-md-2" >
                        <?php echo $this->_tpl_vars['datas'][$this->_sections['key']['index']]['email']; ?>

                        </td>
                        <td class="col-md-2" >
                            <?php echo $this->_tpl_vars['datas'][$this->_sections['key']['index']]['source']; ?>

                        </td>
                        <td class="col-md-7" >
                        <?php echo $this->_tpl_vars['datas'][$this->_sections['key']['index']]['others']; ?>

                        </td>
                    </tr>
                    <?php endfor; endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</body>
<html>