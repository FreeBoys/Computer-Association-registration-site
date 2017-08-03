<?php
/* Smarty version 3.1.29, created on 2016-10-26 11:19:42
  from "D:\phpStudy\WWW\templates\Fish.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_581020ce69d0c7_90261840',
  'file_dependency' => 
  array (
    'c34cd04cf7fe10b0fc3cbac409d5f5f1336633c4' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\templates\\Fish.html',
      1 => 1477451973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581020ce69d0c7_90261840 ($_smarty_tpl) {
?>
<html>
    <meta charset="utf8">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
</title>
    <link rel="stylesheet" href="../css/Fish.css" type="text/css" data-for="result">
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/lod.js" async><?php echo '</script'; ?>
>
    </head>
    <body onclick="cl_()">
        <!--浮层-->
        <div id="f" class="f_1">
            <duv><img src="<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
" onclick="cl_()" /></duv>
            <div><?php echo $_smarty_tpl->tpl_vars['fish']->value;?>
</div>
            <div><img src="<?php echo $_smarty_tpl->tpl_vars['im_p']->value;?>
"/></div>
            <div><span><?php echo $_smarty_tpl->tpl_vars['wel']->value;?>
</span></div>
        </div>

        <div id="main_w">
            <div class="titl"><?php echo $_smarty_tpl->tpl_vars['hello']->value;?>
</div>
            <div>
                <div>
                    <div class="wk"><img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" width="100px" height="130px" /></div>
                    <div class="wk"><span><?php echo $_smarty_tpl->tpl_vars['xh_tl']->value;
echo $_smarty_tpl->tpl_vars['xh']->value;?>
</span></div>
                    <div class="wk"><span><?php echo $_smarty_tpl->tpl_vars['xm_tl']->value;
echo $_smarty_tpl->tpl_vars['xm']->value;?>
</span></div>
                    <div class="wk"><span><?php echo $_smarty_tpl->tpl_vars['xb_tl']->value;
echo $_smarty_tpl->tpl_vars['xb']->value;?>
</span></div>
                    <div class="wk"><span><?php echo $_smarty_tpl->tpl_vars['zy_tl']->value;
echo $_smarty_tpl->tpl_vars['zy']->value;?>
</span></div>
                    <div class="wk"><span><?php echo $_smarty_tpl->tpl_vars['bj_tl']->value;
echo $_smarty_tpl->tpl_vars['bj']->value;?>
</span></div>
                    <div class="wk"><span><?php echo $_smarty_tpl->tpl_vars['QQ_tl']->value;
echo $_smarty_tpl->tpl_vars['QQ']->value;?>
</span></div>
                </div>
            </div>
            <div class="back"><a href="../index.php">返回</a></div>
        </div>
    </body>

</html><?php }
}
