<?php
$page = 4;
require_once("header.php");
?>
<header class="window half" id="windowReservations">
	<div class="container">
		<h2 class="animated fadeInDown">Reservations</h2>
		<p class="animated fadeInUp">Reserve your seat at Panettiere</p>
	</div>
</header>
<div class="container">
	<div class="row">
		<div class="columns twelve">
			<p>Reservations can be made through the Yelp app using SeatMe, available <a href="https://yelp.com">online</a> or on <a href="https://itunes.apple.com/us/app/yelp/id284910350">iOS</a> and <a href="https://play.google.com/store/apps/details?id=com.yelp.android">Android.</a> You can also call us at <a href="tel:+14083209455">(408) 320-9455</a> at least 1 hour before your desired time.
		</div>
	</div>
	<div class="row">
		<div class="columns twelve">
			<h4 class="pushtop">Reserve online now</h4>
			<p>Additionally, you can reserve a table via our online interface immediately. Please contact us directly through the information in the footer if you would like us to host a group of over 12 people.</p>
		</div>
	</div>
	<form id="r" class="form">
		<div class="row">
			<div class="columns six">
				<label for="r_name">Name</label>
				<input type="text" name="r_name" id="r_name" class="u-full-width" placeholder="Name" required />
			</div>
			<div class="columns six">
				<label for="r_guests">Number of Guests</label>
				<input type="number" name="r_guests" id="r_guests" class="u-full-width" placeholder="Number of Guests" min="1" step="1" max="99" required />
			</div>
		</div>
		<div class="row">
			<div class="columns six">
				<label for="r_email">Email</label>
				<input type="email" name="r_email" id="r_email" class="u-full-width" placeholder="Email" required />
			</div>
			<div class="columns six">
				<label for="r_phone">Phone Number</label>
				<input type="tel" name="r_phone" id="r_phone" class="u-full-width" placeholder="Phone Number" required />
			</div>
		</div>
		<div class="row">
			<div class="columns six">
				<label for="r_time">Date &amp; Time</label>
				<input type="text" name="r_time" id="r_time" class="u-full-width" placeholder="Time" step="1800" required /><!--HOTFIX-->
				<div id="date_container"></div>
			</div>
			<div class="columns six">
				<label class="pushtop" for="tables">Table</label>
				<div id="tables_container">
					<table class="tables">
						<tbody>
							<tr class="up">
								<td rowspan="2" class="tables-table left">2</td>
								<td></td>
								<td rowspan="2" class="tables-table">3</td>
								<td></td>
								<td></td>
								<td rowspan="2" class="tables-table">4</td>
								<td></td>
								<td rowspan="2" class="tables-table">5</td>
								<td></td>
								<td rowspan="2" class="tables-table right">6</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="left"></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="right"></td>
							</tr>
							<tr>
								<td class="left"></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td rowspan="2" class="tables-table">7</td>
								<td></td>
								<td rowspan="2" class="tables-table">8</td>
								<td></td>
								<td rowspan="2" class="tables-table right">9</td>
							</tr>
							<tr>
								<td rowspan="2" colspan="3" class="tables-table left">1</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="right"></td>
							</tr>
							<tr>
								<td class="left down"></td>
								<td class="down"></td>
								<td class="down"></td>
								<td class="down"></td>
								<td></td>
								<td rowspan="2" colspan="2" class="tables-table down">10</td>
								<td></td>
								<td rowspan="2" colspan="2" class="tables-table right down">11</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td class="right door"><div></div></td>
								<td class="down"></td>
								<td class="down"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="columns twelve">
				<input class="actions pushtop button" type="submit" value="Reserve your table" />
			</div>
		</div>
	</form>
</div>
<?php
require_once("footer.php");
?>