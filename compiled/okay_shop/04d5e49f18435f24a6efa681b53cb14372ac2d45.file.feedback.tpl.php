<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-01-21 03:48:12
         compiled from "C:\Users\Krash\Desktop\OSPanel\domains\OkayProject\design\okay_shop\html\feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1646216865c4516cc233c12-87086806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04d5e49f18435f24a6efa681b53cb14372ac2d45' => 
    array (
      0 => 'C:\\Users\\Krash\\Desktop\\OSPanel\\domains\\OkayProject\\design\\okay_shop\\html\\feedback.tpl',
      1 => 1548002606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1646216865c4516cc233c12-87086806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'lang' => 0,
    'message_sent' => 0,
    'name' => 0,
    'error' => 0,
    'user' => 0,
    'email' => 0,
    'message' => 0,
    'settings' => 0,
    'captcha_feedback' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c4516cc42acf4_09614411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4516cc42acf4_09614411')) {function content_5c4516cc42acf4_09614411($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['page']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<div class="wrap_block clearfix">

    
    <?php if ($_smarty_tpl->tpl_vars['page']->value->description) {?>
        <div class="col-lg-6 no_padding">
            
            <h1 class="h1"><?php if (htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></h1>

            <div class="block padding">
                <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

            </div>
        </div>
    <?php }?>

    <div class="col-lg-6 no_padding">
        
        <div class="h1" data-language="feedback_feedback"><?php echo $_smarty_tpl->tpl_vars['lang']->value->feedback_feedback;?>
</div>
        <?php if ($_smarty_tpl->tpl_vars['message_sent']->value) {?>
            <div class="block padding">
                <div class="message_success">
                    <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
,</b> <span data-language="feedback_message_sent"><?php echo $_smarty_tpl->tpl_vars['lang']->value->feedback_message_sent;?>
.</span>
                </div>
            </div>
        <?php } else { ?>
            
            <form id="captcha_id" method="post" class="fn_validate_feedback">
                <div class="block padding">
                    
                    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                        <div class="message_error">
                            <?php if ($_smarty_tpl->tpl_vars['error']->value=='captcha') {?>
                                <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
                                <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_email') {?>
                                <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_text') {?>
                                <span data-language="form_enter_message"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_message;?>
</span>
                            <?php }?>
                        </div>
                    <?php }?>

                    
                    <div class="form_group">
                        <input class="form_input placeholder_focus" value="<?php if ($_smarty_tpl->tpl_vars['user']->value->name) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" name="name" type="text" data-language="form_name"/>
                        <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
                    </div>

                    
                    <div class="form_group">
                        <input class="form_input placeholder_focus" value="<?php if ($_smarty_tpl->tpl_vars['user']->value->email) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" name="email" type="text" data-language="form_email"/>
                        <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*</span>
                    </div>

                    
                    <div class="form_group">
                        <textarea class="form_textarea placeholder_focus" rows="3" name="message" data-language="form_enter_message"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_message;?>
*</span>
                    </div>

                    
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_feedback) {?>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="v2") {?>
                            <div class="captcha row" style="">
                                <div id="recaptcha1"></div>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="default") {?>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0][0]->get_captcha_plugin(array('var'=>"captcha_feedback"),$_smarty_tpl);?>

                            <div class="captcha form_group">
                                <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_feedback']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_feedback']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <span class="form_captcha">
                                    <input class="form_input input_captcha placeholder_focus" type="text" name="captcha_code" value="" data-language="form_enter_captcha"/>
                                    <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*</span>
                                </span>
                            </div>
                        <?php }?>
                    <?php }?>
                    <input type="hidden" name="feedback" value="1">

                    
                    <input class="button g-recaptcha" type="submit" name="feedback" data-language="form_send" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="invisible") {?>data-sitekey="<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_invisible;?>
" data-badge='bottomleft' data-callback="onSubmit"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_send;?>
"/>
                </div>
            </form>
        <?php }?>
    </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['settings']->value->iframe_map_code) {?>
<div class="ya_map">
    <?php echo $_smarty_tpl->tpl_vars['settings']->value->iframe_map_code;?>

</div>
<?php }?>

<?php }} ?>
