(function(){
var isIE = window.navigator.userAgent.indexOf("MSIE ") > 0;
var ifr = "<"+"iframe id=\"cto_iframe_a0cbe1cd62\" frameBorder=\"0\" allowtransparency=\"true\" hspace=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" vspace=\"0\" width=\"300px\" height=\"250px\"\n";
if(isIE && document.domain !== window.location.hostname) {
ifr += " src=\"javascript:'<script>window.onload=function(){document.write(\\\'<script>document.domain = &quot;"+document.domain + "&quot;;<\\\\/script>\\\');document.close();};</script>'\"";
}
ifr += "><"+"/iframe>\n";
document.write(ifr);
var ifc = "\n";
ifc += "<"+"!DOCTYPE html>\n";
ifc += "<"+"html>\n";
ifc += "  <"+"head>\n";
ifc += "    <"+"meta name=\"format-detection\" content=\"telephone=no\"><"+"meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">\n";
ifc += "  <"+"/head>\n";
ifc += "  <"+"body><"+"script language=\'JavaScript\' src=\'https://tags.mathtag.com/notify/js?exch=cri&id=5aW95q2jLzEzLyAvWkRKbE56VTROamt0TXprNVpTMDBOVEF3TFdJeU1ESXRaREV3WWpReE5tUXdOMlJpLzYyOTEyNDUxNjY2ODA0NjExLzM1NTYwMDYvMjAyNzE0NC8yMC9fSGwtTUl4bWxLRGNJV2tRcGZjM01VcnNVMlFoRml4SUxHNGRiaTlEa3A0LzEvMjAvMTQ4OTU3OTk5My8wLzI4NjMyNC83NzgzNzUxNjgvMTE3NzUxLzMwMzUzMC8xLzAvMi9aREpsTnpVNE5qa3RNems1WlMwME5UQXdMV0l5TURJdFpERXdZalF4Tm1Rd04yUmkvMC8wLzAvMC8wLw/dwPkIul1pNdQ74Q9-rU85czrCak&sid=2027144&cid=3556006&nodeid=515&price=0.1744086&group=&auctionid=62912451666804611&bp=a_cjbjhb&3pck=[CLICK_URL]\'><"+"/script>\n";
ifc += "<"+"div id=\'beacon_a0cbe1cd62\' style=\'position: absolute; left: 0px; top: 0px; visibility: hidden;\'>\n";
ifc += "<"+"img width=\"0\" height=\"0\" src=\"http://cat.fr.eu.criteo.com/delivery/lg.php?cppv=1&cpp=dbsGEXxSbmdNdm0rbW9PYlg3azNxdUtsMjVBVE41WWorOVlNTmpUQnFXUEg1MXZ3S0ovNGxqRllZNmpJcjZtR2QxK0FibzVqaUFUMFR4TEZGVE55VUhBZmZMMDBjdUc3NVM3djU0ZzVIUkM5TmZKc3ppL1lpTGZXSlc1R0NXYTV6eithRnJWUGo5TER3bDRPY29SRUxFeHJRMVZIV29WK3dKV1VUUXliRFRuQ3h3L0g4V2gxMGx5WmVpNjBpTmlLa0RqQjV6VGxrcDNLb2VuelYxQzdaWjh3MjlLaGNuOUw3V0w0bEd0YklBYkNjQmVzWTdJL2gycng0d2VMd1F4WER3dXBtR1NiL2VYMExpZWlKM25Ta0hiWVIrUT09fA%3D%3D\"/>\n";
ifc += "<"+"/div>\n";
ifc += "<"+"/body>\n";
ifc += "<"+"/html>\n";

var fillIframe = function(ifrd) {
    var getDocument = function(iframe) {
        var result_document = iframe.contentWindow || iframe.contentDocument;
        if (result_document && result_document.document)
            result_document = result_document.document;
        return result_document;
    };
    var c = getDocument(ifrd);
    if (c) {
        c.open();
        c.write(ifc);
        c.close();
    }
};


var maxRetryAttempts = 100;
var loaded = false;
var pollIframe = function() {
    var ifrd = document.getElementById('cto_iframe_a0cbe1cd62');
    if (ifrd && isIE) {
         ifrd.onload = function() {
            if(!loaded) {
                loaded = true;
                fillIframe(ifrd);
            }
        };
    } else if (ifrd) {
        loaded = true;
        fillIframe(ifrd);
    } else if (maxRetryAttempts-- > 0) {
        setTimeout(pollIframe, 10);
    }
};pollIframe();
})();
