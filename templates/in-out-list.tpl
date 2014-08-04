<!DOCTYPE html>
<html>
<head>
  {include file="meta_charset.tpl"}
  <title>{$title}</title>
  {include file="common-css.tpl"}
  <link rel="stylesheet" href="css/in-out-list.css" type="text/css" />
</head>
<body>
<div class="body">
  {include file="header.tpl"}
  <div class="monthSelectDiv">
    金额总计：<b>{$inout_sum}</b>
    &nbsp;&nbsp;&nbsp;&nbsp;
    年份：<input type="text" id="year" value="{$year}" />
    月份：<select id="month"><option value="0">(全部)</option>
    {section name=loop loop=12} 
      {$index=$smarty.section.loop.index+1}
      <option value="{$index}"{if $index==$month} selected="selected"{/if}>{$index}</option>
    {/section}
         </select>
    &nbsp;&nbsp;
    创建者：
    {include file="user-select.tpl"}
    &nbsp;&nbsp;
    <button id="changeMonthOk">确定</button>
  </div>
  {include file="pagination-table.tpl"}

  <div id="{$inout_type}FormDiv" class="floatInput">
    <input type="hidden" id="{$inout_type}Id" />
    <table>
    <tr>
      <td>日期：</td>
      <td><input type="text" id="addDate" readonly="readonly" /></td>
    </tr>
    <tr>
      <td>金额：</td>
      <td><input type="text" id="amount" /></td>
    </tr>
    <tr>
      <td>说明：</td>
      <td><input type="text" id="description" /></td>
    </tr>
    <tr>
      <td>
        <button id="add_{$inout_type}Ok">确定</button>
        <button id="edit_{$inout_type}Ok">确定</button>
      </td>
      <td>
        <button id="add_{$inout_type}Cancel">取消</button>
        <button id="edit_{$inout_type}Cancel">取消</button>
      </td>
    </tr>
  </table>
  </div>
</div>
</body>
{include file="common-script.tpl"}
<script src="js/{$inout_type}-list.js"></script>
<script src="js/in-out-list.js"></script>
</html>