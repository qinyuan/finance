<!DOCTYPE html>
<html>
<head>
  {include file="meta_charset.tpl"}
  <title>用户管理</title>
  {include file="common-css.tpl"}
  <link rel="stylesheet" href="css/user-manage.css" type="text/css" />
</head>
<body>
<div class="body">
  {include file="header.tpl"}
  {include file="pagination-table.tpl"}

  <div id="userFormDiv" class="floatInput">
    <input type="hidden" id="userId" />
    <table>
    <tr>
      <td>用户名：</td>
      <td><input type="text" id="username" /></td>
    </tr>
    <tr>
      <td>密码：</td>
      <td><input type="password" id="password" /></td>
    </tr>
  {if $super_admin}
    <tr>
      <td>类型：</td>
      <td>{include file="user-type-select.tpl"}</td>
    </tr>
    <tr>
      <td>公司：</td>
      <td>{include file="company-select.tpl"}</td>
    </tr>
  {/if}
    <tr>
      <td>
        <button id="addUserOk">确定</button>
        <button id="editUserOk">确定</button>
      </td>
      <td>
        <button id="addUserCancel">取消</button>
        <button id="editUserCancel">取消</button>
      </td>
    </tr>
  </table>
  </div>
</div>
</body>
{include file="common-script.tpl"}
<script src="js/user-manage.js"></script>
</html>