$(function() {

        $('.request').change(function (e) {
            e.preventDefault();
            $.ajax({
                url: ajaxApiUrl,
                method: "GET",
                data: {
                    categorie: $("#categorie").val(),
                    type: $("#type").val(),
                    couleur: $("#couleur").val(),
                    taille: $("#taille").val(),
                    sexe: $("#sexe").val(),
                    prix: $("#prix").val(),
                    tissu: $("#tissu").val(),
                    range: $("#range").val(),
                    nombre: $('#nombre').val()
                }
            })

                .done(function (data) {
                    console.log(data);
                    $('.display').html(data);
                })

        });

    $('.ajout_panier').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: ajaxApiUrlPanier,
            method: "POST",
            data: {
                id: $(".title h1").attr('id')
            }
        })

            .done(function (data) {
                console.log('ok');

            })

    });

})

/********STOCKAGE INFORMATIONS DANS BALISE HIDDEN************/

$('.select_img').click(function(){
    var id = $(this).data('id');
    console.log(id);
    $('#custom_product').val(id);
});













/*
            var content = '';

            for(var i=0; i<(data.length/3); i++) {

                //console.log(i);
                content += '<div class="row">';

                for(var j=0; j<3; j++) {

                    if(data[produitId] != undefined) {

						content += '<div class="col-sm-4 chemise">';
						content +=	'<img src="http://localhost/test/img/'+ data[produitId].photo +'" alt="chemise">';
						content +=	'<hr>';
						content +=	'<div class="desc">';
						content +=	'<p class="title">'+ data[produitId].titre +'</p>';
						content +=	'<p class="price">'+ data[produitId].prix +'</p>';
						content +=	'</div>';
						content +=	'<hr>';
						content +=	'<p>'+ data[produitId].description +'</p>';
						content +=	'</div>';

						produitId ++;

                    }

                }

                content += '</div>';
            }
            $('.display').html(content);
*/
            //console.log(content);


































    	
    	











    
  //   $('.request').change(function() {
    	
  //   	var request = $.ajax({
		//   url: "http://localhost/test/api.php",
		//   method: "GET",
		//   data: {categorie: $("#categorie").val(),
		//   		 type: $("#type").val(),
		//   		 couleur: $("#couleur").val(),
		//   		 taille: $("#taille").val(),
		//   		 sexe: $("#sexe").val(),
		//   		 prix: $("#prix").val(),
		//   		 range: $("#range").val()
		// 	},
		// dataType: "json"

		// })

		// .done(function(data){
				








		// 	});

  //   });





});