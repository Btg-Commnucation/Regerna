const btnLink = document.querySelectorAll( ".btn-link" );

const handleClick = ( country ) => {
    btnLink.forEach( ( btn ) => {
        btn.classList.remove( 'active' );
        if ( btn.id === country ) {
            btn.classList.add( 'active' );
        }
    } );


}

if ( btnLink ) {

    btnLink.forEach( ( btn ) => {
        btn.addEventListener( "click", (e) => {
            let country = e.target.id
            handleClick(country);
        } );
    } );

}


