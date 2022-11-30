function isSelected() {
    const type = document.getElementById("type").value;

    if(type == "") {
        document.getElementById("error").innerHTML = "Type is required";
        return false;
    }

    return true;
}