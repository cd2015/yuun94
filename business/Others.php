<?php
    //Query that requests for all categories from ther table
    $sql = "SELECT * from add_business WHERE category='others' AND region = 'Kampala'";
    $query = mysqli_query($conn, $sql);

    if (!$query->num_rows){

                echo '<p>','No Other Businesses!','</p>';

        } else {

    while($result = mysqli_fetch_assoc($query)){
?>       
<li class="locBrowse">
     <a href="">
         <div class="resImg">
             <img width="130px" height="110px" src ="../../../uploads/<?php echo $result['logo'];?>"/>
         </div>
         <div class="resDesc">
             <div class="resplaceName">
                 <h4 class="rD"><?php echo $result['business_name']; ?></h4>
             </div>
             <div class="resplaceAddeess">
                 <h5 class="rD"><?php echo $result['location']; ?></h5>
             </div>
             <div class="resplacePhone">
                 <h6 class="rD"><?php echo $result['mob_no']; ?></h6>
             </div>
             <div class="resplaceEmail">
                 <h6 class="rD"><?php echo $result['email']; ?></h6>
             </div>
             <div class="resplaceRate">
                 <div class="rating" data-rating="4">
                     <span class="stars">
                         <i class="fa fa-star s1 active" data-score="1"></i>
                         <i class="fa fa-star s2 active" data-score="2"></i>
                         <i class="fa fa-star s3 active" data-score="3"></i>
                         <i class="fa fa-star s4 active" data-score="4"></i>
                         <i class="fa fa-star s5" data-score="5"></i>
                     </span>
                 </div>
             </div>
         </div>
     </a>
</li>
    <?php } ?>
<?php } ?>

                        
<ul class="area" id="Ebb">
    <h4 class="areaName">Entebbe</h4>
        <?php
            //Query that requests for all categories from ther table
            $sql = "SELECT * from add_business WHERE category='Others' AND region = 'Entebbe'";
            $query = mysqli_query($conn, $sql);

            if (!$query->num_rows){

                        echo '<p>','No Other Businesses !','</p>';

                } else {

            while($result = mysqli_fetch_assoc($query)){
        ?>       
       <li class="locBrowse">
            <a href="">
                <div class="resImg">
                    <img width="130px" height="110px" src ="../../../uploads/<?php echo $result['logo'];?>"/>
                </div>
                <div class="resDesc">
                    <div class="resplaceName">
                        <h4 class="rD"><?php echo $result['business_name']; ?></h4>
                    </div>
                    <div class="resplaceAddeess">
                        <h5 class="rD"><?php echo $result['location']; ?></h5>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="rD"><?php echo $result['mob_no']; ?></h6>
                    </div>
                    <div class="resplaceEmail">
                        <h6 class="rD"><?php echo $result['email']; ?></h6>
                    </div>
                    <div class="resplaceRate">
                        <div class="rating" data-rating="4">
                            <span class="stars">
                                <i class="fa fa-star s1 active" data-score="1"></i>
                                <i class="fa fa-star s2 active" data-score="2"></i>
                                <i class="fa fa-star s3 active" data-score="3"></i>
                                <i class="fa fa-star s4 active" data-score="4"></i>
                                <i class="fa fa-star s5" data-score="5"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <?php } ?>
    <?php } ?>
</ul>
                        
                        
<ul class="area" id="mbra">
   <h4 class="areaName">Mbarara</h4>
       <?php
           //Query that requests for all categories from ther table
           $sql = "SELECT * from add_business WHERE category='Couriers' AND region = 'Mbarara'";
           $query = mysqli_query($conn, $sql);

           if (!$query->num_rows){

                       echo '<p>','No Couriers!','</p>';

               } else {

           while($result = mysqli_fetch_assoc($query)){
       ?>       
      <li class="locBrowse">
           <a href="">
               <div class="resImg">
                   <img width="130px" height="110px" src ="../../../uploads/<?php echo $result['logo'];?>"/>
               </div>
               <div class="resDesc">
                   <div class="resplaceName">
                       <h4 class="rD"><?php echo $result['business_name']; ?></h4>
                   </div>
                   <div class="resplaceAddeess">
                       <h5 class="rD"><?php echo $result['location']; ?></h5>
                   </div>
                   <div class="resplacePhone">
                       <h6 class="rD"><?php echo $result['mob_no']; ?></h6>
                   </div>
                   <div class="resplaceEmail">
                       <h6 class="rD"><?php echo $result['email']; ?></h6>
                   </div>
                   <div class="resplaceRate">
                       <div class="rating" data-rating="4">
                           <span class="stars">
                               <i class="fa fa-star s1 active" data-score="1"></i>
                               <i class="fa fa-star s2 active" data-score="2"></i>
                               <i class="fa fa-star s3 active" data-score="3"></i>
                               <i class="fa fa-star s4 active" data-score="4"></i>
                               <i class="fa fa-star s5" data-score="5"></i>
                           </span>
                       </div>
                   </div>
               </div>
           </a>
       </li>
       <?php } ?>
   <?php } ?>
