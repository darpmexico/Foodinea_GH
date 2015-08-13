 <!-- ***** Reservation ***** -->
        <section id="reservation">

            <div class="overlay overlay-black-90"></div>
            <div class="plate"><img src="assets/img/content/thumb11.png" alt="Pistacia Restaurant And Food Template"></div>

            <div class="container container-inner">

                <form name="reservationForm" id="rsvForm" method="post">

                    <div class="reservation-inner">

                        <div class="collapse in" id="reservationForm">
                            <div class="clearfix">
                                <div class="col-md-6 fadeInLeft-ifAppeared">

                                    <h1><span class="light">Reservation</span> <span class="extra-bold">form</span></h1>

                                    <input type="text" name="rsrvCode" id="rsrvCode" class="form-control hidden" placeholder="" value="">

                                    <div class="row">
                                        <div class="col-xs-6">
                                            <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name *" required>
                                        </div>
                                        <div class="col-xs-6">
                                            <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name *" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6">
                                            <input type="text" name="email" id="email" class="form-control" placeholder="E-mail *" required>
                                        </div>
                                        <div class="col-xs-6">
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone *" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control" name="guestNumber" id="guestNumber" placeholder="Guest number" required>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="col-xs-6">
                                                <input type="text" class="form-control hidden" name="reservationDate" id="reservationDate" placeholder="" required>
                                            </div>
                                            <select class="form-control" name="reservationTime" id="reservationTime">
                                                <option>12:00</option>
                                                <option>12:30</option>
                                                <option>13:00</option>
                                                <option>13:30</option>
                                                <option>14:00</option>
                                                <option>14:30</option>
                                                <option>15:00</option>
                                                <option>15:30</option>
                                                <option>16:00</option>
                                                <option>16:30</option>
                                                <option>17:00</option>
                                                <option>17:30</option>
                                                <option>18:00</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12">
                                            <textarea name="reservationMessage" id="reservationMessage" class="form-control reservation-message" rows="3"></textarea>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6 fadeInRight-ifAppeared">
                                    <h1><span class="light">Select</span> <span class="extra-bold">date</span></h1>
                                    <div id="datepicker" class="datepicker-dark"></div>
                                </div>

                                <div class="col-md-12 animated fadeIn">

                                    <a class="btn btn-transparent hvr-shutter-out-horizontal btn-send">Send reservation</a>
                                    <div class="message">
                                        <span class="label label-lg label-success">Reservation has been sent</span>
                                    </div>

                                </div>

                            </div><!-- /.clearfix -->

                        </div><!-- /#reservationForm -->

                    </div><!-- /.reservation-inner -->

                </form>

            </div><!-- /.container -->

        </section><!-- /#reservation -->