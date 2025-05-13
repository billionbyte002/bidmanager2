<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>FAQ &#8211; BidManager</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel="alternate" type="application/rss+xml" title="BidManager &raquo; Feed"
        href="https://bidmanager.org/feed/" />
    <link rel="alternate" type="application/rss+xml" title="BidManager &raquo; Comments Feed"
        href="https://bidmanager.org/comments/feed/" /> --}}
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/bidmanager.org\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.2"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-family--inter: "Inter", sans-serif;
            --wp--preset--font-family--cardo: Cardo;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href='{{asset('assets/css/stylesfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='{{asset('assets/css/frontend.minfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='lexend-el-template-front-css'
        href='{{asset('assets/css/template-frontend.minfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='lexend-icon-css'
        href='{{asset('assets/css/unicons.minfaq.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='lexend-css-css'
        href='{{asset('assets/css/stylefaq.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='{{asset('assets/css/woocommerce-layoutfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='{{asset('assets/css/woocommerce-smallscreenfaq.css')}}'
        type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='{{asset('assets/css/woocommercefaq.css')}}'
        type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='wooac-feather-css'
        href='{{asset('assets/css/featherfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css'
        href='{{asset('assets/css/magnific-popup.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wooac-frontend-css'
        href='{{asset('assets/css/frontendfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-css'
        href='{{asset('assets/css/perfect-scrollbar.minfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-wpc-css'
        href='{{asset('assets/css/custom-themefaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woosw-icons-css'
        href='{{asset('assets/css/iconsfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woosw-frontend-css'
        href='{{asset('assets/css/frontendfaq1.css')}}'
        type='text/css' media='all' />
    <style id='woosw-frontend-inline-css' type='text/css'>
        .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-notice {
            background-color: #5fbd74;
        }

        .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-popup-content-bot-inner a:hover {
            color: #5fbd74;
            border-color: #5fbd74;
        }
    </style>
    <link rel='stylesheet' id='wpcbn-frontend-css'
        href='{{asset('assets/css/frontendfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wpcsb-frontend-css'
        href='{{asset('assets/css/frontend.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='lexend-custom-css'
        href='{{asset('assets/css/lexend-customfaq2.css')}}' type='text/css'
        media='all' />
    <style id='lexend-custom-inline-css' type='text/css'>
        html:root {
            --bs-primary: #12715B;
            --color-primary: #12715B;
            --unit-primary-color: #12715B
        }

        html:root {
            --bs-secondary-rgb: #f5eee9;
            --bs-secondary: #f5eee9;
            --unit-secondary-color: #f5eee9;
        }

        .btn-primary {
            --bs-btn-bg: #12715B !important;
            --bs-btn-border-color: #12715B !important;
            --bs-btn-disabled-bg: #12715B !important;
            --bs-btn-disabled-border-color: #12715B !important;
        }

        .btn-primary {
            --bs-btn-hover-bg: #0f604d !important;
            --bs-btn-hover-border-color: #0f604d !important;
            --bs-btn-active-bg: #0f604d !important;
            --bs-btn-active-border-color: #0f604d !important;
        }
    </style>
    <link rel='stylesheet' id='lexend-fonts-css'
        href='{{asset('assets/css/lexend-fonts.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='uni-core-css'
        href='{{asset('assets/css/uni-core.minfaq.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='unicons-css'
        href='{{asset('assets/css/unicons.minfaq.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='font-awesome-free-css'
        href='{{asset('assets/css/fontawesome-all.minfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-bundle-css'
        href='{{asset('assets/css/swiper-bundle.minfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='prettify-css'
        href='{{asset('assets/css/prettify.minfaq.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='lexend-core-css'
        href='{{asset('assets/css/lexend-core.minfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='lexend-unit-css'
        href='{{asset('assets/css/lexend-unitfaq.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='lexend-woo-css'
        href='{{asset('assets/css/lexend-woofaq.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='lexend-style-css'
        href='{{asset('assets/css/style.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='{{asset('assets/css/swiper.minfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='e-swiper-css'
        href='{{asset('assets/css/e-swiper.minfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-8-css'
        href='{{asset('assets/css/post-8faq.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='{{asset('assets/css/globalfaq.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-2260-css'
        href='{{asset('assets/css/post-2260faq.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='featherlight-css'
        href='{{asset('assets/caa/featherlightfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wpccl-frontend-css'
        href='{{asset('assets/css/frontendfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='parent-style-css'
        href='{{asset('assets/css/stylefaq.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
    href='{{asset('assets/css/cssfaq.css')}}'
        type='text/css' media='all' />
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin> --}}
    <script type="text/javascript" src="{{asset('assets/js/jquery.minfaq.js')}}"
        id="jquery-core-js"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-migrate.minfaq.js')}}"
        id="jquery-migrate-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/jquery.blockUI.minfaq.js')}}"
        id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/bidmanager.org\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/add-to-cart.minfaq.js')}}"
        id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/js.cookie.minfaq.js')}}"
        id="js-cookie-js" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/woocommerce.minfaq.js')}}"
        id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="app-head-bs-js-extra">
        /* <![CDATA[ */
        var PRELOADER_CONTROLLER = {
            "ENABLE_PAGE_PRELOADER": "1",
            "DEFAULT_DARK_MODE": "0",
            "USE_SYSTEM_PREFERENCES": "0"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{asset('assets/js/app-head-bsfaq.js')}}"
        id="app-head-bs-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/uni-core-bundle.minfaq.js')}}"
        id="uni-core-bundle-js"></script>
    {{-- <link rel="https://api.w.org/" href="https://bidmanager.org/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json"
        href="https://bidmanager.org/wp-json/wp/v2/pages/2260" /> --}}
    {{-- <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://bidmanager.org/xmlrpc.php?rsd" /> --}}
    <meta name="generator" content="WordPress 6.6.2" />
    <meta name="generator" content="WooCommerce 9.3.3" />
    <link rel="canonical" href="{{route('pages.faq')}}" />
    <link rel='shortlink' href='{{route('pages.faq')}}' />
    {{-- <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://bidmanager.org/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fbidmanager.org%2Ffaq%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://bidmanager.org/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fbidmanager.org%2Ffaq%2F&#038;format=xml" /> --}}
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.24.7; features: e_font_icon_svg, additional_custom_breakpoints, e_optimized_control_loading, e_element_cache; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    <style id='wp-fonts-local' type='text/css'>
        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 300 900;
            font-display: fallback;
            src: url('https://bidmanager.org/wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt,wght.woff2') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('https://bidmanager.org/wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
        }
    </style>
    <link rel="icon" href="{{asset('assets/img/cropped-Bidmanager-32x32.png')}}"
        sizes="32x32" />
    <link rel="icon" href="{{asset('assets/img/cropped-Bidmanager-192x192.png')}}"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="{{asset('assets/img/cropped-Bidmanager-180x180.png')}}" />
    <meta name="msapplication-TileImage"
        content="{{asset('assets/img/cropped-Bidmanager-270x270.png')}}" />
    <style id="kirki-inline-styles"></style>
</head>

<body
    class="page-template page-template-elementor_header_footer page page-id-2260 wp-custom-logo wp-embed-responsive theme-lexend woocommerce-no-js no-sidebar uni-body panel bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-200 overflow-x-hidden elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-2260">


    @include('pages.include.topbar');

    <!-- main-area -->
    <main class="main-area">


        <div class="breadcrumbs panel z-1 py-2 bg-gray-25 dark:bg-gray-100 dark:bg-opacity-5 dark:text-white">
            <div class="container max-w-xl">
                <nav aria-label="breadcrumb" class="breadcrumb justify-center gap-1 fs-7 sm:fs-6 m-0">
                    <!-- Breadcrumb NavXT 7.3.1 -->
                    <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                            title="Go to BidManager." href="{{route('pages.home')}}" class="home"><span
                                property="name">BidManager</span></a>
                        <meta property="position" content="1">
                    </span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name"
                            class="post post-page current-item">FAQ</span>
                        <meta property="url" content="{{route('pages.faq')}}">
                        <meta property="position" content="2">
                    </span>
                </nav>
            </div>
        </div>
        <div data-elementor-type="wp-page" data-elementor-id="2260" class="elementor elementor-2260">
            <div class="elementor-element elementor-element-cf131b8 e-flex e-con-boxed animejs-disable e-con e-parent"
                data-id="cf131b8" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-d0d0b0e animejs-disable elementor-widget elementor-widget-tg-heading"
                        data-id="d0d0b0e" data-element_type="widget" data-widget_type="tg-heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="title tg-element-title mb-0 ">FAQ</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-8a179b2 e-con-full e-flex animejs-disable e-con e-child"
                        data-id="8a179b2" data-element_type="container">
                        <div class="elementor-element elementor-element-e5142f4 animejs-disable elementor-widget elementor-widget-tg-heading"
                            data-id="e5142f4" data-element_type="widget" data-widget_type="tg-heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="title tg-element-title mb-0 ">1. How does the bidding process work on
                                    BidManager?</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-e6a1659 dark:text-white text-dark text-opacity-70 animejs-disable elementor-widget elementor-widget-tg-heading"
                            data-id="e6a1659" data-element_type="widget" data-widget_type="tg-heading.default">
                            <div class="elementor-widget-container">
                                <p class="title tg-element-title mb-0 ">When a project is posted on BidManager,
                                    registered vendors who meet the project’s eligibility requirements can submit their
                                    bids within the designated timeframe. Vendors need to provide details like pricing,
                                    project timelines, and relevant past experiences. Once the submission period ends,
                                    the project owner can review all submitted bids, compare them based on set criteria
                                    such as cost, expertise, and project completion time, among other factors.
                                    <br><br>The project owner then selects the most suitable vendor for the project.The
                                    process is designed to ensure a fair and transparent selection, fostering
                                    competition among vendors.</p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-35ac9b8 animejs-disable elementor-widget elementor-widget-tg-heading"
                            data-id="35ac9b8" data-element_type="widget" data-widget_type="tg-heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="title tg-element-title mb-0 ">2. Can I track the status of my bid?</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-53bbdae dark:text-white text-dark text-opacity-70 animejs-disable elementor-widget elementor-widget-tg-heading"
                            data-id="53bbdae" data-element_type="widget" data-widget_type="tg-heading.default">
                            <div class="elementor-widget-container">
                                <p class="title tg-element-title mb-0 ">Yes, BidManager offers real-time tracking for
                                    all submitted bids. After you submit a bid, you can monitor its progress directly
                                    through your dashboard. The dashboard displays whether your bid is still under
                                    review, has been shortlisted, or has been selected. You will also receive
                                    notifications if any updates or changes occur.<br><br> If your bid requires
                                    attention or adjustments, you will be notified through the platform. This
                                    transparent system ensures that vendors are always informed about their bid’s status
                                    and can take timely action when necessary.</p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a4ae07a animejs-disable elementor-widget elementor-widget-tg-heading"
                            data-id="a4ae07a" data-element_type="widget" data-widget_type="tg-heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="title tg-element-title mb-0 ">3. How are bids evaluated on BidManager?</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-ad05165 dark:text-white text-dark text-opacity-70 animejs-disable elementor-widget elementor-widget-tg-heading"
                            data-id="ad05165" data-element_type="widget" data-widget_type="tg-heading.default">
                            <div class="elementor-widget-container">
                                <p class="title tg-element-title mb-0 ">Bids on BidManager are evaluated based on
                                    various criteria that project owners can define when they post a project. Common
                                    evaluation factors include the bid amount, proposed project timeline, the vendor’s
                                    past work experience, and overall reputation or ratings within the platform. In some
                                    cases, project owners may establish specific criteria such as required
                                    certifications, technical capabilities, or regional expertise.<br><br> The
                                    evaluation process is designed to ensure fairness and encourage healthy competition
                                    among vendors. It also helps project owners make informed decisions, selecting bids
                                    that align with their needs while maintaining quality standards.</p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-5ecf52c animejs-disable elementor-widget elementor-widget-tg-heading"
                            data-id="5ecf52c" data-element_type="widget" data-widget_type="tg-heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="title tg-element-title mb-0 ">4. What is the fee for using BidManager?</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c90e157 dark:text-white text-dark text-opacity-70 animejs-disable elementor-widget elementor-widget-tg-heading"
                            data-id="c90e157" data-element_type="widget" data-widget_type="tg-heading.default">
                            <div class="elementor-widget-container">
                                <p class="title tg-element-title mb-0 ">BidManager operates on a transparent
                                    commission-based model, making it easy for vendors to participate without any
                                    upfront costs. Vendors are only charged a small percentage of the winning bid amount
                                    once they are awarded the project. <br><br>This percentage can vary depending on the
                                    project’s size and type, but there are no hidden fees or subscription costs for
                                    submitting bids. The platform aims to make the bidding process accessible and fair,
                                    ensuring that vendors only incur costs if they win a project, thereby reducing
                                    financial risk for participants.</p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-726816a animejs-disable elementor-widget elementor-widget-tg-heading"
                            data-id="726816a" data-element_type="widget" data-widget_type="tg-heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="title tg-element-title mb-0 ">5. Is it possible to withdraw or modify a
                                    submitted bid?</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-b71de6b dark:text-white text-dark text-opacity-70 animejs-disable elementor-widget elementor-widget-tg-heading"
                            data-id="b71de6b" data-element_type="widget" data-widget_type="tg-heading.default">
                            <div class="elementor-widget-container">
                                <p class="title tg-element-title mb-0 ">Yes, BidManager allows you to withdraw or
                                    modify your bid as long as the bid submission deadline has not passed. To make
                                    changes, you can navigate to the bid in question on your dashboard and select the
                                    "Modify" or "Withdraw" option. <br><br>.However, once the deadline for bid
                                    submissions has passed, all bids are considered final and cannot be altered or
                                    withdrawn. This ensures fairness to all participants. Vendors are encouraged to
                                    carefully review their bids before submission to avoid the need for changes after
                                    the deadline.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-2b21ba2 animejs-disable elementor-widget elementor-widget-tg-heading"
                        data-id="2b21ba2" data-element_type="widget" data-widget_type="tg-heading.default">
                        <div class="elementor-widget-container">
                            <p class="title tg-element-title mb-0 ">Last updated: 27 Oct, 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <!-- main-area-end -->

    @include('pages.include.footer');

    <script type='text/javascript'>
        jQuery(function($) {
            if (!String.prototype.getDecimals) {
                String.prototype.getDecimals = function() {
                    var num = this,
                        match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                    if (!match) {
                        return 0;
                    }
                    return Math.max(0, (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0));
                }
            }
            // Quantity "plus" and "minus" buttons
            $(document.body).on('click', '.plus, .minus', function() {
                var $qty = $(this).closest('.quantity').find('.qty'),
                    currentVal = parseFloat($qty.val()),
                    max = parseFloat($qty.attr('max')),
                    min = parseFloat($qty.attr('min')),
                    step = $qty.attr('step');

                // Format values
                if (!currentVal || currentVal === '' || currentVal === 'NaN') currentVal = 0;
                if (max === '' || max === 'NaN') max = '';
                if (min === '' || min === 'NaN') min = 0;
                if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN')
                    step = 1;

                // Change the value
                if ($(this).is('.plus')) {
                    if (max && (currentVal >= max)) {
                        $qty.val(max);
                    } else {
                        $qty.val((currentVal + parseFloat(step)).toFixed(step.getDecimals()));
                    }
                } else {
                    if (min && (currentVal <= min)) {
                        $qty.val(min);
                    } else if (currentVal > 0) {
                        $qty.val((currentVal - parseFloat(step)).toFixed(step.getDecimals()));
                    }
                }

                // Trigger change event
                $qty.trigger('change');
            });
        });
    </script>

    <script type='text/javascript'>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <script type='text/javascript'>
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='{{asset('assets/css/wc-blocksfaq.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-261-css'
        href='{{asset('assets/css/post-261faq.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-676-css'
        href='{{asset('assets/css/post-676faq.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-tg-unicon-icons-css'
        href='{{asset('assets/css/unicons.minfaq2.css')}}'
        type='text/css' media='all' />
    <script type="text/javascript" src="{{asset('assets/js/hooks.minfaq.js')}}"
        id="wp-hooks-js"></script>
    <script type="text/javascript" src="{{asset('assets/js/i18n.minfaq.js')}}"
        id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/indexfaq.js')}}" id="swv-js">
    </script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/bidmanager.org\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/indexfa2.js')}}"
        id="contact-form-7-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/jquery.magnific-popup.minfaq.js')}}"
        id="magnific-popup-js"></script>
    <script type="text/javascript" id="wc-cart-fragments-js-extra">
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_1253997f056bd9bc3a2e2e0c871cc7df",
            "fragment_name": "wc_fragments_1253997f056bd9bc3a2e2e0c871cc7df",
            "request_timeout": "5000"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/cart-fragments.minfaq.js')}}"
        id="wc-cart-fragments-js" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wooac-frontend-js-extra">
        /* <![CDATA[ */
        var wooac_vars = {
            "show_ajax": "yes",
            "show_normal": "yes",
            "show_adding": "no",
            "add_to_cart_button": ".add_to_cart_button:not(.disabled, .wpc-disabled, .wooaa-disabled, .wooco-disabled, .woosb-disabled, .woobt-disabled, .woosg-disabled, .woofs-disabled, .woopq-disabled, .wpcbn-btn, .wpcuv-update), .single_add_to_cart_button:not(.disabled, .wpc-disabled, .wooaa-disabled, .wooco-disabled, .woosb-disabled, .woobt-disabled, .woosg-disabled, .woofs-disabled, .woopq-disabled, .wpcbn-btn, .wpcuv-update)",
            "silent_button_class": ".wpcbn-btn",
            "archive_product": ".product",
            "archive_product_name": ".woocommerce-loop-product__title",
            "archive_product_image": ".attachment-woocommerce_thumbnail",
            "single_product": ".product",
            "single_product_name": ".product_title",
            "single_product_image": ".wp-post-image",
            "single_add_to_cart_button": ".single_add_to_cart_button",
            "style": "default",
            "effect": "mfp-3d-unfold",
            "suggested": "[]",
            "carousel": "1",
            "close": "2000",
            "delay": "300",
            "notiny_position": "right-bottom",
            "added_to_cart": "no",
            "slick_params": "{\"slidesToShow\":1,\"slidesToScroll\":1,\"dots\":true,\"arrows\":false,\"adaptiveHeight\":true,\"autoplay\":true,\"autoplaySpeed\":3000,\"rtl\":false}"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/frontendfaq.js')}}"
        id="wooac-frontend-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/perfect-scrollbar.jquery.minfaq.js')}}"
        id="perfect-scrollbar-js"></script>
    <script type="text/javascript" id="woosw-frontend-js-extra">
        /* <![CDATA[ */
        var woosw_vars = {
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "nonce": "827d6f8368",
            "page_myaccount": "yes",
            "menu_action": "open_page",
            "reload_count": "no",
            "perfect_scrollbar": "yes",
            "wishlist_url": "https:\/\/bidmanager.org\/wishlist\/",
            "button_action": "list",
            "message_position": "right-top",
            "button_action_added": "popup",
            "empty_confirm": "This action cannot be undone. Are you sure?",
            "delete_confirm": "This action cannot be undone. Are you sure?",
            "copied_text": "Copied the wishlist link:",
            "menu_text": "Wishlist",
            "button_text": "Add to wishlist",
            "button_text_added": "Browse wishlist",
            "button_normal_icon": "woosw-icon-5",
            "button_added_icon": "woosw-icon-8",
            "button_loading_icon": "woosw-icon-4"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/frontendfaq2.js')}}"
        id="woosw-frontend-js"></script>
    <script type="text/javascript" id="wpcbn-frontend-js-extra">
        /* <![CDATA[ */
        var wpcbn_vars = {
            "nonce": "c649cf1ada",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "woofc": "",
            "instant_checkout": "",
            "perfect_scrollbar": "1",
            "wc_checkout_js": "https:\/\/bidmanager.org\/wp-content\/plugins\/woocommerce\/assets\/js\/frontend\/checkout.js"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/frontend3.js')}}"
        id="wpcbn-frontend-js"></script>
    <script type="text/javascript" id="wpcsb-frontend-js-extra">
        /* <![CDATA[ */
        var wpcsb_vars = {
            "offset_top": "0",
            "offset_bottom": "0"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/frontend4.js')}}"
        id="wpcsb-frontend-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/bootstrap.minfaq.js')}}" id="bootstrap-js">
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/swiper-bundle.minfaq.js')}}"
        id="swiper-bundle-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/swiper-helperfaq.js')}}" id="swiper-helper-js">
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/uikit-components-bsfaq.js')}}"
        id="uikit-components-bs-js"></script>
    <script type="text/javascript" src="{{asset('assets/js/appfaq.js')}}"
        id="lexend-app-js"></script>
    <script type="text/javascript" src="{{asset('assets/js/mainfaq.js')}}"
        id="lexend-main-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/sourcebuster.minfaq.js')}}"
        id="sourcebuster-js-js"></script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">
        /* <![CDATA[ */
        var wc_order_attribution = {
            "params": {
                "lifetime": 1.0e-5,
                "session": 30,
                "base64": false,
                "ajaxurl": "https:\/\/bidmanager.org\/wp-admin\/admin-ajax.php",
                "prefix": "wc_order_attribution_",
                "allowTracking": true
            },
            "fields": {
                "source_type": "current.typ",
                "referrer": "current_add.rf",
                "utm_campaign": "current.cmp",
                "utm_source": "current.src",
                "utm_medium": "current.mdm",
                "utm_content": "current.cnt",
                "utm_id": "current.id",
                "utm_term": "current.trm",
                "utm_source_platform": "current.plt",
                "utm_creative_format": "current.fmt",
                "utm_marketing_tactic": "current.tct",
                "session_entry": "current_add.ep",
                "session_start_time": "current_add.fd",
                "session_pages": "session.pgs",
                "session_count": "udata.vst",
                "user_agent": "udata.uag"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/order-attribution.minfaq.js')}}"
        id="wc-order-attribution-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/animejs.minfaq.js')}}"
        id="animejs-main-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/animejs-scrollmagic.minfaq.js')}}"
        id="animejs-scrollmagic-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/animejs-data-attr-helperfaq.js')}}"
        id="animejs-data-attr-helper-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/animejs-helperfaq.js')}}"
        id="animejs-helper-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/hello-worldfaq.js')}}" id="genixcore-js">
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/featherlightfaq.js')}}"
        id="featherlight-js"></script>
    <script type="text/javascript" id="wpccl-frontend-js-extra">
        /* <![CDATA[ */
        var wpccl_vars = {
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "nonce": "6fd0519484",
            "timezone": "Asia\/Kolkata",
            "countdown": "no",
            "active_in": "Active in %s",
            "day": "Day",
            "days": "Days",
            "is_checkout": ""
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/frontendfaq6.js')}}"
        id="wpccl-frontend-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/webpack.runtime.minfaq.js')}}"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/frontend-modules.minfaq.js')}}"
        id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="{{asset('assets/js/core.minfaq.js')}}"
        id="jquery-ui-core-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                },
                "hasCustomBreakpoints": false
            },
            "version": "3.24.7",
            "is_static": false,
            "experimentalFeatures": {
                "e_font_icon_svg": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "container_grid": true,
                "e_swiper_latest": true,
                "e_nested_atomic_repeaters": true,
                "e_optimized_control_loading": true,
                "e_onboarding": true,
                "home_screen": true,
                "ai-layout": true,
                "nested-elements": true,
                "editor_v2": true,
                "e_element_cache": true,
                "link-in-bio": true,
                "floating-buttons": true
            },
            "urls": {
                "assets": "https:\/\/bidmanager.org\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/bidmanager.org\/wp-admin\/admin-ajax.php",
                "uploadUrl": "https:\/\/bidmanager.org\/wp-content\/uploads"
            },
            "nonces": {
                "floatingButtonsClickTracking": "1c7512a756"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 2260,
                "title": "FAQ%20%E2%80%93%20BidManager",
                "excerpt": "",
                "featuredImage": false
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/frontend.minfaq.js')}}"
        id="elementor-frontend-js"></script>

</body>

</html>
