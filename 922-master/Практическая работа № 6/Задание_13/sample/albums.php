<?php
	// инициируем массив альбомов
	$albums = 
		[
			[
			"id"=>"1", "album_name"=>"Atom Heart Mother", "date"=>"10 октября 1970", 
			"label" => "<li>EMI, <li>Harvest, <li>Capitol",
			"format"=> "<li>LP, <li>CD",
			"status"=> "<li>Золотой (USA)"
			],

			[
			"id"=>"2", "album_name"=>"Meddle", "date"=>"30 октября 1971",
			"label"=> "<li>EMI, <li>Harvest, <li>Capitol",
			"format"=> "<li>Vinyl, <li>кассета, <li>CD",
			"status"=> "<li>Платиновый (USA)"
			],

			[
			"id"=>"3", "album_name"=>"Obscured by Clouds", "date"=>"3 июня 1972",
			"label"=> "<li>EMI, <li>Harvest, <li>Capitol",
			"format"=> "<li>LP, <li>кассета, <li>CD",
			"status"=> "<li>Золотой (USA), <li>Серебряный (GBR)"
			],

			[
			"id"=>"4", "album_name"=>"The Dark Side", "date"=>"17 марта 1973",
			"label"=> "<li>Harvest, <li>Capitol, <li>EMI",
			"format"=> "<li>LP, <li>кассета, <li>CD, <li>SACD",
			"status"=> "<li>Платиновый (USA), <li>Платиновый (GBR), <li>Бриллиантовый (CAN)"
			],

			[
			"id"=>"5", "album_name"=>"Wish You Were", "date"=>"15 сентября 1975",
			"label"=> "<li>Harvest, <li>EMI, <li>Columbia, <li>Capitol",
			"format"=> "<li>LP, <li>8-track, <li>кассета, <li>CD, <li>SACD",
			"status"=> "<li>Платиновый (USA), <li>Золотой (GBR), <li>Платиновый (CAN)"
			],

			[
			"id"=>"6", "album_name"=>"Animals", "date"=>"23 января 1977",
			"label"=> "<li>Harvest, <li>EMI, <li>Columbia, <li>Capitol",
			"format"=> "<li>LP, <li>8-track, <li>кассета, <li>CD",
			"status"=> "<li>Платиновый (USA), <li>Золотой (GBR), <li>Платиновый (CAN)"
			],

			[
			"id"=>"7", "album_name"=>"The Wall", "date"=>"30 ноября 1979",
			"label"=> "<li>Harvest, <li>EMI, <li>Columbia, <li>Capitol",
			"format"=> "<li>LP, <li>8-track, <li>кассета, <li>CD",
			"status"=> "<li>Платиновый (USA), <li>Платиновый (GBR), <li>Бриллиантовый (CAN)"
			],

			[
			"id"=>"8", "album_name"=>"The Final Cut", "date"=>"21 марта 1983",
			"label"=> "<li>Harvest, <li>EMI, <li>Columbia, <li>Capitol",
			"format"=> "<li>LP, <li>8-track, <li>кассета, <li>CD",
			"status"=> "<li>Платиновый (USA), <li>Золотой (GBR)"
			],

			[
			"id"=>"9", "album_name"=>"A Momentary Lapse", "date"=>"8 сентября 1987",
			"label"=> "<li>EMI, <li>Columbia",
			"format"=> "<li>LP, <li>кассета, <li>CD",
			"status"=> "<li>Платиновый (USA), <li>Золотой (GBR), <li>Платиновый (CAN)"
			],

			[
			"id"=>"10", "album_name"=>"The Division Bell", "date"=>"30 марта 1994",
			"label"=> "<li>EMI, <li>Columbia",
			"format"=> "<li>LP, <li>кассета, <li>CD",
			"status"=> "<li>Платиновый (USA), <li>Платиновый (GBR), <li>Платиновый (CAN)"
			]
	];