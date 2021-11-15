document.addEventListener('DOMContentLoaded', function() {

    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        spaceBetween: 30,
        slidesPerView: 5,
        freeMode: true,
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            730: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // when window width is >= 480px
            840: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is >= 640px
            1180: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            1200: {
                slidesPerView: 5,
                spaceBetween: 30
            }
        },


        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });


    $(".menu-icon-mobile").click(function(){
        if($('.header-menu-right').hasClass('active')){
            $('.header-menu-right').removeClass('active');
        } else {
            $('.header-menu-right').addClass('active');
        }
    });

    $(".btn-more-li").click(function(){
        let parent = $(this).closest('.expand').find('.item-close').show('slow');
        $(this).hide('slow');
    });

    $(".btn-more-text").click(function(){
        $(".description.hide").show(2000);
        $(this).hide(2000);
    });

    var earTimer;
    jqueryTableMove();

    var app = new Vue({
        el: '#exampleModal',
        name: 'form',
        data: {
            loader: false,
            message_send: false,
            pack: {
                name: '',
                phone: '',
                email: '',
                description: '',
                quickly: false,
                agree: true,
                link: document.location.href,
            },
            err_name: '',
            err_phone: '',
            err_email: '',
            err_agree: '',
            err_cnt: 0,
        },
        methods: {
          send(){
              if(this.pack.name.length == 0){
                  this.err_name = 'Поле не должшно быть пустым';
                  this.err_cnt += 1;
              } else {this.err_name = '';}
              if(this.pack.phone.length == 0){
                  this.err_phone = 'Поле не должшно быть пустым';
                  this.err_cnt += 1;
              } else {this.err_phone = '';}
              if(this.pack.email.length == 0){
                  this.err_email = 'Поле не должшно быть пустым';
                  this.err_cnt += 1;
              } else {this.err_email = '';}
              if(this.pack.agree == false){
                  this.err_agree = 'Обязатльна для заполнения';
                  this.err_cnt += 1;
              } else {this.err_agree = '';}

              if(this.err_cnt == 0){
                  this.loader = true;
                  axios.post('/ajax/send_email.php',  {pack: this.pack})
                      .then((res) => {
                          this.loader = false;
                          this.message_send = true;
                      })
                      .catch((err) => {
                          this.loader = false;
                          this.message_send = true;
                      });
              }
          }
        }
    });

}, false);

function jqueryTableMove(){
    let wrp = $('.wrp-table');
    let table = $('.wrp-table > table');
    let wrp_w = wrp.width();
    let table_w = table.width();

    if(table_w > wrp_w){
        wrp.css('position', 'relative');

        $( ".wrp-table" ).wrap( "<div class='wrp-wrp-table'></div>" );

        wrpwrp = $(".wrp-wrp-table");
        wrpwrp.prepend('<div class="move-table-left"></div>');
        wrpwrp.prepend('<div class="move-table-right"></div>');
        wrpwrp.css('position', 'relative');

        wrpwrp.on( "mouseenter", ".move-table-left", function() {
            var self = $(this);
            var parent = $(this).closest('.wrp-wrp-table').find('.wrp-table');

            earTimer = setInterval(() => {
                var posix = parent.scrollLeft();
                parent.scrollLeft(posix-10);
            }, 20);
            console.log('навел на левую кнопку');
        });
        wrpwrp.on( "mouseleave", ".move-table-left", function() {
            clearInterval(earTimer);
        });

        wrpwrp.on( "mouseenter", ".move-table-right", function() {
            var self = $(this);
            var parent = $(this).closest('.wrp-wrp-table').find('.wrp-table');

            earTimer = setInterval(() => {
                var posix = parent.scrollLeft();
                parent.scrollLeft(posix+10);
            }, 20);
            console.log('убрал с правой кнопки');
        });
        wrpwrp.on( "mouseleave", ".move-table-right", function() {
            clearInterval(earTimer);
        });
    }
}
let root = document.location.pathname;
if ((root=="/opn-6.php")||(root=="/opn-10.php")||(root=="/opn-20.php")||(root=="/opn-35.php")){
    let count = $(".hover-prod").length;
    let hover_remove = $(".hover-prod");
    //$(".hover-prod").eq(3).removeClass("hover-prod");
    $(".info").hide();
    for (i=0;i<count;i++){
        hover_remove.eq(i).removeClass("hover-prod");
        $(".wrp-tab-content").eq(i).hide();
        console.log(i);
    }
}
console.log(root);


