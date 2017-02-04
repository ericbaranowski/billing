<?php
/* Smarty version 3.1.29, created on 2016-12-19 03:12:48
  from "/home/billing/public_html/admin/templates/lara/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5857503097b0e0_60888678',
  'file_dependency' => 
  array (
    '1fd5a8641aa9b3950790c440029bbcfd4fb796d2' => 
    array (
      0 => '/home/billing/public_html/admin/templates/lara/header.tpl',
      1 => 1479234047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5857503097b0e0_60888678 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>WHMCS - <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
	
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/jquery.growl.css" rel="stylesheet" type="text/css">	
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/style.css?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/lightbox.css" rel="stylesheet" type="text/css">
	
	
	<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "home") {?>
	<link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/morris/morris.css?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
" rel="stylesheet" type="text/css" />
	<?php }?>
	
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery-ui.min.js"><?php echo '</script'; ?>
>
	
	<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "home") {?>
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/morris/raphael-min.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/morris/morris.min.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/customChartDraw.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
"><?php echo '</script'; ?>
>	
	<?php }?>	
	
	<link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/bootstrap-switch/bootstrap-switch.min.css?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
" rel="stylesheet" type="text/css" />
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/bootstrap-switch/bootstrap-switch.min.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
" type="text/javascript"><?php echo '</script'; ?>
>	
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/slimscroll/jquery.slimscroll.min.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
" type="text/javascript"><?php echo '</script'; ?>
>	
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/daterangepicker/moment.min.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/js/app.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/textext.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery.growl.js"><?php echo '</script'; ?>
>
	
    <?php echo '<script'; ?>
 type="text/javascript">
	
	    var globalSideBarLocation = "<?php echo (($tmp = @$_smarty_tpl->tpl_vars['sidebar']->value)===null||$tmp==='' ? 'none' : $tmp);?>
";
	    
		$(function () {
			setNavigation();
		});

		function setNavigation() {
			var fullpath = $(location).attr("href");
			var path = fullpath.substr(fullpath.lastIndexOf('/') + 1);

			$(".sidebar-menu a").each(function () {
				var href = $(this).attr('href');
				if (decodeURI(path) === href) {
					if($(this).attr('id')){
						$(this).parents('li').addClass('active');
					}
				}
			});
		}	
	
        var datepickerformat = "<?php echo $_smarty_tpl->tpl_vars['datepickerformat']->value;?>
";
        <?php if ($_smarty_tpl->tpl_vars['jquerycode']->value) {?>
            $(document).ready(function(){
                <?php echo $_smarty_tpl->tpl_vars['jquerycode']->value;?>

            });
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['jscode']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['jscode']->value;?>

        <?php }?>
    <?php echo '</script'; ?>
>

	<?php ob_start();
echo $_smarty_tpl->tpl_vars['sidebar']->value == "home";
$_tmp1=ob_get_clean();
if ($_tmp1) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['widgetNames'])) {$_smarty_tpl->tpl_vars['widgetNames'] = clone $_smarty_tpl->tpl_vars['widgetNames'];
$_smarty_tpl->tpl_vars['widgetNames']->value = array(); $_smarty_tpl->tpl_vars['widgetNames']->nocache = null;
} else $_smarty_tpl->tpl_vars['widgetNames'] = new Smarty_Variable(array(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'widgetNames', 0);?>
		<?php if (isset($_smarty_tpl->tpl_vars['widgetPermissions'])) {$_smarty_tpl->tpl_vars['widgetPermissions'] = clone $_smarty_tpl->tpl_vars['widgetPermissions'];
$_smarty_tpl->tpl_vars['widgetPermissions']->value = array(); $_smarty_tpl->tpl_vars['widgetPermissions']->nocache = null;
} else $_smarty_tpl->tpl_vars['widgetPermissions'] = new Smarty_Variable(array(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'widgetPermissions', 0);?>
		<?php
$_from = $_smarty_tpl->tpl_vars['widgets']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_nWidget_0_saved_item = isset($_smarty_tpl->tpl_vars['nWidget']) ? $_smarty_tpl->tpl_vars['nWidget'] : false;
$_smarty_tpl->tpl_vars['nWidget'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['nWidget']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['nWidget']->value) {
$_smarty_tpl->tpl_vars['nWidget']->_loop = true;
$__foreach_nWidget_0_saved_local_item = $_smarty_tpl->tpl_vars['nWidget'];
?>
			<?php if (strpos($_smarty_tpl->tpl_vars['nWidget']->value['name'],"lrgawidget_perm_") === 0) {?>
				<?php $_smarty_tpl->smarty->ext->_var->createLocalArrayVariable($_smarty_tpl, 'widgetPermissions', null);
$_smarty_tpl->tpl_vars['widgetPermissions']->value[] = $_smarty_tpl->tpl_vars['nWidget']->value['name'];
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'widgetPermissions', 0);?>
			<?php } else { ?>
				<?php $_smarty_tpl->smarty->ext->_var->createLocalArrayVariable($_smarty_tpl, 'widgetNames', null);
$_smarty_tpl->tpl_vars['widgetNames']->value[] = $_smarty_tpl->tpl_vars['nWidget']->value['name'];
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'widgetNames', 0);?>
			<?php }?>
		<?php
$_smarty_tpl->tpl_vars['nWidget'] = $__foreach_nWidget_0_saved_local_item;
}
if ($__foreach_nWidget_0_saved_item) {
$_smarty_tpl->tpl_vars['nWidget'] = $__foreach_nWidget_0_saved_item;
}
?>
		<?php if (isset($_smarty_tpl->tpl_vars['globalWidgetNames'])) {$_smarty_tpl->tpl_vars['globalWidgetNames'] = clone $_smarty_tpl->tpl_vars['globalWidgetNames'];
$_smarty_tpl->tpl_vars['globalWidgetNames']->value = $_smarty_tpl->tpl_vars['widgetNames']->value; $_smarty_tpl->tpl_vars['globalWidgetNames']->nocache = true;
} else $_smarty_tpl->tpl_vars['globalWidgetNames'] = new Smarty_Variable($_smarty_tpl->tpl_vars['widgetNames']->value, true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'globalWidgetNames', 96);?>
		<?php if (isset($_smarty_tpl->tpl_vars['globalWidgetPermissions'])) {$_smarty_tpl->tpl_vars['globalWidgetPermissions'] = clone $_smarty_tpl->tpl_vars['globalWidgetPermissions'];
$_smarty_tpl->tpl_vars['globalWidgetPermissions']->value = $_smarty_tpl->tpl_vars['widgetPermissions']->value; $_smarty_tpl->tpl_vars['globalWidgetPermissions']->nocache = true;
} else $_smarty_tpl->tpl_vars['globalWidgetPermissions'] = new Smarty_Variable($_smarty_tpl->tpl_vars['widgetPermissions']->value, true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'globalWidgetPermissions', 96);?>	
	<?php } else { ?>
		<?php if (isset($_smarty_tpl->tpl_vars['globalWidgetNames'])) {$_smarty_tpl->tpl_vars['globalWidgetNames'] = clone $_smarty_tpl->tpl_vars['globalWidgetNames'];
$_smarty_tpl->tpl_vars['globalWidgetNames']->value = array(); $_smarty_tpl->tpl_vars['globalWidgetNames']->nocache = true;
} else $_smarty_tpl->tpl_vars['globalWidgetNames'] = new Smarty_Variable(array(), true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'globalWidgetNames', 96);?>
		<?php if (isset($_smarty_tpl->tpl_vars['globalWidgetPermissions'])) {$_smarty_tpl->tpl_vars['globalWidgetPermissions'] = clone $_smarty_tpl->tpl_vars['globalWidgetPermissions'];
$_smarty_tpl->tpl_vars['globalWidgetPermissions']->value = array(); $_smarty_tpl->tpl_vars['globalWidgetPermissions']->nocache = true;
} else $_smarty_tpl->tpl_vars['globalWidgetPermissions'] = new Smarty_Variable(array(), true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'globalWidgetPermissions', 96);?>	
	<?php }?>

	<?php ob_start();
echo $_smarty_tpl->tpl_vars['sidebar']->value == "home";
$_tmp2=ob_get_clean();
ob_start();
echo in_array("lrgawidget",$_smarty_tpl->tpl_vars['globalWidgetNames']->value);
$_tmp3=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars[''.("lara_lrgawidget_state")]->value;
$_tmp4=ob_get_clean();
ob_start();
echo $_tmp4 != "closed";
$_tmp5=ob_get_clean();
if ($_tmp2 && $_tmp3 && $_tmp5) {?>
	<!-- start analytics block-->
	<!-- css files -->
	<link rel="stylesheet" href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/fuelux/fuelux.min.css?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
">
	<link rel="stylesheet" href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/jvectormap/jquery-jvectormap-1.2.2.css?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
">
	<link rel="stylesheet" href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/datatables/dataTables.bootstrap.css?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
">
	<link rel="stylesheet" href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/flags/allflags.css?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
">
	<link rel="stylesheet" href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/daterangepicker/daterangepicker.css?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
">
	<link rel="stylesheet" href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/css/lrgawidget.css?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
">
	<!-- js files -->
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/fuelux/wizard.min.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/flot/jquery.flot.min.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/flot/jquery.flot.time.min.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/sparkline/sparkline.min.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/chartjs/Chart.min.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/datatables/jquery.dataTables.min.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/datatables/dataTables.bootstrap.min.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/plugins/daterangepicker/daterangepicker.min.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/js/lrgawidget.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
"><?php echo '</script'; ?>
>
	<!-- stop analytics block-->
	<?php }?>
	
	<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/js/lrchat.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
"><?php echo '</script'; ?>
>
	
    <?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/head.js?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/AdminAdvSearch.js"><?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>
	
	
    <!-- Theme Style and Skins-->
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/css/AdminLTE.css?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
" rel="stylesheet" type="text/css" />
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/dist/css/lara-skins.css?larav=<?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
" rel="stylesheet" type="text/css" />
	
	
	<!-- Custom JavaScript and Style Sheets-->
	<?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/custom/custom.css")) {?>
	<link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/custom/custom.css" rel="stylesheet" type="text/css" />
	<?php }?>
	<?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/custom/custom.js")) {?>
	<?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/custom/custom.js" ><?php echo '</script'; ?>
>
	<?php }?>
    
  </head>
 
  <body class="<?php if ($_smarty_tpl->tpl_vars['lara_current_skin']->value) {?> <?php echo $_smarty_tpl->tpl_vars['lara_current_skin']->value;?>
 <?php } else { ?> skin-blue <?php }?> sidebar-mini <?php if ($_smarty_tpl->tpl_vars['minsidebar']->value) {?> sidebar-collapse <?php }?>">
    
	<?php echo '<script'; ?>
 type="text/javascript">
		if (typeof (Storage) !== "undefined") {	if (localStorage.getItem('controlsidebaropen') == 1){ $('body').addClass('control-sidebar-open');}}
	<?php echo '</script'; ?>
>
  
  <?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>

  
    <div class="wrapper">
	

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>WHM</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>WHMCS</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">

		  <ul class="nav navbar-nav">
			
				<li class="dropdown messages-menu hidden-xs " id="tnsearchbox" >
				   <!-- the search button -->
				   <form class="navbar-form " role="search" id="navbarfrmintellisearch" class="dropdown-toggle" data-toggle="dropdown">
						<input type="hidden" name="intellisearch" value="1" />
						<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />	  
						<div class="input-group" >
							<input type="text" name="value" class="form-control" id="navbar-search-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['intellisearch'];?>
...">
							<span class="input-group-btn" >
								<button type="submit" name="search" id="tnsearch-btn" class="btn btn-flat" style="margin-left: 0px;"><i id="tnsearch-icon" class="fa fa-search fa-fw"></i></button>
							</span>

						</div>
					</form>

					<ul class="dropdown-menu navbar-form-results">
						<li class="header">
								<span class="pull-left" id="tnsearchstats"></span>
								<span class="pull-right">
									<input type="checkbox" class="lara-bootstrap-switch" <?php if ($_smarty_tpl->tpl_vars['lara_qstoggle']->value == "true") {?> checked="true" <?php }?> name="qstoggle" data-label-text="Quick Search" data-size="mini" />
								</span>
						</li>
						<li>
							<ul class="menu sscroll" id="tnsearchresults"></ul>
						</li>
						<li class="footer"><a href="#" onclick="($('#tnsearchbox').removeClass('open'));"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['close'];?>
</a></li>
					</ul>
				</li>

				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/widgets/chat/chat_main_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				
				<li class="dropdown notifications-menu">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-shopping-cart"></i>
					<?php if ($_smarty_tpl->tpl_vars['sidebarstats']->value['orders']['pending'] > 0) {?> 
					<span class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['orders']['pending'];?>
</span>
					<?php }?>
				  </a>
				  <ul class="dropdown-menu">
					<li class="header"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['pendingorders'];?>
</li>
					<li>
					  <!-- inner menu: contains the actual data -->
					  <ul class="menu">
						<li>
						  <a href="orders.php?status=Pending">
							<i class="fa fa-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['orders']['pending'];?>
 <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['pendingorders'];?>

						  </a>
						</li>
					  </ul>
					</li>
				  </ul>
				</li>
				
				<li class="dropdown notifications-menu">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa  fa-usd"></i>
					<?php if ($_smarty_tpl->tpl_vars['sidebarstats']->value['invoices']['overdue'] > 0) {?>
					<span class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['invoices']['overdue'];?>
</span>
					<?php }?>
				  </a>
				  <ul class="dropdown-menu">
					<li class="header"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['overdueinvoices'];?>
</li>
					<li>
					  <!-- inner menu: contains the actual data -->
					  <ul class="menu">
						<li>
						  <a href="invoices.php?status=Overdue">
							<i class="fa fa-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['invoices']['overdue'];?>
 <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['overdueinvoices'];?>

						  </a>
						</li>
					  </ul>
					</li>
				  </ul>
				</li>

				<li class="dropdown notifications-menu">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-ticket "></i>
					<?php if ($_smarty_tpl->tpl_vars['ticketsawaitingreply']->value > 0) {?>
					<span class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['ticketsawaitingreply']->value;?>
</span>
					<?php }?>
				  </a>
				  <ul class="dropdown-menu">
					<li class="header"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['ticketsawaitingreply'];?>
</li>
					<li>
					  <!-- inner menu: contains the actual data -->
					  <ul class="menu">
						<li>
						  <a href="supporttickets.php">
							<i class="fa fa-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['ticketsawaitingreply']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['ticketsawaitingreply'];?>

						  </a>
						</li>
					  </ul>
					</li>
				  </ul>
				</li>
	    
			<?php ob_start();
echo $_smarty_tpl->tpl_vars['topBarNotification']->value;
$_tmp6=ob_get_clean();
if ($_tmp6) {?>
				<li class="dropdown notifications-menu hidden-xs">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-exclamation-triangle"></i>
					<span class="label label-warning">*</span>
				  </a>
				  <ul class="dropdown-menu">
					<li class="header">Notifications</li>
					<li>
					  <!-- inner menu: contains the actual data -->
					  <ul class="menu">
						<li>
							<?php echo $_smarty_tpl->tpl_vars['topBarNotification']->value;?>

						</li>
					  </ul>
					</li>
				  </ul>
				</li>
			<?php }?>				

				<!-- User Account Menu -->
				<li class="dropdown user user-menu">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img class="user-image" src="//www.gravatar.com/avatar.php?gravatar_id=<?php echo $_smarty_tpl->tpl_vars['lara_adminemail_md5']->value;?>
" style="background-color: #ffffff;"/>
					<span class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['admin_username']->value;?>
</span>
				  </a>
				  <ul class="dropdown-menu">
					<!-- User image -->
					<li class="user-header">
					  <img src="//www.gravatar.com/avatar.php?gravatar_id=<?php echo $_smarty_tpl->tpl_vars['lara_adminemail_md5']->value;?>
" class="img-circle"  style="background-color: #ffffff;" />
					</li>
					<div class="box">
						<div class="box-body">
							<a href="index.php" class="btn btn-block btn-primary btn-social"><i class="fa fa-home "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['title'];?>
</a>
							<a href="../" class="btn btn-block btn-primary btn-social"><i class="fa fa-sign-in "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['clientarea'];?>
</a>
							<a href="#" data-toggle="modal" data-target="#myNotes" class="btn btn-block btn-primary btn-social"><i class="fa fa-files-o"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['mynotes'];?>
</a>
							<a href="myaccount.php" class="btn btn-block btn-primary btn-social"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['myaccount'];?>
</a>
							<a id="logout" href="logout.php" class="btn btn-block btn-danger btn-social"><i class="fa fa-sign-out "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['logout'];?>
</a>
						</div>
					</div>
					<!-- Menu Body -->
					<!-- Menu Footer-->
				  </ul>
				</li>				

			    <!-- Control Sidebar Toggle Button -->
				  <?php if (($_smarty_tpl->tpl_vars['sidebar']->value == "support") && $_smarty_tpl->tpl_vars['inticket']->value) {
if (isset($_smarty_tpl->tpl_vars['sidebaractiveicon'])) {$_smarty_tpl->tpl_vars['sidebaractiveicon'] = clone $_smarty_tpl->tpl_vars['sidebaractiveicon'];
$_smarty_tpl->tpl_vars['sidebaractiveicon']->value = "fa-ticket"; $_smarty_tpl->tpl_vars['sidebaractiveicon']->nocache = true;
} else $_smarty_tpl->tpl_vars['sidebaractiveicon'] = new Smarty_Variable("fa-ticket", true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'sidebaractiveicon', 0);
if (isset($_smarty_tpl->tpl_vars['ticketTabStatus'])) {$_smarty_tpl->tpl_vars['ticketTabStatus'] = clone $_smarty_tpl->tpl_vars['ticketTabStatus'];
$_smarty_tpl->tpl_vars['ticketTabStatus']->value = "active"; $_smarty_tpl->tpl_vars['ticketTabStatus']->nocache = true;
} else $_smarty_tpl->tpl_vars['ticketTabStatus'] = new Smarty_Variable("active", true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'ticketTabStatus', 96);?>
				  <?php } elseif (($_smarty_tpl->tpl_vars['sidebar']->value == "addonmodules") && ($_smarty_tpl->tpl_vars['addon_module_sidebar']->value)) {
if (isset($_smarty_tpl->tpl_vars['sidebaractiveicon'])) {$_smarty_tpl->tpl_vars['sidebaractiveicon'] = clone $_smarty_tpl->tpl_vars['sidebaractiveicon'];
$_smarty_tpl->tpl_vars['sidebaractiveicon']->value = "fa-puzzle-piece"; $_smarty_tpl->tpl_vars['sidebaractiveicon']->nocache = true;
} else $_smarty_tpl->tpl_vars['sidebaractiveicon'] = new Smarty_Variable("fa-puzzle-piece", true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'sidebaractiveicon', 0);
if (isset($_smarty_tpl->tpl_vars['addonmodulesTabStatus'])) {$_smarty_tpl->tpl_vars['addonmodulesTabStatus'] = clone $_smarty_tpl->tpl_vars['addonmodulesTabStatus'];
$_smarty_tpl->tpl_vars['addonmodulesTabStatus']->value = "active"; $_smarty_tpl->tpl_vars['addonmodulesTabStatus']->nocache = true;
} else $_smarty_tpl->tpl_vars['addonmodulesTabStatus'] = new Smarty_Variable("active", true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'addonmodulesTabStatus', 96);?>
				  <?php } else {
if (isset($_smarty_tpl->tpl_vars['sidebaractiveicon'])) {$_smarty_tpl->tpl_vars['sidebaractiveicon'] = clone $_smarty_tpl->tpl_vars['sidebaractiveicon'];
$_smarty_tpl->tpl_vars['sidebaractiveicon']->value = "fa-cogs"; $_smarty_tpl->tpl_vars['sidebaractiveicon']->nocache = true;
} else $_smarty_tpl->tpl_vars['sidebaractiveicon'] = new Smarty_Variable("fa-cogs", true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'sidebaractiveicon', 0);
if (isset($_smarty_tpl->tpl_vars['homeTabStatus'])) {$_smarty_tpl->tpl_vars['homeTabStatus'] = clone $_smarty_tpl->tpl_vars['homeTabStatus'];
$_smarty_tpl->tpl_vars['homeTabStatus']->value = "active"; $_smarty_tpl->tpl_vars['homeTabStatus']->nocache = true;
} else $_smarty_tpl->tpl_vars['homeTabStatus'] = new Smarty_Variable("active", true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'homeTabStatus', 96);?>
				  <?php }?>	
				   <li>
					<a href="#" data-toggle="control-sidebar" ><i id="sidebar-menu-active-icon" class="fa <?php echo $_smarty_tpl->tpl_vars['sidebaractiveicon']->value;?>
"></i></a>
				  </li>
            </ul>
          </div>
        </nav>
      </header>
	  
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		    
			<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "home") {?>
				<?php if ($_smarty_tpl->tpl_vars['viewincometotals']->value) {?>
					<div id="incometotals" class="hidden-xs pull-right">
						<a href="transactions.php">
							<img src="images/icons/transactions.png" align="absmiddle" border="0">
							<strong><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['income'];?>
</strong>
						</a>
						<img src="images/loading.gif" align="absmiddle" />
						<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['loading'];?>

					</div>
				<?php }?>			
			<?php }?>
		    
		
            <?php if ($_smarty_tpl->tpl_vars['helplink']->value) {?>
                <div class="contexthelp">
                    <a href="http://docs.whmcs.com/<?php echo $_smarty_tpl->tpl_vars['helplink']->value;?>
" target="_blank">
                        <img src="images/icons/help.png" border="0" align="absmiddle" />
                        <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['contextlink'];?>

                    </a>
                </div>
            <?php }?>
			
	
          <h1><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h1>
        </section>

        <!-- Main content -->
        <section class="content">
		
		<div class="global-admin-warning<?php if (!$_smarty_tpl->tpl_vars['globalAdminWarningMsg']->value) {?> hidden<?php }?>">
		     <?php echo $_smarty_tpl->tpl_vars['globalAdminWarningMsg']->value;?>

		</div>		
		
		<?php ob_start();
echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];
$_tmp7=ob_get_clean();
if (!$_tmp7) {?>
			<div class="callout callout-danger">
				<h4>Alert !</h4>
				This "<b>Lara Theme Settings</b>" module is not active. 
				<br>The module is used to save user settings, and must be activated for the theme to work.
				<?php if (in_array("Configure Addon Modules",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
				<br>Please <b>activate</b> the module and make sure to permit access to all admin groups in <a href="configaddonmods.php">Addon Modules Configuration</a>.
				<?php } else { ?>
				<br>Please contact an administratior to <b>activate</b> the module and permit access to your admin group.
				<?php }?>
			</div>
		<?php }
}
}
