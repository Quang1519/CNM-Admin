!(function (a) {
  "use strict";
  var t = function () {};
  (t.prototype.init = function () {
    a(".clockpicker").clockpicker({ donetext: "Done" }),
      a("#single-input").clockpicker({
        placement: "bottom",
        align: "left",
        autoclose: !0,
        default: "now",
      }),
      a("#check-minutes").click(function (t) {
        t.stopPropagation(),
          a("#single-input")
            .clockpicker("show")
            .clockpicker("toggleView", "minutes");
      });
  }),
    (a.FormPickers = new t()),
    (a.FormPickers.Constructor = t);
})(window.jQuery),
  (function (t) {
    "use strict";
    window.jQuery.FormPickers.init();
  })();
