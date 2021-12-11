$navbar = $(".navbar-customer");
$(window).scroll(function (e) {
  if ($(document).scrollTop() > 0) {
    $navbar.addClass("shadow-sm");
  } else {
    $navbar.removeClass("shadow-sm");
  }
});

function previewfile() {
  const picture = document.querySelector("#file-input");
  const pictureLabel = document.querySelector("#file-label");
  const imgPreview = document.querySelector("#file-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile2() {
  const picture = document.querySelector("#file2-input");
  const pictureLabel = document.querySelector("#file2-label");
  const imgPreview = document.querySelector("#file2-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile3() {
  const picture = document.querySelector("#file3-input");
  const pictureLabel = document.querySelector("#file3-label");
  const imgPreview = document.querySelector("#file3-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile4() {
  const picture = document.querySelector("#file4-input");
  const pictureLabel = document.querySelector("#file4-label");
  const imgPreview = document.querySelector("#file4-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile5() {
  const picture = document.querySelector("#file5-input");
  const pictureLabel = document.querySelector("#file5-label");
  const imgPreview = document.querySelector("#file5-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}



function previewfile6() {
  const picture = document.querySelector("#file6-input");
  const pictureLabel = document.querySelector("#file6-label");
  const imgPreview = document.querySelector("#file6-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile7() {
  const picture = document.querySelector("#file7-input");
  const pictureLabel = document.querySelector("#file7-label");
  const imgPreview = document.querySelector("#file7-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile8() {
  const picture = document.querySelector("#file8-input");
  const pictureLabel = document.querySelector("#file8-label");
  const imgPreview = document.querySelector("#file8-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile9() {
  const picture = document.querySelector("#file9-input");
  const pictureLabel = document.querySelector("#file9-label");
  const imgPreview = document.querySelector("#file9-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}

function previewPassword(elem, id) {
  const iconEye = elem.lastChild;
  // const elmPassword =
  //   elem.parentElement.parentElement.parentElement.firstElementChild;
  const elmPassword = document.getElementById(id);
  if (iconEye.classList.contains("fa-eye-slash")) {
    iconEye.classList.replace("fa-eye-slash", "fa-eye");
    elmPassword.setAttribute("type", "text");
  } else {
    iconEye.classList.replace("fa-eye", "fa-eye-slash");
    elmPassword.setAttribute("type", "password");
  }
}

function openDeleteModal(elem, link) {
  const id = $(elem).data("id");
  $("#valueId").attr("value", id);
  $("#formLinkDelete").attr("action", link);
}
function kategoriModal(){
      $(document).on('click', '#kategori', function (e) {
        document.getElementById("id_kategori").value = $(this).attr('data-id');
        document.getElementById("nama_kategori").value = $(this).attr('data-namakategori');

        $('#modal').modal('hide');
      }); 
      
}

function bukuModal(){
      $(document).on('click', '#buku', function (e) {
        document.getElementById("idbuku").value = $(this).attr('data-id');
        document.getElementById("judul").value = $(this).attr('data-judul');
        document.getElementById("penerbit").value = $(this).attr('data-penerbit');
        document.getElementById("tahunterbit").value = $(this).attr('data-tahunterbit');
        document.getElementById("persediaanawal").value = $(this).attr('data-persediaanawal');
        document.getElementById("bukukeluar").value = $(this).attr('data-bukukeluar');
        $('#modalbuku').modal('hide');
      }); 
      
}
function buku1Modal(){
      $(document).on('click', '#buku1', function (e) {
        document.getElementById("idbuku").value = $(this).attr('data-id');
        document.getElementById("judul").value = $(this).attr('data-judul');
        document.getElementById("penerbit").value = $(this).attr('data-penerbit');
        document.getElementById("tahunterbit").value = $(this).attr('data-tahunterbit');
        document.getElementById("bukumasuk").value = $(this).attr('data-bukumasuk');
        $('#modalbuku1').modal('hide');
      }); 
      
}
function buku2Modal(){
      $(document).on('click', '#buku2', function (e) {
        document.getElementById("idbuku").value = $(this).attr('data-id');
        document.getElementById("judul").value = $(this).attr('data-judul');
        document.getElementById("penerbit").value = $(this).attr('data-penerbit');
        document.getElementById("tahunterbit").value = $(this).attr('data-tahunterbit');
        document.getElementById("bukurusak").value = $(this).attr('data-bukurusak');
        $('#modalbuku2').modal('hide');
      }); 
      
}
function barang3Modal(){
      $(document).on('click', '#buku3', function (e) {
        document.getElementById("idbuku").value = $(this).attr('data-id');
        document.getElementById("judul").value = $(this).attr('data-judul');
        document.getElementById("penerbit").value = $(this).attr('data-penerbit');
        document.getElementById("tahunterbit").value = $(this).attr('data-tahunterbit');
        document.getElementById("bukuhilang").value = $(this).attr('data-bukuhilang');
        $('#modalbuku3').modal('hide');
      }); 
      
}
function anggotaModal(){
      $(document).on('click', '#anggota', function (e) {
        document.getElementById("idanggota").value = $(this).attr('data-id');
        document.getElementById("namaanggota").value = $(this).attr('data-nama');
        document.getElementById("jeniskelamin").value = $(this).attr('data-jeniskelamin');
        document.getElementById("kelas").value = $(this).attr('data-kelas');

        $('#modalanggota').modal('hide');
      }); 
      
}