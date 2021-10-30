//変数宣言
var html = "";
var dir = "";

//ヘッダー作成（ディレクトリの階層、チェックメニュー）
function make_header(d,m){

  //初期化
  html = "";
  dir = "";

  for(var i = 0; i < d; i++){
    dir += "../";
  }

  html += '<header>';
  html += '<table id="header_table">';

  html += '<tr>';
  html += '<td colspan="' + array_header_menu2.length + '" id="logo_flame">';
  html += '<a href="' + dir + 'index.php" class="hover"><h1>株式会社ディリット</h1><img id="logo" src="' + dir + 'img/logo.png" width="260px" height="70px" alt="株式会社ディリットロゴ"></a>';

  html += '<div id="header_menu1">';
  for(var i = 0; i<array_header_menu1.length; i++){
    html += '<a href="' + dir + array_header_menu1[i][1] + '">' + array_header_menu1[i][0] + '</a>';
  }
  html += '<div class="clear"></div>';
  html += '</div>';
  html += '</td>';

  html += '<td rowspan="2" id="header_to_contact" class="hover">';
  html += '<a href="' + dir + 'contact/index.html" id="header_to_contact_a">';
  html += '<img src="'+ dir + 'img/form_icon.png" width="34px" height="34px" id="header_to_contact_icon"><div id="header_to_contact_text">お問い合わせ</div>';
  html += '</a>';
  html += '</td>';

  html += '</tr>';

  html += '<tr>';
  html += '<nav>';
  for(var i = 0; i<array_header_menu2.length; i++){
    if(i !== array_header_menu2.length-1){
      if(i == (m-1)){
        html += '<td class="header_menu2_items">';
        html += '<a href="' + dir + array_header_menu2[i][1] + '">';
        html += '<img src="' + dir + 'img/' + array_header_menu2[i][2] + '" width="20px" height="15px" class="menu_icon">';
        html += array_header_menu2[i][0];
        html += '</a><div class="header_menu2_hover_icon" style="width:100%;left:0%;"></div>';
        html += '</td>';
      }else{
        html += '<td class="header_menu2_items">';
        html += '<a href="' + dir + array_header_menu2[i][1] + '">';
        html += '<img src="' + dir + 'img/' + array_header_menu2[i][2] + '" width="20px" height="15px" class="menu_icon">';
        html += array_header_menu2[i][0];
        html += '</a><div class="header_menu2_hover_icon"></div>';
        html += '</td>';
      }
    }else{
      if(i == (m-1)){
        html += '<td class="header_menu2_items2">';
        html += '<a href="' + dir + array_header_menu2[i][1] + '">';
        html += '<img src="' + dir + 'img/' + array_header_menu2[i][2] + '" width="20px" height="15px" class="menu_icon">';
        html += array_header_menu2[i][0];
        html += '</a><div class="header_menu2_hover_icon" style="width:100%;left:0%;"></div>';
        html += '</td>';
      }else{
        html += '<td class="header_menu2_items2">';
        html += '<a href="' + dir + array_header_menu2[i][1] + '">';
        html += '<img src="' + dir + 'img/' + array_header_menu2[i][2] + '" width="20px" height="15px" class="menu_icon">';
        html += array_header_menu2[i][0];
        html += '</a><div class="header_menu2_hover_icon"></div>';
        html += '</td>';
      }

    }
  }
  html += '<div class="clear"></div>';
  html += '</nav>';
  html += '</tr>';

  html += '</table>';

  html += '<table id="header_table_sp">';
  html += '<tr>';
  html += '<td colspan="' + array_header_menu2.length + '" id="logo_flame">';
  html += '<a href="' + dir + 'index.php" class="hover"><h1>株式会社ディリット</h1><img id="logo" src="' + dir + 'img/logo.png" width="430px" height="115px" alt="株式会社ディリットロゴ"></a>';
  html += '</td>';

  html += '<td style="background:#dbcfc1; width:200px;">';
  html += '<nav>';
  html += '<div class="drawer">';
  html += '<div class="navbar_toggle">';
  html += '<span class="navbar_toggle_icon"></span>';
  html += '<span class="navbar_toggle_icon"></span>';
  html += '<span class="navbar_toggle_icon"></span>';
  html += '<div class="drawer_text">メニュー</div>';
  html += '</div>';
  html += '</div>';
  html += '<div class="menu">';
  html += '<ul>';
  for(var i = 0; i < array_header_menu2.length; i++){
    html += '<li><a href="' + dir + array_header_menu2[i][1] + '">' + array_header_menu2[i][0] + '</a></li>';
  }
  for(var i = 0; i < array_header_menu1.length; i++){
    html += '<li><a href="' + dir + array_header_menu1[i][1] + '">' + array_header_menu1[i][0] + '</a></li>';
  }

  html += '</ul>';
  html += '<div style="height:20px; background:#dbcfc1;"></div>';
  html += '<div id="bg_close"></div>'
  html += '</div>';
  html += '</nav>';
  html += '</td>';

  html += '<td id="header_to_contact" class="hover" style="width:200px;">';
  html += '<a href="' + dir + 'contact/index.html" id="header_to_contact_a">';
  html += '<img src="'+ dir + 'img/form_icon.png" width="46px" height="46px" id="header_to_contact_icon"><div id="header_to_contact_text">お問い合わせ</div>';
  html += '</a>';
  html += '</td>';

  html += '</table><!-- header_table_sp -->';

  html += '</header>';
  document.write(html);
}

