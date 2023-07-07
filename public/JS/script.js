
/////////////////////////////////////////////////////////////////
//                                                             //
//                   CONTENT APPEAR / VANISH                   //
//                                                             //
/////////////////////////////////////////////////////////////////



/************************* Appear Content ***********************/

function GhostAppear()
{
  let ghostClass = document.getElementsByClassName('ghost')[0];

  function appear()
  {
    ghostClass.style.transition = 'visibility 1s, opacity 0.5s linear';
    ghostClass.style.visibility = 'visible';
    ghostClass.style.opacity = '1';

    TweenMax.to(ghostClass, 0,{
      textShadow:"0px 0px 15px black",
      color:"none" // IE10 unfortunately hides the shadow too
    });



    setTimeout(function() {
      TweenMax.to(ghostClass, 3, {
        textShadow:"0px 0px 0px black",
        color:"none" // IE10 unfortunately hides the shadow too
      });
    }, 1000)
  }

  setTimeout(appear, 500);
}


window.onload = GhostAppear;


/************************* Vanish Content **************************/

function GhostVanish()
{

  let ghostClass = document.getElementsByClassName('ghost')[0];

  function fadeIn()
  {
    // ghostClass.setAttribute("style","visibility 1.5s, opacity 1s linear");
    ghostClass.style.transition = 'visibility 1.5s, opacity 1s linear';
    ghostClass.style.visibility = 'hidden';
    ghostClass.style.opacity = '0';

    TweenMax.to(ghostClass, 1, {
      textShadow:"0px 20px 15px black",
      color:"none" // IE10 unfortunately hides the shadow too
    });

  }
  setTimeout(fadeIn, 500);
}
