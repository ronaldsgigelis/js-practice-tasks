<section id="task10Section">
    <h2>10. Nejauši lēkājošs kvadrāts</h2>

    <button onclick="startJump()">Sākt lēkāt</button>

    <div id="task10Square"></div>
</section>

<script>
    function startJump() {
        let square = document.getElementById("task10Square");
        let section = document.getElementById("task10Section");

        setInterval(function() {
            let maxX = section.clientWidth - 70;
            let maxY = section.clientHeight - 130;

            let x = Math.floor(Math.random() * maxX);
            let y = Math.floor(Math.random() * maxY) + 100;

            square.style.left = x + "px";
            square.style.top = y + "px";
            square.style.backgroundColor = getTask10Color();
        }, 1000);
    }

    function getTask10Color() {
        let colors = ["red", "blue", "green", "orange", "purple", "black"];
        let randomIndex = Math.floor(Math.random() * colors.length);

        return colors[randomIndex];
    }
</script>