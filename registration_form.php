<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/library/page_public.php');
 
class registration_form extends page_public
{
 protected function Content()
 {
   ?>
<table border="0" align="center">
<tbody>
<tr>
<td align="center">
<h3>Регистрация пользователя</h3>
</td>
</tr>
<tr>
<td></td>
</tr>
</tbody>
</table>
<form action="../registration.php" method="post">
<table border="0" width="500" align="center">
<tbody>
<tr>
<td>Логин</td>
<td><input name="user_login" size="40" type="text" /></td>
</tr>
<tr>
<td>Пароль</td>
<td><input name="user_passwd" size="40" type="password" /></td>
</tr>
<tr>
<td>Подтверждение пароля</td>
<td><input name="user_passwd2" size="40" type="password" /></td>
</tr>
<tr>
<td>E-mail</td>
<td><input name="user_email" size="40" type="text" /></td>
</tr>
<tr>
<td>Имя</td>
<td><input name="user_name" size="40" type="text" /></td>
</tr>
<tr>
<td>Город</td>
<td><input name="user_city" size="40" type="text" /></td>
</tr>
<tr>
<td>Телефон</td>
<td><input name="user_phone" size="40" type="text" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Зарегистрироваться" /></td>
</tr>
</tbody>
</table>
</form>
<?php
  }
}
 
$page = new registration_form();
$page->DisplayPage();
?>
