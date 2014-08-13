<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_fa365e6b87bb6e06d4b579e40871e15a5d64ec08daf7af0bb44ca8888348a7b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  66 => 25,  42 => 12,  32 => 6,  26 => 3,  56 => 16,  46 => 14,  40 => 11,  33 => 8,  24 => 2,  23 => 2,  19 => 1,  420 => 271,  417 => 270,  410 => 266,  406 => 265,  400 => 262,  395 => 260,  391 => 259,  387 => 258,  383 => 257,  379 => 256,  375 => 255,  368 => 252,  363 => 114,  358 => 113,  353 => 107,  348 => 65,  345 => 64,  207 => 115,  204 => 114,  202 => 113,  195 => 108,  193 => 107,  149 => 64,  144 => 62,  126 => 47,  113 => 38,  106 => 33,  101 => 31,  97 => 30,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  70 => 26,  67 => 22,  61 => 20,  50 => 15,  41 => 6,  38 => 5,  73 => 24,  65 => 15,  60 => 12,  57 => 11,  52 => 8,  47 => 7,  44 => 6,  39 => 5,  35 => 4,  30 => 5,  151 => 67,  136 => 29,  132 => 28,  130 => 27,  124 => 24,  120 => 23,  116 => 21,  98 => 19,  93 => 29,  76 => 21,  69 => 13,  62 => 24,  55 => 8,  51 => 6,  34 => 5,  31 => 4,  28 => 5,);
    }
}
