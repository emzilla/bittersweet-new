<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage New Theme
 * @since New Theme v1.0
 */
?>

<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

<?php  if ( function_exists( 'ot_get_option' ) ) {
        $feature_content = ot_get_option( 'feature_content' );
} ?>
<section class="hero">
	<div class="content-wrapper group">
			<?php // echo $feature_content; ?>
		<div class="hero-content">	
			<h1 class="hero-menu-title">BITTERSWEET Take Out Menu</h1>
			<div class="hero-menu-subtitle">
			<p><strong>OUR TO-GO WINDOW WILL BE OPEN TUES-SUN 11AM-7PM</strong></p>
			<p>Closed Mondays</p>
			<p>ORDERING AND PAYMENT CAN BE DONE BY PHONE: <a href="tel:919.977.3829">919.977.3829</a> OR IN PERSON</p>
			<p>WE ARE CURRENTLY ONLY ACCEPTING CREDIT CARDS AND APPLE-PAY</p>
			<p>PARKING IS AVAILABLE FOR CURBSIDE PICK-UP RIGHT IN FRONT OF OUR BUSINESS</p>
			</div>
			<div class="hero-menu-content">
				<section class="hero-menu-content-section">
					<h1 class="hero-menu-section-title">Edibles</h1>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Derby Pie</strong> $8 <em>(add ice cream, $2)</em></p>
						<p class="hero-menu-item-description">chocolate-bourbon pecan pie with salted caramel sauce</p>
					</div>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Cheesecake slice</strong> $10</p>
						<p class="hero-menu-item-description">Available plain or with salty caramel sauce, chocolate sauce or both</p>
					</div>

					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Raspberry Mousse</strong> <em>(gluten-free)</em> $9</p>
						<p class="hero-menu-item-description">dark chocolate and raspberry mousse topped with house-made Chambord-spiked whipped cream</p>
					</div>

					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Salty Chipwich Ice Cream Sandwich</strong> $9</p>
						<p class="hero-menu-item-description">chocolate-chip sea salt cookies, vanilla ice cream, rolled in bourbon caramel corn</p>
					</div>

					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Cinnamon-Carrot cupcakes</strong> $3.50 each, $18 for six</p>
						<p class="hero-menu-item-description">(no nuts, raisins or funny stuff, just organic carrots)</p>
					</div>

					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Chocolate Chip Sea Salt cookies</strong> $2.50 each, $12 for six</p>
					</div>

					<div class="hero-menu-item">
							<p class="hero-menu-item-title"><strong>Scone-of-the-day</strong>  $2.75</p>
							<p class="hero-menu-item-description">(call ahead or check our social media for flavors or just order and be surprised!)</p>
						</div>

						<div class="hero-menu-item">
							<p class="hero-menu-item-title"><strong>Quiche-of-the-day</strong>  $7</p>
							<p class="hero-menu-item-description">(we will post daily flavors on our Instagram and FB stories/feed)</p>
						</div>

						<div class="hero-menu-item">
							<p class="hero-menu-item-title"><strong>Quart of raw cookie dough</strong> <em>(enough to bake 16 cookies)</em> $10</p>
						</div>
				</section>
				<section class="hero-menu-content-section">
					<h1 class="hero-menu-section-title">Specials</h1>

					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>WEDNESDAY!! HOUSE MADE POP TARTS</strong> $4.50</p>
						<p class="hero-menu-item-description">Check out our social media for flavor, or just let us surprise you!</p>
					</div>

					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>THURSDAY!! BUBBLES AND CAKE!</strong> $11</p>
						<p class="hero-menu-item-description">We will post the cupcake flavor on our Instagram and FB stories/feed, get cupcake and a mini champagne bottle to-go</p>
					</div>

					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>SUNDAY!! SUNDAY FUNDAY PIE!</strong> $8</p>
						<p class="hero-menu-item-description">Flavor will be posted on social media--made fresh that day!</p>
					</div>
				</section>
				<section class="hero-menu-content-section">
					<h1 class="hero-menu-section-title">Coffee/Tea/Drinks</h1>

					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Drip Coffee</strong> 8oz--$2 / 12oz--$2.50 / 16oz--$3</p>
					</div>

					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Espresso Doppio</strong> $3</p>
					</div>

					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Macchiato</strong> $3.50</p>
					</div>

					<div class="hero-menu-item">
							<p class="hero-menu-item-title"><strong>Cortado</strong> $3.50</p>
						</div>

					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Cappuccino</strong> $3.75</p>
					</div>

					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Latte</strong> $4 </p>
					<p class="hero-menu-item-description">almond, vanilla, caramel, peppermint, honey, maple, hazelnut, white chocolate, mocha $4.75</p>
					</div>

					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Iced Coffee</strong> $3</p>
					</div>

					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Iced Tea</strong> $2.50</p>
					<p class="hero-menu-item-description">sweet or unsweet</p>
					</div>


					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Organic Green-Mint Iced Tea</strong> $3.50</p>
					</div>

					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Hot Organic Tea</strong> $3.50</p>
					<p class="hero-menu-item-description">variety available</p>
					</div>

					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Black & Coke</strong> $5</p>
					<p class="hero-menu-item-description">chilled espresso & Mexican Coke</p>
					</div>

					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Daywalker</strong> $5</p>
					<p class="hero-menu-item-description">chilled espresso, bitters, ginger beer</p>
					</div>

					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Housemade Chai</strong> $4.50 </p>
					<p class="hero-menu-item-description">available hot or iced</p>
					<p class="hero-menu-item-description">get it “dirty” with a shot of espresso $5.25</p>
					</div>

					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Almond milk</strong> 12oz--$2</p>
					</div>

					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Cheerwine</strong> can--$2.50</p>
					</div>

					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Mapleview Farms Chocolate Milk</strong> 12oz--$3</p>
					</div>

					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Fevertree tonic</strong> $2.50 </p>
					<p class="hero-menu-item-description">classic, mediterranean, bitter lemon, elderflower, light, citrus or aromatic</p>
					</div>

					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Mexican coke</strong> bottle--$3.50</p>
					</div>
				</section>
				<section class="hero-menu-content-section">
					<h1 class="hero-menu-section-title">Beer/Wine</h1>

					<h2 class="hero-menu-section-subtitle">Beer</h2>
					
					<h3 class="hero-menu-section-subtitle">(available in single bottles/cans)</h3>

					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Stone Delicious IPA</strong> <em>(12oz can)</em> $6</p></div>
					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Double Nickel Weekend Warrior</strong> <em>(19.2oz stovepipe)</em> $8</p></div>
					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>White Wall Wit</strong> <em>(16oz tallboy)</em> $6</p></div>
					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Allagash White Witbier</strong> <em>(12oz bottle)</em> $5</p></div>
					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>König Pilsner </strong> <em>(16.9oz tallboy)</em> $5</p></div>
					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Miller High Life</strong> $4</p></div>
					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Miller Lite</strong> $4</p></div>
					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Wicked Weed Dulcifera</strong> <em>(500ml bottle)</em> $22</p></div>
					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Anderson Valley Gose</strong> <em>(12oz can)</em> $5</p></div>
					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Omnipollo Agamemnon Imperial Stout</strong> <em>(16oz tallboy)</em> $8</p></div>
					<div class="hero-menu-item">
					<p class="hero-menu-item-title"><strong>Fullsteam Coffee is for Closers</strong> <em>(12oz can)</em> $5</p></div>

					<h2 class="hero-menu-section-subtitle">Wine</h2>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>All full bottles of wine are now 30% off the prices listed below</strong></p>
					</div>

					<h3 class="hero-menu-section-subtitle">Bubbles</h3>

					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Champagne Splits</strong> <em>rosé, brut and moscato </em> $11</p>
					</div>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Col Solivo Prosecco DOC bottle</strong> $40</p>
					</div>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>St Hilaire Blanquette de Limoux, bottle</strong> $40</p>
					</div>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Gemma di Luna Sparkling Moscato, split</strong> $11</p>
					</div>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Domaine Chandon étoile Rosé California, bottle</strong> $65</p>
					</div>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Francois Montand Brut Rosé France, bottle</strong> $40</p>
					</div>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Moët Imperial Rosé France, bottle</strong> $90</p>
					</div>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Ruinart Rosé France, bottle</strong> $125</p>
					</div>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Veuve Clicquot Demi-Sec France, bottle</strong> $95</p>
					</div>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Veuve Clicquot Brut France, bottle</strong> $95</p>
					</div>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Moët Grand Vintage 2008 France, bottle</strong> $112</p>
					</div>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Dom Pérignon France, bottle</strong> $200</p>
					</div>

					<h3 class="hero-menu-section-subtitle">Red Wine (bottles)</h3>

					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Montepulciano D’Abruzzo DOC, Torre Vinaria</strong> <em>(bold red, Italy)</em> $40</p>
					</div>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Marziano Abbona Casaret Langhe, 2018</strong> <em>(Italy, classic red, savory)</em> $40</p>
					</div>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Remole Toscana, 2018</strong> <em>(Italy, classic red, berries/cherry)</em> $40</p>
					</div>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Conn Creek Cabernet, 2012</strong> <em>(Napa Valley)</em> $58</p>
					</div>

					<h3 class="hero-menu-section-subtitle">White Wine (bottles)</h3>

					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Colterenzio-Schreckbichl Pfefferer</strong> <em>(Italy, Moscato, fresh & crisp)</em> $40</p>
					</div>
					<div class="hero-menu-item">
						<p class="hero-menu-item-title"><strong>Fattoria La Vialla Casa Conforto Bianco</strong> <em>(Italy, Tuscany, tropical & balanced)</em> $40</p>
					</div>
				</section>
					
				</section>	
			</div>
		</div>
	</div>
</section>


<?php  if ( function_exists( 'ot_get_option' ) ) {
        $hours_content 		= ot_get_option( 'hours_content' );
        $location_content   = ot_get_option( 'location_content' );
} ?>

<section class="homepage-content">
	<div class="content-wrapper">
		<div class="content-column">
			<h2>Hours</h2>
			<?php echo $hours_content; ?>
		</div>
		<div class="content-column">
			<h2>Location</h2>
			<?php echo $location_content; ?>
		</div>
	</div>
</section>

<section class="cta">
	<div class="cta-content">
		<a href="/menu" class="button cta-text">See our menu</a>
	</div>
</section>
	
<section class="instagram-feed" id="instafeed">
	<a href="https://www.instagram.com/bittersweetraleigh/" class="follow-us" target="_blank">Bittersweet on Instagram</a>
</section>

