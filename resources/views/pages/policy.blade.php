@extends('layouts.app')

@section('content')
@include('inc.navbarcss')
    @if(!Auth::guest())
        <div class="jumbotron text-center">
            <h1>{{$title}}</h1>
            </br></br>
            <p>Welcome to the hiram platform. Please read these terms and conditions carefully. The following Terms of Use govern your use and access 
            of the Platform (defined below) and the use of the Services. By accessing the Platform and/or using the Services, you agree to be bound by 
            these Terms of Use. If you do not agree to these Terms of Use, do not access and/or use this Platform or the Services.</p></br>
        </div>
    @else  
    <div class="jumbotron text-center">
            <h1>{{$title}}</h1>
            </br></br>
            <p>Welcome to the hiram platform. Please read these terms and conditions carefully. The following Terms of Use govern your use and access 
            of the Platform (defined below) and the use of the Services. By accessing the Platform and/or using the Services, you agree to be bound by 
            these Terms of Use. If you do not agree to these Terms of Use, do not access and/or use this Platform or the Services.</p></br>
        </div>
    @endif
    <div class="jumbotron text-center">
   <h2> General Rental Policies</h2>
   </br>
<h4>Complete application </h4></br>- The application requires completed in its entirety. Failure to fill out the application properly and legibly may delay processing, increase security deposit or result in outright denial of application.
</br></br>
<h4>Payments and insurance deposit </h4></br>- Deposit must be received with the payment. The deposit cost must conform the deposit rate guideline which is the total cost of the ownership divided by expected rental lifetime multiplied by the profit percentage for the rentee which would result to the price of the item rented for a day. 
</br></br>
<h4>Loss and Damages </h4></br>- The rentee will make an arrangement with the renter for when to use the insurance deposit for loss and damages. The renter agreed the arrangement if he has exchanged the good and money.
</br></br>
<h4>Cancellation</h4> </br>- The renter can cancel the rented item anytime. The rentee will have to notify the renter two days before cancelling the reservation. 
</br></br>
<h4>Eligible items </h4></br>- items that are considered helpful for academic purposes are allowed to be put up for listing. All items could be reported by any users. An item reported ten times will be automatically deleted from  H I R A M without any notice. 
</br></br>
<h4>Pricing </h4></br>- The pricing for an item must conform the rental rate guideline which is the total cost of the ownership divided by expected rental lifetime multiplied by the profit of the rentee. The rental pricing for an item must conform the rental rate guideline which is the total cost of the ownership divided by expected rental lifetime multiplied by the profit percent for the rentee. 
</br></br>
<h4>Overdue</h4></br>- The lender can charge additional fee for overdue or items returned late. The price of the additional charge must be the price per day divided by the number of hour per day multiplied by the number of hours the renter is delayed on paying.
</br></br>
<h4>Right of usage </h4></br>- The renter can have full use of the item rented except for instances where there is an agreement to limit its use within the said parameters.
</br></br>
<h4>Failure to follow Policies </h4></br>- Rentee or renter may file a petition for notice of non-compliance for the policies of hiram. If the party who ordered the petition is granted, the other party may be banned from the platform.
</br>
    
    </br><p>All Rights reserved 2018</p></div>
@endsection