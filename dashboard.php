<?php
   // session_start();
   // require("isAuth.php");
?>
<?php include('includes/common-head.php'); ?>
    <title>Dashboard</title>
  </head>
  <body style="background-image: linear-gradient(
            to right,
            #cd9575,
            #d3a388,
            #dab29a,
            #e1c0ad,
            #e8cec0
    );">
    <?php include('includes/nav.php'); ?>
    <div class="wrapper">
      <div class="menu">
        <div class="menu__item">
            <a href="add-product.php">
                <div class="menu__icon">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="-457 259 44 44" style="enable-background:new -457 259 44 44;"
                        xml:space="preserve">
                        <path d="M-435,303c-3.3,0-6-2.7-6-5.9V287h-10.1c-3.3,0-5.9-2.7-5.9-6s2.7-6,5.9-6h10.1v-10.1c0-3.3,2.7-5.9,6-5.9s6,2.7,6,5.9V275
                                                                       h10.1c3.3,0,5.9,2.7,5.9,6s-2.7,6-5.9,6H-429v10.1C-429,300.3-431.7,303-435,303z M-451.1,277c-2.1,0-3.9,1.8-3.9,4s1.8,4,3.9,4
                                                                       h12.1v12.1c0,2.1,1.8,3.9,4,3.9s4-1.8,4-3.9V285h12.1c2.1,0,3.9-1.8,3.9-4s-1.8-4-3.9-4H-431v-12.1c0-2.1-1.8-3.9-4-3.9
                                                                       s-4,1.8-4,3.9V277H-451.1z" />
                    </svg>
                </div>
                <div class="menu__name">Add Product</div>
            </a>
        </div>
        <div class="menu__item">
            <a href="view-products.php">
                <div class="menu__icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="11 259 44 44"
                        style="enable-background:new 11 259 44 44;" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M54.1,278.9c-2.4-3.1-5.6-5.7-9.2-7.5c-3.6-1.8-7.5-2.8-11.6-2.8c-0.1,0-0.6,0-0.7,0c-4.1,0-8,1-11.6,2.8
                                                           c-3.6,1.8-6.7,4.4-9.2,7.5c-0.9,1.2-0.9,2.9,0,4.1c2.4,3.1,5.6,5.7,9.2,7.5c3.6,1.8,7.5,2.8,11.6,2.8c0.1,0,0.6,0,0.7,0
                                                           c4.1,0,8-1,11.6-2.8c3.6-1.8,6.7-4.4,9.2-7.5C55.1,281.8,55.1,280.2,54.1,278.9z M21.9,289c-3.3-1.7-6.3-4.1-8.6-7
                                                           c-0.4-0.6-0.4-1.4,0-1.9c2.3-2.9,5.3-5.4,8.6-7c0.9-0.5,1.9-0.9,2.9-1.2c-2.5,2.3-4.1,5.6-4.1,9.2c0,3.6,1.6,6.9,4.1,9.2
                                                           C23.8,289.9,22.8,289.4,21.9,289z M33,291.6c-5.8,0-10.6-4.8-10.6-10.6s4.8-10.6,10.6-10.6s10.6,4.8,10.6,10.6
                                                           C43.6,286.8,38.8,291.6,33,291.6z M52.7,282c-2.3,2.9-5.3,5.4-8.6,7c-0.9,0.5-1.9,0.9-2.9,1.2c2.5-2.3,4.1-5.6,4.1-9.2
                                                           c0-3.6-1.6-6.9-4.1-9.2c1,0.3,1.9,0.8,2.9,1.2c3.3,1.7,6.3,4.1,8.6,7C53.2,280.6,53.2,281.4,52.7,282z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M33,276.5c-2.5,0-4.5,2-4.5,4.5s2,4.5,4.5,4.5s4.5-2,4.5-4.5C37.5,278.5,35.5,276.5,33,276.5z M33,283.8
                                                           c-1.5,0-2.8-1.2-2.8-2.8c0-1.5,1.2-2.8,2.8-2.8c1.5,0,2.8,1.2,2.8,2.8C35.8,282.5,34.5,283.8,33,283.8z" />
                            </g>
                        </g>
                    </svg>
                </div>
        
                <div class="menu__name">View Products</div>
            </a>
        </div>

      </div>
    </div>

    <script src="js/main.js"></script>
  </body>
</html>
