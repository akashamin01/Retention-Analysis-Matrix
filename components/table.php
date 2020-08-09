<?php 
                                        $conn = new mysqli(DB_HOST , DB_USER , DB_PASS , DB_NAME); 
                                        if (mysqli_connect_errno()) 
                                        { 
                                            echo "Database connection failed."; 
                                        } 
                                        
                                        for ($x = 1; $x <= 6; $x++) {
                                        $sqlnw1 = "SELECT * FROM `table 1` WHERE (is_new_user = 1) AND (login_time = $x)";
                                        $result = mysqli_query($conn,$sqlnw1);
                                        if ($result) 
                                        { 
        
                                            $row = mysqli_num_rows($result); 
                                            
                            if ($row) { ?>
                        <tr> 
                            <td class="bg-dark-blue">week <?php echo $x;  ?></td>
                                    
                            <td><?php echo $row ?></td> 
                                <?php
                                    for($j = 1; $j <= 6; $j++){
                                        $sqlnw1 = "SELECT DISTINCT (user_id) FROM `table 1` 
                                        WHERE user_id IN 
                                        (SELECT DISTINCT (user_id) FROM `table 1` WHERE (is_new_user = 1) AND (login_time= $x)) AND (is_new_user = 0 ) AND (login_time = $j)";
                                        $result = mysqli_query($conn,$sqlnw1);
                                    
                                    if ($result) 
                                    { 
    
                                        $new = mysqli_num_rows($result); 
                                        
                                            if ($new) 
                                            { 
                                ?>

                            <td><?php echo number_format($new/$row*100, 3)?>%</td> 
                                    <?php }
                                            } 
                                    } ?>
                        </tr>  
                            <?php }} 
                                        mysqli_free_result($result); 
                                    } ?>