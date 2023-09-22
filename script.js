// Animation qui permet de remonter en haut de la page (grâce à un bouton) et qui disparait une fois arrivé en haut
$(function() {
  
  var btn = $('#button');

  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
     btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  }); 

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });

  $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#button').fadeIn();
        } else {
            $('#button').fadeOut();
        }
    });
});

// Animation qui permet le défilement des images
$(function(){

  var $mainMenuItems = $("#main-menu ul").children("li"),
  totalMainMenuItems = $mainMenuItems.length,
  openedIndex = 2,
      
  init = function(){
      bindEvents();
      if(validIndex(openedIndex))
          animateItem($mainMenuItems.eq(openedIndex), true, 700);
  },
  
  bindEvents = function(){
   
      $mainMenuItems.children(".images").click(function(){
          var newIndex = $(this).parent().index();
          checkAndAnimateItem(newIndex);
      });
      
      $(".button").hover(
      function(){
          $(this).addClass("hovered");
      },
      function(){
          $(this).removeClass("hovered");
      }
      );
      
      $(".button").click(function(){
          var newIndex = $(this).index();
          checkAndAnimateItem(newIndex);    
      });
      
      
  },
      
  validIndex = function(indexToCheck){
      return (indexToCheck >= 0) && (indexToCheck < totalMainMenuItems);
  },
      
  animateItem = function($item, toOpen, speed){
      var $colorImage = $item.find(".color"),
      itemParam = toOpen ? {width: "420px"}:{width: "140px"} ,                         
      colorImageParam = toOpen ? {left: "0px"}:{left: "140px"};     
      $colorImage.animate(colorImageParam,speed);
      $item.animate(itemParam,speed);    
  },
  
  checkAndAnimateItem = function(indexToCheckAndAnimate){
      if(openedIndex === indexToCheckAndAnimate)
      {
          animateItem($mainMenuItems.eq(indexToCheckAndAnimate), false, 250);
          openedIndex = -1;
      }
      else
      {
          if(validIndex(indexToCheckAndAnimate))
          {
              animateItem($mainMenuItems.eq(openedIndex), false, 250);                         
              openedIndex = indexToCheckAndAnimate;
              animateItem($mainMenuItems.eq(openedIndex), true, 250);
          }
      }
  };
  
  init();
});

$(document).ready(function() {
    var table = $('#example').DataTable( {       
        scrollX:        true,
        scrollCollapse: true,
        autoWidth:         true,  
         paging:         true,       
        columnDefs: [
        { "width": "150px", "targets": [0,1] },       
        { "width": "40px", "targets": [4] }
      ]
    } );
} );

// Affichage des champs dans les pages ajout et modification d'un projet
(function($){
	function floatLabel(inputType){
		$(inputType).each(function(){
			var $this = $(this);
			// on focus add cladd active to label
			$this.focus(function(){
				$this.next().addClass("active");
			});
			//on blur check field and remove class if needed
			$this.blur(function(){
				if($this.val() === '' || $this.val() === 'blank'){
					$this.next().removeClass();
				}
			});
		});
	}
	// just add a class of "floatLabel to the input field!"
	floatLabel(".floatLabel");
})(jQuery);