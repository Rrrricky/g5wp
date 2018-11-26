class LazyLoading {
	parse() {
		const $lazyLoads = Array.from(document.querySelectorAll(".js-lazyload")) // Get it in an array

		for(const $lazyLoad of $lazyLoads) {
			const $img = $lazyLoad.querySelector('img')
			const $newImg = document.createElement('img') // Useful if the picture is loaded from the cache

		$newImg.addEventListener(
			'load',
			()=> {
				$lazyLoad.classList.add('loaded') // WHen loaded
			}
		)
		$newImg.src = $img.src // Add src
		}
	}
}

const lazyLoading = new LazyLoading()
lazyLoading.parse()
