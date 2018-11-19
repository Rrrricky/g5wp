/* Display the current animal's number on the grid-based menu (regions and animals) */
const gridNumbers = document.querySelectorAll('.grid-menu__number')
const $animalWrapper = document.querySelector('.animal-wrapper')

for ( let i = 0; i < gridNumbers.length; i++ ) {
	gridNumbers[i].innerHTML = i + 1
}




