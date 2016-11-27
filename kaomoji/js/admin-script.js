// Open the div
function openkaomoji() {
    if (document.getElementById('kaomojitab').style.display = 'none')
    document.getElementById('kaomojitab').style.display = 'inline-block';
}


function copy() {
        var range = document.createRange();

        range.selectNode(document.getElementById('happy'));
        window.getSelection().addRange(range);
        document.execCommand('copy');
}

function copy2() {
        var range = document.createRange();

        range.selectNode(document.getElementById('excited'));
        window.getSelection().addRange(range);
        document.execCommand('copy');
}

function copy3() {
        var range = document.createRange();

        range.selectNode(document.getElementById('surprised'));
        window.getSelection().addRange(range);
        document.execCommand('copy');
}

function copy4() {
        var range = document.createRange();

        range.selectNode(document.getElementById('sad'));
        window.getSelection().addRange(range);
        document.execCommand('copy');
}

function copy5() {
        var range = document.createRange();

        range.selectNode(document.getElementById('cat'));
        window.getSelection().addRange(range);
        document.execCommand('copy');
}

function copied() {
    console.log("Copied !");
}