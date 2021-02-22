<!DOCTYPE html>
<html lang="en" >
<head>
  	<meta charset="UTF-8">
  	<title>Downloads - Imagio</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./style.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<link rel="icon" href="../images/favicon.png" type="image/x-icon" />
	<script src="./followercount.js"></script>
	<script src="./zoom.js"></script>
</head>
<body>
<header>
	<div class="container">
		<div class="profile">
			<div class="profile-image">
				<img src="./img/prof.jpg" alt="">
			</div>
			<div class="profile-user-settings">
				<h1 class="profile-user-name"><a style="text-decoration: none; color: #000" href="https://instagram.com/imagio.hu">imagio.hu</a></h1>
				<button class="btn profile-edit-btn"><a style="text-decoration: none; color: #000" href="https://www.instagram.com/imagio.hu/" target="_blank">Send Message</a></button>
				<button class="btn profile-settings-btn" aria-label="profile settings"><a style="text-decoration: none; color: #000" href="https://imagio.hu" target="_blank"><i class="fas fa-cog" aria-hidden="true"></i></a></button>
			</div>
			<div class="profile-stats">
				<ul>
					<li><span class="profile-stat-count"><span id="postcount"></span></span> posts</li>
					<li><span class="profile-stat-count"><span id="followercount"></span></span> followers</li>
					<li><span class="profile-stat-count"><span id="followedcount"></span></span> following</li>
				</ul>
			</div>
			<div class="profile-bio">
				<p>by <span class="profile-real-name"><a style="text-decoration: none; color: #000" href="https://www.instagram.com/kisbalazspatrik/" target="_blank">@kisbalazspatrik </a></span> <span class="profile-real-name"><a style="text-decoration: none; color: #000" href="https://www.instagram.com/marciszloboda/" target="_blank">@marciszloboda </a></span><span class="profile-real-name"><a style="text-decoration: none; color: #000" href="https://www.instagram.com/_vnorbi/" target="_blank">@_vnorbi </a></span><br><a style="text-decoration: none; color: #6441a5" href="https://www.twitch.tv/pitpat_" target="_blank"><i class="fa fa-twitch" aria-hidden="true"></i> pitpat_</a></p>
			</div>
		</div>
	</div>
</header>

<main>
	<div class="container">
		<div class="gallery">

			<div class="gallery-item" tabindex="0">
				<img src="./img/imagioweb_1.jpg" class="gallery-image" alt="">
				<div class="gallery-item-info">
					<ul>
						<a style="text-decoration: none; color: #fff" href="/downloads/dl/twitchpanel_1.rar"><li class="gallery-item-likes"><span class="visually-hidden">DL:</span><i class="fas fa-download" aria-hidden="true"></i></li></a>
						<li class="gallery-item-comments" data-enlargable data-image="./img/imagioweb_1.jpg"><span class="visually-hidden">Zoom:</span><i class="fas fa-search" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>

			<div class="gallery-item" tabindex="0">
				<img src="./img/imagioweb_2.jpg" class="gallery-image" alt="">
				<div class="gallery-item-info">
					<ul>
						<a style="text-decoration: none; color: #fff" href="/downloads/dl/twitchpanel_2.rar"><li class="gallery-item-likes"><span class="visually-hidden">DL:</span><i class="fas fa-download" aria-hidden="true"></i></li></a>
						<li class="gallery-item-comments" data-enlargable data-image="./img/imagioweb_2.jpg"><span class="visually-hidden">Zoom:</span><i class="fas fa-search" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
						
		</div>
	</div>
</main>
</body>
</html>
