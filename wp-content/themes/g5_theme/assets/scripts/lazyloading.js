class LazyLoading {
	parse() {
		const $lazyLoads = Array.from(document.querySelectorAll(".js-lazyload")) // Get it in an array
		let timer = 200

		for(const $lazyLoad of $lazyLoads) {
			const $img = $lazyLoad.querySelector('img')
			const $newImg = document.createElement('img') // Useful if the picture is loaded from the cache
			timer+=1000


		$newImg.addEventListener(
			'load',
			()=> {
				$lazyLoad.classList.add('loaded') // When loaded
			}
		)
		$newImg.src = $img.src // Add src
		}
	}
}

const lazyLoading = new LazyLoading()
lazyLoading.parse()
