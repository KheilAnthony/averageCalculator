function average(){
    let a = document.getElementById("a").value;
    let b = document.getElementById("b").value;
    let c = document.getElementById("c").value;
    let d = document.getElementById("d").value;
    let e = document.getElementById("e").value;
    let f = document.getElementById("f").value;
    let g = document.getElementById("g").value;
    let h = document.getElementById("h").value;
    let i = document.getElementById("i").value;
    let total = (a*4)+(b*3)+(c*3)+(d*1)+(e*3)+(f*3)+(g*1)+(h*3)+(i*3);
    let avg = total/24;
    document.getElementById("avg").textContent = parseFloat(avg.toFixed(4));
}