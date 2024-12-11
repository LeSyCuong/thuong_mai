(function ($) {
  "user strict";
  $.fn.Dqdt_CountDown = function (options) {
    return this.each(function () {
      new $.Dqdt_CountDown(this, options);
    });
  };
  $.Dqdt_CountDown = function (obj, options) {
    this.options = $.extend(
      {
        autoStart: true,
        LeadingZero: true,
        DisplayFormat:
          "<div><span>%%D%%</span> Days</div><div><span>%%H%%</span> Hours</div><div><span>%%M%%</span> Mins</div><div><span>%%S%%</span> Secs</div>",
        FinishMessage: "háº¿t háº¡n",
        CountActive: true,
        TargetDate: null,
      },
      options || {}
    );
    if (this.options.TargetDate == null || this.options.TargetDate == "") {
      return;
    }
    this.timer = null;
    this.element = obj;
    this.CountStepper = -1;
    this.CountStepper = Math.ceil(this.CountStepper);
    this.SetTimeOutPeriod = (Math.abs(this.CountStepper) - 1) * 1000 + 990;
    var dthen = new Date(this.options.TargetDate);
    var dnow = new Date();
    if (this.CountStepper > 0) {
      ddiff = new Date(dnow - dthen);
    } else {
      ddiff = new Date(dthen - dnow);
    }
    gsecs = Math.floor(ddiff.valueOf() / 1000);
    this.CountBack(gsecs, this);
  };
  $.Dqdt_CountDown.fn = $.Dqdt_CountDown.prototype;
  $.Dqdt_CountDown.fn.extend = $.Dqdt_CountDown.extend = $.extend;
  $.Dqdt_CountDown.fn.extend({
    calculateDate: function (secs, num1, num2) {
      var s = (Math.floor(secs / num1) % num2).toString();
      if (this.options.LeadingZero && s.length < 2) {
        s = "0" + s;
      }
      return "<b>" + s + "</b>";
    },
    CountBack: function (secs, self) {
      if (secs < 0) {
        self.element.innerHTML =
          '<div class="lof-labelexpired"> ' +
          self.options.FinishMessage +
          "</div>";
        return;
      }
      clearInterval(self.timer);
      DisplayStr = self.options.DisplayFormat.replace(
        /%%D%%/g,
        self.calculateDate(secs, 86400, 365)
      );
      DisplayStr = DisplayStr.replace(
        /%%H%%/g,
        self.calculateDate(secs, 3600, 24)
      );
      DisplayStr = DisplayStr.replace(
        /%%M%%/g,
        self.calculateDate(secs, 60, 60)
      );
      DisplayStr = DisplayStr.replace(
        /%%S%%/g,
        self.calculateDate(secs, 1, 60)
      );
      self.element.innerHTML = DisplayStr;
      if (self.options.CountActive) {
        self.timer = null;
        self.timer = setTimeout(function () {
          self.CountBack(secs + self.CountStepper, self);
        }, self.SetTimeOutPeriod);
      }
    },
  });
  $(document).ready(function () {
    $('[data-countdown="countdown"]').each(function (index, el) {
      var $this = $(this);
      var $date = $this.data("date").split("-");
      $this.Dqdt_CountDown({
        TargetDate:
          $date[0] +
          "/" +
          $date[1] +
          "/" +
          $date[2] +
          " " +
          $date[3] +
          ":" +
          $date[4] +
          ":" +
          $date[5],
        DisplayFormat:
          '<div class="block-timer"><p>%%D%%NgĂ y</p></div><span>:</span><div class="block-timer"><p>%%H%%Giá»</p></div><span class="mobile">:</span><div class="block-timer"><p>%%M%%PhĂºt</p></div><span>:</span><div class="block-timer"><p>%%S%%GiĂ¢y</p></div>',
        FinishMessage:
          "ChÆ°Æ¡ng trĂ¬nh Ä‘Ă£ káº¿t thĂºc, háº¹n gáº·p láº¡i trong thá»i gian sá»›m nháº¥t!",
      });
    });
  });
})(jQuery);

$(".not-dqtab").each(function (e) {
  var $this1 = $(this);
  var datasection = $this1.closest(".not-dqtab").attr("data-section");
  $this1.find(".tabs-title li:first-child").addClass("current");
  var view = $this1.closest(".not-dqtab").attr("data-view");
  $this1.find(".tab-content").first().addClass("current");
  var droptab = $(this).find(".tab-desktop");
  $this1.find(".tabs-title.ajax li").click(function () {
    var $this2 = $(this),
      tab_id = $this2.attr("data-tab"),
      url = $this2.attr("data-url");
    var etabs = $this2.closest(".e-tabs");
    etabs.find(".tab-viewall").attr("href", url);
    etabs.find(".tabs-title li").removeClass("current");
    etabs.find(".tab-content").removeClass("current");
    $this2.addClass("current");
    etabs.find("." + tab_id).addClass("current");
    if (!$this2.hasClass("has-content")) {
      $this2.addClass("has-content");
      getContentTab(url, "." + datasection + " ." + tab_id, view);
    }
  });
});

function getContentTab(url, selector) {
  url = url + "?view=ajaxload4";

  var loading =
    '<div style="width: 100%; margin-top: 20px" class="text-center">Äang táº£i dá»¯ liá»‡u...</div>';
  var fill = $(selector);
  console.log(url);
  $.ajax({
    type: "GET",
    url: url,
    beforeSend: function () {
      $(selector).html(loading);
    },
    success: function (data) {
      var content = $(data);
      setTimeout(function () {
        $(selector).html(content.html());

        awe_lazyloadImage();
        favoriBean.Wishlist.wishlistProduct();
        $(selector + " .add_to_cart").click(function (e) {
          e.preventDefault();
          var $this = $(this);
          var form = $this.parents("form");
          $.ajax({
            type: "POST",
            url: "/cart/add.js",
            async: false,
            data: form.serialize(),
            dataType: "json",
            beforeSend: function () {},
            success: function (line_item) {
              $(".cart-popup-name")
                .html(line_item.title)
                .attr("href", line_item.url, "title", line_item.title);
              ajaxCart.load();

              $(
                ".popup-cart-mobile, .backdrop__body-backdrop___1rvky"
              ).addClass("active");
              AddCartMobile(line_item);
            },
            cache: false,
          });
        });
      }, 300);
    },
    error: function (err) {
      $(selector).html(
        '<div style="margin-top: 20px" class="alert alert-warning alert-warning2 alert-dismissible margin-top-15 section" role="alert">		Sáº£n pháº©m Ä‘ang Ä‘Æ°á»£c cáº­p nháº­t.	</div>'
      );
    },
    dataType: "html",
  });
}
