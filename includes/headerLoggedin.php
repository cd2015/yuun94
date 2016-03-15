<script type="text/javascript" src="../scripts/notAvailable.js"></script>
        <header id="header">
            <div class="container">
                <a href="../index.php" id="logo" title="Yuunga Logo">
                    <img src="../images/yunga logo.gif" alt="Yunga" height="60" width="142">
                </a>
                <div class="menu-trigger"></div>
                <nav id="menu">
                    <ul>
                        <li id="menubrowse">
                           <a href="../dashboard" >
                                DASH BOARD
                            </a>
                         </li>
                        <li>
                            <a href="../yuungacircle" >
                                Yunga Circle
                            </a>
                        </li>
                        <li>
                            <a href="../addlocation/">
                                <i class="fa fa-map-marker"></i>
                                Location Management
                            </a>
                        </li>
                        
                        <li>
                            <a href="">
                                Advertise
                            </a>
                        </li>
                        <li>
                            <a href="#fancy" class="get-contact">
                                <i class="fa fa-mobile"></i>
                                CONTACT US
                            </a>
                        </li>
                        <li >
                            HELLO :
                            <?php 
                            echo htmlentities($_SESSION['username']);
                            ?>
                            <a href="../includes/logout.php">
                                <i class="fa fa-sign-out"></i>
                                LOG OUT
                            </a>
                        </li>
                        
                       
                    </ul>
                </nav>
                <!-- / navigation -->
            </div>
            <!-- / container -->

        </header>
        <!-- / header -->