<!doctype html>
<html>
  <meta charset = "window-874">
    <head>
        <title> ����ѵ���ǹ���  </title>
    </head>
    <body>
        <form method="post" action="show.php">

<table>


<tr>
	<td>Name-LastName :</td>
	<td> <input name="name" type="text" size="40"maxlenght = "40"> </td>      </tr>
<tr>
<td>ID :</td>
<td> <input name="id" type="text" size="15"maxlenght = "15"> </td>                </tr>
<tr>
<td>PassWord :</td>
<td> <input name="password" type="password" size="15"maxlenght = "20"> </td>      </tr>
<tr>
<td>Address :</td>
<td> <textarea name="address" cols="40" rows="5" > </textarea> </td>              </tr>
<tr>
<td>Age: </td>
<td>  <input name="age" type="text" size="5"maxlenght = "3"></td></tr>
<tr>
<tr>
<td>Sex: </td>
<td>  <input type="radio" name="gender" value="Male" />Male</label>
      <input type="radio" name="gender" value="Female" />Female</label>                                                              </td></tr>
<tr>
<td>Interseting : </td>
<td>
         <input type="checkbox" name="like1" value="DEV C++" />DEV C++<br/>
		 <input type="checkbox" name="like2" value="JAVA" />JAVA<br/>
		 <input type="checkbox" name="like3" value="PHP" />PHP<br/>
		 <input type="checkbox" name="like4" value="SQL" />SQL<br/>

</td>
</tr>
<tr>
<td><input type="submit" name="Submit" value="SUMMIT"/>
<input type="reset" name="reset" value="RESET" /></td>
</table>


        </form>
    </body>
</html>
