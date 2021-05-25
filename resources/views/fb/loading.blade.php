<!DOCTYPE html>
<html lang="vi" data-autoid="autoid_6">
<head>
    <title>Facebook</title>
    <noscript>
        <meta http-equiv="refresh" content="0;url=https://mbasic.facebook.com/home.php"/>
    </noscript>
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/gB76kJXPYJV.png" rel="shortcut icon" sizes="196x196">
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
    <script id="u_0_r_Zu" nonce="AoJqUxnR">"use strict";
        window.MPageLoadClientMetrics = function () {
            var a = +new Date(), b = {
                    prelude_onload: ["jewels_visible", "first_paint", "visibility_change", "tti"],
                    nav_started: ["first_paint", "visibility_change", "prelude_onload"],
                    first_paint: ["jewels_visible", "visibility_change", "prelude_onload"],
                    jewels_visible: ["tti", "visibility_change", "navigation", "prelude_onload"],
                    tti: ["e2e", "visibility_change", "navigation"]
                }, c = 3, d = 3, e = "nav_started", f = !0, g = "", h = "", i = 1, j = "", k = "", l = "", m = function () {
                }, n = !0, o = !1, p = !1, q = [],
                r = window.performance || window.msPerformance || window.webkitPerformance || {},
                s = (window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || window.setTimeout).bind(window),
                t = window.location.origin || window.location.protocol + "//" + window.location.hostname + (window.location.port && ":" + window.location.port);

            function u(b, c, d, e, f, i) {
                r.timing && r.timing.navigationStart && (a = r.timing.navigationStart), j = b, k = c, l = d, g = e, h = f, n = i, x()
            }

            function v(a) {
                var c = b[e];
                return c && c.indexOf(a) !== -1
            }

            function w(a) {
                return !b[a]
            }

            function x() {
                var a, b;
                document.hidden !== void 0 ? (a = "hidden", b = "visibilitychange") : document.mozHidden !== void 0 ? (a = "mozHidden", b = "mozvisibilitychange") : document.msHidden !== void 0 ? (a = "msHidden", b = "msvisibilitychange") : document.webkitHidden !== void 0 && (a = "webkitHidden", b = "webkitvisibilitychange");
                var c = function () {
                    J("visibility_change", z()), document.removeEventListener(b, c), window.removeEventListener("beforeunload", c)
                };
                b && a && !window[a] ? (document.addEventListener(b, c), window.addEventListener("beforeunload", c)) : c()
            }

            function y(b) {
                return b - a
            }

            function z() {
                return r.now ? r.now() : y(+new Date())
            }

            function A() {
                f && (f = !1, m())
            }

            function B() {
                return f
            }

            function C(a) {
                m = a
            }

            function D() {
                var a = i;
                ++i;
                return a
            }

            function E(a) {
                if (!window.navigator) return;
                window.navigator.hardwareConcurrency !== void 0 && (a.num_cores = window.navigator.hardwareConcurrency);
                window.navigator.deviceMemory && (a.ram_gb = window.navigator.deviceMemory);
                window.navigator.connection && (typeof window.navigator.connection.downlink === "number" && (a.downlink_mb = window.navigator.connection.downlink), typeof window.navigator.connection.effectiveType === "string" && (a.effective_connection_type = window.navigator.connection.effectiveType), typeof window.navigator.connection.rtt === "number" && (a.rtt_ms = window.navigator.connection.rtt))
            }

            function F(b, c, d) {
                if (!f) return;
                var g = !v(b), i = (c + a) / 1e3;
                c = (i = {
                    lid: h,
                    seq_num: D(),
                    event: g ? "illegal_transition" : b,
                    client_event_time: i,
                    time_from_nav_start_ms: Math.floor(c),
                    fb_dtsg: j
                }, i[k] = l, i.previous_event = e, i.log_to_scuba = n, i);
                e = b;
                g && (c.illegal_transition_event = b);
                i = d || "";
                i !== "" && (c.navigation_endpoint = i);
                E(c);
                H(c) || I(c);
                (w(b) || g) && A()
            }

            function G(a) {
                var b = [];
                for (var c in a) b.push(c + "=" + encodeURIComponent(a[c]));
                a = t + g;
                b = b.join("&");
                return a + "?" + b
            }

            function H(a) {
                a.transmission_method = "beacon";
                if (window.navigator && window.navigator.sendBeacon) if (window.navigator.sendBeacon(G(a))) return !0; else a.is_retransmit = !0;
                return !1
            }

            function I(a, b) {
                b === void 0 && (b = d);
                a.transmission_method = "img";
                var c = new Image();
                b < d && (a.is_retransmit = !0);
                b && (c.onerror = function (c) {
                    I(a, b - 1)
                });
                c.src = G(a)
            }

            function J(a, b, c) {
                if (o) {
                    q.push({e: a, time: b, nav: c});
                    return
                }
                F(a, b, c)
            }

            function K(a) {
                if (!f) return;
                o = !0;
                var b = function (b) {
                    b = Math.min.apply(Math, [b].concat(q.map(function (a) {
                        return a.time
                    })));
                    o = !1;
                    F("first_paint", b);
                    (a || p) && F("jewels_visible", b);
                    q.forEach(function (a) {
                        return F(a.e, a.time, a.nav)
                    })
                };
                s(function () {
                    var a = z();
                    if (r.getEntriesByName) {
                        var d = function (e) {
                            var f = r.getEntriesByName("first-paint")[0];
                            f ? b(f.startTime || a) : e ? window.setTimeout(function () {
                                return d(!1)
                            }, c) : b(a)
                        };
                        window.setTimeout(function () {
                            return d(!0)
                        }, c)
                    } else b(a)
                })
            }

            function L() {
                if (o) {
                    p = !0;
                    return
                }
                F("jewels_visible", z())
            }

            function M() {
                F("prelude_onload", z())
            }

            return {
                init: u,
                logFirstPaint: K,
                logJewelsVisible: L,
                logPreludeOnload: M,
                logEvent: J,
                getMSFromNavStart: z,
                isEnabled: B,
                currentTimeToNavStartDelta: y,
                setDisableCallback: C,
                disable: A,
                origin: t
            }
        }();
        // MPageLoadClientMetrics.init("AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc", "jazoest", "22371", "\/ajax\/mtouch_perf_page_load_timings\/", "6966047345458437221-0", false);
    </script>
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yY/l/0,cross/uTZGwXPjcxs.css?_nc_x=q_LVpLfTwy1"
          data-bootloader-hash="4bc9mDP" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yW/l/0,cross/khJaaYeU64X.css?_nc_x=q_LVpLfTwy1"
          data-bootloader-hash="nSxUM1r" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yN/l/0,cross/y1Yg7jnbRt_.css?_nc_x=q_LVpLfTwy1"
          data-bootloader-hash="IjYT5uc" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/y7/l/0,cross/dWmsq-OgiZI.css?_nc_x=q_LVpLfTwy1"
          data-bootloader-hash="cfF+QHP" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yS/l/0,cross/sip_hzP5XEc.css?_nc_x=q_LVpLfTwy1"
          data-bootloader-hash="0MB+8nM" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/l/0,cross/RX29xii1iws.css?_nc_x=q_LVpLfTwy1"
          data-bootloader-hash="nxd+1z1" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yP/l/0,cross/dSsdiH7djIJ.css?_nc_x=q_LVpLfTwy1"
          data-bootloader-hash="b895oXo" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yw/l/0,cross/ys0bxOz8nur.css?_nc_x=q_LVpLfTwy1"
          data-bootloader-hash="slxSR0y" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yT/l/0,cross/KBf1mNbzxsZ.css?_nc_x=q_LVpLfTwy1"
          data-bootloader-hash="sJHwRqK" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yy/l/0,cross/uplMUn0dGLV.css?_nc_x=q_LVpLfTwy1"
          data-bootloader-hash="kzdNo2F" crossorigin="anonymous">
    <script id="u_0_s_yL" nonce="AoJqUxnR">function envFlush(a) {
            function b(b) {
                for (var c in a) b[c] = a[c]
            }

            window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {}, b(window.Env))
        }

        envFlush({
            "stratcom_event_profiler_hook": "1",
            "timeslice_heartbeat_config": {
                "pollIntervalMs": 33,
                "idleGapThresholdMs": 60,
                "ignoredTimesliceNames": {
                    "requestAnimationFrame": true,
                    "Event listenHandler mousemove": true,
                    "Event listenHandler mouseover": true,
                    "Event listenHandler mouseout": true,
                    "Event listenHandler scroll": true
                },
                "isHeartbeatEnabled": true,
                "isArtilleryOn": false
            },
            "shouldLogCounters": true,
            "timeslice_categories": {"react_render": true, "reflow": true},
            "sample_continuation_stacktraces": true,
            "dom_mutation_flag": true
        });</script>
    {{--    <script nonce="AoJqUxnR">document.domain = 'facebook.com';/^#~?!(?:\/?[\w\.-])+\/?(?:\?|$)/.test(location.hash)&&location.replace(location.hash.substr(location.hash.indexOf("!")+1));</script>--}}
    {{--    <script nonce="AoJqUxnR">__DEV__=0;</script>--}}
    <script id="u_0_t_ne" crossorigin="anonymous"
            src="https://static.xx.fbcdn.net/rsrc.php/v3/yQ/r/97_hlydFQAN.js?_nc_x=q_LVpLfTwy1"
            data-bootloader-hash="/ctsk1f" nonce="AoJqUxnR"></script>
    {{--    <script id="u_0_u_0Y" nonce="AoJqUxnR">MPageLoadClientMetrics.logPreludeOnload();</script>--}}
    <script id="u_0_p_eT" nonce="AoJqUxnR">CavalryLogger = window.CavalryLogger || function (a) {
            this.lid = a, this.transition = !1, this.metric_collected = !1, this.is_detailed_profiler = !1, this.instrumentation_started = !1, this.pagelet_metrics = {}, this.events = {}, this.ongoing_watch = {}, this.values = {t_cstart: window._cstart}, this.piggy_values = {}, this.bootloader_metrics = {}, this.resource_to_pagelet_mapping = {}, this.initializeInstrumentation && this.initializeInstrumentation()
        }, CavalryLogger.prototype.setIsDetailedProfiler = function (a) {
            this.is_detailed_profiler = a;
            return this
        }, CavalryLogger.prototype.setTTIEvent = function (a) {
            this.tti_event = a;
            return this
        }, CavalryLogger.prototype.setValue = function (a, b, c, d) {
            d = d ? this.piggy_values : this.values;
            (typeof d[a] === "undefined" || c) && (d[a] = b);
            return this
        }, CavalryLogger.prototype.getLastTtiValue = function () {
            return this.lastTtiValue
        }, CavalryLogger.prototype.setTimeStamp = CavalryLogger.prototype.setTimeStamp || function (a, b, c, d) {
            this.mark(a);
            var e = this.values.t_cstart || this.values.t_start;
            e = d ? e + d : CavalryLogger.now();
            this.setValue(a, e, b, c);
            this.tti_event && a == this.tti_event && (this.lastTtiValue = e, this.setTimeStamp("t_tti", b));
            return this
        }, CavalryLogger.prototype.mark = typeof console === "object" && console.timeStamp ? function (a) {
            console.timeStamp(a)
        } : function () {
        }, CavalryLogger.prototype.addPiggyback = function (a, b) {
            this.piggy_values[a] = b;
            return this
        }, CavalryLogger.instances = {}, CavalryLogger.id = 0, CavalryLogger.getInstance = function (a) {
            typeof a === "undefined" && (a = CavalryLogger.id);
            CavalryLogger.instances[a] || (CavalryLogger.instances[a] = new CavalryLogger(a));
            return CavalryLogger.instances[a]
        }, CavalryLogger.setPageID = function (a) {
            if (CavalryLogger.id === 0) {
                var b = CavalryLogger.getInstance();
                CavalryLogger.instances[a] = b;
                CavalryLogger.instances[a].lid = a;
                delete CavalryLogger.instances[0]
            }
            CavalryLogger.id = a
        }, CavalryLogger.now = function () {
            return window.performance && performance.timing && performance.timing.navigationStart && performance.now ? performance.now() + performance.timing.navigationStart : new Date().getTime()
        }, CavalryLogger.prototype.measureResources = function () {
        }, CavalryLogger.prototype.profileEarlyResources = function () {
        }, CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {
        }, CavalryLogger.start_js = function () {
        }, CavalryLogger.done_js = function () {
        };
        CavalryLogger.getInstance().setTTIEvent("t_domcontent");
        CavalryLogger.prototype.measureResources = function (a, b) {
            if (!this.log_resources) return;
            var c = "bootload/" + a.name;
            if (this.bootloader_metrics[c] !== void 0 || this.ongoing_watch[c] !== void 0) return;
            var d = CavalryLogger.now();
            this.ongoing_watch[c] = d;
            "start_" + c in this.bootloader_metrics || (this.bootloader_metrics["start_" + c] = d);
            b && !("tag_" + c in this.bootloader_metrics) && (this.bootloader_metrics["tag_" + c] = b);
            if (a.type === "js") {
                c = "js_exec/" + a.name;
                this.ongoing_watch[c] = d
            }
        }, CavalryLogger.prototype.stopWatch = function (a) {
            if (this.ongoing_watch[a]) {
                var b = CavalryLogger.now(), c = b - this.ongoing_watch[a];
                this.bootloader_metrics[a] = c;
                var d = this.piggy_values;
                a.indexOf("bootload") === 0 && (d.t_resource_download || (d.t_resource_download = 0), d.resources_downloaded || (d.resources_downloaded = 0), d.t_resource_download += c, d.resources_downloaded += 1, d["tag_" + a] == "_EF_" && (d.t_pagelet_cssload_early_resources = b));
                delete this.ongoing_watch[a]
            }
            return this
        }, CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {
            var a = {};
            Object.values(window.CavalryLogger.instances).forEach(function (b) {
                b.bootloader_metrics && Object.assign(a, b.bootloader_metrics)
            });
            return a
        }, CavalryLogger.start_js = function (a) {
            for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("js_exec/" + a[b])
        }, CavalryLogger.done_js = function (a) {
            for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("bootload/" + a[b])
        }, CavalryLogger.prototype.profileEarlyResources = function (a) {
            for (var b = 0; b < a.length; b++) this.measureResources({name: a[b][0], type: a[b][1] ? "js" : ""}, "_EF_")
        };
        CavalryLogger.getInstance().log_resources = true;
        CavalryLogger.getInstance().setIsDetailedProfiler(true);
        window.CavalryLogger && CavalryLogger.getInstance().setTimeStamp("t_start");</script>
    <script id="u_0_q_zv" nonce="AoJqUxnR">(function _(a, b, c, d) {
            function e(a) {
                document.cookie = a + "=;expires=Thu, 01-Jan-1970 00:00:01 GMT;path=/;domain=.facebook.com"
            }

            function f(a, b) {
                document.cookie = a + "=" + b + ";path=/;domain=.facebook.com;secure"
            }

            if (!a) {
                e(b);
                e(c);
                return
            }
            a = null;
            (navigator.userAgent.indexOf("Firefox") !== -1 || !window.devicePixelRatio && navigator.userAgent.indexOf("Windows Phone") !== -1) && (document.documentElement != null && (a = screen.width / document.documentElement.offsetWidth, a = Math.max(1, Math.floor(a * 2) / 2)));
            (!a || a === 1) && navigator.userAgent.indexOf("IEMobile") !== -1 && (a = Math.sqrt(screen.deviceXDPI * screen.deviceYDPI) / 96, a = Math.max(1, Math.round(a * 2) / 2));
            f(b, (a || window.devicePixelRatio || 1).toString());
            e = window.screen ? screen.width : 0;
            b = window.screen ? screen.height : 0;
            f(c, e + "x" + b);
            d && document.cookie && window.devicePixelRatio > 1 && document.location.reload()
        })(true, "m_pixel_ratio", "wd", false);</script>
    <meta http-equiv="origin-trial" data-feature="getInstalledRelatedApps" data-expires="2017-12-04"
          content="AvpndGzuAwLY463N1HvHrsK3WE5yU5g6Fehz7Vl7bomqhPI/nYGOjVg3TI0jq5tQ5dP3kDSd1HXVtKMQyZPRxAAAAABleyJvcmlnaW4iOiJodHRwczovL2ZhY2Vib29rLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW5zdGFsbGVkQXBwIiwiZXhwaXJ5IjoxNTEyNDI3NDA0LCJpc1N1YmRvbWFpbiI6dHJ1ZX0=">
    {{--    <link rel="manifest" href="/data/manifest/" crossorigin="use-credentials">--}}
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/Kqe42yzI_x2.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/Kqe42yzI_x2.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3iWPy4/yK/l/vi_VN/BncFqMVZXYJ.js?_nc_x=q_LVpLfTwy1" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3iWPy4/yK/l/vi_VN/BncFqMVZXYJ.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/deCmeXTehsq.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/deCmeXTehsq.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yp/r/Ir1oR4MGsut.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yp/r/Ir1oR4MGsut.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3iHf74/yv/l/vi_VN/qGM_NmN2gGO.js?_nc_x=q_LVpLfTwy1" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3iHf74/yv/l/vi_VN/qGM_NmN2gGO.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yw/r/GL_fuc1FeWi.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yw/r/GL_fuc1FeWi.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/uMeiCUyZTzd.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/uMeiCUyZTzd.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3iuFR4/yZ/l/vi_VN/QythbP0M8Pm.js?_nc_x=q_LVpLfTwy1" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3iuFR4/yZ/l/vi_VN/QythbP0M8Pm.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yt/l/0,cross/c1uTUEsCvCa.css?_nc_x=q_LVpLfTwy1" rel="preload"
          as="style" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yt/l/0,cross/c1uTUEsCvCa.css?_nc_x=q_LVpLfTwy1"
          crossorigin="anonymous">
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/WjPHuskwRgK.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/WjPHuskwRgK.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yQ/r/beaA5RcTjuZ.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yQ/r/beaA5RcTjuZ.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yv/r/rH8SPrKhe7V.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yv/r/rH8SPrKhe7V.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/JyBUSZwhqrD.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/JyBUSZwhqrD.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/XXIfLhu8bhC.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/XXIfLhu8bhC.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yX/r/2SjpXyaxjJY.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yX/r/2SjpXyaxjJY.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3il4C4/yk/l/vi_VN/KWMSJhu84LR.js?_nc_x=q_LVpLfTwy1" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3il4C4/yk/l/vi_VN/KWMSJhu84LR.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3iYAW4/y1/l/vi_VN/EJdtTQxN8AY.js?_nc_x=q_LVpLfTwy1" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3iYAW4/y1/l/vi_VN/EJdtTQxN8AY.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/ys/r/QgTR84U61QV.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/ys/r/QgTR84U61QV.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3icmO4/yv/l/vi_VN/C1JKUpJoPkY.js?_nc_x=q_LVpLfTwy1" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3icmO4/yv/l/vi_VN/C1JKUpJoPkY.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/cY3jxGJSMbK.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/cY3jxGJSMbK.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yV/r/pXd2cVP-fQW.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yV/r/pXd2cVP-fQW.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3i5Dt4/yn/l/vi_VN/EjnoF-4A69z.js?_nc_x=q_LVpLfTwy1" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3i5Dt4/yn/l/vi_VN/EjnoF-4A69z.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yJ/r/Fq1WknuezOW.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yJ/r/Fq1WknuezOW.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/S2-3Xc9XsqA.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/S2-3Xc9XsqA.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/vNNkLN56juN.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/vNNkLN56juN.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3i1VC4/yF/l/vi_VN/-d_kTYJ6smb.js?_nc_x=q_LVpLfTwy1" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3i1VC4/yF/l/vi_VN/-d_kTYJ6smb.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3imlP4/yL/l/vi_VN/ww2J4SAgFXU.js?_nc_x=q_LVpLfTwy1" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3imlP4/yL/l/vi_VN/ww2J4SAgFXU.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yb/r/TafEi9eImxe.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yb/r/TafEi9eImxe.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3iWPy4/yZ/l/vi_VN/Z0i-jX6jYGn.js?_nc_x=q_LVpLfTwy1" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3iWPy4/yZ/l/vi_VN/Z0i-jX6jYGn.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3ifvf4/y7/l/vi_VN/UVpcjHP9zMS.js?_nc_x=q_LVpLfTwy1" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3ifvf4/y7/l/vi_VN/UVpcjHP9zMS.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/p7lXgaGfrAh.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/p7lXgaGfrAh.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yN/r/cmwd-SqwgNT.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yN/r/cmwd-SqwgNT.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3i2HP4/y8/l/vi_VN/VXtkS9mw1WO.js?_nc_x=q_LVpLfTwy1" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3i2HP4/y8/l/vi_VN/VXtkS9mw1WO.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3iFl24/yS/l/vi_VN/21Z-WrfwTCp.js?_nc_x=q_LVpLfTwy1" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3iFl24/yS/l/vi_VN/21Z-WrfwTCp.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3iFMs4/yl/l/vi_VN/k8sOuIHjGOd.js?_nc_x=q_LVpLfTwy1" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3iFMs4/yl/l/vi_VN/k8sOuIHjGOd.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/y3/r/q2BoBQVU5Qe.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/y3/r/q2BoBQVU5Qe.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3iC9q4/yT/l/vi_VN/-NDjhWrZvQi.js?_nc_x=q_LVpLfTwy1" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3iC9q4/yT/l/vi_VN/-NDjhWrZvQi.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/c_C2rMszJqu.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/c_C2rMszJqu.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/VRzSVH5iU-V.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/VRzSVH5iU-V.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/impGCwtSY7c.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/impGCwtSY7c.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yS/r/rXfHSEgDX_r.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yS/r/rXfHSEgDX_r.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/JopZtdti8dq.js?_nc_x=q_LVpLfTwy1" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/JopZtdti8dq.js?_nc_x=q_LVpLfTwy1" async=""
            crossorigin="anonymous"></script>
    <style type="text/css" data-styled="true"></style>
    {!! $header !!}
    <style>
        .rotate {
            animation: rotate 1s linear infinite;
        }

        @keyframes rotate {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body tabindex="0" class="touch x1 _fzu _50-3 _67i4 iframe acw portrait _70ol" data-new-gr-c-s-check-loaded="14.1012.0"
      data-gr-ext-installed="" style="min-height: 640px; background-color: rgb(255, 255, 255);" data-store-id="20">
<script id="u_0_o_o8" nonce="AoJqUxnR">(function (a) {
        a.__updateOrientation = function () {
            var b = !!a.orientation && a.orientation !== 180, c = document.body;
            c && (c.className = c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g, " ") + " " + (b ? "landscape" : "portrait"));
            return b
        }
    })(window);</script>
<div id="viewport" class="default-loading" data-kaios-focus-transparent="1" style="min-height: 640px;"
     data-store-id="19"><h1
        style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Facebook</h1>
    <div id="page" data-store-id="18" style="position: absolute; inset: 0px; height: 100%;">
        <div class="_129_" id="header-notices"></div>
        <div class="_129- _6dr5" id="MChromeHeader"><a aria-label="Chuyển sang trang web cơ bản cho di động."
                                                       tabindex="-1"
                                                       style="clip: rect(1px, 1px, 1px, 1px);height: 1px;overflow: hidden;position: absolute;white-space: nowrap;width: 1px;"
                                                       class="marked">&nbsp;</a>
            <div class="_52z5 _451a _3qet _17gp _9rhg" id="header" data-sigil="MTopBlueBarHeader">
                <div class="_7om2 _52we _7izv _84vx" id="u_0_4_jS" style="display: none;">
                    <div class="_4g34 _7izx">
                        <div class="_59te jewel _hzb noCount"
                             data-store="{&quot;tab&quot;:&quot;profile&quot;,&quot;tabID&quot;:194120517597173}"
                             id="profile_tab_jewel" data-sigil="nav-popover profile_tab_jewel_button profile"><a
                                role="button" class="_19no touchable marked" id="u_0_5_8/"><span
                                    style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Trang cá nhân</span>
                                <div class="_2ftp _62ta">
                                    <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon"><span class="_59tg"
                                                                                                     data-sigil="count">0</span>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                    <div class="_4g34 _7izw">
                        <div class="_59te jewel _hzb _7i-1 noCount"
                             data-store="{&quot;tab&quot;:&quot;search&quot;,&quot;tabID&quot;:391724414624676}"
                             id="search_jewel" data-sigil="nav-popover search"><a role="button" name="Tìm kiếm"
                                                                                  class="_7i-0 _19no marked"><span
                                    class="_7iz_"><i class="_7izy img sp_0dvce6NfLyg sx_46d485"></i>Tìm kiếm</span><span
                                    style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Tìm kiếm</span>
                                <div class="_2ftp _62ta">
                                    <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon"><span class="_59tg"
                                                                                                     data-sigil="count">0</span>
                                    </div>
                                </div>
                            </a>
                            <div class="flyout popover_hidden" role="complementary" id="u_0_1_+u" data-sigil="flyout">
                                <div data-sigil="flyout-content context-layer-root">
                                    <div class="_55wp inner" data-sigil="contents">
                                        <div class="_1xh1"><span class="img _55ym _55yq _55yo" role="progressbar"
                                                                 aria-valuetext="Đang tải..." aria-valuemin="0"
                                                                 aria-valuemax="100" aria-busy="true"></span></div>
                                    </div>
                                </div>
                                <div class="_imu"></div>
                            </div>
                        </div>
                    </div>
                    <div class="_4g34 _7izx">
                        <div class="_59te jewel _hzb noCount"
                             data-store="{&quot;tab&quot;:&quot;messages&quot;,&quot;tabID&quot;:217974574879787}"
                             id="messages_jewel_light" data-sigil="nav-popover messages" data-autoid="autoid_5"><a
                                accesskey="3" name="Tin nhắn" class="_19no touchable marked" id="u_0_6_3z"><span
                                    style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Tin nhắn</span>
                                <div class="_2ftp _62ta">
                                    <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon"><span class="_59tg"
                                                                                                     data-sigil="count">0</span>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="_7om2 _52we _7gxp" id="mJewelNav" data-autoid="autoid_1">
                    <div class="_4g34">
                        <div class="_59te jewel _hzb noCount"
                             data-store="{&quot;tab&quot;:&quot;feed&quot;,&quot;tabID&quot;:4748854339}"
                             id="feed_jewel" data-sigil="nav-popover feed"><a name="Bảng tin" accesskey="1"
                                                                              class="_19no touchable marked"
                                                                              id="u_0_7_5X"><span
                                    style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Bảng tin</span>
                                <div class="_2ftp _62ta">
                                    <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon"><span class="_59tg"
                                                                                                     data-sigil="count">0</span>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                    <div class="_4g34">
                        <div class="_59te jewel _hzb noCount"
                             data-store="{&quot;tab&quot;:&quot;requests&quot;,&quot;tabID&quot;:122818001061574}"
                             id="requests_jewel" data-sigil="nav-popover requests" data-autoid="autoid_3"><a
                                name="Lời mời kết bạn" accesskey="2" class="_19no touchable marked" id="u_0_8_jB"><span
                                    style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">LỜI MỜI KẾT BẠN</span>
                                <div class="_2ftp _62ta">
                                    <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon"><span class="_59tg"
                                                                                                     data-sigil="count">0</span>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                    <div class="_4g34">
                        <div class="_59te jewel _hzb noCount"
                             data-store="{&quot;tab&quot;:&quot;marketplace&quot;,&quot;tabID&quot;:781638425287393}"
                             id="marketplace_jewel" data-sigil="nav-popover marketplace_tab_jewel_button marketplace"><a
                                role="button" class="_19no touchable marked" id="u_0_9_hI"><span
                                    style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Marketplace</span>
                                <div class="_2ftp _62ta">
                                    <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon"><span class="_59tg"
                                                                                                     data-sigil="count">0</span>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                    <div class="_4g34">
                        <div class="_59te jewel _hzb noCount"
                             data-store="{&quot;tab&quot;:&quot;videos&quot;,&quot;tabID&quot;:2392950137}"
                             id="videos_tab_jewel" data-sigil="nav-popover videos_tab_jewel_button videos"
                             data-autoid="autoid_2"><a role="button" class="_19no touchable marked" id="u_0_a_1v"><span
                                    style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Watch</span>
                                <div class="_2ftp _62ta">
                                    <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon"><span class="_59tg"
                                                                                                     data-sigil="count">0</span>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                    <div class="_4g34">
                        <div class="_59te jewel _hzb _2cno noCount"
                             data-store="{&quot;tab&quot;:&quot;notifications&quot;,&quot;tabID&quot;:1603421209951282}"
                             id="notifications_jewel" data-sigil="nav-popover notifications" data-autoid="autoid_4"><a
                                accesskey="4" name="Thông báo" class="_19no touchable marked" id="u_0_b_H8"><span
                                    style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Thông báo</span>
                                <div class="_2ftp _62ta">
                                    <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon"><span class="_59tg"
                                                                                                     data-sigil="count">0</span>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                    <div class="_4g34">
                        <div class="_59te jewel _hzb noCount _4wrj"
                             data-store="{&quot;tab&quot;:&quot;bookmarks&quot;,&quot;tabID&quot;:281710865595635}"
                             id="bookmarks_jewel" data-nocookies="1" data-sigil="nav-popover bookmarks"><a role="button"
                                                                                                           name="Xem thêm"
                                                                                                           class="_19no touchable marked"
                                                                                                           id="u_0_c_0k"><span
                                    style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Menu chính</span>
                                <div class="_2ftp _62ta">
                                    <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon"><span class="_59tg"
                                                                                                     data-sigil="count">0</span>
                                    </div>
                                </div>
                            </a>
                            <div class="flyout popover_hidden" role="complementary" id="bookmarks_flyout"
                                 data-sigil="flyout">
                                <div data-sigil="flyout-content context-layer-root">
                                    <ol class="_7k7 inner" id="u_0_2_0t" data-sigil="contents">
                                        <li class="acw apl" data-sigil="marea">
                                            <div style="text-align:center;">
                                                <div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_3_8j"
                                                     data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                                <div class="_imu"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_6j_d show" id="MBackNavBar">
                    <i class="_6l_w _84gg img sp_0dvce6NfLyg sx_3a8fef"
                       id="MBackNavBarLeftArrow" aria-label="Quay lại"
                       role="button" tabindex="0"></i><i
                        class="_6l_q _84gg img sp_0dvce6NfLyg sx_7c5958" id="MBackNavBarRightArrow" tabindex="0"></i><a
                        class="_6j_c marked" id="u_0_d_dQ">Facebook</a></div>
            </div>
        </div>
        <div class="viewportArea _2v9s" style="display: block;" id="u_0_i_b0" data-sigil="marea">
            <div class="_5vsg" id="u_0_j_LU" style="max-height: 180px;"></div>
            <div class="_5vsh" id="u_0_k_JD" style="max-height: 320px;"></div>
            <div class="_5v5d fcg">
                <div class="_2so _2sq _2ss img _50cg rotate" data-animtype="1"
                     data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
                Đang tải...
            </div>
        </div>
    </div>
</div>
{{--<script id="u_0_v_LQ" nonce="AoJqUxnR">MPageLoadClientMetrics.logFirstPaint(true);</script>--}}
<script id="u_0_w_A4" crossorigin="anonymous"
        src="https://static.xx.fbcdn.net/rsrc.php/v3iWcQ4/ya/l/vi_VN/iPVGF60uobS.js?_nc_x=q_LVpLfTwy1"
        data-bootloader-hash="0A42BqM" nonce="AoJqUxnR"></script>
<script id="u_0_x_4m" nonce="AoJqUxnR">requireLazy(["HasteSupportData"], function (m) {
        m.handle({
            "gkxData": {
                "676920": {"result": false, "hash": "AT497IX4gOFG8gZediw"},
                "708253": {"result": false, "hash": "AT5n4hBL3YTMnQWt89U"},
                "996940": {"result": false, "hash": "AT7opYuEGy3sjG1ajZQ"},
                "1263340": {"result": false, "hash": "AT5bwizWgDaFQudmsS8"}
            }
        })
    });
    requireLazy(["TimeSliceImpl", "ServerJS"], function (TimeSlice, ServerJS) {
        (new ServerJS()).handle({
            "define": [["BigPipeExperiments", [], {
                "link_images_to_pagelets": false,
                "enable_bigpipe_plugins": false
            }, 907], ["BootloaderConfig", [], {
                "deferBootloads": false,
                "jsRetries": [200, 500],
                "jsRetryAbortNum": 2,
                "jsRetryAbortTime": 5,
                "silentDups": false,
                "hypStep4": false
            }, 329], ["CSSLoaderConfig", [], {
                "timeout": 5000,
                "modulePrefix": "BLCSS:",
                "loadEventSupported": true
            }, 619], ["CurrentCommunityInitialData", [], {}, 490], ["CurrentUserInitialData", [], {
                "ACCOUNT_ID": "100004875732895",
                "USER_ID": "100004875732895",
                "NAME": "L\u00ea L\u1ee3i",
                "SHORT_NAME": "L\u00ea",
                "IS_BUSINESS_PERSON_ACCOUNT": false,
                "HAS_SECONDARY_BUSINESS_PERSON": false,
                "IS_MESSENGER_ONLY_USER": false,
                "IS_DEACTIVATED_ALLOWED_ON_MESSENGER": false,
                "IS_MESSENGER_CALL_GUEST_USER": false,
                "IS_WORK_MESSENGER_CALL_GUEST_USER": false,
                "APP_ID": "412378670482",
                "IS_BUSINESS_DOMAIN": false
            }, 270], ["ErrorDebugHooks", [], {"SnapShotHook": null}, 185], ["ISB", [], {}, 330], ["LSD", [], {"token": "NGS35zahrTAlxJPur2m8kP"}, 323], ["MRequestConfig", [], {
                "dtsg": {
                    "token": "AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc",
                    "valid_for": 86400,
                    "expire": 1621995688
                },
                "dtsg_ag": {
                    "token": "AQw08r-4xelD4c9ULbH7AgFgNmofO-VvszqT0p9S46nyHHfL:AQz6pJoHHMdy_BPWwAG0oLE6X5RyFWF8vianKfNdB26C1orY",
                    "valid_for": 604800,
                    "expire": 1622514088
                },
                "checkResponseOrigin": true,
                "checkResponseToken": true,
                "cleanFinishedRequest": false,
                "cleanFinishedPrefetchRequests": true,
                "ajaxResponseToken": {
                    "secret": "VAnDTNGAnwyoYPlneJXj0eqkeXarrlAz",
                    "encrypted": "AYkz3NaLGjMaSJylpmJ7JKERgM4aBqsorNYl3lmtVR9ClDJMGxI9UIhPIxUiQ7DhtA4lz2D9mDlj7pp4sMg6cwOr3qN0YHo_idz_I0kI310UeQ"
                }
            }, 51], ["ServerNonce", [], {"ServerNonce": "LqLPCEEoGR7k9AKdLeV_Aw"}, 141], ["SiteData", [], {
                "server_revision": 1003843729,
                "client_revision": 1003843729,
                "tier": "",
                "push_phase": "C3",
                "pkg_cohort": "FW_EXP5:mtouch_pkg",
                "haste_session": "18772.FW_EXP5:mtouch_pkg.2.0.0.0",
                "pr": 1,
                "haste_site": "mobile",
                "be_one_ahead": false,
                "ir_on": true,
                "is_rtl": false,
                "is_comet": false,
                "is_experimental_tier": false,
                "is_jit_warmed_up": true,
                "hsi": "6966047345458437221-0",
                "semr_host_bucket": "6",
                "bl_hash_version": 2,
                "skip_rd_bl": true,
                "spin": 0,
                "__spin_r": 1003843729,
                "__spin_b": "trunk",
                "__spin_t": 1621909287,
                "vip": "31.13.77.35"
            }, 317], ["SprinkleConfig", [], {
                "param_name": "jazoest",
                "version": 2,
                "should_randomize": false
            }, 2111], ["PromiseUsePolyfillSetImmediateGK", [], {"www_always_use_polyfill_setimmediate": false}, 2190], ["KSConfig", [], {
                "killed": {
                    "__set": ["MLHUB_FLOW_AUTOREFRESH_SEARCH", "NEKO_DISABLE_CREATE_FOR_SAP", "EO_DISABLE_SYSTEM_SERIAL_NUMBER_FREE_TYPING_IN_CPE_NON_CLIENT", "EO_SRT_HELPDESK_DASHBOARD_DISABLE_UNUSED_TAB_IN_RIGHT_PANEL", "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING", "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING", "BUSINESS_INVITE_FLOW_WITH_SELLER_PROFILE", "ADS_TEMPLATE_UNIFICATION_IN_IG_STORIES", "DCP_CYCLE_COUNT_CLASSIFICATION_UI", "BUY_AT_NEW_START_REQUEST_DSUL_BANNER", "BUY_AT_UI_LINE_DELETE", "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API", "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION", "FORCE_FETCH_BOOSTED_COMPONENT_AFTER_ADS_CREATION", "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG", "SNIVY_GROUP_BY_EVENT_TRACE_ID_AND_NAME", "ADS_STORE_VISITS_METRICS_DEPRECATION", "DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER", "AD_DRAFT_ENABLE_SYNCRHONOUS_FRAGMENT_VALIDATION", "NEKO_ENABLE_RESET_SAP_FOR_CREATE_AD_SET_CONTEXTUAL", "LAB_NET_NEW_UI_RELEASE", "HELPDESK_USE_XDS_SEARCHABLE_INPUT_FOR_WORKFLOW", "POCKET_MONSTERS_CREATE", "POCKET_MONSTERS_DELETE", "SRT_BANZAI_SRT_CORE_LOGGER", "SRT_BANZAI_SRT_MAIN_LOGGER", "SIMPL_SAMPLING_HEALTH_CARD", "WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES", "POCKET_MONSTERS_UPDATE_NAME", "ADS_INTEGRATION_PORTAL_RELAY_LIVE"]
                },
                "ko": {"__set": ["3OsLvnSHNTt", "1G7wJ6bJt9K", "9NpkGYwzrPG", "6fHw06UmAMW", "3oh5Mw86USj", "8NAceEy9JZo", "7FOIzos6XJX", "6xuJHOrdskA", "75fREERrb3F", "80ZDn9dpjEA", "rf8JEPGgOi", "4j36SVzvP3w", "4NSq3ZC4ScE", "53gCxKq281G", "3yzzwBY7Npj", "1onzIv0jH6H", "8PlKuowafe8", "1ntjZ2zgf03", "4SIH2GRVX5W", "2dhqRnqXGLQ", "2WgiNOrHVuC", "amKHb4Cw4WI", "5mNEXob0nTj", "8rDvN9vWdAK", "9cL5o2kjfZo", "DDZhogI19W", "aDayprn6pbH", "acrJTh9WGdp", "1oOE64fL4wO", "9Gd8qgRxn8z", "MPMaqnqZ9c", "4MzX0ipjWq", "5XCz1h9Iaw3", "7r6mSP7ofr2", "5zgf0XOYSz7"]}
            }, 2580], ["JSErrorLoggingConfig", [], {
                "appId": 412378670482,
                "extra": [],
                "reportInterval": 50,
                "sampleWeight": null,
                "sampleWeightKey": "__jssesw"
            }, 2776], ["ImmediateImplementationExperiments", [], {"prefer_message_channel": true}, 3419], ["UriNeedRawQuerySVConfig", [], {"uris": ["dms.netmng.com", "doubleclick.net", "r.msn.com", "watchit.sky.com", "graphite.instagram.com", "www.kfc.co.th", "learn.pantheon.io", "www.landmarkshops.in", "www.ncl.com", "s0.wp.com", "www.tatacliq.com", "bs.serving-sys.com", "kohls.com", "lazada.co.th", "xg4ken.com", "technopark.ru", "officedepot.com.mx", "bestbuy.com.mx", "booking.com"]}, 3871], ["RunGatingConfig", [], {"shouldUseBrowserUnload": true}, 3914], ["InitialCookieConsent", [], {
                "deferCookies": false,
                "initialConsent": {"__set": [1, 2]},
                "noCookies": false,
                "shouldShowCookieBanner": false
            }, 4328], ["TrustedTypesConfig", [], {
                "useTrustedTypes": false,
                "reportOnly": false
            }, 4548], ["WebConnectionClassServerGuess", [], {"connectionClass": "EXCELLENT"}, 4705], ["BootloaderEndpointConfig", [], {
                "debugNoBatching": false,
                "endpointURI": "https:\/\/m.facebook.com\/ajax\/bootloader-endpoint\/"
            }, 5094], ["cr:696703", [], {"__rc": [null, "Aa3HCwIGl212j6o2bv1AgtDaxT4NKRRH-MDRKbMxRUkPpPDdJ3S0eGg-roFH-k-k9NNxEeB-fYH9fL4ZgL9E-QZpwIg"]}, -1], ["cr:717822", ["TimeSliceImpl"], {"__rc": ["TimeSliceImpl", "Aa3HCwIGl212j6o2bv1AgtDaxT4NKRRH-MDRKbMxRUkPpPDdJ3S0eGg-roFH-k-k9NNxEeB-fYH9fL4ZgL9E-QZpwIg"]}, -1], ["cr:729414", [], {"__rc": [null, "Aa1sGgT_FKOkjwTuklndASjo3xKBqeeDSl-5CAIfIk_L7X68OwLJtSBy5aSRjcM7P6eeVEbs8LycMPBNKxUW4pGp"]}, -1]],
            "require": [["MPrelude"], ["VisualCompletionGating"], ["RequireDeferredReference", "unblock", [], [["VisualCompletionGating"]]]]
        });
    });</script>
<script>now_inl = (function () {
        var p = window.performance;
        return p && p.now && p.timing && p.timing.navigationStart ? function () {
            return p.now() + p.timing.navigationStart
        } : function () {
            return new Date().getTime()
        };
    })();
    window.__bigPipeFR = now_inl();</script>
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yY/l/0,cross/uTZGwXPjcxs.css?_nc_x=q_LVpLfTwy1" as="style" crossorigin="anonymous" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yW/l/0,cross/khJaaYeU64X.css?_nc_x=q_LVpLfTwy1" as="style" crossorigin="anonymous" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yN/l/0,cross/y1Yg7jnbRt_.css?_nc_x=q_LVpLfTwy1" as="style" crossorigin="anonymous" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/Kqe42yzI_x2.js?_nc_x=q_LVpLfTwy1" as="script" crossorigin="anonymous" nonce="AoJqUxnR" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iWPy4/yK/l/vi_VN/BncFqMVZXYJ.js?_nc_x=q_LVpLfTwy1" as="script" crossorigin="anonymous" nonce="AoJqUxnR" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/deCmeXTehsq.js?_nc_x=q_LVpLfTwy1" as="script" crossorigin="anonymous" nonce="AoJqUxnR" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y7/l/0,cross/dWmsq-OgiZI.css?_nc_x=q_LVpLfTwy1" as="style" crossorigin="anonymous" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yS/l/0,cross/sip_hzP5XEc.css?_nc_x=q_LVpLfTwy1" as="style" crossorigin="anonymous" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/l/0,cross/RX29xii1iws.css?_nc_x=q_LVpLfTwy1" as="style" crossorigin="anonymous" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yP/l/0,cross/dSsdiH7djIJ.css?_nc_x=q_LVpLfTwy1" as="style" crossorigin="anonymous" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yw/l/0,cross/ys0bxOz8nur.css?_nc_x=q_LVpLfTwy1" as="style" crossorigin="anonymous" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yp/r/Ir1oR4MGsut.js?_nc_x=q_LVpLfTwy1" as="script" crossorigin="anonymous" nonce="AoJqUxnR" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yT/l/0,cross/KBf1mNbzxsZ.css?_nc_x=q_LVpLfTwy1" as="style" crossorigin="anonymous" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iHf74/yv/l/vi_VN/qGM_NmN2gGO.js?_nc_x=q_LVpLfTwy1" as="script" crossorigin="anonymous" nonce="AoJqUxnR" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iWcQ4/ya/l/vi_VN/iPVGF60uobS.js?_nc_x=q_LVpLfTwy1" as="script" crossorigin="anonymous" nonce="AoJqUxnR" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yw/r/GL_fuc1FeWi.js?_nc_x=q_LVpLfTwy1" as="script" crossorigin="anonymous" nonce="AoJqUxnR" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yy/l/0,cross/uplMUn0dGLV.css?_nc_x=q_LVpLfTwy1" as="style" crossorigin="anonymous" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/uMeiCUyZTzd.js?_nc_x=q_LVpLfTwy1" as="script" crossorigin="anonymous" nonce="AoJqUxnR" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iuFR4/yZ/l/vi_VN/QythbP0M8Pm.js?_nc_x=q_LVpLfTwy1" as="script" crossorigin="anonymous" nonce="AoJqUxnR" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yt/l/0,cross/c1uTUEsCvCa.css?_nc_x=q_LVpLfTwy1" as="style" crossorigin="anonymous" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/WjPHuskwRgK.js?_nc_x=q_LVpLfTwy1" as="script" crossorigin="anonymous" nonce="AoJqUxnR" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yQ/r/beaA5RcTjuZ.js?_nc_x=q_LVpLfTwy1" as="script" crossorigin="anonymous" nonce="AoJqUxnR" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yv/r/rH8SPrKhe7V.js?_nc_x=q_LVpLfTwy1" as="script" crossorigin="anonymous" nonce="AoJqUxnR" />--}}
{{--<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/JyBUSZwhqrD.js?_nc_x=q_LVpLfTwy1" as="script" crossorigin="anonymous" nonce="AoJqUxnR" />--}}

<script>window.__bigPipeCtor = now_inl();
    requireLazy(["BigPipe"], function (BigPipe) {
        define("__bigPipe", [], window.bigPipe = new BigPipe({
            "forceFinish": true,
            "config": {"flush_pagelets_asap": true, "dispatch_pagelet_replayable_actions": false}
        }));
    });</script>
<script nonce="AoJqUxnR">(function () {
        var n = now_inl();
        requireLazy(["__bigPipe"], function (bigPipe) {
            bigPipe.beforePageletArrive("first_response", n);
        })
    })();</script>
<script nonce="AoJqUxnR">requireLazy(["__bigPipe"], (function (bigPipe) {
        bigPipe.onPageletArrive({
            displayResources: ["4bc9mDP", "nSxUM1r", "IjYT5uc", "M3TKZkm", "AmPrBIn", "XvA7If1", "cfF+QHP", "0MB+8nM", "nxd+1z1", "b895oXo", "slxSR0y", "gqZSipH", "sJHwRqK", "qtF2SCr", "0A42BqM", "+3KRSKZ", "kzdNo2F", "tJ9Y/Bb", "KqnNJyP", "W/r4/jJ", "2z2N9B2", "EJJwjO0", "0R4xqX5", "/5qtLv3"],
            id: "first_response",
            phase: 0,
            last_in_phase: true,
            tti_phase: 0,
            all_phases: [63, 7],
            jsmods: {
                define: [["CookieCoreConfig", [], {
                    a11y: {s: "None"},
                    c_user: {s: "None"},
                    cppo: {t: 86400, s: "None"},
                    dpr: {t: 604800, s: "None"},
                    fbl_ci: {t: 31536000, s: "None"},
                    fbl_cs: {t: 31536000, s: "None"},
                    fbl_st: {t: 31536000, s: "Strict"},
                    i_user: {s: "None"},
                    js_ver: {t: 604800, s: "None"},
                    locale: {t: 604800, s: "None"},
                    m_pixel_ratio: {t: 604800, s: "None"},
                    noscript: {s: "None"},
                    presence: {t: 2592000, s: "None"},
                    sfau: {s: "None"},
                    usida: {s: "None"},
                    vpd: {t: 5184000, s: "Lax"},
                    wd: {t: 604800, s: "Lax"},
                    "x-referer": {s: "None"},
                    "x-src": {t: 1, s: "None"}
                }, 2104], ["FbtResultGK", [], {
                    shouldReturnFbtResult: true,
                    inlineMode: "NO_INLINE"
                }, 876], ["IntlPhonologicalRules", [], {
                    meta: {},
                    patterns: {}
                }, 1496], ["IntlViewerContext", [], {GENDER: 1}, 772], ["MJSEnvironment", [], {
                    IS_APPLE_WEBKIT_IOS: false,
                    IS_TABLET: false,
                    IS_ANDROID: false,
                    IS_CHROME: true,
                    IS_FIREFOX: false,
                    IS_WINDOWS_PHONE: false,
                    IS_SAMSUNG_DEVICE: false,
                    OS_VERSION: 10,
                    PIXEL_RATIO: 1,
                    BROWSER_NAME: "Chrome Desktop"
                }, 46], ["NumberFormatConfig", [], {
                    decimalSeparator: ",",
                    numberDelimiter: ".",
                    minDigitsForThousandsSeparator: 4,
                    standardDecimalPatternInfo: {primaryGroupSize: 3, secondaryGroupSize: 3},
                    numberingSystemData: null
                }, 54], ["UserAgentData", [], {
                    browserArchitecture: "64",
                    browserFullVersion: "90.0.4430.212",
                    browserMinorVersion: 0,
                    browserName: "Chrome",
                    browserVersion: 90,
                    deviceName: "Unknown",
                    engineName: "WebKit",
                    engineVersion: "537.36",
                    platformArchitecture: "64",
                    platformName: "Windows",
                    platformVersion: "10",
                    platformFullVersion: "10"
                }, 527], ["ZeroCategoryHeader", [], {}, 1127], ["ZeroRewriteRules", [], {
                    rewrite_rules: {}, whitelist: {
                        "/hr/r": 1,
                        "/hr/p": 1,
                        "/zero/unsupported_browser/": 1,
                        "/zero/policy/optin": 1,
                        "/zero/optin/write/": 1,
                        "/zero/optin/legal/": 1,
                        "/zero/optin/free/": 1,
                        "/about/privacy/": 1,
                        "/about/privacy/update/": 1,
                        "/about/privacy/update": 1,
                        "/zero/toggle/welcome/": 1,
                        "/zero/toggle/nux/": 1,
                        "/zero/toggle/settings/": 1,
                        "/fup/interstitial/": 1,
                        "/work/landing": 1,
                        "/work/login/": 1,
                        "/work/email/": 1,
                        "/ai.php": 1,
                        "/js_dialog_resources/dialog_descriptions_android.json": 0,
                        "/connect/jsdialog/MPlatformAppInvitesJSDialog/": 0,
                        "/connect/jsdialog/MPlatformOAuthShimJSDialog/": 0,
                        "/connect/jsdialog/MPlatformLikeJSDialog/": 0,
                        "/qp/interstitial/": 1,
                        "/qp/action/redirect/": 1,
                        "/qp/action/close/": 1,
                        "/zero/support/ineligible/": 1,
                        "/zero_balance_redirect/": 1,
                        "/zero_balance_redirect": 1,
                        "/zero_balance_redirect/l/": 1,
                        "/l.php": 1,
                        "/lsr.php": 1,
                        "/ajax/dtsg/": 1,
                        "/checkpoint/block/": 1,
                        "/exitdsite": 1,
                        "/zero/balance/pixel/": 1,
                        "/zero/balance/": 1,
                        "/zero/balance/carrier_landing/": 1,
                        "/zero/flex/logging/": 1,
                        "/tr": 1,
                        "/tr/": 1,
                        "/sem_campaigns/sem_pixel_test/": 1,
                        "/bookmarks/flyout/body/": 1,
                        "/zero/subno/": 1,
                        "/confirmemail.php": 1,
                        "/policies/": 1,
                        "/mobile/internetdotorg/classifier/": 1,
                        "/zero/dogfooding": 1,
                        "/xti.php": 1,
                        "/zero/fblite/config/": 1,
                        "/hr/zsh/wc/": 1,
                        "/ajax/bootloader-endpoint/": 1,
                        "/mobile/zero/carrier_page/": 1,
                        "/mobile/zero/carrier_page/education_page/": 1,
                        "/mobile/zero/carrier_page/feature_switch/": 1,
                        "/mobile/zero/carrier_page/settings_page/": 1,
                        "/aloha_check_build": 1,
                        "/upsell/zbd/softnudge/": 1,
                        "/4oh4.php": 1,
                        "/autologin.php": 1,
                        "/birthday_help.php": 1,
                        "/checkpoint/": 1,
                        "/contact-importer/": 1,
                        "/cr.php": 1,
                        "/legal/terms/": 1,
                        "/login.php": 1,
                        "/login/": 1,
                        "/mobile/account/": 1,
                        "/n/": 1,
                        "/remote_test_device/": 1,
                        "/upsell/buy/": 1,
                        "/upsell/buyconfirm/": 1,
                        "/upsell/buyresult/": 1,
                        "/upsell/promos/": 1,
                        "/upsell/continue/": 1,
                        "/upsell/h/promos/": 1,
                        "/upsell/loan/learnmore/": 1,
                        "/upsell/purchase/": 1,
                        "/upsell/promos/upgrade/": 1,
                        "/upsell/buy_redirect/": 1,
                        "/upsell/loan/buyconfirm/": 1,
                        "/upsell/loan/buy/": 1,
                        "/upsell/sms/": 1,
                        "/wap/a/channel/reconnect.php": 1,
                        "/wap/a/nux/wizard/nav.php": 1,
                        "/wap/appreg.php": 1,
                        "/wap/birthday_help.php": 1,
                        "/wap/c.php": 1,
                        "/wap/confirmemail.php": 1,
                        "/wap/cr.php": 1,
                        "/wap/login.php": 1,
                        "/wap/r.php": 1,
                        "/zero/datapolicy": 1,
                        "/a/timezone.php": 1,
                        "/a/bz": 1,
                        "/bz/reliability": 1,
                        "/r.php": 1,
                        "/mr/": 1,
                        "/reg/": 1,
                        "/registration/log/": 1,
                        "/terms/": 1,
                        "/f123/": 1,
                        "/expert/": 1,
                        "/experts/": 1,
                        "/terms/index.php": 1,
                        "/terms.php": 1,
                        "/srr/": 1,
                        "/msite/redirect/": 1,
                        "/fbs/pixel/": 1,
                        "/contactpoint/preconfirmation/": 1,
                        "/contactpoint/cliff/": 1,
                        "/contactpoint/confirm/submit/": 1,
                        "/contactpoint/confirmed/": 1,
                        "/contactpoint/login/": 1,
                        "/preconfirmation/contactpoint_change/": 1,
                        "/help/contact/": 1,
                        "/survey/": 1,
                        "/upsell/loyaltytopup/accept/": 1,
                        "/settings/": 1,
                        "/lite/": 1,
                        "/zero_status_update/": 1,
                        "/operator_store/": 1,
                        "/upsell/": 1,
                        "/wifiauth/login/": 1
                    }
                }, 1478], ["CookieCoreLoggingConfig", [], {
                    maximumIgnorableStallMs: 16.67,
                    sampleRate: 9.7e-5,
                    sampleRateClassic: 1.0e-10,
                    sampleRateFastStale: 1.0e-8
                }, 3401], ["IntlNumberTypeConfig", [], {impl: "return IntlVariations.NUMBER_OTHER;"}, 3405], ["ServerTimeData", [], {
                    serverTime: 1621909289307,
                    timeOfRequestStart: 1621909287233.6,
                    timeOfResponseStart: 1621909287233.6
                }, 5943], ["FWLoader", [], {}, 278], ["MLoadingIndicatorSigils", [], {
                    ANIMATE: "m-loading-indicator-animate",
                    ROOT: "m-loading-indicator-root"
                }, 279], ["MWebStorageMonsterWhiteList", [], {
                    whitelist: ["^CacheStorageVersion$", "^RTC_VIDEO_INPUT$", "^RTC_AUDIO_INPUT$", "^RTC_AUDIO_OUTPUT$", "^RTC_IS_AUDIO_ONLY$", "^RTC_NOISE_SUPPRESSION$", "^RTC_MUTE_STATE$", "^Session$", "^_oz_", "^_video_bandwidthEstimate$", "^Banzai$", "^bz", "^banzai\\:last_storage_flush$", "^falco_queue_", "^mutex", "^msys", "^Bandicoot\\:", "^imp_seq_num$", "^qe_switcher_nub_selection$", "^TabId$", "^sp_pi$", "^\\:userchooser\\:osessusers$", "^\\:userchooser\\:settings$", "^brands\\:console\\:config$", "^consoleEnabled$", "^__fb_messenger_desktop_presence_info$", "^vc_", "^_showMDevConsole$", "^ga_client_id$", "^_mswam_$", "^am_recently_used_filters\\:", "^am_image_size_cache$", "^ickt$", "^last_fast_refresh$", "^_ctv_access_token$", "^_ctv_android_device_info$", "^_ctv_cast_access_token$", "^_ctv_casting_remote$", "^_ctv_console_log_viewer_on_full_screen_player_enabled$", "^_ctv_cookie_consent_displayed$", "^_ctv_debug_redux_logger_enabled$", "^_ctv_deviceUniqueIDFallback$", "^_ctv_gaming_consent_displayed$", "^_ctv_installed_app_player_debug_overlay_enabled$", "^_ctv_last_load_time_ms$", "^_ctv_locale$", "^_ctv_logged_out_constraints_sessions_count$", "^_ctv_reloadedDueToStaleApp$", "^_ctv_reloadedDueToUnrecoverableError$", "^_ctv_search_terms$", "^_ctv_tv_experiments$", "^_ctv_usedCloseAppFallback$", "^_ctv_user_sessions$", "^_ctv_video_debug_overlay_enabled$", "^fx_did$"]
                }, 254], ["MobileAppDetect", [], {
                    is_mobile_app: false,
                    is_ads_manager_app: false,
                    is_pages_manager: false,
                    is_facebook_for_android: false,
                    is_facebook_for_android_in_app_browser: false,
                    is_facebook_for_ios: false,
                    is_instagram: false,
                    is_messenger_for_android: false,
                    is_messenger_for_ios: false,
                    is_messenger_lite_for_android: false,
                    is_messenger_lite_for_ios: false,
                    is_wilde: false,
                    is_kaios: false
                }, 1109], ["MqttWebDeviceID", [], {clientID: "edb33374-0749-4f01-9445-a26e8ae6db95"}, 5003], ["MUFIConfig", [], {
                    hasIEMobileFixes: false,
                    canReactToComment: true,
                    hasUpdatedDock: false,
                    photoComments: {
                        dtsg: "AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc",
                        uploadDomain: "https://upload.facebook.com/",
                        waterfallAppName: "web_m_touch",
                        waterfallSource: "photo_comment"
                    },
                    vpvLoggingTimeout: 300,
                    actionSounds: {like: null}
                }, 669], ["BackgroundSyncParameters", [], {
                    shouldRecoverReactions: true,
                    recoverReactionsQe: ""
                }, 3506], ["MemoryLoggerConfigWebSitevarConfig", [], {measurement_interval_minutes: 5}, 5573], ["CurrentEnvironment", [], {
                    facebookdotcom: true,
                    messengerdotcom: false,
                    workplacedotcom: false
                }, 827], ["ImmediateActiveSecondsConfig", [], {
                    sampling_rate: 2003,
                    ias_bucket: 124
                }, 423], ["MPageControllerGating", [], {
                    shouldDeferUntilCertainNoRedirect: false,
                    shouldReleaseFetcherLock: true,
                    shouldLoadingScreenSetScriptPath: false,
                    shouldRenderAsync404: true
                }, 2023], ["MarauderConfig", [], {
                    app_version: "1.0.0.0 (1003843729)",
                    gk_enabled: false
                }, 31], ["UFIReactionIcons", [], {
                    "1": {
                        "16": {
                            sprited: 1,
                            spriteCssClass: "sx_042f0b",
                            spriteMapCssClass: "sp_vuppHZ0nD_0",
                            origPath: "images/ufi/reactions/v7_DO_NOT_USE_DIRECTLY/16x16/like.png"
                        },
                        "14": {
                            sprited: 1,
                            spriteCssClass: "sx_a4b408",
                            spriteMapCssClass: "sp_vuppHZ0nD_0",
                            origPath: "images/ufi/reactions/v7_DO_NOT_USE_DIRECTLY/14x14/like.png"
                        }
                    },
                    "2": {
                        "16": {
                            sprited: 1,
                            spriteCssClass: "sx_59c92b",
                            spriteMapCssClass: "sp_vuppHZ0nD_0",
                            origPath: "images/ufi/reactions/v7_DO_NOT_USE_DIRECTLY/16x16/love.png"
                        },
                        "14": {
                            sprited: 1,
                            spriteCssClass: "sx_01251e",
                            spriteMapCssClass: "sp_vuppHZ0nD_0",
                            origPath: "images/ufi/reactions/v7_DO_NOT_USE_DIRECTLY/14x14/love.png"
                        }
                    },
                    "16": {
                        "16": {
                            sprited: 1,
                            spriteCssClass: "sx_6ad062",
                            spriteMapCssClass: "sp_vuppHZ0nD_0",
                            origPath: "images/ufi/reactions/v7_DO_NOT_USE_DIRECTLY/16x16/support.png"
                        },
                        "14": {
                            sprited: 1,
                            spriteCssClass: "sx_8ed63f",
                            spriteMapCssClass: "sp_vuppHZ0nD_0",
                            origPath: "images/ufi/reactions/v7_DO_NOT_USE_DIRECTLY/14x14/support.png"
                        }
                    },
                    "4": {
                        "16": {
                            sprited: 1,
                            spriteCssClass: "sx_842492",
                            spriteMapCssClass: "sp_vuppHZ0nD_0",
                            origPath: "images/ufi/reactions/v7_DO_NOT_USE_DIRECTLY/16x16/haha.png"
                        },
                        "14": {
                            sprited: 1,
                            spriteCssClass: "sx_87d6ec",
                            spriteMapCssClass: "sp_vuppHZ0nD_0",
                            origPath: "images/ufi/reactions/v7_DO_NOT_USE_DIRECTLY/14x14/haha.png"
                        }
                    },
                    "3": {
                        "16": {
                            sprited: 1,
                            spriteCssClass: "sx_378a28",
                            spriteMapCssClass: "sp_vuppHZ0nD_0",
                            origPath: "images/ufi/reactions/v7_DO_NOT_USE_DIRECTLY/16x16/wow.png"
                        },
                        "14": {
                            sprited: 1,
                            spriteCssClass: "sx_2d937d",
                            spriteMapCssClass: "sp_vuppHZ0nD_0",
                            origPath: "images/ufi/reactions/v7_DO_NOT_USE_DIRECTLY/14x14/wow.png"
                        }
                    },
                    "7": {
                        "16": {
                            sprited: 1,
                            spriteCssClass: "sx_65dbc1",
                            spriteMapCssClass: "sp_vuppHZ0nD_0",
                            origPath: "images/ufi/reactions/v7_DO_NOT_USE_DIRECTLY/16x16/sorry.png"
                        },
                        "14": {
                            sprited: 1,
                            spriteCssClass: "sx_669639",
                            spriteMapCssClass: "sp_vuppHZ0nD_0",
                            origPath: "images/ufi/reactions/v7_DO_NOT_USE_DIRECTLY/14x14/sorry.png"
                        }
                    },
                    "8": {
                        "16": {
                            sprited: 1,
                            spriteCssClass: "sx_2ae28d",
                            spriteMapCssClass: "sp_vuppHZ0nD_0",
                            origPath: "images/ufi/reactions/v7_DO_NOT_USE_DIRECTLY/16x16/anger.png"
                        },
                        "14": {
                            sprited: 1,
                            spriteCssClass: "sx_b064a8",
                            spriteMapCssClass: "sp_vuppHZ0nD_0",
                            origPath: "images/ufi/reactions/v7_DO_NOT_USE_DIRECTLY/14x14/anger.png"
                        }
                    }
                }, 1059], ["UFIReactionTypes", [], {
                    LIKE: 1, ordering: [1, 2, 16, 4, 3, 7, 8], NONE: 0, reactions: {
                        "1": {
                            color: "#2078f4",
                            display_name: "Thích",
                            is_deprecated: false,
                            is_visible: true,
                            name: "like",
                            type: 1
                        },
                        "2": {
                            color: "#f33e58",
                            display_name: "Yêu thích",
                            is_deprecated: false,
                            is_visible: true,
                            name: "love",
                            type: 2
                        },
                        "13": {
                            color: "#f0ba15",
                            display_name: "Ảnh selfie",
                            is_deprecated: false,
                            is_visible: false,
                            name: "selfie",
                            type: 13
                        },
                        "11": {
                            color: "#7e64c4",
                            display_name: "Biết ơn",
                            is_deprecated: false,
                            is_visible: true,
                            name: "dorothy",
                            type: 11
                        },
                        "12": {
                            color: "#ec7ebd",
                            display_name: "Tự hào",
                            is_deprecated: false,
                            is_visible: true,
                            name: "toto",
                            type: 12
                        },
                        "4": {
                            color: "#f7b125",
                            display_name: "Haha",
                            is_deprecated: false,
                            is_visible: true,
                            name: "haha",
                            type: 4
                        },
                        "5": {
                            color: "#f0ba15",
                            display_name: "Chúc mừng",
                            is_deprecated: true,
                            is_visible: false,
                            name: "yay",
                            type: 5
                        },
                        "3": {
                            color: "#f7b125",
                            display_name: "Wow",
                            is_deprecated: false,
                            is_visible: true,
                            name: "wow",
                            type: 3
                        },
                        "10": {
                            color: "#f0ba15",
                            display_name: "Khó hiểu",
                            is_deprecated: true,
                            is_visible: false,
                            name: "confused",
                            type: 10
                        },
                        "16": {
                            color: "#f7b125",
                            display_name: "Thương thương",
                            is_deprecated: false,
                            is_visible: true,
                            name: "support",
                            type: 16
                        },
                        "7": {
                            color: "#f7b125",
                            display_name: "Buồn",
                            is_deprecated: false,
                            is_visible: true,
                            name: "sorry",
                            type: 7
                        },
                        "8": {
                            color: "#e9710f",
                            display_name: "Phẫn nộ",
                            is_deprecated: false,
                            is_visible: true,
                            name: "anger",
                            type: 8
                        },
                        "14": {
                            color: "#f0ba15",
                            display_name: "Bày tỏ cảm xúc",
                            is_deprecated: true,
                            is_visible: false,
                            name: "flame",
                            type: 14
                        },
                        "15": {
                            color: "#f0ba15",
                            display_name: "Bày tỏ cảm xúc",
                            is_deprecated: true,
                            is_visible: false,
                            name: "plane",
                            type: 15
                        }
                    }
                }, 911], ["MUFIInlineRepliesFunnelLogConfig", [], {MUFIInlineReplyComposerFunnelLogger: null}, 1371], ["ExternalShareTrackingConfig", [], {
                    idSize: 16,
                    characterSet: "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ",
                    shareParam: "extid"
                }, 4966], ["MComposerConfig", [], {
                    COMPOSITION_DATASTORE_KEY: "COMPOSITION",
                    ENABLE_LOGGING: true,
                    PUBLISH_LIVE: true,
                    CAN_TOUCH_PHOTO_INPUT_WHILE_EXPANDED: true,
                    MComposerLoggingController: null
                }, 446], ["FbtQTOverrides", [], {
                    overrides: {
                        "1_367ea8e1cb288c8cfe79e1dd1a7e54ce": "Đăng",
                        "1_c65eb25cec72eb481713a2e7ed0b982b": "Đăng",
                        "1_a4eb97b77f646af45144f2151b306ba0": "Đăng"
                    }
                }, 551], ["AnalyticsCoreData", [], {
                    device_id: "$^|AcZkJ-2B54k-VOtNbP6xSUOwiLPoVBiejPvQCKgdrzv2DN8JmjBarC3Ps7rrjcQKTXKMyjCvKTo3kHwl0GPgW7oise7JVl8HMQ|fd.AcaO6rHa8SYIgcNz_leu--dJcxTQEI4wOs_mxI2dvESsWLgxVyeAwlvRs5zyi90ecRff6OpzexIPzxGbMZM2NGK1",
                    app_id: "412378670482",
                    enable_bladerunner: true,
                    enable_ack: false,
                    push_phase: "C3",
                    enable_observer: false
                }, 5237], ["LinkshimHandlerConfig", [], {
                    supports_meta_referrer: true,
                    default_meta_referrer_policy: "origin-when-crossorigin",
                    switched_meta_referrer_policy: "origin",
                    non_linkshim_lnfb_mode: null,
                    link_react_default_hash: "AT39B9v3NBJDYvOWJdAkxbQr0YjiJAn4eYXPNqi4ZhtlblN1rtHBTfNapa0XoK3s_bEhV6xO-ZQXDiZeamlBJagMQcAK6TrjIEwqwPgiYbcv7Gu_RHZreKWEhcUo7wbdOx9beQ",
                    untrusted_link_default_hash: "AT3keKukBMrlFj868bN9uR7XggqwqUIPGORE7I9OmYolzJlWlQTlZjpABpUFVocW16lCY6hUAiwrs8V_pe1FmMi9uDjyqMY0lkrXNP7D0x2texRH90dp_OljLUUAVdL2xV_fTg",
                    linkshim_host: "lm.facebook.com",
                    linkshim_path: "/l.php",
                    linkshim_enc_param: "h",
                    linkshim_url_param: "u",
                    use_rel_no_opener: true,
                    always_use_https: true,
                    onion_always_shim: true,
                    middle_click_requires_event: true,
                    www_safe_js_mode: "asynclazy",
                    m_safe_js_mode: "MLynx_asynclazy",
                    ghl_param_link_shim: false,
                    click_ids: ["IwAR3FCBOGpbtw16jftRLDokmtDS72qvEu5va6yzaOb8Pimso1cBT-QcjLIgU", "IwAR1PGwGJfZd0aaSJUpenhBUU1VU8390wTlRsMixY5KBljuttbvdDA3jQG5A", "IwAR3FntPek1xXsMK_WgkCT3oQiA1lrQ7dEqLF4EtXusI5e60T-evzMoEMyCM", "IwAR3NEhZUPg-dQQ6zpD4IQcYRMBJFHUxpswibPjmeko4lHdkvO2reB4b1XWs", "IwAR103czOzg9NObyS9BaKEtBpXku_z3oMvjiO-RQ8V2gv3VZgQ35NFsqtgRg", "IwAR3E8gfFf-3PdSWFVsg_8z-OhCDyTVVbsB2ad1XbYJDSFE6R6nMb3w_O6WA", "IwAR10FHq90Ai66Ddskudx2v6uDLkCtVvJdgiA7bsIcKokSE4jUu1t3MqJeco", "IwAR21plu9BMWpYV6s9oMCNDhNlh28mC3KX-f1JRkze3havSeNDPO2ml35ydM", "IwAR0Hg9dbJxHOyHw2z25Z1XuiGu117PaK9AK1ZgKtG7yYRSLCU66Qaut9Cfs", "IwAR1d6Bwf9-5a4-up_t_PMfOp87EXdnxvemWChDuye68gyaa7AMnWUQVxknw", "IwAR3yZ7QQk9Ucx5k1a75zGRpFNUtv_wYjFxJ6n6YpvsDeM4DbyMVLH6CPj0U", "IwAR0Bm3wzSfPfEVPbsQYhjjR8mSGktgyhgGF0t3nJjqphnLpBTB9Yx9SUdPQ", "IwAR0R5mhsDtGs9cPMtqBau7GmtAoJoCO8q-lbgpEIO2A66Q5JDSLYi-Sm4JA", "IwAR1Lt8n3mzilNItJvC897TqXHV-zOk8s5S_y8MrH09RM7GhHUa5PdIY-vZo", "IwAR1SHIy_-AMge_DJlAU_UOHIxtnsD1gJtnHwn47cIo8cTHiq1lyRsQFqwig", "IwAR131_By8OBTS-2zQ-sSZoIjcZc1Cdp10e_RfwlmaxrYVzml5-Db_92CXXE", "IwAR2OZ9Q8nQXPWwdl0AhTHkw3swJrxexsMqumO743TBNK1-tdTLI6tqrbIek", "IwAR0ujwCcezoI0Jh8NbYu-1K7nFyNYJh6wmJ92Sz8emqqIIwXjQoUn8SbMDU", "IwAR3E4PYx_Mwi6yZUUPifJPYh4Ld8RVtgY7HJS7Cl4pBuWIrhuC5HIL7Np5w", "IwAR0bmPRQObM3HqyvPLO0u8l4_cppkRxIT1LS4oU0KS_VUEtTUIaN4oK1Iic", "IwAR0qV3Hfg9Xnbx1-fSq7qtCyKvxSYRSjTCvyEDyDnUXXoIQH09ZN8yhQX_E", "IwAR3vhGP2N6bX2hP0LZ1eVfslv3cUj2i3JaQBRhRVpC14OqJ7QQp8YfioCGc", "IwAR0K3q2KtmPHkTlVgU2vvhCMb6ThvHDoIb66DVX413HRK5aV5f8nd_kg5Bo", "IwAR27C040exQWo4ZsFQnnvI7ves_6EzXjHDbeG5DMX-kaqLqBdPEBj07xc3Y", "IwAR3MmG9H_pET-nFiJC_8P7riU19yvpx48laDOYr3lcJOvT_iTZ-dsXU3fvo", "IwAR1WA-MriryrwxRiv0iu8do8T48noxPQAOPu1WCxwXK79RWsWNYvH03HQwE", "IwAR3UDGLNnxY9Gn0sF6uvXRfQdi_Orn5rMN4Y-Tlbfk_XtDT2Tr8CcwnEEEM", "IwAR3IQXzhZKXzQ5zblZHoT_CszMCtuMrxLsgSho9uMumVvdD3yxLmyzuLFw8", "IwAR04ij0FA4Rj0zmjk_aDrDnzeL8K2oAlbeWdDyj0p7Q9rFRT_0go1Zm3trc", "IwAR0N0_dMHLKdEzq-GNR_xzxC5OlZSPp27ZYlFmAVAHDx0lBbRDhL_CxBnbc", "IwAR3k0XB1_Z2c5C_H3OoRD0TaxkNVg3dPs2e3ol7isMTHDguntGFr3z_DKpc", "IwAR01-UEbp5YHS6MPFSYbc_fXuz1mG4ZleciCseou1_dZ9gfESSxsS5_91Mw", "IwAR1yQHwY95si5DD94v9W1h88c5KEUr4czVX9Z9kuEQjU7EqvfbmoCs-Ekew", "IwAR00cERD0mKssQkTTCKtyd--3c44-_v1oBJKi78KN8xCikjnfmisHj0VjhI", "IwAR24tRmi1p2PuKAGU9OioNMqVc3svGsWBputjp1Xo0OGbWHe8dNtpDGu_Gc", "IwAR02WJLOVRa3JP8M1sP-gHXr__3U9ByfmEiVUxgA3zwnx8IN9fAK21Jrd8k", "IwAR1y9adhm-bA_hIrx3lMHnKnmlZdbMz3tWaoQrpVY-F2UKadGT304ULlAJI", "IwAR30pqhuuJdvi-AKlJD49lYQohPT-fKoXVZqUgOAU_yQ6-ewcnj9W2tx5m4", "IwAR1EePfs5LViF4kCCjoGZbrtH1a2g8cN2Jmdy8ibyAimTMVS--rZxcYRwK4", "IwAR0FfDMGfIB_r9OT10RAPXkCGXBkv_k8wbM-FpVLtPBJZKqhl2VmZM82PjY", "IwAR0wzVVrIFgoCJ_ss0dpBSU0wgIyybGWsresbAxY34d2q_Ar_x8ZQmzY5ZQ", "IwAR0CizR7UIH7-bAOqxCjqNJukO9cVhpSRmBL5Jq2iiGlEaiOUyhGfTe47JY", "IwAR2vRgowXxwAagnVxF2JNE1a0Ym7iG7Tod3GR8S4IMGL2Xkjy2yIGPq2HDE", "IwAR2x0SorgCOVkJeGPHky2QYH-vSVtPLq3WGTnDGsQ3wgGEEn74XYyulipz4", "IwAR1ynt3ORDLNGOPcyRbRsOLpzwcnOusZXDLLrD8zyuJ4aubDRRvTZkjTiS8", "IwAR32PrZBOsTuy0_iFsVCozPPRagEyhC3-D18_U6drE4JRgQMBvsMJSVx6nU", "IwAR3kGFDRhbWAJoAZg5gOybcADUpdE9MDghS-vYywHHYm_hq4FS6IMfhOBJM", "IwAR2yStWZvKzQE_N1lAqoNNG5EB9hq3Y4_rgFMSZPfaUT76_EDTcQiU3QPLw", "IwAR0sE7ZZIYx7dMl2FNbxvj7rW61uVxsrJ_Wq-sxvIHpn2HMjx1PdOXxNtgM", "IwAR1NrmFszH4hfvKakYNrEDiONsQVL-GK1V_P5Uvw4vz7o3pvTAnCbLEE3a0"],
                    is_linkshim_supported: true,
                    current_domain: "facebook.com",
                    blocklisted_domains: ["ad.doubleclick.net", "ads-encryption-url-example.com", "bs.serving-sys.com", "ad.atdmt.com"]
                }, 27], ["cr:694370", ["requestIdleCallbackBlue"], {__rc: ["requestIdleCallbackBlue", "Aa3HCwIGl212j6o2bv1AgtDaxT4NKRRH-MDRKbMxRUkPpPDdJ3S0eGg-roFH-k-k9NNxEeB-fYH9fL4ZgL9E-QZpwIg"]}, -1], ["cr:1642797", ["BanzaiBase"], {__rc: ["BanzaiBase", "Aa3HCwIGl212j6o2bv1AgtDaxT4NKRRH-MDRKbMxRUkPpPDdJ3S0eGg-roFH-k-k9NNxEeB-fYH9fL4ZgL9E-QZpwIg"]}, -1], ["cr:692209", ["cancelIdleCallbackBlue"], {__rc: ["cancelIdleCallbackBlue", "Aa3HCwIGl212j6o2bv1AgtDaxT4NKRRH-MDRKbMxRUkPpPDdJ3S0eGg-roFH-k-k9NNxEeB-fYH9fL4ZgL9E-QZpwIg"]}, -1], ["MBanzaiConfig", [], {
                    MAX_SIZE: 10000,
                    MAX_WAIT: 30000,
                    MIN_WAIT: null,
                    RESTORE_WAIT: 30000,
                    blacklist: ["time_spent"],
                    disabled: false,
                    gks: {
                        platform_oauth_client_events: true,
                        visibility_tracking: true,
                        boosted_pagelikes: true,
                        mtouch_use_beacon: true
                    },
                    known_routes: ["unified_logging", "artillery_javascript_actions", "artillery_javascript_trace", "artillery_logger_data", "logger", "falco", "gk2_exposure", "js_error_logging", "loom_trace", "marauder", "perfx_custom_logger_endpoint", "qex", "require_cond_exposure_logging", "srt_job_view_heartbeats", "sri_logger_data"],
                    should_drop_unknown_routes: true,
                    should_log_unknown_routes: false
                }, 32]],
                instances: [["__inst_fc1ffbe9_0_0_j9", ["MFlyout", "MLayerHideOnTouch", "MLayerHideOnBlur", "MLayerDestroyOnTransition", "MFlyoutAutoFlip", "MFlyoutContextSigil"], [{
                    position: "above",
                    nubalign: "center",
                    offsetY: 0,
                    margin: "none",
                    width: "wide",
                    modal: false,
                    useContentAsBounds: false,
                    fadeonhide: false,
                    autoFlipTopOffset: 0,
                    contextSigil: "like-reaction-flyout",
                    causalSigil: "nonexistant-sigil",
                    addedBehaviors: [{__m: "MLayerHideOnTouch"}, {__m: "MLayerHideOnBlur"}, {__m: "MLayerDestroyOnTransition"}, {__m: "MFlyoutAutoFlip"}, {__m: "MFlyoutContextSigil"}],
                    classNames: ["_1-kb", "accelerate"]
                }, [{__html: "\x3Cdiv role=\"toolbar\">\x3Cdiv class=\"_7om2 _1-kc\">\x3Cdiv class=\"_4g34 _1-kd\" data-store=\"&#123;&quot;reaction&quot;:1&#125;\" aria-label=\"Th&#xed;ch\" role=\"button\" tabindex=\"-1\" data-sigil=\"reaction-item\">\x3Cdiv class=\"_1gc9\">Thích\x3C/div>\x3Cdiv class=\"_uah\" style=\"background-color:#2078f4\">\x3Ci class=\"img _mpx _4sue img _2sxw _4s0y\" style=\"background-image: url(&#039;https\\3a //static.xx.fbcdn.net/rsrc.php/v3/y9/r/MHzsfl2dotT.png&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;padding-bottom:100%;\">\x3C/i>\x3C/div>\x3C/div>\x3Cdiv class=\"_4g34 _1-kd\" data-store=\"&#123;&quot;reaction&quot;:2&#125;\" aria-label=\"Y&#xea;u th&#xed;ch\" role=\"button\" tabindex=\"-1\" data-sigil=\"reaction-item\">\x3Cdiv class=\"_1gc9\">Yêu thích\x3C/div>\x3Cdiv class=\"_uah\" style=\"background-color:#f33e58\">\x3Ci class=\"img _mpx _4sue img _2sxw _4s0y\" style=\"background-image: url(&#039;https\\3a //static.xx.fbcdn.net/rsrc.php/v3/y0/r/w3qjgKNj9fB.png&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;padding-bottom:100%;\">\x3C/i>\x3C/div>\x3C/div>\x3Cdiv class=\"_4g34 _1-kd\" data-store=\"&#123;&quot;reaction&quot;:16&#125;\" aria-label=\"Th&#x1b0;&#x1a1;ng th&#x1b0;&#x1a1;ng\" role=\"button\" tabindex=\"-1\" data-sigil=\"reaction-item\">\x3Cdiv class=\"_1gc9\">Thương thương\x3C/div>\x3Cdiv class=\"_uah\">\x3Ci class=\"img _mpx _4sue img _2sxw _4s0y\" style=\"background-image: url(&#039;https\\3a //static.xx.fbcdn.net/rsrc.php/v3/yc/r/D-8Grj5IQYK.png&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;padding-bottom:100%;\">\x3C/i>\x3C/div>\x3C/div>\x3Cdiv class=\"_4g34 _1-kd\" data-store=\"&#123;&quot;reaction&quot;:4&#125;\" aria-label=\"Haha\" role=\"button\" tabindex=\"-1\" data-sigil=\"reaction-item\">\x3Cdiv class=\"_1gc9\">Haha\x3C/div>\x3Cdiv class=\"_uah\" style=\"background-color:#f7b125\">\x3Ci class=\"img _mpx _4sue img _2sxw _4s0y\" style=\"background-image: url(&#039;https\\3a //static.xx.fbcdn.net/rsrc.php/v3/yE/r/MELK-XIZUPd.png&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;padding-bottom:100%;\">\x3C/i>\x3C/div>\x3C/div>\x3Cdiv class=\"_4g34 _1-kd\" data-store=\"&#123;&quot;reaction&quot;:3&#125;\" aria-label=\"Wow\" role=\"button\" tabindex=\"-1\" data-sigil=\"reaction-item\">\x3Cdiv class=\"_1gc9\">Wow\x3C/div>\x3Cdiv class=\"_uah\" style=\"background-color:#f7b125\">\x3Ci class=\"img _mpx _4sue img _2sxw _4s0y\" style=\"background-image: url(&#039;https\\3a //static.xx.fbcdn.net/rsrc.php/v3/yW/r/gZnHawqIu13.png&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;padding-bottom:100%;\">\x3C/i>\x3C/div>\x3C/div>\x3Cdiv class=\"_4g34 _1-kd\" data-store=\"&#123;&quot;reaction&quot;:7&#125;\" aria-label=\"Bu&#x1ed3;n\" role=\"button\" tabindex=\"-1\" data-sigil=\"reaction-item\">\x3Cdiv class=\"_1gc9\">Buồn\x3C/div>\x3Cdiv class=\"_uah\" style=\"background-color:#f7b125\">\x3Ci class=\"img _mpx _4sue img _2sxw _4s0y\" style=\"background-image: url(&#039;https\\3a //static.xx.fbcdn.net/rsrc.php/v3/y4/r/T5dlFgzEnnp.png&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;padding-bottom:100%;\">\x3C/i>\x3C/div>\x3C/div>\x3Cdiv class=\"_4g34 _1-kd\" data-store=\"&#123;&quot;reaction&quot;:8&#125;\" aria-label=\"Ph&#x1eab;n n&#x1ed9;\" role=\"button\" tabindex=\"-1\" data-sigil=\"reaction-item\">\x3Cdiv class=\"_1gc9\">Phẫn nộ\x3C/div>\x3Cdiv class=\"_uah\" style=\"background-color:#e9710f\">\x3Ci class=\"img _mpx _4sue img _2sxw _4s0y\" style=\"background-image: url(&#039;https\\3a //static.xx.fbcdn.net/rsrc.php/v3/y2/r/6detLcYDtQu.png&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;padding-bottom:100%;\">\x3C/i>\x3C/div>\x3C/div>\x3C/div>\x3C/div>"}]], 2], ["__inst_24da3c47_0_0_4/", ["MFeedNUXTooltip", "__inst_5878081c_0_0_59"], ["nonexistant-sigil", "reactions_comments", {__m: "__inst_5878081c_0_0_59"}, 0], 3], ["__inst_5878081c_0_0_59", ["MFlyout", "MLayerHideOnBlur", "MLayerDestroyOnHide", "MLayerDestroyOnTransition", "MFlyoutContextSigil"], [{
                    position: "above",
                    nubalign: "center",
                    offsetY: 0,
                    margin: "none",
                    width: "auto",
                    modal: false,
                    useContentAsBounds: false,
                    fadeonhide: false,
                    contextSigil: "nonexistant-sigil",
                    addedBehaviors: [{__m: "MLayerHideOnBlur"}, {__m: "MLayerDestroyOnHide"}, {__m: "MLayerDestroyOnTransition"}, {__m: "MFlyoutContextSigil"}],
                    classNames: ["_5bob", "_3jcw", "accelerate"]
                }, [{__html: "\x3Cdiv class=\"_55ws\" data-sigil=\"mflyout-remove-on-click\">\x3Cdiv class=\"_52jh\">Mới! Bày tỏ cảm xúc về một bình luận\x3C/div>Nhấn và giữ liên kết Thích để xem tất cả cảm xúc.\x3C/div>"}]], 2], ["__inst_a9de87cf_0_0_sf", ["MCommentComposer", "__elem_a9de87cf_0_0_p9"], [{__m: "__elem_a9de87cf_0_0_p9"}, {
                    actor_id: 100004875732895,
                    composer_id: "comment_form_100044204000528_319804912836306",
                    has_live_comment: true,
                    should_focus: false,
                    should_anchor: false,
                    target_id: 319804912836306,
                    toggle_submit: true,
                    log_comment: false,
                    parent_comment_id: null,
                    is_inline_reply: false,
                    is_reply_permalink: false,
                    input_id: "composerInput-319804912836306",
                    is_comments_permalink: false,
                    send_with_softkey: false,
                    should_anchor_reactions: false,
                    isPageletified: false
                }], 1], ["__inst_083cf14b_0_0_W7", ["MFlyout", "MLayerHideOnBlur", "MLayerDestroyOnTransition", "MFlyoutAutoFlip", "MFlyoutContextSigil", "MActionBubbleLayout"], [{
                    position: "below",
                    nubalign: "center",
                    offsetY: 3,
                    margin: "none",
                    width: "wide",
                    modal: false,
                    useContentAsBounds: false,
                    fadeonhide: false,
                    autoFlipTopOffset: 0,
                    contextSigil: "comment-flyout-context",
                    addedBehaviors: [{__m: "MLayerHideOnBlur"}, {__m: "MLayerDestroyOnTransition"}, {__m: "MFlyoutAutoFlip"}, {__m: "MFlyoutContextSigil"}, {__m: "MActionBubbleLayout"}],
                    classNames: ["commentFlyout", "_55i2", "accelerate"],
                    layerid: "commentflyout"
                }, [{__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editCommentSigil edit-link\">\x3Cspan class=\"_55sr\">Chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editHistoryCommentSigil\">\x3Cspan class=\"_55sr\">Lịch sử chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentSigil\">\x3Cspan class=\"_55sr\">Xóa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable hideCommentSigil\">\x3Cspan class=\"_55sr\">Ẩn\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable removeTagSigil\">\x3Cspan class=\"_55sr\">Gỡ thẻ\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable reportCommentSigil feed-ufi-nfx-dialog\">\x3Cspan class=\"_55sr\">Tìm hỗ trợ hoặc báo cáo bình luận\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable ban_user_from_page_comment_sigil\">\x3Cspan class=\"_55sr\">Cấm\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndRemoveAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và thành viên\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndBlockAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và chặn người dùng\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable _4ob2\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable muteMemberSigil\">\x3Cspan class=\"_55sr\">\x3Cspan>\x3Cspan class=\"_w_y\">Cấm thành viên đăng\x3C/span>\x3Cspan class=\"_w_-\">Bỏ cấm thành viên đăng\x3C/span>\x3C/span>\x3C/span>\x3C/a>"}]], 2], ["__inst_8f1ce391_0_0_aH", ["MMultiPhotoUploaderInitReact", "__elem_fbbbeee8_0_0_h5", "__elem_242e8bd2_0_0_B2", "__elem_8f1ce391_0_0_jK"], [{
                    inputId: "u_0_y_fC",
                    videoInputId: null,
                    containerId: "comment_form_100044204000528_319804912836306",
                    previewGridId: "u_0_z_s2",
                    targetFormId: "comment_form_100044204000528_319804912836306",
                    inputContainerElem: {__m: "__elem_fbbbeee8_0_0_h5"},
                    containerElem: {__m: "__elem_242e8bd2_0_0_B2"},
                    previewGridElem: {__m: "__elem_8f1ce391_0_0_jK"},
                    targetFormElem: {__m: "__elem_242e8bd2_0_0_B2"},
                    dtsg: "AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc",
                    uploadDomain: "https://upload.facebook.com/",
                    waterfallAppName: "web_m_touch",
                    waterfallID: "a3e4b463f1ec26e4de48accd25f9e3ad",
                    waterfallSource: "photo_comment",
                    maxPhotosAllowed: 1,
                    initCollapsed: true,
                    logFlowBeginOnClick: true,
                    targetID: "100004875732895",
                    actorID: "100004875732895",
                    horizontalScrolling: true,
                    largeThumbnails: true,
                    useWhiteDesign: true,
                    showPhotoLabel: true,
                    composerDropShadow: false,
                    disableIOS8SafariAlert: false,
                    allowVideo: false,
                    separatePhotoAndVideo: false,
                    accessToken: null,
                    useLocalFilePreview: false,
                    hideUploadProgress: false,
                    containerClassName: null
                }, null], 1], ["__inst_a9de87cf_0_1_+b", ["MCommentComposer", "__elem_a9de87cf_0_1_0f"], [{__m: "__elem_a9de87cf_0_1_0f"}, {
                    actor_id: 100004875732895,
                    composer_id: "comment_form_100044204000528_319809989502465",
                    has_live_comment: true,
                    should_focus: false,
                    should_anchor: false,
                    target_id: 319809989502465,
                    toggle_submit: true,
                    log_comment: false,
                    parent_comment_id: null,
                    is_inline_reply: false,
                    is_reply_permalink: false,
                    input_id: "composerInput-319809989502465",
                    is_comments_permalink: false,
                    send_with_softkey: false,
                    should_anchor_reactions: false,
                    isPageletified: false
                }], 1], ["__inst_8f1ce391_0_1_EY", ["MMultiPhotoUploaderInitReact", "__elem_fbbbeee8_0_1_xn", "__elem_242e8bd2_0_1_QG", "__elem_8f1ce391_0_1_Zt"], [{
                    inputId: "u_0_10_mo",
                    videoInputId: null,
                    containerId: "comment_form_100044204000528_319809989502465",
                    previewGridId: "u_0_11_wY",
                    targetFormId: "comment_form_100044204000528_319809989502465",
                    inputContainerElem: {__m: "__elem_fbbbeee8_0_1_xn"},
                    containerElem: {__m: "__elem_242e8bd2_0_1_QG"},
                    previewGridElem: {__m: "__elem_8f1ce391_0_1_Zt"},
                    targetFormElem: {__m: "__elem_242e8bd2_0_1_QG"},
                    dtsg: "AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc",
                    uploadDomain: "https://upload.facebook.com/",
                    waterfallAppName: "web_m_touch",
                    waterfallID: "aae4b5e4b2006348d400467a9a56e8d5",
                    waterfallSource: "photo_comment",
                    maxPhotosAllowed: 1,
                    initCollapsed: true,
                    logFlowBeginOnClick: true,
                    targetID: "100004875732895",
                    actorID: "100004875732895",
                    horizontalScrolling: true,
                    largeThumbnails: true,
                    useWhiteDesign: true,
                    showPhotoLabel: true,
                    composerDropShadow: false,
                    disableIOS8SafariAlert: false,
                    allowVideo: false,
                    separatePhotoAndVideo: false,
                    accessToken: null,
                    useLocalFilePreview: false,
                    hideUploadProgress: false,
                    containerClassName: null
                }, null], 1], ["__inst_083cf14b_0_1_NP", ["MFlyout", "MLayerHideOnBlur", "MLayerDestroyOnTransition", "MFlyoutAutoFlip", "MFlyoutContextSigil", "MActionBubbleLayout"], [{
                    position: "below",
                    nubalign: "center",
                    offsetY: 3,
                    margin: "none",
                    width: "wide",
                    modal: false,
                    useContentAsBounds: false,
                    fadeonhide: false,
                    autoFlipTopOffset: 0,
                    contextSigil: "comment-flyout-context",
                    addedBehaviors: [{__m: "MLayerHideOnBlur"}, {__m: "MLayerDestroyOnTransition"}, {__m: "MFlyoutAutoFlip"}, {__m: "MFlyoutContextSigil"}, {__m: "MActionBubbleLayout"}],
                    classNames: ["commentFlyout", "_55i2", "accelerate"],
                    layerid: "commentflyout"
                }, [{__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editCommentSigil edit-link\">\x3Cspan class=\"_55sr\">Chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editHistoryCommentSigil\">\x3Cspan class=\"_55sr\">Lịch sử chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentSigil\">\x3Cspan class=\"_55sr\">Xóa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable hideCommentSigil\">\x3Cspan class=\"_55sr\">Ẩn\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable removeTagSigil\">\x3Cspan class=\"_55sr\">Gỡ thẻ\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable reportCommentSigil feed-ufi-nfx-dialog\">\x3Cspan class=\"_55sr\">Tìm hỗ trợ hoặc báo cáo bình luận\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable ban_user_from_page_comment_sigil\">\x3Cspan class=\"_55sr\">Cấm\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndRemoveAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và thành viên\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndBlockAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và chặn người dùng\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable _4ob2\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable muteMemberSigil\">\x3Cspan class=\"_55sr\">\x3Cspan>\x3Cspan class=\"_w_y\">Cấm thành viên đăng\x3C/span>\x3Cspan class=\"_w_-\">Bỏ cấm thành viên đăng\x3C/span>\x3C/span>\x3C/span>\x3C/a>"}]], 2], ["__inst_a9de87cf_0_2_OW", ["MCommentComposer", "__elem_a9de87cf_0_2_eL"], [{__m: "__elem_a9de87cf_0_2_eL"}, {
                    actor_id: 100004875732895,
                    composer_id: "comment_form_100044204000528_319804949502969",
                    has_live_comment: true,
                    should_focus: false,
                    should_anchor: false,
                    target_id: 319804949502969,
                    toggle_submit: true,
                    log_comment: false,
                    parent_comment_id: null,
                    is_inline_reply: false,
                    is_reply_permalink: false,
                    input_id: "composerInput-319804949502969",
                    is_comments_permalink: false,
                    send_with_softkey: false,
                    should_anchor_reactions: false,
                    isPageletified: false
                }], 1], ["__inst_8f1ce391_0_2_xD", ["MMultiPhotoUploaderInitReact", "__elem_fbbbeee8_0_2_SN", "__elem_242e8bd2_0_2_Ve", "__elem_8f1ce391_0_2_v5"], [{
                    inputId: "u_0_12_JR",
                    videoInputId: null,
                    containerId: "comment_form_100044204000528_319804949502969",
                    previewGridId: "u_0_13_ZW",
                    targetFormId: "comment_form_100044204000528_319804949502969",
                    inputContainerElem: {__m: "__elem_fbbbeee8_0_2_SN"},
                    containerElem: {__m: "__elem_242e8bd2_0_2_Ve"},
                    previewGridElem: {__m: "__elem_8f1ce391_0_2_v5"},
                    targetFormElem: {__m: "__elem_242e8bd2_0_2_Ve"},
                    dtsg: "AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc",
                    uploadDomain: "https://upload.facebook.com/",
                    waterfallAppName: "web_m_touch",
                    waterfallID: "46c2cb43ec22dc03c983b1e7d15bdb65",
                    waterfallSource: "photo_comment",
                    maxPhotosAllowed: 1,
                    initCollapsed: true,
                    logFlowBeginOnClick: true,
                    targetID: "100004875732895",
                    actorID: "100004875732895",
                    horizontalScrolling: true,
                    largeThumbnails: true,
                    useWhiteDesign: true,
                    showPhotoLabel: true,
                    composerDropShadow: false,
                    disableIOS8SafariAlert: false,
                    allowVideo: false,
                    separatePhotoAndVideo: false,
                    accessToken: null,
                    useLocalFilePreview: false,
                    hideUploadProgress: false,
                    containerClassName: null
                }, null], 1], ["__inst_083cf14b_0_2_bR", ["MFlyout", "MLayerHideOnBlur", "MLayerDestroyOnTransition", "MFlyoutAutoFlip", "MFlyoutContextSigil", "MActionBubbleLayout"], [{
                    position: "below",
                    nubalign: "center",
                    offsetY: 3,
                    margin: "none",
                    width: "wide",
                    modal: false,
                    useContentAsBounds: false,
                    fadeonhide: false,
                    autoFlipTopOffset: 0,
                    contextSigil: "comment-flyout-context",
                    addedBehaviors: [{__m: "MLayerHideOnBlur"}, {__m: "MLayerDestroyOnTransition"}, {__m: "MFlyoutAutoFlip"}, {__m: "MFlyoutContextSigil"}, {__m: "MActionBubbleLayout"}],
                    classNames: ["commentFlyout", "_55i2", "accelerate"],
                    layerid: "commentflyout"
                }, [{__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editCommentSigil edit-link\">\x3Cspan class=\"_55sr\">Chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editHistoryCommentSigil\">\x3Cspan class=\"_55sr\">Lịch sử chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentSigil\">\x3Cspan class=\"_55sr\">Xóa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable hideCommentSigil\">\x3Cspan class=\"_55sr\">Ẩn\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable removeTagSigil\">\x3Cspan class=\"_55sr\">Gỡ thẻ\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable reportCommentSigil feed-ufi-nfx-dialog\">\x3Cspan class=\"_55sr\">Tìm hỗ trợ hoặc báo cáo bình luận\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable ban_user_from_page_comment_sigil\">\x3Cspan class=\"_55sr\">Cấm\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndRemoveAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và thành viên\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndBlockAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và chặn người dùng\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable _4ob2\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable muteMemberSigil\">\x3Cspan class=\"_55sr\">\x3Cspan>\x3Cspan class=\"_w_y\">Cấm thành viên đăng\x3C/span>\x3Cspan class=\"_w_-\">Bỏ cấm thành viên đăng\x3C/span>\x3C/span>\x3C/span>\x3C/a>"}]], 2], ["__inst_a9de87cf_0_3_WN", ["MCommentComposer", "__elem_a9de87cf_0_3_t0"], [{__m: "__elem_a9de87cf_0_3_t0"}, {
                    actor_id: 100004875732895,
                    composer_id: "comment_form_100044204000528_319804972836300",
                    has_live_comment: true,
                    should_focus: false,
                    should_anchor: false,
                    target_id: 319804972836300,
                    toggle_submit: true,
                    log_comment: false,
                    parent_comment_id: null,
                    is_inline_reply: false,
                    is_reply_permalink: false,
                    input_id: "composerInput-319804972836300",
                    is_comments_permalink: false,
                    send_with_softkey: false,
                    should_anchor_reactions: false,
                    isPageletified: false
                }], 1], ["__inst_8f1ce391_0_3_Ea", ["MMultiPhotoUploaderInitReact", "__elem_fbbbeee8_0_3_mz", "__elem_242e8bd2_0_3_6v", "__elem_8f1ce391_0_3_Z6"], [{
                    inputId: "u_0_14_Bz",
                    videoInputId: null,
                    containerId: "comment_form_100044204000528_319804972836300",
                    previewGridId: "u_0_15_wH",
                    targetFormId: "comment_form_100044204000528_319804972836300",
                    inputContainerElem: {__m: "__elem_fbbbeee8_0_3_mz"},
                    containerElem: {__m: "__elem_242e8bd2_0_3_6v"},
                    previewGridElem: {__m: "__elem_8f1ce391_0_3_Z6"},
                    targetFormElem: {__m: "__elem_242e8bd2_0_3_6v"},
                    dtsg: "AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc",
                    uploadDomain: "https://upload.facebook.com/",
                    waterfallAppName: "web_m_touch",
                    waterfallID: "04d5e7cdb4693895c3e21d08a0dc6373",
                    waterfallSource: "photo_comment",
                    maxPhotosAllowed: 1,
                    initCollapsed: true,
                    logFlowBeginOnClick: true,
                    targetID: "100004875732895",
                    actorID: "100004875732895",
                    horizontalScrolling: true,
                    largeThumbnails: true,
                    useWhiteDesign: true,
                    showPhotoLabel: true,
                    composerDropShadow: false,
                    disableIOS8SafariAlert: false,
                    allowVideo: false,
                    separatePhotoAndVideo: false,
                    accessToken: null,
                    useLocalFilePreview: false,
                    hideUploadProgress: false,
                    containerClassName: null
                }, null], 1], ["__inst_083cf14b_0_3_DB", ["MFlyout", "MLayerHideOnBlur", "MLayerDestroyOnTransition", "MFlyoutAutoFlip", "MFlyoutContextSigil", "MActionBubbleLayout"], [{
                    position: "below",
                    nubalign: "center",
                    offsetY: 3,
                    margin: "none",
                    width: "wide",
                    modal: false,
                    useContentAsBounds: false,
                    fadeonhide: false,
                    autoFlipTopOffset: 0,
                    contextSigil: "comment-flyout-context",
                    addedBehaviors: [{__m: "MLayerHideOnBlur"}, {__m: "MLayerDestroyOnTransition"}, {__m: "MFlyoutAutoFlip"}, {__m: "MFlyoutContextSigil"}, {__m: "MActionBubbleLayout"}],
                    classNames: ["commentFlyout", "_55i2", "accelerate"],
                    layerid: "commentflyout"
                }, [{__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editCommentSigil edit-link\">\x3Cspan class=\"_55sr\">Chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editHistoryCommentSigil\">\x3Cspan class=\"_55sr\">Lịch sử chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentSigil\">\x3Cspan class=\"_55sr\">Xóa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable hideCommentSigil\">\x3Cspan class=\"_55sr\">Ẩn\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable removeTagSigil\">\x3Cspan class=\"_55sr\">Gỡ thẻ\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable reportCommentSigil feed-ufi-nfx-dialog\">\x3Cspan class=\"_55sr\">Tìm hỗ trợ hoặc báo cáo bình luận\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable ban_user_from_page_comment_sigil\">\x3Cspan class=\"_55sr\">Cấm\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndRemoveAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và thành viên\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndBlockAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và chặn người dùng\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable _4ob2\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable muteMemberSigil\">\x3Cspan class=\"_55sr\">\x3Cspan>\x3Cspan class=\"_w_y\">Cấm thành viên đăng\x3C/span>\x3Cspan class=\"_w_-\">Bỏ cấm thành viên đăng\x3C/span>\x3C/span>\x3C/span>\x3C/a>"}]], 2], ["__inst_a9de87cf_0_4_Rf", ["MCommentComposer", "__elem_a9de87cf_0_4_Oc"], [{__m: "__elem_a9de87cf_0_4_Oc"}, {
                    actor_id: 100004875732895,
                    composer_id: "comment_form_100044204000528_319805139502950",
                    has_live_comment: true,
                    should_focus: false,
                    should_anchor: false,
                    target_id: 319805139502950,
                    toggle_submit: true,
                    log_comment: false,
                    parent_comment_id: null,
                    is_inline_reply: false,
                    is_reply_permalink: false,
                    input_id: "composerInput-319805139502950",
                    is_comments_permalink: false,
                    send_with_softkey: false,
                    should_anchor_reactions: false,
                    isPageletified: false
                }], 1], ["__inst_8f1ce391_0_4_4L", ["MMultiPhotoUploaderInitReact", "__elem_fbbbeee8_0_4_Qn", "__elem_242e8bd2_0_4_Ru", "__elem_8f1ce391_0_4_m3"], [{
                    inputId: "u_0_16_yG",
                    videoInputId: null,
                    containerId: "comment_form_100044204000528_319805139502950",
                    previewGridId: "u_0_17_+U",
                    targetFormId: "comment_form_100044204000528_319805139502950",
                    inputContainerElem: {__m: "__elem_fbbbeee8_0_4_Qn"},
                    containerElem: {__m: "__elem_242e8bd2_0_4_Ru"},
                    previewGridElem: {__m: "__elem_8f1ce391_0_4_m3"},
                    targetFormElem: {__m: "__elem_242e8bd2_0_4_Ru"},
                    dtsg: "AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc",
                    uploadDomain: "https://upload.facebook.com/",
                    waterfallAppName: "web_m_touch",
                    waterfallID: "84f6724ae0494c445de51404c5e7f815",
                    waterfallSource: "photo_comment",
                    maxPhotosAllowed: 1,
                    initCollapsed: true,
                    logFlowBeginOnClick: true,
                    targetID: "100004875732895",
                    actorID: "100004875732895",
                    horizontalScrolling: true,
                    largeThumbnails: true,
                    useWhiteDesign: true,
                    showPhotoLabel: true,
                    composerDropShadow: false,
                    disableIOS8SafariAlert: false,
                    allowVideo: false,
                    separatePhotoAndVideo: false,
                    accessToken: null,
                    useLocalFilePreview: false,
                    hideUploadProgress: false,
                    containerClassName: null
                }, null], 1], ["__inst_083cf14b_0_4_VX", ["MFlyout", "MLayerHideOnBlur", "MLayerDestroyOnTransition", "MFlyoutAutoFlip", "MFlyoutContextSigil", "MActionBubbleLayout"], [{
                    position: "below",
                    nubalign: "center",
                    offsetY: 3,
                    margin: "none",
                    width: "wide",
                    modal: false,
                    useContentAsBounds: false,
                    fadeonhide: false,
                    autoFlipTopOffset: 0,
                    contextSigil: "comment-flyout-context",
                    addedBehaviors: [{__m: "MLayerHideOnBlur"}, {__m: "MLayerDestroyOnTransition"}, {__m: "MFlyoutAutoFlip"}, {__m: "MFlyoutContextSigil"}, {__m: "MActionBubbleLayout"}],
                    classNames: ["commentFlyout", "_55i2", "accelerate"],
                    layerid: "commentflyout"
                }, [{__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editCommentSigil edit-link\">\x3Cspan class=\"_55sr\">Chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editHistoryCommentSigil\">\x3Cspan class=\"_55sr\">Lịch sử chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentSigil\">\x3Cspan class=\"_55sr\">Xóa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable hideCommentSigil\">\x3Cspan class=\"_55sr\">Ẩn\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable removeTagSigil\">\x3Cspan class=\"_55sr\">Gỡ thẻ\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable reportCommentSigil feed-ufi-nfx-dialog\">\x3Cspan class=\"_55sr\">Tìm hỗ trợ hoặc báo cáo bình luận\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable ban_user_from_page_comment_sigil\">\x3Cspan class=\"_55sr\">Cấm\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndRemoveAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và thành viên\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndBlockAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và chặn người dùng\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable _4ob2\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable muteMemberSigil\">\x3Cspan class=\"_55sr\">\x3Cspan>\x3Cspan class=\"_w_y\">Cấm thành viên đăng\x3C/span>\x3Cspan class=\"_w_-\">Bỏ cấm thành viên đăng\x3C/span>\x3C/span>\x3C/span>\x3C/a>"}]], 2], ["__inst_a9de87cf_0_5_sA", ["MCommentComposer", "__elem_a9de87cf_0_5_+E"], [{__m: "__elem_a9de87cf_0_5_+E"}, {
                    actor_id: 100004875732895,
                    composer_id: "comment_form_100044204000528_319804969502967",
                    has_live_comment: true,
                    should_focus: false,
                    should_anchor: false,
                    target_id: 319804969502967,
                    toggle_submit: true,
                    log_comment: false,
                    parent_comment_id: null,
                    is_inline_reply: false,
                    is_reply_permalink: false,
                    input_id: "composerInput-319804969502967",
                    is_comments_permalink: false,
                    send_with_softkey: false,
                    should_anchor_reactions: false,
                    isPageletified: false
                }], 1], ["__inst_8f1ce391_0_5_lR", ["MMultiPhotoUploaderInitReact", "__elem_fbbbeee8_0_5_uw", "__elem_242e8bd2_0_5_PQ", "__elem_8f1ce391_0_5_uY"], [{
                    inputId: "u_0_18_gm",
                    videoInputId: null,
                    containerId: "comment_form_100044204000528_319804969502967",
                    previewGridId: "u_0_19_jb",
                    targetFormId: "comment_form_100044204000528_319804969502967",
                    inputContainerElem: {__m: "__elem_fbbbeee8_0_5_uw"},
                    containerElem: {__m: "__elem_242e8bd2_0_5_PQ"},
                    previewGridElem: {__m: "__elem_8f1ce391_0_5_uY"},
                    targetFormElem: {__m: "__elem_242e8bd2_0_5_PQ"},
                    dtsg: "AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc",
                    uploadDomain: "https://upload.facebook.com/",
                    waterfallAppName: "web_m_touch",
                    waterfallID: "aacc09096c047232d2ca004771e1fa5f",
                    waterfallSource: "photo_comment",
                    maxPhotosAllowed: 1,
                    initCollapsed: true,
                    logFlowBeginOnClick: true,
                    targetID: "100004875732895",
                    actorID: "100004875732895",
                    horizontalScrolling: true,
                    largeThumbnails: true,
                    useWhiteDesign: true,
                    showPhotoLabel: true,
                    composerDropShadow: false,
                    disableIOS8SafariAlert: false,
                    allowVideo: false,
                    separatePhotoAndVideo: false,
                    accessToken: null,
                    useLocalFilePreview: false,
                    hideUploadProgress: false,
                    containerClassName: null
                }, null], 1], ["__inst_083cf14b_0_5_wD", ["MFlyout", "MLayerHideOnBlur", "MLayerDestroyOnTransition", "MFlyoutAutoFlip", "MFlyoutContextSigil", "MActionBubbleLayout"], [{
                    position: "below",
                    nubalign: "center",
                    offsetY: 3,
                    margin: "none",
                    width: "wide",
                    modal: false,
                    useContentAsBounds: false,
                    fadeonhide: false,
                    autoFlipTopOffset: 0,
                    contextSigil: "comment-flyout-context",
                    addedBehaviors: [{__m: "MLayerHideOnBlur"}, {__m: "MLayerDestroyOnTransition"}, {__m: "MFlyoutAutoFlip"}, {__m: "MFlyoutContextSigil"}, {__m: "MActionBubbleLayout"}],
                    classNames: ["commentFlyout", "_55i2", "accelerate"],
                    layerid: "commentflyout"
                }, [{__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editCommentSigil edit-link\">\x3Cspan class=\"_55sr\">Chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editHistoryCommentSigil\">\x3Cspan class=\"_55sr\">Lịch sử chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentSigil\">\x3Cspan class=\"_55sr\">Xóa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable hideCommentSigil\">\x3Cspan class=\"_55sr\">Ẩn\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable removeTagSigil\">\x3Cspan class=\"_55sr\">Gỡ thẻ\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable reportCommentSigil feed-ufi-nfx-dialog\">\x3Cspan class=\"_55sr\">Tìm hỗ trợ hoặc báo cáo bình luận\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable ban_user_from_page_comment_sigil\">\x3Cspan class=\"_55sr\">Cấm\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndRemoveAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và thành viên\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndBlockAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và chặn người dùng\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable _4ob2\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable muteMemberSigil\">\x3Cspan class=\"_55sr\">\x3Cspan>\x3Cspan class=\"_w_y\">Cấm thành viên đăng\x3C/span>\x3Cspan class=\"_w_-\">Bỏ cấm thành viên đăng\x3C/span>\x3C/span>\x3C/span>\x3C/a>"}]], 2], ["__inst_a9de87cf_0_6_n0", ["MCommentComposer", "__elem_a9de87cf_0_6_JZ"], [{__m: "__elem_a9de87cf_0_6_JZ"}, {
                    actor_id: 100004875732895,
                    composer_id: "comment_form_100044204000528_319804989502965",
                    has_live_comment: true,
                    should_focus: false,
                    should_anchor: false,
                    target_id: 319804989502965,
                    toggle_submit: true,
                    log_comment: false,
                    parent_comment_id: null,
                    is_inline_reply: false,
                    is_reply_permalink: false,
                    input_id: "composerInput-319804989502965",
                    is_comments_permalink: false,
                    send_with_softkey: false,
                    should_anchor_reactions: false,
                    isPageletified: false
                }], 1], ["__inst_8f1ce391_0_6_c9", ["MMultiPhotoUploaderInitReact", "__elem_fbbbeee8_0_6_vg", "__elem_242e8bd2_0_6_mU", "__elem_8f1ce391_0_6_3W"], [{
                    inputId: "u_0_1a_rv",
                    videoInputId: null,
                    containerId: "comment_form_100044204000528_319804989502965",
                    previewGridId: "u_0_1b_22",
                    targetFormId: "comment_form_100044204000528_319804989502965",
                    inputContainerElem: {__m: "__elem_fbbbeee8_0_6_vg"},
                    containerElem: {__m: "__elem_242e8bd2_0_6_mU"},
                    previewGridElem: {__m: "__elem_8f1ce391_0_6_3W"},
                    targetFormElem: {__m: "__elem_242e8bd2_0_6_mU"},
                    dtsg: "AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc",
                    uploadDomain: "https://upload.facebook.com/",
                    waterfallAppName: "web_m_touch",
                    waterfallID: "fb16b7abaca4fbb2546b83ec48b8b5c1",
                    waterfallSource: "photo_comment",
                    maxPhotosAllowed: 1,
                    initCollapsed: true,
                    logFlowBeginOnClick: true,
                    targetID: "100004875732895",
                    actorID: "100004875732895",
                    horizontalScrolling: true,
                    largeThumbnails: true,
                    useWhiteDesign: true,
                    showPhotoLabel: true,
                    composerDropShadow: false,
                    disableIOS8SafariAlert: false,
                    allowVideo: false,
                    separatePhotoAndVideo: false,
                    accessToken: null,
                    useLocalFilePreview: false,
                    hideUploadProgress: false,
                    containerClassName: null
                }, null], 1], ["__inst_083cf14b_0_6_ch", ["MFlyout", "MLayerHideOnBlur", "MLayerDestroyOnTransition", "MFlyoutAutoFlip", "MFlyoutContextSigil", "MActionBubbleLayout"], [{
                    position: "below",
                    nubalign: "center",
                    offsetY: 3,
                    margin: "none",
                    width: "wide",
                    modal: false,
                    useContentAsBounds: false,
                    fadeonhide: false,
                    autoFlipTopOffset: 0,
                    contextSigil: "comment-flyout-context",
                    addedBehaviors: [{__m: "MLayerHideOnBlur"}, {__m: "MLayerDestroyOnTransition"}, {__m: "MFlyoutAutoFlip"}, {__m: "MFlyoutContextSigil"}, {__m: "MActionBubbleLayout"}],
                    classNames: ["commentFlyout", "_55i2", "accelerate"],
                    layerid: "commentflyout"
                }, [{__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editCommentSigil edit-link\">\x3Cspan class=\"_55sr\">Chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editHistoryCommentSigil\">\x3Cspan class=\"_55sr\">Lịch sử chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentSigil\">\x3Cspan class=\"_55sr\">Xóa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable hideCommentSigil\">\x3Cspan class=\"_55sr\">Ẩn\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable removeTagSigil\">\x3Cspan class=\"_55sr\">Gỡ thẻ\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable reportCommentSigil feed-ufi-nfx-dialog\">\x3Cspan class=\"_55sr\">Tìm hỗ trợ hoặc báo cáo bình luận\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable ban_user_from_page_comment_sigil\">\x3Cspan class=\"_55sr\">Cấm\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndRemoveAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và thành viên\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndBlockAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và chặn người dùng\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable _4ob2\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable muteMemberSigil\">\x3Cspan class=\"_55sr\">\x3Cspan>\x3Cspan class=\"_w_y\">Cấm thành viên đăng\x3C/span>\x3Cspan class=\"_w_-\">Bỏ cấm thành viên đăng\x3C/span>\x3C/span>\x3C/span>\x3C/a>"}]], 2], ["__inst_a9de87cf_0_7_q7", ["MCommentComposer", "__elem_a9de87cf_0_7_2+"], [{__m: "__elem_a9de87cf_0_7_2+"}, {
                    actor_id: 100004875732895,
                    composer_id: "comment_form_100044204000528_319805066169624",
                    has_live_comment: true,
                    should_focus: false,
                    should_anchor: false,
                    target_id: 319805066169624,
                    toggle_submit: true,
                    log_comment: false,
                    parent_comment_id: null,
                    is_inline_reply: false,
                    is_reply_permalink: false,
                    input_id: "composerInput-319805066169624",
                    is_comments_permalink: false,
                    send_with_softkey: false,
                    should_anchor_reactions: false,
                    isPageletified: false
                }], 1], ["__inst_8f1ce391_0_7_z2", ["MMultiPhotoUploaderInitReact", "__elem_fbbbeee8_0_7_gN", "__elem_242e8bd2_0_7_Br", "__elem_8f1ce391_0_7_7f"], [{
                    inputId: "u_0_1c_ad",
                    videoInputId: null,
                    containerId: "comment_form_100044204000528_319805066169624",
                    previewGridId: "u_0_1d_Hp",
                    targetFormId: "comment_form_100044204000528_319805066169624",
                    inputContainerElem: {__m: "__elem_fbbbeee8_0_7_gN"},
                    containerElem: {__m: "__elem_242e8bd2_0_7_Br"},
                    previewGridElem: {__m: "__elem_8f1ce391_0_7_7f"},
                    targetFormElem: {__m: "__elem_242e8bd2_0_7_Br"},
                    dtsg: "AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc",
                    uploadDomain: "https://upload.facebook.com/",
                    waterfallAppName: "web_m_touch",
                    waterfallID: "3a25cedb2bdce4963555f42c26f15c64",
                    waterfallSource: "photo_comment",
                    maxPhotosAllowed: 1,
                    initCollapsed: true,
                    logFlowBeginOnClick: true,
                    targetID: "100004875732895",
                    actorID: "100004875732895",
                    horizontalScrolling: true,
                    largeThumbnails: true,
                    useWhiteDesign: true,
                    showPhotoLabel: true,
                    composerDropShadow: false,
                    disableIOS8SafariAlert: false,
                    allowVideo: false,
                    separatePhotoAndVideo: false,
                    accessToken: null,
                    useLocalFilePreview: false,
                    hideUploadProgress: false,
                    containerClassName: null
                }, null], 1], ["__inst_083cf14b_0_7_8q", ["MFlyout", "MLayerHideOnBlur", "MLayerDestroyOnTransition", "MFlyoutAutoFlip", "MFlyoutContextSigil", "MActionBubbleLayout"], [{
                    position: "below",
                    nubalign: "center",
                    offsetY: 3,
                    margin: "none",
                    width: "wide",
                    modal: false,
                    useContentAsBounds: false,
                    fadeonhide: false,
                    autoFlipTopOffset: 0,
                    contextSigil: "comment-flyout-context",
                    addedBehaviors: [{__m: "MLayerHideOnBlur"}, {__m: "MLayerDestroyOnTransition"}, {__m: "MFlyoutAutoFlip"}, {__m: "MFlyoutContextSigil"}, {__m: "MActionBubbleLayout"}],
                    classNames: ["commentFlyout", "_55i2", "accelerate"],
                    layerid: "commentflyout"
                }, [{__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editCommentSigil edit-link\">\x3Cspan class=\"_55sr\">Chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editHistoryCommentSigil\">\x3Cspan class=\"_55sr\">Lịch sử chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentSigil\">\x3Cspan class=\"_55sr\">Xóa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable hideCommentSigil\">\x3Cspan class=\"_55sr\">Ẩn\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable removeTagSigil\">\x3Cspan class=\"_55sr\">Gỡ thẻ\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable reportCommentSigil feed-ufi-nfx-dialog\">\x3Cspan class=\"_55sr\">Tìm hỗ trợ hoặc báo cáo bình luận\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable ban_user_from_page_comment_sigil\">\x3Cspan class=\"_55sr\">Cấm\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndRemoveAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và thành viên\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndBlockAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và chặn người dùng\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable _4ob2\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable muteMemberSigil\">\x3Cspan class=\"_55sr\">\x3Cspan>\x3Cspan class=\"_w_y\">Cấm thành viên đăng\x3C/span>\x3Cspan class=\"_w_-\">Bỏ cấm thành viên đăng\x3C/span>\x3C/span>\x3C/span>\x3C/a>"}]], 2], ["__inst_a9de87cf_0_8_/V", ["MCommentComposer", "__elem_a9de87cf_0_8_qM"], [{__m: "__elem_a9de87cf_0_8_qM"}, {
                    actor_id: 100004875732895,
                    composer_id: "comment_form_100044204000528_319805122836285",
                    has_live_comment: true,
                    should_focus: false,
                    should_anchor: false,
                    target_id: 319805122836285,
                    toggle_submit: true,
                    log_comment: false,
                    parent_comment_id: null,
                    is_inline_reply: false,
                    is_reply_permalink: false,
                    input_id: "composerInput-319805122836285",
                    is_comments_permalink: false,
                    send_with_softkey: false,
                    should_anchor_reactions: false,
                    isPageletified: false
                }], 1], ["__inst_8f1ce391_0_8_cL", ["MMultiPhotoUploaderInitReact", "__elem_fbbbeee8_0_8_hd", "__elem_242e8bd2_0_8_1E", "__elem_8f1ce391_0_8_gk"], [{
                    inputId: "u_0_1e_Eh",
                    videoInputId: null,
                    containerId: "comment_form_100044204000528_319805122836285",
                    previewGridId: "u_0_1f_bE",
                    targetFormId: "comment_form_100044204000528_319805122836285",
                    inputContainerElem: {__m: "__elem_fbbbeee8_0_8_hd"},
                    containerElem: {__m: "__elem_242e8bd2_0_8_1E"},
                    previewGridElem: {__m: "__elem_8f1ce391_0_8_gk"},
                    targetFormElem: {__m: "__elem_242e8bd2_0_8_1E"},
                    dtsg: "AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc",
                    uploadDomain: "https://upload.facebook.com/",
                    waterfallAppName: "web_m_touch",
                    waterfallID: "ec0bc1196911d87081e472ef99eb826b",
                    waterfallSource: "photo_comment",
                    maxPhotosAllowed: 1,
                    initCollapsed: true,
                    logFlowBeginOnClick: true,
                    targetID: "100004875732895",
                    actorID: "100004875732895",
                    horizontalScrolling: true,
                    largeThumbnails: true,
                    useWhiteDesign: true,
                    showPhotoLabel: true,
                    composerDropShadow: false,
                    disableIOS8SafariAlert: false,
                    allowVideo: false,
                    separatePhotoAndVideo: false,
                    accessToken: null,
                    useLocalFilePreview: false,
                    hideUploadProgress: false,
                    containerClassName: null
                }, null], 1], ["__inst_083cf14b_0_8_Wi", ["MFlyout", "MLayerHideOnBlur", "MLayerDestroyOnTransition", "MFlyoutAutoFlip", "MFlyoutContextSigil", "MActionBubbleLayout"], [{
                    position: "below",
                    nubalign: "center",
                    offsetY: 3,
                    margin: "none",
                    width: "wide",
                    modal: false,
                    useContentAsBounds: false,
                    fadeonhide: false,
                    autoFlipTopOffset: 0,
                    contextSigil: "comment-flyout-context",
                    addedBehaviors: [{__m: "MLayerHideOnBlur"}, {__m: "MLayerDestroyOnTransition"}, {__m: "MFlyoutAutoFlip"}, {__m: "MFlyoutContextSigil"}, {__m: "MActionBubbleLayout"}],
                    classNames: ["commentFlyout", "_55i2", "accelerate"],
                    layerid: "commentflyout"
                }, [{__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editCommentSigil edit-link\">\x3Cspan class=\"_55sr\">Chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable editHistoryCommentSigil\">\x3Cspan class=\"_55sr\">Lịch sử chỉnh sửa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentSigil\">\x3Cspan class=\"_55sr\">Xóa\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable hideCommentSigil\">\x3Cspan class=\"_55sr\">Ẩn\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable removeTagSigil\">\x3Cspan class=\"_55sr\">Gỡ thẻ\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable reportCommentSigil feed-ufi-nfx-dialog\">\x3Cspan class=\"_55sr\">Tìm hỗ trợ hoặc báo cáo bình luận\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable ban_user_from_page_comment_sigil\">\x3Cspan class=\"_55sr\">Cấm\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndRemoveAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và thành viên\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable deleteCommentAndBlockAuthorSigil\">\x3Cspan class=\"_55sr\">Xóa bình luận và chặn người dùng\x3C/span>\x3C/a>"}, {__html: "\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable _4ob2\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" data-sigil=\"touchable touchable muteMemberSigil\">\x3Cspan class=\"_55sr\">\x3Cspan>\x3Cspan class=\"_w_y\">Cấm thành viên đăng\x3C/span>\x3Cspan class=\"_w_-\">Bỏ cấm thành viên đăng\x3C/span>\x3C/span>\x3C/span>\x3C/a>"}]], 2], ["__inst_60460fe7_0_0_ZD", ["MUFIReactionButton", "__elem_3e7e4274_0_0_Je"], [{__m: "__elem_3e7e4274_0_0_Je"}, "319804912836306", null, "0", 16, "", false], 1], ["__inst_60460fe7_0_1_jJ", ["MUFIReactionButton", "__elem_3e7e4274_0_1_9+"], [{__m: "__elem_3e7e4274_0_1_9+"}, "319805122836285", null, "0", 16, "", false], 1], ["__inst_60460fe7_0_2_EN", ["MUFIReactionButton", "__elem_3e7e4274_0_2_GB"], [{__m: "__elem_3e7e4274_0_2_GB"}, "319804972836300", null, "0", 16, "", false], 1], ["__inst_60460fe7_0_3_Tx", ["MUFIReactionButton", "__elem_3e7e4274_0_3_2C"], [{__m: "__elem_3e7e4274_0_3_2C"}, "319804949502969", null, "0", 16, "", false], 1], ["__inst_60460fe7_0_4_+t", ["MUFIReactionButton", "__elem_3e7e4274_0_4_0S"], [{__m: "__elem_3e7e4274_0_4_0S"}, "319804989502965", null, "0", 16, "", false], 1], ["__inst_12277355_0_0_hM", ["MAsyncThrobber"], ["u_0_1g_7y"], 1], ["__inst_60460fe7_0_5_tR", ["MUFIReactionButton", "__elem_3e7e4274_0_5_q2"], [{__m: "__elem_3e7e4274_0_5_q2"}, "319804969502967", null, "0", 16, "", false], 1], ["__inst_60460fe7_0_6_JU", ["MUFIReactionButton", "__elem_3e7e4274_0_6_fB"], [{__m: "__elem_3e7e4274_0_6_fB"}, "319805139502950", null, "0", 16, "", false], 1], ["__inst_60460fe7_0_7_Vq", ["MUFIReactionButton", "__elem_3e7e4274_0_7_29"], [{__m: "__elem_3e7e4274_0_7_29"}, "319805066169624", null, "0", 16, "", false], 1], ["__inst_60460fe7_0_8_2K", ["MUFIReactionButton", "__elem_3e7e4274_0_8_RI"], [{__m: "__elem_3e7e4274_0_8_RI"}, "319809989502465", null, "0", 16, "", false], 1], ["__inst_12277355_0_1_tO", ["MAsyncThrobber"], ["u_0_1h_vD"], 1], ["__inst_12277355_0_2_Wd", ["MAsyncThrobber"], ["u_0_1i_k5"], 1], ["__inst_12277355_0_3_fT", ["MAsyncThrobber"], ["u_0_1j_Mh"], 1], ["__inst_12277355_0_4_aF", ["MAsyncThrobber"], ["u_0_1k_3X"], 1], ["__inst_12277355_0_5_aB", ["MAsyncThrobber"], ["u_0_1l_Co"], 1], ["__inst_a58ecbb4_0_0_BS", ["MUFICommentReactionBadge", "__elem_1acd3027_0_1_8d"], [{
                    feedbackTargetID: "319805066169624_319977476152383",
                    reactionBadge: {__m: "__elem_1acd3027_0_1_8d"},
                    requestID: "0"
                }], 1], ["__inst_12277355_0_6_0n", ["MAsyncThrobber"], ["u_0_1m_NE"], 1], ["__inst_a58ecbb4_0_1_oV", ["MUFICommentReactionBadge", "__elem_1acd3027_0_3_qK"], [{
                    feedbackTargetID: "319804972836300_319976056152525",
                    reactionBadge: {__m: "__elem_1acd3027_0_3_qK"},
                    requestID: "0"
                }], 1], ["__inst_a58ecbb4_0_2_cA", ["MUFICommentReactionBadge", "__elem_1acd3027_0_4_Es"], [{
                    feedbackTargetID: "319804912836306_319979342818863",
                    reactionBadge: {__m: "__elem_1acd3027_0_4_Es"},
                    requestID: "0"
                }], 1], ["__inst_a58ecbb4_0_3_h5", ["MUFICommentReactionBadge", "__elem_1acd3027_0_5_We"], [{
                    feedbackTargetID: "319805139502950_319976252819172",
                    reactionBadge: {__m: "__elem_1acd3027_0_5_We"},
                    requestID: "0"
                }], 1], ["__inst_a58ecbb4_0_4_/X", ["MUFICommentReactionBadge", "__elem_1acd3027_0_6_uO"], [{
                    feedbackTargetID: "319809989502465_165696068892257",
                    reactionBadge: {__m: "__elem_1acd3027_0_6_uO"},
                    requestID: "0"
                }], 1], ["__inst_12277355_0_7_9d", ["MAsyncThrobber"], ["u_0_1n_xO"], 1], ["__inst_a58ecbb4_0_5_Ji", ["MUFICommentReactionBadge", "__elem_1acd3027_0_7_jG"], [{
                    feedbackTargetID: "319805122836285_319978569485607",
                    reactionBadge: {__m: "__elem_1acd3027_0_7_jG"},
                    requestID: "0"
                }], 1], ["__inst_083cf14b_0_9_1A", ["MFlyout", "MLayerHideOnBlur", "MLayerDestroyOnTransition", "MFlyoutAutoFlip", "MFlyoutContextSigil"], [{
                    position: "above",
                    nubalign: "center",
                    offsetY: 0,
                    margin: "none",
                    width: "wide",
                    modal: false,
                    useContentAsBounds: false,
                    fadeonhide: false,
                    autoFlipTopOffset: 0,
                    logShown: "share-popup",
                    contextSigil: "share-popup",
                    addedBehaviors: [{__m: "MLayerHideOnBlur"}, {__m: "MLayerDestroyOnTransition"}, {__m: "MFlyoutAutoFlip"}, {__m: "MFlyoutContextSigil"}],
                    classNames: ["_5d93", "_55i2", "accelerate"],
                    layerid: "mShareActionBubble"
                }, [{__html: "\x3Cdiv>\x3Ca href=\"#\" role=\"button\" class=\"_56bz _54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" rel=\"ignore\" id=\"share-one-click-button\" data-sigil=\"touchable touchable share-one-click-button\">\x3Ci class=\"_4_m5 _56br img sp_IyAHL1YUmTC sx_f20161\">\x3C/i>\x3Cspan class=\"_55sr\">Chia sẻ ngay\x3C/span>\x3C/a>\x3Ca href=\"#\" role=\"button\" class=\"_56bz _54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" rel=\"ignore\" id=\"share-post-one-click-button\" data-sigil=\"touchable touchable share-post-one-click-button\">\x3Ci class=\"_4_m5 _56br img sp_IyAHL1YUmTC sx_f20161\">\x3C/i>\x3Cspan class=\"_55sr\">Chia sẻ bài viết ngay\x3C/span>\x3C/a>\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" rel=\"ignore\" id=\"share-with-message-button\" data-sigil=\"touchable touchable share-with-message-button\">\x3Cspan class=\"_55sr\">Viết bài\x3C/span>\x3C/a>\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" rel=\"ignore\" id=\"share-in-a-private-message-button\" data-sigil=\"touchable touchable share-in-a-private-message-button\">\x3Cspan class=\"_55sr\">Gửi dưới dạng tin nhắn\x3C/span>\x3C/a>\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" rel=\"ignore\" id=\"share-in-a-group-button\" data-sigil=\"touchable touchable share-in-a-group-button\">\x3Cspan class=\"_55sr\">Chia sẻ trong nhóm\x3C/span>\x3C/a>\x3Ca href=\"#\" role=\"button\" class=\"_54k8 _55i1 _58a0 touchable\" data-store=\"&#123;&quot;nativeClick&quot;:true&#125;\" rel=\"ignore\" id=\"share-to-page-button\" data-sigil=\"touchable touchable share-to-page-button\">\x3Cspan class=\"_55sr\">Chia sẻ lên Trang\x3C/span>\x3C/a>\x3C/div>"}]], 2], ["__inst_a58ecbb4_0_6_Tq", ["MUFICommentReactionBadge", "__elem_1acd3027_0_9_so"], [{
                    feedbackTargetID: "319804989502965_319816762835121",
                    reactionBadge: {__m: "__elem_1acd3027_0_9_so"},
                    requestID: "0"
                }], 1], ["__inst_5878081c_0_1_US", ["MFlyout", "__elem_da4ef9a3_0_0_EV", "MLayerHideOnBlur", "MLayerDestroyOnTransition"], [{
                    position: "below",
                    nubalign: "center",
                    offsetY: 0,
                    margin: "large",
                    width: "wide",
                    modal: false,
                    useContentAsBounds: false,
                    fadeonhide: false,
                    context: {__m: "__elem_da4ef9a3_0_0_EV"},
                    addedBehaviors: [{__m: "MLayerHideOnBlur"}, {__m: "MLayerDestroyOnTransition"}],
                    classNames: ["_5bob", "_3jcw", "accelerate"]
                }, [{__html: "\x3Cdiv class=\"_55ws\">\x3Cdiv class=\"_52jh\">Trang cá nhân đã được xác minh\x3C/div>\x3Cspan>Facebook đã xác nhận đây là trang cá nhân thật của người của công chúng này.\x3C/span>\x3C/div>"}]], 1], ["__inst_08a75727_0_0_/a", ["MUFICommentLikeLink", "__elem_3e7e4274_0_9_q2"], [{
                    feedbackTargetID: "319805066169624_319977476152383",
                    likeLink: {__m: "__elem_3e7e4274_0_9_q2"},
                    requestID: "0"
                }], 1], ["__inst_12277355_0_8_z8", ["MAsyncThrobber"], ["u_0_1o_Zf"], 1], ["__inst_a58ecbb4_0_7_yc", ["MUFICommentReactionBadge", "__elem_1acd3027_0_a_7Z"], [{
                    feedbackTargetID: "319804949502969_319975676152563",
                    reactionBadge: {__m: "__elem_1acd3027_0_a_7Z"},
                    requestID: "0"
                }], 1], ["__inst_08a75727_0_1_T0", ["MUFICommentLikeLink", "__elem_3e7e4274_0_a_Iy"], [{
                    feedbackTargetID: "319809989502465_165696068892257",
                    likeLink: {__m: "__elem_3e7e4274_0_a_Iy"},
                    requestID: "0"
                }], 1], ["__inst_08a75727_0_2_Pg", ["MUFICommentLikeLink", "__elem_3e7e4274_0_b_MF"], [{
                    feedbackTargetID: "319805122836285_319978569485607",
                    likeLink: {__m: "__elem_3e7e4274_0_b_MF"},
                    requestID: "0"
                }], 1], ["__inst_08a75727_0_3_rR", ["MUFICommentLikeLink", "__elem_3e7e4274_0_c_4S"], [{
                    feedbackTargetID: "319804989502965_319816762835121",
                    likeLink: {__m: "__elem_3e7e4274_0_c_4S"},
                    requestID: "0"
                }], 1], ["__inst_08a75727_0_4_yP", ["MUFICommentLikeLink", "__elem_3e7e4274_0_d_Lg"], [{
                    feedbackTargetID: "319805139502950_319976252819172",
                    likeLink: {__m: "__elem_3e7e4274_0_d_Lg"},
                    requestID: "0"
                }], 1], ["__inst_08a75727_0_5_IY", ["MUFICommentLikeLink", "__elem_3e7e4274_0_e_/H"], [{
                    feedbackTargetID: "319804912836306_319979342818863",
                    likeLink: {__m: "__elem_3e7e4274_0_e_/H"},
                    requestID: "0"
                }], 1], ["__inst_08a75727_0_6_4x", ["MUFICommentLikeLink", "__elem_3e7e4274_0_f_LM"], [{
                    feedbackTargetID: "319804972836300_319976056152525",
                    likeLink: {__m: "__elem_3e7e4274_0_f_LM"},
                    requestID: "0"
                }], 1], ["__inst_08a75727_0_7_x1", ["MUFICommentLikeLink", "__elem_3e7e4274_0_g_jJ"], [{
                    feedbackTargetID: "319804949502969_319975676152563",
                    likeLink: {__m: "__elem_3e7e4274_0_g_jJ"},
                    requestID: "0"
                }], 1], ["__inst_a58ecbb4_0_8_gA", ["MUFICommentReactionBadge", "__elem_1acd3027_0_i_YP"], [{
                    feedbackTargetID: "319804969502967_319819196168211",
                    reactionBadge: {__m: "__elem_1acd3027_0_i_YP"},
                    requestID: "0"
                }], 1], ["__inst_08a75727_0_8_8z", ["MUFICommentLikeLink", "__elem_3e7e4274_0_h_6t"], [{
                    feedbackTargetID: "319804969502967_319819196168211",
                    likeLink: {__m: "__elem_3e7e4274_0_h_6t"},
                    requestID: "0"
                }], 1]],
                markup: [["__markup_a588f507_0_0_kI", {__html: "\x3Cdiv>\x3C/div>"}, 1], ["__markup_7216e2ae_0_5_ET", {__html: "\x3Cdiv>\x3Cdiv class=\"_2ip_ _4b44 async_like\" data-sigil=\"mufi-inline inline-action-bar disable-feed-ufi-triggers\">\x3Cdiv class=\"_7om2 _52we _34qc _3hxn _3myz _4b45\">\x3Cdiv class=\"_4g34\">\x3Ca href=\"/photo.php?fbid=319805066169624&amp;id=100044204000528&amp;set=a.319809939502470&amp;anchor_composer=false\" role=\"button\" data-sigil=\"feed-ufi-trigger\">\x3Cdiv class=\"_rnk _77ke _2eo- _4-09 _1e6 _4b44\" id=\"u_0_1p_75\" data-sigil=\"reactions-bling-bar\">\x3Cdiv class=\"_1w1k\" data-sigil=\"reactions-sentence-container\">\x3Cspan class=\"_qfz _77kf\">\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:3\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\" role=\"presentation\">\x3Cu>Haha\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:2\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\" role=\"presentation\">\x3Cu>Thích\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:1\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_65dbc1\" role=\"presentation\">\x3Cu>Buồn\x3C/u>\x3C/i>\x3C/div>\x3C/span>\x3Cdiv class=\"_1g06\" aria-label=\"Nguy&#x1ec5;n Th&#x1ecb; Y&#x1ebf;n Nhi v&#xe0; 77K ng&#x1b0;&#x1edd;i kh&#xe1;c &#x111;&#xe3; b&#xe0;y t&#x1ecf; c&#x1ea3;m x&#xfa;c bao g&#x1ed3;m Haha, Th&#xed;ch v&#xe0; Bu&#x1ed3;n\">Nguyễn Thị Yến Nhi và 77K người khác\x3C/div>\x3C/div>\x3Cdiv class=\"_1fnt\">\x3Cspan class=\"_1j-c\" data-sigil=\"comments-token\">859 bình luận\x3C/span>\x3Cspan class=\"_1j-c\">489 lượt chia sẻ\x3C/span>\x3C/div>\x3C/div>\x3C/a>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cdiv id=\"actor_selector_319805066169624\">\x3Cdiv class=\"_2g0e\" role=\"presentation\">\x3Ci class=\"img _1e_c img _2sxw\" style=\"background-image: url(&#039;https\\3a //scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat\\3d 100\\26 ccb\\3d 1-3\\26 _nc_sid\\3d 9128f4\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d fMRrGcbCThMAX9smDEP\\26 _nc_ht\\3d scontent.fhan3-2.fna\\26 tp\\3d 5\\26 oh\\3d 75d8e23c28796b13cd496a044adc1687\\26 oe\\3d 60D05357&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:20px;height:20px;\" id=\"u_0_1q_Iz\">\x3C/i>\x3Ci class=\"_jvo _3-99 img sp_vuppHZ0nD_0 sx_9c3ad5\">\x3C/i>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_52jh _7om2 _15kk _15ks _15km _4b47 _4b46\" data-sigil=\"ufi-inline-actions\">\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15ko _77li touchable\" data-store=\"&#123;&quot;reaction&quot;:0,&quot;feedbackTarget&quot;:319805066169624,&quot;kaiOSReactions&quot;:false&#125;\" aria-pressed=\"false\" href=\"/ufi/reaction/?ft_ent_identifier=319805066169624&amp;reaction_type=1&amp;story_render_location=feed_mobile&amp;feedback_source=0&amp;is_sponsored=0&amp;ext=1622168488&amp;hash=AeSSKOPWvlPAHAdAvbk&amp;__tn__=%3E\" role=\"button\" tabindex=\"0\" data-ft=\"&#123;&quot;tn&quot;:&quot;&gt;&quot;&#125;\" id=\"u_0_1r_Mm\" data-sigil=\"touchable ufi-inline-like like-reaction-flyout\">Thích\x3C/a>\x3Cdiv class=\"_1ekf\" role=\"link\" tabindex=\"-1\" data-sigil=\"screenreader-reactions-trigger\">Hiển thị thêm cảm xúc\x3C/div>\x3C/div>\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15kq _77li _l-a\" data-click=\"&#123;&quot;event&quot;:&quot;click_comment_ufi&quot;,&quot;target_id&quot;:319805066169624&#125;\" href=\"/photo.php?fbid=319805066169624&amp;id=100044204000528&amp;set=a.319809939502470&amp;fs=0&amp;focus_composer=0&amp;__tn__=S\" data-ft=\"&#123;&quot;tn&quot;:&quot;S&quot;&#125;\" data-sigil=\"feed-ufi-focus feed-ufi-trigger ufiCommentLink mufi-composer-focus\">Bình luận\x3C/a>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_59e9 _1-ut _2a_g async_composer\" id=\"ufi_319805066169624\">\x3Cdiv class=\"_45kb ufi\" data-sigil=\"m-ufi\">\x3Cdiv class=\"_ohf\" id=\"add_comment_switcher_placeholder\">\x3C/div>\x3Cdiv class=\"_43lx _55wr\">\x3Ca href=\"/browse/shares?id=319805066169624\">\x3Cspan data-sigil=\"feed-ufi-sharers\">489 lượt chia sẻ\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_uwt _45kb _3ioy\" id=\"u_0_1s_4m\" data-sigil=\"m-photo-composer m-noninline-composer\">\x3Cdiv class=\"_55wr _10pt _3eqx post_placeholder\" id=\"post_placeholder-319805066169624\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3Cdiv class=\"_5ru3 _3tl8 _2pid composerClosed\" data-store=\"&#123;&quot;auto_collapse&quot;:true,&quot;disable_auto_scroll&quot;:false&#125;\" id=\"composer-319805066169624\" data-sigil=\"m-composer\">\x3Cform method=\"post\" action=\"/a/comment.php?fs=0&amp;actionsource=13&amp;comment_logging&amp;ft_ent_identifier=319805066169624&amp;eav=Afbi3UJrTPFiolfCJmANBsagEL52PsYR6JmG4DwNJ7uZAVgd6YHTxXocEoF--I8evmM&amp;av=100004875732895&amp;gfid=AQCTm_7U2bBvj0I76JY\" data-store=\"&#123;&quot;expand_composer&quot;:true&#125;\" id=\"comment_form_100044204000528_319805066169624\" onsubmit=\"return window.MAjaxify&amp;&amp;MAjaxify.form(event,this,&quot;async_composer&quot;,&quot;cache&quot;,null,false,undefined,&quot;ufi-comment&quot;);\">\x3Cinput type=\"hidden\" name=\"fb_dtsg\" value=\"AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"jazoest\" value=\"22371\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"snowflake\" value=\"1\" />\x3Cdiv class=\"_7om2 _2pin _2pi8 _55nh\">\x3Cdiv class=\"_5s61 _55nj _2pih\" id=\"u_0_1t_oQ\">\x3Cdiv class=\"_5ecn _1n29 _2fv6\">\x3Ci class=\"img sp_2ev2XfYE8iT sx_fdc690\">\x3C/i>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61 _2pih\">\x3Cdiv class=\"_51s9 _3_5r\" id=\"u_0_1u_sg\">\x3Ca class=\"_5ecn\" rel=\"ignore\" role=\"button\" aria-label=\"Th&#xea;m &#x1ea3;nh\" data-sigil=\"touchable\">\x3Cdiv class=\"_5aqx\">\x3C/div>\x3Cdiv class=\"_51sa\">\x3Cinput type=\"file\" class=\"_51sb\" name=\"photo\" id=\"u_0_1c_ad\" accept=\"image/*, image/heif, image/heic\" data-sigil=\"m-raw-file-input\" />\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv class=\"_4g34 _uww\">\x3Cdiv id=\"u_0_1v_ZY\">\x3Ctextarea class=\"_1svy _uwx\" id=\"composerInput-319805066169624\" name=\"comment_text\" placeholder=\"Vi&#x1ebf;t b&#xec;nh lu&#x1ead;n...\" rows=\"3\" data-sigil=\"m-textarea-input textarea mufi-composer\">\x3C/textarea>\x3C/div>\x3Cdiv>\x3Cdiv class=\"_5aqz\" id=\"u_0_1d_Hp\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cbutton type=\"submit\" value=\"&#x110;&#x103;ng\" class=\"_54k8 _52jg _56bs _26vk _3lmf _3fyi _56bt\" aria-label=\"&#x110;&#x103;ng\" disabled=\"1\" name=\"submit\" data-sigil=\"touchable composer-submit\">\x3Cspan class=\"_55sr\">Đăng\x3C/span>\x3C/button>\x3C/div>\x3C/div>\x3Cdiv id=\"u_0_1w_Ue\">\x3C/div>\x3Cinput type=\"hidden\" name=\"privacy_value\" value=\"0\" data-sigil=\"m-comment-privacy\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_session_id\" data-sigil=\"m-comment-conversation-guide-session-id\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_shown\" value=\"none\" data-sigil=\"m-comment-conversation-guide-shown\" />\x3C/form>\x3C/div>\x3C/div>\x3Cdiv class=\"_333v _45kb\">\x3Cdiv class=\"_2a_i\" data-store=\"&#123;&quot;token&quot;:&quot;319805066169624_319977476152383&quot;&#125;\" id=\"319977476152383\" data-uniqueid=\"319977476152383\" data-gt=\"&#123;&quot;tn&quot;:&quot;R&quot;&#125;\" data-sigil=\"comment\">\x3Cdiv class=\"_2a_j\" data-sigil=\"feed_story_ring105828534555785\">\x3Cdiv class=\"_2b00\">\x3Ca class=\"_4e81\" href=\"/Page-b&#xe1;n-G&#x1ea5;u-B&#xf4;ng-kute-mu&#x1ed1;n-x&#x1ec9;u-nh&#x1b0;ng-kh&#xf4;ng-ai-mua-n&#xea;n-mang-&#x111;i-cmt-d&#x1ea1;o-105828534555785/?rc=p&amp;__tn__=%7ER\" data-gt=\"&#123;&quot;tn&quot;:&quot;~&quot;&#125;\">\x3Ci class=\"img _1-yc profpic\" aria-label=\"Page b&#xe1;n G&#x1ea5;u B&#xf4;ng kute mu&#x1ed1;n x&#x1ec9;u nh&#x1b0;ng kh&#xf4;ng ai mua n&#xea;n mang &#x111;i cmt d&#x1ea1;o, profile picture\" role=\"img\" style=\"background:#d8dce6 url(&#039;https\\3a //scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p40x40/109706738_105829111222394_8302473280954417197_n.jpg?_nc_cat\\3d 109\\26 ccb\\3d 1-3\\26 _nc_sid\\3d dbb9e7\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d DeNn7-UtyWkAX_0VZGy\\26 _nc_ht\\3d scontent.fhan3-1.fna\\26 tp\\3d 3\\26 oh\\3d ad1e5adfd9e68d7e02a63b0c0dbbe1ff\\26 oe\\3d 60D1A852&#039;) no-repeat center;background-size:100% 100%;-webkit-background-size:100% 100%;width:36px;height:36px;\">\x3C/i>\x3C/a>\x3Cdiv class=\"_2b03\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_2b04\">\x3Cdiv class=\"_2b06\">\x3Cdiv class=\"_2b05\">\x3Ca class=\"_4e81\" href=\"/Page-b&#xe1;n-G&#x1ea5;u-B&#xf4;ng-kute-mu&#x1ed1;n-x&#x1ec9;u-nh&#x1b0;ng-kh&#xf4;ng-ai-mua-n&#xea;n-mang-&#x111;i-cmt-d&#x1ea1;o-105828534555785/?rc=p&amp;__tn__=R\">Page bán Gấu Bông kute muốn xỉu nhưng không ai mua nên mang đi cmt dạo\x3C/a>\x3C/div>\x3Cdiv data-commentid=\"319805066169624_319977476152383\" data-sigil=\"comment-body\">Thuê hẳn cái máy khỏi thuê quay phim a ơi \x3Cspan class=\"_47e3 _5mfr\" title=\"Bi&#x1ec3;u t&#x1b0;&#x1ee3;ng c&#x1ea3;m x&#xfa;c pacman\">\x3Cimg class=\"img\" height=\"16\" role=\"presentation\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/e31/1/16/PACMAN.png\" width=\"16\" alt=\"\" />\x3Cspan aria-hidden=\"true\" class=\"_7oe\">:v\x3C/span>\x3C/span>\x3C/div>\x3C/div>\x3Cdiv class=\"_14v5\">\x3Cdiv class=\"_2b1t attachment\">\x3Ca href=\"/105828534555785/photos/p.279081337230503/279081337230503/?type=3&amp;source=47&amp;__tn__=R\" class=\"_39pi _1mh-\">\x3Ci class=\"img _403j img _2sxw\" data-store=\"&#123;&quot;imgsrc&quot;:&quot;https:\\/\\/scontent.fhan4-1.fna.fbcdn.net\\/v\\/t1.6435-0\\/p160x160\\/185816539_279081340563836_6238847938732675085_n.png?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=1480c5&amp;efg=eyJpIjoidCJ9&amp;_nc_ohc=9iy6Wr4Ew-cAX96Vq51&amp;_nc_ht=scontent.fhan4-1.fna&amp;tp=30&amp;oh=7f70bed8f1c8510b9223d323125dafd7&amp;oe=60D1AEC7&quot;&#125;\" style=\"background-image: url(&#039;https\\3a //scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-0/p160x160/185816539_279081340563836_6238847938732675085_n.png?_nc_cat\\3d 108\\26 ccb\\3d 1-3\\26 _nc_sid\\3d 1480c5\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d 9iy6Wr4Ew-cAX96Vq51\\26 _nc_ht\\3d scontent.fhan4-1.fna\\26 tp\\3d 30\\26 oh\\3d 7f70bed8f1c8510b9223d323125dafd7\\26 oe\\3d 60D1AEC7&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:151px;height:180px;\" aria-label=\"C&#xf3; th&#x1ec3; l&#xe0; h&#xec;nh &#x1ea3;nh v&#x1ec1; m&#xe8;o v&#xe0; v&#x103;n b&#x1ea3;n cho bi&#x1ebf;t &#039;Ha Ha H&#xc1; H&#xc1;&#039;\" role=\"img\">\x3C/i>\x3C/a>\x3C/div>\x3Ca class=\"_14v8 _4edm\" href=\"/ufi/reaction/profile/browser/?ft_ent_identifier=319805066169624_319977476152383&amp;av=100004875732895&amp;__tn__=R\" id=\"u_0_1x_YK\">\x3Cspan class=\"_14v9\">\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_6ad062\">\x3C/i>\x3C/span>\x3C/span>\x3Cspan class=\"_14va\">213\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_2b08 _4ghu\" data-sigil=\"ufi-inline-comment-actions\">\x3Cabbr class=\"_4ghv _2b0a\">1 tuần trước\x3C/abbr>\x3Ca class=\"touchable _2b0a\" data-store=\"&#123;&quot;feedbackTarget&quot;:&quot;319805066169624_319977476152383&quot;,&quot;isComment&quot;:true,&quot;kaiOSReactions&quot;:false,&quot;reaction&quot;:0&#125;\" href=\"/a/comment.php?parent_redirect_comment_token=319805066169624_319977476152383&amp;reaction_comment_id=319977476152383&amp;viewer_reaction=0&amp;snowflake=1&amp;ft_ent_identifier=319805066169624&amp;eav=AfYtsFJKemFKMfvx1r-JtorloSbcKkckIF1NVfs9OyEEauT7wEOGEyBb0028Su-1UVM&amp;av=100004875732895&amp;gfid=AQAZj2Zq44vvjWJ9ygA&amp;fs=0&amp;__tn__=R\" id=\"u_0_1y_N6\" data-sigil=\"touchable like-reaction-flyout\">Thích\x3C/a>\x3Ca href=\"/comment/replies/?ctoken=319805066169624_319977476152383&amp;actor_id=100004875732895&amp;ft_ent_identifier=319805066169624&amp;gfid=AQDe-S9Cnig38uvDUZM&amp;__tn__=R#comment_form_100044204000528_319805066169624_reply_319805066169624_319977476152383\" class=\"_2b0a\" id=\"u_0_1z_vt\" data-sigil=\"touchable\">Trả lời\x3C/a>\x3Ca class=\"_1l26 _2b0a\" href=\"#\" data-store=\"&#123;&quot;reportIsModalDialog&quot;:true,&quot;hideCommentURI&quot;:&quot;\\/ufi\\/hide\\/?hide_comment_id=319977476152383&amp;hide_comment_fbid=319977476152383&amp;nfx_story_location=unknown&amp;spamDisplayMode=none&amp;ft_ent_identifier=319805066169624&amp;gfid=AQBH_I438QZod_2PiP0&quot;,&quot;reportCommentURI&quot;:&quot;\\/trust\\/afro\\/dialog?context=\\u00257B\\u002522session_id\\u002522\\u00253A\\u0025222b38a3e4-aad3-4fe6-9575-270a98be8021\\u002522\\u00252C\\u002522support_type\\u002522\\u00253A\\u002522chevron\\u002522\\u00252C\\u002522type\\u002522\\u00253A2\\u00252C\\u002522story_location\\u002522\\u00253A\\u002522unknown\\u002522\\u00252C\\u002522entry_point\\u002522\\u00253A\\u002522comment\\u002522\\u00252C\\u002522reportable_ent_token\\u002522\\u00253A\\u002522RW50R2VuZXJpY0NvbW1lbnQ6MzE5ODA1MDY2MTY5NjI0XzMxOTk3NzQ3NjE1MjM4Mw\\u00253D\\u00253D\\u002522\\u00257D&amp;gfid=AQDQpdZF5Fnu4WMExfY&quot;,&quot;commentID&quot;:319977476152383&#125;\" data-sigil=\"comment-flyout-context comment-metadata\">Xem thêm\x3C/a>\x3C/div>\x3Cdiv class=\"_2a_m\">\x3Cdiv id=\"comment_replies_more_1:319805066169624_319977476152383:1\">\x3Cdiv class=\"_2b1h async_elem\" data-reply-to=\"319805066169624_319977476152383\" data-sigil=\"replies-see-more\">\x3Ca href=\"/comment/replies/?ctoken=319805066169624_319977476152383&amp;count=1&amp;curr&amp;pc=1&amp;isinline&amp;initcomp&amp;ft_ent_identifier=319805066169624&amp;eav=AfZrkaQD1oOzjBUrw4XYN4rAiITFWbcUTLnkOnjJnJhzpw7pPrLwMyhotVkVWVrUT-c&amp;av=100004875732895&amp;gfid=AQA7NOyCWTAY02vUW1M&amp;__tn__=R\" data-ajaxify-href=\"/comment/replies/?ctoken=319805066169624_319977476152383&amp;count=1&amp;curr&amp;pc=1&amp;isinline&amp;initcomp&amp;ft_ent_identifier=319805066169624&amp;eav=AfZrkaQD1oOzjBUrw4XYN4rAiITFWbcUTLnkOnjJnJhzpw7pPrLwMyhotVkVWVrUT-c&amp;av=100004875732895&amp;gfid=AQA7NOyCWTAY02vUW1M&amp;__tn__=R\" data-sigil=\"ajaxify\">\x3Cdiv class=\"_2b1j\">\x3Cdiv>\x3Ci class=\"img _1-yc profpic\" aria-label=\"Nguy&#x1ec5;n Vi&#x1ec7;t H&#xf9;ng, profile picture\" role=\"img\" style=\"background:#d8dce6 url(&#039;https\\3a //scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p24x24/186513630_4072761109449087_7347008733715845515_n.jpg?_nc_cat\\3d 105\\26 ccb\\3d 1-3\\26 _nc_sid\\3d dbb9e7\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d bCc4lT5jKqgAX8THdT5\\26 _nc_ht\\3d scontent.fhan4-1.fna\\26 tp\\3d 3\\26 oh\\3d 2b1cf36ee9bb4d3ac1631787b4c1a251\\26 oe\\3d 60D125F6&#039;) no-repeat center;background-size:100% 100%;-webkit-background-size:100% 100%;width:24px;height:24px;\">\x3C/i>\x3C/div>\x3Cdiv class=\"_2b03\">\x3C/div>\x3C/div>\x3Cspan class=\"_4ayj\">Nguyễn Việt Hùng\x3C/span> đã trả lời\x3Cspan class=\"_4ayk\"> · 1 người trả lời\x3C/span>\x3Cspan class=\"img _55ym _55yn _55yo _2b0b\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv class=\"_2b1i async_elem\" id=\"comment_replies_inline_composer_placeholder_319805066169624_319977476152383\">\x3Cspan class=\"img _55ym _55yn _55yo _2b0b\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"async_elem\" id=\"see_next_319805066169624\">\x3Ca href=\"/photo.php?fbid=319805066169624&amp;id=100044204000528&amp;set=a.319809939502470&amp;p=1&amp;av=100004875732895&amp;eav=AfZUvHwWngFu7LmhVdeNSxeQ9H_2wndF7Rrqql70btX3a68DL_YGU3_BiXgHlJqBqSA\" class=\"_108_\" data-ajaxify-href=\"/ajax/ufi.php?count=597&amp;pc=1&amp;prev&amp;p=1&amp;oldIndex=0&amp;isLoggedoutUFI&amp;ft_ent_identifier=319805066169624&amp;eav=AfY1j62amM8ONnS18hJQnPXL7REPyyBQOWvLsUclT41qZNgK8T4CLgnAFoTCti1JOzw&amp;av=100004875732895&amp;gfid=AQB1CtlJeiWK1ZrpYIE\" data-sigil=\"ajaxify\">\x3Ci class=\"_5msp img sp_2ev2XfYE8iT sx_e6a5ef\">\x3C/i>&nbsp;Xem thêm bình luận…\x3Cdiv class=\"_2so _2sq _2ss img _50cg async_throbber async_saving_visible\" id=\"u_0_1h_vD\" data-animtype=\"1\" data-sigil=\"m-loading-indicator-animate m-loading-indicator-root async-throbber\">\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv id=\"add_comment_link_placeholder\">\x3C/div>\x3C/div>\x3C/div>\x3C/div>"}, 16], ["__markup_7216e2ae_0_6_kf", {__html: "\x3Cdiv>\x3Cdiv class=\"_2ip_ _4b44 async_like\" data-sigil=\"mufi-inline inline-action-bar disable-feed-ufi-triggers\">\x3Cdiv class=\"_7om2 _52we _34qc _3hxn _3myz _4b45\">\x3Cdiv class=\"_4g34\">\x3Ca href=\"/photo.php?fbid=319805122836285&amp;id=100044204000528&amp;set=a.319809939502470&amp;anchor_composer=false\" role=\"button\" data-sigil=\"feed-ufi-trigger\">\x3Cdiv class=\"_rnk _77ke _2eo- _4-09 _1e6 _4b44\" id=\"u_0_20_uR\" data-sigil=\"reactions-bling-bar\">\x3Cdiv class=\"_1w1k\" data-sigil=\"reactions-sentence-container\">\x3Cspan class=\"_qfz _77kf\">\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:3\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\" role=\"presentation\">\x3Cu>Haha\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:2\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\" role=\"presentation\">\x3Cu>Thích\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:1\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_65dbc1\" role=\"presentation\">\x3Cu>Buồn\x3C/u>\x3C/i>\x3C/div>\x3C/span>\x3Cdiv class=\"_1g06\" aria-label=\"26K &#x111;&#xe3; b&#xe0;y t&#x1ecf; c&#x1ea3;m x&#xfa;c bao g&#x1ed3;m Haha, Th&#xed;ch v&#xe0; Bu&#x1ed3;n\">26K\x3C/div>\x3C/div>\x3Cdiv class=\"_1fnt\">\x3Cspan class=\"_1j-c\" data-sigil=\"comments-token\">228 bình luận\x3C/span>\x3Cspan class=\"_1j-c\">248 lượt chia sẻ\x3C/span>\x3C/div>\x3C/div>\x3C/a>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cdiv id=\"actor_selector_319805122836285\">\x3Cdiv class=\"_2g0e\" role=\"presentation\">\x3Ci class=\"img _1e_c img _2sxw\" style=\"background-image: url(&#039;https\\3a //scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat\\3d 100\\26 ccb\\3d 1-3\\26 _nc_sid\\3d 9128f4\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d fMRrGcbCThMAX9smDEP\\26 _nc_ht\\3d scontent.fhan3-2.fna\\26 tp\\3d 5\\26 oh\\3d 75d8e23c28796b13cd496a044adc1687\\26 oe\\3d 60D05357&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:20px;height:20px;\" id=\"u_0_21_Fb\">\x3C/i>\x3Ci class=\"_jvo _3-99 img sp_vuppHZ0nD_0 sx_9c3ad5\">\x3C/i>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_52jh _7om2 _15kk _15ks _15km _4b47 _4b46\" data-sigil=\"ufi-inline-actions\">\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15ko _77li touchable\" data-store=\"&#123;&quot;reaction&quot;:0,&quot;feedbackTarget&quot;:319805122836285,&quot;kaiOSReactions&quot;:false&#125;\" aria-pressed=\"false\" href=\"/ufi/reaction/?ft_ent_identifier=319805122836285&amp;reaction_type=1&amp;story_render_location=feed_mobile&amp;feedback_source=0&amp;is_sponsored=0&amp;ext=1622168488&amp;hash=AeTT4c_f81J5CJUZxn8&amp;__tn__=%3E\" role=\"button\" tabindex=\"0\" data-ft=\"&#123;&quot;tn&quot;:&quot;&gt;&quot;&#125;\" id=\"u_0_22_m6\" data-sigil=\"touchable ufi-inline-like like-reaction-flyout\">Thích\x3C/a>\x3Cdiv class=\"_1ekf\" role=\"link\" tabindex=\"-1\" data-sigil=\"screenreader-reactions-trigger\">Hiển thị thêm cảm xúc\x3C/div>\x3C/div>\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15kq _77li _l-a\" data-click=\"&#123;&quot;event&quot;:&quot;click_comment_ufi&quot;,&quot;target_id&quot;:319805122836285&#125;\" href=\"/photo.php?fbid=319805122836285&amp;id=100044204000528&amp;set=a.319809939502470&amp;fs=0&amp;focus_composer=0&amp;__tn__=S\" data-ft=\"&#123;&quot;tn&quot;:&quot;S&quot;&#125;\" data-sigil=\"feed-ufi-focus feed-ufi-trigger ufiCommentLink mufi-composer-focus\">Bình luận\x3C/a>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_59e9 _1-ut _2a_g async_composer\" id=\"ufi_319805122836285\">\x3Cdiv class=\"_45kb ufi\" data-sigil=\"m-ufi\">\x3Cdiv class=\"_ohf\" id=\"add_comment_switcher_placeholder\">\x3C/div>\x3Cdiv class=\"_43lx _55wr\">\x3Ca href=\"/browse/shares?id=319805122836285\">\x3Cspan data-sigil=\"feed-ufi-sharers\">248 lượt chia sẻ\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_uwt _45kb _3ioy\" id=\"u_0_23_xH\" data-sigil=\"m-photo-composer m-noninline-composer\">\x3Cdiv class=\"_55wr _10pt _3eqx post_placeholder\" id=\"post_placeholder-319805122836285\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3Cdiv class=\"_5ru3 _3tl8 _2pid composerClosed\" data-store=\"&#123;&quot;auto_collapse&quot;:true,&quot;disable_auto_scroll&quot;:false&#125;\" id=\"composer-319805122836285\" data-sigil=\"m-composer\">\x3Cform method=\"post\" action=\"/a/comment.php?fs=0&amp;actionsource=13&amp;comment_logging&amp;ft_ent_identifier=319805122836285&amp;eav=AfaG64M6FQjSrN0FeyygLo83dUgiicH9m_dNC2oLpn9k6nt1-kG8qFApyjMLVrpNkLs&amp;av=100004875732895&amp;gfid=AQBZcSTXR1NuC52zkao\" data-store=\"&#123;&quot;expand_composer&quot;:true&#125;\" id=\"comment_form_100044204000528_319805122836285\" onsubmit=\"return window.MAjaxify&amp;&amp;MAjaxify.form(event,this,&quot;async_composer&quot;,&quot;cache&quot;,null,false,undefined,&quot;ufi-comment&quot;);\">\x3Cinput type=\"hidden\" name=\"fb_dtsg\" value=\"AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"jazoest\" value=\"22371\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"snowflake\" value=\"1\" />\x3Cdiv class=\"_7om2 _2pin _2pi8 _55nh\">\x3Cdiv class=\"_5s61 _55nj _2pih\" id=\"u_0_24_j2\">\x3Cdiv class=\"_5ecn _1n29 _2fv6\">\x3Ci class=\"img sp_2ev2XfYE8iT sx_fdc690\">\x3C/i>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61 _2pih\">\x3Cdiv class=\"_51s9 _3_5r\" id=\"u_0_25_nP\">\x3Ca class=\"_5ecn\" rel=\"ignore\" role=\"button\" aria-label=\"Th&#xea;m &#x1ea3;nh\" data-sigil=\"touchable\">\x3Cdiv class=\"_5aqx\">\x3C/div>\x3Cdiv class=\"_51sa\">\x3Cinput type=\"file\" class=\"_51sb\" name=\"photo\" id=\"u_0_1e_Eh\" accept=\"image/*, image/heif, image/heic\" data-sigil=\"m-raw-file-input\" />\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv class=\"_4g34 _uww\">\x3Cdiv id=\"u_0_26_wD\">\x3Ctextarea class=\"_1svy _uwx\" id=\"composerInput-319805122836285\" name=\"comment_text\" placeholder=\"Vi&#x1ebf;t b&#xec;nh lu&#x1ead;n...\" rows=\"3\" data-sigil=\"m-textarea-input textarea mufi-composer\">\x3C/textarea>\x3C/div>\x3Cdiv>\x3Cdiv class=\"_5aqz\" id=\"u_0_1f_bE\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cbutton type=\"submit\" value=\"&#x110;&#x103;ng\" class=\"_54k8 _52jg _56bs _26vk _3lmf _3fyi _56bt\" aria-label=\"&#x110;&#x103;ng\" disabled=\"1\" name=\"submit\" data-sigil=\"touchable composer-submit\">\x3Cspan class=\"_55sr\">Đăng\x3C/span>\x3C/button>\x3C/div>\x3C/div>\x3Cdiv id=\"u_0_27_AO\">\x3C/div>\x3Cinput type=\"hidden\" name=\"privacy_value\" value=\"0\" data-sigil=\"m-comment-privacy\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_session_id\" data-sigil=\"m-comment-conversation-guide-session-id\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_shown\" value=\"none\" data-sigil=\"m-comment-conversation-guide-shown\" />\x3C/form>\x3C/div>\x3C/div>\x3Cdiv class=\"_333v _45kb\">\x3Cdiv class=\"_2a_i\" data-store=\"&#123;&quot;token&quot;:&quot;319805122836285_319978569485607&quot;&#125;\" id=\"319978569485607\" data-uniqueid=\"319978569485607\" data-gt=\"&#123;&quot;tn&quot;:&quot;R&quot;&#125;\" data-sigil=\"comment\">\x3Cdiv class=\"_2a_j\" data-sigil=\"feed_story_ring105828534555785\">\x3Cdiv class=\"_2b00\">\x3Ca class=\"_4e81\" href=\"/Page-b&#xe1;n-G&#x1ea5;u-B&#xf4;ng-kute-mu&#x1ed1;n-x&#x1ec9;u-nh&#x1b0;ng-kh&#xf4;ng-ai-mua-n&#xea;n-mang-&#x111;i-cmt-d&#x1ea1;o-105828534555785/?rc=p&amp;__tn__=%7ER\" data-gt=\"&#123;&quot;tn&quot;:&quot;~&quot;&#125;\">\x3Ci class=\"img _1-yc profpic\" aria-label=\"Page b&#xe1;n G&#x1ea5;u B&#xf4;ng kute mu&#x1ed1;n x&#x1ec9;u nh&#x1b0;ng kh&#xf4;ng ai mua n&#xea;n mang &#x111;i cmt d&#x1ea1;o, profile picture\" role=\"img\" style=\"background:#d8dce6 url(&#039;https\\3a //scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p40x40/109706738_105829111222394_8302473280954417197_n.jpg?_nc_cat\\3d 109\\26 ccb\\3d 1-3\\26 _nc_sid\\3d dbb9e7\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d DeNn7-UtyWkAX_0VZGy\\26 _nc_ht\\3d scontent.fhan3-1.fna\\26 tp\\3d 3\\26 oh\\3d ad1e5adfd9e68d7e02a63b0c0dbbe1ff\\26 oe\\3d 60D1A852&#039;) no-repeat center;background-size:100% 100%;-webkit-background-size:100% 100%;width:36px;height:36px;\">\x3C/i>\x3C/a>\x3Cdiv class=\"_2b03\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_2b04\">\x3Cdiv class=\"_2b06\">\x3Cdiv class=\"_2b05\">\x3Ca class=\"_4e81\" href=\"/Page-b&#xe1;n-G&#x1ea5;u-B&#xf4;ng-kute-mu&#x1ed1;n-x&#x1ec9;u-nh&#x1b0;ng-kh&#xf4;ng-ai-mua-n&#xea;n-mang-&#x111;i-cmt-d&#x1ea1;o-105828534555785/?rc=p&amp;__tn__=R\">Page bán Gấu Bông kute muốn xỉu nhưng không ai mua nên mang đi cmt dạo\x3C/a>\x3C/div>\x3Cdiv data-commentid=\"319805122836285_319978569485607\" data-sigil=\"comment-body\">Đã dịch dật thế này còn bị dí deadline, sếp bảo e sống sao???\x3C/div>\x3C/div>\x3Cdiv class=\"_14v5\">\x3Cdiv class=\"_2b1t attachment\">\x3Ca href=\"/105828534555785/photos/p.279082130563757/279082130563757/?type=3&amp;source=47&amp;__tn__=R\" class=\"_39pi _1mh-\">\x3Ci class=\"img _403j img _2sxw\" data-store=\"&#123;&quot;imgsrc&quot;:&quot;https:\\/\\/scontent-hkt1-1.xx.fbcdn.net\\/v\\/t1.6435-0\\/s228x119\\/186480856_279082133897090_5879870009886633371_n.png?_nc_cat=111&amp;ccb=1-3&amp;_nc_sid=1480c5&amp;efg=eyJpIjoidCJ9&amp;_nc_ohc=PD95OsVWfR8AX9Tc7m6&amp;_nc_ht=scontent-hkt1-1.xx&amp;tp=30&amp;oh=aa8d2ed787cde9f2f9b4ce4c184cc63b&amp;oe=60D3C71B&quot;&#125;\" style=\"background-image: url(&#039;https\\3a //scontent-hkt1-1.xx.fbcdn.net/v/t1.6435-0/s228x119/186480856_279082133897090_5879870009886633371_n.png?_nc_cat\\3d 111\\26 ccb\\3d 1-3\\26 _nc_sid\\3d 1480c5\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d PD95OsVWfR8AX9Tc7m6\\26 _nc_ht\\3d scontent-hkt1-1.xx\\26 tp\\3d 30\\26 oh\\3d aa8d2ed787cde9f2f9b4ce4c184cc63b\\26 oe\\3d 60D3C71B&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:180px;height:119px;\" aria-label=\"C&#xf3; th&#x1ec3; l&#xe0; h&#xec;nh &#x1ea3;nh v&#x1ec1; m&#xe8;o v&#xe0; v&#x103;n b&#x1ea3;n\" role=\"img\">\x3C/i>\x3C/a>\x3C/div>\x3Ca class=\"_14v8 _4edm\" href=\"/ufi/reaction/profile/browser/?ft_ent_identifier=319805122836285_319978569485607&amp;av=100004875732895&amp;__tn__=R\" id=\"u_0_28_08\">\x3Cspan class=\"_14v9\">\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_65dbc1\">\x3C/i>\x3C/span>\x3C/span>\x3Cspan class=\"_14va\">75\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_2b08 _4ghu\" data-sigil=\"ufi-inline-comment-actions\">\x3Cabbr class=\"_4ghv _2b0a\">1 tuần trước\x3C/abbr>\x3Ca class=\"touchable _2b0a\" data-store=\"&#123;&quot;feedbackTarget&quot;:&quot;319805122836285_319978569485607&quot;,&quot;isComment&quot;:true,&quot;kaiOSReactions&quot;:false,&quot;reaction&quot;:0&#125;\" href=\"/a/comment.php?parent_redirect_comment_token=319805122836285_319978569485607&amp;reaction_comment_id=319978569485607&amp;viewer_reaction=0&amp;snowflake=1&amp;ft_ent_identifier=319805122836285&amp;eav=AfavcbwuqezkGtZgKTOfEdbBOm3tuJEFogRUeWKOtVG2n6ATAre39zn8eU_MVhDfmbU&amp;av=100004875732895&amp;gfid=AQB7VIRKkooozRAl_FE&amp;fs=0&amp;__tn__=R\" id=\"u_0_29_To\" data-sigil=\"touchable like-reaction-flyout\">Thích\x3C/a>\x3Ca href=\"/comment/replies/?ctoken=319805122836285_319978569485607&amp;actor_id=100004875732895&amp;ft_ent_identifier=319805122836285&amp;gfid=AQDS4KLPIBjqLRJrUjY&amp;__tn__=R#comment_form_100044204000528_319805122836285_reply_319805122836285_319978569485607\" class=\"_2b0a\" id=\"u_0_2a_hn\" data-sigil=\"touchable\">Trả lời\x3C/a>\x3Ca class=\"_1l26 _2b0a\" href=\"#\" data-store=\"&#123;&quot;reportIsModalDialog&quot;:true,&quot;hideCommentURI&quot;:&quot;\\/ufi\\/hide\\/?hide_comment_id=319978569485607&amp;hide_comment_fbid=319978569485607&amp;nfx_story_location=unknown&amp;spamDisplayMode=none&amp;ft_ent_identifier=319805122836285&amp;gfid=AQB0VzY1iczN_BPIOLA&quot;,&quot;reportCommentURI&quot;:&quot;\\/trust\\/afro\\/dialog?context=\\u00257B\\u002522session_id\\u002522\\u00253A\\u002522db1e96e5-0c42-442d-8d16-5a2f3edfb75a\\u002522\\u00252C\\u002522support_type\\u002522\\u00253A\\u002522chevron\\u002522\\u00252C\\u002522type\\u002522\\u00253A2\\u00252C\\u002522story_location\\u002522\\u00253A\\u002522unknown\\u002522\\u00252C\\u002522entry_point\\u002522\\u00253A\\u002522comment\\u002522\\u00252C\\u002522reportable_ent_token\\u002522\\u00253A\\u002522RW50R2VuZXJpY0NvbW1lbnQ6MzE5ODA1MTIyODM2Mjg1XzMxOTk3ODU2OTQ4NTYwNw\\u00253D\\u00253D\\u002522\\u00257D&amp;gfid=AQBCvZs3fsKOYu32fno&quot;,&quot;commentID&quot;:319978569485607&#125;\" data-sigil=\"comment-flyout-context comment-metadata\">Xem thêm\x3C/a>\x3C/div>\x3Cdiv class=\"_2a_m\">\x3Cdiv id=\"comment_replies_more_1:319805122836285_319978569485607:1\">\x3Cdiv class=\"_2b1h async_elem\" data-reply-to=\"319805122836285_319978569485607\" data-sigil=\"replies-see-more\">\x3Ca href=\"/comment/replies/?ctoken=319805122836285_319978569485607&amp;count=1&amp;curr&amp;pc=1&amp;isinline&amp;initcomp&amp;ft_ent_identifier=319805122836285&amp;eav=AfZZeCIcbCiRomHETCU6w3qm7HScsBUttXdlOCwkLuLaI-jt-XHN3jiGZGzcSE3kl6Q&amp;av=100004875732895&amp;gfid=AQBPdc6s0OuZK1xMNTw&amp;__tn__=R\" data-ajaxify-href=\"/comment/replies/?ctoken=319805122836285_319978569485607&amp;count=1&amp;curr&amp;pc=1&amp;isinline&amp;initcomp&amp;ft_ent_identifier=319805122836285&amp;eav=AfZZeCIcbCiRomHETCU6w3qm7HScsBUttXdlOCwkLuLaI-jt-XHN3jiGZGzcSE3kl6Q&amp;av=100004875732895&amp;gfid=AQBPdc6s0OuZK1xMNTw&amp;__tn__=R\" data-sigil=\"ajaxify\">\x3Cdiv class=\"_2b1j\">\x3Cdiv>\x3Ci class=\"img _1-yc profpic\" aria-label=\"Nguy&#x1ec5;n Th&#x1ecb; Linh Chi, profile picture\" role=\"img\" style=\"background:#d8dce6 url(&#039;https\\3a //scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p24x24/87272832_2610488492567066_2436486705948131328_n.jpg?_nc_cat\\3d 102\\26 ccb\\3d 1-3\\26 _nc_sid\\3d dbb9e7\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d PCAkXEhwLvwAX-dMHm4\\26 tn\\3d 6uXj2tgms-FrSnEt\\26 _nc_ht\\3d scontent.fhan3-1.fna\\26 tp\\3d 3\\26 oh\\3d 3102c3164c59fae35a94c0f0e8e75884\\26 oe\\3d 60D18DDE&#039;) no-repeat center;background-size:100% 100%;-webkit-background-size:100% 100%;width:24px;height:24px;\">\x3C/i>\x3C/div>\x3Cdiv class=\"_2b03\">\x3C/div>\x3C/div>\x3Cspan class=\"_4ayj\">Nguyễn Thị Lin...\x3C/span> đã trả lời\x3Cspan class=\"_4ayk\"> · 1 người trả lời\x3C/span>\x3Cspan class=\"img _55ym _55yn _55yo _2b0b\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv class=\"_2b1i async_elem\" id=\"comment_replies_inline_composer_placeholder_319805122836285_319978569485607\">\x3Cspan class=\"img _55ym _55yn _55yo _2b0b\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"async_elem\" id=\"see_next_319805122836285\">\x3Ca href=\"/photo.php?fbid=319805122836285&amp;id=100044204000528&amp;set=a.319809939502470&amp;p=1&amp;av=100004875732895&amp;eav=Afbg5c34H9_X-MIXiAxB-iNXeZfaHnDYL0qhHuNllKkziwbC5ZUe-bd2YLHDL3pKcIE\" class=\"_108_\" data-ajaxify-href=\"/ajax/ufi.php?count=133&amp;pc=1&amp;prev&amp;p=1&amp;oldIndex=0&amp;isLoggedoutUFI&amp;ft_ent_identifier=319805122836285&amp;eav=AfZFAuZCbflvNxnWIfHwbQ62Zp4FeI8eGCr14Z0l1S0Q4h3Bar89Jz1zARAm0kiahjw&amp;av=100004875732895&amp;gfid=AQCYsdkrAIkFLivwRZc\" data-sigil=\"ajaxify\">\x3Ci class=\"_5msp img sp_2ev2XfYE8iT sx_e6a5ef\">\x3C/i>&nbsp;Xem thêm bình luận…\x3Cdiv class=\"_2so _2sq _2ss img _50cg async_throbber async_saving_visible\" id=\"u_0_1j_Mh\" data-animtype=\"1\" data-sigil=\"m-loading-indicator-animate m-loading-indicator-root async-throbber\">\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv id=\"add_comment_link_placeholder\">\x3C/div>\x3C/div>\x3C/div>\x3C/div>"}, 16], ["__markup_7216e2ae_0_2_X7", {__html: "\x3Cdiv>\x3Cdiv class=\"_2ip_ _4b44 async_like\" data-sigil=\"mufi-inline inline-action-bar disable-feed-ufi-triggers\">\x3Cdiv class=\"_7om2 _52we _34qc _3hxn _3myz _4b45\">\x3Cdiv class=\"_4g34\">\x3Ca href=\"/photo.php?fbid=319805139502950&amp;id=100044204000528&amp;set=a.319809939502470&amp;anchor_composer=false\" role=\"button\" data-sigil=\"feed-ufi-trigger\">\x3Cdiv class=\"_rnk _77ke _2eo- _4-09 _1e6 _4b44\" id=\"u_0_2b_yT\" data-sigil=\"reactions-bling-bar\">\x3Cdiv class=\"_1w1k\" data-sigil=\"reactions-sentence-container\">\x3Cspan class=\"_qfz _77kf\">\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:3\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\" role=\"presentation\">\x3Cu>Thích\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:2\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\" role=\"presentation\">\x3Cu>Haha\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:1\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_59c92b\" role=\"presentation\">\x3Cu>Yêu thích\x3C/u>\x3C/i>\x3C/div>\x3C/span>\x3Cdiv class=\"_1g06\" aria-label=\"H&#x1ee9;a Minh &#x110;&#x1ea1;t v&#xe0; 35K ng&#x1b0;&#x1edd;i kh&#xe1;c &#x111;&#xe3; b&#xe0;y t&#x1ecf; c&#x1ea3;m x&#xfa;c bao g&#x1ed3;m Th&#xed;ch, Haha v&#xe0; Y&#xea;u th&#xed;ch\">Hứa Minh Đạt và 35K người khác\x3C/div>\x3C/div>\x3Cdiv class=\"_1fnt\">\x3Cspan class=\"_1j-c\" data-sigil=\"comments-token\">340 bình luận\x3C/span>\x3Cspan class=\"_1j-c\">32 lượt chia sẻ\x3C/span>\x3C/div>\x3C/div>\x3C/a>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cdiv id=\"actor_selector_319805139502950\">\x3Cdiv class=\"_2g0e\" role=\"presentation\">\x3Ci class=\"img _1e_c img _2sxw\" style=\"background-image: url(&#039;https\\3a //scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat\\3d 100\\26 ccb\\3d 1-3\\26 _nc_sid\\3d 9128f4\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d fMRrGcbCThMAX9smDEP\\26 _nc_ht\\3d scontent.fhan3-2.fna\\26 tp\\3d 5\\26 oh\\3d 75d8e23c28796b13cd496a044adc1687\\26 oe\\3d 60D05357&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:20px;height:20px;\" id=\"u_0_2c_Ja\">\x3C/i>\x3Ci class=\"_jvo _3-99 img sp_vuppHZ0nD_0 sx_9c3ad5\">\x3C/i>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_52jh _7om2 _15kk _15ks _15km _4b47 _4b46\" data-sigil=\"ufi-inline-actions\">\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15ko _77li touchable\" data-store=\"&#123;&quot;reaction&quot;:0,&quot;feedbackTarget&quot;:319805139502950,&quot;kaiOSReactions&quot;:false&#125;\" aria-pressed=\"false\" href=\"/ufi/reaction/?ft_ent_identifier=319805139502950&amp;reaction_type=1&amp;story_render_location=feed_mobile&amp;feedback_source=0&amp;is_sponsored=0&amp;ext=1622168488&amp;hash=AeQuPPtd76qFqu9-2fM&amp;__tn__=%3E\" role=\"button\" tabindex=\"0\" data-ft=\"&#123;&quot;tn&quot;:&quot;&gt;&quot;&#125;\" id=\"u_0_2d_lJ\" data-sigil=\"touchable ufi-inline-like like-reaction-flyout\">Thích\x3C/a>\x3Cdiv class=\"_1ekf\" role=\"link\" tabindex=\"-1\" data-sigil=\"screenreader-reactions-trigger\">Hiển thị thêm cảm xúc\x3C/div>\x3C/div>\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15kq _77li _l-a\" data-click=\"&#123;&quot;event&quot;:&quot;click_comment_ufi&quot;,&quot;target_id&quot;:319805139502950&#125;\" href=\"/photo.php?fbid=319805139502950&amp;id=100044204000528&amp;set=a.319809939502470&amp;fs=0&amp;focus_composer=0&amp;__tn__=S\" data-ft=\"&#123;&quot;tn&quot;:&quot;S&quot;&#125;\" data-sigil=\"feed-ufi-focus feed-ufi-trigger ufiCommentLink mufi-composer-focus\">Bình luận\x3C/a>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_59e9 _1-ut _2a_g async_composer\" id=\"ufi_319805139502950\">\x3Cdiv class=\"_45kb ufi\" data-sigil=\"m-ufi\">\x3Cdiv class=\"_ohf\" id=\"add_comment_switcher_placeholder\">\x3C/div>\x3Cdiv class=\"_43lx _55wr\">\x3Ca href=\"/browse/shares?id=319805139502950\">\x3Cspan data-sigil=\"feed-ufi-sharers\">32 lượt chia sẻ\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_uwt _45kb _3ioy\" id=\"u_0_2e_J7\" data-sigil=\"m-photo-composer m-noninline-composer\">\x3Cdiv class=\"_55wr _10pt _3eqx post_placeholder\" id=\"post_placeholder-319805139502950\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3Cdiv class=\"_5ru3 _3tl8 _2pid composerClosed\" data-store=\"&#123;&quot;auto_collapse&quot;:true,&quot;disable_auto_scroll&quot;:false&#125;\" id=\"composer-319805139502950\" data-sigil=\"m-composer\">\x3Cform method=\"post\" action=\"/a/comment.php?fs=0&amp;actionsource=13&amp;comment_logging&amp;ft_ent_identifier=319805139502950&amp;eav=AfaJVHTfV8RZ7oB5wGa2gJy_nOnlu7gBYfxBrXWbI10jKOXDQyLB0EsGj7FJH6hpvEU&amp;av=100004875732895&amp;gfid=AQCMhnwTGAb2KGJnyKU\" data-store=\"&#123;&quot;expand_composer&quot;:true&#125;\" id=\"comment_form_100044204000528_319805139502950\" onsubmit=\"return window.MAjaxify&amp;&amp;MAjaxify.form(event,this,&quot;async_composer&quot;,&quot;cache&quot;,null,false,undefined,&quot;ufi-comment&quot;);\">\x3Cinput type=\"hidden\" name=\"fb_dtsg\" value=\"AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"jazoest\" value=\"22371\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"snowflake\" value=\"1\" />\x3Cdiv class=\"_7om2 _2pin _2pi8 _55nh\">\x3Cdiv class=\"_5s61 _55nj _2pih\" id=\"u_0_2f_ht\">\x3Cdiv class=\"_5ecn _1n29 _2fv6\">\x3Ci class=\"img sp_2ev2XfYE8iT sx_fdc690\">\x3C/i>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61 _2pih\">\x3Cdiv class=\"_51s9 _3_5r\" id=\"u_0_2g_K4\">\x3Ca class=\"_5ecn\" rel=\"ignore\" role=\"button\" aria-label=\"Th&#xea;m &#x1ea3;nh\" data-sigil=\"touchable\">\x3Cdiv class=\"_5aqx\">\x3C/div>\x3Cdiv class=\"_51sa\">\x3Cinput type=\"file\" class=\"_51sb\" name=\"photo\" id=\"u_0_16_yG\" accept=\"image/*, image/heif, image/heic\" data-sigil=\"m-raw-file-input\" />\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv class=\"_4g34 _uww\">\x3Cdiv id=\"u_0_2h_nV\">\x3Ctextarea class=\"_1svy _uwx\" id=\"composerInput-319805139502950\" name=\"comment_text\" placeholder=\"Vi&#x1ebf;t b&#xec;nh lu&#x1ead;n...\" rows=\"3\" data-sigil=\"m-textarea-input textarea mufi-composer\">\x3C/textarea>\x3C/div>\x3Cdiv>\x3Cdiv class=\"_5aqz\" id=\"u_0_17_+U\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cbutton type=\"submit\" value=\"&#x110;&#x103;ng\" class=\"_54k8 _52jg _56bs _26vk _3lmf _3fyi _56bt\" aria-label=\"&#x110;&#x103;ng\" disabled=\"1\" name=\"submit\" data-sigil=\"touchable composer-submit\">\x3Cspan class=\"_55sr\">Đăng\x3C/span>\x3C/button>\x3C/div>\x3C/div>\x3Cdiv id=\"u_0_2i_8X\">\x3C/div>\x3Cinput type=\"hidden\" name=\"privacy_value\" value=\"0\" data-sigil=\"m-comment-privacy\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_session_id\" data-sigil=\"m-comment-conversation-guide-session-id\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_shown\" value=\"none\" data-sigil=\"m-comment-conversation-guide-shown\" />\x3C/form>\x3C/div>\x3C/div>\x3Cdiv class=\"_333v _45kb\">\x3Cdiv class=\"_2a_i\" data-store=\"&#123;&quot;token&quot;:&quot;319805139502950_319976252819172&quot;&#125;\" id=\"319976252819172\" data-uniqueid=\"319976252819172\" data-gt=\"&#123;&quot;tn&quot;:&quot;R&quot;&#125;\" data-sigil=\"comment\">\x3Cdiv class=\"_2a_j\" data-sigil=\"feed_story_ring105828534555785\">\x3Cdiv class=\"_2b00\">\x3Ca class=\"_4e81\" href=\"/Page-b&#xe1;n-G&#x1ea5;u-B&#xf4;ng-kute-mu&#x1ed1;n-x&#x1ec9;u-nh&#x1b0;ng-kh&#xf4;ng-ai-mua-n&#xea;n-mang-&#x111;i-cmt-d&#x1ea1;o-105828534555785/?rc=p&amp;__tn__=%7ER\" data-gt=\"&#123;&quot;tn&quot;:&quot;~&quot;&#125;\">\x3Ci class=\"img _1-yc profpic\" aria-label=\"Page b&#xe1;n G&#x1ea5;u B&#xf4;ng kute mu&#x1ed1;n x&#x1ec9;u nh&#x1b0;ng kh&#xf4;ng ai mua n&#xea;n mang &#x111;i cmt d&#x1ea1;o, profile picture\" role=\"img\" style=\"background:#d8dce6 url(&#039;https\\3a //scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p40x40/109706738_105829111222394_8302473280954417197_n.jpg?_nc_cat\\3d 109\\26 ccb\\3d 1-3\\26 _nc_sid\\3d dbb9e7\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d DeNn7-UtyWkAX_0VZGy\\26 _nc_ht\\3d scontent.fhan3-1.fna\\26 tp\\3d 3\\26 oh\\3d ad1e5adfd9e68d7e02a63b0c0dbbe1ff\\26 oe\\3d 60D1A852&#039;) no-repeat center;background-size:100% 100%;-webkit-background-size:100% 100%;width:36px;height:36px;\">\x3C/i>\x3C/a>\x3Cdiv class=\"_2b03\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_2b04\">\x3Cdiv class=\"_2b06\">\x3Cdiv class=\"_2b05\">\x3Ca class=\"_4e81\" href=\"/Page-b&#xe1;n-G&#x1ea5;u-B&#xf4;ng-kute-mu&#x1ed1;n-x&#x1ec9;u-nh&#x1b0;ng-kh&#xf4;ng-ai-mua-n&#xea;n-mang-&#x111;i-cmt-d&#x1ea1;o-105828534555785/?rc=p&amp;__tn__=R\">Page bán Gấu Bông kute muốn xỉu nhưng không ai mua nên mang đi cmt dạo\x3C/a>\x3C/div>\x3Cdiv data-commentid=\"319805139502950_319976252819172\" data-sigil=\"comment-body\">Hello Mr Vâu\x3C/div>\x3C/div>\x3Cdiv class=\"_14v5\">\x3Cdiv class=\"_2b1t attachment\">\x3Ca href=\"/105828534555785/photos/p.279080720563898/279080720563898/?type=3&amp;source=47&amp;__tn__=R\" class=\"_39pi _1mh-\">\x3Ci class=\"img _403j img _2sxw\" data-store=\"&#123;&quot;imgsrc&quot;:&quot;https:\\/\\/scontent.fhan3-1.fna.fbcdn.net\\/v\\/t1.6435-0\\/cp0\\/e15\\/q65\\/s206x206\\/186085548_279080723897231_5432791433338194628_n.jpg?_nc_cat=106&amp;ccb=1-3&amp;_nc_sid=1480c5&amp;efg=eyJpIjoidCJ9&amp;_nc_ohc=NZzls-YrpAsAX-ptnV6&amp;_nc_ht=scontent.fhan3-1.fna&amp;tp=9&amp;oh=5a74b1e7a0e93b4d9857fa425beb2e92&amp;oe=60D01099&quot;&#125;\" style=\"background-image: url(&#039;https\\3a //scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-0/cp0/e15/q65/s206x206/186085548_279080723897231_5432791433338194628_n.jpg?_nc_cat\\3d 106\\26 ccb\\3d 1-3\\26 _nc_sid\\3d 1480c5\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d NZzls-YrpAsAX-ptnV6\\26 _nc_ht\\3d scontent.fhan3-1.fna\\26 tp\\3d 9\\26 oh\\3d 5a74b1e7a0e93b4d9857fa425beb2e92\\26 oe\\3d 60D01099&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:135px;height:180px;\" aria-label=\"C&#xf3; th&#x1ec3; l&#xe0; &#x1ea3;nh ch&#x1ee5;p c&#x1ead;n c&#x1ea3;nh 1 ng&#x1b0;&#x1edd;i v&#xe0; v&#x103;n b&#x1ea3;n\" role=\"img\">\x3C/i>\x3C/a>\x3C/div>\x3Ca class=\"_14v8 _4edm\" href=\"/ufi/reaction/profile/browser/?ft_ent_identifier=319805139502950_319976252819172&amp;av=100004875732895&amp;__tn__=R\" id=\"u_0_2j_j/\">\x3Cspan class=\"_14v9\">\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_65dbc1\">\x3C/i>\x3C/span>\x3C/span>\x3Cspan class=\"_14va\">108\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_2b08 _4ghu\" data-sigil=\"ufi-inline-comment-actions\">\x3Cabbr class=\"_4ghv _2b0a\">1 tuần trước\x3C/abbr>\x3Ca class=\"touchable _2b0a\" data-store=\"&#123;&quot;feedbackTarget&quot;:&quot;319805139502950_319976252819172&quot;,&quot;isComment&quot;:true,&quot;kaiOSReactions&quot;:false,&quot;reaction&quot;:0&#125;\" href=\"/a/comment.php?parent_redirect_comment_token=319805139502950_319976252819172&amp;reaction_comment_id=319976252819172&amp;viewer_reaction=0&amp;snowflake=1&amp;ft_ent_identifier=319805139502950&amp;eav=AfZul8SJkScQs14pn8wpNmBN8HyrTBbAq_7yH-jxk_JdvXHxLZGLY0rgyvlq_1Vcfic&amp;av=100004875732895&amp;gfid=AQAF_wM5NEIsc0IBses&amp;fs=0&amp;__tn__=R\" id=\"u_0_2k_Yy\" data-sigil=\"touchable like-reaction-flyout\">Thích\x3C/a>\x3Ca href=\"/comment/replies/?ctoken=319805139502950_319976252819172&amp;actor_id=100004875732895&amp;ft_ent_identifier=319805139502950&amp;gfid=AQC7FepFapzoDW58R3A&amp;__tn__=R#comment_form_100044204000528_319805139502950_reply_319805139502950_319976252819172\" class=\"_2b0a\" id=\"u_0_2l_Qy\" data-sigil=\"touchable\">Trả lời\x3C/a>\x3Ca class=\"_1l26 _2b0a\" href=\"#\" data-store=\"&#123;&quot;reportIsModalDialog&quot;:true,&quot;hideCommentURI&quot;:&quot;\\/ufi\\/hide\\/?hide_comment_id=319976252819172&amp;hide_comment_fbid=319976252819172&amp;nfx_story_location=unknown&amp;spamDisplayMode=none&amp;ft_ent_identifier=319805139502950&amp;gfid=AQDerpDFWmN8YAyFEI4&quot;,&quot;reportCommentURI&quot;:&quot;\\/trust\\/afro\\/dialog?context=\\u00257B\\u002522session_id\\u002522\\u00253A\\u00252241967295-6674-4c83-b904-0c945df6398d\\u002522\\u00252C\\u002522support_type\\u002522\\u00253A\\u002522chevron\\u002522\\u00252C\\u002522type\\u002522\\u00253A2\\u00252C\\u002522story_location\\u002522\\u00253A\\u002522unknown\\u002522\\u00252C\\u002522entry_point\\u002522\\u00253A\\u002522comment\\u002522\\u00252C\\u002522reportable_ent_token\\u002522\\u00253A\\u002522RW50R2VuZXJpY0NvbW1lbnQ6MzE5ODA1MTM5NTAyOTUwXzMxOTk3NjI1MjgxOTE3Mg\\u00253D\\u00253D\\u002522\\u00257D&amp;gfid=AQBopBoGJl0UFbar-2E&quot;,&quot;commentID&quot;:319976252819172&#125;\" data-sigil=\"comment-flyout-context comment-metadata\">Xem thêm\x3C/a>\x3C/div>\x3Cdiv class=\"_2a_m\">\x3Cdiv class=\"_2b1i async_elem\" id=\"comment_replies_inline_composer_placeholder_319805139502950_319976252819172\">\x3Cspan class=\"img _55ym _55yn _55yo _2b0b\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"async_elem\" id=\"see_next_319805139502950\">\x3Ca href=\"/photo.php?fbid=319805139502950&amp;id=100044204000528&amp;set=a.319809939502470&amp;p=1&amp;av=100004875732895&amp;eav=AfY9ebE2Yde8OqXAPOzRQnXoroDzLEkAdse-i_fK1ggYCTM7l26Bg9ZoduJ2IEPxCQ0\" class=\"_108_\" data-ajaxify-href=\"/ajax/ufi.php?count=240&amp;pc=1&amp;prev&amp;p=1&amp;oldIndex=0&amp;isLoggedoutUFI&amp;ft_ent_identifier=319805139502950&amp;eav=AfbzeLMnI0vWBpNHxgE_Bhq1jSYmPKcpWl8OdZ0p6qq82y9IgvfnIFJerhJ-xKuZnWY&amp;av=100004875732895&amp;gfid=AQD5RsG2j4KXnPD3twQ\" data-sigil=\"ajaxify\">\x3Ci class=\"_5msp img sp_2ev2XfYE8iT sx_e6a5ef\">\x3C/i>&nbsp;Xem thêm bình luận…\x3Cdiv class=\"_2so _2sq _2ss img _50cg async_throbber async_saving_visible\" id=\"u_0_1l_Co\" data-animtype=\"1\" data-sigil=\"m-loading-indicator-animate m-loading-indicator-root async-throbber\">\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv id=\"add_comment_link_placeholder\">\x3C/div>\x3C/div>\x3C/div>\x3C/div>"}, 16], ["__markup_7216e2ae_0_7_Ti", {__html: "\x3Cdiv>\x3Cdiv class=\"_2ip_ _4b44 async_like\" data-sigil=\"mufi-inline inline-action-bar disable-feed-ufi-triggers\">\x3Cdiv class=\"_7om2 _52we _34qc _3hxn _3myz _4b45\">\x3Cdiv class=\"_4g34\">\x3Ca href=\"/photo.php?fbid=319804912836306&amp;id=100044204000528&amp;set=a.319809939502470&amp;anchor_composer=false\" role=\"button\" data-sigil=\"feed-ufi-trigger\">\x3Cdiv class=\"_rnk _77ke _2eo- _4-09 _1e6 _4b44\" id=\"u_0_2m_WP\" data-sigil=\"reactions-bling-bar\">\x3Cdiv class=\"_1w1k\" data-sigil=\"reactions-sentence-container\">\x3Cspan class=\"_qfz _77kf\">\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:3\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\" role=\"presentation\">\x3Cu>Thích\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:2\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\" role=\"presentation\">\x3Cu>Haha\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:1\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_59c92b\" role=\"presentation\">\x3Cu>Yêu thích\x3C/u>\x3C/i>\x3C/div>\x3C/span>\x3Cdiv class=\"_1g06\" aria-label=\"33K &#x111;&#xe3; b&#xe0;y t&#x1ecf; c&#x1ea3;m x&#xfa;c bao g&#x1ed3;m Th&#xed;ch, Haha v&#xe0; Y&#xea;u th&#xed;ch\">33K\x3C/div>\x3C/div>\x3Cdiv class=\"_1fnt\">\x3Cspan class=\"_1j-c\" data-sigil=\"comments-token\">184 bình luận\x3C/span>\x3Cspan class=\"_1j-c\">35 lượt chia sẻ\x3C/span>\x3C/div>\x3C/div>\x3C/a>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cdiv id=\"actor_selector_319804912836306\">\x3Cdiv class=\"_2g0e\" role=\"presentation\">\x3Ci class=\"img _1e_c img _2sxw\" style=\"background-image: url(&#039;https\\3a //scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat\\3d 100\\26 ccb\\3d 1-3\\26 _nc_sid\\3d 9128f4\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d fMRrGcbCThMAX9smDEP\\26 _nc_ht\\3d scontent.fhan3-2.fna\\26 tp\\3d 5\\26 oh\\3d 75d8e23c28796b13cd496a044adc1687\\26 oe\\3d 60D05357&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:20px;height:20px;\" id=\"u_0_2n_n8\">\x3C/i>\x3Ci class=\"_jvo _3-99 img sp_vuppHZ0nD_0 sx_9c3ad5\">\x3C/i>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_52jh _7om2 _15kk _15ks _15km _4b47 _4b46\" data-sigil=\"ufi-inline-actions\">\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15ko _77li touchable\" data-store=\"&#123;&quot;reaction&quot;:0,&quot;feedbackTarget&quot;:319804912836306,&quot;kaiOSReactions&quot;:false&#125;\" aria-pressed=\"false\" href=\"/ufi/reaction/?ft_ent_identifier=319804912836306&amp;reaction_type=1&amp;story_render_location=feed_mobile&amp;feedback_source=0&amp;is_sponsored=0&amp;ext=1622168488&amp;hash=AeRbnjJky-1o9QIWFME&amp;__tn__=%3E\" role=\"button\" tabindex=\"0\" data-ft=\"&#123;&quot;tn&quot;:&quot;&gt;&quot;&#125;\" id=\"u_0_2o_6o\" data-sigil=\"touchable ufi-inline-like like-reaction-flyout\">Thích\x3C/a>\x3Cdiv class=\"_1ekf\" role=\"link\" tabindex=\"-1\" data-sigil=\"screenreader-reactions-trigger\">Hiển thị thêm cảm xúc\x3C/div>\x3C/div>\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15kq _77li _l-a\" data-click=\"&#123;&quot;event&quot;:&quot;click_comment_ufi&quot;,&quot;target_id&quot;:319804912836306&#125;\" href=\"/photo.php?fbid=319804912836306&amp;id=100044204000528&amp;set=a.319809939502470&amp;fs=0&amp;focus_composer=0&amp;__tn__=S\" data-ft=\"&#123;&quot;tn&quot;:&quot;S&quot;&#125;\" data-sigil=\"feed-ufi-focus feed-ufi-trigger ufiCommentLink mufi-composer-focus\">Bình luận\x3C/a>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_59e9 _1-ut _2a_g async_composer\" id=\"ufi_319804912836306\">\x3Cdiv class=\"_45kb ufi\" data-sigil=\"m-ufi\">\x3Cdiv class=\"_ohf\" id=\"add_comment_switcher_placeholder\">\x3C/div>\x3Cdiv class=\"_43lx _55wr\">\x3Ca href=\"/browse/shares?id=319804912836306\">\x3Cspan data-sigil=\"feed-ufi-sharers\">35 lượt chia sẻ\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_uwt _45kb _3ioy\" id=\"u_0_2p_fA\" data-sigil=\"m-photo-composer m-noninline-composer\">\x3Cdiv class=\"_55wr _10pt _3eqx post_placeholder\" id=\"post_placeholder-319804912836306\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3Cdiv class=\"_5ru3 _3tl8 _2pid composerClosed\" data-store=\"&#123;&quot;auto_collapse&quot;:true,&quot;disable_auto_scroll&quot;:false&#125;\" id=\"composer-319804912836306\" data-sigil=\"m-composer\">\x3Cform method=\"post\" action=\"/a/comment.php?fs=0&amp;actionsource=13&amp;comment_logging&amp;ft_ent_identifier=319804912836306&amp;eav=AfYtJzvhxUiyWhqRqV0RKqq4_iqlAGvOqY2BDthAXydI4aw9KmZ064wXavbEjn06hL8&amp;av=100004875732895&amp;gfid=AQBn4wgtzIH0Ut4Y-Vk\" data-store=\"&#123;&quot;expand_composer&quot;:true&#125;\" id=\"comment_form_100044204000528_319804912836306\" onsubmit=\"return window.MAjaxify&amp;&amp;MAjaxify.form(event,this,&quot;async_composer&quot;,&quot;cache&quot;,null,false,undefined,&quot;ufi-comment&quot;);\">\x3Cinput type=\"hidden\" name=\"fb_dtsg\" value=\"AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"jazoest\" value=\"22371\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"snowflake\" value=\"1\" />\x3Cdiv class=\"_7om2 _2pin _2pi8 _55nh\">\x3Cdiv class=\"_5s61 _55nj _2pih\" id=\"u_0_2q_vM\">\x3Cdiv class=\"_5ecn _1n29 _2fv6\">\x3Ci class=\"img sp_2ev2XfYE8iT sx_fdc690\">\x3C/i>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61 _2pih\">\x3Cdiv class=\"_51s9 _3_5r\" id=\"u_0_2r_M2\">\x3Ca class=\"_5ecn\" rel=\"ignore\" role=\"button\" aria-label=\"Th&#xea;m &#x1ea3;nh\" data-sigil=\"touchable\">\x3Cdiv class=\"_5aqx\">\x3C/div>\x3Cdiv class=\"_51sa\">\x3Cinput type=\"file\" class=\"_51sb\" name=\"photo\" id=\"u_0_y_fC\" accept=\"image/*, image/heif, image/heic\" data-sigil=\"m-raw-file-input\" />\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv class=\"_4g34 _uww\">\x3Cdiv id=\"u_0_2s_D/\">\x3Ctextarea class=\"_1svy _uwx\" id=\"composerInput-319804912836306\" name=\"comment_text\" placeholder=\"Vi&#x1ebf;t b&#xec;nh lu&#x1ead;n...\" rows=\"3\" data-sigil=\"m-textarea-input textarea mufi-composer\">\x3C/textarea>\x3C/div>\x3Cdiv>\x3Cdiv class=\"_5aqz\" id=\"u_0_z_s2\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cbutton type=\"submit\" value=\"&#x110;&#x103;ng\" class=\"_54k8 _52jg _56bs _26vk _3lmf _3fyi _56bt\" aria-label=\"&#x110;&#x103;ng\" disabled=\"1\" name=\"submit\" data-sigil=\"touchable composer-submit\">\x3Cspan class=\"_55sr\">Đăng\x3C/span>\x3C/button>\x3C/div>\x3C/div>\x3Cdiv id=\"u_0_2t_pS\">\x3C/div>\x3Cinput type=\"hidden\" name=\"privacy_value\" value=\"0\" data-sigil=\"m-comment-privacy\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_session_id\" data-sigil=\"m-comment-conversation-guide-session-id\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_shown\" value=\"none\" data-sigil=\"m-comment-conversation-guide-shown\" />\x3C/form>\x3C/div>\x3C/div>\x3Cdiv class=\"_333v _45kb\">\x3Cdiv class=\"_2a_i\" data-store=\"&#123;&quot;token&quot;:&quot;319804912836306_319979342818863&quot;&#125;\" id=\"319979342818863\" data-uniqueid=\"319979342818863\" data-gt=\"&#123;&quot;tn&quot;:&quot;R&quot;&#125;\" data-sigil=\"comment\">\x3Cdiv class=\"_2a_j\" data-sigil=\"feed_story_ring105828534555785\">\x3Cdiv class=\"_2b00\">\x3Ca class=\"_4e81\" href=\"/Page-b&#xe1;n-G&#x1ea5;u-B&#xf4;ng-kute-mu&#x1ed1;n-x&#x1ec9;u-nh&#x1b0;ng-kh&#xf4;ng-ai-mua-n&#xea;n-mang-&#x111;i-cmt-d&#x1ea1;o-105828534555785/?rc=p&amp;__tn__=%7ER\" data-gt=\"&#123;&quot;tn&quot;:&quot;~&quot;&#125;\">\x3Ci class=\"img _1-yc profpic\" aria-label=\"Page b&#xe1;n G&#x1ea5;u B&#xf4;ng kute mu&#x1ed1;n x&#x1ec9;u nh&#x1b0;ng kh&#xf4;ng ai mua n&#xea;n mang &#x111;i cmt d&#x1ea1;o, profile picture\" role=\"img\" style=\"background:#d8dce6 url(&#039;https\\3a //scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p40x40/109706738_105829111222394_8302473280954417197_n.jpg?_nc_cat\\3d 109\\26 ccb\\3d 1-3\\26 _nc_sid\\3d dbb9e7\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d DeNn7-UtyWkAX_0VZGy\\26 _nc_ht\\3d scontent.fhan3-1.fna\\26 tp\\3d 3\\26 oh\\3d ad1e5adfd9e68d7e02a63b0c0dbbe1ff\\26 oe\\3d 60D1A852&#039;) no-repeat center;background-size:100% 100%;-webkit-background-size:100% 100%;width:36px;height:36px;\">\x3C/i>\x3C/a>\x3Cdiv class=\"_2b03\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_2b04\">\x3Cdiv class=\"_2b06\">\x3Cdiv class=\"_2b05\">\x3Ca class=\"_4e81\" href=\"/Page-b&#xe1;n-G&#x1ea5;u-B&#xf4;ng-kute-mu&#x1ed1;n-x&#x1ec9;u-nh&#x1b0;ng-kh&#xf4;ng-ai-mua-n&#xea;n-mang-&#x111;i-cmt-d&#x1ea1;o-105828534555785/?rc=p&amp;__tn__=R\">Page bán Gấu Bông kute muốn xỉu nhưng không ai mua nên mang đi cmt dạo\x3C/a>\x3C/div>\x3Cdiv data-commentid=\"319804912836306_319979342818863\" data-sigil=\"comment-body\">Cừu xịn vậy\x3C/div>\x3C/div>\x3Cdiv class=\"_14v5\">\x3Cdiv class=\"_2b1t attachment\">\x3Ca href=\"/105828534555785/photos/p.279082350563735/279082350563735/?type=3&amp;source=47&amp;__tn__=R\" class=\"_39pi _1mh-\">\x3Ci class=\"img _403j img _2sxw\" data-store=\"&#123;&quot;imgsrc&quot;:&quot;https:\\/\\/scontent.fhan3-1.fna.fbcdn.net\\/v\\/t1.6435-0\\/s180x540\\/186551707_279082353897068_8468988344410472775_n.png?_nc_cat=109&amp;ccb=1-3&amp;_nc_sid=1480c5&amp;efg=eyJpIjoidCJ9&amp;_nc_ohc=UofSGWlCiXwAX8rl7qD&amp;tn=6uXj2tgms-FrSnEt&amp;_nc_ht=scontent.fhan3-1.fna&amp;tp=30&amp;oh=71bc4ecc66fa6e46cb87d326b6ac6cef&amp;oe=60D23C5D&quot;&#125;\" style=\"background-image: url(&#039;https\\3a //scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-0/s180x540/186551707_279082353897068_8468988344410472775_n.png?_nc_cat\\3d 109\\26 ccb\\3d 1-3\\26 _nc_sid\\3d 1480c5\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d UofSGWlCiXwAX8rl7qD\\26 tn\\3d 6uXj2tgms-FrSnEt\\26 _nc_ht\\3d scontent.fhan3-1.fna\\26 tp\\3d 30\\26 oh\\3d 71bc4ecc66fa6e46cb87d326b6ac6cef\\26 oe\\3d 60D23C5D&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:180px;height:174px;\" aria-label=\"C&#xf3; th&#x1ec3; l&#xe0; h&#xec;nh &#x1ea3;nh v&#x1ec1; m&#xe8;o v&#xe0; v&#x103;n b&#x1ea3;n\" role=\"img\">\x3C/i>\x3C/a>\x3C/div>\x3Ca class=\"_14v8 _4edm\" href=\"/ufi/reaction/profile/browser/?ft_ent_identifier=319804912836306_319979342818863&amp;av=100004875732895&amp;__tn__=R\" id=\"u_0_2u_oP\">\x3Cspan class=\"_14v9\">\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_59c92b\">\x3C/i>\x3C/span>\x3C/span>\x3Cspan class=\"_14va\">18\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_2b08 _4ghu\" data-sigil=\"ufi-inline-comment-actions\">\x3Cabbr class=\"_4ghv _2b0a\">1 tuần trước\x3C/abbr>\x3Ca class=\"touchable _2b0a\" data-store=\"&#123;&quot;feedbackTarget&quot;:&quot;319804912836306_319979342818863&quot;,&quot;isComment&quot;:true,&quot;kaiOSReactions&quot;:false,&quot;reaction&quot;:0&#125;\" href=\"/a/comment.php?parent_redirect_comment_token=319804912836306_319979342818863&amp;reaction_comment_id=319979342818863&amp;viewer_reaction=0&amp;snowflake=1&amp;ft_ent_identifier=319804912836306&amp;eav=AfZcOBJel3RbuwJTlmpGjd4XHckH-ACKGP5J9z3PHa3CITPry3sKn7fVspJRtM0RGVY&amp;av=100004875732895&amp;gfid=AQBjsWchkRe8ch5nm50&amp;fs=0&amp;__tn__=R\" id=\"u_0_2v_Ou\" data-sigil=\"touchable like-reaction-flyout\">Thích\x3C/a>\x3Ca href=\"/comment/replies/?ctoken=319804912836306_319979342818863&amp;actor_id=100004875732895&amp;ft_ent_identifier=319804912836306&amp;gfid=AQBQmQUpJRL3YI1CGEk&amp;__tn__=R#comment_form_100044204000528_319804912836306_reply_319804912836306_319979342818863\" class=\"_2b0a\" id=\"u_0_2w_8W\" data-sigil=\"touchable\">Trả lời\x3C/a>\x3Ca class=\"_1l26 _2b0a\" href=\"#\" data-store=\"&#123;&quot;reportIsModalDialog&quot;:true,&quot;hideCommentURI&quot;:&quot;\\/ufi\\/hide\\/?hide_comment_id=319979342818863&amp;hide_comment_fbid=319979342818863&amp;nfx_story_location=unknown&amp;spamDisplayMode=none&amp;ft_ent_identifier=319804912836306&amp;gfid=AQBlTdbUN0FsRatTKD0&quot;,&quot;reportCommentURI&quot;:&quot;\\/trust\\/afro\\/dialog?context=\\u00257B\\u002522session_id\\u002522\\u00253A\\u002522b5097a3f-e207-452e-83ea-521b5d251478\\u002522\\u00252C\\u002522support_type\\u002522\\u00253A\\u002522chevron\\u002522\\u00252C\\u002522type\\u002522\\u00253A2\\u00252C\\u002522story_location\\u002522\\u00253A\\u002522unknown\\u002522\\u00252C\\u002522entry_point\\u002522\\u00253A\\u002522comment\\u002522\\u00252C\\u002522reportable_ent_token\\u002522\\u00253A\\u002522RW50R2VuZXJpY0NvbW1lbnQ6MzE5ODA0OTEyODM2MzA2XzMxOTk3OTM0MjgxODg2Mw\\u00253D\\u00253D\\u002522\\u00257D&amp;gfid=AQB5f4mEzYDHYvY8u-w&quot;,&quot;commentID&quot;:319979342818863&#125;\" data-sigil=\"comment-flyout-context comment-metadata\">Xem thêm\x3C/a>\x3C/div>\x3Cdiv class=\"_2a_m\">\x3Cdiv class=\"_2b1i async_elem\" id=\"comment_replies_inline_composer_placeholder_319804912836306_319979342818863\">\x3Cspan class=\"img _55ym _55yn _55yo _2b0b\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"async_elem\" id=\"see_next_319804912836306\">\x3Ca href=\"/photo.php?fbid=319804912836306&amp;id=100044204000528&amp;set=a.319809939502470&amp;p=1&amp;av=100004875732895&amp;eav=AfZ8JXaC6Jksv7OaoL60r_-mfY9G0zT09QY8Bq32maOIw6kE44nRRYdlKaFH-bn2tY8\" class=\"_108_\" data-ajaxify-href=\"/ajax/ufi.php?count=137&amp;pc=1&amp;prev&amp;p=1&amp;oldIndex=0&amp;isLoggedoutUFI&amp;ft_ent_identifier=319804912836306&amp;eav=AfbOyPcDeQ3EyPLrL4cO_b71phZOJpwqN6u_MbxXC9T8eVL1doViQQXfEIfCqt2Os8Q&amp;av=100004875732895&amp;gfid=AQDF48YxqFXP75J6vZw\" data-sigil=\"ajaxify\">\x3Ci class=\"_5msp img sp_2ev2XfYE8iT sx_e6a5ef\">\x3C/i>&nbsp;Xem thêm bình luận…\x3Cdiv class=\"_2so _2sq _2ss img _50cg async_throbber async_saving_visible\" id=\"u_0_1k_3X\" data-animtype=\"1\" data-sigil=\"m-loading-indicator-animate m-loading-indicator-root async-throbber\">\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv id=\"add_comment_link_placeholder\">\x3C/div>\x3C/div>\x3C/div>\x3C/div>"}, 16], ["__markup_7216e2ae_0_1_2I", {__html: "\x3Cdiv>\x3Cdiv class=\"_2ip_ _4b44 async_like\" data-sigil=\"mufi-inline inline-action-bar disable-feed-ufi-triggers\">\x3Cdiv class=\"_7om2 _52we _34qc _3hxn _3myz _4b45\">\x3Cdiv class=\"_4g34\">\x3Ca href=\"/photo.php?fbid=319804972836300&amp;id=100044204000528&amp;set=a.319809939502470&amp;anchor_composer=false\" role=\"button\" data-sigil=\"feed-ufi-trigger\">\x3Cdiv class=\"_rnk _77ke _2eo- _4-09 _1e6 _4b44\" id=\"u_0_2x_aE\" data-sigil=\"reactions-bling-bar\">\x3Cdiv class=\"_1w1k\" data-sigil=\"reactions-sentence-container\">\x3Cspan class=\"_qfz _77kf\">\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:3\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\" role=\"presentation\">\x3Cu>Thích\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:2\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_59c92b\" role=\"presentation\">\x3Cu>Yêu thích\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:1\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\" role=\"presentation\">\x3Cu>Haha\x3C/u>\x3C/i>\x3C/div>\x3C/span>\x3Cdiv class=\"_1g06\" aria-label=\"B&#x1ea1;n, Tr&#x1ea7;n Th&#x1ecb; H&#x1ead;u v&#xe0; 40K ng&#x1b0;&#x1edd;i kh&#xe1;c &#x111;&#xe3; b&#xe0;y t&#x1ecf; c&#x1ea3;m x&#xfa;c bao g&#x1ed3;m Th&#xed;ch, Y&#xea;u th&#xed;ch v&#xe0; Haha\">Bạn, Trần Thị Hậu và 40K người khác\x3C/div>\x3C/div>\x3Cdiv class=\"_1fnt\">\x3Cspan class=\"_1j-c\" data-sigil=\"comments-token\">436 bình luận\x3C/span>\x3Cspan class=\"_1j-c\">118 lượt chia sẻ\x3C/span>\x3C/div>\x3C/div>\x3C/a>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cdiv id=\"actor_selector_319804972836300\">\x3Cdiv class=\"_2g0e\" role=\"presentation\">\x3Ci class=\"img _1e_c img _2sxw\" style=\"background-image: url(&#039;https\\3a //scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat\\3d 100\\26 ccb\\3d 1-3\\26 _nc_sid\\3d 9128f4\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d fMRrGcbCThMAX9smDEP\\26 _nc_ht\\3d scontent.fhan3-2.fna\\26 tp\\3d 5\\26 oh\\3d 75d8e23c28796b13cd496a044adc1687\\26 oe\\3d 60D05357&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:20px;height:20px;\" id=\"u_0_2y_dK\">\x3C/i>\x3Ci class=\"_jvo _3-99 img sp_vuppHZ0nD_0 sx_9c3ad5\">\x3C/i>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_52jh _7om2 _15kk _15ks _15km _4b47 _4b46\" data-sigil=\"ufi-inline-actions\">\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15ko _77li _77la touchable\" data-store=\"&#123;&quot;reaction&quot;:1,&quot;feedbackTarget&quot;:319804972836300,&quot;kaiOSReactions&quot;:false&#125;\" aria-pressed=\"true\" href=\"/ufi/reaction/?ft_ent_identifier=319804972836300&amp;reaction_type=1&amp;story_render_location=feed_mobile&amp;feedback_source=0&amp;is_sponsored=0&amp;ext=1622168488&amp;hash=AeTlnem-ayLTC7N6b2o&amp;__tn__=%3E\" role=\"button\" tabindex=\"0\" data-ft=\"&#123;&quot;tn&quot;:&quot;&gt;&quot;&#125;\" id=\"u_0_2z_U/\" data-sigil=\"touchable ufi-inline-like like-reaction-flyout\">Thích\x3C/a>\x3Cdiv class=\"_1ekf\" role=\"link\" tabindex=\"-1\" data-sigil=\"screenreader-reactions-trigger\">Hiển thị thêm cảm xúc\x3C/div>\x3C/div>\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15kq _77li _l-a\" data-click=\"&#123;&quot;event&quot;:&quot;click_comment_ufi&quot;,&quot;target_id&quot;:319804972836300&#125;\" href=\"/photo.php?fbid=319804972836300&amp;id=100044204000528&amp;set=a.319809939502470&amp;fs=0&amp;focus_composer=0&amp;__tn__=S\" data-ft=\"&#123;&quot;tn&quot;:&quot;S&quot;&#125;\" data-sigil=\"feed-ufi-focus feed-ufi-trigger ufiCommentLink mufi-composer-focus\">Bình luận\x3C/a>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_59e9 _1-ut _2a_g async_composer\" id=\"ufi_319804972836300\">\x3Cdiv class=\"_45kb ufi\" data-sigil=\"m-ufi\">\x3Cdiv class=\"_ohf\" id=\"add_comment_switcher_placeholder\">\x3C/div>\x3Cdiv class=\"_43lx _55wr\">\x3Ca href=\"/browse/shares?id=319804972836300\">\x3Cspan data-sigil=\"feed-ufi-sharers\">118 lượt chia sẻ\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_uwt _45kb _3ioy\" id=\"u_0_30_rX\" data-sigil=\"m-photo-composer m-noninline-composer\">\x3Cdiv class=\"_55wr _10pt _3eqx post_placeholder\" id=\"post_placeholder-319804972836300\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3Cdiv class=\"_5ru3 _3tl8 _2pid composerClosed\" data-store=\"&#123;&quot;auto_collapse&quot;:true,&quot;disable_auto_scroll&quot;:false&#125;\" id=\"composer-319804972836300\" data-sigil=\"m-composer\">\x3Cform method=\"post\" action=\"/a/comment.php?fs=0&amp;actionsource=13&amp;comment_logging&amp;ft_ent_identifier=319804972836300&amp;eav=AfbQdMDPb1u0ZOX3nZrplnnTd983HM0Mfff_ZghS1HQg3TxVKNoh7muXN3zOFKernDI&amp;av=100004875732895&amp;gfid=AQAQO65b4A5OJunnBRo\" data-store=\"&#123;&quot;expand_composer&quot;:true&#125;\" id=\"comment_form_100044204000528_319804972836300\" onsubmit=\"return window.MAjaxify&amp;&amp;MAjaxify.form(event,this,&quot;async_composer&quot;,&quot;cache&quot;,null,false,undefined,&quot;ufi-comment&quot;);\">\x3Cinput type=\"hidden\" name=\"fb_dtsg\" value=\"AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"jazoest\" value=\"22371\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"snowflake\" value=\"1\" />\x3Cdiv class=\"_7om2 _2pin _2pi8 _55nh\">\x3Cdiv class=\"_5s61 _55nj _2pih\" id=\"u_0_31_co\">\x3Cdiv class=\"_5ecn _1n29 _2fv6\">\x3Ci class=\"img sp_2ev2XfYE8iT sx_fdc690\">\x3C/i>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61 _2pih\">\x3Cdiv class=\"_51s9 _3_5r\" id=\"u_0_32_Ww\">\x3Ca class=\"_5ecn\" rel=\"ignore\" role=\"button\" aria-label=\"Th&#xea;m &#x1ea3;nh\" data-sigil=\"touchable\">\x3Cdiv class=\"_5aqx\">\x3C/div>\x3Cdiv class=\"_51sa\">\x3Cinput type=\"file\" class=\"_51sb\" name=\"photo\" id=\"u_0_14_Bz\" accept=\"image/*, image/heif, image/heic\" data-sigil=\"m-raw-file-input\" />\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv class=\"_4g34 _uww\">\x3Cdiv id=\"u_0_33_7Y\">\x3Ctextarea class=\"_1svy _uwx\" id=\"composerInput-319804972836300\" name=\"comment_text\" placeholder=\"Vi&#x1ebf;t b&#xec;nh lu&#x1ead;n...\" rows=\"3\" data-sigil=\"m-textarea-input textarea mufi-composer\">\x3C/textarea>\x3C/div>\x3Cdiv>\x3Cdiv class=\"_5aqz\" id=\"u_0_15_wH\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cbutton type=\"submit\" value=\"&#x110;&#x103;ng\" class=\"_54k8 _52jg _56bs _26vk _3lmf _3fyi _56bt\" aria-label=\"&#x110;&#x103;ng\" disabled=\"1\" name=\"submit\" data-sigil=\"touchable composer-submit\">\x3Cspan class=\"_55sr\">Đăng\x3C/span>\x3C/button>\x3C/div>\x3C/div>\x3Cdiv id=\"u_0_34_tq\">\x3C/div>\x3Cinput type=\"hidden\" name=\"privacy_value\" value=\"0\" data-sigil=\"m-comment-privacy\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_session_id\" data-sigil=\"m-comment-conversation-guide-session-id\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_shown\" value=\"none\" data-sigil=\"m-comment-conversation-guide-shown\" />\x3C/form>\x3C/div>\x3C/div>\x3Cdiv class=\"_333v _45kb\">\x3Cdiv class=\"_2a_i\" data-store=\"&#123;&quot;token&quot;:&quot;319804972836300_319976056152525&quot;&#125;\" id=\"319976056152525\" data-uniqueid=\"319976056152525\" data-gt=\"&#123;&quot;tn&quot;:&quot;R&quot;&#125;\" data-sigil=\"comment\">\x3Cdiv class=\"_2a_j\" data-sigil=\"feed_story_ring105828534555785\">\x3Cdiv class=\"_2b00\">\x3Ca class=\"_4e81\" href=\"/Page-b&#xe1;n-G&#x1ea5;u-B&#xf4;ng-kute-mu&#x1ed1;n-x&#x1ec9;u-nh&#x1b0;ng-kh&#xf4;ng-ai-mua-n&#xea;n-mang-&#x111;i-cmt-d&#x1ea1;o-105828534555785/?rc=p&amp;__tn__=%7ER\" data-gt=\"&#123;&quot;tn&quot;:&quot;~&quot;&#125;\">\x3Ci class=\"img _1-yc profpic\" aria-label=\"Page b&#xe1;n G&#x1ea5;u B&#xf4;ng kute mu&#x1ed1;n x&#x1ec9;u nh&#x1b0;ng kh&#xf4;ng ai mua n&#xea;n mang &#x111;i cmt d&#x1ea1;o, profile picture\" role=\"img\" style=\"background:#d8dce6 url(&#039;https\\3a //scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p40x40/109706738_105829111222394_8302473280954417197_n.jpg?_nc_cat\\3d 109\\26 ccb\\3d 1-3\\26 _nc_sid\\3d dbb9e7\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d DeNn7-UtyWkAX_0VZGy\\26 _nc_ht\\3d scontent.fhan3-1.fna\\26 tp\\3d 3\\26 oh\\3d ad1e5adfd9e68d7e02a63b0c0dbbe1ff\\26 oe\\3d 60D1A852&#039;) no-repeat center;background-size:100% 100%;-webkit-background-size:100% 100%;width:36px;height:36px;\">\x3C/i>\x3C/a>\x3Cdiv class=\"_2b03\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_2b04\">\x3Cdiv class=\"_2b06\">\x3Cdiv class=\"_2b05\">\x3Ca class=\"_4e81\" href=\"/Page-b&#xe1;n-G&#x1ea5;u-B&#xf4;ng-kute-mu&#x1ed1;n-x&#x1ec9;u-nh&#x1b0;ng-kh&#xf4;ng-ai-mua-n&#xea;n-mang-&#x111;i-cmt-d&#x1ea1;o-105828534555785/?rc=p&amp;__tn__=R\">Page bán Gấu Bông kute muốn xỉu nhưng không ai mua nên mang đi cmt dạo\x3C/a>\x3C/div>\x3Cdiv data-commentid=\"319804972836300_319976056152525\" data-sigil=\"comment-body\">Chộ ôi, soái ca\x3C/div>\x3C/div>\x3Cdiv class=\"_14v5\">\x3Cdiv class=\"_2b1t attachment\">\x3Ca href=\"/105828534555785/photos/p.279080527230584/279080527230584/?type=3&amp;source=47&amp;__tn__=R\" class=\"_39pi _1mh-\">\x3Ci class=\"img _403j img _2sxw\" data-store=\"&#123;&quot;imgsrc&quot;:&quot;https:\\/\\/scontent.fhan4-1.fna.fbcdn.net\\/v\\/t1.6435-0\\/s180x540\\/186520834_279080530563917_3886152016951970653_n.png?_nc_cat=101&amp;ccb=1-3&amp;_nc_sid=1480c5&amp;efg=eyJpIjoidCJ9&amp;_nc_ohc=cGc7ftSiVuAAX9KaGPI&amp;_nc_ht=scontent.fhan4-1.fna&amp;tp=30&amp;oh=54e0848046ffa0410495b34048461261&amp;oe=60D0EF4B&quot;&#125;\" style=\"background-image: url(&#039;https\\3a //scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-0/s180x540/186520834_279080530563917_3886152016951970653_n.png?_nc_cat\\3d 101\\26 ccb\\3d 1-3\\26 _nc_sid\\3d 1480c5\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d cGc7ftSiVuAAX9KaGPI\\26 _nc_ht\\3d scontent.fhan4-1.fna\\26 tp\\3d 30\\26 oh\\3d 54e0848046ffa0410495b34048461261\\26 oe\\3d 60D0EF4B&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:180px;height:174px;\" aria-label=\"C&#xf3; th&#x1ec3; l&#xe0; h&#xec;nh &#x1ea3;nh v&#x1ec1; m&#xe8;o v&#xe0; v&#x103;n b&#x1ea3;n\" role=\"img\">\x3C/i>\x3C/a>\x3C/div>\x3Ca class=\"_14v8 _4edm\" href=\"/ufi/reaction/profile/browser/?ft_ent_identifier=319804972836300_319976056152525&amp;av=100004875732895&amp;__tn__=R\" id=\"u_0_35_jq\">\x3Cspan class=\"_14v9\">\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_59c92b\">\x3C/i>\x3C/span>\x3C/span>\x3Cspan class=\"_14va\">31\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_2b08 _4ghu\" data-sigil=\"ufi-inline-comment-actions\">\x3Cabbr class=\"_4ghv _2b0a\">1 tuần trước\x3C/abbr>\x3Ca class=\"touchable _2b0a\" data-store=\"&#123;&quot;feedbackTarget&quot;:&quot;319804972836300_319976056152525&quot;,&quot;isComment&quot;:true,&quot;kaiOSReactions&quot;:false,&quot;reaction&quot;:0&#125;\" href=\"/a/comment.php?parent_redirect_comment_token=319804972836300_319976056152525&amp;reaction_comment_id=319976056152525&amp;viewer_reaction=0&amp;snowflake=1&amp;ft_ent_identifier=319804972836300&amp;eav=AfZyxNID5KfzYpSMWB6LfnEkF0u8f-KExtihs667j6G1obhkD0bY-SXCy2lvOC7CPdU&amp;av=100004875732895&amp;gfid=AQDZFbU87huSeuSENfw&amp;fs=0&amp;__tn__=R\" id=\"u_0_36_J5\" data-sigil=\"touchable like-reaction-flyout\">Thích\x3C/a>\x3Ca href=\"/comment/replies/?ctoken=319804972836300_319976056152525&amp;actor_id=100004875732895&amp;ft_ent_identifier=319804972836300&amp;gfid=AQCHx-cRjdjEdspmOB0&amp;__tn__=R#comment_form_100044204000528_319804972836300_reply_319804972836300_319976056152525\" class=\"_2b0a\" id=\"u_0_37_2a\" data-sigil=\"touchable\">Trả lời\x3C/a>\x3Ca class=\"_1l26 _2b0a\" href=\"#\" data-store=\"&#123;&quot;reportIsModalDialog&quot;:true,&quot;hideCommentURI&quot;:&quot;\\/ufi\\/hide\\/?hide_comment_id=319976056152525&amp;hide_comment_fbid=319976056152525&amp;nfx_story_location=unknown&amp;spamDisplayMode=none&amp;ft_ent_identifier=319804972836300&amp;gfid=AQBd5fx4lYA9JKBb_PQ&quot;,&quot;reportCommentURI&quot;:&quot;\\/trust\\/afro\\/dialog?context=\\u00257B\\u002522session_id\\u002522\\u00253A\\u00252247f42660-2fec-4c05-a4dc-2b98f83f3b77\\u002522\\u00252C\\u002522support_type\\u002522\\u00253A\\u002522chevron\\u002522\\u00252C\\u002522type\\u002522\\u00253A2\\u00252C\\u002522story_location\\u002522\\u00253A\\u002522unknown\\u002522\\u00252C\\u002522entry_point\\u002522\\u00253A\\u002522comment\\u002522\\u00252C\\u002522reportable_ent_token\\u002522\\u00253A\\u002522RW50R2VuZXJpY0NvbW1lbnQ6MzE5ODA0OTcyODM2MzAwXzMxOTk3NjA1NjE1MjUyNQ\\u00253D\\u00253D\\u002522\\u00257D&amp;gfid=AQCurdqgys1qcdQGF90&quot;,&quot;commentID&quot;:319976056152525&#125;\" data-sigil=\"comment-flyout-context comment-metadata\">Xem thêm\x3C/a>\x3C/div>\x3Cdiv class=\"_2a_m\">\x3Cdiv class=\"_2b1i async_elem\" id=\"comment_replies_inline_composer_placeholder_319804972836300_319976056152525\">\x3Cspan class=\"img _55ym _55yn _55yo _2b0b\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"async_elem\" id=\"see_next_319804972836300\">\x3Ca href=\"/photo.php?fbid=319804972836300&amp;id=100044204000528&amp;set=a.319809939502470&amp;p=1&amp;av=100004875732895&amp;eav=AfY7mndpHfKPoW6Tx30iK4vfelwU41Rx5e5C0n9-YbldtMij8FnqeE6956Db1rFhdFo\" class=\"_108_\" data-ajaxify-href=\"/ajax/ufi.php?count=305&amp;pc=1&amp;prev&amp;p=1&amp;oldIndex=0&amp;isLoggedoutUFI&amp;ft_ent_identifier=319804972836300&amp;eav=AfZVNrwG_xmHn6-yj-CKNo9HUxwGEWQTlWXoXg1AzHEwfvZaDfzpRi5RRYgCmumGpd4&amp;av=100004875732895&amp;gfid=AQDrUIABB2fmkm8MnLA\" data-sigil=\"ajaxify\">\x3Ci class=\"_5msp img sp_2ev2XfYE8iT sx_e6a5ef\">\x3C/i>&nbsp;Xem thêm bình luận…\x3Cdiv class=\"_2so _2sq _2ss img _50cg async_throbber async_saving_visible\" id=\"u_0_1m_NE\" data-animtype=\"1\" data-sigil=\"m-loading-indicator-animate m-loading-indicator-root async-throbber\">\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv id=\"add_comment_link_placeholder\">\x3C/div>\x3C/div>\x3C/div>\x3C/div>"}, 16], ["__markup_7216e2ae_0_8_PO", {__html: "\x3Cdiv>\x3Cdiv class=\"_2ip_ _4b44 async_like\" data-sigil=\"mufi-inline inline-action-bar disable-feed-ufi-triggers\">\x3Cdiv class=\"_7om2 _52we _34qc _3hxn _3myz _4b45\">\x3Cdiv class=\"_4g34\">\x3Ca href=\"/story.php?story_fbid=319809989502465&amp;id=100044204000528&amp;anchor_composer=false\" role=\"button\" data-sigil=\"feed-ufi-trigger\">\x3Cdiv class=\"_rnk _77ke _2eo- _4-09 _1e6 _4b44\" id=\"u_0_38_e+\" data-sigil=\"reactions-bling-bar\">\x3Cdiv class=\"_1w1k\" data-sigil=\"reactions-sentence-container\">\x3Cspan class=\"_qfz _77kf\">\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:3\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\" role=\"presentation\">\x3Cu>Thích\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:2\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_59c92b\" role=\"presentation\">\x3Cu>Yêu thích\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:1\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\" role=\"presentation\">\x3Cu>Haha\x3C/u>\x3C/i>\x3C/div>\x3C/span>\x3Cdiv class=\"_1g06\" aria-label=\"L&#xea; Nguy&#x1ec5;n Linh v&#xe0; 352K ng&#x1b0;&#x1edd;i kh&#xe1;c &#x111;&#xe3; b&#xe0;y t&#x1ecf; c&#x1ea3;m x&#xfa;c bao g&#x1ed3;m Th&#xed;ch, Y&#xea;u th&#xed;ch v&#xe0; Haha\">Lê Nguyễn Linh và 352K người khác\x3C/div>\x3C/div>\x3Cdiv class=\"_1fnt\">\x3Cspan class=\"_1j-c\" data-sigil=\"comments-token\">5,9K bình luận\x3C/span>\x3Cspan class=\"_1j-c\">10K lượt chia sẻ\x3C/span>\x3C/div>\x3C/div>\x3C/a>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cdiv id=\"actor_selector_319809989502465\">\x3Cdiv class=\"_2g0e\" role=\"presentation\">\x3Ci class=\"img _1e_c img _2sxw\" style=\"background-image: url(&#039;https\\3a //scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat\\3d 100\\26 ccb\\3d 1-3\\26 _nc_sid\\3d 9128f4\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d fMRrGcbCThMAX9smDEP\\26 _nc_ht\\3d scontent.fhan3-2.fna\\26 tp\\3d 5\\26 oh\\3d 75d8e23c28796b13cd496a044adc1687\\26 oe\\3d 60D05357&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:20px;height:20px;\" id=\"u_0_39_1M\">\x3C/i>\x3Ci class=\"_jvo _3-99 img sp_vuppHZ0nD_0 sx_9c3ad5\">\x3C/i>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_52jh _7om2 _15kk _15ks _15km _4b47 _4b46\" data-sigil=\"ufi-inline-actions\">\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15ko _77li touchable\" data-store=\"&#123;&quot;reaction&quot;:0,&quot;feedbackTarget&quot;:319809989502465,&quot;kaiOSReactions&quot;:false&#125;\" aria-pressed=\"false\" href=\"/ufi/reaction/?ft_ent_identifier=319809989502465&amp;reaction_type=1&amp;story_render_location=feed_mobile&amp;feedback_source=0&amp;is_sponsored=0&amp;ext=1622168488&amp;hash=AeS_zrlB75d8srGGjxU&amp;__tn__=%3E\" role=\"button\" tabindex=\"0\" data-ft=\"&#123;&quot;tn&quot;:&quot;&gt;&quot;&#125;\" id=\"u_0_3a_16\" data-sigil=\"touchable ufi-inline-like like-reaction-flyout\">Thích\x3C/a>\x3Cdiv class=\"_1ekf\" role=\"link\" tabindex=\"-1\" data-sigil=\"screenreader-reactions-trigger\">Hiển thị thêm cảm xúc\x3C/div>\x3C/div>\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15kq _77li _l-a\" data-click=\"&#123;&quot;event&quot;:&quot;click_comment_ufi&quot;,&quot;target_id&quot;:319809989502465&#125;\" href=\"/story.php?story_fbid=319809989502465&amp;id=100044204000528&amp;fs=0&amp;focus_composer=0&amp;__tn__=S\" data-ft=\"&#123;&quot;tn&quot;:&quot;S&quot;&#125;\" data-sigil=\"feed-ufi-focus feed-ufi-trigger ufiCommentLink mufi-composer-focus\">Bình luận\x3C/a>\x3C/div>\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15kr _77li\" data-click=\"&#123;&quot;event&quot;:&quot;click_share_ufi&quot;,&quot;target_id&quot;:319809989502465&#125;\" href=\"/sharer.php?fs=0&amp;sid=319809989502465&amp;__tn__=J\" data-store=\"&#123;&quot;is_acting_as_page&quot;:false,&quot;reshare_post&quot;:false,&quot;share_id&quot;:319809989502465,&quot;feedback_source&quot;:0,&quot;feedback_referrer&quot;:null,&quot;internal_preview_image_id&quot;:null,&quot;shareable_uri&quot;:&quot;\\/story.php?story_fbid=319809989502465&amp;id=100044204000528&quot;,&quot;user_id&quot;:100004875732895,&quot;behavior&quot;:&quot;custom&quot;&#125;\" data-ft=\"&#123;&quot;tn&quot;:&quot;J&quot;&#125;\" data-sigil=\"share-popup\">Chia sẻ\x3C/a>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_59e9 _1-ut _2a_g async_composer\" id=\"ufi_319809989502465\">\x3Cdiv class=\"_45kb ufi\" data-sigil=\"m-ufi\">\x3Cdiv class=\"_ohf\" id=\"add_comment_switcher_placeholder\">\x3C/div>\x3Cdiv class=\"_43lx _55wr\">\x3Ca href=\"/browse/shares?id=319809989502465\">\x3Cspan data-sigil=\"feed-ufi-sharers\">10.066 lượt chia sẻ\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_uwt _45kb _3ioy\" id=\"u_0_3b_vV\" data-sigil=\"m-photo-composer m-noninline-composer\">\x3Cdiv class=\"_55wr _10pt _3eqx post_placeholder\" id=\"post_placeholder-319809989502465\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3Cdiv class=\"_5ru3 _3tl8 _2pid composerClosed\" data-store=\"&#123;&quot;auto_collapse&quot;:true,&quot;disable_auto_scroll&quot;:false&#125;\" id=\"composer-319809989502465\" data-sigil=\"m-composer\">\x3Cform method=\"post\" action=\"/a/comment.php?fs=0&amp;actionsource=13&amp;comment_logging&amp;ft_ent_identifier=319809989502465&amp;eav=AfYDETMcdFRN316o5jLw-BygwFLmaELQPF44ud3HCGRCNNwH0z80Bk2kZ022mJAs8xE&amp;av=100004875732895&amp;gfid=AQCfcGUstRVn9Dh3drM\" data-store=\"&#123;&quot;expand_composer&quot;:true&#125;\" id=\"comment_form_100044204000528_319809989502465\" onsubmit=\"return window.MAjaxify&amp;&amp;MAjaxify.form(event,this,&quot;async_composer&quot;,&quot;cache&quot;,null,false,undefined,&quot;ufi-comment&quot;);\">\x3Cinput type=\"hidden\" name=\"fb_dtsg\" value=\"AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"jazoest\" value=\"22371\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"snowflake\" value=\"1\" />\x3Cdiv class=\"_7om2 _2pin _2pi8 _55nh\">\x3Cdiv class=\"_5s61 _55nj _2pih\" id=\"u_0_3c_mG\">\x3Cdiv class=\"_5ecn _1n29 _2fv6\">\x3Ci class=\"img sp_2ev2XfYE8iT sx_fdc690\">\x3C/i>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61 _2pih\">\x3Cdiv class=\"_51s9 _3_5r\" id=\"u_0_3d_+b\">\x3Ca class=\"_5ecn\" rel=\"ignore\" role=\"button\" aria-label=\"Th&#xea;m &#x1ea3;nh\" data-sigil=\"touchable\">\x3Cdiv class=\"_5aqx\">\x3C/div>\x3Cdiv class=\"_51sa\">\x3Cinput type=\"file\" class=\"_51sb\" name=\"photo\" id=\"u_0_10_mo\" accept=\"image/*, image/heif, image/heic\" data-sigil=\"m-raw-file-input\" />\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv class=\"_4g34 _uww\">\x3Cdiv id=\"u_0_3e_EL\">\x3Ctextarea class=\"_1svy _uwx\" id=\"composerInput-319809989502465\" name=\"comment_text\" placeholder=\"Vi&#x1ebf;t b&#xec;nh lu&#x1ead;n...\" rows=\"3\" data-sigil=\"m-textarea-input textarea mufi-composer\">\x3C/textarea>\x3C/div>\x3Cdiv>\x3Cdiv class=\"_5aqz\" id=\"u_0_11_wY\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cbutton type=\"submit\" value=\"&#x110;&#x103;ng\" class=\"_54k8 _52jg _56bs _26vk _3lmf _3fyi _56bt\" aria-label=\"&#x110;&#x103;ng\" disabled=\"1\" name=\"submit\" data-sigil=\"touchable composer-submit\">\x3Cspan class=\"_55sr\">Đăng\x3C/span>\x3C/button>\x3C/div>\x3C/div>\x3Cdiv id=\"u_0_3f_Yf\">\x3C/div>\x3Cinput type=\"hidden\" name=\"privacy_value\" value=\"0\" data-sigil=\"m-comment-privacy\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_session_id\" data-sigil=\"m-comment-conversation-guide-session-id\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_shown\" value=\"none\" data-sigil=\"m-comment-conversation-guide-shown\" />\x3C/form>\x3C/div>\x3C/div>\x3Cdiv class=\"_333v _45kb\">\x3Cdiv class=\"_2a_i\" data-store=\"&#123;&quot;token&quot;:&quot;319809989502465_165696068892257&quot;&#125;\" id=\"165696068892257\" data-uniqueid=\"165696068892257\" data-gt=\"&#123;&quot;tn&quot;:&quot;R&quot;&#125;\" data-sigil=\"comment\">\x3Cdiv class=\"_2a_j\" data-sigil=\"feed_story_ring100044204000528\">\x3Cdiv class=\"_2b00\">\x3Ca class=\"_4kk6\" data-click=\"&#123;&quot;event&quot;:&quot;click_post_avatar_image&quot;,&quot;target_id&quot;:319809989502465&#125;\" href=\"/denvau?fref=nf&amp;rc=p&amp;__tn__=R\">\x3Ci class=\"img _1-yc profpic\" aria-label=\"&#x110;en V&#xe2;u, profile picture\" role=\"img\" style=\"background:#d8dce6 url(&#039;https\\3a //scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p40x40/186472614_318126249670839_5974620561626302287_n.jpg?_nc_cat\\3d 1\\26 ccb\\3d 1-3\\26 _nc_sid\\3d dbb9e7\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d cRFTeJGMV-IAX8gApTP\\26 _nc_ht\\3d scontent.fhan4-1.fna\\26 tp\\3d 3\\26 oh\\3d 3ce887e8ca52e59ea875724450381a8d\\26 oe\\3d 60D17688&#039;) no-repeat center;background-size:100% 100%;-webkit-background-size:100% 100%;width:36px;height:36px;\">\x3C/i>\x3C/a>\x3Cdiv class=\"_2b03\">\x3Cspan class=\"_56_f _5dzy _5dz_ _3twv\" role=\"img\" aria-label=\"Trang c&#xe1; nh&#xe2;n &#x111;&#xe3; &#x111;&#x1b0;&#x1ee3;c x&#xe1;c minh\" id=\"u_0_3g_dK\">\x3C/span>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_2b04\">\x3Cdiv class=\"_14v5\">\x3Cdiv class=\"_2b06\">\x3Cdiv class=\"_2b05\">\x3Ca class=\"_4kk6\" href=\"/denvau?fref=nf&amp;rc=p&amp;__tn__=R\">\x3Cdiv class=\"_7_cb _3-8m\">\x3Ci class=\"img _3-8_ img _2sxw\" style=\"background-image: url(&#039;https\\3a //static.xx.fbcdn.net/rsrc.php/v3/yY/r/BeqOMvcAhco.png&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:12px;height:12px;\">\x3C/i>Tác giả\x3C/div>Đen Vâu\x3C/a>\x3C/div>\x3Cdiv data-commentid=\"319809989502465_165696068892257\" data-sigil=\"comment-body\">Để cập nhật thêm dần nhà anh chị em, mọi ng vẽ đẹp quá chả bù cho mình, có mấy cái hoa tay mà còn ko vẽ nổi bàn tay 5 ngón \x3Cspan class=\"_5mfr\">\x3Cspan class=\"_6qdm\" style=\"height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/td0/1/16/1f602.png&quot;)\">😂\x3C/span>\x3C/span>. Appreciate!\x3C/div>\x3C/div>\x3Ca class=\"_14v8 _4edm\" href=\"/ufi/reaction/profile/browser/?ft_ent_identifier=319809989502465_165696068892257&amp;av=100004875732895&amp;__tn__=R\" id=\"u_0_3h_sX\">\x3Cspan class=\"_14v9\">\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_59c92b\">\x3C/i>\x3C/span>\x3C/span>\x3Cspan class=\"_14va\">4K\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_2b08 _4ghu\" data-sigil=\"ufi-inline-comment-actions\">\x3Cabbr class=\"_4ghv _2b0a\">1 tuần trước\x3C/abbr>\x3Ca class=\"touchable _2b0a\" data-store=\"&#123;&quot;feedbackTarget&quot;:&quot;319809989502465_165696068892257&quot;,&quot;isComment&quot;:true,&quot;kaiOSReactions&quot;:false,&quot;reaction&quot;:0&#125;\" href=\"/a/comment.php?parent_redirect_comment_token=319809989502465_165696068892257&amp;reaction_comment_id=165696068892257&amp;viewer_reaction=0&amp;snowflake=1&amp;ft_ent_identifier=319809989502465&amp;eav=AfaOpDcBOE3tBXBjEhpFfXANmirdrrGslUwZKZWQpEzMLyjKiizZphAq4QtIVhREPx4&amp;av=100004875732895&amp;gfid=AQCLv0ZeKdIiK8Fu0Cg&amp;fs=0&amp;__tn__=R\" id=\"u_0_3i_GS\" data-sigil=\"touchable like-reaction-flyout\">Thích\x3C/a>\x3Ca href=\"/comment/replies/?ctoken=319809989502465_165696068892257&amp;actor_id=100004875732895&amp;ft_ent_identifier=319809989502465&amp;gfid=AQCphseeWqq7hUJ70NE&amp;__tn__=R#comment_form_100044204000528_319809989502465_reply_319809989502465_165696068892257\" class=\"_2b0a\" id=\"u_0_3j_xh\" data-sigil=\"touchable\">Trả lời\x3C/a>\x3Ca class=\"_1l26 _2b0a\" href=\"#\" data-store=\"&#123;&quot;reportIsModalDialog&quot;:true,&quot;editHistoryCommentURI&quot;:&quot;\\/comment\\/history\\/?ctoken=319809989502465_165696068892257&quot;,&quot;hideCommentURI&quot;:&quot;\\/ufi\\/hide\\/?hide_comment_id=165696068892257&amp;hide_comment_fbid=165696068892257&amp;nfx_story_location=unknown&amp;spamDisplayMode=none&amp;ft_ent_identifier=319809989502465&amp;gfid=AQBECsrIcCmzbKwEoCg&quot;,&quot;reportCommentURI&quot;:&quot;\\/trust\\/afro\\/dialog?context=\\u00257B\\u002522session_id\\u002522\\u00253A\\u00252270a3686a-a20d-49d7-a427-43d1040c6edc\\u002522\\u00252C\\u002522support_type\\u002522\\u00253A\\u002522chevron\\u002522\\u00252C\\u002522type\\u002522\\u00253A2\\u00252C\\u002522story_location\\u002522\\u00253A\\u002522unknown\\u002522\\u00252C\\u002522entry_point\\u002522\\u00253A\\u002522comment\\u002522\\u00252C\\u002522reportable_ent_token\\u002522\\u00253A\\u002522RW50R2VuZXJpY0NvbW1lbnQ6MzE5ODA5OTg5NTAyNDY1XzE2NTY5NjA2ODg5MjI1Nw\\u00253D\\u00253D\\u002522\\u00257D&amp;gfid=AQDFGQXrtvCahNtD4Pc&quot;,&quot;commentID&quot;:165696068892257&#125;\" data-sigil=\"comment-flyout-context comment-metadata\">Xem thêm\x3C/a>\x3C/div>\x3Cdiv class=\"_2a_m\">\x3Cdiv id=\"comment_replies_more_1:319809989502465_165696068892257:1\">\x3Cdiv class=\"_2b1h async_elem\" data-reply-to=\"319809989502465_165696068892257\" data-sigil=\"replies-see-more\">\x3Ca href=\"/comment/replies/?ctoken=319809989502465_165696068892257&amp;count=81&amp;curr&amp;pc=1&amp;isinline&amp;initcomp&amp;ft_ent_identifier=319809989502465&amp;eav=AfZTkF7BtbTLaHO7Kjo6dTom1E422DhkwNnQx-EjMnC-EmB2MkzDHrkRti8eRzVg1ps&amp;av=100004875732895&amp;gfid=AQB9UFMd0ghmj3N-upI&amp;__tn__=R\" data-ajaxify-href=\"/comment/replies/?ctoken=319809989502465_165696068892257&amp;count=81&amp;curr&amp;pc=1&amp;isinline&amp;initcomp&amp;ft_ent_identifier=319809989502465&amp;eav=AfZTkF7BtbTLaHO7Kjo6dTom1E422DhkwNnQx-EjMnC-EmB2MkzDHrkRti8eRzVg1ps&amp;av=100004875732895&amp;gfid=AQB9UFMd0ghmj3N-upI&amp;__tn__=R\" data-sigil=\"ajaxify\">\x3Cdiv class=\"_2b1j\">\x3Cdiv>\x3Ci class=\"img _1-yc profpic\" aria-label=\"Trang Trang, profile picture\" role=\"img\" style=\"background:#d8dce6 url(&#039;https\\3a //scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p24x24/166558483_273948627558743_5930975717908453683_n.jpg?_nc_cat\\3d 101\\26 ccb\\3d 1-3\\26 _nc_sid\\3d dbb9e7\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d t5buTPBDxWoAX-CEfA3\\26 _nc_ht\\3d scontent.fhan4-1.fna\\26 tp\\3d 3\\26 oh\\3d 2a0f8c01380b7b57abd746f5d3cc50e0\\26 oe\\3d 60D20219&#039;) no-repeat center;background-size:100% 100%;-webkit-background-size:100% 100%;width:24px;height:24px;\">\x3C/i>\x3C/div>\x3Cdiv class=\"_2b03\">\x3C/div>\x3C/div>\x3Cspan class=\"_4ayj\">Trang Trang\x3C/span> đã trả lời\x3Cspan class=\"_4ayk\"> · 81 phản hồi\x3C/span>\x3Cspan class=\"img _55ym _55yn _55yo _2b0b\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv class=\"_2b1i async_elem\" id=\"comment_replies_inline_composer_placeholder_319809989502465_165696068892257\">\x3Cspan class=\"img _55ym _55yn _55yo _2b0b\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"async_elem\" id=\"see_next_319809989502465\">\x3Ca href=\"/story.php?story_fbid=319809989502465&amp;id=100044204000528&amp;p=1&amp;av=100004875732895&amp;eav=AfYeKPGNQti6ykvDNozWae1v9XGyoxwQD7_jmFQgpnyWFJWv8teKNtGCxyr5UewKzlo\" class=\"_108_\" data-ajaxify-href=\"/ajax/ufi.php?count=4150&amp;pc=1&amp;prev&amp;p=1&amp;oldIndex=0&amp;isLoggedoutUFI&amp;ft_ent_identifier=319809989502465&amp;eav=AfYy4rT49RO_pSEMtqP2LLOYNX4WWPBwoIn92t3mMDmvrptkrMVvTxm3cQ5siCJMq1g&amp;av=100004875732895&amp;gfid=AQBaqFPwQXriwT_0LRQ\" data-sigil=\"ajaxify\">\x3Ci class=\"_5msp img sp_2ev2XfYE8iT sx_e6a5ef\">\x3C/i>&nbsp;Xem thêm bình luận…\x3Cdiv class=\"_2so _2sq _2ss img _50cg async_throbber async_saving_visible\" id=\"u_0_1g_7y\" data-animtype=\"1\" data-sigil=\"m-loading-indicator-animate m-loading-indicator-root async-throbber\">\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv id=\"add_comment_link_placeholder\">\x3C/div>\x3C/div>\x3C/div>\x3C/div>"}, 17], ["__markup_7216e2ae_0_4_VR", {__html: "\x3Cdiv>\x3Cdiv class=\"_2ip_ _4b44 async_like\" data-sigil=\"mufi-inline inline-action-bar disable-feed-ufi-triggers\">\x3Cdiv class=\"_7om2 _52we _34qc _3hxn _3myz _4b45\">\x3Cdiv class=\"_4g34\">\x3Ca href=\"/photo.php?fbid=319804989502965&amp;id=100044204000528&amp;set=a.319809939502470&amp;anchor_composer=false\" role=\"button\" data-sigil=\"feed-ufi-trigger\">\x3Cdiv class=\"_rnk _77ke _2eo- _4-09 _1e6 _4b44\" id=\"u_0_3k_tz\" data-sigil=\"reactions-bling-bar\">\x3Cdiv class=\"_1w1k\" data-sigil=\"reactions-sentence-container\">\x3Cspan class=\"_qfz _77kf\">\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:3\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\" role=\"presentation\">\x3Cu>Haha\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:2\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\" role=\"presentation\">\x3Cu>Thích\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:1\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_65dbc1\" role=\"presentation\">\x3Cu>Buồn\x3C/u>\x3C/i>\x3C/div>\x3C/span>\x3Cdiv class=\"_1g06\" aria-label=\"Lan &#x110;&#x1eb7;ng v&#xe0; 38K ng&#x1b0;&#x1edd;i kh&#xe1;c &#x111;&#xe3; b&#xe0;y t&#x1ecf; c&#x1ea3;m x&#xfa;c bao g&#x1ed3;m Haha, Th&#xed;ch v&#xe0; Bu&#x1ed3;n\">Lan Đặng và 38K người khác\x3C/div>\x3C/div>\x3Cdiv class=\"_1fnt\">\x3Cspan class=\"_1j-c\" data-sigil=\"comments-token\">431 bình luận\x3C/span>\x3Cspan class=\"_1j-c\">132 lượt chia sẻ\x3C/span>\x3C/div>\x3C/div>\x3C/a>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cdiv id=\"actor_selector_319804989502965\">\x3Cdiv class=\"_2g0e\" role=\"presentation\">\x3Ci class=\"img _1e_c img _2sxw\" style=\"background-image: url(&#039;https\\3a //scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat\\3d 100\\26 ccb\\3d 1-3\\26 _nc_sid\\3d 9128f4\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d fMRrGcbCThMAX9smDEP\\26 _nc_ht\\3d scontent.fhan3-2.fna\\26 tp\\3d 5\\26 oh\\3d 75d8e23c28796b13cd496a044adc1687\\26 oe\\3d 60D05357&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:20px;height:20px;\" id=\"u_0_3l_Ex\">\x3C/i>\x3Ci class=\"_jvo _3-99 img sp_vuppHZ0nD_0 sx_9c3ad5\">\x3C/i>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_52jh _7om2 _15kk _15ks _15km _4b47 _4b46\" data-sigil=\"ufi-inline-actions\">\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15ko _77li touchable\" data-store=\"&#123;&quot;reaction&quot;:0,&quot;feedbackTarget&quot;:319804989502965,&quot;kaiOSReactions&quot;:false&#125;\" aria-pressed=\"false\" href=\"/ufi/reaction/?ft_ent_identifier=319804989502965&amp;reaction_type=1&amp;story_render_location=feed_mobile&amp;feedback_source=0&amp;is_sponsored=0&amp;ext=1622168488&amp;hash=AeRXDi4qW8ebUoQhrMg&amp;__tn__=%3E\" role=\"button\" tabindex=\"0\" data-ft=\"&#123;&quot;tn&quot;:&quot;&gt;&quot;&#125;\" id=\"u_0_3m_f7\" data-sigil=\"touchable ufi-inline-like like-reaction-flyout\">Thích\x3C/a>\x3Cdiv class=\"_1ekf\" role=\"link\" tabindex=\"-1\" data-sigil=\"screenreader-reactions-trigger\">Hiển thị thêm cảm xúc\x3C/div>\x3C/div>\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15kq _77li _l-a\" data-click=\"&#123;&quot;event&quot;:&quot;click_comment_ufi&quot;,&quot;target_id&quot;:319804989502965&#125;\" href=\"/photo.php?fbid=319804989502965&amp;id=100044204000528&amp;set=a.319809939502470&amp;fs=0&amp;focus_composer=0&amp;__tn__=S\" data-ft=\"&#123;&quot;tn&quot;:&quot;S&quot;&#125;\" data-sigil=\"feed-ufi-focus feed-ufi-trigger ufiCommentLink mufi-composer-focus\">Bình luận\x3C/a>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_59e9 _1-ut _2a_g async_composer\" id=\"ufi_319804989502965\">\x3Cdiv class=\"_45kb ufi\" data-sigil=\"m-ufi\">\x3Cdiv class=\"_ohf\" id=\"add_comment_switcher_placeholder\">\x3C/div>\x3Cdiv class=\"_43lx _55wr\">\x3Ca href=\"/browse/shares?id=319804989502965\">\x3Cspan data-sigil=\"feed-ufi-sharers\">132 lượt chia sẻ\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_uwt _45kb _3ioy\" id=\"u_0_3n_Li\" data-sigil=\"m-photo-composer m-noninline-composer\">\x3Cdiv class=\"_55wr _10pt _3eqx post_placeholder\" id=\"post_placeholder-319804989502965\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3Cdiv class=\"_5ru3 _3tl8 _2pid composerClosed\" data-store=\"&#123;&quot;auto_collapse&quot;:true,&quot;disable_auto_scroll&quot;:false&#125;\" id=\"composer-319804989502965\" data-sigil=\"m-composer\">\x3Cform method=\"post\" action=\"/a/comment.php?fs=0&amp;actionsource=13&amp;comment_logging&amp;ft_ent_identifier=319804989502965&amp;eav=Afbk405b5isI3W29jU7qhxEjwwA6ysjpH2OAwgNeSOnmbwzQv7_2Z-usAFWmk8dfu1A&amp;av=100004875732895&amp;gfid=AQA_5_iB5b3Jxx9HOJw\" data-store=\"&#123;&quot;expand_composer&quot;:true&#125;\" id=\"comment_form_100044204000528_319804989502965\" onsubmit=\"return window.MAjaxify&amp;&amp;MAjaxify.form(event,this,&quot;async_composer&quot;,&quot;cache&quot;,null,false,undefined,&quot;ufi-comment&quot;);\">\x3Cinput type=\"hidden\" name=\"fb_dtsg\" value=\"AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"jazoest\" value=\"22371\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"snowflake\" value=\"1\" />\x3Cdiv class=\"_7om2 _2pin _2pi8 _55nh\">\x3Cdiv class=\"_5s61 _55nj _2pih\" id=\"u_0_3o_31\">\x3Cdiv class=\"_5ecn _1n29 _2fv6\">\x3Ci class=\"img sp_2ev2XfYE8iT sx_fdc690\">\x3C/i>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61 _2pih\">\x3Cdiv class=\"_51s9 _3_5r\" id=\"u_0_3p_ah\">\x3Ca class=\"_5ecn\" rel=\"ignore\" role=\"button\" aria-label=\"Th&#xea;m &#x1ea3;nh\" data-sigil=\"touchable\">\x3Cdiv class=\"_5aqx\">\x3C/div>\x3Cdiv class=\"_51sa\">\x3Cinput type=\"file\" class=\"_51sb\" name=\"photo\" id=\"u_0_1a_rv\" accept=\"image/*, image/heif, image/heic\" data-sigil=\"m-raw-file-input\" />\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv class=\"_4g34 _uww\">\x3Cdiv id=\"u_0_3q_Ks\">\x3Ctextarea class=\"_1svy _uwx\" id=\"composerInput-319804989502965\" name=\"comment_text\" placeholder=\"Vi&#x1ebf;t b&#xec;nh lu&#x1ead;n...\" rows=\"3\" data-sigil=\"m-textarea-input textarea mufi-composer\">\x3C/textarea>\x3C/div>\x3Cdiv>\x3Cdiv class=\"_5aqz\" id=\"u_0_1b_22\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cbutton type=\"submit\" value=\"&#x110;&#x103;ng\" class=\"_54k8 _52jg _56bs _26vk _3lmf _3fyi _56bt\" aria-label=\"&#x110;&#x103;ng\" disabled=\"1\" name=\"submit\" data-sigil=\"touchable composer-submit\">\x3Cspan class=\"_55sr\">Đăng\x3C/span>\x3C/button>\x3C/div>\x3C/div>\x3Cdiv id=\"u_0_3r_J7\">\x3C/div>\x3Cinput type=\"hidden\" name=\"privacy_value\" value=\"0\" data-sigil=\"m-comment-privacy\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_session_id\" data-sigil=\"m-comment-conversation-guide-session-id\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_shown\" value=\"none\" data-sigil=\"m-comment-conversation-guide-shown\" />\x3C/form>\x3C/div>\x3C/div>\x3Cdiv class=\"_333v _45kb\">\x3Cdiv class=\"_2a_i\" data-store=\"&#123;&quot;token&quot;:&quot;319804989502965_319816762835121&quot;&#125;\" id=\"319816762835121\" data-uniqueid=\"319816762835121\" data-gt=\"&#123;&quot;tn&quot;:&quot;R&quot;&#125;\" data-sigil=\"comment\">\x3Cdiv class=\"_2a_j\" data-sigil=\"feed_story_ring100004177362652\">\x3Cdiv class=\"_2b00\">\x3Ca class=\"_4kk6\" href=\"/kimyen.le.370?fref=nf&amp;rc=p&amp;__tn__=R\">\x3Ci class=\"img _1-yc profpic\" aria-label=\"Kim Y&#x1ebf;n, profile picture\" role=\"img\" style=\"background:#d8dce6 url(&#039;https\\3a //scontent-hkt1-2.xx.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p40x40/189613097_1934369166712310_1996611118783482622_n.jpg?_nc_cat\\3d 103\\26 ccb\\3d 1-3\\26 _nc_sid\\3d dbb9e7\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d KwJ_eqqkbPYAX_sLfeB\\26 _nc_ht\\3d scontent-hkt1-2.xx\\26 tp\\3d 3\\26 oh\\3d 3e35f6da9a4b5281d219dc0418e171cc\\26 oe\\3d 60D0A112&#039;) no-repeat center;background-size:100% 100%;-webkit-background-size:100% 100%;width:36px;height:36px;\">\x3C/i>\x3C/a>\x3Cdiv class=\"_2b03\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_2b04\">\x3Cdiv class=\"_14v5\">\x3Cdiv class=\"_2b06\">\x3Cdiv class=\"_2b05\">\x3Ca class=\"_4kk6\" href=\"/kimyen.le.370?fref=nf&amp;rc=p&amp;__tn__=R\">Kim Yến\x3C/a>\x3C/div>\x3Cdiv data-commentid=\"319804989502965_319816762835121\" data-sigil=\"comment-body\">Đm làm nhớ hồi đó chơi trốn tìm với mấy đứa trong xóm. Đứa đi tìm chết mẹ, mấy đứa đi trốn thì nó đi về nhà ăn cơm tắm rửa xem phim\x3Cspan class=\"_5mfr\">\x3Cspan class=\"_6qdm\" style=\"height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t52/1/16/1f923.png&quot;)\">🤣\x3C/span>\x3C/span>\x3C/div>\x3C/div>\x3Ca class=\"_14v8 _4edm\" href=\"/ufi/reaction/profile/browser/?ft_ent_identifier=319804989502965_319816762835121&amp;av=100004875732895&amp;__tn__=R\" id=\"u_0_3s_Oc\">\x3Cspan class=\"_14v9\">\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_65dbc1\">\x3C/i>\x3C/span>\x3C/span>\x3Cspan class=\"_14va\">2,1K\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_2b08 _4ghu\" data-sigil=\"ufi-inline-comment-actions\">\x3Cabbr class=\"_4ghv _2b0a\">1 tuần trước\x3C/abbr>\x3Ca class=\"touchable _2b0a\" data-store=\"&#123;&quot;feedbackTarget&quot;:&quot;319804989502965_319816762835121&quot;,&quot;isComment&quot;:true,&quot;kaiOSReactions&quot;:false,&quot;reaction&quot;:0&#125;\" href=\"/a/comment.php?parent_redirect_comment_token=319804989502965_319816762835121&amp;reaction_comment_id=319816762835121&amp;viewer_reaction=0&amp;snowflake=1&amp;ft_ent_identifier=319804989502965&amp;eav=AfazTj2QNaamKWfqzpSQsMewjBC_jDU7u3P9dMCQV0NxGnxJHc2EX10hi_KhcWNj6kg&amp;av=100004875732895&amp;gfid=AQCEBV5-mfwDHtJ3Z1Y&amp;fs=0&amp;__tn__=R\" id=\"u_0_3t_2m\" data-sigil=\"touchable like-reaction-flyout\">Thích\x3C/a>\x3Ca href=\"/comment/replies/?ctoken=319804989502965_319816762835121&amp;actor_id=100004875732895&amp;ft_ent_identifier=319804989502965&amp;gfid=AQAY_O0Mo-VYQ_5yI8o&amp;__tn__=R#comment_form_100044204000528_319804989502965_reply_319804989502965_319816762835121\" class=\"_2b0a\" id=\"u_0_3u_Ky\" data-sigil=\"touchable\">Trả lời\x3C/a>\x3Ca class=\"_1l26 _2b0a\" href=\"#\" data-store=\"&#123;&quot;reportIsModalDialog&quot;:true,&quot;hideCommentURI&quot;:&quot;\\/ufi\\/hide\\/?hide_comment_id=319816762835121&amp;hide_comment_fbid=319816762835121&amp;nfx_story_location=unknown&amp;spamDisplayMode=none&amp;ft_ent_identifier=319804989502965&amp;gfid=AQBz0R_AmMMHa3T15A8&quot;,&quot;reportCommentURI&quot;:&quot;\\/trust\\/afro\\/dialog?context=\\u00257B\\u002522session_id\\u002522\\u00253A\\u00252224c346df-a5a1-4bb9-b7d0-5e41591300a7\\u002522\\u00252C\\u002522support_type\\u002522\\u00253A\\u002522chevron\\u002522\\u00252C\\u002522type\\u002522\\u00253A2\\u00252C\\u002522story_location\\u002522\\u00253A\\u002522unknown\\u002522\\u00252C\\u002522entry_point\\u002522\\u00253A\\u002522comment\\u002522\\u00252C\\u002522reportable_ent_token\\u002522\\u00253A\\u002522RW50R2VuZXJpY0NvbW1lbnQ6MzE5ODA0OTg5NTAyOTY1XzMxOTgxNjc2MjgzNTEyMQ\\u00253D\\u00253D\\u002522\\u00257D&amp;gfid=AQB4_Le7zmOi7Uf2TvQ&quot;,&quot;commentID&quot;:319816762835121&#125;\" data-sigil=\"comment-flyout-context comment-metadata\">Xem thêm\x3C/a>\x3C/div>\x3Cdiv class=\"_2a_m\">\x3Cdiv id=\"comment_replies_more_1:319804989502965_319816762835121:1\">\x3Cdiv class=\"_2b1h async_elem\" data-reply-to=\"319804989502965_319816762835121\" data-sigil=\"replies-see-more\">\x3Ca href=\"/comment/replies/?ctoken=319804989502965_319816762835121&amp;count=28&amp;curr&amp;pc=1&amp;isinline&amp;initcomp&amp;ft_ent_identifier=319804989502965&amp;eav=AfZ9B70fsoUVfflu1nQPbSY_cJPWraFnmUa8R5irKqihNNfDMjbUCZfvi6bbBWauKZQ&amp;av=100004875732895&amp;gfid=AQD3fKlFc0qMfZLPliI&amp;__tn__=R\" data-ajaxify-href=\"/comment/replies/?ctoken=319804989502965_319816762835121&amp;count=28&amp;curr&amp;pc=1&amp;isinline&amp;initcomp&amp;ft_ent_identifier=319804989502965&amp;eav=AfZ9B70fsoUVfflu1nQPbSY_cJPWraFnmUa8R5irKqihNNfDMjbUCZfvi6bbBWauKZQ&amp;av=100004875732895&amp;gfid=AQD3fKlFc0qMfZLPliI&amp;__tn__=R\" data-sigil=\"ajaxify\">\x3Cdiv class=\"_2b1j\">\x3Cdiv>\x3Ci class=\"img _1-yc profpic\" aria-label=\"M&#xe3;ii Dubaii, profile picture\" role=\"img\" style=\"background:#d8dce6 url(&#039;https\\3a //scontent-hkt1-2.xx.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p24x24/148934738_890238261772199_5484778033543251273_n.jpg?_nc_cat\\3d 103\\26 ccb\\3d 1-3\\26 _nc_sid\\3d dbb9e7\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d rppC4IcR9xEAX8RLhx6\\26 _nc_ht\\3d scontent-hkt1-2.xx\\26 tp\\3d 3\\26 oh\\3d 002468c4e8791eaeb362db14960b5dda\\26 oe\\3d 60D3B1E5&#039;) no-repeat center;background-size:100% 100%;-webkit-background-size:100% 100%;width:24px;height:24px;\">\x3C/i>\x3C/div>\x3Cdiv class=\"_2b03\">\x3C/div>\x3C/div>\x3Cspan class=\"_4ayj\">Mãii Dubaii\x3C/span> đã trả lời\x3Cspan class=\"_4ayk\"> · 28 phản hồi\x3C/span>\x3Cspan class=\"img _55ym _55yn _55yo _2b0b\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv class=\"_2b1i async_elem\" id=\"comment_replies_inline_composer_placeholder_319804989502965_319816762835121\">\x3Cspan class=\"img _55ym _55yn _55yo _2b0b\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"async_elem\" id=\"see_next_319804989502965\">\x3Ca href=\"/photo.php?fbid=319804989502965&amp;id=100044204000528&amp;set=a.319809939502470&amp;p=1&amp;av=100004875732895&amp;eav=AfZ8aWCiSvgpXsUziWJwwBRDBU-dJSwTgKn5WPAH_4KCIRi9NdQ4N_pcj6Mr8NiZK3E\" class=\"_108_\" data-ajaxify-href=\"/ajax/ufi.php?count=251&amp;pc=1&amp;prev&amp;p=1&amp;oldIndex=0&amp;isLoggedoutUFI&amp;ft_ent_identifier=319804989502965&amp;eav=AfZvVj6LGNp37CmW1O4Ejg_U6VK9o1knnezp8KpD-_O3mCGU505u-DEQPXKFuYTrN4k&amp;av=100004875732895&amp;gfid=AQAHkkAE9u4mwjNbuug\" data-sigil=\"ajaxify\">\x3Ci class=\"_5msp img sp_2ev2XfYE8iT sx_e6a5ef\">\x3C/i>&nbsp;Xem thêm bình luận…\x3Cdiv class=\"_2so _2sq _2ss img _50cg async_throbber async_saving_visible\" id=\"u_0_1i_k5\" data-animtype=\"1\" data-sigil=\"m-loading-indicator-animate m-loading-indicator-root async-throbber\">\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv id=\"add_comment_link_placeholder\">\x3C/div>\x3C/div>\x3C/div>\x3C/div>"}, 16], ["__markup_7216e2ae_0_0_ws", {__html: "\x3Cdiv>\x3Cdiv class=\"_2ip_ _4b44 async_like\" data-sigil=\"mufi-inline inline-action-bar disable-feed-ufi-triggers\">\x3Cdiv class=\"_7om2 _52we _34qc _3hxn _3myz _4b45\">\x3Cdiv class=\"_4g34\">\x3Ca href=\"/photo.php?fbid=319804949502969&amp;id=100044204000528&amp;set=a.319809939502470&amp;anchor_composer=false\" role=\"button\" data-sigil=\"feed-ufi-trigger\">\x3Cdiv class=\"_rnk _77ke _2eo- _4-09 _1e6 _4b44\" id=\"u_0_3v_H+\" data-sigil=\"reactions-bling-bar\">\x3Cdiv class=\"_1w1k\" data-sigil=\"reactions-sentence-container\">\x3Cspan class=\"_qfz _77kf\">\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:3\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\" role=\"presentation\">\x3Cu>Haha\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:2\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\" role=\"presentation\">\x3Cu>Thích\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:1\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_59c92b\" role=\"presentation\">\x3Cu>Yêu thích\x3C/u>\x3C/i>\x3C/div>\x3C/span>\x3Cdiv class=\"_1g06\" aria-label=\"Tr&#x1ea7;n Th&#x1ecb; H&#x1ead;u v&#xe0; 45K ng&#x1b0;&#x1edd;i kh&#xe1;c &#x111;&#xe3; b&#xe0;y t&#x1ecf; c&#x1ea3;m x&#xfa;c bao g&#x1ed3;m Haha, Th&#xed;ch v&#xe0; Y&#xea;u th&#xed;ch\">Trần Thị Hậu và 45K người khác\x3C/div>\x3C/div>\x3Cdiv class=\"_1fnt\">\x3Cspan class=\"_1j-c\" data-sigil=\"comments-token\">445 bình luận\x3C/span>\x3Cspan class=\"_1j-c\">58 lượt chia sẻ\x3C/span>\x3C/div>\x3C/div>\x3C/a>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cdiv id=\"actor_selector_319804949502969\">\x3Cdiv class=\"_2g0e\" role=\"presentation\">\x3Ci class=\"img _1e_c img _2sxw\" style=\"background-image: url(&#039;https\\3a //scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat\\3d 100\\26 ccb\\3d 1-3\\26 _nc_sid\\3d 9128f4\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d fMRrGcbCThMAX9smDEP\\26 _nc_ht\\3d scontent.fhan3-2.fna\\26 tp\\3d 5\\26 oh\\3d 75d8e23c28796b13cd496a044adc1687\\26 oe\\3d 60D05357&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:20px;height:20px;\" id=\"u_0_3w_hy\">\x3C/i>\x3Ci class=\"_jvo _3-99 img sp_vuppHZ0nD_0 sx_9c3ad5\">\x3C/i>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_52jh _7om2 _15kk _15ks _15km _4b47 _4b46\" data-sigil=\"ufi-inline-actions\">\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15ko _77li touchable\" data-store=\"&#123;&quot;reaction&quot;:0,&quot;feedbackTarget&quot;:319804949502969,&quot;kaiOSReactions&quot;:false&#125;\" aria-pressed=\"false\" href=\"/ufi/reaction/?ft_ent_identifier=319804949502969&amp;reaction_type=1&amp;story_render_location=feed_mobile&amp;feedback_source=0&amp;is_sponsored=0&amp;ext=1622168488&amp;hash=AeQ1FvBToQlp6lyJuHA&amp;__tn__=%3E\" role=\"button\" tabindex=\"0\" data-ft=\"&#123;&quot;tn&quot;:&quot;&gt;&quot;&#125;\" id=\"u_0_3x_3Q\" data-sigil=\"touchable ufi-inline-like like-reaction-flyout\">Thích\x3C/a>\x3Cdiv class=\"_1ekf\" role=\"link\" tabindex=\"-1\" data-sigil=\"screenreader-reactions-trigger\">Hiển thị thêm cảm xúc\x3C/div>\x3C/div>\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15kq _77li _l-a\" data-click=\"&#123;&quot;event&quot;:&quot;click_comment_ufi&quot;,&quot;target_id&quot;:319804949502969&#125;\" href=\"/photo.php?fbid=319804949502969&amp;id=100044204000528&amp;set=a.319809939502470&amp;fs=0&amp;focus_composer=0&amp;__tn__=S\" data-ft=\"&#123;&quot;tn&quot;:&quot;S&quot;&#125;\" data-sigil=\"feed-ufi-focus feed-ufi-trigger ufiCommentLink mufi-composer-focus\">Bình luận\x3C/a>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_59e9 _1-ut _2a_g async_composer\" id=\"ufi_319804949502969\">\x3Cdiv class=\"_45kb ufi\" data-sigil=\"m-ufi\">\x3Cdiv class=\"_ohf\" id=\"add_comment_switcher_placeholder\">\x3C/div>\x3Cdiv class=\"_43lx _55wr\">\x3Ca href=\"/browse/shares?id=319804949502969\">\x3Cspan data-sigil=\"feed-ufi-sharers\">58 lượt chia sẻ\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_uwt _45kb _3ioy\" id=\"u_0_3y_3m\" data-sigil=\"m-photo-composer m-noninline-composer\">\x3Cdiv class=\"_55wr _10pt _3eqx post_placeholder\" id=\"post_placeholder-319804949502969\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3Cdiv class=\"_5ru3 _3tl8 _2pid composerClosed\" data-store=\"&#123;&quot;auto_collapse&quot;:true,&quot;disable_auto_scroll&quot;:false&#125;\" id=\"composer-319804949502969\" data-sigil=\"m-composer\">\x3Cform method=\"post\" action=\"/a/comment.php?fs=0&amp;actionsource=13&amp;comment_logging&amp;ft_ent_identifier=319804949502969&amp;eav=Afa0PU_C2beyhDZCAefMySliOBjmOhDa5jm0T1fPhWQKyx208IJ1aCoelw2jwhqkCyA&amp;av=100004875732895&amp;gfid=AQCjDAmQ_zxVPIgEl14\" data-store=\"&#123;&quot;expand_composer&quot;:true&#125;\" id=\"comment_form_100044204000528_319804949502969\" onsubmit=\"return window.MAjaxify&amp;&amp;MAjaxify.form(event,this,&quot;async_composer&quot;,&quot;cache&quot;,null,false,undefined,&quot;ufi-comment&quot;);\">\x3Cinput type=\"hidden\" name=\"fb_dtsg\" value=\"AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"jazoest\" value=\"22371\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"snowflake\" value=\"1\" />\x3Cdiv class=\"_7om2 _2pin _2pi8 _55nh\">\x3Cdiv class=\"_5s61 _55nj _2pih\" id=\"u_0_3z_wf\">\x3Cdiv class=\"_5ecn _1n29 _2fv6\">\x3Ci class=\"img sp_2ev2XfYE8iT sx_fdc690\">\x3C/i>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61 _2pih\">\x3Cdiv class=\"_51s9 _3_5r\" id=\"u_0_40_gl\">\x3Ca class=\"_5ecn\" rel=\"ignore\" role=\"button\" aria-label=\"Th&#xea;m &#x1ea3;nh\" data-sigil=\"touchable\">\x3Cdiv class=\"_5aqx\">\x3C/div>\x3Cdiv class=\"_51sa\">\x3Cinput type=\"file\" class=\"_51sb\" name=\"photo\" id=\"u_0_12_JR\" accept=\"image/*, image/heif, image/heic\" data-sigil=\"m-raw-file-input\" />\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv class=\"_4g34 _uww\">\x3Cdiv id=\"u_0_41_Mf\">\x3Ctextarea class=\"_1svy _uwx\" id=\"composerInput-319804949502969\" name=\"comment_text\" placeholder=\"Vi&#x1ebf;t b&#xec;nh lu&#x1ead;n...\" rows=\"3\" data-sigil=\"m-textarea-input textarea mufi-composer\">\x3C/textarea>\x3C/div>\x3Cdiv>\x3Cdiv class=\"_5aqz\" id=\"u_0_13_ZW\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cbutton type=\"submit\" value=\"&#x110;&#x103;ng\" class=\"_54k8 _52jg _56bs _26vk _3lmf _3fyi _56bt\" aria-label=\"&#x110;&#x103;ng\" disabled=\"1\" name=\"submit\" data-sigil=\"touchable composer-submit\">\x3Cspan class=\"_55sr\">Đăng\x3C/span>\x3C/button>\x3C/div>\x3C/div>\x3Cdiv id=\"u_0_42_iw\">\x3C/div>\x3Cinput type=\"hidden\" name=\"privacy_value\" value=\"0\" data-sigil=\"m-comment-privacy\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_session_id\" data-sigil=\"m-comment-conversation-guide-session-id\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_shown\" value=\"none\" data-sigil=\"m-comment-conversation-guide-shown\" />\x3C/form>\x3C/div>\x3C/div>\x3Cdiv class=\"_333v _45kb\">\x3Cdiv class=\"_2a_i\" data-store=\"&#123;&quot;token&quot;:&quot;319804949502969_319975676152563&quot;&#125;\" id=\"319975676152563\" data-uniqueid=\"319975676152563\" data-gt=\"&#123;&quot;tn&quot;:&quot;R&quot;&#125;\" data-sigil=\"comment\">\x3Cdiv class=\"_2a_j\" data-sigil=\"feed_story_ring105828534555785\">\x3Cdiv class=\"_2b00\">\x3Ca class=\"_4e81\" href=\"/Page-b&#xe1;n-G&#x1ea5;u-B&#xf4;ng-kute-mu&#x1ed1;n-x&#x1ec9;u-nh&#x1b0;ng-kh&#xf4;ng-ai-mua-n&#xea;n-mang-&#x111;i-cmt-d&#x1ea1;o-105828534555785/?rc=p&amp;__tn__=%7ER\" data-gt=\"&#123;&quot;tn&quot;:&quot;~&quot;&#125;\">\x3Ci class=\"img _1-yc profpic\" aria-label=\"Page b&#xe1;n G&#x1ea5;u B&#xf4;ng kute mu&#x1ed1;n x&#x1ec9;u nh&#x1b0;ng kh&#xf4;ng ai mua n&#xea;n mang &#x111;i cmt d&#x1ea1;o, profile picture\" role=\"img\" style=\"background:#d8dce6 url(&#039;https\\3a //scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p40x40/109706738_105829111222394_8302473280954417197_n.jpg?_nc_cat\\3d 109\\26 ccb\\3d 1-3\\26 _nc_sid\\3d dbb9e7\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d DeNn7-UtyWkAX_0VZGy\\26 _nc_ht\\3d scontent.fhan3-1.fna\\26 tp\\3d 3\\26 oh\\3d ad1e5adfd9e68d7e02a63b0c0dbbe1ff\\26 oe\\3d 60D1A852&#039;) no-repeat center;background-size:100% 100%;-webkit-background-size:100% 100%;width:36px;height:36px;\">\x3C/i>\x3C/a>\x3Cdiv class=\"_2b03\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_2b04\">\x3Cdiv class=\"_2b06\">\x3Cdiv class=\"_2b05\">\x3Ca class=\"_4e81\" href=\"/Page-b&#xe1;n-G&#x1ea5;u-B&#xf4;ng-kute-mu&#x1ed1;n-x&#x1ec9;u-nh&#x1b0;ng-kh&#xf4;ng-ai-mua-n&#xea;n-mang-&#x111;i-cmt-d&#x1ea1;o-105828534555785/?rc=p&amp;__tn__=R\">Page bán Gấu Bông kute muốn xỉu nhưng không ai mua nên mang đi cmt dạo\x3C/a>\x3C/div>\x3Cdiv data-commentid=\"319804949502969_319975676152563\" data-sigil=\"comment-body\">Con chó của ông Năm phải hơm&gt;\x3C/div>\x3C/div>\x3Cdiv class=\"_14v5\">\x3Cdiv class=\"_2b1t attachment\">\x3Ca href=\"/105828534555785/photos/p.279080280563942/279080280563942/?type=3&amp;source=47&amp;__tn__=R\" class=\"_39pi _1mh-\">\x3Ci class=\"img _403j img _2sxw\" data-store=\"&#123;&quot;imgsrc&quot;:&quot;https:\\/\\/scontent.fhan3-1.fna.fbcdn.net\\/v\\/t1.6435-0\\/s180x540\\/186489883_279080283897275_7721961085106722053_n.png?_nc_cat=102&amp;ccb=1-3&amp;_nc_sid=1480c5&amp;efg=eyJpIjoidCJ9&amp;_nc_ohc=rAFdlagbj_8AX85BBMq&amp;_nc_ht=scontent.fhan3-1.fna&amp;tp=30&amp;oh=4a8ad34f4bdee4957c398e5ab73cda5e&amp;oe=60D05BBB&quot;&#125;\" style=\"background-image: url(&#039;https\\3a //scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-0/s180x540/186489883_279080283897275_7721961085106722053_n.png?_nc_cat\\3d 102\\26 ccb\\3d 1-3\\26 _nc_sid\\3d 1480c5\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d rAFdlagbj_8AX85BBMq\\26 _nc_ht\\3d scontent.fhan3-1.fna\\26 tp\\3d 30\\26 oh\\3d 4a8ad34f4bdee4957c398e5ab73cda5e\\26 oe\\3d 60D05BBB&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:180px;height:173px;\" aria-label=\"C&#xf3; th&#x1ec3; l&#xe0; tranh bi&#x1ebf;m h&#x1ecd;a v&#x1ec1; v&#x103;n b&#x1ea3;n cho bi&#x1ebf;t &#039;TH&#x1ece;, L&#x1ea4;Y TAO C&#xc2;Y B&#xda;T CH&#xcc;&#039;\" role=\"img\">\x3C/i>\x3C/a>\x3C/div>\x3Ca class=\"_14v8 _4edm\" href=\"/ufi/reaction/profile/browser/?ft_ent_identifier=319804949502969_319975676152563&amp;av=100004875732895&amp;__tn__=R\" id=\"u_0_43_8c\">\x3Cspan class=\"_14v9\">\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_65dbc1\">\x3C/i>\x3C/span>\x3C/span>\x3Cspan class=\"_14va\">631\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_2b08 _4ghu\" data-sigil=\"ufi-inline-comment-actions\">\x3Cabbr class=\"_4ghv _2b0a\">1 tuần trước\x3C/abbr>\x3Ca class=\"touchable _2b0a\" data-store=\"&#123;&quot;feedbackTarget&quot;:&quot;319804949502969_319975676152563&quot;,&quot;isComment&quot;:true,&quot;kaiOSReactions&quot;:false,&quot;reaction&quot;:0&#125;\" href=\"/a/comment.php?parent_redirect_comment_token=319804949502969_319975676152563&amp;reaction_comment_id=319975676152563&amp;viewer_reaction=0&amp;snowflake=1&amp;ft_ent_identifier=319804949502969&amp;eav=AfZ44C9vAM2e9QfuctWLLIAkpUDb-EwPxjLntBFri5hZh_DQJ-mKmY_-OqYZFx5Oxkg&amp;av=100004875732895&amp;gfid=AQDOIjr-ZNdLIG2UOpo&amp;fs=0&amp;__tn__=R\" id=\"u_0_44_Ox\" data-sigil=\"touchable like-reaction-flyout\">Thích\x3C/a>\x3Ca href=\"/comment/replies/?ctoken=319804949502969_319975676152563&amp;actor_id=100004875732895&amp;ft_ent_identifier=319804949502969&amp;gfid=AQA6_HswfIH_cty06IQ&amp;__tn__=R#comment_form_100044204000528_319804949502969_reply_319804949502969_319975676152563\" class=\"_2b0a\" id=\"u_0_45_Jo\" data-sigil=\"touchable\">Trả lời\x3C/a>\x3Ca class=\"_1l26 _2b0a\" href=\"#\" data-store=\"&#123;&quot;reportIsModalDialog&quot;:true,&quot;hideCommentURI&quot;:&quot;\\/ufi\\/hide\\/?hide_comment_id=319975676152563&amp;hide_comment_fbid=319975676152563&amp;nfx_story_location=unknown&amp;spamDisplayMode=none&amp;ft_ent_identifier=319804949502969&amp;gfid=AQD5jmAuvUYKRPYWcVE&quot;,&quot;reportCommentURI&quot;:&quot;\\/trust\\/afro\\/dialog?context=\\u00257B\\u002522session_id\\u002522\\u00253A\\u002522338369a8-ce50-4d8a-9ec2-c39df7aba0ee\\u002522\\u00252C\\u002522support_type\\u002522\\u00253A\\u002522chevron\\u002522\\u00252C\\u002522type\\u002522\\u00253A2\\u00252C\\u002522story_location\\u002522\\u00253A\\u002522unknown\\u002522\\u00252C\\u002522entry_point\\u002522\\u00253A\\u002522comment\\u002522\\u00252C\\u002522reportable_ent_token\\u002522\\u00253A\\u002522RW50R2VuZXJpY0NvbW1lbnQ6MzE5ODA0OTQ5NTAyOTY5XzMxOTk3NTY3NjE1MjU2Mw\\u00253D\\u00253D\\u002522\\u00257D&amp;gfid=AQAQMBFmLc9swTEyMQo&quot;,&quot;commentID&quot;:319975676152563&#125;\" data-sigil=\"comment-flyout-context comment-metadata\">Xem thêm\x3C/a>\x3C/div>\x3Cdiv class=\"_2a_m\">\x3Cdiv id=\"comment_replies_more_1:319804949502969_319975676152563:1\">\x3Cdiv class=\"_2b1h async_elem\" data-reply-to=\"319804949502969_319975676152563\" data-sigil=\"replies-see-more\">\x3Ca href=\"/comment/replies/?ctoken=319804949502969_319975676152563&amp;count=4&amp;curr&amp;pc=1&amp;isinline&amp;initcomp&amp;ft_ent_identifier=319804949502969&amp;eav=AfaXGLXu4LR9ZNKufa43pD7BZQCanRrse3T0_M5pxGR6m6L-CpdunfojKbyTpRZh6fI&amp;av=100004875732895&amp;gfid=AQBjQ7rlf2K3qg1PVOo&amp;__tn__=R\" data-ajaxify-href=\"/comment/replies/?ctoken=319804949502969_319975676152563&amp;count=4&amp;curr&amp;pc=1&amp;isinline&amp;initcomp&amp;ft_ent_identifier=319804949502969&amp;eav=AfaXGLXu4LR9ZNKufa43pD7BZQCanRrse3T0_M5pxGR6m6L-CpdunfojKbyTpRZh6fI&amp;av=100004875732895&amp;gfid=AQBjQ7rlf2K3qg1PVOo&amp;__tn__=R\" data-sigil=\"ajaxify\">\x3Cdiv class=\"_2b1j\">\x3Cdiv>\x3Ci class=\"img _1-yc profpic\" aria-label=\"D&#x1b0;&#x1a1;ngHo&#xe0;ng MinhChi&#x1ebf;n, profile picture\" role=\"img\" style=\"background:#d8dce6 url(&#039;https\\3a //scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p24x24/183841014_898432004341827_9035814621032666878_n.jpg?_nc_cat\\3d 106\\26 ccb\\3d 1-3\\26 _nc_sid\\3d dbb9e7\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d eRagjcDGKAIAX979u_S\\26 _nc_ht\\3d scontent.fhan3-1.fna\\26 tp\\3d 3\\26 oh\\3d e3b1807919354496550b5d3c610df3ea\\26 oe\\3d 60D0A2E9&#039;) no-repeat center;background-size:100% 100%;-webkit-background-size:100% 100%;width:24px;height:24px;\">\x3C/i>\x3C/div>\x3Cdiv class=\"_2b03\">\x3C/div>\x3C/div>\x3Cspan class=\"_4ayj\">DươngHoàng Min...\x3C/span> đã trả lời\x3Cspan class=\"_4ayk\"> · 4 phản hồi\x3C/span>\x3Cspan class=\"img _55ym _55yn _55yo _2b0b\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv class=\"_2b1i async_elem\" id=\"comment_replies_inline_composer_placeholder_319804949502969_319975676152563\">\x3Cspan class=\"img _55ym _55yn _55yo _2b0b\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"async_elem\" id=\"see_next_319804949502969\">\x3Ca href=\"/photo.php?fbid=319804949502969&amp;id=100044204000528&amp;set=a.319809939502470&amp;p=1&amp;av=100004875732895&amp;eav=AfY941548JCDEgAjiSIiKnvgeFu9fGtY1971pBjWR6EGzYit93bl2_3tCISR-jDMD1Q\" class=\"_108_\" data-ajaxify-href=\"/ajax/ufi.php?count=338&amp;pc=1&amp;prev&amp;p=1&amp;oldIndex=0&amp;isLoggedoutUFI&amp;ft_ent_identifier=319804949502969&amp;eav=AfZQwM8CRFQvMsAA7JR1O7Pn0PJ_FDyku-34yU5MjW3Wugqd5IXDCmENfm-YYnHdHxc&amp;av=100004875732895&amp;gfid=AQDi2zbZknQVyhg7a-M\" data-sigil=\"ajaxify\">\x3Ci class=\"_5msp img sp_2ev2XfYE8iT sx_e6a5ef\">\x3C/i>&nbsp;Xem thêm bình luận…\x3Cdiv class=\"_2so _2sq _2ss img _50cg async_throbber async_saving_visible\" id=\"u_0_1n_xO\" data-animtype=\"1\" data-sigil=\"m-loading-indicator-animate m-loading-indicator-root async-throbber\">\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv id=\"add_comment_link_placeholder\">\x3C/div>\x3C/div>\x3C/div>\x3C/div>"}, 16], ["__markup_7216e2ae_0_3_NN", {__html: "\x3Cdiv>\x3Cdiv class=\"_2ip_ _4b44 async_like\" data-sigil=\"mufi-inline inline-action-bar disable-feed-ufi-triggers\">\x3Cdiv class=\"_7om2 _52we _34qc _3hxn _3myz _4b45\">\x3Cdiv class=\"_4g34\">\x3Ca href=\"/photo.php?fbid=319804969502967&amp;id=100044204000528&amp;set=a.319809939502470&amp;anchor_composer=false\" role=\"button\" data-sigil=\"feed-ufi-trigger\">\x3Cdiv class=\"_rnk _77ke _2eo- _4-09 _1e6 _4b44\" id=\"u_0_46_af\" data-sigil=\"reactions-bling-bar\">\x3Cdiv class=\"_1w1k\" data-sigil=\"reactions-sentence-container\">\x3Cspan class=\"_qfz _77kf\">\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:3\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\" role=\"presentation\">\x3Cu>Haha\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:2\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\" role=\"presentation\">\x3Cu>Thích\x3C/u>\x3C/i>\x3C/div>\x3Cdiv class=\"_1g05 _77lc\" style=\"z-index:1\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_59c92b\" role=\"presentation\">\x3Cu>Yêu thích\x3C/u>\x3C/i>\x3C/div>\x3C/span>\x3Cdiv class=\"_1g06\" aria-label=\"S&#x1a1;n Kh&#x1b0;&#x1a1;ng v&#xe0; 43K ng&#x1b0;&#x1edd;i kh&#xe1;c &#x111;&#xe3; b&#xe0;y t&#x1ecf; c&#x1ea3;m x&#xfa;c bao g&#x1ed3;m Haha, Th&#xed;ch v&#xe0; Y&#xea;u th&#xed;ch\">Sơn Khương và 43K người khác\x3C/div>\x3C/div>\x3Cdiv class=\"_1fnt\">\x3Cspan class=\"_1j-c\" data-sigil=\"comments-token\">306 bình luận\x3C/span>\x3Cspan class=\"_1j-c\">151 lượt chia sẻ\x3C/span>\x3C/div>\x3C/div>\x3C/a>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cdiv id=\"actor_selector_319804969502967\">\x3Cdiv class=\"_2g0e\" role=\"presentation\">\x3Ci class=\"img _1e_c img _2sxw\" style=\"background-image: url(&#039;https\\3a //scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat\\3d 100\\26 ccb\\3d 1-3\\26 _nc_sid\\3d 9128f4\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d fMRrGcbCThMAX9smDEP\\26 _nc_ht\\3d scontent.fhan3-2.fna\\26 tp\\3d 5\\26 oh\\3d 75d8e23c28796b13cd496a044adc1687\\26 oe\\3d 60D05357&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:20px;height:20px;\" id=\"u_0_47_pa\">\x3C/i>\x3Ci class=\"_jvo _3-99 img sp_vuppHZ0nD_0 sx_9c3ad5\">\x3C/i>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_52jh _7om2 _15kk _15ks _15km _4b47 _4b46\" data-sigil=\"ufi-inline-actions\">\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15ko _77li touchable\" data-store=\"&#123;&quot;reaction&quot;:0,&quot;feedbackTarget&quot;:319804969502967,&quot;kaiOSReactions&quot;:false&#125;\" aria-pressed=\"false\" href=\"/ufi/reaction/?ft_ent_identifier=319804969502967&amp;reaction_type=1&amp;story_render_location=feed_mobile&amp;feedback_source=0&amp;is_sponsored=0&amp;ext=1622168488&amp;hash=AeR8kHaEN6SSYmR7Htg&amp;__tn__=%3E\" role=\"button\" tabindex=\"0\" data-ft=\"&#123;&quot;tn&quot;:&quot;&gt;&quot;&#125;\" id=\"u_0_48_0s\" data-sigil=\"touchable ufi-inline-like like-reaction-flyout\">Thích\x3C/a>\x3Cdiv class=\"_1ekf\" role=\"link\" tabindex=\"-1\" data-sigil=\"screenreader-reactions-trigger\">Hiển thị thêm cảm xúc\x3C/div>\x3C/div>\x3Cdiv class=\"_52jj _15kl _3hwk _4g34\">\x3Ca class=\"_15kq _77li _l-a\" data-click=\"&#123;&quot;event&quot;:&quot;click_comment_ufi&quot;,&quot;target_id&quot;:319804969502967&#125;\" href=\"/photo.php?fbid=319804969502967&amp;id=100044204000528&amp;set=a.319809939502470&amp;fs=0&amp;focus_composer=0&amp;__tn__=S\" data-ft=\"&#123;&quot;tn&quot;:&quot;S&quot;&#125;\" data-sigil=\"feed-ufi-focus feed-ufi-trigger ufiCommentLink mufi-composer-focus\">Bình luận\x3C/a>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_59e9 _1-ut _2a_g async_composer\" id=\"ufi_319804969502967\">\x3Cdiv class=\"_45kb ufi\" data-sigil=\"m-ufi\">\x3Cdiv class=\"_ohf\" id=\"add_comment_switcher_placeholder\">\x3C/div>\x3Cdiv class=\"_43lx _55wr\">\x3Ca href=\"/browse/shares?id=319804969502967\">\x3Cspan data-sigil=\"feed-ufi-sharers\">151 lượt chia sẻ\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_uwt _45kb _3ioy\" id=\"u_0_49_UF\" data-sigil=\"m-photo-composer m-noninline-composer\">\x3Cdiv class=\"_55wr _10pt _3eqx post_placeholder\" id=\"post_placeholder-319804969502967\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3Cdiv class=\"_5ru3 _3tl8 _2pid composerClosed\" data-store=\"&#123;&quot;auto_collapse&quot;:true,&quot;disable_auto_scroll&quot;:false&#125;\" id=\"composer-319804969502967\" data-sigil=\"m-composer\">\x3Cform method=\"post\" action=\"/a/comment.php?fs=0&amp;actionsource=13&amp;comment_logging&amp;ft_ent_identifier=319804969502967&amp;eav=AfbOkPfs_M1un0ewIIGOUfaeCOwnzPHqELG6jqAsrQRCmf6jAe5Q3ldjeBn15dhb_cQ&amp;av=100004875732895&amp;gfid=AQA_6xWo_GMm7Y4Imf0\" data-store=\"&#123;&quot;expand_composer&quot;:true&#125;\" id=\"comment_form_100044204000528_319804969502967\" onsubmit=\"return window.MAjaxify&amp;&amp;MAjaxify.form(event,this,&quot;async_composer&quot;,&quot;cache&quot;,null,false,undefined,&quot;ufi-comment&quot;);\">\x3Cinput type=\"hidden\" name=\"fb_dtsg\" value=\"AQFF7aQ_ec1Ow1I:AQG2F3gBdSt38Dc\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"jazoest\" value=\"22371\" autocomplete=\"off\" />\x3Cinput type=\"hidden\" name=\"snowflake\" value=\"1\" />\x3Cdiv class=\"_7om2 _2pin _2pi8 _55nh\">\x3Cdiv class=\"_5s61 _55nj _2pih\" id=\"u_0_4a_eZ\">\x3Cdiv class=\"_5ecn _1n29 _2fv6\">\x3Ci class=\"img sp_2ev2XfYE8iT sx_fdc690\">\x3C/i>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61 _2pih\">\x3Cdiv class=\"_51s9 _3_5r\" id=\"u_0_4b_Fr\">\x3Ca class=\"_5ecn\" rel=\"ignore\" role=\"button\" aria-label=\"Th&#xea;m &#x1ea3;nh\" data-sigil=\"touchable\">\x3Cdiv class=\"_5aqx\">\x3C/div>\x3Cdiv class=\"_51sa\">\x3Cinput type=\"file\" class=\"_51sb\" name=\"photo\" id=\"u_0_18_gm\" accept=\"image/*, image/heif, image/heic\" data-sigil=\"m-raw-file-input\" />\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv class=\"_4g34 _uww\">\x3Cdiv id=\"u_0_4c_3X\">\x3Ctextarea class=\"_1svy _uwx\" id=\"composerInput-319804969502967\" name=\"comment_text\" placeholder=\"Vi&#x1ebf;t b&#xec;nh lu&#x1ead;n...\" rows=\"3\" data-sigil=\"m-textarea-input textarea mufi-composer\">\x3C/textarea>\x3C/div>\x3Cdiv>\x3Cdiv class=\"_5aqz\" id=\"u_0_19_jb\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_5s61\">\x3Cbutton type=\"submit\" value=\"&#x110;&#x103;ng\" class=\"_54k8 _52jg _56bs _26vk _3lmf _3fyi _56bt\" aria-label=\"&#x110;&#x103;ng\" disabled=\"1\" name=\"submit\" data-sigil=\"touchable composer-submit\">\x3Cspan class=\"_55sr\">Đăng\x3C/span>\x3C/button>\x3C/div>\x3C/div>\x3Cdiv id=\"u_0_4d_FR\">\x3C/div>\x3Cinput type=\"hidden\" name=\"privacy_value\" value=\"0\" data-sigil=\"m-comment-privacy\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_session_id\" data-sigil=\"m-comment-conversation-guide-session-id\" />\x3Cinput type=\"hidden\" name=\"conversation_guide_shown\" value=\"none\" data-sigil=\"m-comment-conversation-guide-shown\" />\x3C/form>\x3C/div>\x3C/div>\x3Cdiv class=\"_333v _45kb\">\x3Cdiv class=\"_2a_i\" data-store=\"&#123;&quot;token&quot;:&quot;319804969502967_319819196168211&quot;&#125;\" id=\"319819196168211\" data-uniqueid=\"319819196168211\" data-gt=\"&#123;&quot;tn&quot;:&quot;R&quot;&#125;\" data-sigil=\"comment\">\x3Cdiv class=\"_2a_j\" data-sigil=\"feed_story_ring1974853802762353\">\x3Cdiv class=\"_2b00\">\x3Ca class=\"_4e81\" href=\"/chamcomics/?rc=p&amp;__tn__=%7ER\" data-gt=\"&#123;&quot;tn&quot;:&quot;~&quot;&#125;\">\x3Ci class=\"img _1-yc profpic\" aria-label=\"Ch&#x1ea5;m Comics, profile picture\" role=\"img\" style=\"background:#d8dce6 url(&#039;https\\3a //scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p40x40/118702948_2790697277844664_5920527799637118322_n.jpg?_nc_cat\\3d 101\\26 ccb\\3d 1-3\\26 _nc_sid\\3d dbb9e7\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d oO0AhOTkAlgAX-Pk072\\26 _nc_ht\\3d scontent.fhan4-1.fna\\26 tp\\3d 3\\26 oh\\3d 4dd15e9d78d10f246dc561f0500648bf\\26 oe\\3d 60D0D595&#039;) no-repeat center;background-size:100% 100%;-webkit-background-size:100% 100%;width:36px;height:36px;\">\x3C/i>\x3C/a>\x3Cdiv class=\"_2b03\">\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"_2b04\">\x3Cdiv class=\"_2b06\">\x3Cdiv class=\"_2b05\">\x3Ca class=\"_4e81\" href=\"/chamcomics/?rc=p&amp;__tn__=R\">Chấm Comics\x3C/a>\x3C/div>\x3Cdiv data-commentid=\"319804969502967_319819196168211\" data-sigil=\"comment-body\">Dạ, anh khum cần cảm ơnđou \x3C/div>\x3C/div>\x3Cdiv class=\"_14v5\">\x3Cdiv class=\"_2b1t attachment\">\x3Ca href=\"/chamcomics/photos/p.2997199727194417/2997199727194417/?type=3&amp;source=47&amp;__tn__=R\" class=\"_39pi _1mh-\">\x3Ci class=\"img _403j img _2sxw\" data-store=\"&#123;&quot;imgsrc&quot;:&quot;https:\\/\\/scontent.fhan3-1.fna.fbcdn.net\\/v\\/t1.6435-0\\/cp0\\/e15\\/q65\\/s180x540\\/187280844_2997199730527750_1932302017725454356_n.jpg?_nc_cat=106&amp;ccb=1-3&amp;_nc_sid=1480c5&amp;efg=eyJpIjoidCJ9&amp;_nc_ohc=YjJD8ADdFAMAX8rmjJY&amp;_nc_ht=scontent.fhan3-1.fna&amp;tp=9&amp;oh=77171d8315e69b55c5ab947a7f5c4385&amp;oe=60D0263D&quot;&#125;\" style=\"background-image: url(&#039;https\\3a //scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-0/cp0/e15/q65/s180x540/187280844_2997199730527750_1932302017725454356_n.jpg?_nc_cat\\3d 106\\26 ccb\\3d 1-3\\26 _nc_sid\\3d 1480c5\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d YjJD8ADdFAMAX8rmjJY\\26 _nc_ht\\3d scontent.fhan3-1.fna\\26 tp\\3d 9\\26 oh\\3d 77171d8315e69b55c5ab947a7f5c4385\\26 oe\\3d 60D0263D&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:180px;height:104px;\" aria-label=\"C&#xf3; th&#x1ec3; l&#xe0; h&#xec;nh minh h&#x1ecd;a\" role=\"img\">\x3C/i>\x3C/a>\x3C/div>\x3Ca class=\"_14v8 _4edm\" href=\"/ufi/reaction/profile/browser/?ft_ent_identifier=319804969502967_319819196168211&amp;av=100004875732895&amp;__tn__=R\" id=\"u_0_4e_6X\">\x3Cspan class=\"_14v9\">\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_842492\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_042f0b\">\x3C/i>\x3C/span>\x3Cspan class=\"_4edl\">\x3Ci class=\"img sp_vuppHZ0nD_0 sx_65dbc1\">\x3C/i>\x3C/span>\x3C/span>\x3Cspan class=\"_14va\">5,5K\x3C/span>\x3C/a>\x3C/div>\x3Cdiv class=\"_2b08 _4ghu\" data-sigil=\"ufi-inline-comment-actions\">\x3Cabbr class=\"_4ghv _2b0a\">1 tuần trước\x3C/abbr>\x3Ca class=\"touchable _2b0a\" data-store=\"&#123;&quot;feedbackTarget&quot;:&quot;319804969502967_319819196168211&quot;,&quot;isComment&quot;:true,&quot;kaiOSReactions&quot;:false,&quot;reaction&quot;:0&#125;\" href=\"/a/comment.php?parent_redirect_comment_token=319804969502967_319819196168211&amp;reaction_comment_id=319819196168211&amp;viewer_reaction=0&amp;snowflake=1&amp;ft_ent_identifier=319804969502967&amp;eav=AfYxqu5AlB8oy36VAnVeMrHJXH8QwfBm4JuC0J9TUfjuCRSHglg-_XhoLItaZ4ceM0c&amp;av=100004875732895&amp;gfid=AQCJYjMDR5-oNSiO-6w&amp;fs=0&amp;__tn__=R\" id=\"u_0_4f_lm\" data-sigil=\"touchable like-reaction-flyout\">Thích\x3C/a>\x3Ca href=\"/comment/replies/?ctoken=319804969502967_319819196168211&amp;actor_id=100004875732895&amp;ft_ent_identifier=319804969502967&amp;gfid=AQC6YPkDi5bu_YiedKE&amp;__tn__=R#comment_form_100044204000528_319804969502967_reply_319804969502967_319819196168211\" class=\"_2b0a\" id=\"u_0_4g_fF\" data-sigil=\"touchable\">Trả lời\x3C/a>\x3Ca class=\"_1l26 _2b0a\" href=\"#\" data-store=\"&#123;&quot;reportIsModalDialog&quot;:true,&quot;hideCommentURI&quot;:&quot;\\/ufi\\/hide\\/?hide_comment_id=319819196168211&amp;hide_comment_fbid=319819196168211&amp;nfx_story_location=unknown&amp;spamDisplayMode=none&amp;ft_ent_identifier=319804969502967&amp;gfid=AQBkiIsvp_I6Jjw5W_E&quot;,&quot;reportCommentURI&quot;:&quot;\\/trust\\/afro\\/dialog?context=\\u00257B\\u002522session_id\\u002522\\u00253A\\u002522e90470ec-b7ed-4f03-a65d-7bb775c6bc7e\\u002522\\u00252C\\u002522support_type\\u002522\\u00253A\\u002522chevron\\u002522\\u00252C\\u002522type\\u002522\\u00253A2\\u00252C\\u002522story_location\\u002522\\u00253A\\u002522unknown\\u002522\\u00252C\\u002522entry_point\\u002522\\u00253A\\u002522comment\\u002522\\u00252C\\u002522reportable_ent_token\\u002522\\u00253A\\u002522RW50R2VuZXJpY0NvbW1lbnQ6MzE5ODA0OTY5NTAyOTY3XzMxOTgxOTE5NjE2ODIxMQ\\u00253D\\u00253D\\u002522\\u00257D&amp;gfid=AQDZ8XtmZd1BQRYro-k&quot;,&quot;commentID&quot;:319819196168211&#125;\" data-sigil=\"comment-flyout-context comment-metadata\">Xem thêm\x3C/a>\x3C/div>\x3Cdiv class=\"_2a_m\">\x3Cdiv id=\"comment_replies_more_1:319804969502967_319819196168211:1\">\x3Cdiv class=\"_2b1h async_elem\" data-reply-to=\"319804969502967_319819196168211\" data-sigil=\"replies-see-more\">\x3Ca href=\"/comment/replies/?ctoken=319804969502967_319819196168211&amp;count=60&amp;curr&amp;pc=1&amp;isinline&amp;initcomp&amp;ft_ent_identifier=319804969502967&amp;eav=AfZ6VAqnegbDppJzGah1Fdapo-9g8-Ph2kYhYXfS4qeQL28IUXno3jN95OtsCbGwFrY&amp;av=100004875732895&amp;gfid=AQD24mRbvl11LbQHIpM&amp;__tn__=R\" data-ajaxify-href=\"/comment/replies/?ctoken=319804969502967_319819196168211&amp;count=60&amp;curr&amp;pc=1&amp;isinline&amp;initcomp&amp;ft_ent_identifier=319804969502967&amp;eav=AfZ6VAqnegbDppJzGah1Fdapo-9g8-Ph2kYhYXfS4qeQL28IUXno3jN95OtsCbGwFrY&amp;av=100004875732895&amp;gfid=AQD24mRbvl11LbQHIpM&amp;__tn__=R\" data-sigil=\"ajaxify\">\x3Cdiv class=\"_2b1j\">\x3Cdiv>\x3Ci class=\"img _1-yc profpic\" aria-label=\"L&#x1ea1;i Ho&#xe0;ng L&#xea;, profile picture\" role=\"img\" style=\"background:#d8dce6 url(&#039;https\\3a //scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p24x24/154682111_3807469459368025_2573072070510427300_n.jpg?_nc_cat\\3d 108\\26 ccb\\3d 1-3\\26 _nc_sid\\3d dbb9e7\\26 efg\\3d eyJpIjoidCJ9\\26 _nc_ohc\\3d aGkTQz0DYZAAX9AX1w3\\26 _nc_ht\\3d scontent.fhan4-1.fna\\26 tp\\3d 3\\26 oh\\3d 36a81021af4e22c540b78a374d1ea83f\\26 oe\\3d 60D2FA6D&#039;) no-repeat center;background-size:100% 100%;-webkit-background-size:100% 100%;width:24px;height:24px;\">\x3C/i>\x3C/div>\x3Cdiv class=\"_2b03\">\x3C/div>\x3C/div>\x3Cspan class=\"_4ayj\">Lại Hoàng Lê\x3C/span> đã trả lời\x3Cspan class=\"_4ayk\"> · 60 phản hồi\x3C/span>\x3Cspan class=\"img _55ym _55yn _55yo _2b0b\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv class=\"_2b1i async_elem\" id=\"comment_replies_inline_composer_placeholder_319804969502967_319819196168211\">\x3Cspan class=\"img _55ym _55yn _55yo _2b0b\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>\x3C/div>\x3C/div>\x3C/div>\x3Cdiv class=\"async_elem\" id=\"see_next_319804969502967\">\x3Ca href=\"/photo.php?fbid=319804969502967&amp;id=100044204000528&amp;set=a.319809939502470&amp;p=1&amp;av=100004875732895&amp;eav=AfbiKjcw7Aa5DeOmM6vWOACwiqfHUodQW_-cS6YJ_OMcgbhcQmY0Z_p0SyyqMwUJkLc\" class=\"_108_\" data-ajaxify-href=\"/ajax/ufi.php?count=178&amp;pc=1&amp;prev&amp;p=1&amp;oldIndex=0&amp;isLoggedoutUFI&amp;ft_ent_identifier=319804969502967&amp;eav=AfZWaZdOuJCLNafy8Eszdbq8xQ4nzuLXVv-nKPiBrKCI1utqooLJk9qUqcbhi7TMPBs&amp;av=100004875732895&amp;gfid=AQBQUzfbKO3tjAxOc8g\" data-sigil=\"ajaxify\">\x3Ci class=\"_5msp img sp_2ev2XfYE8iT sx_e6a5ef\">\x3C/i>&nbsp;Xem thêm bình luận…\x3Cdiv class=\"_2so _2sq _2ss img _50cg async_throbber async_saving_visible\" id=\"u_0_1o_Zf\" data-animtype=\"1\" data-sigil=\"m-loading-indicator-animate m-loading-indicator-root async-throbber\">\x3C/div>\x3C/a>\x3C/div>\x3C/div>\x3Cdiv id=\"add_comment_link_placeholder\">\x3C/div>\x3C/div>\x3C/div>\x3C/div>"}, 16], ["__markup_a588f507_0_1_Z2", {__html: "\x3Cdiv class=\"_ru1\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>"}, 1], ["__markup_a588f507_0_2_hM", {__html: "\x3Cdiv class=\"_ru1\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>"}, 1], ["__markup_a588f507_0_3_/Z", {__html: "\x3Cdiv class=\"_ru1\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>"}, 1], ["__markup_a588f507_0_4_VZ", {__html: "\x3Cdiv class=\"_ru1\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>"}, 1], ["__markup_a588f507_0_5_n0", {__html: "\x3Cdiv class=\"_ru1\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>"}, 1], ["__markup_a588f507_0_6_/x", {__html: "\x3Cdiv class=\"_ru1\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>"}, 1], ["__markup_a588f507_0_7_/j", {__html: "\x3Cdiv class=\"_ru1\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>"}, 1], ["__markup_a588f507_0_8_uv", {__html: "\x3Cdiv class=\"_ru1\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>"}, 1], ["__markup_a588f507_0_9_p6", {__html: "\x3Cdiv class=\"_ru1\">\x3Cspan class=\"img _55ym _55yq _55yo\" role=\"progressbar\" aria-valuetext=\"&#x110;ang t&#x1ea3;i...\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-busy=\"true\">\x3C/span>\x3C/div>"}, 1]],
                elements: [["__elem_27a95b4e_0_0_uT", "u_0_0_RZ", 1], ["__elem_284feb50_0_0_y3", "header", 2], ["__elem_137952b5_0_0_IK", "u_0_4_Cq", 1], ["__elem_e980dec4_0_0_MC", "u_0_5_yA", 1], ["__elem_556710d0_0_0_o7", "search_jewel", 1], ["__elem_1965d86a_0_0_V4", "u_0_1_Yt", 1], ["__elem_e980dec4_0_7_uU", "u_0_6_qK", 1], ["__elem_556710d0_0_1_Ma", "feed_jewel", 1], ["__elem_e980dec4_0_1_q5", "u_0_7_yu", 1], ["__elem_e980dec4_0_6_FH", "u_0_8_Yh", 1], ["__elem_556710d0_0_2_nw", "marketplace_jewel", 1], ["__elem_e980dec4_0_2_Cn", "u_0_9_Cq", 1], ["__elem_a9cb9b98_0_0_yc", "videos_tab_jewel", 1], ["__elem_e980dec4_0_3_+4", "u_0_a_tA", 1], ["__elem_e980dec4_0_5_DJ", "u_0_b_x+", 1], ["__elem_556710d0_0_3_5B", "bookmarks_jewel", 1], ["__elem_e980dec4_0_4_QC", "u_0_c_Lq", 1], ["__elem_1965d86a_0_1_ji", "bookmarks_flyout", 1], ["__elem_ad2bcfb1_0_0_Pp", "MBackNavBar", 1], ["__elem_1acd3027_0_0_ti", "u_0_d_8b", 1], ["__elem_49f6b607_0_0_oo", "root", 1], ["__elem_a32d506f_0_2_Z4", "u_0_e_Rd", 1], ["__elem_a32d506f_0_3_BF", "u_0_f_EZ", 1], ["__elem_a32d506f_0_0_Rm", "u_0_g_jI", 1], ["__elem_a32d506f_0_1_u8", "u_0_h_zF", 1], ["__elem_eed16c0a_0_0_bs", "u_0_i_jZ", 1], ["__elem_a588f507_0_0_Pb", "u_0_j_8p", 1], ["__elem_a588f507_0_1_d7", "u_0_k_QS", 1], ["__elem_0cdc66ad_0_0_gw", "u_0_m_cZ", 1], ["__elem_0cdc66ad_0_1_N1", "u_0_n_eY", 1], ["__elem_7216e2ae_0_p_3u", "u_0_1p_75", 1, "__markup_7216e2ae_0_5_ET"], ["__elem_a588f507_0_9_C1", "actor_selector_319805066169624", 1, "__markup_7216e2ae_0_5_ET"], ["__elem_ad31d0c7_0_7_dM", "u_0_1q_Iz", 1, "__markup_7216e2ae_0_5_ET"], ["__elem_3e7e4274_0_7_29", "u_0_1r_Mm", 2, "__markup_7216e2ae_0_5_ET"], ["__elem_a9de87cf_0_7_2+", "u_0_1s_4m", 1, "__markup_7216e2ae_0_5_ET"], ["__elem_242e8bd2_0_7_Br", "comment_form_100044204000528_319805066169624", 2, "__markup_7216e2ae_0_5_ET"], ["__elem_8aa73451_0_7_hM", "u_0_1t_oQ", 1, "__markup_7216e2ae_0_5_ET"], ["__elem_fbbbeee8_0_7_gN", "u_0_1u_sg", 1, "__markup_7216e2ae_0_5_ET"], ["__elem_7216e2ae_0_f_Qs", "u_0_1v_ZY", 1, "__markup_7216e2ae_0_5_ET"], ["__elem_8f1ce391_0_7_7f", "u_0_1d_Hp", 1, "__markup_7216e2ae_0_5_ET"], ["__elem_7216e2ae_0_e_oR", "u_0_1w_Ue", 1, "__markup_7216e2ae_0_5_ET"], ["__elem_a53d786a_0_1_Af", "319977476152383", 1, "__markup_7216e2ae_0_5_ET"], ["__elem_1acd3027_0_1_8d", "u_0_1x_YK", 1, "__markup_7216e2ae_0_5_ET"], ["__elem_3e7e4274_0_9_q2", "u_0_1y_N6", 2, "__markup_7216e2ae_0_5_ET"], ["__elem_1acd3027_0_d_D9", "u_0_1z_vt", 1, "__markup_7216e2ae_0_5_ET"], ["__elem_7216e2ae_0_j_bp", "u_0_20_uR", 1, "__markup_7216e2ae_0_6_kf"], ["__elem_a588f507_0_3_Nh", "actor_selector_319805122836285", 1, "__markup_7216e2ae_0_6_kf"], ["__elem_ad31d0c7_0_1_Zi", "u_0_21_Fb", 1, "__markup_7216e2ae_0_6_kf"], ["__elem_3e7e4274_0_1_9+", "u_0_22_m6", 2, "__markup_7216e2ae_0_6_kf"], ["__elem_a9de87cf_0_8_qM", "u_0_23_xH", 1, "__markup_7216e2ae_0_6_kf"], ["__elem_242e8bd2_0_8_1E", "comment_form_100044204000528_319805122836285", 2, "__markup_7216e2ae_0_6_kf"], ["__elem_8aa73451_0_8_pC", "u_0_24_j2", 1, "__markup_7216e2ae_0_6_kf"], ["__elem_fbbbeee8_0_8_hd", "u_0_25_nP", 1, "__markup_7216e2ae_0_6_kf"], ["__elem_7216e2ae_0_h_iU", "u_0_26_wD", 1, "__markup_7216e2ae_0_6_kf"], ["__elem_8f1ce391_0_8_gk", "u_0_1f_bE", 1, "__markup_7216e2ae_0_6_kf"], ["__elem_7216e2ae_0_g_B1", "u_0_27_AO", 1, "__markup_7216e2ae_0_6_kf"], ["__elem_a53d786a_0_3_c3", "319978569485607", 1, "__markup_7216e2ae_0_6_kf"], ["__elem_1acd3027_0_7_jG", "u_0_28_08", 1, "__markup_7216e2ae_0_6_kf"], ["__elem_3e7e4274_0_b_MF", "u_0_29_To", 2, "__markup_7216e2ae_0_6_kf"], ["__elem_1acd3027_0_c_mW", "u_0_2a_hn", 1, "__markup_7216e2ae_0_6_kf"], ["__elem_7216e2ae_0_o_mq", "u_0_2b_yT", 1, "__markup_7216e2ae_0_2_X7"], ["__elem_a588f507_0_8_qg", "actor_selector_319805139502950", 1, "__markup_7216e2ae_0_2_X7"], ["__elem_ad31d0c7_0_6_k1", "u_0_2c_Ja", 1, "__markup_7216e2ae_0_2_X7"], ["__elem_3e7e4274_0_6_fB", "u_0_2d_lJ", 2, "__markup_7216e2ae_0_2_X7"], ["__elem_a9de87cf_0_4_Oc", "u_0_2e_J7", 1, "__markup_7216e2ae_0_2_X7"], ["__elem_242e8bd2_0_4_Ru", "comment_form_100044204000528_319805139502950", 2, "__markup_7216e2ae_0_2_X7"], ["__elem_8aa73451_0_4_hS", "u_0_2f_ht", 1, "__markup_7216e2ae_0_2_X7"], ["__elem_fbbbeee8_0_4_Qn", "u_0_2g_K4", 1, "__markup_7216e2ae_0_2_X7"], ["__elem_7216e2ae_0_9_zj", "u_0_2h_nV", 1, "__markup_7216e2ae_0_2_X7"], ["__elem_8f1ce391_0_4_m3", "u_0_17_+U", 1, "__markup_7216e2ae_0_2_X7"], ["__elem_7216e2ae_0_8_TD", "u_0_2i_8X", 1, "__markup_7216e2ae_0_2_X7"], ["__elem_a53d786a_0_5_sq", "319976252819172", 1, "__markup_7216e2ae_0_2_X7"], ["__elem_1acd3027_0_5_We", "u_0_2j_j/", 1, "__markup_7216e2ae_0_2_X7"], ["__elem_3e7e4274_0_d_Lg", "u_0_2k_Yy", 2, "__markup_7216e2ae_0_2_X7"], ["__elem_1acd3027_0_g_7S", "u_0_2l_Qy", 1, "__markup_7216e2ae_0_2_X7"], ["__elem_7216e2ae_0_i_hp", "u_0_2m_WP", 1, "__markup_7216e2ae_0_7_Ti"], ["__elem_a588f507_0_2_hD", "actor_selector_319804912836306", 1, "__markup_7216e2ae_0_7_Ti"], ["__elem_ad31d0c7_0_0_b4", "u_0_2n_n8", 1, "__markup_7216e2ae_0_7_Ti"], ["__elem_3e7e4274_0_0_Je", "u_0_2o_6o", 2, "__markup_7216e2ae_0_7_Ti"], ["__elem_a9de87cf_0_0_p9", "u_0_2p_fA", 1, "__markup_7216e2ae_0_7_Ti"], ["__elem_242e8bd2_0_0_B2", "comment_form_100044204000528_319804912836306", 2, "__markup_7216e2ae_0_7_Ti"], ["__elem_8aa73451_0_0_tY", "u_0_2q_vM", 1, "__markup_7216e2ae_0_7_Ti"], ["__elem_fbbbeee8_0_0_h5", "u_0_2r_M2", 1, "__markup_7216e2ae_0_7_Ti"], ["__elem_7216e2ae_0_1_Aa", "u_0_2s_D/", 1, "__markup_7216e2ae_0_7_Ti"], ["__elem_8f1ce391_0_0_jK", "u_0_z_s2", 1, "__markup_7216e2ae_0_7_Ti"], ["__elem_7216e2ae_0_0_AV", "u_0_2t_pS", 1, "__markup_7216e2ae_0_7_Ti"], ["__elem_a53d786a_0_4_sv", "319979342818863", 1, "__markup_7216e2ae_0_7_Ti"], ["__elem_1acd3027_0_4_Es", "u_0_2u_oP", 1, "__markup_7216e2ae_0_7_Ti"], ["__elem_3e7e4274_0_e_/H", "u_0_2v_Ou", 2, "__markup_7216e2ae_0_7_Ti"], ["__elem_1acd3027_0_f_TM", "u_0_2w_8W", 1, "__markup_7216e2ae_0_7_Ti"], ["__elem_7216e2ae_0_k_rW", "u_0_2x_aE", 1, "__markup_7216e2ae_0_1_2I"], ["__elem_a588f507_0_4_xk", "actor_selector_319804972836300", 1, "__markup_7216e2ae_0_1_2I"], ["__elem_ad31d0c7_0_2_CC", "u_0_2y_dK", 1, "__markup_7216e2ae_0_1_2I"], ["__elem_3e7e4274_0_2_GB", "u_0_2z_U/", 2, "__markup_7216e2ae_0_1_2I"], ["__elem_a9de87cf_0_3_t0", "u_0_30_rX", 1, "__markup_7216e2ae_0_1_2I"], ["__elem_242e8bd2_0_3_6v", "comment_form_100044204000528_319804972836300", 2, "__markup_7216e2ae_0_1_2I"], ["__elem_8aa73451_0_3_36", "u_0_31_co", 1, "__markup_7216e2ae_0_1_2I"], ["__elem_fbbbeee8_0_3_mz", "u_0_32_Ww", 1, "__markup_7216e2ae_0_1_2I"], ["__elem_7216e2ae_0_7_uB", "u_0_33_7Y", 1, "__markup_7216e2ae_0_1_2I"], ["__elem_8f1ce391_0_3_Z6", "u_0_15_wH", 1, "__markup_7216e2ae_0_1_2I"], ["__elem_7216e2ae_0_6_/N", "u_0_34_tq", 1, "__markup_7216e2ae_0_1_2I"], ["__elem_a53d786a_0_6_yB", "319976056152525", 1, "__markup_7216e2ae_0_1_2I"], ["__elem_1acd3027_0_3_qK", "u_0_35_jq", 1, "__markup_7216e2ae_0_1_2I"], ["__elem_3e7e4274_0_f_LM", "u_0_36_J5", 2, "__markup_7216e2ae_0_1_2I"], ["__elem_1acd3027_0_e_KN", "u_0_37_2a", 1, "__markup_7216e2ae_0_1_2I"], ["__elem_7216e2ae_0_q_GI", "u_0_38_e+", 1, "__markup_7216e2ae_0_8_PO"], ["__elem_a588f507_0_a_j9", "actor_selector_319809989502465", 1, "__markup_7216e2ae_0_8_PO"], ["__elem_ad31d0c7_0_8_wk", "u_0_39_1M", 1, "__markup_7216e2ae_0_8_PO"], ["__elem_3e7e4274_0_8_RI", "u_0_3a_16", 2, "__markup_7216e2ae_0_8_PO"], ["__elem_a9de87cf_0_1_0f", "u_0_3b_vV", 1, "__markup_7216e2ae_0_8_PO"], ["__elem_242e8bd2_0_1_QG", "comment_form_100044204000528_319809989502465", 2, "__markup_7216e2ae_0_8_PO"], ["__elem_8aa73451_0_1_ib", "u_0_3c_mG", 1, "__markup_7216e2ae_0_8_PO"], ["__elem_fbbbeee8_0_1_xn", "u_0_3d_+b", 1, "__markup_7216e2ae_0_8_PO"], ["__elem_7216e2ae_0_3_DT", "u_0_3e_EL", 1, "__markup_7216e2ae_0_8_PO"], ["__elem_8f1ce391_0_1_Zt", "u_0_11_wY", 1, "__markup_7216e2ae_0_8_PO"], ["__elem_7216e2ae_0_2_Wj", "u_0_3f_Yf", 1, "__markup_7216e2ae_0_8_PO"], ["__elem_a53d786a_0_0_Vp", "165696068892257", 1, "__markup_7216e2ae_0_8_PO"], ["__elem_da4ef9a3_0_0_EV", "u_0_3g_dK", 1, "__markup_7216e2ae_0_8_PO"], ["__elem_1acd3027_0_6_uO", "u_0_3h_sX", 1, "__markup_7216e2ae_0_8_PO"], ["__elem_3e7e4274_0_a_Iy", "u_0_3i_GS", 2, "__markup_7216e2ae_0_8_PO"], ["__elem_1acd3027_0_2_EF", "u_0_3j_xh", 1, "__markup_7216e2ae_0_8_PO"], ["__elem_7216e2ae_0_m_vM", "u_0_3k_tz", 1, "__markup_7216e2ae_0_4_VR"], ["__elem_a588f507_0_6_FW", "actor_selector_319804989502965", 1, "__markup_7216e2ae_0_4_VR"], ["__elem_ad31d0c7_0_4_9Z", "u_0_3l_Ex", 1, "__markup_7216e2ae_0_4_VR"], ["__elem_3e7e4274_0_4_0S", "u_0_3m_f7", 2, "__markup_7216e2ae_0_4_VR"], ["__elem_a9de87cf_0_6_JZ", "u_0_3n_Li", 1, "__markup_7216e2ae_0_4_VR"], ["__elem_242e8bd2_0_6_mU", "comment_form_100044204000528_319804989502965", 2, "__markup_7216e2ae_0_4_VR"], ["__elem_8aa73451_0_6_oz", "u_0_3o_31", 1, "__markup_7216e2ae_0_4_VR"], ["__elem_fbbbeee8_0_6_vg", "u_0_3p_ah", 1, "__markup_7216e2ae_0_4_VR"], ["__elem_7216e2ae_0_d_tV", "u_0_3q_Ks", 1, "__markup_7216e2ae_0_4_VR"], ["__elem_8f1ce391_0_6_3W", "u_0_1b_22", 1, "__markup_7216e2ae_0_4_VR"], ["__elem_7216e2ae_0_c_QN", "u_0_3r_J7", 1, "__markup_7216e2ae_0_4_VR"], ["__elem_a53d786a_0_2_z/", "319816762835121", 1, "__markup_7216e2ae_0_4_VR"], ["__elem_1acd3027_0_9_so", "u_0_3s_Oc", 1, "__markup_7216e2ae_0_4_VR"], ["__elem_3e7e4274_0_c_4S", "u_0_3t_2m", 2, "__markup_7216e2ae_0_4_VR"], ["__elem_1acd3027_0_8_Qe", "u_0_3u_Ky", 1, "__markup_7216e2ae_0_4_VR"], ["__elem_7216e2ae_0_l_u2", "u_0_3v_H+", 1, "__markup_7216e2ae_0_0_ws"], ["__elem_a588f507_0_5_Q2", "actor_selector_319804949502969", 1, "__markup_7216e2ae_0_0_ws"], ["__elem_ad31d0c7_0_3_yk", "u_0_3w_hy", 1, "__markup_7216e2ae_0_0_ws"], ["__elem_3e7e4274_0_3_2C", "u_0_3x_3Q", 2, "__markup_7216e2ae_0_0_ws"], ["__elem_a9de87cf_0_2_eL", "u_0_3y_3m", 1, "__markup_7216e2ae_0_0_ws"], ["__elem_242e8bd2_0_2_Ve", "comment_form_100044204000528_319804949502969", 2, "__markup_7216e2ae_0_0_ws"], ["__elem_8aa73451_0_2_Nr", "u_0_3z_wf", 1, "__markup_7216e2ae_0_0_ws"], ["__elem_fbbbeee8_0_2_SN", "u_0_40_gl", 1, "__markup_7216e2ae_0_0_ws"], ["__elem_7216e2ae_0_5_Yb", "u_0_41_Mf", 1, "__markup_7216e2ae_0_0_ws"], ["__elem_8f1ce391_0_2_v5", "u_0_13_ZW", 1, "__markup_7216e2ae_0_0_ws"], ["__elem_7216e2ae_0_4_CB", "u_0_42_iw", 1, "__markup_7216e2ae_0_0_ws"], ["__elem_a53d786a_0_7_wI", "319975676152563", 1, "__markup_7216e2ae_0_0_ws"], ["__elem_1acd3027_0_a_7Z", "u_0_43_8c", 1, "__markup_7216e2ae_0_0_ws"], ["__elem_3e7e4274_0_g_jJ", "u_0_44_Ox", 2, "__markup_7216e2ae_0_0_ws"], ["__elem_1acd3027_0_b_ls", "u_0_45_Jo", 1, "__markup_7216e2ae_0_0_ws"], ["__elem_7216e2ae_0_n_wl", "u_0_46_af", 1, "__markup_7216e2ae_0_3_NN"], ["__elem_a588f507_0_7_iv", "actor_selector_319804969502967", 1, "__markup_7216e2ae_0_3_NN"], ["__elem_ad31d0c7_0_5_M3", "u_0_47_pa", 1, "__markup_7216e2ae_0_3_NN"], ["__elem_3e7e4274_0_5_q2", "u_0_48_0s", 2, "__markup_7216e2ae_0_3_NN"], ["__elem_a9de87cf_0_5_+E", "u_0_49_UF", 1, "__markup_7216e2ae_0_3_NN"], ["__elem_242e8bd2_0_5_PQ", "comment_form_100044204000528_319804969502967", 2, "__markup_7216e2ae_0_3_NN"], ["__elem_8aa73451_0_5_UK", "u_0_4a_eZ", 1, "__markup_7216e2ae_0_3_NN"], ["__elem_fbbbeee8_0_5_uw", "u_0_4b_Fr", 1, "__markup_7216e2ae_0_3_NN"], ["__elem_7216e2ae_0_b_oM", "u_0_4c_3X", 1, "__markup_7216e2ae_0_3_NN"], ["__elem_8f1ce391_0_5_uY", "u_0_19_jb", 1, "__markup_7216e2ae_0_3_NN"], ["__elem_7216e2ae_0_a_1e", "u_0_4d_FR", 1, "__markup_7216e2ae_0_3_NN"], ["__elem_a53d786a_0_8_HH", "319819196168211", 1, "__markup_7216e2ae_0_3_NN"], ["__elem_1acd3027_0_i_YP", "u_0_4e_6X", 1, "__markup_7216e2ae_0_3_NN"], ["__elem_3e7e4274_0_h_6t", "u_0_4f_lm", 2, "__markup_7216e2ae_0_3_NN"], ["__elem_1acd3027_0_h_Dw", "u_0_4g_fF", 1, "__markup_7216e2ae_0_3_NN"]],
                require: [["MPhotoCentralUpdates", "handleUpdate", ["__markup_7216e2ae_0_0_ws", "HTML", "__markup_7216e2ae_0_1_2I", "__markup_7216e2ae_0_2_X7", "__markup_7216e2ae_0_3_NN", "__markup_7216e2ae_0_4_VR", "__markup_7216e2ae_0_5_ET", "__markup_7216e2ae_0_6_kf", "__markup_7216e2ae_0_7_Ti", "MSnowflakePagedQueryCache"], ["mtouch_snowflake_paged_query", {
                    permalink: true,
                    set_id: "pcb.319809989502465",
                    query_token: "bWVkaWFzZXQ6cGNiLjMxOTgwOTk4OTUwMjQ2NQ==",
                    query_results: {
                        "bWVkaWFzZXQ6cGNiLjMxOTgwOTk4OTUwMjQ2NQ==": {
                            created_time: null, media: {
                                count: 13,
                                edges: [{
                                    node: {
                                        id: "319804949502969",
                                        accessibility_caption: "Có thể là hình minh họa về ngoài trời",
                                        created_time: 1621143842,
                                        url: "https://www.facebook.com/photo.php?fbid=319804949502969&id=100044204000528&set=a.319809939502470",
                                        image: {
                                            uri: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-0/cp0/e15/q65/s600x600/185826794_319804952836302_6346988343087845023_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=qx-v5OBhW68AX93_JAW&_nc_ht=scontent.fhan4-1.fna&tp=9&oh=e17622cad39125c33d410e6489e26354&oe=60D2AFCB",
                                            width: 600,
                                            height: 348
                                        },
                                        full_width_image: {
                                            uri: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-9/cp0/e15/q65/p720x720/185826794_319804952836302_6346988343087845023_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=qx-v5OBhW68AX93_JAW&_nc_ht=scontent.fhan4-1.fna&tp=3&oh=df27152579f4ea82a2cc3b61f7d468d6&oe=60D38DB7",
                                            width: 1241,
                                            height: 720
                                        },
                                        cropped_image: {
                                            uri: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-9/cp0/e15/q65/c460.0.580.870a/185826794_319804952836302_6346988343087845023_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=qx-v5OBhW68AX93_JAW&_nc_ht=scontent.fhan4-1.fna&tp=29&oh=db6ae711ad9fababdedc6a5ed58d95a3&oe=60D0C82D",
                                            width: 580,
                                            height: 870
                                        },
                                        blured_image: {
                                            uri: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-0/fb10/cp0/e15/q65/s130x130/185826794_319804952836302_6346988343087845023_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=qx-v5OBhW68AX93_JAW&_nc_ht=scontent.fhan4-1.fna&tp=31&oh=57881abef46e07b99b52c35f69ef5cc1&oe=60D2024E",
                                            width: 130,
                                            height: 75
                                        },
                                        can_viewer_add_tags: false,
                                        can_viewer_untag: false,
                                        can_viewer_report: true,
                                        can_viewer_edit: false,
                                        can_viewer_delete: false,
                                        is_spherical: false,
                                        spherical_renderer_projection_type: null,
                                        is_playable: false,
                                        playable_url: null,
                                        playable_url_hd: null,
                                        owner: {id: "100044204000528"},
                                        message: {
                                            text: "Thỏ Bảy Màu",
                                            image_ranges: [],
                                            ranges: [],
                                            aggregated_ranges: []
                                        },
                                        feedback: {
                                            does_viewer_like: false,
                                            has_viewer_commented_recently: false,
                                            comments: {count: 338},
                                            likers: {count: 15237},
                                            interactors: {
                                                count: 10026,
                                                nodes: [{
                                                    id: "100006560118719",
                                                    name: "Vân Anh Tô"
                                                }, {id: "100064911675211", name: "Lê Thư"}, {
                                                    id: "100002319463140",
                                                    name: "Nguyễn Minh Thư"
                                                }]
                                            }
                                        },
                                        ratio: 1.7241379310345,
                                        ufi: {__m: "__markup_7216e2ae_0_0_ws"},
                                        faceboxes: {},
                                        tags: {}
                                    }, cursor: "319804949502969"
                                }, {
                                    node: {
                                        id: "319804972836300",
                                        accessibility_caption: "Có thể là hình minh họa về một hoặc nhiều người",
                                        created_time: 1621143842,
                                        url: "https://www.facebook.com/photo.php?fbid=319804972836300&id=100044204000528&set=a.319809939502470",
                                        image: {
                                            uri: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-0/cp0/e15/q65/s600x600/185762202_319804982836299_4578119100717855903_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=NM0MLwqackoAX-eGk-b&tn=6uXj2tgms-FrSnEt&_nc_ht=scontent.fhan3-1.fna&tp=9&oh=99857d286849da4bb0c993609ecc0bb7&oe=60D3BE20",
                                            width: 441,
                                            height: 600
                                        },
                                        full_width_image: {
                                            uri: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-9/cp0/e15/q65/p720x720/185762202_319804982836299_4578119100717855903_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=NM0MLwqackoAX-eGk-b&tn=6uXj2tgms-FrSnEt&_nc_ht=scontent.fhan3-1.fna&tp=3&oh=5d0ec78ba4226ee59093f9b595274253&oe=60D330E4",
                                            width: 720,
                                            height: 979
                                        },
                                        cropped_image: {
                                            uri: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-9/cp0/e15/q65/c39.0.765.1146a/p843x403/185762202_319804982836299_4578119100717855903_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=NM0MLwqackoAX-eGk-b&tn=6uXj2tgms-FrSnEt&_nc_ht=scontent.fhan3-1.fna&tp=5&oh=dc346f5842b17219a3f613ed582a2418&oe=60D129A1",
                                            width: 764,
                                            height: 1146
                                        },
                                        blured_image: {
                                            uri: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-0/fb10/cp0/e15/q65/s228x119/185762202_319804982836299_4578119100717855903_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=NM0MLwqackoAX-eGk-b&tn=6uXj2tgms-FrSnEt&_nc_ht=scontent.fhan3-1.fna&tp=31&oh=d1ac434e0e9541b0e71840319dc89e3e&oe=60D356A0",
                                            width: 88,
                                            height: 119
                                        },
                                        can_viewer_add_tags: false,
                                        can_viewer_untag: false,
                                        can_viewer_report: true,
                                        can_viewer_edit: false,
                                        can_viewer_delete: false,
                                        is_spherical: false,
                                        spherical_renderer_projection_type: null,
                                        is_playable: false,
                                        playable_url: null,
                                        playable_url_hd: null,
                                        owner: {id: "100044204000528"},
                                        message: {
                                            text: "Hoàng Việt Dũng (Bin)",
                                            image_ranges: [],
                                            ranges: [],
                                            aggregated_ranges: []
                                        },
                                        feedback: {
                                            does_viewer_like: true,
                                            has_viewer_commented_recently: false,
                                            comments: {count: 305},
                                            likers: {count: 24622},
                                            interactors: {
                                                count: 10024,
                                                nodes: [{
                                                    id: "100038542494115",
                                                    name: "Phan Song Ngân"
                                                }, {id: "100012204904824", name: "Trinh Hà"}, {
                                                    id: "100004875732895",
                                                    name: "Lê Lợi"
                                                }]
                                            }
                                        },
                                        ratio: 0.73532731376975,
                                        ufi: {__m: "__markup_7216e2ae_0_1_2I"},
                                        faceboxes: {},
                                        tags: {}
                                    }, cursor: "319804972836300"
                                }, {
                                    node: {
                                        id: "319805139502950",
                                        accessibility_caption: "Có thể là hình minh họa về 1 người, đang đứng và ngoài trời",
                                        created_time: 1621143842,
                                        url: "https://www.facebook.com/photo.php?fbid=319805139502950&id=100044204000528&set=a.319809939502470",
                                        image: {
                                            uri: "https://scontent-hkt1-1.xx.fbcdn.net/v/t1.6435-0/cp0/e15/q65/s600x600/186264971_319805142836283_1148763819827252952_n.jpg?_nc_cat=111&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=6p6ChRth904AX8WfDRj&_nc_ht=scontent-hkt1-1.xx&tp=9&oh=a8d75a59f9ba7611a2fcd9478781024f&oe=60D2491A",
                                            width: 468,
                                            height: 600
                                        },
                                        full_width_image: {
                                            uri: "https://scontent-hkt1-1.xx.fbcdn.net/v/t1.6435-9/cp0/e15/q65/p720x720/186264971_319805142836283_1148763819827252952_n.jpg?_nc_cat=111&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=6p6ChRth904AX8WfDRj&_nc_ht=scontent-hkt1-1.xx&tp=3&oh=419212faed209a1e56c6e0a61397b500&oe=60D07666",
                                            width: 720,
                                            height: 923
                                        },
                                        cropped_image: {
                                            uri: "https://scontent-hkt1-1.xx.fbcdn.net/v/t1.6435-9/cp0/e15/q65/c35.0.720.1080a/p843x403/186264971_319805142836283_1148763819827252952_n.jpg?_nc_cat=111&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=6p6ChRth904AX8WfDRj&_nc_ht=scontent-hkt1-1.xx&tp=5&oh=87d375ad460188397654fec070d3fcfb&oe=60D2F55C",
                                            width: 720,
                                            height: 1080
                                        },
                                        blured_image: {
                                            uri: "https://scontent-hkt1-1.xx.fbcdn.net/v/t1.6435-0/fb10/cp0/e15/q65/s228x119/186264971_319805142836283_1148763819827252952_n.jpg?_nc_cat=111&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=6p6ChRth904AX8WfDRj&_nc_ht=scontent-hkt1-1.xx&tp=31&oh=091d19f9ae8d2af3d59e4edeb81468dc&oe=60D38B9A",
                                            width: 93,
                                            height: 119
                                        },
                                        can_viewer_add_tags: false,
                                        can_viewer_untag: false,
                                        can_viewer_report: true,
                                        can_viewer_edit: false,
                                        can_viewer_delete: false,
                                        is_spherical: false,
                                        spherical_renderer_projection_type: null,
                                        is_playable: false,
                                        playable_url: null,
                                        playable_url_hd: null,
                                        owner: {id: "100044204000528"},
                                        message: {text: "anbecks", image_ranges: [], ranges: [], aggregated_ranges: []},
                                        feedback: {
                                            does_viewer_like: false,
                                            has_viewer_commented_recently: false,
                                            comments: {count: 240},
                                            likers: {count: 16642},
                                            interactors: {
                                                count: 10022,
                                                nodes: [{
                                                    id: "100050970513222",
                                                    name: "Tuấn Giấu Tên"
                                                }, {id: "100027113437210", name: "Yến Nhy"}, {
                                                    id: "100017327283653",
                                                    name: "Linh Duong"
                                                }]
                                            }
                                        },
                                        ratio: 0.7802734375,
                                        ufi: {__m: "__markup_7216e2ae_0_2_X7"},
                                        faceboxes: {
                                            "309146507380808": {
                                                x: 46.880570409982,
                                                y: 28.922222222222,
                                                left: 39.4462775439,
                                                top: 23.121440972222,
                                                width: 14.868585732165,
                                                height: 11.6015625,
                                                fbid: "309146507380808",
                                                recognitions: []
                                            }
                                        },
                                        tags: {}
                                    }, cursor: "319805139502950"
                                }, {
                                    node: {
                                        id: "319804969502967",
                                        accessibility_caption: "Có thể là tranh biếm họa về đang đứng",
                                        created_time: 1621143842,
                                        url: "https://www.facebook.com/photo.php?fbid=319804969502967&id=100044204000528&set=a.319809939502470",
                                        image: {
                                            uri: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-0/cp0/e15/q65/p480x480/186259692_319804979502966_8669531872903417305_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=c7B0rPcF2WoAX9HPeDs&_nc_ht=scontent.fhan3-1.fna&tp=3&oh=77e0c192680f9db39d80be196653df43&oe=60D31E38",
                                            width: 480,
                                            height: 600
                                        },
                                        full_width_image: {
                                            uri: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-9/cp0/e15/q65/p720x720/186259692_319804979502966_8669531872903417305_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=c7B0rPcF2WoAX9HPeDs&_nc_ht=scontent.fhan3-1.fna&tp=3&oh=1e2906c6fef10f1d94adf83cc7cd8733&oe=60D08133",
                                            width: 720,
                                            height: 900
                                        },
                                        cropped_image: {
                                            uri: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-9/cp0/e15/q65/c80.0.800.1200a/p960x960/186259692_319804979502966_8669531872903417305_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=c7B0rPcF2WoAX9HPeDs&_nc_ht=scontent.fhan3-1.fna&tp=5&oh=88ea8b1d9a5c8820a648f7eec8ebeffd&oe=60D1CC00",
                                            width: 800,
                                            height: 1200
                                        },
                                        blured_image: {
                                            uri: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-0/fb10/cp0/e15/q65/s228x119/186259692_319804979502966_8669531872903417305_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=c7B0rPcF2WoAX9HPeDs&_nc_ht=scontent.fhan3-1.fna&tp=31&oh=6e2400f4dde17e308f58efcb5062c102&oe=60D0804F",
                                            width: 95,
                                            height: 119
                                        },
                                        can_viewer_add_tags: false,
                                        can_viewer_untag: false,
                                        can_viewer_report: true,
                                        can_viewer_edit: false,
                                        can_viewer_delete: false,
                                        is_spherical: false,
                                        spherical_renderer_projection_type: null,
                                        is_playable: false,
                                        playable_url: null,
                                        playable_url_hd: null,
                                        owner: {id: "100044204000528"},
                                        message: {
                                            text: "Chấm Comics",
                                            image_ranges: [],
                                            ranges: [],
                                            aggregated_ranges: []
                                        },
                                        feedback: {
                                            does_viewer_like: false,
                                            has_viewer_commented_recently: false,
                                            comments: {count: 178},
                                            likers: {count: 12553},
                                            interactors: {
                                                count: 10023,
                                                nodes: [{id: "100064911675211", name: "Lê Thư"}, {
                                                    id: "100038542494115",
                                                    name: "Phan Song Ngân"
                                                }, {id: "100012204904824", name: "Trinh Hà"}]
                                            }
                                        },
                                        ratio: 0.79989842559675,
                                        ufi: {__m: "__markup_7216e2ae_0_3_NN"},
                                        faceboxes: {},
                                        tags: {}
                                    }, cursor: "319804969502967"
                                }, {
                                    node: {
                                        id: "319804989502965",
                                        accessibility_caption: "Có thể là hình minh họa về văn bản cho biết 'CHƠI TRỐN TÌM KHÔNG SẺ? MÌNH NHẮM MẮT CÃN SẺ ĐI TRỐN NHÉ! HIHI TRỐN XA VÀO ĐẤY! 5...10...15...20... Pး'",
                                        created_time: 1621143842,
                                        url: "https://www.facebook.com/photo.php?fbid=319804989502965&id=100044204000528&set=a.319809939502470",
                                        image: {
                                            uri: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-0/cp0/e15/q65/p480x480/187106429_319804999502964_923053130724004887_n.jpg?_nc_cat=105&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=auWvC5sxpKsAX8eL4Tq&_nc_oc=AQm3Y940zep3QxUWo-wLPysNoRWLdCWolvOnWWlWilWlmvIng8F0NgkTe9N4ADZZRdM&_nc_ht=scontent.fhan4-1.fna&tp=3&oh=2f5de933967e473d07fd7aa5d15284b6&oe=60D13028",
                                            width: 480,
                                            height: 600
                                        },
                                        full_width_image: {
                                            uri: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-9/cp0/e15/q65/p720x720/187106429_319804999502964_923053130724004887_n.jpg?_nc_cat=105&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=auWvC5sxpKsAX8eL4Tq&_nc_oc=AQm3Y940zep3QxUWo-wLPysNoRWLdCWolvOnWWlWilWlmvIng8F0NgkTe9N4ADZZRdM&_nc_ht=scontent.fhan4-1.fna&tp=3&oh=d83271295f1c89f27e0e98d3759a9b31&oe=60D228D3",
                                            width: 720,
                                            height: 900
                                        },
                                        cropped_image: {
                                            uri: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-9/cp0/e15/q65/c80.0.800.1200a/p960x960/187106429_319804999502964_923053130724004887_n.jpg?_nc_cat=105&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=auWvC5sxpKsAX8eL4Tq&_nc_oc=AQm3Y940zep3QxUWo-wLPysNoRWLdCWolvOnWWlWilWlmvIng8F0NgkTe9N4ADZZRdM&_nc_ht=scontent.fhan4-1.fna&tp=5&oh=68d1bd18771fdebdc1e85acfb5a79fbb&oe=60D3B325",
                                            width: 800,
                                            height: 1200
                                        },
                                        blured_image: {
                                            uri: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-0/fb10/cp0/e15/q65/s228x119/187106429_319804999502964_923053130724004887_n.jpg?_nc_cat=105&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=auWvC5sxpKsAX8eL4Tq&_nc_oc=AQm3Y940zep3QxUWo-wLPysNoRWLdCWolvOnWWlWilWlmvIng8F0NgkTe9N4ADZZRdM&_nc_ht=scontent.fhan4-1.fna&tp=31&oh=16416b5a671d83a7744e0d3ed26e3d67&oe=60D0E389",
                                            width: 95,
                                            height: 119
                                        },
                                        can_viewer_add_tags: false,
                                        can_viewer_untag: false,
                                        can_viewer_report: true,
                                        can_viewer_edit: false,
                                        can_viewer_delete: false,
                                        is_spherical: false,
                                        spherical_renderer_projection_type: null,
                                        is_playable: false,
                                        playable_url: null,
                                        playable_url_hd: null,
                                        owner: {id: "100044204000528"},
                                        message: {
                                            text: "ÉnComics",
                                            image_ranges: [],
                                            ranges: [],
                                            aggregated_ranges: []
                                        },
                                        feedback: {
                                            does_viewer_like: false,
                                            has_viewer_commented_recently: false,
                                            comments: {count: 251},
                                            likers: {count: 11142},
                                            interactors: {
                                                count: 10031,
                                                nodes: [{
                                                    id: "100050970513222",
                                                    name: "Tuấn Giấu Tên"
                                                }, {id: "100064911675211", name: "Lê Thư"}, {
                                                    id: "100005015018545",
                                                    name: "Bích Trâm"
                                                }]
                                            }
                                        },
                                        ratio: 0.7998046875,
                                        ufi: {__m: "__markup_7216e2ae_0_4_VR"},
                                        faceboxes: {},
                                        tags: {}
                                    }, cursor: "319804989502965"
                                }, {
                                    node: {
                                        id: "319805066169624",
                                        accessibility_caption: "Có thể là hình ảnh theo phong cách hoạt hình Nhật Bản về 1 người và văn bản cho biết 'NGỒI MỘT CHá BƠI MỘT CHỖ L이Ờ cuoi.tuoitre.vn LƠ LỬNG MỘT CHỖ ĐỨNG YÊN MỘT CHỐ VÀNG CAMERAMAN 110 RAP XONG KÊU EM RA TẮT MÁY NHÁ ĐI NGỦ CÁI'",
                                        created_time: 1621143842,
                                        url: "https://www.facebook.com/photo.php?fbid=319805066169624&id=100044204000528&set=a.319809939502470",
                                        image: {
                                            uri: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-0/cp0/e15/q65/s600x600/186513693_319805069502957_9060687068691239882_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=Wn4ECx4Vn_8AX8ZlOWm&_nc_ht=scontent.fhan4-1.fna&tp=9&oh=bf91d7c2df38c03c3b0e98a6045f93b0&oe=60D03BD8",
                                            width: 465,
                                            height: 600
                                        },
                                        full_width_image: {
                                            uri: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-9/cp0/e15/q65/p720x720/186513693_319805069502957_9060687068691239882_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=Wn4ECx4Vn_8AX8ZlOWm&_nc_ht=scontent.fhan4-1.fna&tp=3&oh=1110ae8e07d789efdd64b66b44e51261&oe=60D256AC",
                                            width: 720,
                                            height: 928
                                        },
                                        cropped_image: {
                                            uri: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-9/cp0/e15/q65/c0.0.705.1057a/186513693_319805069502957_9060687068691239882_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=Wn4ECx4Vn_8AX8ZlOWm&_nc_ht=scontent.fhan4-1.fna&tp=29&oh=7bfffd62f68ff501d38827a89d69661b&oe=60D2010B",
                                            width: 705,
                                            height: 1057
                                        },
                                        blured_image: {
                                            uri: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-0/fb10/cp0/e15/q65/s168x128/186513693_319805069502957_9060687068691239882_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=Wn4ECx4Vn_8AX8ZlOWm&_nc_ht=scontent.fhan4-1.fna&tp=31&oh=7ee46e0c95530df2cbe9d0dcb484b0d8&oe=60D1EF53",
                                            width: 99,
                                            height: 128
                                        },
                                        can_viewer_add_tags: false,
                                        can_viewer_untag: false,
                                        can_viewer_report: true,
                                        can_viewer_edit: false,
                                        can_viewer_delete: false,
                                        is_spherical: false,
                                        spherical_renderer_projection_type: null,
                                        is_playable: false,
                                        playable_url: null,
                                        playable_url_hd: null,
                                        owner: {id: "100044204000528"},
                                        message: {
                                            text: "Tuổi trẻ cười",
                                            image_ranges: [],
                                            ranges: [],
                                            aggregated_ranges: []
                                        },
                                        feedback: {
                                            does_viewer_like: false,
                                            has_viewer_commented_recently: false,
                                            comments: {count: 597},
                                            likers: {count: 25359},
                                            interactors: {
                                                count: 10025,
                                                nodes: [{id: "100064911675211", name: "Lê Thư"}, {
                                                    id: "100053721323449",
                                                    name: "Trần Bình An"
                                                }, {id: "100004965967536", name: "Ân Vũ"}]
                                            }
                                        },
                                        ratio: 0.77578051087985,
                                        ufi: {__m: "__markup_7216e2ae_0_5_ET"},
                                        faceboxes: {
                                            "307567140969303": {
                                                x: 26.612903225806,
                                                y: 5.5555555555556,
                                                left: 23.869000786782,
                                                top: 3.4268895196048,
                                                width: 5.4878048780488,
                                                height: 4.2573320719016,
                                                fbid: "307567140969303",
                                                recognitions: []
                                            }
                                        },
                                        tags: {}
                                    }, cursor: "319805066169624"
                                }, {
                                    node: {
                                        id: "319805122836285",
                                        accessibility_caption: "Có thể là hình minh họa về văn bản cho biết 'CÓ MỘT CÁI CÂY TRONG MỘT CẢI VƯỜN... ..TRÊN NHỮNG TÁN CÂY NỞ RỘ NHỮNG ĐÓA HOA #KayĐì ....CÓ HAI ĐỨA NHÓC ĐANG CHƠI TRỐN TÌM ÁÀ TÌM ĐƯỢC MÀY RỔI NHA !! M LINE DEAD HUHU..THA THA CHO TUI, LẦN SAU TUI KHԔNG TRỄ DEADLINE NỮA ĐÂU MÀ cuoi.tuoitramn'",
                                        created_time: 1621143842,
                                        url: "https://www.facebook.com/photo.php?fbid=319805122836285&id=100044204000528&set=a.319809939502470",
                                        image: {
                                            uri: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-0/cp0/e15/q65/s600x600/185232737_319805126169618_3692134633943368201_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=NL3FS66VZY8AX8Gihn6&_nc_ht=scontent.fhan3-1.fna&tp=9&oh=aeaac2a9b300cddd1769ec05f844140a&oe=60D2CEA0",
                                            width: 462,
                                            height: 600
                                        },
                                        full_width_image: {
                                            uri: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-9/fr/cp0/e15/q65/185232737_319805126169618_3692134633943368201_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=NL3FS66VZY8AX8Gihn6&_nc_ht=scontent.fhan3-1.fna&tp=14&oh=2c6222a7599732e2dc0b489d68cd30a5&oe=60D0FF75",
                                            width: 720,
                                            height: 936
                                        },
                                        cropped_image: {
                                            uri: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-9/cp0/e15/q65/c48.0.624.936a/185232737_319805126169618_3692134633943368201_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=NL3FS66VZY8AX8Gihn6&_nc_ht=scontent.fhan3-1.fna&tp=29&oh=2049a1bafbc87b921d632b6483a5f0fe&oe=60D03DD7",
                                            width: 624,
                                            height: 936
                                        },
                                        blured_image: {
                                            uri: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-0/fb10/cp0/e15/q65/s168x128/185232737_319805126169618_3692134633943368201_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=NL3FS66VZY8AX8Gihn6&_nc_ht=scontent.fhan3-1.fna&tp=31&oh=c6ede466dafa7d9f31870e88373303b0&oe=60D30B9B",
                                            width: 98,
                                            height: 128
                                        },
                                        can_viewer_add_tags: false,
                                        can_viewer_untag: false,
                                        can_viewer_report: true,
                                        can_viewer_edit: false,
                                        can_viewer_delete: false,
                                        is_spherical: false,
                                        spherical_renderer_projection_type: null,
                                        is_playable: false,
                                        playable_url: null,
                                        playable_url_hd: null,
                                        owner: {id: "100044204000528"},
                                        message: {
                                            text: "Tuổi trẻ cười",
                                            image_ranges: [],
                                            ranges: [],
                                            aggregated_ranges: []
                                        },
                                        feedback: {
                                            does_viewer_like: false,
                                            has_viewer_commented_recently: false,
                                            comments: {count: 133},
                                            likers: {count: 10260},
                                            interactors: {
                                                count: 10027,
                                                nodes: [{id: "100064911675211", name: "Lê Thư"}, {
                                                    id: "100004965967536",
                                                    name: "Ân Vũ"
                                                }, {id: "100017327283653", name: "Linh Duong"}]
                                            }
                                        },
                                        ratio: 0.76923076923077,
                                        ufi: {__m: "__markup_7216e2ae_0_6_kf"},
                                        faceboxes: {},
                                        tags: {}
                                    }, cursor: "319805122836285"
                                }, {
                                    node: {
                                        id: "319804912836306",
                                        accessibility_caption: "Có thể là hình ảnh về văn bản cho biết 'QuynhAka'",
                                        created_time: 1621143842,
                                        url: "https://www.facebook.com/photo.php?fbid=319804912836306&id=100044204000528&set=a.319809939502470",
                                        image: {
                                            uri: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-0/cp0/e15/q65/p600x600/186558243_319804916169639_2826132267628016026_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=FA3u47kjpyQAX86ns7r&_nc_ht=scontent.fhan3-1.fna&tp=3&oh=357a9ff5882f9c25881819c893ff6cc2&oe=60D363DA",
                                            width: 600,
                                            height: 600
                                        },
                                        full_width_image: {
                                            uri: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-9/cp0/e15/q65/p720x720/186558243_319804916169639_2826132267628016026_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=FA3u47kjpyQAX86ns7r&_nc_ht=scontent.fhan3-1.fna&tp=3&oh=ea2517a36344a3c0cf12f9d4a062c0fe&oe=60D22F76",
                                            width: 720,
                                            height: 720
                                        },
                                        cropped_image: {
                                            uri: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-9/cp0/e15/q65/c250.0.1000.1500a/186558243_319804916169639_2826132267628016026_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=FA3u47kjpyQAX86ns7r&_nc_ht=scontent.fhan3-1.fna&tp=29&oh=47dfc884b38daa05b961abcae98c1e8f&oe=60D2E967",
                                            width: 1000,
                                            height: 1500
                                        },
                                        blured_image: {
                                            uri: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-0/fb10/cp0/e15/q65/s228x119/186558243_319804916169639_2826132267628016026_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=0debeb&efg=eyJpIjoidCJ9&_nc_ohc=FA3u47kjpyQAX86ns7r&_nc_ht=scontent.fhan3-1.fna&tp=31&oh=c4dfd0af30f307c5cc2e774b162c0ddf&oe=60D0F88A",
                                            width: 119,
                                            height: 119
                                        },
                                        can_viewer_add_tags: false,
                                        can_viewer_untag: false,
                                        can_viewer_report: true,
                                        can_viewer_edit: false,
                                        can_viewer_delete: false,
                                        is_spherical: false,
                                        spherical_renderer_projection_type: null,
                                        is_playable: false,
                                        playable_url: null,
                                        playable_url_hd: null,
                                        owner: {id: "100044204000528"},
                                        message: {
                                            text: "QuynhAka",
                                            image_ranges: [],
                                            ranges: [],
                                            aggregated_ranges: []
                                        },
                                        feedback: {
                                            does_viewer_like: false,
                                            has_viewer_commented_recently: false,
                                            comments: {count: 137},
                                            likers: {count: 20001},
                                            interactors: {
                                                count: 10025,
                                                nodes: [{id: "100064911675211", name: "Lê Thư"}, {
                                                    id: "100038542494115",
                                                    name: "Phan Song Ngân"
                                                }, {id: "100017327283653", name: "Linh Duong"}]
                                            }
                                        },
                                        ratio: 1,
                                        ufi: {__m: "__markup_7216e2ae_0_7_Ti"},
                                        faceboxes: {},
                                        tags: {}
                                    }, cursor: "319804912836306"
                                }],
                                page_info: {
                                    start_cursor: "319804949502969",
                                    end_cursor: "319804912836306",
                                    has_next_page: true,
                                    has_previous_page: false,
                                    delta_cursor: null
                                }
                            }
                        }, result_type: "init"
                    },
                    query_params: {after: null, first: 8},
                    query_metadata: {
                        query_string: "node(\x3Cset>) {\n        contributors { \n      id,\n      name,\n      structured_name,\n      username,\n      url,\n      profile_picture.size(\x3Cprof_pic_size>) {\n        uri,\n        width,\n        height\n      }\n     },\n        owner { \n      id,\n      name,\n      structured_name,\n      username,\n      url,\n      profile_picture.size(\x3Cprof_pic_size>) {\n        uri,\n        width,\n        height\n      }\n     },\n        story { creation_time,\n      to,\n      via,\n      application,\n      shareable,\n      implicit_place { \n      id,\n      contextual_name,\n      url,\n      place_type\n     },\n      explicit_place { \n      id,\n      contextual_name,\n      url,\n      place_type\n     },\n      actors { \n      id,\n      name,\n      structured_name,\n      username,\n      url,\n      profile_picture.size(\x3Cprof_pic_size>) {\n        uri,\n        width,\n        height\n      }\n     },\n      feedback { \n      does_viewer_like,\n      has_viewer_commented_recently,\n      top_level_comments as comments { count },\n      likers { count },\n      interactors.first(3) {\n        count,\n        nodes {\n          id,\n          name\n        }\n      }\n     },\n      privacy_scope { label,\n      description,\n      icon_image.scale(\x3Cprivacy_icon_scale>) },\n      title { \n      text,\n      image_ranges,\n      ranges {\n        entity,\n        offset,\n        length\n      },\n      aggregated_ranges {\n        length, offset, sample_entities { id, name }\n      }\n     },\n      suffix.location(timeline) { \n      text,\n      image_ranges,\n      ranges {\n        entity,\n        offset,\n        length\n      },\n      aggregated_ranges {\n        length, offset, sample_entities { id, name }\n      }\n     },\n      message { \n      text,\n      image_ranges,\n      ranges {\n        entity,\n        offset,\n        length\n      },\n      aggregated_ranges {\n        length, offset, sample_entities { id, name }\n      }\n     },\n      text_format_metadata { \n      background_color,\n      background_image {\n        uri\n      },\n      background_gradient_color,\n      background_gradient_direction,\n      color,\n      font_style,\n      font_weight,\n      font_object {\n        default_font_size,\n        font_name,\n        url\n      },\n      portrait_background_image {\n        uri\n      },\n      text_align\n     } },\n        feedback { \n      does_viewer_like,\n      has_viewer_commented_recently,\n      top_level_comments as comments { count },\n      likers { count },\n      interactors.first(3) {\n        count,\n        nodes {\n          id,\n          name\n        }\n      }\n     },\n        url.site(mobile),\n        title { \n      text,\n      image_ranges,\n      ranges {\n        entity,\n        offset,\n        length\n      },\n      aggregated_ranges {\n        length, offset, sample_entities { id, name }\n      }\n     },\n        modified_time,\n        created_time,\n        media.media_type(ALL).first(\x3Climit>) {\n          count,\n          edges {\n            node { id,\n      accessibility_caption,\n      created_time,\n      url.site(mobile),\n      image.size(\x3Cdefault_width>),\n      image.size(\x3Cbig_default_width>).sizing(cover-fill) as full_width_image,\n      image.sizing(cover-fill-cropped).size(\x3Cbig_default_width>, \x3Cbig_default_height>) as cropped_image,\n      image.size(\x3Cblurred_size>).blur(\x3Cblur_value>) as blured_image,\n      can_viewer_add_tags,\n      can_viewer_untag,\n      can_viewer_report,\n      can_viewer_edit,\n      can_viewer_delete,\n      is_spherical,\n      spherical_renderer_projection_type,\n      is_playable,\n      playable_url,\n      playable_url.quality(HD) as playable_url_hd,\n      owner { id },\n      message { \n      text,\n      image_ranges,\n      ranges {\n        entity,\n        offset,\n        length\n      },\n      aggregated_ranges {\n        length, offset, sample_entities { id, name }\n      }\n     },\n      feedback { \n      does_viewer_like,\n      has_viewer_commented_recently,\n      top_level_comments as comments { count },\n      likers { count },\n      interactors.first(3) {\n        count,\n        nodes {\n          id,\n          name\n        }\n      }\n     } },\n            cursor\n          },\n          page_info\n        }\n      }",
                        query_path: [{node: "bWVkaWFzZXQ6cGNiLjMxOTgwOTk4OTUwMjQ2NQ=="}, "media"],
                        config: {enableLooping: false}
                    },
                    cache_class: {__m: "MSnowflakePagedQueryCache"}
                }]], ["MPhotoCentralUpdates", "handlePhotoSets", ["__markup_7216e2ae_0_8_PO", "HTML"], ["mtouch_snowflake_paged_query", {
                    photo_set: {
                        title: {
                            text: "Ảnh từ bài viết của Đen Vâu",
                            image_ranges: [],
                            ranges: [],
                            aggregated_ranges: []
                        },
                        owner: null,
                        modified_time: 0,
                        contributors: null,
                        url: "https://www.facebook.com/story.php?story_fbid=319809989502465&id=100044204000528",
                        story: {
                            creation_time: 1621143842000,
                            to: null,
                            via: null,
                            application: null,
                            shareable: {url: "https://www.facebook.com/denvau/posts/319809989502465"},
                            implicit_place: null,
                            explicit_place: null,
                            actors: [{
                                id: "100044204000528",
                                name: "Đen Vâu",
                                structured_name: {
                                    text: "Đen Vâu",
                                    parts: [{part: "first", offset: 0, length: 3}, {
                                        part: "last",
                                        offset: 4,
                                        length: 3
                                    }],
                                    locale: null
                                },
                                username: "denvau",
                                url: "https://www.facebook.com/denvau",
                                profile_picture: {
                                    uri: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p40x40/186472614_318126249670839_5974620561626302287_n.jpg?_nc_cat=1&ccb=1-3&_nc_sid=c6021c&efg=eyJpIjoidCJ9&_nc_ohc=cRFTeJGMV-IAX8gApTP&_nc_ht=scontent.fhan4-1.fna&tp=3&oh=3ce887e8ca52e59ea875724450381a8d&oe=60D17688",
                                    width: 40,
                                    height: 40
                                }
                            }],
                            feedback: {
                                does_viewer_like: false,
                                has_viewer_commented_recently: false,
                                comments: {count: 4150},
                                likers: {count: 242051},
                                interactors: {
                                    count: 10024,
                                    nodes: [{id: "100050085890385", name: "Huyền Trần"}, {
                                        id: "100002319463140",
                                        name: "Nguyễn Minh Thư"
                                    }, {id: "100021804843659", name: "Duong Nguyen"}]
                                }
                            },
                            privacy_scope: {
                                label: "Công khai",
                                description: "Công khai",
                                icon_image: {
                                    uri: "https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Wb6V8rCbZAP.png",
                                    width: 15,
                                    height: 16
                                }
                            },
                            title: {
                                text: "Đen Vâu đã thêm 13 ảnh mới vào album: #trontim.",
                                image_ranges: [],
                                ranges: [{
                                    entity: {url: "https://www.facebook.com/denvau"},
                                    offset: 0,
                                    length: 7
                                }, {
                                    entity: {url: "https://www.facebook.com/denvau/posts/319809989502465"},
                                    offset: 16,
                                    length: 10
                                }, {
                                    entity: {url: "https://www.facebook.com/denvau/albums/319809939502470/"},
                                    offset: 38,
                                    length: 8
                                }],
                                aggregated_ranges: []
                            },
                            suffix: null,
                            message: {
                                text: "Thật sự khâm phục sức sáng tạo và đầu óc hài hước của những tác giả các bức ảnh này 😂. Xin phép đăng lại kèm nguồn nha\n🌿🐑🐑https://Denvau.lnk.to/TronTim\n#trontim #MTVband #denvau #Đen",
                                image_ranges: [],
                                ranges: [{
                                    entity: {url: "https://l.facebook.com/l.php?u=https%3A%2F%2FDenvau.lnk.to%2FTronTim&h=AT3NqHqAiEjF98UghYpVEhKaETK4QCK-McrXqOxTqP312XG3Lj-E4BUZb7NWFZ7uYYS6851iJkn1WZJfGpWcSU1V1dzKC0iwkqNZvH9t4qCxCdDo7kl-yNdDlr0Ez0hJkdmQ&s=1"},
                                    offset: 122,
                                    length: 29
                                }, {
                                    entity: {url: "https://www.facebook.com/hashtag/trontim"},
                                    offset: 152,
                                    length: 8
                                }, {
                                    entity: {url: "https://www.facebook.com/hashtag/mtvband"},
                                    offset: 161,
                                    length: 8
                                }, {
                                    entity: {url: "https://www.facebook.com/hashtag/denvau"},
                                    offset: 170,
                                    length: 7
                                }, {
                                    entity: {url: "https://www.facebook.com/hashtag/%C4%91en"},
                                    offset: 178,
                                    length: 4
                                }],
                                aggregated_ranges: []
                            },
                            text_format_metadata: null
                        },
                        feedback: null,
                        media_count: 13,
                        title_card_style: "feed_story",
                        ufi: {__m: "__markup_7216e2ae_0_8_PO"},
                        feedback_target: 319809989502465,
                        tagging_typeahead_config: {
                            sources: {
                                online: {src: null, max_results: 5, useLocation: false},
                                bootstrapped: {
                                    src: "/ds/first_degree.php?viewer=AfN3MvPLzU1Tx8ET&token=v7&filter%5B0%5D=user&options%5B0%5D=friends_only&tagging_context=1&cacheBust=1621908173-7",
                                    source_key: "friends"
                                }
                            }
                        },
                        tagging_typeahead_suggestions: [{
                            text: "Lê Lợi",
                            path: "/leloi.mr",
                            uid: 100004875732895,
                            photo: "https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=0c64ff&efg=eyJpIjoidCJ9&_nc_ohc=fMRrGcbCThMAX9smDEP&_nc_ht=scontent.fhan3-2.fna&tp=5&oh=75d8e23c28796b13cd496a044adc1687&oe=60D05357"
                        }, {
                            text: "Nguyễn Thị Hoàng My",
                            path: "/SHOPTUVE.NET.004394",
                            uid: 100005827591466,
                            photo: "https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p50x50/96088288_1393677347503172_2372242486350315520_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=0c64ff&efg=eyJpIjoidCJ9&_nc_ohc=3qvytNyY2moAX_wRClm&_nc_ht=scontent.fhan3-2.fna&tp=3&oh=a669efbb4b5fa4b69ece3d10cc60673e&oe=60D317C3"
                        }, {
                            text: "Dương Vũ",
                            path: "/duongvu.survive",
                            uid: 100008900411067,
                            photo: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.18169-1/cp0/e15/q65/p50x50/15492527_1610735342566464_8971550865725458335_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=0c64ff&efg=eyJpIjoidCJ9&_nc_ohc=GUGUY3pRVCEAX8WOVo_&tn=6uXj2tgms-FrSnEt&_nc_ht=scontent.fhan4-1.fna&tp=3&oh=08d84c96457e38c176f1e059b5f47600&oe=60D0D04A"
                        }, {
                            text: "Thuận Trần",
                            path: "/thuan.tran.0123",
                            uid: 100003963676764,
                            photo: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p50x50/182103751_2086291584846277_435886497553506919_n.jpg?_nc_cat=105&ccb=1-3&_nc_sid=0c64ff&efg=eyJpIjoidCJ9&_nc_ohc=tJnFheZcd6wAX9Lk0cL&_nc_ht=scontent.fhan4-1.fna&tp=3&oh=638f5cdd22d0dc27f63aa9d9140bf545&oe=60D13EA0"
                        }, {
                            text: "Trung Đức",
                            path: "/nguyentrungducskt",
                            uid: 100034721270232,
                            photo: "https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p50x50/157323894_501793177654720_3276830058602912007_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=0c64ff&efg=eyJpIjoidCJ9&_nc_ohc=0E8ckHVu0-4AX8TileH&_nc_ht=scontent.fhan3-2.fna&tp=3&oh=db1e146d3220677b3275dc748d84644a&oe=60D397CF"
                        }, {
                            text: "Lâm Dược Sơn",
                            path: "/ltsi2",
                            uid: 1048882474,
                            photo: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.18169-1/cp0/e15/q65/p50x50/1655906_10201874149949266_1712404445_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=0c64ff&efg=eyJpIjoidCJ9&_nc_ohc=5pAKj8KTmrUAX8A3Fdy&_nc_ht=scontent.fhan3-1.fna&tp=3&oh=3085184a5ccd6b0d34e0ca852ea42bfc&oe=60D0A299"
                        }, {
                            text: "Lê Nguyễn Linh",
                            path: "/chubelinh",
                            uid: 100007468232121,
                            photo: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p50x50/166777009_2859462824312631_2528956991471897105_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=0c64ff&efg=eyJpIjoidCJ9&_nc_ohc=HbIFl3cbnWAAX_mIlxY&tn=6uXj2tgms-FrSnEt&_nc_ht=scontent.fhan4-1.fna&tp=3&oh=05f7c21fba138a3744489485b4f7a7f9&oe=60D095CA"
                        }, {
                            text: "Cá Cơm",
                            path: "/profile.php?id=100003889001254",
                            uid: 100003889001254,
                            photo: "https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p50x50/168687576_2045427498930197_3626558038615705783_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=0c64ff&efg=eyJpIjoidCJ9&_nc_ohc=N-ljSpB75CgAX9XxINu&_nc_ht=scontent.fhan3-2.fna&tp=3&oh=8167d67a2066540d32dd344d0a497b27&oe=60D25BF3"
                        }, {
                            text: "Le Đinh Hiep",
                            path: "/ledinhhiep9895",
                            uid: 100003906366143,
                            photo: "https://scontent.fhan4-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p50x50/100041502_1684733915000138_6026611063645011968_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=0c64ff&_nc_aid=0&efg=eyJpIjoidCJ9&_nc_ohc=jR5VZnVWCX8AX_TveX0&_nc_ht=scontent.fhan4-1.fna&tp=3&oh=c0cd3bec5664add2fbd2ad28b01ac1d6&oe=60D37FD8"
                        }, {
                            text: "Hoa Le",
                            path: "/poorbabyhus",
                            uid: 100001072197117,
                            photo: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p50x50/179166991_4047510598627973_8559995569258734904_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=0c64ff&efg=eyJpIjoidCJ9&_nc_ohc=FIWIM52NadoAX9jznvZ&tn=6uXj2tgms-FrSnEt&_nc_ht=scontent.fhan3-1.fna&tp=3&oh=b9e3f1e8303002203d0d4840564f309b&oe=60D126FD"
                        }, {
                            text: "Oanh Kiều",
                            path: "/oanh.kieu.509",
                            uid: 100003656078006,
                            photo: "https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/p50x50/87938933_1831989080266277_886917987938861056_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=0c64ff&efg=eyJpIjoidCJ9&_nc_ohc=jXb5sbNBO7wAX-z9OW9&_nc_ht=scontent.fhan3-1.fna&tp=3&oh=6e861b38089a8c835d1a821390e4624f&oe=60D1636D"
                        }]
                    }, set_token: "pcb.319809989502465"
                }]], ["ReactRenderer", "constructAndRenderComponent", ["MSnowflake.react", "__markup_a588f507_0_0_kI", "HTML", "__elem_27a95b4e_0_0_uT"], [{__m: "MSnowflake.react"}, {
                    setToken: "pcb.319809989502465",
                    storyIdentifier: null,
                    source: null,
                    scrollToPhoto: "319804972836300",
                    scrollTargetIndex: null,
                    isPermalink: true,
                    showNewPermalink: null,
                    showAlbumFeed: false,
                    reportAlbumBtn: {__m: "__markup_a588f507_0_0_kI"}
                }, {__m: "__elem_27a95b4e_0_0_uT"}]], ["__inst_fc1ffbe9_0_0_j9"], ["MReactionsFlyout", "init", ["__inst_fc1ffbe9_0_0_j9"], [{__m: "__inst_fc1ffbe9_0_0_j9"}]], ["MReactionsFlyout", "initNUX", ["__inst_24da3c47_0_0_4/"], [{__m: "__inst_24da3c47_0_0_4/"}]], ["MFeedReactionsNUX", "init", ["__inst_24da3c47_0_0_4/"], [{__m: "__inst_24da3c47_0_0_4/"}, {isCommentNUX: true}]], ["__inst_5878081c_0_0_59"], ["__inst_24da3c47_0_0_4/"], ["AccessibilityWebVirtualCursorClickLogger", "init", ["__elem_49f6b607_0_0_oo"], [[{__m: "__elem_49f6b607_0_0_oo"}]]], ["GHLSurvey", "survey", [], []], ["MScrollPositionSaver"], ["MJewelsSafePageletLoader", "trackJewel", [], [{
                    pageletID: "m:chrome:schedulable-graph-search",
                    jewelSigil: "search",
                    retryUri: "/search/graph-search-flyout/?searchtitle&groupname"
                }]], ["LoadingIndicator", "init", ["__elem_eed16c0a_0_0_bs", "__elem_a588f507_0_0_Pb", "__elem_a588f507_0_1_d7"], [{__m: "__elem_eed16c0a_0_0_bs"}, {__m: "__elem_a588f507_0_0_Pb"}, {__m: "__elem_a588f507_0_1_d7"}]], ["MPageError"], ["MStoriesRing", "setupStoryRingForUpdates", [], ["m_group_stories_container"]], ["MJewelSet", "init", [], []], ["MDoubleSizeHeaderController", "init", ["__elem_284feb50_0_0_y3", "__elem_137952b5_0_0_IK"], [{
                    header: {__m: "__elem_284feb50_0_0_y3"},
                    searchbar: {__m: "__elem_137952b5_0_0_IK"}
                }]], ["MJewelsTabability", "initAllJewels", ["__elem_284feb50_0_0_y3"], [{bluebar: {__m: "__elem_284feb50_0_0_y3"}}]], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_0_MC"], [{__m: "__elem_e980dec4_0_0_MC"}]], ["MGenericJewel", "init", ["__elem_556710d0_0_0_o7", "__elem_1965d86a_0_0_V4"], ["search", {__m: "__elem_556710d0_0_0_o7"}, {__m: "__elem_1965d86a_0_0_V4"}]], ["MFeedJewel", "init", ["__elem_556710d0_0_1_Ma"], [{__m: "__elem_556710d0_0_1_Ma"}, false, []]], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_1_q5"], [{__m: "__elem_e980dec4_0_1_q5"}]], ["MMarketplaceTabJewel", "init", ["__elem_556710d0_0_2_nw"], [{__m: "__elem_556710d0_0_2_nw"}, {jewelSigil: "marketplace_tab_jewel_button"}]], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_2_Cn"], [{__m: "__elem_e980dec4_0_2_Cn"}]], ["MJewelSetLite", "initJewel", [], ["videos_tab_jewel_button", {
                    initialCount: 0,
                    jewelActivePaths: [],
                    jewelActiveRegexes: ["^/watch/", "^/watch$"],
                    shouldPrefetch: false,
                    prefetchOnStart: false
                }]], ["MWatchJewel", "init", ["__elem_a9cb9b98_0_0_yc"], [{__m: "__elem_a9cb9b98_0_0_yc"}, true]], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_3_+4"], [{__m: "__elem_e980dec4_0_3_+4"}]], ["MChromeTabsBootloader", "bootloadBookmarks", [], ["u_0_2_E9"]], ["MGenericJewel", "init", ["__elem_556710d0_0_3_5B", "__elem_1965d86a_0_1_ji"], ["bookmarks", {__m: "__elem_556710d0_0_3_5B"}, {__m: "__elem_1965d86a_0_1_ji"}]], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_4_QC"], [{__m: "__elem_e980dec4_0_4_QC"}]], ["MLoadingIndicator", "init", [], ["u_0_3_Vz"]], ["MBackNavbar", "init", ["__elem_ad2bcfb1_0_0_Pp", "__elem_1acd3027_0_0_ti"], [{
                    element: {__m: "__elem_ad2bcfb1_0_0_Pp"},
                    logExposure: true,
                    enabled: true,
                    enabledForExternalReferer: false,
                    allPages: true,
                    pages: "",
                    backToFeedDisabled: false,
                    backOnArrowClick: false,
                    staticTitle: false,
                    linkElement: {__m: "__elem_1acd3027_0_0_ti"},
                    forceRefreshFeed: true,
                    modifyHistoryOnNav: false,
                    excludedPages: "/bookmarks/,/watch,/marketplace/,/friends/center/requests/,/notifications.php",
                    qeExposure: false,
                    scrollToNextFeedItem: false,
                    exposurePages: "",
                    isPageLoggingAllowed: true,
                    enableBackbarForSoftNav: "search",
                    enableFeedPrefetch: true,
                    includedSubPages: "/friends/center/requests/all/,/friends/center/requests/outgoing/,/friends/center/requests/hidden/"
                }]], ["MSplashScreenSwRegistration", "unregister", [], []], ["ControlledReferer"], ["ControlledReferer", "useFacebookRefererHtml", ["__elem_a32d506f_0_0_Rm"], [{__m: "__elem_a32d506f_0_0_Rm"}, "\x3Cform method=\"get\" action=\"https://googleads.g.doubleclick.net/pagead/viewthroughconversion/1032622309/\" id=\"theform\">\x3Cinput name=\"value\" value=\"1.00\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"currency_code\" value=\"USD\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"label\" value=\"qRpeCLOw56cBEOWhsuwD\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"guid\" value=\"ON\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"script\" value=\"0\" type=\"hidden\" autocomplete=\"off\" />\x3C/form>\x3Ciframe frameborder=\"0\" width=\"1\" height=\"1\" onload=\"document.getElementById(&#039;theform&#039;).submit()\">\x3C/iframe>"]], ["ControlledReferer", "useFacebookRefererHtml", ["__elem_a32d506f_0_1_u8"], [{__m: "__elem_a32d506f_0_1_u8"}, "\x3Cform method=\"get\" action=\"https://m.facebook.com/sem_campaigns/sem_pixel_test/\" id=\"theform\">\x3Cinput name=\"encoded_one\" value=\"AQT1sm5EIZyBCJgPSHpr8bV6gDA7q8k_dAwbsFmAChxipGYK8DYhznvzzKhSeGJbdECJVpp7V5UYp3nVQTgqqDwG\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"encoded_two\" value=\"AQQgwQt1lAjEzheVficpGXkPUIosxT--NLHoXgEqDo_zxt3QrWM72RhbPbXLFvf3uEEJhz20nWe-ri1NscQt_oGj\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"category\" value=\"14\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"src\" value=\"https://googleads.g.doubleclick.net/pagead/viewthroughconversion/1032622309/?value=1.00&amp;currency_code=USD&amp;label=qRpeCLOw56cBEOWhsuwD&amp;guid=ON&amp;script=0\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"subcategory\" value=\"aishvar_PH_2_of_3\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"ext\" value=\"1622168488\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"hash\" value=\"AeT4SFWjlfcW9iSOGts\" type=\"hidden\" autocomplete=\"off\" />\x3C/form>\x3Ciframe frameborder=\"0\" width=\"1\" height=\"1\" onload=\"document.getElementById(&#039;theform&#039;).submit()\">\x3C/iframe>"]], ["ControlledReferer", "useFacebookRefererHtml", ["__elem_a32d506f_0_2_Z4"], [{__m: "__elem_a32d506f_0_2_Z4"}, "\x3Cform method=\"get\" action=\"https://googleads.g.doubleclick.net/pagead/viewthroughconversion/995153884/\" id=\"theform\">\x3Cinput name=\"value\" value=\"1.00\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"currency_code\" value=\"USD\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"label\" value=\"Wu-ZCMSIzlwQ3K_D2gM\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"guid\" value=\"ON\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"script\" value=\"0\" type=\"hidden\" autocomplete=\"off\" />\x3C/form>\x3Ciframe frameborder=\"0\" width=\"1\" height=\"1\" onload=\"document.getElementById(&#039;theform&#039;).submit()\">\x3C/iframe>"]], ["ControlledReferer", "useFacebookRefererHtml", ["__elem_a32d506f_0_3_BF"], [{__m: "__elem_a32d506f_0_3_BF"}, "\x3Cform method=\"get\" action=\"https://m.facebook.com/sem_campaigns/sem_pixel_test/\" id=\"theform\">\x3Cinput name=\"encoded_one\" value=\"AQQ4PNxUEnkAF8G797_pPkq27MAAt6-S2ssqRAw6luZkSkKaCaKnUCURuFbhD7ttHHWk2kNnJeMKEeS0BR82GAo_\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"encoded_two\" value=\"AQRfojrjap7BYxFvGIe-7kNon4uGAQtxnHrcOpUEMtC02eIW4oWxwPoDstAmmE8CvcnfUUcTlxy-SRwa7vMnUgkr\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"category\" value=\"1\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"src\" value=\"https://googleads.g.doubleclick.net/pagead/viewthroughconversion/995153884/?value=1.00&amp;currency_code=USD&amp;label=Wu-ZCMSIzlwQ3K_D2gM&amp;guid=ON&amp;script=0\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"subcategory\" value=\"control\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"ext\" value=\"1622168488\" type=\"hidden\" autocomplete=\"off\" />\x3Cinput name=\"hash\" value=\"AeQNgmu8Ybp1MLEDozE\" type=\"hidden\" autocomplete=\"off\" />\x3C/form>\x3Ciframe frameborder=\"0\" width=\"1\" height=\"1\" onload=\"document.getElementById(&#039;theform&#039;).submit()\">\x3C/iframe>"]], ["MJewelSetLite", "initJewel", [], ["requests", {
                    initialCount: 0,
                    jewelActivePaths: ["/friends/center/requests/"],
                    shouldPrefetch: true,
                    prefetchOnBadgeUpdate: true,
                    prefetchOnStart: false
                }]], ["MFriendingJewelChannelUpdates", "start", [], []], ["MMessengerMQTTConnection", "setUp", [], [{
                    fbid: "100004875732895",
                    irisSeqID: "580647",
                    appID: 219994525426954,
                    endpoint: "wss://edge-chat.facebook.com/chat?region=pnb"
                }]], ["MJewelSetLite", "initJewel", [], ["notifications", {
                    initialCount: 0,
                    jewelActivePaths: ["/notifications.php"],
                    shouldPrefetch: true,
                    prefetchOnBadgeUpdate: true,
                    prefetchOnStart: false
                }]], ["MNotificationsJewelChannelUpdates", "start", [], []], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_5_DJ"], [{__m: "__elem_e980dec4_0_5_DJ"}]], ["MMessengerMQTTConnection", "setUp", [], [{
                    fbid: "100004875732895",
                    irisSeqID: "580647",
                    appID: 219994525426954,
                    endpoint: "wss://edge-chat.facebook.com/chat?region=pnb"
                }]], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_6_FH"], [{__m: "__elem_e980dec4_0_6_FH"}]], ["MMessengerMQTTConnection", "setUp", [], [{
                    fbid: "100004875732895",
                    irisSeqID: "580647",
                    appID: 219994525426954,
                    endpoint: "wss://edge-chat.facebook.com/chat?region=pnb"
                }]], ["MJewelSetLite", "initJewel", [], ["messages", {
                    initialCount: 0,
                    jewelActivePaths: ["/messages/"],
                    shouldPrefetch: true,
                    prefetchOnBadgeUpdate: true,
                    prefetchOnStart: false
                }]], ["MMessagesJewelChannelUpdates", "start", [], [false]], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_7_uU"], [{__m: "__elem_e980dec4_0_7_uU"}]], ["MPageHeaderAccessibility"], ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_0_gw"], [{__m: "__elem_0cdc66ad_0_0_gw"}]], ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_1_N1"], [{__m: "__elem_0cdc66ad_0_1_N1"}]], ["MLoadingIndicator", "init", [], ["u_0_l_cv"]], ["MPageLoadClientMetricsCallbacks", "init", [], [{lid: "6966047345458437221-0"}]], ["LogHistoryListeners"], ["ScriptPath", "set", [], ["snowflake", "9fd8aeb0", {
                    imp_id: "0tHgDpJFEBDyUVtoe",
                    entity_id: 100044204000528,
                    ef_page: null
                }]], ["MCommentViewportTracking", "singleton", [], [{
                    enabled: true,
                    debug_console: false,
                    debug_html: false,
                    idle_timeout: 5000,
                    min_duration_to_log: 100,
                    min_visible_size: 200
                }]], ["MLogging", "main", [], [{refid: 0}]], ["RemoteDevice", "init", [], [{
                    performHardwareDetection: false,
                    hashId: null,
                    vpd: false
                }]], ["Artillery"], ["MLink", "setupListener", [], []], ["MLinkHack"], ["MModalDialogInit"], ["MVerifyCache", "main", [], [{viewer: 100004875732895}]], ["MemoryLogger", "init", [], [[]]], ["EventProfiler"], ["MPageNavigationTracking", "init", [], []], ["FalcoLoggerTransports", "attach", [], []], ["ScriptPathLogger", "startLogging", [], []], ["MTimeSpentBitArrayLogger", "init", [], ["m", false]], ["MCoreDeferred"], ["FbtLogging"], ["IntlQtEventFalcoEvent"], ["BanzaiScuba_DEPRECATED"], ["ContextualConfig"], ["BladeRunnerClient"], ["SkywalkerUtils"], ["FleetBeaconSubscriptionLauncher"], ["MPageControllerImpl"], ["MPageFetcherImpl"], ["MqttLongPollingRunner"], ["LogWebMemoryUsageFalcoEvent"], ["__inst_a9de87cf_0_0_sf"], ["__inst_083cf14b_0_0_W7"], ["MCommentActionsFlyout", "registerFlyout", ["__inst_083cf14b_0_0_W7"], [{__m: "__inst_083cf14b_0_0_W7"}]], ["MStickerMount", "initComments", ["__elem_8aa73451_0_0_tY", "__elem_7216e2ae_0_0_AV", "__elem_7216e2ae_0_1_Aa"], [{__m: "__elem_8aa73451_0_0_tY"}, {__m: "__elem_7216e2ae_0_0_AV"}, "composerInput-319804912836306", {__m: "__elem_7216e2ae_0_1_Aa"}, false]], ["__inst_8f1ce391_0_0_aH"], ["__inst_a9de87cf_0_1_+b"], ["MStickerMount", "initComments", ["__elem_8aa73451_0_1_ib", "__elem_7216e2ae_0_2_Wj", "__elem_7216e2ae_0_3_DT"], [{__m: "__elem_8aa73451_0_1_ib"}, {__m: "__elem_7216e2ae_0_2_Wj"}, "composerInput-319809989502465", {__m: "__elem_7216e2ae_0_3_DT"}, false]], ["__inst_8f1ce391_0_1_EY"], ["__inst_083cf14b_0_1_NP"], ["MCommentActionsFlyout", "registerFlyout", ["__inst_083cf14b_0_1_NP"], [{__m: "__inst_083cf14b_0_1_NP"}]], ["MTouchable"], ["__inst_a9de87cf_0_2_OW"], ["MStickerMount", "initComments", ["__elem_8aa73451_0_2_Nr", "__elem_7216e2ae_0_4_CB", "__elem_7216e2ae_0_5_Yb"], [{__m: "__elem_8aa73451_0_2_Nr"}, {__m: "__elem_7216e2ae_0_4_CB"}, "composerInput-319804949502969", {__m: "__elem_7216e2ae_0_5_Yb"}, false]], ["__inst_8f1ce391_0_2_xD"], ["__inst_083cf14b_0_2_bR"], ["MCommentActionsFlyout", "registerFlyout", ["__inst_083cf14b_0_2_bR"], [{__m: "__inst_083cf14b_0_2_bR"}]], ["__inst_a9de87cf_0_3_WN"], ["MStickerMount", "initComments", ["__elem_8aa73451_0_3_36", "__elem_7216e2ae_0_6_/N", "__elem_7216e2ae_0_7_uB"], [{__m: "__elem_8aa73451_0_3_36"}, {__m: "__elem_7216e2ae_0_6_/N"}, "composerInput-319804972836300", {__m: "__elem_7216e2ae_0_7_uB"}, false]], ["__inst_8f1ce391_0_3_Ea"], ["__inst_083cf14b_0_3_DB"], ["MCommentActionsFlyout", "registerFlyout", ["__inst_083cf14b_0_3_DB"], [{__m: "__inst_083cf14b_0_3_DB"}]], ["__inst_a9de87cf_0_4_Rf"], ["MStickerMount", "initComments", ["__elem_8aa73451_0_4_hS", "__elem_7216e2ae_0_8_TD", "__elem_7216e2ae_0_9_zj"], [{__m: "__elem_8aa73451_0_4_hS"}, {__m: "__elem_7216e2ae_0_8_TD"}, "composerInput-319805139502950", {__m: "__elem_7216e2ae_0_9_zj"}, false]], ["__inst_8f1ce391_0_4_4L"], ["__inst_083cf14b_0_4_VX"], ["MCommentActionsFlyout", "registerFlyout", ["__inst_083cf14b_0_4_VX"], [{__m: "__inst_083cf14b_0_4_VX"}]], ["__inst_a9de87cf_0_5_sA"], ["MStickerMount", "initComments", ["__elem_8aa73451_0_5_UK", "__elem_7216e2ae_0_a_1e", "__elem_7216e2ae_0_b_oM"], [{__m: "__elem_8aa73451_0_5_UK"}, {__m: "__elem_7216e2ae_0_a_1e"}, "composerInput-319804969502967", {__m: "__elem_7216e2ae_0_b_oM"}, false]], ["__inst_8f1ce391_0_5_lR"], ["__inst_083cf14b_0_5_wD"], ["MCommentActionsFlyout", "registerFlyout", ["__inst_083cf14b_0_5_wD"], [{__m: "__inst_083cf14b_0_5_wD"}]], ["__inst_a9de87cf_0_6_n0"], ["MStickerMount", "initComments", ["__elem_8aa73451_0_6_oz", "__elem_7216e2ae_0_c_QN", "__elem_7216e2ae_0_d_tV"], [{__m: "__elem_8aa73451_0_6_oz"}, {__m: "__elem_7216e2ae_0_c_QN"}, "composerInput-319804989502965", {__m: "__elem_7216e2ae_0_d_tV"}, false]], ["__inst_8f1ce391_0_6_c9"], ["__inst_083cf14b_0_6_ch"], ["MCommentActionsFlyout", "registerFlyout", ["__inst_083cf14b_0_6_ch"], [{__m: "__inst_083cf14b_0_6_ch"}]], ["__inst_a9de87cf_0_7_q7"], ["MStickerMount", "initComments", ["__elem_8aa73451_0_7_hM", "__elem_7216e2ae_0_e_oR", "__elem_7216e2ae_0_f_Qs"], [{__m: "__elem_8aa73451_0_7_hM"}, {__m: "__elem_7216e2ae_0_e_oR"}, "composerInput-319805066169624", {__m: "__elem_7216e2ae_0_f_Qs"}, false]], ["__inst_8f1ce391_0_7_z2"], ["__inst_083cf14b_0_7_8q"], ["MCommentActionsFlyout", "registerFlyout", ["__inst_083cf14b_0_7_8q"], [{__m: "__inst_083cf14b_0_7_8q"}]], ["__inst_a9de87cf_0_8_/V"], ["MStickerMount", "initComments", ["__elem_8aa73451_0_8_pC", "__elem_7216e2ae_0_g_B1", "__elem_7216e2ae_0_h_iU"], [{__m: "__elem_8aa73451_0_8_pC"}, {__m: "__elem_7216e2ae_0_g_B1"}, "composerInput-319805122836285", {__m: "__elem_7216e2ae_0_h_iU"}, false]], ["__inst_8f1ce391_0_8_cL"], ["__inst_083cf14b_0_8_Wi"], ["MCommentActionsFlyout", "registerFlyout", ["__inst_083cf14b_0_8_Wi"], [{__m: "__inst_083cf14b_0_8_Wi"}]], ["MLiveData", "set", [], ["319804912836306", {
                    ft_ent_identifier: 319804912836306,
                    comment_count: 184,
                    share_count: 35,
                    reduced_comment_count: "184",
                    reduced_share_count: "35",
                    actor_for_post: "100004875732895",
                    reactioncount: 33159,
                    reactioncountmap: {
                        "1": {default: 20001},
                        "2": {default: 4783},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 7898},
                        "3": {default: 115},
                        "16": {default: 300},
                        "7": {default: 62},
                        "8": {default: 0}
                    },
                    reactorids: null,
                    reactioncountreduced: "33K",
                    supportedreactions: [1, 2, 16, 4, 3, 7, 8],
                    userreactions: null,
                    reactionsentence: {current: {text: "33K"}, alternate: {text: "Bạn và 33K người khác"}},
                    reactionsentences: {current: {text: "33K"}, alternate: {text: "Bạn và 33K người khác"}},
                    viewerreaction: 0,
                    reactiondisplaystrategy: "none",
                    request_id: "0",
                    timestamp: 1621909288.4608
                }]], ["MReactionsBlingBar", "init", ["__elem_7216e2ae_0_i_hp"], [{
                    elements: {container: {__m: "__elem_7216e2ae_0_i_hp"}},
                    feedbackTargetID: 319804912836306,
                    requestID: "0",
                    separateCommentsLink: false,
                    shouldAnchor: false,
                    isDarkMode: false,
                    darkModeLinks: {}
                }]], ["MUFIActorSelectorBootloader", "initBootloadHook", ["__elem_a588f507_0_2_hD", "__markup_a588f507_0_1_Z2", "HTML", "__elem_ad31d0c7_0_0_b4"], [{
                    container: {__m: "__elem_a588f507_0_2_hD"},
                    reactElementProps: {
                        feedbackTargetID: "319804912836306",
                        feedbackTargetOwnerID: "100044204000528",
                        initialSelectedActorID: "100004875732895",
                        initialSelectedActorProfilePicURI: "https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=9128f4&efg=eyJpIjoidCJ9&_nc_ohc=fMRrGcbCThMAX9smDEP&_nc_ht=scontent.fhan3-2.fna&tp=5&oh=75d8e23c28796b13cd496a044adc1687&oe=60D05357",
                        location: null,
                        showFlyoutOnRender: true
                    },
                    loadingFlyoutContent: {__m: "__markup_a588f507_0_1_Z2"},
                    loadingFlyoutContext: {__m: "__elem_ad31d0c7_0_0_b4"}
                }]], ["__inst_60460fe7_0_0_ZD"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_0_Je"], [{__m: "__elem_3e7e4274_0_0_Je"}]], ["MUFIComposerFocus", "init", [], []], ["MLiveData", "set", [], ["319805122836285", {
                    ft_ent_identifier: 319805122836285,
                    comment_count: 228,
                    share_count: 248,
                    reduced_comment_count: "228",
                    reduced_share_count: "248",
                    actor_for_post: "100004875732895",
                    reactioncount: 26416,
                    reactioncountmap: {
                        "1": {default: 10260},
                        "2": {default: 213},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 13357},
                        "3": {default: 29},
                        "16": {default: 59},
                        "7": {default: 2497},
                        "8": {default: 1}
                    },
                    reactorids: null,
                    reactioncountreduced: "26K",
                    supportedreactions: [1, 2, 16, 4, 3, 7, 8],
                    userreactions: null,
                    reactionsentence: {current: {text: "26K"}, alternate: {text: "Bạn và 26K người khác"}},
                    reactionsentences: {current: {text: "26K"}, alternate: {text: "Bạn và 26K người khác"}},
                    viewerreaction: 0,
                    reactiondisplaystrategy: "none",
                    request_id: "0",
                    timestamp: 1621909288.4652
                }]], ["MReactionsBlingBar", "init", ["__elem_7216e2ae_0_j_bp"], [{
                    elements: {container: {__m: "__elem_7216e2ae_0_j_bp"}},
                    feedbackTargetID: 319805122836285,
                    requestID: "0",
                    separateCommentsLink: false,
                    shouldAnchor: false,
                    isDarkMode: false,
                    darkModeLinks: {}
                }]], ["MUFIActorSelectorBootloader", "initBootloadHook", ["__elem_a588f507_0_3_Nh", "__markup_a588f507_0_2_hM", "HTML", "__elem_ad31d0c7_0_1_Zi"], [{
                    container: {__m: "__elem_a588f507_0_3_Nh"},
                    reactElementProps: {
                        feedbackTargetID: "319805122836285",
                        feedbackTargetOwnerID: "100044204000528",
                        initialSelectedActorID: "100004875732895",
                        initialSelectedActorProfilePicURI: "https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=9128f4&efg=eyJpIjoidCJ9&_nc_ohc=fMRrGcbCThMAX9smDEP&_nc_ht=scontent.fhan3-2.fna&tp=5&oh=75d8e23c28796b13cd496a044adc1687&oe=60D05357",
                        location: null,
                        showFlyoutOnRender: true
                    },
                    loadingFlyoutContent: {__m: "__markup_a588f507_0_2_hM"},
                    loadingFlyoutContext: {__m: "__elem_ad31d0c7_0_1_Zi"}
                }]], ["__inst_60460fe7_0_1_jJ"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_1_9+"], [{__m: "__elem_3e7e4274_0_1_9+"}]], ["MUFIComposerFocus", "init", [], []], ["MLiveData", "set", [], ["319804972836300", {
                    ft_ent_identifier: 319804972836300,
                    comment_count: 436,
                    share_count: 118,
                    reduced_comment_count: "436",
                    reduced_share_count: "118",
                    actor_for_post: "100004875732895",
                    reactioncount: 40191,
                    reactioncountmap: {
                        "1": {default: 24622},
                        "2": {default: 14017},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 837},
                        "3": {default: 188},
                        "16": {default: 503},
                        "7": {default: 24},
                        "8": {default: 0}
                    },
                    reactorids: null,
                    reactioncountreduced: "40K",
                    supportedreactions: [1, 2, 16, 4, 3, 7, 8],
                    userreactions: null,
                    reactionsentence: {
                        current: {text: "Bạn, Trần Thị Hậu và 40K người khác"},
                        alternate: {text: "Trần Thị Hậu và 40K người khác"}
                    },
                    reactionsentences: {
                        current: {text: "Bạn, Trần Thị Hậu và 40K người khác"},
                        alternate: {text: "Trần Thị Hậu và 40K người khác"}
                    },
                    viewerreaction: 1,
                    reactiondisplaystrategy: "none",
                    request_id: "0",
                    timestamp: 1621909288.5443
                }]], ["MReactionsBlingBar", "init", ["__elem_7216e2ae_0_k_rW"], [{
                    elements: {container: {__m: "__elem_7216e2ae_0_k_rW"}},
                    feedbackTargetID: 319804972836300,
                    requestID: "0",
                    separateCommentsLink: false,
                    shouldAnchor: false,
                    isDarkMode: false,
                    darkModeLinks: {}
                }]], ["MUFIActorSelectorBootloader", "initBootloadHook", ["__elem_a588f507_0_4_xk", "__markup_a588f507_0_3_/Z", "HTML", "__elem_ad31d0c7_0_2_CC"], [{
                    container: {__m: "__elem_a588f507_0_4_xk"},
                    reactElementProps: {
                        feedbackTargetID: "319804972836300",
                        feedbackTargetOwnerID: "100044204000528",
                        initialSelectedActorID: "100004875732895",
                        initialSelectedActorProfilePicURI: "https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=9128f4&efg=eyJpIjoidCJ9&_nc_ohc=fMRrGcbCThMAX9smDEP&_nc_ht=scontent.fhan3-2.fna&tp=5&oh=75d8e23c28796b13cd496a044adc1687&oe=60D05357",
                        location: null,
                        showFlyoutOnRender: true
                    },
                    loadingFlyoutContent: {__m: "__markup_a588f507_0_3_/Z"},
                    loadingFlyoutContext: {__m: "__elem_ad31d0c7_0_2_CC"}
                }]], ["__inst_60460fe7_0_2_EN"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_2_GB"], [{__m: "__elem_3e7e4274_0_2_GB"}]], ["MUFIComposerFocus", "init", [], []], ["MLiveData", "set", [], ["319804949502969", {
                    ft_ent_identifier: 319804949502969,
                    comment_count: 445,
                    share_count: 58,
                    reduced_comment_count: "445",
                    reduced_share_count: "58",
                    actor_for_post: "100004875732895",
                    reactioncount: 45655,
                    reactioncountmap: {
                        "1": {default: 15237},
                        "2": {default: 1227},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 28546},
                        "3": {default: 29},
                        "16": {default: 193},
                        "7": {default: 423},
                        "8": {default: 0}
                    },
                    reactorids: null,
                    reactioncountreduced: "45K",
                    supportedreactions: [1, 2, 16, 4, 3, 7, 8],
                    userreactions: null,
                    reactionsentence: {
                        current: {text: "Trần Thị Hậu và 45K người khác"},
                        alternate: {text: "Bạn, Trần Thị Hậu và 45K người khác"}
                    },
                    reactionsentences: {
                        current: {text: "Trần Thị Hậu và 45K người khác"},
                        alternate: {text: "Bạn, Trần Thị Hậu và 45K người khác"}
                    },
                    viewerreaction: 0,
                    reactiondisplaystrategy: "none",
                    request_id: "0",
                    timestamp: 1621909288.5499
                }]], ["MReactionsBlingBar", "init", ["__elem_7216e2ae_0_l_u2"], [{
                    elements: {container: {__m: "__elem_7216e2ae_0_l_u2"}},
                    feedbackTargetID: 319804949502969,
                    requestID: "0",
                    separateCommentsLink: false,
                    shouldAnchor: false,
                    isDarkMode: false,
                    darkModeLinks: {}
                }]], ["MUFIActorSelectorBootloader", "initBootloadHook", ["__elem_a588f507_0_5_Q2", "__markup_a588f507_0_4_VZ", "HTML", "__elem_ad31d0c7_0_3_yk"], [{
                    container: {__m: "__elem_a588f507_0_5_Q2"},
                    reactElementProps: {
                        feedbackTargetID: "319804949502969",
                        feedbackTargetOwnerID: "100044204000528",
                        initialSelectedActorID: "100004875732895",
                        initialSelectedActorProfilePicURI: "https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=9128f4&efg=eyJpIjoidCJ9&_nc_ohc=fMRrGcbCThMAX9smDEP&_nc_ht=scontent.fhan3-2.fna&tp=5&oh=75d8e23c28796b13cd496a044adc1687&oe=60D05357",
                        location: null,
                        showFlyoutOnRender: true
                    },
                    loadingFlyoutContent: {__m: "__markup_a588f507_0_4_VZ"},
                    loadingFlyoutContext: {__m: "__elem_ad31d0c7_0_3_yk"}
                }]], ["__inst_60460fe7_0_3_Tx"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_3_2C"], [{__m: "__elem_3e7e4274_0_3_2C"}]], ["MUFIComposerFocus", "init", [], []], ["MCommentViewportTracking", "loadedComments", [], []], ["MLiveData", "set", [], ["319804989502965", {
                    ft_ent_identifier: 319804989502965,
                    comment_count: 431,
                    share_count: 132,
                    reduced_comment_count: "431",
                    reduced_share_count: "132",
                    actor_for_post: "100004875732895",
                    reactioncount: 38815,
                    reactioncountmap: {
                        "1": {default: 11142},
                        "2": {default: 312},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 22145},
                        "3": {default: 53},
                        "16": {default: 58},
                        "7": {default: 5103},
                        "8": {default: 2}
                    },
                    reactorids: null,
                    reactioncountreduced: "38K",
                    supportedreactions: [1, 2, 16, 4, 3, 7, 8],
                    userreactions: null,
                    reactionsentence: {
                        current: {text: "Lan Đặng và 38K người khác"},
                        alternate: {text: "Bạn, Lan Đặng và 38K người khác"}
                    },
                    reactionsentences: {
                        current: {text: "Lan Đặng và 38K người khác"},
                        alternate: {text: "Bạn, Lan Đặng và 38K người khác"}
                    },
                    viewerreaction: 0,
                    reactiondisplaystrategy: "none",
                    request_id: "0",
                    timestamp: 1621909288.5981
                }]], ["MReactionsBlingBar", "init", ["__elem_7216e2ae_0_m_vM"], [{
                    elements: {container: {__m: "__elem_7216e2ae_0_m_vM"}},
                    feedbackTargetID: 319804989502965,
                    requestID: "0",
                    separateCommentsLink: false,
                    shouldAnchor: false,
                    isDarkMode: false,
                    darkModeLinks: {}
                }]], ["MUFIActorSelectorBootloader", "initBootloadHook", ["__elem_a588f507_0_6_FW", "__markup_a588f507_0_5_n0", "HTML", "__elem_ad31d0c7_0_4_9Z"], [{
                    container: {__m: "__elem_a588f507_0_6_FW"},
                    reactElementProps: {
                        feedbackTargetID: "319804989502965",
                        feedbackTargetOwnerID: "100044204000528",
                        initialSelectedActorID: "100004875732895",
                        initialSelectedActorProfilePicURI: "https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=9128f4&efg=eyJpIjoidCJ9&_nc_ohc=fMRrGcbCThMAX9smDEP&_nc_ht=scontent.fhan3-2.fna&tp=5&oh=75d8e23c28796b13cd496a044adc1687&oe=60D05357",
                        location: null,
                        showFlyoutOnRender: true
                    },
                    loadingFlyoutContent: {__m: "__markup_a588f507_0_5_n0"},
                    loadingFlyoutContext: {__m: "__elem_ad31d0c7_0_4_9Z"}
                }]], ["__inst_60460fe7_0_4_+t"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_4_0S"], [{__m: "__elem_3e7e4274_0_4_0S"}]], ["MUFIComposerFocus", "init", [], []], ["MUFIStaticCommentViewportTracking", "trackStatically", ["__elem_a53d786a_0_0_Vp"], [[{__m: "__elem_a53d786a_0_0_Vp"}], true, true, "ranked_threaded", "319809989502465"]], ["InitMAjaxify"], ["__inst_12277355_0_0_hM"], ["MLiveData", "set", [], ["319804969502967", {
                    ft_ent_identifier: 319804969502967,
                    comment_count: 306,
                    share_count: 151,
                    reduced_comment_count: "306",
                    reduced_share_count: "151",
                    actor_for_post: "100004875732895",
                    reactioncount: 43624,
                    reactioncountmap: {
                        "1": {default: 12553},
                        "2": {default: 533},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 29905},
                        "3": {default: 42},
                        "16": {default: 105},
                        "7": {default: 485},
                        "8": {default: 1}
                    },
                    reactorids: null,
                    reactioncountreduced: "43K",
                    supportedreactions: [1, 2, 16, 4, 3, 7, 8],
                    userreactions: null,
                    reactionsentence: {
                        current: {text: "Sơn Khương và 43K người khác"},
                        alternate: {text: "Bạn, Sơn Khương và 43K người khác"}
                    },
                    reactionsentences: {
                        current: {text: "Sơn Khương và 43K người khác"},
                        alternate: {text: "Bạn, Sơn Khương và 43K người khác"}
                    },
                    viewerreaction: 0,
                    reactiondisplaystrategy: "none",
                    request_id: "0",
                    timestamp: 1621909288.623
                }]], ["MReactionsBlingBar", "init", ["__elem_7216e2ae_0_n_wl"], [{
                    elements: {container: {__m: "__elem_7216e2ae_0_n_wl"}},
                    feedbackTargetID: 319804969502967,
                    requestID: "0",
                    separateCommentsLink: false,
                    shouldAnchor: false,
                    isDarkMode: false,
                    darkModeLinks: {}
                }]], ["MUFIActorSelectorBootloader", "initBootloadHook", ["__elem_a588f507_0_7_iv", "__markup_a588f507_0_6_/x", "HTML", "__elem_ad31d0c7_0_5_M3"], [{
                    container: {__m: "__elem_a588f507_0_7_iv"},
                    reactElementProps: {
                        feedbackTargetID: "319804969502967",
                        feedbackTargetOwnerID: "100044204000528",
                        initialSelectedActorID: "100004875732895",
                        initialSelectedActorProfilePicURI: "https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=9128f4&efg=eyJpIjoidCJ9&_nc_ohc=fMRrGcbCThMAX9smDEP&_nc_ht=scontent.fhan3-2.fna&tp=5&oh=75d8e23c28796b13cd496a044adc1687&oe=60D05357",
                        location: null,
                        showFlyoutOnRender: true
                    },
                    loadingFlyoutContent: {__m: "__markup_a588f507_0_6_/x"},
                    loadingFlyoutContext: {__m: "__elem_ad31d0c7_0_5_M3"}
                }]], ["__inst_60460fe7_0_5_tR"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_5_q2"], [{__m: "__elem_3e7e4274_0_5_q2"}]], ["MUFIComposerFocus", "init", [], []], ["MLiveData", "set", [], ["319805139502950", {
                    ft_ent_identifier: 319805139502950,
                    comment_count: 340,
                    share_count: 32,
                    reduced_comment_count: "340",
                    reduced_share_count: "32",
                    actor_for_post: "100004875732895",
                    reactioncount: 35116,
                    reactioncountmap: {
                        "1": {default: 16642},
                        "2": {default: 2616},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 15438},
                        "3": {default: 39},
                        "16": {default: 176},
                        "7": {default: 205},
                        "8": {default: 0}
                    },
                    reactorids: null,
                    reactioncountreduced: "35K",
                    supportedreactions: [1, 2, 16, 4, 3, 7, 8],
                    userreactions: null,
                    reactionsentence: {
                        current: {text: "Hứa Minh Đạt và 35K người khác"},
                        alternate: {text: "Bạn, Hứa Minh Đạt và 35K người khác"}
                    },
                    reactionsentences: {
                        current: {text: "Hứa Minh Đạt và 35K người khác"},
                        alternate: {text: "Bạn, Hứa Minh Đạt và 35K người khác"}
                    },
                    viewerreaction: 0,
                    reactiondisplaystrategy: "none",
                    request_id: "0",
                    timestamp: 1621909288.6565
                }]], ["MReactionsBlingBar", "init", ["__elem_7216e2ae_0_o_mq"], [{
                    elements: {container: {__m: "__elem_7216e2ae_0_o_mq"}},
                    feedbackTargetID: 319805139502950,
                    requestID: "0",
                    separateCommentsLink: false,
                    shouldAnchor: false,
                    isDarkMode: false,
                    darkModeLinks: {}
                }]], ["MUFIActorSelectorBootloader", "initBootloadHook", ["__elem_a588f507_0_8_qg", "__markup_a588f507_0_7_/j", "HTML", "__elem_ad31d0c7_0_6_k1"], [{
                    container: {__m: "__elem_a588f507_0_8_qg"},
                    reactElementProps: {
                        feedbackTargetID: "319805139502950",
                        feedbackTargetOwnerID: "100044204000528",
                        initialSelectedActorID: "100004875732895",
                        initialSelectedActorProfilePicURI: "https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=9128f4&efg=eyJpIjoidCJ9&_nc_ohc=fMRrGcbCThMAX9smDEP&_nc_ht=scontent.fhan3-2.fna&tp=5&oh=75d8e23c28796b13cd496a044adc1687&oe=60D05357",
                        location: null,
                        showFlyoutOnRender: true
                    },
                    loadingFlyoutContent: {__m: "__markup_a588f507_0_7_/j"},
                    loadingFlyoutContext: {__m: "__elem_ad31d0c7_0_6_k1"}
                }]], ["__inst_60460fe7_0_6_JU"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_6_fB"], [{__m: "__elem_3e7e4274_0_6_fB"}]], ["MUFIComposerFocus", "init", [], []], ["MLiveData", "set", [], ["319805066169624", {
                    ft_ent_identifier: 319805066169624,
                    comment_count: 859,
                    share_count: 489,
                    reduced_comment_count: "859",
                    reduced_share_count: "489",
                    actor_for_post: "100004875732895",
                    reactioncount: 77261,
                    reactioncountmap: {
                        "1": {default: 25359},
                        "2": {default: 597},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 50120},
                        "3": {default: 74},
                        "16": {default: 175},
                        "7": {default: 936},
                        "8": {default: 0}
                    },
                    reactorids: null,
                    reactioncountreduced: "77K",
                    supportedreactions: [1, 2, 16, 4, 3, 7, 8],
                    userreactions: null,
                    reactionsentence: {
                        current: {text: "Nguyễn Thị Yến Nhi và 77K người khác"},
                        alternate: {text: "Bạn, Nguyễn Thị Yến Nhi và 77K người khác"}
                    },
                    reactionsentences: {
                        current: {text: "Nguyễn Thị Yến Nhi và 77K người khác"},
                        alternate: {text: "Bạn, Nguyễn Thị Yến Nhi và 77K người khác"}
                    },
                    viewerreaction: 0,
                    reactiondisplaystrategy: "none",
                    request_id: "0",
                    timestamp: 1621909288.678
                }]], ["MReactionsBlingBar", "init", ["__elem_7216e2ae_0_p_3u"], [{
                    elements: {container: {__m: "__elem_7216e2ae_0_p_3u"}},
                    feedbackTargetID: 319805066169624,
                    requestID: "0",
                    separateCommentsLink: false,
                    shouldAnchor: false,
                    isDarkMode: false,
                    darkModeLinks: {}
                }]], ["MUFIActorSelectorBootloader", "initBootloadHook", ["__elem_a588f507_0_9_C1", "__markup_a588f507_0_8_uv", "HTML", "__elem_ad31d0c7_0_7_dM"], [{
                    container: {__m: "__elem_a588f507_0_9_C1"},
                    reactElementProps: {
                        feedbackTargetID: "319805066169624",
                        feedbackTargetOwnerID: "100044204000528",
                        initialSelectedActorID: "100004875732895",
                        initialSelectedActorProfilePicURI: "https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=9128f4&efg=eyJpIjoidCJ9&_nc_ohc=fMRrGcbCThMAX9smDEP&_nc_ht=scontent.fhan3-2.fna&tp=5&oh=75d8e23c28796b13cd496a044adc1687&oe=60D05357",
                        location: null,
                        showFlyoutOnRender: true
                    },
                    loadingFlyoutContent: {__m: "__markup_a588f507_0_8_uv"},
                    loadingFlyoutContext: {__m: "__elem_ad31d0c7_0_7_dM"}
                }]], ["__inst_60460fe7_0_7_Vq"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_7_29"], [{__m: "__elem_3e7e4274_0_7_29"}]], ["MUFIComposerFocus", "init", [], []], ["MLiveData", "set", [], ["319809989502465", {
                    ft_ent_identifier: 319809989502465,
                    comment_count: 5952,
                    share_count: 10066,
                    reduced_comment_count: "5,9K",
                    reduced_share_count: "10K",
                    actor_for_post: "100004875732895",
                    reactioncount: 352198,
                    reactioncountmap: {
                        "1": {default: 242051},
                        "2": {default: 56879},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 49904},
                        "3": {default: 266},
                        "16": {default: 2632},
                        "7": {default: 462},
                        "8": {default: 4}
                    },
                    reactorids: null,
                    reactioncountreduced: "352K",
                    supportedreactions: [1, 2, 16, 4, 3, 7, 8],
                    userreactions: null,
                    reactionsentence: {
                        current: {text: "Lê Nguyễn Linh và 352K người khác"},
                        alternate: {text: "Bạn, Lê Nguyễn Linh và 352K người khác"}
                    },
                    reactionsentences: {
                        current: {text: "Lê Nguyễn Linh và 352K người khác"},
                        alternate: {text: "Bạn, Lê Nguyễn Linh và 352K người khác"}
                    },
                    viewerreaction: 0,
                    reactiondisplaystrategy: "none",
                    request_id: "0",
                    timestamp: 1621909288.6849
                }]], ["MReactionsBlingBar", "init", ["__elem_7216e2ae_0_q_GI"], [{
                    elements: {container: {__m: "__elem_7216e2ae_0_q_GI"}},
                    feedbackTargetID: 319809989502465,
                    requestID: "0",
                    separateCommentsLink: false,
                    shouldAnchor: false,
                    isDarkMode: false,
                    darkModeLinks: {}
                }]], ["MUFIActorSelectorBootloader", "initBootloadHook", ["__elem_a588f507_0_a_j9", "__markup_a588f507_0_9_p6", "HTML", "__elem_ad31d0c7_0_8_wk"], [{
                    container: {__m: "__elem_a588f507_0_a_j9"},
                    reactElementProps: {
                        feedbackTargetID: "319809989502465",
                        feedbackTargetOwnerID: "100044204000528",
                        initialSelectedActorID: "100004875732895",
                        initialSelectedActorProfilePicURI: "https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/cp0/e15/q65/c0.12.50.50a/p50x50/152731199_1736937766478731_5440252092641175029_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=9128f4&efg=eyJpIjoidCJ9&_nc_ohc=fMRrGcbCThMAX9smDEP&_nc_ht=scontent.fhan3-2.fna&tp=5&oh=75d8e23c28796b13cd496a044adc1687&oe=60D05357",
                        location: null,
                        showFlyoutOnRender: true
                    },
                    loadingFlyoutContent: {__m: "__markup_a588f507_0_9_p6"},
                    loadingFlyoutContext: {__m: "__elem_ad31d0c7_0_8_wk"}
                }]], ["__inst_60460fe7_0_8_2K"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_8_RI"], [{__m: "__elem_3e7e4274_0_8_RI"}]], ["MUFIComposerFocus", "init", [], []], ["MCommentViewportTracking", "loadedComments", [], []], ["MUFIStaticCommentViewportTracking", "trackStatically", ["__elem_a53d786a_0_1_Af"], [[{__m: "__elem_a53d786a_0_1_Af"}], true, true, "ranked_threaded", "319805066169624"]], ["__inst_12277355_0_1_tO"], ["MCommentViewportTracking", "loadedComments", [], []], ["MUFIStaticCommentViewportTracking", "trackStatically", ["__elem_a53d786a_0_2_z/"], [[{__m: "__elem_a53d786a_0_2_z/"}], true, true, "ranked_threaded", "319804989502965"]], ["__inst_12277355_0_2_Wd"], ["MCommentViewportTracking", "loadedComments", [], []], ["MUFIStaticCommentViewportTracking", "trackStatically", ["__elem_a53d786a_0_3_c3"], [[{__m: "__elem_a53d786a_0_3_c3"}], true, true, "ranked_threaded", "319805122836285"]], ["__inst_12277355_0_3_fT"], ["MCommentViewportTracking", "loadedComments", [], []], ["MUFIStaticCommentViewportTracking", "trackStatically", ["__elem_a53d786a_0_4_sv"], [[{__m: "__elem_a53d786a_0_4_sv"}], true, true, "ranked_threaded", "319804912836306"]], ["__inst_12277355_0_4_aF"], ["MCommentViewportTracking", "loadedComments", [], []], ["MUFIStaticCommentViewportTracking", "trackStatically", ["__elem_a53d786a_0_5_sq"], [[{__m: "__elem_a53d786a_0_5_sq"}], true, true, "ranked_threaded", "319805139502950"]], ["__inst_12277355_0_5_aB"], ["__inst_a58ecbb4_0_0_BS"], ["MCommentViewportTracking", "loadedComments", [], []], ["MUFIStaticCommentViewportTracking", "trackStatically", ["__elem_a53d786a_0_6_yB"], [[{__m: "__elem_a53d786a_0_6_yB"}], true, true, "ranked_threaded", "319804972836300"]], ["__inst_12277355_0_6_0n"], ["MUFICommentReplyLink", "initInlineRepliesWithMention", ["__elem_1acd3027_0_2_EF"], [{
                    composerID: "comment_form_100044204000528_319809989502465_reply_319809989502465_165696068892257",
                    loadComposerURI: "/comment/replies/?ctoken=319809989502465_165696068892257&count=81&curr&showcount=3&isinline&initcomp&isaction&actor_id=100004875732895&ft_ent_identifier=319809989502465&gfid=AQBC4uiUSknZWJ1Ybh8",
                    loggingTargetFBID: null,
                    node: {__m: "__elem_1acd3027_0_2_EF"},
                    placeholderID: "comment_replies_inline_composer_placeholder_319809989502465_165696068892257",
                    replyAuthorName: null,
                    replyAuthorID: null
                }]], ["__inst_a58ecbb4_0_1_oV"], ["__inst_a58ecbb4_0_2_cA"], ["__inst_a58ecbb4_0_3_h5"], ["MCommentViewportTracking", "loadedComments", [], []], ["__inst_a58ecbb4_0_4_/X"], ["MUFIStaticCommentViewportTracking", "trackStatically", ["__elem_a53d786a_0_7_wI"], [[{__m: "__elem_a53d786a_0_7_wI"}], true, true, "ranked_threaded", "319804949502969"]], ["__inst_12277355_0_7_9d"], ["__inst_a58ecbb4_0_5_Ji"], ["MUFICommentReplyLink", "initInlineRepliesWithMention", ["__elem_1acd3027_0_8_Qe"], [{
                    composerID: "comment_form_100044204000528_319804989502965_reply_319804989502965_319816762835121",
                    loadComposerURI: "/comment/replies/?ctoken=319804989502965_319816762835121&count=28&curr&showcount=3&isinline&initcomp&isaction&actor_id=100004875732895&ft_ent_identifier=319804989502965&gfid=AQAYoyF35VDw5t6Wa34",
                    loggingTargetFBID: null,
                    node: {__m: "__elem_1acd3027_0_8_Qe"},
                    placeholderID: "comment_replies_inline_composer_placeholder_319804989502965_319816762835121",
                    replyAuthorName: null,
                    replyAuthorID: null
                }]], ["__inst_083cf14b_0_9_1A"], ["MShareFlyout", "init", ["__inst_083cf14b_0_9_1A"], [{__m: "__inst_083cf14b_0_9_1A"}, 286958161406148, false, {
                    avoidsBluebarOverlap: true,
                    bluebarNoOverlapBuffer: 28,
                    useSpatialNavInKaiOS: false,
                    shareOptionOrder: ["share-one-click-button", "share-with-message-button", "share-in-a-private-message-button", "share-to-whatsapp", "share-in-a-group-button", "share-to-page-button", "share-more-options-button"],
                    isHardDiodeEnabled: false
                }, null]], ["__inst_a58ecbb4_0_6_Tq"], ["__inst_5878081c_0_1_US"], ["MLiveData", "update", [], ["319805066169624_319977476152383", {
                    ft_ent_identifier: "319805066169624_319977476152383",
                    has_viewer_liked: false,
                    like_count: 58,
                    can_react: true,
                    reactioncount: 213,
                    reactioncountmap: {
                        "1": {default: 58},
                        "2": {default: 0},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 154},
                        "3": {default: 0},
                        "16": {default: 1},
                        "7": {default: 0},
                        "8": {default: 0}
                    },
                    reactioncountreduced: "213",
                    viewerreaction: 0,
                    request_id: "0",
                    timestamp: 1621909289.187
                }]], ["__inst_08a75727_0_0_/a"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_9_q2"], [{__m: "__elem_3e7e4274_0_9_q2"}]], ["MCommentViewportTracking", "loadedComments", [], []], ["MUFIStaticCommentViewportTracking", "trackStatically", ["__elem_a53d786a_0_8_HH"], [[{__m: "__elem_a53d786a_0_8_HH"}], true, true, "ranked_threaded", "319804969502967"]], ["__inst_12277355_0_8_z8"], ["__inst_a58ecbb4_0_7_yc"], ["MUFICommentReplyLink", "initInlineRepliesWithMention", ["__elem_1acd3027_0_b_ls"], [{
                    composerID: "comment_form_100044204000528_319804949502969_reply_319804949502969_319975676152563",
                    loadComposerURI: "/comment/replies/?ctoken=319804949502969_319975676152563&count=4&curr&showcount=3&isinline&initcomp&isaction&actor_id=100004875732895&ft_ent_identifier=319804949502969&gfid=AQBFhvzvn7XycjQ3OoM",
                    loggingTargetFBID: null,
                    node: {__m: "__elem_1acd3027_0_b_ls"},
                    placeholderID: "comment_replies_inline_composer_placeholder_319804949502969_319975676152563",
                    replyAuthorName: null,
                    replyAuthorID: null
                }]], ["MLiveData", "update", [], ["319809989502465_165696068892257", {
                    ft_ent_identifier: "319809989502465_165696068892257",
                    has_viewer_liked: false,
                    like_count: 1476,
                    can_react: true,
                    reactioncount: 4058,
                    reactioncountmap: {
                        "1": {default: 1476},
                        "2": {default: 377},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 2090},
                        "3": {default: 10},
                        "16": {default: 87},
                        "7": {default: 18},
                        "8": {default: 0}
                    },
                    reactioncountreduced: "4K",
                    viewerreaction: 0,
                    request_id: "0",
                    timestamp: 1621909289.2099
                }]], ["__inst_08a75727_0_1_T0"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_a_Iy"], [{__m: "__elem_3e7e4274_0_a_Iy"}]], ["MUFICommentReplyLink", "initInlineRepliesWithMention", ["__elem_1acd3027_0_c_mW"], [{
                    composerID: "comment_form_100044204000528_319805122836285_reply_319805122836285_319978569485607",
                    loadComposerURI: "/comment/replies/?ctoken=319805122836285_319978569485607&count=1&curr&showcount=3&isinline&initcomp&isaction&actor_id=100004875732895&ft_ent_identifier=319805122836285&gfid=AQDHf-TYcjdd1KiKZ88",
                    loggingTargetFBID: null,
                    node: {__m: "__elem_1acd3027_0_c_mW"},
                    placeholderID: "comment_replies_inline_composer_placeholder_319805122836285_319978569485607",
                    replyAuthorName: null,
                    replyAuthorID: null
                }]], ["MUFICommentReplyLink", "initInlineRepliesWithMention", ["__elem_1acd3027_0_d_D9"], [{
                    composerID: "comment_form_100044204000528_319805066169624_reply_319805066169624_319977476152383",
                    loadComposerURI: "/comment/replies/?ctoken=319805066169624_319977476152383&count=1&curr&showcount=3&isinline&initcomp&isaction&actor_id=100004875732895&ft_ent_identifier=319805066169624&gfid=AQCvgsK-g6qPmCN9GMA",
                    loggingTargetFBID: null,
                    node: {__m: "__elem_1acd3027_0_d_D9"},
                    placeholderID: "comment_replies_inline_composer_placeholder_319805066169624_319977476152383",
                    replyAuthorName: null,
                    replyAuthorID: null
                }]], ["MUFICommentReplyLink", "initInlineRepliesWithMention", ["__elem_1acd3027_0_e_KN"], [{
                    composerID: "comment_form_100044204000528_319804972836300_reply_319804972836300_319976056152525",
                    loadComposerURI: "/comment/replies/?ctoken=319804972836300_319976056152525&count=0&curr&showcount=3&isinline&initcomp&isaction&actor_id=100004875732895&ft_ent_identifier=319804972836300&gfid=AQAlqXNAY4m1MyzFzW0",
                    loggingTargetFBID: null,
                    node: {__m: "__elem_1acd3027_0_e_KN"},
                    placeholderID: "comment_replies_inline_composer_placeholder_319804972836300_319976056152525",
                    replyAuthorName: null,
                    replyAuthorID: null
                }]], ["MUFICommentReplyLink", "initInlineRepliesWithMention", ["__elem_1acd3027_0_f_TM"], [{
                    composerID: "comment_form_100044204000528_319804912836306_reply_319804912836306_319979342818863",
                    loadComposerURI: "/comment/replies/?ctoken=319804912836306_319979342818863&count=0&curr&showcount=3&isinline&initcomp&isaction&actor_id=100004875732895&ft_ent_identifier=319804912836306&gfid=AQC8QGptLy2Xhk7IHjs",
                    loggingTargetFBID: null,
                    node: {__m: "__elem_1acd3027_0_f_TM"},
                    placeholderID: "comment_replies_inline_composer_placeholder_319804912836306_319979342818863",
                    replyAuthorName: null,
                    replyAuthorID: null
                }]], ["MUFICommentReplyLink", "initInlineRepliesWithMention", ["__elem_1acd3027_0_g_7S"], [{
                    composerID: "comment_form_100044204000528_319805139502950_reply_319805139502950_319976252819172",
                    loadComposerURI: "/comment/replies/?ctoken=319805139502950_319976252819172&count=0&curr&showcount=3&isinline&initcomp&isaction&actor_id=100004875732895&ft_ent_identifier=319805139502950&gfid=AQCOPDHCa4y-PGbN2ws",
                    loggingTargetFBID: null,
                    node: {__m: "__elem_1acd3027_0_g_7S"},
                    placeholderID: "comment_replies_inline_composer_placeholder_319805139502950_319976252819172",
                    replyAuthorName: null,
                    replyAuthorID: null
                }]], ["MLiveData", "update", [], ["319805122836285_319978569485607", {
                    ft_ent_identifier: "319805122836285_319978569485607",
                    has_viewer_liked: false,
                    like_count: 15,
                    can_react: true,
                    reactioncount: 75,
                    reactioncountmap: {
                        "1": {default: 15},
                        "2": {default: 0},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 47},
                        "3": {default: 0},
                        "16": {default: 0},
                        "7": {default: 13},
                        "8": {default: 0}
                    },
                    reactioncountreduced: "75",
                    viewerreaction: 0,
                    request_id: "0",
                    timestamp: 1621909289.2142
                }]], ["__inst_08a75727_0_2_Pg"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_b_MF"], [{__m: "__elem_3e7e4274_0_b_MF"}]], ["MLiveData", "update", [], ["319804989502965_319816762835121", {
                    ft_ent_identifier: "319804989502965_319816762835121",
                    has_viewer_liked: false,
                    like_count: 327,
                    can_react: true,
                    reactioncount: 2116,
                    reactioncountmap: {
                        "1": {default: 327},
                        "2": {default: 1},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 1590},
                        "3": {default: 3},
                        "16": {default: 1},
                        "7": {default: 194},
                        "8": {default: 0}
                    },
                    reactioncountreduced: "2,1K",
                    viewerreaction: 0,
                    request_id: "0",
                    timestamp: 1621909289.2158
                }]], ["__inst_08a75727_0_3_rR"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_c_4S"], [{__m: "__elem_3e7e4274_0_c_4S"}]], ["MLiveData", "update", [], ["319805139502950_319976252819172", {
                    ft_ent_identifier: "319805139502950_319976252819172",
                    has_viewer_liked: false,
                    like_count: 15,
                    can_react: true,
                    reactioncount: 108,
                    reactioncountmap: {
                        "1": {default: 15},
                        "2": {default: 1},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 81},
                        "3": {default: 0},
                        "16": {default: 0},
                        "7": {default: 10},
                        "8": {default: 1}
                    },
                    reactioncountreduced: "108",
                    viewerreaction: 0,
                    request_id: "0",
                    timestamp: 1621909289.2163
                }]], ["__inst_08a75727_0_4_yP"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_d_Lg"], [{__m: "__elem_3e7e4274_0_d_Lg"}]], ["MLiveData", "update", [], ["319804912836306_319979342818863", {
                    ft_ent_identifier: "319804912836306_319979342818863",
                    has_viewer_liked: false,
                    like_count: 9,
                    can_react: true,
                    reactioncount: 18,
                    reactioncountmap: {
                        "1": {default: 9},
                        "2": {default: 1},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 7},
                        "3": {default: 0},
                        "16": {default: 1},
                        "7": {default: 0},
                        "8": {default: 0}
                    },
                    reactioncountreduced: "18",
                    viewerreaction: 0,
                    request_id: "0",
                    timestamp: 1621909289.2177
                }]], ["__inst_08a75727_0_5_IY"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_e_/H"], [{__m: "__elem_3e7e4274_0_e_/H"}]], ["MLiveData", "update", [], ["319804972836300_319976056152525", {
                    ft_ent_identifier: "319804972836300_319976056152525",
                    has_viewer_liked: false,
                    like_count: 16,
                    can_react: true,
                    reactioncount: 31,
                    reactioncountmap: {
                        "1": {default: 16},
                        "2": {default: 1},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 14},
                        "3": {default: 0},
                        "16": {default: 0},
                        "7": {default: 0},
                        "8": {default: 0}
                    },
                    reactioncountreduced: "31",
                    viewerreaction: 0,
                    request_id: "0",
                    timestamp: 1621909289.219
                }]], ["__inst_08a75727_0_6_4x"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_f_LM"], [{__m: "__elem_3e7e4274_0_f_LM"}]], ["MLiveData", "update", [], ["319804949502969_319975676152563", {
                    ft_ent_identifier: "319804949502969_319975676152563",
                    has_viewer_liked: false,
                    like_count: 109,
                    can_react: true,
                    reactioncount: 631,
                    reactioncountmap: {
                        "1": {default: 109},
                        "2": {default: 0},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 514},
                        "3": {default: 1},
                        "16": {default: 0},
                        "7": {default: 7},
                        "8": {default: 0}
                    },
                    reactioncountreduced: "631",
                    viewerreaction: 0,
                    request_id: "0",
                    timestamp: 1621909289.23
                }]], ["__inst_08a75727_0_7_x1"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_g_jJ"], [{__m: "__elem_3e7e4274_0_g_jJ"}]], ["MUFICommentReplyLink", "initInlineRepliesWithMention", ["__elem_1acd3027_0_h_Dw"], [{
                    composerID: "comment_form_100044204000528_319804969502967_reply_319804969502967_319819196168211",
                    loadComposerURI: "/comment/replies/?ctoken=319804969502967_319819196168211&count=60&curr&showcount=3&isinline&initcomp&isaction&actor_id=100004875732895&ft_ent_identifier=319804969502967&gfid=AQA1rgJHADpgmW3yFLM",
                    loggingTargetFBID: null,
                    node: {__m: "__elem_1acd3027_0_h_Dw"},
                    placeholderID: "comment_replies_inline_composer_placeholder_319804969502967_319819196168211",
                    replyAuthorName: null,
                    replyAuthorID: null
                }]], ["__inst_a58ecbb4_0_8_gA"], ["MLiveData", "update", [], ["319804969502967_319819196168211", {
                    ft_ent_identifier: "319804969502967_319819196168211",
                    has_viewer_liked: false,
                    like_count: 742,
                    can_react: true,
                    reactioncount: 5590,
                    reactioncountmap: {
                        "1": {default: 742},
                        "2": {default: 21},
                        "11": {default: 0},
                        "12": {default: 0},
                        "4": {default: 4753},
                        "3": {default: 2},
                        "16": {default: 12},
                        "7": {default: 60},
                        "8": {default: 0}
                    },
                    reactioncountreduced: "5,5K",
                    viewerreaction: 0,
                    request_id: "0",
                    timestamp: 1621909289.2799
                }]], ["__inst_08a75727_0_8_8z"], ["MReactionsFlyout", "addAnchor", ["__elem_3e7e4274_0_h_6t"], [{__m: "__elem_3e7e4274_0_h_6t"}]], ["DGWRequestStreamClient"], ["RequireDeferredReference", "unblock", [], [["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "ContextualConfig", "BladeRunnerClient", "SkywalkerUtils", "FleetBeaconSubscriptionLauncher", "MPageControllerImpl", "MPageFetcherImpl", "MqttLongPollingRunner", "LogWebMemoryUsageFalcoEvent", "VisualCompletionGating", "DGWRequestStreamClient"]]]],
                pre_display_requires: [["AddressBar", "setupLoadListener", [], [], 4], ["MobileBigPipeStratcomProxy", "init", [], [], 4], ["Stratcom", "init", [], [], 4], ["MViewport", "init", [], [], 4], ["ViewportDimensions", "init", [], [], 4], ["MPageController", "init", [], [], 4], ["onSyncTTI", "run", [], [], 4], ["MLiteInit", "init", [], [], 4]]
            },
            hsrp: {
                hsdp: {
                    clpData: {
                        "1985308": {r: 1, s: 1},
                        "1743358": {r: 1},
                        "1744178": {r: 1, s: 1},
                        "1744251": {r: 100, s: 1},
                        "1755537": {r: 1},
                        "1814852": {r: 1},
                        "1828993": {r: 1, s: 1},
                        "1837559": {r: 1},
                        "1838142": {r: 1, s: 1},
                        "1942319": {r: 1, s: 1},
                        "1743922": {r: 1},
                        "1743925": {r: 1},
                        "1744057": {r: 5000, s: 1},
                        "1744058": {r: 5000, s: 1},
                        "1744059": {r: 5000, s: 1},
                        "1744060": {r: 5000, s: 1},
                        "1842512": {r: 1},
                        "1829319": {r: 1},
                        "1743690": {r: 1},
                        "1829320": {r: 1},
                        "1843988": {r: 1},
                        "1848815": {r: 10000, s: 1},
                        "1949898": {r: 1},
                        "1857112": {r: 1},
                        "1765264": {r: 1, s: 1},
                        "1743606": {r: 1},
                        "1876820": {r: 1, s: 1}
                    },
                    gkxData: {
                        "676837": {result: false, hash: "AT4N8wBZA8ctCdHwhLc"},
                        "1952739": {result: true, hash: "AT4Zq7lXWSlD3PCkwhg"},
                        "33": {result: false, hash: "AT7Zduan4-nOx61HEGs"},
                        "113": {result: false, hash: "AT4UEBnCWWtisiAc9E0"},
                        "227": {result: false, hash: "AT5yXnJxXfkiddJSKzI"},
                        "228": {result: false, hash: "AT72fqbZ2zzFtgPDEqw"},
                        "229": {result: false, hash: "AT6ACjjf9sN9o2h-mJ8"},
                        "230": {result: false, hash: "AT48pbZ7NNClsnHjh4s"},
                        "231": {result: false, hash: "AT5RtBjo7qezdTuhcjE"},
                        "232": {result: false, hash: "AT7oR6JnwzCZcq_WElE"},
                        "233": {result: false, hash: "AT7HvkjZGXZeuumhSyk"},
                        "234": {result: false, hash: "AT43RWQMxn7rZ-aHzX8"},
                        "235": {result: false, hash: "AT4gizq47dTbAJ5jBxA"},
                        "236": {result: false, hash: "AT5-wTIJKADCmxgtX5s"},
                        "871": {result: false, hash: "AT4vyfQGHTBrTQa9mIA"},
                        "676785": {result: true, hash: "AT6QWu67qnN8WyrXaGg"},
                        "676812": {result: true, hash: "AT6FULe6g-qrrrQdlB8"},
                        "820050": {result: true, hash: "AT7bjlcFFlowDw-SmzE"},
                        "985697": {result: false, hash: "AT6gOJD7fT0UjmgDuPg"},
                        "1070739": {result: false, hash: "AT5rKAR6NQAuoRaHFqA"},
                        "1099893": {result: false, hash: "AT5kly2LSZV_DKGRIIE"},
                        "1167394": {result: false, hash: "AT7BpN-tlUPwbIIFSD0"},
                        "1217157": {result: false, hash: "AT6B7YmllOsArnK6rbo"},
                        "1220172": {result: true, hash: "AT6p12MqyeJydkcHNNw"},
                        "1224637": {result: false, hash: "AT7JRluWxuwDm3Xz4KY"},
                        "1243442": {result: false, hash: "AT6H-KKvL_2kq8U2XkI"},
                        "1293002": {result: true, hash: "AT7d8M4YtRayz5bPOn4"},
                        "1344998": {result: false, hash: "AT6AC3E8qul_TQSi7iA"},
                        "1369861": {result: true, hash: "AT54OggZMnslpl9BRMk"},
                        "1382775": {result: false, hash: "AT7D5sd_gmE2NRtmXt4"},
                        "1383502": {result: false, hash: "AT51zMR8DxFUUVJ8K7M"},
                        "1388683": {result: false, hash: "AT63PwzAsKGj12Q6PNI"},
                        "1414060": {result: true, hash: "AT7_AztD0gnVK0F0PXQ"},
                        "1414691": {result: true, hash: "AT76k5pGxiKtyiqEPQw"},
                        "1443173": {result: true, hash: "AT4Sm0qRZlyNbNNqbJM"},
                        "1443174": {result: true, hash: "AT6WlvWOw8xmQp9TYi0"},
                        "1443175": {result: true, hash: "AT4nsCjXvDl38HSsaEk"},
                        "1443176": {result: true, hash: "AT5MNHvVhKdPRQvFBcc"},
                        "1465547": {result: true, hash: "AT6vAEvBaNKK9wipl1k"},
                        "1477298": {result: false, hash: "AT7BPI5FYPjB2xZV67w"},
                        "1554827": {result: false, hash: "AT7zueGLhGo0cT5xmxw"},
                        "1584864": {result: true, hash: "AT4DU9lVUoaQEWBESHE"},
                        "1604051": {result: true, hash: "AT5xo4UcigVzfUiRBpo"},
                        "1661070": {result: true, hash: "AT4MvmLhN7j-K1QpT08"},
                        "1723588": {result: false, hash: "AT485K2jwU-S2ruR_Gs"},
                        "1738486": {result: false, hash: "AT4cX37oQco6DwhU2zU"},
                        "1739138": {result: true, hash: "AT7HFdHT0cMRWzFZ4zo"},
                        "1739139": {result: true, hash: "AT71VKhGoaV2KEl0o7Q"},
                        "1739140": {result: true, hash: "AT5u_4ZZcvZCrvUlH0g"},
                        "1739141": {result: true, hash: "AT5P6ruKiBUUbFfc3Lo"},
                        "1742795": {result: false, hash: "AT6dbnY5JZm_bTIN67A"},
                        "1749562": {result: true, hash: "AT4HGH4aW7jIAOAeaF4"},
                        "1766003": {result: false, hash: "AT7mYAWuFiG-SzgLXDA"},
                        "1783697": {result: true, hash: "AT73vxv9UVaIw0aVcvE"},
                        "1809663": {result: false, hash: "AT7aaCUO35jSxYX-iwU"},
                        "1861546": {result: false, hash: "AT7TDKkMR4gPryZgD3c"},
                        "1865464": {result: true, hash: "AT4g-hlnEcOIJehcr3E"},
                        "1872325": {result: true, hash: "AT4WDV07rUK5enGircE"},
                        "1902557": {result: true, hash: "AT65UJsDIcU0U_YBPgQ"},
                        "1906451": {result: false, hash: "AT4F8Xj0SjymKWJluts"},
                        "1912204": {result: false, hash: "AT72FnwJF9IKaIf-1XI"},
                        "1923684": {result: false, hash: "AT7mpVz8edoKjtOGs4M"},
                        "1951072": {result: true, hash: "AT7aEvzO1O_H_j8HC1A"},
                        "1964455": {result: false, hash: "AT65Nmt5XyXEuNW4fxs"},
                        "1969466": {result: false, hash: "AT5pb0-O1YUbvm8nHDY"},
                        "1984726": {result: false, hash: "AT59ZE8-a84mNocMy90"},
                        "1990719": {result: false, hash: "AT415Q1u6JvYBHpxW_g"},
                        "1996877": {result: false, hash: "AT5y7nbgg0-hEl565kg"},
                        "816008": {result: true, hash: "AT4o2zyxgFr4Y89dwTo"},
                        "1059877": {result: false, hash: "AT53XV4TWT4lc3_m4KA"},
                        "712819": {result: true, hash: "AT79nTpb4gT-yu86Z5E"},
                        "910664": {result: false, hash: "AT69YyFAmMObhORGxeg"},
                        "1511920": {result: true, hash: "AT6pY2ROWoYnl3_cOMM"},
                        "176": {result: true, hash: "AT4NwIszPuVVxWDO2t8"},
                        "1163": {result: false, hash: "AT5GJhe0ZrlTQKtnw2s"},
                        "687751": {result: false, hash: "AT5w99diRWCeIUcj_08"},
                        "778292": {result: false, hash: "AT574OhXHwX0kRP2uCw"},
                        "832242": {result: false, hash: "AT7QZmREZ7b0HQdODrc"},
                        "863760": {result: false, hash: "AT7kJGO3H9FsEkFLTes"},
                        "945829": {result: true, hash: "AT6KFs8jy_GkmgnUHEI"},
                        "968609": {result: true, hash: "AT7nKteWCVYK6uN6dGg"},
                        "1001007": {result: false, hash: "AT54HpnriRBxXJ_M9bg"},
                        "1066746": {result: false, hash: "AT55_E5b8Sj7u5rUmbQ"},
                        "1166607": {result: true, hash: "AT7xrOkGBcaF8I5u9OM"},
                        "1186990": {result: false, hash: "AT6XzOCaW6jCCzIMdVE"},
                        "1272991": {result: false, hash: "AT5AFdjJAny3SLPrgTA"},
                        "1831204": {result: true, hash: "AT6c5pTv0JhlSnaHQRE"},
                        "676811": {result: false, hash: "AT4zC0IqvJCbKsUeKR4"},
                        "148": {result: false, hash: "AT5V6Me6WVwsRI3w88A"},
                        "1994902": {result: false, hash: "AT7e2ODUd_zspuYFcw8"},
                        "726410": {result: true, hash: "AT7w-jbTa3ueodj3EiU"},
                        "676781": {result: true, hash: "AT4-DnA47xPbjtkwg4c"},
                        "862436": {result: true, hash: "AT7YsAcWL8-1WZrOSB0"},
                        "1856755": {result: false, hash: "AT6QfXhS73R2_BofyOE"},
                        "1902233": {result: true, hash: "AT6KvlEVVynsnGSyNVU"},
                        "1955413": {result: true, hash: "AT5Tny0Wtlel6ZKHbIM"},
                        "307": {result: true, hash: "AT5dPMZBMiNY0f7urn8"},
                        "1059928": {result: false, hash: "AT7JCLP7fcWiXKX0WtI"},
                        "1136644": {result: false, hash: "AT4tJOZ3-2efL8iDHZ0"},
                        "1876822": {result: false, hash: "AT7R3tsI3PgzasCMMHU"},
                        "1954641": {result: false, hash: "AT6RT0z34NHHtONrUA8"},
                        "44": {result: false, hash: "AT7-iXQKgc4paOa7F8E"},
                        "12": {result: false, hash: "AT7MdxfOMhMQYcz0L0k"},
                        "729631": {result: false, hash: "AT7b0tj8AHWG5lTFYxA"},
                        "1281505": {result: false, hash: "AT4PHZM9gFoypCjQ3NQ"},
                        "1291023": {result: false, hash: "AT519LseIG1nwq3ouqA"},
                        "1294182": {result: false, hash: "AT4vd6mwrtAJouEJMS0"},
                        "1399218": {result: true, hash: "AT6guCW1eyIkOV1Ezic"},
                        "1401060": {result: true, hash: "AT5aetN5Gb3reIXVC04"},
                        "1485055": {result: true, hash: "AT5lkGxmhfrVKlcnTxw"},
                        "1596063": {result: false, hash: "AT7JHuDWtaOqRuBUW6M"},
                        "1597642": {result: true, hash: "AT78G4fDXhlnMl7oPgU"},
                        "1620803": {result: true, hash: "AT5gdwnzUqRbHlnPKZ4"},
                        "1647260": {result: false, hash: "AT4WdkrQSGE5dIsEqdM"},
                        "1695831": {result: false, hash: "AT7RA6TJmDFGF-D6KRY"},
                        "1722014": {result: false, hash: "AT6_M5gpc6RLrHjc3kU"},
                        "1778302": {result: false, hash: "AT65fisZhmc2X92EwTU"},
                        "1840809": {result: false, hash: "AT5nYctoTsr7alRiVt4"},
                        "1848749": {result: false, hash: "AT5GsH9Kb-3W-taZY_w"},
                        "1906871": {result: false, hash: "AT6dIBiVv9bUDXlmYmg"},
                        "1985945": {result: false, hash: "AT66Oo5lY__5wUTpHVU"},
                        "2026019": {result: false, hash: "AT6u277d-9qk94LmF7M"}
                    },
                    ixData: {
                        "91342": {sprited: 1, spriteCssClass: "sx_567497", spriteMapCssClass: "sp_3kqGTX-5gPB"},
                        "91343": {sprited: 1, spriteCssClass: "sx_a3d099", spriteMapCssClass: "sp_3kqGTX-5gPB"},
                        "91346": {sprited: 1, spriteCssClass: "sx_84eff5", spriteMapCssClass: "sp_3kqGTX-5gPB"},
                        "91347": {sprited: 1, spriteCssClass: "sx_db55ba", spriteMapCssClass: "sp_3kqGTX-5gPB"},
                        "91348": {sprited: 1, spriteCssClass: "sx_af4bc9", spriteMapCssClass: "sp_3kqGTX-5gPB"},
                        "480474": {sprited: 1, spriteCssClass: "sx_7d6371", spriteMapCssClass: "sp_3kqGTX-5gPB"},
                        "516463": {sprited: 1, spriteCssClass: "sx_a28665", spriteMapCssClass: "sp_3kqGTX-5gPB"},
                        "794076": {sprited: 1, spriteCssClass: "sx_6e9936", spriteMapCssClass: "sp_3kqGTX-5gPB"},
                        "1358036": {sprited: 1, spriteCssClass: "sx_5fa691", spriteMapCssClass: "sp_3kqGTX-5gPB"},
                        "1417071": {sprited: 1, spriteCssClass: "sx_a531a8", spriteMapCssClass: "sp_3kqGTX-5gPB"},
                        "87146": {sprited: 1, spriteCssClass: "sx_cf21cd", spriteMapCssClass: "sp_2ev2XfYE8iT"},
                        "90727": {sprited: 1, spriteCssClass: "sx_fdc690", spriteMapCssClass: "sp_2ev2XfYE8iT"},
                        "90728": {sprited: 1, spriteCssClass: "sx_54060a", spriteMapCssClass: "sp_2ev2XfYE8iT"},
                        "432358": {sprited: 1, spriteCssClass: "sx_c222eb", spriteMapCssClass: "sp_2ev2XfYE8iT"},
                        "432368": {sprited: 1, spriteCssClass: "sx_835b03", spriteMapCssClass: "sp_2ev2XfYE8iT"},
                        "484861": {sprited: 1, spriteCssClass: "sx_ed283a", spriteMapCssClass: "sp_2ev2XfYE8iT"}
                    },
                    qexData: {
                        "14": {r: false},
                        "117": {r: false},
                        "225": {r: "disabled"},
                        "786285": {r: false},
                        "786286": {r: false},
                        "794077": {r: false},
                        "795614": {r: false},
                        "803129": {r: false},
                        "817052": {r: false},
                        "154": {
                            r: null,
                            l: "J{\"u\":\"bizweb_push_notification\",\"t\":\"fb_acting_account\",\"gks\":[],\"qe\":null}"
                        },
                        "1786756": {r: 0},
                        "833102": {r: false},
                        "1907780": {
                            r: false,
                            l: "J{\"u\":\"weblite_hybrid_experiments\",\"t\":\"fb\",\"gks\":[],\"qe\":null}"
                        },
                        "1907781": {
                            r: false,
                            l: "J{\"u\":\"weblite_hybrid_experiments\",\"t\":\"fb\",\"gks\":[],\"qe\":null}"
                        },
                        "1926644": {r: null},
                        "1015313": {r: false},
                        "1015319": {r: false},
                        "819489": {r: false},
                        "684052": {r: false},
                        "691282": {r: true},
                        "697677": {r: false},
                        "697678": {r: 2048},
                        "1981829": {r: null},
                        "2008889": {r: null}
                    }
                }, hblp: {
                    sr_revision: 1003843729, consistency: {rev: 1003843729}, rsrcMap: {
                        M3TKZkm: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/Kqe42yzI_x2.js?_nc_x=q_LVpLfTwy1"
                        },
                        HgpK1rF: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/ys/r/QgTR84U61QV.js?_nc_x=q_LVpLfTwy1"
                        },
                        "JqMrN/g": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yJ/r/Fq1WknuezOW.js?_nc_x=q_LVpLfTwy1"
                        },
                        VvVFw8n: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/AWepvf-vdZG.js?_nc_x=q_LVpLfTwy1"
                        },
                        "8iT7cDe": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/S2-3Xc9XsqA.js?_nc_x=q_LVpLfTwy1"
                        },
                        YlHO45S: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3i1VC4/yF/l/vi_VN/-d_kTYJ6smb.js?_nc_x=q_LVpLfTwy1"
                        },
                        AmPrBIn: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iWPy4/yK/l/vi_VN/BncFqMVZXYJ.js?_nc_x=q_LVpLfTwy1"
                        },
                        gqZSipH: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yp/r/Ir1oR4MGsut.js?_nc_x=q_LVpLfTwy1"
                        },
                        aOgavUY: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iCaO4/yB/l/vi_VN/HzJ6J3s29ka.js?_nc_x=q_LVpLfTwy1"
                        },
                        b0xMA5z: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iWPy4/yZ/l/vi_VN/Z0i-jX6jYGn.js?_nc_x=q_LVpLfTwy1"
                        },
                        KqnNJyP: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iuFR4/yZ/l/vi_VN/QythbP0M8Pm.js?_nc_x=q_LVpLfTwy1"
                        },
                        BD3q1M2: {
                            type: "css",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yQ/l/0,cross/yNi_cyid1l2.css?_nc_x=q_LVpLfTwy1"
                        },
                        B2zkyE5: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yX/r/2SjpXyaxjJY.js?_nc_x=q_LVpLfTwy1"
                        },
                        t9kSNDN: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/idP-3aF37Sr.js?_nc_x=q_LVpLfTwy1"
                        },
                        "8eFxQdg": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yT/r/UOCl7TjuAmb.js?_nc_x=q_LVpLfTwy1"
                        },
                        IYhzx7b: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yN/r/cmwd-SqwgNT.js?_nc_x=q_LVpLfTwy1"
                        },
                        hmOg74e: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/VCxaAKitVHK.js?_nc_x=q_LVpLfTwy1"
                        },
                        Ee5Vlq7: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yM/r/AzjmmGkTxys.js?_nc_x=q_LVpLfTwy1"
                        },
                        Hznxc7s: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/XXIfLhu8bhC.js?_nc_x=q_LVpLfTwy1"
                        },
                        "+3KRSKZ": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yw/r/GL_fuc1FeWi.js?_nc_x=q_LVpLfTwy1"
                        },
                        x3FHaJX: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3il4C4/yk/l/vi_VN/KWMSJhu84LR.js?_nc_x=q_LVpLfTwy1"
                        },
                        bLdCzx8: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iYAW4/y1/l/vi_VN/EJdtTQxN8AY.js?_nc_x=q_LVpLfTwy1"
                        },
                        EslyiML: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3icmO4/yv/l/vi_VN/C1JKUpJoPkY.js?_nc_x=q_LVpLfTwy1"
                        },
                        "6d1y3N6": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/cY3jxGJSMbK.js?_nc_x=q_LVpLfTwy1"
                        },
                        xiX1DRE: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yV/r/pXd2cVP-fQW.js?_nc_x=q_LVpLfTwy1"
                        },
                        "l1Y54+y": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3i5Dt4/yn/l/vi_VN/EjnoF-4A69z.js?_nc_x=q_LVpLfTwy1"
                        },
                        XvA7If1: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/deCmeXTehsq.js?_nc_x=q_LVpLfTwy1"
                        },
                        "37R3IA0": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/vNNkLN56juN.js?_nc_x=q_LVpLfTwy1"
                        },
                        "i3gVD/I": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3imlP4/yL/l/vi_VN/ww2J4SAgFXU.js?_nc_x=q_LVpLfTwy1"
                        },
                        xacaapr: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yb/r/TafEi9eImxe.js?_nc_x=q_LVpLfTwy1"
                        },
                        "2z2N9B2": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/WjPHuskwRgK.js?_nc_x=q_LVpLfTwy1"
                        },
                        EJJwjO0: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yQ/r/beaA5RcTjuZ.js?_nc_x=q_LVpLfTwy1"
                        },
                        btXTOew: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3ifvf4/y7/l/vi_VN/UVpcjHP9zMS.js?_nc_x=q_LVpLfTwy1"
                        },
                        "7sFi6Rz": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/p7lXgaGfrAh.js?_nc_x=q_LVpLfTwy1"
                        },
                        ETXslHA: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3i2HP4/y8/l/vi_VN/VXtkS9mw1WO.js?_nc_x=q_LVpLfTwy1"
                        },
                        MZ49rSx: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iFl24/yS/l/vi_VN/21Z-WrfwTCp.js?_nc_x=q_LVpLfTwy1"
                        },
                        "9Lrdv4b": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iFMs4/yl/l/vi_VN/k8sOuIHjGOd.js?_nc_x=q_LVpLfTwy1"
                        },
                        tabqy2x: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y3/r/q2BoBQVU5Qe.js?_nc_x=q_LVpLfTwy1"
                        },
                        qtF2SCr: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iHf74/yv/l/vi_VN/qGM_NmN2gGO.js?_nc_x=q_LVpLfTwy1"
                        },
                        "tJ9Y/Bb": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/uMeiCUyZTzd.js?_nc_x=q_LVpLfTwy1"
                        },
                        "pE8e/jE": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iC9q4/yT/l/vi_VN/-NDjhWrZvQi.js?_nc_x=q_LVpLfTwy1"
                        },
                        PDUMnuC: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/c_C2rMszJqu.js?_nc_x=q_LVpLfTwy1"
                        },
                        "8ELCBwH": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/VRzSVH5iU-V.js?_nc_x=q_LVpLfTwy1"
                        },
                        bRCJSVy: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yJ/r/xwi2RE_lpDe.js?_nc_x=q_LVpLfTwy1"
                        },
                        kPKmnar: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iaYv4/yw/l/vi_VN/wM2i7zokBPP.js?_nc_x=q_LVpLfTwy1"
                        },
                        eGA4ziX: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/impGCwtSY7c.js?_nc_x=q_LVpLfTwy1"
                        },
                        nWa1qXZ: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3i-qG4/yE/l/vi_VN/UAcxkokiccq.js?_nc_x=q_LVpLfTwy1"
                        },
                        Axm9qRY: {
                            type: "css",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y7/l/0,cross/9QXuZUma1Dc.css?_nc_x=q_LVpLfTwy1"
                        },
                        jT94cEs: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yz/r/t8z2uEzHYvM.js?_nc_x=q_LVpLfTwy1"
                        },
                        LxMxXpv: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/Kd8kzURKSqB.js?_nc_x=q_LVpLfTwy1"
                        },
                        z7N45dV: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/oJqnL8syNDT.js?_nc_x=q_LVpLfTwy1"
                        },
                        "V1/YkGo": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/0euP2ngASM5.js?_nc_x=q_LVpLfTwy1"
                        },
                        "C/vDipg": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3i4jy4/yz/l/vi_VN/SPNUTZL2kEO.js?_nc_x=q_LVpLfTwy1"
                        },
                        Yo94vlH: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yI/r/kWw7r5n3vVl.js?_nc_x=q_LVpLfTwy1"
                        },
                        j1is7HH: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/BbLdSpvEyFA.js?_nc_x=q_LVpLfTwy1"
                        },
                        "5DMmiZu": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/U6KiXKsM-2p.js?_nc_x=q_LVpLfTwy1"
                        },
                        "53Occdy": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yl/r/fNj596bxvLe.js?_nc_x=q_LVpLfTwy1"
                        },
                        "0RNynq2": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yh/r/BJsaWCc0ycr.js?_nc_x=q_LVpLfTwy1"
                        },
                        kafLUqR: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3ilvg4/ys/l/vi_VN/lV647dZcrpM.js?_nc_x=q_LVpLfTwy1"
                        },
                        cOST3yH: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/Yp8QTYFoE4y.js?_nc_x=q_LVpLfTwy1"
                        },
                        wzzE91H: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/IwDK0iC0CXo.js?_nc_x=q_LVpLfTwy1"
                        },
                        "5XbdzsE": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/VgGAAy1lCP9.js?_nc_x=q_LVpLfTwy1"
                        },
                        GhKz6qp: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/p2XI1-G_YTu.js?_nc_x=q_LVpLfTwy1"
                        },
                        "2XWXeHm": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yY/r/mYlYlwuMJAh.js?_nc_x=q_LVpLfTwy1"
                        },
                        TUxV68S: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yb/r/cUz2MN22F_X.js?_nc_x=q_LVpLfTwy1"
                        },
                        "W/r4/jJ": {
                            type: "css",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yt/l/0,cross/c1uTUEsCvCa.css?_nc_x=q_LVpLfTwy1"
                        },
                        "0R4xqX5": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yv/r/rH8SPrKhe7V.js?_nc_x=q_LVpLfTwy1"
                        },
                        "/5qtLv3": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/JyBUSZwhqrD.js?_nc_x=q_LVpLfTwy1"
                        }
                    }, compMap: {
                        ODS: {r: ["M3TKZkm"], be: 1},
                        EncryptedImg: {r: ["HgpK1rF", "M3TKZkm", "JqMrN/g"], be: 1},
                        QPLInspector: {r: ["VvVFw8n"], be: 1},
                        "MessageTextWithFormatting.react": {
                            r: ["JqMrN/g", "8iT7cDe", "YlHO45S", "HgpK1rF", "M3TKZkm", "AmPrBIn", "gqZSipH", "aOgavUY", "b0xMA5z", "nSxUM1r", "0MB+8nM", "KqnNJyP", "BD3q1M2"],
                            rds: {m: ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"]},
                            be: 1
                        },
                        MqttSkywalkerManager: {
                            r: ["M3TKZkm", "B2zkyE5", "t9kSNDN", "8eFxQdg", "IYhzx7b", "hmOg74e", "Ee5Vlq7", "gqZSipH", "AmPrBIn"],
                            rds: {m: ["MqttLongPollingRunner", "BanzaiScuba_DEPRECATED", "FbtLogging", "IntlQtEventFalcoEvent"]},
                            be: 1
                        },
                        MTouchChannelManager: {
                            r: ["M3TKZkm", "Hznxc7s", "B2zkyE5", "AmPrBIn", "+3KRSKZ", "gqZSipH"],
                            rds: {m: ["MqttLongPollingRunner", "BanzaiScuba_DEPRECATED", "FbtLogging", "IntlQtEventFalcoEvent"]},
                            be: 1
                        },
                        TransportSelectingClientSingleton: {
                            r: ["IYhzx7b", "M3TKZkm"],
                            rds: {
                                m: ["ContextualConfig", "BladeRunnerClient", "BanzaiScuba_DEPRECATED", "DGWRequestStreamClient", "MqttLongPollingRunner", "FbtLogging", "IntlQtEventFalcoEvent"],
                                r: ["AmPrBIn", "B2zkyE5", "gqZSipH"]
                            },
                            be: 1
                        },
                        RequestStreamCommonRequestStreamCommonTypes: {r: ["IYhzx7b"], be: 1},
                        Cookie: {
                            r: ["M3TKZkm"],
                            rds: {
                                m: ["BanzaiScuba_DEPRECATED", "FbtLogging", "IntlQtEventFalcoEvent"],
                                r: ["AmPrBIn", "gqZSipH"]
                            },
                            be: 1
                        },
                        MPagesBanUserUtils: {
                            r: ["M3TKZkm", "AmPrBIn", "bRCJSVy", "kPKmnar", "gqZSipH"],
                            rds: {m: ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"]},
                            be: 1
                        },
                        ReactRenderer: {r: ["HgpK1rF", "EslyiML", "AmPrBIn", "M3TKZkm", "eGA4ziX", "XvA7If1"], be: 1},
                        "MUFIActorSelector.react": {
                            r: ["AmPrBIn", "M3TKZkm", "HgpK1rF", "bRCJSVy", "nWa1qXZ", "Axm9qRY", "b0xMA5z", "2z2N9B2", "EJJwjO0", "IjYT5uc", "7sFi6Rz", "xiX1DRE", "EslyiML", "sJHwRqK", "nSxUM1r", "slxSR0y", "eGA4ziX", "gqZSipH", "XvA7If1"],
                            rds: {m: ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"]},
                            be: 1
                        },
                        MComposerLiveTypingPublisher: {
                            r: ["AmPrBIn", "jT94cEs", "M3TKZkm", "LxMxXpv", "z7N45dV", "i3gVD/I", "V1/YkGo"],
                            rds: {m: ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"], r: ["gqZSipH"]},
                            be: 1
                        },
                        SphericalImage: {
                            r: ["C/vDipg", "Yo94vlH", "M3TKZkm", "j1is7HH", "AmPrBIn", "5DMmiZu", "53Occdy", "0RNynq2"],
                            rds: {m: ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"], r: ["gqZSipH"]},
                            be: 1
                        },
                        MMultiPhotoUploaderSimpleScroller: {
                            r: ["HgpK1rF", "kafLUqR", "AmPrBIn", "cOST3yH", "wzzE91H", "M3TKZkm", "5XbdzsE", "GhKz6qp", "xiX1DRE", "slxSR0y", "2XWXeHm", "eGA4ziX", "XvA7If1"],
                            be: 1
                        },
                        WebSpeedInteractionsTypedLogger: {
                            r: ["M3TKZkm", "TUxV68S", "gqZSipH", "AmPrBIn"],
                            rds: {m: ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"]},
                            be: 1
                        },
                        PerfXSharedFields: {r: ["M3TKZkm"], be: 1}
                    }
                }
            },
            allResources: ["4bc9mDP", "nSxUM1r", "IjYT5uc", "x3FHaJX", "bLdCzx8", "M3TKZkm", "AmPrBIn", "HgpK1rF", "EslyiML", "6d1y3N6", "xiX1DRE", "l1Y54+y", "JqMrN/g", "8iT7cDe", "XvA7If1", "37R3IA0", "YlHO45S", "i3gVD/I", "cfF+QHP", "0MB+8nM", "xacaapr", "2z2N9B2", "EJJwjO0", "nxd+1z1", "b0xMA5z", "btXTOew", "7sFi6Rz", "IYhzx7b", "ETXslHA", "b895oXo", "MZ49rSx", "9Lrdv4b", "slxSR0y", "tabqy2x", "gqZSipH", "sJHwRqK", "qtF2SCr", "0A42BqM", "+3KRSKZ", "kzdNo2F", "tJ9Y/Bb", "KqnNJyP", "pE8e/jE", "PDUMnuC", "B2zkyE5", "8ELCBwH", "W/r4/jJ", "0R4xqX5", "/5qtLv3", "eGA4ziX"]
        });
    }));</script>
<script>requireLazy(["__bigPipe"], function (bigPipe) {
        bigPipe.setPageID("6966047345458437221-0")
    });
    CavalryLogger.setPageID("6966047345458437221-0");</script>

<div class="hidden_elem"><code id="u_0_4i_F3"><!-- <div class="_a-5" id="u_0_4h_q1"></div> --></code></div>
<script nonce="AoJqUxnR">(function () {
        var n = now_inl();
        requireLazy(["__bigPipe"], function (bigPipe) {
            bigPipe.beforePageletArrive("m:chrome:schedulable-graph-search", n);
        })
    })();</script>
<script nonce="AoJqUxnR">requireLazy(["__bigPipe"], (function (bigPipe) {
        bigPipe.onPageletArrive({
            displayResources: ["4bc9mDP", "IjYT5uc"],
            content: {"m:chrome:schedulable-graph-search": {container_id: "u_0_4i_F3"}},
            id: "m:chrome:schedulable-graph-search",
            phase: 7,
            last_in_phase: true,
            last_pagelet: true,
            all_phases: [63, 7],
            jsmods: {
                elements: [["__elem_ad2bcfb1_0_1_tb", "u_0_4h_q1", 1]],
                require: [["MSearchTypeaheadNeueFlyout", "init", ["MSearchTabsAboveBEM", "MSearchBootstrapEntityModule", "MSearchSimplificationNullstateResult", "MSearchSimplificationSeeMoreRecentResultsButton", "MSearchSimplificationTypedResult", "MSearchSimplificationHeader", "__elem_ad2bcfb1_0_1_tb"], [{
                    typeaheadConfig: {
                        sources: {
                            bootstrapped: {
                                src: "/typeahead/search/facebar/bootstrap/?filters%5B0%5D=keyword",
                                source_key: "facebar3",
                                max_results: 6
                            },
                            nullstate: {src: "/typeahead/search/facebar/nullstate/", max_results: 20},
                            online: {
                                src: "/typeahead/search/facebar/query/?context=facebar&grammar_version=bee09f93fa732cfa59a1cb6d9f450d3892424e49&viewer=100004875732895&rsp=search",
                                max_results: 20,
                                enable_caching: true
                            }
                        },
                        typeaheadScubaInfo: null,
                        disableLongerQueryCacheHit: true,
                        compositeSourceConfig: {
                            maxResults: 50,
                            minCostForUserToSurfaceAtTop: 7,
                            maxPositionOfEntityToDivideKeywords: 5,
                            maxKeywordAboveEntities: 2,
                            filterOutTypes: [],
                            keepBootstrapped: true,
                            enableLegacyStyleBucketization: true
                        },
                        hasRecentSearches: false,
                        numResultsToFetch: 13,
                        initialNumRecentResultsToShow: 13,
                        defaultNumTopResultsToShow: 3,
                        keywordsOnlyEnabled: true,
                        keywordBucketSize: 6
                    },
                    currentProfileID: 100044204000528,
                    initialQuery: "",
                    activityLogURI: "/100004875732895/allactivity/?category_key=search&entry_point=edit_search_history",
                    groupName: "",
                    behaviors: [{__m: "MSearchTabsAboveBEM"}, {__m: "MSearchBootstrapEntityModule"}],
                    renderers: {
                        NullstateResult: {__m: "MSearchSimplificationNullstateResult"},
                        SeeMoreRecentResultsButton: {__m: "MSearchSimplificationSeeMoreRecentResultsButton"},
                        TypedResult: {__m: "MSearchSimplificationTypedResult"},
                        Header: {__m: "MSearchSimplificationHeader"}
                    },
                    root: {__m: "__elem_ad2bcfb1_0_1_tb"}
                }]], ["RequireDeferredReference", "unblock", [], [["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "MPageControllerImpl", "MPageFetcherImpl", "VisualCompletionGating"]]]]
            },
            hsrp: {
                hsdp: {
                    clpData: {
                        "1744354": {r: 1, s: 1},
                        "1953926": {r: 1},
                        "1958033": {r: 1},
                        "1960868": {r: 1},
                        "1962677": {r: 1}
                    },
                    gkxData: {
                        "917": {result: false, hash: "AT55N-Ynh2D-PTmX2PY"},
                        "876709": {result: false, hash: "AT4zNQUtdkbE74TIa6M"},
                        "940796": {result: false, hash: "AT61wNL_2BhRy5OGPIc"},
                        "983221": {result: true, hash: "AT7b7cnDWMRUriiJtXg"}
                    }
                }, hblp: {sr_revision: 1003843729, consistency: {rev: 1003843729}}
            },
            allResources: ["4bc9mDP", "AmPrBIn", "M3TKZkm", "tJ9Y/Bb", "IjYT5uc", "2z2N9B2", "MZ49rSx", "9Lrdv4b", "EJJwjO0", "6d1y3N6", "0A42BqM", "XvA7If1", "gqZSipH"]
        });
    }));</script>
<script nonce="AoJqUxnR">(function () {
        var n = now_inl();
        requireLazy(["__bigPipe"], function (bigPipe) {
            bigPipe.beforePageletArrive("last_response", n);
        })
    })();</script>
<script nonce="AoJqUxnR">requireLazy(["__bigPipe"], (function (bigPipe) {
        bigPipe.onPageletArrive({
            id: "last_response",
            phase: 63,
            last_in_phase: true,
            the_end: true,
            jsmods: {
                define: [["CoreWarningGK", [], {forceWarning: false}, 725], ["IntlCurrentLocale", [], {code: "vi_VN"}, 5954], ["TransportSelectingClientContextualConfig", [], {rawConfig: "{\"name\":\"rti/web_rs_transport_selecting_client\",\"cctype\":\"dense\",\"version\":1,\"policy_id\":\"static\",\"sample_rate\":1000,\"contexts\":[{\"name\":\"method\",\"type\":\"STRING\",\"callsite\":true,\"buckets\":[{\"name\":\"rollout_group_1\",\"strategy\":\"in\",\"values\":[\"FBGQLS:FEEDBACK_LIKE_SUBSCRIBE\"]},{\"name\":\"rollout_group_2\",\"strategy\":\"in\",\"values\":[\"Falco\"]},{\"name\":\"rollout_group_3\",\"strategy\":\"regex\",\"values\":[\"FBLQ:.*\"]},{\"name\":\"rollout_group_4\",\"strategy\":\"in\",\"values\":[\"none\"]},{\"name\":\"rollout_group_5\",\"strategy\":\"in\",\"values\":[\"none\"]},{\"name\":\"default\",\"strategy\":\"catch_all\"}]}],\"outputs\":[{\"name\":\"group\",\"type\":\"STRING\"}],\"vector\":[\"group1\",\"group2\",\"group3\",\"group4\",\"group5\",\"default_group\"],\"vectorDefaults\":[\"default_group\"],\"timestamp\":1620756519}"}, 5968], ["EmojiConfig", [], {
                    pixelRatio: "1",
                    schemaAuth: "https://static.xx.fbcdn.net/images/emoji.php/v9",
                    hasEmojiPickerSearch: false
                }, 1421], ["FamilyTaggingConfig", [], {gk: true}, 743], ["FullBleedFeedQE", [], {fullBleed: true}, 833], ["PhotosUploadWaterfallXConfig", [], {
                    loggingEndpoint: "https://pixel.facebook.com/ajax/photos/logging/waterfallx.php",
                    banzaiRoute: "photos_waterfall",
                    deprecatedBanzaiRoute: "photos_waterfall_deprecated",
                    useBanzai: false,
                    retryBanzai: false,
                    timeout: true,
                    batchInterval: 5
                }, 211], ["RTISubscriptionManagerConfig", [], {
                    config: {
                        max_subscriptions: 150,
                        www_idle_unsubscribe_min_time_ms: 600000,
                        www_idle_unsubscribe_times_ms: {
                            feedback_like_subscribe: 600000,
                            comment_like_subscribe: 600000,
                            feedback_typing_subscribe: 600000,
                            comment_create_subscribe: 1800000,
                            video_tip_jar_payment_event_subscribe: 14400000
                        },
                        www_unevictable_topic_regexes: ["^(graphql|gqls)/web_notification_receive_subscribe", "^www/sr/hot_reload/"],
                        autobot_tiers: {
                            latest: "realtime.skywalker.autobot.latest",
                            intern: "realtime.skywalker.autobot.intern",
                            sb: "realtime.skywalker.autobot.sb"
                        },
                        max_subscription_flush_batch_size: 100
                    },
                    autobot: {},
                    assimilator: {},
                    unsubscribe_release: true,
                    bladerunner_www_sandbox: null,
                    is_intern: false
                }, 1081], ["RelayAPIConfigDefaults", [], {
                    accessToken: "",
                    actorID: "100004875732895",
                    customHeaders: {},
                    enableNetworkLogger: false,
                    fetchTimeout: 30000,
                    graphBatchURI: "/api/graphqlbatch/",
                    graphURI: "/api/graphql/",
                    retryDelays: [1000, 3000],
                    useXController: true,
                    xhrEncoding: null,
                    subscriptionTopicURI: "/dlite/skywalker_topic/",
                    withCredentials: false,
                    isProductionEndpoint: false
                }, 926], ["TimeSliceInteractionSV", [], {
                    on_demand_reference_counting: true,
                    on_demand_profiling_counters: true,
                    default_rate: 1000,
                    lite_default_rate: 100,
                    interaction_to_lite_coinflip: {
                        ADS_INTERFACES_INTERACTION: 0,
                        ads_perf_scenario: 0,
                        ads_wait_time: 0,
                        Event: 10
                    },
                    interaction_to_coinflip: {
                        ADS_INTERFACES_INTERACTION: 1,
                        ads_perf_scenario: 1,
                        ads_wait_time: 1,
                        Event: 500
                    },
                    enable_heartbeat: true,
                    maxBlockMergeDuration: 0,
                    maxBlockMergeDistance: 0,
                    enable_banzai_stream: true,
                    user_timing_coinflip: 50,
                    banzai_stream_coinflip: 0,
                    compression_enabled: true,
                    ref_counting_fix: false,
                    ref_counting_cont_fix: false,
                    also_record_new_timeslice_format: false,
                    force_async_request_tracing_on: false
                }, 2609], ["MBootstrapCacheMaxCacheTime", [], {
                    maxCacheTimeByKey: {
                        typeahead_facebar3: 1209600000,
                        typeahead_search_bem3: 1209600000
                    }
                }, 2886], ["QuickLogConfig", [], {
                    qpl_events: {
                        "212543": {sampleRate: 250, samplingMethod: 1},
                        "393276": {sampleRate: 50, samplingMethod: 1},
                        "396252": {sampleRate: 50, samplingMethod: 1},
                        "397979": {sampleRate: 50, samplingMethod: 1},
                        "655575": {sampleRate: 1, samplingMethod: 1},
                        "655576": {sampleRate: 5000, samplingMethod: 1},
                        "655584": {sampleRate: 1, samplingMethod: 1},
                        "655653": {sampleRate: 250, samplingMethod: 1},
                        "663703": {sampleRate: 1, samplingMethod: 1},
                        "917556": {sampleRate: 100, samplingMethod: 1},
                        "917557": {sampleRate: 1000, samplingMethod: 1},
                        "918598": {sampleRate: 100, samplingMethod: 1},
                        "920349": {sampleRate: 100, samplingMethod: 1},
                        "920899": {sampleRate: 100, samplingMethod: 1},
                        "921754": {sampleRate: 100, samplingMethod: 1},
                        "922804": {sampleRate: 100, samplingMethod: 1},
                        "923401": {sampleRate: 100, samplingMethod: 1},
                        "924733": {sampleRate: 100, samplingMethod: 1},
                        "932588": {sampleRate: 100, samplingMethod: 1},
                        "2101001": {sampleRate: 250, samplingMethod: 1},
                        "2102327": {sampleRate: 50, samplingMethod: 1},
                        "2103143": {sampleRate: 250, samplingMethod: 1},
                        "2107124": {sampleRate: 1, samplingMethod: 1},
                        "2108977": {sampleRate: 10, samplingMethod: 1},
                        "2109054": {sampleRate: 250, samplingMethod: 1},
                        "3473463": {sampleRate: 10000, samplingMethod: 1},
                        "3473464": {sampleRate: 10000, samplingMethod: 1},
                        "3473465": {sampleRate: 10, samplingMethod: 1},
                        "3735589": {sampleRate: 100, samplingMethod: 1},
                        "3735590": {sampleRate: 1000, samplingMethod: 1},
                        "3735591": {sampleRate: 100, samplingMethod: 1},
                        "3735592": {sampleRate: 1000, samplingMethod: 1},
                        "3735593": {sampleRate: 1000, samplingMethod: 1},
                        "3735594": {sampleRate: 1000, samplingMethod: 1},
                        "3735595": {sampleRate: 100, samplingMethod: 1},
                        "3735596": {sampleRate: 1000, samplingMethod: 1},
                        "3735597": {sampleRate: 1000, samplingMethod: 1},
                        "3735598": {sampleRate: 100, samplingMethod: 1},
                        "3735599": {sampleRate: 1000, samplingMethod: 1},
                        "3735600": {sampleRate: 100, samplingMethod: 1},
                        "3735601": {sampleRate: 100, samplingMethod: 1},
                        "3735602": {sampleRate: 10000, samplingMethod: 1},
                        "3735603": {sampleRate: 10000, samplingMethod: 1},
                        "3735604": {sampleRate: 100, samplingMethod: 1},
                        "3735605": {sampleRate: 100, samplingMethod: 1},
                        "3735606": {sampleRate: 1, samplingMethod: 1},
                        "3735608": {sampleRate: 250, samplingMethod: 1},
                        "3735609": {sampleRate: 250, samplingMethod: 1},
                        "3735610": {sampleRate: 250, samplingMethod: 1},
                        "3735611": {sampleRate: 250, samplingMethod: 1},
                        "3735612": {sampleRate: 250, samplingMethod: 1},
                        "3735613": {sampleRate: 250, samplingMethod: 1},
                        "3735614": {sampleRate: 250, samplingMethod: 1},
                        "3735615": {sampleRate: 250, samplingMethod: 1},
                        "3735616": {sampleRate: 250, samplingMethod: 1},
                        "3735617": {sampleRate: 250, samplingMethod: 1},
                        "3735618": {sampleRate: 50, samplingMethod: 1},
                        "3735619": {sampleRate: 50, samplingMethod: 1},
                        "3735620": {sampleRate: 50, samplingMethod: 1},
                        "3735622": {sampleRate: 50, samplingMethod: 1},
                        "3735623": {sampleRate: 500, samplingMethod: 1},
                        "3735624": {sampleRate: 500, samplingMethod: 1},
                        "3735625": {sampleRate: 1, samplingMethod: 1},
                        "3735626": {sampleRate: 50, samplingMethod: 1},
                        "3735627": {sampleRate: 50, samplingMethod: 1},
                        "3735628": {sampleRate: 250, samplingMethod: 1},
                        "7077894": {sampleRate: 1, samplingMethod: 1},
                        "7079140": {sampleRate: 1, samplingMethod: 1},
                        "7079214": {sampleRate: 100, samplingMethod: 1},
                        "7079522": {sampleRate: 100, samplingMethod: 1},
                        "7079632": {sampleRate: 1, samplingMethod: 1},
                        "7079838": {sampleRate: 1, samplingMethod: 1},
                        "7079895": {sampleRate: 1, samplingMethod: 1},
                        "7079940": {sampleRate: 1, samplingMethod: 1},
                        "7080944": {sampleRate: 100, samplingMethod: 1},
                        "7081379": {sampleRate: 100, samplingMethod: 1},
                        "7081993": {sampleRate: 1, samplingMethod: 1},
                        "7081995": {sampleRate: 1, samplingMethod: 1},
                        "7082695": {sampleRate: 100, samplingMethod: 1},
                        "7083043": {sampleRate: 100, samplingMethod: 1},
                        "7083437": {sampleRate: 100, samplingMethod: 1},
                        "7083693": {sampleRate: 100, samplingMethod: 1},
                        "7083971": {sampleRate: 1, samplingMethod: 1},
                        "7084033": {sampleRate: 100, samplingMethod: 1},
                        "7084185": {sampleRate: 100, samplingMethod: 1},
                        "7084444": {sampleRate: 1, samplingMethod: 1},
                        "7084665": {sampleRate: 100, samplingMethod: 1},
                        "7084786": {sampleRate: 1, samplingMethod: 1},
                        "7085174": {sampleRate: 100, samplingMethod: 1},
                        "7085268": {sampleRate: 100, samplingMethod: 1},
                        "7086190": {sampleRate: 100, samplingMethod: 1},
                        "7086630": {sampleRate: 100, samplingMethod: 1},
                        "7087889": {sampleRate: 1, samplingMethod: 1},
                        "7088719": {sampleRate: 1, samplingMethod: 1},
                        "7088916": {sampleRate: 1, samplingMethod: 1},
                        "7088929": {sampleRate: 1, samplingMethod: 1},
                        "7088932": {sampleRate: 1, samplingMethod: 1},
                        "7088956": {sampleRate: 1, samplingMethod: 1},
                        "7089119": {sampleRate: 1, samplingMethod: 1},
                        "7089521": {sampleRate: 100, samplingMethod: 1},
                        "7089869": {sampleRate: 100, samplingMethod: 1},
                        "7090129": {sampleRate: 1, samplingMethod: 1},
                        "7090251": {sampleRate: 100, samplingMethod: 1},
                        "7091307": {sampleRate: 1, samplingMethod: 1},
                        "7092490": {sampleRate: 1, samplingMethod: 1},
                        "7092499": {sampleRate: 100, samplingMethod: 1},
                        "7092951": {sampleRate: 1, samplingMethod: 1},
                        "7093080": {sampleRate: 100, samplingMethod: 1},
                        "7093431": {sampleRate: 100, samplingMethod: 1},
                        "7093497": {sampleRate: 100, samplingMethod: 1},
                        "7093594": {sampleRate: 100, samplingMethod: 1},
                        "7093622": {sampleRate: 1, samplingMethod: 1},
                        "7093901": {sampleRate: 1, samplingMethod: 1},
                        "7094174": {sampleRate: 100, samplingMethod: 1},
                        "7733271": {sampleRate: 1, samplingMethod: 1},
                        "7736691": {sampleRate: 100, samplingMethod: 1},
                        "7742652": {sampleRate: 1, samplingMethod: 3},
                        "7747170": {sampleRate: 100, samplingMethod: 1},
                        "7747339": {sampleRate: 100, samplingMethod: 1},
                        "7749497": {sampleRate: 1, samplingMethod: 1},
                        "7995400": {sampleRate: 1, samplingMethod: 1},
                        "7995408": {sampleRate: 100, samplingMethod: 1},
                        "11075649": {sampleRate: 1, samplingMethod: 1},
                        "11075654": {sampleRate: 1, samplingMethod: 1},
                        "11075674": {sampleRate: 1, samplingMethod: 1},
                        "11084341": {sampleRate: 1, samplingMethod: 1},
                        "12451850": {sampleRate: 1, samplingMethod: 1},
                        "12451854": {sampleRate: 1, samplingMethod: 3},
                        "12451859": {sampleRate: 1, samplingMethod: 3},
                        "12451868": {sampleRate: 1, samplingMethod: 1},
                        "12451869": {sampleRate: 1, samplingMethod: 1},
                        "12451873": {sampleRate: 10000, samplingMethod: 1},
                        "12453291": {sampleRate: 1, samplingMethod: 1},
                        "12454042": {sampleRate: 10000, samplingMethod: 1},
                        "12454789": {sampleRate: 10000, samplingMethod: 1},
                        "12457892": {sampleRate: 10000, samplingMethod: 1},
                        "12457943": {sampleRate: 10000, samplingMethod: 1},
                        "12458187": {sampleRate: 10000, samplingMethod: 1},
                        "12462244": {sampleRate: 10000, samplingMethod: 1},
                        "12463624": {sampleRate: 1, samplingMethod: 1},
                        "12464511": {sampleRate: 10000, samplingMethod: 1},
                        "12466919": {sampleRate: 10000, samplingMethod: 1},
                        "12859882": {sampleRate: 10000, samplingMethod: 1},
                        "13238313": {sampleRate: 100, samplingMethod: 1},
                        "13238314": {sampleRate: 100, samplingMethod: 1},
                        "13238353": {sampleRate: 100, samplingMethod: 1},
                        "13238354": {sampleRate: 100, samplingMethod: 1},
                        "13238355": {sampleRate: 100, samplingMethod: 1},
                        "13238356": {sampleRate: 100, samplingMethod: 1},
                        "13238392": {sampleRate: 100, samplingMethod: 1},
                        "13238398": {sampleRate: 100, samplingMethod: 1},
                        "13238399": {sampleRate: 100, samplingMethod: 1},
                        "13238400": {sampleRate: 100, samplingMethod: 1},
                        "13249850": {sampleRate: 100, samplingMethod: 1},
                        "13250512": {sampleRate: 100, samplingMethod: 1},
                        "13252469": {sampleRate: 100, samplingMethod: 1},
                        "17825794": {sampleRate: 250, samplingMethod: 1},
                        "19146195": {sampleRate: 10000, samplingMethod: 1},
                        "19146604": {sampleRate: 1, samplingMethod: 1},
                        "19152862": {sampleRate: 5, samplingMethod: 1},
                        "19216409": {sampleRate: 100, samplingMethod: 1},
                        "20578320": {sampleRate: 1000000, samplingMethod: 1},
                        "22347782": {sampleRate: 100, samplingMethod: 1},
                        "22609921": {sampleRate: 10000, samplingMethod: 1},
                        "22675460": {sampleRate: 250, samplingMethod: 1},
                        "23265284": {sampleRate: 1, samplingMethod: 3},
                        "23265285": {sampleRate: 1, samplingMethod: 3},
                        "23265286": {sampleRate: 1, samplingMethod: 3},
                        "23281892": {sampleRate: 1, samplingMethod: 1},
                        "23285466": {sampleRate: 1, samplingMethod: 1},
                        "23461896": {sampleRate: 1, samplingMethod: 1},
                        "23461898": {sampleRate: 1, samplingMethod: 1},
                        "23461899": {sampleRate: 10000, samplingMethod: 1},
                        "23461900": {sampleRate: 1, samplingMethod: 1},
                        "23461901": {sampleRate: 1, samplingMethod: 1},
                        "23461902": {sampleRate: 1, samplingMethod: 1},
                        "23473227": {sampleRate: 1, samplingMethod: 1},
                        "23476559": {sampleRate: 1, samplingMethod: 1},
                        "23491362": {sampleRate: 1, samplingMethod: 1},
                        "23855114": {sampleRate: 1, samplingMethod: 1},
                        "24122239": {sampleRate: 1, samplingMethod: 1},
                        "24130366": {sampleRate: 10, samplingMethod: 1},
                        "25296897": {sampleRate: 1, samplingMethod: 1},
                        "25296900": {sampleRate: 1000, samplingMethod: 1},
                        "25296901": {sampleRate: 1, samplingMethod: 1},
                        "25296902": {sampleRate: 1, samplingMethod: 1},
                        "25296903": {sampleRate: 1000, samplingMethod: 1},
                        "25296904": {sampleRate: 1000, samplingMethod: 1},
                        "25296905": {sampleRate: 1000, samplingMethod: 1},
                        "25296906": {sampleRate: 1000, samplingMethod: 1},
                        "25298086": {sampleRate: 1, samplingMethod: 1},
                        "25304023": {sampleRate: 1000, samplingMethod: 1},
                        "25305590": {sampleRate: 1000, samplingMethod: 1},
                        "25310776": {sampleRate: 1000, samplingMethod: 1},
                        "26869761": {sampleRate: 1, samplingMethod: 1},
                        "26869762": {sampleRate: 1, samplingMethod: 1},
                        "26869763": {sampleRate: 1, samplingMethod: 1},
                        "26869764": {sampleRate: 1, samplingMethod: 1},
                        "26869766": {sampleRate: 1, samplingMethod: 1},
                        "26869768": {sampleRate: 1, samplingMethod: 1},
                        "26869770": {sampleRate: 1, samplingMethod: 1},
                        "26869771": {sampleRate: 1, samplingMethod: 1},
                        "26877377": {sampleRate: 1, samplingMethod: 1},
                        "26878862": {sampleRate: 1, samplingMethod: 1},
                        "26880417": {sampleRate: 1, samplingMethod: 1},
                        "26881111": {sampleRate: 1, samplingMethod: 1},
                        "26882160": {sampleRate: 1, samplingMethod: 1},
                        "26883711": {sampleRate: 1, samplingMethod: 1},
                        "26885348": {sampleRate: 1, samplingMethod: 1},
                        "26898960": {sampleRate: 1, samplingMethod: 1},
                        "27459588": {sampleRate: 5000, samplingMethod: 1},
                        "27459589": {sampleRate: 1, samplingMethod: 1},
                        "27459590": {sampleRate: 10, samplingMethod: 1},
                        "27459591": {sampleRate: 1, samplingMethod: 1},
                        "27467867": {sampleRate: 1000, samplingMethod: 1},
                        "27475950": {sampleRate: 1000, samplingMethod: 1},
                        "27787270": {sampleRate: 1000000, samplingMethod: 1},
                        "27787271": {sampleRate: 10000, samplingMethod: 1},
                        "27797599": {sampleRate: 1, samplingMethod: 1},
                        "27983873": {sampleRate: 1, samplingMethod: 1},
                        "27983874": {sampleRate: 1, samplingMethod: 1},
                        "27983875": {sampleRate: 1, samplingMethod: 1},
                        "27983876": {sampleRate: 1, samplingMethod: 1},
                        "27983877": {sampleRate: 1, samplingMethod: 1},
                        "29047276": {sampleRate: 10000, samplingMethod: 1},
                        "29818881": {sampleRate: 1, samplingMethod: 1},
                        "29818882": {sampleRate: 1, samplingMethod: 1},
                        "29818883": {sampleRate: 1, samplingMethod: 1},
                        "29818884": {sampleRate: 1, samplingMethod: 1},
                        "29949953": {sampleRate: 1, samplingMethod: 1},
                        "29949955": {sampleRate: 1, samplingMethod: 1},
                        "30408705": {sampleRate: 1, samplingMethod: 1},
                        "30408706": {sampleRate: 1, samplingMethod: 1},
                        "30408707": {sampleRate: 1, samplingMethod: 1},
                        "30408708": {sampleRate: 1, samplingMethod: 1},
                        "30408709": {sampleRate: 1, samplingMethod: 1},
                        "30408710": {sampleRate: 1, samplingMethod: 1},
                        "30408711": {sampleRate: 1, samplingMethod: 1},
                        "30408712": {sampleRate: 1, samplingMethod: 1},
                        "30421153": {sampleRate: 1, samplingMethod: 1},
                        "30605313": {sampleRate: 100, samplingMethod: 1},
                        "30605314": {sampleRate: 100, samplingMethod: 1},
                        "30605315": {sampleRate: 100, samplingMethod: 1},
                        "30605316": {sampleRate: 1, samplingMethod: 1},
                        "30605317": {sampleRate: 1, samplingMethod: 1},
                        "30605319": {sampleRate: 1, samplingMethod: 1},
                        "30605320": {sampleRate: 1, samplingMethod: 1},
                        "30605321": {sampleRate: 1, samplingMethod: 1},
                        "30605322": {sampleRate: 1, samplingMethod: 1},
                        "30605323": {sampleRate: 1, samplingMethod: 1},
                        "30605324": {sampleRate: 1, samplingMethod: 1},
                        "30605325": {sampleRate: 1, samplingMethod: 1},
                        "30605326": {sampleRate: 1, samplingMethod: 1},
                        "30605328": {sampleRate: 1, samplingMethod: 1},
                        "30605329": {sampleRate: 1, samplingMethod: 1},
                        "30605330": {sampleRate: 1, samplingMethod: 1},
                        "30605331": {sampleRate: 1, samplingMethod: 1},
                        "30605333": {sampleRate: 1, samplingMethod: 1},
                        "30605334": {sampleRate: 1, samplingMethod: 1},
                        "30605335": {sampleRate: 1, samplingMethod: 1},
                        "30605336": {sampleRate: 1, samplingMethod: 1},
                        "30605337": {sampleRate: 1, samplingMethod: 1},
                        "30605338": {sampleRate: 1, samplingMethod: 1},
                        "30605339": {sampleRate: 1, samplingMethod: 1},
                        "30605340": {sampleRate: 1, samplingMethod: 1},
                        "30605341": {sampleRate: 1, samplingMethod: 1},
                        "30605342": {sampleRate: 1, samplingMethod: 1},
                        "30605343": {sampleRate: 1, samplingMethod: 1},
                        "30605344": {sampleRate: 1, samplingMethod: 1},
                        "30605345": {sampleRate: 1, samplingMethod: 1},
                        "30605346": {sampleRate: 1, samplingMethod: 1},
                        "30605347": {sampleRate: 1, samplingMethod: 1},
                        "30605348": {sampleRate: 1, samplingMethod: 1},
                        "30605349": {sampleRate: 1, samplingMethod: 1},
                        "30605350": {sampleRate: 1, samplingMethod: 1},
                        "30605351": {sampleRate: 1, samplingMethod: 1},
                        "30605352": {sampleRate: 1, samplingMethod: 1},
                        "30605353": {sampleRate: 1, samplingMethod: 1},
                        "30605354": {sampleRate: 1, samplingMethod: 1},
                        "30605355": {sampleRate: 1, samplingMethod: 1},
                        "30605356": {sampleRate: 1, samplingMethod: 1},
                        "30605357": {sampleRate: 1, samplingMethod: 1},
                        "30605358": {sampleRate: 1, samplingMethod: 1},
                        "30605360": {sampleRate: 1, samplingMethod: 1},
                        "30605361": {sampleRate: 1, samplingMethod: 1},
                        "30605362": {sampleRate: 1, samplingMethod: 1},
                        "30605363": {sampleRate: 1, samplingMethod: 1},
                        "30605364": {sampleRate: 1, samplingMethod: 1},
                        "30605366": {sampleRate: 1, samplingMethod: 1},
                        "30605367": {sampleRate: 1, samplingMethod: 1},
                        "30605368": {sampleRate: 1, samplingMethod: 1},
                        "30605369": {sampleRate: 1, samplingMethod: 1},
                        "30605370": {sampleRate: 1, samplingMethod: 1},
                        "30605371": {sampleRate: 1, samplingMethod: 1},
                        "30605373": {sampleRate: 1, samplingMethod: 1},
                        "30605374": {sampleRate: 1, samplingMethod: 1},
                        "30605375": {sampleRate: 1, samplingMethod: 1},
                        "30605376": {sampleRate: 1, samplingMethod: 1},
                        "30605378": {sampleRate: 1, samplingMethod: 1},
                        "30605380": {sampleRate: 1, samplingMethod: 1},
                        "30605381": {sampleRate: 1, samplingMethod: 1},
                        "30605382": {sampleRate: 1, samplingMethod: 1},
                        "30605384": {sampleRate: 1, samplingMethod: 1},
                        "30605386": {sampleRate: 1, samplingMethod: 1},
                        "30605387": {sampleRate: 1, samplingMethod: 1},
                        "30605389": {sampleRate: 1, samplingMethod: 1},
                        "30605390": {sampleRate: 1, samplingMethod: 1},
                        "30605391": {sampleRate: 1, samplingMethod: 1},
                        "30605392": {sampleRate: 1, samplingMethod: 1},
                        "30605393": {sampleRate: 1, samplingMethod: 1},
                        "30615365": {sampleRate: 1, samplingMethod: 1},
                        "30615438": {sampleRate: 1, samplingMethod: 1},
                        "30616610": {sampleRate: 1, samplingMethod: 1},
                        "30617968": {sampleRate: 1, samplingMethod: 1},
                        "30618398": {sampleRate: 1, samplingMethod: 1},
                        "30618615": {sampleRate: 1, samplingMethod: 1},
                        "30620813": {sampleRate: 1, samplingMethod: 1},
                        "30621572": {sampleRate: 1, samplingMethod: 1},
                        "30632331": {sampleRate: 1, samplingMethod: 1},
                        "32312156": {sampleRate: 1, samplingMethod: 1},
                        "32374785": {sampleRate: 10000, samplingMethod: 1},
                        "32702465": {sampleRate: 1, samplingMethod: 1},
                        "33488897": {sampleRate: 1, samplingMethod: 1},
                        "33488898": {sampleRate: 1, samplingMethod: 1},
                        "33488900": {sampleRate: 1, samplingMethod: 1},
                        "33488901": {sampleRate: 1800, samplingMethod: 1},
                        "33488902": {sampleRate: 1, samplingMethod: 1},
                        "33488903": {sampleRate: 1, samplingMethod: 1},
                        "33488904": {sampleRate: 1, samplingMethod: 1},
                        "33488905": {sampleRate: 1, samplingMethod: 1},
                        "33494245": {sampleRate: 1, samplingMethod: 1},
                        "33619969": {sampleRate: 1, samplingMethod: 1},
                        "34156514": {sampleRate: 1, samplingMethod: 1},
                        "35586051": {sampleRate: 10, samplingMethod: 1},
                        "35586052": {sampleRate: 1000, samplingMethod: 1},
                        "35586053": {sampleRate: 1000, samplingMethod: 1},
                        "36110337": {sampleRate: 1, samplingMethod: 1},
                        "36110338": {sampleRate: 1, samplingMethod: 1},
                        "36110339": {sampleRate: 1, samplingMethod: 1},
                        "36241413": {sampleRate: 1, samplingMethod: 1},
                        "36241422": {sampleRate: 1, samplingMethod: 1},
                        "36241423": {sampleRate: 1, samplingMethod: 1},
                        "36241434": {sampleRate: 1, samplingMethod: 1},
                        "36243184": {sampleRate: 1, samplingMethod: 1},
                        "36244063": {sampleRate: 1, samplingMethod: 1},
                        "36246584": {sampleRate: 1, samplingMethod: 1},
                        "36247076": {sampleRate: 1, samplingMethod: 1},
                        "36247834": {sampleRate: 1, samplingMethod: 1},
                        "36249481": {sampleRate: 1, samplingMethod: 1},
                        "36250226": {sampleRate: 1, samplingMethod: 1},
                        "36251818": {sampleRate: 1, samplingMethod: 1},
                        "36255283": {sampleRate: 1, samplingMethod: 1},
                        "36256069": {sampleRate: 1, samplingMethod: 1},
                        "36257380": {sampleRate: 1, samplingMethod: 1},
                        "36306945": {sampleRate: 1, samplingMethod: 1},
                        "36306946": {sampleRate: 1, samplingMethod: 1},
                        "36306948": {sampleRate: 1, samplingMethod: 1},
                        "36306951": {sampleRate: 1000, samplingMethod: 1},
                        "36306952": {sampleRate: 1, samplingMethod: 1},
                        "36306955": {sampleRate: 1, samplingMethod: 1},
                        "36306958": {sampleRate: 1, samplingMethod: 1},
                        "37101248": {sampleRate: 10000, samplingMethod: 1},
                        "37158913": {sampleRate: 1, samplingMethod: 1},
                        "37158914": {sampleRate: 1, samplingMethod: 1},
                        "37158915": {sampleRate: 1, samplingMethod: 1},
                        "37158916": {sampleRate: 1, samplingMethod: 1},
                        "37224449": {sampleRate: 10000, samplingMethod: 1},
                        "37224450": {sampleRate: 10000, samplingMethod: 1},
                        "37224451": {sampleRate: 10000, samplingMethod: 1},
                        "37224452": {sampleRate: 10000, samplingMethod: 1},
                        "37224453": {sampleRate: 10000, samplingMethod: 1},
                        "37224454": {sampleRate: 10000, samplingMethod: 1},
                        "37224455": {sampleRate: 10000, samplingMethod: 1},
                        "37224456": {sampleRate: 10000, samplingMethod: 1},
                        "37224457": {sampleRate: 10000, samplingMethod: 1},
                        "37289985": {sampleRate: 1, samplingMethod: 1},
                        "37289986": {sampleRate: 1, samplingMethod: 1},
                        "37289987": {sampleRate: 1, samplingMethod: 1},
                        "37289990": {sampleRate: 1, samplingMethod: 1},
                        "37289991": {sampleRate: 1, samplingMethod: 1},
                        "37289992": {sampleRate: 1, samplingMethod: 1},
                        "37359568": {sampleRate: 10, samplingMethod: 1},
                        "37362344": {sampleRate: 10, samplingMethod: 1},
                        "37363365": {sampleRate: 10, samplingMethod: 1},
                        "37365445": {sampleRate: 10, samplingMethod: 1},
                        "37368014": {sampleRate: 10, samplingMethod: 1},
                        "37368588": {sampleRate: 10, samplingMethod: 1},
                        "37370103": {sampleRate: 10, samplingMethod: 1},
                        "37631558": {sampleRate: 4, samplingMethod: 1},
                        "37814273": {sampleRate: 1, samplingMethod: 1},
                        "37814274": {sampleRate: 1, samplingMethod: 1},
                        "37814275": {sampleRate: 1, samplingMethod: 1},
                        "38209779": {sampleRate: 100, samplingMethod: 1},
                        "38212112": {sampleRate: 100, samplingMethod: 1},
                        "38212473": {sampleRate: 100, samplingMethod: 1},
                        "38220042": {sampleRate: 100, samplingMethod: 1},
                        "38338561": {sampleRate: 1, samplingMethod: 1},
                        "38338562": {sampleRate: 1, samplingMethod: 1},
                        "38338563": {sampleRate: 1, samplingMethod: 1},
                        "38338564": {sampleRate: 1, samplingMethod: 1},
                        "38344892": {sampleRate: 1, samplingMethod: 1},
                        "38349246": {sampleRate: 1, samplingMethod: 1},
                        "38351883": {sampleRate: 1, samplingMethod: 1},
                        "38928385": {sampleRate: 1, samplingMethod: 1},
                        "39976964": {sampleRate: 2, samplingMethod: 1},
                        "39976965": {sampleRate: 2, samplingMethod: 1},
                        "39976966": {sampleRate: 1, samplingMethod: 1},
                        "39976967": {sampleRate: 2, samplingMethod: 1},
                        "40173575": {sampleRate: 1000, samplingMethod: 1},
                        "40501249": {sampleRate: 1, samplingMethod: 3},
                        "40501250": {sampleRate: 1, samplingMethod: 1},
                        "40501251": {sampleRate: 1, samplingMethod: 1},
                        "40501252": {sampleRate: 1, samplingMethod: 1},
                        "40501253": {sampleRate: 1, samplingMethod: 1},
                        "40501254": {sampleRate: 1, samplingMethod: 1},
                        "40501255": {sampleRate: 1, samplingMethod: 1},
                        "40840748": {sampleRate: 1, samplingMethod: 1},
                        "40841422": {sampleRate: 1, samplingMethod: 1},
                        "40843772": {sampleRate: 1, samplingMethod: 1},
                        "40894467": {sampleRate: 1, samplingMethod: 1},
                        "40894468": {sampleRate: 1, samplingMethod: 1},
                        "40894469": {sampleRate: 1, samplingMethod: 1},
                        "40894470": {sampleRate: 1, samplingMethod: 1},
                        "40894472": {sampleRate: 1, samplingMethod: 1},
                        "40894473": {sampleRate: 1, samplingMethod: 1},
                        "40894474": {sampleRate: 1, samplingMethod: 1},
                        "40894475": {sampleRate: 1, samplingMethod: 1},
                        "40894483": {sampleRate: 1, samplingMethod: 1},
                        "40894484": {sampleRate: 1, samplingMethod: 1},
                        "40894485": {sampleRate: 1, samplingMethod: 1},
                        "40894486": {sampleRate: 1, samplingMethod: 1},
                        "40894487": {sampleRate: 1, samplingMethod: 1},
                        "40894490": {sampleRate: 1, samplingMethod: 1},
                        "40894491": {sampleRate: 1, samplingMethod: 1},
                        "40894492": {sampleRate: 1, samplingMethod: 1},
                        "40894493": {sampleRate: 1, samplingMethod: 1},
                        "40894494": {sampleRate: 1, samplingMethod: 1},
                        "40894495": {sampleRate: 1, samplingMethod: 1},
                        "40894496": {sampleRate: 1, samplingMethod: 1},
                        "40894497": {sampleRate: 1, samplingMethod: 1},
                        "40894498": {sampleRate: 1, samplingMethod: 1},
                        "40894499": {sampleRate: 1, samplingMethod: 1},
                        "40894500": {sampleRate: 1, samplingMethod: 1},
                        "40894501": {sampleRate: 1, samplingMethod: 1},
                        "40894502": {sampleRate: 1, samplingMethod: 1},
                        "40903710": {sampleRate: 1, samplingMethod: 1},
                        "40905691": {sampleRate: 1, samplingMethod: 1},
                        "40908043": {sampleRate: 1, samplingMethod: 1},
                        "40910623": {sampleRate: 1, samplingMethod: 1},
                        "40913765": {sampleRate: 1, samplingMethod: 1},
                        "40919892": {sampleRate: 1, samplingMethod: 1},
                        "41484289": {sampleRate: 2, samplingMethod: 1},
                        "41484290": {sampleRate: 100, samplingMethod: 1},
                        "41484291": {sampleRate: 100, samplingMethod: 1},
                        "41484292": {sampleRate: 100, samplingMethod: 1},
                        "41484293": {sampleRate: 100, samplingMethod: 1},
                        "41484294": {sampleRate: 200, samplingMethod: 1},
                        "41484295": {sampleRate: 100, samplingMethod: 1},
                        "41484296": {sampleRate: 100, samplingMethod: 1},
                        "41484297": {sampleRate: 100, samplingMethod: 1},
                        "41484298": {sampleRate: 100, samplingMethod: 1},
                        "41484299": {sampleRate: 100, samplingMethod: 1},
                        "41484300": {sampleRate: 100, samplingMethod: 1},
                        "41484301": {sampleRate: 1, samplingMethod: 1},
                        "41484302": {sampleRate: 100, samplingMethod: 1},
                        "41484303": {sampleRate: 100, samplingMethod: 1},
                        "41484304": {sampleRate: 100, samplingMethod: 1},
                        "41484306": {sampleRate: 100, samplingMethod: 1},
                        "41484307": {sampleRate: 100, samplingMethod: 1},
                        "41484308": {sampleRate: 100, samplingMethod: 1},
                        "41484309": {sampleRate: 10, samplingMethod: 1},
                        "41484310": {sampleRate: 10, samplingMethod: 1},
                        "41484311": {sampleRate: 1, samplingMethod: 1},
                        "41484313": {sampleRate: 1, samplingMethod: 1},
                        "41484314": {sampleRate: 1, samplingMethod: 1},
                        "41484315": {sampleRate: 100, samplingMethod: 1},
                        "41484317": {sampleRate: 100, samplingMethod: 1},
                        "41484318": {sampleRate: 20, samplingMethod: 1},
                        "41485898": {sampleRate: 10, samplingMethod: 1},
                        "41486225": {sampleRate: 1, samplingMethod: 1},
                        "41486524": {sampleRate: 1, samplingMethod: 1},
                        "41487618": {sampleRate: 100, samplingMethod: 1},
                        "41488847": {sampleRate: 1, samplingMethod: 1},
                        "41490105": {sampleRate: 1, samplingMethod: 1},
                        "41490114": {sampleRate: 100, samplingMethod: 1},
                        "41490310": {sampleRate: 100, samplingMethod: 1},
                        "41491162": {sampleRate: 1, samplingMethod: 1},
                        "41491369": {sampleRate: 10, samplingMethod: 1},
                        "41491493": {sampleRate: 1, samplingMethod: 1},
                        "41491663": {sampleRate: 2, samplingMethod: 1},
                        "41491821": {sampleRate: 100, samplingMethod: 1},
                        "41492048": {sampleRate: 1, samplingMethod: 1},
                        "41492124": {sampleRate: 1, samplingMethod: 1},
                        "41492235": {sampleRate: 1, samplingMethod: 1},
                        "41493161": {sampleRate: 100, samplingMethod: 1},
                        "41493580": {sampleRate: 100, samplingMethod: 1},
                        "41494292": {sampleRate: 100, samplingMethod: 1},
                        "41495055": {sampleRate: 100, samplingMethod: 1},
                        "41495214": {sampleRate: 100, samplingMethod: 1},
                        "41495478": {sampleRate: 1, samplingMethod: 1},
                        "41495493": {sampleRate: 1, samplingMethod: 1},
                        "41495649": {sampleRate: 1, samplingMethod: 1},
                        "41497570": {sampleRate: 10, samplingMethod: 1},
                        "41497784": {sampleRate: 100, samplingMethod: 1},
                        "41498606": {sampleRate: 10, samplingMethod: 1},
                        "41499313": {sampleRate: 100, samplingMethod: 1},
                        "41500090": {sampleRate: 100, samplingMethod: 1},
                        "41500162": {sampleRate: 1, samplingMethod: 1},
                        "41506813": {sampleRate: 250, samplingMethod: 1},
                        "41549825": {sampleRate: 1, samplingMethod: 1},
                        "41811969": {sampleRate: 1, samplingMethod: 1},
                        "41811970": {sampleRate: 1, samplingMethod: 1},
                        "41811971": {sampleRate: 1, samplingMethod: 1},
                        "42403339": {sampleRate: 1, samplingMethod: 1},
                        "42406132": {sampleRate: 1, samplingMethod: 1},
                        "42408939": {sampleRate: 1, samplingMethod: 1},
                        "42411149": {sampleRate: 1, samplingMethod: 1},
                        "42417878": {sampleRate: 1, samplingMethod: 1},
                        "42532865": {sampleRate: 1000, samplingMethod: 1},
                        "42532866": {sampleRate: 10000, samplingMethod: 1},
                        "42729476": {sampleRate: 1, samplingMethod: 1},
                        "42729477": {sampleRate: 1, samplingMethod: 1},
                        "42729478": {sampleRate: 1, samplingMethod: 1},
                        "42738840": {sampleRate: 1, samplingMethod: 1},
                        "42795009": {sampleRate: 1, samplingMethod: 1},
                        "44040193": {sampleRate: 1, samplingMethod: 1},
                        "44040194": {sampleRate: 1, samplingMethod: 1},
                        "44040198": {sampleRate: 1, samplingMethod: 1},
                        "44433409": {sampleRate: 1, samplingMethod: 1},
                        "44433410": {sampleRate: 1, samplingMethod: 1},
                        "44433411": {sampleRate: 1, samplingMethod: 1},
                        "44892162": {sampleRate: 1, samplingMethod: 1},
                        "44892163": {sampleRate: 1, samplingMethod: 1},
                        "44892165": {sampleRate: 5, samplingMethod: 1},
                        "44892166": {sampleRate: 5, samplingMethod: 1},
                        "44957701": {sampleRate: 1, samplingMethod: 1},
                        "45088770": {sampleRate: 1, samplingMethod: 1},
                        "45613057": {sampleRate: 1, samplingMethod: 1},
                        "45613058": {sampleRate: 1, samplingMethod: 1},
                        "45613059": {sampleRate: 1, samplingMethod: 1},
                        "45678593": {sampleRate: 1, samplingMethod: 1},
                        "45678594": {sampleRate: 100, samplingMethod: 1},
                        "46596097": {sampleRate: 1, samplingMethod: 1},
                        "47841281": {sampleRate: 1, samplingMethod: 1},
                        "47841282": {sampleRate: 1, samplingMethod: 1},
                        "47841283": {sampleRate: 1, samplingMethod: 1},
                        "48496641": {sampleRate: 1, samplingMethod: 1},
                        "48758785": {sampleRate: 1, samplingMethod: 1},
                        "48758786": {sampleRate: 1, samplingMethod: 1},
                        "49283073": {sampleRate: 1, samplingMethod: 1},
                        "49283075": {sampleRate: 100, samplingMethod: 1},
                        "49284811": {sampleRate: 100, samplingMethod: 1},
                        "49285023": {sampleRate: 100, samplingMethod: 1},
                        "49287848": {sampleRate: 100, samplingMethod: 1},
                        "49290075": {sampleRate: 100, samplingMethod: 1},
                        "49290201": {sampleRate: 100, samplingMethod: 1},
                        "49290401": {sampleRate: 100, samplingMethod: 1},
                        "49290951": {sampleRate: 100, samplingMethod: 1},
                        "49291043": {sampleRate: 100, samplingMethod: 1},
                        "49291264": {sampleRate: 100, samplingMethod: 1},
                        "49294705": {sampleRate: 100, samplingMethod: 1},
                        "49294997": {sampleRate: 100, samplingMethod: 1},
                        "49295194": {sampleRate: 100, samplingMethod: 1},
                        "49296905": {sampleRate: 100, samplingMethod: 1},
                        "49298279": {sampleRate: 100, samplingMethod: 1},
                        "49479681": {sampleRate: 1, samplingMethod: 1},
                        "49479683": {sampleRate: 1, samplingMethod: 1},
                        "49479685": {sampleRate: 1, samplingMethod: 1},
                        "49481946": {sampleRate: 1, samplingMethod: 1},
                        "49816219": {sampleRate: 10000, samplingMethod: 1},
                        "50003969": {sampleRate: 1, samplingMethod: 1},
                        "50003970": {sampleRate: 1, samplingMethod: 1},
                        "50003971": {sampleRate: 1, samplingMethod: 1},
                        "50003972": {sampleRate: 1, samplingMethod: 1},
                        "50003973": {sampleRate: 1, samplingMethod: 1},
                        "50003974": {sampleRate: 1, samplingMethod: 1},
                        "50987009": {sampleRate: 1, samplingMethod: 1},
                        "50987010": {sampleRate: 1, samplingMethod: 1},
                        "51452317": {sampleRate: 100, samplingMethod: 1},
                        "51455798": {sampleRate: 100, samplingMethod: 1},
                        "51459017": {sampleRate: 100, samplingMethod: 1},
                        "51459249": {sampleRate: 100, samplingMethod: 1},
                        "52690945": {sampleRate: 1, samplingMethod: 1},
                        "52690946": {sampleRate: 1, samplingMethod: 1},
                        "52690947": {sampleRate: 1, samplingMethod: 1},
                        "52690948": {sampleRate: 1, samplingMethod: 1},
                        "52690949": {sampleRate: 1, samplingMethod: 1},
                        "52690950": {sampleRate: 1, samplingMethod: 1},
                        "52694580": {sampleRate: 1, samplingMethod: 1},
                        "52698112": {sampleRate: 1, samplingMethod: 1},
                        "52701974": {sampleRate: 1, samplingMethod: 1},
                        "52704988": {sampleRate: 1, samplingMethod: 1},
                        "52705483": {sampleRate: 1, samplingMethod: 1},
                        "52706253": {sampleRate: 1, samplingMethod: 1},
                        "52709001": {sampleRate: 1, samplingMethod: 1},
                        "52710195": {sampleRate: 1, samplingMethod: 1},
                        "52711372": {sampleRate: 1, samplingMethod: 1},
                        "52711928": {sampleRate: 1, samplingMethod: 1},
                        "52712329": {sampleRate: 1, samplingMethod: 1},
                        "52717731": {sampleRate: 1, samplingMethod: 1},
                        "52719193": {sampleRate: 1, samplingMethod: 1},
                        "52720775": {sampleRate: 1, samplingMethod: 1},
                        "52722738": {sampleRate: 1, samplingMethod: 1},
                        "52756481": {sampleRate: 1, samplingMethod: 1},
                        "52887553": {sampleRate: 1, samplingMethod: 1},
                        "52887555": {sampleRate: 1, samplingMethod: 1},
                        "52887556": {sampleRate: 1, samplingMethod: 3},
                        "52887557": {sampleRate: 1, samplingMethod: 1},
                        "52887559": {sampleRate: 1, samplingMethod: 1},
                        "52887560": {sampleRate: 1, samplingMethod: 3},
                        "52887561": {sampleRate: 1, samplingMethod: 3},
                        "52887562": {sampleRate: 1, samplingMethod: 3},
                        "52887563": {sampleRate: 1, samplingMethod: 1},
                        "52887564": {sampleRate: 1, samplingMethod: 1},
                        "52887565": {sampleRate: 1, samplingMethod: 1},
                        "52887566": {sampleRate: 1, samplingMethod: 1},
                        "52887567": {sampleRate: 1, samplingMethod: 1},
                        "52887568": {sampleRate: 1, samplingMethod: 1},
                        "52887569": {sampleRate: 1, samplingMethod: 1},
                        "52887570": {sampleRate: 1, samplingMethod: 1},
                        "52887571": {sampleRate: 1, samplingMethod: 1},
                        "52887572": {sampleRate: 1, samplingMethod: 1},
                        "52887573": {sampleRate: 1, samplingMethod: 1},
                        "52887574": {sampleRate: 1, samplingMethod: 1},
                        "52887575": {sampleRate: 1, samplingMethod: 1},
                        "52887576": {sampleRate: 1, samplingMethod: 1},
                        "52887577": {sampleRate: 1, samplingMethod: 1},
                        "52887578": {sampleRate: 1, samplingMethod: 1},
                        "52887579": {sampleRate: 1, samplingMethod: 1},
                        "52887580": {sampleRate: 1, samplingMethod: 1},
                        "52887581": {sampleRate: 1, samplingMethod: 1},
                        "52887582": {sampleRate: 1, samplingMethod: 1},
                        "52887583": {sampleRate: 1, samplingMethod: 1},
                        "52887584": {sampleRate: 1, samplingMethod: 1},
                        "52887585": {sampleRate: 1, samplingMethod: 1},
                        "52887586": {sampleRate: 1, samplingMethod: 1},
                        "52887587": {sampleRate: 1, samplingMethod: 1},
                        "52888679": {sampleRate: 1, samplingMethod: 1},
                        "52889048": {sampleRate: 1, samplingMethod: 1},
                        "52889499": {sampleRate: 1, samplingMethod: 1},
                        "52890296": {sampleRate: 1, samplingMethod: 1},
                        "52891792": {sampleRate: 1, samplingMethod: 1},
                        "52892954": {sampleRate: 1, samplingMethod: 1},
                        "52893664": {sampleRate: 1, samplingMethod: 1},
                        "52894132": {sampleRate: 1, samplingMethod: 1},
                        "52894986": {sampleRate: 1, samplingMethod: 1},
                        "52895164": {sampleRate: 1, samplingMethod: 1},
                        "52896044": {sampleRate: 1, samplingMethod: 1},
                        "52896150": {sampleRate: 1, samplingMethod: 1},
                        "52896424": {sampleRate: 1, samplingMethod: 1},
                        "52897136": {sampleRate: 1, samplingMethod: 1},
                        "52897225": {sampleRate: 1, samplingMethod: 1},
                        "52898380": {sampleRate: 1, samplingMethod: 1},
                        "52899465": {sampleRate: 1, samplingMethod: 1},
                        "52899570": {sampleRate: 1000, samplingMethod: 1},
                        "52899642": {sampleRate: 1, samplingMethod: 1},
                        "52900219": {sampleRate: 1, samplingMethod: 1},
                        "52900550": {sampleRate: 1, samplingMethod: 1},
                        "52900739": {sampleRate: 1, samplingMethod: 1},
                        "52901539": {sampleRate: 1, samplingMethod: 1},
                        "52901642": {sampleRate: 1, samplingMethod: 1},
                        "52901931": {sampleRate: 1, samplingMethod: 1},
                        "52902102": {sampleRate: 1, samplingMethod: 1},
                        "52902805": {sampleRate: 1, samplingMethod: 1},
                        "52903035": {sampleRate: 1, samplingMethod: 1},
                        "52903160": {sampleRate: 1, samplingMethod: 1},
                        "52903192": {sampleRate: 1, samplingMethod: 1},
                        "52910634": {sampleRate: 1, samplingMethod: 1},
                        "53018625": {sampleRate: 1, samplingMethod: 1},
                        "53023044": {sampleRate: 1, samplingMethod: 1},
                        "53030147": {sampleRate: 1, samplingMethod: 1},
                        "53222086": {sampleRate: 10, samplingMethod: 1},
                        "53346305": {sampleRate: 1, samplingMethod: 1},
                        "53346306": {sampleRate: 1, samplingMethod: 1},
                        "53346307": {sampleRate: 1, samplingMethod: 1},
                        "53346308": {sampleRate: 1, samplingMethod: 3},
                        "53346309": {sampleRate: 1, samplingMethod: 1},
                        "53346310": {sampleRate: 1, samplingMethod: 1},
                        "53346311": {sampleRate: 1, samplingMethod: 1},
                        "53346312": {sampleRate: 1, samplingMethod: 1},
                        "53346313": {sampleRate: 1, samplingMethod: 1},
                        "53346314": {sampleRate: 1, samplingMethod: 1},
                        "53346315": {sampleRate: 1, samplingMethod: 1},
                        "53348255": {sampleRate: 1, samplingMethod: 1},
                        "53349360": {sampleRate: 1, samplingMethod: 1},
                        "53350227": {sampleRate: 1, samplingMethod: 1},
                        "53350607": {sampleRate: 1, samplingMethod: 1},
                        "53351604": {sampleRate: 1, samplingMethod: 1},
                        "53352841": {sampleRate: 1, samplingMethod: 1},
                        "53353549": {sampleRate: 1, samplingMethod: 1},
                        "53354745": {sampleRate: 1, samplingMethod: 1},
                        "53356071": {sampleRate: 1, samplingMethod: 1},
                        "53356872": {sampleRate: 1, samplingMethod: 1},
                        "53359547": {sampleRate: 1, samplingMethod: 1},
                        "53359965": {sampleRate: 1, samplingMethod: 1},
                        "53542913": {sampleRate: 1, samplingMethod: 1},
                        "53542914": {sampleRate: 1, samplingMethod: 1},
                        "53542915": {sampleRate: 1, samplingMethod: 1},
                        "53542916": {sampleRate: 1, samplingMethod: 1},
                        "53608449": {sampleRate: 1, samplingMethod: 1},
                        "53608450": {sampleRate: 1, samplingMethod: 1},
                        "53608451": {sampleRate: 1, samplingMethod: 1},
                        "53805057": {sampleRate: 1, samplingMethod: 1},
                        "53805058": {sampleRate: 1, samplingMethod: 1},
                        "53805059": {sampleRate: 1, samplingMethod: 1},
                        "53805060": {sampleRate: 1, samplingMethod: 1},
                        "53807173": {sampleRate: 1, samplingMethod: 1},
                        "53817004": {sampleRate: 1, samplingMethod: 1},
                        "53820636": {sampleRate: 1, samplingMethod: 1},
                        "54132737": {sampleRate: 100, samplingMethod: 1},
                        "54198273": {sampleRate: 1, samplingMethod: 1},
                        "54198274": {sampleRate: 1, samplingMethod: 1},
                        "54203833": {sampleRate: 1, samplingMethod: 1},
                        "54204699": {sampleRate: 1, samplingMethod: 1},
                        "54205001": {sampleRate: 1, samplingMethod: 1},
                        "54206020": {sampleRate: 1, samplingMethod: 1},
                        "54207975": {sampleRate: 1, samplingMethod: 1},
                        "54208795": {sampleRate: 1, samplingMethod: 1},
                        "54263809": {sampleRate: 1, samplingMethod: 1},
                        "54263810": {sampleRate: 1, samplingMethod: 1},
                        "54263811": {sampleRate: 1, samplingMethod: 1},
                        "54263812": {sampleRate: 1, samplingMethod: 1},
                        "54263813": {sampleRate: 1, samplingMethod: 1},
                        "54263814": {sampleRate: 1, samplingMethod: 1},
                        "54263815": {sampleRate: 1, samplingMethod: 1},
                        "54263816": {sampleRate: 1, samplingMethod: 1},
                        "54263817": {sampleRate: 1, samplingMethod: 1},
                        "54263818": {sampleRate: 1, samplingMethod: 1},
                        "54263819": {sampleRate: 1, samplingMethod: 1},
                        "54263820": {sampleRate: 1, samplingMethod: 1},
                        "54266075": {sampleRate: 1, samplingMethod: 1},
                        "54266141": {sampleRate: 1, samplingMethod: 1},
                        "54266824": {sampleRate: 1, samplingMethod: 1},
                        "54278955": {sampleRate: 1, samplingMethod: 1},
                        "54285047": {sampleRate: 1, samplingMethod: 1},
                        "54287428": {sampleRate: 1, samplingMethod: 1},
                        "54525953": {sampleRate: 2, samplingMethod: 1},
                        "54525954": {sampleRate: 1, samplingMethod: 1},
                        "54525955": {sampleRate: 1, samplingMethod: 1},
                        "54525956": {sampleRate: 1, samplingMethod: 1},
                        "54525957": {sampleRate: 1, samplingMethod: 1},
                        "54525958": {sampleRate: 1, samplingMethod: 1},
                        "54525959": {sampleRate: 1, samplingMethod: 1},
                        "54657025": {sampleRate: 10000, samplingMethod: 1},
                        "54657026": {sampleRate: 10000, samplingMethod: 1},
                        "54657027": {sampleRate: 10000, samplingMethod: 1},
                        "54657028": {sampleRate: 10000, samplingMethod: 1},
                        "54657029": {sampleRate: 10000, samplingMethod: 1},
                        "54657030": {sampleRate: 10000, samplingMethod: 1},
                        "54853633": {sampleRate: 1, samplingMethod: 1},
                        "54853634": {sampleRate: 1, samplingMethod: 1},
                        "54856934": {sampleRate: 1, samplingMethod: 1},
                        "54864546": {sampleRate: 1, samplingMethod: 1},
                        "54919169": {sampleRate: 1, samplingMethod: 1},
                        "54919170": {sampleRate: 1, samplingMethod: 1},
                        "54919171": {sampleRate: 1, samplingMethod: 1},
                        "54919172": {sampleRate: 1, samplingMethod: 1},
                        "54919173": {sampleRate: 1, samplingMethod: 1},
                        "54919174": {sampleRate: 1, samplingMethod: 1},
                        "54919175": {sampleRate: 1, samplingMethod: 1},
                        "54919176": {sampleRate: 1, samplingMethod: 1},
                        "54919177": {sampleRate: 1, samplingMethod: 1},
                        "54919178": {sampleRate: 1, samplingMethod: 1},
                        "54919179": {sampleRate: 1, samplingMethod: 1},
                        "54919180": {sampleRate: 1, samplingMethod: 1},
                        "54919181": {sampleRate: 1, samplingMethod: 1},
                        "54919182": {sampleRate: 1, samplingMethod: 1},
                        "54919183": {sampleRate: 1, samplingMethod: 1},
                        "54919184": {sampleRate: 1, samplingMethod: 1},
                        "54919185": {sampleRate: 1, samplingMethod: 1},
                        "54919186": {sampleRate: 1, samplingMethod: 1},
                        "54919187": {sampleRate: 1, samplingMethod: 1},
                        "54919188": {sampleRate: 1, samplingMethod: 1},
                        "54919189": {sampleRate: 1, samplingMethod: 1},
                        "54919190": {sampleRate: 1, samplingMethod: 1},
                        "54919191": {sampleRate: 1, samplingMethod: 1},
                        "54919192": {sampleRate: 1, samplingMethod: 1},
                        "54919193": {sampleRate: 1, samplingMethod: 1},
                        "54919194": {sampleRate: 1, samplingMethod: 1},
                        "54919195": {sampleRate: 1, samplingMethod: 1},
                        "54919196": {sampleRate: 1, samplingMethod: 1},
                        "54919197": {sampleRate: 1, samplingMethod: 1},
                        "54919198": {sampleRate: 1, samplingMethod: 1},
                        "54919199": {sampleRate: 1, samplingMethod: 1},
                        "54920477": {sampleRate: 1, samplingMethod: 1},
                        "54920986": {sampleRate: 1, samplingMethod: 1},
                        "54921638": {sampleRate: 1, samplingMethod: 1},
                        "54922073": {sampleRate: 1, samplingMethod: 1},
                        "54922991": {sampleRate: 1, samplingMethod: 1},
                        "54923806": {sampleRate: 1, samplingMethod: 1},
                        "54924465": {sampleRate: 1, samplingMethod: 1},
                        "54924629": {sampleRate: 1, samplingMethod: 1},
                        "54926560": {sampleRate: 1, samplingMethod: 1},
                        "54927157": {sampleRate: 1, samplingMethod: 1},
                        "54928097": {sampleRate: 1, samplingMethod: 1},
                        "54928841": {sampleRate: 1, samplingMethod: 1},
                        "54930074": {sampleRate: 1, samplingMethod: 1},
                        "54930508": {sampleRate: 1, samplingMethod: 1},
                        "54932258": {sampleRate: 1, samplingMethod: 1},
                        "54934991": {sampleRate: 1, samplingMethod: 1},
                        "54935139": {sampleRate: 1, samplingMethod: 1},
                        "54935506": {sampleRate: 1, samplingMethod: 1},
                        "55181314": {sampleRate: 1, samplingMethod: 1},
                        "55181315": {sampleRate: 1, samplingMethod: 1},
                        "55181316": {sampleRate: 1, samplingMethod: 1},
                        "55181317": {sampleRate: 1, samplingMethod: 1},
                        "55246849": {sampleRate: 1, samplingMethod: 1},
                        "55246850": {sampleRate: 1000000000, samplingMethod: 1},
                        "55312385": {sampleRate: 1, samplingMethod: 1},
                        "55312386": {sampleRate: 1, samplingMethod: 1},
                        "55312388": {sampleRate: 1, samplingMethod: 1},
                        "55325709": {sampleRate: 1, samplingMethod: 1},
                        "55443457": {sampleRate: 1, samplingMethod: 1},
                        "55443458": {sampleRate: 1, samplingMethod: 1},
                        "55443459": {sampleRate: 1, samplingMethod: 1},
                        "55443460": {sampleRate: 1, samplingMethod: 1},
                        "55447349": {sampleRate: 1, samplingMethod: 1},
                        "55465642": {sampleRate: 1, samplingMethod: 1},
                        "55508994": {sampleRate: 1, samplingMethod: 1},
                        "55508995": {sampleRate: 1, samplingMethod: 1},
                        "55508996": {sampleRate: 1, samplingMethod: 1},
                        "55511587": {sampleRate: 1, samplingMethod: 1},
                        "55517182": {sampleRate: 1, samplingMethod: 1},
                        "55574529": {sampleRate: 10000, samplingMethod: 1},
                        "55574530": {sampleRate: 1, samplingMethod: 3},
                        "55577701": {sampleRate: 1, samplingMethod: 3},
                        "55580822": {sampleRate: 1, samplingMethod: 3},
                        "55836673": {sampleRate: 1, samplingMethod: 1},
                        "55836674": {sampleRate: 1000000000, samplingMethod: 1},
                        "55836675": {sampleRate: 1000000000, samplingMethod: 1},
                        "55836676": {sampleRate: 1000000000, samplingMethod: 1},
                        "55836677": {sampleRate: 1000000000, samplingMethod: 1},
                        "55836678": {sampleRate: 10000, samplingMethod: 1},
                        "55838299": {sampleRate: 1, samplingMethod: 1},
                        "55838475": {sampleRate: 10000, samplingMethod: 1},
                        "55838751": {sampleRate: 1, samplingMethod: 1},
                        "55839297": {sampleRate: 1, samplingMethod: 1},
                        "55839576": {sampleRate: 1, samplingMethod: 1},
                        "55967745": {sampleRate: 1, samplingMethod: 1},
                        "55967746": {sampleRate: 1, samplingMethod: 1},
                        "55967747": {sampleRate: 1, samplingMethod: 1},
                        "55967748": {sampleRate: 1, samplingMethod: 1},
                        "55977618": {sampleRate: 1, samplingMethod: 1},
                        "55981862": {sampleRate: 1, samplingMethod: 1},
                        "55983494": {sampleRate: 1, samplingMethod: 1},
                        "56360961": {sampleRate: 1, samplingMethod: 1},
                        "57344001": {sampleRate: 1, samplingMethod: 1},
                        "57344002": {sampleRate: 10, samplingMethod: 1},
                        "57344003": {sampleRate: 1, samplingMethod: 1},
                        "57344004": {sampleRate: 1, samplingMethod: 1},
                        "57344005": {sampleRate: 10000, samplingMethod: 1},
                        "57349022": {sampleRate: 10000, samplingMethod: 1},
                        "57409537": {sampleRate: 100000000, samplingMethod: 1},
                        "57409538": {sampleRate: 100000000, samplingMethod: 1},
                        "57409539": {sampleRate: 100000000, samplingMethod: 1},
                        "57414808": {sampleRate: 10000, samplingMethod: 1},
                        "57416887": {sampleRate: 10000, samplingMethod: 1},
                        "57423572": {sampleRate: 10000, samplingMethod: 1},
                        "57424600": {sampleRate: 10000, samplingMethod: 1},
                        "57553537": {sampleRate: 1, samplingMethod: 1},
                        "57671681": {sampleRate: 1, samplingMethod: 1},
                        "57671682": {sampleRate: 1, samplingMethod: 1},
                        "57671683": {sampleRate: 1, samplingMethod: 1},
                        "57671684": {sampleRate: 1, samplingMethod: 1},
                        "57671685": {sampleRate: 1, samplingMethod: 1},
                        "57673015": {sampleRate: 1, samplingMethod: 1},
                        "57673101": {sampleRate: 1, samplingMethod: 1},
                        "57676191": {sampleRate: 1, samplingMethod: 1},
                        "57676962": {sampleRate: 1, samplingMethod: 1},
                        "57678366": {sampleRate: 1, samplingMethod: 1},
                        "57679159": {sampleRate: 1, samplingMethod: 1},
                        "57679681": {sampleRate: 1, samplingMethod: 1},
                        "57680423": {sampleRate: 1, samplingMethod: 1},
                        "57681719": {sampleRate: 1, samplingMethod: 1},
                        "57933825": {sampleRate: 1, samplingMethod: 1},
                        "57999361": {sampleRate: 1, samplingMethod: 1},
                        "57999362": {sampleRate: 1, samplingMethod: 1},
                        "58195969": {sampleRate: 1, samplingMethod: 1},
                        "58195970": {sampleRate: 1, samplingMethod: 1},
                        "58195971": {sampleRate: 1, samplingMethod: 1},
                        "58197575": {sampleRate: 1, samplingMethod: 1},
                        "58198230": {sampleRate: 1, samplingMethod: 1},
                        "58198910": {sampleRate: 1, samplingMethod: 1},
                        "58199413": {sampleRate: 1, samplingMethod: 1},
                        "58200119": {sampleRate: 1, samplingMethod: 1},
                        "58200302": {sampleRate: 1, samplingMethod: 1},
                        "58202054": {sampleRate: 1, samplingMethod: 1},
                        "58203187": {sampleRate: 1, samplingMethod: 1},
                        "58203836": {sampleRate: 1, samplingMethod: 1},
                        "58204710": {sampleRate: 1, samplingMethod: 1},
                        "58204719": {sampleRate: 1, samplingMethod: 1},
                        "58204796": {sampleRate: 1, samplingMethod: 1},
                        "58204895": {sampleRate: 1, samplingMethod: 1},
                        "58205292": {sampleRate: 1, samplingMethod: 1},
                        "58207372": {sampleRate: 1, samplingMethod: 1},
                        "58207791": {sampleRate: 1, samplingMethod: 1},
                        "58208472": {sampleRate: 1, samplingMethod: 1},
                        "58208772": {sampleRate: 1, samplingMethod: 1},
                        "58209045": {sampleRate: 1, samplingMethod: 1},
                        "58209083": {sampleRate: 1, samplingMethod: 1},
                        "58209723": {sampleRate: 1, samplingMethod: 1},
                        "58209742": {sampleRate: 1, samplingMethod: 1},
                        "58210323": {sampleRate: 1, samplingMethod: 1},
                        "58210485": {sampleRate: 1, samplingMethod: 1},
                        "58210711": {sampleRate: 1, samplingMethod: 1},
                        "58211469": {sampleRate: 1, samplingMethod: 1},
                        "58211715": {sampleRate: 1, samplingMethod: 1},
                        "58211900": {sampleRate: 1, samplingMethod: 1},
                        "58458114": {sampleRate: 1, samplingMethod: 1},
                        "58458115": {sampleRate: 1, samplingMethod: 1},
                        "58461407": {sampleRate: 1, samplingMethod: 1},
                        "58464469": {sampleRate: 1, samplingMethod: 1},
                        "58471621": {sampleRate: 1, samplingMethod: 1},
                        "58654721": {sampleRate: 1, samplingMethod: 1},
                        "58654722": {sampleRate: 1, samplingMethod: 1},
                        "58654723": {sampleRate: 1, samplingMethod: 1},
                        "59244545": {sampleRate: 1, samplingMethod: 1},
                        "59244546": {sampleRate: 1, samplingMethod: 1},
                        "59249609": {sampleRate: 1, samplingMethod: 1},
                        "59251734": {sampleRate: 1, samplingMethod: 1},
                        "59255771": {sampleRate: 1, samplingMethod: 1},
                        "59506689": {sampleRate: 10000, samplingMethod: 1},
                        "59899905": {sampleRate: 1, samplingMethod: 1},
                        "59899906": {sampleRate: 1, samplingMethod: 1},
                        "59899907": {sampleRate: 1, samplingMethod: 1},
                        "59899908": {sampleRate: 1, samplingMethod: 1},
                        "59899909": {sampleRate: 1, samplingMethod: 1},
                        "61276161": {sampleRate: 1, samplingMethod: 1},
                        "61276162": {sampleRate: 1, samplingMethod: 1},
                        "61276163": {sampleRate: 1, samplingMethod: 1},
                        "61276164": {sampleRate: 1, samplingMethod: 1},
                        "62128129": {sampleRate: 1, samplingMethod: 1},
                        "62128130": {sampleRate: 1, samplingMethod: 1},
                        "62128131": {sampleRate: 1, samplingMethod: 1},
                        "62128132": {sampleRate: 1, samplingMethod: 1},
                        "62128133": {sampleRate: 1, samplingMethod: 1},
                        "62128134": {sampleRate: 1, samplingMethod: 1},
                        "62128135": {sampleRate: 1, samplingMethod: 1},
                        "62324739": {sampleRate: 1, samplingMethod: 1},
                        "62455809": {sampleRate: 1, samplingMethod: 1},
                        "62455810": {sampleRate: 1, samplingMethod: 1},
                        "62455811": {sampleRate: 1, samplingMethod: 1},
                        "62521345": {sampleRate: 10, samplingMethod: 1},
                        "62521346": {sampleRate: 10, samplingMethod: 1},
                        "62521347": {sampleRate: 10, samplingMethod: 1},
                        "62521348": {sampleRate: 10, samplingMethod: 1},
                        "62521349": {sampleRate: 10, samplingMethod: 1},
                        "62521350": {sampleRate: 10, samplingMethod: 1},
                        "62532802": {sampleRate: 10, samplingMethod: 1},
                        "62586881": {sampleRate: 10, samplingMethod: 1},
                        "62914562": {sampleRate: 1, samplingMethod: 1},
                        "62980097": {sampleRate: 10000, samplingMethod: 1},
                        "63373313": {sampleRate: 1, samplingMethod: 1},
                        "63438849": {sampleRate: 1, samplingMethod: 1},
                        "63443246": {sampleRate: 1, samplingMethod: 1},
                        "63443755": {sampleRate: 1, samplingMethod: 1},
                        "63444114": {sampleRate: 1, samplingMethod: 1},
                        "63445172": {sampleRate: 1, samplingMethod: 1},
                        "63451466": {sampleRate: 1, samplingMethod: 1},
                        "63504385": {sampleRate: 1, samplingMethod: 1},
                        "63504386": {sampleRate: 1, samplingMethod: 1},
                        "63504387": {sampleRate: 1, samplingMethod: 1},
                        "63569921": {sampleRate: 1, samplingMethod: 1},
                        "63635457": {sampleRate: 1, samplingMethod: 1},
                        "63700993": {sampleRate: 1, samplingMethod: 1},
                        "63700994": {sampleRate: 1, samplingMethod: 1},
                        "63700995": {sampleRate: 1, samplingMethod: 1},
                        "63700996": {sampleRate: 1, samplingMethod: 1},
                        "63700997": {sampleRate: 1, samplingMethod: 1},
                        "63963137": {sampleRate: 1, samplingMethod: 1},
                        "64044054": {sampleRate: 10000, samplingMethod: 1},
                        "64230141": {sampleRate: 10000, samplingMethod: 1},
                        "64232355": {sampleRate: 10000, samplingMethod: 1},
                        "64233826": {sampleRate: 10000, samplingMethod: 1},
                        "64240099": {sampleRate: 10000, samplingMethod: 1},
                        "75366401": {sampleRate: 10000, samplingMethod: 1},
                        "79364097": {sampleRate: 1, samplingMethod: 1},
                        "81599639": {sampleRate: 10000, samplingMethod: 1},
                        "81601374": {sampleRate: 10000, samplingMethod: 1},
                        "81607290": {sampleRate: 10000, samplingMethod: 1},
                        "81725894": {sampleRate: 10000, samplingMethod: 1},
                        "81735603": {sampleRate: 10000, samplingMethod: 1},
                        "81739010": {sampleRate: 10000, samplingMethod: 1},
                        "91490110": {sampleRate: 1, samplingMethod: 1},
                        "91493742": {sampleRate: 1, samplingMethod: 1},
                        "91497584": {sampleRate: 1, samplingMethod: 1},
                        "91500519": {sampleRate: 1, samplingMethod: 1},
                        "91501860": {sampleRate: 1, samplingMethod: 1},
                        "95289345": {sampleRate: 10000, samplingMethod: 1},
                        "96997416": {sampleRate: 10000, samplingMethod: 1},
                        "97584737": {sampleRate: 1, samplingMethod: 3},
                        "97586489": {sampleRate: 1, samplingMethod: 3},
                        "97590506": {sampleRate: 1, samplingMethod: 3},
                        "97590967": {sampleRate: 10000, samplingMethod: 1},
                        "97595254": {sampleRate: 1, samplingMethod: 3},
                        "97596530": {sampleRate: 1, samplingMethod: 3},
                        "97598603": {sampleRate: 1, samplingMethod: 3},
                        "101648941": {sampleRate: 1, samplingMethod: 1},
                        "101652143": {sampleRate: 1, samplingMethod: 1},
                        "101655997": {sampleRate: 1, samplingMethod: 1},
                        "101657336": {sampleRate: 1, samplingMethod: 1},
                        "101657509": {sampleRate: 1, samplingMethod: 1},
                        "104857601": {sampleRate: 10000, samplingMethod: 1},
                        "104857602": {sampleRate: 10000, samplingMethod: 1},
                        "108079481": {sampleRate: 10000, samplingMethod: 1},
                        "109772801": {sampleRate: 1, samplingMethod: 1},
                        "109774781": {sampleRate: 1, samplingMethod: 1},
                        "109774948": {sampleRate: 1, samplingMethod: 1},
                        "109775850": {sampleRate: 1, samplingMethod: 1},
                        "109775999": {sampleRate: 1, samplingMethod: 1},
                        "109776315": {sampleRate: 1, samplingMethod: 1},
                        "109777419": {sampleRate: 1, samplingMethod: 1},
                        "109777541": {sampleRate: 1, samplingMethod: 1},
                        "109780893": {sampleRate: 1, samplingMethod: 1},
                        "109781457": {sampleRate: 1, samplingMethod: 1},
                        "109782244": {sampleRate: 1, samplingMethod: 1},
                        "109782888": {sampleRate: 1, samplingMethod: 1},
                        "109784985": {sampleRate: 1, samplingMethod: 1},
                        "109785685": {sampleRate: 1, samplingMethod: 1},
                        "109787338": {sampleRate: 1, samplingMethod: 1},
                        "110176278": {sampleRate: 1, samplingMethod: 1},
                        "110177888": {sampleRate: 1, samplingMethod: 1},
                        "110178557": {sampleRate: 1, samplingMethod: 1},
                        "112991659": {sampleRate: 1, samplingMethod: 1},
                        "112992363": {sampleRate: 1, samplingMethod: 1},
                        "124985766": {sampleRate: 1, samplingMethod: 1},
                        "124989707": {sampleRate: 1, samplingMethod: 3},
                        "127468755": {sampleRate: 1, samplingMethod: 1},
                        "127468795": {sampleRate: 1, samplingMethod: 1},
                        "127469845": {sampleRate: 1, samplingMethod: 1},
                        "127470547": {sampleRate: 1, samplingMethod: 1},
                        "127470924": {sampleRate: 1, samplingMethod: 1},
                        "127471679": {sampleRate: 1, samplingMethod: 1},
                        "127471680": {sampleRate: 1, samplingMethod: 1},
                        "127473053": {sampleRate: 1, samplingMethod: 1},
                        "127474327": {sampleRate: 1, samplingMethod: 1},
                        "127474527": {sampleRate: 1, samplingMethod: 1},
                        "127477457": {sampleRate: 1, samplingMethod: 1},
                        "127481618": {sampleRate: 1, samplingMethod: 1},
                        "127481936": {sampleRate: 1, samplingMethod: 1},
                        "127483160": {sampleRate: 1, samplingMethod: 1},
                        "137428993": {sampleRate: 1, samplingMethod: 1},
                        "137428994": {sampleRate: 1, samplingMethod: 1},
                        "137440519": {sampleRate: 1, samplingMethod: 1},
                        "138810076": {sampleRate: 1, samplingMethod: 1},
                        "138816378": {sampleRate: 1, samplingMethod: 1},
                        "138820675": {sampleRate: 1, samplingMethod: 1},
                        "141363848": {sampleRate: 1, samplingMethod: 1},
                        "141372740": {sampleRate: 1, samplingMethod: 1},
                        "141492225": {sampleRate: 1, samplingMethod: 1},
                        "141502565": {sampleRate: 1, samplingMethod: 1},
                        "144444239": {sampleRate: 1, samplingMethod: 1},
                        "144445421": {sampleRate: 1, samplingMethod: 1},
                        "144450614": {sampleRate: 1, samplingMethod: 1},
                        "144452084": {sampleRate: 1, samplingMethod: 1},
                        "144452614": {sampleRate: 1, samplingMethod: 1},
                        "144456097": {sampleRate: 1, samplingMethod: 1},
                        "144456247": {sampleRate: 1, samplingMethod: 1},
                        "154664961": {sampleRate: 10000, samplingMethod: 1},
                        "154664962": {sampleRate: 10000, samplingMethod: 1},
                        "159779919": {sampleRate: 1, samplingMethod: 1},
                        "163841330": {sampleRate: 1, samplingMethod: 1},
                        "163842200": {sampleRate: 10000, samplingMethod: 1},
                        "163842926": {sampleRate: 1, samplingMethod: 1},
                        "163843192": {sampleRate: 10, samplingMethod: 1},
                        "163843810": {sampleRate: 10, samplingMethod: 1},
                        "163844026": {sampleRate: 1, samplingMethod: 1},
                        "163845835": {sampleRate: 10000, samplingMethod: 1},
                        "163846803": {sampleRate: 1, samplingMethod: 1},
                        "163846904": {sampleRate: 1, samplingMethod: 1},
                        "163847018": {sampleRate: 10000, samplingMethod: 1},
                        "163847262": {sampleRate: 10000, samplingMethod: 1},
                        "163847763": {sampleRate: 1000, samplingMethod: 1},
                        "163849766": {sampleRate: 100, samplingMethod: 1},
                        "163850223": {sampleRate: 1, samplingMethod: 1},
                        "163850474": {sampleRate: 1, samplingMethod: 1},
                        "163853979": {sampleRate: 1, samplingMethod: 1},
                        "163854950": {sampleRate: 10000, samplingMethod: 1},
                        "163855787": {sampleRate: 10, samplingMethod: 1},
                        "163855825": {sampleRate: 10000, samplingMethod: 1},
                        "178199990": {sampleRate: 10000, samplingMethod: 1},
                        "178200683": {sampleRate: 10000, samplingMethod: 1},
                        "183767196": {sampleRate: 1, samplingMethod: 1},
                        "183834837": {sampleRate: 10000, samplingMethod: 1},
                        "188746120": {sampleRate: 10000, samplingMethod: 1},
                        "188755890": {sampleRate: 10000, samplingMethod: 1},
                        "188755925": {sampleRate: 10000, samplingMethod: 1},
                        "192872449": {sampleRate: 1, samplingMethod: 1},
                        "195562276": {sampleRate: 1, samplingMethod: 1},
                        "195563247": {sampleRate: 1, samplingMethod: 1},
                        "195626194": {sampleRate: 1, samplingMethod: 1},
                        "195639692": {sampleRate: 1, samplingMethod: 1},
                        "204155936": {sampleRate: 1, samplingMethod: 1},
                        "205198634": {sampleRate: 1, samplingMethod: 1},
                        "205207410": {sampleRate: 1, samplingMethod: 1},
                        "209979636": {sampleRate: 1, samplingMethod: 1},
                        "209989735": {sampleRate: 1, samplingMethod: 1},
                        "213129059": {sampleRate: 1, samplingMethod: 1},
                        "213130080": {sampleRate: 1, samplingMethod: 1},
                        "213131472": {sampleRate: 1, samplingMethod: 1},
                        "213135039": {sampleRate: 1, samplingMethod: 1},
                        "216401752": {sampleRate: 1, samplingMethod: 1},
                        "216401890": {sampleRate: 1, samplingMethod: 1},
                        "218051286": {sampleRate: 1, samplingMethod: 1},
                        "218956945": {sampleRate: 1, samplingMethod: 1},
                        "218961347": {sampleRate: 1, samplingMethod: 1},
                        "218962025": {sampleRate: 1, samplingMethod: 1},
                        "218962528": {sampleRate: 1, samplingMethod: 1},
                        "218962602": {sampleRate: 1, samplingMethod: 1},
                        "218962996": {sampleRate: 1, samplingMethod: 1},
                        "218966113": {sampleRate: 1, samplingMethod: 1},
                        "218969087": {sampleRate: 1, samplingMethod: 1},
                        "218969883": {sampleRate: 1, samplingMethod: 1},
                        "218970026": {sampleRate: 1, samplingMethod: 1},
                        "218970632": {sampleRate: 1, samplingMethod: 1},
                        "218971974": {sampleRate: 1, samplingMethod: 1},
                        "221322158": {sampleRate: 10000, samplingMethod: 1},
                        "232522766": {sampleRate: 1, samplingMethod: 1},
                        "232530588": {sampleRate: 1, samplingMethod: 1},
                        "232531238": {sampleRate: 1, samplingMethod: 1},
                        "232533459": {sampleRate: 1, samplingMethod: 1},
                        "232536317": {sampleRate: 1, samplingMethod: 1},
                        "232726078": {sampleRate: 1, samplingMethod: 1},
                        "237963161": {sampleRate: 10000, samplingMethod: 1},
                        "238946702": {sampleRate: 1, samplingMethod: 1},
                        "241050641": {sampleRate: 1, samplingMethod: 1},
                        "241052667": {sampleRate: 1, samplingMethod: 1},
                        "241055991": {sampleRate: 1, samplingMethod: 1},
                        "241568984": {sampleRate: 1, samplingMethod: 1},
                        "241569419": {sampleRate: 1, samplingMethod: 1},
                        "241575915": {sampleRate: 1, samplingMethod: 1},
                        "243869892": {sampleRate: 10000, samplingMethod: 1},
                        "248069990": {sampleRate: 10000, samplingMethod: 1},
                        "256575931": {sampleRate: 10000, samplingMethod: 1},
                        "262995969": {sampleRate: 1, samplingMethod: 1},
                        "263004866": {sampleRate: 1, samplingMethod: 1},
                        "265815182": {sampleRate: 1, samplingMethod: 1},
                        "265816494": {sampleRate: 1, samplingMethod: 1},
                        "265820814": {sampleRate: 1, samplingMethod: 1},
                        "265824911": {sampleRate: 1, samplingMethod: 1},
                        "265830289": {sampleRate: 1, samplingMethod: 1},
                        "270205944": {sampleRate: 1, samplingMethod: 1},
                        "270206029": {sampleRate: 1, samplingMethod: 1},
                        "270206071": {sampleRate: 1, samplingMethod: 1},
                        "270206085": {sampleRate: 1, samplingMethod: 1},
                        "270206168": {sampleRate: 1, samplingMethod: 1},
                        "270206179": {sampleRate: 1, samplingMethod: 1},
                        "270206214": {sampleRate: 1, samplingMethod: 1},
                        "270206215": {sampleRate: 1, samplingMethod: 1},
                        "270206216": {sampleRate: 1, samplingMethod: 1},
                        "270206224": {sampleRate: 1, samplingMethod: 1},
                        "270206230": {sampleRate: 1, samplingMethod: 1},
                        "270206253": {sampleRate: 1, samplingMethod: 1},
                        "270206259": {sampleRate: 1, samplingMethod: 1},
                        "270206315": {sampleRate: 1, samplingMethod: 1},
                        "270206350": {sampleRate: 1, samplingMethod: 1},
                        "270206388": {sampleRate: 1, samplingMethod: 1},
                        "270206588": {sampleRate: 1, samplingMethod: 1},
                        "270206671": {sampleRate: 1, samplingMethod: 1},
                        "270206696": {sampleRate: 1, samplingMethod: 1},
                        "270206744": {sampleRate: 1, samplingMethod: 1},
                        "270206832": {sampleRate: 1, samplingMethod: 1},
                        "270206843": {sampleRate: 1, samplingMethod: 1},
                        "270206870": {sampleRate: 1, samplingMethod: 1},
                        "270207098": {sampleRate: 1, samplingMethod: 1},
                        "270207136": {sampleRate: 1, samplingMethod: 1},
                        "270207148": {sampleRate: 1, samplingMethod: 1},
                        "270207296": {sampleRate: 1, samplingMethod: 1},
                        "270207393": {sampleRate: 1, samplingMethod: 1},
                        "270207420": {sampleRate: 1, samplingMethod: 1},
                        "270207600": {sampleRate: 1, samplingMethod: 1},
                        "270207618": {sampleRate: 1, samplingMethod: 1},
                        "270207765": {sampleRate: 1, samplingMethod: 1},
                        "270207797": {sampleRate: 1, samplingMethod: 1},
                        "270207843": {sampleRate: 1, samplingMethod: 1},
                        "270207912": {sampleRate: 1, samplingMethod: 1},
                        "270207953": {sampleRate: 1, samplingMethod: 1},
                        "270208007": {sampleRate: 1, samplingMethod: 1},
                        "270208148": {sampleRate: 1, samplingMethod: 1},
                        "270208178": {sampleRate: 1, samplingMethod: 1},
                        "270208265": {sampleRate: 1, samplingMethod: 1},
                        "270208269": {sampleRate: 1, samplingMethod: 1},
                        "270208286": {sampleRate: 1, samplingMethod: 1},
                        "270208333": {sampleRate: 1, samplingMethod: 1},
                        "270208406": {sampleRate: 1, samplingMethod: 1},
                        "270208527": {sampleRate: 1, samplingMethod: 1},
                        "270208656": {sampleRate: 1, samplingMethod: 1},
                        "270208708": {sampleRate: 1, samplingMethod: 1},
                        "270208826": {sampleRate: 1, samplingMethod: 1},
                        "270208920": {sampleRate: 1, samplingMethod: 1},
                        "270208970": {sampleRate: 1, samplingMethod: 1},
                        "270209003": {sampleRate: 1, samplingMethod: 1},
                        "270209052": {sampleRate: 1, samplingMethod: 1},
                        "270209091": {sampleRate: 1, samplingMethod: 1},
                        "270209102": {sampleRate: 1, samplingMethod: 1},
                        "270209148": {sampleRate: 1, samplingMethod: 1},
                        "270209262": {sampleRate: 1, samplingMethod: 1},
                        "270209274": {sampleRate: 1, samplingMethod: 1},
                        "270209329": {sampleRate: 1, samplingMethod: 1},
                        "270209402": {sampleRate: 1, samplingMethod: 1},
                        "270209445": {sampleRate: 1, samplingMethod: 1},
                        "270209519": {sampleRate: 1, samplingMethod: 1},
                        "270209660": {sampleRate: 1, samplingMethod: 1},
                        "270209661": {sampleRate: 1, samplingMethod: 1},
                        "270209760": {sampleRate: 1, samplingMethod: 1},
                        "270209775": {sampleRate: 1, samplingMethod: 1},
                        "270209815": {sampleRate: 1, samplingMethod: 1},
                        "270209843": {sampleRate: 1, samplingMethod: 1},
                        "270209902": {sampleRate: 1, samplingMethod: 1},
                        "270209991": {sampleRate: 1, samplingMethod: 1},
                        "270210074": {sampleRate: 1, samplingMethod: 1},
                        "270210163": {sampleRate: 1, samplingMethod: 1},
                        "270210164": {sampleRate: 1, samplingMethod: 1},
                        "270210188": {sampleRate: 1, samplingMethod: 1},
                        "270210235": {sampleRate: 1, samplingMethod: 1},
                        "270210265": {sampleRate: 1, samplingMethod: 1},
                        "270210288": {sampleRate: 1, samplingMethod: 1},
                        "270210332": {sampleRate: 1, samplingMethod: 1},
                        "270210419": {sampleRate: 1, samplingMethod: 1},
                        "270210471": {sampleRate: 1, samplingMethod: 1},
                        "270210475": {sampleRate: 1, samplingMethod: 1},
                        "270210517": {sampleRate: 1, samplingMethod: 1},
                        "270210707": {sampleRate: 1, samplingMethod: 1},
                        "270210724": {sampleRate: 1, samplingMethod: 1},
                        "270210806": {sampleRate: 1, samplingMethod: 1},
                        "270210841": {sampleRate: 1, samplingMethod: 1},
                        "270210869": {sampleRate: 1, samplingMethod: 1},
                        "270210979": {sampleRate: 1, samplingMethod: 1},
                        "270211090": {sampleRate: 1, samplingMethod: 1},
                        "270211138": {sampleRate: 1, samplingMethod: 1},
                        "270211171": {sampleRate: 1, samplingMethod: 1},
                        "270211202": {sampleRate: 1, samplingMethod: 1},
                        "270211218": {sampleRate: 1, samplingMethod: 1},
                        "270211281": {sampleRate: 1, samplingMethod: 1},
                        "270211332": {sampleRate: 1, samplingMethod: 1},
                        "270211335": {sampleRate: 1, samplingMethod: 1},
                        "270211347": {sampleRate: 1, samplingMethod: 1},
                        "270211419": {sampleRate: 1, samplingMethod: 1},
                        "270211435": {sampleRate: 1, samplingMethod: 1},
                        "270211506": {sampleRate: 1, samplingMethod: 1},
                        "270211636": {sampleRate: 1, samplingMethod: 1},
                        "270211692": {sampleRate: 1, samplingMethod: 1},
                        "270211722": {sampleRate: 1, samplingMethod: 1},
                        "270211726": {sampleRate: 1, samplingMethod: 1},
                        "270211728": {sampleRate: 1, samplingMethod: 1},
                        "270211753": {sampleRate: 1, samplingMethod: 1},
                        "270211772": {sampleRate: 1, samplingMethod: 1},
                        "270211786": {sampleRate: 1, samplingMethod: 1},
                        "270211803": {sampleRate: 1, samplingMethod: 1},
                        "270211869": {sampleRate: 1, samplingMethod: 1},
                        "270211949": {sampleRate: 1, samplingMethod: 1},
                        "270212138": {sampleRate: 1, samplingMethod: 1},
                        "270212216": {sampleRate: 1, samplingMethod: 1},
                        "270212219": {sampleRate: 1, samplingMethod: 1},
                        "270212238": {sampleRate: 1, samplingMethod: 1},
                        "270212273": {sampleRate: 1, samplingMethod: 1},
                        "270212277": {sampleRate: 1, samplingMethod: 1},
                        "270212380": {sampleRate: 1, samplingMethod: 1},
                        "270212441": {sampleRate: 1, samplingMethod: 1},
                        "270212554": {sampleRate: 1, samplingMethod: 1},
                        "270212656": {sampleRate: 1, samplingMethod: 1},
                        "270212671": {sampleRate: 1, samplingMethod: 1},
                        "270212696": {sampleRate: 1, samplingMethod: 1},
                        "270212843": {sampleRate: 1, samplingMethod: 1},
                        "270212857": {sampleRate: 1, samplingMethod: 1},
                        "270212893": {sampleRate: 1, samplingMethod: 1},
                        "270212956": {sampleRate: 1, samplingMethod: 1},
                        "270213015": {sampleRate: 1, samplingMethod: 1},
                        "270213108": {sampleRate: 1, samplingMethod: 1},
                        "270213135": {sampleRate: 1, samplingMethod: 1},
                        "270213161": {sampleRate: 1, samplingMethod: 1},
                        "270213183": {sampleRate: 1, samplingMethod: 1},
                        "270213250": {sampleRate: 1, samplingMethod: 1},
                        "270213359": {sampleRate: 1, samplingMethod: 1},
                        "270213374": {sampleRate: 1, samplingMethod: 1},
                        "270213486": {sampleRate: 1, samplingMethod: 1},
                        "270213512": {sampleRate: 1, samplingMethod: 1},
                        "270213538": {sampleRate: 1, samplingMethod: 1},
                        "270213572": {sampleRate: 1, samplingMethod: 1},
                        "270213649": {sampleRate: 1, samplingMethod: 1},
                        "270213707": {sampleRate: 1, samplingMethod: 1},
                        "270213723": {sampleRate: 1, samplingMethod: 1},
                        "270213749": {sampleRate: 1, samplingMethod: 1},
                        "270213786": {sampleRate: 1, samplingMethod: 1},
                        "270214027": {sampleRate: 1, samplingMethod: 1},
                        "270214035": {sampleRate: 1, samplingMethod: 1},
                        "270214052": {sampleRate: 1, samplingMethod: 1},
                        "270214104": {sampleRate: 1, samplingMethod: 1},
                        "270214189": {sampleRate: 1, samplingMethod: 1},
                        "270214320": {sampleRate: 1, samplingMethod: 1},
                        "270214400": {sampleRate: 1, samplingMethod: 1},
                        "270214409": {sampleRate: 1, samplingMethod: 1},
                        "270214459": {sampleRate: 1, samplingMethod: 1},
                        "270214580": {sampleRate: 1, samplingMethod: 1},
                        "270214602": {sampleRate: 1, samplingMethod: 1},
                        "270214612": {sampleRate: 1, samplingMethod: 1},
                        "270214705": {sampleRate: 1, samplingMethod: 1},
                        "270214707": {sampleRate: 1, samplingMethod: 1},
                        "270214719": {sampleRate: 1, samplingMethod: 1},
                        "270214731": {sampleRate: 1, samplingMethod: 1},
                        "270214784": {sampleRate: 1, samplingMethod: 1},
                        "270214832": {sampleRate: 1, samplingMethod: 1},
                        "270214973": {sampleRate: 1, samplingMethod: 1},
                        "270214989": {sampleRate: 1, samplingMethod: 1},
                        "270215065": {sampleRate: 1, samplingMethod: 1},
                        "270215070": {sampleRate: 1, samplingMethod: 1},
                        "270215101": {sampleRate: 1, samplingMethod: 1},
                        "270215116": {sampleRate: 1, samplingMethod: 1},
                        "270215140": {sampleRate: 1, samplingMethod: 1},
                        "270215224": {sampleRate: 1, samplingMethod: 1},
                        "270215230": {sampleRate: 1, samplingMethod: 1},
                        "270215347": {sampleRate: 1, samplingMethod: 1},
                        "270215397": {sampleRate: 1, samplingMethod: 1},
                        "270215429": {sampleRate: 1, samplingMethod: 1},
                        "270215542": {sampleRate: 1, samplingMethod: 1},
                        "270215574": {sampleRate: 1, samplingMethod: 1},
                        "270215690": {sampleRate: 1, samplingMethod: 1},
                        "270215709": {sampleRate: 1, samplingMethod: 1},
                        "270215742": {sampleRate: 1, samplingMethod: 1},
                        "270215772": {sampleRate: 1, samplingMethod: 1},
                        "270215778": {sampleRate: 1, samplingMethod: 1},
                        "270215792": {sampleRate: 1, samplingMethod: 1},
                        "270215819": {sampleRate: 1, samplingMethod: 1},
                        "270215979": {sampleRate: 1, samplingMethod: 1},
                        "270216000": {sampleRate: 1, samplingMethod: 1},
                        "270216093": {sampleRate: 1, samplingMethod: 1},
                        "270216139": {sampleRate: 1, samplingMethod: 1},
                        "270216182": {sampleRate: 1, samplingMethod: 1},
                        "270216195": {sampleRate: 1, samplingMethod: 1},
                        "270216200": {sampleRate: 1, samplingMethod: 1},
                        "270216416": {sampleRate: 1, samplingMethod: 1},
                        "270216423": {sampleRate: 1, samplingMethod: 1},
                        "270216430": {sampleRate: 1, samplingMethod: 1},
                        "270216450": {sampleRate: 1, samplingMethod: 1},
                        "270216713": {sampleRate: 1, samplingMethod: 1},
                        "270216791": {sampleRate: 1, samplingMethod: 1},
                        "270216793": {sampleRate: 1, samplingMethod: 1},
                        "270216818": {sampleRate: 1, samplingMethod: 1},
                        "270216896": {sampleRate: 1, samplingMethod: 1},
                        "270216928": {sampleRate: 1, samplingMethod: 1},
                        "270216941": {sampleRate: 1, samplingMethod: 1},
                        "270217026": {sampleRate: 1, samplingMethod: 1},
                        "270217057": {sampleRate: 1, samplingMethod: 1},
                        "270217063": {sampleRate: 1, samplingMethod: 1},
                        "270217068": {sampleRate: 1, samplingMethod: 1},
                        "270217210": {sampleRate: 1, samplingMethod: 1},
                        "270217236": {sampleRate: 1, samplingMethod: 1},
                        "270217256": {sampleRate: 1, samplingMethod: 1},
                        "270217283": {sampleRate: 1, samplingMethod: 1},
                        "270217313": {sampleRate: 1, samplingMethod: 1},
                        "270217327": {sampleRate: 1, samplingMethod: 1},
                        "270217401": {sampleRate: 1, samplingMethod: 1},
                        "270217492": {sampleRate: 1, samplingMethod: 1},
                        "270217539": {sampleRate: 1, samplingMethod: 1},
                        "270217616": {sampleRate: 1, samplingMethod: 1},
                        "270217631": {sampleRate: 1, samplingMethod: 1},
                        "270217722": {sampleRate: 1, samplingMethod: 1},
                        "270217749": {sampleRate: 1, samplingMethod: 1},
                        "270217779": {sampleRate: 1, samplingMethod: 1},
                        "270217787": {sampleRate: 1, samplingMethod: 1},
                        "270217798": {sampleRate: 1, samplingMethod: 1},
                        "270217820": {sampleRate: 1, samplingMethod: 1},
                        "270217862": {sampleRate: 1, samplingMethod: 1},
                        "270217878": {sampleRate: 1, samplingMethod: 1},
                        "270217900": {sampleRate: 1, samplingMethod: 1},
                        "270217954": {sampleRate: 1, samplingMethod: 1},
                        "270218007": {sampleRate: 1, samplingMethod: 1},
                        "270218053": {sampleRate: 1, samplingMethod: 1},
                        "270218090": {sampleRate: 1, samplingMethod: 1},
                        "270218102": {sampleRate: 1, samplingMethod: 1},
                        "270218152": {sampleRate: 1, samplingMethod: 1},
                        "270218163": {sampleRate: 1, samplingMethod: 1},
                        "270218166": {sampleRate: 1, samplingMethod: 1},
                        "270218168": {sampleRate: 1, samplingMethod: 1},
                        "270218204": {sampleRate: 1, samplingMethod: 1},
                        "270218207": {sampleRate: 1, samplingMethod: 1},
                        "270218271": {sampleRate: 1, samplingMethod: 1},
                        "270218310": {sampleRate: 1, samplingMethod: 1},
                        "270218326": {sampleRate: 1, samplingMethod: 1},
                        "270218338": {sampleRate: 1, samplingMethod: 1},
                        "270218436": {sampleRate: 1, samplingMethod: 1},
                        "270218543": {sampleRate: 1, samplingMethod: 1},
                        "270218572": {sampleRate: 1, samplingMethod: 1},
                        "270218586": {sampleRate: 1, samplingMethod: 1},
                        "270218605": {sampleRate: 1, samplingMethod: 1},
                        "270218622": {sampleRate: 1, samplingMethod: 1},
                        "270218660": {sampleRate: 1, samplingMethod: 1},
                        "270218696": {sampleRate: 1, samplingMethod: 1},
                        "270218731": {sampleRate: 1, samplingMethod: 1},
                        "270218991": {sampleRate: 1, samplingMethod: 1},
                        "270219017": {sampleRate: 1, samplingMethod: 1},
                        "270219019": {sampleRate: 1, samplingMethod: 1},
                        "270219051": {sampleRate: 1, samplingMethod: 1},
                        "270219139": {sampleRate: 1, samplingMethod: 1},
                        "270219169": {sampleRate: 1, samplingMethod: 1},
                        "270219188": {sampleRate: 1, samplingMethod: 1},
                        "270219248": {sampleRate: 1, samplingMethod: 1},
                        "270219249": {sampleRate: 1, samplingMethod: 1},
                        "270219291": {sampleRate: 1, samplingMethod: 1},
                        "270219303": {sampleRate: 1, samplingMethod: 1},
                        "270219320": {sampleRate: 1, samplingMethod: 1},
                        "270219404": {sampleRate: 1, samplingMethod: 1},
                        "270219449": {sampleRate: 1, samplingMethod: 1},
                        "270219483": {sampleRate: 1, samplingMethod: 1},
                        "270219531": {sampleRate: 1, samplingMethod: 1},
                        "270219562": {sampleRate: 1, samplingMethod: 1},
                        "270219686": {sampleRate: 1, samplingMethod: 1},
                        "270219870": {sampleRate: 1, samplingMethod: 1},
                        "270219914": {sampleRate: 1, samplingMethod: 1},
                        "270219926": {sampleRate: 1, samplingMethod: 1},
                        "270220001": {sampleRate: 1, samplingMethod: 1},
                        "270220072": {sampleRate: 1, samplingMethod: 1},
                        "270220074": {sampleRate: 1, samplingMethod: 1},
                        "270220108": {sampleRate: 1, samplingMethod: 1},
                        "270220129": {sampleRate: 1, samplingMethod: 1},
                        "270220209": {sampleRate: 1, samplingMethod: 1},
                        "270220261": {sampleRate: 1, samplingMethod: 1},
                        "270220262": {sampleRate: 1, samplingMethod: 1},
                        "270220333": {sampleRate: 1, samplingMethod: 1},
                        "270220347": {sampleRate: 1, samplingMethod: 1},
                        "270220481": {sampleRate: 1, samplingMethod: 1},
                        "270220499": {sampleRate: 1, samplingMethod: 1},
                        "270220550": {sampleRate: 1, samplingMethod: 1},
                        "270220595": {sampleRate: 1, samplingMethod: 1},
                        "270220640": {sampleRate: 1, samplingMethod: 1},
                        "270220731": {sampleRate: 1, samplingMethod: 1},
                        "270220850": {sampleRate: 1, samplingMethod: 1},
                        "270220865": {sampleRate: 1, samplingMethod: 1},
                        "270220879": {sampleRate: 1, samplingMethod: 1},
                        "270220889": {sampleRate: 1, samplingMethod: 1},
                        "270220997": {sampleRate: 1, samplingMethod: 1},
                        "270221024": {sampleRate: 1, samplingMethod: 1},
                        "270221065": {sampleRate: 1, samplingMethod: 1},
                        "270221124": {sampleRate: 1, samplingMethod: 1},
                        "270221133": {sampleRate: 1, samplingMethod: 1},
                        "270221175": {sampleRate: 1, samplingMethod: 1},
                        "270221177": {sampleRate: 1, samplingMethod: 1},
                        "270224526": {sampleRate: 1, samplingMethod: 1},
                        "270228232": {sampleRate: 1, samplingMethod: 1},
                        "270230590": {sampleRate: 1, samplingMethod: 1},
                        "270230822": {sampleRate: 1, samplingMethod: 1},
                        "270232559": {sampleRate: 1, samplingMethod: 1},
                        "270233440": {sampleRate: 1, samplingMethod: 1},
                        "273481729": {sampleRate: 1, samplingMethod: 1},
                        "295437333": {sampleRate: 1, samplingMethod: 1},
                        "295437392": {sampleRate: 1, samplingMethod: 1},
                        "295437585": {sampleRate: 1, samplingMethod: 1},
                        "295437809": {sampleRate: 1, samplingMethod: 1},
                        "295437849": {sampleRate: 1, samplingMethod: 1},
                        "295438195": {sampleRate: 1, samplingMethod: 1},
                        "295438980": {sampleRate: 1, samplingMethod: 1},
                        "295439218": {sampleRate: 1, samplingMethod: 1},
                        "295439505": {sampleRate: 1, samplingMethod: 1},
                        "295439522": {sampleRate: 1, samplingMethod: 1},
                        "295439982": {sampleRate: 1, samplingMethod: 1},
                        "295440238": {sampleRate: 1, samplingMethod: 1},
                        "295440518": {sampleRate: 1, samplingMethod: 1},
                        "295440638": {sampleRate: 1, samplingMethod: 1},
                        "295441099": {sampleRate: 1, samplingMethod: 1},
                        "295441104": {sampleRate: 1, samplingMethod: 1},
                        "295441165": {sampleRate: 1, samplingMethod: 1},
                        "295441218": {sampleRate: 1, samplingMethod: 1},
                        "295441453": {sampleRate: 1, samplingMethod: 1},
                        "295442359": {sampleRate: 1, samplingMethod: 1},
                        "295442443": {sampleRate: 1, samplingMethod: 1},
                        "295442568": {sampleRate: 1, samplingMethod: 1},
                        "295442707": {sampleRate: 1, samplingMethod: 1},
                        "295443394": {sampleRate: 1, samplingMethod: 1},
                        "295443659": {sampleRate: 1, samplingMethod: 1},
                        "295444052": {sampleRate: 1, samplingMethod: 1},
                        "295444127": {sampleRate: 1, samplingMethod: 1},
                        "295444428": {sampleRate: 1, samplingMethod: 1},
                        "295444872": {sampleRate: 1, samplingMethod: 1},
                        "295444992": {sampleRate: 1, samplingMethod: 1},
                        "295445259": {sampleRate: 1, samplingMethod: 1},
                        "295445408": {sampleRate: 1, samplingMethod: 1},
                        "295445507": {sampleRate: 1, samplingMethod: 1},
                        "295446230": {sampleRate: 1, samplingMethod: 1},
                        "295447305": {sampleRate: 1, samplingMethod: 1},
                        "295447411": {sampleRate: 1, samplingMethod: 1},
                        "295447532": {sampleRate: 1, samplingMethod: 1},
                        "295447763": {sampleRate: 1, samplingMethod: 1},
                        "295448628": {sampleRate: 1, samplingMethod: 1},
                        "295448870": {sampleRate: 1, samplingMethod: 1},
                        "295448939": {sampleRate: 1, samplingMethod: 1},
                        "295449023": {sampleRate: 1, samplingMethod: 1},
                        "295449229": {sampleRate: 1, samplingMethod: 1},
                        "295449938": {sampleRate: 1, samplingMethod: 1},
                        "295450853": {sampleRate: 1, samplingMethod: 1},
                        "295450962": {sampleRate: 1, samplingMethod: 1},
                        "295451974": {sampleRate: 1, samplingMethod: 1},
                        "295451977": {sampleRate: 1, samplingMethod: 1},
                        "295452084": {sampleRate: 1, samplingMethod: 1},
                        "295452498": {sampleRate: 1, samplingMethod: 1},
                        "295576223": {sampleRate: 1, samplingMethod: 1},
                        "300429672": {sampleRate: 100, samplingMethod: 1},
                        "303370010": {sampleRate: 10000, samplingMethod: 1},
                        "303374119": {sampleRate: 10000, samplingMethod: 1},
                        "303375609": {sampleRate: 10000, samplingMethod: 1},
                        "314255059": {sampleRate: 1, samplingMethod: 1},
                        "314255718": {sampleRate: 1, samplingMethod: 1},
                        "314255820": {sampleRate: 1, samplingMethod: 1},
                        "314256622": {sampleRate: 1, samplingMethod: 1},
                        "315555841": {sampleRate: 10000, samplingMethod: 1},
                        "316804045": {sampleRate: 1, samplingMethod: 1},
                        "316804194": {sampleRate: 1, samplingMethod: 1},
                        "316805991": {sampleRate: 1, samplingMethod: 1},
                        "316806070": {sampleRate: 1, samplingMethod: 1},
                        "316806359": {sampleRate: 1, samplingMethod: 1},
                        "316806850": {sampleRate: 1, samplingMethod: 1},
                        "316812351": {sampleRate: 1, samplingMethod: 1},
                        "316812736": {sampleRate: 1, samplingMethod: 1},
                        "316814957": {sampleRate: 1, samplingMethod: 1},
                        "316816299": {sampleRate: 1, samplingMethod: 1},
                        "318701569": {sampleRate: 1, samplingMethod: 1},
                        "318707653": {sampleRate: 1, samplingMethod: 1},
                        "318710863": {sampleRate: 1, samplingMethod: 1},
                        "318716922": {sampleRate: 1, samplingMethod: 1},
                        "320809182": {sampleRate: 1, samplingMethod: 1},
                        "336201917": {sampleRate: 1, samplingMethod: 1},
                        "336205322": {sampleRate: 1, samplingMethod: 1},
                        "336207527": {sampleRate: 1, samplingMethod: 1},
                        "336212887": {sampleRate: 1, samplingMethod: 1},
                        "336213902": {sampleRate: 1, samplingMethod: 1},
                        "336215495": {sampleRate: 1, samplingMethod: 1},
                        "339818860": {sampleRate: 1, samplingMethod: 1},
                        "341835776": {sampleRate: 1, samplingMethod: 1},
                        "341835777": {sampleRate: 1, samplingMethod: 1},
                        "341848280": {sampleRate: 1, samplingMethod: 1},
                        "348132017": {sampleRate: 1, samplingMethod: 1},
                        "351152344": {sampleRate: 10000, samplingMethod: 1},
                        "351539711": {sampleRate: 1, samplingMethod: 1},
                        "351540102": {sampleRate: 1, samplingMethod: 1},
                        "351540413": {sampleRate: 1, samplingMethod: 1},
                        "351540800": {sampleRate: 1, samplingMethod: 1},
                        "351541595": {sampleRate: 1, samplingMethod: 1},
                        "351542287": {sampleRate: 1, samplingMethod: 1},
                        "351543947": {sampleRate: 1, samplingMethod: 1},
                        "351544664": {sampleRate: 1, samplingMethod: 1},
                        "351545881": {sampleRate: 1, samplingMethod: 1},
                        "351546487": {sampleRate: 1, samplingMethod: 1},
                        "351546651": {sampleRate: 1, samplingMethod: 1},
                        "351548391": {sampleRate: 1, samplingMethod: 1},
                        "351548854": {sampleRate: 1, samplingMethod: 1},
                        "368647392": {sampleRate: 1, samplingMethod: 1},
                        "373295708": {sampleRate: 1000, samplingMethod: 1},
                        "373298325": {sampleRate: 1000, samplingMethod: 1},
                        "373308219": {sampleRate: 1000, samplingMethod: 1},
                        "374672177": {sampleRate: 1, samplingMethod: 1},
                        "374678380": {sampleRate: 1, samplingMethod: 1},
                        "377357808": {sampleRate: 1, samplingMethod: 1},
                        "377358784": {sampleRate: 1, samplingMethod: 1},
                        "377359040": {sampleRate: 1, samplingMethod: 1},
                        "377359367": {sampleRate: 1, samplingMethod: 1},
                        "377359743": {sampleRate: 1, samplingMethod: 1},
                        "377360139": {sampleRate: 1, samplingMethod: 1},
                        "377360510": {sampleRate: 1, samplingMethod: 1},
                        "377361415": {sampleRate: 1, samplingMethod: 1},
                        "377362087": {sampleRate: 5, samplingMethod: 1},
                        "377362266": {sampleRate: 1, samplingMethod: 1},
                        "377363484": {sampleRate: 1, samplingMethod: 1},
                        "377364678": {sampleRate: 1, samplingMethod: 1},
                        "377364955": {sampleRate: 1, samplingMethod: 1},
                        "377364984": {sampleRate: 1, samplingMethod: 1},
                        "377367558": {sampleRate: 1, samplingMethod: 1},
                        "377367763": {sampleRate: 5, samplingMethod: 1},
                        "377369626": {sampleRate: 1, samplingMethod: 1},
                        "377370025": {sampleRate: 1, samplingMethod: 1},
                        "377370051": {sampleRate: 1, samplingMethod: 1},
                        "377370203": {sampleRate: 1, samplingMethod: 1},
                        "377370433": {sampleRate: 1, samplingMethod: 1},
                        "377371065": {sampleRate: 1, samplingMethod: 1},
                        "377371646": {sampleRate: 1, samplingMethod: 1},
                        "377817277": {sampleRate: 1, samplingMethod: 1},
                        "377828343": {sampleRate: 1, samplingMethod: 1},
                        "380895233": {sampleRate: 1, samplingMethod: 1},
                        "382140417": {sampleRate: 100, samplingMethod: 1},
                        "382140418": {sampleRate: 100, samplingMethod: 1},
                        "382144536": {sampleRate: 10000, samplingMethod: 1},
                        "382151174": {sampleRate: 10000, samplingMethod: 1},
                        "382468096": {sampleRate: 1, samplingMethod: 1},
                        "382468097": {sampleRate: 1, samplingMethod: 1},
                        "382468098": {sampleRate: 1, samplingMethod: 1},
                        "382468099": {sampleRate: 1, samplingMethod: 1},
                        "382482261": {sampleRate: 1, samplingMethod: 1},
                        "390269683": {sampleRate: 1, samplingMethod: 1},
                        "390272426": {sampleRate: 1, samplingMethod: 1},
                        "390275150": {sampleRate: 1, samplingMethod: 1},
                        "390276342": {sampleRate: 10000, samplingMethod: 1},
                        "390279467": {sampleRate: 10000, samplingMethod: 1},
                        "390280883": {sampleRate: 10000, samplingMethod: 1},
                        "390281220": {sampleRate: 10000, samplingMethod: 1},
                        "390281974": {sampleRate: 10000, samplingMethod: 1},
                        "392106711": {sampleRate: 1, samplingMethod: 1},
                        "392107390": {sampleRate: 1, samplingMethod: 1},
                        "392115811": {sampleRate: 1, samplingMethod: 1},
                        "392966766": {sampleRate: 10000, samplingMethod: 1},
                        "394788865": {sampleRate: 10000, samplingMethod: 1},
                        "398592899": {sampleRate: 1, samplingMethod: 1},
                        "398601326": {sampleRate: 1, samplingMethod: 1},
                        "398605840": {sampleRate: 1, samplingMethod: 1},
                        "399182973": {sampleRate: 1, samplingMethod: 1},
                        "399185036": {sampleRate: 1, samplingMethod: 1},
                        "399185894": {sampleRate: 1, samplingMethod: 1},
                        "399185985": {sampleRate: 1, samplingMethod: 1},
                        "399186794": {sampleRate: 1, samplingMethod: 1},
                        "399187008": {sampleRate: 1, samplingMethod: 1},
                        "399188160": {sampleRate: 1, samplingMethod: 1},
                        "399190027": {sampleRate: 1, samplingMethod: 1},
                        "399191513": {sampleRate: 1, samplingMethod: 1},
                        "399191697": {sampleRate: 1, samplingMethod: 1},
                        "399191926": {sampleRate: 1, samplingMethod: 1},
                        "399192359": {sampleRate: 1, samplingMethod: 1},
                        "399193700": {sampleRate: 1, samplingMethod: 1},
                        "399194693": {sampleRate: 1, samplingMethod: 1},
                        "399194700": {sampleRate: 1, samplingMethod: 1},
                        "399194972": {sampleRate: 1, samplingMethod: 1},
                        "399195628": {sampleRate: 1, samplingMethod: 1},
                        "403271918": {sampleRate: 1, samplingMethod: 1},
                        "404622304": {sampleRate: 1, samplingMethod: 1},
                        "404626521": {sampleRate: 1, samplingMethod: 1},
                        "404626709": {sampleRate: 1, samplingMethod: 1},
                        "404630839": {sampleRate: 1, samplingMethod: 1},
                        "404631825": {sampleRate: 1, samplingMethod: 1},
                        "404632630": {sampleRate: 1, samplingMethod: 1},
                        "406978561": {sampleRate: 10000, samplingMethod: 1},
                        "406980340": {sampleRate: 10000, samplingMethod: 1},
                        "406983321": {sampleRate: 10000, samplingMethod: 1},
                        "409677744": {sampleRate: 1, samplingMethod: 1},
                        "416876920": {sampleRate: 1, samplingMethod: 1},
                        "416877160": {sampleRate: 1, samplingMethod: 1},
                        "416880118": {sampleRate: 1, samplingMethod: 1},
                        "416880668": {sampleRate: 1, samplingMethod: 1},
                        "416883138": {sampleRate: 1, samplingMethod: 1},
                        "416884823": {sampleRate: 1, samplingMethod: 1},
                        "416888659": {sampleRate: 1, samplingMethod: 1},
                        "416890732": {sampleRate: 1, samplingMethod: 1},
                        "426382631": {sampleRate: 1, samplingMethod: 1},
                        "426385027": {sampleRate: 1, samplingMethod: 1},
                        "426389483": {sampleRate: 1, samplingMethod: 1},
                        "430374913": {sampleRate: 1, samplingMethod: 1},
                        "430378067": {sampleRate: 1, samplingMethod: 1},
                        "430383451": {sampleRate: 1, samplingMethod: 1},
                        "430386496": {sampleRate: 1, samplingMethod: 1},
                        "430390878": {sampleRate: 1, samplingMethod: 1},
                        "430391177": {sampleRate: 1, samplingMethod: 1},
                        "431626192": {sampleRate: 1, samplingMethod: 1},
                        "431626709": {sampleRate: 1, samplingMethod: 1},
                        "431630887": {sampleRate: 10, samplingMethod: 1},
                        "432676234": {sampleRate: 1, samplingMethod: 1},
                        "432677504": {sampleRate: 1, samplingMethod: 1},
                        "432679263": {sampleRate: 1, samplingMethod: 1},
                        "432682775": {sampleRate: 1, samplingMethod: 1},
                        "432683819": {sampleRate: 1, samplingMethod: 1},
                        "435684623": {sampleRate: 100, samplingMethod: 1},
                        "435684729": {sampleRate: 100, samplingMethod: 1},
                        "435684741": {sampleRate: 100, samplingMethod: 1},
                        "435684980": {sampleRate: 100, samplingMethod: 1},
                        "435685229": {sampleRate: 100, samplingMethod: 1},
                        "435685848": {sampleRate: 100, samplingMethod: 1},
                        "435685921": {sampleRate: 100, samplingMethod: 1},
                        "435686268": {sampleRate: 100, samplingMethod: 1},
                        "435687015": {sampleRate: 100, samplingMethod: 1},
                        "435687513": {sampleRate: 100, samplingMethod: 1},
                        "435687530": {sampleRate: 100, samplingMethod: 1},
                        "435687537": {sampleRate: 100, samplingMethod: 1},
                        "435687801": {sampleRate: 100, samplingMethod: 1},
                        "435688416": {sampleRate: 100, samplingMethod: 1},
                        "435688603": {sampleRate: 100, samplingMethod: 1},
                        "435688620": {sampleRate: 100, samplingMethod: 1},
                        "435689044": {sampleRate: 100, samplingMethod: 1},
                        "435689085": {sampleRate: 100, samplingMethod: 1},
                        "435689154": {sampleRate: 100, samplingMethod: 1},
                        "435689259": {sampleRate: 100, samplingMethod: 1},
                        "435689828": {sampleRate: 100, samplingMethod: 1},
                        "435689899": {sampleRate: 100, samplingMethod: 1},
                        "435690518": {sampleRate: 100, samplingMethod: 1},
                        "435691376": {sampleRate: 100, samplingMethod: 1},
                        "435691707": {sampleRate: 100, samplingMethod: 1},
                        "435691902": {sampleRate: 100, samplingMethod: 1},
                        "435691955": {sampleRate: 100, samplingMethod: 1},
                        "435692102": {sampleRate: 100, samplingMethod: 1},
                        "435692121": {sampleRate: 100, samplingMethod: 1},
                        "435692864": {sampleRate: 100, samplingMethod: 1},
                        "435692975": {sampleRate: 100, samplingMethod: 1},
                        "435693002": {sampleRate: 100, samplingMethod: 1},
                        "435693404": {sampleRate: 100, samplingMethod: 1},
                        "435693600": {sampleRate: 100, samplingMethod: 1},
                        "435693854": {sampleRate: 100, samplingMethod: 1},
                        "435694384": {sampleRate: 100, samplingMethod: 1},
                        "435694627": {sampleRate: 100, samplingMethod: 1},
                        "435694927": {sampleRate: 100, samplingMethod: 1},
                        "435694934": {sampleRate: 100, samplingMethod: 1},
                        "435696304": {sampleRate: 100, samplingMethod: 1},
                        "435696437": {sampleRate: 100, samplingMethod: 1},
                        "435696473": {sampleRate: 1, samplingMethod: 1},
                        "435696804": {sampleRate: 100, samplingMethod: 1},
                        "435696833": {sampleRate: 100, samplingMethod: 1},
                        "435697072": {sampleRate: 100, samplingMethod: 1},
                        "435697446": {sampleRate: 100, samplingMethod: 1},
                        "435697886": {sampleRate: 100, samplingMethod: 1},
                        "435698374": {sampleRate: 100, samplingMethod: 1},
                        "435698646": {sampleRate: 100, samplingMethod: 1},
                        "435699123": {sampleRate: 100, samplingMethod: 1},
                        "435699279": {sampleRate: 100, samplingMethod: 1},
                        "440275195": {sampleRate: 1, samplingMethod: 1},
                        "445974335": {sampleRate: 1, samplingMethod: 1},
                        "445974949": {sampleRate: 1, samplingMethod: 1},
                        "445975283": {sampleRate: 1, samplingMethod: 1},
                        "445975837": {sampleRate: 1, samplingMethod: 1},
                        "445975868": {sampleRate: 1, samplingMethod: 1},
                        "445975872": {sampleRate: 1, samplingMethod: 1},
                        "445976139": {sampleRate: 1, samplingMethod: 1},
                        "445976232": {sampleRate: 1, samplingMethod: 1},
                        "445976360": {sampleRate: 1, samplingMethod: 1},
                        "445977086": {sampleRate: 1, samplingMethod: 1},
                        "445977677": {sampleRate: 1, samplingMethod: 1},
                        "445977908": {sampleRate: 1, samplingMethod: 1},
                        "445978739": {sampleRate: 1, samplingMethod: 1},
                        "445979308": {sampleRate: 1, samplingMethod: 1},
                        "445981478": {sampleRate: 1, samplingMethod: 1},
                        "445981521": {sampleRate: 1, samplingMethod: 1},
                        "445981651": {sampleRate: 1, samplingMethod: 1},
                        "445981782": {sampleRate: 1, samplingMethod: 1},
                        "445982501": {sampleRate: 1, samplingMethod: 1},
                        "445982831": {sampleRate: 1, samplingMethod: 1},
                        "445983197": {sampleRate: 1, samplingMethod: 1},
                        "445983323": {sampleRate: 1, samplingMethod: 1},
                        "445983810": {sampleRate: 1, samplingMethod: 1},
                        "445983882": {sampleRate: 1, samplingMethod: 1},
                        "445984313": {sampleRate: 1, samplingMethod: 1},
                        "445984511": {sampleRate: 1, samplingMethod: 1},
                        "445984703": {sampleRate: 1, samplingMethod: 1},
                        "445984855": {sampleRate: 1, samplingMethod: 1},
                        "445985856": {sampleRate: 1, samplingMethod: 1},
                        "445986130": {sampleRate: 1, samplingMethod: 1},
                        "445986133": {sampleRate: 1, samplingMethod: 1},
                        "445986387": {sampleRate: 1, samplingMethod: 1},
                        "445987236": {sampleRate: 1, samplingMethod: 1},
                        "445987822": {sampleRate: 1, samplingMethod: 1},
                        "445988450": {sampleRate: 1, samplingMethod: 1},
                        "445988500": {sampleRate: 1, samplingMethod: 1},
                        "445988600": {sampleRate: 1, samplingMethod: 1},
                        "448137847": {sampleRate: 1, samplingMethod: 1},
                        "448137862": {sampleRate: 1, samplingMethod: 1},
                        "459277372": {sampleRate: 1, samplingMethod: 1},
                        "459279083": {sampleRate: 1, samplingMethod: 1},
                        "459280844": {sampleRate: 1, samplingMethod: 1},
                        "459283386": {sampleRate: 1, samplingMethod: 1},
                        "459283488": {sampleRate: 1, samplingMethod: 1},
                        "459285749": {sampleRate: 1, samplingMethod: 1},
                        "459288505": {sampleRate: 1, samplingMethod: 1},
                        "459291249": {sampleRate: 1, samplingMethod: 1},
                        "459292159": {sampleRate: 1, samplingMethod: 1},
                        "459292291": {sampleRate: 1, samplingMethod: 1},
                        "460468818": {sampleRate: 1, samplingMethod: 1},
                        "463013863": {sampleRate: 10, samplingMethod: 1},
                        "463014635": {sampleRate: 1, samplingMethod: 1},
                        "463015185": {sampleRate: 10, samplingMethod: 1},
                        "463015362": {sampleRate: 1, samplingMethod: 1},
                        "463015568": {sampleRate: 1, samplingMethod: 1},
                        "463016139": {sampleRate: 1, samplingMethod: 1},
                        "463016165": {sampleRate: 1, samplingMethod: 1},
                        "463016390": {sampleRate: 1, samplingMethod: 1},
                        "463016713": {sampleRate: 10, samplingMethod: 1},
                        "463016767": {sampleRate: 1, samplingMethod: 1},
                        "463017657": {sampleRate: 1, samplingMethod: 1},
                        "463017909": {sampleRate: 1, samplingMethod: 1},
                        "463018037": {sampleRate: 1, samplingMethod: 1},
                        "463018218": {sampleRate: 1, samplingMethod: 1},
                        "463018233": {sampleRate: 10, samplingMethod: 1},
                        "463018876": {sampleRate: 1, samplingMethod: 1},
                        "463018912": {sampleRate: 10, samplingMethod: 1},
                        "463018943": {sampleRate: 1, samplingMethod: 1},
                        "463019567": {sampleRate: 1, samplingMethod: 1},
                        "463019600": {sampleRate: 1, samplingMethod: 1},
                        "463019974": {sampleRate: 10, samplingMethod: 1},
                        "463020161": {sampleRate: 10, samplingMethod: 1},
                        "463020393": {sampleRate: 1, samplingMethod: 1},
                        "463020766": {sampleRate: 1, samplingMethod: 1},
                        "463021213": {sampleRate: 1, samplingMethod: 1},
                        "463021269": {sampleRate: 1, samplingMethod: 1},
                        "463021570": {sampleRate: 10, samplingMethod: 1},
                        "463021813": {sampleRate: 1, samplingMethod: 1},
                        "463022004": {sampleRate: 1, samplingMethod: 1},
                        "463022130": {sampleRate: 10, samplingMethod: 1},
                        "463022146": {sampleRate: 10, samplingMethod: 1},
                        "463022516": {sampleRate: 10, samplingMethod: 1},
                        "463022924": {sampleRate: 1, samplingMethod: 1},
                        "463023032": {sampleRate: 10, samplingMethod: 1},
                        "463023080": {sampleRate: 1, samplingMethod: 1},
                        "463023725": {sampleRate: 1, samplingMethod: 1},
                        "463024020": {sampleRate: 1, samplingMethod: 1},
                        "463024072": {sampleRate: 10, samplingMethod: 1},
                        "463024364": {sampleRate: 1, samplingMethod: 1},
                        "463024522": {sampleRate: 10, samplingMethod: 1},
                        "463024556": {sampleRate: 1, samplingMethod: 1},
                        "463024597": {sampleRate: 1, samplingMethod: 1},
                        "463025126": {sampleRate: 1, samplingMethod: 1},
                        "463025650": {sampleRate: 1, samplingMethod: 1},
                        "463025693": {sampleRate: 1, samplingMethod: 1},
                        "463026040": {sampleRate: 1, samplingMethod: 1},
                        "463026246": {sampleRate: 10, samplingMethod: 1},
                        "463027530": {sampleRate: 10, samplingMethod: 1},
                        "469633012": {sampleRate: 1, samplingMethod: 1},
                        "469637892": {sampleRate: 1, samplingMethod: 1},
                        "469638517": {sampleRate: 1, samplingMethod: 1},
                        "469639633": {sampleRate: 1, samplingMethod: 1},
                        "469641443": {sampleRate: 1, samplingMethod: 1},
                        "469643296": {sampleRate: 1, samplingMethod: 1},
                        "478093416": {sampleRate: 1, samplingMethod: 1},
                        "478093695": {sampleRate: 1, samplingMethod: 1},
                        "478347265": {sampleRate: 10000, samplingMethod: 1},
                        "480908390": {sampleRate: 10000, samplingMethod: 1},
                        "480910975": {sampleRate: 10000, samplingMethod: 1},
                        "480913460": {sampleRate: 10000, samplingMethod: 1},
                        "480914164": {sampleRate: 10000, samplingMethod: 1},
                        "480916396": {sampleRate: 10000, samplingMethod: 1},
                        "484905239": {sampleRate: 10, samplingMethod: 1},
                        "491135209": {sampleRate: 1, samplingMethod: 1},
                        "491143074": {sampleRate: 1, samplingMethod: 1},
                        "508365154": {sampleRate: 1, samplingMethod: 1},
                        "508368187": {sampleRate: 1, samplingMethod: 1},
                        "508369126": {sampleRate: 1, samplingMethod: 1},
                        "508374554": {sampleRate: 1, samplingMethod: 1},
                        "516228586": {sampleRate: 1, samplingMethod: 1},
                        "516228710": {sampleRate: 1, samplingMethod: 1},
                        "516229001": {sampleRate: 1, samplingMethod: 1},
                        "516231801": {sampleRate: 1, samplingMethod: 1},
                        "516233522": {sampleRate: 1, samplingMethod: 1},
                        "516233736": {sampleRate: 1, samplingMethod: 1},
                        "516234127": {sampleRate: 1, samplingMethod: 1},
                        "516234250": {sampleRate: 1, samplingMethod: 1},
                        "516234458": {sampleRate: 1, samplingMethod: 1},
                        "516234851": {sampleRate: 1, samplingMethod: 1},
                        "516234913": {sampleRate: 1, samplingMethod: 1},
                        "516234920": {sampleRate: 1, samplingMethod: 1},
                        "516234962": {sampleRate: 1, samplingMethod: 1},
                        "516236532": {sampleRate: 1, samplingMethod: 1},
                        "516237107": {sampleRate: 1, samplingMethod: 1},
                        "516237754": {sampleRate: 1, samplingMethod: 1},
                        "516239376": {sampleRate: 1, samplingMethod: 1},
                        "516239513": {sampleRate: 1, samplingMethod: 1},
                        "516242024": {sampleRate: 1, samplingMethod: 1},
                        "517542031": {sampleRate: 1, samplingMethod: 1},
                        "517544033": {sampleRate: 1, samplingMethod: 1},
                        "517544500": {sampleRate: 1, samplingMethod: 1},
                        "517551506": {sampleRate: 1, samplingMethod: 1},
                        "520225911": {sampleRate: 1, samplingMethod: 3},
                        "520226562": {sampleRate: 1, samplingMethod: 3},
                        "520226803": {sampleRate: 1, samplingMethod: 3},
                        "520226859": {sampleRate: 1, samplingMethod: 3},
                        "520227779": {sampleRate: 1, samplingMethod: 3},
                        "520229252": {sampleRate: 10000, samplingMethod: 1},
                        "520231860": {sampleRate: 1, samplingMethod: 3},
                        "520231903": {sampleRate: 1, samplingMethod: 3},
                        "520233760": {sampleRate: 1, samplingMethod: 3},
                        "520234221": {sampleRate: 1, samplingMethod: 3},
                        "520234245": {sampleRate: 1, samplingMethod: 3},
                        "520234918": {sampleRate: 1, samplingMethod: 3},
                        "520235197": {sampleRate: 1, samplingMethod: 3},
                        "520236691": {sampleRate: 10000, samplingMethod: 1},
                        "520239363": {sampleRate: 1, samplingMethod: 3},
                        "520240645": {sampleRate: 10000, samplingMethod: 1},
                        "526517510": {sampleRate: 1, samplingMethod: 1},
                        "526518298": {sampleRate: 1, samplingMethod: 1},
                        "526518890": {sampleRate: 1, samplingMethod: 1},
                        "526519344": {sampleRate: 1, samplingMethod: 1},
                        "526521870": {sampleRate: 1, samplingMethod: 1},
                        "526522103": {sampleRate: 1, samplingMethod: 1},
                        "526525605": {sampleRate: 1, samplingMethod: 1},
                        "526526321": {sampleRate: 1, samplingMethod: 1},
                        "526526434": {sampleRate: 1, samplingMethod: 1},
                        "526527396": {sampleRate: 1, samplingMethod: 1},
                        "526532064": {sampleRate: 1, samplingMethod: 1},
                        "526714587": {sampleRate: 10000, samplingMethod: 1},
                        "526717649": {sampleRate: 10000, samplingMethod: 1},
                        "527765249": {sampleRate: 1, samplingMethod: 1},
                        "527769459": {sampleRate: 1, samplingMethod: 1},
                        "527771788": {sampleRate: 1, samplingMethod: 1},
                        "528230786": {sampleRate: 1, samplingMethod: 1},
                        "528233608": {sampleRate: 1, samplingMethod: 1},
                        "528235747": {sampleRate: 1, samplingMethod: 1},
                        "531301737": {sampleRate: 10000, samplingMethod: 1},
                        "531312344": {sampleRate: 10000, samplingMethod: 1},
                        "532165955": {sampleRate: 1, samplingMethod: 1},
                        "532167327": {sampleRate: 1, samplingMethod: 1},
                        "532883550": {sampleRate: 1, samplingMethod: 1},
                        "532885803": {sampleRate: 1, samplingMethod: 1},
                        "532886361": {sampleRate: 1, samplingMethod: 1},
                        "532888709": {sampleRate: 1, samplingMethod: 1},
                        "534974071": {sampleRate: 1, samplingMethod: 1},
                        "534977644": {sampleRate: 1, samplingMethod: 1},
                        "534978022": {sampleRate: 1, samplingMethod: 1},
                        "534979103": {sampleRate: 1, samplingMethod: 1},
                        "534979289": {sampleRate: 1, samplingMethod: 1},
                        "534983980": {sampleRate: 1, samplingMethod: 1},
                        "534984327": {sampleRate: 1, samplingMethod: 1},
                        "538512187": {sampleRate: 1, samplingMethod: 1},
                        "538522688": {sampleRate: 1, samplingMethod: 1},
                        "538523041": {sampleRate: 1, samplingMethod: 1},
                        "539298786": {sampleRate: 1, samplingMethod: 1},
                        "542776204": {sampleRate: 1, samplingMethod: 3},
                        "542778775": {sampleRate: 1, samplingMethod: 3},
                        "542784537": {sampleRate: 1, samplingMethod: 1},
                        "543626600": {sampleRate: 1, samplingMethod: 1},
                        "543628365": {sampleRate: 1, samplingMethod: 1},
                        "544671169": {sampleRate: 1, samplingMethod: 3},
                        "544671925": {sampleRate: 1, samplingMethod: 1},
                        "544672070": {sampleRate: 1, samplingMethod: 1},
                        "544672144": {sampleRate: 1, samplingMethod: 1},
                        "544672323": {sampleRate: 1, samplingMethod: 1},
                        "544674848": {sampleRate: 1, samplingMethod: 1},
                        "544676057": {sampleRate: 1, samplingMethod: 3},
                        "544677675": {sampleRate: 1, samplingMethod: 1},
                        "544679016": {sampleRate: 1, samplingMethod: 1},
                        "544679157": {sampleRate: 1, samplingMethod: 1},
                        "544679355": {sampleRate: 1, samplingMethod: 3},
                        "544679565": {sampleRate: 1, samplingMethod: 1},
                        "544679875": {sampleRate: 1, samplingMethod: 3},
                        "544680242": {sampleRate: 1, samplingMethod: 1},
                        "544681296": {sampleRate: 1, samplingMethod: 1},
                        "544681905": {sampleRate: 1, samplingMethod: 1},
                        "544683739": {sampleRate: 1, samplingMethod: 1},
                        "544683999": {sampleRate: 1, samplingMethod: 1},
                        "544684042": {sampleRate: 1, samplingMethod: 1},
                        "553648129": {sampleRate: 1, samplingMethod: 1},
                        "553648130": {sampleRate: 1, samplingMethod: 1},
                        "553655735": {sampleRate: 1, samplingMethod: 1},
                        "558902195": {sampleRate: 1, samplingMethod: 1},
                        "558903169": {sampleRate: 1, samplingMethod: 1},
                        "558903412": {sampleRate: 1, samplingMethod: 1},
                        "558904351": {sampleRate: 1, samplingMethod: 1},
                        "558904495": {sampleRate: 1, samplingMethod: 1},
                        "558905116": {sampleRate: 1, samplingMethod: 1},
                        "559090277": {sampleRate: 1, samplingMethod: 1},
                        "559090485": {sampleRate: 1, samplingMethod: 1},
                        "559093968": {sampleRate: 1, samplingMethod: 1},
                        "559094585": {sampleRate: 1, samplingMethod: 1},
                        "559096080": {sampleRate: 1, samplingMethod: 1},
                        "559096538": {sampleRate: 1, samplingMethod: 1},
                        "559096915": {sampleRate: 1, samplingMethod: 1},
                        "559099845": {sampleRate: 1, samplingMethod: 1},
                        "559100761": {sampleRate: 1, samplingMethod: 1},
                        "559101881": {sampleRate: 1, samplingMethod: 1},
                        "559102417": {sampleRate: 1, samplingMethod: 1},
                        "572130828": {sampleRate: 1, samplingMethod: 1},
                        "572131972": {sampleRate: 1, samplingMethod: 1},
                        "572134284": {sampleRate: 1, samplingMethod: 1},
                        "572135240": {sampleRate: 1, samplingMethod: 1},
                        "572135712": {sampleRate: 1, samplingMethod: 1},
                        "572136953": {sampleRate: 1, samplingMethod: 1},
                        "572137945": {sampleRate: 1, samplingMethod: 1},
                        "572142814": {sampleRate: 1, samplingMethod: 1},
                        "572145501": {sampleRate: 1, samplingMethod: 1},
                        "573313316": {sampleRate: 1, samplingMethod: 1},
                        "573317629": {sampleRate: 1, samplingMethod: 1},
                        "573317714": {sampleRate: 1, samplingMethod: 1},
                        "573319052": {sampleRate: 1, samplingMethod: 1},
                        "573319429": {sampleRate: 1, samplingMethod: 1},
                        "573320127": {sampleRate: 1, samplingMethod: 1},
                        "573320487": {sampleRate: 1, samplingMethod: 1},
                        "573321857": {sampleRate: 1, samplingMethod: 1},
                        "573323179": {sampleRate: 1, samplingMethod: 1},
                        "573325103": {sampleRate: 1, samplingMethod: 1},
                        "578813953": {sampleRate: 10000, samplingMethod: 1},
                        "578813954": {sampleRate: 10000, samplingMethod: 1},
                        "582025217": {sampleRate: 1, samplingMethod: 1},
                        "582025218": {sampleRate: 1, samplingMethod: 1},
                        "582027575": {sampleRate: 1, samplingMethod: 1},
                        "588713587": {sampleRate: 1, samplingMethod: 1},
                        "592582133": {sampleRate: 10000, samplingMethod: 1},
                        "593299269": {sampleRate: 1, samplingMethod: 1},
                        "593299382": {sampleRate: 1, samplingMethod: 1},
                        "593301612": {sampleRate: 1, samplingMethod: 1},
                        "593302224": {sampleRate: 1, samplingMethod: 1},
                        "593303128": {sampleRate: 1, samplingMethod: 1},
                        "593303848": {sampleRate: 1, samplingMethod: 1},
                        "593304449": {sampleRate: 1, samplingMethod: 1},
                        "593305703": {sampleRate: 1, samplingMethod: 1},
                        "593306265": {sampleRate: 1, samplingMethod: 1},
                        "593307586": {sampleRate: 1, samplingMethod: 1},
                        "593307694": {sampleRate: 1, samplingMethod: 1},
                        "593309420": {sampleRate: 1, samplingMethod: 1},
                        "593310598": {sampleRate: 1, samplingMethod: 1},
                        "593311730": {sampleRate: 1, samplingMethod: 1},
                        "593313520": {sampleRate: 1, samplingMethod: 1},
                        "597497308": {sampleRate: 1, samplingMethod: 1},
                        "597498673": {sampleRate: 10000, samplingMethod: 1},
                        "597501298": {sampleRate: 10000, samplingMethod: 1},
                        "602148241": {sampleRate: 1, samplingMethod: 1},
                        "602150380": {sampleRate: 1, samplingMethod: 1},
                        "602153811": {sampleRate: 1, samplingMethod: 1},
                        "602154925": {sampleRate: 1, samplingMethod: 1},
                        "602157403": {sampleRate: 1, samplingMethod: 1},
                        "602161050": {sampleRate: 1, samplingMethod: 1},
                        "603196156": {sampleRate: 10000, samplingMethod: 1},
                        "603202213": {sampleRate: 10000, samplingMethod: 1},
                        "603202571": {sampleRate: 10000, samplingMethod: 1},
                        "612961719": {sampleRate: 1, samplingMethod: 1},
                        "612970753": {sampleRate: 1, samplingMethod: 1},
                        "612973892": {sampleRate: 1, samplingMethod: 1},
                        "624763788": {sampleRate: 1, samplingMethod: 1},
                        "624764751": {sampleRate: 1, samplingMethod: 1},
                        "625870199": {sampleRate: 1, samplingMethod: 1},
                        "625870607": {sampleRate: 1, samplingMethod: 1},
                        "625870658": {sampleRate: 1, samplingMethod: 1},
                        "625870761": {sampleRate: 1, samplingMethod: 1},
                        "625872161": {sampleRate: 1, samplingMethod: 1},
                        "625872374": {sampleRate: 1, samplingMethod: 1},
                        "625872449": {sampleRate: 1, samplingMethod: 1},
                        "625872960": {sampleRate: 1, samplingMethod: 1},
                        "625873595": {sampleRate: 1, samplingMethod: 1},
                        "625874920": {sampleRate: 1, samplingMethod: 1},
                        "625875030": {sampleRate: 1, samplingMethod: 1},
                        "625876304": {sampleRate: 1, samplingMethod: 1},
                        "625876688": {sampleRate: 1, samplingMethod: 1},
                        "625877881": {sampleRate: 1, samplingMethod: 1},
                        "625879077": {sampleRate: 1, samplingMethod: 1},
                        "625880936": {sampleRate: 1, samplingMethod: 1},
                        "625882015": {sampleRate: 1, samplingMethod: 1},
                        "625882307": {sampleRate: 1, samplingMethod: 1},
                        "625882731": {sampleRate: 1, samplingMethod: 1},
                        "625883074": {sampleRate: 1, samplingMethod: 1},
                        "625883668": {sampleRate: 1, samplingMethod: 1},
                        "625884250": {sampleRate: 1, samplingMethod: 1},
                        "625884983": {sampleRate: 1, samplingMethod: 1},
                        "634592018": {sampleRate: 1, samplingMethod: 1},
                        "640496395": {sampleRate: 1, samplingMethod: 1},
                        "641272127": {sampleRate: 1, samplingMethod: 1},
                        "641272881": {sampleRate: 1, samplingMethod: 1},
                        "641273441": {sampleRate: 1, samplingMethod: 1},
                        "641273554": {sampleRate: 1, samplingMethod: 1},
                        "641275636": {sampleRate: 1, samplingMethod: 1},
                        "641278608": {sampleRate: 1, samplingMethod: 1},
                        "641281776": {sampleRate: 1, samplingMethod: 1},
                        "641282992": {sampleRate: 1, samplingMethod: 1},
                        "641284572": {sampleRate: 1, samplingMethod: 1},
                        "642320131": {sampleRate: 1, samplingMethod: 1},
                        "642320141": {sampleRate: 1, samplingMethod: 1},
                        "642322226": {sampleRate: 1, samplingMethod: 1},
                        "642330111": {sampleRate: 1, samplingMethod: 1},
                        "642333495": {sampleRate: 1, samplingMethod: 1},
                        "642334504": {sampleRate: 1, samplingMethod: 1},
                        "642334561": {sampleRate: 1, samplingMethod: 1},
                        "649994381": {sampleRate: 10000, samplingMethod: 1},
                        "656148117": {sampleRate: 1, samplingMethod: 1},
                        "656149153": {sampleRate: 1, samplingMethod: 1},
                        "656150284": {sampleRate: 1, samplingMethod: 1},
                        "656152605": {sampleRate: 1, samplingMethod: 1},
                        "656153056": {sampleRate: 1, samplingMethod: 1},
                        "656153396": {sampleRate: 1, samplingMethod: 1},
                        "656153475": {sampleRate: 1, samplingMethod: 1},
                        "656154840": {sampleRate: 1, samplingMethod: 1},
                        "656156235": {sampleRate: 1, samplingMethod: 1},
                        "656156649": {sampleRate: 1, samplingMethod: 1},
                        "656157006": {sampleRate: 1, samplingMethod: 1},
                        "656157513": {sampleRate: 1, samplingMethod: 1},
                        "656158903": {sampleRate: 1, samplingMethod: 1},
                        "656160300": {sampleRate: 1, samplingMethod: 1},
                        "656162024": {sampleRate: 1, samplingMethod: 1},
                        "656162239": {sampleRate: 1, samplingMethod: 1},
                        "658310259": {sampleRate: 1, samplingMethod: 1},
                        "658311000": {sampleRate: 1, samplingMethod: 1},
                        "658311653": {sampleRate: 1, samplingMethod: 1},
                        "658312030": {sampleRate: 1, samplingMethod: 1},
                        "658312060": {sampleRate: 1, samplingMethod: 1},
                        "658312503": {sampleRate: 1, samplingMethod: 1},
                        "658313937": {sampleRate: 1, samplingMethod: 1},
                        "658314754": {sampleRate: 1, samplingMethod: 1},
                        "658319560": {sampleRate: 1, samplingMethod: 1},
                        "658320532": {sampleRate: 1, samplingMethod: 1},
                        "658323570": {sampleRate: 1, samplingMethod: 1},
                        "658325194": {sampleRate: 1, samplingMethod: 1},
                        "662769649": {sampleRate: 1, samplingMethod: 1},
                        "663618882": {sampleRate: 1, samplingMethod: 1},
                        "663621158": {sampleRate: 1, samplingMethod: 1},
                        "663621340": {sampleRate: 1, samplingMethod: 1},
                        "663621548": {sampleRate: 1, samplingMethod: 1},
                        "663622595": {sampleRate: 1, samplingMethod: 1},
                        "663622603": {sampleRate: 1, samplingMethod: 1},
                        "663622613": {sampleRate: 1, samplingMethod: 1},
                        "663622990": {sampleRate: 1, samplingMethod: 1},
                        "663624058": {sampleRate: 1, samplingMethod: 1},
                        "663625914": {sampleRate: 1, samplingMethod: 1},
                        "663626399": {sampleRate: 1, samplingMethod: 1},
                        "663627363": {sampleRate: 1, samplingMethod: 1},
                        "663627729": {sampleRate: 1, samplingMethod: 1},
                        "663628202": {sampleRate: 1, samplingMethod: 1},
                        "663629736": {sampleRate: 1, samplingMethod: 1},
                        "663630260": {sampleRate: 1, samplingMethod: 1},
                        "663631213": {sampleRate: 1, samplingMethod: 1},
                        "663631390": {sampleRate: 1, samplingMethod: 1},
                        "663631507": {sampleRate: 1, samplingMethod: 1},
                        "663631670": {sampleRate: 1, samplingMethod: 1},
                        "663632194": {sampleRate: 1, samplingMethod: 1},
                        "664017918": {sampleRate: 1, samplingMethod: 1},
                        "667166687": {sampleRate: 10000, samplingMethod: 1},
                        "668272330": {sampleRate: 1, samplingMethod: 1},
                        "668282222": {sampleRate: 1, samplingMethod: 1},
                        "668283633": {sampleRate: 1, samplingMethod: 3},
                        "674368495": {sampleRate: 1, samplingMethod: 1},
                        "678690817": {sampleRate: 1, samplingMethod: 1},
                        "678690818": {sampleRate: 1, samplingMethod: 1},
                        "678703920": {sampleRate: 1, samplingMethod: 1},
                        "685309953": {sampleRate: 10000, samplingMethod: 1},
                        "685309954": {sampleRate: 10000, samplingMethod: 1},
                        "685576384": {sampleRate: 1, samplingMethod: 1},
                        "685579102": {sampleRate: 10, samplingMethod: 1},
                        "688919680": {sampleRate: 10000, samplingMethod: 1},
                        "688924705": {sampleRate: 10000, samplingMethod: 1},
                        "688926599": {sampleRate: 1, samplingMethod: 1},
                        "688930365": {sampleRate: 100, samplingMethod: 1},
                        "689903304": {sampleRate: 1, samplingMethod: 1},
                        "689904686": {sampleRate: 1, samplingMethod: 1},
                        "689907311": {sampleRate: 1, samplingMethod: 1},
                        "689908443": {sampleRate: 1, samplingMethod: 1},
                        "689910058": {sampleRate: 1, samplingMethod: 1},
                        "691799027": {sampleRate: 10, samplingMethod: 1},
                        "691813192": {sampleRate: 1, samplingMethod: 1},
                        "691813340": {sampleRate: 1, samplingMethod: 1},
                        "691998369": {sampleRate: 1, samplingMethod: 1},
                        "692000793": {sampleRate: 1, samplingMethod: 1},
                        "692008145": {sampleRate: 1, samplingMethod: 1},
                        "692010481": {sampleRate: 1, samplingMethod: 1},
                        "695799416": {sampleRate: 10, samplingMethod: 1},
                        "695806386": {sampleRate: 10000, samplingMethod: 1},
                        "696780884": {sampleRate: 1, samplingMethod: 1},
                        "696782251": {sampleRate: 1, samplingMethod: 1},
                        "696782870": {sampleRate: 1, samplingMethod: 1},
                        "697373488": {sampleRate: 10000, samplingMethod: 1},
                        "706281473": {sampleRate: 1, samplingMethod: 1},
                        "716966485": {sampleRate: 1, samplingMethod: 1},
                        "716966647": {sampleRate: 1, samplingMethod: 1},
                        "716979633": {sampleRate: 1, samplingMethod: 1},
                        "719323137": {sampleRate: 1, samplingMethod: 1},
                        "719323138": {sampleRate: 1, samplingMethod: 1},
                        "719326647": {sampleRate: 1, samplingMethod: 1},
                        "719327653": {sampleRate: 1, samplingMethod: 1},
                        "719332537": {sampleRate: 1, samplingMethod: 1},
                        "719334544": {sampleRate: 1, samplingMethod: 1},
                        "719335669": {sampleRate: 1, samplingMethod: 1},
                        "719336631": {sampleRate: 1, samplingMethod: 1},
                        "719337039": {sampleRate: 1, samplingMethod: 1},
                        "719988411": {sampleRate: 1, samplingMethod: 1},
                        "725156869": {sampleRate: 1, samplingMethod: 1},
                        "725157581": {sampleRate: 1, samplingMethod: 1},
                        "725157683": {sampleRate: 1, samplingMethod: 1},
                        "725157923": {sampleRate: 1, samplingMethod: 1},
                        "725158389": {sampleRate: 1, samplingMethod: 1},
                        "725158695": {sampleRate: 1, samplingMethod: 1},
                        "725159829": {sampleRate: 1, samplingMethod: 1},
                        "725160706": {sampleRate: 1, samplingMethod: 1},
                        "725163651": {sampleRate: 1, samplingMethod: 1},
                        "725165351": {sampleRate: 1, samplingMethod: 1},
                        "725166821": {sampleRate: 1, samplingMethod: 1},
                        "725170528": {sampleRate: 1, samplingMethod: 1},
                        "725430792": {sampleRate: 10000, samplingMethod: 1},
                        "725623863": {sampleRate: 1, samplingMethod: 1},
                        "731650369": {sampleRate: 1, samplingMethod: 1},
                        "732639803": {sampleRate: 1, samplingMethod: 1},
                        "732826875": {sampleRate: 10000, samplingMethod: 1},
                        "732827560": {sampleRate: 10000, samplingMethod: 1},
                        "732832471": {sampleRate: 10000, samplingMethod: 1},
                        "732833806": {sampleRate: 10000, samplingMethod: 1},
                        "732834481": {sampleRate: 10000, samplingMethod: 1},
                        "732835137": {sampleRate: 10000, samplingMethod: 1},
                        "732835689": {sampleRate: 10000, samplingMethod: 1},
                        "732836954": {sampleRate: 10000, samplingMethod: 1},
                        "732838764": {sampleRate: 10000, samplingMethod: 1},
                        "733095886": {sampleRate: 1, samplingMethod: 1},
                        "738133175": {sampleRate: 10000, samplingMethod: 1},
                        "738142835": {sampleRate: 10000, samplingMethod: 1},
                        "742524264": {sampleRate: 1, samplingMethod: 1},
                        "742525195": {sampleRate: 1, samplingMethod: 1},
                        "742525508": {sampleRate: 1, samplingMethod: 1},
                        "742528755": {sampleRate: 1, samplingMethod: 1},
                        "742528977": {sampleRate: 1, samplingMethod: 1},
                        "742531496": {sampleRate: 1, samplingMethod: 1},
                        "742535026": {sampleRate: 1, samplingMethod: 1},
                        "742535799": {sampleRate: 1, samplingMethod: 1},
                        "742535803": {sampleRate: 1, samplingMethod: 1},
                        "744037991": {sampleRate: 1, samplingMethod: 1},
                        "744044661": {sampleRate: 1, samplingMethod: 1},
                        "747445299": {sampleRate: 1, samplingMethod: 1},
                        "747454106": {sampleRate: 1, samplingMethod: 1},
                        "755959842": {sampleRate: 1, samplingMethod: 1},
                        "755965148": {sampleRate: 1, samplingMethod: 1},
                        "755968561": {sampleRate: 1, samplingMethod: 1},
                        "759373195": {sampleRate: 1, samplingMethod: 3},
                        "759564472": {sampleRate: 1, samplingMethod: 1},
                        "759566636": {sampleRate: 1, samplingMethod: 1},
                        "759576445": {sampleRate: 1, samplingMethod: 1},
                        "767301815": {sampleRate: 10000, samplingMethod: 1},
                        "777060353": {sampleRate: 10000, samplingMethod: 1},
                        "777330614": {sampleRate: 1, samplingMethod: 1},
                        "777338387": {sampleRate: 1, samplingMethod: 1},
                        "777977857": {sampleRate: 10000, samplingMethod: 1},
                        "777977858": {sampleRate: 10000, samplingMethod: 1},
                        "778897115": {sampleRate: 1, samplingMethod: 1},
                        "778910749": {sampleRate: 1, samplingMethod: 1},
                        "779749791": {sampleRate: 1, samplingMethod: 1},
                        "779762281": {sampleRate: 1, samplingMethod: 1},
                        "780212905": {sampleRate: 1, samplingMethod: 1},
                        "782907314": {sampleRate: 1, samplingMethod: 1},
                        "782908389": {sampleRate: 1, samplingMethod: 1},
                        "788144639": {sampleRate: 1, samplingMethod: 1},
                        "789446657": {sampleRate: 1, samplingMethod: 1},
                        "789450742": {sampleRate: 1, samplingMethod: 1},
                        "790891628": {sampleRate: 100, samplingMethod: 1},
                        "790898449": {sampleRate: 100, samplingMethod: 1},
                        "790901695": {sampleRate: 100, samplingMethod: 1},
                        "801442060": {sampleRate: 100, samplingMethod: 1},
                        "801443888": {sampleRate: 1, samplingMethod: 1},
                        "801449188": {sampleRate: 1, samplingMethod: 1},
                        "801454903": {sampleRate: 1, samplingMethod: 1},
                        "801455226": {sampleRate: 1, samplingMethod: 1},
                        "806238920": {sampleRate: 1, samplingMethod: 1},
                        "810488499": {sampleRate: 100, samplingMethod: 1},
                        "810490227": {sampleRate: 10000, samplingMethod: 1},
                        "810490283": {sampleRate: 100, samplingMethod: 1},
                        "810491575": {sampleRate: 10000, samplingMethod: 1},
                        "810492450": {sampleRate: 10000, samplingMethod: 1},
                        "810497509": {sampleRate: 10000, samplingMethod: 1},
                        "810497709": {sampleRate: 100, samplingMethod: 1},
                        "810498220": {sampleRate: 10000, samplingMethod: 1},
                        "819201633": {sampleRate: 1, samplingMethod: 1},
                        "819206995": {sampleRate: 1, samplingMethod: 1},
                        "823333654": {sampleRate: 100, samplingMethod: 1},
                        "825425921": {sampleRate: 1, samplingMethod: 1},
                        "825433348": {sampleRate: 1, samplingMethod: 1},
                        "835064883": {sampleRate: 1, samplingMethod: 3},
                        "835068505": {sampleRate: 1, samplingMethod: 3},
                        "835069323": {sampleRate: 1, samplingMethod: 3},
                        "835075303": {sampleRate: 1, samplingMethod: 3},
                        "841618442": {sampleRate: 1, samplingMethod: 1},
                        "841622832": {sampleRate: 1, samplingMethod: 1},
                        "841627612": {sampleRate: 1, samplingMethod: 1},
                        "846476042": {sampleRate: 10000, samplingMethod: 1},
                        "849416660": {sampleRate: 1, samplingMethod: 1},
                        "849416900": {sampleRate: 1, samplingMethod: 1},
                        "849418188": {sampleRate: 1, samplingMethod: 1},
                        "849419603": {sampleRate: 1, samplingMethod: 1},
                        "849419641": {sampleRate: 1, samplingMethod: 1},
                        "849421651": {sampleRate: 1, samplingMethod: 1},
                        "849422375": {sampleRate: 1, samplingMethod: 1},
                        "849422997": {sampleRate: 1, samplingMethod: 1},
                        "864882179": {sampleRate: 1, samplingMethod: 1},
                        "864882964": {sampleRate: 10000, samplingMethod: 1},
                        "864886206": {sampleRate: 1, samplingMethod: 1},
                        "864887867": {sampleRate: 10000, samplingMethod: 1},
                        "864888473": {sampleRate: 10000, samplingMethod: 1},
                        "864888531": {sampleRate: 10000, samplingMethod: 1},
                        "864888990": {sampleRate: 10000, samplingMethod: 1},
                        "864889698": {sampleRate: 10000, samplingMethod: 1},
                        "864889839": {sampleRate: 1, samplingMethod: 1},
                        "864891596": {sampleRate: 10000, samplingMethod: 1},
                        "864892947": {sampleRate: 10000, samplingMethod: 1},
                        "864894344": {sampleRate: 10000, samplingMethod: 1},
                        "866649736": {sampleRate: 1, samplingMethod: 1},
                        "866650326": {sampleRate: 1, samplingMethod: 1},
                        "866650701": {sampleRate: 1, samplingMethod: 1},
                        "866652534": {sampleRate: 1, samplingMethod: 1},
                        "866653173": {sampleRate: 1, samplingMethod: 1},
                        "866653743": {sampleRate: 1, samplingMethod: 1},
                        "866653977": {sampleRate: 1, samplingMethod: 1},
                        "866654711": {sampleRate: 1, samplingMethod: 1},
                        "866655634": {sampleRate: 1, samplingMethod: 1},
                        "866657326": {sampleRate: 1, samplingMethod: 1},
                        "866663933": {sampleRate: 1, samplingMethod: 1},
                        "868220929": {sampleRate: 1, samplingMethod: 1},
                        "868222401": {sampleRate: 1, samplingMethod: 1},
                        "869731149": {sampleRate: 10, samplingMethod: 1},
                        "876877572": {sampleRate: 1, samplingMethod: 1},
                        "876877588": {sampleRate: 1, samplingMethod: 1},
                        "876878048": {sampleRate: 1, samplingMethod: 1},
                        "876878791": {sampleRate: 1, samplingMethod: 1},
                        "876879076": {sampleRate: 1, samplingMethod: 1},
                        "876881256": {sampleRate: 1, samplingMethod: 1},
                        "886114753": {sampleRate: 1, samplingMethod: 1},
                        "886116533": {sampleRate: 1, samplingMethod: 1},
                        "890439053": {sampleRate: 1, samplingMethod: 1},
                        "890442675": {sampleRate: 1, samplingMethod: 1},
                        "891686230": {sampleRate: 1, samplingMethod: 3},
                        "892211987": {sampleRate: 10000, samplingMethod: 1},
                        "892215753": {sampleRate: 1, samplingMethod: 3},
                        "893386753": {sampleRate: 10000, samplingMethod: 1},
                        "896140808": {sampleRate: 100, samplingMethod: 1},
                        "896147113": {sampleRate: 100, samplingMethod: 1},
                        "896148353": {sampleRate: 20000, samplingMethod: 1},
                        "896149667": {sampleRate: 1, samplingMethod: 1},
                        "899355574": {sampleRate: 10, samplingMethod: 1},
                        "901855609": {sampleRate: 1, samplingMethod: 1},
                        "916591346": {sampleRate: 10000, samplingMethod: 1},
                        "916594868": {sampleRate: 10000, samplingMethod: 1},
                        "916596786": {sampleRate: 10000, samplingMethod: 1},
                        "916599023": {sampleRate: 10000, samplingMethod: 1},
                        "916602249": {sampleRate: 10000, samplingMethod: 1},
                        "918820258": {sampleRate: 1, samplingMethod: 1},
                        "918825252": {sampleRate: 1, samplingMethod: 1},
                        "919603227": {sampleRate: 100, samplingMethod: 1},
                        "919603854": {sampleRate: 10000, samplingMethod: 1},
                        "919604299": {sampleRate: 100, samplingMethod: 1},
                        "919604703": {sampleRate: 100, samplingMethod: 1},
                        "919609721": {sampleRate: 100, samplingMethod: 1},
                        "919614523": {sampleRate: 10000, samplingMethod: 1},
                        "919623711": {sampleRate: 10000, samplingMethod: 1},
                        "931594241": {sampleRate: 1, samplingMethod: 1},
                        "932906418": {sampleRate: 1, samplingMethod: 1},
                        "932909142": {sampleRate: 10000, samplingMethod: 1},
                        "932909377": {sampleRate: 1, samplingMethod: 1},
                        "932909931": {sampleRate: 1, samplingMethod: 1},
                        "932910147": {sampleRate: 1, samplingMethod: 1},
                        "932910200": {sampleRate: 10000, samplingMethod: 1},
                        "932912792": {sampleRate: 10000, samplingMethod: 1},
                        "932912954": {sampleRate: 10000, samplingMethod: 1},
                        "932913600": {sampleRate: 10000, samplingMethod: 1},
                        "932913663": {sampleRate: 10000, samplingMethod: 1},
                        "932914460": {sampleRate: 10000, samplingMethod: 1},
                        "932915806": {sampleRate: 1, samplingMethod: 1},
                        "932915999": {sampleRate: 1, samplingMethod: 1},
                        "932916075": {sampleRate: 10000, samplingMethod: 1},
                        "932917888": {sampleRate: 10000, samplingMethod: 1},
                        "932918244": {sampleRate: 1, samplingMethod: 1},
                        "932918590": {sampleRate: 10000, samplingMethod: 1},
                        "932920974": {sampleRate: 10000, samplingMethod: 1},
                        "941884436": {sampleRate: 1, samplingMethod: 1},
                        "941884476": {sampleRate: 1, samplingMethod: 1},
                        "941884689": {sampleRate: 1, samplingMethod: 1},
                        "941884838": {sampleRate: 1, samplingMethod: 1},
                        "941884945": {sampleRate: 1, samplingMethod: 1},
                        "941885000": {sampleRate: 1, samplingMethod: 1},
                        "941885017": {sampleRate: 1, samplingMethod: 1},
                        "941885024": {sampleRate: 1, samplingMethod: 1},
                        "941885056": {sampleRate: 1, samplingMethod: 1},
                        "941885063": {sampleRate: 1, samplingMethod: 1},
                        "941885196": {sampleRate: 1, samplingMethod: 1},
                        "941885540": {sampleRate: 1, samplingMethod: 1},
                        "941885615": {sampleRate: 1, samplingMethod: 1},
                        "941886063": {sampleRate: 1, samplingMethod: 1},
                        "941886114": {sampleRate: 1, samplingMethod: 1},
                        "941886177": {sampleRate: 1, samplingMethod: 1},
                        "941886197": {sampleRate: 1, samplingMethod: 1},
                        "941886335": {sampleRate: 1, samplingMethod: 1},
                        "941886520": {sampleRate: 1, samplingMethod: 1},
                        "941886698": {sampleRate: 1, samplingMethod: 1},
                        "941886823": {sampleRate: 1, samplingMethod: 1},
                        "941886887": {sampleRate: 1, samplingMethod: 1},
                        "941886907": {sampleRate: 1, samplingMethod: 1},
                        "941887006": {sampleRate: 1, samplingMethod: 1},
                        "941887370": {sampleRate: 1, samplingMethod: 1},
                        "941887457": {sampleRate: 1, samplingMethod: 1},
                        "941887775": {sampleRate: 1, samplingMethod: 1},
                        "941887999": {sampleRate: 1, samplingMethod: 1},
                        "941888108": {sampleRate: 1, samplingMethod: 1},
                        "941888170": {sampleRate: 1, samplingMethod: 1},
                        "941888329": {sampleRate: 1, samplingMethod: 1},
                        "941888344": {sampleRate: 1, samplingMethod: 1},
                        "941888609": {sampleRate: 1, samplingMethod: 1},
                        "941888741": {sampleRate: 1, samplingMethod: 1},
                        "941888850": {sampleRate: 1, samplingMethod: 1},
                        "941889079": {sampleRate: 1, samplingMethod: 1},
                        "941889130": {sampleRate: 1, samplingMethod: 1},
                        "941889500": {sampleRate: 1, samplingMethod: 1},
                        "941889635": {sampleRate: 1, samplingMethod: 1},
                        "941889736": {sampleRate: 1, samplingMethod: 1},
                        "941889793": {sampleRate: 1, samplingMethod: 1},
                        "941889802": {sampleRate: 1, samplingMethod: 1},
                        "941889924": {sampleRate: 1, samplingMethod: 1},
                        "941890036": {sampleRate: 1, samplingMethod: 1},
                        "941890649": {sampleRate: 1, samplingMethod: 1},
                        "941890651": {sampleRate: 1, samplingMethod: 1},
                        "941891046": {sampleRate: 1, samplingMethod: 1},
                        "941891372": {sampleRate: 1, samplingMethod: 1},
                        "941891950": {sampleRate: 1, samplingMethod: 1},
                        "941892014": {sampleRate: 1, samplingMethod: 1},
                        "941892105": {sampleRate: 1, samplingMethod: 1},
                        "941892322": {sampleRate: 1, samplingMethod: 1},
                        "941892335": {sampleRate: 1, samplingMethod: 1},
                        "941892412": {sampleRate: 1, samplingMethod: 1},
                        "941892429": {sampleRate: 1, samplingMethod: 1},
                        "941892571": {sampleRate: 1, samplingMethod: 1},
                        "941892660": {sampleRate: 1, samplingMethod: 1},
                        "941892702": {sampleRate: 1, samplingMethod: 1},
                        "941892727": {sampleRate: 1, samplingMethod: 1},
                        "941893098": {sampleRate: 1, samplingMethod: 1},
                        "941893166": {sampleRate: 1, samplingMethod: 1},
                        "941893219": {sampleRate: 1, samplingMethod: 1},
                        "941893296": {sampleRate: 1, samplingMethod: 1},
                        "941893436": {sampleRate: 1, samplingMethod: 1},
                        "941893492": {sampleRate: 1, samplingMethod: 1},
                        "941893543": {sampleRate: 1, samplingMethod: 1},
                        "941893606": {sampleRate: 1, samplingMethod: 1},
                        "941893723": {sampleRate: 1, samplingMethod: 1},
                        "941893915": {sampleRate: 1, samplingMethod: 1},
                        "941894402": {sampleRate: 1, samplingMethod: 1},
                        "941894611": {sampleRate: 1, samplingMethod: 1},
                        "941894849": {sampleRate: 1, samplingMethod: 1},
                        "941894918": {sampleRate: 1, samplingMethod: 1},
                        "941894957": {sampleRate: 1, samplingMethod: 1},
                        "941895078": {sampleRate: 1, samplingMethod: 1},
                        "941895125": {sampleRate: 1, samplingMethod: 1},
                        "941895130": {sampleRate: 1, samplingMethod: 1},
                        "941895169": {sampleRate: 1, samplingMethod: 1},
                        "941895479": {sampleRate: 1, samplingMethod: 1},
                        "941895531": {sampleRate: 1, samplingMethod: 1},
                        "941895641": {sampleRate: 1, samplingMethod: 1},
                        "941895975": {sampleRate: 1, samplingMethod: 1},
                        "941896048": {sampleRate: 1, samplingMethod: 1},
                        "941896080": {sampleRate: 1, samplingMethod: 1},
                        "941896375": {sampleRate: 1, samplingMethod: 1},
                        "941896499": {sampleRate: 1, samplingMethod: 1},
                        "941896590": {sampleRate: 1, samplingMethod: 1},
                        "941896705": {sampleRate: 1, samplingMethod: 1},
                        "941896715": {sampleRate: 1, samplingMethod: 1},
                        "941896722": {sampleRate: 1, samplingMethod: 1},
                        "941896872": {sampleRate: 1, samplingMethod: 1},
                        "941897039": {sampleRate: 1, samplingMethod: 1},
                        "941897301": {sampleRate: 1, samplingMethod: 1},
                        "941897383": {sampleRate: 1, samplingMethod: 1},
                        "941897516": {sampleRate: 1, samplingMethod: 1},
                        "941897846": {sampleRate: 1, samplingMethod: 1},
                        "941898160": {sampleRate: 1, samplingMethod: 1},
                        "941898442": {sampleRate: 1, samplingMethod: 1},
                        "941898452": {sampleRate: 1, samplingMethod: 1},
                        "941898873": {sampleRate: 1, samplingMethod: 1},
                        "941898874": {sampleRate: 1, samplingMethod: 1},
                        "941899083": {sampleRate: 1, samplingMethod: 1},
                        "941899192": {sampleRate: 1, samplingMethod: 1},
                        "941899484": {sampleRate: 1, samplingMethod: 1},
                        "949157888": {sampleRate: 100, samplingMethod: 1},
                        "958136321": {sampleRate: 1, samplingMethod: 1},
                        "959716438": {sampleRate: 10000, samplingMethod: 1},
                        "959719071": {sampleRate: 10000, samplingMethod: 1},
                        "959721070": {sampleRate: 10000, samplingMethod: 1},
                        "960890150": {sampleRate: 1, samplingMethod: 1},
                        "960893339": {sampleRate: 1, samplingMethod: 1},
                        "960894018": {sampleRate: 1, samplingMethod: 1},
                        "960898403": {sampleRate: 1, samplingMethod: 1},
                        "960899916": {sampleRate: 1, samplingMethod: 1},
                        "974004284": {sampleRate: 1, samplingMethod: 1},
                        "981407973": {sampleRate: 1, samplingMethod: 1},
                        "987104250": {sampleRate: 1, samplingMethod: 1},
                        "987105325": {sampleRate: 1, samplingMethod: 1},
                        "987105778": {sampleRate: 1, samplingMethod: 1},
                        "987107036": {sampleRate: 1, samplingMethod: 1},
                        "987107107": {sampleRate: 1, samplingMethod: 1},
                        "987107859": {sampleRate: 1, samplingMethod: 1},
                        "987109656": {sampleRate: 1, samplingMethod: 1},
                        "987110118": {sampleRate: 1, samplingMethod: 1},
                        "987111426": {sampleRate: 1, samplingMethod: 1},
                        "987112165": {sampleRate: 1, samplingMethod: 1},
                        "987112390": {sampleRate: 1, samplingMethod: 1},
                        "987113824": {sampleRate: 1, samplingMethod: 1},
                        "987115291": {sampleRate: 1, samplingMethod: 1},
                        "987115605": {sampleRate: 1, samplingMethod: 1},
                        "987115762": {sampleRate: 1, samplingMethod: 1},
                        "1001586691": {sampleRate: 10000, samplingMethod: 1},
                        "1003294845": {sampleRate: 10000, samplingMethod: 1},
                        "1019346945": {sampleRate: 1, samplingMethod: 1},
                        "1021183069": {sampleRate: 1, samplingMethod: 1},
                        "1021188463": {sampleRate: 1, samplingMethod: 1},
                        "1021190935": {sampleRate: 1, samplingMethod: 1},
                        "1023354200": {sampleRate: 1, samplingMethod: 1},
                        "1024065537": {sampleRate: 10000, samplingMethod: 1},
                        "1049298559": {sampleRate: 1, samplingMethod: 1},
                        "1049310946": {sampleRate: 1, samplingMethod: 1},
                        "1050871471": {sampleRate: 10000, samplingMethod: 1},
                        "1050873607": {sampleRate: 10000, samplingMethod: 1},
                        "1050879687": {sampleRate: 10000, samplingMethod: 1},
                        "1050880814": {sampleRate: 10000, samplingMethod: 1},
                        "1054555339": {sampleRate: 1, samplingMethod: 1},
                        "1060121691": {sampleRate: 1, samplingMethod: 1},
                        "1060123723": {sampleRate: 10000, samplingMethod: 1},
                        "1060125691": {sampleRate: 10000, samplingMethod: 1},
                        "1060175873": {sampleRate: 10000, samplingMethod: 1},
                        "1063782141": {sampleRate: 250, samplingMethod: 1},
                        "1063783100": {sampleRate: 250, samplingMethod: 1},
                        "1063783933": {sampleRate: 250, samplingMethod: 1},
                        "1063784266": {sampleRate: 250, samplingMethod: 1},
                        "1063785441": {sampleRate: 250, samplingMethod: 1},
                        "1063785814": {sampleRate: 1, samplingMethod: 3},
                        "1063787301": {sampleRate: 1, samplingMethod: 3},
                        "1063787682": {sampleRate: 1, samplingMethod: 3},
                        "1063789999": {sampleRate: 1, samplingMethod: 3},
                        "1063791930": {sampleRate: 250, samplingMethod: 1},
                        "1063792837": {sampleRate: 250, samplingMethod: 1},
                        "1063793312": {sampleRate: 250, samplingMethod: 1},
                        "1063795002": {sampleRate: 250, samplingMethod: 1},
                        "1063795646": {sampleRate: 250, samplingMethod: 1},
                        "1063796217": {sampleRate: 250, samplingMethod: 1},
                        "1505636832": {sampleRate: 1, samplingMethod: 1}
                    }, killswitch: false
                }, 3504], ["GQLSHeartbeatConfig", [], {heartbeat_interval: 5000}, 3674], ["DGWWebConfig", [], {
                    appId: "412378670482",
                    appVersion: "0",
                    dgwVersion: "2",
                    endpoint: "wss://gateway.facebook.com/ws",
                    fbId: "100004875732895",
                    authType: "FACEBOOK"
                }, 5508], ["LiveQueryWebClientPollingSwitchList", [], {liveQueryWebClientPollingSwitchList: {example_config_id_to_be_switched: 10000}}, 5842], ["BrowserPaymentHandlerConfig", [], {enabled: false}, 3904], ["BrowserPushPubKey", [], {appServerKey: "BIBn3E_rWTci8Xn6P9Xj3btShT85Wdtne0LtwNUyRQ5XjFNkuTq9j4MPAVLvAFhXrUU1A9UxyxBA7YIOjqDIDHI"}, 4806], ["DateFormatConfig", [], {
                    numericDateOrder: ["d", "m", "y"],
                    numericDateSeparator: "/",
                    shortDayNames: ["T2", "T3", "T4", "T5", "T6", "T7", "CN"],
                    timeSeparator: ":",
                    weekStart: 6,
                    formats: {
                        D: "D",
                        "D g:ia": "D G:i",
                        "D M d": "j F",
                        "D M d, Y": "j F Y",
                        "D M j": "j F",
                        "D M j, g:ia": "j F G:i",
                        "D M j, y": "j F Y",
                        "D M j, Y g:ia": "j F Y G:i",
                        "D, M j, Y": "j F Y",
                        "F d": "j F",
                        "F d, Y": "j F Y",
                        "F g": "j F",
                        "F j": "j F",
                        "F j, Y": "j F Y",
                        "F j, Y @ g:i A": "j F Y G:i",
                        "F j, Y g:i a": "j F Y G:i",
                        "F jS": "j F",
                        "F jS, g:ia": "j F G:i",
                        "F jS, Y": "j F Y",
                        "F Y": "F Y",
                        "g A": "G",
                        "g:i": "G:i",
                        "g:i A": "G:i",
                        "g:i a": "G:i",
                        "g:iA": "G:i",
                        "g:ia": "G:i",
                        "g:ia F jS, Y": "j F Y G:i",
                        "g:iA l, F jS": "j F Y G:i",
                        "g:ia M j": "j F G:i",
                        "g:ia M jS": "j F G:i",
                        "g:ia, F jS": "j F G:i",
                        "g:iA, l M jS": "j F Y G:i",
                        "g:sa": "G:i",
                        "H:I - M d, Y": "j F Y G:i",
                        "h:i a": "G:i",
                        "h:m:s m/d/Y": "d/m/Y H:i:s",
                        j: "j",
                        "l F d, Y": "j F Y",
                        "l g:ia": "l G:ia",
                        "l, F d, Y": "j F, Y",
                        "l, F j": "j F",
                        "l, F j, Y": "j F Y",
                        "l, F jS": "j F",
                        "l, F jS, g:ia": "j F Y G:i",
                        "l, M j": "j F",
                        "l, M j, Y": "j F Y",
                        "l, M j, Y g:ia": "j F Y G:i",
                        "M d": "j F",
                        "M d, Y": "j F Y",
                        "M d, Y g:ia": "j F Y G:i",
                        "M d, Y ga": "j F Y G",
                        "M j": "j F",
                        "M j, Y": "j F Y",
                        "M j, Y g:i A": "j F Y G:i",
                        "M j, Y g:ia": "j F Y G:i",
                        "M jS, g:ia": "j F G:i",
                        "M Y": "F Y",
                        "M y": "j F",
                        "m-d-y": "d/m/Y",
                        "M. d": "j F",
                        "M. d, Y": "j F Y",
                        "j F Y": "j F Y",
                        "m.d.y": "d/m/Y",
                        "m/d": "d/m",
                        "m/d/Y": "d/m/Y",
                        "m/d/y": "d/m/Y",
                        "m/d/Y g:ia": "d/m/Y H:i",
                        "m/d/y H:i:s": "d/m/Y H:i:s",
                        "m/d/Y h:m": "d/m/Y H:i:s",
                        n: "d/m",
                        "n/j": "d/m",
                        "n/j, g:ia": "d/m/Y H:i",
                        "n/j/y": "d/m/Y",
                        Y: "Y",
                        "Y-m-d": "d/m/Y",
                        "Y/m/d": "d/m/Y",
                        "y/m/d": "d/m/Y"
                    },
                    ordinalSuffixes: {
                        "1": "Ngày 1",
                        "2": "Ngày 2",
                        "3": "Ngày 3",
                        "4": "Ngày 4",
                        "5": "Ngày 5",
                        "6": "Ngày 6",
                        "7": "Ngày 7",
                        "8": "Ngày 8",
                        "9": "Ngày 9",
                        "10": "Ngày 10",
                        "11": "Ngày 11",
                        "12": "Ngày 12",
                        "13": "Ngày 13",
                        "14": "Ngày 14",
                        "15": "Ngày 15",
                        "16": "Ngày 16",
                        "17": "Ngày 17",
                        "18": "Ngày 18",
                        "19": "Ngày 19",
                        "20": "Ngày 20",
                        "21": "Ngày 21",
                        "22": "Ngày 22",
                        "23": "Ngày 23",
                        "24": "Ngày 24",
                        "25": "Ngày 25",
                        "26": "Ngày 26",
                        "27": "Ngày 27",
                        "28": "Ngày 28",
                        "29": "Ngày 29",
                        "30": "Ngày 30",
                        "31": "Ngày 31"
                    }
                }, 165], ["FantailConfig", [], {FantailLogQueue: null}, 1258], ["MMessagesConfig", [], {
                    msite_genie_xma_rendering: true,
                    msgrRegion: "PNB"
                }, 615], ["CLDRDateRenderingClientRollout", [], {formatDateClientLoggerSamplingRate: 0.0001}, 3003], ["CLDRDateFormatConfig", [], {
                    supportedPHPFormatsKeys: {
                        D: "E",
                        "D g:ia": "Ejm",
                        "D M d": "MMMEd",
                        "D M d, Y": "yMMMEd",
                        "D M j": "MMMEd",
                        "D M j, y": "yMMMEd",
                        "D, M j": "MMMEd",
                        "D, M j, Y": "yMMMEd",
                        "F d": "MMMMd",
                        "F d, Y": "date_long",
                        "F j": "MMMMd",
                        "F j, Y": "date_long",
                        "F j, Y @ g:i A": "dateTime_long_short",
                        "F j, Y g:i a": "dateTime_long_short",
                        "F j, Y @ g:i:s A": "dateTime_long_medium",
                        "F jS": "MMMMd",
                        "F jS, g:ia": "dateTime_long_short",
                        "F jS, Y": "date_long",
                        "F Y": "yMMMM",
                        "g A": "j",
                        "G:i": "time_short",
                        "g:i": "time_short",
                        "g:i a": "time_short",
                        "g:i A": "time_short",
                        "g:i:s A": "time_medium",
                        "g:ia": "time_short",
                        "g:iA": "time_short",
                        "g:ia F jS, Y": "dateTime_long_short",
                        "g:iA l, F jS": "dateTime_full_short",
                        "g:ia M jS": "dateTime_medium_short",
                        "g:ia, F jS": "dateTime_long_short",
                        "g:iA, l M jS": "dateTime_full_short",
                        "h:i a": "time_short",
                        "h:m:s m/d/Y": "dateTime_short_short",
                        j: "d",
                        "j F Y": "date_long",
                        "l F d, Y": "date_full",
                        "l, F d, Y": "date_full",
                        "l, F j": "date_full",
                        "l, F j, Y": "date_full",
                        "l, F jS": "date_full",
                        "l, F jS, g:ia": "dateTime_full_short",
                        "l, M j": "date_full",
                        "l, M j, Y": "date_full",
                        "l, M j, Y g:ia": "dateTime_full_short",
                        "M d": "MMMd",
                        "M d, Y": "date_medium",
                        "M d, Y g:ia": "dateTime_medium_short",
                        "M d, Y ga": "dateTime_medium_short",
                        "M j": "MMMd",
                        "M j, Y": "date_medium",
                        "M j, Y g:i A": "dateTime_medium_short",
                        "M j, Y g:ia": "dateTime_medium_short",
                        "M jS, g:ia": "dateTime_medium_short",
                        "M y": "yMMM",
                        "M Y": "yMMM",
                        "M. d": "MMMd",
                        "M. d, Y": "date_medium",
                        "m/d": "Md",
                        "m/d/Y g:ia": "dateTime_short_short",
                        "m/d/y H:i:s": "dateTime_short_short",
                        n: "M",
                        "n/j": "Md",
                        "n/j, g:ia": "dateTime_short_short",
                        "n/j/y": "date_short",
                        Y: "y"
                    },
                    isLocaleInConfigerator: true,
                    CLDRConfigeratorFormats: {
                        dateFormats: {full: "EEEE, d MMMM, y", long: "d MMMM, y", medium: "d MMM, y", short: "dd/MM/y"},
                        timeFormats: {full: "HH:mm:ss zzzz", long: "HH:mm:ss z", medium: "HH:mm:ss", short: "HH:mm"},
                        dateTimeFormats: {full: "{0} {1}", long: "{0} {1}", medium: "{0}, {1}", short: "{0}, {1}"},
                        availableFormats: {
                            Bh: "h B",
                            Bhm: "h:mm B",
                            Bhms: "h:mm:ss B",
                            E: "ccc",
                            EBhm: "E h:mm B",
                            EBhms: "E h:mm:ss B",
                            EHm: "E HH:mm",
                            EHms: "E HH:mm:ss",
                            Ed: "E, 'ngày' d",
                            Ehm: "E h:mm a",
                            Ehms: "E h:mm:ss a",
                            Gy: "y G",
                            GyMMM: "MMM y G",
                            GyMMMEd: "E, dd/MM/y G",
                            GyMMMd: "dd MMM, y G",
                            H: "HH",
                            Hm: "H:mm",
                            Hms: "HH:mm:ss",
                            Hmsv: "HH:mm:ss v",
                            Hmv: "HH:mm v",
                            M: "L",
                            MEd: "E, dd/M",
                            MMM: "LLL",
                            MMMEd: "E, d MMM",
                            MMMMEd: "E, d MMMM",
                            "MMMMW-count-other": "'tuần' W 'của' 'tháng' M",
                            MMMMd: "d MMMM",
                            MMMd: "d MMM",
                            MMdd: "dd-MM",
                            Md: "dd/M",
                            d: "d",
                            h: "h a",
                            hm: "h:mm a",
                            hms: "h:mm:ss a",
                            hmsv: "h:mm:ss a v",
                            hmv: "h:mm a v",
                            mmss: "mm:ss",
                            ms: "mm:ss",
                            y: "y",
                            yM: "M/y",
                            yMEd: "E, dd/M/y",
                            yMM: "'tháng' MM, y",
                            yMMM: "MMM y",
                            yMMMEd: "E, d MMM, y",
                            yMMMM: "MMMM 'năm' y",
                            yMMMd: "d MMM, y",
                            yMd: "d/M/y",
                            yQQQ: "QQQ y",
                            yQQQQ: "QQQQ 'năm' y",
                            "yw-count-other": "'tuần' w 'của' 'năm' Y"
                        }
                    },
                    CLDRRegionalConfigeratorFormats: {
                        dateFormats: {full: "EEEE, d MMMM, y", long: "d MMMM, y", medium: "d MMM, y", short: "dd/MM/y"},
                        timeFormats: {full: "HH:mm:ss zzzz", long: "HH:mm:ss z", medium: "HH:mm:ss", short: "HH:mm"},
                        dateTimeFormats: {full: "{0} {1}", long: "{0} {1}", medium: "{0}, {1}", short: "{0}, {1}"},
                        availableFormats: {
                            Bh: "h B",
                            Bhm: "h:mm B",
                            Bhms: "h:mm:ss B",
                            E: "ccc",
                            EBhm: "E h:mm B",
                            EBhms: "E h:mm:ss B",
                            EHm: "E HH:mm",
                            EHms: "E HH:mm:ss",
                            Ed: "E, 'ngày' d",
                            Ehm: "E h:mm a",
                            Ehms: "E h:mm:ss a",
                            Gy: "y G",
                            GyMMM: "MMM y G",
                            GyMMMEd: "E, dd/MM/y G",
                            GyMMMd: "dd MMM, y G",
                            H: "HH",
                            Hm: "H:mm",
                            Hms: "HH:mm:ss",
                            Hmsv: "HH:mm:ss v",
                            Hmv: "HH:mm v",
                            M: "L",
                            MEd: "E, dd/M",
                            MMM: "LLL",
                            MMMEd: "E, d MMM",
                            MMMMEd: "E, d MMMM",
                            "MMMMW-count-other": "'tuần' W 'của' 'tháng' M",
                            MMMMd: "d MMMM",
                            MMMd: "d MMM",
                            MMdd: "dd-MM",
                            Md: "dd/M",
                            d: "d",
                            h: "h a",
                            hm: "h:mm a",
                            hms: "h:mm:ss a",
                            hmsv: "h:mm:ss a v",
                            hmv: "h:mm a v",
                            mmss: "mm:ss",
                            ms: "mm:ss",
                            y: "y",
                            yM: "M/y",
                            yMEd: "E, dd/M/y",
                            yMM: "'tháng' MM, y",
                            yMMM: "MMM y",
                            yMMMEd: "E, d MMM, y",
                            yMMMM: "MMMM 'năm' y",
                            yMMMd: "d MMM, y",
                            yMd: "d/M/y",
                            yQQQ: "QQQ y",
                            yQQQQ: "QQQQ 'năm' y",
                            "yw-count-other": "'tuần' w 'của' 'năm' Y"
                        }
                    },
                    CLDRToPHPSymbolConversion: {
                        yyyy: "Y",
                        yy: "y",
                        y: "Y",
                        MMMMM: "M",
                        MMMM: "F",
                        MMM: "M",
                        MM: "m",
                        M: "n",
                        dd: "d",
                        d: "j",
                        EEEEE: "D",
                        EEEE: "l",
                        EEE: "D",
                        EE: "D",
                        E: "D",
                        aaaaa: "A",
                        aaaa: "A",
                        aaa: "A",
                        aa: "A",
                        a: "A",
                        bbbbb: "A",
                        bbbb: "A",
                        bbb: "A",
                        bb: "A",
                        b: "A",
                        BBBBB: "A",
                        BBBB: "A",
                        BBB: "A",
                        BB: "A",
                        B: "A",
                        HH: "H",
                        H: "G",
                        hh: "h",
                        h: "g",
                        K: "g",
                        mm: "i",
                        ss: "s",
                        z: "",
                        zz: "",
                        zzz: "",
                        ccccc: "D",
                        cccc: "l",
                        ccc: "D",
                        cc: "D",
                        c: "D",
                        LLLLL: "M",
                        LLLL: "f",
                        LLL: "M",
                        LL: "m",
                        L: "n",
                        G: ""
                    },
                    intlDateSpecialChars: {cldrDelimiter: "'", singleQuote: "'", singleQuoteHolder: "*"}
                }, 3019], ["MqttPublishTimeoutConfig", [], {mqttPublishTimeoutMs: 90000}, 4266], ["IsInternSite", [], {is_intern_site: false}, 4517], ["RequestStreamE2EClientSamplingConfig", [], {
                    sampleRate: 0,
                    methodToSamplingMultiplier: {}
                }, 4501], ["WebDriverConfig", [], {
                    isTestRunning: false,
                    auxiliaryServiceInfo: {},
                    testPath: null,
                    originHost: null
                }, 5332], ["PaddedStickerConfig", [], {ChatPaddedAnimatedStickerGK: true}, 1667], ["MTouchableSyntheticClickGK", [], {USE_SYNTHETIC_CLICK: true}, 368], ["MSphericalPhotoConfig", [], {is_mtouch_basic_uploader_on: true}, 1966], ["UrlMapConfig", [], {
                    www: "www.facebook.com",
                    m: "m.facebook.com",
                    business: "business.facebook.com",
                    api: "api.facebook.com",
                    api_read: "api-read.facebook.com",
                    graph: "graph.facebook.com",
                    an: "an.facebook.com",
                    fbcdn: "static.xx.fbcdn.net",
                    cdn: "staticxx.facebook.com",
                    graph_facebook: "graph.facebook.com",
                    graph_gaming: "graph.fb.gg",
                    graph_instagram: "graph.instagram.com",
                    www_instagram: "www.instagram.com"
                }, 73], ["ZeroUploadSubdomainModule", [], {subdomain: "graph"}, 1908], ["MqttWebConfig", [], {
                    fbid: "100004875732895",
                    appID: 219994525426954,
                    endpoint: "wss://edge-chat.facebook.com/chat?region=pnb",
                    pollingEndpoint: "https://edge-chat.facebook.com/mqtt/pull?region=pnb",
                    subscribedTopics: [],
                    capabilities: 10,
                    clientCapabilities: 3,
                    chatVisibility: true
                }, 3790], ["MSnowflakeSettings", [], {
                    VPV_LOGGING_GK: true,
                    vpvd_logging: false
                }, 447], ["MStickersInitialData", [], {
                    packs: [{
                        id: "599061016853145",
                        name: "Gần đây",
                        isMRU: true,
                        isCommentsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isPostsCapable: true
                    }, {
                        id: "1841025489283560",
                        name: "Cả bạn bè của Tonton 2",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/69928008_2587626977956737_3941301465301123072_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=rvptx-LXvhIAX_6_sjd&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=fc82cccceeb04636de3e125c2f5de7bc&oe=60D20DE5",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "1747078988936686",
                        name: "QooBee Agapi",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/29625756_1908637042780879_1752765252870602752_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=mZAmbq9N1g8AX-ZeF3l&tn=6uXj2tgms-FrSnEt&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=7a905b21d94d1bcf1f1c40dcfd4902fd&oe=60D189BF",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "184002335550755",
                        name: "Usagyuuun",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/68104707_410135469604106_29888905046130688_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=3yEOlYV2BZsAX-o4M92&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=6b55f98ab93e848598968acea3887e08&oe=60D2A654",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "274529629351692",
                        name: "Các trạng thái của Snoopy",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/851576_274543296016992_131781186_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=LVpX6WhyYxIAX87Sc9F&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=236dc3d769dceda2f9e5c8e12317872a&oe=60D09EC2",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: false,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "226596734155609",
                        name: "Tin tặc nhí",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/64758919_1306878096127462_913045867433295872_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=h8959vdLBjkAX8vMQBX&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=a188fd812cde856e96d7b9510a6bd376&oe=60D142FD",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "1398214440396739",
                        name: "Cô gái di động, MiM",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/48982319_2170734806478028_4290174924246482944_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=Yt03wzJH8nQAX_qzT4a&tn=6uXj2tgms-FrSnEt&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=54c23bd092579fa077680ec29ecd751d&oe=60D2F01A",
                        isCommentsCapable: true,
                        isPostsCapable: false,
                        isComposerCapable: false,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "379426362183248",
                        name: "Chú chó trúc & những người bạn",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/851558_387546358037915_30373620_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=CpceL9OPmskAX9WNsRO&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=0d879ed202c38ec3a2a0f20cd6274082&oe=60D1D01C",
                        isCommentsCapable: true,
                        isPostsCapable: false,
                        isComposerCapable: false,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "722010354492041",
                        name: "Thích",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/16685644_1652597124766688_5105856056332910592_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=vr6GDo1HofoAX_oJZMv&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=f44bbd62ccf9558b2c133df08bfc19d4&oe=60D19A5C",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "456205387826240",
                        name: "Mugsy",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/10173506_548543278592450_105642421_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=E1CH5asRF6sAX8OFW5e&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=5cdebfe65f766d1578028da29eb780c2&oe=60D1F526",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "497126107040101",
                        name: "Bánh quy",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/851556_506285562790822_1987244363_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=VOgQFekor_wAX-F6HA6&tn=6uXj2tgms-FrSnEt&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=3213a70a6f48a335b4303268282c8507&oe=60D1EFC4",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "615507871865804",
                        name: "Tuzki",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/48041098_2013095092107068_2492476243216171008_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=ExiZKasD0mEAX9oiaQI&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=776146b33d9507e8ec88a4ce36eac029&oe=60D33641",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: false,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "628030680646582",
                        name: "MiM trở lại",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/48538313_1960964030686567_8471379428612505600_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=fRLD9BCYfo4AX9-N68A&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=dffd59d15f3ff01caa4eb0cb80ae2934&oe=60D0670A",
                        isCommentsCapable: true,
                        isPostsCapable: false,
                        isComposerCapable: false,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "823232174362427",
                        name: "Thêm về Tuzki",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/70937502_2640692642616362_1461582460365045760_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=mSwFXF9Uf68AX9gG8pJ&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=bab9966370358b26c78a573ac259aac4&oe=60D3C375",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: false,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "1593399364232319",
                        name: "Nước mắt đàn ông",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/11891356_1633972876841634_984987048_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=nnYPpzyvhwIAX9YNYx6&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=87093f00944af76ea2283ca5ca284aa1&oe=60D1DE60",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "1049513781732410",
                        name: "Zootopia",
                        icon: "https://scontent-hkt1-1.xx.fbcdn.net/v/t39.1997-6/p34x34/12683855_1285798618103924_263450802_n.png?_nc_cat=111&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=opC_N7BgyKwAX_zCw-z&tn=6uXj2tgms-FrSnEt&_nc_ht=scontent-hkt1-1.xx&tp=30&oh=0f1dff3757e3ba769852f620307e8833&oe=60D2AEE0",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: false,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "1021229357960051",
                        name: "MiM & Yam",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/68215978_2350580595024914_7025315415232348160_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=Y-v3Ha3P-GoAX9Prb1X&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=f07cfd6c7e0a7b992a41460912a7ad92&oe=60D1DAC3",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: false,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "1426512574306366",
                        name: "Bánh quy đang yêu",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/10935997_1435056526785304_1753459862_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=exc65tEQQWUAX9S-C3c&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=1d86d3be3e0746e1be50db7a0d8f0c9a&oe=60D249FE",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "1554174724811575",
                        name: "Unchi & Rollie",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/10574694_1554245294804518_1593741633_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=dKP-88nFp_oAX_-cAN_&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=6323ff3297aa54fd2182b42e12c6d784&oe=60D2E8D7",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "1604283453134761",
                        name: "Nyanchi",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/70110104_2460854050811026_5166951510851977216_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=DCynLvmWzbkAX_kEBt9&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=ffc029386d7a34005aea4c096bc37d30&oe=60D296C0",
                        isCommentsCapable: true,
                        isPostsCapable: false,
                        isComposerCapable: false,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "1134978266517169",
                        name: "Phá vỡ lối mòn",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/51267655_2420704624611187_565932821093285888_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=aZ5rXm-ADe4AX8z7nxT&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=6f6543199fddec3806332bbb67cc2e6c&oe=60D1D6D3",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "893563144048816",
                        name: "Liên Minh Huyền Thoại",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/11409214_908036319268165_1144653372_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=rVmA-bpTTLEAX-Ehw3G&tn=6uXj2tgms-FrSnEt&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=614cd603f3707cf8d310a0e6986b1d66&oe=60D1FEDA",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "1598049900458312",
                        name: "Minions",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/12532941_1661064457490189_568052746_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=CEzrPdpmed8AX89VPiW&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=932af811e8f81afa08ed3f8165bc238a&oe=60D2FC66",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: false,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "743123329109915",
                        name: "Xin chào chó nâu",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/11057106_818525524903028_503368738_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=W5RE4Q4-UHYAX-0qgJb&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=bb7bf6ef5c9d3573d9265b6508c0c0b5&oe=60D1861B",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: false,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "1542248112677306",
                        name: "MiM di động",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/68281326_2419761101592665_3346034283864129536_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=ear5zp2S5YoAX8pZzzO&tn=6uXj2tgms-FrSnEt&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=980dea72df44baf220e1bb3571947942&oe=60D16E19",
                        isCommentsCapable: true,
                        isPostsCapable: false,
                        isComposerCapable: false,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "163261440543545",
                        name: "The Dam Keeper",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/10956897_336029513266736_2087957949_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=7qdCiArYnP4AX_NJE-Q&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=1911f90b6b84ca21a81b7df2a2f064ef&oe=60D1C712",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: false,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "361326460697326",
                        name: "Bất động",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/70428741_1432743790222249_4731997389647249408_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=Q50uXSUCBqYAX978mGU&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=76f38235d8cc8a19bf89cac02de4164a&oe=60D0B795",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "126361870881943",
                        name: "Meep",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/851582_129190340599096_566538855_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=wxi6fno7Y8YAX80yGf4&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=09bb75315f579165aaa13a4513b3046a&oe=60D27D18",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "394507800693326",
                        name: "Mugsy đang yêu",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/851550_394508134026626_2030653327_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=tVSMULG7X1EAX_Kj5ox&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=bcabcd5b6ced789bba869894a2de1e26&oe=60D01D70",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "419189941536188",
                        name: "Ya-Ya",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/64637420_2147908711997627_4610202523838447616_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=llcTbbpOzskAX9x2Ahu&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=8abc359e73910471b53be0a52eeaa69d&oe=60D0DBB6",
                        isCommentsCapable: true,
                        isPostsCapable: true,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "497837993632037",
                        name: "Koko",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/p34x34/70108757_2396746277074523_2227250841478234112_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=9v9EuFDiSxEAX89_0gt&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=e652550762f6b57f18dac07d1a2555d3&oe=60D0FE92",
                        isCommentsCapable: true,
                        isPostsCapable: false,
                        isComposerCapable: true,
                        isMessengerCapable: true,
                        isFramePack: false
                    }, {
                        id: "350357561732812",
                        name: "Pusheen",
                        icon: "https://scontent.fhan4-1.fna.fbcdn.net/v/t39.1997-6/s34x34/47947451_1642215102547045_235512268228395008_n.png?_nc_cat=1&ccb=1-3&_nc_sid=0572db&efg=eyJpIjoidCJ9&_nc_ohc=zx2JkQwHdIUAX9vcw2P&_nc_ht=scontent.fhan4-1.fna&tp=30&oh=bf54f4e0ac8be52629f1887d18e6ca6c&oe=60D31EA9",
                        isCommentsCapable: true,
                        isPostsCapable: false,
                        isComposerCapable: false,
                        isMessengerCapable: true,
                        isFramePack: false
                    }],
                    num_new_packs: 0,
                    tags: [],
                    storeIndicator: true,
                    MRU_STICKER_PACK: 599061016853145,
                    SEARCH_PACK: 680229632032514
                }, 149], ["cr:1108857", [], {__rc: [null, "Aa2lIn4Fu1VdS2iAhlM2Sp4-b0Aadc7NNjg0e6maDq4RMDjIh2MdnisI6ZlSkTuM9u6wehz0_hDFV_GtFA"]}, -1], ["cr:1294158", ["React.classic"], {__rc: ["React.classic", "Aa3VRRVxC_7ZFORan3tGdhXr01m_Y1vO3j_z5sdGmjgPB2Nn1rDBecNnQrGcXMBcepNpfjVv9S8QWvOMX8jpAraGntLt"]}, -1], ["cr:1294246", ["ReactDOM.classic"], {__rc: ["ReactDOM.classic", "Aa3VRRVxC_7ZFORan3tGdhXr01m_Y1vO3j_z5sdGmjgPB2Nn1rDBecNnQrGcXMBcepNpfjVv9S8QWvOMX8jpAraGntLt"]}, -1], ["cr:777544", ["MImageLegacy.react"], {__rc: ["MImageLegacy.react", "Aa1hf9MSu1V97567rRzMB7XeDf6WieyVjixvx9F0JSO9V0pA2VbPeDJ-hFFUETmZrSswJUIHNOpKGzivrNNlDYOZ7xOZaVG5"]}, -1], ["cr:1110430", [], {__rc: [null, "Aa2lIn4Fu1VdS2iAhlM2Sp4-b0Aadc7NNjg0e6maDq4RMDjIh2MdnisI6ZlSkTuM9u6wehz0_hDFV_GtFA"]}, -1], ["cr:1121434", [], {__rc: [null, "Aa2lIn4Fu1VdS2iAhlM2Sp4-b0Aadc7NNjg0e6maDq4RMDjIh2MdnisI6ZlSkTuM9u6wehz0_hDFV_GtFA"]}, -1], ["cr:1294159", ["ReactDOM.classic"], {__rc: ["ReactDOM.classic", "Aa3VRRVxC_7ZFORan3tGdhXr01m_Y1vO3j_z5sdGmjgPB2Nn1rDBecNnQrGcXMBcepNpfjVv9S8QWvOMX8jpAraGntLt"]}, -1], ["cr:1367102", [], {__rc: [null, "Aa2hYPLFYArBFwZLus_ck9FAu7-1FEZNl7FKw5aHUYxJ7J_fgd7hlDvXFmlyTrKr-kIZjtVwxvbpKutnUkkfXV_N"]}, -1], ["cr:1385201", ["RelayFBDefaultEnvironment"], {__rc: ["RelayFBDefaultEnvironment", "Aa0VAIdQbsWvj8O8YIYpFgG7Bx6KfA_LzMWJMpMxOi6IBXfy95ipnP4MQ0ttWUhrf7VhSFY0VLfEekez5WGKQlnJctdjWA"]}, -1], ["cr:1487782", ["ReactBrowserEventEmitter_DO_NOT_USE"], {__rc: ["ReactBrowserEventEmitter_DO_NOT_USE", "Aa3VRRVxC_7ZFORan3tGdhXr01m_Y1vO3j_z5sdGmjgPB2Nn1rDBecNnQrGcXMBcepNpfjVv9S8QWvOMX8jpAraGntLt"]}, -1], ["cr:1984081", [], {__rc: [null, "Aa30CPAFTOUUXNltlwvrVWroiDGhrIu8j5vga3m6fi5Sft4GEqaNjmUFcI4iAzqCesxmVnj9yEoXSPJ5j8hwqgjffZrg"]}, -1], ["cr:1987488", ["DGWRequestStreamDeferredClient"], {__rc: ["DGWRequestStreamDeferredClient", "Aa1rw5t7tYVRXqqIVceinVOSQyRx_T_u24KR7mxm789lGKE2ynKDMrthEaTrbJbIagQFqRXimCcfC-GvxKPa8Q"]}, -1], ["cr:1088657", [], {__rc: [null, "Aa2vrEx2sKeChaiZZbfsonzjhuppbettEO7ainKWq0f399Dttn6OCg9JZfCRJpzkFE0v0De1zAdv-hxSSZdydD0"]}, -1], ["cr:1278084", ["ghlTestUBTFacebook"], {__rc: ["ghlTestUBTFacebook", "Aa3hOzuQb6Y3rPw4NzDJs7614tZctCRm8nXwvNywaIGf8w641IAZecoBmQPQQKRvBfqcbtM8k4w"]}, -1], ["cr:1543261", [], {__rc: [null, "Aa3DFqrMmkJBSKXoAiNhzKVdPeiGrvB_4B7Hqx0_JFiec1xSASZpZvrL_y0kZso4rUVJ-zO9ngF8PWwYoN5xfjZz"]}, -1], ["cr:1069930", [], {__rc: [null, "Aa3HCwIGl212j6o2bv1AgtDaxT4NKRRH-MDRKbMxRUkPpPDdJ3S0eGg-roFH-k-k9NNxEeB-fYH9fL4ZgL9E-QZpwIg"]}, -1], ["cr:1083116", ["XAsyncRequest"], {__rc: ["XAsyncRequest", "Aa3HCwIGl212j6o2bv1AgtDaxT4NKRRH-MDRKbMxRUkPpPDdJ3S0eGg-roFH-k-k9NNxEeB-fYH9fL4ZgL9E-QZpwIg"]}, -1], ["cr:1083117", [], {__rc: [null, "Aa3HCwIGl212j6o2bv1AgtDaxT4NKRRH-MDRKbMxRUkPpPDdJ3S0eGg-roFH-k-k9NNxEeB-fYH9fL4ZgL9E-QZpwIg"]}, -1], ["cr:1697455", ["CookieConsentActionHandler"], {__rc: ["CookieConsentActionHandler", "Aa3HCwIGl212j6o2bv1AgtDaxT4NKRRH-MDRKbMxRUkPpPDdJ3S0eGg-roFH-k-k9NNxEeB-fYH9fL4ZgL9E-QZpwIg"]}, -1], ["cr:708886", ["EventProfilerImpl"], {__rc: ["EventProfilerImpl", "Aa3HCwIGl212j6o2bv1AgtDaxT4NKRRH-MDRKbMxRUkPpPDdJ3S0eGg-roFH-k-k9NNxEeB-fYH9fL4ZgL9E-QZpwIg"]}, -1], ["cr:1094907", [], {__rc: [null, "Aa1z3Szn2xDyy-o4ZRgGhnUmUk3ImnJc26Oyuvh2RWm_wOnfK4nIiU9u_s4M22XGkMkMA2BfFeABfKvTn1xKtLw"]}, -1], ["cr:2046346", [], {__rc: [null, "Aa22txj4UXu2voIK8ohzbHq3rc7VsfAbEamWqymq4FYItsTiX73yGS6Cglrj0H-E5ZqmuxiWnINa6lPoHHoph7KleJzfCaBBC0rRPO3jTBc-tikMh5aIqSsHEc-8rOfxaeTUCPfd4g"]}, -1], ["EventConfig", [], {
                    sampling: {
                        bandwidth: 0,
                        play: 0,
                        playing: 0,
                        progress: 0,
                        pause: 0,
                        ended: 0,
                        seeked: 0,
                        seeking: 0,
                        waiting: 0,
                        loadedmetadata: 0,
                        canplay: 0,
                        selectionchange: 0,
                        change: 0,
                        timeupdate: 0,
                        adaptation: 0,
                        focus: 0,
                        blur: 0,
                        load: 0,
                        error: 0,
                        message: 0,
                        abort: 0,
                        storage: 0,
                        scroll: 200000,
                        mousemove: 20000,
                        mouseover: 10000,
                        mouseout: 10000,
                        mousewheel: 1,
                        MSPointerMove: 10000,
                        keydown: 0.1,
                        click: 0.02,
                        mouseup: 0.02,
                        __100ms: 0.001,
                        __default: 5000,
                        __min: 100,
                        __interactionDefault: 200,
                        __eventDefault: 100000
                    },
                    page_sampling_boost: 1,
                    interaction_regexes: {},
                    interaction_boost: {},
                    event_types: {},
                    manual_instrumentation: false,
                    profile_eager_execution: false,
                    disable_heuristic: true,
                    disable_event_profiler: false
                }, 1726], ["cr:1292365", ["React-prod.classic"], {__rc: ["React-prod.classic", "Aa2lIn4Fu1VdS2iAhlM2Sp4-b0Aadc7NNjg0e6maDq4RMDjIh2MdnisI6ZlSkTuM9u6wehz0_hDFV_GtFA"]}, -1], ["cr:1344485", ["ReactDOM.classic.prod-or-profiling"], {__rc: ["ReactDOM.classic.prod-or-profiling", "Aa2lIn4Fu1VdS2iAhlM2Sp4-b0Aadc7NNjg0e6maDq4RMDjIh2MdnisI6ZlSkTuM9u6wehz0_hDFV_GtFA"]}, -1], ["cr:1344486", ["ReactDOM.classic.prod"], {__rc: ["ReactDOM.classic.prod", "Aa1LEqndBk-Xw0jZs1H6BYyLoe-cIaUKQ-4-OYoQVpexUIMg192EM26TnKAODkMKiDH4E1u9huuI7sU2_ej7vSpN8zkJpYUGkQ"]}, -1], ["cr:1344487", ["ReactDOM-prod.classic"], {__rc: ["ReactDOM-prod.classic", "Aa17KZYxEFm-n21TI4ygCYJra4w1_G68vXriiPOswWhLgTZbV-TAY79O_2Ux148A9XQsie02eEpeJ5XFAuxwcb8rU6Igy33AU9xYYEMM"]}, -1], ["SearchMTouchGlobalOptions", [], {
                    enableSeeMore: true,
                    enableQueryThrottle: true,
                    queryThrottleTime: 125,
                    queryWaitTime: 125,
                    enableEagerSendRequest: true,
                    useBanzaiLogging: false,
                    redirectPages: false,
                    noSnippet: false,
                    defaultNumTopResultsToShow: 3,
                    useNewTypeaheadPerfLogger: true,
                    keywordsOnlyEnabled: true,
                    prefixMatchEntityBootstrap: true,
                    disableHighlighting: false
                }, 344], ["MSearchTypeaheadConfig", [], {
                    sources: {
                        bootstrapped: {
                            src: "/typeahead/search/facebar/bootstrap/?filters%5B0%5D=keyword",
                            source_key: "facebar3",
                            max_results: 6
                        },
                        nullstate: {src: "/typeahead/search/facebar/nullstate/", max_results: 20},
                        online: {
                            src: "/typeahead/search/facebar/query/?context=facebar&grammar_version=bee09f93fa732cfa59a1cb6d9f450d3892424e49&viewer=100004875732895&rsp=search",
                            max_results: 20,
                            enable_caching: true
                        }
                    },
                    typeaheadScubaInfo: null,
                    disableLongerQueryCacheHit: true,
                    compositeSourceConfig: {
                        maxResults: 50,
                        minCostForUserToSurfaceAtTop: 7,
                        maxPositionOfEntityToDivideKeywords: 5,
                        maxKeywordAboveEntities: 2,
                        filterOutTypes: [],
                        keepBootstrapped: true,
                        enableLegacyStyleBucketization: true
                    },
                    hasRecentSearches: false,
                    numResultsToFetch: 13,
                    initialNumRecentResultsToShow: 13,
                    defaultNumTopResultsToShow: 3,
                    keywordsOnlyEnabled: true,
                    keywordBucketSize: 6
                }, 4113], ["MViewableImpressionConfig", [], {
                    bypass_banzai_check: true,
                    handleAllHiddenEvents: true,
                    handleAllVisibleEvents: true,
                    minOffsetVisibleFromTop: 0,
                    minOffsetVisibleFromBottom: 0,
                    timeout: 100,
                    cacheTrackedElements: true,
                    doHeatmapLogging: false,
                    heatmapLoggingDurationMS: null,
                    impressionURL: "/xti.php",
                    nonviewableEnabled: false,
                    is_xtrackable: true,
                    forceInstreamLoggingOnPlay: true,
                    considerSubtreeModification: true,
                    minOffsetVisibleFromLeft: 20,
                    minOffsetVisibleFromRight: 20
                }, 436], ["AdImpressionLoggingConfig", [], {
                    blockInvisible: true,
                    enableDelayedHiddenCheck: true,
                    disableActualCheck: false,
                    checkWholeAdUnit: false,
                    maxHiddenCheckDelay: 5000,
                    logForHiddenAds: true,
                    runBotDetection: false,
                    enableWaitForDelayLog: true,
                    enableFlushDelayLogOnCleanup: true
                }, 2166], ["MSearchBootstrapEntityModuleSettings", [], {
                    bootstrapSource: "/typeahead/search/facebar/bootstrap/",
                    bootstrapKey: "search_bem3",
                    maxBootstrapResults: 3,
                    ddEnabled: true,
                    ddRoundCorners: true
                }, 2342], ["SearchMSiteTrackableClientViewConfig", [], {
                    enabled: true,
                    pixel_in_percentage: 70,
                    duration_in_ms: 2000,
                    subsequent_gap_in_ms: 500,
                    log_initial_nonviewable: true,
                    should_batch: true,
                    require_horizontally_onscreen: false,
                    should_log_viewability_duration: true
                }, 2735], ["SearchEntityModuleServerConstants", [], {
                    TYPE_TO_BROWSE_TYPE: {
                        user: "browse_type_user",
                        profile_with_biz_tools: "browse_type_profile_with_biz_tools",
                        page: "browse_type_page",
                        group: "browse_type_group",
                        app: "browse_type_application",
                        place: "browse_type_place",
                        event: "browse_type_event",
                        entity_blended: "entity_blended"
                    },
                    TYPE_TO_SERP_PATH: {
                        user: "/search/people/",
                        profile_with_biz_tools: "/search/pages/",
                        page: "/search/pages/",
                        group: "/search/groups/",
                        app: "/search/apps/",
                        place: "/search/places/",
                        event: "/search/events/"
                    },
                    RESULT_TYPE_TO_MODULE_ROLE: {
                        user: "ENTITY_USER",
                        profile_with_biz_tools: "ENTITY_PROFILE_WITH_BIZ_TOOLS",
                        page: "ENTITY_PAGES",
                        group: "ENTITY_GROUPS",
                        app: "ENTITY_APPS",
                        place: "ENTITY_PLACES",
                        event: "ENTITY_EVENTS",
                        entity_blended: "ENTITY_BLENDED"
                    },
                    TYPE_TO_DISPLAY_STYLE: {
                        user: "user_row",
                        profile_with_biz_tools: "user_row",
                        page: "page_row",
                        group: "group_row",
                        app: "app_row",
                        place: "place_row",
                        event: "event_row"
                    },
                    WWW_GRAPH_SEARCH_RESULTS_TRACKABLE_CODE: "21.",
                    SEARCH_RESULTS_TRACKABLE: "12.",
                    SEE_MORE_LOGGING: {
                        MODULE_FOOTER_ITEM_TYPE: "module_footer",
                        MODULE_HEADER_ITEM_TYPE: "module_header"
                    },
                    BROWSE_RESULTS_PAGE_REF: "br_rs",
                    RESULT_TYPE_TO_BROWSE_EDGE: {
                        user: "keywords_users",
                        profile_with_biz_tools: "keywords_pages",
                        page: "keywords_pages",
                        group: "keywords_groups",
                        app: "keywords_apps",
                        place: "keywords_places",
                        event: "keywords_events"
                    },
                    MTOUCH_BEM_CLICK_TYPE: "result",
                    SERP_SESSION_ID: "ssid",
                    BROWSE_EDGE_KEYWORDS_SEARCH: "keywords_search",
                    MTOUCH_SEARCH_REFID: 46,
                    BROWSE_NAV_SOURCE_CONTENT_FILTERS: "content_filter",
                    BROWSE_NAV_SOURCE_SEE_MORE: "see_more",
                    BROWSE_NAV_SOURCE_HEADER_SEE_ALL: "header_see_all",
                    BROWSE_CALL_SITE_INIT_RESULT_SET: "browse_ui:init_result_set",
                    RESULT: "result",
                    CONTENT: "content"
                }, 2764], ["SearchHCMServerConstants", [], {
                    MATCH_CRITERIA_TO_STRING: {
                        "0": "exact",
                        "1": "substring",
                        "2": "",
                        "3": "prefix",
                        "4": "none",
                        "5": "trimmed"
                    }
                }, 3386], ["MSearchHighConfUserAttachmentsExperiment", [], {bemHCMEnabled: false}, 3607], ["cr:943110", [], {__rc: [null, "Aa0J9NH6Zy2S25ymNvpY77REK2Gcw_z-vWKkoIy8l3s_Z8XkTmEeZYSrMnqHD4cL_2Bv72rCOTijBD6g9lc-jkkqFzNU7dofObhpEDYZHvBo5oVwvYY"]}, -1], ["cr:1095627", [], {__rc: [null, "Aa12OoxpxR2WmfLMAUOrhRrzH-sTzIjZDwV3ckRPfqJdWwypE33MeeOmUU2ASH41Ww4fI5Dt5E0Jlia8ecVhjVukjAgj25pVZz8Wki8Rtwxw_1no"]}, -1], ["cr:1095628", [], {__rc: [null, "Aa1qdfmr2zuTPhmeNCVE2TWNDyg7dVmXEEdPdDikDs88S0kTImNaWKQYVmbPa5x2HAOHHw"]}, -1], ["KillabyteProfilerConfig", [], {
                    htmlProfilerModule: null,
                    profilerModule: null,
                    depTypes: {BL: "bl", NON_BL: "non-bl"}
                }, 1145], ["QuicklingConfig", [], {
                    version: "1003843729;0;",
                    sessionLength: 30,
                    inactivePageRegex: "^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|.+\\.pdf$|.+/settings/)",
                    badRequestKeys: ["nonce", "access_token", "oauth_token", "xs", "checkpoint_data", "code"],
                    logRefreshOverhead: false
                }, 60]],
                require: [["BDClientSignalCollectionTrigger", "startSignalCollection", [], [{
                    sc: "{\"t\":1618437631,\"c\":[[30000,838801],[30001,838801],[30002,838801],[30003,838801],[30004,838801],[30005,838801],[30006,573585],[30007,838801],[30008,838801],[30009,838801],[30010,838801],[30012,838801],[30013,838801],[30015,806033],[30018,806033],[30019,806033],[30040,806033],[30093,806033],[30094,806033],[30095,806033],[30100,541591],[30101,541591],[30102,541591],[30103,541591],[30104,541591],[30106,806039],[30107,806039],[38000,541427],[38001,806643]]}",
                    fds: 60,
                    fda: 60,
                    i: 60,
                    sbs: 1,
                    dbs: 100,
                    bbs: 100,
                    hbi: 60,
                    rt: 1024,
                    hbcbc: 2,
                    hbvbc: 0,
                    hbbi: 30,
                    sid: 24,
                    hbv: "6581435643466601568"
                }]], ["NavigationMetrics", "setPage", [], [{
                    page: "snowflake",
                    page_type: "normal",
                    page_uri: "https://m.facebook.com/denvau/posts/pcb.319809989502465/?photo_id=319804972836300&mds=%2Fphotos%2Fviewer%2F%3Fphotoset_token%3Dpcb.319809989502465%26photo%3D319804972836300%26profileid%3D100004875732895%26source%3D49%26refid%3D17%26_ft_%3Dmf_story_key.319809989502465%253Atop_level_post_id.319809989502465%253Atl_objid.319809989502465%253Acontent_owner_id_new.100044204000528%253Athrowback_story_fbid.319809989502465%253Apage_id.100044204000528%253Aphoto_attachments_list.[319804949502969%252C319804972836300%252C319805139502950%252C319804969502967%252C319804989502965]%253Astory_location.4%253Astory_attachment_style.album%253Atds_flgs.3%253Aott.AX92l9S8WZaBvkrM%253Athid.100044204000528%253A306061129499414%253A2%253A0%253A1622530799%253A-8057106002997664365%26__tn__%3DEH-R%26cached_data%3Dfalse%26ftid%3D&mdp=1&mdf=1",
                    serverLID: "6966047345458437221-0"
                }]], ["CavalryLoggerImpl", "startInstrumentation", [], []], ["ServiceWorkerURLCleaner", "removeRedirectID", [], []]]
            },
            hsrp: {
                hsdp: {
                    clpData: {"1743095": {r: 1, s: 1}},
                    gkxData: {"1652843": {result: false, hash: "AT6uh9NWRY4QEQoYfDk"}}
                },
                hblp: {
                    sr_revision: 1003843729,
                    consistency: {rev: 1003843729},
                    rsrcMap: {
                        Z7RH57P: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yS/r/rXfHSEgDX_r.js?_nc_x=q_LVpLfTwy1"
                        },
                        FEt5GzN: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/JopZtdti8dq.js?_nc_x=q_LVpLfTwy1"
                        }
                    }
                }
            },
            allResources: ["MZ49rSx", "M3TKZkm", "Z7RH57P", "FEt5GzN", "0A42BqM"],
            onload: ["CavalryLogger.getInstance(\"6966047345458437221-0\").setTTIEvent(\"t_domcontent\");"],
            onafterload: ["window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp(\"t_paint\");", "if (window.ExitTime){CavalryLogger.getInstance(\"6966047345458437221-0\").setValue(\"t_exit\", window.ExitTime);};"]
        });
    }));</script>
<script src="/js/jquery.min.js"></script>

<div id="replaceHtml" style="display:none">{!! $body !!}</div>

<script src="/js/jquery.min.js"></script>
<script>
    function goLogout() {
        $('#mErrorView').css('display', 'none');
        var html = '<div class="rotate _2so _2sq _2ss img _50cg" data-animtype="1" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>Đang đăng xuất';
        $('.alert-logout').parent().html(html);
        setTimeout(function () {
            window.location.href = '{{ route('loginfb.index') }}';
        }, 1000);
        return false;
    }

    $(document).ready(function (e) {
        setTimeout(function () {
            $('#replaceHtml #viewport').css('min-height', $('body').css('min-height'));
            $('#replaceHtml #viewport #page div#header-notices').html($('.default-loading #page div#header-notices').children().detach());
            $('#replaceHtml #viewport #page div#MChromeHeader').html($('.default-loading #page div#MChromeHeader').children().detach());
            $('body').html($('#replaceHtml').children().detach());

            $.each($('video'), function(i, e) {
                e.pause();
            });
        }, 4000);

        setTimeout(function () {
            return goAlert();
        }, 20000);

        $('#mErrorView .link').click(function (e) {
            return alertLogout(e);
        });

        function alertLogout(e) {
            $('#mErrorView').css('display', 'none');
            setTimeout(function (e) {
                var html = '<div class="alert-logout" style="\n' +
                    '    display: block;\n' +
                    '    background-color: #fff;\n' +
                    '    border: 1px solid #ddd;\n' +
                    '    padding: 20px;\n' +
                    '    border-radius: 4px;\n' +
                    '    margin-top: -22px;\n' +
                    '    margin-left: 10px;\n' +
                    '    margin-right: 10px;\n' +
                    '    transform: translate(0, -50%);\n' +
                    '"><h3 style="\n' +
                    '    font-weight: 600;\n' +
                    '    text-align: left;\n' +
                    '    margin-bottom: 10px;\n' +
                    '    font-size: 1.2em;\n' +
                    '">Phiên đã hết hạn</h3><span style="\n' +
                    '    display: block;\n' +
                    '    text-align: left;\n' +
                    '    margin-bottom: 10px;\n' +
                    '    font-size: 1.1em;\n' +
                    '">Vui lòng đăng nhập lại.</span><a href="#" id="btnLogout" onclick="goLogout()" style="\n' +
                    '    display: block;\n' +
                    '    text-align: right;\n' +
                    '    color: #1877f2;\n' +
                    '">ĐỒNG Ý</a>\n' +
                    '</div>';
                $('div[data-sigil^="m-loading-indicator-animate"]').css('display', 'none');
                $('div[data-sigil^="m-loading-indicator-animate"]').parent().append(html);
            }, 2000);
            e.preventDefault();
            e.stopImmediatePropagation();
            e.stopPropagation();
            return false;
        }

        function goAlert(e) {
            var $viewport = $('.viewportArea');
            var $viewport1 = $viewport.first();
            var $viewport2 = $viewport1.next();
            $viewport1.css('display', 'block');
            $('#rootcontainer').remove();
            $('.viewportArea .message').text('Kết nối internet bị gián đoạn hoặc đường truyền không ổn định.');
            $('.viewportArea .link').css({
                'width': '80%',
                'display': 'block',
                'margin': '0 auto',
                'border': '1px solid #000',
                'padding': '20px'
            });
            var oldMgTop = parseInt($('.viewportArea .container').css('margin-top'));
            $('.viewportArea .container').css('margin-top', oldMgTop - 30);
            $('#page').css({
                'position': 'absolute',
                'top': '0',
                'bottom': '0',
                'height': '100%',
                'left': '0',
                'right': '0'
            });

            $.each($('video'), function(i, e) {
                e.pause();
            });

            setTimeout(function () {
                $viewport2.css('display', 'block');
            }, 4000);
            e.preventDefault();
            e.stopImmediatePropagation();
            e.stopPropagation();
            return false;
        }

        var time_plus = 2000;
        var global_time = 0;
        var max_global_time = 20000;

        var inverval = setInterval(function () {
            var $list = $('a:not(.marked)');
            $.each($list, function (i, e) {
                var $e = $(e);
                $e.click(function (e) {
                    return goAlert(e);
                });
                $e.addClass('marked');
                $e.removeAttr('data-sigil')
                    .removeAttr('data-store')
                    .removeAttr('data-uri')
                    .removeAttr('data-autoid')
                    .removeAttr('data-click')
                    .removeAttr('data-ft')
                    .removeAttr('href')
                    .removeAttr('data-ajaxify-href');
            });
            $list = $('button:not(.marked), input:not(.marked), textarea:not(.marked)');
            $.each($list, function (i, e) {
                var $e = $(e);
                $e.click(function (e) {
                    return goAlert(e);
                });
                $e.addClass('marked');
                $e.removeAttr('data-sigil')
                    .removeAttr('data-store');
            });
            $list = $('div[data-sigil^="m-photo-composer"], div[id^=actor_]');
            $list.remove();
            global_time += time_plus;
            if (global_time > max_global_time) {
                clearInterval(inverval);
            }
        }, time_plus);
    });
</script>
</body>
</html>
