window.copyText = function(textToCopy, element) {

    let copyText   = document.getElementById(`${element}-copy`);
    let copiedText = document.getElementById(`${element}-copied`);

    copyText.style.transition = "2s";
    copyText.style.display    = "none";

    copiedText.style.transition = "4s";
    copiedText.style.display    = "block";


    var temp   = document.createElement('INPUT');
    temp.value = textToCopy;
    document.body.appendChild(temp);

    temp.select();
    document.execCommand('copy');
    temp.remove();


    setTimeout(
        function() {
            copyText.style.display   = "block";
            copiedText.style.display = "none";
        }, 2000);

}

