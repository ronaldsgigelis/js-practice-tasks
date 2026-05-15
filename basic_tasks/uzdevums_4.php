<section>
    <h2>vecuma pārbaude</h2>
    <input type="number" id="uzd_4" placeholder="ievadi skaitli">
    <button onclick="age()">Pārbaudīt vecumu</button>
    <p id="task4Result"></p>
</section>

<script>
    function age() {
        let num = Number(document.getElementById("uzd_4").value);
        let vecums = "";

        if (num >= 18) {
            vecums = "Pilngadīgs";
        } else {
            vecums = "Nepilngadīgs";
        }

        document.getElementById("task4Result").textContent = "Vecums ir: " + vecums;

    }
</script>