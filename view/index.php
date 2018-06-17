<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Havana Marys Tasty Truck</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">    
</head>
    <body>
        <div id="wrapper">
            <header>
                <img src="images/logo.svg" alt="Logo" />
            </header>
<!--Navigation Starts Here-->
            <nav>
                <ul>
                    <li>
                       <a href="#">Menu</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="#">Hours</a>
                    </li>
                </ul>
            </nav>
<!--Menu Starts Here-->
        <main>
            <h2 id="menuOrder">Menu</h2>
                <form id="menu" action="" method="post" >
                    <fieldset>
                        <?php foreach ($products as $product): ?>
                            <div class="field">
                                <label id="menuItems" for="product_<?php echo $product->id ?>"><?php echo $product->getName() . ' - ' . $product->getCost(); echo '<br><p><span>' . $product->getDescription() . '</span></p>' ?></label>
                                <input id="menuBox" type="checkbox" id="product_<?php echo $product->id; ?>" name="product_check[]" value="<?php echo $product->id ?>" />
                            <hr/>
                            </div>
                        <?php endforeach; ?>                    
                        <input id="submit" type="submit" value="Add to cart!" name="add" />
                    </fieldset>
                </form>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
            <script type="text/javascript" src="js/default.js"></script>
        </main>
<!--Cart Starts Here-->
    <aside>
        <h2 id="menuOrder">Your Order</h2>
            <form id="orders" action="" method="post">
                <input type="hidden" value="cart" name="cart" />
                    <fieldset>
                        <?php $cartItems = $cart->getAll(); ?>
                        <?php if ( ! empty($cartItems)): ?>
                        <?php foreach ($cartItems as $i => $item): ?>
                    <div>
                        <label id="orderItems"><?php echo $item['item']->getName(); ?> [ <?php echo $item['item']->getCost(); ?> ]</label>
                    <br />
                        <span>Amount:</span><input type="text"  class="amount" name="amount_<?php echo $i ?>" value="<?php echo $item['amount'] ?>" disabled="disabled" />
                        <label for="remove_product_<?php echo $i ?>">Remove</label>
                        <input type="checkbox" name="remove_product[]" id="remove_product_<?php echo $i ?>" value="<?php echo $i ?>" />
                        <?php endforeach; ?>
                    </div>
                    <hr/>
                    <div id="placeOrder">
                        <label>Total with tax</label>
                        <input type="text" disabled="disabled" class="ui-state-default" value="<?php echo $cart->getTotal(); ?>" />
                        <input id="button" type="submit" value="Remove checked" name="remove" />
                        <input id="button" type="submit" value="Empty cart" name="empty" />
                        <?php endif; ?>
                    </div>
                    </fieldset>
            </form>
    </aside>
<!--End Starts Here-->
    <footer>
        <ul>
            <li>
			    Copyright 2018 &copy; 
		    </li>
			<li>
				All rights reserved 
			</li>
			<li>
			    Design by <a href="http://emiliochavez.com/" target="_blank">Emilio Chavez</a>
			</li>	
        </ul>
    </footer> 
</div>


</body>
</html>