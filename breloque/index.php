<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3MW6R7QH7Z"></script>
    <script>

    function launchGA(){
        var el = document.createElement('script');
        el.setAttribute('type', 'text/javascript');
        el.setAttribute('type', true);
        el.setAttribute('src', '//www.googletagmanager.com/gtag/js?id=G-3MW6R7QH7Z');
        document.body.append(el);window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js',new Date());
        gtag('config','', {'anonymize_ip':true});
        gtag('config','', {'link_attribution':true});
    }
    
    // La fonction qui relie Axeptio au lancement du cookie Google Analytics
    void 0 === window._axcb && (window._axcb = []);
    window._axcb.push(function(axeptio) {
        axeptio.on("cookies:complete", function(choices) {
    if(choices.google_analytics) {
       launchGA();
      }
     });
});
    </script>
</head>
<body>
<?php

echo "test";
echo "maj 2";
?>
<img src="https://picsum.photos/200/300" />
<a href="javascript:openAxeptioCookies()">
  Cliquez-ici pour modifier vos préférences en matière de cookies
</a>
<script>
window.axeptioSettings = {
  clientId: "61bc377a12dcbf3b9b6e6c81",
  cookiesVersion: "breloque-base",
};
 
(function(d, s) {
  var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
  e.async = true; e.src = "//static.axept.io/sdk.js";
  t.parentNode.insertBefore(e, t);
})(document, "script");
</script>
</body>
</html>
