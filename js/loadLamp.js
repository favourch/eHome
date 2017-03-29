/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function loadModal() {
    var obj;

    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        obj.onreadystatechange = function() {
            if (obj.readyState < 4) {
                // progress
            } else if (obj.readyState == 4) {
                var res = obj.responseText;
                document.getElementById('viewModal').innerHTML = res;
            }
        }

        obj.open("POST", "ajax/lampModal.php", true);
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        obj.send(null);
    }
}