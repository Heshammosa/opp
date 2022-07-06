<?php

include "header.php";
include "navbar.php";
?>
 <section id="page-header" class="about-header">
        <h2>#Cart</h2>
        <p>Let's see what you have.</p>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>price</td>
                    <td>Quntaty</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="far fa-times-circle"></i></td>
                    <td><img src="img/products/f1.jpg" alt="product1"></td>
                    <td>Cartoon Astrunate t-shirt</td>
                    <td>$118.25</td>
                    <td><input type="number" value="1"></td>
                    <td>$118.25</td>
                </tr>
                <tr>
                    <td><i class="far fa-times-circle"></i></td>
                    <td><img src="img/products/f2.jpg" alt="product1"></td>
                    <td>Cartoon Astrunate t-shirt</td>
                    <td>$75.25</td>
                    <td><input type="number" value="1"></td>
                    <td>$75.25</td>
                </tr>
                <tr>
                    <td><i class="far fa-times-circle"></i></td>
                    <td><img src="img/products/f6.jpg" alt="product1"></td>
                    <td>Cartoon Astrunate t-shirt</td>
                    <td>$158</td>
                    <td><input type="number" value="1"></td>
                    <td>$158</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Coupon</h3>
            <input type="text" placeholder="Enter coupon code">
            <button class="normal">Apply</button>
        </div>
        <div id="subTotal">
            <h3>Cart totals</h3>
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$118.25</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$118.25</strong></td>
                </tr>
            </table>
            <button class="normal">proceed to checkout</button>
        </div>
    </section>
    <?php include "footer.php" ?>; 