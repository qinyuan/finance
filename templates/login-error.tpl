<!DOCTYPE html>
<html>
<head>
  {include file="meta_charset.tpl"}
  <title>登录错误</title>
</head>
<body></body>
<script charset="utf8">
  alert("用户名不存在或密码错误");
  var indexHref = location.href.toString().replace('login', 'index');
  location.href = indexHref;
</script>
</html>