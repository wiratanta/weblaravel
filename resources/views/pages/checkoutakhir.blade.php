@extends('layout.checkout')

@section('title')
checkourakhir
@endsection

@section('content')


<style>
    *body, html{
        font-size: 10px;
        padding: 0;
        width: 0;

    }
   footer{
    margin-top: 50px;
        text-align: center;
    }
.containertravel1{
color: green;

margin-top: 10px;
padding: 10px;
font-family:Arial, Helvetica, sans-serif ;
}
.containertravel1 .col{
text-align: center;
justify-items: center;
}
.containerorder{
height: 10px;
text-align: center;

color:green;
}
.containerorder .row h5{
color: black;
font-weight: bold;
}
.besar{
font-size: 35px;
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
margin: 15px;

/* margin-left: 40px;
margin-right: 40px; */
}
.card-body {
font-size: 15px;
height: 100px;
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
.card-header{
height: 30px;
}
.card-body1{
display: block;
margin:0 ;
padding: 10px;
height: 80px;
justify-items: left;
}
.card-body1 .col-2 img{
margin-left: 25px;
display: block;
justify-content: center;
}
.card-body1 .col-2 p{
justify-content: left;
color: grey;
}
.card-body1 .col-3 p{
margin-top: 20px;
color: grey;
}
.card-body1  .col-2 h5{
margin-top: 20px;
font-size: 15x;
}
.containerform{
background-color: white;
border-radius: 10px;
padding: 10px;
box-sizing: content-box;
}
.form{
margin: 20px;
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
        <h5>Checkout detail</h5>
            </div>
        <div class="col-2">
            <p>Second Step</p>
        </div>
    </div>
    </div></div>
    <div class="card">
        <div class="card-header text-center">
          Travel order
        </div>
        <div class="card-body1">
        <div class="containerimg">
                      <div class="row display-flex">
                        <div class="col-2">
                        <img src="imgta/Rectangle 56 (1).png" alt="" height="50 px" width="50 px "/></div>
                          <div class="col-2">
                              <p>Destination
                              <h5>Nusa Penida,Bali</h5></p>
                          </div>
                          <div class="col-2">
                              <h5>
                                  Rp. 1.000.000</h5>
                          </div>
                          <div class="col-3">
                            <p>Tickets for
                                <input type="date" height="10px" width="20px" value="2023-4-1"/></p>
                        </div>
                        <div class="col-3">
                            <p>Ticket
                            <input type="number" height="10px" width="10px" value="2"/></p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="form">
        <div class="card">
        <div class="containerform">

        <form class="row g-3">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">First name</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Last Name</label>
              <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Email</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
              </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Number Phone</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            </div>

            </div>
        </form>
    </div>
    </section>

</div>
</div>

<footer>
<p>Copyrigt @ 2023 Travelark, Indonesia</p>
</footer>
</section>
@endsection
