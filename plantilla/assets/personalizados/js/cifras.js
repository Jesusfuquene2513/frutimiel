 cifra1(); 

            function cifra1(){
                  const counterUp = window.counterUp.default

const callback = entries => {
    entries.forEach( entry => {
        const el = entry.target
        if ( entry.isIntersecting && ! el.classList.contains( 'is-visible' ) ) {
            counterUp( el, {
                duration: 2000,
                delay: 16,
            } )
            el.classList.add( 'is-visible' )
        }
    } )
}

const IO = new IntersectionObserver( callback, { threshold: 1 } )

const el = document.querySelector( ' .counter' )
IO.observe( el )
cifra2();
            }  

             function cifra2(){
                  const counterUp = window.counterUp.default

const callback = entries => {
    entries.forEach( entry => {
        const el = entry.target
        if ( entry.isIntersecting && ! el.classList.contains( 'is-visible' ) ) {
            counterUp( el, {
                duration: 2000,
                delay: 16,
            } )
            el.classList.add( 'is-visible' )
        }
    } )
}

const IO = new IntersectionObserver( callback, { threshold: 1 } )

const el = document.querySelector( ' .counter2' )
IO.observe( el )
cifra3();
            } 

          

             function cifra3(){
                  const counterUp = window.counterUp.default

const callback = entries => {
    entries.forEach( entry => {
        const el = entry.target
        if ( entry.isIntersecting && ! el.classList.contains( 'is-visible' ) ) {
            counterUp( el, {
                duration: 2000,
                delay: 16,
            } )
            el.classList.add( 'is-visible' )
        }
    } )
}

const IO = new IntersectionObserver( callback, { threshold: 1 } )

const el = document.querySelector( ' .counter3' )
IO.observe( el )

cifra4();

            } 


            function cifra4(){
                  const counterUp = window.counterUp.default

const callback = entries => {
    entries.forEach( entry => {
        const el = entry.target
        if ( entry.isIntersecting && ! el.classList.contains( 'is-visible' ) ) {
            counterUp( el, {
                duration: 2000,
                delay: 16,
            } )
            el.classList.add( 'is-visible' )
        }
    } )
}

const IO = new IntersectionObserver( callback, { threshold: 1 } )

const el = document.querySelector( ' .counter4' )
IO.observe( el )

            } 