//インターネットをお探しの方メニュー作成
function make_message_menu(){

  //初期化
  html = '';

  html += '<table class="table_menu">';
  for(var i = 0; i < array_header_menu2_item1.length; i++){

    if(i % 3 == 0){
      html += '<tr id="table_menu_tr' + i + '">';
    }

    html += '<td class="table_menu_td">';
    html += '<div class="table_menu_click_icon"></div>';
    html += '<a href="' + array_header_menu2_item1[i][1] + '" id="table_menu'+ (i+1) + '" class="table_menu_bg hover">';
    html += '<div class="table_menu_title">' + array_header_menu2_item1[i][0] + '</div>';
//    html += '<div class="table_menu_arrow">→</div>';
    html += '<div class="table_menu_text">' + array_header_menu2_item1[i][2] + '</div>';
    html += '</a>';
    html += '</td>';

    if(i % 3 == 2 || i == array_header_menu2_item1.length){
      html += '</tr>';
    }
  }

  html += '</table>';

  document.write(html);
}

//契約済みのお客様へメニュー作成
function make_contacted_menu(){

  //初期化
  html = '';

  html += '<table class="table_menu">';
  for(var i = 0; i < array_header_menu2_item3.length; i++){
    if(i % 3 == 0){
      html += '<tr>';
    }

    html += '<td>';
    html += '<a href="' + array_header_menu2_item3[i][1] + '" id="contacted_menu'+ (i+1) + '">';
    html += '<div class="table_menu_title2">' + array_header_menu2_item3[i][0] + '</div>';
    html += '<div class="table_menu_arrow">→</div>';
    html += '<div class="table_menu_text2">' + array_header_menu2_item3[i][2] + '</div>';
    html += '</a>';
    html += '</td>';
  }
  if(i % 3 == 2 || i == array_header_menu2_item3.length){
    html += '</tr>';
  }
  html += '</table>';

  document.write(html);
}

//フッター作成
function make_footer(d){

  //初期化
  html = "";
  dir = "";

  for(var i = 0; i < d; i++){
    dir += "../";
  }

  html += '<footer>';

  html += '<div class="container">';
  html += '<div id="footer_menu1">';

  for(var i = 0; i < array_header_menu2.length-1; i++){
      html += '<div class="footer_menu_flame">';
      html += '<div class="footer_menu1_item">';
      html += '<a href="' + dir + array_header_menu2[i][1] + '" class="footer_menu1_large">' + array_header_menu2[i][0] + '</a>';
      var menu_items_s = eval("array_header_menu2_item" + (i+1));
        for(var j = 0; j < menu_items_s.length; j++){
          html += '<a href="' + dir + menu_items_s[j][1] + '" class="footer_menu1_small">' + menu_items_s[j][0].replace("<br>","") + '</a>';
        }
      html += '</div>';
      html += '</div>';
  }

//  html += '<div class="footer_menu_flame" style="margin-right:0px;">';
//  for(var i = 0; i < array_header_menu1.length; i++){
//      html += '<div class="footer_menu1_item">';
//      html += '<a href="' + dir + array_header_menu1[i][1] + '" class="footer_menu1_large">' + array_header_menu1[i][0] + '</a>';
//      var menu_items_s = eval("array_header_menu1_item" + (i+1));
//        for(var j = 0; j < menu_items_s.length; j++){
//          html += '<a href="' + dir + menu_items_s[j][1] + '" class="footer_menu1_small">・' + menu_items_s[j][0] + '</a>';
//        }
//      html += '</div>';
//  }
//  html += '</div>';

  html += '<div class="clear"></div>';
  html += '</div><!-- footer_menu1 -->';

  html += '<div class="clear"></div>';

  html += '<div id="footer_menu2">';
  for(var i = 0; i<array_footer_menu.length; i++){
    html += '<a href="' + dir + array_footer_menu[i][1] + '" class="footer_menu2_items">' + array_footer_menu[i][0] + '</a>';
  }
  html += '<div class="clear"></div>';
  html += '</div>';


  html += '</div><!-- container -->';

  html += '<div class="line2"></div>';

  html += '<div class="container">';
  html += '<div id="copyright">© 2020 <a href="'+dir+'/index.php">株式会社ディリット</a> All rights reserved.</div>';
  html += '</div><!-- container -->';

  html += '</footer>';

  document.write(html);
}

