<?php /* Smarty version Smarty-3.1.7, created on 2019-02-12 04:06:40
         compiled from "/home4/gocaribe/crm.gocaribemaya.com/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/Date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:657736095c624650523e24-26829492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83d88b69413bd19a73d49c345625aa79e74a1a0f' => 
    array (
      0 => '/home4/gocaribe/crm.gocaribemaya.com/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/Date.tpl',
      1 => 1520628068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '657736095c624650523e24-26829492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'USER_MODEL' => 0,
    'FIELD_NAME' => 0,
    'MODULE' => 0,
    'IGNOREUIREGISTRATION' => 0,
    'dateFormat' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'MODE' => 0,
    'FIELD_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c62465054670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c62465054670')) {function content_5c62465054670($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php $_smarty_tpl->tpl_vars["dateFormat"] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format'), null, 0);?><?php if ((!$_smarty_tpl->tpl_vars['FIELD_NAME']->value)){?><?php $_smarty_tpl->tpl_vars["FIELD_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName(), null, 0);?><?php }?><div class="input-group inputElement" style="margin-bottom: 3px"><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="text" class="dateField form-control <?php if ($_smarty_tpl->tpl_vars['IGNOREUIREGISTRATION']->value){?>ignore-ui-registration<?php }?>" data-fieldname="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-fieldtype="date" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-date-format="<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
"value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?><?php if ($_smarty_tpl->tpl_vars['MODE']->value=='edit'&&$_smarty_tpl->tpl_vars['FIELD_NAME']->value=='due_date'){?> data-user-changed-time="true" <?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required="true" <?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])){?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>  data-rule-date="true" /><span class="input-group-addon"><i class="fa fa-calendar "></i></span></div>
<?php }} ?>