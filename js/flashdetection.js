//------------------------------------------------------------------------------------------
// Flash detection code
//
// We've change the name of the base object to avoid conflicting with anyone
// else.
//------------------------------------------------------------------------------------------

if (typeof deconceptTemp == "undefined") var deconceptTemp = new Object();
if (typeof deconceptTemp.util == "undefined") deconceptTemp.util = new Object();
if (typeof deconceptTemp.SWFObjectUtil == "undefined") deconceptTemp.SWFObjectUtil = new Object();
deconceptTemp.SWFObjectUtil.getPlayerVersion = function () {
    var PlayerVersion = new deconceptTemp.PlayerVersion([0, 0, 0]);
    if (navigator.plugins && navigator.mimeTypes.length) {
        var x = navigator.plugins["Shockwave Flash"];
        if (x && x.description) {
            PlayerVersion = new deconceptTemp.PlayerVersion(x.description.replace(/([a-zA-Z]|\s)+/, "").replace(/(\s+r|\s+b[0-9]+)/, ".").split("."));
        }
    } else if (navigator.userAgent && navigator.userAgent.indexOf("Windows CE") >= 0) {
        var axo = 1;
        var counter = 3;
        while (axo) {
            try {
                counter++;
                axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash." + counter);
                PlayerVersion = new deconceptTemp.PlayerVersion([counter, 0, 0]);
            } catch(e) {
                axo = null;
            }
        }
    } else {
        try {
            var axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");
        } catch(e) {
            try {
                var axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");
                PlayerVersion = new deconceptTemp.PlayerVersion([6, 0, 21]);
                axo.AllowScriptAccess = "always";
            } catch(e) {
                if (PlayerVersion.major == 6) {
                    return PlayerVersion;
                }
            }
            try {
                axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash");
            } catch(e) {}
        }
        if (axo != null) {
            PlayerVersion = new deconceptTemp.PlayerVersion(axo.GetVariable("$version").split(" ")[1].split(","));
        }
    }
    return PlayerVersion;
}
deconceptTemp.PlayerVersion = function (arrVersion) {
    this.major = arrVersion[0] != null ? parseInt(arrVersion[0]) : 0;
    this.minor = arrVersion[1] != null ? parseInt(arrVersion[1]) : 0;
    this.rev = arrVersion[2] != null ? parseInt(arrVersion[2]) : 0;
}
deconceptTemp.PlayerVersion.prototype.versionIsValid = function (fv) {
    if (this.major < fv.major) return false;
    if (this.major > fv.major) return true;
    if (this.minor < fv.minor) return false;
    if (this.minor > fv.minor) return true;
    if (this.rev < fv.rev) return false;
    return true;
}

function RedirectIfNoFlash(whereToRedirectTo)
{
    // only do the redirect on the true top level homepage
    var flashVersion = deconceptTemp.SWFObjectUtil.getPlayerVersion();
    var requiredVersion = new deconceptTemp.PlayerVersion([7,0,0]);
    if (!flashVersion.versionIsValid(requiredVersion))
    {
        window.location.replace(whereToRedirectTo);
    }
}

RedirectIfNoFlash("../main/about.php");