</ul>
                         

<ul class="area" id="jinja">
    <h4 class="areaName">Jinja</h4>
        <?php
            //Query that requests for all categories from ther table
            $sql = "SELECT * from add_business WHERE category='Couriers' AND region = 'Jinja'";
            $query = mysqli_query($conn, $sql);

            if (!$query->num_rows){

                        echo '<p>','No Couriers!','</p>';

                } else {

            while($result = mysqli_fetch_assoc($query)){
        ?>       
       <li class="locBrowse">
            <a href="">
                <div class="resImg">
                    <img width="130px" height="110px" src ="../../../uploads/<?php echo $result['logo'];?>"/>
                </div>
                <div class="resDesc">
                    <div class="resplaceName">
                        <h4 class="rD"><?php echo $result['business_name']; ?></h4>
                    </div>
                    <div class="resplaceAddeess">
                        <h5 class="rD"><?php echo $result['location']; ?></h5>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="rD"><?php echo $result['mob_no']; ?></h6>
                    </div>
                    <div class="resplaceEmail">
                        <h6 class="rD"><?php echo $result['email']; ?></h6>
                    </div>
                    <div class="resplaceRate">
                        <div class="rating" data-rating="4">
                            <span class="stars">
                                <i class="fa fa-star s1 active" data-score="1"></i>
                                <i class="fa fa-star s2 active" data-score="2"></i>
                                <i class="fa fa-star s3 active" data-score="3"></i>
                                <i class="fa fa-star s4 active" data-score="4"></i>
                                <i class="fa fa-star s5" data-score="5"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <?php } ?>
    <?php } ?>
</ul>
                        

<ul class="area" id="fort">
    <h4 class="areaName">Fort Portal</h4>
        <?php
            //Query that requests for all categories from ther table
            $sql = "SELECT * from add_business WHERE category='Couriers' AND region = 'fort portal'";
            $query = mysqli_query($conn, $sql);

            if (!$query->num_rows){

                        echo '<p>','No Couriers!','</p>';

                } else {

            while($result = mysqli_fetch_assoc($query)){
        ?>       
       <li class="locBrowse">
            <a href="">
                <div class="resImg">
                    <img width="130px" height="110px" src ="../../../uploads/<?php echo $result['logo'];?>"/>
                </div>
                <div class="resDesc">
                    <div class="resplaceName">
                        <h4 class="rD"><?php echo $result['business_name']; ?></h4>
                    </div>
                    <div class="resplaceAddeess">
                        <h5 class="rD"><?php echo $result['location']; ?></h5>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="rD"><?php echo $result['mob_no']; ?></h6>
                    </div>
                    <div class="resplaceEmail">
                        <h6 class="rD"><?php echo $result['email']; ?></h6>
                    </div>
                    <div class="resplaceRate">
                        <div class="rating" data-rating="4">
                            <span class="stars">
                                <i class="fa fa-star s1 active" data-score="1"></i>
                                <i class="fa fa-star s2 active" data-score="2"></i>
                                <i class="fa fa-star s3 active" data-score="3"></i>
                                <i class="fa fa-star s4 active" data-score="4"></i>
                                <i class="fa fa-star s5" data-score="5"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <?php } ?>
    <?php } ?>
</ul>
                        

