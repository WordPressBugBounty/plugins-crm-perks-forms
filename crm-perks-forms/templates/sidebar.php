<?php
  if ( ! defined( 'ABSPATH' ) ) {
     exit;
 } ?>
    <!--WP-PANEL-SIDEBAR-->
    <div id="crm-panel-sidebar">
      <div class="banner" title="Preferences"><img src="<?php echo cfx_form_plugin_url?>images/banner.png"></div>
      <ul class="wp-core-ui menu_panel">
<?php
 $link=admin_url('admin.php?page='.cfx_form::$page);
 if(!empty($_REQUEST['form_id'])){
    // if(empty($tab)){ $tab='step1'; }
 foreach($tabs_form as $i=>$v){
     $class=$tab == $i ? 'wp-ui-active wp-ui-highlight' : '';
     $tab_link=$link.'&form_id='.$form_id;
if(!empty($i)){ $tab_link.='&tab='.$i; }
 echo '<li><a href="'.esc_url($tab_link).'" class="'.esc_attr($class).' '.esc_attr($i).' steps_button" id="'.esc_attr($i).'"><span class="fa fa-'.esc_attr($v['icon']).'"></span> &nbsp;'.esc_attr($v['label']).'</a></li>';    
 }
?>
<li><a href="<?php echo $link; ?>" ><span class="fa fa-hand-o-left"></span> &nbsp;Back to Forms</a></li>
<?php }else{ 
     foreach($tabs as $i=>$v){
     $class=$tab == $i ? 'wp-ui-active wp-ui-highlight' : '';
        $tab_link=$link;
if(!empty($i)){ $tab_link.='&tab='.$i; }
 echo '<li><a href="'.esc_url($tab_link).'" class="'.esc_attr($class).'"><span class="fa fa-'.esc_attr($v['icon']).'"></span> &nbsp;'.esc_attr($v['label']).'</a></li>';    
 }
        ?>  
        <li><a class="<?php if($tab == "export"){echo 'wp-ui-active wp-ui-highlight';} ?>" href="<?php echo esc_url($link)?>&tab=export"><span class="fa fa-hand-o-right"></span> Import/Export</a></li>
                <?php
                    
        }                 ?>
          <li><a href="<?php echo esc_url($link."&tab=new_form");?>"><span class="fa fa-plus-circle"></span> &nbsp;Add New Form</a></li>
      </ul>
    </div>  <!--END WP-PANEL-SIDEBAR-->