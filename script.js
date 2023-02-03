let menuBtn = document.querySelector('.menu-btn');
let menu = document.querySelector('.menu');
menuBtn.addEventListener('click', function(){
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');
})
//
var form = document.getElementById("reserve-form");
var btnReserve = document.getElementById("reserve");
var close = document.getElementsByClassName("close")[0];
const toggleModal = () => {
    form.classList.toggle('hidden');
};
btnReserve.onclick = function() {
    toggleModal();
}
close.onclick = function() {
    toggleModal();
}    
window.onclick = function(event) {
  if (event.target == form) {
    toggleModal();
  }
}
//
  const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  speed: 400,
  //loop: true,
  slidesPerView: 1,
  centeredSlides: true,
  setWrapperSize: true,
  width: 785,
  
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },


});

document.querySelector('form').addEventListener('submit', function(evt){
  evt.preventDefault(); 
  $.ajax({
    url: '/send.php',
    method: 'get',
    dataType: 'html',
    data: $(this).serialize(),

    success: function(data){
  
      alert(data);
  
    }
  
  });

});