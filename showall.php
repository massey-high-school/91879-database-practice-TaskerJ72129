<?php include "topbit.php";
    
$showall_squl="SELECT *
FROM `2020_L1_Prac_JamTas`
ORDER BY `2020_L1_Prac_JamTas`.`Title` ASC";
$showall_query=mysqli_query($dbconnect, $showall_sql;
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query; 
    
?>


        
        <div class="box main">
            
            <h2>All Items</h2>
            
            <!-- Results go here -->
            <div class="results">
            
                <p>Title: <span class="sub_heading">title holder</span>
                </p>
                
                <p>Author: <span class="sub_heading">author holder</span>
                </p>
                
                <p>Genre: <span class="sub_heading">genre holder</span>
                </p>
                
                <p>Rating: <span class="sub_heading">rating holder</span>
                </p>
                
                <p><span class="sub_heading">Reviw / Response</span></p>
                
                <p>
                    
                    Review Placeholder
                    
                </p>
            </div>

            
        </div>    <!-- / end restults -->


<?php
    include "bottombit.php";
?>        