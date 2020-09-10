
                <?php 
    if($course->discount_price AND $course->discount_price > 0){
            $finalPrice = $course->discount_price;
    }else {
            $finalPrice = $course->actual_price;  
        }
    ?>
    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
            <div class="row" style="margin-bottom:40px;">
            <div>
                

                @if(Auth::check())
                    <input type="hidden" name="email" value="{{ Auth::user()->email }}"> {{-- required --}}
                @else 
                        <!-- Actual Price Field -->
                    <div class="form-group col-sm-12">
                        
                            <input class="form-control" type="email" name="email"
                             value="" placeholder="Enter your valid email" required="required"> {{-- required --}}

                             <input class="form-control" type="text" name="first_name" id="first_name"
                             value="" placeholder="Enter your first name" required="required">

                             <input class="form-control" type="text" name="last_name" id="last_name"
                             value="" placeholder="Enter your last name" required="required">
                
                    </div>                   

                    

                @endif

                <input type="hidden" name="orderID" value="{{ $course->id }}">
                <input type="hidden" name="amount" value="{{ ($finalPrice*100) }}"> {{-- required in kobo --}}
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="course_id" id="course_id" value="{{ $course->id }}">
                <input type="hidden" name="customer_email" id="customer_email" value="{{ $course->user['email'] }}">
                <input type="hidden" name="metadata[]" id="metadata" value="">
                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                <br/>
                <h4><b>You can pay with Paystack</b></h4>
                <p>
                <button class="btn btn-success btn-lg " onmousedown="fetchMetaValues()" type="submit" value="Get Now!">
                <i class="glyphicon glyphicon-inbox"></i>Pay with Paystack
                </button>
                
                </p>
                <br />
                <script
                    src="https://www.paypal.com/sdk/js?client-id=Aa5bIgk90me5uxHQOmAztfQs4mgGp7wLqXK5gclifEz0SAf8acSc4Ji5_uskV7jFwsxV-nQRPsoW46yr"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
                </script>
                
                <h4><b>You can pay with PayPal</b></h4>
                <div id="paypal-button-container"></div>

                <script>
                    paypal.Buttons().render('#paypal-button-container');
                    // This function displays Smart Payment Buttons on your web page.
                </script>



                <script>
                paypal.Buttons({
                    createOrder: function(data, actions) {
                    // This function sets up the details of the transaction, including the amount and line item details.
                    return actions.order.create({
                        purchase_units: [{
                        amount: {
                            value: '0.01'
                        }
                        }]
                    });
                    }
                }).render('#paypal-button-container');
                </script>

                <script>
                paypal.Buttons({
                    createOrder: function(data, actions) {
                    // This function sets up the details of the transaction, including the amount and line item details.
                    return actions.order.create({
                        purchase_units: [{
                        amount: {
                            value: '0.01'
                        }
                        }]
                    });
                    },
                    onApprove: function(data, actions) {
                    // This function captures the funds from the transaction.
                    return actions.order.capture().then(function(details) {
                        // This function shows a transaction success message to your buyer.
                        alert('Transaction completed by ' + details.payer.name.given_name);
                    });
                    }
                }).render('#paypal-button-container');
                //This function displays Smart Payment Buttons on your web page.
                </script>

                
            </div>
            </div>
    </form>


    <script>
        function fetchMetaValues() { 
            let metadata = document.getElementById('metadata'); 
            let first_name = document.getElementById('first_name').value; 
            let last_name = document.getElementById('last_name').value; 
            let course_id = document.getElementById('course_id').value; 
            let customer_email = document.getElementById('customer_email').value; 
            
            let fid = {'first_name':first_name, 'last_name': last_name, 'course_id': course_id, 'customer_email': customer_email}; 
            metadata.value = JSON.stringify(fid); }
    </script>




