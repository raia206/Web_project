<?php
   // session_start();
    //require("isAuth.php");
?>
<?php include('includes/common-head.php'); ?>
    <title>Add Product</title>
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
    <div class="modal__overlay">
        <div class="modal">
            <div class="modal__msg"></div>
            <div class="modal__cta">
                <button class="btn modal__btn" type="button">OK</button>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="heading">Add Product</div>
        <div class="product">
            <form id="add-product-form">
                <div class="product__image">
                    <div class="product__preview">
                    </div>
                    <div class="product__overlay">
                        <input id="product_image" type="file" name="product_image[]" multiple accept="image/*">
                    </div>
                </div>
                <div class="product__desc">
                    <div class="product__desc__container">
                        <div class="product__name">
                            <label for="">Product Name</label>
                            <input type="text" name="product_name" placeholder="Enter Product Name">
                        </div>
                        <div class="product__price">
                            <label for="">Product Price</label>
                            <input type="number" name="product_price" placeholder="Enter Product Price">
                        </div>
                        <div class="product__categories">
                            <label for="">Category</label>
                            <div class="categories">
                                <div class="category checked">
                                    <input type="radio" name="product_category" value="1"  checked hidden />
                                    منتجات العناية بمنطقة العيون
                                </div>
                                <div class="category">
                                    <input type="radio" name="product_category" value="2" hidden />
                                   منتجات العناية بالشعر
                                </div>
                                <div class="category">
                                    <input type="radio" name="product_category" value="3" hidden />
                                    منتجات العناية بالبشرة والجسم
                                </div>
                                <div class="category">
                                    <input type="radio" name="product_category" value="4" hidden />
                                    منتجات العناية بالأسنان
                                </div>
                            </div>
                        </div>
                        <div class="product__description">
                            <label for="">Product Description</label>
                            <textarea name="product_description" cols="30" rows="5" placeholder="Enter Product Description"></textarea>
                        </div>
                        <div class="product__add">
                            <input type="submit" value="Add Product">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- <script src="js/main.js"></script> -->
    <script src="js/add-product.js"></script>
  </body>
</html>
