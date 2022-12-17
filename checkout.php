<?php include('includes/header.php');?>
<main>
    <section class="section-5 pt-3 pb-3 mb-3 bg-white">
        <div class="container">
            <div class="light-font">
                <ol class="breadcrumb primary-color mb-0">
                    <li class="breadcrumb-item"><a class="white-text" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="white-text" href="#">Shop</a></li>
                    <li class="breadcrumb-item">Checkout</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="section-9 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="sub-title">
                        <h2>Billing Address</h2>
                    </div>
                    <div class="card shadow-lg border-0">
                        <div class="card-body checkout-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter Your First Name">
                                    </div>            
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="first_name">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Your Last Name">
                                    </div>            
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="first_name">Email</label>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                                    </div>            
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="first_name">Mobile No</label>
                                        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Your Mobile No.">
                                    </div>            
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="first_name">Address 1</label>
                                        <textarea name="address_one" id="address_one" cols="30" rows="4" class="form-control"></textarea>
                                    </div>            
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="first_name">Address 2</label>
                                        <textarea name="address_two" id="address_two" cols="30" rows="4" class="form-control"></textarea>
                                    </div>            
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="first_name">Country</label>
                                        <select name="country" id="country" class="form-control">
                                            <option value="">Select a Country</option>
                                            <option value="1">India</option>
                                            <option value="2">UK</option>
                                        </select>
                                    </div>            
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="first_name">State</label>
                                        <input type="text" name="state" id="state" class="form-control" placeholder="Enter State">
                                    </div>            
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="first_name">City</label>
                                        <input type="text" name="city" id="city" class="form-control" placeholder="Enter City">
                                    </div>            
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="first_name">Zip</label>
                                        <input type="text" name="zip" id="zip" class="form-control" placeholder="Enter Zip">
                                    </div>            
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="checkbox" name="isShippingDiffernt" id="isShippingDiffernt" value="1">
                                        <label for="isShippingDiffernt">Ship to different address</label>

                                    </div>            
                                </div>
                            </div>
                        </div>
                    </div>    

                    <div id="shippingForm" class="d-none">

                        <div class="sub-title mt-5">
                            <h2>Shipping Address</h2>
                        </div>
                        <div class="card shadow-lg border-0">
                            <div class="card-body checkout-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first_name">First Name</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter Your First Name">
                                        </div>            
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first_name">Last Name</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Your Last Name">
                                        </div>            
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first_name">Email</label>
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                                        </div>            
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first_name">Mobile No</label>
                                            <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Your Mobile No.">
                                        </div>            
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first_name">Address 1</label>
                                            <textarea name="address_one" id="address_one" cols="30" rows="4" class="form-control"></textarea>
                                        </div>            
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first_name">Address 2</label>
                                            <textarea name="address_two" id="address_two" cols="30" rows="4" class="form-control"></textarea>
                                        </div>            
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first_name">Country</label>
                                            <select name="country" id="country" class="form-control">
                                                <option value="">Select a Country</option>
                                                <option value="1">India</option>
                                                <option value="2">UK</option>
                                            </select>
                                        </div>            
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first_name">State</label>
                                            <input type="text" name="state" id="state" class="form-control" placeholder="Enter State">
                                        </div>            
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first_name">City</label>
                                            <input type="text" name="city" id="city" class="form-control" placeholder="Enter City">
                                        </div>            
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first_name">Zip</label>
                                            <input type="text" name="zip" id="zip" class="form-control" placeholder="Enter Zip">
                                        </div>            
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sub-title">
                        <h2>Order Summery</h3>
                    </div>                    
                    <div class="card cart-summery">
                        <div class="card-body">
                            <div class="d-flex justify-content-between pb-2">
                                <div class="h6">Product Name Goes Here X 1</div>
                                <div class="h6">$100</div>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <div class="h6">Product Name Goes Here X 1</div>
                                <div class="h6">$100</div>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <div class="h6">Product Name Goes Here X 1</div>
                                <div class="h6">$100</div>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <div class="h6">Product Name Goes Here X 1</div>
                                <div class="h6">$100</div>
                            </div>
                            <div class="d-flex justify-content-between summery-end">
                                <div class="h6"><strong>Subtotal</strong></div>
                                <div class="h6"><strong>$400</strong></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div class="h6"><strong>Shipping</strong></div>
                                <div class="h6"><strong>$20</strong></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2 summery-end">
                                <div class="h5"><strong>Total</strong></div>
                                <div class="h5"><strong>$420</strong></div>
                            </div>                            
                        </div>
                    </div>   
                    
                    <div class="card payment-form ">                        
                        <h3 class="card-title h5 mb-3">Payment Details</h3>
                        <div class="card-body p-0">
                            <div class="mb-3">
                                <label for="card_number" class="mb-2">Card Number</label>
                                <input type="text" name="card_number" id="card_number" placeholder="Valid Card Number" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="expiry_date" class="mb-2">Expiry Date</label>
                                    <input type="text" name="expiry_date" id="expiry_date" placeholder="MM/YYYY" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="expiry_date" class="mb-2">CVV Code</label>
                                    <input type="text" name="expiry_date" id="expiry_date" placeholder="123" class="form-control">
                                </div>
                            </div>
                            <div class="pt-4">
                                <a href="#" class="btn-dark btn btn-block w-100">Pay Now</a>
                            </div>
                        </div>                        
                    </div>

                          
                    <!-- CREDIT CARD FORM ENDS HERE -->
                    
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('includes/footer.php');?>