<section>
    <h2>2. Bumba krīt un atlec</h2>

    <button onclick="startBall()">Sākt animāciju</button>

    <div id="task2Area">
        <div id="task2Ball"></div>
    </div>
</section>

<script>
    function startBall() {
        let ball = document.getElementById("task2Ball");

        let y = 0;
        let speed = 0;
        let gravity = 0.6;
        let bounce = 0.7;
        let ground = 130;

        function animateBall() {
            speed += gravity;
            y += speed;

            if (y > ground) {
                y = ground;
                speed = -speed * bounce;
            }

            ball.style.top = y + "px";

            if (Math.abs(speed) > 0.5 || y < ground) {
                requestAnimationFrame(animateBall);
            }
        }

        animateBall();
    }
</script>