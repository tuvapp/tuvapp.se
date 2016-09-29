(function(root, factory) {
    if (typeof define === "function" && define.amd) {
        define(factory);
    } else if (typeof module === "object" && module.exports) {
        module.exports = factory();
    } else {
        root.bodymovin = factory();
    }
}(window, function() {
    function roundValues(t) {
        bm_rnd = t ? Math.round : function(t) {
            return t
        }
    }

    function roundTo2Decimals(t) {
        return Math.round(1e4 * t) / 1e4
    }

    function roundTo3Decimals(t) {
        return Math.round(100 * t) / 100
    }

    function styleDiv(t) {
        t.style.position = "absolute", t.style.top = 0, t.style.left = 0, t.style.display = "block", t.style.transformOrigin = t.style.webkitTransformOrigin = "0 0", t.style.backfaceVisibility = t.style.webkitBackfaceVisibility = "visible", t.style.transformStyle = t.style.webkitTransformStyle = t.style.mozTransformStyle = "preserve-3d"
    }

    function styleUnselectableDiv(t) {
        t.style.userSelect = "none", t.style.MozUserSelect = "none", t.style.webkitUserSelect = "none", t.style.oUserSelect = "none"
    }

    function BMEnterFrameEvent(t, e, s, i) {
        this.type = t, this.currentTime = e, this.totalTime = s, this.direction = 0 > i ? -1 : 1
    }

    function BMCompleteEvent(t, e) {
        this.type = t, this.direction = 0 > e ? -1 : 1
    }

    function BMCompleteLoopEvent(t, e, s, i) {
        this.type = t, this.currentLoop = e, this.totalLoops = s, this.direction = 0 > i ? -1 : 1
    }

    function BMSegmentStartEvent(t, e, s) {
        this.type = t, this.firstFrame = e, this.totalFrames = s
    }

    function BMDestroyEvent(t, e) {
        this.type = t, this.target = e
    }

    function _addEventListener(t, e) {
        this._cbs[t] || (this._cbs[t] = []), this._cbs[t].push(e)
    }

    function _removeEventListener(t, e) {
        if (e) {
            if (this._cbs[t]) {
                for (var s = 0, i = this._cbs[t].length; i > s;) this._cbs[t][s] === e && (this._cbs[t].splice(s, 1), s -= 1, i -= 1), s += 1;
                this._cbs[t].length || (this._cbs[t] = null)
            }
        } else this._cbs[t] = null
    }

    function _triggerEvent(t, e) {
        if (this._cbs[t])
            for (var s = this._cbs[t].length, i = 0; s > i; i++) this._cbs[t][i](e)
    }

    function randomString(t, e) {
        void 0 === e && (e = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890");
        var s, i = "";
        for (s = t; s > 0; --s) i += e[Math.round(Math.random() * (e.length - 1))];
        return i
    }

    function HSVtoRGB(t, e, s) {
        var i, a, r, n, o, h, l, p;
        switch (1 === arguments.length && (e = t.s, s = t.v, t = t.h), n = Math.floor(6 * t), o = 6 * t - n, h = s * (1 - e), l = s * (1 - o * e), p = s * (1 - (1 - o) * e), n % 6) {
            case 0:
                i = s, a = p, r = h;
                break;
            case 1:
                i = l, a = s, r = h;
                break;
            case 2:
                i = h, a = s, r = p;
                break;
            case 3:
                i = h, a = l, r = s;
                break;
            case 4:
                i = p, a = h, r = s;
                break;
            case 5:
                i = s, a = h, r = l
        }
        return [Math.round(0 * i), Math.round(255 * a), Math.round(255 * r)]
    }

    function RGBtoHSV(t, e, s) {
        1 === arguments.length && (e = t.g, s = t.b, t = t.r);
        var i, a = Math.max(t, e, s),
            r = Math.min(t, e, s),
            n = a - r,
            o = 0 === a ? 0 : n / a,
            h = a / 255;
        switch (a) {
            case r:
                i = 0;
                break;
            case t:
                i = e - s + n * (s > e ? 6 : 0), i /= 6 * n;
                break;
            case e:
                i = s - t + 2 * n, i /= 6 * n;
                break;
            case s:
                i = t - e + 4 * n, i /= 6 * n
        }
        return [i, o, h]
    }

    function addSaturationToRGB(t, e) {
        var s = RGBtoHSV(t[0], t[1], t[2]);
        return s[1] += e, s[1] > 1 ? s[1] = 1 : s[1] <= 0 && (s[1] = 0), HSVtoRGB(s[0], s[1], s[2])
    }

    function addBrightnessToRGB(t, e) {
        var s = RGBtoHSV(t[0], t[1], t[2]);
        return s[2] += e, s[2] > 1 ? s[2] = 1 : s[2] < 0 && (s[2] = 0), HSVtoRGB(s[0], s[1], s[2])
    }

    function addHueToRGB(t, e) {
        var s = RGBtoHSV(t[0], t[1], t[2]);
        return s[0] += e / 360, s[0] > 1 ? s[0] -= 1 : s[0] < 0 && (s[0] += 1), HSVtoRGB(s[0], s[1], s[2])
    }

    function componentToHex(t) {
        var e = t.toString(16);
        return 1 == e.length ? "0" + e : e
    }

    function fillToRgba(t, e) {
        if (!cachedColors[t]) {
            var s = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(t);
            cachedColors[t] = parseInt(s[1], 16) + "," + parseInt(s[2], 16) + "," + parseInt(s[3], 16)
        }
        return "rgba(" + cachedColors[t] + "," + e + ")"
    }

    function RenderedFrame(t, e) {
        this.tr = t, this.o = e
    }

    function LetterProps(t, e, s, i, a, r) {
        this.o = t, this.sw = e, this.sc = s, this.fc = i, this.m = a, this.props = r
    }

    function iterateDynamicProperties(t) {
        var e, s = this.dynamicProperties;
        for (e = 0; s > e; e += 1) this.dynamicProperties[e].getValue(t)
    }

    function reversePath(t, e) {
        var s, i, a = [],
            r = [],
            n = [],
            o = {},
            h = 0;
        e && (a[0] = t.o[0], r[0] = t.i[0], n[0] = t.v[0], h = 1), i = t.i.length;
        var l = i - 1;
        for (s = h; i > s; s += 1) a.push(t.o[l]), r.push(t.i[l]), n.push(t.v[l]), l -= 1;
        return o.i = a, o.o = r, o.v = n, o
    }

    function Matrix() {}

    function matrixManagerFunction() {
        var t = new Matrix,
            e = function(e, s, i, a, r) {
                return t.reset().translate(a, r).rotate(e).scale(s, i).toCSS()
            },
            s = function(t) {
                return e(t.tr.r[2], t.tr.s[0], t.tr.s[1], t.tr.p[0], t.tr.p[1])
            };
        return {
            getMatrix: s
        }
    }

    function createElement(t, e, s) {
        if (!e) {
            var i = Object.create(t.prototype, s),
                a = {};
            return i && "[object Function]" === a.toString.call(i.init) && i.init(), i
        }
        e.prototype = Object.create(t.prototype), e.prototype.constructor = e, e.prototype.parent = t.prototype
    }

    function extendPrototype(t, e) {
        for (var s in t.prototype) t.prototype.hasOwnProperty(s) && (e.prototype[s] = t.prototype[s])
    }

    function bezFunction() {
        function t(t, e, s, i, a, r) {
            var n = t * i + e * a + s * r - a * i - r * t - s * e;
            return n > -1e-4 && 1e-4 > n
        }

        function e(e, s, i, a, r, n, o, h, l) {
            return t(e, s, a, r, o, h) && t(e, i, a, n, o, l)
        }

        function s(t) {
            this.segmentLength = 0, this.points = new Array(t)
        }

        function i(t, e) {
            this.partialLength = t, this.point = e
        }

        function a(t, e) {
            var s = e.segments,
                i = s.length,
                a = bm_floor((i - 1) * t),
                r = t * e.addedLength,
                n = 0;
            if (r == s[a].l) return s[a].p;
            for (var o = s[a].l > r ? -1 : 1, h = !0; h;) s[a].l <= r && s[a + 1].l > r ? (n = (r - s[a].l) / (s[a + 1].l - s[a].l), h = !1) : a += o, (0 > a || a >= i - 1) && (h = !1);
            return s[a].p + (s[a + 1].p - s[a].p) * n
        }

        function r() {
            this.pt1 = new Array(2), this.pt2 = new Array(2), this.pt3 = new Array(2), this.pt4 = new Array(2)
        }

        function n(t, e, s, i, n, o, h) {
            var l = new r;
            n = 0 > n ? 0 : n;
            var p = a(n, h);
            o = o > 1 ? 1 : o;
            var m, f = a(o, h),
                d = t.length,
                c = 1 - p,
                u = 1 - f;
            for (m = 0; d > m; m += 1) l.pt1[m] = c * c * c * t[m] + (p * c * c + c * p * c + c * c * p) * s[m] + (p * p * c + c * p * p + p * c * p) * i[m] + p * p * p * e[m], l.pt3[m] = c * c * u * t[m] + (p * c * u + c * p * u + c * c * f) * s[m] + (p * p * u + c * p * f + p * c * f) * i[m] + p * p * f * e[m], l.pt4[m] = c * u * u * t[m] + (p * u * u + c * f * u + c * u * f) * s[m] + (p * f * u + c * f * f + p * u * f) * i[m] + p * f * f * e[m], l.pt2[m] = u * u * u * t[m] + (f * u * u + u * f * u + u * u * f) * s[m] + (f * f * u + u * f * f + f * u * f) * i[m] + f * f * f * e[m];
            return l
        }
        var o = (Math, function() {
                function t(t, e) {
                    this.l = t, this.p = e
                }
                var e = {};
                return function(s, i, a, r) {
                    var n = (s.join("_") + "_" + i.join("_") + "_" + a.join("_") + "_" + r.join("_")).replace(/\./g, "p");
                    if (e[n]) return e[n];
                    var o, h, l, p, m, f, d = defaultCurveSegments,
                        c = 0,
                        u = [],
                        y = [],
                        v = {
                            addedLength: 0,
                            segments: []
                        };
                    for (l = a.length, o = 0; d > o; o += 1) {
                        for (m = o / (d - 1), f = 0, h = 0; l > h; h += 1) p = bm_pow(1 - m, 3) * s[h] + 3 * bm_pow(1 - m, 2) * m * a[h] + 3 * (1 - m) * bm_pow(m, 2) * r[h] + bm_pow(m, 3) * i[h], u[h] = p, null !== y[h] && (f += bm_pow(u[h] - y[h], 2)), y[h] = u[h];
                        f && (f = bm_sqrt(f), c += f), v.segments.push(new t(c, m))
                    }
                    return v.addedLength = c, e[n] = v, v
                }
            }()),
            h = function() {
                var e = {};
                return function(a) {
                    var r = a.s,
                        n = a.e,
                        o = a.to,
                        h = a.ti,
                        l = (r.join("_") + "_" + n.join("_") + "_" + o.join("_") + "_" + h.join("_")).replace(/\./g, "p");
                    if (e[l]) return void(a.bezierData = e[l]);
                    var p, m, f, d, c, u, y, v = defaultCurveSegments,
                        g = 0,
                        b = null;
                    2 === r.length && (r[0] != n[0] || r[1] != n[1]) && t(r[0], r[1], n[0], n[1], r[0] + o[0], r[1] + o[1]) && t(r[0], r[1], n[0], n[1], n[0] + h[0], n[1] + h[1]) && (v = 2);
                    var E = new s(v);
                    for (f = o.length, p = 0; v > p; p += 1) {
                        for (y = new Array(f), c = p / (v - 1), u = 0, m = 0; f > m; m += 1) d = bm_pow(1 - c, 3) * r[m] + 3 * bm_pow(1 - c, 2) * c * (r[m] + o[m]) + 3 * (1 - c) * bm_pow(c, 2) * (n[m] + h[m]) + bm_pow(c, 3) * n[m], y[m] = d, null !== b && (u += bm_pow(y[m] - b[m], 2));
                        u = bm_sqrt(u), g += u, E.points[p] = new i(u, y), b = y
                    }
                    E.segmentLength = g, a.bezierData = E, e[l] = E
                }
            }();
        return {
            getBezierLength: o,
            getNewSegment: n,
            buildBezierData: h,
            pointOnLine2D: t,
            pointOnLine3D: e
        }
    }

    function dataFunctionManager() {
        function t(a, n, o) {
            var h, l, p, m, f, d, c, u, y = a.length;
            for (m = 0; y > m; m += 1)
                if (h = a[m], "ks" in h && !h.completed) {
                    if (h.completed = !0, h.tt && (a[m - 1].td = h.tt), l = [], p = -1, h.hasMask) {
                        var v = h.masksProperties;
                        for (d = v.length, f = 0; d > f; f += 1)
                            if (v[f].pt.k.i) i(v[f].pt.k);
                            else
                                for (u = v[f].pt.k.length, c = 0; u > c; c += 1) v[f].pt.k[c].s && i(v[f].pt.k[c].s[0]), v[f].pt.k[c].e && i(v[f].pt.k[c].e[0])
                    }
                    0 === h.ty ? (h.layers = e(h.refId, n), t(h.layers, n, o)) : 4 === h.ty ? s(h.shapes, !1) : 5 == h.ty && r(h, o)
                }
        }

        function e(t, e) {
            for (var s = 0, i = e.length; i > s;) {
                if (e[s].id === t) return JSON.parse(JSON.stringify(e[s].layers));
                s += 1
            }
        }

        function s(t, e) {
            var a, r, n, o = t.length,
                h = e ? e : !1;
            for (a = o - 1; a >= 0; a -= 1)
                if ("tm" == t[a].ty && (h = !0), "sh" == t[a].ty)
                    if (t[a].trimmed = h, t[a].ks.k.i) i(t[a].ks.k);
                    else
                        for (n = t[a].ks.k.length, r = 0; n > r; r += 1) t[a].ks.k[r].s && i(t[a].ks.k[r].s[0]), t[a].ks.k[r].e && i(t[a].ks.k[r].e[0]);
            else "gr" == t[a].ty ? s(t[a].it, h) : ("el" == t[a].ty || "rc" == t[a].ty) && (t[a].trimmed = h)
        }

        function i(t) {
            var e, s = t.i.length;
            for (e = 0; s > e; e += 1) t.i[e][0] += t.v[e][0], t.i[e][1] += t.v[e][1], t.o[e][0] += t.v[e][0], t.o[e][1] += t.v[e][1]
        }

        function a(e, s) {
            t(e.layers, e.assets, s)
        }

        function r(t, e) {
            var s, i, a, r, n, o, h, l = [],
                p = t.t.d,
                m = 0,
                f = t.t.m.g,
                d = 0,
                c = 0,
                u = 0,
                y = [],
                v = 0,
                g = 0,
                b = e.getFontByName(p.f),
                E = 0,
                P = b.fStyle.split(" "),
                k = "normal",
                S = "normal";
            for (i = P.length, s = 0; i > s; s += 1) "italic" === P[s].toLowerCase() ? S = "italic" : "bold" === P[s].toLowerCase() ? k = "700" : "black" === P[s].toLowerCase() ? k = "900" : "medium" === P[s].toLowerCase() ? k = "500" : "regular" === P[s].toLowerCase() || "normal" === P[s].toLowerCase() ? k = "400" : ("light" === P[s].toLowerCase() || "thin" === P[s].toLowerCase()) && (k = "200");
            if (p.fWeight = k, p.fStyle = S, i = p.t.length, p.sz) {
                var C = p.sz[0],
                    x = -1;
                for (s = 0; i > s; s += 1) a = !1, " " === p.t.charAt(s) ? x = s : 13 === p.t.charCodeAt(s) && (v = 0, a = !0), e.chars ? (h = e.getCharData(p.t.charAt(s), b.fStyle, b.fFamily), E = a ? 0 : h.w * p.s / 100) : E = e.measureText(p.t.charAt(s), p.f, p.s), v + E > C ? (-1 === x ? (p.t = p.t.substr(0, s) + "\r" + p.t.substr(s), i += 1) : (s = x, p.t = p.t.substr(0, s) + "\r" + p.t.substr(s + 1)), x = -1, v = 0) : v += E;
                i = p.t.length
            }
            for (v = 0, E = 0, s = 0; i > s; s += 1)
                if (a = !1, " " === p.t.charAt(s) ? r = "Â " : 13 === p.t.charCodeAt(s) ? (y.push(v), g = v > g ? v : g, v = 0, r = "", a = !0, u += 1) : r = p.t.charAt(s), e.chars ? (h = e.getCharData(p.t.charAt(s), b.fStyle, e.getFontByName(p.f).fFamily), E = a ? 0 : h.w * p.s / 100) : E = e.measureText(r, p.f, p.s), v += E, l.push({
                        l: E,
                        an: E,
                        add: d,
                        n: a,
                        anIndexes: [],
                        val: r,
                        line: u
                    }), 2 == f) {
                    if (d += E, "" == r || "Â " == r || s == i - 1) {
                        for (("" == r || "Â " == r) && (d -= E); s >= c;) l[c].an = d, l[c].ind = m, l[c].extra = E, c += 1;
                        m += 1, d = 0
                    }
                } else if (3 == f) {
                if (d += E, "" == r || s == i - 1) {
                    for ("" == r && (d -= E); s >= c;) l[c].an = d, l[c].ind = m, l[c].extra = E, c += 1;
                    d = 0, m += 1
                }
            } else l[m].ind = m, l[m].extra = 0, m += 1;
            if (p.l = l, g = v > g ? v : g, y.push(v), p.sz) p.boxWidth = p.sz[0], t.t.d.justifyOffset = 0;
            else switch (p.boxWidth = g, p.j) {
                case 1:
                    t.t.d.justifyOffset = -p.boxWidth;
                    break;
                case 2:
                    t.t.d.justifyOffset = -p.boxWidth / 2;
                    break;
                default:
                    t.t.d.justifyOffset = 0
            }
            p.lineWidths = y;
            var w = t.t.a;
            o = w.length;
            var D, T, M = [];
            for (n = 0; o > n; n += 1) {
                for (w[n].a.sc && (p.strokeColorAnim = !0), w[n].a.sw && (p.strokeWidthAnim = !0), (w[n].a.fc || w[n].a.fh || w[n].a.fs || w[n].a.fb) && (p.fillColorAnim = !0), T = 0, D = w[n].s.b, s = 0; i > s; s += 1) l[s].anIndexes[n] = T, (1 == D && "" != l[s].val || 2 == D && "" != l[s].val && "Â " != l[s].val || 3 == D && (l[s].n || "Â " == l[s].val || s == i - 1) || 4 == D && (l[s].n || s == i - 1)) && (1 === w[n].s.rn && M.push(T), T += 1);
                t.t.a[n].s.totalChars = T;
                var I, F = -1;
                if (1 === w[n].s.rn)
                    for (s = 0; i > s; s += 1) F != l[s].anIndexes[n] && (F = l[s].anIndexes[n], I = M.splice(Math.floor(Math.random() * M.length), 1)[0]), l[s].anIndexes[n] = I
            }
            0 !== o || "m" in t.t.p || (t.singleShape = !0), p.yOffset = 1.2 * p.s, p.ascent = b.ascent * p.s / 100
        }
        var n = {};
        return n.completeData = a, n
    }

    function ExpressionComp() {}

    function ShapeInterface() {}

    function LayerInterface() {}

    function SVGRenderer(t) {
        this.animationItem = t, this.layers = null, this.renderedFrame = -1, this.globalData = {
            frameNum: -1
        }, this.elements = [], this.destroyed = !1
    }

    function CanvasRenderer(t, e) {
        this.animationItem = t, this.renderConfig = {
            clearCanvas: e && e.clearCanvas || !0,
            context: e && e.context || null,
            scaleMode: e && e.scaleMode || "fit"
        }, this.renderConfig.dpr = e && e.dpr || 1, this.animationItem.wrapper && (this.renderConfig.dpr = e && e.dpr || window.devicePixelRatio || 1), this.renderedFrame = -1, this.globalData = {
            frameNum: -1
        }, this.contextData = {
            saved: new Array(15),
            savedOp: new Array(15),
            cArrPos: 0,
            cTr: new Matrix,
            cO: 1
        };
        var s, i = 15;
        for (s = 0; i > s; s += 1) this.contextData.saved[s] = new Array(16);
        this.elements = [], this.transformMat = new Matrix
    }

    function HybridRenderer(t) {
        this.animationItem = t, this.layers = null, this.renderedFrame = -1, this.globalData = {
            frameNum: -1
        }, this.elements = [], this.threeDElements = [], this.destroyed = !1, this.camera = null
    }

    function MaskElement(t, e, s) {
        this.dynamicProperties = [], this.data = t, this.element = e, this.globalData = s, this.paths = [], this.storedData = [], this.masksProperties = this.data.masksProperties, this.viewData = new Array(this.masksProperties.length), this.maskElement = null, this.firstFrame = !0;
        var i, a, r, n, o, h, l, p, m = (this.element.maskedElement, this.globalData.defs),
            f = this.masksProperties.length,
            d = this.masksProperties,
            c = 0,
            u = [],
            y = randomString(10),
            v = "clipPath",
            g = "clip-path";
        for (i = 0; f > i; i++)
            if (("a" !== d[i].mode && "n" !== d[i].mode || d[i].inv) && (v = "mask", g = "mask"), "s" != d[i].mode && "i" != d[i].mode || 0 != c || (o = document.createElementNS(svgNS, "rect"), o.setAttribute("fill", "#ffffff"), o.setAttribute("x", "0"), o.setAttribute("y", "0"), o.setAttribute("width", "100%"), o.setAttribute("height", "100%"), u.push(o)), "n" != d[i].mode && d[i].cl !== !1) {
                if (c += 1, a = document.createElementNS(svgNS, "path"), d[i].cl ? "s" == d[i].mode ? a.setAttribute("fill", "#000000") : a.setAttribute("fill", "#ffffff") : (a.setAttribute("fill", "none"), "s" == d[i].mode ? a.setAttribute("fill", "#000000") : a.setAttribute("fill", "#ffffff"), a.setAttribute("stroke-width", "1"), a.setAttribute("stroke-miterlimit", "10")), a.setAttribute("clip-rule", "nonzero"), 0 !== d[i].x.k) {
                    v = "mask", g = "mask", p = PropertyFactory.getProp(this.element, d[i].x, 0, null, this.dynamicProperties);
                    var b = "fi_" + randomString(10);
                    h = document.createElementNS(svgNS, "filter"), h.setAttribute("id", b), l = document.createElementNS(svgNS, "feMorphology"), l.setAttribute("operator", "dilate"), l.setAttribute("in", "SourceGraphic"), l.setAttribute("radius", "0"), h.appendChild(l), m.appendChild(h), "s" == d[i].mode ? a.setAttribute("stroke", "#000000") : a.setAttribute("stroke", "#ffffff")
                } else l = null, p = null;
                if (this.storedData[i] = {
                        elem: a,
                        x: p,
                        expan: l,
                        lastPath: "",
                        lastOperator: "",
                        filterId: b,
                        lastRadius: 0
                    }, "i" == d[i].mode) {
                    n = u.length;
                    var E = document.createElementNS(svgNS, "g");
                    for (r = 0; n > r; r += 1) E.appendChild(u[r]);
                    var P = document.createElementNS(svgNS, "mask");
                    P.setAttribute("mask-type", "alpha"), P.setAttribute("id", y + "_" + c), P.appendChild(a), m.appendChild(P), E.setAttribute("mask", "url(#" + y + "_" + c + ")"), u.length = 0, u.push(E)
                } else u.push(a);
                d[i].inv && !this.solidPath && (this.solidPath = this.createLayerSolidPath()), this.viewData[i] = {
                    elem: a,
                    lastPath: "",
                    prop: PropertyFactory.getShapeProp(this.element, d[i], 3, this.dynamicProperties, null)
                }, this.viewData[i].prop.k || this.drawPath(d[i], this.viewData[i].prop.v, this.viewData[i])
            } else this.viewData[i] = {
                prop: PropertyFactory.getShapeProp(this.element, d[i], 3, this.dynamicProperties, null)
            };
        for (this.maskElement = document.createElementNS(svgNS, v), f = u.length, i = 0; f > i; i += 1) this.maskElement.appendChild(u[i]);
        this.maskElement.setAttribute("id", y), c > 0 && this.element.maskedElement.setAttribute(g, "url(#" + y + ")"), m.appendChild(this.maskElement)
    }

    function SliderEffect(t, e, s) {
        this.p = PropertyFactory.getProp(e, t.v, 0, 0, s)
    }

    function AngleEffect(t, e, s) {
        this.p = PropertyFactory.getProp(e, t.v, 0, 0, s)
    }

    function ColorEffect(t, e, s) {
        this.p = PropertyFactory.getProp(e, t.v, 1, 1 / 255, s)
    }

    function PointEffect(t, e, s) {
        this.p = PropertyFactory.getProp(e, t.v, 1, 0, s)
    }

    function CheckboxEffect(t, e, s) {
        this.p = PropertyFactory.getProp(e, t.v, 1, 0, s)
    }

    function EffectsManager(t, e, s) {
        this.data = t, this.element = e;
        var i = t.ef;
        this.effectElements = [];
        var a, r, n = i.length;
        for (a = 0; n > a; a++) switch (i[a].ty) {
            case 0:
                r = new SliderEffect(i[a], e, s), this.effectElements.push(r.proxyFunction.bind(r));
                break;
            case 1:
                r = new AngleEffect(i[a], e, s), this.effectElements.push(r.proxyFunction.bind(r));
                break;
            case 2:
                r = new ColorEffect(i[a], e, s), this.effectElements.push(r.proxyFunction.bind(r));
                break;
            case 3:
                r = new PointEffect(i[a], e, s), this.effectElements.push(r.proxyFunction.bind(r));
                break;
            case 4:
                r = new CheckboxEffect(i[a], e, s), this.effectElements.push(r.proxyFunction.bind(r))
        }
    }

    function BaseElement() {}

    function SVGBaseElement(t, e, s, i, a) {
        this.globalData = s, this.comp = i, this.data = t, this.matteElement = null, this.parentContainer = e, this.layerId = a ? a.layerId : "ly_" + randomString(10), this.placeholder = a, this.init()
    }

    function ITextElement(t, e, s, i) {}

    function SVGTextElement(t, e, s, i, a) {
        this.textSpans = [], this.renderType = "svg", this.parent.constructor.call(this, t, e, s, i, a)
    }

    function ICompElement(t, e, s, i, a) {
        this.parent.constructor.call(this, t, e, s, i, a), this.layers = t.layers, this.isSvg = !0, this.data.tm && (this.tm = PropertyFactory.getProp(this, this.data.tm, 0, s.frameRate, this.dynamicProperties))
    }

    function IImageElement(t, e, s, i, a) {
        this.assetData = s.getAssetData(t.refId), this.path = s.getPath(), this.parent.constructor.call(this, t, e, s, i, a)
    }

    function IShapeElement(t, e, s, i, a) {
        this.shapes = [], this.shapesData = t.shapes, this.stylesList = [], this.viewData = [], this.shapesContainer = document.createElementNS(svgNS, "g"), this.parent.constructor.call(this, t, e, s, i, a)
    }

    function ISolidElement(t, e, s, i, a) {
        this.parent.constructor.call(this, t, e, s, i, a)
    }

    function CVBaseElement(t, e, s) {
        this.globalData = s, this.data = t, this.comp = e, this.canvasContext = s.canvasContext, this.init()
    }

    function CVCompElement(t, e, s) {
        this.parent.constructor.call(this, t, e, s), this.layers = t.layers, this.data.tm && (this.tm = PropertyFactory.getProp(this, this.data.tm, 0, s.frameRate, this.dynamicProperties))
    }

    function CVImageElement(t, e, s) {
        this.animationItem = s.renderer.animationItem, this.assetData = this.animationItem.getAssetData(t.refId), this.path = this.animationItem.getPath(), this.parent.constructor.call(this, t, e, s), this.animationItem.pendingElements += 1
    }

    function CVMaskElement(t, e, s) {
        this.data = t, this.element = e, this.globalData = s, this.dynamicProperties = [], this.masksProperties = this.data.masksProperties, this.ctx = this.element.canvasContext, this.viewData = new Array(this.masksProperties.length);
        var i, a = this.masksProperties.length;
        for (i = 0; a > i; i++) this.viewData[i] = PropertyFactory.getShapeProp(this.element, this.masksProperties[i], 3, this.dynamicProperties, null)
    }

    function CVShapeElement(t, e, s) {
        this.shapes = [], this.stylesList = [], this.viewData = [], this.shapesData = t.shapes, this.firstFrame = !0, this.parent.constructor.call(this, t, e, s)
    }

    function CVSolidElement(t, e, s) {
        this.parent.constructor.call(this, t, e, s)
    }

    function CVTextElement(t, e, s) {
        this.textSpans = [], this.yOffset = 0, this.fillColorAnim = !1, this.strokeColorAnim = !1, this.strokeWidthAnim = !1, this.stroke = !1, this.fill = !1, this.justifyOffset = 0, this.currentRender = null, this.renderType = "canvas", this.values = {
            fill: "rgba(0,0,0,0)",
            stroke: "rgba(0,0,0,0)",
            sWidth: 0,
            fValue: ""
        }, this.parent.constructor.call(this, t, e, s)
    }

    function HBaseElement(t, e, s, i, a) {
        this.globalData = s, this.comp = i, this.data = t, this.matteElement = null, this.parentContainer = e, this.layerId = a ? a.layerId : "ly_" + randomString(10), this.placeholder = a, this.init()
    }

    function HSolidElement(t, e, s, i, a) {
        this.parent.constructor.call(this, t, e, s, i, a)
    }

    function HCompElement(t, e, s, i, a) {
        this.parent.constructor.call(this, t, e, s, i, a), this.layers = t.layers, this.isSvg = !1, this.data.tm && (this.tm = PropertyFactory.getProp(this, this.data.tm, 0, s.frameRate, this.dynamicProperties)), this.data.hasMask && (this.isSvg = !0)
    }

    function HShapeElement(t, e, s, i, a) {
        this.shapes = [], this.shapesData = t.shapes, this.stylesList = [], this.viewData = [], this.parent.constructor.call(this, t, e, s, i, a)
    }

    function HTextElement(t, e, s, i, a) {
        this.textSpans = [], this.textPaths = [], this.currentBBox = {
            x: 999999,
            y: -999999,
            h: 0,
            w: 0
        }, this.renderType = "svg", this.isMasked = !1, this.parent.constructor.call(this, t, e, s, i, a)
    }

    function HImageElement(t, e, s, i, a) {
        this.assetData = s.getAssetData(t.refId), this.path = s.getPath(), this.parent.constructor.call(this, t, e, s, i, a)
    }

    function HCameraElement(t, e, s, i, a) {
        if (this.parent.constructor.call(this, t, e, s, i, a), this.pe = PropertyFactory.getProp(this, t.pe, 0, 0, this.dynamicProperties), t.ks.p.s ? (this.px = PropertyFactory.getProp(this, t.ks.p.x, 1, 0, this.dynamicProperties), this.py = PropertyFactory.getProp(this, t.ks.p.y, 1, 0, this.dynamicProperties), this.pz = PropertyFactory.getProp(this, t.ks.p.z, 1, 0, this.dynamicProperties)) : this.p = PropertyFactory.getProp(this, t.ks.p, 1, 0, this.dynamicProperties), t.ks.a && (this.a = PropertyFactory.getProp(this, t.ks.a, 1, 0, this.dynamicProperties)), t.ks.or.k.length) {
            var r, n = t.ks.or.k.length;
            for (r = 0; n > r; r += 1) t.ks.or.k[r].to = null, t.ks.or.k[r].ti = null
        }
        this.or = PropertyFactory.getProp(this, t.ks.or, 1, degToRads, this.dynamicProperties), this.or.sh = !0, this.rx = PropertyFactory.getProp(this, t.ks.rx, 0, degToRads, this.dynamicProperties), this.ry = PropertyFactory.getProp(this, t.ks.ry, 0, degToRads, this.dynamicProperties), this.rz = PropertyFactory.getProp(this, t.ks.rz, 0, degToRads, this.dynamicProperties), this.mat = new Matrix
    }
    var svgNS = "http://www.w3.org/2000/svg",
        subframeEnabled = !0,
        isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent),
        cachedColors = {},
        bm_rounder = Math.round,
        bm_rnd, bm_pow = Math.pow,
        bm_sqrt = Math.sqrt,
        bm_abs = Math.abs,
        bm_floor = Math.floor,
        bm_max = Math.max,
        bm_min = Math.min,
        BMMath = {
            pow: bm_pow,
            random: Math.random
        },
        defaultCurveSegments = 75,
        degToRads = Math.PI / 180;
    roundValues(!1);
    var rgbToHex = function() {
            var t, e, s = [];
            for (t = 0; 256 > t; t += 1) e = t.toString(16), s[t] = 1 == e.length ? "0" + e : e;
            return function(t, e, i) {
                return 0 > t && (t = 0), 0 > e && (e = 0), 0 > i && (i = 0), "#" + s[t] + s[e] + s[i]
            }
        }(),
        fillColorToString = function() {
            var t = [];
            return function(e, s) {
                return void 0 !== s && (e[3] = s), t[e[0]] || (t[e[0]] = {}), t[e[0]][e[1]] || (t[e[0]][e[1]] = {}), t[e[0]][e[1]][e[2]] || (t[e[0]][e[1]][e[2]] = {}), t[e[0]][e[1]][e[2]][e[3]] || (t[e[0]][e[1]][e[2]][e[3]] = "rgba(" + e.join(",") + ")"), t[e[0]][e[1]][e[2]][e[3]]
            }
        }(),
        Matrix = function() {
            function t() {
                return this.props[0] = 1, this.props[1] = 0, this.props[2] = 0, this.props[3] = 0, this.props[4] = 0, this.props[5] = 1, this.props[6] = 0, this.props[7] = 0, this.props[8] = 0, this.props[9] = 0, this.props[10] = 1, this.props[11] = 0, this.props[12] = 0, this.props[13] = 0, this.props[14] = 0, this.props[15] = 1, this
            }

            function e(t) {
                if (0 === t) return this;
                var e = Math.cos(t),
                    s = Math.sin(t);
                return this._t(e, -s, 0, 0, s, e, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1)
            }

            function s(t) {
                if (0 === t) return this;
                var e = Math.cos(t),
                    s = Math.sin(t);
                return this._t(1, 0, 0, 0, 0, e, -s, 0, 0, s, e, 0, 0, 0, 0, 1)
            }

            function i(t) {
                if (0 === t) return this;
                var e = Math.cos(t),
                    s = Math.sin(t);
                return this._t(e, 0, s, 0, 0, 1, 0, 0, -s, 0, e, 0, 0, 0, 0, 1)
            }

            function a(t) {
                if (0 === t) return this;
                var e = Math.cos(t),
                    s = Math.sin(t);
                return this._t(e, -s, 0, 0, s, e, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1)
            }

            function r(t, e) {
                return this._t(1, e, t, 1, 0, 0)
            }

            function n(t, e) {
                return this.shear(Math.tan(t), Math.tan(e))
            }

            function o(t, e) {
                var s = Math.cos(e),
                    i = Math.sin(e);
                return this._t(s, i, 0, 0, -i, s, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1)._t(1, 0, 0, 0, Math.tan(t), 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1)._t(s, -i, 0, 0, i, s, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1)
            }

            function h(t, e, s) {
                return s = isNaN(s) ? 1 : s, 1 == t && 1 == e && 1 == s ? this : this._t(t, 0, 0, 0, 0, e, 0, 0, 0, 0, s, 0, 0, 0, 0, 1)
            }

            function l(t, e, s, i, a, r, n, o, h, l, p, m, f, d, c, u) {
                return this.props[0] = t, this.props[1] = e, this.props[2] = s, this.props[3] = i, this.props[4] = a, this.props[5] = r, this.props[6] = n, this.props[7] = o, this.props[8] = h, this.props[9] = l, this.props[10] = p, this.props[11] = m, this.props[12] = f, this.props[13] = d, this.props[14] = c, this.props[15] = u, this
            }

            function p(t, e, s) {
                return s = isNaN(s) ? 0 : s, 0 !== t || 0 !== e || 0 !== s ? this._t(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, t, e, s, 1) : this
            }

            function m(t, e, s, i, a, r, n, o, h, l, p, m, f, d, c, u) {
                if (1 === t && 0 === e && 0 === s && 0 === i && 0 === a && 1 === r && 0 === n && 0 === o && 0 === h && 0 === l && 1 === p && 0 === m) return (0 !== f || 0 !== d || 0 !== c) && (this.props[12] = this.props[12] * t + this.props[13] * a + this.props[14] * h + this.props[15] * f, this.props[13] = this.props[12] * e + this.props[13] * r + this.props[14] * l + this.props[15] * d, this.props[14] = this.props[12] * s + this.props[13] * n + this.props[14] * p + this.props[15] * c, this.props[15] = this.props[12] * i + this.props[13] * o + this.props[14] * m + this.props[15] * u), this;
                var y = this.props[0],
                    v = this.props[1],
                    g = this.props[2],
                    b = this.props[3],
                    E = this.props[4],
                    P = this.props[5],
                    k = this.props[6],
                    S = this.props[7],
                    C = this.props[8],
                    x = this.props[9],
                    w = this.props[10],
                    D = this.props[11],
                    T = this.props[12],
                    M = this.props[13],
                    I = this.props[14],
                    F = this.props[15];
                return this.props[0] = y * t + v * a + g * h + b * f, this.props[1] = y * e + v * r + g * l + b * d, this.props[2] = y * s + v * n + g * p + b * c, this.props[3] = y * i + v * o + g * m + b * u, this.props[4] = E * t + P * a + k * h + S * f, this.props[5] = E * e + P * r + k * l + S * d, this.props[6] = E * s + P * n + k * p + S * c, this.props[7] = E * i + P * o + k * m + S * u, this.props[8] = C * t + x * a + w * h + D * f, this.props[9] = C * e + x * r + w * l + D * d, this.props[10] = C * s + x * n + w * p + D * c, this.props[11] = C * i + x * o + w * m + D * u, this.props[12] = T * t + M * a + I * h + F * f, this.props[13] = T * e + M * r + I * l + F * d, this.props[14] = T * s + M * n + I * p + F * c, this.props[15] = T * i + M * o + I * m + F * u, this
            }

            function f(t) {
                var e;
                for (e = 0; 16 > e; e += 1) t.props[e] = this.props[e]
            }

            function d(t) {
                var e;
                for (e = 0; 16 > e; e += 1) this.props[e] = t[e]
            }

            function c(t, e, s) {
                return {
                    x: t * this.props[0] + e * this.props[4] + s * this.props[8] + this.props[12],
                    y: t * this.props[1] + e * this.props[5] + s * this.props[9] + this.props[13],
                    z: t * this.props[2] + e * this.props[6] + s * this.props[10] + this.props[14]
                }
            }

            function u(t, e, s) {
                return t * this.props[0] + e * this.props[4] + s * this.props[8] + this.props[12]
            }

            function y(t, e, s) {
                return t * this.props[1] + e * this.props[5] + s * this.props[9] + this.props[13]
            }

            function v(t, e, s) {
                return t * this.props[2] + e * this.props[6] + s * this.props[10] + this.props[14]
            }

            function g(t, e, s) {
                return [t * this.props[0] + e * this.props[4] + s * this.props[8] + this.props[12], t * this.props[1] + e * this.props[5] + s * this.props[9] + this.props[13], t * this.props[2] + e * this.props[6] + s * this.props[10] + this.props[14]]
            }

            function b(t, e) {
                return bm_rnd(t * this.props[0] + e * this.props[4] + this.props[12]) + "," + bm_rnd(t * this.props[1] + e * this.props[5] + this.props[13])
            }

            function E() {
                return [this.props[0], this.props[1], this.props[2], this.props[3], this.props[4], this.props[5], this.props[6], this.props[7], this.props[8], this.props[9], this.props[10], this.props[11], this.props[12], this.props[13], this.props[14], this.props[15]]
            }

            function P() {
                return isSafari ? "matrix3d(" + roundTo2Decimals(this.props[0]) + "," + roundTo2Decimals(this.props[1]) + "," + roundTo2Decimals(this.props[2]) + "," + roundTo2Decimals(this.props[3]) + "," + roundTo2Decimals(this.props[4]) + "," + roundTo2Decimals(this.props[5]) + "," + roundTo2Decimals(this.props[6]) + "," + roundTo2Decimals(this.props[7]) + "," + roundTo2Decimals(this.props[8]) + "," + roundTo2Decimals(this.props[9]) + "," + roundTo2Decimals(this.props[10]) + "," + roundTo2Decimals(this.props[11]) + "," + roundTo2Decimals(this.props[12]) + "," + roundTo2Decimals(this.props[13]) + "," + roundTo2Decimals(this.props[14]) + "," + roundTo2Decimals(this.props[15]) + ")" : (this.cssParts[1] = this.props.join(","), this.cssParts.join(""))
            }

            function k() {
                return "matrix(" + this.props[0] + "," + this.props[1] + "," + this.props[4] + "," + this.props[5] + "," + this.props[12] + "," + this.props[13] + ")"
            }

            function S() {
                return "" + this.toArray()
            }
            return function() {
                this.reset = t, this.rotate = e, this.rotateX = s, this.rotateY = i, this.rotateZ = a, this.skew = n, this.skewFromAxis = o, this.shear = r, this.scale = h, this.setTransform = l, this.translate = p, this.transform = m, this.applyToPoint = c, this.applyToX = u, this.applyToY = y, this.applyToZ = v, this.applyToPointArray = g, this.applyToPointStringified = b, this.toArray = E, this.toCSS = P, this.to2dCSS = k, this.toString = S, this.clone = f, this.cloneFromProps = d, this._t = this.transform, this.props = [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1], this.cssParts = ["matrix3d(", "", ")"]
            }
        }();
    ! function(t, e) {
        function s(s, l, p) {
            var d = [];
            l = 1 == l ? {
                entropy: !0
            } : l || {};
            var g = n(r(l.entropy ? [s, h(t)] : null == s ? o() : s, 3), d),
                b = new i(d),
                E = function() {
                    for (var t = b.g(f), e = u, s = 0; y > t;) t = (t + s) * m, e *= m, s = b.g(1);
                    for (; t >= v;) t /= 2, e /= 2, s >>>= 1;
                    return (t + s) / e
                };
            return E.int32 = function() {
                return 0 | b.g(4)
            }, E.quick = function() {
                return b.g(4) / 4294967296
            }, E["double"] = E, n(h(b.S), t), (l.pass || p || function(t, s, i, r) {
                return r && (r.S && a(r, b), t.state = function() {
                    return a(b, {})
                }), i ? (e[c] = t, s) : t
            })(E, g, "global" in l ? l.global : this == e, l.state)
        }

        function i(t) {
            var e, s = t.length,
                i = this,
                a = 0,
                r = i.i = i.j = 0,
                n = i.S = [];
            for (s || (t = [s++]); m > a;) n[a] = a++;
            for (a = 0; m > a; a++) n[a] = n[r = g & r + t[a % s] + (e = n[a])], n[r] = e;
            (i.g = function(t) {
                for (var e, s = 0, a = i.i, r = i.j, n = i.S; t--;) e = n[a = g & a + 1], s = s * m + n[g & (n[a] = n[r = g & r + e]) + (n[r] = e)];
                return i.i = a, i.j = r, s
            })(m)
        }

        function a(t, e) {
            return e.i = t.i, e.j = t.j, e.S = t.S.slice(), e
        }

        function r(t, e) {
            var s, i = [],
                a = typeof t;
            if (e && "object" == a)
                for (s in t) try {
                    i.push(r(t[s], e - 1))
                } catch (n) {}
            return i.length ? i : "string" == a ? t : t + "\x00"
        }

        function n(t, e) {
            for (var s, i = t + "", a = 0; a < i.length;) e[g & a] = g & (s ^= 19 * e[g & a]) + i.charCodeAt(a++);
            return h(e)
        }

        function o() {
            try {
                if (l) return h(l.randomBytes(m));
                var e = new Uint8Array(m);
                return (p.crypto || p.msCrypto).getRandomValues(e), h(e)
            } catch (s) {
                var i = p.navigator,
                    a = i && i.plugins;
                return [+new Date, p, a, p.screen, h(t)]
            }
        }

        function h(t) {
            return String.fromCharCode.apply(0, t)
        }
        var l, p = this,
            m = 256,
            f = 6,
            d = 52,
            c = "random",
            u = e.pow(m, f),
            y = e.pow(2, d),
            v = 2 * y,
            g = m - 1;
        e["seed" + c] = s, n(e.random(), t)
    }([], BMMath);
    var BezierFactory = function() {
            function t(t, e, s, i, a) {
                var r = a || ("bez_" + t + "_" + e + "_" + s + "_" + i).replace(/\./g, "p");
                if (p[r]) return p[r];
                var n = new h([t, e, s, i]);
                return p[r] = n, n
            }

            function e(t, e) {
                return 1 - 3 * e + 3 * t
            }

            function s(t, e) {
                return 3 * e - 6 * t
            }

            function i(t) {
                return 3 * t
            }

            function a(t, a, r) {
                return ((e(a, r) * t + s(a, r)) * t + i(a)) * t
            }

            function r(t, a, r) {
                return 3 * e(a, r) * t * t + 2 * s(a, r) * t + i(a)
            }

            function n(t, e, s, i, r) {
                var n, o, h = 0;
                do o = e + (s - e) / 2, n = a(o, i, r) - t, n > 0 ? s = o : e = o; while (Math.abs(n) > d && ++h < c);
                return o
            }

            function o(t, e, s, i) {
                for (var n = 0; m > n; ++n) {
                    var o = r(e, s, i);
                    if (0 === o) return e;
                    var h = a(e, s, i) - t;
                    e -= h / o
                }
                return e
            }

            function h(t) {
                this._p = t, this._mSampleValues = v ? new Float32Array(u) : new Array(u), this._precomputed = !1, this.get = this.get.bind(this)
            }
            var l = {};
            l.getBezierEasing = t;
            var p = {},
                m = 4,
                f = .001,
                d = 1e-7,
                c = 10,
                u = 11,
                y = 1 / (u - 1),
                v = "function" == typeof Float32Array;
            return h.prototype = {
                get: function(t) {
                    var e = this._p[0],
                        s = this._p[1],
                        i = this._p[2],
                        r = this._p[3];
                    return this._precomputed || this._precompute(), e === s && i === r ? t : 0 === t ? 0 : 1 === t ? 1 : a(this._getTForX(t), s, r)
                },
                _precompute: function() {
                    var t = this._p[0],
                        e = this._p[1],
                        s = this._p[2],
                        i = this._p[3];
                    this._precomputed = !0, (t !== e || s !== i) && this._calcSampleValues()
                },
                _calcSampleValues: function() {
                    for (var t = this._p[0], e = this._p[2], s = 0; u > s; ++s) this._mSampleValues[s] = a(s * y, t, e)
                },
                _getTForX: function(t) {
                    for (var e = this._p[0], s = this._p[2], i = this._mSampleValues, a = 0, h = 1, l = u - 1; h !== l && i[h] <= t; ++h) a += y;
                    --h;
                    var p = (t - i[h]) / (i[h + 1] - i[h]),
                        m = a + p * y,
                        d = r(m, e, s);
                    return d >= f ? o(t, m, e, s) : 0 === d ? m : n(t, a, a + y, e, s)
                }
            }, l
        }(),
        MatrixManager = matrixManagerFunction;
    ! function() {
        for (var t = 0, e = ["ms", "moz", "webkit", "o"], s = 0; s < e.length && !window.requestAnimationFrame; ++s) window.requestAnimationFrame = window[e[s] + "RequestAnimationFrame"], window.cancelAnimationFrame = window[e[s] + "CancelAnimationFrame"] || window[e[s] + "CancelRequestAnimationFrame"];
        window.requestAnimationFrame || (window.requestAnimationFrame = function(e, s) {
            var i = (new Date).getTime(),
                a = Math.max(0, 16 - (i - t)),
                r = window.setTimeout(function() {
                    e(i + a)
                }, a);
            return t = i + a, r
        }), window.cancelAnimationFrame || (window.cancelAnimationFrame = function(t) {
            clearTimeout(t)
        })
    }();
    var bez = bezFunction(),
        dataManager = dataFunctionManager(),
        FontManager = function() {
            function t(t, e) {
                var s = document.createElement("span");
                s.style.fontFamily = e;
                var i = document.createElement("span");
                i.innerHTML = "giItT1WQy@!-/#", s.style.position = "absolute", s.style.left = "-10000px", s.style.top = "-10000px", s.style.fontSize = "300px", s.style.fontVariant = "normal", s.style.fontStyle = "normal", s.style.fontWeight = "normal", s.style.letterSpacing = "0", s.appendChild(i), document.body.appendChild(s);
                var a = i.offsetWidth;
                return i.style.fontFamily = t + ", " + e, {
                    node: i,
                    w: a,
                    parent: s
                }
            }

            function e() {
                var t, s, i, a = this.fonts.length,
                    r = a;
                for (t = 0; a > t; t += 1)
                    if (this.fonts[t].loaded) r -= 1;
                    else if ("t" === this.fonts[t].fOrigin) {
                    if (window.Typekit && window.Typekit.load && 0 === this.typekitLoaded) {
                        this.typekitLoaded = 1;
                        try {
                            Typekit.load({
                                async: !0,
                                active: function() {
                                    this.typekitLoaded = 2
                                }.bind(this)
                            })
                        } catch (n) {}
                    }
                    2 === this.typekitLoaded && (this.fonts[t].loaded = !0)
                } else "n" === this.fonts[t].fOrigin ? this.fonts[t].loaded = !0 : (s = this.fonts[t].monoCase.node, i = this.fonts[t].monoCase.w, s.offsetWidth !== i ? (r -= 1, this.fonts[t].loaded = !0) : (s = this.fonts[t].sansCase.node, i = this.fonts[t].sansCase.w, s.offsetWidth !== i && (r -= 1, this.fonts[t].loaded = !0)), this.fonts[t].loaded && (this.fonts[t].sansCase.parent.parentNode.removeChild(this.fonts[t].sansCase.parent), this.fonts[t].monoCase.parent.parentNode.removeChild(this.fonts[t].monoCase.parent)));
                0 !== r && Date.now() - this.initTime < h ? setTimeout(e.bind(this), 20) : setTimeout(function() {
                    this.loaded = !0
                }.bind(this), 0)
            }

            function s(t, e) {
                var s = document.createElementNS(svgNS, "text");
                s.style.fontSize = "100px", s.style.fontFamily = e.fFamily, s.textContent = "1", e.fClass ? (s.style.fontFamily = "inherit", s.className = e.fClass) : s.style.fontFamily = e.fFamily, t.appendChild(s);
                var i = document.createElement("canvas").getContext("2d");
                return i.font = "100px " + e.fFamily, i
            }

            function i(i, a) {
                if (!i) return void(this.loaded = !0);
                if (this.chars) return this.loaded = !0, void(this.fonts = i.list);
                var r, n = i.list,
                    o = n.length;
                for (r = 0; o > r; r += 1) {
                    if (n[r].loaded = !1, n[r].monoCase = t(n[r].fFamily, "monospace"), n[r].sansCase = t(n[r].fFamily, "sans-serif"), n[r].fPath) {
                        if ("p" === n[r].fOrigin) {
                            var h = document.createElement("style");
                            h.type = "text/css", h.innerHTML = "@font-face {font-family: " + n[r].fFamily + "; font-style: normal; src: url('" + n[r].fPath + "');}", a.appendChild(h)
                        } else if ("g" === n[r].fOrigin) {
                            var l = document.createElement("link");
                            l.type = "text/css", l.rel = "stylesheet", l.href = n[r].fPath, a.appendChild(l)
                        } else if ("t" === n[r].fOrigin) {
                            var p = document.createElement("script");
                            p.setAttribute("src", n[r].fPath), a.appendChild(p)
                        }
                    } else n[r].loaded = !0;
                    n[r].helper = s(a, n[r]), this.fonts.push(n[r])
                }
                e.bind(this)()
            }

            function a(t) {
                if (t) {
                    this.chars || (this.chars = []);
                    var e, s, i, a = t.length,
                        r = this.chars.length;
                    for (e = 0; a > e; e += 1) {
                        for (s = 0, i = !1; r > s;) this.chars[s].style === t[e].style && this.chars[s].fFamily === t[e].fFamily && this.chars[s].ch === t[e].ch && (i = !0),
                            s += 1;
                        i || (this.chars.push(t[e]), r += 1)
                    }
                }
            }

            function r(t, e, s) {
                for (var i = 0, a = this.chars.length; a > i;) {
                    if (this.chars[i].ch === t && this.chars[i].style === e && this.chars[i].fFamily === s) return this.chars[i];
                    i += 1
                }
            }

            function n(t, e, s) {
                var i = this.getFontByName(e),
                    a = i.helper;
                return a.measureText(t).width * s / 100
            }

            function o(t) {
                for (var e = 0, s = this.fonts.length; s > e;) {
                    if (this.fonts[e].fName === t) return this.fonts[e];
                    e += 1
                }
                return "sans-serif"
            }
            var h = 5e3,
                l = function() {
                    this.fonts = [], this.chars = null, this.typekitLoaded = 0, this.loaded = !1, this.initTime = Date.now()
                };
            return l.prototype.addChars = a, l.prototype.addFonts = i, l.prototype.getCharData = r, l.prototype.getFontByName = o, l.prototype.measureText = n, l
        }(),
        ExpressionManager = function() {
            function sum(t, e) {
                var s = typeof t,
                    i = typeof e;
                if (!("number" !== s && "boolean" !== s || "number" !== i && "boolean" !== i)) return t + e;
                if ("object" === s && ("number" === i || "boolean" === i)) return t[0] = t[0] + e, t;
                if (("number" === s || "boolean" === s) && "object" === i) return e[0] = t + e[0], e;
                if ("object" === s && "object" === i) {
                    for (var a = 0, r = t.length, n = e.length, o = []; r > a || n > a;) o[a] = "number" == typeof t[a] && "number" == typeof e[a] ? t[a] + e[a] : t[a] || e[a], a += 1;
                    return o
                }
                return 0
            }

            function sub(t, e) {
                var s = typeof t,
                    i = typeof e;
                if (!("number" !== s && "boolean" !== s || "number" !== i && "boolean" !== i)) return t - e;
                if ("object" === s && ("number" === i || "boolean" === i)) return t[0] = t[0] - e, t;
                if (("number" === s || "boolean" === s) && "object" === i) return e[0] = t - e[0], e;
                if ("object" === s && "object" === i) {
                    for (var a = 0, r = t.length, n = e.length, o = []; r > a || n > a;) o[a] = "number" == typeof t[a] && "number" == typeof e[a] ? t[a] - e[a] : t[a] || e[a], a += 1;
                    return o
                }
                return 0
            }

            function mul(t, e) {
                var s = typeof t,
                    i = typeof e;
                if (!("number" !== s && "boolean" !== s || "number" !== i && "boolean" !== i)) return t * e;
                var a, r;
                if ("object" === s && ("number" === i || "boolean" === i)) {
                    for (r = t.length, arr = Array.apply(null, {
                            length: r
                        }), a = 0; r > a; a += 1) arr[a] = t[a] * e;
                    return arr
                }
                if (("number" === s || "boolean" === s) && "object" === i) {
                    for (r = e.length, arr = Array.apply(null, {
                            length: r
                        }), a = 0; r > a; a += 1) arr[a] = t * e[a];
                    return arr
                }
                return 0
            }

            function div(t, e) {
                var s = typeof t,
                    i = typeof e;
                if (!("number" !== s && "boolean" !== s || "number" !== i && "boolean" !== i)) return t / e;
                var a, r;
                if ("object" === s && ("number" === i || "boolean" === i)) {
                    for (r = t.length, arr = Array.apply(null, {
                            length: r
                        }), a = 0; r > a; a += 1) arr[a] = t[a] / e;
                    return arr
                }
                if (("number" === s || "boolean" === s) && "object" === i) {
                    for (r = e.length, arr = Array.apply(null, {
                            length: r
                        }), a = 0; r > a; a += 1) arr[a] = t / e[a];
                    return arr
                }
                return 0
            }

            function clamp(t, e, s) {
                if (e > s) {
                    var i = s;
                    s = e, e = i
                }
                return Math.min(Math.max(t, e), s)
            }

            function radiansToDegrees(t) {
                return t / degToRads
            }

            function length(t, e) {
                var s, i = t.length,
                    a = 0;
                for (s = 0; i > s; s += 1) a += Math.pow(e[s] - t[s], 2);
                return Math.sqrt(a)
            }

            function linear(t, e, s, i, a) {
                if (e >= t) return i;
                if (t >= s) return a;
                var r = t / (s - e);
                if (!i.length) return i + (a - i) * r;
                var n, o = i.length,
                    h = Array.apply(null, {
                        length: o
                    });
                for (n = 0; o > n; n += 1) h[n] = i[n] + (a[n] - i[n]) * r;
                return h
            }

            function seedRandom(t) {
                BMMath.seedrandom(t)
            }

            function random(t, e) {
                if (void 0 === e && (void 0 === t ? (t = 0, e = 1) : (e = t, t = void 0)), e.length) {
                    var s, i = e.length;
                    t || (t = Array.apply(null, {
                        length: i
                    }));
                    var a = Array.apply(null, {
                            length: i
                        }),
                        r = BMMath.random();
                    for (s = 0; i > s; s += 1) a[s] = t[s] + r * (e[s] - t[s]);
                    return a
                }
                void 0 === t && (t = 0);
                var n = BMMath.random();
                return t + n * (e - t)
            }

            function initiateExpression(elem, data) {
                function effect(t) {
                    return elem.effectsManager.getEffect(t)
                }

                function nearestKey(t) {
                    var e, s, i = data.k.length;
                    if (data.k.length && "number" != typeof data.k[0])
                        for (e = 0; i > e; e += 1) {
                            if (t === data.k[e].t) {
                                s = e + 1;
                                break
                            }
                            if (t < data.k[e].t) {
                                s = e + 1;
                                break
                            }
                            if (t > data.k[e].t && e === i - 1) {
                                s = i;
                                break
                            }
                        } else s = 0;
                    var a = {};
                    return a.index = s, a
                }

                function key(t) {
                    if (!data.k.length || "number" == typeof data.k[0]) return {
                        time: 0
                    };
                    t -= 1;
                    var e, s = {
                        time: data.k[t].t / thisComp.globalData.frameRate
                    };
                    e = t === data.k.length - 1 ? data.k[t - 1].e : data.k[t].s;
                    var i, a = e.length;
                    for (i = 0; a > i; i += 1) s[i] = e[i];
                    return s
                }

                function hasParentGetter() {}

                function execute() {
                    seedRandom(0), "textSelector" === this.type && (textIndex = this.textIndex, textTotal = this.textTotal, selectorValue = this.selectorValue), transform || (transform = elem.transform), !content && elem.content && (content = elem.content.bind(elem)), this.getPreValue && this.getPreValue(), value = this.pv, time = this.comp.renderedFrame / this.comp.globalData.frameRate, bindedFn();
                    var t, e;
                    if (this.mult)
                        if ("number" == typeof this.v) this.v *= this.mult;
                        else
                            for (e = this.v.length, value === this.v && (this.v = 2 === e ? [value[0], value[1]] : [value[0], value[1], value[2]]), t = 0; e > t; t += 1) this.v[t] *= this.mult;
                    if ("number" == typeof this.v) this.lastValue !== this.v && (this.lastValue = this.v, this.mdf = !0);
                    else if (this.v.i) this.mdf = !0;
                    else
                        for (e = this.v.length, t = 0; e > t; t += 1) this.v[t] !== this.lastValue[t] && (this.lastValue[t] = this.v[t], this.mdf = !0)
                }
                var val = data.x,
                    transform, content, effect, thisComp = elem.comp;
                elem.comp.frameDuration = 1 / thisComp.globalData.frameRate;
                var inPoint = elem.data.ip / thisComp.globalData.frameRate,
                    outPoint = elem.data.op / thisComp.globalData.frameRate,
                    thisLayer = elem,
                    fnStr = "var fn = function(){" + val + ";this.v = $bm_rt;}";
                eval(fnStr);
                var bindedFn = fn.bind(this),
                    numKeys = data.k ? data.k.length : 0,
                    wiggle = function(t, e) {
                        var s, i, a = this.pv.length ? this.pv.length : 1,
                            r = Array.apply(null, {
                                len: a
                            });
                        for (i = 0; a > i; i += 1) r[i] = 0;
                        t = 5;
                        var n = Math.floor(time * t);
                        for (s = 0, i = 0; n > s;) {
                            for (i = 0; a > i; i += 1) r[i] += -e + 2 * e * BMMath.random();
                            s += 1
                        }
                        var o = time * t,
                            h = o - Math.floor(o),
                            l = Array.apply({
                                length: a
                            });
                        for (i = 0; a > i; i += 1) l[i] = this.pv[i] + r[i] + (-e + 2 * e * BMMath.random()) * h;
                        return l
                    }.bind(this),
                    loopIn = function(t, e, s) {
                        if (!this.k) return this.pv;
                        var i = time * thisComp.globalData.frameRate,
                            a = this.keyframes,
                            r = a[0].t;
                        if (i >= r) return this.pv;
                        var n, o;
                        s ? (n = e ? Math.abs(thisComp.globalData.frameRate * e) : Math.max(0, this.elem.data.op - r), o = r + n) : ((!e || e > a.length - 1) && (e = a.length - 1), o = a[e].t, n = o - r);
                        var h, l, p;
                        if ("pingpong" === t) {
                            var m = Math.floor((r - i) / n);
                            if (m % 2 === 0) return this.getValueAtTime((r - i) % n + r)
                        } else {
                            if ("offset" === t) {
                                var f = this.getValueAtTime(r),
                                    d = this.getValueAtTime(o),
                                    c = this.getValueAtTime(n - (r - i) % n + r),
                                    u = Math.floor((r - i) / n) + 1;
                                if (this.pv.length) {
                                    for (p = new Array(f.length), l = p.length, h = 0; l > h; h += 1) p[h] = c[h] - (d[h] - f[h]) * u;
                                    return p
                                }
                                return c - (d - f) * u
                            }
                            if ("continue" === t) {
                                var y = this.getValueAtTime(r),
                                    v = this.getValueAtTime(r + .001);
                                if (this.pv.length) {
                                    for (p = new Array(y.length), l = p.length, h = 0; l > h; h += 1) p[h] = y[h] + (y[h] - v[h]) * (r - i) / 5e-4;
                                    return p
                                }
                                return y + (y - v) * (r - i) / 5e-4
                            }
                        }
                        return this.getValueAtTime(n - (r - i) % n + r)
                    }.bind(this),
                    loopInDuration = function(t, e) {
                        return loopIn(t, e, !0)
                    }.bind(this),
                    loopOut = function(t, e, s) {
                        if (!this.k) return this.pv;
                        var i = time * thisComp.globalData.frameRate,
                            a = this.keyframes,
                            r = a[a.length - 1].t;
                        if (r >= i) return this.pv;
                        var n, o;
                        s ? (n = e ? Math.abs(r - thisComp.globalData.frameRate * e) : Math.max(0, r - this.elem.data.ip), o = r - n) : ((!e || e > a.length - 1) && (e = a.length - 1), o = a[a.length - 1 - e].t, n = r - o);
                        var h, l, p;
                        if ("pingpong" === t) {
                            var m = Math.floor((i - o) / n);
                            if (m % 2 !== 0) return this.getValueAtTime(n - (i - o) % n + o)
                        } else {
                            if ("offset" === t) {
                                var f = this.getValueAtTime(o),
                                    d = this.getValueAtTime(r),
                                    c = this.getValueAtTime((i - o) % n + o),
                                    u = Math.floor((i - o) / n);
                                if (this.pv.length) {
                                    for (p = new Array(f.length), l = p.length, h = 0; l > h; h += 1) p[h] = (d[h] - f[h]) * u + c[h];
                                    return p
                                }
                                return (d - f) * u + c
                            }
                            if ("continue" === t) {
                                var y = this.getValueAtTime(r),
                                    v = this.getValueAtTime(r - .001);
                                if (this.pv.length) {
                                    for (p = new Array(y.length), l = p.length, h = 0; l > h; h += 1) p[h] = y[h] + (y[h] - v[h]) * (i - r) / 5e-4;
                                    return p
                                }
                                return y + (y - v) * (i - r) / 5e-4
                            }
                        }
                        return this.getValueAtTime((i - o) % n + o)
                    }.bind(this),
                    loopOutDuration = function(t, e) {
                        return loopOut(t, e, !0)
                    }.bind(this),
                    valueAtTime = function(t) {
                        return this.getValueAtTime(t * thisComp.globalData.frameRate)
                    }.bind(this),
                    velocityAtTime = function(t) {
                        return this.getVelocityAtTime(t * thisComp.globalData.frameRate)
                    }.bind(this);
                Object.defineProperty(this, "hasParent", {
                    get: hasParentGetter
                });
                var time, value, textIndex, textTotal, selectorValue, index = elem.data.ind + 1,
                    hasParent = !(!elem.hierarchy || !elem.hierarchy.length);
                return execute
            }
            var ob = {};
            return ob.initiateExpression = initiateExpression, ob
        }();
    ! function() {
        ExpressionComp.prototype.layer = function(t) {
            for (var e = 0, s = this.layers.length; s > e;) {
                if (this.layers[e].nm === t) return this.elements[e];
                e += 1
            }
        }, ExpressionComp.prototype.pixelAspect = 1
    }(), ShapeInterface.prototype.fillInterface = function(t) {
        var e = {get color() {
                return t.c.k && t.c.getValue(), [t.c.pv[0], t.c.pv[1], t.c.pv[2]]
            },
            get opacity() {
                return t.o.k && t.o.getValue(), t.o.pv
            }
        };
        return e
    }, ShapeInterface.prototype.strokeInterface = function(t, e) {
        var s = {get color() {
                return e.c.k && e.c.getValue(), [e.c.pv[0], e.c.pv[1], e.c.pv[2]]
            },
            get opacity() {
                return e.o.k && e.o.getValue(), e.o.pv
            },
            get strokeWidth() {
                return e.w.k && e.w.getValue(), e.w.pv
            },
            dashOb: {},
            get dash() {
                var s, i = e.d,
                    a = t.d,
                    r = a.length;
                for (s = 0; r > s; s += 1) i.dataProps[s].p.k && i.dataProps[s].p.getValue(), this.dashOb[a[s].nm] = i.dataProps[s].p.v;
                return this.dashOb
            }
        };
        return s
    }, ShapeInterface.prototype.shapeInterface = function(t) {
        var e = {get shape() {
                return t.sh.k && t.sh.getValue(), t.sh.pv
            }
        };
        return e
    }, ShapeInterface.prototype.ellipseInterface = function(t) {
        var e = {get size() {
                return t.sh.s.k && t.sh.s.getValue(), [t.sh.s.pv[0], t.sh.s.pv[1]]
            },
            get position() {
                return t.sh.p.k && t.sh.p.getValue(), [t.sh.p.pv[0], t.sh.p.pv[1]]
            }
        };
        return e
    }, ShapeInterface.prototype.rectangleInterface = function(t) {
        var e = "tm" === t.sh.ty ? t.sh.prop : t.sh,
            s = {get size() {
                    return e.s.k && e.s.getValue(), [e.s.pv[0], e.s.pv[1]]
                },
                get position() {
                    return e.p.k && e.p.getValue(), [e.p.pv[0], e.p.pv[1]]
                },
                get roundness() {
                    return e.r.k && e.r.getValue(), e.r.pv
                }
            };
        return s
    }, ShapeInterface.prototype.trimInterface = function(t) {
        var e = {get start() {
                return t.tr.s.k && t.tr.s.getValue(), t.tr.s.pv
            },
            get end() {
                return t.tr.e.k && t.tr.e.getValue(), t.tr.e.pv
            },
            get offset() {
                return t.tr.o.k && t.tr.o.getValue(), t.tr.o.pv
            }
        };
        return e
    }, ShapeInterface.prototype.transformInterface = function(t) {
        var e = {get opacity() {
                return t.transform.mProps.o.k && t.transform.mProps.o.getValue(), t.transform.mProps.o.pv
            },
            get position() {
                return t.transform.mProps.p.k && t.transform.mProps.p.getValue(), [t.transform.mProps.p.pv[0], t.transform.mProps.p.pv[1]]
            },
            get anchorPoint() {
                return t.transform.mProps.a.k && t.transform.mProps.a.getValue(), [t.transform.mProps.a.pv[0], t.transform.mProps.a.pv[1]]
            },
            get scale() {
                return t.transform.mProps.s.k && t.transform.mProps.s.getValue(), [t.transform.mProps.s.pv[0], t.transform.mProps.s.pv[1]]
            },
            get rotation() {
                return t.transform.mProps.r.k && t.transform.mProps.r.getValue(), t.transform.mProps.r.pv
            },
            get skew() {
                return t.transform.mProps.sk.k && t.transform.mProps.sk.getValue(), t.transform.mProps.sk.pv
            },
            get skewAxis() {
                return t.transform.mProps.sa.k && t.transform.mProps.sa.getValue(), t.transform.mProps.sa.pv
            }
        };
        return e
    }, ShapeInterface.prototype.groupInterface = function(t, e, s) {
        var i, a, r = [],
            n = t.length;
        for (i = 0; n > i; i += 1) "gr" === t[i].ty ? (a = {}, this.groupInterface(t[i].it, e[i].it, a), r.push(a)) : "sh" === t[i].ty ? (a = this.shapeInterface(e[i]), r.push(a)) : "fl" === t[i].ty ? (a = this.fillInterface(e[i]), r.push(a)) : "st" === t[i].ty ? (a = this.strokeInterface(t[i], e[i]), r.push(a)) : "el" === t[i].ty ? (a = this.ellipseInterface(e[i]), r.push(a)) : "rc" === t[i].ty ? (a = this.rectangleInterface(e[i]), r.push(a)) : "tr" === t[i].ty ? s.transform = this.transformInterface(e[i]) : "tm" === t[i].ty ? (a = this.trimInterface(e[i]), r.push(a)) : r.push("");
        s.content = function(e) {
            var s, i = t.length;
            for (s = 0; i > s; s += 1)
                if (t[s].nm === e) return r[s]
        }
    }, ShapeInterface.prototype.buildExpressionInterface = function() {
        this.groupInterface(this.shapesData, this.viewData, this)
    }, LayerInterface.prototype.toWorld = function(t) {
        if (this.hierarchy && this.hierarchy.length) {
            var e, s = new Matrix,
                i = this.hierarchy.length;
            for (this.finalTransform.mProp.applyToMatrix(s, !1), e = 0; i > e; e += 1) this.hierarchy[e].finalTransform.mProp.applyToMatrix(s, !0);
            var a = s.applyToPointArray(t[0], t[1], t[2] || 0);
            return a
        }
        return t
    }, LayerInterface.prototype.effect = function(t) {
        console.log(this.effectsManager), console.log(t)
    };
    var PropertyFactory = function() {
        function t(t) {
            for (var e, s, i = 0, a = this.keyframes.length - 1, r = 1, n = !0, o = 0, h = "object" == typeof this.pv ? [this.pv.length] : 0; n;) {
                if (e = this.keyframes[i], s = this.keyframes[i + 1], i == a - 1 && t >= s.t - o) {
                    e.h && (e = s);
                    break
                }
                if (s.t - o > t) break;
                a - 1 > i ? i += r : n = !1
            }
            var l, p, m, f, d, c = 0;
            if (e.to) {
                e.bezierData || bez.buildBezierData(e);
                var u = e.bezierData;
                if (t >= s.t - o || t < e.t - o) {
                    var y = t >= s.t - o ? u.points.length - 1 : 0;
                    for (p = u.points[y].point.length, l = 0; p > l; l += 1) h[l] = u.points[y].point[l]
                } else {
                    e.__fnct ? d = e.__fnct : (d = BezierFactory.getBezierEasing(e.o.x, e.o.y, e.i.x, e.i.y, e.n).get, e.__fnct = d), m = d((t - (e.t - o)) / (s.t - o - (e.t - o)));
                    var v, g = u.segmentLength * m,
                        b = 0;
                    for (r = 1, n = !0, f = u.points.length; n;) {
                        if (b += u.points[c].partialLength * r, 0 === g || 0 === m || c == u.points.length - 1) {
                            for (p = u.points[c].point.length, l = 0; p > l; l += 1) h[l] = u.points[c].point[l];
                            break
                        }
                        if (g >= b && g < b + u.points[c + 1].partialLength) {
                            for (v = (g - b) / u.points[c + 1].partialLength, p = u.points[c].point.length, l = 0; p > l; l += 1) h[l] = u.points[c].point[l] + (u.points[c + 1].point[l] - u.points[c].point[l]) * v;
                            break
                        }
                        f - 1 > c && 1 == r || c > 0 && -1 == r ? c += r : n = !1
                    }
                }
            } else {
                var E, P, k, S, C, x = !1;
                for (a = e.s.length, i = 0; a > i; i += 1) {
                    if (1 !== e.h && (e.o.x instanceof Array ? (x = !0, e.__fnct || (e.__fnct = []), e.__fnct[i] || (E = e.o.x[i] || e.o.x[0], P = e.o.y[i] || e.o.y[0], k = e.i.x[i] || e.i.x[0], S = e.i.y[i] || e.i.y[0])) : (x = !1, e.__fnct || (E = e.o.x, P = e.o.y, k = e.i.x, S = e.i.y)), x ? e.__fnct[i] ? d = e.__fnct[i] : (d = BezierFactory.getBezierEasing(E, P, k, S).get, e.__fnct[i] = d) : e.__fnct ? d = e.__fnct : (d = BezierFactory.getBezierEasing(E, P, k, S).get, e.__fnct = d), m = t >= s.t - o ? 1 : t < e.t - o ? 0 : d((t - (e.t - o)) / (s.t - o - (e.t - o)))), this.sh && 1 !== e.h) {
                        var w = e.s[i],
                            D = e.e[i]; - 180 > w - D ? w += 360 : w - D > 180 && (w -= 360), C = w + (D - w) * m
                    } else C = 1 === e.h ? e.s[i] : e.s[i] + (e.e[i] - e.s[i]) * m;
                    1 === a ? h = C : h[i] = C
                }
            }
            return h
        }

        function e(t) {
            var e, s = .01,
                i = this.getValueAtTime(t),
                a = this.getValueAtTime(t + s);
            if (i.length) {
                e = Array.apply(null, {
                    length: i.length
                });
                var r;
                for (r = 0; r < i.length; r += 1) e[r] = this.elem.globalData.frameRate * ((a[r] - i[r]) / s)
            } else e = (a - i) / s;
            return e
        }

        function s() {
            if (this.elem.globalData.frameId !== this.frameId) {
                this.mdf = !1, this.frameId = this.elem.globalData.frameId;
                var t = this.comp.renderedFrame - this.offsetTime;
                if (t === this.lastFrame || this.lastFrame !== y && (this.lastFrame >= this.keyframes[this.keyframes.length - 1].t - this.offsetTime && t >= this.keyframes[this.keyframes.length - 1].t - this.offsetTime || this.lastFrame < this.keyframes[0].t - this.offsetTime && t < this.keyframes[0].t - this.offsetTime));
                else {
                    for (var e, s, i = 0, a = this.keyframes.length - 1, r = 1, n = !0; n;) {
                        if (e = this.keyframes[i], s = this.keyframes[i + 1], i == a - 1 && t >= s.t - this.offsetTime) {
                            e.h && (e = s);
                            break
                        }
                        if (s.t - this.offsetTime > t) break;
                        a - 1 > i ? i += r : n = !1
                    }
                    var o, h, l, p, m, f = 0;
                    if (e.to) {
                        e.bezierData || bez.buildBezierData(e);
                        var d = e.bezierData;
                        if (t >= s.t - this.offsetTime || t < e.t - this.offsetTime) {
                            var c = t >= s.t - this.offsetTime ? d.points.length - 1 : 0;
                            for (h = d.points[c].point.length, o = 0; h > o; o += 1) this.v[o] = this.mult ? d.points[c].point[o] * this.mult : d.points[c].point[o], this.pv[o] = d.points[c].point[o], this.lastPValue[o] !== this.pv[o] && (this.mdf = !0, this.lastPValue[o] = this.pv[o])
                        } else {
                            e.__fnct ? m = e.__fnct : (m = BezierFactory.getBezierEasing(e.o.x, e.o.y, e.i.x, e.i.y, e.n).get, e.__fnct = m), l = m((t - (e.t - this.offsetTime)) / (s.t - this.offsetTime - (e.t - this.offsetTime)));
                            var u, v = d.segmentLength * l,
                                g = 0;
                            for (r = 1, n = !0, p = d.points.length; n;) {
                                if (g += d.points[f].partialLength * r, 0 === v || 0 === l || f == d.points.length - 1) {
                                    for (h = d.points[f].point.length, o = 0; h > o; o += 1) this.v[o] = this.mult ? d.points[f].point[o] * this.mult : d.points[f].point[o], this.pv[o] = d.points[f].point[o], this.lastPValue[o] !== this.pv[o] && (this.mdf = !0, this.lastPValue[o] = this.pv[o]);
                                    break
                                }
                                if (v >= g && v < g + d.points[f + 1].partialLength) {
                                    for (u = (v - g) / d.points[f + 1].partialLength, h = d.points[f].point.length, o = 0; h > o; o += 1) this.v[o] = this.mult ? (d.points[f].point[o] + (d.points[f + 1].point[o] - d.points[f].point[o]) * u) * this.mult : d.points[f].point[o] + (d.points[f + 1].point[o] - d.points[f].point[o]) * u, this.pv[o] = d.points[f].point[o] + (d.points[f + 1].point[o] - d.points[f].point[o]) * u, this.lastPValue[o] !== this.pv[o] && (this.mdf = !0, this.lastPValue[o] = this.pv[o]);
                                    break
                                }
                                p - 1 > f && 1 == r || f > 0 && -1 == r ? f += r : n = !1
                            }
                        }
                    } else {
                        var b, E, P, k, S, C = !1;
                        for (a = e.s.length, i = 0; a > i; i += 1) {
                            if (1 !== e.h && (e.o.x instanceof Array ? (C = !0, e.__fnct || (e.__fnct = []), e.__fnct[i] || (b = e.o.x[i] || e.o.x[0], E = e.o.y[i] || e.o.y[0], P = e.i.x[i] || e.i.x[0], k = e.i.y[i] || e.i.y[0])) : (C = !1, e.__fnct || (b = e.o.x, E = e.o.y, P = e.i.x, k = e.i.y)), C ? e.__fnct[i] ? m = e.__fnct[i] : (m = BezierFactory.getBezierEasing(b, E, P, k).get, e.__fnct[i] = m) : e.__fnct ? m = e.__fnct : (m = BezierFactory.getBezierEasing(b, E, P, k).get, e.__fnct = m), l = t >= s.t - this.offsetTime ? 1 : t < e.t - this.offsetTime ? 0 : m((t - (e.t - this.offsetTime)) / (s.t - this.offsetTime - (e.t - this.offsetTime)))), this.sh && 1 !== e.h) {
                                var x = e.s[i],
                                    w = e.e[i]; - 180 > x - w ? x += 360 : x - w > 180 && (x -= 360), S = x + (w - x) * l
                            } else S = 1 === e.h ? e.s[i] : e.s[i] + (e.e[i] - e.s[i]) * l;
                            1 === a ? (this.v = this.mult ? S * this.mult : S, this.pv = S, this.lastPValue != this.pv && (this.mdf = !0, this.lastPValue = this.pv)) : (this.v[i] = this.mult ? S * this.mult : S, this.pv[i] = S, this.lastPValue[i] !== this.pv[i] && (this.mdf = !0, this.lastPValue[i] = this.pv[i]))
                        }
                    }
                }
                this.lastFrame = t
            }
        }

        function i() {
            this.mdf = !1;
            var t = this.comp.renderedFrame - this.offsetTime;
            if (this.lastFrame !== y && (this.lastFrame < this.keyframes[0].t - this.offsetTime && t < this.keyframes[0].t - this.offsetTime || this.lastFrame > this.keyframes[this.keyframes.length - 1].t - this.offsetTime && t > this.keyframes[this.keyframes.length - 1].t - this.offsetTime));
            else {
                var e, s, i;
                if (t < this.keyframes[0].t - this.offsetTime) this.mdf = !0, e = this.keyframes[0].s[0], i = !0;
                else if (t > this.keyframes[this.keyframes.length - 1].t - this.offsetTime) this.mdf = !0, e = 1 === this.keyframes[this.keyframes.length - 2].h ? this.keyframes[this.keyframes.length - 2].s[0] : this.keyframes[this.keyframes.length - 2].e[0], i = !0;
                else {
                    this.mdf = !0;
                    for (var a, r, n, o, h, l, p = 0, m = this.keyframes.length - 1, f = 1, d = !0; d && (a = this.keyframes[p], r = this.keyframes[p + 1], !(r.t - this.offsetTime > t && 1 == f));) m - 1 > p && 1 == f || p > 0 && -1 == f ? p += f : d = !1;
                    var c;
                    if (1 !== a.h) {
                        var u;
                        a.__fnct ? u = a.__fnct : (u = BezierFactory.getBezierEasing(a.o.x, a.o.y, a.i.x, a.i.y).get, a.__fnct = u), c = t >= r.t - this.offsetTime ? 1 : t < a.t - this.offsetTime ? 0 : u((t - (a.t - this.offsetTime)) / (r.t - this.offsetTime - (a.t - this.offsetTime))), s = a.e[0]
                    }
                    e = a.s[0], i = 1 === a.h
                }
                for (o = this.v.i.length, l = e.i[0].length, n = 0; o > n; n += 1)
                    for (h = 0; l > h; h += 1) i ? (this.v.i[n][h] = e.i[n][h], this.v.o[n][h] = e.o[n][h], this.v.v[n][h] = e.v[n][h], this.pv.i[n][h] = e.i[n][h], this.pv.o[n][h] = e.o[n][h], this.pv.v[n][h] = e.v[n][h]) : (this.v.i[n][h] = e.i[n][h] + (s.i[n][h] - e.i[n][h]) * c, this.v.o[n][h] = e.o[n][h] + (s.o[n][h] - e.o[n][h]) * c, this.v.v[n][h] = e.v[n][h] + (s.v[n][h] - e.v[n][h]) * c, this.pv.i[n][h] = e.i[n][h] + (s.i[n][h] - e.i[n][h]) * c, this.pv.o[n][h] = e.o[n][h] + (s.o[n][h] - e.o[n][h]) * c, this.pv.v[n][h] = e.v[n][h] + (s.v[n][h] - e.v[n][h]) * c)
            }
            this.lastFrame = t
        }

        function a(t, e) {
            this.getExpression = ExpressionManager.initiateExpression, e.x && (this.k = !0, this.x = !0, this.getValue && (this.getPreValue = this.getValue), this.getValue = this.getExpression(t, e))
        }

        function r(t, e, s) {
            this.mult = s, this.v = s ? e.k * s : e.k, this.pv = e.k, this.mdf = !1, this.comp = t.comp, this.k = !1, a.bind(this)(t, e)
        }

        function n(t, e, s) {
            this.mult = s, this.data = e, this.mdf = !1, this.comp = t.comp, this.k = !1, a.bind(this)(t, e), this.v = new Array(e.k.length), this.pv = new Array(e.k.length), this.lastValue = new Array(e.k.length);
            var i, r = e.k.length;
            for (i = 0; r > i; i += 1) this.v[i] = s ? e.k[i] * s : e.k[i], this.pv[i] = e.k[i]
        }

        function o(i, r, n) {
            this.keyframes = r.k, this.offsetTime = i.data.st, this.lastValue = -99999, this.lastPValue = -99999, this.frameId = -1, this.k = !0, this.data = r, this.mult = n, this.elem = i, this.comp = i.comp, this.lastFrame = y, this.v = n ? r.k[0].s[0] * n : r.k[0].s[0], this.pv = r.k[0].s[0], this.getValue = s, this.getValueAtTime = t, this.getVelocityAtTime = e, a.bind(this)(i, r)
        }

        function h(i, r, n) {
            var o, h, l, p, m, f = r.k.length;
            for (o = 0; f - 1 > o; o += 1) r.k[o].to && r.k[o].s && r.k[o].e && (h = r.k[o].s, l = r.k[o].e, p = r.k[o].to, m = r.k[o].ti, (2 == h.length && bez.pointOnLine2D(h[0], h[1], l[0], l[1], h[0] + p[0], h[1] + p[1]) && bez.pointOnLine2D(h[0], h[1], l[0], l[1], l[0] + m[0], l[1] + m[1]) || bez.pointOnLine3D(h[0], h[1], h[2], l[0], l[1], l[2], h[0] + p[0], h[1] + p[1], h[2] + p[2]) && bez.pointOnLine3D(h[0], h[1], h[2], l[0], l[1], l[2], l[0] + m[0], l[1] + m[1], l[2] + m[2])) && (r.k[o].to = null, r.k[o].ti = null));
            this.keyframes = r.k, this.offsetTime = i.data.st, this.k = !0, this.mult = n, this.elem = i, this.comp = i.comp, this.getValue = s, this.getValueAtTime = t, this.getVelocityAtTime = e, this.frameId = -1, this.v = new Array(r.k[0].s.length), this.pv = new Array(r.k[0].s.length), this.lastValue = new Array(r.k[0].s.length), this.lastPValue = new Array(r.k[0].s.length), this.lastFrame = y, a.bind(this)(i, r)
        }

        function l(t, e, s, i, a) {
            var l;
            if (2 === s) l = new v(t, e, a);
            else if (7 === s) l = new P(t, e, a);
            else if (e.k.length)
                if ("number" == typeof e.k[0]) l = new n(t, e, i);
                else switch (s) {
                    case 0:
                        l = new o(t, e, i);
                        break;
                    case 1:
                        l = new h(t, e, i)
                } else l = new r(t, e, i);
            return (l.k || l.x) && a.push(l), l
        }

        function p() {
            return this.v
        }

        function m(t, e, s) {
            this.comp = t.comp, this.k = !1, this.mdf = !1, this.closed = 3 === s ? e.cl : e.closed, this.numNodes = 3 === s ? e.pt.k.v.length : e.ks.k.v.length, this.v = 3 === s ? e.pt.k : e.ks.k;
            var i = 3 === s ? e.pt : e.ks;
            this.getValue = p, this.pv = this.v, a.bind(this)(t, i)
        }

        function f(t, e, s) {
            this.comp = t.comp, this.offsetTime = t.data.st, this.getValue = i, this.keyframes = 3 === s ? e.pt.k : e.ks.k, this.k = !0, this.closed = 3 === s ? e.cl : e.closed;
            var r, n = this.keyframes[0].s[0].i.length,
                o = this.keyframes[0].s[0].i[0].length;
            for (this.numNodes = n, this.v = {
                    i: new Array(n),
                    o: new Array(n),
                    v: new Array(n)
                }, this.pv = {
                    i: new Array(n),
                    o: new Array(n),
                    v: new Array(n)
                }, r = 0; n > r; r += 1) this.v.i[r] = new Array(o), this.v.o[r] = new Array(o), this.v.v[r] = new Array(o), this.pv.i[r] = new Array(o), this.pv.o[r] = new Array(o), this.pv.v[r] = new Array(o);
            this.lastFrame = y;
            var h = 3 === s ? e.pt : e.ks;
            a.bind(this)(t, h)
        }

        function d(t, e, s, i, a) {
            var r;
            if (3 === s || 4 === s) {
                var n = 3 === s ? e.pt.k : e.ks.k;
                r = n.length ? new f(t, e, s) : new m(t, e, s)
            } else 5 === s ? r = new E(t, e) : 6 === s ? r = new g(t, e) : 7 === s && (r = new b(t, e));
            var o = !1;
            if (a)
                for (var h = 0, l = a.length; l > h;) {
                    if (!a[h].closed) {
                        o = !0;
                        break
                    }
                    h += 1
                }
            return o && (r = new k(r, a)), r.k && i.push(r), r
        }

        function c(t, e, s, i) {
            return new S(t, e, s, i)
        }

        function u(t, e, s) {
            switch (e.t) {
                case 0:
                    return new x(t, e, s);
                case 1:
                    return new C(t, e)
            }
        }
        var y = -999999,
            v = function() {
                function t() {
                    return this.p.k && this.getValue(), this.p.pv
                }

                function e() {
                    return this.a.k && this.getValue(), this.a.pv
                }

                function s() {
                    return this.or.k && this.getValue(), this.or.pv
                }

                function i() {
                    return this.r.k && this.getValue(), this.r.pv
                }

                function a() {
                    return this.s.k && this.getValue(), this.s.pv
                }

                function r() {
                    return this.o.k && this.o.getValue(), this.o.pv
                }

                function n() {
                    return this.sk.k && this.sk.getValue(), this.sk.pv
                }

                function o() {
                    return this.sa.k && this.sa.getValue(), this.sa.pv
                }

                function h(t, e) {
                    var s, i = this.dynamicProperties.length;
                    if (e) {
                        for (s = 0; i > s; s += 1) this.dynamicProperties[s].getValue(), this.dynamicProperties[s].mdf && (this.mdf = !0);
                        this.a && t.translate(-this.a.v[0], -this.a.v[1], this.a.v[2]), this.s && t.scale(this.s.v[0], this.s.v[1], this.s.v[2]), this.r ? t.rotate(-this.r.v) : t.rotateZ(-this.rz.v).rotateY(this.ry.v).rotateX(this.rx.v).rotateZ(-this.or.v[2]).rotateY(this.or.v[1]).rotateX(this.or.v[0]), this.data.p.s ? this.data.p.z ? t.translate(this.px.v, this.py.v, -this.pz.v) : t.translate(this.px.v, this.py.v, 0) : t.translate(this.p.v[0], this.p.v[1], -this.p.v[2])
                    } else this.a && t.translate(-this.a.pv[0], -this.a.pv[1], this.a.pv[2]), this.s && t.scale(this.s.pv[0], this.s.pv[1], this.s.pv[2]), this.r ? t.rotate(-this.r.pv) : t.rotateZ(-this.rz.pv).rotateY(this.ry.pv).rotateX(this.rx.pv).rotateZ(-this.or.pv[2]).rotateY(this.or.pv[1]).rotateX(this.or.pv[0]), this.data.p.s ? this.data.p.z ? t.translate(this.px.pv, this.py.pv, -this.pz.pv) : t.translate(this.px.pv, this.py.pv, 0) : t.translate(this.p.pv[0], this.p.pv[1], -this.p.pv[2])
                }

                function p() {
                    if (this.elem.globalData.frameId !== this.frameId) {
                        this.mdf = !1, this.frameId = this.elem.globalData.frameId;
                        var t, e = this.dynamicProperties.length;
                        for (t = 0; e > t; t += 1) this.dynamicProperties[t].getValue(), this.dynamicProperties[t].mdf && (this.mdf = !0);
                        this.mdf && (this.v.reset(), this.a && this.v.translate(-this.a.v[0], -this.a.v[1], this.a.v[2]), this.s && this.v.scale(this.s.v[0], this.s.v[1], this.s.v[2]), this.sk && this.v.skewFromAxis(-this.sk.v, this.sa.v), this.r ? this.v.rotate(-this.r.v) : this.v.rotateZ(-this.rz.v).rotateY(this.ry.v).rotateX(this.rx.v).rotateZ(-this.or.v[2]).rotateY(this.or.v[1]).rotateX(this.or.v[0]), this.data.p.s ? this.data.p.z ? this.v.translate(this.px.v, this.py.v, -this.pz.v) : this.v.translate(this.px.v, this.py.v, 0) : this.v.translate(this.p.v[0], this.p.v[1], -this.p.v[2]))
                    }
                }

                function m() {
                    this.inverted = !0, this.iv = new Matrix, this.k || (this.data.p.s ? this.iv.translate(this.px.v, this.py.v, -this.pz.v) : this.iv.translate(this.p.v[0], this.p.v[1], -this.p.v[2]), this.r ? this.iv.rotate(-this.r.v) : this.iv.rotateX(-this.rx.v).rotateY(-this.ry.v).rotateZ(this.rz.v), this.s && this.iv.scale(this.s.v[0], this.s.v[1], 1), this.a && this.iv.translate(-this.a.v[0], -this.a.v[1], this.a.v[2]))
                }
                return function(f, d, c) {
                    this.elem = f, this.frameId = -1, this.dynamicProperties = [], this.mdf = !1, this.data = d, this.getValue = p, this.applyToMatrix = h, this.setInverted = m, this.v = new Matrix, d.p.s ? (this.px = l(f, d.p.x, 0, 0, this.dynamicProperties), this.py = l(f, d.p.y, 0, 0, this.dynamicProperties), d.p.z && (this.pz = l(f, d.p.z, 0, 0, this.dynamicProperties))) : this.p = l(f, d.p, 1, 0, this.dynamicProperties), d.r ? this.r = l(f, d.r, 0, degToRads, this.dynamicProperties) : d.rx && (this.rx = l(f, d.rx, 0, degToRads, this.dynamicProperties), this.ry = l(f, d.ry, 0, degToRads, this.dynamicProperties), this.rz = l(f, d.rz, 0, degToRads, this.dynamicProperties), this.or = l(f, d.or, 0, degToRads, this.dynamicProperties)), d.sk && (this.sk = l(f, d.sk, 0, degToRads, this.dynamicProperties), this.sa = l(f, d.sa, 0, degToRads, this.dynamicProperties)), d.a && (this.a = l(f, d.a, 1, 0, this.dynamicProperties)), d.s && (this.s = l(f, d.s, 1, .01, this.dynamicProperties)), this.o = d.o ? l(f, d.o, 0, .01, c) : {
                        mdf: !1,
                        v: 1
                    }, this.dynamicProperties.length ? c.push(this) : (this.a && this.v.translate(-this.a.v[0], -this.a.v[1], this.a.v[2]), this.s && this.v.scale(this.s.v[0], this.s.v[1], this.s.v[2]), this.sk && this.v.skewFromAxis(-this.sk.v, this.sa.v), this.r ? this.v.rotate(-this.r.v) : this.v.rotateZ(-this.rz.v).rotateY(this.ry.v).rotateX(this.rx.v).rotateZ(-this.or.v[2]).rotateY(this.or.v[1]).rotateX(this.or.v[0]), this.data.p.s ? d.p.z ? this.v.translate(this.px.v, this.py.v, -this.pz.v) : this.v.translate(this.px.v, this.py.v, 0) : this.v.translate(this.p.v[0], this.p.v[1], -this.p.v[2])), Object.defineProperty(this, "position", {
                        get: t
                    }), Object.defineProperty(this, "orientation", {
                        get: s
                    }), Object.defineProperty(this, "anchorPoint", {
                        get: e
                    }), Object.defineProperty(this, "rotation", {
                        get: i
                    }), Object.defineProperty(this, "scale", {
                        get: a
                    }), Object.defineProperty(this, "opacity", {
                        get: r
                    }), Object.defineProperty(this, "skew", {
                        get: n
                    }), Object.defineProperty(this, "skewAxis", {
                        get: o
                    })
                }
            }(),
            g = function() {
                function t() {
                    var t = this.p.v[0],
                        e = this.p.v[1],
                        i = this.s.v[0] / 2,
                        a = this.s.v[1] / 2;
                    2 !== this.d && 3 !== this.d ? (this.v.v[0] = [t, e - a], this.v.i[0] = [t - i * s, e - a], this.v.o[0] = [t + i * s, e - a], this.v.v[1] = [t + i, e], this.v.i[1] = [t + i, e - a * s], this.v.o[1] = [t + i, e + a * s], this.v.v[2] = [t, e + a], this.v.i[2] = [t + i * s, e + a], this.v.o[2] = [t - i * s, e + a], this.v.v[3] = [t - i, e], this.v.i[3] = [t - i, e + a * s], this.v.o[3] = [t - i, e - a * s]) : (this.v.v[0] = [t, e - a], this.v.o[0] = [t - i * s, e - a], this.v.i[0] = [t + i * s, e - a], this.v.v[1] = [t - i, e], this.v.o[1] = [t - i, e + a * s], this.v.i[1] = [t - i, e - a * s], this.v.v[2] = [t, e + a], this.v.o[2] = [t + i * s, e + a], this.v.i[2] = [t - i * s, e + a], this.v.v[3] = [t + i, e], this.v.o[3] = [t + i, e - a * s], this.v.i[3] = [t + i, e + a * s])
                }

                function e(t) {
                    var e, s = this.dynamicProperties.length;
                    if (this.elem.globalData.frameId !== this.frameId) {
                        for (this.mdf = !1, this.frameId = this.elem.globalData.frameId, e = 0; s > e; e += 1) this.dynamicProperties[e].getValue(t), this.dynamicProperties[e].mdf && (this.mdf = !0);
                        this.mdf && this.convertEllToPath()
                    }
                }
                var s = .5519;
                return function(s, i) {
                    this.v = {
                        v: new Array(4),
                        i: new Array(4),
                        o: new Array(4),
                        c: !0
                    }, this.numNodes = 4, this.d = i.d, this.dynamicProperties = [], i.closed = !0, this.closed = !0, this.elem = s, this.comp = s.comp, this.frameId = -1, this.mdf = !1, this.getValue = e, this.convertEllToPath = t, this.p = l(s, i.p, 1, 0, this.dynamicProperties), this.s = l(s, i.s, 1, 0, this.dynamicProperties), this.dynamicProperties.length ? this.k = !0 : this.convertEllToPath()
                }
            }(),
            b = function() {
                function t() {
                    var t = Math.floor(this.pt.v),
                        e = 2 * Math.PI / t;
                    this.v.v.length = t, this.v.i.length = t, this.v.o.length = t;
                    var s, i = this.or.v,
                        a = this.os.v,
                        r = 2 * Math.PI * i / (4 * t),
                        n = -Math.PI / 2,
                        o = 3 === this.data.d ? -1 : 1;
                    for (n += this.r.v, s = 0; t > s; s += 1) {
                        var h = i * Math.cos(n),
                            l = i * Math.sin(n),
                            p = 0 === h && 0 === l ? 0 : l / Math.sqrt(h * h + l * l),
                            m = 0 === h && 0 === l ? 0 : -h / Math.sqrt(h * h + l * l);
                        h += +this.p.v[0], l += +this.p.v[1], this.v.v[s] = [h, l], this.v.i[s] = [h + p * r * a * o, l + m * r * a * o], this.v.o[s] = [h - p * r * a * o, l - m * r * a * o], n += e * o
                    }
                    this.numNodes = t
                }

                function e() {
                    var t = 2 * Math.floor(this.pt.v),
                        e = 2 * Math.PI / t;
                    this.v.v.length = t, this.v.i.length = t, this.v.o.length = t;
                    var s, i, a, r, n = !0,
                        o = this.or.v,
                        h = this.ir.v,
                        l = this.os.v,
                        p = this.is.v,
                        m = 2 * Math.PI * o / (2 * t),
                        f = 2 * Math.PI * h / (2 * t),
                        d = -Math.PI / 2;
                    d += this.r.v;
                    var c = 3 === this.data.d ? -1 : 1;
                    for (s = 0; t > s; s += 1) {
                        i = n ? o : h, a = n ? l : p, r = n ? m : f;
                        var u = i * Math.cos(d),
                            y = i * Math.sin(d),
                            v = 0 === u && 0 === y ? 0 : y / Math.sqrt(u * u + y * y),
                            g = 0 === u && 0 === y ? 0 : -u / Math.sqrt(u * u + y * y);
                        u += +this.p.v[0], y += +this.p.v[1], this.v.v[s] = [u, y], this.v.i[s] = [u + v * r * a * c, y + g * r * a * c], this.v.o[s] = [u - v * r * a * c, y - g * r * a * c], n = !n, d += e * c
                    }
                    this.numNodes = t
                }

                function s() {
                    if (this.elem.globalData.frameId !== this.frameId) {
                        this.mdf = !1, this.frameId = this.elem.globalData.frameId;
                        var t, e = this.dynamicProperties.length;
                        for (t = 0; e > t; t += 1) this.dynamicProperties[t].getValue(), this.dynamicProperties[t].mdf && (this.mdf = !0);
                        this.mdf && this.convertToPath()
                    }
                }
                return function(i, a) {
                    this.v = {
                        v: [],
                        i: [],
                        o: [],
                        c: !0
                    }, this.elem = i, this.comp = i.comp, this.data = a, this.frameId = -1, this.d = a.d, this.dynamicProperties = [], this.mdf = !1, a.closed = !0, this.closed = !0, this.getValue = s, 1 === a.sy ? (this.ir = l(i, a.ir, 0, 0, this.dynamicProperties), this.is = l(i, a.is, 0, .01, this.dynamicProperties), this.convertToPath = e) : this.convertToPath = t, this.pt = l(i, a.pt, 0, 0, this.dynamicProperties), this.p = l(i, a.p, 1, 0, this.dynamicProperties), this.r = l(i, a.r, 0, degToRads, this.dynamicProperties), this.or = l(i, a.or, 0, 0, this.dynamicProperties), this.os = l(i, a.os, 0, .01, this.dynamicProperties), this.dynamicProperties.length ? this.k = !0 : this.convertToPath()
                }
            }(),
            E = function() {
                function t(t) {
                    if (this.elem.globalData.frameId !== this.frameId) {
                        this.mdf = !1, this.frameId = this.elem.globalData.frameId;
                        var e, s = this.dynamicProperties.length;
                        for (e = 0; s > e; e += 1) this.dynamicProperties[e].getValue(t), this.dynamicProperties[e].mdf && (this.mdf = !0);
                        this.mdf && this.convertRectToPath()
                    }
                }

                function e() {
                    var t = this.p.v[0],
                        e = this.p.v[1],
                        s = this.s.v[0] / 2,
                        i = this.s.v[1] / 2,
                        a = bm_min(s, i, this.r.v),
                        r = a * (1 - .5519);
                    2 === this.d || 1 === this.d ? (this.v.v[0] = [t + s, e - i + a], this.v.o[0] = this.v.v[0], this.v.i[0] = [t + s, e - i + r], this.v.v[1] = [t + s, e + i - a], this.v.o[1] = [t + s, e + i - r], this.v.i[1] = this.v.v[1], this.v.v[2] = [t + s - a, e + i], this.v.o[2] = this.v.v[2], this.v.i[2] = [t + s - r, e + i], this.v.v[3] = [t - s + a, e + i], this.v.o[3] = [t - s + r, e + i], this.v.i[3] = this.v.v[3], this.v.v[4] = [t - s, e + i - a], this.v.o[4] = this.v.v[4], this.v.i[4] = [t - s, e + i - r], this.v.v[5] = [t - s, e - i + a], this.v.o[5] = [t - s, e - i + r], this.v.i[5] = this.v.v[5], this.v.v[6] = [t - s + a, e - i], this.v.o[6] = this.v.v[6], this.v.i[6] = [t - s + r, e - i], this.v.v[7] = [t + s - a, e - i], this.v.o[7] = [t + s - r, e - i], this.v.i[7] = this.v.v[7]) : (this.v.v[0] = [t + s, e - i + a], this.v.o[0] = [t + s, e - i + r], this.v.i[0] = this.v.v[0], this.v.v[1] = [t + s - a, e - i], this.v.o[1] = this.v.v[1], this.v.i[1] = [t + s - r, e - i], this.v.v[2] = [t - s + a, e - i], this.v.o[2] = [t - s + r, e - i], this.v.i[2] = this.v.v[2], this.v.v[3] = [t - s, e - i + a], this.v.o[3] = this.v.v[3], this.v.i[3] = [t - s, e - i + r], this.v.v[4] = [t - s, e + i - a], this.v.o[4] = [t - s, e + i - r], this.v.i[4] = this.v.v[4], this.v.v[5] = [t - s + a, e + i], this.v.o[5] = this.v.v[5], this.v.i[5] = [t - s + r, e + i], this.v.v[6] = [t + s - a, e + i], this.v.o[6] = [t + s - r, e + i], this.v.i[6] = this.v.v[6], this.v.v[7] = [t + s, e + i - a], this.v.o[7] = this.v.v[7], this.v.i[7] = [t + s, e + i - r])
                }
                return function(s, i) {
                    this.v = {
                        v: new Array(8),
                        i: new Array(8),
                        o: new Array(8),
                        c: !0
                    }, this.numNodes = 8, this.elem = s, this.comp = s.comp, this.frameId = -1, this.d = i.d, this.dynamicProperties = [], this.mdf = !1, i.closed = !0, this.closed = !0, this.getValue = t, this.convertRectToPath = e, this.p = l(s, i.p, 1, 0, this.dynamicProperties), this.s = l(s, i.s, 1, 0, this.dynamicProperties), this.r = l(s, i.r, 0, 0, this.dynamicProperties), this.dynamicProperties.length ? this.k = !0 : this.convertRectToPath()
                }
            }(),
            P = function() {
                function t(t) {
                    if (this.elem.globalData.frameId !== this.frameId || t) {
                        this.mdf = !1, this.frameId = this.elem.globalData.frameId;
                        var e, s = this.dynamicProperties.length;
                        for (e = 0; s > e; e += 1) this.dynamicProperties[e].getValue(), this.dynamicProperties[e].mdf && (this.mdf = !0);
                        if (this.mdf || t) {
                            var i = this.o.v % 360 / 360;
                            if (0 === i && 0 === this.s.v && 1 == this.e.v) return void(this.isTrimming = !1);
                            this.isTrimming = !0, 0 > i && (i += 1);
                            var a = this.s.v + i,
                                r = this.e.v + i;
                            if (a > r) {
                                var n = a;
                                a = r, r = n
                            }
                            this.sValue = a, this.eValue = r, this.oValue = i
                        }
                    }
                }
                return function(e, s) {
                    this.elem = e, this.frameId = -1, this.dynamicProperties = [], this.sValue = 0, this.eValue = 0, this.oValue = 0, this.mdf = !1, this.getValue = t, this.k = !1, this.isTrimming = !1, this.comp = e.comp,
                        this.s = l(e, s.s, 0, .01, this.dynamicProperties), this.e = l(e, s.e, 0, .01, this.dynamicProperties), this.o = l(e, s.o, 0, 0, this.dynamicProperties), this.dynamicProperties.length ? this.k = !0 : this.getValue(!0)
                }
            }(),
            k = function() {
                function t(t, e) {
                    this.totalLength = 0;
                    var s, i = t.v,
                        a = t.o,
                        r = t.i,
                        n = i.length;
                    for (s = 0; n - 1 > s; s += 1) this.lengths[s] = bez.getBezierLength(i[s], i[s + 1], a[s], r[s + 1]), this.totalLength += this.lengths[s].addedLength;
                    e && (this.lengths[s] = bez.getBezierLength(i[s], i[0], a[s], r[0]), this.totalLength += this.lengths[s].addedLength)
                }

                function e(t, e, s, i, a) {
                    this.nextO[this.segmentCount] = e, this.nextI[this.segmentCount + 1] = s, this.nextV[this.segmentCount + 1] = i, this.pathStarted ? this.nextV[this.segmentCount] = t : (this.pathStarted = !0, this.v.s[this.segmentCount] = t), this.segmentCount += 1
                }

                function s(t) {
                    this.mdf = t ? !0 : !1, this.prop.k && this.prop.getValue();
                    var e = 0,
                        s = this.trims.length;
                    for (this.pathStarted = !1; s > e;) {
                        if (this.trims[e].mdf) {
                            this.mdf = !0;
                            break
                        }
                        e += 1
                    }
                    if (this.mdf = this.prop.mdf ? !0 : this.mdf, this.mdf) {
                        this.nextO.length = 0, this.nextI.length = 0, this.nextV.length = 0, this.v.s.length = 0;
                        var i = this.prop.closed;
                        this.getSegmentsLength(this.prop.v, i);
                        var a, r, n, o, h, l, p = this.prop.v,
                            m = this.trims.length;
                        for (a = 0; m > a; a += 1)
                            if (this.trims[a].isTrimming) {
                                if (r = this.trims[a].eValue, n = this.trims[a].sValue, o = this.trims[a].oValue, r === n) return this.v.v = this.nextV, this.v.o = this.nextO, void(this.v.i = this.nextI);
                                1 >= r ? (this.segments[0].s = this.totalLength * n, this.segments[0].e = this.totalLength * r, this.segments[1].vl = !1) : n >= 1 ? (this.segments[0].s = this.totalLength * (n - 1), this.segments[0].e = this.totalLength * (r - 1), this.segments[1].vl = !1) : (this.segments[0].s = this.totalLength * n, this.segments[0].e = this.totalLength, this.segments[1].s = 0, this.segments[1].e = this.totalLength * (r - 1), this.segments[1].vl = !0), this.v.v = p.v, this.v.o = p.o, this.v.i = p.i, l = this.v.v.length;
                                var f = 0,
                                    d = 0;
                                s = this.segments[1].vl ? 2 : 1;
                                var c;
                                for (this.segmentCount = 0, e = 0; s > e; e += 1) {
                                    for (f = 0, h = 1; l > h; h++)
                                        if (d = this.lengths[h - 1].addedLength, f + d < this.segments[e].s) f += d;
                                        else {
                                            if (f > this.segments[e].e) break;
                                            this.segments[e].s <= f && this.segments[e].e >= f + d ? this.addSegment(this.v.v[h - 1], this.v.o[h - 1], this.v.i[h], this.v.v[h], this.lengths[h - 1]) : (c = bez.getNewSegment(this.v.v[h - 1], this.v.v[h], this.v.o[h - 1], this.v.i[h], (this.segments[e].s - f) / d, (this.segments[e].e - f) / d, this.lengths[h - 1]), this.addSegment(c.pt1, c.pt3, c.pt4, c.pt2)), f += d
                                        }
                                    i !== !1 ? f <= this.segments[e].e && (d = this.lengths[h - 1].addedLength, this.segments[e].s <= f && this.segments[e].e >= f + d ? this.addSegment(this.v.v[h - 1], this.v.o[h - 1], this.v.i[0], this.v.v[0], this.lengths[h - 1]) : (c = bez.getNewSegment(this.v.v[h - 1], this.v.v[0], this.v.o[h - 1], this.v.i[0], (this.segments[e].s - f) / d, (this.segments[e].e - f) / d, this.lengths[h - 1]), this.addSegment(c.pt1, c.pt3, c.pt4, c.pt2))) : this.pathStarted = !1
                                }
                                i = !1
                            } else this.v.v = p.v, this.v.o = p.o, this.v.i = p.i;
                        this.nextV.length ? (this.v.v = this.nextV, this.v.o = this.nextO, this.v.i = this.nextI) : this.v.s.length = 0, this.v.c = i
                    }
                }
                return function(i, a) {
                    this.trims = [], this.k = !1, this.mdf = !1, this.ty = "tm", this.pathStarted = !1, this.segments = [{
                        s: 0,
                        e: 0,
                        vl: !0
                    }, {
                        s: 0,
                        e: 0,
                        vl: !1
                    }], this.nextO = [], this.nextV = [], this.nextI = [], this.v = {
                        i: null,
                        o: null,
                        v: null,
                        s: [],
                        c: !1
                    };
                    var r, n = a.length;
                    for (r = 0; n > r; r += 1) a[r].closed || (this.k = a[r].trimProp.k ? !0 : this.k, this.trims.push(a[r].trimProp));
                    this.prop = i, this.prop.numNodes ? (n = this.prop.numNodes - 1, n += this.prop.closed ? 1 : 0, this.lengths = new Array(n)) : this.lengths = [], this.k = i.k ? !0 : this.k, this.totalLength = 0, this.getValue = s, this.addSegment = e, this.getSegmentsLength = t, this.k || (this.prop.getValue(), this.getValue(!0))
                }
            }(),
            S = function() {
                function t(t) {
                    var e = 0,
                        s = this.dataProps.length;
                    if (this.elem.globalData.frameId !== this.frameId || t) {
                        for (this.mdf = !1, this.frameId = this.elem.globalData.frameId; s > e;) {
                            if (this.dataProps[e].p.mdf) {
                                this.mdf = !0;
                                break
                            }
                            e += 1
                        }
                        if (this.mdf || t)
                            for ("svg" === this.renderer && (this.dasharray = ""), e = 0; s > e; e += 1) "o" != this.dataProps[e].n ? "svg" === this.renderer ? this.dasharray += " " + this.dataProps[e].p.v : this.dasharray[e] = this.dataProps[e].p.v : this.dashoffset = this.dataProps[e].p.v
                    }
                }
                return function(e, s, i, a) {
                    this.elem = e, this.frameId = -1, this.dataProps = new Array(s.length), this.renderer = i, this.mdf = !1, this.k = !1, this.dasharray = "svg" === this.renderer ? "" : new Array(s.length - 1), this.dashoffset = 0;
                    var r, n, o = s.length;
                    for (r = 0; o > r; r += 1) n = l(e, s[r].v, 0, 0, a), this.k = n.k ? !0 : this.k, this.dataProps[r] = {
                        n: s[r].n,
                        p: n
                    };
                    this.getValue = t, this.k ? a.push(this) : this.getValue(!0)
                }
            }(),
            C = function() {
                function t(t, e) {
                    return this.textIndex = t + 1, this.textTotal = e, this.getValue(), this.v
                }
                return function(e, s) {
                    this.pv = 1, this.comp = e.comp, this.mult = .01, this.type = "textSelector", this.textTotal = s.totalChars, this.selectorValue = 100, this.lastValue = [1, 1, 1], a.bind(this)(e, s), this.getMult = t
                }
            }(),
            x = function() {
                function t() {
                    if (this.dynamicProperties.length) {
                        var t, e = this.dynamicProperties.length;
                        for (t = 0; e > t; t += 1) this.dynamicProperties[t].getValue()
                    }
                    var s = this.data.totalChars,
                        i = 2 === this.data.r ? 1 : 100 / s,
                        a = this.o.v / i,
                        r = this.s.v / i + a,
                        n = this.e.v / i + a;
                    if (r > n) {
                        var o = r;
                        r = n, n = o
                    }
                    this.finalS = r, this.finalE = n
                }

                function e(t) {
                    var e = BezierFactory.getBezierEasing(this.ne.v / 100, 0, 1 - this.xe.v / 100, 1).get,
                        r = 0,
                        n = this.finalS,
                        o = this.finalE,
                        h = this.data.sh;
                    if (2 == h) r = o === n ? t >= o ? 1 : 0 : s(0, i(.5 / (o - n) + (t - n) / (o - n), 1)), r = e(r);
                    else if (3 == h) r = o === n ? t >= o ? 0 : 1 : 1 - s(0, i(.5 / (o - n) + (t - n) / (o - n), 1)), r = e(r);
                    else if (4 == h) o === n ? r = t >= o ? 0 : 1 : (r = s(0, i(.5 / (o - n) + (t - n) / (o - n), 1)), .5 > r ? r *= 2 : r = 1 - r);
                    else if (5 == h)
                        if (o === n) r = t >= o ? 0 : 1;
                        else {
                            var l = o - n;
                            r = -4 / (l * l) * t * t + 4 / l * t
                        }
                    else 6 == h ? r = o === n ? t >= o ? 0 : 1 : (1 + (Math.cos(Math.PI + 2 * Math.PI * (t - n) / (o - n)) + 0)) / 2 : t >= a(n) && (r = 0 > t - n ? 1 - (n - t) : s(0, i(o - t, 1)));
                    return r * this.a.v
                }
                var s = Math.max,
                    i = Math.min,
                    a = Math.floor;
                return function(s, i, a) {
                    this.mdf = !1, this.k = !1, this.data = i, this.dynamicProperties = [], this.getValue = t, this.getMult = e, this.comp = s.comp, this.finalS = 0, this.finalE = 0, this.s = l(s, i.s || {
                        k: 0
                    }, 0, 0, this.dynamicProperties), this.e = "e" in i ? l(s, i.e, 0, 0, this.dynamicProperties) : {
                        v: 2 === i.r ? i.totalChars : 100
                    }, this.o = l(s, i.o || {
                        k: 0
                    }, 0, 0, this.dynamicProperties), this.xe = l(s, i.xe || {
                        k: 0
                    }, 0, 0, this.dynamicProperties), this.ne = l(s, i.ne || {
                        k: 0
                    }, 0, 0, this.dynamicProperties), this.a = l(s, i.a, 0, .01, this.dynamicProperties), this.dynamicProperties.length ? a.push(this) : this.getValue()
                }
            }(),
            w = {};
        return w.getProp = l, w.getShapeProp = d, w.getDashProp = c, w.getTextSelectorProp = u, w
    }();
    SVGRenderer.prototype.createItem = function(t, e, s, i) {
        switch (t.ty) {
            case 2:
                return this.createImage(t, e, s, i);
            case 0:
                return this.createComp(t, e, s, i);
            case 1:
                return this.createSolid(t, e, s, i);
            case 4:
                return this.createShape(t, e, s, i);
            case 5:
                return this.createText(t, e, s, i);
            case 99:
                return this.createPlaceHolder(t, e)
        }
        return this.createBase(t, e, s)
    }, SVGRenderer.prototype.buildItems = function(t, e, s, i, a) {
        var r, n = t.length;
        s || (s = this.elements), e || (e = this.animationItem.container), i || (i = this);
        var o;
        for (r = n - 1; r >= 0; r--) s[r] = this.createItem(t[r], e, i, a), 0 === t[r].ty && (o = [], this.buildItems(t[r].layers, s[r].getDomElement(), o, s[r], s[r].placeholder), s[r].setElements(o)), t[r].td && s[r + 1].setMatte(s[r].layerId)
    }, SVGRenderer.prototype.includeLayers = function(t, e, s) {
        var i, a = t.length;
        s || (s = this.elements), e || (e = this.animationItem.container);
        var r, n, o, h = s.length;
        for (i = 0; a > i; i += 1)
            for (r = 0; h > r;) {
                if (s[r].data.id == t[i].id) {
                    o = s[r], s[r] = this.createItem(t[i], e, this, o), 0 === t[i].ty && (n = [], this.buildItems(t[i].layers, s[r].getDomElement(), n, s[r], s[i].placeholder), s[r].setElements(n));
                    break
                }
                r += 1
            }
        for (i = 0; a > i; i += 1) t[i].td && s[i + 1].setMatte(s[i].layerId)
    }, SVGRenderer.prototype.createBase = function(t, e, s, i) {
        return new SVGBaseElement(t, e, this.globalData, s, i)
    }, SVGRenderer.prototype.createPlaceHolder = function(t, e) {
        return new PlaceHolderElement(t, e, this.globalData)
    }, SVGRenderer.prototype.createShape = function(t, e, s, i) {
        return new IShapeElement(t, e, this.globalData, s, i)
    }, SVGRenderer.prototype.createText = function(t, e, s, i) {
        return new SVGTextElement(t, e, this.globalData, s, i)
    }, SVGRenderer.prototype.createImage = function(t, e, s, i) {
        return new IImageElement(t, e, this.globalData, s, i)
    }, SVGRenderer.prototype.createComp = function(t, e, s, i) {
        return new ICompElement(t, e, this.globalData, s, i)
    }, SVGRenderer.prototype.createSolid = function(t, e, s, i) {
        return new ISolidElement(t, e, this.globalData, s, i)
    }, SVGRenderer.prototype.configAnimation = function(t) {
        this.animationItem.container = document.createElementNS(svgNS, "svg"), this.animationItem.container.setAttribute("xmlns", "http://www.w3.org/2000/svg"), this.animationItem.container.setAttribute("width", t.w), this.animationItem.container.setAttribute("height", t.h), this.animationItem.container.setAttribute("viewBox", "0 0 " + t.w + " " + t.h), this.animationItem.container.setAttribute("preserveAspectRatio", "xMidYMid meet"), this.animationItem.container.style.width = "100%", this.animationItem.container.style.height = "100%", this.animationItem.container.style.transform = "translate3d(0,0,0)", this.animationItem.container.style.transformOrigin = this.animationItem.container.style.mozTransformOrigin = this.animationItem.container.style.webkitTransformOrigin = this.animationItem.container.style["-webkit-transform"] = "0px 0px 0px", this.animationItem.wrapper.appendChild(this.animationItem.container);
        var e = document.createElementNS(svgNS, "defs");
        this.globalData.defs = e, this.animationItem.container.appendChild(e), this.globalData.getAssetData = this.animationItem.getAssetData.bind(this.animationItem), this.globalData.getPath = this.animationItem.getPath.bind(this.animationItem), this.globalData.elementLoaded = this.animationItem.elementLoaded.bind(this.animationItem), this.globalData.frameId = 0, this.globalData.compSize = {
            w: t.w,
            h: t.h
        }, this.globalData.frameRate = t.fr;
        var s = document.createElementNS(svgNS, "clipPath"),
            i = document.createElementNS(svgNS, "rect");
        i.setAttribute("width", t.w), i.setAttribute("height", t.h), i.setAttribute("x", 0), i.setAttribute("y", 0);
        var a = "animationMask_" + randomString(10);
        s.setAttribute("id", a), s.appendChild(i);
        var r = document.createElementNS(svgNS, "g");
        r.setAttribute("clip-path", "url(#" + a + ")"), this.animationItem.container.appendChild(r), e.appendChild(s), this.animationItem.container = r, this.layers = t.layers, this.globalData.fontManager = new FontManager, this.globalData.fontManager.addChars(t.chars), this.globalData.fontManager.addFonts(t.fonts, e)
    }, SVGRenderer.prototype.buildStage = function(t, e, s) {
        var i, a, r = e.length;
        for (s || (s = this.elements), i = r - 1; i >= 0; i--) a = e[i], void 0 !== a.parent && this.buildItemParenting(a, s[i], e, a.parent, s, !0), 0 === a.ty && this.buildStage(s[i].getComposingElement(), a.layers, s[i].getElements())
    }, SVGRenderer.prototype.buildItemParenting = function(t, e, s, i, a, r) {
        t.parents || (t.parents = []), r && e.resetHierarchy();
        for (var n = 0, o = s.length; o > n;) s[n].ind == i && (e.getHierarchy().push(a[n]), void 0 !== s[n].parent && this.buildItemParenting(t, e, s, s[n].parent, a, !1)), n += 1
    }, SVGRenderer.prototype.destroy = function() {
        this.animationItem.wrapper.innerHTML = "", this.animationItem.container = null, this.globalData.defs = null;
        var t, e = this.layers.length;
        for (t = 0; e > t; t++) this.elements[t].destroy();
        this.elements.length = 0, this.destroyed = !0
    }, SVGRenderer.prototype.updateContainerSize = function() {}, SVGRenderer.prototype.renderFrame = function(t) {
        if (this.renderedFrame != t && !this.destroyed) {
            null === t ? t = this.renderedFrame : this.renderedFrame = t, this.globalData.frameNum = t, this.globalData.frameId += 1;
            var e, s = this.layers.length;
            for (e = 0; s > e; e++) this.elements[e].prepareFrame(t - this.layers[e].st);
            for (e = 0; s > e; e++) this.elements[e].renderFrame()
        }
    }, SVGRenderer.prototype.hide = function() {
        this.animationItem.container.style.display = "none"
    }, SVGRenderer.prototype.show = function() {
        this.animationItem.container.style.display = "block"
    }, extendPrototype(ExpressionComp, SVGRenderer), CanvasRenderer.prototype.createItem = function(t, e) {
        switch (t.ty) {
            case 0:
                return this.createComp(t, e);
            case 1:
                return this.createSolid(t, e);
            case 2:
                return this.createImage(t, e);
            case 4:
                return this.createShape(t, e);
            case 5:
                return this.createText(t, e);
            case 99:
                return this.createPlaceHolder(t, e);
            default:
                return this.createBase(t, e)
        }
        return this.createBase(t, e)
    }, CanvasRenderer.prototype.buildItems = function(t, e, s) {
        e || (e = this.elements), s || (s = this);
        var i, a = t.length;
        for (i = 0; a > i; i++)
            if (e[i] = this.createItem(t[i], s), 0 === t[i].ty) {
                var r = [];
                this.buildItems(t[i].layers, r, e[i]), e[e.length - 1].setElements(r)
            }
    }, CanvasRenderer.prototype.includeLayers = function(t, e, s) {
        var i, a = t.length;
        s || (s = this.elements);
        var r, n, o = s.length;
        for (i = 0; a > i; i += 1)
            for (r = 0; o > r;) {
                if (s[r].data.id == t[i].id) {
                    s[r] = this.createItem(t[i], this), 0 === t[i].ty && (n = [], this.buildItems(t[i].layers, n, s[r]), s[r].setElements(n));
                    break
                }
                r += 1
            }
    }, CanvasRenderer.prototype.createBase = function(t, e) {
        return new CVBaseElement(t, e, this.globalData)
    }, CanvasRenderer.prototype.createShape = function(t, e) {
        return new CVShapeElement(t, e, this.globalData)
    }, CanvasRenderer.prototype.createText = function(t, e) {
        return new CVTextElement(t, e, this.globalData)
    }, CanvasRenderer.prototype.createPlaceHolder = function(t) {
        return new PlaceHolderElement(t, null, this.globalData)
    }, CanvasRenderer.prototype.createImage = function(t, e) {
        return new CVImageElement(t, e, this.globalData)
    }, CanvasRenderer.prototype.createComp = function(t, e) {
        return new CVCompElement(t, e, this.globalData)
    }, CanvasRenderer.prototype.createSolid = function(t, e) {
        return new CVSolidElement(t, e, this.globalData)
    }, CanvasRenderer.prototype.ctxTransform = function(t) {
        if (1 !== t[0] || 0 !== t[1] || 0 !== t[4] || 1 !== t[5] || 0 !== t[12] || 0 !== t[13]) {
            if (!this.renderConfig.clearCanvas) return void this.canvasContext.transform(t[0], t[1], t[4], t[5], t[12], t[13]);
            this.transformMat.cloneFromProps(t), this.transformMat.transform(this.contextData.cTr.props[0], this.contextData.cTr.props[1], this.contextData.cTr.props[2], this.contextData.cTr.props[3], this.contextData.cTr.props[4], this.contextData.cTr.props[5], this.contextData.cTr.props[6], this.contextData.cTr.props[7], this.contextData.cTr.props[8], this.contextData.cTr.props[9], this.contextData.cTr.props[10], this.contextData.cTr.props[11], this.contextData.cTr.props[12], this.contextData.cTr.props[13], this.contextData.cTr.props[14], this.contextData.cTr.props[15]), this.contextData.cTr.cloneFromProps(this.transformMat.props);
            var e = this.contextData.cTr.props;
            this.canvasContext.setTransform(e[0], e[1], e[4], e[5], e[12], e[13])
        }
    }, CanvasRenderer.prototype.ctxOpacity = function(t) {
        if (1 !== t) {
            if (!this.renderConfig.clearCanvas) return void(this.canvasContext.globalAlpha *= 0 > t ? 0 : t);
            this.contextData.cO *= 0 > t ? 0 : t, this.canvasContext.globalAlpha = this.contextData.cO
        }
    }, CanvasRenderer.prototype.reset = function() {
        return this.renderConfig.clearCanvas ? (this.contextData.cArrPos = 0, this.contextData.cTr.reset(), void(this.contextData.cO = 1)) : void this.canvasContext.restore()
    }, CanvasRenderer.prototype.save = function(t) {
        if (!this.renderConfig.clearCanvas) return void this.canvasContext.save();
        t && this.canvasContext.save();
        var e = this.contextData.cTr.props;
        (null === this.contextData.saved[this.contextData.cArrPos] || void 0 === this.contextData.saved[this.contextData.cArrPos]) && (this.contextData.saved[this.contextData.cArrPos] = new Array(16));
        var s, i = this.contextData.saved[this.contextData.cArrPos];
        for (s = 0; 16 > s; s += 1) i[s] = e[s];
        this.contextData.savedOp[this.contextData.cArrPos] = this.contextData.cO, this.contextData.cArrPos += 1
    }, CanvasRenderer.prototype.restore = function(t) {
        if (!this.renderConfig.clearCanvas) return void this.canvasContext.restore();
        t && this.canvasContext.restore(), this.contextData.cArrPos -= 1;
        var e, s = this.contextData.saved[this.contextData.cArrPos],
            i = this.contextData.cTr.props;
        for (e = 0; 16 > e; e += 1) i[e] = s[e];
        this.canvasContext.setTransform(s[0], s[1], s[4], s[5], s[12], s[13]), s = this.contextData.savedOp[this.contextData.cArrPos], this.contextData.cO = s, this.canvasContext.globalAlpha = s
    }, CanvasRenderer.prototype.configAnimation = function(t) {
        this.animationItem.wrapper ? (this.animationItem.container = document.createElement("canvas"), this.animationItem.container.style.width = "100%", this.animationItem.container.style.height = "100%", this.animationItem.container.style.transformOrigin = this.animationItem.container.style.mozTransformOrigin = this.animationItem.container.style.webkitTransformOrigin = this.animationItem.container.style["-webkit-transform"] = "0px 0px 0px", this.animationItem.wrapper.appendChild(this.animationItem.container), this.canvasContext = this.animationItem.container.getContext("2d")) : this.canvasContext = this.renderConfig.context, this.globalData.canvasContext = this.canvasContext, this.globalData.renderer = this, this.globalData.isDashed = !1, this.globalData.totalFrames = Math.floor(t.tf), this.globalData.compWidth = t.w, this.globalData.compHeight = t.h, this.globalData.frameRate = t.fr, this.globalData.frameId = 0, this.layers = t.layers, this.transformCanvas = {}, this.transformCanvas.w = t.w, this.transformCanvas.h = t.h, this.updateContainerSize(), this.globalData.fontManager = new FontManager, this.globalData.fontManager.addChars(t.chars), this.globalData.fontManager.addFonts(t.fonts, document)
    }, CanvasRenderer.prototype.updateContainerSize = function() {
        var t, e;
        if (this.animationItem.wrapper && this.animationItem.container ? (t = this.animationItem.wrapper.offsetWidth, e = this.animationItem.wrapper.offsetHeight, this.animationItem.container.setAttribute("width", t * this.renderConfig.dpr), this.animationItem.container.setAttribute("height", e * this.renderConfig.dpr)) : (t = this.canvasContext.canvas.width * this.renderConfig.dpr, e = this.canvasContext.canvas.height * this.renderConfig.dpr), "fit" == this.renderConfig.scaleMode) {
            var s = t / e,
                i = this.transformCanvas.w / this.transformCanvas.h;
            i > s ? (this.transformCanvas.sx = t / (this.transformCanvas.w / this.renderConfig.dpr), this.transformCanvas.sy = t / (this.transformCanvas.w / this.renderConfig.dpr), this.transformCanvas.tx = 0, this.transformCanvas.ty = (e - this.transformCanvas.h * (t / this.transformCanvas.w)) / 2 * this.renderConfig.dpr) : (this.transformCanvas.sx = e / (this.transformCanvas.h / this.renderConfig.dpr), this.transformCanvas.sy = e / (this.transformCanvas.h / this.renderConfig.dpr), this.transformCanvas.tx = (t - this.transformCanvas.w * (e / this.transformCanvas.h)) / 2 * this.renderConfig.dpr, this.transformCanvas.ty = 0)
        } else this.transformCanvas.sx = this.renderConfig.dpr, this.transformCanvas.sy = this.renderConfig.dpr, this.transformCanvas.tx = 0, this.transformCanvas.ty = 0;
        this.transformCanvas.props = [this.transformCanvas.sx, 0, 0, 0, 0, this.transformCanvas.sy, 0, 0, 0, 0, 1, 0, this.transformCanvas.tx, this.transformCanvas.ty, 0, 1], this.globalData.cWidth = t, this.globalData.cHeight = e
    }, CanvasRenderer.prototype.buildStage = function(t, e, s) {
        s || (s = this.elements);
        var i, a, r = e.length;
        for (i = r - 1; i >= 0; i--) a = e[i], void 0 !== a.parent && this.buildItemHierarchy(a, s[i], e, a.parent, s, !0), 0 == a.ty && this.buildStage(null, a.layers, s[i].getElements())
    }, CanvasRenderer.prototype.buildItemHierarchy = function(t, e, s, i, a, r) {
        var n = 0,
            o = s.length;
        for (r && e.resetHierarchy(); o > n;) s[n].ind === i && (e.getHierarchy().push(a[n]), void 0 !== s[n].parent && this.buildItemHierarchy(t, e, s, s[n].parent, a, !1)), n += 1
    }, CanvasRenderer.prototype.destroy = function() {
        this.renderConfig.clearCanvas && (this.animationItem.wrapper.innerHTML = "");
        var t, e = this.layers.length;
        for (t = e - 1; t >= 0; t -= 1) this.elements[t].destroy();
        this.elements.length = 0, this.globalData.canvasContext = null, this.animationItem.container = null, this.destroyed = !0
    }, CanvasRenderer.prototype.renderFrame = function(t) {
        if (!(this.renderedFrame == t && this.renderConfig.clearCanvas === !0 || this.destroyed || null === t)) {
            this.renderedFrame = t, this.globalData.frameNum = t - this.animationItem.firstFrame, this.globalData.frameId += 1, this.renderConfig.clearCanvas === !0 ? (this.reset(), this.canvasContext.clearRect(0, 0, this.transformCanvas.w, this.transformCanvas.h)) : this.save(), this.ctxTransform(this.transformCanvas.props), this.canvasContext.beginPath(), this.canvasContext.rect(0, 0, this.transformCanvas.w, this.transformCanvas.h), this.canvasContext.closePath(), this.canvasContext.clip();
            var e, s = this.layers.length;
            for (e = 0; s > e; e++) this.elements[e].prepareFrame(t - this.layers[e].st);
            for (e = s - 1; e >= 0; e -= 1) this.elements[e].renderFrame();
            this.renderConfig.clearCanvas !== !0 && this.restore()
        }
    }, CanvasRenderer.prototype.hide = function() {
        this.animationItem.container.style.display = "none"
    }, CanvasRenderer.prototype.show = function() {
        this.animationItem.container.style.display = "block"
    }, extendPrototype(ExpressionComp, CanvasRenderer), HybridRenderer.prototype.createItem = function(t, e, s, i) {
        switch (t.ty) {
            case 2:
                return this.createImage(t, e, s, i);
            case 0:
                return this.createComp(t, e, s, i);
            case 1:
                return this.createSolid(t, e, s, i);
            case 4:
                return this.createShape(t, e, s, i);
            case 5:
                return this.createText(t, e, s, i);
            case 13:
                return this.createCamera(t, e, s, i);
            case 99:
                return this.createPlaceHolder(t, e)
        }
        return this.createBase(t, e, s)
    }, HybridRenderer.prototype.buildItems = function(t, e, s, i, a) {
        var r, n = t.length;
        s || (s = this.elements), i || (i = this);
        var o, h, l = !1;
        for (r = n - 1; r >= 0; r--) e ? s[r] = this.createItem(t[r], e, i, a) : t[r].ddd ? (l || (l = !0, o = this.getThreeDContainer()), s[r] = this.createItem(t[r], o, i, a)) : (l = !1, s[r] = this.createItem(t[r], this.animationItem.resizerElem, i, a)), 0 === t[r].ty && (h = [], this.buildItems(t[r].layers, s[r].getDomElement(), h, s[r], s[r].placeholder), s[r].setElements(h)), t[r].td && s[r + 1].setMatte(s[r].layerId);
        if (this.currentContainer = this.animationItem.resizerElem, !e && this.threeDElements.length)
            if (this.camera) this.camera.setup();
            else {
                var p = this.globalData.compSize.w,
                    m = this.globalData.compSize.h;
                for (n = this.threeDElements.length, r = 0; n > r; r += 1) this.threeDElements[0][r].style.perspective = this.threeDElements[0][r].style.webkitPerspective = Math.sqrt(Math.pow(p, 2) + Math.pow(m, 2)) + "px"
            }
    }, HybridRenderer.prototype.includeLayers = function(t, e, s) {
        var i, a = t.length;
        s || (s = this.elements), e || (e = this.currentContainer);
        var r, n, o, h = s.length;
        for (i = 0; a > i; i += 1)
            if (t[i].id)
                for (r = 0; h > r;) s[r].data.id == t[i].id && (o = s[r], s[r] = this.createItem(t[i], e, this, o), 0 === t[i].ty && (n = [], this.buildItems(t[i].layers, s[r].getDomElement(), n, s[r], s[i].placeholder), s[r].setElements(n))), r += 1;
            else {
                var l = this.createItem(t[i], e, this);
                s.push(l), 0 === t[i].ty && (n = [], this.buildItems(t[i].layers, l.getDomElement(), n, l), l.setElements(n))
            }
        for (i = 0; a > i; i += 1) t[i].td && s[i + 1].setMatte(s[i].layerId)
    }, HybridRenderer.prototype.createBase = function(t, e, s, i) {
        return new SVGBaseElement(t, e, this.globalData, s, i)
    }, HybridRenderer.prototype.createPlaceHolder = function(t, e) {
        return new PlaceHolderElement(t, e, this.globalData)
    }, HybridRenderer.prototype.createShape = function(t, e, s, i) {
        return s.isSvg ? new IShapeElement(t, e, this.globalData, s, i) : new HShapeElement(t, e, this.globalData, s, i)
    }, HybridRenderer.prototype.createText = function(t, e, s, i) {
        return s.isSvg ? new SVGTextElement(t, e, this.globalData, s, i) : new HTextElement(t, e, this.globalData, s, i)
    }, HybridRenderer.prototype.createCamera = function(t, e, s, i) {
        return this.camera = new HCameraElement(t, e, this.globalData, s, i), this.camera
    }, HybridRenderer.prototype.createImage = function(t, e, s, i) {
        return s.isSvg ? new IImageElement(t, e, this.globalData, s, i) : new HImageElement(t, e, this.globalData, s, i)
    }, HybridRenderer.prototype.createComp = function(t, e, s, i) {
        return s.isSvg ? new ICompElement(t, e, this.globalData, s, i) : new HCompElement(t, e, this.globalData, s, i)
    }, HybridRenderer.prototype.createSolid = function(t, e, s, i) {
        return s.isSvg ? new ISolidElement(t, e, this.globalData, s, i) : new HSolidElement(t, e, this.globalData, s, i)
    }, HybridRenderer.prototype.getThreeDContainer = function() {
        var t = document.createElement("div");
        styleDiv(t), t.style.width = this.globalData.compSize.w + "px", t.style.height = this.globalData.compSize.h + "px", t.style.transformOrigin = t.style.mozTransformOrigin = t.style.webkitTransformOrigin = "50% 50%";
        var e = document.createElement("div");
        return styleDiv(e), e.style.transform = e.style.webkitTransform = "matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1)", t.appendChild(e), this.animationItem.resizerElem.appendChild(t), this.threeDElements.push([t, e]), e
    }, HybridRenderer.prototype.configAnimation = function(t) {
        var e = document.createElement("div"),
            s = this.animationItem.wrapper;
        e.style.width = t.w + "px", e.style.height = t.h + "px", this.animationItem.resizerElem = e, styleDiv(e), e.style.transformStyle = e.style.webkitTransformStyle = e.style.mozTransformStyle = "flat", s.appendChild(e), e.style.overflow = "hidden";
        var i = document.createElementNS(svgNS, "svg");
        i.setAttribute("width", "1"), i.setAttribute("height", "1"), styleDiv(i), this.animationItem.resizerElem.appendChild(i);
        var a = document.createElementNS(svgNS, "defs");
        i.appendChild(a), this.globalData.defs = a, this.globalData.getAssetData = this.animationItem.getAssetData.bind(this.animationItem), this.globalData.getPath = this.animationItem.getPath.bind(this.animationItem), this.globalData.elementLoaded = this.animationItem.elementLoaded.bind(this.animationItem), this.globalData.frameId = 0, this.globalData.compSize = {
            w: t.w,
            h: t.h
        }, this.globalData.frameRate = t.fr, this.layers = t.layers, this.globalData.fontManager = new FontManager, this.globalData.fontManager.addChars(t.chars), this.globalData.fontManager.addFonts(t.fonts, i), this.updateContainerSize()
    }, HybridRenderer.prototype.buildStage = function(t, e, s) {
        var i, a, r = e.length;
        for (s || (s = this.elements), i = r - 1; i >= 0; i--) a = e[i], void 0 !== a.parent && this.buildItemParenting(a, s[i], e, a.parent, s, !0), 0 === a.ty && this.buildStage(s[i].getComposingElement(), a.layers, s[i].getElements())
    }, HybridRenderer.prototype.buildItemParenting = function(t, e, s, i, a, r) {
        t.parents || (t.parents = []), r && e.resetHierarchy();
        for (var n = 0, o = s.length; o > n;) s[n].ind == i && (e.getHierarchy().push(a[n]), 13 === e.data.ty && a[n].finalTransform.mProp.setInverted(), void 0 !== s[n].parent && this.buildItemParenting(t, e, s, s[n].parent, a, !1)), n += 1
    }, HybridRenderer.prototype.destroy = function() {
        this.animationItem.wrapper.innerHTML = "", this.animationItem.container = null, this.globalData.defs = null;
        var t, e = this.layers.length;
        for (t = 0; e > t; t++) this.elements[t].destroy();
        this.elements.length = 0, this.destroyed = !0
    }, HybridRenderer.prototype.updateContainerSize = function() {
        var t, e, s, i, a = this.animationItem.wrapper.offsetWidth,
            r = this.animationItem.wrapper.offsetHeight,
            n = a / r,
            o = this.globalData.compSize.w / this.globalData.compSize.h;
        o > n ? (t = a / this.globalData.compSize.w, e = a / this.globalData.compSize.w, s = 0, i = (r - this.globalData.compSize.h * (a / this.globalData.compSize.w)) / 2) : (t = r / this.globalData.compSize.h, e = r / this.globalData.compSize.h, s = (a - this.globalData.compSize.w * (r / this.globalData.compSize.h)) / 2, i = 0), this.animationItem.resizerElem.style.transform = this.animationItem.resizerElem.style.webkitTransform = "matrix3d(" + t + ",0,0,0,0," + e + ",0,0,0,0,1,0," + s + "," + i + ",0,1)"
    }, HybridRenderer.prototype.renderFrame = function(t) {
        if (this.renderedFrame != t && !this.destroyed) {
            null === t ? t = this.renderedFrame : this.renderedFrame = t, this.globalData.frameNum = t, this.globalData.frameId += 1;
            var e, s = this.layers.length;
            for (e = 0; s > e; e++) this.elements[e].prepareFrame(t - this.layers[e].st);
            for (e = 0; s > e; e++) this.elements[e].renderFrame()
        }
    }, HybridRenderer.prototype.hide = function() {
        this.animationItem.resizerElem.style.display = "none"
    }, HybridRenderer.prototype.show = function() {
        this.animationItem.resizerElem.style.display = "block"
    }, extendPrototype(ExpressionComp, HybridRenderer), MaskElement.prototype.getMaskProperty = function(t) {
        return this.viewData[t].prop
    }, MaskElement.prototype.prepareFrame = function() {
        var t, e = this.dynamicProperties.length;
        for (t = 0; e > t; t += 1) this.dynamicProperties[t].getValue()
    }, MaskElement.prototype.renderFrame = function() {
        var t, e = this.masksProperties.length;
        for (t = 0; e > t; t++)
            if ("n" !== this.masksProperties[t].mode && this.masksProperties[t].cl !== !1 && ((this.viewData[t].prop.mdf || this.firstFrame) && this.drawPath(this.masksProperties[t], this.viewData[t].prop.v, this.viewData[t]), this.storedData[t].x && (this.storedData[t].x.mdf || this.firstFrame))) {
                var s = this.storedData[t].expan;
                this.storedData[t].x.v < 0 ? ("erode" !== this.storedData[t].lastOperator && (this.storedData[t].lastOperator = "erode", this.storedData[t].elem.setAttribute("filter", "url(#" + this.storedData[t].filterId + ")")), s.setAttribute("radius", -this.storedData[t].x.v)) : ("dilate" !== this.storedData[t].lastOperator && (this.storedData[t].lastOperator = "dilate", this.storedData[t].elem.setAttribute("filter", null)), this.storedData[t].elem.setAttribute("stroke-width", 2 * this.storedData[t].x.v))
            }
        this.firstFrame = !1
    }, MaskElement.prototype.getMaskelement = function() {
        return this.maskElement
    }, MaskElement.prototype.createLayerSolidPath = function() {
        var t = "M0,0 ";
        return t += " h" + this.globalData.compSize.w, t += " v" + this.globalData.compSize.h, t += " h-" + this.globalData.compSize.w, t += " v-" + this.globalData.compSize.h + " "
    }, MaskElement.prototype.drawPath = function(t, e, s) {
        var i, a, r = "";
        for (a = e.v.length, i = 1; a > i; i += 1) 1 == i && (r += " M" + bm_rnd(e.v[0][0]) + "," + bm_rnd(e.v[0][1])), r += " C" + bm_rnd(e.o[i - 1][0]) + "," + bm_rnd(e.o[i - 1][1]) + " " + bm_rnd(e.i[i][0]) + "," + bm_rnd(e.i[i][1]) + " " + bm_rnd(e.v[i][0]) + "," + bm_rnd(e.v[i][1]);
        t.cl && (r += " C" + bm_rnd(e.o[i - 1][0]) + "," + bm_rnd(e.o[i - 1][1]) + " " + bm_rnd(e.i[0][0]) + "," + bm_rnd(e.i[0][1]) + " " + bm_rnd(e.v[0][0]) + "," + bm_rnd(e.v[0][1])), s.lastPath !== r && (t.inv ? s.elem.setAttribute("d", this.solidPath + r) : s.elem.setAttribute("d", r), s.lastPath = r)
    }, MaskElement.prototype.getMask = function(t) {
        for (var e = 0, s = this.masksProperties.length; s > e;) {
            if (this.masksProperties[e].nm === t) return {
                maskPath: this.viewData[e].prop.pv
            };
            e += 1
        }
    }, MaskElement.prototype.destroy = function() {
        this.element = null, this.globalData = null, this.maskElement = null, this.data = null, this.paths = null, this.masksProperties = null
    }, SliderEffect.prototype.proxyFunction = function() {
        return this.p.k && this.p.getValue(), this.p.v
    }, AngleEffect.prototype.proxyFunction = SliderEffect.prototype.proxyFunction, ColorEffect.prototype.proxyFunction = SliderEffect.prototype.proxyFunction, PointEffect.prototype.proxyFunction = SliderEffect.prototype.proxyFunction, CheckboxEffect.prototype.proxyFunction = SliderEffect.prototype.proxyFunction, EffectsManager.prototype.getEffect = function(t) {
        for (var e = this.data.ef, s = 0, i = e.length; i > s;) {
            if (e[s].nm === t) return this.effectElements[s];
            s += 1
        }
    }, BaseElement.prototype.checkMasks = function() {
        if (!this.data.hasMask) return !1;
        for (var t = 0, e = this.data.masksProperties.length; e > t;) {
            if ("n" !== this.data.masksProperties[t].mode && this.data.masksProperties[t].cl !== !1) return !0;
            t += 1
        }
        return !1
    }, BaseElement.prototype.prepareFrame = function(t) {
        this.data.ip - this.data.st <= t && this.data.op - this.data.st > t ? this.isVisible !== !0 && (this.isVisible = !0, this.firstFrame = !0, this.data.hasMask && (this.maskManager.firstFrame = !0)) : this.isVisible !== !1 && (this.isVisible = !1);
        var e, s = this.dynamicProperties.length;
        for (e = 0; s > e; e += 1) this.dynamicProperties[e].getValue(t);
        return this.data.hasMask && this.maskManager.prepareFrame(t), this.currentFrameNum = t, this.isVisible
    }, BaseElement.prototype.init = function() {
        this.hidden = !1, this.firstFrame = !0, this.isVisible = !1, this.dynamicProperties = [], this.currentFrameNum = -99999, this.lastNum = -99999, this.data.ef && (this.effectsManager = new EffectsManager(this.data, this, this.dynamicProperties), this.effect = this.effectsManager.getEffect.bind(this.effectsManager)), this.finalTransform = {
            mProp: PropertyFactory.getProp(this, this.data.ks, 2, null, this.dynamicProperties),
            matMdf: !1,
            opMdf: !1,
            mat: new Matrix,
            opacity: 1
        }, this.finalTransform.op = this.finalTransform.mProp.o, this.transform = this.finalTransform.mProp, this.createElements(), this.data.hasMask && this.addMasks(this.data)
    }, BaseElement.prototype.getType = function() {
        return this.type
    }, BaseElement.prototype.resetHierarchy = function() {
        this.hierarchy ? this.hierarchy.length = 0 : this.hierarchy = []
    }, BaseElement.prototype.getHierarchy = function() {
        return this.hierarchy || (this.hierarchy = []), this.hierarchy
    }, BaseElement.prototype.getLayerSize = function() {
        return 5 === this.data.ty ? {
            w: this.data.textData.width,
            h: this.data.textData.height
        } : {
            w: this.data.width,
            h: this.data.height
        }
    }, BaseElement.prototype.hide = function() {}, BaseElement.prototype.mHelper = new Matrix, BaseElement.prototype.mask = function(t) {
        return this.maskManager.getMask(t)
    }, extendPrototype(LayerInterface, BaseElement), Object.defineProperty(BaseElement.prototype, "anchorPoint", {
        get: function() {
            return this.finalTransform.mProp.anchorPoint
        }
    }), createElement(BaseElement, SVGBaseElement), SVGBaseElement.prototype.appendNodeToParent = function(t) {
        if (this.placeholder) {
            var e = this.placeholder.phElement;
            e.parentNode.insertBefore(t, e)
        } else this.parentContainer.appendChild(t)
    }, SVGBaseElement.prototype.createElements = function() {
        if (this.data.td) {
            if (3 == this.data.td) this.layerElement = document.createElementNS(svgNS, "mask"), this.layerElement.setAttribute("id", this.layerId), this.layerElement.setAttribute("mask-type", "luminance"), this.globalData.defs.appendChild(this.layerElement);
            else if (2 == this.data.td) {
                var t = document.createElementNS(svgNS, "mask");
                t.setAttribute("id", this.layerId), t.setAttribute("mask-type", "alpha");
                var e = document.createElementNS(svgNS, "g");

                t.appendChild(e), this.layerElement = document.createElementNS(svgNS, "g");
                var s = document.createElementNS(svgNS, "filter"),
                    i = randomString(10);
                s.setAttribute("id", i), s.setAttribute("filterUnits", "objectBoundingBox"), s.setAttribute("x", "0%"), s.setAttribute("y", "0%"), s.setAttribute("width", "100%"), s.setAttribute("height", "100%");
                var a = document.createElementNS(svgNS, "feComponentTransfer");
                a.setAttribute("in", "SourceGraphic"), s.appendChild(a);
                var r = document.createElementNS(svgNS, "feFuncA");
                r.setAttribute("type", "table"), r.setAttribute("tableValues", "1.0 0.0"), a.appendChild(r), this.globalData.defs.appendChild(s);
                var n = document.createElementNS(svgNS, "rect");
                n.setAttribute("width", "100%"), n.setAttribute("height", "100%"), n.setAttribute("x", "0"), n.setAttribute("y", "0"), n.setAttribute("fill", "#ffffff"), n.setAttribute("opacity", "0"), e.setAttribute("filter", "url(#" + i + ")"), e.appendChild(n), e.appendChild(this.layerElement), this.globalData.defs.appendChild(t)
            } else {
                this.layerElement = document.createElementNS(svgNS, "g");
                var o = document.createElementNS(svgNS, "mask");
                o.setAttribute("id", this.layerId), o.setAttribute("mask-type", "alpha"), o.appendChild(this.layerElement), this.globalData.defs.appendChild(o)
            }
            this.data.hasMask && (this.maskedElement = this.layerElement)
        } else this.data.hasMask ? (this.layerElement = document.createElementNS(svgNS, "g"), this.data.tt ? (this.matteElement = document.createElementNS(svgNS, "g"), this.matteElement.appendChild(this.layerElement), this.appendNodeToParent(this.matteElement)) : this.appendNodeToParent(this.layerElement), this.maskedElement = this.layerElement) : this.data.tt ? (this.matteElement = document.createElementNS(svgNS, "g"), this.matteElement.setAttribute("id", this.layerId), this.appendNodeToParent(this.matteElement), this.layerElement = this.matteElement) : this.layerElement = this.parentContainer;
        !this.data.ln || 4 !== this.data.ty && 0 !== this.data.ty || (this.layerElement === this.parentContainer && (this.layerElement = document.createElementNS(svgNS, "g"), this.appendNodeToParent(this.layerElement)), this.layerElement.setAttribute("id", this.data.ln)), 0 !== this.data.ty || !this.finalTransform.op.k && 1 === this.finalTransform.op.p || this.layerElement !== this.parentContainer || (this.layerElement = document.createElementNS(svgNS, "g"), this.appendNodeToParent(this.layerElement)), this.layerElement !== this.parentContainer && (this.placeholder = null)
    }, SVGBaseElement.prototype.renderFrame = function(t) {
        if (3 === this.data.ty) return !1;
        if (this.currentFrameNum === this.lastNum || !this.isVisible) return this.isVisible;
        this.lastNum = this.currentFrameNum, this.data.hasMask && this.maskManager.renderFrame(), this.finalTransform.opMdf = this.finalTransform.op.mdf, this.finalTransform.matMdf = this.finalTransform.mProp.mdf, this.finalTransform.opacity = this.finalTransform.op.v, this.firstFrame && (this.finalTransform.opMdf = !0, this.finalTransform.matMdf = !0);
        var e, s = this.finalTransform.mat;
        if (this.hierarchy) {
            var i, a = this.hierarchy.length;
            for (e = this.finalTransform.mProp.v.props, s.cloneFromProps(e), i = 0; a > i; i += 1) this.finalTransform.matMdf = this.hierarchy[i].finalTransform.mProp.mdf ? !0 : this.finalTransform.matMdf, e = this.hierarchy[i].finalTransform.mProp.v.props, s.transform(e[0], e[1], e[2], e[3], e[4], e[5], e[6], e[7], e[8], e[9], e[10], e[11], e[12], e[13], e[14], e[15])
        } else this.isVisible && (t ? (e = this.finalTransform.mProp.v.props, s.cloneFromProps(e)) : s.cloneFromProps(this.finalTransform.mProp.v.props));
        return t && (e = t.mat.props, s.transform(e[0], e[1], e[2], e[3], e[4], e[5], e[6], e[7], e[8], e[9], e[10], e[11], e[12], e[13], e[14], e[15]), this.finalTransform.opacity *= t.opacity, this.finalTransform.opMdf = t.opMdf ? !0 : this.finalTransform.opMdf, this.finalTransform.matMdf = t.matMdf ? !0 : this.finalTransform.matMdf), this.data.hasMask ? (this.finalTransform.matMdf && this.layerElement.setAttribute("transform", s.to2dCSS()), this.finalTransform.opMdf && this.layerElement.setAttribute("opacity", this.finalTransform.opacity)) : 0 === this.data.ty && this.finalTransform.opMdf && (this.finalTransform.op.k || 1 !== this.finalTransform.op.p) && (this.layerElement.setAttribute("opacity", this.finalTransform.opacity), this.finalTransform.opacity = 1), this.isVisible
    }, SVGBaseElement.prototype.destroy = function() {
        this.layerElement = null, this.parentContainer = null, this.matteElement && (this.matteElement = null), this.maskManager && this.maskManager.destroy()
    }, SVGBaseElement.prototype.getDomElement = function() {
        return this.layerElement
    }, SVGBaseElement.prototype.addMasks = function(t) {
        this.maskManager = new MaskElement(t, this, this.globalData)
    }, SVGBaseElement.prototype.setMatte = function(t) {
        this.matteElement && this.matteElement.setAttribute("mask", "url(#" + t + ")")
    }, SVGBaseElement.prototype.hide = function() {}, ITextElement.prototype.init = function() {
        this.parent.init.call(this), this.lettersChangedFlag = !1;
        var t = this.data;
        this.renderedLetters = Array.apply(null, {
            length: t.t.d.l.length
        }), this.viewData = {
            m: {
                a: PropertyFactory.getProp(this, t.t.m.a, 1, 0, this.dynamicProperties)
            }
        };
        var e = this.data.t;
        if (e.a.length) {
            this.viewData.a = Array.apply(null, {
                length: e.a.length
            });
            var s, i, a, r = e.a.length;
            for (s = 0; r > s; s += 1) a = e.a[s], i = {
                a: {},
                s: {}
            }, "r" in a.a && (i.a.r = PropertyFactory.getProp(this, a.a.r, 0, degToRads, this.dynamicProperties)), "rx" in a.a && (i.a.rx = PropertyFactory.getProp(this, a.a.rx, 0, degToRads, this.dynamicProperties)), "ry" in a.a && (i.a.ry = PropertyFactory.getProp(this, a.a.ry, 0, degToRads, this.dynamicProperties)), "sk" in a.a && (i.a.sk = PropertyFactory.getProp(this, a.a.sk, 0, degToRads, this.dynamicProperties)), "sa" in a.a && (i.a.sa = PropertyFactory.getProp(this, a.a.sa, 0, degToRads, this.dynamicProperties)), "s" in a.a && (i.a.s = PropertyFactory.getProp(this, a.a.s, 1, .01, this.dynamicProperties)), "a" in a.a && (i.a.a = PropertyFactory.getProp(this, a.a.a, 1, 0, this.dynamicProperties)), "o" in a.a && (i.a.o = PropertyFactory.getProp(this, a.a.o, 0, .01, this.dynamicProperties)), "p" in a.a && (i.a.p = PropertyFactory.getProp(this, a.a.p, 1, 0, this.dynamicProperties)), "sw" in a.a && (i.a.sw = PropertyFactory.getProp(this, a.a.sw, 0, 0, this.dynamicProperties)), "sc" in a.a && (i.a.sc = PropertyFactory.getProp(this, a.a.sc, 1, 0, this.dynamicProperties)), "fc" in a.a && (i.a.fc = PropertyFactory.getProp(this, a.a.fc, 1, 0, this.dynamicProperties)), "fh" in a.a && (i.a.fh = PropertyFactory.getProp(this, a.a.fh, 0, 0, this.dynamicProperties)), "fs" in a.a && (i.a.fs = PropertyFactory.getProp(this, a.a.fs, 0, .01, this.dynamicProperties)), "fb" in a.a && (i.a.fb = PropertyFactory.getProp(this, a.a.fb, 0, .01, this.dynamicProperties)), "t" in a.a && (i.a.t = PropertyFactory.getProp(this, a.a.t, 0, 0, this.dynamicProperties)), i.s = PropertyFactory.getTextSelectorProp(this, a.s, this.dynamicProperties), i.s.t = a.s.t, this.viewData.a[s] = i
        } else this.viewData.a = [];
        e.p && "m" in e.p ? (this.viewData.p = {
            f: PropertyFactory.getProp(this, e.p.f, 0, 0, this.dynamicProperties),
            l: PropertyFactory.getProp(this, e.p.l, 0, 0, this.dynamicProperties),
            r: e.p.r,
            m: this.maskManager.getMaskProperty(e.p.m)
        }, this.maskPath = !0) : this.maskPath = !1
    }, ITextElement.prototype.createPathShape = function(t, e) {
        var s, i, a, r, n = e.length,
            o = "";
        for (s = 0; n > s; s += 1) {
            for (a = e[s].ks.k.i.length, r = e[s].ks.k, i = 1; a > i; i += 1) 1 == i && (o += " M" + t.applyToPointStringified(r.v[0][0], r.v[0][1])), o += " C" + t.applyToPointStringified(r.o[i - 1][0], r.o[i - 1][1]) + " " + t.applyToPointStringified(r.i[i][0], r.i[i][1]) + " " + t.applyToPointStringified(r.v[i][0], r.v[i][1]);
            o += " C" + t.applyToPointStringified(r.o[i - 1][0], r.o[i - 1][1]) + " " + t.applyToPointStringified(r.i[0][0], r.i[0][1]) + " " + t.applyToPointStringified(r.v[0][0], r.v[0][1]), o += "z"
        }
        return o
    }, ITextElement.prototype.getMeasures = function() {
        var t, e, s, i, a = this.mHelper,
            r = this.renderType,
            n = this.data,
            o = n.t.d,
            h = o.l;
        if (this.maskPath) {
            var l = this.viewData.p.m;
            if (!this.viewData.p.n || this.viewData.p.mdf) {
                var p = l.v;
                this.viewData.p.r && (p = reversePath(p, l.closed));
                var m = {
                    tLength: 0,
                    segments: []
                };
                i = p.v.length - 1;
                var f, d = 0;
                for (s = 0; i > s; s += 1) f = {
                    s: p.v[s],
                    e: p.v[s + 1],
                    to: [p.o[s][0] - p.v[s][0], p.o[s][1] - p.v[s][1]],
                    ti: [p.i[s + 1][0] - p.v[s + 1][0], p.i[s + 1][1] - p.v[s + 1][1]]
                }, bez.buildBezierData(f), m.tLength += f.bezierData.segmentLength, m.segments.push(f), d += f.bezierData.segmentLength;
                s = i, l.closed && (f = {
                    s: p.v[s],
                    e: p.v[0],
                    to: [p.o[s][0] - p.v[s][0], p.o[s][1] - p.v[s][1]],
                    ti: [p.i[0][0] - p.v[0][0], p.i[0][1] - p.v[0][1]]
                }, bez.buildBezierData(f), m.tLength += f.bezierData.segmentLength, m.segments.push(f), d += f.bezierData.segmentLength), this.viewData.p.pi = m
            }
            var c, u, y, m = this.viewData.p.pi,
                v = this.viewData.p.f.v,
                g = 0,
                b = 1,
                E = 0,
                P = !0,
                k = m.segments;
            if (0 > v && l.closed)
                for (m.tLength < Math.abs(v) && (v = -Math.abs(v) % m.tLength), g = k.length - 1, y = k[g].bezierData.points, b = y.length - 1; 0 > v;) v += y[b].partialLength, b -= 1, 0 > b && (g -= 1, y = k[g].bezierData.points, b = y.length - 1);
            y = k[g].bezierData.points, u = y[b - 1], c = y[b];
            var S, C, x = c.partialLength
        }
        i = h.length, t = 0, e = 0;
        var w, D, T, M, I, F = 1.2 * n.t.d.s * .714,
            A = !0,
            V = this.viewData,
            N = Array.apply(null, {
                length: i
            });
        this.lettersChangedFlag = !1, M = V.a.length;
        var L, B, _, H, R, z, O, j, G, W, X, q, Y, Z, J, U, K = -1,
            Q = v,
            $ = g,
            tt = b,
            et = -1,
            st = 0;
        for (s = 0; i > s; s += 1)
            if (a.reset(), z = 1, h[s].n) t = 0, e += o.yOffset, e += A ? 1 : 0, v = Q, A = !1, st = 0, this.maskPath && (g = $, b = tt, y = k[g].bezierData.points, u = y[b - 1], c = y[b], x = c.partialLength, E = 0), N[s] = this.emptyProp;
            else {
                if (this.maskPath) {
                    if (et !== h[s].line) {
                        switch (o.j) {
                            case 1:
                                v += d - o.lineWidths[h[s].line];
                                break;
                            case 2:
                                v += (d - o.lineWidths[h[s].line]) / 2
                        }
                        et = h[s].line
                    }
                    K !== h[s].ind && (h[K] && (v += h[K].extra), v += h[s].an / 2, K = h[s].ind), v += V.m.a.v[0] * h[s].an / 200;
                    var it = 0;
                    for (T = 0; M > T; T += 1) w = V.a[T].a, "p" in w && (D = V.a[T].s, B = D.getMult(h[s].anIndexes[T]), it += B.length ? w.p.v[0] * B[0] : w.p.v[0] * B);
                    for (P = !0; P;) E + x >= v + it || !y ? (S = (v + it - E) / c.partialLength, H = u.point[0] + (c.point[0] - u.point[0]) * S, R = u.point[1] + (c.point[1] - u.point[1]) * S, a.translate(0, -(V.m.a.v[1] * F / 100) + e), P = !1) : y && (E += c.partialLength, b += 1, b >= y.length && (b = 0, g += 1, k[g] ? y = k[g].bezierData.points : l.closed ? (b = 0, g = 0, y = k[g].bezierData.points) : (E -= c.partialLength, y = null)), y && (u = c, c = y[b], x = c.partialLength));
                    _ = h[s].an / 2 - h[s].add, a.translate(-_, 0, 0)
                } else _ = h[s].an / 2 - h[s].add, a.translate(-_, 0, 0), a.translate(-V.m.a.v[0] * h[s].an / 200, -V.m.a.v[1] * F / 100, 0);
                for (st += h[s].l / 2, T = 0; M > T; T += 1) w = V.a[T].a, "t" in w && (D = V.a[T].s, B = D.getMult(h[s].anIndexes[T]), this.maskPath ? v += B.length ? w.t * B[0] : w.t * B : t += B.length ? w.t.v * B[0] : w.t.v * B);
                for (st += h[s].l / 2, o.strokeWidthAnim && (j = n.t.d.sw || 0), o.strokeColorAnim && (O = n.t.d.sc ? [n.t.d.sc[0], n.t.d.sc[1], n.t.d.sc[2]] : [0, 0, 0]), o.fillColorAnim && (G = [n.t.d.fc[0], n.t.d.fc[1], n.t.d.fc[2]]), T = 0; M > T; T += 1) w = V.a[T].a, "a" in w && (D = V.a[T].s, B = D.getMult(h[s].anIndexes[T]), B.length ? a.translate(-w.a.v[0] * B[0], -w.a.v[1] * B[1], w.a.v[2] * B[2]) : a.translate(-w.a.v[0] * B, -w.a.v[1] * B, w.a.v[2] * B));
                for (T = 0; M > T; T += 1) w = V.a[T].a, "s" in w && (D = V.a[T].s, B = D.getMult(h[s].anIndexes[T]), B.length ? a.scale(1 + (w.s.v[0] - 1) * B[0], 1 + (w.s.v[1] - 1) * B[1], 1) : a.scale(1 + (w.s.v[0] - 1) * B, 1 + (w.s.v[1] - 1) * B, 1));
                for (T = 0; M > T; T += 1) {
                    if (w = V.a[T].a, D = V.a[T].s, B = D.getMult(h[s].anIndexes[T]), "sk" in w && (B.length ? a.skewFromAxis(-w.sk.v * B[0], w.sa.v * B[1]) : a.skewFromAxis(-w.sk.v * B, w.sa.v * B)), "r" in w && a.rotateZ(B.length ? -w.r.v * B[2] : -w.r.v * B), "ry" in w && a.rotateY(B.length ? w.ry.v * B[1] : w.ry.v * B), "rx" in w && a.rotateX(B.length ? w.rx.v * B[0] : w.rx.v * B), "o" in w && (z += B.length ? (w.o.v * B[0] - z) * B[0] : (w.o.v * B - z) * B), o.strokeWidthAnim && "sw" in w && (j += B.length ? w.sw.v * B[0] : w.sw.v * B), o.strokeColorAnim && "sc" in w)
                        for (W = 0; 3 > W; W += 1) O[W] = Math.round(B.length ? O[W] + (w.sc.v[W] - O[W]) * B[0] : O[W] + (w.sc.v[W] - O[W]) * B);
                    if (o.fillColorAnim) {
                        if ("fc" in w)
                            for (W = 0; 3 > W; W += 1) G[W] = Math.round(B.length ? G[W] + (w.fc.v[W] - G[W]) * B[0] : G[W] + (w.fc.v[W] - G[W]) * B);
                        "fh" in w && (G = B.length ? addHueToRGB(G, w.fh.v * B[0]) : addHueToRGB(G, w.fh.v * B)), "fs" in w && (G = B.length ? addSaturationToRGB(G, w.fs.v * B[0]) : addSaturationToRGB(G, w.fs.v * B)), "fb" in w && (G = B.length ? addBrightnessToRGB(G, w.fb.v * B[0]) : addBrightnessToRGB(G, w.fb.v * B))
                    }
                }
                for (T = 0; M > T; T += 1) w = V.a[T].a, "p" in w && (D = V.a[T].s, B = D.getMult(h[s].anIndexes[T]), this.maskPath ? B.length ? a.translate(0, w.p.v[1] * B[0], -w.p.v[2] * B[1]) : a.translate(0, w.p.v[1] * B, -w.p.v[2] * B) : B.length ? a.translate(w.p.v[0] * B[0], w.p.v[1] * B[1], -w.p.v[2] * B[2]) : a.translate(w.p.v[0] * B, w.p.v[1] * B, -w.p.v[2] * B));
                if (o.strokeWidthAnim && (X = 0 > j ? 0 : j), o.strokeColorAnim && (q = "rgb(" + O[0] + "," + O[1] + "," + O[2] + ")"), o.fillColorAnim && (Y = "rgb(" + G[0] + "," + G[1] + "," + G[2] + ")"), this.maskPath) {
                    if (n.t.p.p) {
                        C = (c.point[1] - u.point[1]) / (c.point[0] - u.point[0]);
                        var at = 180 * Math.atan(C) / Math.PI;
                        c.point[0] < u.point[0] && (at += 180), a.rotate(-at * Math.PI / 180)
                    }
                    a.translate(H, R, 0), a.translate(V.m.a.v[0] * h[s].an / 200, V.m.a.v[1] * F / 100, 0), v -= V.m.a.v[0] * h[s].an / 200, h[s + 1] && K !== h[s + 1].ind && (v += h[s].an / 2, v += o.tr / 1e3 * n.t.d.s)
                } else {
                    switch (a.translate(t, e, 0), o.ps && a.translate(o.ps[0], o.ps[1] + o.ascent, 0), o.j) {
                        case 1:
                            a.translate(o.justifyOffset + (o.boxWidth - o.lineWidths[h[s].line]), 0, 0);
                            break;
                        case 2:
                            a.translate(o.justifyOffset + (o.boxWidth - o.lineWidths[h[s].line]) / 2, 0, 0)
                    }
                    a.translate(_, 0, 0), a.translate(V.m.a.v[0] * h[s].an / 200, V.m.a.v[1] * F / 100, 0), t += h[s].l + o.tr / 1e3 * n.t.d.s
                }
                "html" === r ? Z = a.toCSS() : "svg" === r ? Z = a.to2dCSS() : J = [a.props[0], a.props[1], a.props[2], a.props[3], a.props[4], a.props[5], a.props[6], a.props[7], a.props[8], a.props[9], a.props[10], a.props[11], a.props[12], a.props[13], a.props[14], a.props[15]], U = z, L = this.renderedLetters[s], !L || L.o === U && L.sw === X && L.sc === q && L.fc === Y ? "svg" !== r && "html" !== r || L && L.m === Z ? "canvas" !== r || L && L.props[0] === J[0] && L.props[1] === J[1] && L.props[4] === J[4] && L.props[5] === J[5] && L.props[12] === J[12] && L.props[13] === J[13] ? I = L : (this.lettersChangedFlag = !0, I = new LetterProps(U, X, q, Y, null, J)) : (this.lettersChangedFlag = !0, I = new LetterProps(U, X, q, Y, Z)) : (this.lettersChangedFlag = !0, I = new LetterProps(U, X, q, Y, Z, J)), this.renderedLetters[s] = I
            }
    }, ITextElement.prototype.emptyProp = new LetterProps, createElement(SVGBaseElement, SVGTextElement), SVGTextElement.prototype.init = ITextElement.prototype.init, SVGTextElement.prototype.createPathShape = ITextElement.prototype.createPathShape, SVGTextElement.prototype.getMeasures = ITextElement.prototype.getMeasures, SVGTextElement.prototype.createElements = function() {
        this.parent.createElements.call(this);
        var t = this.data.t.d;
        this.innerElem = document.createElementNS(svgNS, "g"), t.fc ? this.innerElem.setAttribute("fill", "rgb(" + t.fc[0] + "," + t.fc[1] + "," + t.fc[2] + ")") : this.innerElem.setAttribute("fill", "rgba(0,0,0,0)"), t.sc && (this.innerElem.setAttribute("stroke", "rgb(" + t.sc[0] + "," + t.sc[1] + "," + t.sc[2] + ")"), this.innerElem.setAttribute("stroke-width", t.sw)), this.innerElem.setAttribute("font-size", t.s);
        var e = this.globalData.fontManager.getFontByName(t.f);
        if (e.fClass) this.innerElem.setAttribute("class", e.fClass);
        else {
            this.innerElem.setAttribute("font-family", e.fFamily);
            var s = t.fWeight,
                i = t.fStyle;
            this.innerElem.setAttribute("font-style", i), this.innerElem.setAttribute("font-weight", s)
        }
        var a, r;
        this.layerElement === this.parentContainer ? this.appendNodeToParent(this.innerElem) : this.layerElement.appendChild(this.innerElem);
        var n = t.l;
        if (r = n.length) {
            var o, h, l = this.mHelper,
                p = "",
                m = this.data.singleShape;
            if (m) var f = 0,
                d = 0,
                c = t.lineWidths,
                u = t.boxWidth,
                y = !0;
            for (a = 0; r > a; a += 1) {
                if (this.globalData.fontManager.chars ? m && 0 !== a || (o = document.createElementNS(svgNS, "path")) : o = document.createElementNS(svgNS, "text"), o.setAttribute("stroke-linecap", "butt"), o.setAttribute("stroke-linejoin", "round"), o.setAttribute("stroke-miterlimit", "4"), m && n[a].n && (f = 0, d += t.yOffset, d += y ? 1 : 0, y = !1), l.reset(), this.globalData.fontManager.chars && l.scale(t.s / 100, t.s / 100), m) {
                    switch (t.ps && l.translate(t.ps[0], t.ps[1] + t.ascent, 0), t.j) {
                        case 1:
                            l.translate(t.justifyOffset + (u - c[n[a].line]), 0, 0);
                            break;
                        case 2:
                            l.translate(t.justifyOffset + (u - c[n[a].line]) / 2, 0, 0)
                    }
                    l.translate(f, d, 0)
                }
                if (this.globalData.fontManager.chars) {
                    var v, g = this.globalData.fontManager.getCharData(t.t.charAt(a), e.fStyle, this.globalData.fontManager.getFontByName(t.f).fFamily);
                    v = g ? g.data : null, v && v.shapes && (h = v.shapes[0].it, m || (p = ""), p += this.createPathShape(l, h), m || o.setAttribute("d", p)), m || this.innerElem.appendChild(o)
                } else o.textContent = n[a].val, o.setAttributeNS("http://www.w3.org/XML/1998/namespace", "xml:space", "preserve"), this.innerElem.appendChild(o), m && o.setAttribute("transform", l.to2dCSS());
                m && (f += n[a].l), this.textSpans.push(o)
            }
            m && this.globalData.fontManager.chars && (o.setAttribute("d", p), this.innerElem.appendChild(o))
        }
    }, SVGTextElement.prototype.hide = function() {
        this.hidden || (this.innerElem.style.display = "none", this.hidden = !0)
    }, SVGTextElement.prototype.renderFrame = function(t) {
        var e = this.parent.renderFrame.call(this, t);
        if (e === !1) return void this.hide();
        if (this.hidden && (this.hidden = !1, this.innerElem.style.display = "block"), this.data.hasMask || (this.finalTransform.matMdf && this.innerElem.setAttribute("transform", this.finalTransform.mat.to2dCSS()), this.finalTransform.opMdf && this.innerElem.setAttribute("opacity", this.finalTransform.opacity)), !this.data.singleShape && (this.getMeasures(), this.lettersChangedFlag)) {
            var s, i, a = this.renderedLetters,
                r = this.data.t.d.l;
            i = r.length;
            var n;
            for (s = 0; i > s; s += 1) r[s].n || (n = a[s], this.textSpans[s].setAttribute("transform", n.m), this.textSpans[s].setAttribute("opacity", n.o), n.sw && this.textSpans[s].setAttribute("stroke-width", n.sw), n.sc && this.textSpans[s].setAttribute("stroke", n.sc), n.fc && this.textSpans[s].setAttribute("fill", n.fc));
            this.firstFrame && (this.firstFrame = !1)
        }
    }, SVGTextElement.prototype.destroy = function() {
        this.parent.destroy.call(), this.innerElem = null
    };
    var PlaceHolderElement = function(t, e, s) {
        if (this.data = t, this.globalData = s, e) {
            this.parentContainer = e;
            var i = document.createElementNS(svgNS, "g");
            i.setAttribute("id", this.data.id), e.appendChild(i), this.phElement = i
        }
        this.layerId = "ly_" + randomString(10)
    };
    PlaceHolderElement.prototype.prepareFrame = function() {}, PlaceHolderElement.prototype.renderFrame = function() {}, PlaceHolderElement.prototype.draw = function() {}, createElement(SVGBaseElement, ICompElement), extendPrototype(ExpressionComp, ICompElement), ICompElement.prototype.getComposingElement = function() {
        return this.layerElement
    }, ICompElement.prototype.hide = function() {
        if (!this.hidden) {
            var t, e = this.elements.length;
            for (t = 0; e > t; t += 1) this.elements[t].hide();
            this.hidden = !0
        }
    }, ICompElement.prototype.prepareFrame = function(t) {
        if (this.parent.prepareFrame.call(this, t), this.isVisible !== !1) {
            var e = t;
            this.tm && (e = this.tm.v, e === this.data.op && (e = this.data.op - 1)), this.renderedFrame = e;
            var s, i = this.elements.length;
            for (s = 0; i > s; s += 1) this.elements[s].prepareFrame(e - this.layers[s].st)
        }
    }, ICompElement.prototype.renderFrame = function(t) {
        var e, s = this.parent.renderFrame.call(this, t),
            i = this.layers.length;
        if (s === !1) return void this.hide();
        for (this.hidden = !1, e = 0; i > e; e += 1) this.data.hasMask ? this.elements[e].renderFrame() : this.elements[e].renderFrame(this.finalTransform);
        this.firstFrame && (this.firstFrame = !1)
    }, ICompElement.prototype.setElements = function(t) {
        this.elements = t
    }, ICompElement.prototype.getElements = function() {
        return this.elements
    }, ICompElement.prototype.destroy = function() {
        this.parent.destroy.call();
        var t, e = this.layers.length;
        for (t = 0; e > t; t += 1) this.elements[t].destroy()
    }, createElement(SVGBaseElement, IImageElement), IImageElement.prototype.createElements = function() {
        var t = this,
            e = function() {
                t.innerElem.setAttributeNS("http://www.w3.org/1999/xlink", "href", t.path + t.assetData.p), t.maskedElement = t.innerElem
            },
            s = new Image;
        s.addEventListener("load", e, !1), s.addEventListener("error", e, !1), s.src = this.path + this.assetData.p, this.parent.createElements.call(this), this.innerElem = document.createElementNS(svgNS, "image"), this.innerElem.setAttribute("width", this.assetData.w + "px"), this.innerElem.setAttribute("height", this.assetData.h + "px"), this.layerElement === this.parentContainer ? this.appendNodeToParent(this.innerElem) : this.layerElement.appendChild(this.innerElem), this.data.ln && this.innerElem.setAttribute("id", this.data.ln)
    }, IImageElement.prototype.hide = function() {
        this.hidden || (this.innerElem.setAttribute("visibility", "hidden"), this.hidden = !0)
    }, IImageElement.prototype.renderFrame = function(t) {
        var e = this.parent.renderFrame.call(this, t);
        return e === !1 ? void this.hide() : (this.hidden && (this.hidden = !1, this.innerElem.setAttribute("visibility", "visible")), this.data.hasMask || ((this.finalTransform.matMdf || this.firstFrame) && this.innerElem.setAttribute("transform", this.finalTransform.mat.to2dCSS()), (this.finalTransform.opMdf || this.firstFrame) && this.innerElem.setAttribute("opacity", this.finalTransform.opacity)), void(this.firstFrame && (this.firstFrame = !1)))
    }, IImageElement.prototype.destroy = function() {
        this.parent.destroy.call(), this.innerElem = null
    }, createElement(SVGBaseElement, IShapeElement), IShapeElement.prototype.lcEnum = {
        1: "butt",
        2: "round",
        3: "butt"
    }, IShapeElement.prototype.ljEnum = {
        1: "miter",
        2: "round",
        3: "butt"
    }, IShapeElement.prototype.transformHelper = {
        opacity: 1,
        mat: new Matrix,
        matMdf: !1,
        opMdf: !1
    }, IShapeElement.prototype.createElements = function() {
        this.parent.createElements.call(this), this.searchShapes(this.shapesData, this.viewData, this.dynamicProperties, []), this.layerElement.appendChild(this.shapesContainer), styleUnselectableDiv(this.layerElement), styleUnselectableDiv(this.shapesContainer), this.buildExpressionInterface()
    }, IShapeElement.prototype.searchShapes = function(t, e, s, i) {
        var a, r, n, o = t.length - 1,
            h = [],
            l = [];
        for (a = o; a >= 0; a -= 1)
            if ("fl" == t[a].ty || "st" == t[a].ty) {
                e[a] = {};
                var p;
                if (e[a].c = PropertyFactory.getProp(this, t[a].c, 1, null, s), e[a].o = PropertyFactory.getProp(this, t[a].o, 0, .01, s), "st" == t[a].ty) {
                    if (p = document.createElementNS(svgNS, "g"), p.style.strokeLinecap = this.lcEnum[t[a].lc] || "round", p.style.strokeLinejoin = this.ljEnum[t[a].lj] || "round", p.style.fillOpacity = 0, 1 == t[a].lj && (p.style.strokeMiterlimit = t[a].ml), e[a].c.k || (p.style.stroke = "rgb(" + e[a].c.v[0] + "," + e[a].c.v[1] + "," + e[a].c.v[2] + ")"), e[a].o.k || (p.style.strokeOpacity = e[a].o.v), e[a].w = PropertyFactory.getProp(this, t[a].w, 0, null, s), e[a].w.k || (p.style.strokeWidth = e[a].w.v), t[a].d) {
                        var m = PropertyFactory.getDashProp(this, t[a].d, "svg", s);
                        m.k || (p.style.strokeDasharray = m.dasharray, p.style.strokeDashoffset = m.dashoffset), e[a].d = m
                    }
                } else p = document.createElementNS(svgNS, "path"), e[a].c.k || (p.style.fill = "rgb(" + e[a].c.v[0] + "," + e[a].c.v[1] + "," + e[a].c.v[2] + ")"), e[a].o.k || (p.style.fillOpacity = e[a].o.v);
                this.shapesContainer.appendChild(p), this.stylesList.push({
                    pathElement: p,
                    type: t[a].ty,
                    d: "",
                    ld: "",
                    mdf: !1
                }), e[a].style = this.stylesList[this.stylesList.length - 1], h.push(e[a].style)
            } else if ("gr" == t[a].ty) e[a] = {
            it: []
        }, this.searchShapes(t[a].it, e[a].it, s, i);
        else if ("tr" == t[a].ty) e[a] = {
            transform: {
                mat: new Matrix,
                opacity: 1,
                matMdf: !1,
                opMdf: !1,
                op: PropertyFactory.getProp(this, t[a].o, 0, .01, s),
                mProps: PropertyFactory.getProp(this, t[a], 2, null, s)
            },
            elements: []
        };
        else if ("sh" == t[a].ty || "rc" == t[a].ty || "el" == t[a].ty || "sr" == t[a].ty) {
            e[a] = {
                elements: [],
                styles: [],
                lStr: ""
            };
            var f = 4;
            "rc" == t[a].ty ? f = 5 : "el" == t[a].ty ? f = 6 : "sr" == t[a].ty && (f = 7), i.length && (t[a].trimmed = !0), e[a].sh = PropertyFactory.getShapeProp(this, t[a], f, s, i), n = this.stylesList.length;
            var d, c = !1,
                u = !1;
            for (r = 0; n > r; r += 1) this.stylesList[r].closed || ("st" === this.stylesList[r].type ? (c = !0, d = document.createElementNS(svgNS, "path"), this.stylesList[r].pathElement.appendChild(d), e[a].elements.push({
                ty: this.stylesList[r].type,
                el: d
            })) : (u = !0, e[a].elements.push({
                ty: this.stylesList[r].type,
                st: this.stylesList[r]
            })));
            e[a].st = c, e[a].fl = u
        } else if ("tm" == t[a].ty) {
            var y = {
                closed: !1,
                trimProp: PropertyFactory.getProp(this, t[a], 7, null, s)
            };
            e[a] = {
                tr: y.trimProp
            }, i.push(y), l.push(y)
        }
        for (o = h.length, a = 0; o > a; a += 1) h[a].closed = !0;
        for (o = l.length, a = 0; o > a; a += 1) l[a].closed = !0
    }, IShapeElement.prototype.renderFrame = function(t) {
        var e = this.parent.renderFrame.call(this, t);
        return e === !1 ? void this.hide() : (this.hidden = !1, this.finalTransform.matMdf && !this.data.hasMask && this.shapesContainer.setAttribute("transform", this.finalTransform.mat.to2dCSS()), this.transformHelper.opacity = this.finalTransform.opacity, this.transformHelper.matMdf = !1, this.transformHelper.opMdf = this.finalTransform.opMdf, void this.renderShape(this.transformHelper, null, null, !0))
    }, IShapeElement.prototype.hide = function() {
        if (!this.hidden) {
            var t, e = this.stylesList.length;
            for (t = e - 1; t >= 0; t -= 1) "0" !== this.stylesList[t].ld && (this.stylesList[t].ld = "0", this.stylesList[t].pathElement.style.display = "none", this.stylesList[t].pathElement.parentNode && (this.stylesList[t].parent = this.stylesList[t].pathElement.parentNode));
            this.hidden = !0
        }
    }, IShapeElement.prototype.renderShape = function(t, e, s, i) {
        var a, r;
        if (!e)
            for (e = this.shapesData, r = this.stylesList.length, a = 0; r > a; a += 1) this.stylesList[a].d = "", this.stylesList[a].mdf = !1;
        s || (s = this.viewData), r = e.length - 1;
        var n, o;
        for (n = t, a = r; a >= 0; a -= 1)
            if ("tr" == e[a].ty) {
                n = s[a].transform;
                var h = s[a].transform.mProps.v.props;
                if (n.matMdf = n.mProps.mdf, n.opMdf = n.op.mdf, o = n.mat, o.cloneFromProps(h), t) {
                    var l = t.mat.props;
                    n.opacity = t.opacity, n.opacity *= s[a].transform.op.v, n.matMdf = t.matMdf ? !0 : n.matMdf, n.opMdf = t.opMdf ? !0 : n.opMdf, o.transform(l[0], l[1], l[2], l[3], l[4], l[5], l[6], l[7], l[8], l[9], l[10], l[11], l[12], l[13], l[14], l[15])
                } else n.opacity = n.op.o
            } else "sh" == e[a].ty || "el" == e[a].ty || "rc" == e[a].ty || "sr" == e[a].ty ? this.renderPath(e[a], s[a], n) : "fl" == e[a].ty ? this.renderFill(e[a], s[a], n) : "st" == e[a].ty ? this.renderStroke(e[a], s[a], n) : "gr" == e[a].ty ? this.renderShape(n, e[a].it, s[a].it) : "tm" == e[a].ty;
        if (i) {
            for (r = this.stylesList.length, a = 0; r > a; a += 1) "0" === this.stylesList[a].ld && (this.stylesList[a].ld = "1", this.stylesList[a].pathElement.style.display = "block"), "fl" === this.stylesList[a].type && (this.stylesList[a].mdf || this.firstFrame) && this.stylesList[a].pathElement.setAttribute("d", this.stylesList[a].d);
            this.firstFrame && (this.firstFrame = !1)
        }
    }, IShapeElement.prototype.renderPath = function(t, e, s) {
        var i, a, r = e.sh.v,
            n = "";
        if (r.v) {
            i = r.v.length;
            var o = s.matMdf || e.sh.mdf || this.firstFrame;
            if (o) {
                var h = r.s ? r.s : [];
                for (a = 1; i > a; a += 1) h[a - 1] ? n += " M" + s.mat.applyToPointStringified(h[a - 1][0], h[a - 1][1]) : 1 == a && (n += " M" + s.mat.applyToPointStringified(r.v[0][0], r.v[0][1])), n += " C" + s.mat.applyToPointStringified(r.o[a - 1][0], r.o[a - 1][1]) + " " + s.mat.applyToPointStringified(r.i[a][0], r.i[a][1]) + " " + s.mat.applyToPointStringified(r.v[a][0], r.v[a][1]);
                1 == i && (n += h[0] ? " M" + s.mat.applyToPointStringified(h[0][0], h[0][1]) : " M" + s.mat.applyToPointStringified(r.v[0][0], r.v[0][1])), i && t.closed && (!t.trimmed || r.c) && (n += " C" + s.mat.applyToPointStringified(r.o[a - 1][0], r.o[a - 1][1]) + " " + s.mat.applyToPointStringified(r.i[0][0], r.i[0][1]) + " " + s.mat.applyToPointStringified(r.v[0][0], r.v[0][1]), n += "z"), e.lStr = n
            } else n = e.lStr;
            for (i = e.elements.length, a = 0; i > a; a += 1) "st" === e.elements[a].ty ? (s.matMdf || e.sh.mdf || this.firstFrame) && e.elements[a].el.setAttribute("d", n) : (e.elements[a].st.mdf = o ? !0 : e.elements[a].st.mdf, e.elements[a].st.d += n)
        }
    }, IShapeElement.prototype.renderFill = function(t, e, s) {
        var i = e.style;
        (e.c.mdf || this.firstFrame) && (i.pathElement.style.fill = "rgb(" + bm_floor(e.c.v[0]) + "," + bm_floor(e.c.v[1]) + "," + bm_floor(e.c.v[2]) + ")"), (e.o.mdf || s.opMdf || this.firstFrame) && (i.pathElement.style.fillOpacity = e.o.v * s.opacity)
    }, IShapeElement.prototype.renderStroke = function(t, e, s) {
        var i = e.style,
            a = e.d;
        a && a.k && (a.mdf || this.firstFrame) && (i.pathElement.style.strokeDasharray = a.dasharray, i.pathElement.style.strokeDashoffset = a.dashoffset), (e.c.mdf || this.firstFrame) && (i.pathElement.style.stroke = "rgb(" + bm_floor(e.c.v[0]) + "," + bm_floor(e.c.v[1]) + "," + bm_floor(e.c.v[2]) + ")"), (e.o.mdf || s.opMdf || this.firstFrame) && (i.pathElement.style.strokeOpacity = e.o.v * s.opacity), (e.w.mdf || this.firstFrame) && (i.pathElement.style.strokeWidth = e.w.v)
    }, IShapeElement.prototype.destroy = function() {
        this.parent.destroy.call(), this.shapeData = null, this.viewData = null, this.parentContainer = null, this.placeholder = null
    }, extendPrototype(ShapeInterface, IShapeElement), createElement(SVGBaseElement, ISolidElement), ISolidElement.prototype.createElements = function() {
        this.parent.createElements.call(this);
        var t = document.createElementNS(svgNS, "rect");
        t.setAttribute("width", this.data.sw), t.setAttribute("height", this.data.sh), t.setAttribute("fill", this.data.sc), this.layerElement === this.parentContainer ? this.appendNodeToParent(t) : this.layerElement.appendChild(t), this.data.ln && this.innerElem.setAttribute("id", this.data.ln), this.innerElem = t
    }, ISolidElement.prototype.hide = IImageElement.prototype.hide, ISolidElement.prototype.renderFrame = IImageElement.prototype.renderFrame, ISolidElement.prototype.destroy = IImageElement.prototype.destroy, createElement(BaseElement, CVBaseElement), CVBaseElement.prototype.createElements = function() {}, CVBaseElement.prototype.renderFrame = function(t) {
        if (3 === this.data.ty) return !1;
        if (!this.isVisible) return this.isVisible;
        this.finalTransform.opMdf = this.finalTransform.op.mdf, this.finalTransform.matMdf = this.finalTransform.mProp.mdf, this.finalTransform.opacity = this.finalTransform.op.v;
        var e, s = this.finalTransform.mat;
        if (this.hierarchy) {
            var i, a = this.hierarchy.length;
            for (e = this.finalTransform.mProp.v.props, s.cloneFromProps(e), i = 0; a > i; i += 1) this.finalTransform.matMdf = this.hierarchy[i].finalTransform.mProp.mdf ? !0 : this.finalTransform.matMdf, e = this.hierarchy[i].finalTransform.mProp.v.props, s.transform(e[0], e[1], e[2], e[3], e[4], e[5], e[6], e[7], e[8], e[9], e[10], e[11], e[12], e[13], e[14], e[15])
        } else t ? (e = this.finalTransform.mProp.v.props, s.cloneFromProps(e)) : s.cloneFromProps(this.finalTransform.mProp.v.props);
        return t && (e = t.mat.props, s.transform(e[0], e[1], e[2], e[3], e[4], e[5], e[6], e[7], e[8], e[9], e[10], e[11], e[12], e[13], e[14], e[15]), this.finalTransform.opacity *= t.opacity, this.finalTransform.opMdf = t.opMdf ? !0 : this.finalTransform.opMdf, this.finalTransform.matMdf = t.matMdf ? !0 : this.finalTransform.matMdf), this.data.hasMask && (this.globalData.renderer.save(!0), this.maskManager.renderFrame(s)), this.isVisible
    }, CVBaseElement.prototype.getCurrentAnimData = function() {
        return this.currentAnimData
    }, CVBaseElement.prototype.addMasks = function(t) {
        this.maskManager = new CVMaskElement(t, this, this.globalData)
    }, CVBaseElement.prototype.destroy = function() {
        this.canvasContext = null, this.data = null, this.globalData = null, this.maskManager && this.maskManager.destroy()
    }, CVBaseElement.prototype.mHelper = new Matrix, createElement(CVBaseElement, CVCompElement), CVCompElement.prototype.prepareFrame = function(t) {
        if (this.parent.prepareFrame.call(this, t), this.isVisible !== !1) {
            var e = t;
            this.tm && (e = this.tm.v, e === this.data.op && (e = this.data.op - 1)), this.renderedFrame = e;
            var s, i = this.elements.length;
            for (s = 0; i > s; s += 1) this.elements[s].prepareFrame(e - this.layers[s].st)
        }
    }, CVCompElement.prototype.renderFrame = function(t) {
        if (this.parent.renderFrame.call(this, t) !== !1) {
            var e, s = this.layers.length;
            for (e = s - 1; e >= 0; e -= 1) this.elements[e].renderFrame(this.finalTransform);
            this.data.hasMask && this.globalData.renderer.restore(!0), this.firstFrame && (this.firstFrame = !1)
        }
    }, CVCompElement.prototype.setElements = function(t) {
        this.elements = t
    }, CVCompElement.prototype.getElements = function() {
        return this.elements
    }, CVCompElement.prototype.destroy = function() {
        var t, e = this.layers.length;
        for (t = e - 1; t >= 0; t -= 1) this.elements[t].destroy();
        this.layers = null, this.elements = null, this.parent.destroy.call()
    }, createElement(CVBaseElement, CVImageElement), CVImageElement.prototype.createElements = function() {
        var t = this,
            e = function() {
                t.animationItem.elementLoaded()
            },
            s = function() {
                t.failed = !0, t.animationItem.elementLoaded()
            };
        this.img = new Image, this.img.addEventListener("load", e, !1), this.img.addEventListener("error", s, !1), this.img.src = this.path + this.assetData.p, this.parent.createElements.call(this)
    }, CVImageElement.prototype.renderFrame = function(t) {
        if (!this.failed && this.parent.renderFrame.call(this, t) !== !1) {
            var e = this.canvasContext;
            this.globalData.renderer.save();
            var s = this.finalTransform.mat.props;
            this.globalData.renderer.ctxTransform(s), this.globalData.renderer.ctxOpacity(this.finalTransform.opacity), e.drawImage(this.img, 0, 0), this.globalData.renderer.restore(this.data.hasMask), this.firstFrame && (this.firstFrame = !1)
        }
    }, CVImageElement.prototype.destroy = function() {
        this.img = null, this.animationItem = null, this.parent.destroy.call()
    }, CVMaskElement.prototype.getMaskProperty = function(t) {
        return this.viewData[t]
    }, CVMaskElement.prototype.prepareFrame = function(t) {
        var e, s = this.dynamicProperties.length;
        for (e = 0; s > e; e += 1) this.dynamicProperties[e].getValue(t)
    }, CVMaskElement.prototype.renderFrame = function(t) {
        var e, s, i, a, r, n = this.ctx,
            o = this.data.masksProperties.length,
            h = !1;
        for (e = 0; o > e; e++)
            if ("n" !== this.masksProperties[e].mode) {
                h === !1 && (n.beginPath(), h = !0), this.masksProperties[e].inv && (n.moveTo(0, 0), n.lineTo(this.globalData.compWidth, 0), n.lineTo(this.globalData.compWidth, this.globalData.compHeight), n.lineTo(0, this.globalData.compHeight), n.lineTo(0, 0)), r = this.viewData[e].v, s = t.applyToPointArray(r.v[0][0], r.v[0][1], 0), n.moveTo(s[0], s[1]);
                var l, p = r.v.length;
                for (l = 1; p > l; l++) s = t.applyToPointArray(r.o[l - 1][0], r.o[l - 1][1], 0), i = t.applyToPointArray(r.i[l][0], r.i[l][1], 0), a = t.applyToPointArray(r.v[l][0], r.v[l][1], 0), n.bezierCurveTo(s[0], s[1], i[0], i[1], a[0], a[1]);

                s = t.applyToPointArray(r.o[l - 1][0], r.o[l - 1][1], 0), i = t.applyToPointArray(r.i[0][0], r.i[0][1], 0), a = t.applyToPointArray(r.v[0][0], r.v[0][1], 0), n.bezierCurveTo(s[0], s[1], i[0], i[1], a[0], a[1])
            }
        h && n.clip()
    }, CVMaskElement.prototype.getMask = function(t) {
        for (var e = 0, s = this.masksProperties.length; s > e;) {
            if (this.masksProperties[e].nm === t) return {
                maskPath: this.viewData[e].pv
            };
            e += 1
        }
    }, CVMaskElement.prototype.destroy = function() {
        this.ctx = null
    }, createElement(CVBaseElement, CVShapeElement), CVShapeElement.prototype.lcEnum = {
        1: "butt",
        2: "round",
        3: "butt"
    }, CVShapeElement.prototype.ljEnum = {
        1: "miter",
        2: "round",
        3: "butt"
    }, CVShapeElement.prototype.transformHelper = {
        opacity: 1,
        mat: new Matrix,
        matMdf: !1,
        opMdf: !1
    }, CVShapeElement.prototype.dashResetter = [], CVShapeElement.prototype.createElements = function() {
        this.parent.createElements.call(this), this.searchShapes(this.shapesData, this.viewData, this.dynamicProperties, []), this.buildExpressionInterface()
    }, CVShapeElement.prototype.searchShapes = function(t, e, s, i) {
        var a, r, n, o, h = t.length - 1,
            l = [],
            p = [];
        for (a = h; a >= 0; a -= 1)
            if ("fl" == t[a].ty || "st" == t[a].ty) {
                if (o = {
                        type: t[a].ty,
                        elements: []
                    }, e[a] = {}, e[a].c = PropertyFactory.getProp(this, t[a].c, 1, null, s), e[a].c.k || (o.co = "rgb(" + bm_floor(e[a].c.v[0]) + "," + bm_floor(e[a].c.v[1]) + "," + bm_floor(e[a].c.v[2]) + ")"), e[a].o = PropertyFactory.getProp(this, t[a].o, 0, .01, s), "st" == t[a].ty && (o.lc = this.lcEnum[t[a].lc] || "round", o.lj = this.ljEnum[t[a].lj] || "round", 1 == t[a].lj && (o.ml = t[a].ml), e[a].w = PropertyFactory.getProp(this, t[a].w, 0, null, s), e[a].w.k || (o.wi = e[a].w.v), t[a].d)) {
                    var m = PropertyFactory.getDashProp(this, t[a].d, "canvas", s);
                    e[a].d = m, e[a].d.k || (o.da = e[a].d.dasharray, o["do"] = e[a].d.dashoffset)
                }
                this.stylesList.push(o), e[a].style = o, l.push(e[a].style)
            } else if ("gr" == t[a].ty) e[a] = {
            it: []
        }, this.searchShapes(t[a].it, e[a].it, s, i);
        else if ("tr" == t[a].ty) e[a] = {
            transform: {
                mat: new Matrix,
                opacity: 1,
                matMdf: !1,
                opMdf: !1,
                op: PropertyFactory.getProp(this, t[a].o, 0, .01, s),
                mProps: PropertyFactory.getProp(this, t[a], 2, null, s)
            },
            elements: []
        };
        else if ("sh" == t[a].ty || "rc" == t[a].ty || "el" == t[a].ty || "sr" == t[a].ty) {
            e[a] = {
                nodes: [],
                trNodes: [],
                tr: [0, 0, 0, 0, 0, 0]
            };
            var f = 4;
            "rc" == t[a].ty ? f = 5 : "el" == t[a].ty ? f = 6 : "sr" == t[a].ty && (f = 7), i.length && (t[a].trimmed = !0), e[a].sh = PropertyFactory.getShapeProp(this, t[a], f, s, i), n = this.stylesList.length;
            var d = !1,
                c = !1;
            for (r = 0; n > r; r += 1) this.stylesList[r].closed || (this.stylesList[r].elements.push(e[a]), "st" === this.stylesList[r].type ? d = !0 : c = !0);
            e[a].st = d, e[a].fl = c
        } else if ("tm" == t[a].ty) {
            var u = {
                closed: !1,
                trimProp: PropertyFactory.getProp(this, t[a], 7, null, s)
            };
            i.push(u), p.push(u)
        }
        for (h = l.length, a = 0; h > a; a += 1) l[a].closed = !0;
        for (h = p.length, a = 0; h > a; a += 1) p[a].closed = !0
    }, CVShapeElement.prototype.renderFrame = function(t) {
        this.parent.renderFrame.call(this, t) !== !1 && (this.transformHelper.mat.reset(), this.transformHelper.opacity = this.finalTransform.opacity, this.transformHelper.matMdf = !1, this.transformHelper.opMdf = this.finalTransform.opMdf, this.renderShape(this.transformHelper, null, null, !0), this.data.hasMask && this.globalData.renderer.restore(!0))
    }, CVShapeElement.prototype.renderShape = function(t, e, s, i) {
        var a, r;
        if (!e)
            for (e = this.shapesData, r = this.stylesList.length, a = 0; r > a; a += 1) this.stylesList[a].d = "", this.stylesList[a].mdf = !1;
        s || (s = this.viewData), r = e.length - 1;
        var n, o;
        for (n = t, a = r; a >= 0; a -= 1)
            if ("tr" == e[a].ty) {
                n = s[a].transform;
                var h = s[a].transform.mProps.v.props;
                if (n.matMdf = n.mProps.mdf, n.opMdf = n.op.mdf, o = n.mat, o.cloneFromProps(h), t) {
                    var l = t.mat.props;
                    n.opacity = t.opacity, n.opacity *= s[a].transform.op.v, n.matMdf = t.matMdf ? !0 : n.matMdf, n.opMdf = t.opMdf ? !0 : n.opMdf, o.transform(l[0], l[1], l[2], l[3], l[4], l[5], l[6], l[7], l[8], l[9], l[10], l[11], l[12], l[13], l[14], l[15])
                } else n.opacity = n.op.o
            } else "sh" == e[a].ty || "el" == e[a].ty || "rc" == e[a].ty || "sr" == e[a].ty ? this.renderPath(e[a], s[a], n) : "fl" == e[a].ty ? this.renderFill(e[a], s[a], n) : "st" == e[a].ty ? this.renderStroke(e[a], s[a], n) : "gr" == e[a].ty ? this.renderShape(n, e[a].it, s[a].it) : "tm" == e[a].ty;
        if (i) {
            r = this.stylesList.length;
            var p, m, f, d, c, u, y, v = this.globalData.renderer,
                g = this.globalData.canvasContext;
            for (v.save(), v.ctxTransform(this.finalTransform.mat.props), a = 0; r > a; a += 1)
                if (y = this.stylesList[a].type, "st" !== y || 0 !== this.stylesList[a].wi) {
                    for (v.save(), c = this.stylesList[a].elements, m = c.length, "st" === y ? (g.strokeStyle = this.stylesList[a].co, g.lineWidth = this.stylesList[a].wi, g.lineCap = this.stylesList[a].lc, g.lineJoin = this.stylesList[a].lj, g.miterLimit = this.stylesList[a].ml || 0) : g.fillStyle = this.stylesList[a].co, v.ctxOpacity(this.stylesList[a].coOp), "st" !== y && g.beginPath(), p = 0; m > p; p += 1) {
                        for ("st" === y && (g.beginPath(), this.stylesList[a].da ? (g.setLineDash(this.stylesList[a].da), g.lineDashOffset = this.stylesList[a]["do"], this.globalData.isDashed = !0) : this.globalData.isDashed && (g.setLineDash(this.dashResetter), this.globalData.isDashed = !1)), u = c[p].trNodes, d = u.length, f = 0; d > f; f += 1) "m" == u[f].t ? g.moveTo(u[f].p[0], u[f].p[1]) : "c" == u[f].t ? g.bezierCurveTo(u[f].p1[0], u[f].p1[1], u[f].p2[0], u[f].p2[1], u[f].p3[0], u[f].p3[1]) : g.closePath();
                        "st" === y && g.stroke()
                    }
                    "st" !== y && g.fill(), v.restore()
                }
            v.restore(), this.firstFrame && (this.firstFrame = !1)
        }
    }, CVShapeElement.prototype.renderPath = function(t, e, s) {
        var i, a, r = e.sh.v;
        if (r.v) {
            i = r.v.length;
            var n = s.matMdf || e.sh.mdf || this.firstFrame;
            if (n) {
                var o = e.trNodes;
                o.length = 0;
                var h = r.s ? r.s : [];
                for (a = 1; i > a; a += 1) h[a - 1] ? o.push({
                    t: "m",
                    p: s.mat.applyToPointArray(h[a - 1][0], h[a - 1][1], 0)
                }) : 1 == a && o.push({
                    t: "m",
                    p: s.mat.applyToPointArray(r.v[0][0], r.v[0][1], 0)
                }), o.push({
                    t: "c",
                    p1: s.mat.applyToPointArray(r.o[a - 1][0], r.o[a - 1][1], 0),
                    p2: s.mat.applyToPointArray(r.i[a][0], r.i[a][1], 0),
                    p3: s.mat.applyToPointArray(r.v[a][0], r.v[a][1], 0)
                });
                if (1 == i && o.push(h[0] ? {
                        t: "m",
                        p: s.mat.applyToPointArray(h[0][0], h[0][1], 0)
                    } : {
                        t: "m",
                        p: s.mat.applyToPointArray(r.v[0][0], r.v[0][1], 0)
                    }), i && t.closed && (!t.trimmed || r.c) && (o.push({
                        t: "c",
                        p1: s.mat.applyToPointArray(r.o[a - 1][0], r.o[a - 1][1], 0),
                        p2: s.mat.applyToPointArray(r.i[0][0], r.i[0][1], 0),
                        p3: s.mat.applyToPointArray(r.v[0][0], r.v[0][1], 0)
                    }), o.push({
                        t: "z"
                    })), e.st)
                    for (a = 0; 16 > a; a += 1) e.tr[a] = s.mat.props[a];
                e.trNodes = o
            }
        }
    }, CVShapeElement.prototype.renderFill = function(t, e, s) {
        var i = e.style;
        (e.c.mdf || this.firstFrame) && (i.co = "rgb(" + bm_floor(e.c.v[0]) + "," + bm_floor(e.c.v[1]) + "," + bm_floor(e.c.v[2]) + ")"), (e.o.mdf || s.opMdf || this.firstFrame) && (i.coOp = e.o.v * s.opacity)
    }, CVShapeElement.prototype.renderStroke = function(t, e, s) {
        var i = e.style,
            a = e.d;
        a && (a.mdf || this.firstFrame) && (i.da = a.dasharray, i["do"] = a.dashoffset), (e.c.mdf || this.firstFrame) && (i.co = "rgb(" + bm_floor(e.c.v[0]) + "," + bm_floor(e.c.v[1]) + "," + bm_floor(e.c.v[2]) + ")"), (e.o.mdf || s.opMdf || this.firstFrame) && (i.coOp = e.o.v * s.opacity), (e.w.mdf || this.firstFrame) && (i.wi = e.w.v)
    }, CVShapeElement.prototype.destroy = function() {
        this.shapesData = null, this.globalData = null, this.canvasContext = null, this.stylesList.length = 0, this.viewData.length = 0, this.parent.destroy.call()
    }, extendPrototype(ShapeInterface, CVShapeElement), createElement(CVBaseElement, CVSolidElement), CVSolidElement.prototype.renderFrame = function(t) {
        if (this.parent.renderFrame.call(this, t) !== !1) {
            var e = this.canvasContext;
            this.globalData.renderer.save();
            var s = this.finalTransform.mat.props;
            this.globalData.renderer.ctxTransform(s), this.globalData.renderer.ctxOpacity(this.finalTransform.opacity), e.fillStyle = this.data.sc, e.fillRect(0, 0, this.data.sw, this.data.sh), this.globalData.renderer.restore(this.data.hasMask), this.firstFrame && (this.firstFrame = !1)
        }
    }, createElement(CVBaseElement, CVTextElement), CVTextElement.prototype.init = ITextElement.prototype.init, CVTextElement.prototype.getMeasures = ITextElement.prototype.getMeasures, CVTextElement.prototype.getMult = ITextElement.prototype.getMult, CVTextElement.prototype.tHelper = document.createElement("canvas").getContext("2d"), CVTextElement.prototype.createElements = function() {
        this.parent.createElements.call(this);
        var t = this.data.t.d,
            e = !1;
        t.fc ? (e = !0, this.values.fill = "rgb(" + t.fc[0] + "," + t.fc[1] + "," + t.fc[2] + ")") : this.values.fill = "rgba(0,0,0,0)", this.fill = e;
        var s = !1;
        t.sc && (s = !0, this.values.stroke = "rgb(" + t.sc[0] + "," + t.sc[1] + "," + t.sc[2] + ")", this.values.sWidth = t.sw);
        var i, a, r = this.globalData.fontManager.getFontByName(t.f),
            n = t.l,
            o = this.mHelper;
        this.stroke = s, this.values.fValue = t.s + "px " + this.globalData.fontManager.getFontByName(t.f).fFamily, a = t.t.length, this.tHelper.font = this.values.fValue;
        var h, l, p, m, f, d, c, u, y, v, g = this.data.singleShape;
        if (g) var b = 0,
            E = 0,
            P = t.lineWidths,
            k = t.boxWidth,
            S = !0;
        for (i = 0; a > i; i += 1) {
            h = this.globalData.fontManager.getCharData(t.t.charAt(i), r.fStyle, this.globalData.fontManager.getFontByName(t.f).fFamily);
            var l;
            if (l = h ? h.data : null, o.reset(), g && n[i].n && (b = 0, E += t.yOffset, E += S ? 1 : 0, S = !1), l && l.shapes) {
                if (f = l.shapes[0].it, c = f.length, o.scale(t.s / 100, t.s / 100), g) {
                    switch (t.ps && o.translate(t.ps[0], t.ps[1] + t.ascent, 0), t.j) {
                        case 1:
                            o.translate(t.justifyOffset + (k - P[n[i].line]), 0, 0);
                            break;
                        case 2:
                            o.translate(t.justifyOffset + (k - P[n[i].line]) / 2, 0, 0)
                    }
                    o.translate(b, E, 0)
                }
                for (y = new Array(c), d = 0; c > d; d += 1) {
                    for (m = f[d].ks.k.i.length, u = f[d].ks.k, v = [], p = 1; m > p; p += 1) 1 == p && v.push(o.applyToX(u.v[0][0], u.v[0][1], 0), o.applyToY(u.v[0][0], u.v[0][1], 0)), v.push(o.applyToX(u.o[p - 1][0], u.o[p - 1][1], 0), o.applyToY(u.o[p - 1][0], u.o[p - 1][1], 0), o.applyToX(u.i[p][0], u.i[p][1], 0), o.applyToY(u.i[p][0], u.i[p][1], 0), o.applyToX(u.v[p][0], u.v[p][1], 0), o.applyToY(u.v[p][0], u.v[p][1], 0));
                    v.push(o.applyToX(u.o[p - 1][0], u.o[p - 1][1], 0), o.applyToY(u.o[p - 1][0], u.o[p - 1][1], 0), o.applyToX(u.i[0][0], u.i[0][1], 0), o.applyToY(u.i[0][0], u.i[0][1], 0), o.applyToX(u.v[0][0], u.v[0][1], 0), o.applyToY(u.v[0][0], u.v[0][1], 0)), y[d] = v
                }
            } else y = [];
            g && (b += n[i].l), this.textSpans.push({
                elem: y
            })
        }
    }, CVTextElement.prototype.renderFrame = function(t) {
        if (this.parent.renderFrame.call(this, t) !== !1) {
            var e = this.canvasContext,
                s = this.finalTransform.mat.props;
            this.globalData.renderer.save(), this.globalData.renderer.ctxTransform(s), this.globalData.renderer.ctxOpacity(this.finalTransform.opacity), e.font = this.values.fValue, e.lineCap = "butt", e.lineJoin = "miter", e.miterLimit = 4, this.data.singleShape || this.getMeasures();
            var i, a, r, n, o, h, l = this.renderedLetters,
                p = this.data.t.d.l;
            a = p.length;
            var m, f, d, c = null,
                u = null,
                y = null;
            for (i = 0; a > i; i += 1)
                if (!p[i].n) {
                    if (m = l[i], m && (this.globalData.renderer.save(), this.globalData.renderer.ctxTransform(m.props), this.globalData.renderer.ctxOpacity(m.o)), this.fill) {
                        for (m && m.fc ? c !== m.fc && (c = m.fc, e.fillStyle = m.fc) : c !== this.values.fill && (c = this.values.fill, e.fillStyle = this.values.fill), f = this.textSpans[i].elem, n = f.length, this.globalData.canvasContext.beginPath(), r = 0; n > r; r += 1)
                            for (d = f[r], h = d.length, this.globalData.canvasContext.moveTo(d[0], d[1]), o = 2; h > o; o += 6) this.globalData.canvasContext.bezierCurveTo(d[o], d[o + 1], d[o + 2], d[o + 3], d[o + 4], d[o + 5]);
                        this.globalData.canvasContext.closePath(), this.globalData.canvasContext.fill()
                    }
                    if (this.stroke) {
                        for (m && m.sw ? y !== m.sw && (y = m.sw, e.lineWidth = m.sw) : y !== this.values.sWidth && (y = this.values.sWidth, e.lineWidth = this.values.sWidth), m && m.sc ? u !== m.sc && (u = m.sc, e.strokeStyle = m.sc) : u !== this.values.stroke && (u = this.values.stroke, e.strokeStyle = this.values.stroke), f = this.textSpans[i].elem, n = f.length, this.globalData.canvasContext.beginPath(), r = 0; n > r; r += 1)
                            for (d = f[r], h = d.length, this.globalData.canvasContext.moveTo(d[0], d[1]), o = 2; h > o; o += 6) this.globalData.canvasContext.bezierCurveTo(d[o], d[o + 1], d[o + 2], d[o + 3], d[o + 4], d[o + 5]);
                        this.globalData.canvasContext.closePath(), this.globalData.canvasContext.stroke()
                    }
                    m && this.globalData.renderer.restore()
                }
            this.globalData.renderer.restore(this.data.hasMask), this.firstFrame && (this.firstFrame = !1)
        }
    }, createElement(BaseElement, HBaseElement), HBaseElement.prototype.appendNodeToParent = function(t) {
        if (this.placeholder) {
            var e = this.placeholder.phElement;
            e.parentNode.insertBefore(t, e)
        } else this.parentContainer.appendChild(t)
    }, HBaseElement.prototype.createElements = function() {
        this.data.hasMask ? (this.layerElement = document.createElementNS(svgNS, "svg"), this.appendNodeToParent(this.layerElement), this.maskedElement = this.layerElement) : this.layerElement = this.parentContainer, !this.data.ln || 4 !== this.data.ty && 0 !== this.data.ty || (this.layerElement === this.parentContainer && (this.layerElement = document.createElementNS(svgNS, "g"), this.appendNodeToParent(this.layerElement)), this.layerElement.setAttribute("id", this.data.ln)), this.layerElement !== this.parentContainer && (this.placeholder = null)
    }, HBaseElement.prototype.renderFrame = function(t) {
        if (3 === this.data.ty) return !1;
        if (this.currentFrameNum === this.lastNum || !this.isVisible) return this.isVisible;
        this.lastNum = this.currentFrameNum, this.data.hasMask && this.maskManager.renderFrame(), this.finalTransform.opMdf = this.finalTransform.op.mdf, this.finalTransform.matMdf = this.finalTransform.mProp.mdf, this.finalTransform.opacity = this.finalTransform.op.v, this.firstFrame && (this.finalTransform.opMdf = !0, this.finalTransform.matMdf = !0);
        var e, s = this.finalTransform.mat;
        if (this.hierarchy) {
            var i, a = this.hierarchy.length;
            for (e = this.finalTransform.mProp.v.props, s.cloneFromProps(e), i = 0; a > i; i += 1) this.finalTransform.matMdf = this.hierarchy[i].finalTransform.mProp.mdf ? !0 : this.finalTransform.matMdf, e = this.hierarchy[i].finalTransform.mProp.v.props, s.transform(e[0], e[1], e[2], e[3], e[4], e[5], e[6], e[7], e[8], e[9], e[10], e[11], e[12], e[13], e[14], e[15])
        } else this.isVisible && this.finalTransform.matMdf && (t ? (e = this.finalTransform.mProp.v.props, s.cloneFromProps(e)) : s.cloneFromProps(this.finalTransform.mProp.v.props));
        return t && (e = t.mat.props, s.cloneFromProps(e), this.finalTransform.opacity *= t.opacity, this.finalTransform.opMdf = t.opMdf ? !0 : this.finalTransform.opMdf, this.finalTransform.matMdf = t.matMdf ? !0 : this.finalTransform.matMdf), this.finalTransform.matMdf && (this.layerElement.style.transform = this.layerElement.style.webkitTransform = s.toCSS()), this.finalTransform.opMdf && (this.layerElement.style.opacity = this.finalTransform.opacity), this.isVisible
    }, HBaseElement.prototype.destroy = function() {
        this.layerElement = null, this.parentContainer = null, this.matteElement && (this.matteElement = null), this.maskManager && (this.maskManager.destroy(), this.maskManager = null)
    }, HBaseElement.prototype.getDomElement = function() {
        return this.layerElement
    }, HBaseElement.prototype.addMasks = function(t) {
        this.maskManager = new MaskElement(t, this, this.globalData)
    }, HBaseElement.prototype.hide = function() {}, HBaseElement.prototype.setMatte = function() {}, createElement(HBaseElement, HSolidElement), HSolidElement.prototype.createElements = function() {
        var t = document.createElement("div");
        styleDiv(t);
        var e = document.createElementNS(svgNS, "svg");
        e.setAttribute("width", this.data.sw), e.setAttribute("height", this.data.sh), t.appendChild(e), this.layerElement = t, this.parentContainer.appendChild(t), this.innerElem = t, this.data.ln && this.innerElem.setAttribute("id", this.data.ln);
        var s = document.createElementNS(svgNS, "rect");
        s.setAttribute("width", this.data.sw), s.setAttribute("height", this.data.sh), s.setAttribute("fill", this.data.sc), e.appendChild(s), this.data.hasMask && (this.maskedElement = s)
    }, HSolidElement.prototype.hide = function() {
        this.hidden || (this.innerElem.style.display = "none", this.hidden = !0)
    }, HSolidElement.prototype.renderFrame = function(t) {
        var e = this.parent.renderFrame.call(this, t);
        return e === !1 ? void this.hide() : (this.hidden && (this.hidden = !1, this.innerElem.style.display = "block"), void(this.firstFrame && (this.firstFrame = !1)))
    }, HSolidElement.prototype.destroy = function() {
        this.parent.destroy.call(), this.innerElem = null
    }, createElement(HBaseElement, HCompElement), extendPrototype(ExpressionComp, HCompElement), HCompElement.prototype.getDomElement = function() {
        return this.composingElement
    }, HCompElement.prototype.getComposingElement = function() {
        return this.layerElement
    }, HCompElement.prototype.createElements = function() {
        if (this.layerElement = document.createElement("div"), styleDiv(this.layerElement), this.data.ln && this.layerElement.setAttribute("id", this.data.ln), this.layerElement.style.clip = "rect(0px, " + this.data.w + "px, " + this.data.h + "px, 0px)", this.layerElement !== this.parentContainer && (this.placeholder = null), this.data.hasMask) {
            var t = document.createElementNS(svgNS, "svg");
            t.setAttribute("width", this.data.w), t.setAttribute("height", this.data.h);
            var e = document.createElementNS(svgNS, "g");
            t.appendChild(e), this.layerElement.appendChild(t), this.maskedElement = e, this.composingElement = e
        } else this.composingElement = this.layerElement;
        this.appendNodeToParent(this.layerElement)
    }, HCompElement.prototype.hide = ICompElement.prototype.hide, HCompElement.prototype.prepareFrame = ICompElement.prototype.prepareFrame, HCompElement.prototype.setElements = ICompElement.prototype.setElements, HCompElement.prototype.getElements = ICompElement.prototype.getElements, HCompElement.prototype.destroy = ICompElement.prototype.destroy, HCompElement.prototype.renderFrame = function(t) {
        var e, s = this.parent.renderFrame.call(this, t),
            i = this.layers.length;
        if (s === !1) return void this.hide();
        for (this.hidden = !1, e = 0; i > e; e += 1) this.elements[e].renderFrame();
        this.firstFrame && (this.firstFrame = !1)
    }, createElement(HBaseElement, HShapeElement);
    var parent = HShapeElement.prototype.parent;
    extendPrototype(IShapeElement, HShapeElement), HShapeElement.prototype.parent = parent, HShapeElement.prototype.createElements = function() {
        var t = document.createElement("div");
        styleDiv(t);
        var e = document.createElementNS(svgNS, "svg");
        if (999999 === this.data.bounds.l, e.setAttribute("width", this.data.bounds.r - this.data.bounds.l), e.setAttribute("height", this.data.bounds.b - this.data.bounds.t), e.setAttribute("viewBox", this.data.bounds.l + " " + this.data.bounds.t + " " + (this.data.bounds.r - this.data.bounds.l) + " " + (this.data.bounds.b - this.data.bounds.t)), e.style.transform = e.style.webkitTransform = "translate(" + this.data.bounds.l + "px," + this.data.bounds.t + "px)", this.data.hasMask) {
            var s = document.createElementNS(svgNS, "g");
            t.appendChild(e), e.appendChild(s), this.maskedElement = s, this.layerElement = s, this.shapesContainer = s
        } else t.appendChild(e), this.layerElement = e, this.shapesContainer = document.createElementNS(svgNS, "g"), this.layerElement.appendChild(this.shapesContainer);
        this.parentContainer.appendChild(t), this.innerElem = t, this.data.ln && this.innerElem.setAttribute("id", this.data.ln), this.searchShapes(this.shapesData, this.viewData, this.dynamicProperties, []), this.buildExpressionInterface(), this.layerElement = t
    }, HShapeElement.prototype.renderFrame = function(t) {
        var e = this.parent.renderFrame.call(this, t);
        return e === !1 ? void this.hide() : (this.hidden = !1, this.transformHelper.opacity = this.finalTransform.opacity, this.transformHelper.matMdf = !1, this.transformHelper.opMdf = this.finalTransform.opMdf, void this.renderShape(this.transformHelper, null, null, !0))
    }, createElement(HBaseElement, HTextElement), HTextElement.prototype.init = ITextElement.prototype.init, HTextElement.prototype.getMeasures = ITextElement.prototype.getMeasures, HTextElement.prototype.createPathShape = ITextElement.prototype.createPathShape, HTextElement.prototype.createElements = function() {
        this.isMasked = this.checkMasks();
        var t = this.data.t.d,
            e = document.createElement("div");
        if (styleDiv(e), this.layerElement = e, this.isMasked) {
            this.renderType = "svg";
            var s = document.createElementNS(svgNS, "svg");
            this.cont = s, this.compW = this.comp.data ? this.comp.data.w : this.globalData.compSize.w, this.compH = this.comp.data ? this.comp.data.h : this.globalData.compSize.h, s.setAttribute("width", this.compW), s.setAttribute("height", this.compH);
            var i = document.createElementNS(svgNS, "g");
            s.appendChild(i), e.appendChild(s), this.maskedElement = i, this.innerElem = i
        } else this.renderType = "html", this.innerElem = e;
        this.parentContainer.appendChild(e), this.innerElem.style.color = this.innerElem.style.fill = t.fc ? "rgb(" + t.fc[0] + "," + t.fc[1] + "," + t.fc[2] + ")" : "rgba(0,0,0,0)", t.sc && (this.innerElem.style.stroke = "rgb(" + t.sc[0] + "," + t.sc[1] + "," + t.sc[2] + ")", this.innerElem.style.strokeWidth = t.sw + "px");
        var a = this.globalData.fontManager.getFontByName(t.f);
        if (!this.globalData.fontManager.chars)
            if (this.innerElem.style.fontSize = t.s + "px", this.innerElem.style.lineHeight = t.s + "px", a.fClass) this.innerElem.className = a.fClass;
            else {
                this.innerElem.style.fontFamily = a.fFamily;
                var r = t.fWeight,
                    n = t.fStyle;
                this.innerElem.style.fontStyle = n, this.innerElem.style.fontWeight = r
            }
        var o, h, l = t.l;
        h = l.length;
        var p, m, f, d, c = this.mHelper,
            u = "";
        for (o = 0; h > o; o += 1) {
            if (this.globalData.fontManager.chars ? (p = document.createElementNS(svgNS, "path"), this.isMasked || (m = document.createElement("div"), f = document.createElementNS(svgNS, "svg"), m.appendChild(f), f.appendChild(p), styleDiv(m)), p.setAttribute("stroke-linecap", "butt"), p.setAttribute("stroke-linejoin", "round"), p.setAttribute("stroke-miterlimit", "4")) : this.isMasked ? p = document.createElementNS(svgNS, "text") : (m = document.createElement("span"), styleDiv(m), p = document.createElement("span"), styleDiv(p), m.appendChild(p)), this.globalData.fontManager.chars) {
                var y, v = this.globalData.fontManager.getCharData(t.t.charAt(o), a.fStyle, this.globalData.fontManager.getFontByName(t.f).fFamily);
                if (y = v ? v.data : null, c.reset(), y && y.shapes && (d = y.shapes[0].it, c.scale(t.s / 100, t.s / 100), u = this.createPathShape(c, d), p.setAttribute("d", u)), this.isMasked) this.innerElem.appendChild(p);
                else {
                    this.innerElem.appendChild(m);
                    var g = t.s / 100;
                    if (y && y.shapes) {
                        var b = Math.ceil(y.bounds.r * g),
                            E = Math.floor(y.bounds.t * g),
                            P = Math.floor(y.bounds.l * g),
                            k = Math.ceil(y.bounds.b * g);
                        f.setAttribute("width", b - P), f.setAttribute("height", k - E), f.setAttribute("viewBox", P + " " + E + " " + (b - P) + " " + (k - E)), f.style.transform = f.style.webkitTransform = "translate(" + P + "px," + E + "px)", l[o].yOffset = E
                    } else f.setAttribute("width", 1), f.setAttribute("height", 1)
                }
            } else p.textContent = l[o].val, p.setAttributeNS("http://www.w3.org/XML/1998/namespace", "xml:space", "preserve"), this.isMasked ? this.innerElem.appendChild(p) : (this.innerElem.appendChild(m), p.style.transform = p.style.webkitTransform = "translate3d(0," + -t.s / 1.2 + "px,0)");
            this.textSpans.push(this.isMasked ? p : m), this.textPaths.push(p)
        }
    }, HTextElement.prototype.hide = SVGTextElement.prototype.hide, HTextElement.prototype.renderFrame = function(t) {
        var e = this.parent.renderFrame.call(this, t);
        if (e === !1) return void this.hide();
        if (this.hidden && (this.hidden = !1, this.innerElem.style.display = "block"), this.data.singleShape) {
            if (!this.firstFrame) return;
            this.isMasked && this.finalTransform.matMdf && (this.cont.setAttribute("viewBox", -this.finalTransform.mProp.p.v[0] + " " + -this.finalTransform.mProp.p.v[1] + " " + this.compW + " " + this.compH), this.cont.style.transform = this.cont.style.webkitTransform = "translate(" + -this.finalTransform.mProp.p.v[0] + "px," + -this.finalTransform.mProp.p.v[1] + "px)")
        }
        if (this.getMeasures(), this.lettersChangedFlag) {
            var s, i, a = this.renderedLetters,
                r = this.data.t.d.l;
            i = r.length;
            var n;
            for (s = 0; i > s; s += 1) r[s].n || (n = a[s], this.isMasked ? this.textSpans[s].setAttribute("transform", n.m) : this.textSpans[s].style.transform = this.textSpans[s].style.webkitTransform = n.m, this.textSpans[s].style.opacity = n.o, n.sw && this.textPaths[s].setAttribute("stroke-width", n.sw), n.sc && this.textPaths[s].setAttribute("stroke", n.sc), n.fc && (this.textPaths[s].setAttribute("fill", n.fc), this.textPaths[s].style.color = n.fc));
            if (this.isMasked) {
                var o = this.innerElem.getBBox();
                this.currentBBox.w !== o.width && (this.currentBBox.w = o.width, this.cont.setAttribute("width", o.width)), this.currentBBox.h !== o.height && (this.currentBBox.h = o.height, this.cont.setAttribute("height", o.height)), (this.currentBBox.w !== o.width || this.currentBBox.h !== o.height || this.currentBBox.x !== o.x || this.currentBBox.y !== o.y) && (this.currentBBox.w = o.width, this.currentBBox.h = o.height, this.currentBBox.x = o.x, this.currentBBox.y = o.y, this.cont.setAttribute("viewBox", this.currentBBox.x + " " + this.currentBBox.y + " " + this.currentBBox.w + " " + this.currentBBox.h), this.cont.style.transform = this.cont.style.webkitTransform = "translate(" + this.currentBBox.x + "px," + this.currentBBox.y + "px)")
            }
            this.firstFrame && (this.firstFrame = !1)
        }
    }, HTextElement.prototype.destroy = SVGTextElement.prototype.destroy, createElement(HBaseElement, HImageElement), HImageElement.prototype.createElements = function() {
        var t, e = function() {
                this.imageElem.setAttributeNS("http://www.w3.org/1999/xlink", "href", this.path + this.assetData.p)
            },
            s = new Image;
        if (this.data.hasMask) {
            var t = document.createElement("div");
            styleDiv(t);
            var i = document.createElementNS(svgNS, "svg");
            i.setAttribute("width", this.assetData.w), i.setAttribute("height", this.assetData.h), t.appendChild(i), this.imageElem = document.createElementNS(svgNS, "image"), this.imageElem.setAttribute("width", this.assetData.w + "px"), this.imageElem.setAttribute("height", this.assetData.h + "px"), i.appendChild(this.imageElem), this.layerElement = t, this.parentContainer.appendChild(t), this.innerElem = t, this.maskedElement = this.imageElem, s.addEventListener("load", e.bind(this), !1), s.addEventListener("error", e.bind(this), !1)
        } else styleDiv(s), this.layerElement = s, this.parentContainer.appendChild(s), this.innerElem = s;
        s.src = this.path + this.assetData.p, this.data.ln && this.innerElem.setAttribute("id", this.data.ln)
    }, HImageElement.prototype.hide = HSolidElement.prototype.hide, HImageElement.prototype.renderFrame = HSolidElement.prototype.renderFrame, HImageElement.prototype.destroy = HSolidElement.prototype.destroy, createElement(HBaseElement, HCameraElement), HCameraElement.prototype.setup = function() {
        var t, e, s = this.comp.threeDElements.length;
        for (t = 0; s > t; t += 1) e = this.comp.threeDElements[t], e[0].style.perspective = e[0].style.webkitPerspective = this.pe.v + "px", e[1].style.transformOrigin = e[1].style.mozTransformOrigin = e[1].style.webkitTransformOrigin = "0px 0px 0px", e[0].style.transform = e[0].style.webkitTransform = "matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1)"
    }, HCameraElement.prototype.createElements = function() {}, HCameraElement.prototype.hide = function() {}, HCameraElement.prototype.renderFrame = function() {
        var t, e, s = this.firstFrame;
        if (this.hierarchy)
            for (e = this.hierarchy.length, t = 0; e > t; t += 1) s = this.hierarchy[t].finalTransform.mProp.mdf ? !0 : s;
        if (s || this.p && this.p.mdf || this.px && (this.px.mdf || this.py.mdf || this.pz.mdf) || this.rx.mdf || this.ry.mdf || this.rz.mdf || this.or.mdf || this.a && this.a.mdf) {
            if (this.mat.reset(), this.p ? this.mat.translate(-this.p.v[0], -this.p.v[1], this.p.v[2]) : this.mat.translate(-this.px.v, -this.py.v, this.pz.v), this.a) {
                var i = [this.p.v[0] - this.a.v[0], this.p.v[1] - this.a.v[1], this.p.v[2] - this.a.v[2]],
                    a = Math.sqrt(Math.pow(i[0], 2) + Math.pow(i[1], 2) + Math.pow(i[2], 2)),
                    r = [i[0] / a, i[1] / a, i[2] / a],
                    n = Math.sqrt(r[2] * r[2] + r[0] * r[0]),
                    o = Math.atan2(r[1], n),
                    h = Math.atan2(r[0], -r[2]);
                this.mat.rotateY(h).rotateX(-o)
            }
            if (this.mat.rotateX(-this.rx.v).rotateY(-this.ry.v).rotateZ(this.rz.v), this.mat.rotateX(-this.or.v[0]).rotateY(-this.or.v[1]).rotateZ(this.or.v[2]), this.mat.translate(this.globalData.compSize.w / 2, this.globalData.compSize.h / 2, 0), this.mat.translate(0, 0, this.pe.v), this.hierarchy) {
                var l;
                for (e = this.hierarchy.length, t = 0; e > t; t += 1) l = this.hierarchy[t].finalTransform.mProp.iv.props, this.mat.transform(l[0], l[1], l[2], l[3], l[4], l[5], l[6], l[7], l[8], l[9], l[10], l[11], -l[12], -l[13], l[14], l[15])
            }
            e = this.comp.threeDElements.length;
            var p;
            for (t = 0; e > t; t += 1) p = this.comp.threeDElements[t], p[1].style.transform = p[1].style.webkitTransform = this.mat.toCSS()
        }
        this.firstFrame = !1
    }, HCameraElement.prototype.destroy = function() {};
    var animationManager = function() {
            function t(e) {
                var s = 0,
                    i = e.target;
                for (i.removeEventListener("destroy", t); P > s;) g[s].animation === i && (g.splice(s, 1), s -= 1, P -= 1), s += 1
            }

            function e(e, s) {
                if (!e) return null;
                for (var i = 0; P > i;) {
                    if (g[i].elem == e && null !== g[i].elem) return g[i].animation;
                    i += 1
                }
                var a = new AnimationItem;
                return a.setData(e, s), a.addEventListener("destroy", t), g.push({
                    elem: e,
                    animation: a
                }), P += 1, a
            }

            function s(e) {
                var s = new AnimationItem;
                return s.setParams(e), s.addEventListener("destroy", t), g.push({
                    elem: null,
                    animation: s
                }), P += 1, s
            }

            function i(t, e) {
                var s;
                for (s = 0; P > s; s += 1) g[s].animation.setSpeed(t, e)
            }

            function a(t, e) {
                var s;
                for (s = 0; P > s; s += 1) g[s].animation.setDirection(t, e)
            }

            function r(t) {
                var e;
                for (e = 0; P > e; e += 1) g[e].animation.play(t)
            }

            function n(t, e) {
                E = !1, b = Date.now();
                var s;
                for (s = 0; P > s; s += 1) g[s].animation.moveFrame(t, e)
            }

            function o(t) {
                var e, s = t - b;
                for (e = 0; P > e; e += 1) g[e].animation.advanceTime(s);
                b = t, requestAnimationFrame(o)
            }

            function h(t) {
                b = t, requestAnimationFrame(o)
            }

            function l(t) {
                var e;
                for (e = 0; P > e; e += 1) g[e].animation.pause(t)
            }

            function p(t, e, s) {
                var i;
                for (i = 0; P > i; i += 1) g[i].animation.goToAndStop(t, e, s)
            }

            function m(t) {
                var e;
                for (e = 0; P > e; e += 1) g[e].animation.stop(t)
            }

            function f(t) {
                var e;
                for (e = 0; P > e; e += 1) g[e].animation.togglePause(t)
            }

            function d(t) {
                var e;
                for (e = 0; P > e; e += 1) g[e].animation.destroy(t)
            }

            function c(t, s, i) {
                var a, r = document.getElementsByClassName("bodymovin"),
                    n = r.length;
                for (a = 0; n > a; a += 1) i && r[a].setAttribute("data-bm-type", i), e(r[a], t);
                if (s && 0 === n) {
                    i || (i = "svg");
                    var o = document.getElementsByTagName("body")[0];
                    o.innerHTML = "";
                    var h = document.createElement("div");
                    h.style.width = "100%", h.style.height = "100%", h.setAttribute("data-bm-type", i), o.appendChild(h), e(h, t)
                }
            }

            function u() {
                var t;
                for (t = 0; P > t; t += 1) g[t].animation.resize()
            }

            function y() {
                requestAnimationFrame(h)
            }
            var v = {},
                g = [],
                b = 0,
                E = !0,
                P = 0;
            return setTimeout(y, 0), v.registerAnimation = e, v.loadAnimation = s, v.setSpeed = i, v.setDirection = a, v.play = r, v.moveFrame = n, v.pause = l, v.stop = m, v.togglePause = f, v.searchAnimations = c, v.resize = u, v.start = y, v.goToAndStop = p, v.destroy = d, v
        }(),
        AnimationItem = function() {
            this._cbs = [], this.name = "", this.path = "", this.isLoaded = !1, this.currentFrame = 0, this.currentRawFrame = 0, this.totalFrames = 0, this.frameRate = 0, this.frameMult = 0, this.playSpeed = 1, this.playDirection = 1, this.pendingElements = 0, this.playCount = 0, this.prerenderFramesFlag = !0, this.repeat = "indefinite", this.animationData = {}, this.layers = [], this.assets = [], this.isPaused = !0, this.isScrolling = !1, this.autoplay = !1, this.loop = !0, this.renderer = null, this.animationID = randomString(10), this.renderedFrameCount = 0, this.scaleMode = "fit", this.math = Math, this.removed = !1, this.timeCompleted = 0, this.segmentPos = 0, this.segments = []
        };
    AnimationItem.prototype.setParams = function(t) {
        var e = this;
        t.context && (this.context = t.context), (t.wrapper || t.container) && (this.wrapper = t.wrapper || t.container);
        var s = t.animType ? t.animType : t.renderer ? t.renderer : "canvas";
        switch (s) {
            case "canvas":
                this.renderer = new CanvasRenderer(this, t.rendererSettings);
                break;
            case "svg":
                this.renderer = new SVGRenderer(this, t.rendererSettings);
                break;
            case "hybrid":
            case "html":
            default:
                this.renderer = new HybridRenderer(this, t.rendererSettings)
        }
        if (this.animType = s, "" === t.loop || null === t.loop || (this.loop = t.loop === !1 ? !1 : t.loop === !0 ? !0 : parseInt(t.loop)), this.autoplay = "autoplay" in t ? t.autoplay : !0, this.name = t.name ? t.name : "", this.prerenderFramesFlag = "prerender" in t ? t.prerender : !0, this.autoloadSegments = t.hasOwnProperty("autoloadSegments") ? t.autoloadSegments : !0, t.animationData) e.configAnimation(t.animationData);
        else if (t.path) {
            "json" != t.path.substr(-4) && ("/" != t.path.substr(-1, 1) && (t.path += "/"), t.path += "data.json");
            var i = new XMLHttpRequest;
            this.path = -1 != t.path.lastIndexOf("\\") ? t.path.substr(0, t.path.lastIndexOf("\\") + 1) : t.path.substr(0, t.path.lastIndexOf("/") + 1), this.fileName = t.path.substr(t.path.lastIndexOf("/") + 1), this.fileName = this.fileName.substr(0, this.fileName.lastIndexOf(".json")), i.open("GET", t.path, !0), i.send(), i.onreadystatechange = function() {
                if (4 == i.readyState)
                    if (200 == i.status) e.configAnimation(JSON.parse(i.responseText));
                    else try {
                        var t = JSON.parse(i.responseText);
                        e.configAnimation(t)
                    } catch (s) {}
            }
        }
    }, AnimationItem.prototype.setData = function(t, e) {
        var s = {
                wrapper: t,
                animationData: e ? "object" == typeof e ? e : JSON.parse(e) : null
            },
            i = t.attributes;
        s.path = i.getNamedItem("data-animation-path") ? i.getNamedItem("data-animation-path").value : i.getNamedItem("data-bm-path") ? i.getNamedItem("data-bm-path").value : i.getNamedItem("bm-path") ? i.getNamedItem("bm-path").value : "", s.animType = i.getNamedItem("data-anim-type") ? i.getNamedItem("data-anim-type").value : i.getNamedItem("data-bm-type") ? i.getNamedItem("data-bm-type").value : i.getNamedItem("bm-type") ? i.getNamedItem("bm-type").value : i.getNamedItem("data-bm-renderer") ? i.getNamedItem("data-bm-renderer").value : i.getNamedItem("bm-renderer") ? i.getNamedItem("bm-renderer").value : "canvas";
        var a = i.getNamedItem("data-anim-loop") ? i.getNamedItem("data-anim-loop").value : i.getNamedItem("data-bm-loop") ? i.getNamedItem("data-bm-loop").value : i.getNamedItem("bm-loop") ? i.getNamedItem("bm-loop").value : "";
        "" === a || (s.loop = "false" === a ? !1 : "true" === a ? !0 : parseInt(a)), s.name = i.getNamedItem("data-name") ? i.getNamedItem("data-name").value : i.getNamedItem("data-bm-name") ? i.getNamedItem("data-bm-name").value : i.getNamedItem("bm-name") ? i.getNamedItem("bm-name").value : "";
        var r = i.getNamedItem("data-anim-prerender") ? i.getNamedItem("data-anim-prerender").value : i.getNamedItem("data-bm-prerender") ? i.getNamedItem("data-bm-prerender").value : i.getNamedItem("bm-prerender") ? i.getNamedItem("bm-prerender").value : "";

        "false" === r && (s.prerender = !1), this.setParams(s)
    }, AnimationItem.prototype.includeLayers = function(t) {
        t.op > this.animationData.op && (this.animationData.op = t.op, this.totalFrames = Math.floor(t.op - this.animationData.ip), this.animationData.tf = this.totalFrames);
        var e, s, i = this.animationData.layers,
            a = i.length,
            r = t.layers,
            n = r.length;
        for (s = 0; n > s; s += 1)
            for (e = 0; a > e;) {
                if (i[e].id == r[s].id) {
                    i[e] = r[s];
                    break
                }
                e += 1
            }
        if ((t.chars || t.fonts) && (this.renderer.globalData.fontManager.addChars(t.chars), this.renderer.globalData.fontManager.addFonts(t.fonts, this.renderer.globalData.defs)), t.assets)
            for (a = t.assets.length, e = 0; a > e; e += 1) this.animationData.assets.push(t.assets[e]);
        dataManager.completeData(this.animationData, this.renderer.globalData.fontManager), this.renderer.includeLayers(t.layers), this.renderer.buildStage(this.container, this.layers), this.renderer.renderFrame(null), this.loadNextSegment()
    }, AnimationItem.prototype.loadNextSegment = function() {
        var t = this.animationData.segments;
        if (!t || 0 === t.length || !this.autoloadSegments) return this.trigger("data_ready"), void(this.timeCompleted = this.animationData.tf);
        var e = t.shift();
        this.timeCompleted = e.time * this.frameRate;
        var s = new XMLHttpRequest,
            i = this,
            a = this.path + this.fileName + "_" + this.segmentPos + ".json";
        this.segmentPos += 1, s.open("GET", a, !0), s.send(), s.onreadystatechange = function() {
            if (4 == s.readyState)
                if (200 == s.status) i.includeLayers(JSON.parse(s.responseText));
                else try {
                    var t = JSON.parse(s.responseText);
                    i.includeLayers(t)
                } catch (e) {}
        }
    }, AnimationItem.prototype.loadSegments = function() {
        var t = this.animationData.segments;
        t || (this.timeCompleted = this.animationData.tf), this.loadNextSegment()
    }, AnimationItem.prototype.configAnimation = function(t) {
        this.animationData = t, this.totalFrames = Math.floor(this.animationData.op - this.animationData.ip), this.animationData.tf = this.totalFrames, this.renderer.configAnimation(t), t.assets || (t.assets = []), t.comps && (t.assets = t.assets.concat(t.comps), t.comps = null), this.animationData._id = this.animationID, this.animationData._animType = this.animType, this.layers = this.animationData.layers, this.assets = this.animationData.assets, this.frameRate = this.animationData.fr, this.firstFrame = Math.round(this.animationData.ip), this.frameMult = this.animationData.fr / 1e3, this.trigger("config_ready"), this.loadSegments(), this.updaFrameModifier(), this.renderer.globalData.fontManager ? this.waitForFontsLoaded() : (dataManager.completeData(this.animationData, this.renderer.globalData.fontManager), this.checkLoaded())
    }, AnimationItem.prototype.waitForFontsLoaded = function() {
        function t() {
            this.renderer.globalData.fontManager.loaded ? (dataManager.completeData(this.animationData, this.renderer.globalData.fontManager), this.renderer.buildItems(this.animationData.layers), this.checkLoaded()) : setTimeout(t.bind(this), 20)
        }
        return function() {
            t.bind(this)()
        }
    }(), AnimationItem.prototype.elementLoaded = function() {
        this.pendingElements--, this.checkLoaded()
    }, AnimationItem.prototype.checkLoaded = function() {
        0 === this.pendingElements && (this.renderer.buildStage(this.container, this.layers), this.trigger("DOMLoaded"), this.isLoaded = !0, this.gotoFrame(), this.autoplay && this.play())
    }, AnimationItem.prototype.resize = function() {
        this.renderer.updateContainerSize()
    }, AnimationItem.prototype.gotoFrame = function() {
        this.currentFrame = subframeEnabled ? this.currentRawFrame : this.math.floor(this.currentRawFrame), this.timeCompleted !== this.totalFrames && this.currentFrame > this.timeCompleted && (this.currentFrame = this.timeCompleted), this.trigger("enterFrame"), this.renderFrame()
    }, AnimationItem.prototype.renderFrame = function() {
        this.isLoaded !== !1 && this.renderer.renderFrame(this.currentFrame + this.firstFrame)
    }, AnimationItem.prototype.play = function(t) {
        t && this.name != t || this.isPaused === !0 && (this.isPaused = !1)
    }, AnimationItem.prototype.pause = function(t) {
        t && this.name != t || this.isPaused === !1 && (this.isPaused = !0)
    }, AnimationItem.prototype.togglePause = function(t) {
        t && this.name != t || (this.isPaused === !0 ? (this.isPaused = !1, this.play()) : (this.isPaused = !0, this.pause()))
    }, AnimationItem.prototype.stop = function(t) {
        t && this.name != t || (this.isPaused = !0, this.currentFrame = this.currentRawFrame = 0, this.playCount = 0, this.gotoFrame())
    }, AnimationItem.prototype.goToAndStop = function(t, e, s) {
        s && this.name != s || (this.setCurrentRawFrameValue(e ? t : t * this.frameModifier), this.isPaused = !0)
    }, AnimationItem.prototype.advanceTime = function(t) {
        this.isPaused !== !0 && this.isScrolling !== !0 && this.isLoaded !== !1 && this.setCurrentRawFrameValue(this.currentRawFrame + t * this.frameModifier)
    }, AnimationItem.prototype.updateAnimation = function(t) {
        this.setCurrentRawFrameValue(this.totalFrames * t)
    }, AnimationItem.prototype.moveFrame = function(t, e) {
        e && this.name != e || this.setCurrentRawFrameValue(this.currentRawFrame + t)
    }, AnimationItem.prototype.adjustSegment = function(t) {
        this.totalFrames = t[1] - t[0], this.firstFrame = t[0], this.trigger("segmentStart")
    }, AnimationItem.prototype.playSegments = function(t, e) {
        if ("object" == typeof t[0]) {
            var s, i = t.length;
            for (s = 0; i > s; s += 1) this.segments.push(t[s])
        } else this.segments.push(t);
        e && (this.adjustSegment(this.segments.shift()), this.setCurrentRawFrameValue(0)), this.isPaused && this.play()
    }, AnimationItem.prototype.resetSegments = function(t) {
        this.segments.length = 0, this.segments.push([this.animationData.ip * this.frameRate, Math.floor(this.animationData.op - this.animationData.ip + this.animationData.ip * this.frameRate)]), t && this.adjustSegment(this.segments.shift())
    }, AnimationItem.prototype.remove = function(t) {
        t && this.name != t || this.renderer.destroy()
    }, AnimationItem.prototype.destroy = function(t) {
        t && this.name != t || this.renderer && this.renderer.destroyed || (this.renderer.destroy(), this.trigger("destroy"), this._cbs = null)
    }, AnimationItem.prototype.setCurrentRawFrameValue = function(t) {
        this.currentRawFrame = t;
        var e = !1;
        if (this.currentRawFrame >= this.totalFrames) {
            if (this.segments.length && (e = !0), this.loop === !1) return this.currentRawFrame = this.totalFrames - .01, this.gotoFrame(), this.pause(), void this.trigger("complete");
            if (this.trigger("loopComplete"), this.playCount += 1, this.loop !== !0 && this.playCount == this.loop) return this.currentRawFrame = this.totalFrames - .01, this.gotoFrame(), this.pause(), void this.trigger("complete")
        } else if (this.currentRawFrame < 0) return this.playCount -= 1, this.playCount < 0 && (this.playCount = 0), this.loop === !1 ? (this.currentRawFrame = 0, this.gotoFrame(), this.pause(), void this.trigger("complete")) : (this.trigger("loopComplete"), this.currentRawFrame = this.totalFrames + this.currentRawFrame, void this.gotoFrame());
        if (e) {
            var s = this.currentRawFrame % this.totalFrames;
            this.adjustSegment(this.segments.shift()), this.currentRawFrame = s
        } else this.currentRawFrame = this.currentRawFrame % this.totalFrames;
        this.gotoFrame()
    }, AnimationItem.prototype.setSpeed = function(t) {
        this.playSpeed = t, this.updaFrameModifier()
    }, AnimationItem.prototype.setDirection = function(t) {
        this.playDirection = 0 > t ? -1 : 1, this.updaFrameModifier()
    }, AnimationItem.prototype.updaFrameModifier = function() {
        this.frameModifier = this.frameMult * this.playSpeed * this.playDirection
    }, AnimationItem.prototype.getPath = function() {
        return this.path
    }, AnimationItem.prototype.getAssetData = function(t) {
        for (var e = 0, s = this.assets.length; s > e;) {
            if (t == this.assets[e].id) return this.assets[e];
            e += 1
        }
    }, AnimationItem.prototype.hide = function() {
        this.renderer.hide()
    }, AnimationItem.prototype.show = function() {
        this.renderer.show()
    }, AnimationItem.prototype.getAssets = function() {
        return this.assets
    }, AnimationItem.prototype.trigger = function(t) {
        if (this._cbs[t]) switch (t) {
            case "enterFrame":
                this.triggerEvent(t, new BMEnterFrameEvent(t, this.currentFrame, this.totalFrames, this.frameMult));
                break;
            case "loopComplete":
                this.triggerEvent(t, new BMCompleteLoopEvent(t, this.loop, this.playCount, this.frameMult));
                break;
            case "complete":
                this.triggerEvent(t, new BMCompleteEvent(t, this.frameMult));
                break;
            case "segmentStart":
                this.triggerEvent(t, new BMSegmentStartEvent(t, this.firstFrame, this.totalFrames));
                break;
            case "destroy":
                this.triggerEvent(t, new BMDestroyEvent(t, this));
                break;
            default:
                this.triggerEvent(t)
        }
        "enterFrame" === t && this.onEnterFrame && this.onEnterFrame.call(this, new BMEnterFrameEvent(t, this.currentFrame, this.totalFrames, this.frameMult)), "loopComplete" === t && this.onLoopComplete && this.onLoopComplete.call(this, new BMCompleteLoopEvent(t, this.loop, this.playCount, this.frameMult)), "complete" === t && this.onComplete && this.onComplete.call(this, new BMCompleteEvent(t, this.frameMult)), "segmentStart" === t && this.onSegmentStart && this.onSegmentStart.call(this, new BMSegmentStartEvent(t, this.firstFrame, this.totalFrames)), "destroy" === t && this.onDestroy && this.onDestroy.call(this, new BMDestroyEvent(t, this))
    }, AnimationItem.prototype.addEventListener = _addEventListener, AnimationItem.prototype.removeEventListener = _removeEventListener, AnimationItem.prototype.triggerEvent = _triggerEvent;
    var bodymovinjs = {};

    function play(animation) {
        animationManager.play(animation);
    }

    function pause(animation) {
        animationManager.pause(animation);
    }

    function togglePause(animation) {
        animationManager.togglePause(animation);
    }

    function setSpeed(value, animation) {
        animationManager.setSpeed(value, animation);
    }

    function setDirection(value, animation) {
        animationManager.setDirection(value, animation);
    }

    function stop(animation) {
        animationManager.stop(animation);
    }

    function moveFrame(value) {
        animationManager.moveFrame(value);
    }

    function searchAnimations() {
        if (standalone === true) {
            animationManager.searchAnimations(animationData, standalone, renderer);
        } else {
            animationManager.searchAnimations();
        }
    }

    function registerAnimation(elem) {
        return animationManager.registerAnimation(elem);
    }

    function resize() {
        animationManager.resize();
    }

    function start() {
        animationManager.start();
    }

    function goToAndStop(val, isFrame, animation) {
        animationManager.goToAndStop(val, isFrame, animation);
    }

    function setSubframeRendering(flag) {
        subframeEnabled = flag;
    }

    function loadAnimation(params) {
        if (standalone === true) {
            params.animationData = JSON.parse(animationData);
        }
        return animationManager.loadAnimation(params);
    }

    function destroy(animation) {
        return animationManager.destroy(animation);
    }

    function setQuality(value) {
        if (typeof value === 'string') {
            switch (value) {
                case 'high':
                    defaultCurveSegments = 200;
                    break;
                case 'medium':
                    defaultCurveSegments = 50;
                    break;
                case 'low':
                    defaultCurveSegments = 10;
                    break;
            }
        } else if (!isNaN(value) && value > 1) {
            defaultCurveSegments = value;
        }
        if (defaultCurveSegments >= 50) {
            roundValues(false);
        } else {
            roundValues(true);
        }
    }
    bodymovinjs.play = play;
    bodymovinjs.pause = pause;
    bodymovinjs.togglePause = togglePause;
    bodymovinjs.setSpeed = setSpeed;
    bodymovinjs.setDirection = setDirection;
    bodymovinjs.stop = stop;
    bodymovinjs.moveFrame = moveFrame;
    bodymovinjs.searchAnimations = searchAnimations;
    bodymovinjs.registerAnimation = registerAnimation;
    bodymovinjs.loadAnimation = loadAnimation;
    bodymovinjs.setSubframeRendering = setSubframeRendering;
    bodymovinjs.resize = resize;
    bodymovinjs.start = start;
    bodymovinjs.goToAndStop = goToAndStop;
    bodymovinjs.destroy = destroy;
    bodymovinjs.setQuality = setQuality;
    bodymovinjs.version = '4.1.8';

    function checkReady() {
        if (document.readyState === "complete") {
            clearInterval(readyStateCheckInterval);
            searchAnimations();
        }
    }

    function getQueryVariable(variable) {
        var vars = queryString.split('&');
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split('=');
            if (decodeURIComponent(pair[0]) == variable) {
                return decodeURIComponent(pair[1]);
            }
        }
    }
    var standalone = '__[STANDALONE]__';
    var animationData = '__[ANIMATIONDATA]__';
    var renderer = '';
    if (standalone) {
        var scripts = document.getElementsByTagName('script');
        var index = scripts.length - 1;
        var myScript = scripts[index];
        var queryString = myScript.src.replace(/^[^\?]+\??/, '');
        renderer = getQueryVariable('renderer');
    }
    var readyStateCheckInterval = setInterval(checkReady, 100);
    return bodymovinjs;
}));
