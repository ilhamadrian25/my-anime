function addGenre() {
    var selectedGenre = document.getElementById("genre").value;
    var genreList = document.getElementById("genreList");
  
    // Cek apakah genre sudah ada dalam daftar
    var existingGenres = Array.from(genreList.getElementsByTagName("li")).map(li => li.textContent);
    if (!existingGenres.includes(selectedGenre)) {
      var li = document.createElement("li");
      li.appendChild(document.createTextNode(selectedGenre));
      genreList.appendChild(li);
    } else {
      alert("Genre sudah ada dalam daftar!");
  }
  }