//各メニューのタイトルを取得
function take_title(witch_menu, menu_number){//メニュー1 or 2, メニューナンバー
  var menu_title = eval("array_header_menu" + witch_menu + "[" + (menu_number - 1) + "][0]");
  document.write(menu_title);
}

//各メニューのサブタイトルを取得
function take_sub_title(witch_menu, menu_number, sub_menu_number){//メニュー1 or 2, メニューナンバー, サブメニューナンバー
  var menu_sub_title = eval("array_header_menu" + witch_menu + "_item" + menu_number + "[" + (sub_menu_number - 1) + "][0]").replace("<br>","");
  document.write(menu_sub_title);
}

//サブメニューを作成
function make_left_menu(d, witch_menu, menu_number, sub_menu_number){

  //初期化
  html = "";
  dir = "";

  for(var i = 0; i < d; i++){
    dir += "../";
  }

  html += '<div id="left_menu_inner">';
  var menu_item = eval("array_header_menu" + witch_menu + "_item" + menu_number);
  for(var i = 0; i < menu_item.length; i++){
    if(sub_menu_number == i + 1){
      html += '<a href="' + dir + menu_item[i][1] + '" style="color:#1c8ef1;">';
    }else{
      html += '<a href="' + dir + menu_item[i][1] + '">';
    }
    html += '<div class="left_menu_item">' + menu_item[i][0].replace("<br>","") + '</div>';
    html += '</a>';
  }
  html += '<div class="margin_bottom60"></div>';

  html += '<a href="' + dir + 'contact/index.html" id="left_contact_button">お問い合わせ</a>';
  html += '</div>';


  html += '<div id="left_fixed_menu">';
  for(var i = 0; i < menu_item.length; i++){
    if(sub_menu_number == i + 1){
      html += '<a href="' + dir + menu_item[i][1] + '" style="color:#1c8ef1;">';
    }else{
      html += '<a href="' + dir + menu_item[i][1] + '">';
    }
    html += '<div class="left_menu_item">' + menu_item[i][0].replace("<br>","") + '</div>';
    html += '</a>';
  }
  html += '<div class="margin_bottom60"></div>';

  html += '<a href="' + dir + 'contact/index.html" id="left_contact_button">お問い合わせ</a>';
  html += '</div>';


  document.write(html);
}

//パンくずリスト作成
function make_p_list(d, witch_menu, menu_number, sub_menu_number){

  //初期化
  html = "";
  dir = "";

  for(var i = 0; i < d; i++){
    dir += "../";
  }

  if(d !== 0){
    html += '<div id="p_list">';
    html += '<a href="' + dir + 'index.php">トップ</a>　|　';

    if(d >= 1){
      html += '<a href=' + dir + eval("array_header_menu" + witch_menu + "[" + (menu_number - 1) + "][1]") + '>';
      html += eval("array_header_menu" + witch_menu + "[" + (menu_number - 1) + "][0]");
      html += '</a>　|　';
    }

    if(d >= 2){
      html += '<a href=' + dir + eval("array_header_menu" + witch_menu + "_item" + menu_number +"[" + (sub_menu_number - 1) + "][1]") + '>';
      html += eval("array_header_menu" + witch_menu + "_item" + menu_number +"[" + (sub_menu_number - 1) + "][0]").replace("<br>","");
      html += '</a>　|　';
    }

    html += '</div><!-- p_list -->';
  }

  document.write(html);
}

