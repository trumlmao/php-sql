<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        if(isset($_POST["a"])&& isset($_POST["b"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
            if($a == 0){
                if($b == 0){
                    $nghiem = "vo so nghiem";
                }else{
                    $nghiem = "vo nghiem";
                }
            }else{
                $x = -($b/$a);
                $x = round($x,2);
                $nghiem = "x = $x";
            }
        }
    ?>
</head>
<body>
<form action="vidu.php" method="post" >
<table width="744" border="1">
<tr>
<td colspan="3" bgcolor="#336699"><strong>Giải phương trình bậc 1 </strong></td>
</tr>
<tr>
<td width="120">Phương trình </td>
<td width="250">
<input name="a" type="text" />

X + </td>
<td width="352"><label for="textfield"></label>
<input name="b" type="text" id="textfield" />
= 0</td>
</tr>
<tr>
<td colspan="3">
Nghiệm
<label for="textfield2"></label>
<input name="kq" type="text" id="textfield2" value="<?php if(isset($nghiem)) echo $nghiem;
?>" /></tr>
<tr>
<td colspan="3" align="center" valign="middle"><input type="submit" name="chao"
id="chao" value="Xuất" /></td>
</tr>
</table>
</form>
</body>
</html>