@extends('layout.checkout')

@section('title')
summary
@endsection

@section('content')


<body>

    <style>

       footer{
        margin-top: 50px;
            text-align: center;
        }
.containertravel1{
    color: green;
    margin-top: 5px;
    padding: 5px;
    font-family:Arial, Helvetica, sans-serif ;
}
.containertravel1 .col{
   text-align: center;
    justify-items: center;
}
.containerorder{
    justify-content: space-evenly;
    text-align: center;
   height: 10px;
    color: green;
}
.besar{
    font-size: 30px;
}
.card-body  .row h5{
    font-size: 15px;
    color: black;
}
.card-body .row  p{
    margin-top: 20px;
    font-size: 15px;
    color: gray;
}
.card-body .row{
    justify-content: left;
    text-align: left;
}

.card-body {
    height: 270px;
}

.card{
    padding: 0;
    margin-top: 20px;
    margin: 25px;
    margin-left: 20px;
    height: 300px;
    border-radius: 5px;
    /* margin-left: 40px;
    margin-right: 40px; */
}
.card img{
    object-fit:fill;
     height: 80px;
    width: 1410px;
  border-radius: 10px;
}
.travelark .btn{
    width: 60%;
    color: white;
    background-color: green;
    margin: 2px;
    margin-left: 300px;
    justify-content: center;
}
.travelark{
    width: 100%;
}
.tombol {
    color: green;

}
.tengah{
    color: black;
    font-weight: bold;
}
.tombol .row col{
    justify-content: space-between;
}
.bagian3{
    color: black;
    padding: 20px;
}
.containerdescrip{
    margin: 10px;

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
                <div class="row">
                    <div class="col-2">
                        <p><img src="imgta/tombolback.png" alt=""> Back </p>
                    </div>
                    <div class="col">
                        <p class="tengah">Order Successfully</p>
                    </div>
                    <div class="col-2">
                        <p>Second Step</p>
                    </div>
                </div>
            </div>

        <div class="card">
            <div class="card-body ">
            <div class="containerimg">
              <img src="imgta/Rectangle 56 (1).png" alt="">
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
                            <hr>

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
                                <div class="col">
                                    <p>Phone Number</p>
                                    <h5>0857 8554 8577</h5>
                                </div>

                        </div>

            </div>
          </div>
        </section>

    <section class="bagian3">
        <div class="containerdescrip">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault"></label>
    Agree to our terms and condition
    </div>
    <p>
        Destination trip can used as much as you order the ticket. Check again your summary order
        before continue your order. After you finish your payment, every ticket will be shown in your
        in your ticket page into your email (include with destination tickets, acomodation, and hotel)
    </p>
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

@endsection




