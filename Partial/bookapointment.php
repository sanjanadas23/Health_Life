<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Apointment</title>

    <!-- External links -->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    

    <!-- Styling -->
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap');

            body {
                font-family: 'Maven Pro', sans-serif
            }

            body {
                background-color: #eee
            }

            .add {
                border-radius: 20px
            }

            .card {
                border: none;
                border-radius: 10px;
                transition: all 1s;
                cursor: pointer
            }

            .card:hover {
                -webkit-box-shadow: 3px 5px 17px -4px #777777;
                box-shadow: 3px 5px 17px -4px #777777
            }

            .ratings i {
                color: green
            }

            .apointment button {
                border-radius: 20px;
                background-color: #eee;
                color: #000;
                border-color: #eee;
                font-size: 13px
            }

            /* Navigation */

            .nav-image{
                width:4rem;
                height:4rem;
            }

            nav{
                display: flex;
                align-items: center;
                justify-content: space-around;
                width: 100vw;
                height: 5rem;
                background: black;
                color: white;
            }
            

            /* Logout out button */

            .button-31 {
                width: 10rem;
                font-size: 16px;
                font-weight: 600;
                color: #fff;
                cursor: pointer;
                margin: 20px;
                height: 55px;
                text-align:center;
                border: none;
                background-size: 300% 100%;

                border-radius: 50px;
                moz-transition: all .4s ease-in-out;
                -o-transition: all .4s ease-in-out;
                -webkit-transition: all .4s ease-in-out;
                transition: all .4s ease-in-out;
            }

            .button-31:hover {
                background-position: 100% 0;
                moz-transition: all .4s ease-in-out;
                -o-transition: all .4s ease-in-out;
                -webkit-transition: all .4s ease-in-out;
                transition: all .4s ease-in-out;
            }

            .button-31:focus {
                outline: none;
            }

            .button-31{
                background-image: linear-gradient(to right, #6253e1, #852D91, #A3A1FF, #F24645);
                box-shadow: 0 4px 15px 0 rgba(126, 52, 161, 0.75);
            }
            /* Logout button ended */



    </style>

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>

</head>
<body>
    

    <!-- Nav bar -->
    <header>
        <nav>
            <a href="../index.php"><img class="nav-image" src="../Assets/images/logo.jpeg" alt="HEALTH"></a>
            
            <!-- <h1>BMI-Cal</h1> -->
            <a href="../Actions/logout.php"><button class="button-31">LOGOUT</button></a>
        </nav>
    </header>

    <!-- Main div for  Appointment Doctors  -->
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-between mb-3"> <span>Suggested Doctors</span>  </div>
        <div class="row g-2">
            <div class="col-md-3">
                <div class="card p-2 py-3 text-center">
                    <div class="img mb-2"> <img src="https://i.imgur.com/LohyFIN.jpg" width="70" class="rounded-circle"> </div>
                    <h5 class="mb-0">Dr. Aditi Acharya</h5> <small>Psychiatrist</small>
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <div class="mt-4 apointment">
                        <a href="mailto: abc@gmail.com?
                            subject=Booking Appointment.
                            &body=I would like to request an appointment for mental therapy at your earliest availability.
                        ">
                         <button class="btn btn-success text-uppercase">Contact</button>
                         </a>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-2 py-3 text-center">
                    <div class="img mb-2"> <img src="https://i.imgur.com/o5uMfKo.jpg" width="70" class="rounded-circle"> </div>
                    <h5 class="mb-0">Dr. Rajiv Anand</h5> <small>Psychotherapist</small>
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <div class="mt-4 apointment">
                        <a href="mailto: rajivann@gmail.com?
                            subject=Booking Appointment.
                            &body=I would like to request an appointment for mental therapy at your earliest availability."> <button class="btn btn-success text-uppercase">Contact</button>
                    </a> </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-2 py-3 text-center">
                    <div class="img mb-2"> <img src="https://i.imgur.com/tmdHXOY.jpg" width="70" class="rounded-circle"> </div>
                    <h5 class="mb-0">Ms. Mohini Agarwaal</h5> <small>Psychotherapist</small>
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <div class="mt-4 apointment"> <a href="mailto: mohini__@gmail.com?
                            subject=Booking Appointment.
                            &body=I would like to request an appointment for mental therapy at your earliest availability."> <button class="btn btn-success text-uppercase">Contact</button>
                    </a> </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-2 py-3 text-center">
                    <div class="img mb-2"> <img src="https://i.imgur.com/C4egmYM.jpg" width="70" class="rounded-circle"> </div>
                    <h5 class="mb-0">Ms. Shamim Deshmukh</h5> <small>Psychologist</small>
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <div class="mt-4 apointment"> <a href="mailto: deshmukh34@gmail.com?
                            subject=Booking Appointment.
                            &body=I would like to request an appointment for mental therapy at your earliest availability."> <button class="btn btn-success text-uppercase">Contact</button>
                    </a> </div>
                </div>
            </div>
            <!-- <div class="col-md-3">
                <div class="card p-2 py-3 text-center">
                    <div class="img mb-2"> <img src="https://i.imgur.com/0LKZQYM.jpg" width="70" class="rounded-circle"> </div>
                    <h5 class="mb-0">Dr. Ketan Parmar</h5> <small>Psychologist</small>
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <div class="mt-4 apointment"> <a href="mailto: ketpar@gmail.com?
                            subject=Booking Appointment.
                            &body=I would like to request an appointment for mental therapy at your earliest availability."> <button class="btn btn-success text-uppercase">Contact</button>
                    </a> </div>
                </div>
            </div> -->
            <div class="col-md-3">
                <div class="card p-2 py-3 text-center">
                    <div class="img mb-2"> <img src="https://i.imgur.com/ZSkeqnd.jpg" width="70" class="rounded-circle"> </div>
                    <h5 class="mb-0">Ms. Riddhi Sagar</h5> <small>Psychologist</small>
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <div class="mt-4 apointment"> <a href="mailto: riddhisag456@gmail.com?
                            subject=Booking Appointment.
                            &body=I would like to request an appointment for mental therapy at your earliest availability."> <button class="btn btn-success text-uppercase">Contact</button>
                    </a> </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-2 py-3 text-center">
                    <div class="img mb-2"> <img src="https://i.imgur.com/MZm1LNz.jpg" width="70" class="rounded-circle"> </div>
                    <h5 class="mb-0">Dr. Dean Creado</h5> <small>Psychiatrist</small>
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <div class="mt-4 apointment"> <a href="mailto: deandr._@gmail.com?
                            subject=Booking Appointment.
                            &body=I would like to request an appointment for mental therapy at your earliest availability."> <button class="btn btn-success text-uppercase">Contact</button>
                    </a> </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-2 py-3 text-center">
                    <div class="img mb-2"> <img src="https://i.imgur.com/HFpxxJz.jpg" width="70" class="rounded-circle"> </div>
                    <h5 class="mb-0">Dr. Anshu Kulkarni</h5> <small>Psychiatrist</small>
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <div class="mt-4 apointment"> <a href="mailto: kulansh@gmail.com?
                            subject=Booking Appointment.
                            &body=I would like to request an appointment for mental therapy at your earliest availability."> <button class="btn btn-success text-uppercase">Contact</button>
                    </a> </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main div for Appointment Doctors ended -->
</body>
</html>