//ライトフレーム問合せフレーム作成
function make_right_flame_contact(d){

  //初期化
  html = "";
  dir = "";

  for(var i = 0; i < d; i++){
    dir += "../";
  }

  html += '<div class="right_flame_contact_title">インターネットのお悩みは、お気軽にご相談ください。</div>';
  html += '<a href="' + dir + 'contact/index.html" class="right_flame_contact_button hover">お問い合わせはこちらから</a>';

  document.write(html);
}

//JQuery
$(function(){

  //初期設定
  resize();

  //link_line設定
  $('.link_line').css('margin-top',"-200px");
  $('.link_line').css('margin-bottom',"200px");

  //ウィンドウがリサイズされたときの処理
  $(window).resize(function() {
    resize();
  });
  function resize(){
    if($(window).width() > 700){
      $('#header_to_contact_a').css('height',$('#header_to_contact').height()/2+12);
      $('#header_to_contact_a').css('padding-top',$('#header_to_contact').height()/2-12);
      $('#top_space').height($('header').height() - 1);
    }
  }

  //headerのアニメーション
  $('header').css('top',-$('header').height());
  $('header').delay(500).animate({
    top: 0
  },500);

  //メイン画面のアニメーション
  $('#top_message').css('opacity','0');
  $('#top_message').on('inview',function(){
    $(this).delay(200).animate({
      opacity:1
    },500);
  });

  //中タイトルのアニメーション
  $('h2').css('opacity','0');
  $('h2').on('inview',function(){
    $(this).delay(200).animate({
      opacity:1
    },500);
  });

  //インターネットメニューのアニメーション
//  $('.table_menu_title,.table_menu_text').css('opacity','0');
//  $('.table_menu_title,.table_menu_text').on('inview',function(){
//    $(this).delay(200).animate({
//      opacity:1
//    },500);
//  });

  //理念メニューのアニメーション
  $('.vision_title, .vision_sub_title, .vision_text').css('opacity','0');
  $('.vision_title, .vision_sub_title, .vision_text').on('inview',function(){
    $(this).delay(200).animate({
      opacity:1
    },500);
  });

  //ニュースのアニメーション
  $('#news_table').on('inview',function(){
    $(this).delay(200).animate({
      opacity:1
    },500);
  });

  //会社情報のアニメーション
  $('.two_img').css('opacity','0');
  $('.two_img').on('inview',function(){
    $(this).delay(200).animate({
      opacity:1
    },500);
  });

  //ロゴボールアニメーション
  $('.logo_ball').css('opacity', 0);
  $('.logo_ball').css('transition','transform 1s');
  $('.logo_ball').on('inview',function(){
    $(this).css('transform','rotate(360deg)');
    $(this).animate({
      opacity:1
    },500);
  });

  //サブメニューのアニメーション
  $('#left_fixed_menu').css('width',$('#left_menu').width());

  $('#left_fixed_menu').hide();
  $(window).scroll(function(){
    if($(this).scrollTop() > ($('header').height() + $('#sub_page_right_title').height())){
      if($(this).scrollTop() > ($('header').height() + $('#sub_page_right_title').height() + $('#left_menu').height()) - $('#left_menu_inner').height()){
        $('#left_fixed_menu').hide();
        $('#left_menu_inner').css('margin-top', $('#left_menu').height() - $('#left_menu_inner').height());
        $('#left_menu_inner').show();
      }else{
        $('#left_menu_inner').hide();
        $('#left_fixed_menu').show();
        $('#left_fixed_menu').css('margin-top', $(window).scrollTop() - ($('header').height() + $('#sub_page_right_title').height()));
      }
    }else{
      $('#left_fixed_menu').hide();
      $('#left_menu_inner').css('margin-top', 0);
      $('#left_menu_inner').show();
    }
  });

  //トップ画像設定
  $('#top_img').css('background-position','50%');
  $('#top_img').css('background-size','cover');
  var table_menu_flag = 1;
  var left_menu_flag = 1;

  $(window).on('load resize', function(){
    var winW = $(window).width();
    var devW = 1000;
    if (winW <= devW) {
      $('#top_img').bgSwitcher({
          images: ['img/sp_top_img1.png','img/sp_top_img2.png','img/sp_top_img3.png'], // 切替背景画像を指定
          interval: 7000, // 背景画像を切り替える間隔を指定 3000=3秒
          loop: true, // 切り替えを繰り返すか指定 true=繰り返す　false=繰り返さない
          shuffle: false, // 背景画像の順番をシャッフルするか指定 true=する　false=しない
          effect: "fade", // エフェクトの種類をfade,blind,clip,slide,drop,hideから指定
          duration: 1500, // エフェクトの時間を指定します。
          easing: "swing" // エフェクトのイージングをlinear,swingから指定
      });

      if(table_menu_flag == 1){
        var change_item1 = $('#table_menu_tr0').children('td').eq(2).html();
        $('#table_menu_tr0').children('td').eq(2).remove();
        $('#table_menu_tr3').prepend("<td class='table_menu_td' id='table_menu3'>" + change_item1 + "</td>");
        var change_item2 = $('#table_menu_tr3').children('td').eq(2).html();
        var change_item3 = $('#table_menu_tr3').children('td').eq(3).html();
        $('#table_menu_tr3').children('td').eq(2).remove();
        $('#table_menu_tr3').children('td').eq(2).remove();
        $('.table_menu').append('<tr id="table_menu_tr6"><td class="table_menu_td" id="table_menu5">' + change_item2 + '</td><td class="table_menu_td" id="table_menu6">' + change_item3 + '</td></tr>');

        table_menu_flag = 2;
      }

      $('#left_fixed_menu').css('width',$('#left_menu').width());

      if(left_menu_flag == 1){
        var left_menu_item1 = $('#sub_page_left_title').html();
        var left_menu_item2 = $('#left_menu').html();
        $('#sub_page_left_title').remove();
        $('#left_menu').remove();
        left_menu_flag = 2;
      }

    } else {
      $('#top_img').bgSwitcher({
          images: ['img/top_img1.png','img/top_img2.png','img/top_img3.png'], // 切替背景画像を指定
          interval: 5000, // 背景画像を切り替える間隔を指定 3000=3秒
          loop: true, // 切り替えを繰り返すか指定 true=繰り返す　false=繰り返さない
          shuffle: false, // 背景画像の順番をシャッフルするか指定 true=する　false=しない
          effect: "fade", // エフェクトの種類をfade,blind,clip,slide,drop,hideから指定
          duration: 500, // エフェクトの時間を指定します。
          easing: "swing" // エフェクトのイージングをlinear,swingから指定
      });

      if(table_menu_flag == 2){
        var change_item1 = $('#table_menu_tr3').children('td').eq(0).html();
        $('#table_menu_tr3').children('td').eq(0).remove();
        $('#table_menu_tr0').append("<td class='table_menu_td' id='table_menu3'>" + change_item1 + "</td>");
        var change_item2 = $('#table_menu_tr6').children('td').eq(0).html();
        var change_item3 = $('#table_menu_tr6').children('td').eq(1).html();
        $('#table_menu_tr6').remove();
        $('#table_menu_tr3').append("<td class='table_menu_td' id='table_menu5'>" + change_item2 + "</td><td class='table_menu_td' id='table_menu6'>" + change_item3 + "</td>");

        table_menu_flag = 1;
      }

      $('#left_fixed_menu').css('width',$('#left_menu').width());

    }
  });

  //矢印のホバーイベント
  $('.table_menu tr td a').hover(
    function(){
      $(this).children('.table_menu_arrow').not(":animated").animate({
        right:"28px"
      },100);
    },
    function(){
      $(this).children('.table_menu_arrow').animate({
        right:"36px"
      },100);
    }
  );

  //よくある質問アコーディングメニュー
  $(".answer").hide();

  $('.question').on('click', function(){
    $(this).next(".answer").slideToggle();
    if($(this).children(".question_icon").text() == "↓"){
      $(this).children(".question_icon").text("↑");
    }else{
      $(this).children(".question_icon").text("↓");
    }
  });

  //ハンバーガーメニュー
  $('.menu').hide();
  $('.navbar_toggle').on('click', function () {
   $(this).toggleClass('open');
   $('.menu').slideToggle();
  });

  $('#bg_close').on('click', function(){
    $('.navbar_toggle').removeClass('open');
    $('.menu').slideToggle();
  });

});
