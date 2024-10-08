<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Digital Menu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
    include 'process_order.php';
    ?>

</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="https://media.istockphoto.com/id/535942959/vector/girl-in-kitchen.jpg?s=612x612&w=0&k=20&c=tApKarwGyhLD-FyDnVmkp-H-ZGuQ3tounsIsB9wF6k8=" alt="Restaurant Logo">
        </div>
        <div class="heading">
            <h1>Welcome to Kaimanam</h1>
        </div>
    </div>

    <!-- Table Selection -->
    <form  id="order-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h2>Menu</h2>
        <label for="tableNumber"> Choose Table Number:</label><br>
        <select name="tableNumber" id="tableNumber">
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
        </select>

        <!-- Menu Items -->
        <div class="menu">
            <!-- Your menu items here -->
            <div class="menu-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg8O1HtfhFrqgvNekflCnro7RWugSGrPBl9w&usqp=CAU" alt="cutlet">
                <h3>Cutlet</h3>
                <p>A crispy crunch.</p>
                <p>Price: ₹25</p>
                <button type="button"  onclick="addItem('Cutlet[]', 25)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1HcQIG-XtruaadUD57PWX49_7zXkMIMBCSA&usqp=CAU" alt="Medhu Vadai">
                <h3>Medhu Vadai</h3>
                <p>As soft it is.</p>
                <p>Price: ₹10</p>
                <button type="button" onclick="addItem('Medhu Vadai[]', 10)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVlTQtRe4lg8EHqPBpBfodSGPWkiTNEu2cbw&usqp=CAU" alt="vadai">
                <h3>Masala Vadai</h3>
                <p>As crunch it is.</p>
                <p>Price: ₹10</p>
                <button type="button" onclick="addItem('Masala Vadai[]', 10)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYDtsBwQf2O-II7A8bYS1sbLZJMBog3goc6Q&usqp=CAU" alt="Banana Bajji">
                <h3>Banana Bajji</h3>
                <p>As hot it is.</p>
                <p>Price: ₹10</p>
                <button type="button" onclick="addItem('Banana Bajji[]', 10)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ831GR5cPryo_pCPCDkMXF6H4n8yAu-r8ctg&usqp=CAU" alt="onion">
                <h3>Onion Bajji</h3>
                <p>As hot  it is.</p>
                <p>Price: ₹10</p>
                <button type="button" onclick="addItem('Onion Bajji[]', 10)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7syHNnAuSSQS96hOHryKraMQfwIPj5OJ57g&usqp=CAU" alt="idili">
                <h3>Idili</h3>
                <p>A good dinner selection.</p>
                <p>Price: ₹12(1 piece)</p>
                <button type="button" onclick="addItem('Idili[]', 12)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRj0Ky_wW_MZERWAV3Rmh5xB5hMaKzmT59xKA&usqp=CAU" alt="chapathi">
                <h3>Chapathi</h3>
                <p>A combo.</p>
                <p>Price: ₹50(3 piece)</p>
                <button type="button" onclick="addItem('Chapathi[]', 50)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQ__RECTpIInVfbsO5AN9GbmFbfboeTB-15Q&usqp=CAU" alt="pongal">
                <h3>Pongal</h3>
                <p>Makes me sleepy.</p>
                <p>Price: ₹50(1 set)</p>
                <button type="button" onclick="addItem('Pongal[]', 50)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScXru1zan-jXXzopGpt4xvMJOzAzYq4FzcLQ&usqp=CAU" alt="dosa">
                <h3>Dosa</h3>
                <p>Delight dinner.</p>
                <p>Price: ₹30(1 piece)</p>
                <button type="button" onclick="addItem('Dosa[]', 30)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA6QLzPV-70Jkruwe_N1IH_b6TRiOsP0PABA&usqp=CAU" alt="panner dosa">
                <h3>Panner Dosa</h3>
                <p>Delight dinner with a taste of milk.</p>
                <p>Price: ₹50(1 piece)</p>
                <button type="button" onclick="addItem('Panner Dosa[]', 50)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjgaXEblJr5qaJQqxifW5Z1CClRG-xslkZAQ&usqp=CAU" alt="noodles">
                <h3>Noodles</h3>
                <p>A long way from japan.</p>
                <p>Price: ₹70</p>
                <button type="button" onclick="addItem('Noodles[]', 70)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd-BS9cHOwoM5ROCtHZmXl3HdcOcEXahRVCg&usqp=CAU" alt="idiyappam">
                <h3>Idiyappam</h3>
                <p>A traditional way of India.</p>
                <p>Price: ₹50(3 piece)</p>
                <button type="button" onclick="addItem('Idiyappam[]', 50)">Add to Cart</button>
            </div>
            
            <!-- Add more menu items here -->
        </div>


        <!-- Shopping Cart -->
        <div class="cart">
            <h2>Shopping Cart</h2>
            <ul id="cart-items">
                <!-- Cart items will be displayed here -->
            </ul>
            <p>Total: <span id="cart-total">₹0.00</span></p>
            <input type="hidden" id="totalAmount" name="totalAmount" value="0">
        </div>
        <div id="orders"><!---for appending input field-->

        </div>

        <!-- Submit button -->
       <div class="button2">
            <button type="submit" target="_blank" id="submit-button">Submit Order</button>
            
        </div>
        
    </form>
    
   
    <script src="menu.js"></script>
</body>
</html>

