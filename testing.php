<?php include "header.php";
/*
 * "[
<br />
<b>Fatal error</b>:  Undefined class constant 'MYSQL_ATTR_FOUND_ROWS' in <b>/var/www/html/serviceout.php</b> on line <b>45</b><br />
"
 *
 * "[
<br />
<b>Fatal error</b>:  Uncaught PDOException: SQLSTATE[HY000] [2002] No such file or directory in /var/www/html/serviceout.php:45
Stack trace:
#0 /var/www/html/serviceout.php(45): PDO-&gt;__construct('mysql:host=loca...', 'root', '', Array)
#1 {main}
  thrown in <b>/var/www/html/serviceout.php</b> on line <b>45</b><br />
"
 */
?>
<script type="text/javascript">
    $( document ).ready(function() {
        url = "serviceout.php?mikro=true&from=0";
        $.ajax({
         url: url,
         dataType: 'json',
         mikro: true,
            success: function (data) {
                alert("success")
            },
            error:function (error) {
                alert("error")
            }
        })
    })
</script>

