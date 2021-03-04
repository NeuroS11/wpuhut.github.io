function showAllMenu() {
    $.getJSON('pizza.json', function (data) {
        let menu = data.menu;
        $.each(menu, function (i, data) {
            $('#all-menu').append('<div class="col-md-4 text-center"><div class="card mb-3"><img src="img/pizza/' + data.gambar + '" class="card-img-top" alt="..."><div class="card-body"><h3 class="card-title">' + data.nama +'</h3><p class="card-text">' + data.deskripsi +'</p><h4 class="card-title">Rp. ' + data.harga + '</h4><a href="#" class="btn btn-primary">Order Now!</a></div></div></div>');
        });
    });  
};

showAllMenu();

$('.nav-link').on('click', function(){
    $('.nav-link').removeClass('active');
    $(this).addClass('active');

    let kategori = $(this).html();
    $('h1').html(kategori); 

    if(kategori == 'All Menu'){
        showAllMenu();
        return;
    };

    $.getJSON('pizza.json', function (data) {
        let menu = data.menu;
        let content = '';

        $.each(menu, function(i,data) {
            if(data.kategori == kategori.toLowerCase()){
                content += '<div class="col-md-4 text-center"><div class="card mb-3"><img src="img/pizza/' + data.gambar + '" class="card-img-top" alt="..."><div class="card-body"><h3 class="card-title">' + data.nama +'</h3><p class="card-text">' + data.deskripsi +'</p><h4 class="card-title">Rp. ' + data.harga + '</h4><a href="#" class="btn btn-primary">Order Now!</a></div></div></div>';
            }
        });
        $('#all-menu').html(content);
    });

});