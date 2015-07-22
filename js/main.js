var squares = {

	init : function() {
		var _ = this;

		_.squarify();
		_.siblings();
	},
	squarify : function() {
		$(".square").each(function() {
			$(this).height($(this).width());
		});
	},
	siblings : function() {
		$(".square-sibling").each(function() {
			var height = $(this).siblings('.square').height();

			$(this).height(height);
		})
	}
}

var contact = {

	init : function() {
		var _ = this;

		_.click();
	},

	link : $("#contact-link"),
	content: $("#contact-appear"),

	click : function() {
		var _ = this;

		_.link.click(function(){
			if (_.content.hasClass('hidden')) {
				_.appear();
			} else if( _.content.hasClass('visible')) {
				_.disappear();
			}
		});
	},
	appear : function() {
		var _ = this;

		_.content.removeClass('hidden').addClass('visible').fadeIn();
	},
	disappear : function() {
		var _ = this;

		_.content.removeClass('visible').addClass('hidden').fadeOut();
	}
}


//Constructor function for songs.
var song = function(element) {

	var _ = this;
	_.element = element;
	_.elementId = element[0].id;
	_.controller = $("#" + _.elementId + "-controller");
	_.button = _.controller.find('.name');
	_.playButton = _.controller.find('.play-img');
	_.pauseButton = _.controller.find('.pause-img');
	_.audio = element.get(0);
	_.timeElapsed = _.controller.find('.timeelapsed');
	_.timeTotal = _.controller.find('.timetotal');

	_.init = function() {
		_.playPause();
		_.updateTime();
		_.totalTime();

	};

	_.playPause = function() {
		_.button.click(function() {
			if ($(this).hasClass('play')) {
				_.play();
			} else if($(this).hasClass('pause')) {
				_.pause();
			}
		});
	};

	_.play = function() {
		$("audio").not(_.element).each(function() {
			var $this = $(this);

			$this.get(0).pause();

			if($this.get(0).duration) {
				$this.get(0).currentTime = 0;	
			}
			
			

		});
		pauseImg.hide();
		playImg.show();
		buttons.removeClass('pause').addClass('play');
		_.audio.play();
		_.playButton.hide();
		_.pauseButton.show();
		_.button.removeClass('play').addClass('pause');

	};

	_.pause = function() {
		_.audio.pause();
		_.pauseButton.hide();
		_.playButton.show();
		_.button.removeClass('pause').addClass('play');
	};

	_.updateTime = function() {
		$(_.audio).bind('timeupdate', function() {
			var theTime = _.audio.currentTime;
			var rem = parseInt(_.audio.duration - theTime, 10);
			var mins = Math.floor(rem/60, 10);
			var secs = rem - mins * 60;
			var elapsedmins = parseInt((theTime / 60) % 60);
			var elapsedsecs = parseInt(theTime % 60);

			_.timeElapsed.html(elapsedmins + ':' + (elapsedsecs < 10 ? '0' + elapsedsecs : elapsedsecs));
		});
	};
	_.totalTime = function() {
		//Wait until song metadata is loaded, then update the displayed song length.
		_.audio.addEventListener("loadedmetadata", function(_event) {
		    var duration = parseInt(_.audio.duration, 10);
		    var mins = Math.floor(duration/60, 10);
		    var secs = duration % 60;
		    _.timeTotal.html(mins + ":" + (secs < 10 ? '0' + secs : secs));
		});

	}

}


var player = {
	init : function() {
		var _ = this;

		_.songs();
	},
	songs : function() {
		var song1 = new song($("#song-1"));
		var song2 = new song($("#song-2"));
		var song3 = new song($("#song-3"));
		var song4 = new song($("#song-4"));
		var song5 = new song($("#song-5"));
		var song6 = new song($("#song-6"));
		// var song7 = new song($("#song-7"));

		song1.init();
		song2.init();
		song3.init();
		song4.init();
		song5.init();
		song6.init();
		// song7.init();
	},
	ellipsis : function() {

	}
}

var instagram = {
	init : function() {
		$('.media-container').instagramLite({
		    clientID: '550028bec7ba46f38302c4f4a1c79a57',
		    username: 'iammindfulof',
		    list: false,
		    limit: 6,
		    success: function() {
		    	console.log('instagram worked.');
		    },
		    error : function() {
		    	console.log('there was an error.');
		    }
		});

		console.log("instagram initiated");
	}

}

artistSamples = {
	init : function() {
		var _ = this;

		_.hover();
	},
	hover : function() {

		// var adinaSample = document.createElement('audio');
		// var landonSample = document.createElement('audio');
		// var nickydSample = document.createElement('audio');
		// var seminoleSample = document.createElement('audio');

		// adinaSample.src = '../audio/adina-sample.mp3';
		// adinaSample.src = '../audio/adina-sample.mp3';
		// adinaSample.src = '../audio/adina-sample.mp3';
		// adinaSample.src = '../audio/adina-sample.mp3';

		var adinaSample = new Audio('../audio/adina-sample.mp3');
		var landonSample = new Audio('../audio/landon-sample.mp3');
		var nickydSample = new Audio('../audio/nickyd-sample.mp3');
		var seminoleSample = new Audio('../audio/seminole-sample.mp3');

		$(".info-module-small-producer").hover(function() {
			var artist = $(this).attr('id');
			
			switch(artist) {
				case 'adina' :
					adinaSample.play();
					break;
				case 'landon':
					landonSample.play();
					break;
				case 'nickyd' : 
					nickydSample.play();
					break;
				case 'seminole' : 
					seminoleSample.play();
					break;
				default :
					console.log("Check main.js file, there is an error with the artistSamles.hover method.");
			}


		}, function() {
			var artist = $(this).attr('id');
			
			switch(artist) {
				case 'adina' :
					adinaSample.pause();
					adinaSample.currentTime = 0;
					break;
				case 'landon':
					landonSample.pause();
					landonSample.currentTime = 0;
					break;
				case 'nickyd' : 
					nickydSample.pause();
					nickydSample.currentTime = 0;
					break;
				case 'seminole' : 
					seminoleSample.pause();
					seminoleSample.currentTime = 0;
					break;
				default :
					console.log("Check main.js file, there is an error with the artistSamles.hover method.");
			}
		});
	}

}

var mobileNav = {
	init : function() {
		var _ = this;

		_.appearance();
	},
	appearance : function() {
		$("#mobile-nav-trigger").click(function() {
			$(".mobile-nav").fadeIn();
			$("#mobile-nav-hide").fadeIn();
		});

		$("#mobile-nav-hide").click(function() {
			$(".mobile-nav").fadeOut();
			$(this).fadeOut();
		});
	}
}



//Variables

var playImg = $(".play-img");
var pauseImg = $(".pause-img");
var buttons = $(".name");


$(document).ready(function() {
	squares.init();
	contact.init();
	mobileNav.init();

	if (thisPage == "sounds") {
		player.init();
	}
	if (thisPage == "social") {
		instagram.init();
	}
	if (thisPage == "producer") {
		artistSamples.init();
	}

	$(".data-img").dataImg({
		resize:true
	});
	
});

$(window).resize(function() {
	squares.init();
});