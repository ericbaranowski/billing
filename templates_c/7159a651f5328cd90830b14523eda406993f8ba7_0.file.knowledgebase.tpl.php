<?php
/* Smarty version 3.1.29, created on 2017-01-08 09:59:45
  from "/home/billing/public_html/templates/flathost/knowledgebase.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58720d9196f0d5_02900437',
  'file_dependency' => 
  array (
    '7159a651f5328cd90830b14523eda406993f8ba7' => 
    array (
      0 => '/home/billing/public_html/templates/flathost/knowledgebase.tpl',
      1 => 1479127847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58720d9196f0d5_02900437 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home/billing/public_html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['LANG']->value['knowledgebasetitle']), 0, true);
?>


<div class="well">
    <div class="textcenter">
        <form method="post" action="knowledgebase.php?action=search" class="form">
        
        
        <div class="row last-row">
        
        <div class="form-group col-sm-9"><input class="form-control input-lg" name="search" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['kbquestionsearchere'];?>
"></div>
        <div class="form-group col-sm-3"><input type="submit" class="btn btn-block btn-lg btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasesearch'];?>
" /></div>
        
        </div>
        
        </form>
    </div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['LANG']->value['knowledgebasecategories']), 0, true);
?>


<div class="row">
<div class="form-group">
<?php
$_from = $_smarty_tpl->tpl_vars['kbcats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_kbasecats_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_kbasecats']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_kbasecats'] : false;
$__foreach_kbasecats_0_saved_item = isset($_smarty_tpl->tpl_vars['kbcat']) ? $_smarty_tpl->tpl_vars['kbcat'] : false;
$_smarty_tpl->tpl_vars['kbcat'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_kbasecats'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['kbcat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['kbcat']->value) {
$_smarty_tpl->tpl_vars['kbcat']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_kbasecats']->value['index']++;
$__foreach_kbasecats_0_saved_local_item = $_smarty_tpl->tpl_vars['kbcat'];
?>
    <div class="col4">
        <div class="internalpadding">
            <img src="images/folder.gif" /> <a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {?>knowledgebase/<?php echo $_smarty_tpl->tpl_vars['kbcat']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['kbcat']->value['urlfriendlyname'];
} else { ?>knowledgebase.php?action=displaycat&amp;catid=<?php echo $_smarty_tpl->tpl_vars['kbcat']->value['id'];
}?>" class="fontsize2"><strong><?php echo $_smarty_tpl->tpl_vars['kbcat']->value['name'];?>
</strong></a> (<?php echo $_smarty_tpl->tpl_vars['kbcat']->value['numarticles'];?>
)<br />
            <?php echo $_smarty_tpl->tpl_vars['kbcat']->value['description'];?>

        </div>
    </div>
    <?php if (!(((isset($_smarty_tpl->tpl_vars['__smarty_foreach_kbasecats']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_kbasecats']->value['index'] : null)+1) % 4)) {?><div class="clear"></div>
    <?php }
$_smarty_tpl->tpl_vars['kbcat'] = $__foreach_kbasecats_0_saved_local_item;
}
if ($__foreach_kbasecats_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_kbasecats'] = $__foreach_kbasecats_0_saved;
}
if ($__foreach_kbasecats_0_saved_item) {
$_smarty_tpl->tpl_vars['kbcat'] = $__foreach_kbasecats_0_saved_item;
}
?>
</div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['LANG']->value['knowledgebasepopular']), 0, true);
?>


<?php
$_from = $_smarty_tpl->tpl_vars['kbmostviews']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_kbarticle_1_saved_item = isset($_smarty_tpl->tpl_vars['kbarticle']) ? $_smarty_tpl->tpl_vars['kbarticle'] : false;
$_smarty_tpl->tpl_vars['kbarticle'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['kbarticle']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['kbarticle']->value) {
$_smarty_tpl->tpl_vars['kbarticle']->_loop = true;
$__foreach_kbarticle_1_saved_local_item = $_smarty_tpl->tpl_vars['kbarticle'];
?>
<div class="row">
    <img src="images/article.gif"> <a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {?>knowledgebase/<?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['urlfriendlytitle'];?>
.html<?php } else { ?>knowledgebase.php?action=displayarticle&amp;id=<?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['id'];
}?>" class="fontsize2"><strong><?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
</strong></a><br />
    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['kbarticle']->value['article'],100,"...");?>

</div>
<?php
$_smarty_tpl->tpl_vars['kbarticle'] = $__foreach_kbarticle_1_saved_local_item;
}
if ($__foreach_kbarticle_1_saved_item) {
$_smarty_tpl->tpl_vars['kbarticle'] = $__foreach_kbarticle_1_saved_item;
}
?>

<br /><?php }
}
