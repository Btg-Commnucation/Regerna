const btnLink = document.querySelectorAll( ".btn-link" );
const partnersList = document.querySelectorAll(".partners__loop > a");

const handleClick = ( country ) => {
    btnLink.forEach( ( btn ) => {
        btn.classList.remove( 'active' );
        if ( btn.id.toLowerCase() === country.toLowerCase() ) {
            btn.classList.add( 'active' );
        }
    } );

    for( partners of partnersList ) {
        partners.classList.remove('active');
        if ( country.toLowerCase() === 'all' ) {
            partners.classList.add('active');
        }
        if ( partners.dataset.country.toLowerCase() === country.toLowerCase() ) {
            partners.classList.add('active');
        }
    }


}

if ( btnLink ) {

    btnLink.forEach( ( btn ) => {
        btn.addEventListener( "click", (e) => {
            e.preventDefault();
            let country = e.target.id
            handleClick(country);
        } );
    } );

}


