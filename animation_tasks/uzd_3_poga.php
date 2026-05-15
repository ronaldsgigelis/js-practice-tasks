<section>
    <h2>3. Poga bēg no peles</h2>

    <div id="task3Area">
        <button id="task3Button">Noķer mani</button>
    </div>
</section>

<script>
    let task3Button = document.getElementById("task3Button");
    let task3Area = document.getElementById("task3Area");

    task3Button.addEventListener("mouseover", function() {
        let maxX = task3Area.clientWidth - task3Button.clientWidth;
        let maxY = task3Area.clientHeight - task3Button.clientHeight;

        let randomX = Math.floor(Math.random() * maxX);
        let randomY = Math.floor(Math.random() * maxY);

        task3Button.style.left = randomX + "px";
        task3Button.style.top = randomY + "px";
    });
</script>