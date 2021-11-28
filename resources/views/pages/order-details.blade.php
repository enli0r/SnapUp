<x-layout>

    <section class="order-details">
        <div class="container order-details-container">


            <div class="order-details-wrapper">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <p class="my-0">Please fill in the form correctly!</p>
                    </div>
                @endif

                <form action="" method="POST" class="order-details-form">
                    @csrf

                    <input type="hidden" name="_method" value="put">

                    <div class="form-group name-surname">
                        <div class="input-label">
                            <label for="name">Name</label>
                            <input  type="text" id="name" name="name">
                        </div>

                        <div class="input-label">
                            <label for="surname">Surname</label>  
                            <input  type="text" id="surname" name="surname">
                        </div>

                        
                    </div>

                    <div class="form-group">
                        <div class="input-label">
                            <label for="country">Country</label>
                            <input  type="text" id="country" name="country">
                        </div>
                    </div>
                    
                                    
                    <div class="form-group city-zip-code">
                        <div class="input-label input-label-city">
                            <label for="city">City</label>
                            <input  type="text" id="city" name="city">
                        </div>      
                    
                        <div class="input-label input-label-zip">
                            <label for="zip-code">Zip-code</label>
                            <input  type="text" id="zip-code" name="zipCode">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-label">
                            <label for="adress">Adress</label>
                            <input type="text" id="adress" name="adress">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-label">
                            <label for="phone-number">Phone number</label>
                            <input type="text" id="phone-number" name="phoneNumber">
                        </div>
                        
                    </div>
    

                    
                    <div class="payment-label">
                        <label>Payment</label>
                    </div>
                    <div class="form-group form-group-payment">
                        
                        <div class="input-label">
                            <label for="card">Card</label>
                            <input type="radio" id="card" name="payment" value="card">
                        </div>
                        
                        <div class="input-label">
                            <label for="on-delivery">On delivery</label>
                            <input type="radio" id="on-delivery" name="payment" value="on-delivery">
                        </div>
    
                    </div>
                    
                    <div class="back-order">
                        <a type="button" href="{{ route('cart') }}" class="btn btn-primary">Back</a>

                        <button type="submit" class="btn btn-success">Order</button>
                    </div>
                    
                    
                </div>
            </form>
        </div>
    </section>
    

</x-layout>