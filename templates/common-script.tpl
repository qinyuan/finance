<script src="js/jquery.js"></script>
<script src="js/smart.min.js"></script>
<script src="js/json/json2.js"></script>
<script src="js/DatePicker/WdatePicker.js"></script>
{literal}<script id="passwordEditForm" type="text/x-jsmart-tmpl">
<div class="editPassword floatInput">
  <table>
    <tr>
      <td>请输入旧密码</td>
      <td><input type="password" id="oldPassword" /></td>
    </tr>
    <tr>
      <td>请输入新密码</td>
      <td><input type="password" id="newPassword1" /></td>
    </tr>
    <tr>
      <td>请再次确认新密码</td>
      <td><input type="password" id="newPassword2" /></td>
    </tr>
    <tr>
      <td><button onclick="return resetPassword()">确定</button></td>
      <td><button onclick="return cancelResetPassword();">取消</button></td>
    </tr>
  </table>
</div>
</script>{/literal}
<script src="js/common.js"></script>