class Animations {
	constructor() {
		this.detect()
	}
	detect() {

		const $threeMainData = document.querySelectorAll(".js-RegionPage__mainData")
		const $transitions = document.querySelectorAll(".js-RegionPage__transitions")

		window.addEventListener(
			"scroll",
			()=>{

				// Variables
				let scrollPosition = pageYOffset
				let threeDataPosition = $threeMainData[0].offsetTop
				let transitionPositions = []
				for(let transition of $transitions) {
					transitionPositions.push(transition.offsetTop)
				}

				// Condition 1
				if(scrollPosition >= threeDataPosition - 3/4 * window.innerHeight) {
					for(let $MainData of $threeMainData) {
						$MainData.style.opacity = "1";
					}
				}

				// Condition 2
				for(let i = 0; i < transitionPositions.length; i++) {
					if(scrollPosition >= transitionPositions[i] - 3/4 * window.innerHeight) {
						$transitions[i].style.opacity = "1";
					}
				}
			}
		)
	}
}

const animations = new Animations



