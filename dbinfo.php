<?php
   const hostname = "localhost";
   const username = "root";
   const password = "";
   const dbname = "eshopDB";
?>
 <!-- include './dbinfo.php';
                $con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);
                $qry = "select * from productmaster where ptype='TV'";
                $result = mysqli_query($con, $qry);
                if(mysqli_num_rows($result)>0)
                {
                    $count = 0;
                    while($r = mysqli_fetch_assoc($result)){
                        if($count==0)
                            echo "<div class='row'>";
$count++;
                        echo "<div class='column' align='center'>";
                            echo "<div class='product'>";
                                echo "<div class='row1'>";
                                    echo "<div class='datacolumn'><img src='$r[pimage]' width='280px' height='180px' /></div>";
                                echo "</div>";
                                echo"<div class='row1'>";
echo "<div class='datacolumn'>Rs. $r[pprice]</div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                        
                        if($count==4){
                            echo "</div>";
                            $count=0;
                        }
                    }
                }
                else{
                    echo "<h2>No Product Found!!!</h2>";
                }
mysqli_close($con);-->