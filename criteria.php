<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" charset="UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="Criteria" name="Criteria" method="post" action="generator.php">
  <table width="200" border="0">
    <tr>
      <td>Digis</td>
      <td><input type="checkbox" name="digis[]" id="2digis" value="2" />
      <label for="2digis">2 digis<br />
        <input type="checkbox" name="digis[]" id="3digis" value="3" />
      3 digis<br />
      <input type="checkbox" name="digis[]" id="4digis" value="4" />
      4 digis      </label></td>
    </tr>
    <tr>
      <td>Carry Set</td>
      <td><label for="carry"></label>
        <select name="carry" id="carry">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>    
      </td>
    </tr>
    <tr>
      <td>Question numbers</td>
      <td><label for="question"></label>
        <select name="question" id="question">
          <option value="5">5</option>
          <option value="10">10</option>                   
          <option value="15">15</option>
          <option value="20">20</option>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>