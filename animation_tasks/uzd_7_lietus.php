<section>
    <h2>7. Lietus piliens</h2>

    <button onclick="startRain()">Sākt lietu</button>

    <div id="task7Area"></div>
</section>

<script>
    function startRain() {
        setInterval(function() {
            let area = document.getElementById("task7Area");
            let drop = document.createElement("div");

            drop.classList.add("task7Drop");

            let randomLeft = Math.floor(Math.random() * area.clientWidth);
            drop.style.left = randomLeft + "px";

            area.appendChild(drop);

            setTimeout(function() {
                drop.remove();
            }, 1500);
        }, 150);
    }
</script>