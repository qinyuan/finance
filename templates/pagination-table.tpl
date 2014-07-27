<div class="content">
  <span class="addLink"><a href="javascript:void(0)">添加</a></span>
  <table class="nor">
    <tr>
    {foreach from=$ths item=th}
      <th{if isset($th.class)} class="{$th.class}"{/if}>{$th.text}</th>
    {/foreach}
    </tr>
  {$remain_count=$page_size}
  {foreach from=$rows item=row}
    <tr>
    {foreach from=$row.texts item=text}
      <td>{$text}</td>
    {/foreach}
    {if isset($row.with_handle) && $row.with_handle}
      <td class="handle">
      {if !(isset($row.no_edit) && $row.no_edit)}
        <img id="edit{$row.id}" src="css/img/edit.gif" title="修改" />
      {/if}
      {if !(isset($row.no_delete) && $row.no_delete)}
        <img id="delete{$row.id}" src="css/img/delete.gif" title="删除" />
      {/if}
      </td>
    {/if}
    </tr>
    {$remain_count=$remain_count-1}
  {/foreach}
  {if $remain_count>0}
    {section name=loop loop=$remain_count}
    <tr>
    {foreach from=$ths item=th}
      <td></td>
    {/foreach}
    </tr>
    {/section}
  {/if}
  </table>
  <div id="pageInfo">
    {include file="pagination.tpl"}
  </div>
</div>