const dateElement = document.getElementById("tanggal");
const timeElement = document.getElementById("jam");

function tampilwaktu() {
  const waktu = new Date();
  const bulan = waktu.getMonth() + 1;
  const tanggal = waktu.getDate();
  const tahun = waktu.getFullYear();
  const jam = waktu.getHours();
  const menit = waktu.getMinutes();
  const detik = waktu.getSeconds();

  // Format date and time with leading zero
  const formattedDate = `${tanggal.toString().padStart(2, "0")} / ${bulan
    .toString()
    .padStart(2, "0")} / ${tahun}`;
  const formattedTime = `${jam.toString().padStart(2, "0")}:${menit
    .toString()
    .padStart(2, "0")}:${detik.toString().padStart(2, "0")}`;

  dateElement.innerHTML = formattedDate;
  timeElement.innerHTML = formattedTime;

  setTimeout(tampilwaktu, 1000);
}
tampilwaktu();

document.getElementById("toggle").onclick = function () {
  document.body.classList.add("bg-dark");
  document.body.classList.add("text-light");
  document.getElementById("toggle").classList.remove("btn-info");
  document.getElementById("toggle").classList.add("btn-secondary");
  const collection = document.getElementsByClassName("isi");
  for (i = 0; i < collection.length; i++) {
    collection[i].classList.remove("bg-info");
    collection[i].classList.remove("text-dark");
    collection[i].classList.add("bg-secondary");
    collection[i].classList.add("text-light");
  }
  const colection = document.getElementsByClassName("data");
  for (i = 0; i < colection.length; i++) {
    colection[i].classList.remove("bg-secondary");
    colection[i].classList.remove("text-dark");
    colection[i].classList.add("bg-dark");
    colection[i].classList.add("text-light");
  }
  const halaman = document.getElementsByClassName("halaman");
  for (i = 0; i < halaman.length; i++) {
    halaman[i].classList.remove("bg-light");
    halaman[i].classList.remove("text-dark");
    halaman[i].classList.remove("border-dark");
    halaman[i].classList.add("bg-dark");
    halaman[i].classList.add("text-light");
    halaman[i].classList.add("border-light");
  }
  const icon = document.getElementsByClassName("icon");
  for (i = 0; i < icon.length; i++) {
    icon[i].classList.remove("text-dark");
    icon[i].classList.add("text-light");
  }
};
document.getElementById("tombol").onclick = function () {
  document.body.classList.add("bg-light");
  document.body.classList.add("text-dark");
  document.getElementById("tombol").classList.remove("btn-dark");
  document.getElementById("tombol").classList.add("btn-light");
  const collection = document.getElementsByClassName("isi");
  for (i = 0; i < collection.length; i++) {
    collection[i].classList.remove("bg-secondary");
    collection[i].classList.remove("text-light");
    collection[i].classList.add("bg-info");
    collection[i].classList.add("text-dark");
  }
  const colection = document.getElementsByClassName("data");
  for (i = 0; i < colection.length; i++) {
    colection[i].classList.remove("bg-dark");
    colection[i].classList.remove("text-light");
    colection[i].classList.add("bg-light");
    colection[i].classList.add("text-dark");
  }
  const halaman = document.getElementsByClassName("halaman");
  for (i = 0; i < halaman.length; i++) {
    halaman[i].classList.remove("bg-dark");
    halaman[i].classList.remove("text-light");
    halaman[i].classList.remove("border-light");
    halaman[i].classList.add("bg-light");
    halaman[i].classList.add("text-dark");
    halaman[i].classList.add("border-dark");
  }
  const icon = document.getElementsByClassName("icon");
  for (i = 0; i < icon.length; i++) {
    icon[i].classList.remove("text-light");
    icon[i].classList.add("text-dark");
  }
};
