<?php if (!defined('THINK_PATH')) exit();?><div class="so_main">
  <div class="page_tit">同步发布配置</div>
  
  <div class="form2">
    <form method="post" action="<?php echo Addons::adminUrl('savePublishConfig');?>">
    <dl class="lineD">
        <dt>开启同步发布功能：</dt>
        <dd>
            <?php foreach($data as $key=>$value){ ?>
                <?php $checked = '';
                    $disabled = 'disabled="true"';
                    if($value['hasKey']){
                        $disabled='';
                    }
                    if($value['checked'] && $value['hasKey']){
                        $checked = 'checked="true"';
                    } ?>
                <label><input type="checkbox" name="open[]" <?php echo ($checked); ?> <?php echo ($disabled); ?> value="<?php echo ($key); ?>"/><?php echo $alias[$key] ?></label>
            <?php } ?>
            <br /><br />
            <p>当开启对应的平台，用户可以发布时同步到对应的平台。注意，如果没有填写这些平台的key。此配置将无效。如果全部未选，前台将没有任何同步按钮</p>
        </dd>
    </dl>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
    </form>
  </div>
</div>