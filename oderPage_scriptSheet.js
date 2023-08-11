function dropdown_greenTable() {
    var checkBox = document.getElementById("greenCheckbox");
    var _table = document.getElementById("greenTable_div");
    if (checkBox.checked == true){
      _table.style.display = "flex";
    } else {
       _table.style.display = "none";
    }
}

function dropdown_blueTable() {
    var checkBox = document.getElementById("blueCheckbox");
    var _table = document.getElementById("blueTable_div");
    if (checkBox.checked == true){
      _table.style.display = "flex";
    } else {
       _table.style.display = "none";
    }
}