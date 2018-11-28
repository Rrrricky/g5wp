// Display video

class VideoDisplayer {
	display() {
		if ( document.querySelector( '.wrapperAnimal__home__footer__video' ) ) {
			const videoBtn = document.querySelector(
				'.wrapperAnimal__home__footer__video'
			);
			const videoDisplay = document.querySelector(
				'.wrapperAnimal__home__displayVideo'
			);
			const videoClose = document.querySelector( '.wrapperAnimal__home__close' );
			const videoFrame = document.querySelector( '#video' );

			let isVideoDisplayed = false;
			videoBtn.addEventListener( 'click', () => {
				if ( true == isVideoDisplayed ) {
					isVideoDisplayed = false;
					videoDisplay.classList.remove( 'active' );
					videoClose.classList.remove( 'active' );
				} else if ( false == isVideoDisplayed ) {
					isVideoDisplayed = true;
					videoDisplay.classList.add( 'active' );
					videoClose.classList.add( 'active' );
				}
			});

			videoClose.addEventListener( 'click', () => {
				isVideoDisplayed = false;
				videoDisplay.classList.remove( 'active' );
				videoClose.classList.remove( 'active' );
			});
		}
	}
}

const displayer = new VideoDisplayer();
displayer.display();
