<?php /* Smarty version 2.6.14, created on 2011-05-01 23:15:18
         compiled from modules/mod-featured_links.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'tikimodule', 'modules/mod-featured_links.tpl', 4, false),array('modifier', 'escape', 'modules/mod-featured_links.tpl', 10, false),)), $this); ?>


<?php if ($this->_tpl_vars['feature_featuredLinks'] == 'y'): ?>
  <?php $this->_tag_stack[] = array('tikimodule', array('title' => 'Featured links','name' => 'featured_links','flip' => $this->_tpl_vars['module_params']['flip'],'decorations' => $this->_tpl_vars['module_params']['decorations'])); $_block_repeat=true;smarty_block_tikimodule($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
   <table  border="0" cellpadding="0" cellspacing="0">
    <?php unset($this->_sections['ix']);
$this->_sections['ix']['name'] = 'ix';
$this->_sections['ix']['loop'] = is_array($_loop=$this->_tpl_vars['featuredLinks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ix']['show'] = true;
$this->_sections['ix']['max'] = $this->_sections['ix']['loop'];
$this->_sections['ix']['step'] = 1;
$this->_sections['ix']['start'] = $this->_sections['ix']['step'] > 0 ? 0 : $this->_sections['ix']['loop']-1;
if ($this->_sections['ix']['show']) {
    $this->_sections['ix']['total'] = $this->_sections['ix']['loop'];
    if ($this->_sections['ix']['total'] == 0)
        $this->_sections['ix']['show'] = false;
} else
    $this->_sections['ix']['total'] = 0;
if ($this->_sections['ix']['show']):

            for ($this->_sections['ix']['index'] = $this->_sections['ix']['start'], $this->_sections['ix']['iteration'] = 1;
                 $this->_sections['ix']['iteration'] <= $this->_sections['ix']['total'];
                 $this->_sections['ix']['index'] += $this->_sections['ix']['step'], $this->_sections['ix']['iteration']++):
$this->_sections['ix']['rownum'] = $this->_sections['ix']['iteration'];
$this->_sections['ix']['index_prev'] = $this->_sections['ix']['index'] - $this->_sections['ix']['step'];
$this->_sections['ix']['index_next'] = $this->_sections['ix']['index'] + $this->_sections['ix']['step'];
$this->_sections['ix']['first']      = ($this->_sections['ix']['iteration'] == 1);
$this->_sections['ix']['last']       = ($this->_sections['ix']['iteration'] == $this->_sections['ix']['total']);
?>
     <?php if ($this->_tpl_vars['featuredLinks'][$this->_sections['ix']['index']]['type'] == 'f'): ?>
      <tr>
       <td class="module">
        <a class="linkmodule" href="tiki-featured_link.php?type=<?php echo $this->_tpl_vars['featuredLinks'][$this->_sections['ix']['index']]['type']; ?>
&amp;url=<?php echo ((is_array($_tmp=$this->_tpl_vars['featuredLinks'][$this->_sections['ix']['index']]['url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
">
         <?php echo $this->_tpl_vars['featuredLinks'][$this->_sections['ix']['index']]['title']; ?>

        </a>
       </td>
      </tr>
     <?php else: ?>
      <tr>
       <td class="module">
        <a class="linkmodule" <?php if ($this->_tpl_vars['featuredLinks'][$this->_sections['ix']['index']]['type'] == 'n'): ?>target='_blank'<?php endif; ?> href="<?php echo $this->_tpl_vars['featuredLinks'][$this->_sections['ix']['index']]['url']; ?>
">
         <?php echo $this->_tpl_vars['featuredLinks'][$this->_sections['ix']['index']]['title']; ?>

        </a>
       </td>
      </tr>
     <?php endif; ?>
    <?php endfor; endif; ?>
   </table>
  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_tikimodule($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  endif; ?>