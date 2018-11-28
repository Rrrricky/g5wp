class Animations {

	mainDataTransition() {


		const $threeMainData = document.querySelectorAll(".js-RegionPage__mainData")
		let threeDataPosition = $threeMainData[0].offsetTop

		window.addEventListener(
			"scroll",
			()=>{
				let scrollPosition = pageYOffset
				if(scrollPosition >= threeDataPosition - 3/4 * window.innerHeight) {
					for(let $MainData of $threeMainData) {
						$MainData.style.opacity = "1";
					}
				}
			}
		)
	}


	basicTransition() {

		const $transitions = document.querySelectorAll(".js-transitions")

		let transitionPositions = []
		for(let transition of $transitions) {
			transitionPositions.push(transition.offsetTop)
		}

		window.addEventListener(
			"scroll",
			()=>{
				let scrollPosition = pageYOffset
				console.log("scroll : "+scrollPosition)
				for(let i = 0; i < transitionPositions.length; i++) {
					console.log("element : "+transitionPositions[i])
					if(scrollPosition >= transitionPositions[i] - 3/4 * window.innerHeight) {
						$transitions[i].style.opacity = "1";
						console.log("ouch")
					}
				}
			}
		)
	}
}


const animations = new Animations

if(document.querySelector(".js-RegionPage__mainData")) {
	animations.mainDataTransition()
}

if(document.querySelector(".js-transitions")) {
	animations.basicTransition()
}



