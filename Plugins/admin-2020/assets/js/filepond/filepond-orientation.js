/*!
 * FilePondPluginImageExifOrientation 1.0.9
 * Licensed under MIT, https://opensource.org/licenses/MIT/
 * Please visit https://pqina.nl/filepond/ for details.
 */

/* eslint-disable */

!(function (A, e) {
  "object" == typeof exports && "undefined" != typeof module
    ? (module.exports = e())
    : "function" == typeof define && define.amd
    ? define(e)
    : ((A = A || self).FilePondPluginImageExifOrientation = e());
})(this, function () {
  "use strict";
  var A = 65496,
    e = 65505,
    n = 1165519206,
    t = 18761,
    i = 274,
    r = 65280,
    o = function (A, e) {
      var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
      return A.getUint16(e, n);
    },
    a = function (A, e) {
      var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
      return A.getUint32(e, n);
    },
    u = "undefined" != typeof window && void 0 !== window.document,
    d = void 0,
    f = u ? new Image() : {};
  (f.onload = function () {
    return (d = f.naturalWidth > f.naturalHeight);
  }),
    (f.src =
      "data:image/jpg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/4QA6RXhpZgAATU0AKgAAAAgAAwESAAMAAAABAAYAAAEoAAMAAAABAAIAAAITAAMAAAABAAEAAAAAAAD/2wBDAP//////////////////////////////////////////////////////////////////////////////////////wAALCAABAAIBASIA/8QAJgABAAAAAAAAAAAAAAAAAAAAAxABAAAAAAAAAAAAAAAAAAAAAP/aAAgBAQAAPwBH/9k=");
  var l = function (u) {
    var f = u.addFilter,
      l = u.utils,
      c = l.Type,
      g = l.isFile;
    return (
      f("DID_LOAD_ITEM", function (u, f) {
        var l = f.query;
        return new Promise(function (f, c) {
          var s = u.file;
          if (
            !(
              g(s) &&
              (function (A) {
                return /^image\/jpeg/.test(A.type);
              })(s) &&
              l("GET_ALLOW_IMAGE_EXIF_ORIENTATION") &&
              d
            )
          )
            return f(u);
          (function (u) {
            return new Promise(function (d, f) {
              var l = new FileReader();
              (l.onload = function (u) {
                var f = new DataView(u.target.result);
                if (o(f, 0) === A) {
                  for (var l = f.byteLength, c = 2; c < l; ) {
                    var g = o(f, c);
                    if (((c += 2), g === e)) {
                      if (a(f, (c += 2)) !== n) break;
                      var s = o(f, (c += 6)) === t;
                      c += a(f, c + 4, s);
                      var v = o(f, c, s);
                      c += 2;
                      for (var w = 0; w < v; w++)
                        if (o(f, c + 12 * w, s) === i)
                          return void d(o(f, c + 12 * w + 8, s));
                    } else {
                      if ((g & r) !== r) break;
                      c += o(f, c);
                    }
                  }
                  d(-1);
                } else d(-1);
              }),
                l.readAsArrayBuffer(u.slice(0, 65536));
            });
          })(s).then(function (A) {
            u.setMetadata("exif", { orientation: A }), f(u);
          });
        });
      }),
      { options: { allowImageExifOrientation: [!0, c.BOOLEAN] } }
    );
  };
  return (
    "undefined" != typeof window &&
      void 0 !== window.document &&
      document.dispatchEvent(
        new CustomEvent("FilePond:pluginloaded", { detail: l })
      ),
    l
  );
});
