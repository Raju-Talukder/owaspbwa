<?php /* Smarty version 2.6.10, created on 2012-07-13 15:01:06
         compiled from gallery:modules/watermark/templates/UserWatermarks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'gallery:modules/watermark/templates/UserWatermarks.tpl', 41, false),)), $this); ?>
<div class="gbBlock gcBackground1">
  <h2> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'My Watermarks'), $this);?>
 </h2>
</div>

<?php if (! empty ( $this->_tpl_vars['status'] ) || ! empty ( $this->_tpl_vars['form']['error'] )): ?>
<div class="gbBlock"><h2 class="giSuccess">
  <?php if (isset ( $this->_tpl_vars['status']['add'] )): ?>
    <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Watermark added successfully'), $this);?>

  <?php endif; ?>
  <?php if (isset ( $this->_tpl_vars['status']['delete'] )): ?>
    <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Watermark deleted successfully'), $this);?>

  <?php endif; ?>
  <?php if (isset ( $this->_tpl_vars['status']['saved'] )): ?>
    <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Watermark saved successfully'), $this);?>

  <?php endif; ?>
  <?php if (isset ( $this->_tpl_vars['form']['error'] )): ?>
    <span class="giError"><?php echo $this->_reg_objects['g'][0]->text(array('text' => "There was a problem processing your request."), $this);?>
</span>
  <?php endif; ?>
</h2></div>
<?php endif; ?>

<div class="gbBlock">
  <h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Upload Watermarks'), $this);?>
 </h3>

  <p class="giDescription">
    <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Add your own personal watermarks here.  These watermarks can only be used by you."), $this);?>

  </p>

  <table class="gbDataTable" width="100%"><tr>
    <th> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Name'), $this);?>
 </th>
    <th> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Image'), $this);?>
 </th>
    <th> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Action'), $this);?>
 </th>
  </tr>
  <?php $_from = $this->_tpl_vars['UserWatermarks']['watermarks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "gbEven,gbOdd"), $this);?>
">
    <td>
      <?php echo $this->_tpl_vars['item']['name']; ?>

    </td><td>
      <?php echo $this->_reg_objects['g'][0]->image(array('item' => $this->_tpl_vars['item'],'image' => $this->_tpl_vars['item'],'maxSize' => 150), $this);?>

    </td><td>
      <a href="<?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "view=core.UserAdmin",'arg2' => "subView=watermark.UserWatermarkEdit",'arg3' => "watermarkId=".($this->_tpl_vars['item']['id'])), $this);?>
">
	<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'edit'), $this);?>

      </a>
      &nbsp;
      <a href="<?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "controller=watermark.UserWatermarks",'arg2' => "form[action][delete]=1",'arg3' => "form[delete][watermarkId]=".($this->_tpl_vars['item']['id'])), $this);?>
">
	<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'delete'), $this);?>

      </a>
    </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  </table>

  <input type="file" size="60" name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[1]"), $this);?>
"/>
  <input type="submit" class="inputTypeSubmit"
   name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][add]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Add'), $this);?>
"/>

  <?php if (isset ( $this->_tpl_vars['form']['error']['missingFile'] )): ?>
  <div class="giError">
    <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'You must enter the path to a file to upload'), $this);?>

  </div>
  <?php endif; ?>
</div>