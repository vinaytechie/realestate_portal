
<html>
<body>
<?php include("include/header.php") ?>

<div class="fullwidth-home-slider margin-bottom-0">
	<div data-background-image="images/project1/1.jpg" class="item">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="home-slider-container">
						<div class="home-slider-desc">
							<div class="home-slider-title">
								<h3><a href="listingdetail2.php">Project 1</a></h3>
								<span><i class="fa fa-map-marker"></i> GS Breeze, Kondapur, Hyderabad</span>
							</div>
							<a href="listingdetail.php" class="read-more">View Details <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div data-background-image="images/project2/1.jpg" class="item">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="home-slider-container">
						<div class="home-slider-desc">
							<div class="home-slider-title">
								<h3><a href="listingdetail3.php">Project 2</a></h3>
								<span><i class="fa fa-map-marker"></i> GS Breeze, Kondapur, Hyderabad</span>
							</div>
							<a href="listingdetail.php" class="read-more">View Details <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div data-background-image="images/project3/1.jpg" class="item">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="home-slider-container">
						<div class="home-slider-desc">
							<div class="home-slider-title">
								<h3><a href="listingdetail.php">Project 3</a></h3>
								<span><i class="fa fa-map-marker"></i> GS Breeze, Kondapur, Hyderabad</span>
							</div>
							<a href="listingdetail.php" class="read-more">View Details <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div data-background-image="images/project4/1.jpg" class="item">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="home-slider-container">
						<div class="home-slider-desc">
							<div class="home-slider-title">
								<h3><a href="listingdetail4.php">Project 4</a></h3>
								<span><i class="fa fa-map-marker"></i> GS Breeze, Kondapur, Hyderabad</span>
							</div>
							<a href="listingdetail.php" class="read-more">View Details <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div data-background-image="images/project5/1.jpg" class="item">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="home-slider-container">
						<div class="home-slider-desc">
							<div class="home-slider-title">
								<h3><a href="listingdetail5.php">Project 5</a></h3>
								<span><i class="fa fa-map-marker"></i> GS Breeze, Kondapur, Hyderabad</span>
							</div>
							<a href="listingdetail.php" class="read-more">View Details <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="item slide-video">
		<video id="theVideo" controls="false" autoplay loop muted>
			<source src="images/video/VideoClip.mp4" />
		</video>
	</div>
</div>

<div>
	<video id="theVideoAbout" controls autoplay loop muted>
		<source src="images/video/VideoClip.mp4" />
	</video>
</div>

<?php include("include/footer.php") ?>


<script>
    $(function() {
        $.scrollify({
            section:"section",
            scrollbars:true,
            before:function(i,panels) {
            var ref = panels[i].attr("data-section-name");
            $(".panel.actived").removeClass("actived");
            $("[data-section-name="+ref+"]").addClass("actived");

            $(".pagination .active").removeClass("active");
            $(".pagination").find("a[href=\"#" + ref + "\"]").addClass("active");
            var cc= ref==="five",
                cc2= ref === "second";

            if(cc) {
                $(".panel4 .content").addClass("moved");
            }else {
                $(".panel4 .content").removeClass("moved");
            }

            if(cc2) {
                $(".panel1").addClass("actived");
            }else {
                $(".panel1").removeClass("actived");
            }
            },
            afterRender:function() {
            var pagination = "<ul class=\"pagination\">";
            var activeClass = "";
            $(".panel").each(function(i) {
                activeClass = "";
                if(i===0) {
                activeClass = "active";
                }
                pagination += "<li><a class=\"" + activeClass + "\" href=\"#" + $(this).attr("data-section-name") + "\"><span class=\"hover-text\">" + $(this).attr("data-section-name").charAt(0).toUpperCase() + $(this).attr("data-section-name").slice(1) + "</span></a></li>";
            });

            pagination += "</ul>";

            $(".home").append(pagination);
            }
        });

        $(".pagination a").on("click",$.scrollify.move);
    });

</script>

</body>
</html>