function average(){
    let a = document.getElementById("a").value;
    let b = document.getElementById("b").value;
    let c = document.getElementById("c").value;
    let d = document.getElementById("d").value;
    let e = document.getElementById("e").value;
    let f = document.getElementById("f").value;
    let g = document.getElementById("g").value;
    let total = (a*3)+(b*4)+(c*4)+(d*3)+(e*2)+(f*3)+(g*3);
    let avg = total/22;
    document.getElementById("avg").textContent = parseFloat(avg.toFixed(4));
}