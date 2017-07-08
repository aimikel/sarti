<aside>
    <div class="my-search">
        <div class="form-group clearfix">
            <div class="col-md-12 no-padding">
                <div class="hotels-count">
                    <h3 class="hotels-found">
                        <i class="fa fa-search" aria-hidden="true"></i> <?= count($hotels) ?> hotels found!
                    </h3>
                </div>
            </div>
        </div>

        <?php if (isset($is_search) && $is_search == 1) { ?>
            <div class="form-group clearfix">
                <div class="col-md-12 no-padding">
                    <a href="<?= base_url('hotels') ?>" class="btn btn-info">Show all Hotels</a>
                </div>
            </div>
        <?php } ?>

        <div class="search clearfix">
            <div class="form-group clearfix">
                <div class="col-md-12 no-padding">
                    <div class="accommodation-search destination clearfix">
                        <div class="col-md-12">
                            <label>
                                Destination:
                            </label>
                            <select name="search_destination">
                                <?php foreach ($locations as $location) { ?>
                                    <option value="<?= $location['location_id'] ?>"><?= $location['location_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group clearfix">
                <div class="col-md-12 no-padding">
                    <div class="accommodation-search clearfix">
                        <form method="GET" action="<?= base_url('hotels/searchHotels/1') ?>">
                            <div class="col-md-12">
                                <h4 class="title">I have the days</h4 class="title">
                            </div>
                            <div class="col-md-12">
                                <label>Checkin</label>
                                <input type="text" name="checkin"/>
                            </div>
                            <div class="col-md-12">
                                <label>Checkout</label>
                                <input type="text" name="checkout"/>
                            </div>
                            <div class="col-md-12">
                                <label>Adults</label>
                                <select name="adults">
                                    <?php for ($i = 0; $i <= 10; $i++) { ?>
                                        <option value="<?= $i; ?>" <?= ($i == 2) ? "selected" : "" ?>><?= $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info">
                                    Search
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="form-group clearfix">
                <div class="col-md-12 no-padding">
                    <div class="accommodation-search clearfix">
                        <form method="GET" action="<?= base_url('hotels/searchHotels/2') ?>">
                            <div class="col-md-12">
                                <h4 class="title">Show me the 7 days DEALS</h4 class="title">
                            </div>
                            <div class="col-md-12">
                                <label>Checkin</label>
                                <input type="text" name="checkin"/>
                            </div>
                            <div class="col-md-12">
                                <label>Checkout</label>
                                <input type="text" name="checkout"/>
                            </div>
                            <div class="col-md-12">
                                <label>Adults</label>
                                <select name="adults">
                                    <?php for ($i = 0; $i <= 10; $i++) { ?>
                                        <option value="<?= $i; ?>" <?= ($i == 2) ? "selected" : "" ?>><?= $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info">
                                    Search
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
            <div class="form-group clearfix">
                <div class="col-md-12 no-padding">
                    <div class="accommodation-search clearfix">
                        <form method="GET" action="<?= base_url('hotels/searchHotels/3') ?>">
                            <div class="col-md-12">
                                <h4 class="title">Show me the 9-10-11-12 days DEALS</h4 class="title">
                            </div>
                            <div class="col-md-12">
                                <label>Checkin</label>
                                <input type="text" name="checkin"/>
                            </div>
                            <div class="col-md-12">
                                <label>Checkout</label>
                                <input type="text" name="checkout"/>
                            </div>
                            <div class="col-md-12">
                                <label>Adults</label>
                                <select name="adults">
                                    <?php for ($i = 0; $i <= 10; $i++) { ?>
                                        <option value="<?= $i; ?>" <?= ($i == 2) ? "selected" : "" ?>><?= $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info">
                                    Search
                                </button>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>    
            <div class="form-group clearfix">
                <div class="col-md-12 no-padding">
                    <div class="accommodation-search room-types clearfix">
                        <div class="col-md-12">
                            <h4 class="title">Room Types</h4 class="title">
                        </div>
                        <?php foreach ($room_types as $type) { ?>
                            <div class="col-md-12">
                                <input type="checkbox" name="room_type" class="room-type" value="<?= $type['room_type_id'] ?>"> <?= $type['room_type_name'] ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>      
            </div>          
            <div class="form-group clearfix">
                <div class="col-md-12 no-padding">
                    <div class="accommodation-search boards clearfix">
                        <div class="col-md-12">
                            <h4 class="title">Boards</h4 class="title">
                        </div>
                        <?php foreach ($boards as $board) { ?>
                            <div class="col-md-12">
                                <input type="checkbox" name="board" class="board" value="<?= $board['board_id'] ?>"> <?= $board['board_name'] ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>        
            </div>
            <div class="form-group clearfix">
                <div class="col-md-12 no-padding">
                    <div class="accommodation-search facilities clearfix">
                        <div class="col-md-12">
                            <h4 class="title">Facilities</h4 class="title">
                        </div>
                        <?php foreach ($facilities as $facility) { ?>
                            <div class="col-md-12">
                                <input type="checkbox" name="facility" class="facility" value="<?= $facility['facility_id'] ?>"> 
                                <img src="<?= base_url('assets/uploads/' . $facility['facility_icon']) ?>"/>
                                <?= $facility['facility_name'] ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>