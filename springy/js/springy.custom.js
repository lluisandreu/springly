iac();
filesNewTab();

function iac() {

    var container = document.querySelectorAll('.iac-container');
    var buttons = document.querySelectorAll('.iac');

    for (var i = buttons.length - 1; i >= 0; i--) {
        buttons[i].style.display = "none";
    };

    for (var i = container.length - 1; i >= 0; i--) {
        container[i].onmouseover = function() {
            var iac = this.querySelectorAll('.iac');
            iac[0].style.display = "block";
        }
        container[i].onmouseout = function() {
            var iac = this.querySelectorAll('.iac');
            iac[0].style.display = "none";
        }
    };
}

function filesNewTab() {
    var link = document.querySelectorAll('.field-type-file');
    for (var i = link.length - 1; i >= 0; i--) {
        var a = link[i].getElementsByTagName('a');
        a[0].setAttribute('target', '_blank');
    };
}
