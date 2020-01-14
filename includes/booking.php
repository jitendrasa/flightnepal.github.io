<section id="booking" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- booking table start -->
                    <div class="booking-table">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li id="tab-item" class="nav-item">
                                <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true"><i class="fas fa-plane"></i> Flight</a>
                            </li>
                            <li id="tab-item" class="nav-item">
                                <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false"><i class="fas fa-bed"></i> Hotel</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <input type="text" class="form-control" id="validationTooltip01" placeholder="First Name" value="" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <input type="text" class="form-control" id="validationTooltip02" placeholder="Last Name" value="" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <input type="number" class="form-control" id="validationTooltip02" placeholder="Contact No." value="" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="validationTooltipUsername" placeholder="Adult" aria-describedby="validationTooltipUsernamePrepend" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="validationTooltipUsername" placeholder="Chlid" aria-describedby="validationTooltipUsernamePrepend" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="input-group">
                                                <select id="inputState" class="form-control">
                                                    <option selected>Economy Class</option>
                                                    <option value="">Business Class</option>
                                                    <option value="">Economy Class</option>
                                                    <option value="">Business Class</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <div class="input-group">
                                                <select id="inputState" class="form-control">
                                                    <option selected>One Way</option>
                                                    <option value="">Round Trip</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <input type="text" class="form-control" id="validationTooltip03" placeholder="From" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <input type="text" class="form-control" id="validationTooltip04" placeholder="To" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <div class="input-group date">
                                                <input class="form-control" type="text" placeholder="Start Date">
                                                <span class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button">
                                                        <i class="fa fa-calendar"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="input-group date">
                                                <input class="form-control" type="text" placeholder="End Date">
                                                <span class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button">
                                                        <i class="fa fa-calendar"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <input type="email" class="form-control" id="validationTooltip07" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <textarea name="comment" id="comment" cols="23" rows="1" placeholder="Comment"></textarea>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <button class="btn booking-btn full-btn" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <div class="input-group date">
                                                <input class="form-control" type="text" placeholder="Check In">
                                                <span class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button">
                                                        <i class="fa fa-calendar"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="input-group date">
                                                <input class="form-control" type="text" placeholder="Check Out">
                                                <span class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button">
                                                        <i class="fa fa-calendar"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="input-group">
                                                <select id="inputState" class="form-control">
                                                    <option selected>1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <button class="btn booking-btn full-btn" type="submit">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div> 
                            <div class="domestic-flight">
                                <a href="#">Book a Nepal domestic flight with us <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- booking table end -->
                </div>
            </div>
        </div>
    </section>

