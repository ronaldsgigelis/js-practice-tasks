<section>
    <h2>9. Labirinta spēle ar kustīgu div</h2>

    <p>Kustini sarkano kvadrātu ar bultiņām. Mērķis ir zaļais laukums.</p>

    <div id="task9Area">
        <div id="task9Player"></div>

        <div id="task9Wall1" class="task9Wall"></div>
        <div id="task9Wall2" class="task9Wall"></div>
        <div id="task9Wall3" class="task9Wall"></div>

        <div id="task9Finish"></div>
    </div>

    <p id="task9Result"></p>
</section>

<script>
    let task9Player = document.getElementById("task9Player");
    let task9Area = document.getElementById("task9Area");
    let task9Result = document.getElementById("task9Result");

    let task9X = 15;
    let task9Y = 15;
    let task9Step = 10;

    document.addEventListener("keydown", function(event) {
        let oldX = task9X;
        let oldY = task9Y;

        if (event.key === "ArrowRight") {
            task9X += task9Step;
        } else if (event.key === "ArrowLeft") {
            task9X -= task9Step;
        } else if (event.key === "ArrowUp") {
            task9Y -= task9Step;
        } else if (event.key === "ArrowDown") {
            task9Y += task9Step;
        } else {
            return;
        }

        event.preventDefault();

        if (task9X < 0) {
            task9X = 0;
        }

        if (task9Y < 0) {
            task9Y = 0;
        }

        if (task9X > task9Area.clientWidth - 25) {
            task9X = task9Area.clientWidth - 25;
        }

        if (task9Y > task9Area.clientHeight - 25) {
            task9Y = task9Area.clientHeight - 25;
        }

        task9Player.style.left = task9X + "px";
        task9Player.style.top = task9Y + "px";

        if (touchesWall()) {
            task9X = oldX;
            task9Y = oldY;

            task9Player.style.left = task9X + "px";
            task9Player.style.top = task9Y + "px";
        }

        if (touchesFinish()) {
            task9Result.textContent = "Uzvara! Tu sasniedzi galamērķi.";
        }
    });

    function touchesWall() {
        let playerRect = task9Player.getBoundingClientRect();
        let walls = document.querySelectorAll(".task9Wall");

        for (let i = 0; i < walls.length; i++) {
            let wallRect = walls[i].getBoundingClientRect();

            if (
                playerRect.left < wallRect.right &&
                playerRect.right > wallRect.left &&
                playerRect.top < wallRect.bottom &&
                playerRect.bottom > wallRect.top
            ) {
                return true;
            }
        }

        return false;
    }

    function touchesFinish() {
        let playerRect = task9Player.getBoundingClientRect();
        let finishRect = document.getElementById("task9Finish").getBoundingClientRect();

        return (
            playerRect.left < finishRect.right &&
            playerRect.right > finishRect.left &&
            playerRect.top < finishRect.bottom &&
            playerRect.bottom > finishRect.top
        );
    }
</script>