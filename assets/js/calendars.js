! function(e) {
    function t(a) {
      if (n[a]) return n[a].exports;
      var r = n[a] = {
        i: a,
        l: !1,
        exports: {}
      };
      return e[a].call(r.exports, r, r.exports, t), r.l = !0, r.exports
    }
    var n = {};
    t.m = e, t.c = n, t.d = function(e, n, a) {
      t.o(e, n) || Object.defineProperty(e, n, {
        configurable: !1,
        enumerable: !0,
        get: a
      })
    }, t.n = function(e) {
      var n = e && e.__esModule ? function() {
        return e.default
      } : function() {
        return e
      };
      return t.d(n, "a", n), n
    }, t.o = function(e, t) {
      return Object.prototype.hasOwnProperty.call(e, t)
    }, t.p = "", t(t.s = 12)
  }({
    12: function(e, t, n) {
      e.exports = n(13)
    },
    13: function(e, t, n) {
      function a() {
        this.id = Math.floor(1500 * Math.random()), this.title = "", this.start = s(new Date((new Date).getFullYear(), (new Date).getMonth(), (new Date).getDay() - 10), new Date), this.color = "", this.textColor = "#ffffff"
      }
  
      function r() {
        a.call(this)
      }
  
      function i() {
        a.call(this)
      }
  
      function o() {
        a.call(this)
      }
  
      function s(e, t) {
        return new Date(e.getTime() + Math.random() * (t.getTime() - e.getTime()))
      }
      for (var l = n(14), m = ["All Day Event", "Long Event", "Birthday Party", "Lunch Break"], d = ["Client Conference", "Sprint Talk"], u = ["Company Teambuilding", "Team Talk"], y = [], c = m.length; c > 0; c--) normal = new r, normal.title = m[Math.floor(Math.random() * m.length)], normal.color = colors.color_primary, y.push(normal);
      for (var f = u.length; f > 0; f--) meeting = new i, meeting.title = u[Math.floor(Math.random() * u.length)], meeting.color = colors.color_warning, y.push(meeting);
      for (var g = d.length; g > 0; g--) repeating = new o, repeating.id = 399, repeating.title = d[Math.floor(Math.random() * d.length)], repeating.color = colors.color_danger, y.push(repeating);
      var h = !0,
        M = !1,
        v = void 0;
      try {
        for (var T, p = y[Symbol.iterator](); !(h = (T = p.next()).done); h = !0) {
          var D = T.value;
          $("#events-list").append('\n    <a href="#" class="list-group-item list-group-item-action">\n    <div class="media">\n    <div class="media-body">\n    <div class="float-right text-muted">' + l(D.start, "mmmm dS") + '</div>\n    <div class="mb-1">\n    <strong>' + D.title + "</strong>\n    </div>\n    </div>\n    </div>\n    </a>\n    ")
        }
      } catch (e) {
        M = !0, v = e
      } finally {
        try {
          !h && p.return && p.return()
        } finally {
          if (M) throw v
        }
      }
      $("#calendar").fullCalendar({
        events: y,
        navLinks: !0,
        editable: !0,
        eventLimit: !0,
        dragOpacity: .7,
        eventOverlap: !0,
        eventClick: function(e, t) {
          $("#editEventModal").modal("show")
        }
      })
    },
    14: function(e, t, n) {
      var a;
      ! function(r) {
        "use strict";
  
        function i(e, t) {
          for (e = String(e), t = t || 2; e.length < t;) e = "0" + e;
          return e
        }
  
        function o(e) {
          var t = new Date(e.getFullYear(), e.getMonth(), e.getDate());
          t.setDate(t.getDate() - (t.getDay() + 6) % 7 + 3);
          var n = new Date(t.getFullYear(), 0, 4);
          n.setDate(n.getDate() - (n.getDay() + 6) % 7 + 3);
          var a = t.getTimezoneOffset() - n.getTimezoneOffset();
          t.setHours(t.getHours() - a);
          var r = (t - n) / 6048e5;
          return 1 + Math.floor(r)
        }
  
        function s(e) {
          var t = e.getDay();
          return 0 === t && (t = 7), t
        }
  
        function l(e) {
          return null === e ? "null" : void 0 === e ? "undefined" : "object" != typeof e ? typeof e : Array.isArray(e) ? "array" : {}.toString.call(e).slice(8, -1).toLowerCase()
        }
        var m = function() {
          var e = /d{1,4}|m{1,4}|yy(?:yy)?|([HhMsTt])\1?|[LloSZWN]|'[^']*'|'[^']*'/g,
            t = /\b(?:[PMCEA][SDP]T|(?:Pacific|Mountain|Central|Eastern|Atlantic) (?:Standard|Daylight|Prevailing) Time|(?:GMT|UTC)(?:[-+]\d{4})?)\b/g,
            n = /[^-+\dA-Z]/g;
          return function(a, r, d, u) {
            if (1 !== arguments.length || "string" !== l(a) || /\d/.test(a) || (r = a, a = void 0), a = a || new Date, a instanceof Date || (a = new Date(a)), isNaN(a)) throw TypeError("Invalid date");
            r = String(m.masks[r] || r || m.masks.default);
            var y = r.slice(0, 4);
            "UTC:" !== y && "GMT:" !== y || (r = r.slice(4), d = !0, "GMT:" === y && (u = !0));
            var c = d ? "getUTC" : "get",
              f = a[c + "Date"](),
              g = a[c + "Day"](),
              h = a[c + "Month"](),
              M = a[c + "FullYear"](),
              v = a[c + "Hours"](),
              T = a[c + "Minutes"](),
              p = a[c + "Seconds"](),
              D = a[c + "Milliseconds"](),
              N = d ? 0 : a.getTimezoneOffset(),
              b = o(a),
              w = s(a),
              S = {
                d: f,
                dd: i(f),
                ddd: m.i18n.dayNames[g],
                dddd: m.i18n.dayNames[g + 7],
                m: h + 1,
                mm: i(h + 1),
                mmm: m.i18n.monthNames[h],
                mmmm: m.i18n.monthNames[h + 12],
                yy: String(M).slice(2),
                yyyy: M,
                h: v % 12 || 12,
                hh: i(v % 12 || 12),
                H: v,
                HH: i(v),
                M: T,
                MM: i(T),
                s: p,
                ss: i(p),
                l: i(D, 3),
                L: i(Math.round(D / 10)),
                t: v < 12 ? m.i18n.timeNames[0] : m.i18n.timeNames[1],
                tt: v < 12 ? m.i18n.timeNames[2] : m.i18n.timeNames[3],
                T: v < 12 ? m.i18n.timeNames[4] : m.i18n.timeNames[5],
                TT: v < 12 ? m.i18n.timeNames[6] : m.i18n.timeNames[7],
                Z: u ? "GMT" : d ? "UTC" : (String(a).match(t) || [""]).pop().replace(n, ""),
                o: (N > 0 ? "-" : "+") + i(100 * Math.floor(Math.abs(N) / 60) + Math.abs(N) % 60, 4),
                S: ["th", "st", "nd", "rd"][f % 10 > 3 ? 0 : (f % 100 - f % 10 != 10) * f % 10],
                W: b,
                N: w
              };
            return r.replace(e, function(e) {
              return e in S ? S[e] : e.slice(1, e.length - 1)
            })
          }
        }();
        m.masks = {
          default: "ddd mmm dd yyyy HH:MM:ss",
          shortDate: "m/d/yy",
          mediumDate: "mmm d, yyyy",
          longDate: "mmmm d, yyyy",
          fullDate: "dddd, mmmm d, yyyy",
          shortTime: "h:MM TT",
          mediumTime: "h:MM:ss TT",
          longTime: "h:MM:ss TT Z",
          isoDate: "yyyy-mm-dd",
          isoTime: "HH:MM:ss",
          isoDateTime: "yyyy-mm-dd'T'HH:MM:sso",
          isoUtcDateTime: "UTC:yyyy-mm-dd'T'HH:MM:ss'Z'",
          expiresHeaderFormat: "ddd, dd mmm yyyy HH:MM:ss Z"
        }, m.i18n = {
          dayNames: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          monthNames: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
          timeNames: ["a", "p", "am", "pm", "A", "P", "AM", "PM"]
        }, void 0 !== (a = function() {
          return m
        }.call(t, n, t, e)) && (e.exports = a)
      }()
    }
  });