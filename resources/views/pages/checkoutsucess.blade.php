@extends('layout.checkout')

@section('title')
Private Trip Successfuly Checkout
@endsection

@section('content')
<style>

       footer{
        margin-top: 190px;
            text-align: center;
        }
.containertravel1{
    color: green;

    margin-top: 30px;
    padding: 10px;
    font-family:Arial, Helvetica, sans-serif ;
}
.containertravel1 .col{
   text-align: center;
    justify-items: center;
}
.containerorder{
    margin-top: 30px;
    text-align: center;
    font-weight: bold;
    color: black;
}
.besar{
    font-size: 45px;
}
.card-body  .row h5{

    color: black;
}
.card-body .row  p{
    color: gray;
}
.card-body .row{
    justify-content: left;
    text-align: left;
}
.card{
    padding: 0;
    margin: 35px;

    /* margin-left: 40px;
    margin-right: 40px; */
}
.card-body {
    height: 270px;
}
.card-body  .row col{
   justify-self: left;

}
.card-header{
    background-color: white;
}
.travelark .btn{
    width: 60%;
    color: white;
    background-color: green;
    margin: 5px;
    margin-left: 370px;
    justify-content: center;
}
.travelark{
    width: 100%;
}
    </style>
<section class="travelark">
 <div class="containertravel1">
    <div class="row">
        <div class="col">
        <p><span class="besar"> Travelark | </span>Explore Wonderful Indonesia</p>
        </div>

        <section>
            <div class="containerorder">
            <p>Order Successfully</p></div>
        <div class="card">
            <div class="card-header text-center">
              Your Invoice
            </div>

            <div class="card-body ">

                    <div class="row">
                        <div class="col">
                            <p>Transaction Number</p>
                            <h5>TRX211XXXXXXX-313KWKWKWK</h5>
                        </div>
                        <div class="col">
                            <p>Date</p>
                            <input type="date" value="2023-4-1"/>
                        </div>
                        <div class="col">
                            <p>Status</p>
                            <h5>Success</h5>
                        </div>
                        <div class="col">
                            <p>Category</p>
                            <h5>Destination</h5>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col">
                                <p>Destination</p>
                                <h5>Nusa Penida,Bali</h5>
                            </div>
                            <div class="col">
                                <p>Date</p>
                                <input type="date" value="2023-4-1"/>
                            </div>
                            <div class="col">
                                <p>Ticket Quantity</p>
                                    <h5>2 Tickets</h5>
                            </div>
                            <div class="col">
                                <p>Price</p>
                                    <h5>Rp. 1.000.000</h5>
                            </div>
                            <div class="col">
                                <p>Total Price</p>
                                    <h5>Rp. 2.000.000</h5>
                            </div>
                        </div>


                        <div class="row">
                                <div class="col">
                                    <p>First Name</p>
                                    <h5>Rylan</h5>
                                </div>
                                <div class="col">
                                    <p>Last Name</p>
                                    <h5>Ristia</h5>
                                </div>
                                <div class="col">
                                    <p>Email</p>
                                    <h5>rylanristia@gmail.com</h5>
                                </div>
                                <div class="col sm">
                                    <p>Phone Number</p>
                                    <h5>0857 8554 8577</h5>
                                </div>

                        </div>



            </div>
          </div>
        </section>
<div>
 <button type="button" class="btn btn-sm" >Back to home</button>
</div>
    </div>
 </div>

<footer>
    <p>Copyrigt @ 2023 Travelark, Indonesia</p>
 </footer>
</section>



<!-- Last footer -->
@endsection