<ul class="area" id="mbale">
    <h4 class="areaName">Mbale</h4>
        <?php
            //Query that requests for all categories from ther table
            $sql = "SELECT * from add_business WHERE category='Couriers' AND region = 'mbale'";
            $query = mysqli_query($conn, $sql);

            if (!$query->num_rows){

                        echo '<p>','No Couriers!','</p>';

                } else {

            while($result = mysqli_fetch_assoc($query)){
        ?>       
       <li class="locBrowse">
            <a href="">
                <div class="resImg">
                    <img width="130px" height="110px" src ="../../../uploads/<?php echo $result['logo'];?>"/>
                </div>
                <div class="resDesc">
                    <div class="resplaceName">
                        <h4 class="rD"><?php echo $result['business_name']; ?></h4>
                    </div>
                    <div class="resplaceAddeess">
                        <h5 class="rD"><?php echo $result['location']; ?></h5>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="rD"><?php echo $result['mob_no']; ?></h6>
                    </div>
                    <div class="resplaceEmail">
                        <h6 class="rD"><?php echo $result['email']; ?></h6>
                    </div>
                    <div class="resplaceRate">
                        <div class="rating" data-rating="4">
                            <span class="stars">
                                <i class="fa fa-star s1 active" data-score="1"></i>
                                <i class="fa fa-star s2 active" data-score="2"></i>
                                <i class="fa fa-star s3 active" data-score="3"></i>
                                <i class="fa fa-star s4 active" data-score="4"></i>
                                <i class="fa fa-star s5" data-score="5"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <?php } ?>
    <?php } ?>
</ul>
            
                        
<ul class="area" id="others">
    <h4 class="areaName">Gulu</h4>
        <?php
            //Query that requests for all categories from ther table
            $sql = "SELECT * from add_business WHERE category='Couriers' AND region = 'Gulu'";
            $query = mysqli_query($conn, $sql);

            if (!$query->num_rows){

                        echo '<p>','No Couriers!','</p>';

                } else {

            while($result = mysqli_fetch_assoc($query)){
        ?>       
       <li class="locBrowse">
            <a href="">
                <div class="resImg">
                    <img width="130px" height="110px" src ="../../../uploads/<?php echo $result['logo'];?>"/>
                </div>
                <div class="resDesc">
                    <div class="resplaceName">
                        <h4 class="rD"><?php echo $result['business_name']; ?></h4>
                    </div>
                    <div class="resplaceAddeess">
                        <h5 class="rD"><?php echo $result['location']; ?></h5>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="rD"><?php echo $result['mob_no']; ?></h6>
                    </div>
                    <div class="resplaceEmail">
                        <h6 class="rD"><?php echo $result['email']; ?></h6>
                    </div>
                    <div class="resplaceRate">
                        <div class="rating" data-rating="4">
                            <span class="stars">
                                <i class="fa fa-star s1 active" data-score="1"></i>
                                <i class="fa fa-star s2 active" data-score="2"></i>
                                <i class="fa fa-star s3 active" data-score="3"></i>
                                <i class="fa fa-star s4 active" data-score="4"></i>
                                <i class="fa fa-star s5" data-score="5"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <?php } ?>
    <?php } ?>
</ul>
                        

<ul class="area" id="others">
    <h4 class="areaName">Rest of Uganda</h4>
        <?php
            //Query that requests for all categories from ther table
            $sql = "SELECT * from add_business WHERE category='Couriers' AND region = 'others'";
            $query = mysqli_query($conn, $sql);

            if (!$query->num_rows){

                        echo '<p>','No Couriers!','</p>';

                } else {

            while($result = mysqli_fetch_assoc($query)){
        ?>       
       <li class="locBrowse">
            <a href="">
                <div class="resImg">
                    <img width="130px" height="110px" src ="../../../uploads/<?php echo $result['logo'];?>"/>
                </div>
                <div class="resDesc">
                    <div class="resplaceName">
                        <h4 class="rD"><?php echo $result['business_name']; ?></h4>
                    </div>
                    <div class="resplaceAddeess">
                        <h5 class="rD"><?php echo $result['location']; ?></h5>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="rD"><?php echo $result['mob_no']; ?></h6>
                    </div>
                    <div class="resplaceEmail">
                        <h6 class="rD"><?php echo $result['email']; ?></h6>
                    </div>
                    <div class="resplaceRate">
                        <div class="rating" data-rating="4">
                            <span class="stars">
                                <i class="fa fa-star s1 active" data-score="1"></i>
                                <i class="fa fa-star s2 active" data-score="2"></i>
                                <i class="fa fa-star s3 active" data-score="3"></i>
                                <i class="fa fa-star s4 active" data-score="4"></i>
                                <i class="fa fa-star s5" data-score="5"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <?php } ?>
    <?php } ?>
</ul>

