<section>
    <h2>9. Vārda garums</h2>

    <input type="text" id="uzd_9" placeholder="Ievadi vārdu">
    <button onclick="wordLength()">Pārbaudīt garumu</button>

    <p id="task9Result"></p>
</section>

<script>
    function wordLength() {
        let word = document.getElementById("uzd_9").value;
        let length = word.length;

        document.getElementById("task9Result").textContent = "Vārdā ir " + length + " burti.";
    }
</script>