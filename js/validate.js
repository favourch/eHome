/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validateForm1(myform) {
    var fname = myform["fname"].value;
    var lname = myform["lname"].value;
    var address = myform["address"].value;
    var mobile = myform["mobile"].value;
    var email = myform["email"].value;
    var un = myform["un"].value;
    var pw = myform["pw"].value;
    var cpw = myform["cpw"].value;

    var bool = new Boolean();
    bool = true;

    setDefault1();

    if (fname === "") {
        bool = false;
        error('fname');
    }
    if (lname === "") {
        bool = false;
        error('lname');
    }
    if (address === "") {
        bool = false;
        error('address');
    }
    if (mobile === "") {
        bool = false;
        error('mobile');
    } else if (isNaN(mobile)) {
        bool = false;
        error('mobile');
    } else if (mobile.length < 10) {
        bool = false;
        error('mobile');
    }
    if (email === "") {
        bool = false;
        error('emailc');
    }
    if (un === "") {
        bool = false;
        error('un');
    }
    if (pw === "") {
        bool = false;
        error('pw');
    }
    if (cpw === "") {
        bool = false;
        error('cpw');
    }
    if (pw !== cpw) {
        bool = false;
        error('pw');
        error('cpw');
    }

    if (bool === true) {
        document.forms("reg_form").submit();
    }
}

function setDefault1() {
    document.getElementById('fname').style.border = '1px solid #66afe9';
    document.getElementById('lname').style.border = '1px solid #66afe9';
    document.getElementById('address').style.border = '1px solid #66afe9';
    document.getElementById('mobile').style.border = '1px solid #66afe9';
    document.getElementById('email').style.border = '1px solid #66afe9';
    document.getElementById('un').style.border = '1px solid #66afe9';
    document.getElementById('pw').style.border = '1px solid #66afe9';
    document.getElementById('cpw').style.border = '1px solid #66afe9';
}

function validateForm2(myform) {
    var sno = myform["sno"].value;
    var loc = myform["loc"].value;
    var type = myform["type"].value;
    var watts = myform["watts"].value;

    var bool = new Boolean();
    bool = true;

    setDefault2();

    if (sno === "") {
        bool = false;
        error('sno');
    }
    if (loc === "") {
        bool = false;
        error('loc');
    }
    if (type === "") {
        bool = false;
        error('type');
    }
    if (watts === "") {
        bool = false;
        error('watts');
    } else if (isNaN(watts)) {
        bool = false;
        error('watts');
    }

    if (bool === true) {
        document.forms("reg_form").submit();
    }
}

function setDefault2() {
    document.getElementById('sno').style.border = '1px solid #66afe9';
    document.getElementById('loc').style.border = '1px solid #66afe9';
    document.getElementById('type').style.border = '1px solid #66afe9';
    document.getElementById('watts').style.border = '1px solid #66afe9';
}

function error(field) {
    document.getElementById(field).style.border = '1px solid red';
}