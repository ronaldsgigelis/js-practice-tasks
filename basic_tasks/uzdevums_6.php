<section>
    <h2>6. Skaitīšana no 1 līdz 10</h2>

    <button onclick="countNumbers()">Parādīt skaitļus</button>

    <p id="task6Result"></p>
</section>

<script>
function countNumbers() {
    let result = "";

    for (let i = 1; i <= 10; i++) {
        result += i + " ";
    }

    document.getElementById("task6Result").textContent = result;
}
</script>