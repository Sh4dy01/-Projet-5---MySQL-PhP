$(document).ready(function(){
  $('.modal').modal();
  $('.tabs').tabs();
  $('.sidenav').sidenav();
  $('.dropdown-trigger').dropdown();
  $('input#input_text, textarea#textarea2, input#secret_text').characterCounter();
  $('.collapsible').collapsible();
  $('.carousel').carousel();
  $('.fixed-action-btn').floatingActionButton();
  $('.tap-target').tapTarget();
});

$('.carousel.carousel-slider').carousel({
  fullWidth: true,
  indicators: true
});

$("#secret_btn" ).click(function() {
  var text = $("#secret_text").val().toLowerCase();

  if (text == "adventure") {
    const music = new Audio("audio/van-halen-jump.mp3");

    const elem1 = $("#secret1_img");
    const elem2 = $("#secret2_img");
    const finish = $("#finish");

    const ol1 = $("#ol1");
    const ol2 = $("#ol2");
    const om1 = $("#om1");
    const om2 = $("#om2");

    const site = $("#main");

    const slowSpeed = 1000;

    site.hide();
    elem1.show();
    elem2.show();
    om1.show();
    om2.hide();
    ol1.show();
    ol2.hide();
    finish.hide();

    music.play();

    elem1.animate({top: '-=70%'}, 7000, "linear");
    elem2.animate({top: '-=50%'}, 7000, "linear");

    //--- WARM UP ---//
    for (var i = 0; i < 4; i++) {
      elem1.animate({left: '+=10%'}, slowSpeed);
      elem1.animate({left: '-=10%'}, slowSpeed-25);
      elem2.animate({left: '+=10%'}, slowSpeed);
      elem2.animate({left: '-=10%'}, slowSpeed);
    }

    elem1.animate({left: '100%'}, slowSpeed+100);
    om1.delay(16000).hide(0);
    om2.delay(16000).show(0);

    elem1.animate({left: '-100%'}, slowSpeed);
    om2.delay(1000).hide(0);
    om1.delay(1000).show(0);

    elem1.animate({left: '100%'}, slowSpeed-100);
    om1.delay(900).hide(0);
    om2.delay(900).show(0);

    elem1.animate({left: '-100%'}, slowSpeed);
    om2.delay(1000).hide(0);
    om1.delay(1000).show(0);

    elem1.animate({left: '100%'}, slowSpeed-200);
    om1.delay(800).hide(0);
    om2.delay(800).show(0);

    elem1.animate({left: '-100%'}, slowSpeed+100);
    om2.delay(1100).hide(0);
    om1.delay(1100).show(0);

    elem1.animate({left: '50%'}, slowSpeed+250);
    elem1.delay(200).animate({left: '100%'}, slowSpeed-500);
    om1.delay(1950).hide(0);
    om2.delay(1950).show(0);

    elem1.animate({left: '-100%'}, slowSpeed-200);
    om2.delay(800).hide(0);
    om1.delay(800).show(0);

    elem1.animate({left: '100%'}, slowSpeed);
    om1.delay(1000).hide(0);
    om2.delay(1000).show(0);

    elem1.animate({left: '-100%'}, slowSpeed);
    om2.delay(1000).hide(0);
    om1.delay(1000).show(0);

    elem1.animate({left: '100%'}, slowSpeed-250);
    om1.delay(750).hide(0);
    om2.delay(750).show(0);

    //--- OL MAIN ---//

    elem2.animate({left: '100%'}, slowSpeed);
    ol1.delay(16000).hide(0);
    ol2.delay(16000).show(0);

    for (var i = 0; i < 5; i++) {
      elem2.animate({left: '-100%'}, slowSpeed);
      ol2.delay(1000).hide(0);
      ol1.delay(1000).show(0);

      if (i==4) {
        elem2.animate({left: '100%'}, slowSpeed+1000);
        ol2.delay(2000).hide(0);
        ol1.delay(2000).show(0);
      } else {
        elem2.animate({left: '100%'}, slowSpeed);
        ol1.delay(1000).hide(0);
        ol2.delay(1000).show(0);
      }
    }

    finish.delay(25500).show(40);
  }
  else {
    alert("Indice : La réponse se trouve dans le film Ready Player One");
  }
});

$("#return_btn").click(function() {
  location.reload();
});
