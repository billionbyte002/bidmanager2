<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Features &#8211; BidManager</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel="alternate" type="application/rss+xml" title="BidManager &raquo; Feed"
        href="{{asset('assets/css/bidmanager.org2.txt')}}" />
    <link rel="alternate" type="application/rss+xml" title="BidManager &raquo; Comments Feed"
        href="{{asset('assets/css/bidmanager.org3.txt')}}" />
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
        href='{{asset('assets/css/styles.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='{{asset('assets/css/frontend.min2.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='lexend-el-template-front-css'
        href='{{asset('assets/css/template-frontend.min3.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='lexend-icon-css'
        href='{{asset('assets/css/unicons.min2.css?ver=1.0')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='lexend-css-css'
        href='{{asset('assets/css/style4.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='{{asset('assets/css/woocommerce-layout2.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='{{asset('assets/css/woocommerce-smallscreen2.css')}}'
        type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='{{asset('assets/css/woocommerce2.css')}}'
        type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='wooac-feather-css'
        href='{{asset('assets/css/feather.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css'
        href='{{asset('assets/css/magnific-popup2.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wooac-frontend-css'
        href='{{asset('assets/css/frontend6.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-css'
        href='{{asset('assets/css/perfect-scrollbar.min2.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-wpc-css'
        href='{{asset('assets/css/custom-theme.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woosw-icons-css'
        href='{{asset('assets/css/icons2.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woosw-frontend-css'
        href='{{asset('assets/css/frontendfeature.css')}}'
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
        href='{{asset('assets/css/frontendfeature2.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wpcsb-frontend-css'
        href='{{asset('assets/css/frontendfeature3.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='lexend-custom-css'
        href='{{asset('assets/css/lexend-customfeature.css')}}' type='text/css'
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
        href='{{asset('assets/css/lexend-fontsfeature.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='uni-core-css'
        href='{{asset('assets/css/uni-core.minfeature.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='unicons-css'
        href='{{asset('assets/css/unicons.minfeature.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='font-awesome-free-css'
        href='{{asset('assets/css/fontawesome-all.minfeature.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-bundle-css'
        href='{{asset('assets/css/swiper-bundle.minfeature.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='prettify-css'
        href='{{asset('assets/css/prettify.minfeature.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='lexend-core-css'
        href='{{asset('assets/css/lexend-core.minfeature.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='lexend-unit-css'
        href='{{asset('assets/css/lexend-unitfeature.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='lexend-woo-css'
        href='{{asset('assets/css/lexend-woofeature.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='lexend-style-css'
        href='{{('assets/css/stylefeature.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='{{asset('assets/css/swiper.minfeature.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='e-swiper-css'
        href='{{asset('assets/css/e-swiper.minfeature.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-8-css'
        href='{{asset('assets/css/post-8feature.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='{{asset('assets/css/globalfeature.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-890-css'
        href='{{asset('assets/css/post-890feature.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='featherlight-css'
        href='{{asset('assets/css/featherlightfeature.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wpccl-frontend-css'
        href='{{asset('assets/css/frontendfeature4.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='parent-style-css'
        href='{{asset('assets/css/stylefeature2.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='{{asset('assets/css/cssfeature.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-tg-unicon-icons-css'
        href='{{asset('assets/css/unicons.minfeature1.css')}}'
        type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="text/javascript" src="{{asset('assets/js/jquery.minfeature.js')}}"
        id="jquery-core-js"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-migrate.minfeature.js')}}"
        id="jquery-migrate-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/jquery.blockUI.minfeature.js')}}"
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
        src="{{asset('assets/js/add-to-cart.minfeature.js')}}"
        id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/js.cookie.minfeature.js')}}"
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
        src="{{asset('assets/js/woocommerce.minfeature.js')}}"
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
    <script type="text/javascript" src="{{asset('assets/js/app-head-bsfeature.js')}}"
        id="app-head-bs-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/uni-core-bundle.minfeature.js')}}"
        id="uni-core-bundle-js"></script>
    {{-- <link rel="https://api.w.org/" href="https://bidmanager.org/wp-json/" /> --}}
    <link rel="alternate" title="JSON" type="application/json"
        {{-- href="https://bidmanager.org/wp-json/wp/v2/pages/890" /> --}}
    {{-- <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://bidmanager.org/xmlrpc.php?rsd" /> --}}
    <meta name="generator" content="WordPress 6.6.2" />
    <meta name="generator" content="WooCommerce 9.3.3" />
    <link rel="canonical" href="{{route('pages.features')}}" />
    <link rel='shortlink' href="{{route('pages.features')}}" />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        {{-- href="https://bidmanager.org/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fbidmanager.org%2Ffeatures%2F" /> --}}
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        {{-- href="https://bidmanager.org/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fbidmanager.org%2Ffeatures%2F&#038;format=xml" /> --}}
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
    <link rel="icon" href="{{asset('assets/img/cropped-Bidmanager-32x32feature.png')}}"
        sizes="32x32" />
    <link rel="icon" href="{{asset('assets/img/cropped-Bidmanager-192x192 (1)feature.png')}}"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="{{asset('assets/img/cropped-Bidmanager-180x180feature.png')}}" />
    <meta name="msapplication-TileImage"
        content="{{asset('assets/img/cropped-Bidmanager-270x270featurefeature.png')}}" />
    <style id="kirki-inline-styles"></style>
</head>

<body
    class="page-template page-template-elementor_header_footer page page-id-890 wp-custom-logo wp-embed-responsive theme-lexend woocommerce-no-js no-sidebar uni-body panel bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-200 overflow-x-hidden elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-890">


    @include('pages.include.topbar');

    <!-- main-area -->
    <main class="main-area">

        <div data-elementor-type="wp-page" data-elementor-id="890" class="elementor elementor-890">
            <div class="elementor-element elementor-element-6c23b59 e-con-full e-flex animejs-disable e-con e-parent"
                data-id="6c23b59" data-element_type="container">
                <div class="elementor-element elementor-element-c2e6b1c elementor-absolute e-transform elementor-hidden-mobile animejs-onview animejs-element elementor-widget elementor-widget-tg-dark-light-img"
                    data-id="c2e6b1c" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:45,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                    data-anime="onview: -100; loop: false; opacity: [0, 1]; scale: [0, 1]; easing: &#039;spring(1, 80, 10, 0)&#039;; duration: 450; delay: 200"
                    data-anime-devices="mobile,tablet,desktop" data-widget_type="tg-dark-light-img.default">
                    <div class="elementor-widget-container">


                        <img decoding="async" class="d-block dark:d-none"
                            src="{{asset('assets/img/star-1.svg')}}" alt="Image">
                        <img decoding="async" class="d-none dark:d-block"
                            src="{{asset('assets/img/star-white-1.svg')}}"
                            alt="Image Dark">


                    </div>
                </div>
                <div class="elementor-element elementor-element-e94f7d4 elementor-absolute e-transform elementor-hidden-mobile animejs-onview animejs-element elementor-widget elementor-widget-tg-dark-light-img"
                    data-id="e94f7d4" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:45,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                    data-anime="onview: -100; loop: false; opacity: [0, 1]; scale: [0, 1]; easing: &#039;spring(1, 80, 10, 0)&#039;; duration: 450; delay: 200"
                    data-anime-devices="mobile,tablet,desktop" data-widget_type="tg-dark-light-img.default">
                    <div class="elementor-widget-container">


                        <img decoding="async" class="d-block dark:d-none"
                            src="{{asset('assets/img/star-2.svg')}}" alt="Image">
                        <img decoding="async" class="d-none dark:d-block"
                            src="{{asset('assets/img/star-white-2.svg')}}"
                            alt="Image Dark">


                    </div>
                </div>
                <div class="elementor-element elementor-element-b946673 e-flex e-con-boxed animejs-disable e-con e-child"
                    data-id="b946673" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-a4558ce e-con-full animejs-onview e-flex animejs-element e-con e-child"
                            data-id="a4558ce" data-element_type="container"
                            data-anime="onview: ; loop: false; targets: .elementor-element; opacity: [0, 1]; translateY: [48, 0]; easing: &#039;spring(1, 80, 10, 0)&#039;; duration: 450; delay: ; delay: anime.stagger(100, {start: 200})"
                            data-anime-devices="mobile,tablet,desktop">
                            <div class="elementor-element elementor-element-97be7e9 animejs-disable elementor-widget elementor-widget-tg-heading"
                                data-id="97be7e9" data-element_type="widget" data-widget_type="tg-heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="title tg-element-title mb-0 ">What Sets BidManager Apart</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-05b7326 dark:text-white text-dark text-opacity-70 animejs-disable elementor-widget elementor-widget-tg-heading"
                                data-id="05b7326" data-element_type="widget" data-widget_type="tg-heading.default">
                                <div class="elementor-widget-container">
                                    <p class="title tg-element-title mb-0 ">At Bidmanager, we’re a dedicated team
                                        focused on revolutionizing bid management. Collaboration, adaptability, and
                                        innovation are at the heart of what we do. We believe in creating efficient
                                        solutions to help businesses succeed in their bidding processes. Our journey is
                                        driven by teamwork and a shared vision of success.</p>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-728f7b7 e-con-full e-flex animejs-disable e-con e-child"
                            data-id="728f7b7" data-element_type="container">
                            <div class="elementor-element elementor-element-ae8d2cb e-con-full dark:bg-gray-300 dark:bg-opacity-10 animejs-onview e-flex animejs-element e-con e-child"
                                data-id="ae8d2cb" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
                                data-anime="onview: -200; loop: false; opacity: [0, 1]; translateY: [48, 0]; easing: &#039;spring(1, 80, 10, 0)&#039;; duration: 450; delay: 100"
                                data-anime-devices="mobile,tablet,desktop">
                                <div class="elementor-element elementor-element-2dbac86 e-grid e-con-full animejs-disable e-con e-child"
                                    data-id="2dbac86" data-element_type="container">
                                    <div class="elementor-element elementor-element-51d4788 e-con-full e-flex animejs-disable e-con e-child"
                                        data-id="51d4788" data-element_type="container">
                                        <div class="elementor-element elementor-element-882d76e animejs-disable elementor-widget elementor-widget-tg-heading"
                                            data-id="882d76e" data-element_type="widget"
                                            data-widget_type="tg-heading.default">
                                            <div class="elementor-widget-container">
                                                <span class="title tg-element-title mb-0 ">01.</span>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-37c7a21 animejs-disable elementor-widget elementor-widget-tg-heading"
                                            data-id="37c7a21" data-element_type="widget"
                                            data-widget_type="tg-heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="title tg-element-title mb-0 ">Bid Instantly, Win Efficiently</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-197c0c2 dark:text-white text-dark text-opacity-70 animejs-disable elementor-widget elementor-widget-tg-heading"
                                            data-id="197c0c2" data-element_type="widget"
                                            data-widget_type="tg-heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="title tg-element-title mb-0 ">BidManager is your ultimate bidding companion, enabling you to place accurate bids on Freelancer.com in just a second. No delays, no complexity—just smart, fast, and precise bidding to help you secure more projects effortlessly.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-de18531 animejs-disable elementor-widget elementor-widget-image"
                                        data-id="de18531" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img fetchpriority="high" decoding="async" width="780" height="728"
                                                src="{{asset('assets/img/feature-01.png')}}"
                                                class="attachment-full size-full wp-image-903" alt=""
                                                srcset="{{ asset('assets/img/feature-01.png') }}, {{ asset('assets/img/feature-01-650x607.png') }}, {{ asset('assets/img/feature-01-300x280.png') }}, {{asset('assets/img/feature-01-768x717.png')}}"
                                                sizes="(max-width: 780px) 100vw, 780px" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3a7e28c e-con-full dark:bg-gray-300 dark:bg-opacity-10 animejs-onview e-flex animejs-element e-con e-child"
                                data-id="3a7e28c" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
                                data-anime="onview: -200; loop: false; opacity: [0, 1]; translateY: [48, 0]; easing: &#039;spring(1, 80, 10, 0)&#039;; duration: 450; delay: 100"
                                data-anime-devices="mobile,tablet,desktop">
                                <div class="elementor-element elementor-element-ede0cd8 e-grid e-con-full animejs-disable e-con e-child"
                                    data-id="ede0cd8" data-element_type="container">
                                    <div class="elementor-element elementor-element-7dcee75 e-con-full e-flex animejs-disable e-con e-child"
                                        data-id="7dcee75" data-element_type="container">
                                        <div class="elementor-element elementor-element-9ffcf41 animejs-disable elementor-widget elementor-widget-tg-heading"
                                            data-id="9ffcf41" data-element_type="widget"
                                            data-widget_type="tg-heading.default">
                                            <div class="elementor-widget-container">
                                                <span class="title tg-element-title mb-0 ">02.</span>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-b7019ea animejs-disable elementor-widget elementor-widget-tg-heading"
                                            data-id="b7019ea" data-element_type="widget"
                                            data-widget_type="tg-heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="title tg-element-title mb-0 ">Streamline Your Bidding Process</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6be0de8 dark:text-white text-dark text-opacity-70 animejs-disable elementor-widget elementor-widget-tg-heading"
                                            data-id="6be0de8" data-element_type="widget"
                                            data-widget_type="tg-heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="title tg-element-title mb-0 ">Effortlessly manage and automate your bids with BidManager, ensuring precision, speed, and seamless execution—so you can focus on winning more projects.</p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7c716a6 animejs-disable elementor-widget elementor-widget-tg-btn"
                                            data-id="7c716a6" data-element_type="widget"
                                            data-widget_type="tg-btn.default">
                                            <div class="elementor-widget-container">



                                                {{-- <a href="https://bidmanager.org/integrations/" target="_self" --}}
                                                    {{-- rel="nofollow"
                                                    class="tg-btn uc-link fw-bold d-inline-flex items-center gap-narrow dark:text-white"> --}}
                                                    {{-- <span>See all integrations</span> --}}
                                                    {{-- <i class="icon icon-1 unicon-arrow-right rtl:rotate-180"></i> --}}
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-8e7bb8a animejs-disable elementor-widget elementor-widget-image"
                                        data-id="8e7bb8a" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img decoding="async" width="780" height="728"
                                                src="{{ asset('assets/img/feature-02.png') }}"
                                                class="attachment-full size-full wp-image-904" alt=""
                                                srcset="{{ asset('assets/img/feature-02.png') }}, {{ asset('assets/img/feature-02-650x607.png') }}, {{ asset('assets/img/feature-02-300x280.png') }}, {{ asset('assets/img/feature-02-768x717.png') }}"
                                                sizes="(max-width: 780px) 100vw, 780px" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3e901ce e-con-full dark:bg-gray-300 dark:bg-opacity-10 animejs-onview e-flex animejs-element e-con e-child"
                                data-id="3e901ce" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
                                data-anime="onview: -200; loop: false; opacity: [0, 1]; translateY: [48, 0]; easing: &#039;spring(1, 80, 10, 0)&#039;; duration: 450; delay: 100"
                                data-anime-devices="mobile,tablet,desktop">
                                <div class="elementor-element elementor-element-681457b e-grid e-con-full animejs-disable e-con e-child"
                                    data-id="681457b" data-element_type="container">
                                    <div class="elementor-element elementor-element-bfd5cbd e-con-full e-flex animejs-disable e-con e-child"
                                        data-id="bfd5cbd" data-element_type="container">
                                        <div class="elementor-element elementor-element-ecb1347 animejs-disable elementor-widget elementor-widget-tg-heading"
                                            data-id="ecb1347" data-element_type="widget"
                                            data-widget_type="tg-heading.default">
                                            <div class="elementor-widget-container">
                                                <span class="title tg-element-title mb-0 ">03.</span>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-a58853e animejs-disable elementor-widget elementor-widget-tg-heading"
                                            data-id="a58853e" data-element_type="widget"
                                            data-widget_type="tg-heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="title tg-element-title mb-0 ">Bid with Confidence</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-36a644f dark:text-white text-dark text-opacity-70 animejs-disable elementor-widget elementor-widget-tg-heading"
                                            data-id="36a644f" data-element_type="widget"
                                            data-widget_type="tg-heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="title tg-element-title mb-0 ">I Ensure accuracy and efficiency with automated bidding, real-time price adjustments, and secure processes—helping you win projects effortlessly while minimizing risks.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-9c5bb61 animejs-disable elementor-widget elementor-widget-image"
                                        data-id="9c5bb61" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img decoding="async" width="780" height="728"
                                                src="{{ asset('assets/img/feature-03.png') }}"
                                                class="attachment-full size-full wp-image-905" alt=""
                                                srcset="{{ asset('assets/img/feature-03.png') }}, {{ asset('assets/img/feature-03-650x607.png') }}, {{ asset('assets/img/feature-03-300x280.png') }}, {{ asset('assets/img/feature-03-768x717.png') }}"
                                                sizes="(max-width: 780px) 100vw, 780px" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-8373e6b e-con-full dark:bg-gray-300 dark:bg-opacity-10 animejs-onview e-flex animejs-element e-con e-child"
                                data-id="8373e6b" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
                                data-anime="onview: -200; loop: false; opacity: [0, 1]; translateY: [48, 0]; easing: &#039;spring(1, 80, 10, 0)&#039;; duration: 450; delay: 100"
                                data-anime-devices="mobile,tablet,desktop">
                                <div class="elementor-element elementor-element-e7c0b4c e-grid e-con-full animejs-disable e-con e-child"
                                    data-id="e7c0b4c" data-element_type="container">
                                    <div class="elementor-element elementor-element-fce8073 e-con-full e-flex animejs-disable e-con e-child"
                                        data-id="fce8073" data-element_type="container">
                                        <div class="elementor-element elementor-element-518fc09 animejs-disable elementor-widget elementor-widget-tg-heading"
                                            data-id="518fc09" data-element_type="widget"
                                            data-widget_type="tg-heading.default">
                                            <div class="elementor-widget-container">
                                                <span class="title tg-element-title mb-0 ">04.</span>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-991b706 animejs-disable elementor-widget elementor-widget-tg-heading"
                                            data-id="991b706" data-element_type="widget"
                                            data-widget_type="tg-heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="title tg-element-title mb-0 ">Speed Up Bidding with Real-Time Insights
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6726015 dark:text-white text-dark text-opacity-70 animejs-disable elementor-widget elementor-widget-tg-heading"
                                            data-id="6726015" data-element_type="widget"
                                            data-widget_type="tg-heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="title tg-element-title mb-0 ">Get instant visibility into bid placements, pricing adjustments, and project opportunities. Smart automation and dynamic strategies ensure precision, maximizing your chances of winning.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-86d59ab animejs-disable elementor-widget elementor-widget-image"
                                        data-id="86d59ab" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="780" height="728"
                                            src="{{ asset('assets/img/feature-04.png') }}"
                                            class="attachment-full size-full wp-image-906" alt=""
                                            srcset="{{ asset('assets/img/feature-04.png') }}, {{ asset('assets/img/feature-04-650x607.png') }}, {{ asset('asset/img/feature-04-300x280.png') }}, {{ asset('assets/img/feature-04-768x717.png') }}"
                                            sizes="(max-width: 780px) 100vw, 780px" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-1c4c5c5 uc-dark dark:bg-gray-300 dark:bg-opacity-10 e-flex e-con-boxed animejs-disable e-con e-parent"
                data-id="1c4c5c5" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-d78bfab elementor-widget__width-initial animejs-onview animejs-element elementor-widget elementor-widget-tg-heading"
                        data-id="d78bfab" data-element_type="widget"
                        data-anime="onview: -100; loop: false; opacity: [0, 1]; translateY: [48, 0]; easing: &#039;spring(1, 80, 10, 0)&#039;; duration: 450; delay: 250"
                        data-anime-devices="mobile,tablet,desktop" data-widget_type="tg-heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="title tg-element-title mb-0 ">Review quickly and confidently using <span
                                    class="text-primary">BidManager.</span></h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-bc3b7e2 e-grid e-con-full animejs-onview animejs-element e-con e-child"
                        data-id="bc3b7e2" data-element_type="container"
                        data-anime="onview: -100; loop: false; targets: .elementor-element; opacity: [0, 1]; translateY: [48, 0]; easing: &#039;spring(1, 80, 10, 0)&#039;; duration: 450; delay: ; delay: anime.stagger(100, {start: 200})"
                        data-anime-devices="mobile,tablet,desktop">
                        <div class="elementor-element elementor-element-6e02ab4 animejs-disable elementor-widget elementor-widget-tg-iconbox"
                            data-id="6e02ab4" data-element_type="widget" data-widget_type="tg-iconbox.default">
                            <div class="elementor-widget-container">


                                <div
                                    class="feature-item genix-box panel p-4 border rounded hover:bg-white dark:hover:bg-primary dark:text-white hover:scale-105 duration-150 transition-all">
                                    <div class="vstack panel min-h-250px">
                                        <div class="position-absolute top-0 ltr:end-0 rtl:start-0 icon-2">
                                            <i aria-hidden="true" class="unicon-arrow-up-right"></i>
                                        </div>
                                        <div class="vstack justify-between gap-2 h-100">
                                            <div class="icon icon-4">
                                                <i aria-hidden="true" class="unicon-document"></i>
                                            </div>
                                            <div class="panel">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 m-0 text-inherit">Bid Proposals</h3>
                                                    <p class="desc fs-6 opacity-70">Quickly create detailed bid
                                                        proposals with customizable templates.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="position-cover"></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="elementor-element elementor-element-ea22779 animejs-disable elementor-widget elementor-widget-tg-iconbox"
                            data-id="ea22779" data-element_type="widget" data-widget_type="tg-iconbox.default">
                            <div class="elementor-widget-container">


                                <div
                                    class="feature-item genix-box panel p-4 border rounded hover:bg-white dark:hover:bg-primary dark:text-white hover:scale-105 duration-150 transition-all">
                                    <div class="vstack panel min-h-250px">
                                        <div class="position-absolute top-0 ltr:end-0 rtl:start-0 icon-2">
                                            <i aria-hidden="true" class="unicon-arrow-up-right"></i>
                                        </div>
                                        <div class="vstack justify-between gap-2 h-100">
                                            <div class="icon icon-4">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-brain"
                                                    viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M208 0c-29.9 0-54.7 20.5-61.8 48.2-.8 0-1.4-.2-2.2-.2-35.3 0-64 28.7-64 64 0 4.8.6 9.5 1.7 14C52.5 138 32 166.6 32 200c0 12.6 3.2 24.3 8.3 34.9C16.3 248.7 0 274.3 0 304c0 33.3 20.4 61.9 49.4 73.9-.9 4.6-1.4 9.3-1.4 14.1 0 39.8 32.2 72 72 72 4.1 0 8.1-.5 12-1.2 9.6 28.5 36.2 49.2 68 49.2 39.8 0 72-32.2 72-72V64c0-35.3-28.7-64-64-64zm368 304c0-29.7-16.3-55.3-40.3-69.1 5.2-10.6 8.3-22.3 8.3-34.9 0-33.4-20.5-62-49.7-74 1-4.5 1.7-9.2 1.7-14 0-35.3-28.7-64-64-64-.8 0-1.5.2-2.2.2C422.7 20.5 397.9 0 368 0c-35.3 0-64 28.6-64 64v376c0 39.8 32.2 72 72 72 31.8 0 58.4-20.7 68-49.2 3.9.7 7.9 1.2 12 1.2 39.8 0 72-32.2 72-72 0-4.8-.5-9.5-1.4-14.1 29-12 49.4-40.6 49.4-73.9z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="panel">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 m-0 text-inherit">AI-Powered Bid Generation
                                                    </h3>
                                                    <p class="desc fs-6 opacity-70">Create bids instantly. Use AI to
                                                        generate project bids based on requirements.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="position-cover"></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="elementor-element elementor-element-074778d animejs-disable elementor-widget elementor-widget-tg-iconbox"
                            data-id="074778d" data-element_type="widget" data-widget_type="tg-iconbox.default">
                            <div class="elementor-widget-container">


                                <div
                                    class="feature-item genix-box panel p-4 border rounded hover:bg-white dark:hover:bg-primary dark:text-white hover:scale-105 duration-150 transition-all">
                                    <div class="vstack panel min-h-250px">
                                        <div class="position-absolute top-0 ltr:end-0 rtl:start-0 icon-2">
                                            <i aria-hidden="true" class="unicon-arrow-up-right"></i>
                                        </div>
                                        <div class="vstack justify-between gap-2 h-100">
                                            <div class="icon icon-4">
                                                <i aria-hidden="true" class="genix unicon-model"></i>
                                            </div>
                                            <div class="panel">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 m-0 text-inherit">Selecting a Skill Set</h3>
                                                    <p class="desc fs-6 opacity-70">Tapping a skill set automatically
                                                        selects all related skills with their checkboxes marked.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="position-cover"></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2cada67 animejs-disable elementor-widget elementor-widget-tg-iconbox"
                            data-id="2cada67" data-element_type="widget" data-widget_type="tg-iconbox.default">
                            <div class="elementor-widget-container">


                                <div
                                    class="feature-item genix-box panel p-4 border rounded hover:bg-white dark:hover:bg-primary dark:text-white hover:scale-105 duration-150 transition-all">
                                    <div class="vstack panel min-h-250px">
                                        <div class="position-absolute top-0 ltr:end-0 rtl:start-0 icon-2">
                                            <i aria-hidden="true" class="unicon-arrow-up-right"></i>
                                        </div>
                                        <div class="vstack justify-between gap-2 h-100">
                                            <div class="icon icon-4">
                                                <i aria-hidden="true" class="genix unicon-task-approved"></i>
                                            </div>
                                            <div class="panel">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 m-0 text-inherit">Bid Contracts</h3>
                                                    <p class="desc fs-6 opacity-70">Seamlessly integrate contracts and
                                                        manage bid-related client data.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="position-cover"></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1a009e2 animejs-disable elementor-widget elementor-widget-tg-iconbox"
                            data-id="1a009e2" data-element_type="widget" data-widget_type="tg-iconbox.default">
                            <div class="elementor-widget-container">


                                <div
                                    class="feature-item genix-box panel p-4 border rounded hover:bg-white dark:hover:bg-primary dark:text-white hover:scale-105 duration-150 transition-all">
                                    <div class="vstack panel min-h-250px">
                                        <div class="position-absolute top-0 ltr:end-0 rtl:start-0 icon-2">
                                            <i aria-hidden="true" class="unicon-arrow-up-right"></i>
                                        </div>
                                        <div class="vstack justify-between gap-2 h-100">
                                            <div class="icon icon-4">
                                                <i aria-hidden="true" class="genix unicon-touch-interaction"></i>
                                            </div>
                                            <div class="panel">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 m-0 text-inherit">eSignatures</h3>
                                                    <p class="desc fs-6 opacity-70">Simplify bid approvals with secure,
                                                        legally-binding digital signatures.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="position-cover"></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="elementor-element elementor-element-697c72e animejs-disable elementor-widget elementor-widget-tg-iconbox"
                            data-id="697c72e" data-element_type="widget" data-widget_type="tg-iconbox.default">
                            <div class="elementor-widget-container">


                                <div
                                    class="feature-item genix-box panel p-4 border rounded hover:bg-white dark:hover:bg-primary dark:text-white hover:scale-105 duration-150 transition-all">
                                    <div class="vstack panel min-h-250px">
                                        <div class="position-absolute top-0 ltr:end-0 rtl:start-0 icon-2">
                                            <i aria-hidden="true" class="unicon-arrow-up-right"></i>
                                        </div>
                                        <div class="vstack justify-between gap-2 h-100">
                                            <div class="icon icon-4">
                                                <i aria-hidden="true" class="genix unicon-sub-volume"></i>
                                            </div>
                                            <div class="panel">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 m-0 text-inherit">Bid Forms</h3>
                                                    <p class="desc fs-6 opacity-70">Share bid submission forms easily
                                                        through direct links or embedding options.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="position-cover"></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2f22061 animejs-disable elementor-widget elementor-widget-tg-iconbox"
                            data-id="2f22061" data-element_type="widget" data-widget_type="tg-iconbox.default">
                            <div class="elementor-widget-container">


                                <div
                                    class="feature-item genix-box panel p-4 border rounded hover:bg-white dark:hover:bg-primary dark:text-white hover:scale-105 duration-150 transition-all">
                                    <div class="vstack panel min-h-250px">
                                        <div class="position-absolute top-0 ltr:end-0 rtl:start-0 icon-2">
                                            <i aria-hidden="true" class="unicon-arrow-up-right"></i>
                                        </div>
                                        <div class="vstack justify-between gap-2 h-100">
                                            <div class="icon icon-4">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fab-autoprefixer"
                                                    viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M318.4 16l-161 480h77.5l25.4-81.4h119.5L405 496h77.5L318.4 16zm-40.3 341.9l41.2-130.4h1.5l40.9 130.4h-83.6zM640 405l-10-31.4L462.1 358l19.4 56.5L640 405zm-462.1-47L10 373.7 0 405l158.5 9.4 19.4-56.4z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="panel">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 m-0 text-inherit">Automated Bidding</h3>
                                                    <p class="desc fs-6 opacity-70">Bidman places bid automatically on
                                                        newly posted projects within second.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="position-cover"></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="elementor-element elementor-element-cb99d9e animejs-disable elementor-widget elementor-widget-tg-iconbox"
                            data-id="cb99d9e" data-element_type="widget" data-widget_type="tg-iconbox.default">
                            <div class="elementor-widget-container">


                                <div
                                    class="feature-item genix-box panel p-4 border rounded hover:bg-white dark:hover:bg-primary dark:text-white hover:scale-105 duration-150 transition-all">
                                    <div class="vstack panel min-h-250px">
                                        <div class="position-absolute top-0 ltr:end-0 rtl:start-0 icon-2">
                                            <i aria-hidden="true" class="unicon-arrow-up-right"></i>
                                        </div>
                                        <div class="vstack justify-between gap-2 h-100">
                                            <div class="icon icon-4">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-user-secret"
                                                    viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M383.9 308.3l23.9-62.6c4-10.5-3.7-21.7-15-21.7h-58.5c11-18.9 17.8-40.6 17.8-64v-.3c39.2-7.8 64-19.1 64-31.7 0-13.3-27.3-25.1-70.1-33-9.2-32.8-27-65.8-40.6-82.8-9.5-11.9-25.9-15.6-39.5-8.8l-27.6 13.8c-9 4.5-19.6 4.5-28.6 0L182.1 3.4c-13.6-6.8-30-3.1-39.5 8.8-13.5 17-31.4 50-40.6 82.8-42.7 7.9-70 19.7-70 33 0 12.6 24.8 23.9 64 31.7v.3c0 23.4 6.8 45.1 17.8 64H56.3c-11.5 0-19.2 11.7-14.7 22.3l25.8 60.2C27.3 329.8 0 372.7 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-48.4-25.8-90.4-64.1-114.1zM176 480l-41.6-192 49.6 32 24 40-32 120zm96 0l-32-120 24-40 49.6-32L272 480zm41.7-298.5c-3.9 11.9-7 24.6-16.5 33.4-10.1 9.3-48 22.4-64-25-2.8-8.4-15.4-8.4-18.3 0-17 50.2-56 32.4-64 25-9.5-8.8-12.7-21.5-16.5-33.4-.8-2.5-6.3-5.7-6.3-5.8v-10.8c28.3 3.6 61 5.8 96 5.8s67.7-2.1 96-5.8v10.8c-.1.1-5.6 3.2-6.4 5.8z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="panel">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 m-0 text-inherit">Confidential Bids</h3>
                                                    <p class="desc fs-6 opacity-70">Protect your bid details by sealing
                                                        them from other freelancers.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="position-cover"></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="elementor-element elementor-element-bfbb847 animejs-disable elementor-widget elementor-widget-tg-iconbox"
                            data-id="bfbb847" data-element_type="widget" data-widget_type="tg-iconbox.default">
                            <div class="elementor-widget-container">


                                <div
                                    class="feature-item genix-box panel p-4 border rounded hover:bg-white dark:hover:bg-primary dark:text-white hover:scale-105 duration-150 transition-all">
                                    <div class="vstack panel min-h-250px">
                                        <div class="position-absolute top-0 ltr:end-0 rtl:start-0 icon-2">
                                            <i aria-hidden="true" class="unicon-arrow-up-right"></i>
                                        </div>
                                        <div class="vstack justify-between gap-2 h-100">
                                            <div class="icon icon-4">
                                                <i aria-hidden="true" class="genix unicon-filter-edit"></i>
                                            </div>
                                            <div class="panel">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 m-0 text-inherit">Project Filters</h3>
                                                    <p class="desc fs-6 opacity-70">Narrow down your search. Use
                                                        filters to find projects based on required skills, hourly rates.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="position-cover"></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="elementor-element elementor-element-71c7800 animejs-disable elementor-widget elementor-widget-tg-iconbox"
                            data-id="71c7800" data-element_type="widget" data-widget_type="tg-iconbox.default">
                            <div class="elementor-widget-container">


                                <div
                                    class="feature-item genix-box panel p-4 border rounded hover:bg-white dark:hover:bg-primary dark:text-white hover:scale-105 duration-150 transition-all">
                                    <div class="vstack panel min-h-250px">
                                        <div class="position-absolute top-0 ltr:end-0 rtl:start-0 icon-2">
                                            <i aria-hidden="true" class="unicon-arrow-up-right"></i>
                                        </div>
                                        <div class="vstack justify-between gap-2 h-100">
                                            <div class="icon icon-4">
                                                <i aria-hidden="true" class="genix unicon-currency"></i>
                                            </div>
                                            <div class="panel">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 m-0 text-inherit">Bid Payments</h3>
                                                    <p class="desc fs-6 opacity-70">Collect payments directly from your
                                                        bids and boost your conversion rate.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="position-cover"></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1f51e7e animejs-disable elementor-widget elementor-widget-tg-iconbox"
                            data-id="1f51e7e" data-element_type="widget" data-widget_type="tg-iconbox.default">
                            <div class="elementor-widget-container">


                                <div
                                    class="feature-item genix-box panel p-4 border rounded hover:bg-white dark:hover:bg-primary dark:text-white hover:scale-105 duration-150 transition-all">
                                    <div class="vstack panel min-h-250px">
                                        <div class="position-absolute top-0 ltr:end-0 rtl:start-0 icon-2">
                                            <i aria-hidden="true" class="unicon-arrow-up-right"></i>
                                        </div>
                                        <div class="vstack justify-between gap-2 h-100">
                                            <div class="icon icon-4">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-users"
                                                    viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="panel">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 m-0 text-inherit">Client Screening</h3>
                                                    <p class="desc fs-6 opacity-70">Identify ideal clients based on
                                                        reviews, ratings, and payment status.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="position-cover"></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="elementor-element elementor-element-b490622 animejs-disable elementor-widget elementor-widget-tg-iconbox"
                            data-id="b490622" data-element_type="widget" data-widget_type="tg-iconbox.default">
                            <div class="elementor-widget-container">


                                <div
                                    class="feature-item genix-box panel p-4 border rounded hover:bg-white dark:hover:bg-primary dark:text-white hover:scale-105 duration-150 transition-all">
                                    <div class="vstack panel min-h-250px">
                                        <div class="position-absolute top-0 ltr:end-0 rtl:start-0 icon-2">
                                            <i aria-hidden="true" class="unicon-arrow-up-right"></i>
                                        </div>
                                        <div class="vstack justify-between gap-2 h-100">
                                            <div class="icon icon-4">
                                                <i aria-hidden="true" class="genix unicon-time-filled"></i>
                                            </div>
                                            <div class="panel">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 m-0 text-inherit">Real-Time Projects</h3>
                                                    <p class="desc fs-6 opacity-70">Stay updated. Get instant access to
                                                        newly posted projects and seize opportunities as they arise.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="position-cover"></a>
                                    </div>
                                </div>


                            </div>
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
        href='{{asset('assets/css/wc-blocksfeature.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-261-css'
        href='{{asset('assets/css/post-261feature.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='widget-image-css'
        href='{{asset('assets/css/widget-image.minfeature.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-676-css'
        href='{{asset('assets/css/post-676feature.css')}}' type='text/css'
        media='all' />
    <script type="text/javascript" src="{{asset('assets/js/hooks.minfeature.js')}}"
        id="wp-hooks-js"></script>
    <script type="text/javascript" src="{{asset('assets/js/i18n.minfeature.js')}}"
        id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/indexfeature.js')}}" id="swv-js">
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
        src="{{asset('assets/js/indexfeature.js')}}"
        id="contact-form-7-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/jquery.magnific-popup.minfeature.js')}}"
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
        src="{{asset('assets/js/cart-fragments.minfeature.js')}}"
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
        src="{{asset('assets/js/frontendfeature.js')}}"
        id="wooac-frontend-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/perfect-scrollbar.jquery.minfeature2.js')}}"
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
        src="{{asset('assets/js/frontendfeature2.js')}}"
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
        src="{{asset('assets/js/frontendfeature3.js')}}"
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
        src="{{asset('assets/js/frontendfeature4.js')}}"
        id="wpcsb-frontend-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/bootstrap.minfeature.js')}}" id="bootstrap-js">
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/swiper-bundle.minfeature.js')}}"
        id="swiper-bundle-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/swiper-helperfeature.js')}}" id="swiper-helper-js">
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/uikit-components-bsfeature.js')}}"
        id="uikit-components-bs-js"></script>
    <script type="text/javascript" src="{{asset('assets/js/appfeature.js')}}"
        id="lexend-app-js"></script>
    <script type="text/javascript" src="{{asset('assets/js/mainfeature.js')}}"
        id="lexend-main-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/sourcebuster.min.js')}}"
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
        src="{{asset('assets/js/order-attribution.minfeature.js')}}"
        id="wc-order-attribution-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/animejs.minfeature.js')}}"
        id="animejs-main-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/animejs-scrollmagic.minfeature.js')}}"
        id="animejs-scrollmagic-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/animejs-data-attr-helperfeature.js')}}"
        id="animejs-data-attr-helper-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/animejs-helperfeature.js')}}"
        id="animejs-helper-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/featherlightfeature.js')}}"
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
        src="{{asset('assets/js/frontendfeature5.js')}}"
        id="wpccl-frontend-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/hello-worldfeature.js')}}" id="genixcore-js">
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/webpack.runtime.minfeature.js')}}"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/js/frontend-modules.minfeature.js')}}"
        id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="{{asset('assets/js/core.minfeature.js')}}"
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
                "id": 890,
                "title": "Features%20%E2%80%93%20BidManager",
                "excerpt": "",
                "featuredImage": false
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('assets/js/frontend.minfeature.js')}}"
        id="elementor-frontend-js"></script>

</body>

</html>
