<!DOCTYPE html>
<html> 
    <head>
       <title>Search Engine</title>
    
    </head>

<body bgcolor="grey">
   <form action="insert_site.php" method="post" enctype="multipart/form-date">
     <table bgcolor="orange" width="500" border="2" cellspacing="2" align="center">
       <tr>
         <td colspan="5" align="center">Inserting new website:</td>
       </tr>

       <tr>
         <td align="right"><b>Site Title:</b></td>
         <td><input type="text" name="site_title"></td>
       </tr>

       <tr>
         <td align="right"><b>Site Link:</b></td>
         <td><input type="text" name="site_link"></td>
       </tr>

       <tr>
         <td align="right"><b>Site Keywords:</b></td>
         <td><input type="text" name="site_keywords"></td>
       </tr>

       <tr>
         <td align="right"><b>Site Description:</b></td>
         <td><textarea cols="16" rows="8" name="site_desc"></textarea></td>
       </tr>

       <tr>
         <td align="right"><b>Site Image:</b></td>
         <td><input type="text" name="site_image"></td>
       </tr>

       <tr>
         <td align="center" colspan="5"> <input type="submit" name="submit" value="Add Site Now"></td>
     </table>

   </form>



</body>
</html>

<?php
   mysql_connect("localhost", "root", "");
   mysql_select_db("search");

   if (isset($_POST['submit'])){

       echo $site_title = $_POST ['site_title'];
       echo $site_link = $_POST ['site_link'];
       echo $site_keywords = $_POST ['site_keywords'];
       echo $site_desc = $_POST ['site_desc'];
       echo $site_image = $_FILES ['site_title'] ['name'];
       echo $site_image = $_FILES ['site_title'] ['tmp name']

   }



?>