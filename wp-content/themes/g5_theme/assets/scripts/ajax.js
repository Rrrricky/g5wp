const ajaxRequest =()=> {

	let $pagination = document.querySelector(".readMore").dataset.pagination
	let $readMore = document.querySelector(".readMore")

	$readMore.addEventListener(
		"click",
		(e)=>{
			e.preventDefault()
			let $ajax_section = document.querySelector(".ajax-section")
			let request = new XMLHttpRequest()

			request.open('POST', ajaxurl, true)
			request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;');
			request.onload = function() {
				if(this.status >= 200 && this.status < 400) {
					$ajax_section.insertAdjacentHTML('beforeend', this.response)
					$pagination++
					if(max_paged < $pagination-1) {
						document.querySelector(".readMore").style.display = "none"
					}
				}else {
					console.log(this.response)
				}
			}
			request.send('action=ajax-morePhotos&pagination='+$pagination)
		}
	)
}

if(document.querySelector(".readMore")) {
	ajaxRequest()
}



let templateUrl = object_name.templateUrl

//Auto-complete library
const loadJSON=(callback)=>{
	let xobj = new XMLHttpRequest()
			xobj.overrideMimeType("animals/json")
			console.log(templateUrl)
	xobj.open('GET', templateUrl+'/assets/scripts/animals.json', true) // Replace 'my_data' with the path to your file
	xobj.onreadystatechange = function () {
				if (xobj.readyState == 4 && xobj.status == "200") {
					// Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
					callback(xobj.responseText)
				}
	};
	xobj.send(null);
}


const init=()=> {
loadJSON(function(response) {
 // Parse JSON string into object
	 const actual_JSON = JSON.parse(response)
	 complete(actual_JSON)
});
}

init()


const complete=(json)=>{
new autoComplete({
selector: 'input[name="name"]',
minChars: 2,
offsetTop: 5,
source: function(term, suggest){
		term = term.toLowerCase()
		const choices = json
		let matches = []
		for (i=0; i<choices.length; i++)
				if (~choices[i].name.toLowerCase().indexOf(term)) matches.push(choices[i].name)
		suggest(matches)
}
})
}

