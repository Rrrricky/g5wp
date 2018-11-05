class NewMouse {
	constructor() {
		this.setMouse()
		this.setEffect()
	}


setMouse() {

	document.body.style.cursor = 'none'
	const $body = document.querySelector('body')
	const $ball = document.querySelector('.wrap__ball-js')
	let xmouse, ymouse

	$body.addEventListener(
		'mousemove',
		(e)=>{
			xmouse = e.clientX || e.pageX
			ymouse = e.clientY || e.pageY
		}
	)




	let 	x = 0,
				y = 0,
				dx = 0,
				dy = 0,
				tx = 0,
				ty = 0,
				key = -1


	let followMouse=()=>{
				key = requestAnimationFrame(followMouse)

				if(!x || !y) {
						x = xmouse
						y = ymouse

				} else {
						dx = (xmouse - x) * 0.125
						dy = (ymouse - y) * 0.125
						if(Math.abs(dx) + Math.abs(dy) < 0.1) {
									x = xmouse
									y = ymouse
						} else {
									x += dx
									y += dy
						}
				}
				$ball.style.left = x + 'px'
				$ball.style.top = y + window.pageYOffset + 'px'
	}

	followMouse()

}


setEffect() {

let prevEvent, currentEvent
document.documentElement.addEventListener(
 'mousemove',
 (event)=>{
  	currentEvent = event
	}
)

let	maxSpeed = 0,
		prevSpeed = 0,
		maxPositiveAcc = 0,
		maxNegativeAcc = 0,
		speed = 0



setInterval(()=>{
  if(prevEvent && currentEvent){
    let movementX = Math.abs(currentEvent.screenX-prevEvent.screenX)
    let movementY = Math.abs(currentEvent.screenY-prevEvent.screenY)
    let movement = Math.sqrt(movementX*movementX+movementY*movementY)



    //speed=movement/100ms= movement/0.1s= 10*movement/s
    let speed = 10*movement //current speed
    let acceleration = 10*(speed-prevSpeed)


		let ball = document.querySelector('.wrap__ball-js')

    if(acceleration>0){
			ball.style.width = speed/100+60 + 'px'
			ball.style.height = speed/100+60 + 'px'
		}
    else{
      ball.style.height = '60px'
      ball.style.width = '60px'
    }
  }

  prevEvent = currentEvent
  prevSpeed = speed
}, 100)

	}
}





const newMouse = new NewMouse()
