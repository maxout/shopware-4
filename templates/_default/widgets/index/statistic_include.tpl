<script>
jQuery(document).ready(function($) {
    var cok = document.cookie.match(/session-{$Shop->getId()}=([^;])+/g),
        sid = (cok && cok[0]) ? cok[0] : null,
        par = document.location.search.match(/sPartner=([^&])+/g),
        pid = (par && par[0]) ? par[0].substring(9) : null,
        cur = document.location.protocol + '//' + document.location.host,
        ref = document.referrer.indexOf(cur) === -1 ? document.referrer : null,
        url = "{url module=widgets controller=index action=refreshStatistic forceSecure}",
        pth = document.location.pathname.replace("{url controller=index fullPath=false}", "/");
    url += url.indexOf('?') === -1 ? '?' : '&';
    url += 'requestPage=' + encodeURI(pth);
    url += '&requestController=' + encodeURI("{$Controller|escape}");
    if(sid) { url += '&' + sid; }
    if(pid) { url += '&partner=' + pid; }
    if(ref) { url += '&referer=' + encodeURI(ref); }
{if $sArticle.articleID}
    url += '&articleId=' + encodeURI("{$sArticle.articleID}");
{/if}
	url = url.replace('https:', '');
	url = url.replace('http:', '');
    //url += '&x-shopware-nocache=' + (new Date()).getTime();
    $.ajax({ url: url, dataType: 'jsonp'});
});
</script>
