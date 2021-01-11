<?php include("include/header.php") ?>

<div class="container-fluid">
	<div class="row sticky-wrapper pt-15">
        <div class="col-md-3">
			<!-- <div class="sidebar sticky right">
				<div class="widget margin-bottom-40">
					<h3 class="margin-top-0 margin-bottom-35">Find New Home</h3>
					<div class="row with-forms">
						<div class="col-md-12">
							<select data-placeholder="Any Status" class="chosen-select-no-single" >
								<option>Any Status</option>
								<option>For Sale</option>
								<option>For Rent</option>
							</select>
						</div>
					</div>

					<div class="row with-forms">
						<div class="col-md-12">
							<select data-placeholder="Any Type" class="chosen-select-no-single" >
								<option>Any Type</option>
								<option>Apartments</option>
								<option>Houses</option>
								<option>Commercial</option>
								<option>Garages</option>
								<option>Lots</option>
							</select>
						</div>
					</div>

					<div class="row with-forms">

						<div class="col-md-12">
							<select data-placeholder="All States" class="chosen-select" >
								<option>All States</option>
								<option>Alabama</option>
								<option>Alaska</option>
								<option>Arizona</option>
								<option>Arkansas</option>
								<option>California</option>
								<option>Colorado</option>
								<option>Connecticut</option>
								<option>Delaware</option>
								<option>Florida</option>
								<option>Georgia</option>
								<option>Hawaii</option>
								<option>Idaho</option>
								<option>Illinois</option>
								<option>Indiana</option>
								<option>Iowa</option>
								<option>Kansas</option>
								<option>Kentucky</option>
								<option>Louisiana</option>
								<option>Maine</option>
								<option>Maryland</option>
								<option>Massachusetts</option>
								<option>Michigan</option>
								<option>Minnesota</option>
								<option>Mississippi</option>
								<option>Missouri</option>
								<option>Montana</option>
								<option>Nebraska</option>
								<option>Nevada</option>
								<option>New Hampshire</option>
								<option>New Jersey</option>
								<option>New Mexico</option>
								<option>New York</option>
								<option>North Carolina</option>
								<option>North Dakota</option>
								<option>Ohio</option>
								<option>Oklahoma</option>
								<option>Oregon</option>
								<option>Pennsylvania</option>
								<option>Rhode Island</option>
								<option>South Carolina</option>
								<option>South Dakota</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Utah</option>
								<option>Vermont</option>
								<option>Virginia</option>
								<option>Washington</option>
								<option>West Virginia</option>
								<option>Wisconsin</option>
								<option>Wyoming</option>
							</select>
						</div>
					</div>

					<div class="row with-forms">
						<div class="col-md-12">
							<select data-placeholder="All Cities" class="chosen-select" >
								<option>All Cities</option>
								<option>New York</option>
								<option>Los Angeles</option>
								<option>Chicago</option>
								<option>Brooklyn</option>
								<option>Queens</option>
								<option>Houston</option>
								<option>Manhattan</option>
								<option>Philadelphia</option>
								<option>Phoenix</option>
								<option>San Antonio</option>
								<option>Bronx</option>
								<option>San Diego</option>
								<option>Dallas</option>
								<option>San Jose</option>
							</select>
						</div>
					</div>

					<div class="row with-forms">
						<div class="col-md-6">
							<select data-placeholder="Beds" class="chosen-select-no-single" >
								<option label="blank"></option>
								<option>Beds (Any)</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

						<div class="col-md-6">
							<select data-placeholder="Baths" class="chosen-select-no-single" >
								<option label="blank"></option>
								<option>Baths (Any)</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

					</div>
					<br>

					<div class="range-slider">
						<label>Area Range</label>
						<div id="area-range" data-min="0" data-max="1500" data-unit="sq ft"></div>
						<div class="clearfix"></div>
					</div>

					<br>

					<div class="range-slider">
						<label>Price Range</label>
						<div id="price-range" data-min="0" data-max="400000" data-unit="$"></div>
						<div class="clearfix"></div>
					</div>

					<a href="#" class="more-search-options-trigger margin-bottom-10 margin-top-30" data-open-title="Additional Features" data-close-title="Additional Features"></a>

					<div class="more-search-options relative">
						<div class="checkboxes one-in-row margin-bottom-10">

							<input id="check-2" type="checkbox" name="check">
							<label for="check-2">Air Conditioning</label>

							<input id="check-3" type="checkbox" name="check">
							<label for="check-3">Swimming Pool</label>

							<input id="check-4" type="checkbox" name="check" >
							<label for="check-4">Central Heating</label>

							<input id="check-5" type="checkbox" name="check">
							<label for="check-5">Laundry Room</label>


							<input id="check-6" type="checkbox" name="check">
							<label for="check-6">Gym</label>

							<input id="check-7" type="checkbox" name="check">
							<label for="check-7">Alarm</label>

							<input id="check-8" type="checkbox" name="check">
							<label for="check-8">Window Covering</label>

						</div>
					</div>
					<button class="button fullwidth margin-top-30">Search</button>
				</div>
			</div> -->
		</div>

		<div class="col-md-9">
			<div class="row margin-bottom-15">
				<div class="col-md-6">
					<div class="sort-by">
						<label>Sort by:</label>

						<div class="sort-by-select">
							<select data-placeholder="Default order" class="chosen-select-no-single" >
								<option>Default Order</option>
								<option>Price Low to High</option>
								<option>Price High to Low</option>
								<option>Newest Properties</option>
								<option>Oldest Properties</option>
							</select>
						</div>
					</div>
                </div>

                <div class="col-md-6">
					<div class="layout-switcher">
						<a href="#" class="grid"><i class="fa fa-th"></i></a>
						<a href="#" class="list"><i class="fa fa-th-list"></i></a>
					</div>
				</div>
			</div>

			<div class="listings-container grid-layout">
                <div class="listing-item">
					<a href="listingdetail.php" class="listing-img-container">
						<div class="listing-badges">
							<span>Under Construction</span>
						</div>
						<div class="listing-img-content">
							<span class="listing-price">$275,000 <i>$520 / sq ft</i></span>
						</div>
						<div class="listing-carousel">
							<div><img src="images/project1/1.jpg" alt=""></div>
							<div><img src="images/project1/2.jpg" alt=""></div>
							<div><img src="images/project1/3.jpg" alt=""></div>
							<div><img src="images/project1/4.jpg" alt=""></div>
							<div><img src="images/project1/5.jpg" alt=""></div>
							<div><img src="images/project1/6.jpg" alt=""></div>
							<div><img src="images/project1/7.jpg" alt=""></div>
							<div><img src="images/project1/8.jpg" alt=""></div>
							<div><img src="images/project1/9.jpg" alt=""></div>
							<div><img src="images/project1/10.jpg" alt=""></div>
							<div><img src="images/project1/11.jpg" alt=""></div>
						</div>
					</a>

					<div class="listing-content">
						<a href="listingdetail.php">
							<div class="listing-title">
								<h4>Project 1</h4>
								<p class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									GS Breeze, Kondapur, Hyderabad
								</p>
							</div>
						</a>
						<ul class="listing-details">
							<li>530 sq ft</li>
							<li>1 Bedroom</li>
							<li>3 Rooms</li>
							<li>1 Bathroom</li>
						</ul>
					</div>
                </div>

                <div class="listing-item">
					<a href="listingdetail2.php" class="listing-img-container">
						<div class="listing-badges">
							<span>Ready to Movein</span>
						</div>
						<div class="listing-img-content">
							<span class="listing-price">$275,000 <i>$520 / sq ft</i></span>
						</div>
						<div class="listing-carousel">
							<div><img src="images/project2/1.jpg" alt=""></div>
							<div><img src="images/project2/2.jpg" alt=""></div>
							<div><img src="images/project2/3.jpg" alt=""></div>
							<div><img src="images/project2/4.jpg" alt=""></div>
							<div><img src="images/project2/5.jpg" alt=""></div>
							<div><img src="images/project2/6.jpg" alt=""></div>
							<div><img src="images/project2/7.jpg" alt=""></div>
							<div><img src="images/project2/8.jpg" alt=""></div>
							<div><img src="images/project2/9.jpg" alt=""></div>
						</div>
					</a>

					<div class="listing-content">
						<a href="listingdetail2.php">
							<div class="listing-title">
								<h4>Project 2</h4>
								<p class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									GS Breeze, Kondapur, Hyderabad
								</p>
							</div>
						</a>

						<ul class="listing-details">
							<li>530 sq ft</li>
							<li>1 Bedroom</li>
							<li>3 Rooms</li>
							<li>1 Bathroom</li>
						</ul>
					</div>
                </div>

                <div class="listing-item">
					<a href="listingdetail3.php" class="listing-img-container">
						<div class="listing-badges">
							<span>Under Construction</span>
						</div>
						<div class="listing-img-content">
							<span class="listing-price">$275,000 <i>$520 / sq ft</i></span>
						</div>
						<div class="listing-carousel">
							<div><img src="images/project3/1.jpg" alt=""></div>
							<div><img src="images/project3/2.jpg" alt=""></div>
							<div><img src="images/project3/3.jpg" alt=""></div>
							<div><img src="images/project3/4.jpg" alt=""></div>
							<div><img src="images/project3/5.jpg" alt=""></div>
							<div><img src="images/project3/6.jpg" alt=""></div>
							<div><img src="images/project3/7.jpg" alt=""></div>
							<div><img src="images/project3/8.jpg" alt=""></div>
							<div><img src="images/project3/9.jpg" alt=""></div>
							<div><img src="images/project3/10.jpg" alt=""></div>
						</div>
					</a>

					<div class="listing-content">
						<a href="listingdetail3.php">
							<div class="listing-title">
								<h4>Project 3</h4>
								<p class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									GS Breeze, Kondapur, Hyderabad
								</p>
							</div>
						</a>

						<ul class="listing-details">
							<li>530 sq ft</li>
							<li>1 Bedroom</li>
							<li>3 Rooms</li>
							<li>1 Bathroom</li>
						</ul>
					</div>
                </div>

                <div class="listing-item">
					<a href="listingdetail4.php" class="listing-img-container">
						<div class="listing-badges">
							<span>Ready to Movein</span>
						</div>
						<div class="listing-img-content">
							<span class="listing-price">$275,000 <i>$520 / sq ft</i></span>
						</div>
						<div class="listing-carousel">
							<div><img src="images/project4/1.jpg" alt=""></div>
							<div><img src="images/project4/2.jpg" alt=""></div>
							<div><img src="images/project4/3.jpg" alt=""></div>
							<div><img src="images/project4/4.jpg" alt=""></div>
							<div><img src="images/project4/5.jpg" alt=""></div>
							<div><img src="images/project4/6.jpg" alt=""></div>
							<div><img src="images/project4/7.jpg" alt=""></div>
							<div><img src="images/project4/8.jpg" alt=""></div>
							<div><img src="images/project4/9.jpg" alt=""></div>
							<div><img src="images/project4/10.jpg" alt=""></div>
							<div><img src="images/project4/11.jpg" alt=""></div>
						</div>
					</a>

					<div class="listing-content">
						<a href="listingdetail4.php">
							<div class="listing-title">
								<h4>Project 4</h4>
								<p class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									GS Breeze, Kondapur, Hyderabad
								</p>
							</div>
						</a>

						<ul class="listing-details">
							<li>530 sq ft</li>
							<li>1 Bedroom</li>
							<li>3 Rooms</li>
							<li>1 Bathroom</li>
						</ul>
					</div>
                </div>

                <div class="listing-item">
					<a href="listingdetail5.php" class="listing-img-container">
						<div class="listing-badges">
							<span>Under Construction</span>
						</div>
						<div class="listing-img-content">
							<span class="listing-price">$275,000 <i>$520 / sq ft</i></span>
						</div>
						<div class="listing-carousel">
							<div><img src="images/project5/1.jpg" alt=""></div>
							<div><img src="images/project5/2.jpg" alt=""></div>
							<div><img src="images/project5/3.jpg" alt=""></div>
							<div><img src="images/project5/4.jpg" alt=""></div>
							<div><img src="images/project5/5.jpg" alt=""></div>
							<div><img src="images/project5/6.jpg" alt=""></div>
							<div><img src="images/project5/7.jpg" alt=""></div>
							<div><img src="images/project5/8.jpg" alt=""></div>
							<div><img src="images/project5/9.jpg" alt=""></div>
						</div>
					</a>

					<div class="listing-content">
						<a href="listingdetail5.php">
							<div class="listing-title">
								<h4>Project 5</h4>
								<p class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									GS Breeze, Kondapur, Hyderabad
								</p>
							</div>
						</a>

						<ul class="listing-details">
							<li>530 sq ft</li>
							<li>1 Bedroom</li>
							<li>3 Rooms</li>
							<li>1 Bathroom</li>
						</ul>
					</div>
                </div>

                <!-- <div class="listing-item">
					<a href="listingdetail.php" class="listing-img-container">
						<div class="listing-badges">
							<span>Ready to Movein</span>
						</div>
						<div class="listing-img-content">
							<span class="listing-price">$275,000 <i>$520 / sq ft</i></span>
						</div>
						<div class="listing-carousel">
							<div><img src="images/property/5.jpg" alt=""></div>
							<div><img src="images/property/4.jpg" alt=""></div>
							<div><img src="images/property/8.jpg" alt=""></div>
						</div>
					</a>

					<div class="listing-content">
						<div class="listing-title">
							<h4><a href="listingdetail.php">Eagle Apartments</a></h4>
							<a href="#" class="listing-address popup-gmaps">
								<i class="fa fa-map-marker"></i>
								GS Breeze, Kondapur, Hyderabad
							</a>

						</div>

						<ul class="listing-details">
							<li>530 sq ft</li>
							<li>1 Bedroom</li>
							<li>3 Rooms</li>
							<li>1 Bathroom</li>
						</ul>
					</div>
                </div> -->
			</div>

			<div class="clearfix"></div>
			<!-- <div class="pagination-container margin-top-20">
				<nav class="pagination">
					<ul>
						<li><a href="#" class="current-page">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="blank">...</li>
						<li><a href="#">22</a></li>
					</ul>
				</nav>

				<nav class="pagination-next-prev">
					<ul>
						<li><a href="#" class="prev">Previous</a></li>
						<li><a href="#" class="next">Next</a></li>
					</ul>
				</nav>
			</div> -->
		</div>
	</div>
</div>


<?php include("include/footer.php") ?>