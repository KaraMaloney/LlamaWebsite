function search() {

    input = document.getElementById("searchbar");
    filter = input.value.toUpperCase();
    table = document.getElementById("list");
    tr = table.getElementsByTagName("tr");


    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[4];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[0].style.display = "table-row";
          tr[i].style.display = "table-row";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
}


