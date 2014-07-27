<!DOCTYPE html>
<html>
<head>
  {include file='meta_charset.tpl'}
  <title>财务管理系统</title>
  <link rel="stylesheet" href="css/common.css" type="text/css" />
  <link rel="stylesheet" href="css/index.css" type="text/css" />
</head>
<body>
<div class="body">

  <h1>财务管理系统</h1>
  <h3>用户登录</h1>
  <form action="login.php" method="post">
    <table class="formInput">
      <tr>
        <td class="label">用户名</td>
        <td><input type="text" id="username" name="username" /></td>
      </tr>
      <tr>
        <td class="label">密码</td>
        <td><input type="password" id="password" name="password" /></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" id="submit" name="submit" value="登  录" />
        </td>
      </tr>
    </table>
  </form>
  
</div>
</body>
<script src="js/jquery.js"></script>
<script>
$('#username').focus();
</script>
</html>