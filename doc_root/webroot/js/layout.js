
$(document).ready(function(){
  function layout(){
    var winWidth = window.innerWidth;
    var winHeight = window.innerHeight;
    var navWidth = $('#gNav').width();
    var contentsWidth = $('#contentsBlock').width();

    $('#gNav').height(winHeight);
    $('#contentsBlock').css('margin-left',navWidth);
    $('#footerBlock').width( winWidth - navWidth - contentsWidth );
  }
  layout();

  //リサイズ時にレイアウトを再構築
  $(window).on('resize',function(){
    layout();
  });
});
