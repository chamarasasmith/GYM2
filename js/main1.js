/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 
function setImg1(){
    var tmppath = URL.createObjectURL(event.target.files[0]);
        $("#imgv2").fadeIn("fast").attr('src', tmppath);
}

function setEnable1(n1){
    $(n1).attr('disabled',false);
}

function setSave1(n2){
    $(n2).attr('disabled',true);
} 