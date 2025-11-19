//You can start using the library's methods here out the gate. 
//No need to import.

//Check out the documations here: https://animejs.com/documentation/
//See which methods you need!

//Example code is below. Use it as reference only.
document.addEventListener('DOMContentLoaded', function() {
    anime.animate(
        '.animated-button',
        {
        translateX: 500,
        rotate: {
            to: 360,
            duration: 1500, // Local duration only applied to rotate property
        },
        duration: 2000,
        ease: 'linear',
        alternate: true,
    }); 
    console.log('Hello this means that it loaded!')
});