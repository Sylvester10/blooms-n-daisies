<section id="about">
    <div class="container">


		<div class="event-content-wrapper">
			<div class="event-section">

				<div class="enent__thumb">
					<div class="col-lg-12">
						<img src="<?php echo base_url('assets/img/calendar-icon.jpg'); ?>" alt="calendar image">
					</div>
					<div class="box-timer">
		                <div class="countbox timer-grid">
		                    <div data-countdown="<?php echo $y->event_date; ?>"></div>
		                    <div class="m-t-20"><h6><i class="fa fa-calendar m-t-5"></i> <?php echo x_date($y->event_date); ?></h6></div>
		                </div>
		             </div>
				</div>

				<div class="event__inner">
					<h4><?php echo $y->caption; ?></h4>
					<p><?php echo $y->description; ?></p>
				</div>


				<div class="event-section">
					<div class="jumbotron">
						<ul class="event_info">
							<li><span class="ti-user"></span> Organiser: <?php echo school_name; ?></li>
							<li><span class="ti-location-pin"></span> Venue: <?php echo $y->venue; ?></li>
							<li><span class="ti-calendar"></span> Date: <?php echo x_date_full($y->event_date); ?></li>
							<li><span class="ti-time"></span> Time: <?php echo x_time_24hour($y->time); ?></li>
							<li><span class="ti-mobile"></span> Phone: <?php echo school_phone_number; ?></li>
							<li><span class="ti-email"></span> Email : <?php echo school_contact_email; ?></li>
						</ul>

					</div>
				</div>

			</div>
		</div>


		<div class="blog__btn">
		    <a class="btn" href="<?php echo base_url('home/events'); ?>">&laquo; All Events</a>
		</div>


    </div>
    <!-- /container -->
</section>
<!-- /Section ends -->