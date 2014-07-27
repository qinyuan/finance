<div class="header">
  <div>
    <h3> |
      {foreach from=$navigation_array item=item}
        {if $item.current} 
          {$item.text} |
        {else}
          <a style="color:green;" href="{$item.href}">{$item.text}</a> |
        {/if}
      {/foreach} 
    </h3>
    <div class="exit">
      [{$username}]&nbsp;&nbsp;
      <span><a id="editPassword" href="javascript:void(0)">修改密码</a></span>
      <span><a href="index.php">退出</a></span>
    </div>
  </div>
</div>