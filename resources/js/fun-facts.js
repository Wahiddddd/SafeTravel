document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const datatable = document.getElementById("funfact");

    searchInput.addEventListener("input", function () {
        const searchValue = searchInput.value.toLowerCase();
        const cards = datatable.getElementsByClassName("card");

        for (let i = 0; i < cards.length; i++) {
            const card = cards[i];
            const cardText = card.textContent || card.innerText;
            const isMatch = cardText.toLowerCase().indexOf(searchValue) > -1;
            card.style.display = isMatch ? "block" : "none";
        }
    });
});
