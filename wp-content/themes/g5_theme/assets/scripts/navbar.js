/* Get navbar's items */
const navItems = document.querySelectorAll( '.menu-item' );

/* Get Current page link */
const currentPage = window.location.href;

/* Loop inside the navbar's items */
for ( let i = 0 ; i < navItems.length ; i++ ) {

	/* Define the current item stringified */
	const currentItem = navItems[i].firstChild.toString();

	/* If the current item's link is the same as the current page's link, than add class active */
	if ( currentItem == currentPage ) {
		navItems[i].appendChild( document.createElement( 'div' ) ).classList.add( 'nav__active' );
	}
}
