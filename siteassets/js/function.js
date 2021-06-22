// for blog page recent Articles
$("#alignRightMenu").click(function() {
    $("#blogRightDrawer").toggle();
});
/***************Top side navigation**************************/
function openNav() {
    document.getElementById("mySidepanel").style.width = "100%";
    document.getElementById("mySidepanel").style.transition = "0.5s";

}

function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
    document.getElementById("mySidepanel").style.transition = "0.0s";
}

function openSidenavLinkContent(evt, sidenavLinkName) {
    var i, NavTabContent, navTabLinks;
    NavTabContent = document.getElementsByClassName("NavTabContent");
    for (i = 0; i < NavTabContent.length; i++) {
        NavTabContent[i].style.display = "none";
    }
    navTabLinks = document.getElementsByClassName("navTabLinks");
    for (i = 0; i < navTabLinks.length; i++) {
        navTabLinks[i].className = navTabLinks[i].className.replace(" active", "");
    }
    document.getElementById(sidenavLinkName).style.display = "block";
    evt.currentTarget.className += " active";
}

// document.getElementById("defaultOpenNavTab").click();

/***************end Top side navigation**************************/

/************************for vertical tab section start*********************************/
function openSol(evt, solName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(solName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

/************************for vertical tab section end*********************************/
/************************for verticalMobile tab section start*********************************/
function openSolMobile(evt, solName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontentfoodMobile");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinksfoodMobile");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(solName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpenMobile").click();

/************************for verticalMobile tab section end*********************************/

/************************card hover start*********************************/
$(function() {
    $(".card").hover(function(e) {
        var currentID = this.id;
        $('#' + currentID + ' .default').css("display", "none");
        $('#' + currentID + ' .hoverdiv').css("display", "block");
    }, function(e) {
        $('.default').css("display", "flex");
        $('.hoverdiv').css("display", "none");
    });
});
/************************card hover end*********************************/

/************************indexprtnrinnerdiv2 start*********************************/
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("indexprtnrinnerdiv2");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" activeCls", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " activeCls";
}
/************************indexprtnrinnerdiv2 end*********************************/

/************************checkbox cleck to file open start*********************************/
function myFunctioner() {
    var checkBox = document.getElementById("upload");
    var text = document.getElementById("files");
    if (checkBox.checked == true) {
        files.style.display = "block";
    } else {
        files.style.display = "none";
    }
}
/************************checkbox cleck to file open end*********************************/
/***************footer********************/
function FooterFunction1() {
    var x = document.getElementById("FooterDIV1");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function FooterFunction2() {
    var x = document.getElementById("FooterDIV2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function FooterFunction3() {
    var x = document.getElementById("FooterDIV3");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function FooterFunction4() {
    var x = document.getElementById("FooterDIV4");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function FooterFunction5() {
    var x = document.getElementById("FooterDIV5");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
// **************************Wide Range Blk AboutUs*************************
function openSolMobiletab(evt, solName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontentfoodMobiletext");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinksfoodMobileviews");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(solName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultopenSolMobiletab").click();

// ******************************End AboutUs****************************
