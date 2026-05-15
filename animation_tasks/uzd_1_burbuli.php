<section>
    <h2>1. Burbuļi ceļas uz augšu</h2>

    <button onclick="startBubbles()">Sākt burbuļus</button>

    <div id="task1Area"></div>
</section>

<script>
    function startBubbles() {
        setInterval(function() {
            let area = document.getElementById("task1Area");
            let bubble = document.createElement("div");

            bubble.classList.add("task1Bubble");

            let randomLeft = Math.floor(Math.random() * area.clientWidth);
            let randomSize = Math.floor(Math.random() * 30) + 15;

            bubble.style.left = randomLeft + "px";
            bubble.style.width = randomSize + "px";
            bubble.style.height = randomSize + "px";

            area.appendChild(bubble);

            setTimeout(function() {
                bubble.remove();
            }, 4000);
        }, 600);
    }
</script>