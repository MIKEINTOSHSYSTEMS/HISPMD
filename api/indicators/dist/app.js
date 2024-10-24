function setColClass(e) {
  var t,
    a = e.find(".col-sm-4").length,
    i = e.find(".col-sm-4").last().index();
  if (3 !== a) {
    if (a > 3) for (; a > 3; ) a -= 3;
    for (t = 12 / a; a; )
      --a,
        e
          .find($("[class*='col-sm-']"))
          .eq(i - a)
          .removeClass("col-sm-4")
          .addClass("col-sm-" + t);
  }
}
function getInputLabelText(e) {
  var t = "",
    a = [];
  return (
    e.split(/(?=[A-Z])/).filter(function (e) {
      1 === e.length ? (t += e) : ((t += " "), (t += e));
    }),
    (t = t.trim()),
    (t = t[0].toUpperCase() + t.substr(1)),
    t.split(" ").filter(function (e, i) {
      1 === e.length && i !== t.split(" ").length - 1
        ? a.push(e + "-")
        : a.push(e);
    }),
    a.join(" ").replace(/-\s/, "-")
  );
}
function updateTextForIndicatorTypeSelect(e) {
  e.val() &&
    (e.val().length > 1
      ? e.find("option:selected").each(function () {
          $(this).text($(this).attr("data-abbr"));
        })
      : e.find("option:selected").each(function () {
          $(this).text($(this).attr("data-full-text"));
        }),
    e
      .selectpicker("refresh")
      .closest(".bootstrap-select")
      .find(".dropdown-menu.inner")
      .find("span.text")
      .each(function (t) {
        $(this).text(e.find("option").eq(t).attr("data-full-text"));
      }));
}
!(function () {
  function e() {
    $("#chart-container").height($(window).height() - f.outerHeight() - 10);
  }
  function t(t, a) {
    var i = o.find("option:selected").text().trim(),
      n = r.val();
    x = anychart.data.table();
    var l,
      //s = x.mapAs({ value: 1, volume: 1, open: 1, high: 2, low: 3, close: 4 });
      s = x.mapAs({ value: 1, volume: 1, open: 1, high: 2, low: 3, close: 4 });
    m = anychart.stock();
    var d = m.plot(0);
    if ((x.addData(u.data[i.toLowerCase()]), a)) {
      var c,
        p,
        f = [];
      (l = d[u.chartType](s)), l.name(i.toUpperCase()), d.yScale(u.scale);
      for (var h in u.indicators)
        (c = h),
          u.indicators.hasOwnProperty(h) &&
            ((f = u.indicators[h].settings), (f[0] = s)),
          ~c.toLowerCase().indexOf("stochastic") && (c = "stochastic"),
          u.indicators.hasOwnProperty(h) &&
            ((p = m.plot(u.indicators[h].plotIndex)),
            p[c].apply(p, f),
            p.yAxis(1).orientation("right"));
    } else (l = d[n](s)), l.name(i.toUpperCase());
    l.stroke("2px #64b5f6"),
      d.yAxis(1).orientation("right"),
      m.padding(10, 50, 20, 50),
      m.scroller().line(s),
      m.selectRange("2000-12-11", "2025-01-01"),
      m.container(t),
      m.draw(),
      anychart.ui.rangePicker().render(m),
      anychart.ui.rangeSelector().render(m),
      m.listen("chartDraw", function () {
        e(),
          setTimeout(function () {
            v.hide();
          }, 100);
      });
  }
  function a() {
    m && (m.dispose(), (m = null));
  }
  function i() {
    var e,
      t,
      a = g.defaultSettings[g.name],
      i = 0;
    $("#indicatorSettingsModalTitle").text(
      g.defaultSettings[g.name].overview.title
    ),
      h.empty(),
      h.append('<div class="row"></div>');
    var n = h.find(".row");
    for (var o in a)
      if (a.hasOwnProperty(o) && "overview" !== o && "plotIndex" !== o)
        if ("string" == typeof a[o]) {
          for (
            n.append(w),
              e = $("#indicatorFormGroup"),
              e.find("select").attr("id", o),
              e.find("label").attr("for", o).text(getInputLabelText(o)),
              i = 0;
            i < g.seriesType.length;
            i++
          )
            (t = $("<option></option>")),
              t.val(g.seriesType[i].toLowerCase()),
              t.text(getInputLabelText(g.seriesType[i])),
              e.find("select").append(t);
          e.removeAttr("id");
        } else if ("number" == typeof a[o])
          n.append(y),
            (e = $("#indicatorFormGroup")),
            e.find("input").attr("id", o),
            e
              .removeAttr("id")
              .find("label")
              .attr("for", o)
              .text(getInputLabelText(o));
        else if ("object" == typeof a[o]) {
          for (
            n.append(w),
              e = $("#indicatorFormGroup"),
              e.find("select").attr("id", o),
              e.find("label").attr("for", o).text(getInputLabelText(o)),
              i = 0;
            i < a[o].length;
            i++
          )
            (t = $("<option></option>")),
              t.val(a[o][i].toLowerCase()),
              t.text(a[o][i]),
              e.find("select").append(t);
          e.removeAttr("id");
        }
    setColClass(h),
      h
        .find($("[class*='col-sm-']"))
        .last()
        .after('<div class="col-xs-12" id="overviewText"></div>'),
      h
        .find("#overviewText")
        .append(g.defaultSettings[g.name].overview.description);
  }
  function n() {
    var e = g.defaultSettings[g.name];
    for (var t in e)
      e.hasOwnProperty(t) &&
        "overview" !== t &&
        "plotIndex" !== t &&
        $("#" + t).val(e[t]);
  }
  var o = $("#chartDataSelect"),
    r = $("#seriesTypeSelect"),
    l = $("#scaleTypeSelect"),
    s = $("#indicatorTypeSelect"),
    d = $("#indicatorSettingsModal"),
    c = $("#resetButton"),
    p = $("#addIndicatorButton"),
    f = $("#indicatorNavPanel"),
    h = $("#indicatorForm"),
    v = $("#loader"),
    u = {};
  (u.data = {}),
    (u.chartType = r.val()),
    (u.scale = l.val()),
    (u.indicators = {});
  var m,
    x,
    g = {
      name: "",
      plotIndex: 0,
      defaultSettings: {},
      seriesType: [
        "area",
        "column",
        "jump-line",
        "line",
        "marker",
        "spline",
        "spline-area",
        "step-area",
        "step-line",
        "stick",
      ],
    },
    y =
      '<div class="col-sm-4"><div class="form-group" id="indicatorFormGroup"><label for="" class="control-label"></label><input type="number" class="form-control" id=""></div></div>',
    w =
      '<div class="col-sm-4"><div class="form-group" id="indicatorFormGroup"><label for="" class="control-label"></label><select class="form-control select show-tick" id=""></select></div></div>',
    b = { createChart: t, removeChart: a };
  "file:" === window.location.protocol &&
    (v.hide(),
    $(".wrapper").hide(),
    $("#warning").modal({ backdrop: "static", keyboard: !1 })),
    //$.get("indicators.xml", function (e) {
    $.get("indicators.php", function (e) {
    //$.get("hispmd_indicators.xml", function (e) {
      $(e)
        .find("indicator")
        .each(function (e, t) {
          var a,
            i = $(this).attr("type"),
            n = $("<option></option>");
          n
            .attr({
              value: i,
              "data-abbr": $(this).find("abbreviation").text(),
              "data-full-text": $(this).find("title").text(),
            })
            .text($(this).find("title").text()),
            $(this).find('[name="plotIndex"]').length &&
              n.attr(
                "data-plot-index",
                $(this).find('[name="plotIndex"]').attr("value")
              ),
            s.append(n),
            (g.defaultSettings[i] = {}),
            $(t)
              .find("defaults")
              .children()
              .each(function () {
                var e = $(this).attr("name"),
                  t = $(this).attr("value");
                switch ($(this).attr("type")) {
                  case "number":
                    t = +t;
                    break;
                  case "array":
                    t = JSON.parse(t);
                }
                g.defaultSettings[i][e] = t;
              }),
            (a = $(t).find("description").text()),
            (g.defaultSettings[i].overview = {}),
            (g.defaultSettings[i].overview.title = $(t).find("title").text()),
            (g.defaultSettings[i].overview.description = a);
        });
      var t = s.find("option").sort(function (e, t) {
        return e.value.toUpperCase().localeCompare(t.value.toUpperCase());
      });
      s.append(t), s.selectpicker();
    }),
    $(window).on("resize", e),
    anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile(
        o.find("option:selected").data().json,
        function (e) {
          (u.data[o.find("option:selected").text().toLowerCase().trim()] = e),
            b.createChart("chart-container");
        }
      ),
        o.on("change", function () {
          var e = $(this).find("option:selected").text().toLowerCase().trim();
          ~Object.keys(u.data).indexOf(e)
            ? (x.addData(u.data[e]),
              m.plot().getSeries(0).name(e.toUpperCase()))
            : anychart.data.loadJsonFile(
                $(this).find("option:selected").data().json,
                function (t) {
                  (u.data[e] = t),
                    x.addData(t),
                    m.plot().getSeries(0).name(e.toUpperCase());
                }
              );
        }),
        r.on("change", function () {
          var e = $(this).val();
          m.plot().getSeries(0).seriesType(e), (u.chartType = e);
        }),
        s.on("change", function () {
          if (
            ($(this).val() &&
              1 === $(this).val().length &&
              updateTextForIndicatorTypeSelect(s),
            null === $(this).val() ||
              $(this).val().length < Object.keys(u.indicators).length)
          ) {
            if ((b.removeChart(), null !== $(this).val()))
              for (var e in u.indicators)
                ~$(this).val().indexOf(e) || delete u.indicators[e];
            else u.indicators = {};
            return void b.createChart("chart-container", !0);
          }
          for (var t = 0; t < $(this).val().length; t++)
            if (!~Object.keys(u.indicators).indexOf($(this).val()[t])) {
              g.name = $(this).val()[t];
              break;
            }
          (g.plotIndex = $(this)
            .find('option[value="' + g.name + '"]')
            .data().plotIndex),
            0 !== g.plotIndex && (g.plotIndex = m.getPlotsCount()),
            i(),
            n(),
            d.modal("show"),
            f.find(".select.open").removeClass("open");
        }),
        l.on("change", function () {
          b.removeChart(),
            (u.scale = $(this).val()),
            b.createChart("chart-container", !0);
        }),
        d.on("hidden.bs.modal", function () {
          for (var e, t = 0; t < s.val().length; t++)
            if (!~Object.keys(u.indicators).indexOf(s.val()[t])) {
              e = s.val()[t];
              break;
            }
          if (!e) return updateTextForIndicatorTypeSelect(s), !1;
          var a = s.find('[value="' + e + '"]').index();
          s.find('[value="' + e + '"]').removeAttr("selected"),
            s
              .prev(".dropdown-menu")
              .find('li[data-original-index="' + a + '"]')
              .removeClass("selected"),
            updateTextForIndicatorTypeSelect(s);
        }),
        d.on("show.bs.modal", function () {
          h.find(".select").selectpicker();
        }),
        c.on("click", function (e) {
          e.preventDefault(),
            b.removeChart(),
            (u.indicators = {}),
            (u.scale = "linear"),
            (u.chartType = "line"),
            o.val(1).selectpicker("refresh"),
            //r.val("candlestick").selectpicker("refresh"),
            r.val("area").selectpicker("refresh"),
            s.val("").selectpicker("refresh"),
            l.val("linear").selectpicker("refresh"),
            b.createChart("chart-container");
        }),
        p.on("click", function () {
          var e = x.mapAs({
              value: 1,
              volume: 1,
              open: 1,
              high: 2,
              low: 3,
              close: 4,
            }),
            t = g.defaultSettings[g.name],
            a = [e],
            i = g.name;
          ~i.toLowerCase().indexOf("stochastic") && (i = "stochastic");
          for (key in t)
            if ("overview" !== key && "plotIndex" !== key) {
              var n = $("#" + key).val();
              (n = "true" == n || "false" == n ? "true" == n : n), a.push(n);
            }
          (u.indicators[g.name] = {}),
            (u.indicators[g.name].settings = a),
            (u.indicators[g.name].plotIndex = g.plotIndex);
          var o = m.plot(g.plotIndex);
          o[i].apply(o, a), o.yAxis(1).orientation("right"), d.modal("hide");
        });
    });
})();
