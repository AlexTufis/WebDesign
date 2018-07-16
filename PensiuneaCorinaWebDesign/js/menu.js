function(d) {
  var e = a(this);
  e.attr("data-target") || d.preventDefault();
  var f = b(e),
    g = f.data("bs.collapse"),
    h = g ? "toggle" : e.data();
  c.call(f, h)
}