<?php
$page = 6;
require_once("header.php");
?>
<header class="window half" id="windowReviews">
	<div class="container">
		<h2 class="animated fadeInDown">Awards and Reviews</h2>
		<p class="animated fadeInUp">Don't just take our word for it&mdash;see what others have to say about us.</p>
	</div>
</header>
<div class="container">
	<div class="row">
		<div class="columns twelve">
			<p>Despite being a relatively new bakery and restaurant, Panettiere Bakery has received recognition from multiple sources. Not only are we a Grade A Restaurant in terms of service and cleanliness per Santa Clara County Laws, but we are an Occupational Health and Safety Association (OSHA) recognized establishment for our service and safety to employees and customers. Furthermore, we have also received a couple of awards which you can see below!</p>
			<h4 class="pushtop">Awards</h4>
		</div>
	</div>
	<div class="row">
		<div class="columns six box">
			<h3>Best New Bakery - American Bakers Association 2016</h3>
			<p>We are proud to announce that we received the "Best New Bakery Award" from the American Bakers Association for our food and service to our customers. We thank the American Bakers Association greatly for this award.</p>
		</div>
		<div class="columns six box">
			<h3>Best Service - James Beard Restaurant Awards 2016</h3>
			<p>We are also ecstatic to announce that we received the Best Service Award from the James Beard Organization! We work extremely hard to make sure that each individual customer has a great time at our establishment, and we thank the James Beard Organization for this recognition.</p>
		</div>
	</div>
	<div class="row">
		<div class="columns twelve">
			<h4 class="pushtop">Reviews</h4>
			<p>Additional reviews may be found on Yelp, available <a href="https://yelp.com">online</a> or on your mobile device, available on <a href="https://itunes.apple.com/us/app/yelp/id284910350">iOS</a> and <a href="https://play.google.com/store/apps/details?id=com.yelp.android">Android.</a></p>
			<h6 class="plain">&#9733;&#9733;&#9733;&#9733;&#9733; – "Astounding gluten free food"</h6>
			<blockquote>It's not very easy to find gluten free restaurants and bakeries today, and it's even harder to find ones that have good tasting food as well! I can safely say that I have found <i>the best</i> gluten free restaurant and bakery in the Bay Area, and perhaps even California. The pastries are amazing and the entrees are even better. Their customer service is stellar and they have really found a unique way to merge with technology through their mobile stamp card. I fully recommend that everyone visit this bakery.
			<br><br>
			- Mark C, Santa Clara, CA
			</blockquote>
				
			<h6 class="plain">&#9733;&#9733;&#9733;&#9733;&#9733; – "I have never been disappointed"</h6>
			<blockquote>I cannot say enough about this bakery! I've been coming here for a couple months now and have never been disappointed. Everything always tastes amazing and looks just as good as it tastes. However, today I'm specifically writing because of the service I received. I was ordering at the last minute, having to go back and forth with my committee for a project on what to order and had a special request for them to accommodate our schedule and without hesitation, they were able to deliver! Like I said, I've been a customer for many times and will continue coming back and referring my family and friends because they've definitely earned the business. Keep up the great work!!
			<br><br> 
			- Jon S, San Jose, CA
			</blockquote>
				
			<h6 class="plain">&#9733;&#9733;&#9733;&#9733;&#9733; – "Customer Service is great!"</h6>
			<blockquote>Amazing... the people are all about customer service and the treats look delicious... I can hardly wait to bite into my chocolate croissant...my blueberry muffin and my crunchy oatmeal cookie. My only problem is which to eat first! Oh, my mouth is watering just writing this review – yum! 
			<br><br>
			- Jane C, San Francisco, CA
			</blockquote>

			<h6 class="plain">&#9733;&#9733;&#9733;&#9733;&#9733; – "Just. Delicious."</h6>
			<blockquote>Panettiere is delish! I literally bought one of everything for my office and they all loved them. I got croissants for myself and they seriously taste better than ones that they sell at other bakeries. Even my boss agrees with me – so amazing. I'll be coming back for sure.
			<br><br> 
			- Kavita G, Saratoga, CA
			</blockquote>

			<h6 class="plain">&#9733;&#9733;&#9733;&#9733;&#9733; – "Best bakery in the Bay Area!"</h6>
			<blockquote>Excellent service and excellent food! Wonderful pastries with a very cozy atmosphere. The only setback is that there was a long line and wait around dinner time which was slightly annoying. Overall, an excellent place to eat and very inexpensive as well.
			<br><br>
			- Guillermo F, Cupertino, CA
			</blockquote>
		</div>
	</div>
	<form id="s" class="form">
		<div class="row">
			<div class="columns twelve">
				<h4 class="pushtop">Submit your Review</h4>
				<p>If you've enjoyed Panettiere's food and service, please feel free to leave a review below! We will take your feedback into consideration and may even choose to feature your review on the Panettiere website. If you have any questions other about our mission, food, or anything else, please feel free to contact us directly or via any of the our social media accounts. </p>
			</div>
		</div>
		<div class="row">
			<div class="columns four">
				<label for="s_name">Name</label>
				<input type="text" name="s_name" id="s_name" class="u-full-width" placeholder="Name" required />
			</div>
			<div class="columns four">
				<label for="s_email">Email</label>
				<input type="email" name="s_email" id="s_email" class="u-full-width" placeholder="Email" required />
			</div>
			<div class="columns four">
				<label for="s_rating">Rating</label>
				<div class="stars">
					<span data-val="1">&#9733;</span>
					<span data-val="2">&#9733;</span>
					<span data-val="3">&#9733;</span>
					<span data-val="4">&#9733;</span>
					<span data-val="5" class="active">&#9733;</span>
				</div>
				<input type="hidden" name="s_rating" id="s_rating" value="5" />
			</div>
		</div>
		<div class="row">
			<div class="columns twelve">
				<label for="s_review">Review</label>
				<textarea name="s_review" id="s_review" rows="3" class="u-full-width" placeholder="Review" required></textarea>
				<input class="actions pushtop button" type="submit" value="Submit Review" />
			</div>
		</div>
	</form>
</div>
<?php
require_once("footer.php");
?>